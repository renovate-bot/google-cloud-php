<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/gateway.proto

namespace Google\Cloud\NetworkServices\V1\Gateway;

use UnexpectedValueException;

/**
 * The types of IP version for the gateway.
 * Possible values are:
 * * IPV4
 * * IPV6
 *
 * Protobuf type <code>google.cloud.networkservices.v1.Gateway.IpVersion</code>
 */
class IpVersion
{
    /**
     * The type when IP version is not specified. Defaults to IPV4.
     *
     * Generated from protobuf enum <code>IP_VERSION_UNSPECIFIED = 0;</code>
     */
    const IP_VERSION_UNSPECIFIED = 0;
    /**
     * The type for IP version 4.
     *
     * Generated from protobuf enum <code>IPV4 = 1;</code>
     */
    const IPV4 = 1;
    /**
     * The type for IP version 6.
     *
     * Generated from protobuf enum <code>IPV6 = 2;</code>
     */
    const IPV6 = 2;

    private static $valueToName = [
        self::IP_VERSION_UNSPECIFIED => 'IP_VERSION_UNSPECIFIED',
        self::IPV4 => 'IPV4',
        self::IPV6 => 'IPV6',
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


