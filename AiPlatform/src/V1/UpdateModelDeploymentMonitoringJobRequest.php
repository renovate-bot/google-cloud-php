<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [JobService.UpdateModelDeploymentMonitoringJob][google.cloud.aiplatform.v1.JobService.UpdateModelDeploymentMonitoringJob].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateModelDeploymentMonitoringJobRequest</code>
 */
class UpdateModelDeploymentMonitoringJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The model monitoring configuration which replaces the resource on
     * the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob model_deployment_monitoring_job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $model_deployment_monitoring_job = null;
    /**
     * Required. The update mask is used to specify the fields to be overwritten
     * in the ModelDeploymentMonitoringJob resource by the update. The fields
     * specified in the update_mask are relative to the resource, not the full
     * request. A field will be overwritten if it is in the mask. If the user does
     * not provide a mask then only the non-empty fields present in the request
     * will be overwritten. Set the update_mask to `*` to override all fields. For
     * the objective config, the user can either provide the update mask for
     * model_deployment_monitoring_objective_configs or any combination of its
     * nested fields, such as:
     * model_deployment_monitoring_objective_configs.objective_config.training_dataset.
     * Updatable fields:
     *   * `display_name`
     *   * `model_deployment_monitoring_schedule_config`
     *   * `model_monitoring_alert_config`
     *   * `logging_sampling_strategy`
     *   * `labels`
     *   * `log_ttl`
     *   * `enable_monitoring_pipeline_logs`
     * .  and
     *   * `model_deployment_monitoring_objective_configs`
     * .  or
     *   * `model_deployment_monitoring_objective_configs.objective_config.training_dataset`
     *   * `model_deployment_monitoring_objective_configs.objective_config.training_prediction_skew_detection_config`
     *   * `model_deployment_monitoring_objective_configs.objective_config.prediction_drift_detection_config`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringJob $modelDeploymentMonitoringJob Required. The model monitoring configuration which replaces the resource on
     *                                                                                               the server.
     * @param \Google\Protobuf\FieldMask                               $updateMask                   Required. The update mask is used to specify the fields to be overwritten
     *                                                                                               in the ModelDeploymentMonitoringJob resource by the update. The fields
     *                                                                                               specified in the update_mask are relative to the resource, not the full
     *                                                                                               request. A field will be overwritten if it is in the mask. If the user does
     *                                                                                               not provide a mask then only the non-empty fields present in the request
     *                                                                                               will be overwritten. Set the update_mask to `*` to override all fields. For
     *                                                                                               the objective config, the user can either provide the update mask for
     *                                                                                               model_deployment_monitoring_objective_configs or any combination of its
     *                                                                                               nested fields, such as:
     *                                                                                               model_deployment_monitoring_objective_configs.objective_config.training_dataset.
     *
     *                                                                                               Updatable fields:
     *
     *                                                                                               * `display_name`
     *                                                                                               * `model_deployment_monitoring_schedule_config`
     *                                                                                               * `model_monitoring_alert_config`
     *                                                                                               * `logging_sampling_strategy`
     *                                                                                               * `labels`
     *                                                                                               * `log_ttl`
     *                                                                                               * `enable_monitoring_pipeline_logs`
     *                                                                                               .  and
     *                                                                                               * `model_deployment_monitoring_objective_configs`
     *                                                                                               .  or
     *                                                                                               * `model_deployment_monitoring_objective_configs.objective_config.training_dataset`
     *                                                                                               * `model_deployment_monitoring_objective_configs.objective_config.training_prediction_skew_detection_config`
     *                                                                                               * `model_deployment_monitoring_objective_configs.objective_config.prediction_drift_detection_config`
     *
     * @return \Google\Cloud\AIPlatform\V1\UpdateModelDeploymentMonitoringJobRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringJob $modelDeploymentMonitoringJob, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setModelDeploymentMonitoringJob($modelDeploymentMonitoringJob)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringJob $model_deployment_monitoring_job
     *           Required. The model monitoring configuration which replaces the resource on
     *           the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask is used to specify the fields to be overwritten
     *           in the ModelDeploymentMonitoringJob resource by the update. The fields
     *           specified in the update_mask are relative to the resource, not the full
     *           request. A field will be overwritten if it is in the mask. If the user does
     *           not provide a mask then only the non-empty fields present in the request
     *           will be overwritten. Set the update_mask to `*` to override all fields. For
     *           the objective config, the user can either provide the update mask for
     *           model_deployment_monitoring_objective_configs or any combination of its
     *           nested fields, such as:
     *           model_deployment_monitoring_objective_configs.objective_config.training_dataset.
     *           Updatable fields:
     *             * `display_name`
     *             * `model_deployment_monitoring_schedule_config`
     *             * `model_monitoring_alert_config`
     *             * `logging_sampling_strategy`
     *             * `labels`
     *             * `log_ttl`
     *             * `enable_monitoring_pipeline_logs`
     *           .  and
     *             * `model_deployment_monitoring_objective_configs`
     *           .  or
     *             * `model_deployment_monitoring_objective_configs.objective_config.training_dataset`
     *             * `model_deployment_monitoring_objective_configs.objective_config.training_prediction_skew_detection_config`
     *             * `model_deployment_monitoring_objective_configs.objective_config.prediction_drift_detection_config`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The model monitoring configuration which replaces the resource on
     * the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob model_deployment_monitoring_job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringJob|null
     */
    public function getModelDeploymentMonitoringJob()
    {
        return $this->model_deployment_monitoring_job;
    }

    public function hasModelDeploymentMonitoringJob()
    {
        return isset($this->model_deployment_monitoring_job);
    }

    public function clearModelDeploymentMonitoringJob()
    {
        unset($this->model_deployment_monitoring_job);
    }

    /**
     * Required. The model monitoring configuration which replaces the resource on
     * the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob model_deployment_monitoring_job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringJob $var
     * @return $this
     */
    public function setModelDeploymentMonitoringJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringJob::class);
        $this->model_deployment_monitoring_job = $var;

        return $this;
    }

    /**
     * Required. The update mask is used to specify the fields to be overwritten
     * in the ModelDeploymentMonitoringJob resource by the update. The fields
     * specified in the update_mask are relative to the resource, not the full
     * request. A field will be overwritten if it is in the mask. If the user does
     * not provide a mask then only the non-empty fields present in the request
     * will be overwritten. Set the update_mask to `*` to override all fields. For
     * the objective config, the user can either provide the update mask for
     * model_deployment_monitoring_objective_configs or any combination of its
     * nested fields, such as:
     * model_deployment_monitoring_objective_configs.objective_config.training_dataset.
     * Updatable fields:
     *   * `display_name`
     *   * `model_deployment_monitoring_schedule_config`
     *   * `model_monitoring_alert_config`
     *   * `logging_sampling_strategy`
     *   * `labels`
     *   * `log_ttl`
     *   * `enable_monitoring_pipeline_logs`
     * .  and
     *   * `model_deployment_monitoring_objective_configs`
     * .  or
     *   * `model_deployment_monitoring_objective_configs.objective_config.training_dataset`
     *   * `model_deployment_monitoring_objective_configs.objective_config.training_prediction_skew_detection_config`
     *   * `model_deployment_monitoring_objective_configs.objective_config.prediction_drift_detection_config`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The update mask is used to specify the fields to be overwritten
     * in the ModelDeploymentMonitoringJob resource by the update. The fields
     * specified in the update_mask are relative to the resource, not the full
     * request. A field will be overwritten if it is in the mask. If the user does
     * not provide a mask then only the non-empty fields present in the request
     * will be overwritten. Set the update_mask to `*` to override all fields. For
     * the objective config, the user can either provide the update mask for
     * model_deployment_monitoring_objective_configs or any combination of its
     * nested fields, such as:
     * model_deployment_monitoring_objective_configs.objective_config.training_dataset.
     * Updatable fields:
     *   * `display_name`
     *   * `model_deployment_monitoring_schedule_config`
     *   * `model_monitoring_alert_config`
     *   * `logging_sampling_strategy`
     *   * `labels`
     *   * `log_ttl`
     *   * `enable_monitoring_pipeline_logs`
     * .  and
     *   * `model_deployment_monitoring_objective_configs`
     * .  or
     *   * `model_deployment_monitoring_objective_configs.objective_config.training_dataset`
     *   * `model_deployment_monitoring_objective_configs.objective_config.training_prediction_skew_detection_config`
     *   * `model_deployment_monitoring_objective_configs.objective_config.prediction_drift_detection_config`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

