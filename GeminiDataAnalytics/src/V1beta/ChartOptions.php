<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/context.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for chart generation.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.ChartOptions</code>
 */
class ChartOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. When specified, the agent will render generated charts using the
     * provided format. Defaults to no image.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.ChartOptions.ImageOptions image = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $image = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\ChartOptions\ImageOptions $image
     *           Optional. When specified, the agent will render generated charts using the
     *           provided format. Defaults to no image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\Context::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. When specified, the agent will render generated charts using the
     * provided format. Defaults to no image.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.ChartOptions.ImageOptions image = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\ChartOptions\ImageOptions|null
     */
    public function getImage()
    {
        return $this->image;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * Optional. When specified, the agent will render generated charts using the
     * provided format. Defaults to no image.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.ChartOptions.ImageOptions image = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\ChartOptions\ImageOptions $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\ChartOptions\ImageOptions::class);
        $this->image = $var;

        return $this;
    }

}

