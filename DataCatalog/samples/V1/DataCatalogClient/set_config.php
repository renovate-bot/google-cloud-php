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

// [START datacatalog_v1_generated_DataCatalog_SetConfig_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DataCatalog\V1\Client\DataCatalogClient;
use Google\Cloud\DataCatalog\V1\MigrationConfig;
use Google\Cloud\DataCatalog\V1\SetConfigRequest;

/**
 * Sets the configuration related to the migration to Dataplex for an
 * organization or project.
 *
 * @param string $name The organization or project whose config is being specified.
 */
function set_config_sample(string $name): void
{
    // Create a client.
    $dataCatalogClient = new DataCatalogClient();

    // Prepare the request message.
    $request = (new SetConfigRequest())
        ->setName($name);

    // Call the API and handle any network failures.
    try {
        /** @var MigrationConfig $response */
        $response = $dataCatalogClient->setConfig($request);
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
    $name = '[NAME]';

    set_config_sample($name);
}
// [END datacatalog_v1_generated_DataCatalog_SetConfig_sync]
