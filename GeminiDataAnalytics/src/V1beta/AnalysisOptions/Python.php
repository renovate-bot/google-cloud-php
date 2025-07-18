<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/context.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta\AnalysisOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for Python analysis.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.AnalysisOptions.Python</code>
 */
class Python extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Whether to enable Python analysis.
     * Defaults to false.
     *
     * Generated from protobuf field <code>bool enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Optional. Whether to enable Python analysis.
     *           Defaults to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\Context::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Whether to enable Python analysis.
     * Defaults to false.
     *
     * Generated from protobuf field <code>bool enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Optional. Whether to enable Python analysis.
     * Defaults to false.
     *
     * Generated from protobuf field <code>bool enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

}


