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

// [START chronicle_v1_generated_RuleService_CreateRetrohunt_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Chronicle\V1\Client\RuleServiceClient;
use Google\Cloud\Chronicle\V1\CreateRetrohuntRequest;
use Google\Cloud\Chronicle\V1\Retrohunt;
use Google\Rpc\Status;
use Google\Type\Interval;

/**
 * Create a Retrohunt.
 *
 * @param string $formattedParent The parent of retrohunt, which is a rule.
 *                                Format:
 *                                `projects/{project}/locations/{location}/instances/{instance}/rules/{rule}`
 *                                Please see {@see RuleServiceClient::ruleName()} for help formatting this field.
 */
function create_retrohunt_sample(string $formattedParent): void
{
    // Create a client.
    $ruleServiceClient = new RuleServiceClient();

    // Prepare the request message.
    $retrohuntProcessInterval = new Interval();
    $retrohunt = (new Retrohunt())
        ->setProcessInterval($retrohuntProcessInterval);
    $request = (new CreateRetrohuntRequest())
        ->setParent($formattedParent)
        ->setRetrohunt($retrohunt);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $ruleServiceClient->createRetrohunt($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Retrohunt $result */
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
    $formattedParent = RuleServiceClient::ruleName('[PROJECT]', '[LOCATION]', '[INSTANCE]', '[RULE]');

    create_retrohunt_sample($formattedParent);
}
// [END chronicle_v1_generated_RuleService_CreateRetrohunt_sync]
