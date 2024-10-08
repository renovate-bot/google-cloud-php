<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Node group identification and configuration information.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.AuxiliaryNodeGroup</code>
 */
class AuxiliaryNodeGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Node group configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.NodeGroup node_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $node_group = null;
    /**
     * Optional. A node group ID. Generated if not specified.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). Cannot begin or end with underscore
     * or hyphen. Must consist of from 3 to 33 characters.
     *
     * Generated from protobuf field <code>string node_group_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $node_group_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1\NodeGroup $node_group
     *           Required. Node group configuration.
     *     @type string $node_group_id
     *           Optional. A node group ID. Generated if not specified.
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). Cannot begin or end with underscore
     *           or hyphen. Must consist of from 3 to 33 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Node group configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.NodeGroup node_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\NodeGroup|null
     */
    public function getNodeGroup()
    {
        return $this->node_group;
    }

    public function hasNodeGroup()
    {
        return isset($this->node_group);
    }

    public function clearNodeGroup()
    {
        unset($this->node_group);
    }

    /**
     * Required. Node group configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.NodeGroup node_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\NodeGroup $var
     * @return $this
     */
    public function setNodeGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\NodeGroup::class);
        $this->node_group = $var;

        return $this;
    }

    /**
     * Optional. A node group ID. Generated if not specified.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). Cannot begin or end with underscore
     * or hyphen. Must consist of from 3 to 33 characters.
     *
     * Generated from protobuf field <code>string node_group_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNodeGroupId()
    {
        return $this->node_group_id;
    }

    /**
     * Optional. A node group ID. Generated if not specified.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). Cannot begin or end with underscore
     * or hyphen. Must consist of from 3 to 33 characters.
     *
     * Generated from protobuf field <code>string node_group_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNodeGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_group_id = $var;

        return $this;
    }

}

