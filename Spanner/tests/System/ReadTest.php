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

namespace Google\Cloud\Spanner\Tests\System;

use Google\Cloud\Core\Exception\ConflictException;
use Google\Cloud\Core\Exception\DeadlineExceededException;
use Google\Cloud\Core\Exception\NotFoundException;
use Google\Cloud\Spanner\KeyRange;
use Google\Cloud\Spanner\KeySet;
use Google\Cloud\Spanner\V1\ReadRequest\OrderBy;

/**
 * @group spanner
 * @group spanner-read
 */
class ReadTest extends SpannerTestCase
{
    private static $readTableName;
    private static $rangeTableName;
    private static $indexes = [];
    private static $dataset;

    /**
     * @beforeClass
     */
    public static function setUpTestFixtures(): void
    {
        parent::setUpTestFixtures();

        self::$readTableName = uniqid(self::TESTING_PREFIX);
        self::$rangeTableName = uniqid(self::TESTING_PREFIX);

        $create = 'CREATE TABLE %s (
            id INT64 NOT NULL,
            val STRING(MAX) NOT NULL,
        ) PRIMARY KEY (id)';

        $idx = 'CREATE UNIQUE INDEX %s ON %s (%s)';

        $stmts = [];
        foreach ([self::$readTableName, self::$rangeTableName] as $table) {
            $index1 = ['table' => $table, 'name' => uniqid(self::TESTING_PREFIX), 'type' => 'simple'];
            $index2 = ['table' => $table, 'name' => uniqid(self::TESTING_PREFIX), 'type' => 'complex'];

            $stmts[] = sprintf($create, $table);
            $stmts[] = sprintf($idx, $index1['name'], $table, 'id');
            $stmts[] = sprintf($idx, $index2['name'], $table, 'id, val');

            self::$indexes[] = $index1;
            self::$indexes[] = $index2;
        }

        $db = self::$database;
        $db->updateDdlBatch($stmts)->pollUntilComplete();

        self::$dataset = self::generateDataset(20, true);
        $db->insertBatch(self::$rangeTableName, self::$dataset);
    }

    /**
     * covers 8
     */
    public function testRangeReadSingleKeyOpen()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0]['id'],
            'end' => self::$dataset[10]['id'],
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]));
        $rows = iterator_to_array($res->rows());
        $this->assertNotContains(self::$dataset[0], $rows);
        $this->assertNotContains(self::$dataset[10], $rows);
    }

    /**
     * covers 8
     */
    public function testRangeReadSingleKeyClosed()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0]['id'],
            'end' => self::$dataset[10]['id'],
            'startType' => KeyRange::TYPE_CLOSED,
            'endType' => KeyRange::TYPE_CLOSED,
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]));
        $rows = iterator_to_array($res->rows());
        $this->assertContains(self::$dataset[0], $rows);
        $this->assertContains(self::$dataset[10], $rows);
    }

    /**
     * covers 8
     */
    public function testRangeReadSingleKeyOpenClosed()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0]['id'],
            'end' => self::$dataset[10]['id'],
            'endType' => KeyRange::TYPE_CLOSED
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]));
        $rows = iterator_to_array($res->rows());
        $this->assertNotContains(self::$dataset[0], $rows);
        $this->assertContains(self::$dataset[10], $rows);
    }

    /**
     * covers 8
     */
    public function testRangeReadSingleKeyClosedOpen()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0]['id'],
            'end' => self::$dataset[10]['id'],
            'startType' => KeyRange::TYPE_CLOSED,
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]));
        $rows = iterator_to_array($res->rows());
        $this->assertContains(self::$dataset[0], $rows);
        $this->assertNotContains(self::$dataset[10], $rows);
    }

    /**
     * covers 8
     */
    public function testRangeReadPartialKeyOpen()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => [self::$dataset[0]['id']],
            'end' => [self::$dataset[10]['id']],
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]));
        $rows = iterator_to_array($res->rows());
        $this->assertNotContains(self::$dataset[0], $rows);
        $this->assertNotContains(self::$dataset[10], $rows);
    }

    /**
     * covers 8
     */
    public function testRangeReadPartialKeyClosed()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => [self::$dataset[0]['id']],
            'end' => [self::$dataset[10]['id']],
            'startType' => KeyRange::TYPE_CLOSED,
            'endType' => KeyRange::TYPE_CLOSED,
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]));
        $rows = iterator_to_array($res->rows());
        $this->assertContains(self::$dataset[0], $rows);
        $this->assertContains(self::$dataset[10], $rows);
    }

    /**
     * covers 9
     */
    public function testRangeReadIndexSingleKeyOpen()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0],
            'end' => self::$dataset[10],
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
            'index' => $this->getIndexName(self::$rangeTableName, 'complex')
        ]);
        $rows = iterator_to_array($res->rows());
        $this->assertNotContains(self::$dataset[0], $rows);
        $this->assertNotContains(self::$dataset[10], $rows);
    }

    public function testOrderByReturnsRowsOrderedById()
    {
        $db = self::$database;

        $this->insertUnorderedBatch();

        $res = $db->read(self::$rangeTableName, new KeySet(['all' => true]), array_keys(self::$dataset[0]), [
            'orderBy' => OrderBy::ORDER_BY_PRIMARY_KEY
        ]);
        $rows = iterator_to_array($res->rows());

        // Assert that the returned rows are sorted by the 'id' property.
        for ($i = 0; $i < count($rows) - 1; $i++) {
            $this->assertLessThanOrEqual(
                $rows[$i + 1]['id'],
                $rows[$i]['id'],
                'The array is not sorted by id in ascending order.'
            );
        }
    }

    /**
     * covers 9
     */
    public function testRangeReadIndexSingleKeyClosed()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0],
            'end' => self::$dataset[10],
            'startType' => KeyRange::TYPE_CLOSED,
            'endType' => KeyRange::TYPE_CLOSED,
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
            'index' => $this->getIndexName(self::$rangeTableName, 'complex')
        ]);
        $rows = iterator_to_array($res->rows());
        $this->assertContains(self::$dataset[0], $rows);
        $this->assertContains(self::$dataset[10], $rows);
    }

    /**
     * covers 9
     */
    public function testRangeReadIndexSingleKeyOpenClosed()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0],
            'end' => self::$dataset[10],
            'endType' => KeyRange::TYPE_CLOSED
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
            'index' => $this->getIndexName(self::$rangeTableName, 'complex')
        ]);
        $rows = iterator_to_array($res->rows());
        $this->assertNotContains(self::$dataset[0], $rows);
        $this->assertContains(self::$dataset[10], $rows);
    }

    /**
     * covers 9
     */
    public function testRangeReadIndexSingleKeyClosedOpen()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => self::$dataset[0],
            'startType' => KeyRange::TYPE_CLOSED,
            'end' => self::$dataset[10],
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
            'index' => $this->getIndexName(self::$rangeTableName, 'complex')
        ]);
        $rows = iterator_to_array($res->rows());
        $this->assertContains(self::$dataset[0], $rows);
        $this->assertNotContains(self::$dataset[10], $rows);
    }

    /**
     * covers 9
     */
    public function testRangeReadIndexPartialKeyOpen()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => [self::$dataset[0]['id']],
            'end' => [self::$dataset[10]['id']],
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
            'index' => $this->getIndexName(self::$rangeTableName, 'complex')
        ]);
        $rows = iterator_to_array($res->rows());
        $this->assertNotContains(self::$dataset[0], $rows);
        $this->assertNotContains(self::$dataset[10], $rows);
    }

    /**
     * covers 9
     */
    public function testRangeReadIndexPartialKeyClosed()
    {
        $db = self::$database;

        $range = new KeyRange([
            'start' => [self::$dataset[0]['id']],
            'end' => [self::$dataset[10]['id']],
            'startType' => KeyRange::TYPE_CLOSED,
            'endType' => KeyRange::TYPE_CLOSED,
        ]);

        $keyset = new KeySet(['ranges' => [$range]]);

        $res = $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
            'index' => $this->getIndexName(self::$rangeTableName, 'complex')
        ]);
        $rows = iterator_to_array($res->rows());
        $this->assertContains(self::$dataset[0], $rows);
        $this->assertContains(self::$dataset[10], $rows);
    }

    /**
     * covers 10
     */
    public function testReadWithLimit()
    {
        $db = self::$database;

        $res = function ($limit) use ($db) {
            $keyset = new KeySet(['all' => true]);
            return $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
                'limit' => $limit
            ])->rows();
        };

        $limitCount = count(iterator_to_array($res(10)));
        $unlimitCount = count(iterator_to_array($res(null)));

        $this->assertEquals(10, $limitCount);
        $this->assertNotEquals($limitCount, $unlimitCount);
    }

    /**
     * covers 11
     */
    public function testReadOverIndexWithLimit()
    {
        $db = self::$database;

        $res = function ($limit) use ($db) {
            $keyset = new KeySet(['all' => true]);
            return $db->read(self::$rangeTableName, $keyset, array_keys(self::$dataset[0]), [
                'limit' => $limit,
                'index' => $this->getIndexName(self::$rangeTableName, 'complex')
            ])->rows();
        };

        $limitCount = count(iterator_to_array($res(10)));
        $unlimitCount = count(iterator_to_array($res(null)));

        $this->assertEquals(10, $limitCount);
        $this->assertNotEquals($limitCount, $unlimitCount);
    }

    /**
     * covers 12
     */
    public function testReadPoint()
    {
        $dataset = $this->generateDataset();

        $db = self::$database;
        $db->insertBatch(self::$readTableName, $dataset);

        $indexes = array_rand($dataset, 4);
        $points = [];
        $keys = [];
        array_walk($indexes, function ($index) use ($dataset, &$points, &$keys) {
            $points[] = $dataset[$index];
            $keys[] = $dataset[$index]['id'];
        });

        $keyset = new KeySet(['keys' => $keys]);

        $res = $db->read(self::$readTableName, $keyset, array_keys($dataset[0]));
        $rows = $res->rows();
        foreach ($rows as $index => $row) {
            $this->assertContains($row, $dataset);
            $this->assertContains($row, $points);
        }
    }

    /**
     * covers 13
     */
    public function testReadPointOverIndex()
    {
        $dataset = $this->generateDataset();

        $db = self::$database;
        $db->insertBatch(self::$readTableName, $dataset);

        $indexes = array_rand($dataset, 4);
        $points = [];
        $keys = [];
        array_walk($indexes, function ($index) use ($dataset, &$points, &$keys) {
            $points[] = $dataset[$index];
            $keys[] = array_values($dataset[$index]);
        });

        $keyset = new KeySet(['keys' => $keys]);

        $res = $db->read(self::$readTableName, $keyset, array_keys($dataset[0]), [
            'index' => $this->getIndexName(self::$readTableName, 'complex')
        ]);
        $rows = $res->rows();
        foreach ($rows as $index => $row) {
            $this->assertContains($row, $dataset);
            $this->assertContains($row, $points);
        }
    }

    /**
     * covers 14
     */
    public function testReadInvalidDatabase()
    {
        $this->expectException(NotFoundException::class);

        $db = self::$client->connect('google-cloud-php-system-tests', uniqid(self::TESTING_PREFIX));
        $keyset = new KeySet(['all' => true]);

        $db->read(self::TEST_TABLE_NAME, $keyset, [])->rows()->current();
    }

    /**
     * covers 15
     */
    public function testReadInvalidTable()
    {
        $this->expectException(NotFoundException::class);

        $db = self::$database;
        $keyset = new KeySet(['all' => true]);

        $db->read('ThisIsntARealTable', $keyset, ['id'])->rows()->current();
    }

    /**
     * covers 16
     */
    public function testReadInvalidColumn()
    {
        $this->expectException(NotFoundException::class);

        $db = self::$database;
        $keyset = new KeySet(['all' => true]);

        $db->read(self::TEST_TABLE_NAME, $keyset, [uniqid('id')])->rows()->current();
    }

    /**
     * covers 18
     */
    public function testReadFailsOnDeadlineExceeded()
    {
        $this->expectException(DeadlineExceededException::class);

        $this->skipEmulatorTests();
        $db = self::$database;
        $keyset = new KeySet(['all' => true]);

        $db->read(self::TEST_TABLE_NAME, $keyset, [uniqid('id')], [
            'timeoutMillis' => 1
        ])->rows()->current();
    }

    private static function generateDataset($count = 20, $ordered = false)
    {
        $dataset = [];
        for ($i = 0; $i < $count; $i++) {
            $id = ($ordered) ? $i : self::randId();
            $dataset[] = [
                'id' => $id,
                'val' => uniqid(self::TESTING_PREFIX)
            ];
        }

        return $dataset;
    }

    private function getIndexName($table, $type)
    {
        $res = array_filter(self::$indexes, function ($index) use ($table, $type) {
            return $index['table'] === $table && $index['type'] === $type;
        });

        if (!$res) {
            throw new \RuntimeException('index not found');
        }

        return current($res)['name'];
    }

    private function insertUnorderedBatch()
    {
        // Because we are generating IDs at random there is a non zero chance
        // that we create an ID that already exists on the DB.
        // If that happens, we recursively call this function to generate another set.
        try {
            $unorderedDataset = self::generateDataset(10, false);
            self::$database->insertBatch(self::$rangeTableName, $unorderedDataset);
        } catch (ConflictException $e) {
            $json = json_decode($e->getMessage(), true);

            if ($json['status'] == 'ALREADY_EXISTS') {
                $this->insertUnorderedBatch($data);
            } else {
                throw $e;
            }
        }
    }
}
