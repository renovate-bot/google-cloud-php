<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/chronicle/v1/reference_list.proto

namespace Google\Cloud\Chronicle\V1;

use UnexpectedValueException;

/**
 * ReferenceListView is a mechanism for viewing partial responses of the
 * ReferenceList resource.
 *
 * Protobuf type <code>google.cloud.chronicle.v1.ReferenceListView</code>
 */
class ReferenceListView
{
    /**
     * The default / unset value.
     * The API will default to the BASIC view for ListReferenceLists.
     * The API will default to the FULL view for methods that return a single
     * ReferenceList resource.
     *
     * Generated from protobuf enum <code>REFERENCE_LIST_VIEW_UNSPECIFIED = 0;</code>
     */
    const REFERENCE_LIST_VIEW_UNSPECIFIED = 0;
    /**
     * Include metadata about the ReferenceList.
     * This is the default view for ListReferenceLists.
     *
     * Generated from protobuf enum <code>REFERENCE_LIST_VIEW_BASIC = 1;</code>
     */
    const REFERENCE_LIST_VIEW_BASIC = 1;
    /**
     * Include all details about the ReferenceList: metadata, content lines,
     * associated rule counts. This is the default view for GetReferenceList.
     *
     * Generated from protobuf enum <code>REFERENCE_LIST_VIEW_FULL = 2;</code>
     */
    const REFERENCE_LIST_VIEW_FULL = 2;

    private static $valueToName = [
        self::REFERENCE_LIST_VIEW_UNSPECIFIED => 'REFERENCE_LIST_VIEW_UNSPECIFIED',
        self::REFERENCE_LIST_VIEW_BASIC => 'REFERENCE_LIST_VIEW_BASIC',
        self::REFERENCE_LIST_VIEW_FULL => 'REFERENCE_LIST_VIEW_FULL',
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

