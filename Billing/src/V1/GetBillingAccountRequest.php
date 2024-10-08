<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `GetBillingAccount`.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.GetBillingAccountRequest</code>
 */
class GetBillingAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the billing account to retrieve. For
     * example, `billingAccounts/012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The resource name of the billing account to retrieve. For
     *                     example, `billingAccounts/012345-567890-ABCDEF`. Please see
     *                     {@see CloudBillingClient::billingAccountName()} for help formatting this field.
     *
     * @return \Google\Cloud\Billing\V1\GetBillingAccountRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the billing account to retrieve. For
     *           example, `billingAccounts/012345-567890-ABCDEF`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the billing account to retrieve. For
     * example, `billingAccounts/012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the billing account to retrieve. For
     * example, `billingAccounts/012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

