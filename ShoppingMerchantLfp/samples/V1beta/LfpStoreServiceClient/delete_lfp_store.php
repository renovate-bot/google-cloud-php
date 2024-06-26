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

// [START merchantapi_v1beta_generated_LfpStoreService_DeleteLfpStore_sync]
use Google\ApiCore\ApiException;
use Google\Shopping\Merchant\Lfp\V1beta\Client\LfpStoreServiceClient;
use Google\Shopping\Merchant\Lfp\V1beta\DeleteLfpStoreRequest;

/**
 * Deletes a store for a target merchant.
 *
 * @param string $formattedName The name of the store to delete for the target merchant account.
 *                              Format: `accounts/{account}/lfpStores/{target_merchant}~{store_code}`
 *                              Please see {@see LfpStoreServiceClient::lfpStoreName()} for help formatting this field.
 */
function delete_lfp_store_sample(string $formattedName): void
{
    // Create a client.
    $lfpStoreServiceClient = new LfpStoreServiceClient();

    // Prepare the request message.
    $request = (new DeleteLfpStoreRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $lfpStoreServiceClient->deleteLfpStore($request);
        printf('Call completed successfully.' . PHP_EOL);
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
    $formattedName = LfpStoreServiceClient::lfpStoreName(
        '[ACCOUNT]',
        '[TARGET_MERCHANT]',
        '[STORE_CODE]'
    );

    delete_lfp_store_sample($formattedName);
}
// [END merchantapi_v1beta_generated_LfpStoreService_DeleteLfpStore_sync]
