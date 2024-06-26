<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store.proto

namespace Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureOnlineStore.Bigtable.AutoScaling</code>
 */
class AutoScaling extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The minimum number of nodes to scale down to. Must be greater
     * than or equal to 1.
     *
     * Generated from protobuf field <code>int32 min_node_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $min_node_count = 0;
    /**
     * Required. The maximum number of nodes to scale up to. Must be greater
     * than or equal to min_node_count, and less than or equal to 10 times of
     * 'min_node_count'.
     *
     * Generated from protobuf field <code>int32 max_node_count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $max_node_count = 0;
    /**
     * Optional. A percentage of the cluster's CPU capacity. Can be from 10%
     * to 80%. When a cluster's CPU utilization exceeds the target that you
     * have set, Bigtable immediately adds nodes to the cluster. When CPU
     * utilization is substantially lower than the target, Bigtable removes
     * nodes. If not set will default to 50%.
     *
     * Generated from protobuf field <code>int32 cpu_utilization_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cpu_utilization_target = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_node_count
     *           Required. The minimum number of nodes to scale down to. Must be greater
     *           than or equal to 1.
     *     @type int $max_node_count
     *           Required. The maximum number of nodes to scale up to. Must be greater
     *           than or equal to min_node_count, and less than or equal to 10 times of
     *           'min_node_count'.
     *     @type int $cpu_utilization_target
     *           Optional. A percentage of the cluster's CPU capacity. Can be from 10%
     *           to 80%. When a cluster's CPU utilization exceeds the target that you
     *           have set, Bigtable immediately adds nodes to the cluster. When CPU
     *           utilization is substantially lower than the target, Bigtable removes
     *           nodes. If not set will default to 50%.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The minimum number of nodes to scale down to. Must be greater
     * than or equal to 1.
     *
     * Generated from protobuf field <code>int32 min_node_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMinNodeCount()
    {
        return $this->min_node_count;
    }

    /**
     * Required. The minimum number of nodes to scale down to. Must be greater
     * than or equal to 1.
     *
     * Generated from protobuf field <code>int32 min_node_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMinNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_node_count = $var;

        return $this;
    }

    /**
     * Required. The maximum number of nodes to scale up to. Must be greater
     * than or equal to min_node_count, and less than or equal to 10 times of
     * 'min_node_count'.
     *
     * Generated from protobuf field <code>int32 max_node_count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMaxNodeCount()
    {
        return $this->max_node_count;
    }

    /**
     * Required. The maximum number of nodes to scale up to. Must be greater
     * than or equal to min_node_count, and less than or equal to 10 times of
     * 'min_node_count'.
     *
     * Generated from protobuf field <code>int32 max_node_count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_node_count = $var;

        return $this;
    }

    /**
     * Optional. A percentage of the cluster's CPU capacity. Can be from 10%
     * to 80%. When a cluster's CPU utilization exceeds the target that you
     * have set, Bigtable immediately adds nodes to the cluster. When CPU
     * utilization is substantially lower than the target, Bigtable removes
     * nodes. If not set will default to 50%.
     *
     * Generated from protobuf field <code>int32 cpu_utilization_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCpuUtilizationTarget()
    {
        return $this->cpu_utilization_target;
    }

    /**
     * Optional. A percentage of the cluster's CPU capacity. Can be from 10%
     * to 80%. When a cluster's CPU utilization exceeds the target that you
     * have set, Bigtable immediately adds nodes to the cluster. When CPU
     * utilization is substantially lower than the target, Bigtable removes
     * nodes. If not set will default to 50%.
     *
     * Generated from protobuf field <code>int32 cpu_utilization_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCpuUtilizationTarget($var)
    {
        GPBUtil::checkInt32($var);
        $this->cpu_utilization_target = $var;

        return $this;
    }

}


