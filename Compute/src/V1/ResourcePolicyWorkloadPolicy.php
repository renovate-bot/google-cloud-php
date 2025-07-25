<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the workload policy.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyWorkloadPolicy</code>
 */
class ResourcePolicyWorkloadPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string accelerator_topology = 389323203;</code>
     */
    private $accelerator_topology = null;
    /**
     * 
     * Check the MaxTopologyDistance enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string max_topology_distance = 7521706;</code>
     */
    private $max_topology_distance = null;
    /**
     * 
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    private $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $accelerator_topology
     *     @type string $max_topology_distance
     *           
     *           Check the MaxTopologyDistance enum for the list of possible values.
     *     @type string $type
     *           
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string accelerator_topology = 389323203;</code>
     * @return string
     */
    public function getAcceleratorTopology()
    {
        return isset($this->accelerator_topology) ? $this->accelerator_topology : '';
    }

    public function hasAcceleratorTopology()
    {
        return isset($this->accelerator_topology);
    }

    public function clearAcceleratorTopology()
    {
        unset($this->accelerator_topology);
    }

    /**
     * Generated from protobuf field <code>optional string accelerator_topology = 389323203;</code>
     * @param string $var
     * @return $this
     */
    public function setAcceleratorTopology($var)
    {
        GPBUtil::checkString($var, True);
        $this->accelerator_topology = $var;

        return $this;
    }

    /**
     * 
     * Check the MaxTopologyDistance enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string max_topology_distance = 7521706;</code>
     * @return string
     */
    public function getMaxTopologyDistance()
    {
        return isset($this->max_topology_distance) ? $this->max_topology_distance : '';
    }

    public function hasMaxTopologyDistance()
    {
        return isset($this->max_topology_distance);
    }

    public function clearMaxTopologyDistance()
    {
        unset($this->max_topology_distance);
    }

    /**
     * 
     * Check the MaxTopologyDistance enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string max_topology_distance = 7521706;</code>
     * @param string $var
     * @return $this
     */
    public function setMaxTopologyDistance($var)
    {
        GPBUtil::checkString($var, True);
        $this->max_topology_distance = $var;

        return $this;
    }

    /**
     * 
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * 
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

