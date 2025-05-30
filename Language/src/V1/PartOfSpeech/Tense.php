<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1\PartOfSpeech;

use UnexpectedValueException;

/**
 * Time reference.
 *
 * Protobuf type <code>google.cloud.language.v1.PartOfSpeech.Tense</code>
 */
class Tense
{
    /**
     * Tense is not applicable in the analyzed language or is not predicted.
     *
     * Generated from protobuf enum <code>TENSE_UNKNOWN = 0;</code>
     */
    const TENSE_UNKNOWN = 0;
    /**
     * Conditional
     *
     * Generated from protobuf enum <code>CONDITIONAL_TENSE = 1;</code>
     */
    const CONDITIONAL_TENSE = 1;
    /**
     * Future
     *
     * Generated from protobuf enum <code>FUTURE = 2;</code>
     */
    const FUTURE = 2;
    /**
     * Past
     *
     * Generated from protobuf enum <code>PAST = 3;</code>
     */
    const PAST = 3;
    /**
     * Present
     *
     * Generated from protobuf enum <code>PRESENT = 4;</code>
     */
    const PRESENT = 4;
    /**
     * Imperfect
     *
     * Generated from protobuf enum <code>IMPERFECT = 5;</code>
     */
    const IMPERFECT = 5;
    /**
     * Pluperfect
     *
     * Generated from protobuf enum <code>PLUPERFECT = 6;</code>
     */
    const PLUPERFECT = 6;

    private static $valueToName = [
        self::TENSE_UNKNOWN => 'TENSE_UNKNOWN',
        self::CONDITIONAL_TENSE => 'CONDITIONAL_TENSE',
        self::FUTURE => 'FUTURE',
        self::PAST => 'PAST',
        self::PRESENT => 'PRESENT',
        self::IMPERFECT => 'IMPERFECT',
        self::PLUPERFECT => 'PLUPERFECT',
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


