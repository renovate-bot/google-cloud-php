<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/events/subscriptions/v1beta/subscriptions_service.proto

namespace Google\Apps\Events\Subscriptions\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [SubscriptionsService.CreateSubscription][google.apps.events.subscriptions.v1beta.SubscriptionsService.CreateSubscription].
 *
 * Generated from protobuf message <code>google.apps.events.subscriptions.v1beta.CreateSubscriptionRequest</code>
 */
class CreateSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The subscription resource to create.
     *
     * Generated from protobuf field <code>.google.apps.events.subscriptions.v1beta.Subscription subscription = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $subscription = null;
    /**
     * Optional. If set to `true`, validates and previews the request, but doesn't
     * create the subscription.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param \Google\Apps\Events\Subscriptions\V1beta\Subscription $subscription Required. The subscription resource to create.
     *
     * @return \Google\Apps\Events\Subscriptions\V1beta\CreateSubscriptionRequest
     *
     * @experimental
     */
    public static function build(\Google\Apps\Events\Subscriptions\V1beta\Subscription $subscription): self
    {
        return (new self())
            ->setSubscription($subscription);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Events\Subscriptions\V1beta\Subscription $subscription
     *           Required. The subscription resource to create.
     *     @type bool $validate_only
     *           Optional. If set to `true`, validates and previews the request, but doesn't
     *           create the subscription.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Events\Subscriptions\V1Beta\SubscriptionsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The subscription resource to create.
     *
     * Generated from protobuf field <code>.google.apps.events.subscriptions.v1beta.Subscription subscription = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Apps\Events\Subscriptions\V1beta\Subscription|null
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    public function hasSubscription()
    {
        return isset($this->subscription);
    }

    public function clearSubscription()
    {
        unset($this->subscription);
    }

    /**
     * Required. The subscription resource to create.
     *
     * Generated from protobuf field <code>.google.apps.events.subscriptions.v1beta.Subscription subscription = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Apps\Events\Subscriptions\V1beta\Subscription $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Events\Subscriptions\V1beta\Subscription::class);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Optional. If set to `true`, validates and previews the request, but doesn't
     * create the subscription.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set to `true`, validates and previews the request, but doesn't
     * create the subscription.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

