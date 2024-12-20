<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision;

use UnexpectedValueException;

/**
 * Enum representing the set of states a scorecard revision may be in.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.QaScorecardRevision.State</code>
 */
class State
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The scorecard revision can be edited.
     *
     * Generated from protobuf enum <code>EDITABLE = 12;</code>
     */
    const EDITABLE = 12;
    /**
     * Scorecard model training is in progress.
     *
     * Generated from protobuf enum <code>TRAINING = 2;</code>
     */
    const TRAINING = 2;
    /**
     * Scorecard revision model training failed.
     *
     * Generated from protobuf enum <code>TRAINING_FAILED = 9;</code>
     */
    const TRAINING_FAILED = 9;
    /**
     * The revision can be used in analysis.
     *
     * Generated from protobuf enum <code>READY = 11;</code>
     */
    const READY = 11;
    /**
     * Scorecard is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 7;</code>
     */
    const DELETING = 7;
    /**
     * Scorecard model training was explicitly cancelled by the user.
     *
     * Generated from protobuf enum <code>TRAINING_CANCELLED = 14;</code>
     */
    const TRAINING_CANCELLED = 14;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::EDITABLE => 'EDITABLE',
        self::TRAINING => 'TRAINING',
        self::TRAINING_FAILED => 'TRAINING_FAILED',
        self::READY => 'READY',
        self::DELETING => 'DELETING',
        self::TRAINING_CANCELLED => 'TRAINING_CANCELLED',
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


