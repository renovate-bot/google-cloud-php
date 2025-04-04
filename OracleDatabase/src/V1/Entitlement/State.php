<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/entitlement.proto

namespace Google\Cloud\OracleDatabase\V1\Entitlement;

use UnexpectedValueException;

/**
 * The various lifecycle states of the subscription.
 *
 * Protobuf type <code>google.cloud.oracledatabase.v1.Entitlement.State</code>
 */
class State
{
    /**
     * Default unspecified value.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Account not linked.
     *
     * Generated from protobuf enum <code>ACCOUNT_NOT_LINKED = 1;</code>
     */
    const ACCOUNT_NOT_LINKED = 1;
    /**
     * Account is linked but not active.
     *
     * Generated from protobuf enum <code>ACCOUNT_NOT_ACTIVE = 2;</code>
     */
    const ACCOUNT_NOT_ACTIVE = 2;
    /**
     * Entitlement and Account are active.
     *
     * Generated from protobuf enum <code>ACTIVE = 3;</code>
     */
    const ACTIVE = 3;
    /**
     * Account is suspended.
     *
     * Generated from protobuf enum <code>ACCOUNT_SUSPENDED = 4;</code>
     */
    const ACCOUNT_SUSPENDED = 4;
    /**
     * Entitlement is not approved in private marketplace.
     *
     * Generated from protobuf enum <code>NOT_APPROVED_IN_PRIVATE_MARKETPLACE = 5;</code>
     */
    const NOT_APPROVED_IN_PRIVATE_MARKETPLACE = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACCOUNT_NOT_LINKED => 'ACCOUNT_NOT_LINKED',
        self::ACCOUNT_NOT_ACTIVE => 'ACCOUNT_NOT_ACTIVE',
        self::ACTIVE => 'ACTIVE',
        self::ACCOUNT_SUSPENDED => 'ACCOUNT_SUSPENDED',
        self::NOT_APPROVED_IN_PRIVATE_MARKETPLACE => 'NOT_APPROVED_IN_PRIVATE_MARKETPLACE',
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


