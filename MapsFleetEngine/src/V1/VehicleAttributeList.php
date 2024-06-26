<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicle_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list-of-lists datatype for vehicle attributes.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.VehicleAttributeList</code>
 */
class VehicleAttributeList extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of attributes in this collection.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.VehicleAttribute attributes = 1;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Maps\FleetEngine\V1\VehicleAttribute>|\Google\Protobuf\Internal\RepeatedField $attributes
     *           A list of attributes in this collection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\VehicleApi::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of attributes in this collection.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.VehicleAttribute attributes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * A list of attributes in this collection.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.VehicleAttribute attributes = 1;</code>
     * @param array<\Google\Maps\FleetEngine\V1\VehicleAttribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\V1\VehicleAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

}

