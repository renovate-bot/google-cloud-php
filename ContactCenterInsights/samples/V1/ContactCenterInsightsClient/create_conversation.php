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

// [START contactcenterinsights_v1_generated_ContactCenterInsights_CreateConversation_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ContactCenterInsights\V1\Client\ContactCenterInsightsClient;
use Google\Cloud\ContactCenterInsights\V1\Conversation;
use Google\Cloud\ContactCenterInsights\V1\CreateConversationRequest;

/**
 * Creates a conversation.
 * Note that this method does not support audio transcription or redaction.
 * Use `conversations.upload` instead.
 *
 * @param string $formattedParent The parent resource of the conversation. Please see
 *                                {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
 */
function create_conversation_sample(string $formattedParent): void
{
    // Create a client.
    $contactCenterInsightsClient = new ContactCenterInsightsClient();

    // Prepare the request message.
    $conversation = new Conversation();
    $request = (new CreateConversationRequest())
        ->setParent($formattedParent)
        ->setConversation($conversation);

    // Call the API and handle any network failures.
    try {
        /** @var Conversation $response */
        $response = $contactCenterInsightsClient->createConversation($request);
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
    $formattedParent = ContactCenterInsightsClient::locationName('[PROJECT]', '[LOCATION]');

    create_conversation_sample($formattedParent);
}
// [END contactcenterinsights_v1_generated_ContactCenterInsights_CreateConversation_sync]
