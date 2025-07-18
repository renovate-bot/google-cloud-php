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

// [START aiplatform_v1_generated_VertexRagDataService_UpdateRagEngineConfig_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AIPlatform\V1\Client\VertexRagDataServiceClient;
use Google\Cloud\AIPlatform\V1\RagEngineConfig;
use Google\Cloud\AIPlatform\V1\UpdateRagEngineConfigRequest;
use Google\Rpc\Status;

/**
 * Updates a RagEngineConfig.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function update_rag_engine_config_sample(): void
{
    // Create a client.
    $vertexRagDataServiceClient = new VertexRagDataServiceClient();

    // Prepare the request message.
    $ragEngineConfig = new RagEngineConfig();
    $request = (new UpdateRagEngineConfigRequest())
        ->setRagEngineConfig($ragEngineConfig);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $vertexRagDataServiceClient->updateRagEngineConfig($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var RagEngineConfig $result */
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
// [END aiplatform_v1_generated_VertexRagDataService_UpdateRagEngineConfig_sync]
