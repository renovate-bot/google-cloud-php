<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionQueryConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dialogflow source setting.
 * Supported feature: DIALOGFLOW_ASSIST.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DialogflowQuerySource</code>
 */
class DialogflowQuerySource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of a Dialogflow virtual agent used for end user side
     * intent detection and suggestion. Format: `projects/<Project
     * ID>/locations/<Location ID>/agent`. When multiple agents are allowed in
     * the same Dialogflow project.
     *
     * Generated from protobuf field <code>string agent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $agent = '';
    /**
     * Optional. The Dialogflow assist configuration for human agent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DialogflowQuerySource.HumanAgentSideConfig human_agent_side_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $human_agent_side_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $agent
     *           Required. The name of a Dialogflow virtual agent used for end user side
     *           intent detection and suggestion. Format: `projects/<Project
     *           ID>/locations/<Location ID>/agent`. When multiple agents are allowed in
     *           the same Dialogflow project.
     *     @type \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionQueryConfig\DialogflowQuerySource\HumanAgentSideConfig $human_agent_side_config
     *           Optional. The Dialogflow assist configuration for human agent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of a Dialogflow virtual agent used for end user side
     * intent detection and suggestion. Format: `projects/<Project
     * ID>/locations/<Location ID>/agent`. When multiple agents are allowed in
     * the same Dialogflow project.
     *
     * Generated from protobuf field <code>string agent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Required. The name of a Dialogflow virtual agent used for end user side
     * intent detection and suggestion. Format: `projects/<Project
     * ID>/locations/<Location ID>/agent`. When multiple agents are allowed in
     * the same Dialogflow project.
     *
     * Generated from protobuf field <code>string agent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent = $var;

        return $this;
    }

    /**
     * Optional. The Dialogflow assist configuration for human agent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DialogflowQuerySource.HumanAgentSideConfig human_agent_side_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionQueryConfig\DialogflowQuerySource\HumanAgentSideConfig|null
     */
    public function getHumanAgentSideConfig()
    {
        return $this->human_agent_side_config;
    }

    public function hasHumanAgentSideConfig()
    {
        return isset($this->human_agent_side_config);
    }

    public function clearHumanAgentSideConfig()
    {
        unset($this->human_agent_side_config);
    }

    /**
     * Optional. The Dialogflow assist configuration for human agent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DialogflowQuerySource.HumanAgentSideConfig human_agent_side_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionQueryConfig\DialogflowQuerySource\HumanAgentSideConfig $var
     * @return $this
     */
    public function setHumanAgentSideConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionQueryConfig\DialogflowQuerySource\HumanAgentSideConfig::class);
        $this->human_agent_side_config = $var;

        return $this;
    }

}


