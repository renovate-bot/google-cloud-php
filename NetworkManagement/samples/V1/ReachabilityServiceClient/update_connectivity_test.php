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

// [START networkmanagement_v1_generated_ReachabilityService_UpdateConnectivityTest_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\NetworkManagement\V1\Client\ReachabilityServiceClient;
use Google\Cloud\NetworkManagement\V1\ConnectivityTest;
use Google\Cloud\NetworkManagement\V1\Endpoint;
use Google\Cloud\NetworkManagement\V1\UpdateConnectivityTestRequest;
use Google\Protobuf\FieldMask;
use Google\Rpc\Status;

/**
 * Updates the configuration of an existing `ConnectivityTest`.
 * After you update a test, the reachability analysis is performed as part
 * of the long running operation, which completes when the analysis completes.
 * The Reachability state in the test resource is updated with the new result.
 *
 * If the endpoint specifications in `ConnectivityTest` are invalid
 * (for example, they contain non-existent resources in the network, or the
 * user does not have read permissions to the network configurations of
 * listed projects), then the reachability result returns a value of
 * <code>UNKNOWN</code>.
 *
 * If the endpoint specifications in `ConnectivityTest` are incomplete, the
 * reachability result returns a value of `AMBIGUOUS`. See the documentation
 * in `ConnectivityTest` for more details.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function update_connectivity_test_sample(): void
{
    // Create a client.
    $reachabilityServiceClient = new ReachabilityServiceClient();

    // Prepare the request message.
    $updateMask = new FieldMask();
    $resourceSource = new Endpoint();
    $resourceDestination = new Endpoint();
    $resource = (new ConnectivityTest())
        ->setSource($resourceSource)
        ->setDestination($resourceDestination);
    $request = (new UpdateConnectivityTestRequest())
        ->setUpdateMask($updateMask)
        ->setResource($resource);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $reachabilityServiceClient->updateConnectivityTest($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var ConnectivityTest $result */
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
// [END networkmanagement_v1_generated_ReachabilityService_UpdateConnectivityTest_sync]
