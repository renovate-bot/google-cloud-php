<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/online_return_policy.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `DeleteOnlineReturnPolicy` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.DeleteOnlineReturnPolicyRequest</code>
 */
class DeleteOnlineReturnPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the return policy to delete.
     * Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the return policy to delete.
     *                     Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     *                     Please see {@see OnlineReturnPolicyServiceClient::onlineReturnPolicyName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Accounts\V1beta\DeleteOnlineReturnPolicyRequest
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
     *           Required. The name of the return policy to delete.
     *           Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\OnlineReturnPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the return policy to delete.
     * Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the return policy to delete.
     * Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
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

