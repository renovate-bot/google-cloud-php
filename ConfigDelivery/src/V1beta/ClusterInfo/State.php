<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/configdelivery/v1beta/config_delivery.proto

namespace Google\Cloud\ConfigDelivery\V1beta\ClusterInfo;

use UnexpectedValueException;

/**
 * State of the rollout for the cluster.
 *
 * Protobuf type <code>google.cloud.configdelivery.v1beta.ClusterInfo.State</code>
 */
class State
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Waiting state.
     *
     * Generated from protobuf enum <code>WAITING = 1;</code>
     */
    const WAITING = 1;
    /**
     * In progress state.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 2;</code>
     */
    const IN_PROGRESS = 2;
    /**
     * Stalled state.
     *
     * Generated from protobuf enum <code>STALLED = 3;</code>
     */
    const STALLED = 3;
    /**
     * Completed state.
     *
     * Generated from protobuf enum <code>COMPLETED = 4;</code>
     */
    const COMPLETED = 4;
    /**
     * Aborted state.
     *
     * Generated from protobuf enum <code>ABORTED = 5;</code>
     */
    const ABORTED = 5;
    /**
     * Cancelled state.
     *
     * Generated from protobuf enum <code>CANCELLED = 6;</code>
     */
    const CANCELLED = 6;
    /**
     * Error state.
     *
     * Generated from protobuf enum <code>ERROR = 7;</code>
     */
    const ERROR = 7;
    /**
     * Unchanged state.
     *
     * Generated from protobuf enum <code>UNCHANGED = 8;</code>
     */
    const UNCHANGED = 8;
    /**
     * Skipped state.
     *
     * Generated from protobuf enum <code>SKIPPED = 9;</code>
     */
    const SKIPPED = 9;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::WAITING => 'WAITING',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::STALLED => 'STALLED',
        self::COMPLETED => 'COMPLETED',
        self::ABORTED => 'ABORTED',
        self::CANCELLED => 'CANCELLED',
        self::ERROR => 'ERROR',
        self::UNCHANGED => 'UNCHANGED',
        self::SKIPPED => 'SKIPPED',
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


