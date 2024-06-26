<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha\TelemetryConfig;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.metastore.v1alpha.TelemetryConfig.LogFormat</code>
 */
class LogFormat
{
    /**
     * The LOG_FORMAT is not set.
     *
     * Generated from protobuf enum <code>LOG_FORMAT_UNSPECIFIED = 0;</code>
     */
    const LOG_FORMAT_UNSPECIFIED = 0;
    /**
     * Logging output uses the legacy `textPayload` format.
     *
     * Generated from protobuf enum <code>LEGACY = 1;</code>
     */
    const LEGACY = 1;
    /**
     * Logging output uses the `jsonPayload` format.
     *
     * Generated from protobuf enum <code>JSON = 2;</code>
     */
    const JSON = 2;

    private static $valueToName = [
        self::LOG_FORMAT_UNSPECIFIED => 'LOG_FORMAT_UNSPECIFIED',
        self::LEGACY => 'LEGACY',
        self::JSON => 'JSON',
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


