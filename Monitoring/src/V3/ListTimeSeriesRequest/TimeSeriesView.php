<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3\ListTimeSeriesRequest;

use UnexpectedValueException;

/**
 * Controls which fields are returned by `ListTimeSeries*`.
 *
 * Protobuf type <code>google.monitoring.v3.ListTimeSeriesRequest.TimeSeriesView</code>
 */
class TimeSeriesView
{
    /**
     * Returns the identity of the metric(s), the time series,
     * and the time series data.
     *
     * Generated from protobuf enum <code>FULL = 0;</code>
     */
    const FULL = 0;
    /**
     * Returns the identity of the metric and the time series resource,
     * but not the time series data.
     *
     * Generated from protobuf enum <code>HEADERS = 1;</code>
     */
    const HEADERS = 1;

    private static $valueToName = [
        self::FULL => 'FULL',
        self::HEADERS => 'HEADERS',
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


