<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/modelarmor/v1beta/service.proto

namespace Google\Cloud\ModelArmor\V1beta;

use UnexpectedValueException;

/**
 * For more information about each Sensitive Data Protection likelihood level,
 * see https://cloud.google.com/sensitive-data-protection/docs/likelihood.
 *
 * Protobuf type <code>google.cloud.modelarmor.v1beta.SdpFindingLikelihood</code>
 */
class SdpFindingLikelihood
{
    /**
     * Default value; same as POSSIBLE.
     *
     * Generated from protobuf enum <code>SDP_FINDING_LIKELIHOOD_UNSPECIFIED = 0;</code>
     */
    const SDP_FINDING_LIKELIHOOD_UNSPECIFIED = 0;
    /**
     * Highest chance of a false positive.
     *
     * Generated from protobuf enum <code>VERY_UNLIKELY = 1;</code>
     */
    const VERY_UNLIKELY = 1;
    /**
     * High chance of a false positive.
     *
     * Generated from protobuf enum <code>UNLIKELY = 2;</code>
     */
    const UNLIKELY = 2;
    /**
     * Some matching signals. The default value.
     *
     * Generated from protobuf enum <code>POSSIBLE = 3;</code>
     */
    const POSSIBLE = 3;
    /**
     * Low chance of a false positive.
     *
     * Generated from protobuf enum <code>LIKELY = 4;</code>
     */
    const LIKELY = 4;
    /**
     * Confidence level is high. Lowest chance of a false positive.
     *
     * Generated from protobuf enum <code>VERY_LIKELY = 5;</code>
     */
    const VERY_LIKELY = 5;

    private static $valueToName = [
        self::SDP_FINDING_LIKELIHOOD_UNSPECIFIED => 'SDP_FINDING_LIKELIHOOD_UNSPECIFIED',
        self::VERY_UNLIKELY => 'VERY_UNLIKELY',
        self::UNLIKELY => 'UNLIKELY',
        self::POSSIBLE => 'POSSIBLE',
        self::LIKELY => 'LIKELY',
        self::VERY_LIKELY => 'VERY_LIKELY',
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

