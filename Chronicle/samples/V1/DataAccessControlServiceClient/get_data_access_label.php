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

// [START chronicle_v1_generated_DataAccessControlService_GetDataAccessLabel_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Chronicle\V1\Client\DataAccessControlServiceClient;
use Google\Cloud\Chronicle\V1\DataAccessLabel;
use Google\Cloud\Chronicle\V1\GetDataAccessLabelRequest;

/**
 * Gets a data access label.
 *
 * @param string $formattedName The ID of the data access label to retrieve.
 *                              Format:
 *                              `projects/{project}/locations/{location}/instances/{instance}/dataAccessLabels/{data_access_label}`
 *                              Please see {@see DataAccessControlServiceClient::dataAccessLabelName()} for help formatting this field.
 */
function get_data_access_label_sample(string $formattedName): void
{
    // Create a client.
    $dataAccessControlServiceClient = new DataAccessControlServiceClient();

    // Prepare the request message.
    $request = (new GetDataAccessLabelRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var DataAccessLabel $response */
        $response = $dataAccessControlServiceClient->getDataAccessLabel($request);
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
    $formattedName = DataAccessControlServiceClient::dataAccessLabelName(
        '[PROJECT]',
        '[LOCATION]',
        '[INSTANCE]',
        '[DATA_ACCESS_LABEL]'
    );

    get_data_access_label_sample($formattedName);
}
// [END chronicle_v1_generated_DataAccessControlService_GetDataAccessLabel_sync]
