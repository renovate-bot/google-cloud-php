<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta\SpaceConfig\ModerationRestrictions;

use UnexpectedValueException;

/**
 * Determines who has permission to use a particular feature.
 *
 * Protobuf type <code>google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType</code>
 */
class RestrictionType
{
    /**
     * Default value specified by user policy.
     * This should never be returned.
     *
     * Generated from protobuf enum <code>RESTRICTION_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESTRICTION_TYPE_UNSPECIFIED = 0;
    /**
     * Meeting owner and co-host have the permission.
     *
     * Generated from protobuf enum <code>HOSTS_ONLY = 1;</code>
     */
    const HOSTS_ONLY = 1;
    /**
     * All Participants have permissions.
     *
     * Generated from protobuf enum <code>NO_RESTRICTION = 2;</code>
     */
    const NO_RESTRICTION = 2;

    private static $valueToName = [
        self::RESTRICTION_TYPE_UNSPECIFIED => 'RESTRICTION_TYPE_UNSPECIFIED',
        self::HOSTS_ONLY => 'HOSTS_ONLY',
        self::NO_RESTRICTION => 'NO_RESTRICTION',
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


