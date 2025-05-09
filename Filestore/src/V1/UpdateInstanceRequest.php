<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateInstanceRequest updates the settings of an instance.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.UpdateInstanceRequest</code>
 */
class UpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Mask of fields to update.  At least one path must be supplied in this
     * field.  The elements of the repeated paths field may only include these
     * fields:
     * * "description"
     * * "file_shares"
     * * "labels"
     * * "performance_config"
     * * "deletion_protection_enabled"
     * * "deletion_protection_reason"
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     */
    protected $update_mask = null;
    /**
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance instance = 2;</code>
     */
    protected $instance = null;

    /**
     * @param \Google\Cloud\Filestore\V1\Instance $instance   Only fields specified in update_mask are updated.
     * @param \Google\Protobuf\FieldMask          $updateMask Mask of fields to update.  At least one path must be supplied in this
     *                                                        field.  The elements of the repeated paths field may only include these
     *                                                        fields:
     *
     *                                                        * "description"
     *                                                        * "file_shares"
     *                                                        * "labels"
     *                                                        * "performance_config"
     *                                                        * "deletion_protection_enabled"
     *                                                        * "deletion_protection_reason"
     *
     * @return \Google\Cloud\Filestore\V1\UpdateInstanceRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Filestore\V1\Instance $instance, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setInstance($instance)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Mask of fields to update.  At least one path must be supplied in this
     *           field.  The elements of the repeated paths field may only include these
     *           fields:
     *           * "description"
     *           * "file_shares"
     *           * "labels"
     *           * "performance_config"
     *           * "deletion_protection_enabled"
     *           * "deletion_protection_reason"
     *     @type \Google\Cloud\Filestore\V1\Instance $instance
     *           Only fields specified in update_mask are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Mask of fields to update.  At least one path must be supplied in this
     * field.  The elements of the repeated paths field may only include these
     * fields:
     * * "description"
     * * "file_shares"
     * * "labels"
     * * "performance_config"
     * * "deletion_protection_enabled"
     * * "deletion_protection_reason"
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
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
     * Mask of fields to update.  At least one path must be supplied in this
     * field.  The elements of the repeated paths field may only include these
     * fields:
     * * "description"
     * * "file_shares"
     * * "labels"
     * * "performance_config"
     * * "deletion_protection_enabled"
     * * "deletion_protection_reason"
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance instance = 2;</code>
     * @return \Google\Cloud\Filestore\V1\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance instance = 2;</code>
     * @param \Google\Cloud\Filestore\V1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

