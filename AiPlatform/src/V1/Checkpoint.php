<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the machine learning model version checkpoint.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Checkpoint</code>
 */
class Checkpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the checkpoint.
     *
     * Generated from protobuf field <code>string checkpoint_id = 1;</code>
     */
    protected $checkpoint_id = '';
    /**
     * The epoch of the checkpoint.
     *
     * Generated from protobuf field <code>int64 epoch = 2;</code>
     */
    protected $epoch = 0;
    /**
     * The step of the checkpoint.
     *
     * Generated from protobuf field <code>int64 step = 3;</code>
     */
    protected $step = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $checkpoint_id
     *           The ID of the checkpoint.
     *     @type int|string $epoch
     *           The epoch of the checkpoint.
     *     @type int|string $step
     *           The step of the checkpoint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the checkpoint.
     *
     * Generated from protobuf field <code>string checkpoint_id = 1;</code>
     * @return string
     */
    public function getCheckpointId()
    {
        return $this->checkpoint_id;
    }

    /**
     * The ID of the checkpoint.
     *
     * Generated from protobuf field <code>string checkpoint_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckpointId($var)
    {
        GPBUtil::checkString($var, True);
        $this->checkpoint_id = $var;

        return $this;
    }

    /**
     * The epoch of the checkpoint.
     *
     * Generated from protobuf field <code>int64 epoch = 2;</code>
     * @return int|string
     */
    public function getEpoch()
    {
        return $this->epoch;
    }

    /**
     * The epoch of the checkpoint.
     *
     * Generated from protobuf field <code>int64 epoch = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEpoch($var)
    {
        GPBUtil::checkInt64($var);
        $this->epoch = $var;

        return $this;
    }

    /**
     * The step of the checkpoint.
     *
     * Generated from protobuf field <code>int64 step = 3;</code>
     * @return int|string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * The step of the checkpoint.
     *
     * Generated from protobuf field <code>int64 step = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStep($var)
    {
        GPBUtil::checkInt64($var);
        $this->step = $var;

        return $this;
    }

}

