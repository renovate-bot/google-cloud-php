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

// [START merchantapi_v1beta_generated_OmnichannelSettingsService_UpdateOmnichannelSetting_sync]
use Google\ApiCore\ApiException;
use Google\Protobuf\FieldMask;
use Google\Shopping\Merchant\Accounts\V1beta\Client\OmnichannelSettingsServiceClient;
use Google\Shopping\Merchant\Accounts\V1beta\OmnichannelSetting;
use Google\Shopping\Merchant\Accounts\V1beta\OmnichannelSetting\LsfType;
use Google\Shopping\Merchant\Accounts\V1beta\UpdateOmnichannelSettingRequest;

/**
 * Update the omnichannel setting for a given merchant in a given country.
 *
 * @param string $omnichannelSettingRegionCode Immutable. Region code defined by
 *                                             [CLDR](https://cldr.unicode.org/). Must be provided in the Create method,
 *                                             and is immutable.
 * @param int    $omnichannelSettingLsfType    The Local Store Front type for this country.
 */
function update_omnichannel_setting_sample(
    string $omnichannelSettingRegionCode,
    int $omnichannelSettingLsfType
): void {
    // Create a client.
    $omnichannelSettingsServiceClient = new OmnichannelSettingsServiceClient();

    // Prepare the request message.
    $omnichannelSetting = (new OmnichannelSetting())
        ->setRegionCode($omnichannelSettingRegionCode)
        ->setLsfType($omnichannelSettingLsfType);
    $updateMask = new FieldMask();
    $request = (new UpdateOmnichannelSettingRequest())
        ->setOmnichannelSetting($omnichannelSetting)
        ->setUpdateMask($updateMask);

    // Call the API and handle any network failures.
    try {
        /** @var OmnichannelSetting $response */
        $response = $omnichannelSettingsServiceClient->updateOmnichannelSetting($request);
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
    $omnichannelSettingRegionCode = '[REGION_CODE]';
    $omnichannelSettingLsfType = LsfType::LSF_TYPE_UNSPECIFIED;

    update_omnichannel_setting_sample($omnichannelSettingRegionCode, $omnichannelSettingLsfType);
}
// [END merchantapi_v1beta_generated_OmnichannelSettingsService_UpdateOmnichannelSetting_sync]
