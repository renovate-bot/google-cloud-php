<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2\AcceleratorConfig;

use UnexpectedValueException;

/**
 * TPU type.
 *
 * Protobuf type <code>google.cloud.tpu.v2.AcceleratorConfig.Type</code>
 */
class Type
{
    /**
     * Unspecified version.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * TPU v2.
     *
     * Generated from protobuf enum <code>V2 = 2;</code>
     */
    const V2 = 2;
    /**
     * TPU v3.
     *
     * Generated from protobuf enum <code>V3 = 4;</code>
     */
    const V3 = 4;
    /**
     * TPU v4.
     *
     * Generated from protobuf enum <code>V4 = 7;</code>
     */
    const V4 = 7;
    /**
     * TPU v5lite pod.
     *
     * Generated from protobuf enum <code>V5LITE_POD = 9;</code>
     */
    const V5LITE_POD = 9;
    /**
     * TPU v5p.
     *
     * Generated from protobuf enum <code>V5P = 10;</code>
     */
    const V5P = 10;
    /**
     * TPU v6e.
     *
     * Generated from protobuf enum <code>V6E = 11;</code>
     */
    const V6E = 11;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::V2 => 'V2',
        self::V3 => 'V3',
        self::V4 => 'V4',
        self::V5LITE_POD => 'V5LITE_POD',
        self::V5P => 'V5P',
        self::V6E => 'V6E',
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


