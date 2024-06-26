<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Autoscaling targets for a Cluster. These determine the recommended nodes.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.AutoscalingTargets</code>
 */
class AutoscalingTargets extends \Google\Protobuf\Internal\Message
{
    /**
     * The cpu utilization that the Autoscaler should be trying to achieve.
     * This number is on a scale from 0 (no utilization) to
     * 100 (total utilization), and is limited between 10 and 80, otherwise it
     * will return INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>int32 cpu_utilization_percent = 2;</code>
     */
    protected $cpu_utilization_percent = 0;
    /**
     * The storage utilization that the Autoscaler should be trying to achieve.
     * This number is limited between 2560 (2.5TiB) and 5120 (5TiB) for a SSD
     * cluster and between 8192 (8TiB) and 16384 (16TiB) for an HDD cluster,
     * otherwise it will return INVALID_ARGUMENT error. If this value is set to 0,
     * it will be treated as if it were set to the default value: 2560 for SSD,
     * 8192 for HDD.
     *
     * Generated from protobuf field <code>int32 storage_utilization_gib_per_node = 3;</code>
     */
    protected $storage_utilization_gib_per_node = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cpu_utilization_percent
     *           The cpu utilization that the Autoscaler should be trying to achieve.
     *           This number is on a scale from 0 (no utilization) to
     *           100 (total utilization), and is limited between 10 and 80, otherwise it
     *           will return INVALID_ARGUMENT error.
     *     @type int $storage_utilization_gib_per_node
     *           The storage utilization that the Autoscaler should be trying to achieve.
     *           This number is limited between 2560 (2.5TiB) and 5120 (5TiB) for a SSD
     *           cluster and between 8192 (8TiB) and 16384 (16TiB) for an HDD cluster,
     *           otherwise it will return INVALID_ARGUMENT error. If this value is set to 0,
     *           it will be treated as if it were set to the default value: 2560 for SSD,
     *           8192 for HDD.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * The cpu utilization that the Autoscaler should be trying to achieve.
     * This number is on a scale from 0 (no utilization) to
     * 100 (total utilization), and is limited between 10 and 80, otherwise it
     * will return INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>int32 cpu_utilization_percent = 2;</code>
     * @return int
     */
    public function getCpuUtilizationPercent()
    {
        return $this->cpu_utilization_percent;
    }

    /**
     * The cpu utilization that the Autoscaler should be trying to achieve.
     * This number is on a scale from 0 (no utilization) to
     * 100 (total utilization), and is limited between 10 and 80, otherwise it
     * will return INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>int32 cpu_utilization_percent = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuUtilizationPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->cpu_utilization_percent = $var;

        return $this;
    }

    /**
     * The storage utilization that the Autoscaler should be trying to achieve.
     * This number is limited between 2560 (2.5TiB) and 5120 (5TiB) for a SSD
     * cluster and between 8192 (8TiB) and 16384 (16TiB) for an HDD cluster,
     * otherwise it will return INVALID_ARGUMENT error. If this value is set to 0,
     * it will be treated as if it were set to the default value: 2560 for SSD,
     * 8192 for HDD.
     *
     * Generated from protobuf field <code>int32 storage_utilization_gib_per_node = 3;</code>
     * @return int
     */
    public function getStorageUtilizationGibPerNode()
    {
        return $this->storage_utilization_gib_per_node;
    }

    /**
     * The storage utilization that the Autoscaler should be trying to achieve.
     * This number is limited between 2560 (2.5TiB) and 5120 (5TiB) for a SSD
     * cluster and between 8192 (8TiB) and 16384 (16TiB) for an HDD cluster,
     * otherwise it will return INVALID_ARGUMENT error. If this value is set to 0,
     * it will be treated as if it were set to the default value: 2560 for SSD,
     * 8192 for HDD.
     *
     * Generated from protobuf field <code>int32 storage_utilization_gib_per_node = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStorageUtilizationGibPerNode($var)
    {
        GPBUtil::checkInt32($var);
        $this->storage_utilization_gib_per_node = $var;

        return $this;
    }

}

