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

// [START chat_v1_generated_ChatService_GetCustomEmoji_sync]
use Google\ApiCore\ApiException;
use Google\Apps\Chat\V1\Client\ChatServiceClient;
use Google\Apps\Chat\V1\CustomEmoji;
use Google\Apps\Chat\V1\GetCustomEmojiRequest;

/**
 * Returns details about a custom emoji.
 *
 * Custom emojis are only available for Google Workspace accounts, and the
 * administrator must turn custom emojis on for the organization. For more
 * information, see [Learn about custom emojis in Google
 * Chat](https://support.google.com/chat/answer/12800149) and
 * [Manage custom emoji
 * permissions](https://support.google.com/a/answer/12850085).
 *
 * Requires [user
 * authentication](https://developers.google.com/workspace/chat/authenticate-authorize-chat-user)
 * with one of the following [authorization
 * scopes](https://developers.google.com/workspace/chat/authenticate-authorize#chat-api-scopes):
 *
 * - `https://www.googleapis.com/auth/chat.customemojis.readonly`
 * - `https://www.googleapis.com/auth/chat.customemojis`
 *
 * @param string $formattedName Resource name of the custom emoji.
 *
 *                              Format: `customEmojis/{customEmoji}`
 *
 *                              You can use the emoji name as an alias for `{customEmoji}`. For example,
 *                              `customEmojis/:example-emoji:` where `:example-emoji:` is the emoji name
 *                              for a custom emoji. Please see
 *                              {@see ChatServiceClient::customEmojiName()} for help formatting this field.
 */
function get_custom_emoji_sample(string $formattedName): void
{
    // Create a client.
    $chatServiceClient = new ChatServiceClient();

    // Prepare the request message.
    $request = (new GetCustomEmojiRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var CustomEmoji $response */
        $response = $chatServiceClient->getCustomEmoji($request);
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
    $formattedName = ChatServiceClient::customEmojiName('[CUSTOM_EMOJI]');

    get_custom_emoji_sample($formattedName);
}
// [END chat_v1_generated_ChatService_GetCustomEmoji_sync]
