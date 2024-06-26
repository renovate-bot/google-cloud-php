<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for upgrading a notebook instance from within the VM
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.UpgradeInstanceInternalRequest</code>
 */
class UpgradeInstanceInternalRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vm_id = '';
    /**
     * Optional. The optional UpgradeType. Setting this field will search for additional
     * compute images to upgrade this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.UpgradeType type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Format:
     *           `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *     @type string $vm_id
     *           Required. The VM hardware token for authenticating the VM.
     *           https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *     @type int $type
     *           Optional. The optional UpgradeType. Setting this field will search for additional
     *           compute images to upgrade this instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
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

    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVmId()
    {
        return $this->vm_id;
    }

    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVmId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_id = $var;

        return $this;
    }

    /**
     * Optional. The optional UpgradeType. Setting this field will search for additional
     * compute images to upgrade this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.UpgradeType type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. The optional UpgradeType. Setting this field will search for additional
     * compute images to upgrade this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.UpgradeType type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V1\UpgradeType::class);
        $this->type = $var;

        return $this;
    }

}

