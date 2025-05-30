<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config to process conversation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.HumanAgentAssistantConfig.ConversationProcessConfig</code>
 */
class ConversationProcessConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of recent non-small-talk sentences to use as context for article
     * and FAQ suggestion
     *
     * Generated from protobuf field <code>int32 recent_sentences_count = 2;</code>
     */
    protected $recent_sentences_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $recent_sentences_count
     *           Number of recent non-small-talk sentences to use as context for article
     *           and FAQ suggestion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of recent non-small-talk sentences to use as context for article
     * and FAQ suggestion
     *
     * Generated from protobuf field <code>int32 recent_sentences_count = 2;</code>
     * @return int
     */
    public function getRecentSentencesCount()
    {
        return $this->recent_sentences_count;
    }

    /**
     * Number of recent non-small-talk sentences to use as context for article
     * and FAQ suggestion
     *
     * Generated from protobuf field <code>int32 recent_sentences_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRecentSentencesCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->recent_sentences_count = $var;

        return $this;
    }

}


