<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/data_access_event.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V2;

class DataAccessEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/cloud/securitycenter/v2/data_access_event.protogoogle.cloud.securitycenter.v2"�
DataAccessEvent
event_id (	
principal_email (	L
	operation (29.google.cloud.securitycenter.v2.DataAccessEvent.Operation.

event_time (2.google.protobuf.Timestamp"D
	Operation
OPERATION_UNSPECIFIED 
READ
MOVE
COPYB�
"com.google.cloud.securitycenter.v2BDataAccessEventProtoPZJcloud.google.com/go/securitycenter/apiv2/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V2�Google\\Cloud\\SecurityCenter\\V2�!Google::Cloud::SecurityCenter::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

