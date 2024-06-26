<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/simulation.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V2;

class Simulation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\ValuedResource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/securitycenter/v2/simulation.protogoogle.cloud.securitycenter.v2google/api/resource.proto-google/cloud/securitycenter/v2/resource.proto4google/cloud/securitycenter/v2/valued_resource.protogoogle/protobuf/timestamp.proto"�

Simulation
name (	4
create_time (2.google.protobuf.TimestampB�Ad
resource_value_configs_metadata (2;.google.cloud.securitycenter.v2.ResourceValueConfigMetadataE
cloud_provider (2-.google.cloud.securitycenter.v2.CloudProvider:��A�
(securitycenter.googleapis.com/Simulation5organizations/{organization}/simulations/{simulation}Jorganizations/{organization}/locations/{location}/simulations/{simluation}*simulations2
simulationB�
"com.google.cloud.securitycenter.v2BSimulationProtoPZJcloud.google.com/go/securitycenter/apiv2/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V2�Google\\Cloud\\SecurityCenter\\V2�!Google::Cloud::SecurityCenter::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

