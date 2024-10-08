<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/connection.proto

namespace Google\Cloud\SecurityCenter\V2\Connection;

use UnexpectedValueException;

/**
 * IANA Internet Protocol Number such as TCP(6) and UDP(17).
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.Connection.Protocol</code>
 */
class Protocol
{
    /**
     * Unspecified protocol (not HOPOPT).
     *
     * Generated from protobuf enum <code>PROTOCOL_UNSPECIFIED = 0;</code>
     */
    const PROTOCOL_UNSPECIFIED = 0;
    /**
     * Internet Control Message Protocol.
     *
     * Generated from protobuf enum <code>ICMP = 1;</code>
     */
    const ICMP = 1;
    /**
     * Transmission Control Protocol.
     *
     * Generated from protobuf enum <code>TCP = 6;</code>
     */
    const TCP = 6;
    /**
     * User Datagram Protocol.
     *
     * Generated from protobuf enum <code>UDP = 17;</code>
     */
    const UDP = 17;
    /**
     * Generic Routing Encapsulation.
     *
     * Generated from protobuf enum <code>GRE = 47;</code>
     */
    const GRE = 47;
    /**
     * Encap Security Payload.
     *
     * Generated from protobuf enum <code>ESP = 50;</code>
     */
    const ESP = 50;

    private static $valueToName = [
        self::PROTOCOL_UNSPECIFIED => 'PROTOCOL_UNSPECIFIED',
        self::ICMP => 'ICMP',
        self::TCP => 'TCP',
        self::UDP => 'UDP',
        self::GRE => 'GRE',
        self::ESP => 'ESP',
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


