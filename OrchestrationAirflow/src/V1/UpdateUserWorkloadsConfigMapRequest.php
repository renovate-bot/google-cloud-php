<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update user workloads ConfigMap request.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.UpdateUserWorkloadsConfigMapRequest</code>
 */
class UpdateUserWorkloadsConfigMapRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. User workloads ConfigMap to override.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.UserWorkloadsConfigMap user_workloads_config_map = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $user_workloads_config_map = null;

    /**
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\UserWorkloadsConfigMap $userWorkloadsConfigMap Optional. User workloads ConfigMap to override.
     *
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\UpdateUserWorkloadsConfigMapRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Orchestration\Airflow\Service\V1\UserWorkloadsConfigMap $userWorkloadsConfigMap): self
    {
        return (new self())
            ->setUserWorkloadsConfigMap($userWorkloadsConfigMap);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\UserWorkloadsConfigMap $user_workloads_config_map
     *           Optional. User workloads ConfigMap to override.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. User workloads ConfigMap to override.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.UserWorkloadsConfigMap user_workloads_config_map = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\UserWorkloadsConfigMap|null
     */
    public function getUserWorkloadsConfigMap()
    {
        return $this->user_workloads_config_map;
    }

    public function hasUserWorkloadsConfigMap()
    {
        return isset($this->user_workloads_config_map);
    }

    public function clearUserWorkloadsConfigMap()
    {
        unset($this->user_workloads_config_map);
    }

    /**
     * Optional. User workloads ConfigMap to override.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.UserWorkloadsConfigMap user_workloads_config_map = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\UserWorkloadsConfigMap $var
     * @return $this
     */
    public function setUserWorkloadsConfigMap($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\UserWorkloadsConfigMap::class);
        $this->user_workloads_config_map = $var;

        return $this;
    }

}

