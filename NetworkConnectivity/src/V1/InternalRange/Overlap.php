<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/internal_range.proto

namespace Google\Cloud\NetworkConnectivity\V1\InternalRange;

use UnexpectedValueException;

/**
 * Overlap specifications.
 *
 * Protobuf type <code>google.cloud.networkconnectivity.v1.InternalRange.Overlap</code>
 */
class Overlap
{
    /**
     * No overlap overrides.
     *
     * Generated from protobuf enum <code>OVERLAP_UNSPECIFIED = 0;</code>
     */
    const OVERLAP_UNSPECIFIED = 0;
    /**
     * Allow creation of static routes more specific that the current
     * internal range.
     *
     * Generated from protobuf enum <code>OVERLAP_ROUTE_RANGE = 1;</code>
     */
    const OVERLAP_ROUTE_RANGE = 1;
    /**
     * Allow creation of internal ranges that overlap with existing subnets.
     *
     * Generated from protobuf enum <code>OVERLAP_EXISTING_SUBNET_RANGE = 2;</code>
     */
    const OVERLAP_EXISTING_SUBNET_RANGE = 2;

    private static $valueToName = [
        self::OVERLAP_UNSPECIFIED => 'OVERLAP_UNSPECIFIED',
        self::OVERLAP_ROUTE_RANGE => 'OVERLAP_ROUTE_RANGE',
        self::OVERLAP_EXISTING_SUBNET_RANGE => 'OVERLAP_EXISTING_SUBNET_RANGE',
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
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


