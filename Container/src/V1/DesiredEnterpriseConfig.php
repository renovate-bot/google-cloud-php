<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DesiredEnterpriseConfig is a wrapper used for updating enterprise_config.
 *
 * Generated from protobuf message <code>google.container.v1.DesiredEnterpriseConfig</code>
 */
class DesiredEnterpriseConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * desired_tier specifies the desired tier of the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.EnterpriseConfig.ClusterTier desired_tier = 1;</code>
     */
    protected $desired_tier = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $desired_tier
     *           desired_tier specifies the desired tier of the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * desired_tier specifies the desired tier of the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.EnterpriseConfig.ClusterTier desired_tier = 1;</code>
     * @return int
     */
    public function getDesiredTier()
    {
        return $this->desired_tier;
    }

    /**
     * desired_tier specifies the desired tier of the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.EnterpriseConfig.ClusterTier desired_tier = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDesiredTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\EnterpriseConfig\ClusterTier::class);
        $this->desired_tier = $var;

        return $this;
    }

}

