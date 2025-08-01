<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/configdelivery/v1/config_delivery.proto

namespace Google\Cloud\ConfigDelivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for response to listing FleetPackage
 *
 * Generated from protobuf message <code>google.cloud.configdelivery.v1.ListFleetPackagesResponse</code>
 */
class ListFleetPackagesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of FleetPackage
     *
     * Generated from protobuf field <code>repeated .google.cloud.configdelivery.v1.FleetPackage fleet_packages = 1;</code>
     */
    private $fleet_packages;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Unordered list. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ConfigDelivery\V1\FleetPackage>|\Google\Protobuf\Internal\RepeatedField $fleet_packages
     *           The list of FleetPackage
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Unordered list. Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Configdelivery\V1\ConfigDelivery::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of FleetPackage
     *
     * Generated from protobuf field <code>repeated .google.cloud.configdelivery.v1.FleetPackage fleet_packages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFleetPackages()
    {
        return $this->fleet_packages;
    }

    /**
     * The list of FleetPackage
     *
     * Generated from protobuf field <code>repeated .google.cloud.configdelivery.v1.FleetPackage fleet_packages = 1;</code>
     * @param array<\Google\Cloud\ConfigDelivery\V1\FleetPackage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFleetPackages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ConfigDelivery\V1\FleetPackage::class);
        $this->fleet_packages = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
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

    /**
     * Unordered list. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Unordered list. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

