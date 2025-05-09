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

// [START memorystore_v1_generated_Memorystore_CreateInstance_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Memorystore\V1\Client\MemorystoreClient;
use Google\Cloud\Memorystore\V1\CreateInstanceRequest;
use Google\Cloud\Memorystore\V1\Instance;
use Google\Rpc\Status;

/**
 * Creates a new Instance in a given project and location.
 *
 * @param string $formattedParent The parent resource where this instance will be created.
 *                                Format: projects/{project}/locations/{location}
 *                                Please see {@see MemorystoreClient::locationName()} for help formatting this field.
 * @param string $instanceId      The ID to use for the instance, which will become the final
 *                                component of the instance's resource name.
 *
 *                                This value is subject to the following restrictions:
 *
 *                                * Must be 4-63 characters in length
 *                                * Must begin with a letter or digit
 *                                * Must contain only lowercase letters, digits, and hyphens
 *                                * Must not end with a hyphen
 *                                * Must be unique within a location
 */
function create_instance_sample(string $formattedParent, string $instanceId): void
{
    // Create a client.
    $memorystoreClient = new MemorystoreClient();

    // Prepare the request message.
    $instance = new Instance();
    $request = (new CreateInstanceRequest())
        ->setParent($formattedParent)
        ->setInstanceId($instanceId)
        ->setInstance($instance);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $memorystoreClient->createInstance($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Instance $result */
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
    $formattedParent = MemorystoreClient::locationName('[PROJECT]', '[LOCATION]');
    $instanceId = '[INSTANCE_ID]';

    create_instance_sample($formattedParent, $instanceId);
}
// [END memorystore_v1_generated_Memorystore_CreateInstance_sync]
