<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with a Cloud Redis Instance.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.RedisInstanceInfo</code>
 */
class RedisInstanceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * URI of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * URI of a Cloud Redis Instance network.
     *
     * Generated from protobuf field <code>string network_uri = 3;</code>
     */
    protected $network_uri = '';
    /**
     * Primary endpoint IP address of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string primary_endpoint_ip = 4;</code>
     */
    protected $primary_endpoint_ip = '';
    /**
     * Read endpoint IP address of a Cloud Redis Instance (if applicable).
     *
     * Generated from protobuf field <code>string read_endpoint_ip = 5;</code>
     */
    protected $read_endpoint_ip = '';
    /**
     * Region in which the Cloud Redis Instance is defined.
     *
     * Generated from protobuf field <code>string region = 6;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Name of a Cloud Redis Instance.
     *     @type string $uri
     *           URI of a Cloud Redis Instance.
     *     @type string $network_uri
     *           URI of a Cloud Redis Instance network.
     *     @type string $primary_endpoint_ip
     *           Primary endpoint IP address of a Cloud Redis Instance.
     *     @type string $read_endpoint_ip
     *           Read endpoint IP address of a Cloud Redis Instance (if applicable).
     *     @type string $region
     *           Region in which the Cloud Redis Instance is defined.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Name of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * URI of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * URI of a Cloud Redis Instance network.
     *
     * Generated from protobuf field <code>string network_uri = 3;</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->network_uri;
    }

    /**
     * URI of a Cloud Redis Instance network.
     *
     * Generated from protobuf field <code>string network_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_uri = $var;

        return $this;
    }

    /**
     * Primary endpoint IP address of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string primary_endpoint_ip = 4;</code>
     * @return string
     */
    public function getPrimaryEndpointIp()
    {
        return $this->primary_endpoint_ip;
    }

    /**
     * Primary endpoint IP address of a Cloud Redis Instance.
     *
     * Generated from protobuf field <code>string primary_endpoint_ip = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryEndpointIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_endpoint_ip = $var;

        return $this;
    }

    /**
     * Read endpoint IP address of a Cloud Redis Instance (if applicable).
     *
     * Generated from protobuf field <code>string read_endpoint_ip = 5;</code>
     * @return string
     */
    public function getReadEndpointIp()
    {
        return $this->read_endpoint_ip;
    }

    /**
     * Read endpoint IP address of a Cloud Redis Instance (if applicable).
     *
     * Generated from protobuf field <code>string read_endpoint_ip = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setReadEndpointIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_endpoint_ip = $var;

        return $this;
    }

    /**
     * Region in which the Cloud Redis Instance is defined.
     *
     * Generated from protobuf field <code>string region = 6;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Region in which the Cloud Redis Instance is defined.
     *
     * Generated from protobuf field <code>string region = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

