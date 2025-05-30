<?php
/*
 * Copyright 2022 Google LLC
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

// [START compute_v1_generated_ZoneOperations_Wait_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Compute\V1\Client\ZoneOperationsClient;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\WaitZoneOperationRequest;

/**
 * Waits for the specified Operation resource to return as `DONE` or for the request to approach the 2 minute deadline, and retrieves the specified Operation resource. This method waits for no more than the 2 minutes and then returns the current state of the operation, which might be `DONE` or still in progress. This method is called on a best-effort basis. Specifically: - In uncommon cases, when the server is overloaded, the request might return before the default deadline is reached, or might return after zero seconds. - If the default deadline is reached, there is no guarantee that the operation is actually done when the method returns. Be prepared to retry if the operation is not `DONE`.
 *
 * @param string $operation Name of the Operations resource to return, or its unique numeric identifier.
 * @param string $project   Project ID for this request.
 * @param string $zone      Name of the zone for this request.
 */
function wait_sample(string $operation, string $project, string $zone): void
{
    // Create a client.
    $zoneOperationsClient = new ZoneOperationsClient();

    // Prepare the request message.
    $request = (new WaitZoneOperationRequest())
        ->setOperation($operation)
        ->setProject($project)
        ->setZone($zone);

    // Call the API and handle any network failures.
    try {
        /** @var Operation $response */
        $response = $zoneOperationsClient->wait($request);
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
    $operation = '[OPERATION]';
    $project = '[PROJECT]';
    $zone = '[ZONE]';

    wait_sample($operation, $project, $zone);
}
// [END compute_v1_generated_ZoneOperations_Wait_sync]
