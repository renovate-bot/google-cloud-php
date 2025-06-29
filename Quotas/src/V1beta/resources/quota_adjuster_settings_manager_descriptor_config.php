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

return [
    'interfaces' => [
        'google.api.cloudquotas.v1beta.QuotaAdjusterSettingsManager' => [
            'GetQuotaAdjusterSettings' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings',
                'headerParams' => [
                    [
                        'keyName' => 'name',
                        'fieldAccessors' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'UpdateQuotaAdjusterSettings' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\CloudQuotas\V1beta\QuotaAdjusterSettings',
                'headerParams' => [
                    [
                        'keyName' => 'quota_adjuster_settings.name',
                        'fieldAccessors' => [
                            'getQuotaAdjusterSettings',
                            'getName',
                        ],
                    ],
                ],
            ],
            'templateMap' => [
                'folderLocationQuotaAdjusterSettings' => 'folders/{folder}/locations/{location}/quotaAdjusterSettings',
                'organizationLocationQuotaAdjusterSettings' => 'organizations/{organization}/locations/{location}/quotaAdjusterSettings',
                'projectLocationQuotaAdjusterSettings' => 'projects/{project}/locations/{location}/quotaAdjusterSettings',
                'quotaAdjusterSettings' => 'projects/{project}/locations/{location}/quotaAdjusterSettings',
            ],
        ],
    ],
];
