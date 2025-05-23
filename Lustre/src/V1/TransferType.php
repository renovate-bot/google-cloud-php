<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lustre/v1/transfer.proto

namespace Google\Cloud\Lustre\V1;

use UnexpectedValueException;

/**
 * Type of transfer that occurred.
 *
 * Protobuf type <code>google.cloud.lustre.v1.TransferType</code>
 */
class TransferType
{
    /**
     * Zero is an illegal value.
     *
     * Generated from protobuf enum <code>TRANSFER_TYPE_UNSPECIFIED = 0;</code>
     */
    const TRANSFER_TYPE_UNSPECIFIED = 0;
    /**
     * Imports to Lustre.
     *
     * Generated from protobuf enum <code>IMPORT = 1;</code>
     */
    const IMPORT = 1;
    /**
     * Exports from Lustre.
     *
     * Generated from protobuf enum <code>EXPORT = 2;</code>
     */
    const EXPORT = 2;

    private static $valueToName = [
        self::TRANSFER_TYPE_UNSPECIFIED => 'TRANSFER_TYPE_UNSPECIFIED',
        self::IMPORT => 'IMPORT',
        self::EXPORT => 'EXPORT',
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

