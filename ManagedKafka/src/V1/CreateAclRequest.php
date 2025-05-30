<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/managed_kafka.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for CreateAcl.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.CreateAclRequest</code>
 */
class CreateAclRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent cluster in which to create the acl.
     * Structured like
     * `projects/{project}/locations/{location}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID to use for the acl, which will become the final component
     * of the acl's name. The structure of `acl_id` defines the Resource Pattern
     * (resource_type, resource_name, pattern_type) of the acl. `acl_id` is
     * structured like one of the following:
     * For acls on the cluster:
     *   `cluster`
     * For acls on a single resource within the cluster:
     *   `topic/{resource_name}`
     *   `consumerGroup/{resource_name}`
     *   `transactionalId/{resource_name}`
     * For acls on all resources that match a prefix:
     *   `topicPrefixed/{resource_name}`
     *   `consumerGroupPrefixed/{resource_name}`
     *   `transactionalIdPrefixed/{resource_name}`
     * For acls on all resources of a given type (i.e. the wildcard literal "*"):
     *   `allTopics` (represents `topic/&#42;`)
     *   `allConsumerGroups` (represents `consumerGroup/&#42;`)
     *   `allTransactionalIds` (represents `transactionalId/&#42;`)
     *
     * Generated from protobuf field <code>string acl_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $acl_id = '';
    /**
     * Required. Configuration of the acl to create. Its `name` field is ignored.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Acl acl = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $acl = null;

    /**
     * @param string                            $parent Required. The parent cluster in which to create the acl.
     *                                                  Structured like
     *                                                  `projects/{project}/locations/{location}/clusters/{cluster}`. Please see
     *                                                  {@see ManagedKafkaClient::clusterName()} for help formatting this field.
     * @param \Google\Cloud\ManagedKafka\V1\Acl $acl    Required. Configuration of the acl to create. Its `name` field is ignored.
     * @param string                            $aclId  Required. The ID to use for the acl, which will become the final component
     *                                                  of the acl's name. The structure of `acl_id` defines the Resource Pattern
     *                                                  (resource_type, resource_name, pattern_type) of the acl. `acl_id` is
     *                                                  structured like one of the following:
     *
     *                                                  For acls on the cluster:
     *                                                  `cluster`
     *
     *                                                  For acls on a single resource within the cluster:
     *                                                  `topic/{resource_name}`
     *                                                  `consumerGroup/{resource_name}`
     *                                                  `transactionalId/{resource_name}`
     *
     *                                                  For acls on all resources that match a prefix:
     *                                                  `topicPrefixed/{resource_name}`
     *                                                  `consumerGroupPrefixed/{resource_name}`
     *                                                  `transactionalIdPrefixed/{resource_name}`
     *
     *                                                  For acls on all resources of a given type (i.e. the wildcard literal "*"):
     *                                                  `allTopics` (represents `topic/*`)
     *                                                  `allConsumerGroups` (represents `consumerGroup/*`)
     *                                                  `allTransactionalIds` (represents `transactionalId/*`)
     *
     * @return \Google\Cloud\ManagedKafka\V1\CreateAclRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ManagedKafka\V1\Acl $acl, string $aclId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAcl($acl)
            ->setAclId($aclId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent cluster in which to create the acl.
     *           Structured like
     *           `projects/{project}/locations/{location}/clusters/{cluster}`.
     *     @type string $acl_id
     *           Required. The ID to use for the acl, which will become the final component
     *           of the acl's name. The structure of `acl_id` defines the Resource Pattern
     *           (resource_type, resource_name, pattern_type) of the acl. `acl_id` is
     *           structured like one of the following:
     *           For acls on the cluster:
     *             `cluster`
     *           For acls on a single resource within the cluster:
     *             `topic/{resource_name}`
     *             `consumerGroup/{resource_name}`
     *             `transactionalId/{resource_name}`
     *           For acls on all resources that match a prefix:
     *             `topicPrefixed/{resource_name}`
     *             `consumerGroupPrefixed/{resource_name}`
     *             `transactionalIdPrefixed/{resource_name}`
     *           For acls on all resources of a given type (i.e. the wildcard literal "*"):
     *             `allTopics` (represents `topic/&#42;`)
     *             `allConsumerGroups` (represents `consumerGroup/&#42;`)
     *             `allTransactionalIds` (represents `transactionalId/&#42;`)
     *     @type \Google\Cloud\ManagedKafka\V1\Acl $acl
     *           Required. Configuration of the acl to create. Its `name` field is ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\ManagedKafka::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent cluster in which to create the acl.
     * Structured like
     * `projects/{project}/locations/{location}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent cluster in which to create the acl.
     * Structured like
     * `projects/{project}/locations/{location}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the acl, which will become the final component
     * of the acl's name. The structure of `acl_id` defines the Resource Pattern
     * (resource_type, resource_name, pattern_type) of the acl. `acl_id` is
     * structured like one of the following:
     * For acls on the cluster:
     *   `cluster`
     * For acls on a single resource within the cluster:
     *   `topic/{resource_name}`
     *   `consumerGroup/{resource_name}`
     *   `transactionalId/{resource_name}`
     * For acls on all resources that match a prefix:
     *   `topicPrefixed/{resource_name}`
     *   `consumerGroupPrefixed/{resource_name}`
     *   `transactionalIdPrefixed/{resource_name}`
     * For acls on all resources of a given type (i.e. the wildcard literal "*"):
     *   `allTopics` (represents `topic/&#42;`)
     *   `allConsumerGroups` (represents `consumerGroup/&#42;`)
     *   `allTransactionalIds` (represents `transactionalId/&#42;`)
     *
     * Generated from protobuf field <code>string acl_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAclId()
    {
        return $this->acl_id;
    }

    /**
     * Required. The ID to use for the acl, which will become the final component
     * of the acl's name. The structure of `acl_id` defines the Resource Pattern
     * (resource_type, resource_name, pattern_type) of the acl. `acl_id` is
     * structured like one of the following:
     * For acls on the cluster:
     *   `cluster`
     * For acls on a single resource within the cluster:
     *   `topic/{resource_name}`
     *   `consumerGroup/{resource_name}`
     *   `transactionalId/{resource_name}`
     * For acls on all resources that match a prefix:
     *   `topicPrefixed/{resource_name}`
     *   `consumerGroupPrefixed/{resource_name}`
     *   `transactionalIdPrefixed/{resource_name}`
     * For acls on all resources of a given type (i.e. the wildcard literal "*"):
     *   `allTopics` (represents `topic/&#42;`)
     *   `allConsumerGroups` (represents `consumerGroup/&#42;`)
     *   `allTransactionalIds` (represents `transactionalId/&#42;`)
     *
     * Generated from protobuf field <code>string acl_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAclId($var)
    {
        GPBUtil::checkString($var, True);
        $this->acl_id = $var;

        return $this;
    }

    /**
     * Required. Configuration of the acl to create. Its `name` field is ignored.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Acl acl = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedKafka\V1\Acl|null
     */
    public function getAcl()
    {
        return $this->acl;
    }

    public function hasAcl()
    {
        return isset($this->acl);
    }

    public function clearAcl()
    {
        unset($this->acl);
    }

    /**
     * Required. Configuration of the acl to create. Its `name` field is ignored.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Acl acl = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedKafka\V1\Acl $var
     * @return $this
     */
    public function setAcl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedKafka\V1\Acl::class);
        $this->acl = $var;

        return $this;
    }

}

