<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/chunk.proto

namespace Google\Cloud\DiscoveryEngine\V1\Chunk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The annotation metadata includes structured content in the current chunk.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Chunk.AnnotationMetadata</code>
 */
class AnnotationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The structured content information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.StructuredContent structured_content = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $structured_content = null;
    /**
     * Output only. Image id is provided if the structured content is based on
     * an image.
     *
     * Generated from protobuf field <code>string image_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $image_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\Chunk\StructuredContent $structured_content
     *           Output only. The structured content information.
     *     @type string $image_id
     *           Output only. Image id is provided if the structured content is based on
     *           an image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Chunk::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The structured content information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.StructuredContent structured_content = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Chunk\StructuredContent|null
     */
    public function getStructuredContent()
    {
        return $this->structured_content;
    }

    public function hasStructuredContent()
    {
        return isset($this->structured_content);
    }

    public function clearStructuredContent()
    {
        unset($this->structured_content);
    }

    /**
     * Output only. The structured content information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.StructuredContent structured_content = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Chunk\StructuredContent $var
     * @return $this
     */
    public function setStructuredContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Chunk\StructuredContent::class);
        $this->structured_content = $var;

        return $this;
    }

    /**
     * Output only. Image id is provided if the structured content is based on
     * an image.
     *
     * Generated from protobuf field <code>string image_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getImageId()
    {
        return $this->image_id;
    }

    /**
     * Output only. Image id is provided if the structured content is based on
     * an image.
     *
     * Generated from protobuf field <code>string image_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setImageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_id = $var;

        return $this;
    }

}


