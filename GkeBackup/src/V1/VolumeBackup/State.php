<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/volume.proto

namespace Google\Cloud\GkeBackup\V1\VolumeBackup;

use UnexpectedValueException;

/**
 * The current state of a VolumeBackup
 *
 * Protobuf type <code>google.cloud.gkebackup.v1.VolumeBackup.State</code>
 */
class State
{
    /**
     * This is an illegal state and should not be encountered.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * A volume for the backup was identified and backup process is about to
     * start.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The volume backup operation has begun and is in the initial "snapshot"
     * phase of the process. Any defined ProtectedApplication "pre" hooks will
     * be executed before entering this state and "post" hooks will be executed
     * upon leaving this state.
     *
     * Generated from protobuf enum <code>SNAPSHOTTING = 2;</code>
     */
    const SNAPSHOTTING = 2;
    /**
     * The snapshot phase of the volume backup operation has completed and
     * the snapshot is now being uploaded to backup storage.
     *
     * Generated from protobuf enum <code>UPLOADING = 3;</code>
     */
    const UPLOADING = 3;
    /**
     * The volume backup operation has completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 4;</code>
     */
    const SUCCEEDED = 4;
    /**
     * The volume backup operation has failed.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * This VolumeBackup resource (and its associated artifacts) is in the
     * process of being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 6;</code>
     */
    const DELETING = 6;
    /**
     * The underlying artifacts of a volume backup (eg: persistent disk
     * snapshots) are deleted.
     *
     * Generated from protobuf enum <code>CLEANED_UP = 7;</code>
     */
    const CLEANED_UP = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::SNAPSHOTTING => 'SNAPSHOTTING',
        self::UPLOADING => 'UPLOADING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::DELETING => 'DELETING',
        self::CLEANED_UP => 'CLEANED_UP',
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


