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

// [START compute_v1_generated_RegionInstanceGroupManagers_Resize_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Compute\V1\Client\RegionInstanceGroupManagersClient;
use Google\Cloud\Compute\V1\ResizeRegionInstanceGroupManagerRequest;
use Google\Rpc\Status;

/**
 * Changes the intended size of the managed instance group. If you increase the size, the group creates new instances using the current instance template. If you decrease the size, the group deletes one or more instances. The resize operation is marked DONE if the resize request is successful. The underlying actions take additional time. You must separately verify the status of the creating or deleting actions with the listmanagedinstances method. If the group is part of a backend service that has enabled connection draining, it can take up to 60 seconds after the connection draining duration has elapsed before the VM instance is removed or deleted.
 *
 * @param string $instanceGroupManager Name of the managed instance group.
 * @param string $project              Project ID for this request.
 * @param string $region               Name of the region scoping this request.
 * @param int    $size                 Number of instances that should exist in this instance group manager.
 */
function resize_sample(
    string $instanceGroupManager,
    string $project,
    string $region,
    int $size
): void {
    // Create a client.
    $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();

    // Prepare the request message.
    $request = (new ResizeRegionInstanceGroupManagerRequest())
        ->setInstanceGroupManager($instanceGroupManager)
        ->setProject($project)
        ->setRegion($region)
        ->setSize($size);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $regionInstanceGroupManagersClient->resize($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            printf('Operation completed successfully.' . PHP_EOL);
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
    $instanceGroupManager = '[INSTANCE_GROUP_MANAGER]';
    $project = '[PROJECT]';
    $region = '[REGION]';
    $size = 0;

    resize_sample($instanceGroupManager, $project, $region, $size);
}
// [END compute_v1_generated_RegionInstanceGroupManagers_Resize_sync]
