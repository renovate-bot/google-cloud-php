<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig;

use UnexpectedValueException;

/**
 * What kind of checkers are available to be used by the check.
 *
 * Protobuf type <code>google.monitoring.v3.UptimeCheckConfig.CheckerType</code>
 */
class CheckerType
{
    /**
     * The default checker type. Currently converted to `STATIC_IP_CHECKERS`
     * on creation, the default conversion behavior may change in the future.
     *
     * Generated from protobuf enum <code>CHECKER_TYPE_UNSPECIFIED = 0;</code>
     */
    const CHECKER_TYPE_UNSPECIFIED = 0;
    /**
     * `STATIC_IP_CHECKERS` are used for uptime checks that perform egress
     * across the public internet. `STATIC_IP_CHECKERS` use the static IP
     * addresses returned by `ListUptimeCheckIps`.
     *
     * Generated from protobuf enum <code>STATIC_IP_CHECKERS = 1;</code>
     */
    const STATIC_IP_CHECKERS = 1;
    /**
     * `VPC_CHECKERS` are used for uptime checks that perform egress using
     * Service Directory and private network access. When using `VPC_CHECKERS`,
     * the monitored resource type must be `servicedirectory_service`.
     *
     * Generated from protobuf enum <code>VPC_CHECKERS = 3;</code>
     */
    const VPC_CHECKERS = 3;

    private static $valueToName = [
        self::CHECKER_TYPE_UNSPECIFIED => 'CHECKER_TYPE_UNSPECIFIED',
        self::STATIC_IP_CHECKERS => 'STATIC_IP_CHECKERS',
        self::VPC_CHECKERS => 'VPC_CHECKERS',
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


