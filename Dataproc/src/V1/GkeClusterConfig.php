<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The cluster's GKE config.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GkeClusterConfig</code>
 */
class GkeClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A target GKE cluster to deploy to. It must be in the same project
     * and region as the Dataproc cluster (the GKE cluster can be zonal or
     * regional). Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string gke_cluster_target = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $gke_cluster_target = '';
    /**
     * Optional. GKE node pools where workloads will be scheduled. At least one
     * node pool must be assigned the `DEFAULT`
     * [GkeNodePoolTarget.Role][google.cloud.dataproc.v1.GkeNodePoolTarget.Role].
     * If a `GkeNodePoolTarget` is not specified, Dataproc constructs a `DEFAULT`
     * `GkeNodePoolTarget`. Each role can be given to only one
     * `GkeNodePoolTarget`. All node pools must have the same location settings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget node_pool_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $node_pool_target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gke_cluster_target
     *           Optional. A target GKE cluster to deploy to. It must be in the same project
     *           and region as the Dataproc cluster (the GKE cluster can be zonal or
     *           regional). Format:
     *           'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *     @type array<\Google\Cloud\Dataproc\V1\GkeNodePoolTarget>|\Google\Protobuf\Internal\RepeatedField $node_pool_target
     *           Optional. GKE node pools where workloads will be scheduled. At least one
     *           node pool must be assigned the `DEFAULT`
     *           [GkeNodePoolTarget.Role][google.cloud.dataproc.v1.GkeNodePoolTarget.Role].
     *           If a `GkeNodePoolTarget` is not specified, Dataproc constructs a `DEFAULT`
     *           `GkeNodePoolTarget`. Each role can be given to only one
     *           `GkeNodePoolTarget`. All node pools must have the same location settings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A target GKE cluster to deploy to. It must be in the same project
     * and region as the Dataproc cluster (the GKE cluster can be zonal or
     * regional). Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string gke_cluster_target = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGkeClusterTarget()
    {
        return $this->gke_cluster_target;
    }

    /**
     * Optional. A target GKE cluster to deploy to. It must be in the same project
     * and region as the Dataproc cluster (the GKE cluster can be zonal or
     * regional). Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string gke_cluster_target = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGkeClusterTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->gke_cluster_target = $var;

        return $this;
    }

    /**
     * Optional. GKE node pools where workloads will be scheduled. At least one
     * node pool must be assigned the `DEFAULT`
     * [GkeNodePoolTarget.Role][google.cloud.dataproc.v1.GkeNodePoolTarget.Role].
     * If a `GkeNodePoolTarget` is not specified, Dataproc constructs a `DEFAULT`
     * `GkeNodePoolTarget`. Each role can be given to only one
     * `GkeNodePoolTarget`. All node pools must have the same location settings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget node_pool_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodePoolTarget()
    {
        return $this->node_pool_target;
    }

    /**
     * Optional. GKE node pools where workloads will be scheduled. At least one
     * node pool must be assigned the `DEFAULT`
     * [GkeNodePoolTarget.Role][google.cloud.dataproc.v1.GkeNodePoolTarget.Role].
     * If a `GkeNodePoolTarget` is not specified, Dataproc constructs a `DEFAULT`
     * `GkeNodePoolTarget`. Each role can be given to only one
     * `GkeNodePoolTarget`. All node pools must have the same location settings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget node_pool_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dataproc\V1\GkeNodePoolTarget>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodePoolTarget($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\GkeNodePoolTarget::class);
        $this->node_pool_target = $arr;

        return $this;
    }

}

