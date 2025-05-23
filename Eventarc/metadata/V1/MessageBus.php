<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/message_bus.proto

namespace GPBMetadata\Google\Cloud\Eventarc\V1;

class MessageBus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Eventarc\V1\LoggingConfig::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/eventarc/v1/message_bus.protogoogle.cloud.eventarc.v1google/api/resource.proto-google/cloud/eventarc/v1/logging_config.protogoogle/protobuf/timestamp.proto"�

MessageBus
name (	B�A
uid (	B�A
etag (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AE
labels (20.google.cloud.eventarc.v1.MessageBus.LabelsEntryB�AO
annotations (25.google.cloud.eventarc.v1.MessageBus.AnnotationsEntryB�A
display_name (	B�AB
crypto_key_name
 (	B)�A�A#
!cloudkms.googleapis.com/CryptoKeyD
logging_config (2\'.google.cloud.eventarc.v1.LoggingConfigB�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:��A�
"eventarc.googleapis.com/MessageBusBprojects/{project}/locations/{location}/messageBuses/{message_bus}*messageBuses2
messageBusB�
com.google.cloud.eventarc.v1BMessageBusProtoPZ8cloud.google.com/go/eventarc/apiv1/eventarcpb;eventarcpb�Google.Cloud.Eventarc.V1�Google\\Cloud\\Eventarc\\V1�Google::Cloud::Eventarc::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

