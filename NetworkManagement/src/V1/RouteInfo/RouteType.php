<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\RouteInfo;

use UnexpectedValueException;

/**
 * Type of route:
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.RouteInfo.RouteType</code>
 */
class RouteType
{
    /**
     * Unspecified type. Default value.
     *
     * Generated from protobuf enum <code>ROUTE_TYPE_UNSPECIFIED = 0;</code>
     */
    const ROUTE_TYPE_UNSPECIFIED = 0;
    /**
     * Route is a subnet route automatically created by the system.
     *
     * Generated from protobuf enum <code>SUBNET = 1;</code>
     */
    const SUBNET = 1;
    /**
     * Static route created by the user, including the default route to the
     * internet.
     *
     * Generated from protobuf enum <code>STATIC = 2;</code>
     */
    const PBSTATIC = 2;
    /**
     * Dynamic route exchanged between BGP peers.
     *
     * Generated from protobuf enum <code>DYNAMIC = 3;</code>
     */
    const DYNAMIC = 3;
    /**
     * A subnet route received from peering network or NCC Hub.
     *
     * Generated from protobuf enum <code>PEERING_SUBNET = 4;</code>
     */
    const PEERING_SUBNET = 4;
    /**
     * A static route received from peering network.
     *
     * Generated from protobuf enum <code>PEERING_STATIC = 5;</code>
     */
    const PEERING_STATIC = 5;
    /**
     * A dynamic route received from peering network or NCC Hub.
     *
     * Generated from protobuf enum <code>PEERING_DYNAMIC = 6;</code>
     */
    const PEERING_DYNAMIC = 6;
    /**
     * Policy based route.
     *
     * Generated from protobuf enum <code>POLICY_BASED = 7;</code>
     */
    const POLICY_BASED = 7;
    /**
     * Advertised route. Synthetic route which is used to transition from the
     * StartFromPrivateNetwork state in Connectivity tests.
     *
     * Generated from protobuf enum <code>ADVERTISED = 101;</code>
     */
    const ADVERTISED = 101;

    private static $valueToName = [
        self::ROUTE_TYPE_UNSPECIFIED => 'ROUTE_TYPE_UNSPECIFIED',
        self::SUBNET => 'SUBNET',
        self::PBSTATIC => 'STATIC',
        self::DYNAMIC => 'DYNAMIC',
        self::PEERING_SUBNET => 'PEERING_SUBNET',
        self::PEERING_STATIC => 'PEERING_STATIC',
        self::PEERING_DYNAMIC => 'PEERING_DYNAMIC',
        self::POLICY_BASED => 'POLICY_BASED',
        self::ADVERTISED => 'ADVERTISED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


