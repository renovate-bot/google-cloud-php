<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securesourcemanager/v1/secure_source_manager.proto

namespace Google\Cloud\SecureSourceManager\V1\TreeEntry;

use UnexpectedValueException;

/**
 * Defines the type of object the TreeEntry represents.
 *
 * Protobuf type <code>google.cloud.securesourcemanager.v1.TreeEntry.ObjectType</code>
 */
class ObjectType
{
    /**
     * Default value, indicating the object type is unspecified.
     *
     * Generated from protobuf enum <code>OBJECT_TYPE_UNSPECIFIED = 0;</code>
     */
    const OBJECT_TYPE_UNSPECIFIED = 0;
    /**
     * Represents a directory (folder).
     *
     * Generated from protobuf enum <code>TREE = 1;</code>
     */
    const TREE = 1;
    /**
     * Represents a file (contains file data).
     *
     * Generated from protobuf enum <code>BLOB = 2;</code>
     */
    const BLOB = 2;
    /**
     * Represents a pointer to another repository (submodule).
     *
     * Generated from protobuf enum <code>COMMIT = 3;</code>
     */
    const COMMIT = 3;

    private static $valueToName = [
        self::OBJECT_TYPE_UNSPECIFIED => 'OBJECT_TYPE_UNSPECIFIED',
        self::TREE => 'TREE',
        self::BLOB => 'BLOB',
        self::COMMIT => 'COMMIT',
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


