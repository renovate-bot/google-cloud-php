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

// [START contactcenterinsights_v1_generated_ContactCenterInsights_GetQaScorecardRevision_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ContactCenterInsights\V1\Client\ContactCenterInsightsClient;
use Google\Cloud\ContactCenterInsights\V1\GetQaScorecardRevisionRequest;
use Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision;

/**
 * Gets a QaScorecardRevision.
 *
 * @param string $formattedName The name of the QaScorecardRevision to get. Please see
 *                              {@see ContactCenterInsightsClient::qaScorecardRevisionName()} for help formatting this field.
 */
function get_qa_scorecard_revision_sample(string $formattedName): void
{
    // Create a client.
    $contactCenterInsightsClient = new ContactCenterInsightsClient();

    // Prepare the request message.
    $request = (new GetQaScorecardRevisionRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var QaScorecardRevision $response */
        $response = $contactCenterInsightsClient->getQaScorecardRevision($request);
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
    $formattedName = ContactCenterInsightsClient::qaScorecardRevisionName(
        '[PROJECT]',
        '[LOCATION]',
        '[QA_SCORECARD]',
        '[REVISION]'
    );

    get_qa_scorecard_revision_sample($formattedName);
}
// [END contactcenterinsights_v1_generated_ContactCenterInsights_GetQaScorecardRevision_sync]
