<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tuning_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a TuningJob that runs with Google owned models.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.TuningJob</code>
 */
class TuningJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. Resource name of a TuningJob. Format:
     * `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Optional. The display name of the
     * [TunedModel][google.cloud.aiplatform.v1.Model]. The name can be up to 128
     * characters long and can consist of any UTF-8 characters.
     *
     * Generated from protobuf field <code>string tuned_model_display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $tuned_model_display_name = '';
    /**
     * Optional. The description of the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] for the first time
     * entered the `JOB_STATE_RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Time when the TuningJob entered any of the following
     * [JobStates][google.cloud.aiplatform.v1.JobState]: `JOB_STATE_SUCCEEDED`,
     * `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`, `JOB_STATE_EXPIRED`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;
    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] was most recently
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     * `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = null;
    /**
     * Optional. The labels with user-defined metadata to organize
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] and generated resources
     * such as [Model][google.cloud.aiplatform.v1.Model] and
     * [Endpoint][google.cloud.aiplatform.v1.Endpoint].
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. The Experiment associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>string experiment = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $experiment = '';
    /**
     * Output only. The tuned model resources associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TunedModel tuned_model = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tuned_model = null;
    /**
     * Output only. The tuning data statistics associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TuningDataStats tuning_data_stats = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tuning_data_stats = null;
    /**
     * Customer-managed encryption key options for a TuningJob. If this is set,
     * then all resources created by the TuningJob will be encrypted with the
     * provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 16;</code>
     */
    protected $encryption_spec = null;
    /**
     * The service account that the tuningJob workload runs as.
     * If not specified, the Vertex AI Secure Fine-Tuned Service Agent in the
     * project will be used. See
     * https://cloud.google.com/iam/docs/service-agents#vertex-ai-secure-fine-tuning-service-agent
     * Users starting the pipeline must have the `iam.serviceAccounts.actAs`
     * permission on this service account.
     *
     * Generated from protobuf field <code>string service_account = 22;</code>
     */
    protected $service_account = '';
    protected $source_model;
    protected $tuning_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_model
     *           The base model that is being tuned. See [Supported
     *           models](https://cloud.google.com/vertex-ai/generative-ai/docs/model-reference/tuning#supported_models).
     *     @type \Google\Cloud\AIPlatform\V1\SupervisedTuningSpec $supervised_tuning_spec
     *           Tuning Spec for Supervised Fine Tuning.
     *     @type string $name
     *           Output only. Identifier. Resource name of a TuningJob. Format:
     *           `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
     *     @type string $tuned_model_display_name
     *           Optional. The display name of the
     *           [TunedModel][google.cloud.aiplatform.v1.Model]. The name can be up to 128
     *           characters long and can consist of any UTF-8 characters.
     *     @type string $description
     *           Optional. The description of the
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *     @type int $state
     *           Output only. The detailed state of the job.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob] was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Time when the
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob] for the first time
     *           entered the `JOB_STATE_RUNNING` state.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Time when the TuningJob entered any of the following
     *           [JobStates][google.cloud.aiplatform.v1.JobState]: `JOB_STATE_SUCCEEDED`,
     *           `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`, `JOB_STATE_EXPIRED`.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when the
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob] was most recently
     *           updated.
     *     @type \Google\Rpc\Status $error
     *           Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     *           `JOB_STATE_CANCELLED`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob] and generated resources
     *           such as [Model][google.cloud.aiplatform.v1.Model] and
     *           [Endpoint][google.cloud.aiplatform.v1.Endpoint].
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *     @type string $experiment
     *           Output only. The Experiment associated with this
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *     @type \Google\Cloud\AIPlatform\V1\TunedModel $tuned_model
     *           Output only. The tuned model resources associated with this
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *     @type \Google\Cloud\AIPlatform\V1\TuningDataStats $tuning_data_stats
     *           Output only. The tuning data statistics associated with this
     *           [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Customer-managed encryption key options for a TuningJob. If this is set,
     *           then all resources created by the TuningJob will be encrypted with the
     *           provided encryption key.
     *     @type string $service_account
     *           The service account that the tuningJob workload runs as.
     *           If not specified, the Vertex AI Secure Fine-Tuned Service Agent in the
     *           project will be used. See
     *           https://cloud.google.com/iam/docs/service-agents#vertex-ai-secure-fine-tuning-service-agent
     *           Users starting the pipeline must have the `iam.serviceAccounts.actAs`
     *           permission on this service account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TuningJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The base model that is being tuned. See [Supported
     * models](https://cloud.google.com/vertex-ai/generative-ai/docs/model-reference/tuning#supported_models).
     *
     * Generated from protobuf field <code>string base_model = 4;</code>
     * @return string
     */
    public function getBaseModel()
    {
        return $this->readOneof(4);
    }

    public function hasBaseModel()
    {
        return $this->hasOneof(4);
    }

    /**
     * The base model that is being tuned. See [Supported
     * models](https://cloud.google.com/vertex-ai/generative-ai/docs/model-reference/tuning#supported_models).
     *
     * Generated from protobuf field <code>string base_model = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Tuning Spec for Supervised Fine Tuning.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedTuningSpec supervised_tuning_spec = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\SupervisedTuningSpec|null
     */
    public function getSupervisedTuningSpec()
    {
        return $this->readOneof(5);
    }

    public function hasSupervisedTuningSpec()
    {
        return $this->hasOneof(5);
    }

    /**
     * Tuning Spec for Supervised Fine Tuning.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedTuningSpec supervised_tuning_spec = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\SupervisedTuningSpec $var
     * @return $this
     */
    public function setSupervisedTuningSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SupervisedTuningSpec::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Output only. Identifier. Resource name of a TuningJob. Format:
     * `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. Resource name of a TuningJob. Format:
     * `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The display name of the
     * [TunedModel][google.cloud.aiplatform.v1.Model]. The name can be up to 128
     * characters long and can consist of any UTF-8 characters.
     *
     * Generated from protobuf field <code>string tuned_model_display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTunedModelDisplayName()
    {
        return $this->tuned_model_display_name;
    }

    /**
     * Optional. The display name of the
     * [TunedModel][google.cloud.aiplatform.v1.Model]. The name can be up to 128
     * characters long and can consist of any UTF-8 characters.
     *
     * Generated from protobuf field <code>string tuned_model_display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTunedModelDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->tuned_model_display_name = $var;

        return $this;
    }

    /**
     * Optional. The description of the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\JobState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] for the first time
     * entered the `JOB_STATE_RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] for the first time
     * entered the `JOB_STATE_RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the TuningJob entered any of the following
     * [JobStates][google.cloud.aiplatform.v1.JobState]: `JOB_STATE_SUCCEEDED`,
     * `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`, `JOB_STATE_EXPIRED`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. Time when the TuningJob entered any of the following
     * [JobStates][google.cloud.aiplatform.v1.JobState]: `JOB_STATE_SUCCEEDED`,
     * `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`, `JOB_STATE_EXPIRED`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] was most recently
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when the
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] was most recently
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     * `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     * `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata to organize
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] and generated resources
     * such as [Model][google.cloud.aiplatform.v1.Model] and
     * [Endpoint][google.cloud.aiplatform.v1.Endpoint].
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob] and generated resources
     * such as [Model][google.cloud.aiplatform.v1.Model] and
     * [Endpoint][google.cloud.aiplatform.v1.Endpoint].
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The Experiment associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>string experiment = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * Output only. The Experiment associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>string experiment = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->experiment = $var;

        return $this;
    }

    /**
     * Output only. The tuned model resources associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TunedModel tuned_model = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\TunedModel|null
     */
    public function getTunedModel()
    {
        return $this->tuned_model;
    }

    public function hasTunedModel()
    {
        return isset($this->tuned_model);
    }

    public function clearTunedModel()
    {
        unset($this->tuned_model);
    }

    /**
     * Output only. The tuned model resources associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TunedModel tuned_model = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\TunedModel $var
     * @return $this
     */
    public function setTunedModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TunedModel::class);
        $this->tuned_model = $var;

        return $this;
    }

    /**
     * Output only. The tuning data statistics associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TuningDataStats tuning_data_stats = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\TuningDataStats|null
     */
    public function getTuningDataStats()
    {
        return $this->tuning_data_stats;
    }

    public function hasTuningDataStats()
    {
        return isset($this->tuning_data_stats);
    }

    public function clearTuningDataStats()
    {
        unset($this->tuning_data_stats);
    }

    /**
     * Output only. The tuning data statistics associated with this
     * [TuningJob][google.cloud.aiplatform.v1.TuningJob].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TuningDataStats tuning_data_stats = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\TuningDataStats $var
     * @return $this
     */
    public function setTuningDataStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TuningDataStats::class);
        $this->tuning_data_stats = $var;

        return $this;
    }

    /**
     * Customer-managed encryption key options for a TuningJob. If this is set,
     * then all resources created by the TuningJob will be encrypted with the
     * provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 16;</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Customer-managed encryption key options for a TuningJob. If this is set,
     * then all resources created by the TuningJob will be encrypted with the
     * provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 16;</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * The service account that the tuningJob workload runs as.
     * If not specified, the Vertex AI Secure Fine-Tuned Service Agent in the
     * project will be used. See
     * https://cloud.google.com/iam/docs/service-agents#vertex-ai-secure-fine-tuning-service-agent
     * Users starting the pipeline must have the `iam.serviceAccounts.actAs`
     * permission on this service account.
     *
     * Generated from protobuf field <code>string service_account = 22;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The service account that the tuningJob workload runs as.
     * If not specified, the Vertex AI Secure Fine-Tuned Service Agent in the
     * project will be used. See
     * https://cloud.google.com/iam/docs/service-agents#vertex-ai-secure-fine-tuning-service-agent
     * Users starting the pipeline must have the `iam.serviceAccounts.actAs`
     * permission on this service account.
     *
     * Generated from protobuf field <code>string service_account = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceModel()
    {
        return $this->whichOneof("source_model");
    }

    /**
     * @return string
     */
    public function getTuningSpec()
    {
        return $this->whichOneof("tuning_spec");
    }

}

