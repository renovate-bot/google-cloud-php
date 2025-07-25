<?php
/*
 * Copyright 2025 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/licensemanager/v1/licensemanager.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\LicenseManager\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\LicenseManager\V1\AggregateUsageRequest;
use Google\Cloud\LicenseManager\V1\Configuration;
use Google\Cloud\LicenseManager\V1\CreateConfigurationRequest;
use Google\Cloud\LicenseManager\V1\DeactivateConfigurationRequest;
use Google\Cloud\LicenseManager\V1\DeleteConfigurationRequest;
use Google\Cloud\LicenseManager\V1\GetConfigurationRequest;
use Google\Cloud\LicenseManager\V1\GetInstanceRequest;
use Google\Cloud\LicenseManager\V1\GetProductRequest;
use Google\Cloud\LicenseManager\V1\Instance;
use Google\Cloud\LicenseManager\V1\ListConfigurationsRequest;
use Google\Cloud\LicenseManager\V1\ListInstancesRequest;
use Google\Cloud\LicenseManager\V1\ListProductsRequest;
use Google\Cloud\LicenseManager\V1\Product;
use Google\Cloud\LicenseManager\V1\QueryConfigurationLicenseUsageRequest;
use Google\Cloud\LicenseManager\V1\QueryConfigurationLicenseUsageResponse;
use Google\Cloud\LicenseManager\V1\ReactivateConfigurationRequest;
use Google\Cloud\LicenseManager\V1\UpdateConfigurationRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Service describing handlers for resources
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<PagedListResponse> aggregateUsageAsync(AggregateUsageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createConfigurationAsync(CreateConfigurationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deactivateConfigurationAsync(DeactivateConfigurationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteConfigurationAsync(DeleteConfigurationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Configuration> getConfigurationAsync(GetConfigurationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Instance> getInstanceAsync(GetInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Product> getProductAsync(GetProductRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listConfigurationsAsync(ListConfigurationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listInstancesAsync(ListInstancesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listProductsAsync(ListProductsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<QueryConfigurationLicenseUsageResponse> queryConfigurationLicenseUsageAsync(QueryConfigurationLicenseUsageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> reactivateConfigurationAsync(ReactivateConfigurationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateConfigurationAsync(UpdateConfigurationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class LicenseManagerClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.licensemanager.v1.LicenseManager';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'licensemanager.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'licensemanager.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/license_manager_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/license_manager_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/license_manager_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/license_manager_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * configuration resource.
     *
     * @param string $project
     * @param string $location
     * @param string $configuration
     *
     * @return string The formatted configuration resource.
     */
    public static function configurationName(string $project, string $location, string $configuration): string
    {
        return self::getPathTemplate('configuration')->render([
            'project' => $project,
            'location' => $location,
            'configuration' => $configuration,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a instance
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     *
     * @return string The formatted instance resource.
     */
    public static function instanceName(string $project, string $location, string $instance): string
    {
        return self::getPathTemplate('instance')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a product
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $product
     *
     * @return string The formatted product resource.
     */
    public static function productName(string $project, string $location, string $product): string
    {
        return self::getPathTemplate('product')->render([
            'project' => $project,
            'location' => $location,
            'product' => $product,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - configuration: projects/{project}/locations/{location}/configurations/{configuration}
     * - instance: projects/{project}/locations/{location}/instances/{instance}
     * - location: projects/{project}/locations/{location}
     * - product: projects/{project}/locations/{location}/products/{product}
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
     *           as "<uri>:<port>". Default 'licensemanager.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
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
     * Aggregates Usage per Instance for a Configuration.
     *
     * The async variant is {@see LicenseManagerClient::aggregateUsageAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/aggregate_usage.php
     *
     * @param AggregateUsageRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function aggregateUsage(AggregateUsageRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('AggregateUsage', $request, $callOptions);
    }

    /**
     * Creates a new Configuration in a given project and location.
     *
     * The async variant is {@see LicenseManagerClient::createConfigurationAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/create_configuration.php
     *
     * @param CreateConfigurationRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createConfiguration(CreateConfigurationRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateConfiguration', $request, $callOptions)->wait();
    }

    /**
     * Deactivates the given configuration.
     *
     * The async variant is {@see LicenseManagerClient::deactivateConfigurationAsync()}
     * .
     *
     * @example samples/V1/LicenseManagerClient/deactivate_configuration.php
     *
     * @param DeactivateConfigurationRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deactivateConfiguration(
        DeactivateConfigurationRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('DeactivateConfiguration', $request, $callOptions)->wait();
    }

    /**
     * Deletes a single Configuration.
     *
     * The async variant is {@see LicenseManagerClient::deleteConfigurationAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/delete_configuration.php
     *
     * @param DeleteConfigurationRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteConfiguration(DeleteConfigurationRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteConfiguration', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single Configuration.
     *
     * The async variant is {@see LicenseManagerClient::getConfigurationAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/get_configuration.php
     *
     * @param GetConfigurationRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Configuration
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConfiguration(GetConfigurationRequest $request, array $callOptions = []): Configuration
    {
        return $this->startApiCall('GetConfiguration', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single Instance.
     *
     * The async variant is {@see LicenseManagerClient::getInstanceAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/get_instance.php
     *
     * @param GetInstanceRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Instance
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getInstance(GetInstanceRequest $request, array $callOptions = []): Instance
    {
        return $this->startApiCall('GetInstance', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single Product.
     *
     * The async variant is {@see LicenseManagerClient::getProductAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/get_product.php
     *
     * @param GetProductRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Product
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getProduct(GetProductRequest $request, array $callOptions = []): Product
    {
        return $this->startApiCall('GetProduct', $request, $callOptions)->wait();
    }

    /**
     * Lists Configurations in a given project and location.
     *
     * The async variant is {@see LicenseManagerClient::listConfigurationsAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/list_configurations.php
     *
     * @param ListConfigurationsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function listConfigurations(ListConfigurationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListConfigurations', $request, $callOptions);
    }

    /**
     * Lists Instances in a given project and location.
     *
     * The async variant is {@see LicenseManagerClient::listInstancesAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/list_instances.php
     *
     * @param ListInstancesRequest $request     A request to house fields associated with the call.
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
    public function listInstances(ListInstancesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListInstances', $request, $callOptions);
    }

    /**
     * Lists Products in a given project and location.
     *
     * The async variant is {@see LicenseManagerClient::listProductsAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/list_products.php
     *
     * @param ListProductsRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function listProducts(ListProductsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListProducts', $request, $callOptions);
    }

    /**
     * License Usage information for a Configuration.
     *
     * The async variant is
     * {@see LicenseManagerClient::queryConfigurationLicenseUsageAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/query_configuration_license_usage.php
     *
     * @param QueryConfigurationLicenseUsageRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return QueryConfigurationLicenseUsageResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function queryConfigurationLicenseUsage(
        QueryConfigurationLicenseUsageRequest $request,
        array $callOptions = []
    ): QueryConfigurationLicenseUsageResponse {
        return $this->startApiCall('QueryConfigurationLicenseUsage', $request, $callOptions)->wait();
    }

    /**
     * Reactivates the given configuration.
     *
     * The async variant is {@see LicenseManagerClient::reactivateConfigurationAsync()}
     * .
     *
     * @example samples/V1/LicenseManagerClient/reactivate_configuration.php
     *
     * @param ReactivateConfigurationRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function reactivateConfiguration(
        ReactivateConfigurationRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('ReactivateConfiguration', $request, $callOptions)->wait();
    }

    /**
     * Updates the parameters of a single Configuration.
     *
     * The async variant is {@see LicenseManagerClient::updateConfigurationAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/update_configuration.php
     *
     * @param UpdateConfigurationRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateConfiguration(UpdateConfigurationRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateConfiguration', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see LicenseManagerClient::getLocationAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/get_location.php
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
     * The async variant is {@see LicenseManagerClient::listLocationsAsync()} .
     *
     * @example samples/V1/LicenseManagerClient/list_locations.php
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
}
