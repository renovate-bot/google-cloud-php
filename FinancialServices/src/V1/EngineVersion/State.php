<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/financialservices/v1/engine_version.proto

namespace Google\Cloud\FinancialServices\V1\EngineVersion;

use UnexpectedValueException;

/**
 * State determines the lifecycle of a version and the models/engine configs
 * trained with it.
 *
 * Protobuf type <code>google.cloud.financialservices.v1.EngineVersion.State</code>
 */
class State
{
    /**
     * Default state, should never be used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Version is available for training and inference.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Models using this version can still be run, but new ones cannot be
     * trained.
     *
     * Generated from protobuf enum <code>LIMITED = 2;</code>
     */
    const LIMITED = 2;
    /**
     * Version is deprecated, listed for informational purposes only.
     *
     * Generated from protobuf enum <code>DECOMMISSIONED = 3;</code>
     */
    const DECOMMISSIONED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::LIMITED => 'LIMITED',
        self::DECOMMISSIONED => 'DECOMMISSIONED',
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


