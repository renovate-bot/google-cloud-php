<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/service.proto

namespace Google\Cloud\AlloyDb\V1\UpgradeClusterStatus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of an upgrade stage.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.UpgradeClusterStatus.StageStatus</code>
 */
class StageStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Upgrade stage.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterResponse.Stage stage = 1;</code>
     */
    protected $stage = 0;
    /**
     * State of this stage.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterResponse.Status state = 2;</code>
     */
    protected $state = 0;
    protected $stage_specific_status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AlloyDb\V1\UpgradeClusterStatus\ReadPoolInstancesUpgradeStageStatus $read_pool_instances_upgrade
     *           Read pool instances upgrade metadata.
     *     @type int $stage
     *           Upgrade stage.
     *     @type int $state
     *           State of this stage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Read pool instances upgrade metadata.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterStatus.ReadPoolInstancesUpgradeStageStatus read_pool_instances_upgrade = 11;</code>
     * @return \Google\Cloud\AlloyDb\V1\UpgradeClusterStatus\ReadPoolInstancesUpgradeStageStatus|null
     */
    public function getReadPoolInstancesUpgrade()
    {
        return $this->readOneof(11);
    }

    public function hasReadPoolInstancesUpgrade()
    {
        return $this->hasOneof(11);
    }

    /**
     * Read pool instances upgrade metadata.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterStatus.ReadPoolInstancesUpgradeStageStatus read_pool_instances_upgrade = 11;</code>
     * @param \Google\Cloud\AlloyDb\V1\UpgradeClusterStatus\ReadPoolInstancesUpgradeStageStatus $var
     * @return $this
     */
    public function setReadPoolInstancesUpgrade($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1\UpgradeClusterStatus\ReadPoolInstancesUpgradeStageStatus::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Upgrade stage.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterResponse.Stage stage = 1;</code>
     * @return int
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Upgrade stage.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterResponse.Stage stage = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1\UpgradeClusterResponse\Stage::class);
        $this->stage = $var;

        return $this;
    }

    /**
     * State of this stage.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterResponse.Status state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State of this stage.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.UpgradeClusterResponse.Status state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1\UpgradeClusterResponse\Status::class);
        $this->state = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getStageSpecificStatus()
    {
        return $this->whichOneof("stage_specific_status");
    }

}


