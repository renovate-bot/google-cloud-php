<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a
 * [ConversationModels.DeployConversationModel][google.cloud.dialogflow.v2.ConversationModels.DeployConversationModel]
 * operation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.DeployConversationModelOperationMetadata</code>
 */
class DeployConversationModelOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the conversation model. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model Id>`
     *
     * Generated from protobuf field <code>string conversation_model = 1;</code>
     */
    protected $conversation_model = '';
    /**
     * Timestamp when request to deploy conversation model was submitted. The time
     * is measured on server side.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    protected $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conversation_model
     *           The resource name of the conversation model. Format:
     *           `projects/<Project ID>/conversationModels/<Conversation Model Id>`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Timestamp when request to deploy conversation model was submitted. The time
     *           is measured on server side.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the conversation model. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model Id>`
     *
     * Generated from protobuf field <code>string conversation_model = 1;</code>
     * @return string
     */
    public function getConversationModel()
    {
        return $this->conversation_model;
    }

    /**
     * The resource name of the conversation model. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model Id>`
     *
     * Generated from protobuf field <code>string conversation_model = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_model = $var;

        return $this;
    }

    /**
     * Timestamp when request to deploy conversation model was submitted. The time
     * is measured on server side.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
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
     * Timestamp when request to deploy conversation model was submitted. The time
     * is measured on server side.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

