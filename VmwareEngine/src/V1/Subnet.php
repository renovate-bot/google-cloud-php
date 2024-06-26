<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Subnet in a private cloud. Either `management` subnets (such as vMotion) that
 * are read-only, or `userDefined`, which can also be updated.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.Subnet</code>
 */
class Subnet extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of this subnet.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/subnets/my-subnet`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * The IP address range of the subnet in CIDR format '10.0.0.0/24'.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 7;</code>
     */
    protected $ip_cidr_range = '';
    /**
     * The IP address of the gateway of this subnet.
     * Must fall within the IP prefix defined above.
     *
     * Generated from protobuf field <code>string gateway_ip = 8;</code>
     */
    protected $gateway_ip = '';
    /**
     * Output only. The type of the subnet. For example "management" or
     * "userDefined".
     *
     * Generated from protobuf field <code>string type = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = '';
    /**
     * Output only. The state of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Subnet.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. VLAN ID of the VLAN on which the subnet is configured
     *
     * Generated from protobuf field <code>int32 vlan_id = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $vlan_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of this subnet.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/subnets/my-subnet`
     *     @type string $ip_cidr_range
     *           The IP address range of the subnet in CIDR format '10.0.0.0/24'.
     *     @type string $gateway_ip
     *           The IP address of the gateway of this subnet.
     *           Must fall within the IP prefix defined above.
     *     @type string $type
     *           Output only. The type of the subnet. For example "management" or
     *           "userDefined".
     *     @type int $state
     *           Output only. The state of the resource.
     *     @type int $vlan_id
     *           Output only. VLAN ID of the VLAN on which the subnet is configured
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of this subnet.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/subnets/my-subnet`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of this subnet.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/subnets/my-subnet`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The IP address range of the subnet in CIDR format '10.0.0.0/24'.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 7;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return $this->ip_cidr_range;
    }

    /**
     * The IP address range of the subnet in CIDR format '10.0.0.0/24'.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * The IP address of the gateway of this subnet.
     * Must fall within the IP prefix defined above.
     *
     * Generated from protobuf field <code>string gateway_ip = 8;</code>
     * @return string
     */
    public function getGatewayIp()
    {
        return $this->gateway_ip;
    }

    /**
     * The IP address of the gateway of this subnet.
     * Must fall within the IP prefix defined above.
     *
     * Generated from protobuf field <code>string gateway_ip = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_ip = $var;

        return $this;
    }

    /**
     * Output only. The type of the subnet. For example "management" or
     * "userDefined".
     *
     * Generated from protobuf field <code>string type = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the subnet. For example "management" or
     * "userDefined".
     *
     * Generated from protobuf field <code>string type = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The state of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Subnet.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Subnet.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\Subnet\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. VLAN ID of the VLAN on which the subnet is configured
     *
     * Generated from protobuf field <code>int32 vlan_id = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVlanId()
    {
        return $this->vlan_id;
    }

    /**
     * Output only. VLAN ID of the VLAN on which the subnet is configured
     *
     * Generated from protobuf field <code>int32 vlan_id = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVlanId($var)
    {
        GPBUtil::checkInt32($var);
        $this->vlan_id = $var;

        return $this;
    }

}

