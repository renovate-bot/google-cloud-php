<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/assist_answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\AssistantGroundedContent\TextGroundingMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Referenced content and related document metadata.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AssistantGroundedContent.TextGroundingMetadata.Reference</code>
 */
class Reference extends \Google\Protobuf\Internal\Message
{
    /**
     * Referenced text content.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     */
    protected $content = '';
    /**
     * Document metadata.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AssistantGroundedContent.TextGroundingMetadata.Reference.DocumentMetadata document_metadata = 2;</code>
     */
    protected $document_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           Referenced text content.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AssistantGroundedContent\TextGroundingMetadata\Reference\DocumentMetadata $document_metadata
     *           Document metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\AssistAnswer::initOnce();
        parent::__construct($data);
    }

    /**
     * Referenced text content.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Referenced text content.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Document metadata.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AssistantGroundedContent.TextGroundingMetadata.Reference.DocumentMetadata document_metadata = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AssistantGroundedContent\TextGroundingMetadata\Reference\DocumentMetadata|null
     */
    public function getDocumentMetadata()
    {
        return $this->document_metadata;
    }

    public function hasDocumentMetadata()
    {
        return isset($this->document_metadata);
    }

    public function clearDocumentMetadata()
    {
        unset($this->document_metadata);
    }

    /**
     * Document metadata.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AssistantGroundedContent.TextGroundingMetadata.Reference.DocumentMetadata document_metadata = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AssistantGroundedContent\TextGroundingMetadata\Reference\DocumentMetadata $var
     * @return $this
     */
    public function setDocumentMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AssistantGroundedContent\TextGroundingMetadata\Reference\DocumentMetadata::class);
        $this->document_metadata = $var;

        return $this;
    }

}


