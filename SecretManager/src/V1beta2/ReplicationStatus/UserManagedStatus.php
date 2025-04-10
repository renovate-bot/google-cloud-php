<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1beta2/resources.proto

namespace Google\Cloud\SecretManager\V1beta2\ReplicationStatus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The replication status of a
 * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion] using
 * user-managed replication.
 * Only populated if the parent
 * [Secret][google.cloud.secretmanager.v1beta2.Secret] has a user-managed
 * replication policy.
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1beta2.ReplicationStatus.UserManagedStatus</code>
 */
class UserManagedStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The list of replica statuses for the
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1beta2.ReplicationStatus.UserManagedStatus.ReplicaStatus replicas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $replicas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\SecretManager\V1beta2\ReplicationStatus\UserManagedStatus\ReplicaStatus>|\Google\Protobuf\Internal\RepeatedField $replicas
     *           Output only. The list of replica statuses for the
     *           [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1Beta2\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The list of replica statuses for the
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1beta2.ReplicationStatus.UserManagedStatus.ReplicaStatus replicas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicas()
    {
        return $this->replicas;
    }

    /**
     * Output only. The list of replica statuses for the
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1beta2.ReplicationStatus.UserManagedStatus.ReplicaStatus replicas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\SecretManager\V1beta2\ReplicationStatus\UserManagedStatus\ReplicaStatus>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecretManager\V1beta2\ReplicationStatus\UserManagedStatus\ReplicaStatus::class);
        $this->replicas = $arr;

        return $this;
    }

}


