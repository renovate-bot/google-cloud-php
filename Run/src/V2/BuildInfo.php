<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Build information of the image.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.BuildInfo</code>
 */
class BuildInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Entry point of the function when the image is a Cloud Run
     * function.
     *
     * Generated from protobuf field <code>string function_target = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $function_target = '';
    /**
     * Output only. Source code location of the image.
     *
     * Generated from protobuf field <code>string source_location = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $source_location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $function_target
     *           Output only. Entry point of the function when the image is a Cloud Run
     *           function.
     *     @type string $source_location
     *           Output only. Source code location of the image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Entry point of the function when the image is a Cloud Run
     * function.
     *
     * Generated from protobuf field <code>string function_target = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFunctionTarget()
    {
        return $this->function_target;
    }

    /**
     * Output only. Entry point of the function when the image is a Cloud Run
     * function.
     *
     * Generated from protobuf field <code>string function_target = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFunctionTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->function_target = $var;

        return $this;
    }

    /**
     * Output only. Source code location of the image.
     *
     * Generated from protobuf field <code>string source_location = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSourceLocation()
    {
        return $this->source_location;
    }

    /**
     * Output only. Source code location of the image.
     *
     * Generated from protobuf field <code>string source_location = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_location = $var;

        return $this;
    }

}

