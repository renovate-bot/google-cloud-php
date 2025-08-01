<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/licensemanager/v1/api_entities.proto

namespace Google\Cloud\LicenseManager\V1;

use UnexpectedValueException;

/**
 * Different types of licenses that are supported.
 *
 * Protobuf type <code>google.cloud.licensemanager.v1.LicenseType</code>
 */
class LicenseType
{
    /**
     * unspecified.
     *
     * Generated from protobuf enum <code>LICENSE_TYPE_UNSPECIFIED = 0;</code>
     */
    const LICENSE_TYPE_UNSPECIFIED = 0;
    /**
     * Billing will be based on number of users listed per month.
     *
     * Generated from protobuf enum <code>LICENSE_TYPE_PER_MONTH_PER_USER = 1;</code>
     */
    const LICENSE_TYPE_PER_MONTH_PER_USER = 1;
    /**
     * Bring your own license.
     *
     * Generated from protobuf enum <code>LICENSE_TYPE_BRING_YOUR_OWN_LICENSE = 2;</code>
     */
    const LICENSE_TYPE_BRING_YOUR_OWN_LICENSE = 2;

    private static $valueToName = [
        self::LICENSE_TYPE_UNSPECIFIED => 'LICENSE_TYPE_UNSPECIFIED',
        self::LICENSE_TYPE_PER_MONTH_PER_USER => 'LICENSE_TYPE_PER_MONTH_PER_USER',
        self::LICENSE_TYPE_BRING_YOUR_OWN_LICENSE => 'LICENSE_TYPE_BRING_YOUR_OWN_LICENSE',
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

