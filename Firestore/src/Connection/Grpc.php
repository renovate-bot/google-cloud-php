<?php
/**
 * Copyright 2017 Google Inc.
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

namespace Google\Cloud\Firestore\Connection;

use Google\ApiCore\Serializer;
use Google\Cloud\Core\EmulatorTrait;
use Google\Cloud\Core\GrpcRequestWrapper;
use Google\Cloud\Core\GrpcTrait;
use Google\Cloud\Firestore\FirestoreClient as ManualFirestoreClient;
use Google\Cloud\Firestore\V1\DocumentMask;
use Google\Cloud\Firestore\V1\FirestoreClient;
use Google\Cloud\Firestore\V1\StructuredAggregationQuery;
use Google\Cloud\Firestore\V1\StructuredQuery;
use Google\Cloud\Firestore\V1\TransactionOptions;
use Google\Cloud\Firestore\V1\TransactionOptions\ReadWrite;
use Google\Cloud\Firestore\V1\Write;
use Google\Protobuf\Timestamp as ProtobufTimestamp;

/**
 * A gRPC connection to Cloud Firestore via GAPIC.
 *
 * @internal
 */
class Grpc implements ConnectionInterface
{
    use EmulatorTrait;
    use GrpcTrait;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var FirestoreClient
     */
    private $firestore;

    /**
     * @var string
     */
    private $resourcePrefixHeader;

    /**
     * @var string
     */
    private $databaseRoutingHeader;

    /**
     * @var bool
     */
    private $isUsingEmulator = false;

    /**
     * @param array $config [optional]
     */
    public function __construct(array $config = [])
    {
        //@codeCoverageIgnoreStart
        $this->serializer = new Serializer([], [
            'google.protobuf.Value' => function ($v) {
                return $this->flattenValue($v);
            },
            'google.protobuf.ListValue' => function ($v) {
                return $this->flattenListValue($v);
            },
            'google.protobuf.Struct' => function ($v) {
                return $this->flattenStruct($v);
            },
            'google.protobuf.Timestamp' => function ($v) {
                return $this->formatTimestampFromApi($v);
            },
            'google.protobuf.Duration' => function ($v) {
                return $this->formatDurationFromApi($v);
            }
        ], [], [
            'google.protobuf.Int32Value' => function ($v) {
                return ['value' => $v];
            }
        ]);
        //@codeCoverageIgnoreEnd

        $config['serializer'] = $this->serializer;
        $this->setRequestWrapper(new GrpcRequestWrapper($config));

        $grpcConfig = $this->getGaxConfig(
            ManualFirestoreClient::VERSION,
            isset($config['authHttpHandler'])
                ? $config['authHttpHandler']
                : null
        );

        if (isset($config['apiEndpoint'])) {
            $grpcConfig['apiEndpoint'] = $config['apiEndpoint'];
        }

        //@codeCoverageIgnoreStart
        $config += ['emulatorHost' => null];
        if ((bool) $config['emulatorHost']) {
            $this->isUsingEmulator = true;
            $grpcConfig = array_merge(
                $grpcConfig,
                $this->emulatorGapicConfig($config['emulatorHost'])
            );
        }
        //@codeCoverageIgnoreEnd

        $this->firestore = $this->constructGapic(FirestoreClient::class, $grpcConfig);
        $projectId = $this->pluck('projectId', $config);
        $databaseId = $this->pluck('database', $config);

        $this->resourcePrefixHeader = FirestoreClient::databaseRootName(
            $projectId,
            $databaseId
        );
        $this->databaseRoutingHeader = sprintf(
            'project_id=%s&database_id=%s',
            $projectId,
            $databaseId
        );
    }

    /**
     * @param array $args
     * @return array
     */
    public function batchGetDocuments(array $args)
    {
        $args = $this->decodeTimestamp($args);

        return $this->send([$this->firestore, 'batchGetDocuments'], [
            $this->pluck('database', $args),
            $this->pluck('documents', $args),
            $this->addRequestHeaders($args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function beginTransaction(array $args)
    {
        $rw = new ReadWrite();
        $retry = $this->pluck('retryTransaction', $args, false);
        if ($retry) {
            $rw->setRetryTransaction($retry);
        }

        $args['options'] = new TransactionOptions();
        $args['options']->setReadWrite($rw);

        return $this->send([$this->firestore, 'beginTransaction'], [
            $this->pluck('database', $args),
            $this->addRequestHeaders($args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function commit(array $args)
    {
        $writes = $this->pluck('writes', $args);
        foreach ($writes as $idx => $write) {
            $writes[$idx] = $this->serializer->decodeMessage(new Write(), $write);
        }

        return $this->send([$this->firestore, 'commit'], [
            $this->pluck('database', $args),
            $writes,
            $this->addRequestHeaders($args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function batchWrite(array $args)
    {
        $writes = $this->pluck('writes', $args);
        foreach ($writes as $idx => $write) {
            $args['writes'][$idx] = $this->serializer->decodeMessage(
                new Write(),
                $write
            );
        }

        return $this->send([$this->firestore, 'batchWrite'], [
            $this->addRequestHeaders($args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function listCollectionIds(array $args)
    {
        $args = $this->decodeTimestamp($args);

        return $this->send([$this->firestore, 'listCollectionIds'], [
            $this->pluck('parent', $args),
            $this->addRequestHeaders($args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function listDocuments(array $args)
    {
        $mask = $args['mask'] ?? [];

        $args['mask'] = $this->documentMask($mask);
        $args = $this->decodeTimestamp($args);

        return $this->send([$this->firestore, 'listDocuments'], [
            $this->pluck('parent', $args),
            $this->pluck('collectionId', $args),
            $this->addRequestHeaders([
                'showMissing' => true
            ] + $args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function rollback(array $args)
    {
        return $this->send([$this->firestore, 'rollback'], [
            $this->pluck('database', $args),
            $this->pluck('transaction', $args),
            $this->addRequestHeaders($args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function runQuery(array $args)
    {
        $args['structuredQuery'] = $this->serializer->decodeMessage(
            new StructuredQuery(),
            $this->pluck('structuredQuery', $args)
        );
        $args = $this->decodeTimestamp($args);

        return $this->send([$this->firestore, 'runQuery'], [
            $this->pluck('parent', $args),
            $this->addRequestHeaders($args)
        ]);
    }

    /**
     * @param array $args
     * @return array
     */
    public function runAggregationQuery(array $args)
    {
        if (isset($args['readTime'])) {
            $args['readTime'] = $this->serializer->decodeMessage(
                new ProtobufTimestamp(),
                $args['readTime']
            );
        }
        $args['structuredAggregationQuery'] = $this->serializer->decodeMessage(
            new StructuredAggregationQuery(),
            $this->pluck('structuredAggregationQuery', $args)
        );

        return $this->send([$this->firestore, 'runAggregationQuery'], [
            $this->pluck('parent', $args),
            $this->addRequestHeaders($args)
        ]);
    }

    private function documentMask(array $mask)
    {
        return new DocumentMask([
            'field_paths' => $mask
        ]);
    }

    /**
     * Add required headers to the request.
     *
     * @param array $args
     * @return array
     */
    private function addRequestHeaders(array $args)
    {
        $args += [
            'headers' => []
        ];

        $args['headers']['google-cloud-resource-prefix'] = [$this->resourcePrefixHeader];
        $args['headers']['x-goog-request-params'] = [$this->databaseRoutingHeader];

        // Provide authentication header for requests when emulator is enabled.
        if ($this->isUsingEmulator) {
            $args['headers']['Authorization'] = ['Bearer owner'];
        }

        return $args;
    }

    /**
     * Decodes the 'readTime' API format timestamp to Protobuf timestamp if
     * it is set.
     *
     * @param array $args
     * @return array
     */
    private function decodeTimestamp(array $args)
    {
        if (isset($args['readTime'])) {
            $args['readTime'] = $this->serializer->decodeMessage(
                new ProtobufTimestamp(),
                $args['readTime']
            );
        }
        return $args;
    }

    /**
     * @access private
     * @codeCoverageIgnore
     * @return array
     */
    public function __debugInfo()
    {
        return [
            'serializer' => get_class($this->serializer),
            'firestore' => get_class($this->firestore),
            'resourcePrefixHeader' => $this->resourcePrefixHeader,
            'databaseRoutingHeader' => $this->databaseRoutingHeader,
            'isUsingEmulator' => $this->isUsingEmulator
        ];
    }
}
