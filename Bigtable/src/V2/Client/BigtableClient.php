<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/bigtable/v2/bigtable.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Bigtable\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\InsecureCredentialsWrapper;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\ServerStream;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Bigtable\V2\CheckAndMutateRowRequest;
use Google\Cloud\Bigtable\V2\CheckAndMutateRowResponse;
use Google\Cloud\Bigtable\V2\ExecuteQueryRequest;
use Google\Cloud\Bigtable\V2\GenerateInitialChangeStreamPartitionsRequest;
use Google\Cloud\Bigtable\V2\MutateRowRequest;
use Google\Cloud\Bigtable\V2\MutateRowResponse;
use Google\Cloud\Bigtable\V2\MutateRowsRequest;
use Google\Cloud\Bigtable\V2\MutateRowsRequest\Entry;
use Google\Cloud\Bigtable\V2\Mutation;
use Google\Cloud\Bigtable\V2\PingAndWarmRequest;
use Google\Cloud\Bigtable\V2\PingAndWarmResponse;
use Google\Cloud\Bigtable\V2\PrepareQueryRequest;
use Google\Cloud\Bigtable\V2\PrepareQueryResponse;
use Google\Cloud\Bigtable\V2\ReadChangeStreamRequest;
use Google\Cloud\Bigtable\V2\ReadModifyWriteRowRequest;
use Google\Cloud\Bigtable\V2\ReadModifyWriteRowResponse;
use Google\Cloud\Bigtable\V2\ReadRowsRequest;
use Google\Cloud\Bigtable\V2\SampleRowKeysRequest;
use Grpc\ChannelCredentials;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Service for reading from and writing to existing Bigtable tables.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<CheckAndMutateRowResponse> checkAndMutateRowAsync(CheckAndMutateRowRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<MutateRowResponse> mutateRowAsync(MutateRowRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PingAndWarmResponse> pingAndWarmAsync(PingAndWarmRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PrepareQueryResponse> prepareQueryAsync(PrepareQueryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ReadModifyWriteRowResponse> readModifyWriteRowAsync(ReadModifyWriteRowRequest $request, array $optionalArgs = [])
 */
final class BigtableClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.bigtable.v2.Bigtable';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'bigtable.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'bigtable.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/bigtable.data',
        'https://www.googleapis.com/auth/bigtable.data.readonly',
        'https://www.googleapis.com/auth/cloud-bigtable.data',
        'https://www.googleapis.com/auth/cloud-bigtable.data.readonly',
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/bigtable_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/bigtable_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/bigtable_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/bigtable_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * authorized_view resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $table
     * @param string $authorizedView
     *
     * @return string The formatted authorized_view resource.
     */
    public static function authorizedViewName(string $project, string $instance, string $table, string $authorizedView): string
    {
        return self::getPathTemplate('authorizedView')->render([
            'project' => $project,
            'instance' => $instance,
            'table' => $table,
            'authorized_view' => $authorizedView,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a instance
     * resource.
     *
     * @param string $project
     * @param string $instance
     *
     * @return string The formatted instance resource.
     */
    public static function instanceName(string $project, string $instance): string
    {
        return self::getPathTemplate('instance')->render([
            'project' => $project,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * materialized_view resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $materializedView
     *
     * @return string The formatted materialized_view resource.
     */
    public static function materializedViewName(string $project, string $instance, string $materializedView): string
    {
        return self::getPathTemplate('materializedView')->render([
            'project' => $project,
            'instance' => $instance,
            'materialized_view' => $materializedView,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a table
     * resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $table
     *
     * @return string The formatted table resource.
     */
    public static function tableName(string $project, string $instance, string $table): string
    {
        return self::getPathTemplate('table')->render([
            'project' => $project,
            'instance' => $instance,
            'table' => $table,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - authorizedView: projects/{project}/instances/{instance}/tables/{table}/authorizedViews/{authorized_view}
     * - instance: projects/{project}/instances/{instance}
     * - materializedView: projects/{project}/instances/{instance}/materializedViews/{materialized_view}
     * - table: projects/{project}/instances/{instance}/tables/{table}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * Setting the "BIGTABLE_EMULATOR_HOST" environment variable will automatically set
     * the API Endpoint to the value specified in the variable, as well as ensure that
     * empty credentials are used in the transport layer.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'bigtable.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *           *Important*: If you accept a credential configuration (credential
     *           JSON/File/Stream) from an external source for authentication to Google Cloud
     *           Platform, you must validate it before providing it to any Google API or library.
     *           Providing an unvalidated credential configuration to Google APIs can compromise
     *           the security of your systems and data. For more information {@see
     *           https://cloud.google.com/docs/authentication/external/externally-sourced-credentials}
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $options = $this->setDefaultEmulatorConfig($options);
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Mutates a row atomically based on the output of a predicate Reader filter.
     *
     * The async variant is {@see BigtableClient::checkAndMutateRowAsync()} .
     *
     * @example samples/V2/BigtableClient/check_and_mutate_row.php
     *
     * @param CheckAndMutateRowRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return CheckAndMutateRowResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function checkAndMutateRow(CheckAndMutateRowRequest $request, array $callOptions = []): CheckAndMutateRowResponse
    {
        return $this->startApiCall('CheckAndMutateRow', $request, $callOptions)->wait();
    }

    /**
     * Executes a SQL query against a particular Bigtable instance.
     *
     * @example samples/V2/BigtableClient/execute_query.php
     *
     * @param ExecuteQueryRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function executeQuery(ExecuteQueryRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('ExecuteQuery', $request, $callOptions);
    }

    /**
     * Returns the current list of partitions that make up the table's
     * change stream. The union of partitions will cover the entire keyspace.
     * Partitions can be read with `ReadChangeStream`.
     * NOTE: This API is only intended to be used by Apache Beam BigtableIO.
     *
     * @example samples/V2/BigtableClient/generate_initial_change_stream_partitions.php
     *
     * @param GenerateInitialChangeStreamPartitionsRequest $request     A request to house fields associated with the call.
     * @param array                                        $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function generateInitialChangeStreamPartitions(GenerateInitialChangeStreamPartitionsRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('GenerateInitialChangeStreamPartitions', $request, $callOptions);
    }

    /**
     * Mutates a row atomically. Cells already present in the row are left
     * unchanged unless explicitly changed by `mutation`.
     *
     * The async variant is {@see BigtableClient::mutateRowAsync()} .
     *
     * @example samples/V2/BigtableClient/mutate_row.php
     *
     * @param MutateRowRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return MutateRowResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function mutateRow(MutateRowRequest $request, array $callOptions = []): MutateRowResponse
    {
        return $this->startApiCall('MutateRow', $request, $callOptions)->wait();
    }

    /**
     * Mutates multiple rows in a batch. Each individual row is mutated
     * atomically as in MutateRow, but the entire batch is not executed
     * atomically.
     *
     * @example samples/V2/BigtableClient/mutate_rows.php
     *
     * @param MutateRowsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function mutateRows(MutateRowsRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('MutateRows', $request, $callOptions);
    }

    /**
     * Warm up associated instance metadata for this connection.
     * This call is not required but may be useful for connection keep-alive.
     *
     * The async variant is {@see BigtableClient::pingAndWarmAsync()} .
     *
     * @example samples/V2/BigtableClient/ping_and_warm.php
     *
     * @param PingAndWarmRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PingAndWarmResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function pingAndWarm(PingAndWarmRequest $request, array $callOptions = []): PingAndWarmResponse
    {
        return $this->startApiCall('PingAndWarm', $request, $callOptions)->wait();
    }

    /**
     * Prepares a GoogleSQL query for execution on a particular Bigtable instance.
     *
     * The async variant is {@see BigtableClient::prepareQueryAsync()} .
     *
     * @example samples/V2/BigtableClient/prepare_query.php
     *
     * @param PrepareQueryRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PrepareQueryResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function prepareQuery(PrepareQueryRequest $request, array $callOptions = []): PrepareQueryResponse
    {
        return $this->startApiCall('PrepareQuery', $request, $callOptions)->wait();
    }

    /**
     * Reads changes from a table's change stream. Changes will
     * reflect both user-initiated mutations and mutations that are caused by
     * garbage collection.
     * NOTE: This API is only intended to be used by Apache Beam BigtableIO.
     *
     * @example samples/V2/BigtableClient/read_change_stream.php
     *
     * @param ReadChangeStreamRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function readChangeStream(ReadChangeStreamRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('ReadChangeStream', $request, $callOptions);
    }

    /**
     * Modifies a row atomically on the server. The method reads the latest
     * existing timestamp and value from the specified columns and writes a new
     * entry based on pre-defined read/modify/write rules. The new value for the
     * timestamp is the greater of the existing timestamp or the current server
     * time. The method returns the new contents of all modified cells.
     *
     * The async variant is {@see BigtableClient::readModifyWriteRowAsync()} .
     *
     * @example samples/V2/BigtableClient/read_modify_write_row.php
     *
     * @param ReadModifyWriteRowRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ReadModifyWriteRowResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function readModifyWriteRow(ReadModifyWriteRowRequest $request, array $callOptions = []): ReadModifyWriteRowResponse
    {
        return $this->startApiCall('ReadModifyWriteRow', $request, $callOptions)->wait();
    }

    /**
     * Streams back the contents of all requested rows in key order, optionally
     * applying the same Reader filter to each. Depending on their size,
     * rows and cells may be broken up across multiple responses, but
     * atomicity of each row will still be preserved. See the
     * ReadRowsResponse documentation for details.
     *
     * @example samples/V2/BigtableClient/read_rows.php
     *
     * @param ReadRowsRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function readRows(ReadRowsRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('ReadRows', $request, $callOptions);
    }

    /**
     * Returns a sample of row keys in the table. The returned row keys will
     * delimit contiguous sections of the table of approximately equal size,
     * which can be used to break up the data for distributed tasks like
     * mapreduces.
     *
     * @example samples/V2/BigtableClient/sample_row_keys.php
     *
     * @param SampleRowKeysRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function sampleRowKeys(SampleRowKeysRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('SampleRowKeys', $request, $callOptions);
    }

    /** Configure the gapic configuration to use a service emulator. */
    private function setDefaultEmulatorConfig(array $options): array
    {
        $emulatorHost = getenv('BIGTABLE_EMULATOR_HOST');
        if (empty($emulatorHost)) {
            return $options;
        }

        if ($scheme = parse_url($emulatorHost, PHP_URL_SCHEME)) {
            $search = $scheme . '://';
            $emulatorHost = str_replace($search, '', $emulatorHost);
        }

        $options['apiEndpoint'] ??= $emulatorHost;
        if (class_exists(ChannelCredentials::class)) {
            $options['transportConfig']['grpc']['stubOpts']['credentials'] ??= ChannelCredentials::createInsecure();
        }

        $options['credentials'] ??= new InsecureCredentialsWrapper();
        return $options;
    }
}
