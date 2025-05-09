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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/apihub/v1/apihub_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ApiHub\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ApiHub\V1\CreateDependencyRequest;
use Google\Cloud\ApiHub\V1\DeleteDependencyRequest;
use Google\Cloud\ApiHub\V1\Dependency;
use Google\Cloud\ApiHub\V1\GetDependencyRequest;
use Google\Cloud\ApiHub\V1\ListDependenciesRequest;
use Google\Cloud\ApiHub\V1\UpdateDependencyRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: This service provides methods for various operations related to a
 * [Dependency][google.cloud.apihub.v1.Dependency] in the API hub.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Dependency> createDependencyAsync(CreateDependencyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteDependencyAsync(DeleteDependencyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Dependency> getDependencyAsync(GetDependencyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listDependenciesAsync(ListDependenciesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Dependency> updateDependencyAsync(UpdateDependencyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class ApiHubDependenciesClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.apihub.v1.ApiHubDependencies';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'apihub.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'apihub.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/api_hub_dependencies_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/api_hub_dependencies_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/api_hub_dependencies_rest_client_config.php',
                ],
            ],
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements ClientOptionsTrait::supportedTransports. */
    private static function supportedTransports()
    {
        return ['rest'];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a attribute
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $attribute
     *
     * @return string The formatted attribute resource.
     */
    public static function attributeName(string $project, string $location, string $attribute): string
    {
        return self::getPathTemplate('attribute')->render([
            'project' => $project,
            'location' => $location,
            'attribute' => $attribute,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a dependency
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dependency
     *
     * @return string The formatted dependency resource.
     */
    public static function dependencyName(string $project, string $location, string $dependency): string
    {
        return self::getPathTemplate('dependency')->render([
            'project' => $project,
            'location' => $location,
            'dependency' => $dependency,
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
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - attribute: projects/{project}/locations/{location}/attributes/{attribute}
     * - dependency: projects/{project}/locations/{location}/dependencies/{dependency}
     * - location: projects/{project}/locations/{location}
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
     *           as "<uri>:<port>". Default 'apihub.googleapis.com:443'.
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
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
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
     * Create a dependency between two entities in the API hub.
     *
     * The async variant is {@see ApiHubDependenciesClient::createDependencyAsync()} .
     *
     * @example samples/V1/ApiHubDependenciesClient/create_dependency.php
     *
     * @param CreateDependencyRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Dependency
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createDependency(CreateDependencyRequest $request, array $callOptions = []): Dependency
    {
        return $this->startApiCall('CreateDependency', $request, $callOptions)->wait();
    }

    /**
     * Delete the dependency resource.
     *
     * The async variant is {@see ApiHubDependenciesClient::deleteDependencyAsync()} .
     *
     * @example samples/V1/ApiHubDependenciesClient/delete_dependency.php
     *
     * @param DeleteDependencyRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteDependency(DeleteDependencyRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteDependency', $request, $callOptions)->wait();
    }

    /**
     * Get details about a dependency resource in the API hub.
     *
     * The async variant is {@see ApiHubDependenciesClient::getDependencyAsync()} .
     *
     * @example samples/V1/ApiHubDependenciesClient/get_dependency.php
     *
     * @param GetDependencyRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Dependency
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDependency(GetDependencyRequest $request, array $callOptions = []): Dependency
    {
        return $this->startApiCall('GetDependency', $request, $callOptions)->wait();
    }

    /**
     * List dependencies based on the provided filter and pagination parameters.
     *
     * The async variant is {@see ApiHubDependenciesClient::listDependenciesAsync()} .
     *
     * @example samples/V1/ApiHubDependenciesClient/list_dependencies.php
     *
     * @param ListDependenciesRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
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
    public function listDependencies(ListDependenciesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDependencies', $request, $callOptions);
    }

    /**
     * Update a dependency based on the
     * [update_mask][google.cloud.apihub.v1.UpdateDependencyRequest.update_mask]
     * provided in the request.
     *
     * The following fields in the [dependency][google.cloud.apihub.v1.Dependency]
     * can be updated:
     * * [description][google.cloud.apihub.v1.Dependency.description]
     *
     * The async variant is {@see ApiHubDependenciesClient::updateDependencyAsync()} .
     *
     * @example samples/V1/ApiHubDependenciesClient/update_dependency.php
     *
     * @param UpdateDependencyRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Dependency
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDependency(UpdateDependencyRequest $request, array $callOptions = []): Dependency
    {
        return $this->startApiCall('UpdateDependency', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see ApiHubDependenciesClient::getLocationAsync()} .
     *
     * @example samples/V1/ApiHubDependenciesClient/get_location.php
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
     * The async variant is {@see ApiHubDependenciesClient::listLocationsAsync()} .
     *
     * @example samples/V1/ApiHubDependenciesClient/list_locations.php
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
