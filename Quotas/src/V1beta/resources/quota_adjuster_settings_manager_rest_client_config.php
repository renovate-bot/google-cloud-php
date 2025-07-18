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
                'method' => 'get',
                'uriTemplate' => '/v1beta/{name=projects/*/locations/*/quotaAdjusterSettings}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1beta/{name=folders/*/locations/*/quotaAdjusterSettings}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1beta/{name=organizations/*/locations/*/quotaAdjusterSettings}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'UpdateQuotaAdjusterSettings' => [
                'method' => 'patch',
                'uriTemplate' => '/v1beta/{quota_adjuster_settings.name=projects/*/locations/*/quotaAdjusterSettings}',
                'body' => 'quota_adjuster_settings',
                'additionalBindings' => [
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v1beta/{quota_adjuster_settings.name=folders/*/locations/*/quotaAdjusterSettings}',
                        'body' => 'quota_adjuster_settings',
                    ],
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v1beta/{quota_adjuster_settings.name=organizations/*/locations/*/quotaAdjusterSettings}',
                        'body' => 'quota_adjuster_settings',
                    ],
                ],
                'placeholders' => [
                    'quota_adjuster_settings.name' => [
                        'getters' => [
                            'getQuotaAdjusterSettings',
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'numericEnums' => true,
];
