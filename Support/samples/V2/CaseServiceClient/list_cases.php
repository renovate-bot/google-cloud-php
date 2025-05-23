<?php
/*
 * Copyright 2023 Google LLC
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

// [START cloudsupport_v2_generated_CaseService_ListCases_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Support\V2\Client\CaseServiceClient;
use Google\Cloud\Support\V2\ListCasesRequest;
use Google\Cloud\Support\V2\PBCase;

/**
 * Retrieve all cases under a parent, but not its children.
 *
 * For example, listing cases under an organization only returns the cases
 * that are directly parented by that organization. To retrieve cases
 * under an organization and its projects, use `cases.search`.
 *
 * @param string $formattedParent The name of a parent to list cases under. Please see
 *                                {@see CaseServiceClient::projectName()} for help formatting this field.
 */
function list_cases_sample(string $formattedParent): void
{
    // Create a client.
    $caseServiceClient = new CaseServiceClient();

    // Prepare the request message.
    $request = (new ListCasesRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $caseServiceClient->listCases($request);

        /** @var PBCase $element */
        foreach ($response as $element) {
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
    $formattedParent = CaseServiceClient::projectName('[PROJECT]');

    list_cases_sample($formattedParent);
}
// [END cloudsupport_v2_generated_CaseService_ListCases_sync]
