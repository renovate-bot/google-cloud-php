<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `StreamingPull` method. This response is used to stream
 * messages from the server to the client.
 *
 * Generated from protobuf message <code>google.pubsub.v1.StreamingPullResponse</code>
 */
class StreamingPullResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Received Pub/Sub messages. This will not be empty.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.ReceivedMessage received_messages = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $received_messages;
    /**
     * Optional. This field will only be set if `enable_exactly_once_delivery` is
     * set to `true` and is not guaranteed to be populated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.AcknowledgeConfirmation acknowledge_confirmation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $acknowledge_confirmation = null;
    /**
     * Optional. This field will only be set if `enable_exactly_once_delivery` is
     * set to `true` and is not guaranteed to be populated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.ModifyAckDeadlineConfirmation modify_ack_deadline_confirmation = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $modify_ack_deadline_confirmation = null;
    /**
     * Optional. Properties associated with this subscription.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.SubscriptionProperties subscription_properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subscription_properties = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\PubSub\V1\ReceivedMessage>|\Google\Protobuf\Internal\RepeatedField $received_messages
     *           Optional. Received Pub/Sub messages. This will not be empty.
     *     @type \Google\Cloud\PubSub\V1\StreamingPullResponse\AcknowledgeConfirmation $acknowledge_confirmation
     *           Optional. This field will only be set if `enable_exactly_once_delivery` is
     *           set to `true` and is not guaranteed to be populated.
     *     @type \Google\Cloud\PubSub\V1\StreamingPullResponse\ModifyAckDeadlineConfirmation $modify_ack_deadline_confirmation
     *           Optional. This field will only be set if `enable_exactly_once_delivery` is
     *           set to `true` and is not guaranteed to be populated.
     *     @type \Google\Cloud\PubSub\V1\StreamingPullResponse\SubscriptionProperties $subscription_properties
     *           Optional. Properties associated with this subscription.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Received Pub/Sub messages. This will not be empty.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.ReceivedMessage received_messages = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceivedMessages()
    {
        return $this->received_messages;
    }

    /**
     * Optional. Received Pub/Sub messages. This will not be empty.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.ReceivedMessage received_messages = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\PubSub\V1\ReceivedMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceivedMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PubSub\V1\ReceivedMessage::class);
        $this->received_messages = $arr;

        return $this;
    }

    /**
     * Optional. This field will only be set if `enable_exactly_once_delivery` is
     * set to `true` and is not guaranteed to be populated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.AcknowledgeConfirmation acknowledge_confirmation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\StreamingPullResponse\AcknowledgeConfirmation|null
     */
    public function getAcknowledgeConfirmation()
    {
        return $this->acknowledge_confirmation;
    }

    public function hasAcknowledgeConfirmation()
    {
        return isset($this->acknowledge_confirmation);
    }

    public function clearAcknowledgeConfirmation()
    {
        unset($this->acknowledge_confirmation);
    }

    /**
     * Optional. This field will only be set if `enable_exactly_once_delivery` is
     * set to `true` and is not guaranteed to be populated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.AcknowledgeConfirmation acknowledge_confirmation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\StreamingPullResponse\AcknowledgeConfirmation $var
     * @return $this
     */
    public function setAcknowledgeConfirmation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\StreamingPullResponse\AcknowledgeConfirmation::class);
        $this->acknowledge_confirmation = $var;

        return $this;
    }

    /**
     * Optional. This field will only be set if `enable_exactly_once_delivery` is
     * set to `true` and is not guaranteed to be populated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.ModifyAckDeadlineConfirmation modify_ack_deadline_confirmation = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\StreamingPullResponse\ModifyAckDeadlineConfirmation|null
     */
    public function getModifyAckDeadlineConfirmation()
    {
        return $this->modify_ack_deadline_confirmation;
    }

    public function hasModifyAckDeadlineConfirmation()
    {
        return isset($this->modify_ack_deadline_confirmation);
    }

    public function clearModifyAckDeadlineConfirmation()
    {
        unset($this->modify_ack_deadline_confirmation);
    }

    /**
     * Optional. This field will only be set if `enable_exactly_once_delivery` is
     * set to `true` and is not guaranteed to be populated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.ModifyAckDeadlineConfirmation modify_ack_deadline_confirmation = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\StreamingPullResponse\ModifyAckDeadlineConfirmation $var
     * @return $this
     */
    public function setModifyAckDeadlineConfirmation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\StreamingPullResponse\ModifyAckDeadlineConfirmation::class);
        $this->modify_ack_deadline_confirmation = $var;

        return $this;
    }

    /**
     * Optional. Properties associated with this subscription.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.SubscriptionProperties subscription_properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\StreamingPullResponse\SubscriptionProperties|null
     */
    public function getSubscriptionProperties()
    {
        return $this->subscription_properties;
    }

    public function hasSubscriptionProperties()
    {
        return isset($this->subscription_properties);
    }

    public function clearSubscriptionProperties()
    {
        unset($this->subscription_properties);
    }

    /**
     * Optional. Properties associated with this subscription.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.StreamingPullResponse.SubscriptionProperties subscription_properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\StreamingPullResponse\SubscriptionProperties $var
     * @return $this
     */
    public function setSubscriptionProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\StreamingPullResponse\SubscriptionProperties::class);
        $this->subscription_properties = $var;

        return $this;
    }

}

