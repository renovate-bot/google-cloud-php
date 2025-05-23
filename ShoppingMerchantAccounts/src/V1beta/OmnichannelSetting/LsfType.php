<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/omnichannelsettings.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\OmnichannelSetting;

use UnexpectedValueException;

/**
 * The product page experience type, which is also called the Local Store
 * Front (LSF) type. Check the [HC
 * article](https://support.google.com/merchants/answer/7178526) for more
 * details.
 *
 * Protobuf type <code>google.shopping.merchant.accounts.v1beta.OmnichannelSetting.LsfType</code>
 */
class LsfType
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>LSF_TYPE_UNSPECIFIED = 0;</code>
     */
    const LSF_TYPE_UNSPECIFIED = 0;
    /**
     * Google-Hosted Local Store Front. Check the [HC
     * article](https://support.google.com/merchants/answer/14869424) for more
     * details.
     *
     * Generated from protobuf enum <code>GHLSF = 1;</code>
     */
    const GHLSF = 1;
    /**
     * Merchant-Hosted Local Store Front Basic. Check the [HC
     * article](https://support.google.com/merchants/answer/14615867) for more
     * details.
     *
     * Generated from protobuf enum <code>MHLSF_BASIC = 2;</code>
     */
    const MHLSF_BASIC = 2;
    /**
     * Merchant-Hosted Local Store Front Full. Check the [HC
     * article](https://support.google.com/merchants/answer/14617076) for more
     * details.
     *
     * Generated from protobuf enum <code>MHLSF_FULL = 3;</code>
     */
    const MHLSF_FULL = 3;

    private static $valueToName = [
        self::LSF_TYPE_UNSPECIFIED => 'LSF_TYPE_UNSPECIFIED',
        self::GHLSF => 'GHLSF',
        self::MHLSF_BASIC => 'MHLSF_BASIC',
        self::MHLSF_FULL => 'MHLSF_FULL',
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


