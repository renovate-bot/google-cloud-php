<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\WebKeySettings;

use UnexpectedValueException;

/**
 * Enum that represents the possible challenge frequency and difficulty
 * configurations for a web key.
 *
 * Protobuf type <code>google.cloud.recaptchaenterprise.v1.WebKeySettings.ChallengeSecurityPreference</code>
 */
class ChallengeSecurityPreference
{
    /**
     * Default type that indicates this enum hasn't been specified.
     *
     * Generated from protobuf enum <code>CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED = 0;</code>
     */
    const CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED = 0;
    /**
     * Key tends to show fewer and easier challenges.
     *
     * Generated from protobuf enum <code>USABILITY = 1;</code>
     */
    const USABILITY = 1;
    /**
     * Key tends to show balanced (in amount and difficulty) challenges.
     *
     * Generated from protobuf enum <code>BALANCE = 2;</code>
     */
    const BALANCE = 2;
    /**
     * Key tends to show more and harder challenges.
     *
     * Generated from protobuf enum <code>SECURITY = 3;</code>
     */
    const SECURITY = 3;

    private static $valueToName = [
        self::CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED => 'CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED',
        self::USABILITY => 'USABILITY',
        self::BALANCE => 'BALANCE',
        self::SECURITY => 'SECURITY',
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


