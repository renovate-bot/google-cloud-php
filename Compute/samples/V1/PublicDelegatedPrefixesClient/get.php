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

// [START compute_v1_generated_PublicDelegatedPrefixes_Get_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Compute\V1\Client\PublicDelegatedPrefixesClient;
use Google\Cloud\Compute\V1\GetPublicDelegatedPrefixeRequest;
use Google\Cloud\Compute\V1\PublicDelegatedPrefix;

/**
 * Returns the specified PublicDelegatedPrefix resource in the given region.
 *
 * @param string $project               Project ID for this request.
 * @param string $publicDelegatedPrefix Name of the PublicDelegatedPrefix resource to return.
 * @param string $region                Name of the region of this request.
 */
function get_sample(string $project, string $publicDelegatedPrefix, string $region): void
{
    // Create a client.
    $publicDelegatedPrefixesClient = new PublicDelegatedPrefixesClient();

    // Prepare the request message.
    $request = (new GetPublicDelegatedPrefixeRequest())
        ->setProject($project)
        ->setPublicDelegatedPrefix($publicDelegatedPrefix)
        ->setRegion($region);

    // Call the API and handle any network failures.
    try {
        /** @var PublicDelegatedPrefix $response */
        $response = $publicDelegatedPrefixesClient->get($request);
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
    $project = '[PROJECT]';
    $publicDelegatedPrefix = '[PUBLIC_DELEGATED_PREFIX]';
    $region = '[REGION]';

    get_sample($project, $publicDelegatedPrefix, $region);
}
// [END compute_v1_generated_PublicDelegatedPrefixes_Get_sync]
