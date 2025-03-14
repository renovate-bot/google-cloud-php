<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/reasoning_engine_execution_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [ReasoningEngineExecutionService.Query][]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.QueryReasoningEngineResponse</code>
 */
class QueryReasoningEngineResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Response provided by users in JSON object format.
     *
     * Generated from protobuf field <code>.google.protobuf.Value output = 1;</code>
     */
    protected $output = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Value $output
     *           Response provided by users in JSON object format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ReasoningEngineExecutionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Response provided by users in JSON object format.
     *
     * Generated from protobuf field <code>.google.protobuf.Value output = 1;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getOutput()
    {
        return $this->output;
    }

    public function hasOutput()
    {
        return isset($this->output);
    }

    public function clearOutput()
    {
        unset($this->output);
    }

    /**
     * Response provided by users in JSON object format.
     *
     * Generated from protobuf field <code>.google.protobuf.Value output = 1;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->output = $var;

        return $this;
    }

}

