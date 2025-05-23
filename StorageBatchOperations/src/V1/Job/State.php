<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storagebatchoperations/v1/storage_batch_operations_types.proto

namespace Google\Cloud\StorageBatchOperations\V1\Job;

use UnexpectedValueException;

/**
 * Describes state of a job.
 *
 * Protobuf type <code>google.cloud.storagebatchoperations.v1.Job.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * In progress.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * Completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 2;</code>
     */
    const SUCCEEDED = 2;
    /**
     * Cancelled by the user.
     *
     * Generated from protobuf enum <code>CANCELED = 3;</code>
     */
    const CANCELED = 3;
    /**
     * Terminated due to an unrecoverable failure.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::RUNNING => 'RUNNING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::CANCELED => 'CANCELED',
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


