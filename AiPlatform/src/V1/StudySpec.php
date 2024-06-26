<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents specification of a Study.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StudySpec</code>
 */
class StudySpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Metric specs for the Study.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.StudySpec.MetricSpec metrics = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $metrics;
    /**
     * Required. The set of parameters to tune.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.StudySpec.ParameterSpec parameters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parameters;
    /**
     * The search algorithm specified for the Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.Algorithm algorithm = 3;</code>
     */
    protected $algorithm = 0;
    /**
     * The observation noise level of the study.
     * Currently only supported by the Vertex AI Vizier service. Not supported by
     * HyperparameterTuningJob or TrainingPipeline.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ObservationNoise observation_noise = 6;</code>
     */
    protected $observation_noise = 0;
    /**
     * Describe which measurement selection type will be used
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MeasurementSelectionType measurement_selection_type = 7;</code>
     */
    protected $measurement_selection_type = 0;
    /**
     * Conditions for automated stopping of a Study. Enable automated stopping by
     * configuring at least one condition.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.StudySpec.StudyStoppingConfig study_stopping_config = 11;</code>
     */
    protected $study_stopping_config = null;
    protected $automated_stopping_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\DecayCurveAutomatedStoppingSpec $decay_curve_stopping_spec
     *           The automated early stopping spec using decay curve rule.
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\MedianAutomatedStoppingSpec $median_automated_stopping_spec
     *           The automated early stopping spec using median rule.
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\ConvexAutomatedStoppingSpec $convex_automated_stopping_spec
     *           The automated early stopping spec using convex stopping rule.
     *     @type array<\Google\Cloud\AIPlatform\V1\StudySpec\MetricSpec>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Required. Metric specs for the Study.
     *     @type array<\Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec>|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Required. The set of parameters to tune.
     *     @type int $algorithm
     *           The search algorithm specified for the Study.
     *     @type int $observation_noise
     *           The observation noise level of the study.
     *           Currently only supported by the Vertex AI Vizier service. Not supported by
     *           HyperparameterTuningJob or TrainingPipeline.
     *     @type int $measurement_selection_type
     *           Describe which measurement selection type will be used
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\StudyStoppingConfig $study_stopping_config
     *           Conditions for automated stopping of a Study. Enable automated stopping by
     *           configuring at least one condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * The automated early stopping spec using decay curve rule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.DecayCurveAutomatedStoppingSpec decay_curve_stopping_spec = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\DecayCurveAutomatedStoppingSpec|null
     */
    public function getDecayCurveStoppingSpec()
    {
        return $this->readOneof(4);
    }

    public function hasDecayCurveStoppingSpec()
    {
        return $this->hasOneof(4);
    }

    /**
     * The automated early stopping spec using decay curve rule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.DecayCurveAutomatedStoppingSpec decay_curve_stopping_spec = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\DecayCurveAutomatedStoppingSpec $var
     * @return $this
     */
    public function setDecayCurveStoppingSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\DecayCurveAutomatedStoppingSpec::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The automated early stopping spec using median rule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MedianAutomatedStoppingSpec median_automated_stopping_spec = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\MedianAutomatedStoppingSpec|null
     */
    public function getMedianAutomatedStoppingSpec()
    {
        return $this->readOneof(5);
    }

    public function hasMedianAutomatedStoppingSpec()
    {
        return $this->hasOneof(5);
    }

    /**
     * The automated early stopping spec using median rule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MedianAutomatedStoppingSpec median_automated_stopping_spec = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\MedianAutomatedStoppingSpec $var
     * @return $this
     */
    public function setMedianAutomatedStoppingSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\MedianAutomatedStoppingSpec::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The automated early stopping spec using convex stopping rule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ConvexAutomatedStoppingSpec convex_automated_stopping_spec = 9;</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\ConvexAutomatedStoppingSpec|null
     */
    public function getConvexAutomatedStoppingSpec()
    {
        return $this->readOneof(9);
    }

    public function hasConvexAutomatedStoppingSpec()
    {
        return $this->hasOneof(9);
    }

    /**
     * The automated early stopping spec using convex stopping rule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ConvexAutomatedStoppingSpec convex_automated_stopping_spec = 9;</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\ConvexAutomatedStoppingSpec $var
     * @return $this
     */
    public function setConvexAutomatedStoppingSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\ConvexAutomatedStoppingSpec::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Required. Metric specs for the Study.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.StudySpec.MetricSpec metrics = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Required. Metric specs for the Study.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.StudySpec.MetricSpec metrics = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\StudySpec\MetricSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\StudySpec\MetricSpec::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Required. The set of parameters to tune.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.StudySpec.ParameterSpec parameters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Required. The set of parameters to tune.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.StudySpec.ParameterSpec parameters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * The search algorithm specified for the Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.Algorithm algorithm = 3;</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * The search algorithm specified for the Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.Algorithm algorithm = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\StudySpec\Algorithm::class);
        $this->algorithm = $var;

        return $this;
    }

    /**
     * The observation noise level of the study.
     * Currently only supported by the Vertex AI Vizier service. Not supported by
     * HyperparameterTuningJob or TrainingPipeline.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ObservationNoise observation_noise = 6;</code>
     * @return int
     */
    public function getObservationNoise()
    {
        return $this->observation_noise;
    }

    /**
     * The observation noise level of the study.
     * Currently only supported by the Vertex AI Vizier service. Not supported by
     * HyperparameterTuningJob or TrainingPipeline.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ObservationNoise observation_noise = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setObservationNoise($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\StudySpec\ObservationNoise::class);
        $this->observation_noise = $var;

        return $this;
    }

    /**
     * Describe which measurement selection type will be used
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MeasurementSelectionType measurement_selection_type = 7;</code>
     * @return int
     */
    public function getMeasurementSelectionType()
    {
        return $this->measurement_selection_type;
    }

    /**
     * Describe which measurement selection type will be used
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MeasurementSelectionType measurement_selection_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMeasurementSelectionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\StudySpec\MeasurementSelectionType::class);
        $this->measurement_selection_type = $var;

        return $this;
    }

    /**
     * Conditions for automated stopping of a Study. Enable automated stopping by
     * configuring at least one condition.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.StudySpec.StudyStoppingConfig study_stopping_config = 11;</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\StudyStoppingConfig|null
     */
    public function getStudyStoppingConfig()
    {
        return $this->study_stopping_config;
    }

    public function hasStudyStoppingConfig()
    {
        return isset($this->study_stopping_config);
    }

    public function clearStudyStoppingConfig()
    {
        unset($this->study_stopping_config);
    }

    /**
     * Conditions for automated stopping of a Study. Enable automated stopping by
     * configuring at least one condition.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.StudySpec.StudyStoppingConfig study_stopping_config = 11;</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\StudyStoppingConfig $var
     * @return $this
     */
    public function setStudyStoppingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\StudyStoppingConfig::class);
        $this->study_stopping_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutomatedStoppingSpec()
    {
        return $this->whichOneof("automated_stopping_spec");
    }

}

