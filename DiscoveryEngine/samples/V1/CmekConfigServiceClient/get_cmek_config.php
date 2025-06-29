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

// [START discoveryengine_v1_generated_CmekConfigService_GetCmekConfig_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DiscoveryEngine\V1\Client\CmekConfigServiceClient;
use Google\Cloud\DiscoveryEngine\V1\CmekConfig;
use Google\Cloud\DiscoveryEngine\V1\GetCmekConfigRequest;

/**
 * Gets the [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig].
 *
 * @param string $formattedName Resource name of
 *                              [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig], such as
 *                              `projects/&#42;/locations/&#42;/cmekConfig` or
 *                              `projects/&#42;/locations/&#42;/cmekConfigs/*`.
 *
 *                              If the caller does not have permission to access the
 *                              [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig], regardless of
 *                              whether or not it exists, a PERMISSION_DENIED error is returned. Please see
 *                              {@see CmekConfigServiceClient::cmekConfigName()} for help formatting this field.
 */
function get_cmek_config_sample(string $formattedName): void
{
    // Create a client.
    $cmekConfigServiceClient = new CmekConfigServiceClient();

    // Prepare the request message.
    $request = (new GetCmekConfigRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var CmekConfig $response */
        $response = $cmekConfigServiceClient->getCmekConfig($request);
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
    $formattedName = CmekConfigServiceClient::cmekConfigName('[PROJECT]', '[LOCATION]');

    get_cmek_config_sample($formattedName);
}
// [END discoveryengine_v1_generated_CmekConfigService_GetCmekConfig_sync]
