<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/logging_config.proto

namespace GPBMetadata\Google\Cloud\Eventarc\V1;

class LoggingConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/eventarc/v1/logging_config.protogoogle.cloud.eventarc.v1"�
LoggingConfigN
log_severity (23.google.cloud.eventarc.v1.LoggingConfig.LogSeverityB�A"�
LogSeverity
LOG_SEVERITY_UNSPECIFIED 
NONE	
DEBUG
INFO

NOTICE
WARNING	
ERROR
CRITICAL	
ALERT
	EMERGENCY	B�
com.google.cloud.eventarc.v1BLoggingConfigProtoPZ8cloud.google.com/go/eventarc/apiv1/eventarcpb;eventarcpb�Google.Cloud.Eventarc.V1�Google\\Cloud\\Eventarc\\V1�Google::Cloud::Eventarc::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

