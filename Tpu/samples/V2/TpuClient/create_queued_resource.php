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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START tpu_v2_generated_Tpu_CreateQueuedResource_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Tpu\V2\Client\TpuClient;
use Google\Cloud\Tpu\V2\CreateQueuedResourceRequest;
use Google\Cloud\Tpu\V2\QueuedResource;
use Google\Rpc\Status;

/**
 * Creates a QueuedResource TPU instance.
 *
 * @param string $formattedParent The parent resource name. Please see
 *                                {@see TpuClient::locationName()} for help formatting this field.
 */
function create_queued_resource_sample(string $formattedParent): void
{
    // Create a client.
    $tpuClient = new TpuClient();

    // Prepare the request message.
    $queuedResource = new QueuedResource();
    $request = (new CreateQueuedResourceRequest())
        ->setParent($formattedParent)
        ->setQueuedResource($queuedResource);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $tpuClient->createQueuedResource($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var QueuedResource $result */
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
    $formattedParent = TpuClient::locationName('[PROJECT]', '[LOCATION]');

    create_queued_resource_sample($formattedParent);
}
// [END tpu_v2_generated_Tpu_CreateQueuedResource_sync]
