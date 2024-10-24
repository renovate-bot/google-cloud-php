<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata for an `UploadConversation` operation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.UploadConversationMetadata</code>
 */
class UploadConversationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;
    /**
     * Output only. The original request.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.UploadConversationRequest request = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $request = null;
    /**
     * Output only. The operation name for a successfully created analysis
     * operation, if any.
     *
     * Generated from protobuf field <code>string analysis_operation = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $analysis_operation = '';
    /**
     * Output only. The redaction config applied to the uploaded conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.RedactionConfig applied_redaction_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $applied_redaction_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the operation was created.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time the operation finished running.
     *     @type \Google\Cloud\ContactCenterInsights\V1\UploadConversationRequest $request
     *           Output only. The original request.
     *     @type string $analysis_operation
     *           Output only. The operation name for a successfully created analysis
     *           operation, if any.
     *     @type \Google\Cloud\ContactCenterInsights\V1\RedactionConfig $applied_redaction_config
     *           Output only. The redaction config applied to the uploaded conversation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. The original request.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.UploadConversationRequest request = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\UploadConversationRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * Output only. The original request.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.UploadConversationRequest request = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\UploadConversationRequest $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\UploadConversationRequest::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Output only. The operation name for a successfully created analysis
     * operation, if any.
     *
     * Generated from protobuf field <code>string analysis_operation = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAnalysisOperation()
    {
        return $this->analysis_operation;
    }

    /**
     * Output only. The operation name for a successfully created analysis
     * operation, if any.
     *
     * Generated from protobuf field <code>string analysis_operation = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAnalysisOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->analysis_operation = $var;

        return $this;
    }

    /**
     * Output only. The redaction config applied to the uploaded conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.RedactionConfig applied_redaction_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\RedactionConfig|null
     */
    public function getAppliedRedactionConfig()
    {
        return $this->applied_redaction_config;
    }

    public function hasAppliedRedactionConfig()
    {
        return isset($this->applied_redaction_config);
    }

    public function clearAppliedRedactionConfig()
    {
        unset($this->applied_redaction_config);
    }

    /**
     * Output only. The redaction config applied to the uploaded conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.RedactionConfig applied_redaction_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\RedactionConfig $var
     * @return $this
     */
    public function setAppliedRedactionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\RedactionConfig::class);
        $this->applied_redaction_config = $var;

        return $this;
    }

}

