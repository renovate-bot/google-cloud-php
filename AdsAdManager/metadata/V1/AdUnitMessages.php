<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/ad_unit_messages.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class AdUnitMessages
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Admanager\V1\AdUnitEnums::initOnce();
        \GPBMetadata\Google\Ads\Admanager\V1\AppliedLabel::initOnce();
        \GPBMetadata\Google\Ads\Admanager\V1\EnvironmentTypeEnum::initOnce();
        \GPBMetadata\Google\Ads\Admanager\V1\FrequencyCap::initOnce();
        \GPBMetadata\Google\Ads\Admanager\V1\Size::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/ads/admanager/v1/ad_unit_messages.protogoogle.ads.admanager.v1+google/ads/admanager/v1/applied_label.proto3google/ads/admanager/v1/environment_type_enum.proto+google/ads/admanager/v1/frequency_cap.proto"google/ads/admanager/v1/size.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"�
AdUnit
name (	B�A

ad_unit_id (B�AG
parent_ad_unit
 (	B*�A�A�A!
admanager.googleapis.com/AdUnitH �?
parent_path (2%.google.ads.admanager.v1.AdUnitParentB�A
display_name	 (	B�AH�!
ad_unit_code (	B�A�AH�P
status (26.google.ads.admanager.v1.AdUnitStatusEnum.AdUnitStatusB�AH�_
applied_target_window, (26.google.ads.admanager.v1.TargetWindowEnum.TargetWindowB�AH�d
effective_target_window- (26.google.ads.admanager.v1.TargetWindowEnum.TargetWindowB�A�AH�<
applied_teams (	B%�A�A
admanager.googleapis.com/Team4
teams (	B%�A�A
admanager.googleapis.com/Team
description (	B�AH�%
explicitly_targeted (B�AH�
has_children (B�AH�9
update_time (2.google.protobuf.TimestampB�AH	�?
ad_unit_sizes (2#.google.ads.admanager.v1.AdUnitSizeB�A3
external_set_top_box_channel_id (	B�AH
�:
refresh_delay (2.google.protobuf.DurationB�AH�B
applied_labels (2%.google.ads.admanager.v1.AppliedLabelB�AL
effective_applied_labels (2%.google.ads.admanager.v1.AppliedLabelB�AU
applied_label_frequency_caps (2*.google.ads.admanager.v1.LabelFrequencyCapB�AW
effective_label_frequency_caps (2*.google.ads.admanager.v1.LabelFrequencyCapB�A^
smart_size_mode (28.google.ads.admanager.v1.SmartSizeModeEnum.SmartSizeModeB�A�AH�)
applied_adsense_enabled (B�AH�+
effective_adsense_enabled (B�AH�:`�A]
admanager.googleapis.com/AdUnit)networks/{network_code}/adUnits/{ad_unit}*adUnits2adUnitB
_parent_ad_unitB
_display_nameB
_ad_unit_codeB	
_statusB
_applied_target_windowB
_effective_target_windowB
_descriptionB
_explicitly_targetedB
_has_childrenB
_update_timeB"
 _external_set_top_box_channel_idB
_refresh_delayB
_smart_size_modeB
_applied_adsense_enabledB
_effective_adsense_enabled"�

AdUnitSize0
size (2.google.ads.admanager.v1.SizeB�A[
environment_type (2<.google.ads.admanager.v1.EnvironmentTypeEnum.EnvironmentTypeB�A1

companions (2.google.ads.admanager.v1.Size"�
AdUnitParent?
parent_ad_unit (	B\'�A�A!
admanager.googleapis.com/AdUnit
display_name (	B�A
ad_unit_code (	B�A"�
LabelFrequencyCap5
label (	B&�A�A 
admanager.googleapis.com/Label<
frequency_cap (2%.google.ads.admanager.v1.FrequencyCapB�
com.google.ads.admanager.v1BAdUnitMessagesProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

