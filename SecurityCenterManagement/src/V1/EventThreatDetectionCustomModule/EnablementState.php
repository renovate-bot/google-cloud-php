<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule;

use UnexpectedValueException;

/**
 * The enablement state of the module.
 *
 * Protobuf type <code>google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule.EnablementState</code>
 */
class EnablementState
{
    /**
     * Unspecified enablement state.
     *
     * Generated from protobuf enum <code>ENABLEMENT_STATE_UNSPECIFIED = 0;</code>
     */
    const ENABLEMENT_STATE_UNSPECIFIED = 0;
    /**
     * The module is enabled at the given level.
     *
     * Generated from protobuf enum <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * The module is disabled at the given level.
     *
     * Generated from protobuf enum <code>DISABLED = 2;</code>
     */
    const DISABLED = 2;
    /**
     * State is inherited from an ancestor module. The module will either be
     * effectively `ENABLED` or `DISABLED` based on its closest non-inherited
     * ancestor module in the CRM hierarchy. If you try to set a top-level
     * module (a module with no parent) to the `INHERITED` state, you receive an
     * `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf enum <code>INHERITED = 3;</code>
     */
    const INHERITED = 3;

    private static $valueToName = [
        self::ENABLEMENT_STATE_UNSPECIFIED => 'ENABLEMENT_STATE_UNSPECIFIED',
        self::ENABLED => 'ENABLED',
        self::DISABLED => 'DISABLED',
        self::INHERITED => 'INHERITED',
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


