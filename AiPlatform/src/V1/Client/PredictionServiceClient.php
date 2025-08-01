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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/prediction_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\BidiStream;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\ServerStream;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Api\HttpBody;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AIPlatform\V1\Content;
use Google\Cloud\AIPlatform\V1\DirectPredictRequest;
use Google\Cloud\AIPlatform\V1\DirectPredictResponse;
use Google\Cloud\AIPlatform\V1\DirectRawPredictRequest;
use Google\Cloud\AIPlatform\V1\DirectRawPredictResponse;
use Google\Cloud\AIPlatform\V1\ExplainRequest;
use Google\Cloud\AIPlatform\V1\ExplainResponse;
use Google\Cloud\AIPlatform\V1\GenerateContentRequest;
use Google\Cloud\AIPlatform\V1\GenerateContentResponse;
use Google\Cloud\AIPlatform\V1\PredictRequest;
use Google\Cloud\AIPlatform\V1\PredictResponse;
use Google\Cloud\AIPlatform\V1\RawPredictRequest;
use Google\Cloud\AIPlatform\V1\StreamRawPredictRequest;
use Google\Cloud\AIPlatform\V1\StreamingPredictRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: A service for online predictions and explanations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<DirectPredictResponse> directPredictAsync(DirectPredictRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<DirectRawPredictResponse> directRawPredictAsync(DirectRawPredictRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ExplainResponse> explainAsync(ExplainRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<GenerateContentResponse> generateContentAsync(GenerateContentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PredictResponse> predictAsync(PredictRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<HttpBody> rawPredictAsync(RawPredictRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class PredictionServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.aiplatform.v1.PredictionService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'aiplatform.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/prediction_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/prediction_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/prediction_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/prediction_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * cached_content resource.
     *
     * @param string $project
     * @param string $location
     * @param string $cachedContent
     *
     * @return string The formatted cached_content resource.
     */
    public static function cachedContentName(string $project, string $location, string $cachedContent): string
    {
        return self::getPathTemplate('cachedContent')->render([
            'project' => $project,
            'location' => $location,
            'cached_content' => $cachedContent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a endpoint
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     */
    public static function endpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('endpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_endpoint resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted project_location_endpoint resource.
     */
    public static function projectLocationEndpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('projectLocationEndpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_publisher_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $publisher
     * @param string $model
     *
     * @return string The formatted project_location_publisher_model resource.
     */
    public static function projectLocationPublisherModelName(
        string $project,
        string $location,
        string $publisher,
        string $model
    ): string {
        return self::getPathTemplate('projectLocationPublisherModel')->render([
            'project' => $project,
            'location' => $location,
            'publisher' => $publisher,
            'model' => $model,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a rag_corpus
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $ragCorpus
     *
     * @return string The formatted rag_corpus resource.
     */
    public static function ragCorpusName(string $project, string $location, string $ragCorpus): string
    {
        return self::getPathTemplate('ragCorpus')->render([
            'project' => $project,
            'location' => $location,
            'rag_corpus' => $ragCorpus,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a template
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $template
     *
     * @return string The formatted template resource.
     */
    public static function templateName(string $project, string $location, string $template): string
    {
        return self::getPathTemplate('template')->render([
            'project' => $project,
            'location' => $location,
            'template' => $template,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - cachedContent: projects/{project}/locations/{location}/cachedContents/{cached_content}
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - projectLocationEndpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - projectLocationPublisherModel: projects/{project}/locations/{location}/publishers/{publisher}/models/{model}
     * - ragCorpus: projects/{project}/locations/{location}/ragCorpora/{rag_corpus}
     * - template: projects/{project}/locations/{location}/templates/{template}
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
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
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
     * Perform an unary online prediction request to a gRPC model server for
     * Vertex first-party products and frameworks.
     *
     * The async variant is {@see PredictionServiceClient::directPredictAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/direct_predict.php
     *
     * @param DirectPredictRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DirectPredictResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function directPredict(DirectPredictRequest $request, array $callOptions = []): DirectPredictResponse
    {
        return $this->startApiCall('DirectPredict', $request, $callOptions)->wait();
    }

    /**
     * Perform an unary online prediction request to a gRPC model server for
     * custom containers.
     *
     * The async variant is {@see PredictionServiceClient::directRawPredictAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/direct_raw_predict.php
     *
     * @param DirectRawPredictRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DirectRawPredictResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function directRawPredict(
        DirectRawPredictRequest $request,
        array $callOptions = []
    ): DirectRawPredictResponse {
        return $this->startApiCall('DirectRawPredict', $request, $callOptions)->wait();
    }

    /**
     * Perform an online explanation.
     *
     * If
     * [deployed_model_id][google.cloud.aiplatform.v1.ExplainRequest.deployed_model_id]
     * is specified, the corresponding DeployModel must have
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * populated. If
     * [deployed_model_id][google.cloud.aiplatform.v1.ExplainRequest.deployed_model_id]
     * is not specified, all DeployedModels must have
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * populated.
     *
     * The async variant is {@see PredictionServiceClient::explainAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/explain.php
     *
     * @param ExplainRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ExplainResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function explain(ExplainRequest $request, array $callOptions = []): ExplainResponse
    {
        return $this->startApiCall('Explain', $request, $callOptions)->wait();
    }

    /**
     * Generate content with multimodal inputs.
     *
     * The async variant is {@see PredictionServiceClient::generateContentAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/generate_content.php
     *
     * @param GenerateContentRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return GenerateContentResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function generateContent(GenerateContentRequest $request, array $callOptions = []): GenerateContentResponse
    {
        return $this->startApiCall('GenerateContent', $request, $callOptions)->wait();
    }

    /**
     * Perform an online prediction.
     *
     * The async variant is {@see PredictionServiceClient::predictAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/predict.php
     *
     * @param PredictRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PredictResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function predict(PredictRequest $request, array $callOptions = []): PredictResponse
    {
        return $this->startApiCall('Predict', $request, $callOptions)->wait();
    }

    /**
     * Perform an online prediction with an arbitrary HTTP payload.
     *
     * The response includes the following HTTP headers:
     *
     * * `X-Vertex-AI-Endpoint-Id`: ID of the
     * [Endpoint][google.cloud.aiplatform.v1.Endpoint] that served this
     * prediction.
     *
     * * `X-Vertex-AI-Deployed-Model-Id`: ID of the Endpoint's
     * [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] that served this
     * prediction.
     *
     * The async variant is {@see PredictionServiceClient::rawPredictAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/raw_predict.php
     *
     * @param RawPredictRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return HttpBody
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function rawPredict(RawPredictRequest $request, array $callOptions = []): HttpBody
    {
        return $this->startApiCall('RawPredict', $request, $callOptions)->wait();
    }

    /**
     * Perform a server-side streaming online prediction request for Vertex
     * LLM streaming.
     *
     * @example samples/V1/PredictionServiceClient/server_streaming_predict.php
     *
     * @param StreamingPredictRequest $request     A request to house fields associated with the call.
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
    public function serverStreamingPredict(StreamingPredictRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('ServerStreamingPredict', $request, $callOptions);
    }

    /**
     * Perform a streaming online prediction request to a gRPC model server for
     * Vertex first-party products and frameworks.
     *
     * @example samples/V1/PredictionServiceClient/stream_direct_predict.php
     *
     * @param array $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return BidiStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function streamDirectPredict(array $callOptions = []): BidiStream
    {
        return $this->startApiCall('StreamDirectPredict', null, $callOptions);
    }

    /**
     * Perform a streaming online prediction request to a gRPC model server for
     * custom containers.
     *
     * @example samples/V1/PredictionServiceClient/stream_direct_raw_predict.php
     *
     * @param array $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return BidiStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function streamDirectRawPredict(array $callOptions = []): BidiStream
    {
        return $this->startApiCall('StreamDirectRawPredict', null, $callOptions);
    }

    /**
     * Generate content with multimodal inputs with streaming support.
     *
     * @example samples/V1/PredictionServiceClient/stream_generate_content.php
     *
     * @param GenerateContentRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function streamGenerateContent(GenerateContentRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('StreamGenerateContent', $request, $callOptions);
    }

    /**
     * Perform a streaming online prediction with an arbitrary HTTP payload.
     *
     * @example samples/V1/PredictionServiceClient/stream_raw_predict.php
     *
     * @param StreamRawPredictRequest $request     A request to house fields associated with the call.
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
    public function streamRawPredict(StreamRawPredictRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('StreamRawPredict', $request, $callOptions);
    }

    /**
     * Perform a streaming online prediction request for Vertex first-party
     * products and frameworks.
     *
     * @example samples/V1/PredictionServiceClient/streaming_predict.php
     *
     * @param array $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return BidiStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function streamingPredict(array $callOptions = []): BidiStream
    {
        return $this->startApiCall('StreamingPredict', null, $callOptions);
    }

    /**
     * Perform a streaming online prediction request through gRPC.
     *
     * @example samples/V1/PredictionServiceClient/streaming_raw_predict.php
     *
     * @param array $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return BidiStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function streamingRawPredict(array $callOptions = []): BidiStream
    {
        return $this->startApiCall('StreamingRawPredict', null, $callOptions);
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see PredictionServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see PredictionServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see PredictionServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see PredictionServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see PredictionServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/PredictionServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
