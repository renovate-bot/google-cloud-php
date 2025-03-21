<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Conversations.GenerateSuggestions][google.cloud.dialogflow.v2.Conversations.GenerateSuggestions].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GenerateSuggestionsRequest</code>
 */
class GenerateSuggestionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The conversation for which the suggestions are generated. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     * The conversation must be created with a conversation profile which has
     * generators configured in it to be able to get suggestions.
     *
     * Generated from protobuf field <code>string conversation = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $conversation = '';
    /**
     * Optional. The name of the latest conversation message for which the request
     * is triggered. Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $latest_message = '';
    /**
     * Optional. A list of trigger events. Only generators configured in the
     * conversation_profile whose trigger_event is listed here will be triggered.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.TriggerEvent trigger_events = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $trigger_events;

    /**
     * @param string $conversation Required. The conversation for which the suggestions are generated. Format:
     *                             `projects/<Project ID>/locations/<Location
     *                             ID>/conversations/<Conversation ID>`.
     *
     *                             The conversation must be created with a conversation profile which has
     *                             generators configured in it to be able to get suggestions. Please see
     *                             {@see ConversationsClient::conversationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\V2\GenerateSuggestionsRequest
     *
     * @experimental
     */
    public static function build(string $conversation): self
    {
        return (new self())
            ->setConversation($conversation);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conversation
     *           Required. The conversation for which the suggestions are generated. Format:
     *           `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>`.
     *           The conversation must be created with a conversation profile which has
     *           generators configured in it to be able to get suggestions.
     *     @type string $latest_message
     *           Optional. The name of the latest conversation message for which the request
     *           is triggered. Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $trigger_events
     *           Optional. A list of trigger events. Only generators configured in the
     *           conversation_profile whose trigger_event is listed here will be triggered.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The conversation for which the suggestions are generated. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     * The conversation must be created with a conversation profile which has
     * generators configured in it to be able to get suggestions.
     *
     * Generated from protobuf field <code>string conversation = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    /**
     * Required. The conversation for which the suggestions are generated. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     * The conversation must be created with a conversation profile which has
     * generators configured in it to be able to get suggestions.
     *
     * Generated from protobuf field <code>string conversation = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setConversation($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation = $var;

        return $this;
    }

    /**
     * Optional. The name of the latest conversation message for which the request
     * is triggered. Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLatestMessage()
    {
        return $this->latest_message;
    }

    /**
     * Optional. The name of the latest conversation message for which the request
     * is triggered. Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLatestMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->latest_message = $var;

        return $this;
    }

    /**
     * Optional. A list of trigger events. Only generators configured in the
     * conversation_profile whose trigger_event is listed here will be triggered.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.TriggerEvent trigger_events = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTriggerEvents()
    {
        return $this->trigger_events;
    }

    /**
     * Optional. A list of trigger events. Only generators configured in the
     * conversation_profile whose trigger_event is listed here will be triggered.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.TriggerEvent trigger_events = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTriggerEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dialogflow\V2\TriggerEvent::class);
        $this->trigger_events = $arr;

        return $this;
    }

}

