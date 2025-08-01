<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policysimulator/v1/orgpolicy.proto

namespace Google\Cloud\PolicySimulator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetOrgPolicyViolationsPreviewRequest is the request message for
 * [OrgPolicyViolationsPreviewService.GetOrgPolicyViolationsPreview][google.cloud.policysimulator.v1.OrgPolicyViolationsPreviewService.GetOrgPolicyViolationsPreview].
 *
 * Generated from protobuf message <code>google.cloud.policysimulator.v1.GetOrgPolicyViolationsPreviewRequest</code>
 */
class GetOrgPolicyViolationsPreviewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the OrgPolicyViolationsPreview to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the OrgPolicyViolationsPreview to get. Please see
     *                     {@see OrgPolicyViolationsPreviewServiceClient::orgPolicyViolationsPreviewName()} for help formatting this field.
     *
     * @return \Google\Cloud\PolicySimulator\V1\GetOrgPolicyViolationsPreviewRequest
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
     *           Required. The name of the OrgPolicyViolationsPreview to get.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policysimulator\V1\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the OrgPolicyViolationsPreview to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the OrgPolicyViolationsPreview to get.
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

