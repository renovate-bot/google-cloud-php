<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/event.proto

namespace Google\Cloud\Notebooks\V1\Event;

use UnexpectedValueException;

/**
 * The definition of the event types.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.Event.EventType</code>
 */
class EventType
{
    /**
     * Event is not specified.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * The instance / runtime is idle
     *
     * Generated from protobuf enum <code>IDLE = 1;</code>
     */
    const IDLE = 1;
    /**
     * The instance / runtime is available.
     * This event indicates that instance / runtime underlying compute is
     * operational.
     *
     * Generated from protobuf enum <code>HEARTBEAT = 2;</code>
     */
    const HEARTBEAT = 2;
    /**
     * The instance / runtime health is available.
     * This event indicates that instance / runtime health information.
     *
     * Generated from protobuf enum <code>HEALTH = 3;</code>
     */
    const HEALTH = 3;
    /**
     * The instance / runtime is available.
     * This event allows instance / runtime to send Host maintenance
     * information to Control Plane.
     * https://cloud.google.com/compute/docs/gpus/gpu-host-maintenance
     *
     * Generated from protobuf enum <code>MAINTENANCE = 4;</code>
     */
    const MAINTENANCE = 4;

    private static $valueToName = [
        self::EVENT_TYPE_UNSPECIFIED => 'EVENT_TYPE_UNSPECIFIED',
        self::IDLE => 'IDLE',
        self::HEARTBEAT => 'HEARTBEAT',
        self::HEALTH => 'HEALTH',
        self::MAINTENANCE => 'MAINTENANCE',
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


