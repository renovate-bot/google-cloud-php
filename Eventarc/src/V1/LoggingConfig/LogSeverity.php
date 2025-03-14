<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/logging_config.proto

namespace Google\Cloud\Eventarc\V1\LoggingConfig;

use UnexpectedValueException;

/**
 * The different severities for logging supported by Eventarc Advanced
 * resources.
 * This enum is an exhaustive list of log severities and is FROZEN. Do not
 * expect new values to be added.
 *
 * Protobuf type <code>google.cloud.eventarc.v1.LoggingConfig.LogSeverity</code>
 */
class LogSeverity
{
    /**
     * Log severity is not specified. This value is treated the same as NONE,
     * but is used to distinguish between no update and update to NONE in
     * update_masks.
     *
     * Generated from protobuf enum <code>LOG_SEVERITY_UNSPECIFIED = 0;</code>
     */
    const LOG_SEVERITY_UNSPECIFIED = 0;
    /**
     * Default value at resource creation, presence of this value must be
     * treated as no logging/disable logging.
     *
     * Generated from protobuf enum <code>NONE = 1;</code>
     */
    const NONE = 1;
    /**
     * Debug or trace level logging.
     *
     * Generated from protobuf enum <code>DEBUG = 2;</code>
     */
    const DEBUG = 2;
    /**
     * Routine information, such as ongoing status or performance.
     *
     * Generated from protobuf enum <code>INFO = 3;</code>
     */
    const INFO = 3;
    /**
     * Normal but significant events, such as start up, shut down, or a
     * configuration change.
     *
     * Generated from protobuf enum <code>NOTICE = 4;</code>
     */
    const NOTICE = 4;
    /**
     * Warning events might cause problems.
     *
     * Generated from protobuf enum <code>WARNING = 5;</code>
     */
    const WARNING = 5;
    /**
     * Error events are likely to cause problems.
     *
     * Generated from protobuf enum <code>ERROR = 6;</code>
     */
    const ERROR = 6;
    /**
     * Critical events cause more severe problems or outages.
     *
     * Generated from protobuf enum <code>CRITICAL = 7;</code>
     */
    const CRITICAL = 7;
    /**
     * A person must take action immediately.
     *
     * Generated from protobuf enum <code>ALERT = 8;</code>
     */
    const ALERT = 8;
    /**
     * One or more systems are unusable.
     *
     * Generated from protobuf enum <code>EMERGENCY = 9;</code>
     */
    const EMERGENCY = 9;

    private static $valueToName = [
        self::LOG_SEVERITY_UNSPECIFIED => 'LOG_SEVERITY_UNSPECIFIED',
        self::NONE => 'NONE',
        self::DEBUG => 'DEBUG',
        self::INFO => 'INFO',
        self::NOTICE => 'NOTICE',
        self::WARNING => 'WARNING',
        self::ERROR => 'ERROR',
        self::CRITICAL => 'CRITICAL',
        self::ALERT => 'ALERT',
        self::EMERGENCY => 'EMERGENCY',
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


