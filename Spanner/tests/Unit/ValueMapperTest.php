<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Spanner\Tests\Unit;

use DateInterval;
use Google\Cloud\Core\Int64;
use Google\Cloud\Core\Testing\GrpcTestTrait;
use Google\Cloud\Spanner\ArrayType;
use Google\Cloud\Spanner\Bytes;
use Google\Cloud\Spanner\Database;
use Google\Cloud\Spanner\Date;
use Google\Cloud\Spanner\Interval;
use Google\Cloud\Spanner\Numeric;
use Google\Cloud\Spanner\PgNumeric;
use Google\Cloud\Spanner\Proto;
use Google\Cloud\Spanner\Result;
use Google\Cloud\Spanner\StructType;
use Google\Cloud\Spanner\StructValue;
use Google\Cloud\Spanner\Timestamp;
use Google\Cloud\Spanner\ValueMapper;
use Google\Cloud\Spanner\V1\TypeAnnotationCode;
use Google\Cloud\Spanner\V1\TypeCode;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Testing\Data\Book;
use Testing\Data\User;
use RuntimeException;

/**
 * @group spanner
 * @group spanner-valuemapper
 */
class ValueMapperTest extends TestCase
{
    use GrpcTestTrait;

    const FORMAT_TEST_VALUE = 'abc';

    private $mapper;

    public function setUp(): void
    {
        $this->checkAndSkipGrpcTests();
        $this->mapper = new ValueMapper(false);
    }

    /**
     * @dataProvider simpleTypes
     */
    public function testFormatParamsForExecuteSqlSimpleTypes($value, $type)
    {
        $res = $this->mapper->formatParamsForExecuteSql(['param' => $value]);

        $this->assertEquals(['param' => $value], $res['params']);
        $this->assertEquals($type, $res['paramTypes']['param']['code']);
    }

    public function simpleTypes()
    {
        return [
            [1, Database::TYPE_INT64],
            ['john', Database::TYPE_STRING],
            [3.1415, Database::TYPE_FLOAT64],
            [false, Database::TYPE_BOOL]
        ];
    }

    public function testFormatParamsForExecuteSqlResource()
    {
        $c = 'hello world';

        $resource = fopen('php://temp', 'r+');
        fwrite($resource, $c);
        rewind($resource);

        $params = [
            'resource' => $resource
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);

        $this->assertEquals($c, base64_decode($res['params']['resource']));
        $this->assertEquals(Database::TYPE_BYTES, $res['paramTypes']['resource']['code']);
    }

    public function testFormatParamsForExecuteSqlArray()
    {
        $params = [
            'array' => ['foo', 'bar']
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);

        $this->assertEquals('foo', $res['params']['array'][0]);
        $this->assertEquals('bar', $res['params']['array'][1]);
        $this->assertEquals(Database::TYPE_ARRAY, $res['paramTypes']['array']['code']);
        $this->assertEquals(Database::TYPE_STRING, $res['paramTypes']['array']['arrayElementType']['code']);
    }

    public function testFormatParamsForExecuteSqlInvalidTypes()
    {
        $this->expectException('InvalidArgumentException');

        $this->mapper->formatParamsForExecuteSql(['array' => ['foo', 3.1515]]);
    }

    public function testFormatParamsForExecuteSqlInt64()
    {
        $val = '1234';
        $params = [
            'int' => new Int64($val)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);

        $this->assertEquals($val, $res['params']['int']);
        $this->assertEquals(Database::TYPE_INT64, $res['paramTypes']['int']['code']);
    }

    public function testFormatParamsForExecuteSqlJson()
    {
        $val = '{\"rating\":9,\"open\":true}';
        $params = [
            'json' => $val
        ];
        $types = [
            'json' => Database::TYPE_JSON
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals($val, $res['params']['json']);
        $this->assertEquals(Database::TYPE_JSON, $res['paramTypes']['json']['code']);
    }

    public function testFormatParamsForExecuteSqlJsonB()
    {
        $val = '{\"rating\":9,\"open\":true}';
        $params = [
            'json' => $val
        ];
        $types = [
            'json' => Database::TYPE_PG_JSONB
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals($val, $res['params']['json']);
        $this->assertEquals(TypeCode::JSON, $res['paramTypes']['json']['code']);
        $this->assertEquals(TypeAnnotationCode::PG_JSONB, $res['paramTypes']['json']['typeAnnotation']);
    }

    public function testFormatParamsForExecuteSqlOid()
    {
        $val = '123';
        $params = [
            'oid' => $val
        ];
        $types = [
            'oid' => Database::TYPE_PG_OID
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals($val, $res['params']['oid']);
        $this->assertEquals(TypeCode::INT64, $res['paramTypes']['oid']['code']);
        $this->assertEquals(TypeAnnotationCode::PG_OID, $res['paramTypes']['oid']['typeAnnotation']);
    }

    public function testFormatParamsForExecuteSqlValueInterface()
    {
        $val = 'hello world';
        $params = [
            'bytes' => new Bytes($val)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);
        $this->assertEquals($val, base64_decode($res['params']['bytes']));
        $this->assertEquals(Database::TYPE_BYTES, $res['paramTypes']['bytes']['code']);
    }

    public function testFormatParamsForExecuteSqlInvalidObjectType()
    {
        $this->expectException('InvalidArgumentException');

        $params = [
            'bad' => $this
        ];

        $this->mapper->formatParamsForExecuteSql($params);
    }

    public function testFormatParamsForExecuteSqlNullValueMissingType()
    {
        $this->expectException('BadMethodCallException');

        $params = [
            'null' => null
        ];

        $this->mapper->formatParamsForExecuteSql($params);
    }

    /**
     * @dataProvider arrayTypes
     */
    public function testFormatParamsForExecuteSqlArrayType($type)
    {
        $params = [
            'foo' => ['bar', 'str', null]
        ];

        $types = [
            'foo' => $type
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);
        $this->assertEquals($params, $res['params']);
        $this->assertEquals([
            'code' => Database::TYPE_ARRAY,
            'arrayElementType' => [
                'code' => Database::TYPE_STRING
            ]
        ], $res['paramTypes']['foo']);
    }

    public function arrayTypes()
    {
        return [
            [[Database::TYPE_ARRAY, Database::TYPE_STRING]],
            [new ArrayType(Database::TYPE_STRING)]
        ];
    }

    public function testFormatParamsForExecuteSqlArrayTypeNestedStruct()
    {
        $params = [
            'foo' => [
                [
                    'hello' => 'bar'
                ], [
                    'hello' => 'baz'
                ]
            ]
        ];

        $types = [
            'foo' => new ArrayType((new StructType)->add('hello', Database::TYPE_STRING))
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);
        $this->assertEquals([
            'foo' => [
                ['bar'],
                ['baz']
            ]
        ], $res['params']);

        $this->assertEquals([
            'foo' => [
                'code' => Database::TYPE_ARRAY,
                'arrayElementType' => [
                    'code' => Database::TYPE_STRUCT,
                    'structType' => [
                        'fields' => [
                            [
                                'name' => 'hello',
                                'type' => [
                                    'code' => Database::TYPE_STRING
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ], $res['paramTypes']);
    }

    /**
     * @dataProvider provideProtoType
     */
    public function testFormatParamsForExecuteSqlForProtoTypes(
        Proto|User|array $param,
        array|string $value,
        $type = null
    ) {
        $res = $this->mapper->formatParamsForExecuteSql(['foo' => $param], ['foo' => $type]);
        $this->assertEquals(['foo' => $value], $res['params']);

        if (is_array($param)) {
            $this->assertEquals(Database::TYPE_ARRAY, $res['paramTypes']['foo']['code']);
            $this->assertEquals(Database::TYPE_PROTO, $res['paramTypes']['foo']['arrayElementType']['code']);
            $this->assertEquals('testing.data.User', $res['paramTypes']['foo']['arrayElementType']['protoTypeFqn']);
        } else {
            $this->assertEquals(Database::TYPE_PROTO, $res['paramTypes']['foo']['code']);
            $this->assertEquals('testing.data.User', $res['paramTypes']['foo']['protoTypeFqn']);
        }
    }

    public function provideProtoType()
    {
        $protoTypeFqn = 'testing.data.User';
        $user1 = new User(['name' => 'John']);
        $user2 = new User(['name' => 'Jane']);
        $proto1 = new Proto(base64_encode($user1->serializeToString()), $protoTypeFqn);
        $proto2 = new Proto(base64_encode($user2->serializeToString()), $protoTypeFqn);
        $value1 = $proto1->getValue();
        $value2 = [$proto1->getValue(), $proto2->getValue()];
        return [
            // raw proto
            [$user1, $value1],
            // Proto object
            [$proto1, $value1],
            // array of raw protos
            [[$user1, $user2], $value2],
            // array of proto objects
            [[$proto1, $proto2], $value2],
            // array of raw protos with type
            [[$user1, $user2], $value2, new ArrayType(Database::TYPE_PROTO)],
            // array of proto objects with type
            [[$proto1, $proto2], $value2, new ArrayType(Database::TYPE_PROTO)],
        ];
    }

    public function testFormatParamsForExecuteSqlNullArray()
    {
        $params = [
            'foo' => null
        ];

        $types = [
            'foo' => new ArrayType(Database::TYPE_STRING)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertNull($res['params']['foo']);

        $this->assertEquals([
            'foo' => [
                'code' => Database::TYPE_ARRAY,
                'arrayElementType' => [
                    'code' => Database::TYPE_STRING
                ]
            ]
        ], $res['paramTypes']);
    }

    public function testFormatParamsForExecuteSqlArrayMismatchedDefinition()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Array data does not match given array parameter type.');

        $params = [
            'foo' => [1,2,3]
        ];

        $types = [
            'foo' => new ArrayType(Database::TYPE_STRING)
        ];

        $this->mapper->formatParamsForExecuteSql($params, $types);
    }

    public function testFormatParamsForExecuteSqlArrayForCustomTypes()
    {
        $params = [
            'foo' => [1,2,3]
        ];

        $types = [
            'foo' => new ArrayType(Database::TYPE_PG_NUMERIC)
        ];

        // no exception should be thrown as for a pgNumeric value
        // we wrap the value in numeric strings, so,
        // 1, 1.0, '1' are all supported
        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals([
            'foo' => [
                'code' => Database::TYPE_ARRAY,
                'arrayElementType' => [
                    'code' => Database::TYPE_NUMERIC,
                    'typeAnnotation' => TypeAnnotationCode::PG_NUMERIC
                ]
            ]
        ], $res['paramTypes']);
    }

    public function testFormatParamsForExecuteSqlArrayInvalidDefinition()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Array parameter types must be an instance of Google\Cloud\Spanner\ArrayType.');

        $params = [
            'foo' => ['bar']
        ];

        $types = [
            'foo' => Database::TYPE_ARRAY
        ];

        $this->mapper->formatParamsForExecuteSql($params, $types);
    }

    public function testFormatParamsForExecuteSqlArrayInvalidValue()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Array value must be an array or null.');

        $params = [
            'foo' => 'hello'
        ];

        $types = [
            'foo' => new ArrayType(Database::TYPE_STRING)
        ];

        $this->mapper->formatParamsForExecuteSql($params, $types);
    }

    public function testFormatParamsForExecuteSqlStruct()
    {
        $params = [
            'foo' => [
                'name' => 'steve',
                'age' => 39,
                'jobs' => [
                    'programmer',
                    'renaissance man'
                ]
            ]
        ];

        $types = [
            'foo' => (new StructType)
                ->add('name', Database::TYPE_STRING)
                ->add('age', Database::TYPE_INT64)
                ->add('jobs', new ArrayType(Database::TYPE_STRING))
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);
        $this->assertEquals([
            'foo' => [
                'steve',
                39,
                [
                    'programmer',
                    'renaissance man'
                ]
            ]
        ], $res['params']);

        $this->assertEquals([
            'foo' => [
                'code' => Database::TYPE_STRUCT,
                'structType' => [
                    'fields' => [
                        [
                            'name' => 'name',
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ]
                        ], [
                            'name' => 'age',
                            'type' => [
                                'code' => Database::TYPE_INT64
                            ]
                        ], [
                            'name' => 'jobs',
                            'type' => [
                                'code' => Database::TYPE_ARRAY,
                                'arrayElementType' => [
                                    'code' => Database::TYPE_STRING
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ], $res['paramTypes']);
    }

    /**
     * @dataProvider provideStructWithMessage
     */
    public function testFormatParamsForExecuteSqlStructWithMessage(User|Proto $user, array $books)
    {
        $params = [
            'foo' => [
                'id' => 1,
                'user' => $user,
                'books' => $books
            ]
        ];

        $types = [
            'foo' => (new StructType())
                ->add('id', Database::TYPE_STRING)
                ->add('user', Database::TYPE_PROTO)
                ->add('books', new ArrayType(Database::TYPE_PROTO))
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $params = $res['paramTypes']['foo'];
        $userParam = $params['structType']['fields'][1]['type'];
        $booksParam = $params['structType']['fields'][2]['type'];

        $this->assertEquals(Database::TYPE_PROTO, $userParam['code']);
        $this->assertEquals('testing.data.User', $userParam['protoTypeFqn']);

        $this->assertEquals(Database::TYPE_ARRAY, $booksParam['code']);
        $this->assertEquals(Database::TYPE_PROTO, $booksParam['arrayElementType']['code']);
        $this->assertEquals('testing.data.Book', $booksParam['arrayElementType']['protoTypeFqn']);
    }

    public function provideStructWithMessage()
    {
        $user = new User(['name' => 'John']);
        $book1 = new Book(['title' => 'Book 1']);
        $book2 = new Book(['title' => 'Book 2']);

        return [
            // As raw protos
            [$user, [$book1, $book2]],
            // As Proto objects
            [
                new Proto(base64_encode($user->serializeToString()), 'testing.data.User'),
                [
                    new Proto(base64_encode($book1->serializeToString()), 'testing.data.Book'),
                    new Proto(base64_encode($book2->serializeToString()), 'testing.data.Book'),
                ]
            ]
        ];
    }

    /**
     * @codingStandardsIgnoreStart
     * @codingStandardsIgnoreEnd
     */
    public function testFormatParamsForExecuteSqlStructInvalidDefinition()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage(
            'Struct parameter types must be declared explicitly, and must be an '
            . 'instance of Google\Cloud\Spanner\StructType.'
        );
        $params = [
            'foo' => [
                'hello' => 'world'
            ]
        ];

        $types = [
            'foo' => Database::TYPE_STRUCT
        ];

        $this->mapper->formatParamsForExecuteSql($params, $types);
    }

    /**
     * @codingStandardsIgnoreStart
     * @codingStandardsIgnoreEnd
     */
    public function testFormatParamsForExecuteSqlInvalidStructValue()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage(
            'Struct value must be an array an instance of `Google\Cloud\Spanner\StructValue` or null.'
        );

        $params = [
            'foo' => 'bar'
        ];

        $types = [
            'foo' => new StructType
        ];

        $this->mapper->formatParamsForExecuteSql($params, $types);
    }

    public function testFormatParamsForExecuteSqlStructDuplicateFieldNames()
    {
        $params = [
            'foo' => (new StructValue)
                ->add('hello', 'world')
                ->add('hello', 10)
                ->add('hello', 'goodbye')
        ];

        $types = [
            'foo' => (new StructType)
                ->add('hello', Database::TYPE_STRING)
                ->add('hello', Database::TYPE_INT64)
                ->add('hello', Database::TYPE_STRING)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);
        $this->assertEquals([
            'foo' => [
                'world', 10, 'goodbye'
            ]
        ], $res['params']);

        $this->assertEquals([
            'foo' => [
                'code' => Database::TYPE_STRUCT,
                'structType' => [
                    'fields' => [
                        [
                            'name' => 'hello',
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ]
                        ], [
                            'name' => 'hello',
                            'type' => [
                                'code' => Database::TYPE_INT64
                            ]
                        ], [
                            'name' => 'hello',
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ]
                        ]
                    ]
                ]
            ]
        ], $res['paramTypes']);
    }

    public function testFormatParamsForExecuteSqlStructUnnamedFields()
    {
        $params = [
            'foo' => (new StructValue)
                ->addUnnamed('hello')
                ->addUnnamed(10)
                ->add('key', 'val')
                ->addUnnamed('goodbye')
        ];

        $types = [
            'foo' => (new StructType)
                ->add(null, Database::TYPE_STRING)
                ->addUnnamed(Database::TYPE_INT64)
                ->add('key', Database::TYPE_STRING)
                ->addUnnamed(Database::TYPE_STRING)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals([
            'foo' => [
                'hello', 10, 'val', 'goodbye'
            ]
        ], $res['params']);

        $this->assertEquals([
            'foo' => [
                'code' => Database::TYPE_STRUCT,
                'structType' => [
                    'fields' => [
                        [
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ]
                        ], [
                            'type' => [
                                'code' => Database::TYPE_INT64
                            ]
                        ], [
                            'name' => 'key',
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ]
                        ], [
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ]
                        ]
                    ]
                ]
            ]
        ], $res['paramTypes']);
    }

    public function testFormatParamsForExecuteSqlInferredStructValueType()
    {
        $params = [
            'foo' => [
                'hello' => 'world',
                'foo' => 'bar',
                'num' => 10,
                'arr' => ['a', 'b']
            ]
        ];

        $types = [
            'foo' => (new StructType)
                ->add('hello', Database::TYPE_STRING)
                ->add('num', Database::TYPE_INT64)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals([
            'world', 'bar', 10, ['a', 'b']
        ], $res['params']['foo']);

        $this->assertEquals([
            [
                'name' => 'hello',
                'type' => ['code' => Database::TYPE_STRING]
            ], [
                'name' => 'foo',
                'type' => ['code' => Database::TYPE_STRING]
            ], [
                'name' => 'num',
                'type' => ['code' => Database::TYPE_INT64]
            ], [
                'name' => 'arr',
                'type' => [
                    'code' => Database::TYPE_ARRAY,
                    'arrayElementType' => [
                        'code' => Database::TYPE_STRING
                    ]
                ]
            ]
        ], $res['paramTypes']['foo']['structType']['fields']);
    }

    public function testFormatParamsForExecuteSqlInferredStructValueTypeWithUnnamed()
    {
        $params = [
            'foo' => (new StructValue)
                ->add('hello', 'world')
                ->addUnnamed('foo')
                ->add('num', 10)
        ];

        $types = [
            'foo' => (new StructType)
                ->add('hello', Database::TYPE_STRING)
                ->add('num', Database::TYPE_INT64)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals([
            'world', 'foo', 10
        ], $res['params']['foo']);

        $this->assertEquals([
            [
                'name' => 'hello',
                'type' => ['code' => Database::TYPE_STRING]
            ], [
                'type' => ['code' => Database::TYPE_STRING]
            ], [
                'name' => 'num',
                'type' => ['code' => Database::TYPE_INT64]
            ]
        ], $res['paramTypes']['foo']['structType']['fields']);
    }

    public function testFormatParamsForExecuteSqlStdClassValue()
    {
        $params = [
            'foo' => (object) [
                'hello' => 'world'
            ]
        ];

        $types = [
            'foo' => (new StructType)
                ->add('hello', Database::TYPE_STRING)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params, $types);

        $this->assertEquals([
            'foo' => ['world']
        ], $res['params']);

        $this->assertEquals([
            'foo' => [
                'code' => Database::TYPE_STRUCT,
                'structType' => [
                    'fields' => [
                        [
                            'name' => 'hello',
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ]
                        ]
                    ]
                ]
            ]
        ], $res['paramTypes']);
    }

    public function testFormatParamsForExecuteSqlStdClassMissingDefinition()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage(
            'Values of type `\stdClass` are interpreted as structs and must define their types.'
        );

        $this->mapper->formatParamsForExecuteSql([
            'foo' => (object) ['foo' => 'bar']
        ]);
    }

    /**
     * @dataProvider simpleTypeValues
     */
    public function testEncodeValuesAsSimpleType($value, $expected = null)
    {
        if ($expected === null) {
            $expected = $value;
        }

        $res = $this->mapper->encodeValuesAsSimpleType([$value]);
        $this->assertEquals($expected, $res[0]);
    }

    public function simpleTypeValues()
    {
        $dt = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));
        $timestamp = new Timestamp($dt);

        return [
            [true],
            [55555, '55555'],
            [new Int64('55555'), '55555'],
            [3.1415],
            [NAN, 'NaN'],
            [INF, 'Infinity'],
            [-INF, '-Infinity'],
            [$timestamp, $dt->format(Timestamp::FORMAT)],
            [new Date($dt), $dt->format(Date::FORMAT)],
            ['foo'],
            [new Bytes('hello world'), base64_encode('hello world')],
            [new Proto('hello world', 'foo'), 'hello world'],
            [['foo', 'bar']],
            ['{\"rating\":9,\"open\":true}']
        ];
    }

    public function testDecodeValuesThrowsExceptionWithInvalidFormat()
    {
        $this->expectException('\InvalidArgumentException');

        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_STRING),
            $this->createRow(self::FORMAT_TEST_VALUE),
            'Not a real format'
        );
    }

    /**
     * @dataProvider formatProvider
     */
    public function testDecodeValuesReturnsVariedFormats($expectedOutput, $format)
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_STRING),
            $this->createRow(self::FORMAT_TEST_VALUE),
            $format
        );

        $this->assertEquals($expectedOutput, $res);
    }

    public function formatProvider()
    {
        return [
            [
                ['rowName' => self::FORMAT_TEST_VALUE],
                Result::RETURN_ASSOCIATIVE
            ],
            [
                [
                    [
                        'name' => 'rowName',
                        'value' => self::FORMAT_TEST_VALUE
                    ]
                ],
                Result::RETURN_NAME_VALUE_PAIR
            ],
            [
                [
                    0 => self::FORMAT_TEST_VALUE
                ],
                Result::RETURN_ZERO_INDEXED
            ],
        ];
    }

    public function testDecodeValuesBool()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_BOOL),
            $this->createRow(false),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertFalse($res['rowName']);
    }

    public function testDecodeValuesInt()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_INT64),
            $this->createRow('555'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertEquals(555, $res['rowName']);
    }

    public function testDecodeValuesInt64Object()
    {
        $mapper = new ValueMapper(true);
        $res = $mapper->decodeValues(
            $this->createField(Database::TYPE_INT64),
            $this->createRow('555'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertInstanceOf(Int64::class, $res['rowName']);
        $this->assertEquals('555', $res['rowName']->get());
    }

    /**
     * @dataProvider provideFloatTypes
     */
    public function testDecodeValuesFloat($type)
    {
        $res = $this->mapper->decodeValues(
            $this->createField($type),
            $this->createRow(3.1415),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertEquals(3.1415, $res['rowName']);
    }

    /**
     * @dataProvider provideFloatTypes
     */
    public function testDecodeValuesFloatNaN($type)
    {
        $res = $this->mapper->decodeValues(
            $this->createField($type),
            $this->createRow('NaN'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertTrue(is_nan($res['rowName']));
    }

    /**
     * @dataProvider provideFloatTypes
     */
    public function testDecodeValuesFloatInfinity($type)
    {
        $res = $this->mapper->decodeValues(
            $this->createField($type),
            $this->createRow('Infinity'),
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertTrue(is_infinite($res['rowName']));
        $this->assertGreaterThan(0, $res['rowName']);
    }

    /**
     * @dataProvider provideFloatTypes
     */
    public function testDecodeValuesFloatNegativeInfinity($type)
    {
        $res = $this->mapper->decodeValues(
            $this->createField($type),
            $this->createRow('-Infinity'),
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertTrue(is_infinite($res['rowName']));
        $this->assertLessThan(0, $res['rowName']);
    }

    /**
     * @dataProvider provideFloatTypes
     */
    public function testDecodeValuesFloatError($type)
    {
        $this->expectException('RuntimeException');

        $res = $this->mapper->decodeValues(
            $this->createField($type),
            $this->createRow('foo'),
            Result::RETURN_ASSOCIATIVE
        );
    }

    public function testDecodeValuesString()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_STRING),
            $this->createRow('foo'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertEquals('foo', $res['rowName']);
    }

    public function testDecodeValuesTimestamp()
    {
        $dt = new \DateTime;
        $str = $dt->format(Timestamp::FORMAT);

        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_TIMESTAMP),
            $this->createRow($str),
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertInstanceOf(Timestamp::class, $res['rowName']);
        $this->assertEquals($str, $res['rowName']->formatAsString());
    }

    public function testDecodeValuesDate()
    {
        $dt = new \DateTime;
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_DATE),
            $this->createRow($dt->format(Date::FORMAT)),
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertInstanceOf(Date::class, $res['rowName']);
        $this->assertEquals($dt->format(Date::FORMAT), $res['rowName']->formatAsString());
    }

    public function testDecodeValuesBytes()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_BYTES),
            $this->createRow(base64_encode('hello world')),
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertInstanceOf(Bytes::class, $res['rowName']);
        $this->assertEquals('hello world', $res['rowName']->get());
    }

    public function testDecodeValuesArray()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_ARRAY, null, 'arrayElementType', [
                'code' => Database::TYPE_STRING
            ]),
            $this->createRow(['foo', 'bar']),
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertEquals('foo', $res['rowName'][0]);
        $this->assertEquals('bar', $res['rowName'][1]);
    }

    public function testDecodeValuesStruct()
    {
        $field = [
            'name' => 'structTest',
            'type' => [
                'code' => Database::TYPE_ARRAY,
                'arrayElementType' => [
                    'code' => Database::TYPE_STRUCT,
                    'structType' => [
                        'fields' => [
                            [
                                'name' => 'rowName',
                                'type' => [
                                    'code' => Database::TYPE_STRING
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $row = [
            [
                'Hello World'
            ]
        ];

        $res = $this->mapper->decodeValues(
            [$field],
            [$row],
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertEquals('Hello World', $res['structTest'][0]['rowName']);
    }

    public function testDecodeValuesNumeric()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_NUMERIC),
            $this->createRow('99999999999999999999999999999.999999999'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertInstanceOf(Numeric::class, $res['rowName']);
        $this->assertEquals('99999999999999999999999999999.999999999', $res['rowName']->formatAsString());
    }

    public function testDecodeValuesPgNumeric()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_NUMERIC, TypeAnnotationCode::PG_NUMERIC),
            $this->createRow('99999999999999999999999999999.0000999999999'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertInstanceOf(PgNumeric::class, $res['rowName']);
        $this->assertEquals('99999999999999999999999999999.0000999999999', $res['rowName']->formatAsString());
    }

    public function testDecodeValuesJson()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_JSON),
            $this->createRow('{\"rating\":9,\"open\":true}'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertEquals('{\"rating\":9,\"open\":true}', $res['rowName']);
    }

    public function testDecodeValuesJsonB()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_PG_JSONB),
            $this->createRow('{\"rating\":9,\"open\":true}'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertEquals('{\"rating\":9,\"open\":true}', $res['rowName']);
    }

    public function testDecodeValuesOid()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_PG_OID),
            $this->createRow('123'),
            Result::RETURN_ASSOCIATIVE
        );
        $this->assertEquals('123', $res['rowName']);
    }

    public function testDecodeValuesAnonymousField()
    {
        $fields = [
            [
                'name' => 'ID',
                'type' => [
                    'code' => Database::TYPE_INT64,
                ]
            ], [
                'type' => [
                    'code' => Database::TYPE_STRING
                ]
            ]
        ];

        $row = ['1337', 'John'];

        $res = $this->mapper->decodeValues($fields, $row, Result::RETURN_ASSOCIATIVE);

        $this->assertEquals('1337', $res['ID']);
        $this->assertEquals('John', $res[1]);
    }

    public function testDecodeValuesProto()
    {
        $user = new User(['name' => 'John']);
        $protoTypeFqn = 'testing.data.User';
        $userData = base64_encode($user->serializeToString());
        $res = $this->mapper->decodeValues(
            [[
                'name' => 'rowName',
                'type' => ['code' => Database::TYPE_PROTO, 'protoTypeFqn' => $protoTypeFqn]
            ]],
            [$userData],
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertInstanceOf(Proto::class, $res['rowName']);
        $this->assertEquals($user, $res['rowName']->get());
        $this->assertEquals($protoTypeFqn, $res['rowName']->getProtoTypeFqn());
        $this->assertEquals($userData, $res['rowName']->getValue());
    }

    public function testDecodeValuesProtoArray()
    {
        $user = new User(['name' => 'John']);
        $protoTypeFqn = 'testing.data.User';
        $userData = base64_encode($user->serializeToString());
        $res = $this->mapper->decodeValues(
            [[
                'name' => 'rowName',
                'type' => [
                    'code' => Database::TYPE_ARRAY,
                    'arrayElementType' => [
                        'code' => Database::TYPE_PROTO,
                        'protoTypeFqn' => $protoTypeFqn
                    ]
                ]
            ]],
            [[$userData]],
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertIsArray($res['rowName']);
        $this->assertEquals($user, $res['rowName'][0]->get());
        $this->assertEquals($protoTypeFqn, $res['rowName'][0]->getProtoTypeFqn());
        $this->assertEquals($userData, $res['rowName'][0]->getValue());
    }

    public function testDecodeValuesProtoStruct()
    {
        $field = [
            'name' => 'structTest',
            'type' => [
                'code' => Database::TYPE_STRUCT,
                'structType' => [
                    'fields' => [
                        [
                            'name' => 'id',
                            'type' => [
                                'code' => Database::TYPE_STRING
                            ],
                        ], [
                            'name' => 'user',
                            'type' => [
                                'code' => Database::TYPE_PROTO,
                                'protoTypeFqn' => 'testing.data.User'
                            ]
                        ], [
                            'name' => 'books',
                            'type' => [
                                'code' => Database::TYPE_ARRAY,
                                'arrayElementType' => [
                                    'code' => Database::TYPE_PROTO,
                                    'protoTypeFqn' => 'testing.data.Book'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $user = new User(['name' => 'John']);
        $book1 = new Book(['title' => 'Book 1']);
        $book2 = new Book(['title' => 'Book 2']);

        $row = [
            1,
            base64_encode($user->serializeToString()),
            [
                base64_encode($book1->serializeToString()),
                base64_encode($book2->serializeToString())
            ]
        ];

        $res = $this->mapper->decodeValues(
            [$field],
            [$row],
            Result::RETURN_ASSOCIATIVE
        );

        $this->assertIsArray($res['structTest']);
        $this->assertEquals($user, $res['structTest']['user']->get());
        $this->assertEquals('testing.data.User', $res['structTest']['user']->getProtoTypeFqn());
        $this->assertIsArray($res['structTest']['books']);
        $this->assertEquals($book1, $res['structTest']['books'][0]->get());
        $this->assertEquals($book2, $res['structTest']['books'][1]->get());
    }

    public function testDecodeIntervalField()
    {
        $interval = 'P1Y2M3DT4H5M6S';

        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_INTERVAL),
            $this->createRow($interval),
            Result::RETURN_ASSOCIATIVE
        );

        $expectedValue = Interval::parse($interval);
        $this->assertEquals($expectedValue, $res['rowName']);
    }

    public function testDecodeIntervalWithFractionField()
    {
        $interval = 'P1Y2M3DT4H5M6.5S';

        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_INTERVAL),
            $this->createRow($interval),
            Result::RETURN_ASSOCIATIVE
        );

        $expectedValue = Interval::parse($interval);

        $this->assertEquals($res['rowName'], $expectedValue);
        $this->assertEquals($res['rowName']->__toString(), $interval);
    }

    /** @dataProvider invalidIntervals */
    public function testIntervalWithInvalidFormatThrowsException(string $interval)
    {
        $this->expectException(InvalidArgumentException::class);

        $res = $this->mapper->decodeValues(
            $this->createField(Database::TYPE_INTERVAL),
            $this->createRow($interval),
            Result::RETURN_ASSOCIATIVE
        );
    }

    public function invalidIntervals()
    {
        $intervals = [
            ['P1.5Y2M3DT4H5M6S'],
            ['P1Y2.5M3DT4H5M6S'],
            ['P1Y2M3.5DT4H5M6S'],
            ['P1Y2M3DT4.5H5M6S'],
            ['P1Y2M3DT4H5.5M6S'],
            ['P1Y2M3DT4H5M6.5.5S'],
            ['P1Y2M3DT4H5.5M6.5S'],
            ['P1.5Y2.5M3.5DT4.5H5.5M6.5S'],
        ];

        return $intervals;
    }

    private function createField($code, $typeAnnotationCode = null, $type = null, array $typeObj = [])
    {
        return [[
            'name' => 'rowName',
            'type' => array_filter([
                'code' => $code,
                'typeAnnotation' => $typeAnnotationCode,
                $type => $typeObj
            ])
        ]];
    }

    private function createRow($val)
    {
        return [$val];
    }

    public function provideFloatTypes()
    {
        return [
            [Database::TYPE_FLOAT64],
            [Database::TYPE_FLOAT32]
        ];
    }
}
