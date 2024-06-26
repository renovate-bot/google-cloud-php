<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information about the Large Model.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.LargeModelReference</code>
 */
class LargeModelReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the large Foundation or pre-built model. Like
     * "chat-bison", "text-bison". Or model name with version ID, like
     * "chat-bison&#64;001", "text-bison&#64;005", etc.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique name of the large Foundation or pre-built model. Like
     *           "chat-bison", "text-bison". Or model name with version ID, like
     *           "chat-bison&#64;001", "text-bison&#64;005", etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the large Foundation or pre-built model. Like
     * "chat-bison", "text-bison". Or model name with version ID, like
     * "chat-bison&#64;001", "text-bison&#64;005", etc.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique name of the large Foundation or pre-built model. Like
     * "chat-bison", "text-bison". Or model name with version ID, like
     * "chat-bison&#64;001", "text-bison&#64;005", etc.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

