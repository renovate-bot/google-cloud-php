<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/modelarmor/v1beta/service.proto

namespace Google\Cloud\ModelArmor\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Prompt injection and Jailbreak Filter settings.
 *
 * Generated from protobuf message <code>google.cloud.modelarmor.v1beta.PiAndJailbreakFilterSettings</code>
 */
class PiAndJailbreakFilterSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Tells whether Prompt injection and Jailbreak filter is enabled or
     * disabled.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.PiAndJailbreakFilterSettings.PiAndJailbreakFilterEnforcement filter_enforcement = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter_enforcement = 0;
    /**
     * Optional. Confidence level for this filter.
     * Confidence level is used to determine the threshold for the filter. If
     * detection confidence is equal to or greater than the specified level, a
     * positive match is reported. Confidence level will only be used if the
     * filter is enabled.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.DetectionConfidenceLevel confidence_level = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $confidence_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $filter_enforcement
     *           Optional. Tells whether Prompt injection and Jailbreak filter is enabled or
     *           disabled.
     *     @type int $confidence_level
     *           Optional. Confidence level for this filter.
     *           Confidence level is used to determine the threshold for the filter. If
     *           detection confidence is equal to or greater than the specified level, a
     *           positive match is reported. Confidence level will only be used if the
     *           filter is enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Modelarmor\V1Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Tells whether Prompt injection and Jailbreak filter is enabled or
     * disabled.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.PiAndJailbreakFilterSettings.PiAndJailbreakFilterEnforcement filter_enforcement = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getFilterEnforcement()
    {
        return $this->filter_enforcement;
    }

    /**
     * Optional. Tells whether Prompt injection and Jailbreak filter is enabled or
     * disabled.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.PiAndJailbreakFilterSettings.PiAndJailbreakFilterEnforcement filter_enforcement = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setFilterEnforcement($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ModelArmor\V1beta\PiAndJailbreakFilterSettings\PiAndJailbreakFilterEnforcement::class);
        $this->filter_enforcement = $var;

        return $this;
    }

    /**
     * Optional. Confidence level for this filter.
     * Confidence level is used to determine the threshold for the filter. If
     * detection confidence is equal to or greater than the specified level, a
     * positive match is reported. Confidence level will only be used if the
     * filter is enabled.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.DetectionConfidenceLevel confidence_level = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getConfidenceLevel()
    {
        return $this->confidence_level;
    }

    /**
     * Optional. Confidence level for this filter.
     * Confidence level is used to determine the threshold for the filter. If
     * detection confidence is equal to or greater than the specified level, a
     * positive match is reported. Confidence level will only be used if the
     * filter is enabled.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.DetectionConfidenceLevel confidence_level = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setConfidenceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ModelArmor\V1beta\DetectionConfidenceLevel::class);
        $this->confidence_level = $var;

        return $this;
    }

}

