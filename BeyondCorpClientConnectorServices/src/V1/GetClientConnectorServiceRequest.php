<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/clientconnectorservices/v1/client_connector_services_service.proto

namespace Google\Cloud\BeyondCorp\ClientConnectorServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a ClientConnectorService.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.clientconnectorservices.v1.GetClientConnectorServiceRequest</code>
 */
class GetClientConnectorServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the resource. Please see
     *                     {@see ClientConnectorServicesServiceClient::clientConnectorServiceName()} for help formatting this field.
     *
     * @return \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\GetClientConnectorServiceRequest
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
     *           Required. Name of the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Clientconnectorservices\V1\ClientConnectorServicesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the resource.
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

