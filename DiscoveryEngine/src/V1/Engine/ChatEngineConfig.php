<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/engine.proto

namespace Google\Cloud\DiscoveryEngine\V1\Engine;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configurations for a Chat Engine.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Engine.ChatEngineConfig</code>
 */
class ChatEngineConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The configurationt generate the Dialogflow agent that is associated to
     * this Engine.
     * Note that these configurations are one-time consumed by
     * and passed to Dialogflow service. It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.ChatEngineConfig.AgentCreationConfig agent_creation_config = 1;</code>
     */
    protected $agent_creation_config = null;
    /**
     * The resource name of an exist Dialogflow agent to link to this Chat
     * Engine. Customers can either provide `agent_creation_config` to create
     * agent or provide an agent name that links the agent with the Chat engine.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>`.
     * Note that the `dialogflow_agent_to_link` are one-time consumed by and
     * passed to Dialogflow service. It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation. Use
     * [ChatEngineMetadata.dialogflow_agent][google.cloud.discoveryengine.v1.Engine.ChatEngineMetadata.dialogflow_agent]
     * for actual agent association after Engine is created.
     *
     * Generated from protobuf field <code>string dialogflow_agent_to_link = 2;</code>
     */
    protected $dialogflow_agent_to_link = '';
    /**
     * Optional. If the flag set to true, we allow the agent and engine are in
     * different locations, otherwise the agent and engine are required to be in
     * the same location. The flag is set to false by default.
     * Note that the `allow_cross_region` are one-time consumed by and
     * passed to
     * [EngineService.CreateEngine][google.cloud.discoveryengine.v1.EngineService.CreateEngine].
     * It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation.
     *
     * Generated from protobuf field <code>bool allow_cross_region = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $allow_cross_region = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig\AgentCreationConfig $agent_creation_config
     *           The configurationt generate the Dialogflow agent that is associated to
     *           this Engine.
     *           Note that these configurations are one-time consumed by
     *           and passed to Dialogflow service. It means they cannot be retrieved using
     *           [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     *           or
     *           [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     *           API after engine creation.
     *     @type string $dialogflow_agent_to_link
     *           The resource name of an exist Dialogflow agent to link to this Chat
     *           Engine. Customers can either provide `agent_creation_config` to create
     *           agent or provide an agent name that links the agent with the Chat engine.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>`.
     *           Note that the `dialogflow_agent_to_link` are one-time consumed by and
     *           passed to Dialogflow service. It means they cannot be retrieved using
     *           [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     *           or
     *           [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     *           API after engine creation. Use
     *           [ChatEngineMetadata.dialogflow_agent][google.cloud.discoveryengine.v1.Engine.ChatEngineMetadata.dialogflow_agent]
     *           for actual agent association after Engine is created.
     *     @type bool $allow_cross_region
     *           Optional. If the flag set to true, we allow the agent and engine are in
     *           different locations, otherwise the agent and engine are required to be in
     *           the same location. The flag is set to false by default.
     *           Note that the `allow_cross_region` are one-time consumed by and
     *           passed to
     *           [EngineService.CreateEngine][google.cloud.discoveryengine.v1.EngineService.CreateEngine].
     *           It means they cannot be retrieved using
     *           [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     *           or
     *           [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     *           API after engine creation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * The configurationt generate the Dialogflow agent that is associated to
     * this Engine.
     * Note that these configurations are one-time consumed by
     * and passed to Dialogflow service. It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.ChatEngineConfig.AgentCreationConfig agent_creation_config = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig\AgentCreationConfig|null
     */
    public function getAgentCreationConfig()
    {
        return $this->agent_creation_config;
    }

    public function hasAgentCreationConfig()
    {
        return isset($this->agent_creation_config);
    }

    public function clearAgentCreationConfig()
    {
        unset($this->agent_creation_config);
    }

    /**
     * The configurationt generate the Dialogflow agent that is associated to
     * this Engine.
     * Note that these configurations are one-time consumed by
     * and passed to Dialogflow service. It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.ChatEngineConfig.AgentCreationConfig agent_creation_config = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig\AgentCreationConfig $var
     * @return $this
     */
    public function setAgentCreationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig\AgentCreationConfig::class);
        $this->agent_creation_config = $var;

        return $this;
    }

    /**
     * The resource name of an exist Dialogflow agent to link to this Chat
     * Engine. Customers can either provide `agent_creation_config` to create
     * agent or provide an agent name that links the agent with the Chat engine.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>`.
     * Note that the `dialogflow_agent_to_link` are one-time consumed by and
     * passed to Dialogflow service. It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation. Use
     * [ChatEngineMetadata.dialogflow_agent][google.cloud.discoveryengine.v1.Engine.ChatEngineMetadata.dialogflow_agent]
     * for actual agent association after Engine is created.
     *
     * Generated from protobuf field <code>string dialogflow_agent_to_link = 2;</code>
     * @return string
     */
    public function getDialogflowAgentToLink()
    {
        return $this->dialogflow_agent_to_link;
    }

    /**
     * The resource name of an exist Dialogflow agent to link to this Chat
     * Engine. Customers can either provide `agent_creation_config` to create
     * agent or provide an agent name that links the agent with the Chat engine.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>`.
     * Note that the `dialogflow_agent_to_link` are one-time consumed by and
     * passed to Dialogflow service. It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation. Use
     * [ChatEngineMetadata.dialogflow_agent][google.cloud.discoveryengine.v1.Engine.ChatEngineMetadata.dialogflow_agent]
     * for actual agent association after Engine is created.
     *
     * Generated from protobuf field <code>string dialogflow_agent_to_link = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDialogflowAgentToLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->dialogflow_agent_to_link = $var;

        return $this;
    }

    /**
     * Optional. If the flag set to true, we allow the agent and engine are in
     * different locations, otherwise the agent and engine are required to be in
     * the same location. The flag is set to false by default.
     * Note that the `allow_cross_region` are one-time consumed by and
     * passed to
     * [EngineService.CreateEngine][google.cloud.discoveryengine.v1.EngineService.CreateEngine].
     * It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation.
     *
     * Generated from protobuf field <code>bool allow_cross_region = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowCrossRegion()
    {
        return $this->allow_cross_region;
    }

    /**
     * Optional. If the flag set to true, we allow the agent and engine are in
     * different locations, otherwise the agent and engine are required to be in
     * the same location. The flag is set to false by default.
     * Note that the `allow_cross_region` are one-time consumed by and
     * passed to
     * [EngineService.CreateEngine][google.cloud.discoveryengine.v1.EngineService.CreateEngine].
     * It means they cannot be retrieved using
     * [EngineService.GetEngine][google.cloud.discoveryengine.v1.EngineService.GetEngine]
     * or
     * [EngineService.ListEngines][google.cloud.discoveryengine.v1.EngineService.ListEngines]
     * API after engine creation.
     *
     * Generated from protobuf field <code>bool allow_cross_region = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowCrossRegion($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_cross_region = $var;

        return $this;
    }

}


