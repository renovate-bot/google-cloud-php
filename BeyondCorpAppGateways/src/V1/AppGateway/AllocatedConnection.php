<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appgateways/v1/app_gateways_service.proto

namespace Google\Cloud\BeyondCorp\AppGateways\V1\AppGateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Allocated connection of the AppGateway.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appgateways.v1.AppGateway.AllocatedConnection</code>
 */
class AllocatedConnection extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The PSC uri of an allocated connection
     *
     * Generated from protobuf field <code>string psc_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $psc_uri = '';
    /**
     * Required. The ingress port of an allocated connection
     *
     * Generated from protobuf field <code>int32 ingress_port = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ingress_port = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $psc_uri
     *           Required. The PSC uri of an allocated connection
     *     @type int $ingress_port
     *           Required. The ingress port of an allocated connection
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appgateways\V1\AppGatewaysService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The PSC uri of an allocated connection
     *
     * Generated from protobuf field <code>string psc_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPscUri()
    {
        return $this->psc_uri;
    }

    /**
     * Required. The PSC uri of an allocated connection
     *
     * Generated from protobuf field <code>string psc_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPscUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->psc_uri = $var;

        return $this;
    }

    /**
     * Required. The ingress port of an allocated connection
     *
     * Generated from protobuf field <code>int32 ingress_port = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getIngressPort()
    {
        return $this->ingress_port;
    }

    /**
     * Required. The ingress port of an allocated connection
     *
     * Generated from protobuf field <code>int32 ingress_port = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setIngressPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->ingress_port = $var;

        return $this;
    }

}


