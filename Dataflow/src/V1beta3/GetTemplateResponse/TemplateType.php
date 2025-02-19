<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3\GetTemplateResponse;

use UnexpectedValueException;

/**
 * Template Type.
 *
 * Protobuf type <code>google.dataflow.v1beta3.GetTemplateResponse.TemplateType</code>
 */
class TemplateType
{
    /**
     * Unknown Template Type.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Legacy Template.
     *
     * Generated from protobuf enum <code>LEGACY = 1;</code>
     */
    const LEGACY = 1;
    /**
     * Flex Template.
     *
     * Generated from protobuf enum <code>FLEX = 2;</code>
     */
    const FLEX = 2;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::LEGACY => 'LEGACY',
        self::FLEX => 'FLEX',
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


