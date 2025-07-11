<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/programmatic_buyer_service.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class ProgrammaticBuyerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Admanager\V1\ProgrammaticBuyerMessages::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

8google/ads/admanager/v1/programmatic_buyer_service.protogoogle.ads.admanager.v1google/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"_
GetProgrammaticBuyerRequest@
name (	B2�A�A,
*admanager.googleapis.com/ProgrammaticBuyer"�
ListProgrammaticBuyersRequest8
parent (	B(�A�A"
 admanager.googleapis.com/Network
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A
skip (B�A"�
ListProgrammaticBuyersResponseG
programmatic_buyers (2*.google.ads.admanager.v1.ProgrammaticBuyer
next_page_token (	

total_size (2�
ProgrammaticBuyerService�
GetProgrammaticBuyer4.google.ads.admanager.v1.GetProgrammaticBuyerRequest*.google.ads.admanager.v1.ProgrammaticBuyer"9�Aname���,*/v1/{name=networks/*/programmaticBuyers/*}�
ListProgrammaticBuyers6.google.ads.admanager.v1.ListProgrammaticBuyersRequest7.google.ads.admanager.v1.ListProgrammaticBuyersResponse";�Aparent���,*/v1/{parent=networks/*}/programmaticBuyersG�Aadmanager.googleapis.com�A)https://www.googleapis.com/auth/admanagerB�
com.google.ads.admanager.v1BProgrammaticBuyerServiceProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

