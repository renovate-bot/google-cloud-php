<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents token counting info for a single modality.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModalityTokenCount</code>
 */
class ModalityTokenCount extends \Google\Protobuf\Internal\Message
{
    /**
     * The modality associated with this token count.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Modality modality = 1;</code>
     */
    protected $modality = 0;
    /**
     * Number of tokens.
     *
     * Generated from protobuf field <code>int32 token_count = 2;</code>
     */
    protected $token_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $modality
     *           The modality associated with this token count.
     *     @type int $token_count
     *           Number of tokens.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * The modality associated with this token count.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Modality modality = 1;</code>
     * @return int
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * The modality associated with this token count.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Modality modality = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setModality($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Modality::class);
        $this->modality = $var;

        return $this;
    }

    /**
     * Number of tokens.
     *
     * Generated from protobuf field <code>int32 token_count = 2;</code>
     * @return int
     */
    public function getTokenCount()
    {
        return $this->token_count;
    }

    /**
     * Number of tokens.
     *
     * Generated from protobuf field <code>int32 token_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTokenCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->token_count = $var;

        return $this;
    }

}

