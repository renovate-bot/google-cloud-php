<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/network.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get networks with IPs.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.ListNetworkUsageRequest</code>
 */
class ListNetworkUsageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent value (project and location).
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $location = '';

    /**
     * @param string $location Required. Parent value (project and location). Please see
     *                         {@see BareMetalSolutionClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\BareMetalSolution\V2\ListNetworkUsageRequest
     *
     * @experimental
     */
    public static function build(string $location): self
    {
        return (new self())
            ->setLocation($location);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Required. Parent value (project and location).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Network::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent value (project and location).
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. Parent value (project and location).
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

