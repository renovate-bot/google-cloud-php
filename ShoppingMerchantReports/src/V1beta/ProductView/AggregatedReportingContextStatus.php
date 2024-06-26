<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta\ProductView;

use UnexpectedValueException;

/**
 * Status of the product aggregated for all reporting contexts.
 * Here's an example of how the aggregated status is computed:
 * Free listings | Shopping ads | Status
 * --------------|--------------|------------------------------
 * Approved      | Approved     | ELIGIBLE
 * Approved      | Pending      | ELIGIBLE
 * Approved      | Disapproved  | ELIGIBLE_LIMITED
 * Pending       | Pending      | PENDING
 * Disapproved   | Disapproved  | NOT_ELIGIBLE_OR_DISAPPROVED
 *
 * Protobuf type <code>google.shopping.merchant.reports.v1beta.ProductView.AggregatedReportingContextStatus</code>
 */
class AggregatedReportingContextStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>AGGREGATED_REPORTING_CONTEXT_STATUS_UNSPECIFIED = 0;</code>
     */
    const AGGREGATED_REPORTING_CONTEXT_STATUS_UNSPECIFIED = 0;
    /**
     * Product is not eligible or is disapproved for all reporting contexts.
     *
     * Generated from protobuf enum <code>NOT_ELIGIBLE_OR_DISAPPROVED = 1;</code>
     */
    const NOT_ELIGIBLE_OR_DISAPPROVED = 1;
    /**
     * Product's status is pending in all reporting contexts.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    const PENDING = 2;
    /**
     * Product is eligible for some (but not all) reporting contexts.
     *
     * Generated from protobuf enum <code>ELIGIBLE_LIMITED = 3;</code>
     */
    const ELIGIBLE_LIMITED = 3;
    /**
     * Product is eligible for all reporting contexts.
     *
     * Generated from protobuf enum <code>ELIGIBLE = 4;</code>
     */
    const ELIGIBLE = 4;

    private static $valueToName = [
        self::AGGREGATED_REPORTING_CONTEXT_STATUS_UNSPECIFIED => 'AGGREGATED_REPORTING_CONTEXT_STATUS_UNSPECIFIED',
        self::NOT_ELIGIBLE_OR_DISAPPROVED => 'NOT_ELIGIBLE_OR_DISAPPROVED',
        self::PENDING => 'PENDING',
        self::ELIGIBLE_LIMITED => 'ELIGIBLE_LIMITED',
        self::ELIGIBLE => 'ELIGIBLE',
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


