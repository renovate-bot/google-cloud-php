<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for getting a source.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.GetSourceRequest</code>
 */
class GetSourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Relative resource name of the source. Its format is
     * `organizations/[organization_id]/source/[source_id]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Relative resource name of the source. Its format is
     *                     `organizations/[organization_id]/source/[source_id]`. Please see
     *                     {@see SecurityCenterClient::sourceName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenter\V1\GetSourceRequest
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
     *           Required. Relative resource name of the source. Its format is
     *           `organizations/[organization_id]/source/[source_id]`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Relative resource name of the source. Its format is
     * `organizations/[organization_id]/source/[source_id]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Relative resource name of the source. Its format is
     * `organizations/[organization_id]/source/[source_id]`.
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

