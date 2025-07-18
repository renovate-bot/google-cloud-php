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

// [START dataform_v1_generated_Dataform_MoveFile_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dataform\V1\Client\DataformClient;
use Google\Cloud\Dataform\V1\MoveFileRequest;
use Google\Cloud\Dataform\V1\MoveFileResponse;

/**
 * Moves a file (inside a Workspace) to a new location.
 *
 * @param string $formattedWorkspace The workspace's name. Please see
 *                                   {@see DataformClient::workspaceName()} for help formatting this field.
 * @param string $path               The file's full path including filename, relative to the
 *                                   workspace root.
 * @param string $newPath            The file's new path including filename, relative to the workspace
 *                                   root.
 */
function move_file_sample(string $formattedWorkspace, string $path, string $newPath): void
{
    // Create a client.
    $dataformClient = new DataformClient();

    // Prepare the request message.
    $request = (new MoveFileRequest())
        ->setWorkspace($formattedWorkspace)
        ->setPath($path)
        ->setNewPath($newPath);

    // Call the API and handle any network failures.
    try {
        /** @var MoveFileResponse $response */
        $response = $dataformClient->moveFile($request);
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
    $formattedWorkspace = DataformClient::workspaceName(
        '[PROJECT]',
        '[LOCATION]',
        '[REPOSITORY]',
        '[WORKSPACE]'
    );
    $path = '[PATH]';
    $newPath = '[NEW_PATH]';

    move_file_sample($formattedWorkspace, $path, $newPath);
}
// [END dataform_v1_generated_Dataform_MoveFile_sync]
