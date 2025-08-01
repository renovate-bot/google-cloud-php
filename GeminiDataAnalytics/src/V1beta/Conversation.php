<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/conversation.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for a conversation.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.Conversation</code>
 */
class Conversation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Identifier. The unique resource name of a conversation.
     * It's not expected to be set when creating a conversation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. Agent(s) in the conversation.
     * Currently, only one agent is supported. This field is repeated to allow
     * for future support of multiple agents in a conversation.
     * Format: `projects/{project}/locations/{location}/dataAgents/{agent}`
     *
     * Generated from protobuf field <code>repeated string agents = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $agents;
    /**
     * Output only. Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp of the last used conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_used_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_used_time = null;
    /**
     * Optional. Open-ended and user-defined labels that can be set by the client
     * to tag a conversation (e.g. to filter conversations for specific
     * surfaces/products).
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Identifier. The unique resource name of a conversation.
     *           It's not expected to be set when creating a conversation.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $agents
     *           Required. Agent(s) in the conversation.
     *           Currently, only one agent is supported. This field is repeated to allow
     *           for future support of multiple agents in a conversation.
     *           Format: `projects/{project}/locations/{location}/dataAgents/{agent}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation timestamp.
     *     @type \Google\Protobuf\Timestamp $last_used_time
     *           Output only. Timestamp of the last used conversation.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Open-ended and user-defined labels that can be set by the client
     *           to tag a conversation (e.g. to filter conversations for specific
     *           surfaces/products).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Identifier. The unique resource name of a conversation.
     * It's not expected to be set when creating a conversation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Identifier. The unique resource name of a conversation.
     * It's not expected to be set when creating a conversation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Agent(s) in the conversation.
     * Currently, only one agent is supported. This field is repeated to allow
     * for future support of multiple agents in a conversation.
     * Format: `projects/{project}/locations/{location}/dataAgents/{agent}`
     *
     * Generated from protobuf field <code>repeated string agents = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAgents()
    {
        return $this->agents;
    }

    /**
     * Required. Agent(s) in the conversation.
     * Currently, only one agent is supported. This field is repeated to allow
     * for future support of multiple agents in a conversation.
     * Format: `projects/{project}/locations/{location}/dataAgents/{agent}`
     *
     * Generated from protobuf field <code>repeated string agents = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAgents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->agents = $arr;

        return $this;
    }

    /**
     * Output only. Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp of the last used conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_used_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastUsedTime()
    {
        return $this->last_used_time;
    }

    public function hasLastUsedTime()
    {
        return isset($this->last_used_time);
    }

    public function clearLastUsedTime()
    {
        unset($this->last_used_time);
    }

    /**
     * Output only. Timestamp of the last used conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_used_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUsedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_used_time = $var;

        return $this;
    }

    /**
     * Optional. Open-ended and user-defined labels that can be set by the client
     * to tag a conversation (e.g. to filter conversations for specific
     * surfaces/products).
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Open-ended and user-defined labels that can be set by the client
     * to tag a conversation (e.g. to filter conversations for specific
     * surfaces/products).
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

