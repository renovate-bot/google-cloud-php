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

return [
    'interfaces' => [
        'google.cloud.compute.v1.Disks' => [
            'AddResourcePolicies' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'BulkInsert' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                ],
            ],
            'BulkSetLabels' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                ],
            ],
            'CreateSnapshot' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'Delete' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'Insert' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                ],
            ],
            'RemoveResourcePolicies' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'Resize' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'SetLabels' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'resource',
                        'fieldAccessors' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'StartAsyncReplication' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'StopAsyncReplication' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'StopGroupAsyncReplication' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                ],
            ],
            'Update' => [
                'longRunning' => [
                    'additionalArgumentMethods' => [
                        'getProject',
                        'getZone',
                    ],
                    'getOperationMethod' => 'get',
                    'cancelOperationMethod' => null,
                    'deleteOperationMethod' => 'delete',
                    'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
                    'operationErrorMessageMethod' => 'getHttpErrorMessage',
                    'operationNameMethod' => 'getName',
                    'operationStatusMethod' => 'getStatus',
                    'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
                    'getOperationRequest' => '\Google\Cloud\Compute\V1\GetZoneOperationRequest',
                    'cancelOperationRequest' => null,
                    'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteZoneOperationRequest',
                ],
                'responseType' => 'Google\Cloud\Compute\V1\Operation',
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'AggregatedList' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getMaxResults',
                    'requestPageSizeSetMethod' => 'setMaxResults',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getItems',
                ],
                'callType' => \Google\ApiCore\Call::PAGINATED_CALL,
                'responseType' => 'Google\Cloud\Compute\V1\DiskAggregatedList',
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Get' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\Compute\V1\Disk',
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'disk',
                        'fieldAccessors' => [
                            'getDisk',
                        ],
                    ],
                ],
            ],
            'GetIamPolicy' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\Compute\V1\Policy',
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'resource',
                        'fieldAccessors' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'List' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getMaxResults',
                    'requestPageSizeSetMethod' => 'setMaxResults',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getItems',
                ],
                'callType' => \Google\ApiCore\Call::PAGINATED_CALL,
                'responseType' => 'Google\Cloud\Compute\V1\DiskList',
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                ],
            ],
            'SetIamPolicy' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\Compute\V1\Policy',
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'resource',
                        'fieldAccessors' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'TestIamPermissions' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\Compute\V1\TestPermissionsResponse',
                'headerParams' => [
                    [
                        'keyName' => 'project',
                        'fieldAccessors' => [
                            'getProject',
                        ],
                    ],
                    [
                        'keyName' => 'zone',
                        'fieldAccessors' => [
                            'getZone',
                        ],
                    ],
                    [
                        'keyName' => 'resource',
                        'fieldAccessors' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
