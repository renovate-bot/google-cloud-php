<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1/dataform.proto

namespace Google\Cloud\Dataform\V1\WorkflowInvocationAction;

use UnexpectedValueException;

/**
 * Represents the current state of a workflow invocation action.
 *
 * Protobuf type <code>google.cloud.dataform.v1.WorkflowInvocationAction.State</code>
 */
class State
{
    /**
     * The action has not yet been considered for invocation.
     *
     * Generated from protobuf enum <code>PENDING = 0;</code>
     */
    const PENDING = 0;
    /**
     * The action is currently running.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * Execution of the action was skipped because upstream dependencies did not
     * all complete successfully. A terminal state.
     *
     * Generated from protobuf enum <code>SKIPPED = 2;</code>
     */
    const SKIPPED = 2;
    /**
     * Execution of the action was disabled as per the configuration of the
     * corresponding compilation result action. A terminal state.
     *
     * Generated from protobuf enum <code>DISABLED = 3;</code>
     */
    const DISABLED = 3;
    /**
     * The action succeeded. A terminal state.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 4;</code>
     */
    const SUCCEEDED = 4;
    /**
     * The action was cancelled. A terminal state.
     *
     * Generated from protobuf enum <code>CANCELLED = 5;</code>
     */
    const CANCELLED = 5;
    /**
     * The action failed. A terminal state.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;

    private static $valueToName = [
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::SKIPPED => 'SKIPPED',
        self::DISABLED => 'DISABLED',
        self::SUCCEEDED => 'SUCCEEDED',
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


