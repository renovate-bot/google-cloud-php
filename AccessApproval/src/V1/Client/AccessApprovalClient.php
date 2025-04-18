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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/accessapproval/v1/accessapproval.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AccessApproval\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AccessApproval\V1\AccessApprovalServiceAccount;
use Google\Cloud\AccessApproval\V1\AccessApprovalSettings;
use Google\Cloud\AccessApproval\V1\ApprovalRequest;
use Google\Cloud\AccessApproval\V1\ApproveApprovalRequestMessage;
use Google\Cloud\AccessApproval\V1\DeleteAccessApprovalSettingsMessage;
use Google\Cloud\AccessApproval\V1\DismissApprovalRequestMessage;
use Google\Cloud\AccessApproval\V1\GetAccessApprovalServiceAccountMessage;
use Google\Cloud\AccessApproval\V1\GetAccessApprovalSettingsMessage;
use Google\Cloud\AccessApproval\V1\GetApprovalRequestMessage;
use Google\Cloud\AccessApproval\V1\InvalidateApprovalRequestMessage;
use Google\Cloud\AccessApproval\V1\ListApprovalRequestsMessage;
use Google\Cloud\AccessApproval\V1\UpdateAccessApprovalSettingsMessage;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: This API allows a customer to manage accesses to cloud resources by
 * Google personnel. It defines the following resource model:
 *
 * - The API has a collection of
 * [ApprovalRequest][google.cloud.accessapproval.v1.ApprovalRequest]
 * resources, named `approvalRequests/{approval_request}`
 * - The API has top-level settings per Project/Folder/Organization, named
 * `accessApprovalSettings`
 *
 * The service also periodically emails a list of recipients, defined at the
 * Project/Folder/Organization level in the accessApprovalSettings, when there
 * is a pending ApprovalRequest for them to act on. The ApprovalRequests can
 * also optionally be published to a Pub/Sub topic owned by the customer
 * (contact support if you would like to enable Pub/Sub notifications).
 *
 * ApprovalRequests can be approved or dismissed. Google personnel can only
 * access the indicated resource or resources if the request is approved
 * (subject to some exclusions:
 * https://cloud.google.com/access-approval/docs/overview#exclusions).
 *
 * Note: Using Access Approval functionality will mean that Google may not be
 * able to meet the SLAs for your chosen products, as any support response times
 * may be dramatically increased. As such the SLAs do not apply to any service
 * disruption to the extent impacted by Customer's use of Access Approval. Do
 * not enable Access Approval for projects where you may require high service
 * availability and rapid response by Google Cloud Support.
 *
 * After a request is approved or dismissed, no further action may be taken on
 * it. Requests with the requested_expiration in the past or with no activity
 * for 14 days are considered dismissed. When an approval expires, the request
 * is considered dismissed.
 *
 * If a request is not approved or dismissed, we call it pending.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<ApprovalRequest> approveApprovalRequestAsync(ApproveApprovalRequestMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteAccessApprovalSettingsAsync(DeleteAccessApprovalSettingsMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<ApprovalRequest> dismissApprovalRequestAsync(DismissApprovalRequestMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<AccessApprovalServiceAccount> getAccessApprovalServiceAccountAsync(GetAccessApprovalServiceAccountMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<AccessApprovalSettings> getAccessApprovalSettingsAsync(GetAccessApprovalSettingsMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<ApprovalRequest> getApprovalRequestAsync(GetApprovalRequestMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<ApprovalRequest> invalidateApprovalRequestAsync(InvalidateApprovalRequestMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listApprovalRequestsAsync(ListApprovalRequestsMessage $request, array $optionalArgs = [])
 * @method PromiseInterface<AccessApprovalSettings> updateAccessApprovalSettingsAsync(UpdateAccessApprovalSettingsMessage $request, array $optionalArgs = [])
 */
final class AccessApprovalClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.accessapproval.v1.AccessApproval';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'accessapproval.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'accessapproval.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/access_approval_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/access_approval_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/access_approval_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/access_approval_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * access_approval_settings resource.
     *
     * @param string $project
     *
     * @return string The formatted access_approval_settings resource.
     */
    public static function accessApprovalSettingsName(string $project): string
    {
        return self::getPathTemplate('accessApprovalSettings')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * approval_request resource.
     *
     * @param string $project
     * @param string $approvalRequest
     *
     * @return string The formatted approval_request resource.
     */
    public static function approvalRequestName(string $project, string $approvalRequest): string
    {
        return self::getPathTemplate('approvalRequest')->render([
            'project' => $project,
            'approval_request' => $approvalRequest,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a folder
     * resource.
     *
     * @param string $folder
     *
     * @return string The formatted folder resource.
     */
    public static function folderName(string $folder): string
    {
        return self::getPathTemplate('folder')->render([
            'folder' => $folder,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_accessApprovalSettings resource.
     *
     * @param string $folder
     *
     * @return string The formatted folder_accessApprovalSettings resource.
     */
    public static function folderAccessApprovalSettingsName(string $folder): string
    {
        return self::getPathTemplate('folderAccessApprovalSettings')->render([
            'folder' => $folder,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_approval_request resource.
     *
     * @param string $folder
     * @param string $approvalRequest
     *
     * @return string The formatted folder_approval_request resource.
     */
    public static function folderApprovalRequestName(string $folder, string $approvalRequest): string
    {
        return self::getPathTemplate('folderApprovalRequest')->render([
            'folder' => $folder,
            'approval_request' => $approvalRequest,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a organization
     * resource.
     *
     * @param string $organization
     *
     * @return string The formatted organization resource.
     */
    public static function organizationName(string $organization): string
    {
        return self::getPathTemplate('organization')->render([
            'organization' => $organization,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_accessApprovalSettings resource.
     *
     * @param string $organization
     *
     * @return string The formatted organization_accessApprovalSettings resource.
     */
    public static function organizationAccessApprovalSettingsName(string $organization): string
    {
        return self::getPathTemplate('organizationAccessApprovalSettings')->render([
            'organization' => $organization,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_approval_request resource.
     *
     * @param string $organization
     * @param string $approvalRequest
     *
     * @return string The formatted organization_approval_request resource.
     */
    public static function organizationApprovalRequestName(string $organization, string $approvalRequest): string
    {
        return self::getPathTemplate('organizationApprovalRequest')->render([
            'organization' => $organization,
            'approval_request' => $approvalRequest,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_accessApprovalSettings resource.
     *
     * @param string $project
     *
     * @return string The formatted project_accessApprovalSettings resource.
     */
    public static function projectAccessApprovalSettingsName(string $project): string
    {
        return self::getPathTemplate('projectAccessApprovalSettings')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_approval_request resource.
     *
     * @param string $project
     * @param string $approvalRequest
     *
     * @return string The formatted project_approval_request resource.
     */
    public static function projectApprovalRequestName(string $project, string $approvalRequest): string
    {
        return self::getPathTemplate('projectApprovalRequest')->render([
            'project' => $project,
            'approval_request' => $approvalRequest,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - accessApprovalSettings: projects/{project}/accessApprovalSettings
     * - approvalRequest: projects/{project}/approvalRequests/{approval_request}
     * - folder: folders/{folder}
     * - folderAccessApprovalSettings: folders/{folder}/accessApprovalSettings
     * - folderApprovalRequest: folders/{folder}/approvalRequests/{approval_request}
     * - organization: organizations/{organization}
     * - organizationAccessApprovalSettings: organizations/{organization}/accessApprovalSettings
     * - organizationApprovalRequest: organizations/{organization}/approvalRequests/{approval_request}
     * - project: projects/{project}
     * - projectAccessApprovalSettings: projects/{project}/accessApprovalSettings
     * - projectApprovalRequest: projects/{project}/approvalRequests/{approval_request}
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
     *           as "<uri>:<port>". Default 'accessapproval.googleapis.com:443'.
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
     * Approves a request and returns the updated ApprovalRequest.
     *
     * Returns NOT_FOUND if the request does not exist. Returns
     * FAILED_PRECONDITION if the request exists but is not in a pending state.
     *
     * The async variant is {@see AccessApprovalClient::approveApprovalRequestAsync()}
     * .
     *
     * @example samples/V1/AccessApprovalClient/approve_approval_request.php
     *
     * @param ApproveApprovalRequestMessage $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ApprovalRequest
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function approveApprovalRequest(
        ApproveApprovalRequestMessage $request,
        array $callOptions = []
    ): ApprovalRequest {
        return $this->startApiCall('ApproveApprovalRequest', $request, $callOptions)->wait();
    }

    /**
     * Deletes the settings associated with a project, folder, or organization.
     * This will have the effect of disabling Access Approval for the project,
     * folder, or organization, but only if all ancestors also have Access
     * Approval disabled. If Access Approval is enabled at a higher level of the
     * hierarchy, then Access Approval will still be enabled at this level as
     * the settings are inherited.
     *
     * The async variant is
     * {@see AccessApprovalClient::deleteAccessApprovalSettingsAsync()} .
     *
     * @example samples/V1/AccessApprovalClient/delete_access_approval_settings.php
     *
     * @param DeleteAccessApprovalSettingsMessage $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
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
    public function deleteAccessApprovalSettings(
        DeleteAccessApprovalSettingsMessage $request,
        array $callOptions = []
    ): void {
        $this->startApiCall('DeleteAccessApprovalSettings', $request, $callOptions)->wait();
    }

    /**
     * Dismisses a request. Returns the updated ApprovalRequest.
     *
     * NOTE: This does not deny access to the resource if another request has been
     * made and approved. It is equivalent in effect to ignoring the request
     * altogether.
     *
     * Returns NOT_FOUND if the request does not exist.
     *
     * Returns FAILED_PRECONDITION if the request exists but is not in a pending
     * state.
     *
     * The async variant is {@see AccessApprovalClient::dismissApprovalRequestAsync()}
     * .
     *
     * @example samples/V1/AccessApprovalClient/dismiss_approval_request.php
     *
     * @param DismissApprovalRequestMessage $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ApprovalRequest
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function dismissApprovalRequest(
        DismissApprovalRequestMessage $request,
        array $callOptions = []
    ): ApprovalRequest {
        return $this->startApiCall('DismissApprovalRequest', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the service account that is used by Access Approval to access KMS
     * keys for signing approved approval requests.
     *
     * The async variant is
     * {@see AccessApprovalClient::getAccessApprovalServiceAccountAsync()} .
     *
     * @example samples/V1/AccessApprovalClient/get_access_approval_service_account.php
     *
     * @param GetAccessApprovalServiceAccountMessage $request     A request to house fields associated with the call.
     * @param array                                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AccessApprovalServiceAccount
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAccessApprovalServiceAccount(
        GetAccessApprovalServiceAccountMessage $request,
        array $callOptions = []
    ): AccessApprovalServiceAccount {
        return $this->startApiCall('GetAccessApprovalServiceAccount', $request, $callOptions)->wait();
    }

    /**
     * Gets the settings associated with a project, folder, or organization.
     *
     * The async variant is
     * {@see AccessApprovalClient::getAccessApprovalSettingsAsync()} .
     *
     * @example samples/V1/AccessApprovalClient/get_access_approval_settings.php
     *
     * @param GetAccessApprovalSettingsMessage $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AccessApprovalSettings
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAccessApprovalSettings(
        GetAccessApprovalSettingsMessage $request,
        array $callOptions = []
    ): AccessApprovalSettings {
        return $this->startApiCall('GetAccessApprovalSettings', $request, $callOptions)->wait();
    }

    /**
     * Gets an approval request. Returns NOT_FOUND if the request does not exist.
     *
     * The async variant is {@see AccessApprovalClient::getApprovalRequestAsync()} .
     *
     * @example samples/V1/AccessApprovalClient/get_approval_request.php
     *
     * @param GetApprovalRequestMessage $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ApprovalRequest
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getApprovalRequest(GetApprovalRequestMessage $request, array $callOptions = []): ApprovalRequest
    {
        return $this->startApiCall('GetApprovalRequest', $request, $callOptions)->wait();
    }

    /**
     * Invalidates an existing ApprovalRequest. Returns the updated
     * ApprovalRequest.
     *
     * NOTE: This does not deny access to the resource if another request has been
     * made and approved. It only invalidates a single approval.
     *
     * Returns FAILED_PRECONDITION if the request exists but is not in an approved
     * state.
     *
     * The async variant is
     * {@see AccessApprovalClient::invalidateApprovalRequestAsync()} .
     *
     * @example samples/V1/AccessApprovalClient/invalidate_approval_request.php
     *
     * @param InvalidateApprovalRequestMessage $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ApprovalRequest
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function invalidateApprovalRequest(
        InvalidateApprovalRequestMessage $request,
        array $callOptions = []
    ): ApprovalRequest {
        return $this->startApiCall('InvalidateApprovalRequest', $request, $callOptions)->wait();
    }

    /**
     * Lists approval requests associated with a project, folder, or organization.
     * Approval requests can be filtered by state (pending, active, dismissed).
     * The order is reverse chronological.
     *
     * The async variant is {@see AccessApprovalClient::listApprovalRequestsAsync()} .
     *
     * @example samples/V1/AccessApprovalClient/list_approval_requests.php
     *
     * @param ListApprovalRequestsMessage $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
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
    public function listApprovalRequests(
        ListApprovalRequestsMessage $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListApprovalRequests', $request, $callOptions);
    }

    /**
     * Updates the settings associated with a project, folder, or organization.
     * Settings to update are determined by the value of field_mask.
     *
     * The async variant is
     * {@see AccessApprovalClient::updateAccessApprovalSettingsAsync()} .
     *
     * @example samples/V1/AccessApprovalClient/update_access_approval_settings.php
     *
     * @param UpdateAccessApprovalSettingsMessage $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AccessApprovalSettings
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateAccessApprovalSettings(
        UpdateAccessApprovalSettingsMessage $request,
        array $callOptions = []
    ): AccessApprovalSettings {
        return $this->startApiCall('UpdateAccessApprovalSettings', $request, $callOptions)->wait();
    }
}
