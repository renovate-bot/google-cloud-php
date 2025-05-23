<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/instance.proto

namespace Google\Cloud\Notebooks\V1\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The entry of VM image upgrade history.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry</code>
 */
class UpgradeHistoryEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The snapshot of the boot disk of this notebook instance before upgrade.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     */
    protected $snapshot = '';
    /**
     * The VM image before this instance upgrade.
     *
     * Generated from protobuf field <code>string vm_image = 2;</code>
     */
    protected $vm_image = '';
    /**
     * The container image before this instance upgrade.
     *
     * Generated from protobuf field <code>string container_image = 3;</code>
     */
    protected $container_image = '';
    /**
     * The framework of this notebook instance.
     *
     * Generated from protobuf field <code>string framework = 4;</code>
     */
    protected $framework = '';
    /**
     * The version of the notebook instance before this upgrade.
     *
     * Generated from protobuf field <code>string version = 5;</code>
     */
    protected $version = '';
    /**
     * The state of this instance upgrade history entry.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry.State state = 6;</code>
     */
    protected $state = 0;
    /**
     * The time that this instance upgrade history entry is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     */
    protected $create_time = null;
    /**
     * Target VM Image. Format: `ainotebooks-vm/project/image-name/name`.
     *
     * Generated from protobuf field <code>string target_image = 8 [deprecated = true];</code>
     * @deprecated
     */
    protected $target_image = '';
    /**
     * Action. Rolloback or Upgrade.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry.Action action = 9;</code>
     */
    protected $action = 0;
    /**
     * Target VM Version, like m63.
     *
     * Generated from protobuf field <code>string target_version = 10;</code>
     */
    protected $target_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $snapshot
     *           The snapshot of the boot disk of this notebook instance before upgrade.
     *     @type string $vm_image
     *           The VM image before this instance upgrade.
     *     @type string $container_image
     *           The container image before this instance upgrade.
     *     @type string $framework
     *           The framework of this notebook instance.
     *     @type string $version
     *           The version of the notebook instance before this upgrade.
     *     @type int $state
     *           The state of this instance upgrade history entry.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time that this instance upgrade history entry is created.
     *     @type string $target_image
     *           Target VM Image. Format: `ainotebooks-vm/project/image-name/name`.
     *     @type int $action
     *           Action. Rolloback or Upgrade.
     *     @type string $target_version
     *           Target VM Version, like m63.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * The snapshot of the boot disk of this notebook instance before upgrade.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     * @return string
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * The snapshot of the boot disk of this notebook instance before upgrade.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot = $var;

        return $this;
    }

    /**
     * The VM image before this instance upgrade.
     *
     * Generated from protobuf field <code>string vm_image = 2;</code>
     * @return string
     */
    public function getVmImage()
    {
        return $this->vm_image;
    }

    /**
     * The VM image before this instance upgrade.
     *
     * Generated from protobuf field <code>string vm_image = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVmImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_image = $var;

        return $this;
    }

    /**
     * The container image before this instance upgrade.
     *
     * Generated from protobuf field <code>string container_image = 3;</code>
     * @return string
     */
    public function getContainerImage()
    {
        return $this->container_image;
    }

    /**
     * The container image before this instance upgrade.
     *
     * Generated from protobuf field <code>string container_image = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContainerImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->container_image = $var;

        return $this;
    }

    /**
     * The framework of this notebook instance.
     *
     * Generated from protobuf field <code>string framework = 4;</code>
     * @return string
     */
    public function getFramework()
    {
        return $this->framework;
    }

    /**
     * The framework of this notebook instance.
     *
     * Generated from protobuf field <code>string framework = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFramework($var)
    {
        GPBUtil::checkString($var, True);
        $this->framework = $var;

        return $this;
    }

    /**
     * The version of the notebook instance before this upgrade.
     *
     * Generated from protobuf field <code>string version = 5;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the notebook instance before this upgrade.
     *
     * Generated from protobuf field <code>string version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * The state of this instance upgrade history entry.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry.State state = 6;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of this instance upgrade history entry.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry.State state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V1\Instance\UpgradeHistoryEntry\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The time that this instance upgrade history entry is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
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
     * The time that this instance upgrade history entry is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
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
     * Target VM Image. Format: `ainotebooks-vm/project/image-name/name`.
     *
     * Generated from protobuf field <code>string target_image = 8 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getTargetImage()
    {
        if ($this->target_image !== '') {
            @trigger_error('target_image is deprecated.', E_USER_DEPRECATED);
        }
        return $this->target_image;
    }

    /**
     * Target VM Image. Format: `ainotebooks-vm/project/image-name/name`.
     *
     * Generated from protobuf field <code>string target_image = 8 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setTargetImage($var)
    {
        @trigger_error('target_image is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->target_image = $var;

        return $this;
    }

    /**
     * Action. Rolloback or Upgrade.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry.Action action = 9;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Action. Rolloback or Upgrade.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry.Action action = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V1\Instance\UpgradeHistoryEntry\Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Target VM Version, like m63.
     *
     * Generated from protobuf field <code>string target_version = 10;</code>
     * @return string
     */
    public function getTargetVersion()
    {
        return $this->target_version;
    }

    /**
     * Target VM Version, like m63.
     *
     * Generated from protobuf field <code>string target_version = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_version = $var;

        return $this;
    }

}


