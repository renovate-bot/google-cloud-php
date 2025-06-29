<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/ad_break_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for `DeleteAdBreak` method.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.DeleteAdBreakRequest</code>
 */
class DeleteAdBreakRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the ad break to delete.
     * Format:
     * `networks/{network_code}/liveStreamEventsByAssetKey/{asset_key}/adBreaks/{ad_break}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the ad break to delete.
     *
     *                     Format:
     *                     `networks/{network_code}/liveStreamEventsByAssetKey/{asset_key}/adBreaks/{ad_break}`
     *                     Please see {@see AdBreakServiceClient::adBreakName()} for help formatting this field.
     *
     * @return \Google\Ads\AdManager\V1\DeleteAdBreakRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the ad break to delete.
     *           Format:
     *           `networks/{network_code}/liveStreamEventsByAssetKey/{asset_key}/adBreaks/{ad_break}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\AdBreakService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the ad break to delete.
     * Format:
     * `networks/{network_code}/liveStreamEventsByAssetKey/{asset_key}/adBreaks/{ad_break}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the ad break to delete.
     * Format:
     * `networks/{network_code}/liveStreamEventsByAssetKey/{asset_key}/adBreaks/{ad_break}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

