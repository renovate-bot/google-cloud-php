<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_messages.proto

namespace Google\Ads\AdManager\V1\Report;

use UnexpectedValueException;

/**
 * The source to determine the time zone for the report.
 *
 * Protobuf type <code>google.ads.admanager.v1.Report.TimeZoneSource</code>
 */
class TimeZoneSource
{
    /**
     * Unspecified default value.
     *
     * Generated from protobuf enum <code>TIME_ZONE_SOURCE_UNSPECIFIED = 0;</code>
     */
    const TIME_ZONE_SOURCE_UNSPECIFIED = 0;
    /**
     * Use the publisher's time zone in network settings.
     *
     * Generated from protobuf enum <code>PUBLISHER = 1;</code>
     */
    const PUBLISHER = 1;
    /**
     * Use the time zone of the ad exchange.
     * Only compatible with Ad Exchange dimensions and metrics.
     *
     * Generated from protobuf enum <code>AD_EXCHANGE = 2;</code>
     */
    const AD_EXCHANGE = 2;
    /**
     * Use UTC time zone.
     * Only compatible with Revenue Verification reports.
     *
     * Generated from protobuf enum <code>UTC = 3;</code>
     */
    const UTC = 3;
    /**
     * Use the time zone provided in the ReportDefinition.time_zone field.
     * Has limited dimension and metric compatibility compared with PUBLISHER,
     * and reports may take longer to run since the dates are dynamically
     * calculated at request time.
     *
     * Generated from protobuf enum <code>PROVIDED = 4;</code>
     */
    const PROVIDED = 4;

    private static $valueToName = [
        self::TIME_ZONE_SOURCE_UNSPECIFIED => 'TIME_ZONE_SOURCE_UNSPECIFIED',
        self::PUBLISHER => 'PUBLISHER',
        self::AD_EXCHANGE => 'AD_EXCHANGE',
        self::UTC => 'UTC',
        self::PROVIDED => 'PROVIDED',
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


