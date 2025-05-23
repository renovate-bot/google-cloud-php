<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/commerce/consumer/procurement/v1/procurement_service.proto

namespace Google\Cloud\Commerce\Consumer\Procurement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ConsumerProcurementService.PlaceOrder][google.cloud.commerce.consumer.procurement.v1.ConsumerProcurementService.PlaceOrder].
 *
 * Generated from protobuf message <code>google.cloud.commerce.consumer.procurement.v1.PlaceOrderRequest</code>
 */
class PlaceOrderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent resource.
     * This field has the form  `billingAccounts/{billing-account-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The user-specified name of the order being placed.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. Places order for offer. Required when an offer-based order is
     * being placed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.LineItemInfo line_item_info = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $line_item_info;
    /**
     * Optional. A unique identifier for this request.
     * The server will ignore subsequent requests that provide a duplicate request
     * ID for at least 24 hours after the first request.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     *
     * Generated from protobuf field <code>string request_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent resource.
     *           This field has the form  `billingAccounts/{billing-account-id}`.
     *     @type string $display_name
     *           Required. The user-specified name of the order being placed.
     *     @type array<\Google\Cloud\Commerce\Consumer\Procurement\V1\LineItemInfo>|\Google\Protobuf\Internal\RepeatedField $line_item_info
     *           Optional. Places order for offer. Required when an offer-based order is
     *           being placed.
     *     @type string $request_id
     *           Optional. A unique identifier for this request.
     *           The server will ignore subsequent requests that provide a duplicate request
     *           ID for at least 24 hours after the first request.
     *           The request ID must be a valid
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Commerce\Consumer\Procurement\V1\ProcurementService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent resource.
     * This field has the form  `billingAccounts/{billing-account-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent resource.
     * This field has the form  `billingAccounts/{billing-account-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The user-specified name of the order being placed.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The user-specified name of the order being placed.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Places order for offer. Required when an offer-based order is
     * being placed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.LineItemInfo line_item_info = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLineItemInfo()
    {
        return $this->line_item_info;
    }

    /**
     * Optional. Places order for offer. Required when an offer-based order is
     * being placed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.LineItemInfo line_item_info = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Commerce\Consumer\Procurement\V1\LineItemInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLineItemInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Commerce\Consumer\Procurement\V1\LineItemInfo::class);
        $this->line_item_info = $arr;

        return $this;
    }

    /**
     * Optional. A unique identifier for this request.
     * The server will ignore subsequent requests that provide a duplicate request
     * ID for at least 24 hours after the first request.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     *
     * Generated from protobuf field <code>string request_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique identifier for this request.
     * The server will ignore subsequent requests that provide a duplicate request
     * ID for at least 24 hours after the first request.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     *
     * Generated from protobuf field <code>string request_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

