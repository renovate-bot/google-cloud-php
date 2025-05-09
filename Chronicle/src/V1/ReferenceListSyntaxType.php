<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/chronicle/v1/reference_list.proto

namespace Google\Cloud\Chronicle\V1;

use UnexpectedValueException;

/**
 * The syntax type indicating how list entries should be validated.
 *
 * Protobuf type <code>google.cloud.chronicle.v1.ReferenceListSyntaxType</code>
 */
class ReferenceListSyntaxType
{
    /**
     * Defaults to REFERENCE_LIST_SYNTAX_TYPE_PLAIN_TEXT_STRING.
     *
     * Generated from protobuf enum <code>REFERENCE_LIST_SYNTAX_TYPE_UNSPECIFIED = 0;</code>
     */
    const REFERENCE_LIST_SYNTAX_TYPE_UNSPECIFIED = 0;
    /**
     * List contains plain text patterns.
     *
     * Generated from protobuf enum <code>REFERENCE_LIST_SYNTAX_TYPE_PLAIN_TEXT_STRING = 1;</code>
     */
    const REFERENCE_LIST_SYNTAX_TYPE_PLAIN_TEXT_STRING = 1;
    /**
     * List contains only Regular Expression patterns.
     *
     * Generated from protobuf enum <code>REFERENCE_LIST_SYNTAX_TYPE_REGEX = 2;</code>
     */
    const REFERENCE_LIST_SYNTAX_TYPE_REGEX = 2;
    /**
     * List contains only CIDR patterns.
     *
     * Generated from protobuf enum <code>REFERENCE_LIST_SYNTAX_TYPE_CIDR = 3;</code>
     */
    const REFERENCE_LIST_SYNTAX_TYPE_CIDR = 3;

    private static $valueToName = [
        self::REFERENCE_LIST_SYNTAX_TYPE_UNSPECIFIED => 'REFERENCE_LIST_SYNTAX_TYPE_UNSPECIFIED',
        self::REFERENCE_LIST_SYNTAX_TYPE_PLAIN_TEXT_STRING => 'REFERENCE_LIST_SYNTAX_TYPE_PLAIN_TEXT_STRING',
        self::REFERENCE_LIST_SYNTAX_TYPE_REGEX => 'REFERENCE_LIST_SYNTAX_TYPE_REGEX',
        self::REFERENCE_LIST_SYNTAX_TYPE_CIDR => 'REFERENCE_LIST_SYNTAX_TYPE_CIDR',
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

