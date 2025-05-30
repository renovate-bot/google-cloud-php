<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CancelDisplayVideo360AdvertiserLinkProposal RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CancelDisplayVideo360AdvertiserLinkProposalRequest</code>
 */
class CancelDisplayVideo360AdvertiserLinkProposalRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the DisplayVideo360AdvertiserLinkProposal to cancel.
     * Example format: properties/1234/displayVideo360AdvertiserLinkProposals/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the DisplayVideo360AdvertiserLinkProposal to cancel.
     *           Example format: properties/1234/displayVideo360AdvertiserLinkProposals/5678
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the DisplayVideo360AdvertiserLinkProposal to cancel.
     * Example format: properties/1234/displayVideo360AdvertiserLinkProposals/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the DisplayVideo360AdvertiserLinkProposal to cancel.
     * Example format: properties/1234/displayVideo360AdvertiserLinkProposals/5678
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

