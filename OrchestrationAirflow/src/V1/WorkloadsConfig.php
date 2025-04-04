<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Kubernetes workloads configuration for GKE cluster associated with the
 * Cloud Composer environment. Supported for Cloud Composer environments in
 * versions composer-2.*.*-airflow-*.*.* and newer.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.WorkloadsConfig</code>
 */
class WorkloadsConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Resources used by Airflow schedulers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.SchedulerResource scheduler = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $scheduler = null;
    /**
     * Optional. Resources used by Airflow web server.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WebServerResource web_server = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $web_server = null;
    /**
     * Optional. Resources used by Airflow workers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WorkerResource worker = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $worker = null;
    /**
     * Optional. Resources used by Airflow triggerers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.TriggererResource triggerer = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $triggerer = null;
    /**
     * Optional. Resources used by Airflow DAG processors.
     * This field is supported for Cloud Composer environments in versions
     * composer-3-airflow-*.*.*-build.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.DagProcessorResource dag_processor = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $dag_processor = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\SchedulerResource $scheduler
     *           Optional. Resources used by Airflow schedulers.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WebServerResource $web_server
     *           Optional. Resources used by Airflow web server.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WorkerResource $worker
     *           Optional. Resources used by Airflow workers.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\TriggererResource $triggerer
     *           Optional. Resources used by Airflow triggerers.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\DagProcessorResource $dag_processor
     *           Optional. Resources used by Airflow DAG processors.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-3-airflow-*.*.*-build.* and newer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Resources used by Airflow schedulers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.SchedulerResource scheduler = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\SchedulerResource|null
     */
    public function getScheduler()
    {
        return $this->scheduler;
    }

    public function hasScheduler()
    {
        return isset($this->scheduler);
    }

    public function clearScheduler()
    {
        unset($this->scheduler);
    }

    /**
     * Optional. Resources used by Airflow schedulers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.SchedulerResource scheduler = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\SchedulerResource $var
     * @return $this
     */
    public function setScheduler($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\SchedulerResource::class);
        $this->scheduler = $var;

        return $this;
    }

    /**
     * Optional. Resources used by Airflow web server.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WebServerResource web_server = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WebServerResource|null
     */
    public function getWebServer()
    {
        return $this->web_server;
    }

    public function hasWebServer()
    {
        return isset($this->web_server);
    }

    public function clearWebServer()
    {
        unset($this->web_server);
    }

    /**
     * Optional. Resources used by Airflow web server.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WebServerResource web_server = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WebServerResource $var
     * @return $this
     */
    public function setWebServer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WebServerResource::class);
        $this->web_server = $var;

        return $this;
    }

    /**
     * Optional. Resources used by Airflow workers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WorkerResource worker = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WorkerResource|null
     */
    public function getWorker()
    {
        return $this->worker;
    }

    public function hasWorker()
    {
        return isset($this->worker);
    }

    public function clearWorker()
    {
        unset($this->worker);
    }

    /**
     * Optional. Resources used by Airflow workers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WorkerResource worker = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WorkerResource $var
     * @return $this
     */
    public function setWorker($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\WorkerResource::class);
        $this->worker = $var;

        return $this;
    }

    /**
     * Optional. Resources used by Airflow triggerers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.TriggererResource triggerer = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\TriggererResource|null
     */
    public function getTriggerer()
    {
        return $this->triggerer;
    }

    public function hasTriggerer()
    {
        return isset($this->triggerer);
    }

    public function clearTriggerer()
    {
        unset($this->triggerer);
    }

    /**
     * Optional. Resources used by Airflow triggerers.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.TriggererResource triggerer = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\TriggererResource $var
     * @return $this
     */
    public function setTriggerer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\TriggererResource::class);
        $this->triggerer = $var;

        return $this;
    }

    /**
     * Optional. Resources used by Airflow DAG processors.
     * This field is supported for Cloud Composer environments in versions
     * composer-3-airflow-*.*.*-build.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.DagProcessorResource dag_processor = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\DagProcessorResource|null
     */
    public function getDagProcessor()
    {
        return $this->dag_processor;
    }

    public function hasDagProcessor()
    {
        return isset($this->dag_processor);
    }

    public function clearDagProcessor()
    {
        unset($this->dag_processor);
    }

    /**
     * Optional. Resources used by Airflow DAG processors.
     * This field is supported for Cloud Composer environments in versions
     * composer-3-airflow-*.*.*-build.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.DagProcessorResource dag_processor = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\DagProcessorResource $var
     * @return $this
     */
    public function setDagProcessor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig\DagProcessorResource::class);
        $this->dag_processor = $var;

        return $this;
    }

}

