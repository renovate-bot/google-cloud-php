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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START aiplatform_v1_generated_NotebookService_StopNotebookRuntime_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AIPlatform\V1\Client\NotebookServiceClient;
use Google\Cloud\AIPlatform\V1\StopNotebookRuntimeRequest;
use Google\Cloud\AIPlatform\V1\StopNotebookRuntimeResponse;
use Google\Rpc\Status;

/**
 * Stops a NotebookRuntime.
 *
 * @param string $formattedName The name of the NotebookRuntime resource to be stopped.
 *                              Instead of checking whether the name is in valid NotebookRuntime resource
 *                              name format, directly throw NotFound exception if there is no such
 *                              NotebookRuntime in spanner. Please see
 *                              {@see NotebookServiceClient::notebookRuntimeName()} for help formatting this field.
 */
function stop_notebook_runtime_sample(string $formattedName): void
{
    // Create a client.
    $notebookServiceClient = new NotebookServiceClient();

    // Prepare the request message.
    $request = (new StopNotebookRuntimeRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $notebookServiceClient->stopNotebookRuntime($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var StopNotebookRuntimeResponse $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = NotebookServiceClient::notebookRuntimeName(
        '[PROJECT]',
        '[LOCATION]',
        '[NOTEBOOK_RUNTIME]'
    );

    stop_notebook_runtime_sample($formattedName);
}
// [END aiplatform_v1_generated_NotebookService_StopNotebookRuntime_sync]
