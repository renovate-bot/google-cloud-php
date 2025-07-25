<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace Google\Cloud\AlloyDb\V1\Instance;

use UnexpectedValueException;

/**
 * Specifies whether an instance needs to spin up.
 *
 * Protobuf type <code>google.cloud.alloydb.v1.Instance.ActivationPolicy</code>
 */
class ActivationPolicy
{
    /**
     * The policy is not specified.
     *
     * Generated from protobuf enum <code>ACTIVATION_POLICY_UNSPECIFIED = 0;</code>
     */
    const ACTIVATION_POLICY_UNSPECIFIED = 0;
    /**
     * The instance is running.
     *
     * Generated from protobuf enum <code>ALWAYS = 1;</code>
     */
    const ALWAYS = 1;
    /**
     * The instance is not running.
     *
     * Generated from protobuf enum <code>NEVER = 2;</code>
     */
    const NEVER = 2;

    private static $valueToName = [
        self::ACTIVATION_POLICY_UNSPECIFIED => 'ACTIVATION_POLICY_UNSPECIFIED',
        self::ALWAYS => 'ALWAYS',
        self::NEVER => 'NEVER',
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


