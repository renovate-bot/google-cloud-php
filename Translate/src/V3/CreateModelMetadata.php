<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/automl_translation.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of create model operation.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.CreateModelMetadata</code>
 */
class CreateModelMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The current state of the operation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.OperationState state = 1;</code>
     */
    protected $state = 0;
    /**
     * The creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    protected $create_time = null;
    /**
     * The last update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     */
    protected $update_time = null;
    /**
     * Only populated when operation doesn't succeed.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     */
    protected $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           The current state of the operation.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The creation time of the operation.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The last update time of the operation.
     *     @type \Google\Rpc\Status $error
     *           Only populated when operation doesn't succeed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AutomlTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * The current state of the operation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.OperationState state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the operation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.OperationState state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Translate\V3\OperationState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
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
     * The creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
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
     * The last update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The last update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Only populated when operation doesn't succeed.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Only populated when operation doesn't succeed.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

}

