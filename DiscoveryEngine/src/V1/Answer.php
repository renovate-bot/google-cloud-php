<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines an answer.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Answer</code>
 */
class Answer extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Fully qualified name
     * `projects/{project}/locations/global/collections/{collection}/engines/{engine}/sessions/&#42;&#47;answers/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * The state of the answer generation.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.State state = 2;</code>
     */
    protected $state = 0;
    /**
     * The textual answer.
     *
     * Generated from protobuf field <code>string answer_text = 3;</code>
     */
    protected $answer_text = '';
    /**
     * A score in the range of [0, 1] describing how grounded the answer is by the
     * reference chunks.
     *
     * Generated from protobuf field <code>optional double grounding_score = 12;</code>
     */
    protected $grounding_score = null;
    /**
     * Citations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Citation citations = 4;</code>
     */
    private $citations;
    /**
     * Optional. Grounding supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.GroundingSupport grounding_supports = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $grounding_supports;
    /**
     * References.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Reference references = 5;</code>
     */
    private $references;
    /**
     * Suggested related questions.
     *
     * Generated from protobuf field <code>repeated string related_questions = 6;</code>
     */
    private $related_questions;
    /**
     * Answer generation steps.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Step steps = 7;</code>
     */
    private $steps;
    /**
     * Query understanding information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo query_understanding_info = 10;</code>
     */
    protected $query_understanding_info = null;
    /**
     * Additional answer-skipped reasons. This provides the reason for ignored
     * cases. If nothing is skipped, this field is not set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.AnswerSkippedReason answer_skipped_reasons = 11;</code>
     */
    private $answer_skipped_reasons;
    /**
     * Output only. Answer creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Answer completed timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $complete_time = null;
    /**
     * Optional. Safety ratings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SafetyRating safety_ratings = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $safety_ratings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. Fully qualified name
     *           `projects/{project}/locations/global/collections/{collection}/engines/{engine}/sessions/&#42;&#47;answers/&#42;`
     *     @type int $state
     *           The state of the answer generation.
     *     @type string $answer_text
     *           The textual answer.
     *     @type float $grounding_score
     *           A score in the range of [0, 1] describing how grounded the answer is by the
     *           reference chunks.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Answer\Citation>|\Google\Protobuf\Internal\RepeatedField $citations
     *           Citations.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Answer\GroundingSupport>|\Google\Protobuf\Internal\RepeatedField $grounding_supports
     *           Optional. Grounding supports.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Answer\Reference>|\Google\Protobuf\Internal\RepeatedField $references
     *           References.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $related_questions
     *           Suggested related questions.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Answer\Step>|\Google\Protobuf\Internal\RepeatedField $steps
     *           Answer generation steps.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo $query_understanding_info
     *           Query understanding information.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $answer_skipped_reasons
     *           Additional answer-skipped reasons. This provides the reason for ignored
     *           cases. If nothing is skipped, this field is not set.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Answer creation timestamp.
     *     @type \Google\Protobuf\Timestamp $complete_time
     *           Output only. Answer completed timestamp.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\SafetyRating>|\Google\Protobuf\Internal\RepeatedField $safety_ratings
     *           Optional. Safety ratings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Fully qualified name
     * `projects/{project}/locations/global/collections/{collection}/engines/{engine}/sessions/&#42;&#47;answers/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. Fully qualified name
     * `projects/{project}/locations/global/collections/{collection}/engines/{engine}/sessions/&#42;&#47;answers/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * The state of the answer generation.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of the answer generation.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\Answer\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The textual answer.
     *
     * Generated from protobuf field <code>string answer_text = 3;</code>
     * @return string
     */
    public function getAnswerText()
    {
        return $this->answer_text;
    }

    /**
     * The textual answer.
     *
     * Generated from protobuf field <code>string answer_text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerText($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_text = $var;

        return $this;
    }

    /**
     * A score in the range of [0, 1] describing how grounded the answer is by the
     * reference chunks.
     *
     * Generated from protobuf field <code>optional double grounding_score = 12;</code>
     * @return float
     */
    public function getGroundingScore()
    {
        return isset($this->grounding_score) ? $this->grounding_score : 0.0;
    }

    public function hasGroundingScore()
    {
        return isset($this->grounding_score);
    }

    public function clearGroundingScore()
    {
        unset($this->grounding_score);
    }

    /**
     * A score in the range of [0, 1] describing how grounded the answer is by the
     * reference chunks.
     *
     * Generated from protobuf field <code>optional double grounding_score = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setGroundingScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->grounding_score = $var;

        return $this;
    }

    /**
     * Citations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Citation citations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCitations()
    {
        return $this->citations;
    }

    /**
     * Citations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Citation citations = 4;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Answer\Citation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCitations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Answer\Citation::class);
        $this->citations = $arr;

        return $this;
    }

    /**
     * Optional. Grounding supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.GroundingSupport grounding_supports = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroundingSupports()
    {
        return $this->grounding_supports;
    }

    /**
     * Optional. Grounding supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.GroundingSupport grounding_supports = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Answer\GroundingSupport>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroundingSupports($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Answer\GroundingSupport::class);
        $this->grounding_supports = $arr;

        return $this;
    }

    /**
     * References.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Reference references = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * References.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Reference references = 5;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Answer\Reference>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Answer\Reference::class);
        $this->references = $arr;

        return $this;
    }

    /**
     * Suggested related questions.
     *
     * Generated from protobuf field <code>repeated string related_questions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelatedQuestions()
    {
        return $this->related_questions;
    }

    /**
     * Suggested related questions.
     *
     * Generated from protobuf field <code>repeated string related_questions = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelatedQuestions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->related_questions = $arr;

        return $this;
    }

    /**
     * Answer generation steps.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Step steps = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Answer generation steps.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Step steps = 7;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Answer\Step>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSteps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Answer\Step::class);
        $this->steps = $arr;

        return $this;
    }

    /**
     * Query understanding information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo query_understanding_info = 10;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo|null
     */
    public function getQueryUnderstandingInfo()
    {
        return $this->query_understanding_info;
    }

    public function hasQueryUnderstandingInfo()
    {
        return isset($this->query_understanding_info);
    }

    public function clearQueryUnderstandingInfo()
    {
        unset($this->query_understanding_info);
    }

    /**
     * Query understanding information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo query_understanding_info = 10;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo $var
     * @return $this
     */
    public function setQueryUnderstandingInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo::class);
        $this->query_understanding_info = $var;

        return $this;
    }

    /**
     * Additional answer-skipped reasons. This provides the reason for ignored
     * cases. If nothing is skipped, this field is not set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.AnswerSkippedReason answer_skipped_reasons = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnswerSkippedReasons()
    {
        return $this->answer_skipped_reasons;
    }

    /**
     * Additional answer-skipped reasons. This provides the reason for ignored
     * cases. If nothing is skipped, this field is not set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.AnswerSkippedReason answer_skipped_reasons = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnswerSkippedReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\DiscoveryEngine\V1\Answer\AnswerSkippedReason::class);
        $this->answer_skipped_reasons = $arr;

        return $this;
    }

    /**
     * Output only. Answer creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Answer creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Answer completed timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompleteTime()
    {
        return $this->complete_time;
    }

    public function hasCompleteTime()
    {
        return isset($this->complete_time);
    }

    public function clearCompleteTime()
    {
        unset($this->complete_time);
    }

    /**
     * Output only. Answer completed timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->complete_time = $var;

        return $this;
    }

    /**
     * Optional. Safety ratings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SafetyRating safety_ratings = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSafetyRatings()
    {
        return $this->safety_ratings;
    }

    /**
     * Optional. Safety ratings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SafetyRating safety_ratings = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\SafetyRating>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSafetyRatings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\SafetyRating::class);
        $this->safety_ratings = $arr;

        return $this;
    }

}

