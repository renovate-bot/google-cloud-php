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

// [START discoveryengine_v1_generated_AssistantService_StreamAssist_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\ServerStream;
use Google\Cloud\DiscoveryEngine\V1\Client\AssistantServiceClient;
use Google\Cloud\DiscoveryEngine\V1\StreamAssistRequest;
use Google\Cloud\DiscoveryEngine\V1\StreamAssistResponse;

/**
 * Assists the user with a query in a streaming fashion.
 *
 * @param string $formattedName The resource name of the
 *                              [Assistant][google.cloud.discoveryengine.v1.Assistant]. Format:
 *                              `projects/{project}/locations/{location}/collections/{collection}/engines/{engine}/assistants/{assistant}`
 *                              Please see {@see AssistantServiceClient::assistantName()} for help formatting this field.
 */
function stream_assist_sample(string $formattedName): void
{
    // Create a client.
    $assistantServiceClient = new AssistantServiceClient();

    // Prepare the request message.
    $request = (new StreamAssistRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var ServerStream $stream */
        $stream = $assistantServiceClient->streamAssist($request);

        /** @var StreamAssistResponse $element */
        foreach ($stream->readAll() as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $formattedName = AssistantServiceClient::assistantName(
        '[PROJECT]',
        '[LOCATION]',
        '[COLLECTION]',
        '[ENGINE]',
        '[ASSISTANT]'
    );

    stream_assist_sample($formattedName);
}
// [END discoveryengine_v1_generated_AssistantService_StreamAssist_sync]
