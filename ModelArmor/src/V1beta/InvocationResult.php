<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/modelarmor/v1beta/service.proto

namespace Google\Cloud\ModelArmor\V1beta;

use UnexpectedValueException;

/**
 * A field indicating the outcome of the invocation, irrespective of match
 * status.
 *
 * Protobuf type <code>google.cloud.modelarmor.v1beta.InvocationResult</code>
 */
class InvocationResult
{
    /**
     * Unused. Default value.
     *
     * Generated from protobuf enum <code>INVOCATION_RESULT_UNSPECIFIED = 0;</code>
     */
    const INVOCATION_RESULT_UNSPECIFIED = 0;
    /**
     * All filters were invoked successfully.
     *
     * Generated from protobuf enum <code>SUCCESS = 1;</code>
     */
    const SUCCESS = 1;
    /**
     * Some filters were skipped or failed.
     *
     * Generated from protobuf enum <code>PARTIAL = 2;</code>
     */
    const PARTIAL = 2;
    /**
     * All filters were skipped or failed.
     *
     * Generated from protobuf enum <code>FAILURE = 3;</code>
     */
    const FAILURE = 3;

    private static $valueToName = [
        self::INVOCATION_RESULT_UNSPECIFIED => 'INVOCATION_RESULT_UNSPECIFIED',
        self::SUCCESS => 'SUCCESS',
        self::PARTIAL => 'PARTIAL',
        self::FAILURE => 'FAILURE',
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

