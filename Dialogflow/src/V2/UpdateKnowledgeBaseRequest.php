<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/knowledge_base.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KnowledgeBases.UpdateKnowledgeBase][google.cloud.dialogflow.v2.KnowledgeBases.UpdateKnowledgeBase].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateKnowledgeBaseRequest</code>
 */
class UpdateKnowledgeBaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The knowledge base to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.KnowledgeBase knowledge_base = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $knowledge_base = null;
    /**
     * Optional. Not specified means `update all`.
     * Currently, only `display_name` can be updated, an InvalidArgument will be
     * returned for attempting to update other fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Dialogflow\V2\KnowledgeBase $knowledgeBase Required. The knowledge base to update.
     * @param \Google\Protobuf\FieldMask                $updateMask    Optional. Not specified means `update all`.
     *                                                                 Currently, only `display_name` can be updated, an InvalidArgument will be
     *                                                                 returned for attempting to update other fields.
     *
     * @return \Google\Cloud\Dialogflow\V2\UpdateKnowledgeBaseRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dialogflow\V2\KnowledgeBase $knowledgeBase, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setKnowledgeBase($knowledgeBase)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\KnowledgeBase $knowledge_base
     *           Required. The knowledge base to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Not specified means `update all`.
     *           Currently, only `display_name` can be updated, an InvalidArgument will be
     *           returned for attempting to update other fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\KnowledgeBase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The knowledge base to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.KnowledgeBase knowledge_base = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\KnowledgeBase|null
     */
    public function getKnowledgeBase()
    {
        return $this->knowledge_base;
    }

    public function hasKnowledgeBase()
    {
        return isset($this->knowledge_base);
    }

    public function clearKnowledgeBase()
    {
        unset($this->knowledge_base);
    }

    /**
     * Required. The knowledge base to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.KnowledgeBase knowledge_base = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\KnowledgeBase $var
     * @return $this
     */
    public function setKnowledgeBase($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\KnowledgeBase::class);
        $this->knowledge_base = $var;

        return $this;
    }

    /**
     * Optional. Not specified means `update all`.
     * Currently, only `display_name` can be updated, an InvalidArgument will be
     * returned for attempting to update other fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Not specified means `update all`.
     * Currently, only `display_name` can be updated, an InvalidArgument will be
     * returned for attempting to update other fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

