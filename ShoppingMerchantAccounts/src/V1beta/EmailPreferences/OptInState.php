<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/emailpreferences.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences;

use UnexpectedValueException;

/**
 * Opt in state of the email preference.
 *
 * Protobuf type <code>google.shopping.merchant.accounts.v1beta.EmailPreferences.OptInState</code>
 */
class OptInState
{
    /**
     * Opt-in status is not specified.
     *
     * Generated from protobuf enum <code>OPT_IN_STATE_UNSPECIFIED = 0;</code>
     */
    const OPT_IN_STATE_UNSPECIFIED = 0;
    /**
     * User has opted out of receiving this type of email.
     *
     * Generated from protobuf enum <code>OPTED_OUT = 1;</code>
     */
    const OPTED_OUT = 1;
    /**
     * User has opted in to receiving this type of email.
     *
     * Generated from protobuf enum <code>OPTED_IN = 2;</code>
     */
    const OPTED_IN = 2;
    /**
     * User has opted in to receiving this type of email and the confirmation
     * email has been sent, but user has not yet confirmed the opt in (applies
     * only to certain countries).
     *
     * Generated from protobuf enum <code>UNCONFIRMED = 3;</code>
     */
    const UNCONFIRMED = 3;

    private static $valueToName = [
        self::OPT_IN_STATE_UNSPECIFIED => 'OPT_IN_STATE_UNSPECIFIED',
        self::OPTED_OUT => 'OPTED_OUT',
        self::OPTED_IN => 'OPTED_IN',
        self::UNCONFIRMED => 'UNCONFIRMED',
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


