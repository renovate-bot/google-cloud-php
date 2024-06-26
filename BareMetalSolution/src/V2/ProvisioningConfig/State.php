<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/provisioning.proto

namespace Google\Cloud\BareMetalSolution\V2\ProvisioningConfig;

use UnexpectedValueException;

/**
 * The possible states for this ProvisioningConfig.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.ProvisioningConfig.State</code>
 */
class State
{
    /**
     * State wasn't specified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * ProvisioningConfig is a draft and can be freely modified.
     *
     * Generated from protobuf enum <code>DRAFT = 1;</code>
     */
    const DRAFT = 1;
    /**
     * ProvisioningConfig was already submitted and cannot be modified.
     *
     * Generated from protobuf enum <code>SUBMITTED = 2;</code>
     */
    const SUBMITTED = 2;
    /**
     * ProvisioningConfig was in the provisioning state.  Initially this state
     * comes from the work order table in big query when SNOW is used.  Later
     * this field can be set by the work order API.
     *
     * Generated from protobuf enum <code>PROVISIONING = 3;</code>
     */
    const PROVISIONING = 3;
    /**
     * ProvisioningConfig was provisioned, meaning the resources exist.
     *
     * Generated from protobuf enum <code>PROVISIONED = 4;</code>
     */
    const PROVISIONED = 4;
    /**
     * ProvisioningConfig was validated.  A validation tool will be run to
     * set this state.
     *
     * Generated from protobuf enum <code>VALIDATED = 5;</code>
     */
    const VALIDATED = 5;
    /**
     * ProvisioningConfig was canceled.
     *
     * Generated from protobuf enum <code>CANCELLED = 6;</code>
     */
    const CANCELLED = 6;
    /**
     * The request is submitted for provisioning, with error return.
     *
     * Generated from protobuf enum <code>FAILED = 7;</code>
     */
    const FAILED = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::DRAFT => 'DRAFT',
        self::SUBMITTED => 'SUBMITTED',
        self::PROVISIONING => 'PROVISIONING',
        self::PROVISIONED => 'PROVISIONED',
        self::VALIDATED => 'VALIDATED',
        self::CANCELLED => 'CANCELLED',
        self::FAILED => 'FAILED',
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


