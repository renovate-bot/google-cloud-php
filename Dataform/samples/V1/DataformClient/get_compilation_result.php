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

// [START dataform_v1_generated_Dataform_GetCompilationResult_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dataform\V1\Client\DataformClient;
use Google\Cloud\Dataform\V1\CompilationResult;
use Google\Cloud\Dataform\V1\GetCompilationResultRequest;

/**
 * Fetches a single CompilationResult.
 *
 * @param string $formattedName The compilation result's name. Please see
 *                              {@see DataformClient::compilationResultName()} for help formatting this field.
 */
function get_compilation_result_sample(string $formattedName): void
{
    // Create a client.
    $dataformClient = new DataformClient();

    // Prepare the request message.
    $request = (new GetCompilationResultRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var CompilationResult $response */
        $response = $dataformClient->getCompilationResult($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedName = DataformClient::compilationResultName(
        '[PROJECT]',
        '[LOCATION]',
        '[REPOSITORY]',
        '[COMPILATION_RESULT]'
    );

    get_compilation_result_sample($formattedName);
}
// [END dataform_v1_generated_Dataform_GetCompilationResult_sync]
