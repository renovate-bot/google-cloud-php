<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2\Conversation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a section of ingested context information.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Conversation.ContextReference</code>
 */
class ContextReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of content updates for a context reference.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Conversation.ContextReference.ContextContent context_contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $context_contents;
    /**
     * Required. The mode in which context reference contents are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Conversation.ContextReference.UpdateMode update_mode = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mode = 0;
    /**
     * Optional. The language of the information ingested, defaults to "en-US"
     * if not set.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';
    /**
     * Output only. The time the context reference was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\Conversation\ContextReference\ContextContent>|\Google\Protobuf\Internal\RepeatedField $context_contents
     *           Required. The list of content updates for a context reference.
     *     @type int $update_mode
     *           Required. The mode in which context reference contents are updated.
     *     @type string $language_code
     *           Optional. The language of the information ingested, defaults to "en-US"
     *           if not set.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the context reference was first created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of content updates for a context reference.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Conversation.ContextReference.ContextContent context_contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContextContents()
    {
        return $this->context_contents;
    }

    /**
     * Required. The list of content updates for a context reference.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Conversation.ContextReference.ContextContent context_contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\Conversation\ContextReference\ContextContent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContextContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Conversation\ContextReference\ContextContent::class);
        $this->context_contents = $arr;

        return $this;
    }

    /**
     * Required. The mode in which context reference contents are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Conversation.ContextReference.UpdateMode update_mode = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getUpdateMode()
    {
        return $this->update_mode;
    }

    /**
     * Required. The mode in which context reference contents are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Conversation.ContextReference.UpdateMode update_mode = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setUpdateMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Conversation\ContextReference\UpdateMode::class);
        $this->update_mode = $var;

        return $this;
    }

    /**
     * Optional. The language of the information ingested, defaults to "en-US"
     * if not set.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language of the information ingested, defaults to "en-US"
     * if not set.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Output only. The time the context reference was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the context reference was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}


