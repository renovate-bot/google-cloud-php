<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [VmwareEngine.FetchNetworkPolicyExternalAddresses][google.cloud.vmwareengine.v1.VmwareEngine.FetchNetworkPolicyExternalAddresses]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.FetchNetworkPolicyExternalAddressesResponse</code>
 */
class FetchNetworkPolicyExternalAddressesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of external IP addresses assigned to VMware workload VMs within the
     * scope of the given network policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.ExternalAddress external_addresses = 1;</code>
     */
    private $external_addresses;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VmwareEngine\V1\ExternalAddress>|\Google\Protobuf\Internal\RepeatedField $external_addresses
     *           A list of external IP addresses assigned to VMware workload VMs within the
     *           scope of the given network policy.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of external IP addresses assigned to VMware workload VMs within the
     * scope of the given network policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.ExternalAddress external_addresses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExternalAddresses()
    {
        return $this->external_addresses;
    }

    /**
     * A list of external IP addresses assigned to VMware workload VMs within the
     * scope of the given network policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.ExternalAddress external_addresses = 1;</code>
     * @param array<\Google\Cloud\VmwareEngine\V1\ExternalAddress>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExternalAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\ExternalAddress::class);
        $this->external_addresses = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

