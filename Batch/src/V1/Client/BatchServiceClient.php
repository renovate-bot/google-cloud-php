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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/batch/v1/batch.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Batch\V1\Client;

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
use Google\Cloud\Batch\V1\CancelJobRequest;
use Google\Cloud\Batch\V1\CreateJobRequest;
use Google\Cloud\Batch\V1\DeleteJobRequest;
use Google\Cloud\Batch\V1\GetJobRequest;
use Google\Cloud\Batch\V1\GetTaskRequest;
use Google\Cloud\Batch\V1\Job;
use Google\Cloud\Batch\V1\ListJobsRequest;
use Google\Cloud\Batch\V1\ListTasksRequest;
use Google\Cloud\Batch\V1\Task;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Google Batch Service.
 * The service manages user submitted batch jobs and allocates Google Compute
 * Engine VM instances to run the jobs.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> cancelJobAsync(CancelJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Job> createJobAsync(CreateJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteJobAsync(DeleteJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Job> getJobAsync(GetJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Task> getTaskAsync(GetTaskRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listJobsAsync(ListJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTasksAsync(ListTasksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class BatchServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.batch.v1.BatchService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'batch.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'batch.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/batch_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/batch_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/batch_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/batch_service_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     *
     * @return string The formatted job resource.
     */
    public static function jobName(string $project, string $location, string $job): string
    {
        return self::getPathTemplate('job')->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
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
     * Formats a string containing the fully-qualified path to represent a task
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     * @param string $taskGroup
     * @param string $task
     *
     * @return string The formatted task resource.
     */
    public static function taskName(
        string $project,
        string $location,
        string $job,
        string $taskGroup,
        string $task
    ): string {
        return self::getPathTemplate('task')->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
            'task_group' => $taskGroup,
            'task' => $task,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a task_group
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     * @param string $taskGroup
     *
     * @return string The formatted task_group resource.
     */
    public static function taskGroupName(string $project, string $location, string $job, string $taskGroup): string
    {
        return self::getPathTemplate('taskGroup')->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
            'task_group' => $taskGroup,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - job: projects/{project}/locations/{location}/jobs/{job}
     * - location: projects/{project}/locations/{location}
     * - task: projects/{project}/locations/{location}/jobs/{job}/taskGroups/{task_group}/tasks/{task}
     * - taskGroup: projects/{project}/locations/{location}/jobs/{job}/taskGroups/{task_group}
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
     *           as "<uri>:<port>". Default 'batch.googleapis.com:443'.
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
     * Cancel a Job.
     *
     * The async variant is {@see BatchServiceClient::cancelJobAsync()} .
     *
     * @example samples/V1/BatchServiceClient/cancel_job.php
     *
     * @param CancelJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
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
    public function cancelJob(CancelJobRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CancelJob', $request, $callOptions)->wait();
    }

    /**
     * Create a Job.
     *
     * The async variant is {@see BatchServiceClient::createJobAsync()} .
     *
     * @example samples/V1/BatchServiceClient/create_job.php
     *
     * @param CreateJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createJob(CreateJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('CreateJob', $request, $callOptions)->wait();
    }

    /**
     * Delete a Job.
     *
     * The async variant is {@see BatchServiceClient::deleteJobAsync()} .
     *
     * @example samples/V1/BatchServiceClient/delete_job.php
     *
     * @param DeleteJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
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
    public function deleteJob(DeleteJobRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteJob', $request, $callOptions)->wait();
    }

    /**
     * Get a Job specified by its resource name.
     *
     * The async variant is {@see BatchServiceClient::getJobAsync()} .
     *
     * @example samples/V1/BatchServiceClient/get_job.php
     *
     * @param GetJobRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getJob(GetJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('GetJob', $request, $callOptions)->wait();
    }

    /**
     * Return a single Task.
     *
     * The async variant is {@see BatchServiceClient::getTaskAsync()} .
     *
     * @example samples/V1/BatchServiceClient/get_task.php
     *
     * @param GetTaskRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Task
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTask(GetTaskRequest $request, array $callOptions = []): Task
    {
        return $this->startApiCall('GetTask', $request, $callOptions)->wait();
    }

    /**
     * List all Jobs for a project within a region.
     *
     * The async variant is {@see BatchServiceClient::listJobsAsync()} .
     *
     * @example samples/V1/BatchServiceClient/list_jobs.php
     *
     * @param ListJobsRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
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
    public function listJobs(ListJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListJobs', $request, $callOptions);
    }

    /**
     * List Tasks associated with a job.
     *
     * The async variant is {@see BatchServiceClient::listTasksAsync()} .
     *
     * @example samples/V1/BatchServiceClient/list_tasks.php
     *
     * @param ListTasksRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
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
    public function listTasks(ListTasksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTasks', $request, $callOptions);
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see BatchServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/BatchServiceClient/get_location.php
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
     * The async variant is {@see BatchServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/BatchServiceClient/list_locations.php
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
