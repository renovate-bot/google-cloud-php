<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/assistant_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\StreamAssistResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the session.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.StreamAssistResponse.SessionInfo</code>
 */
class SessionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the newly generated or continued session.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/engines/{engine}/sessions/{session}`.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $session = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Name of the newly generated or continued session.
     *           Format:
     *           `projects/{project}/locations/{location}/collections/{collection}/engines/{engine}/sessions/{session}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\AssistantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the newly generated or continued session.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/engines/{engine}/sessions/{session}`.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Name of the newly generated or continued session.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/engines/{engine}/sessions/{session}`.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

}


