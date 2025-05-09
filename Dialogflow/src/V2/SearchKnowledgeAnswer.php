<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a SearchKnowledge answer.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SearchKnowledgeAnswer</code>
 */
class SearchKnowledgeAnswer extends \Google\Protobuf\Internal\Message
{
    /**
     * The piece of text from the knowledge base documents that answers
     * the search query
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     */
    protected $answer = '';
    /**
     * The type of the answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerType answer_type = 2;</code>
     */
    protected $answer_type = 0;
    /**
     * All sources used to generate the answer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerSource answer_sources = 3;</code>
     */
    private $answer_sources;
    /**
     * The name of the answer record.
     * Format: `projects/<Project ID>/locations/<location ID>/answer
     * Records/<Answer Record ID>`
     *
     * Generated from protobuf field <code>string answer_record = 5 [(.google.api.resource_reference) = {</code>
     */
    protected $answer_record = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $answer
     *           The piece of text from the knowledge base documents that answers
     *           the search query
     *     @type int $answer_type
     *           The type of the answer.
     *     @type array<\Google\Cloud\Dialogflow\V2\SearchKnowledgeAnswer\AnswerSource>|\Google\Protobuf\Internal\RepeatedField $answer_sources
     *           All sources used to generate the answer.
     *     @type string $answer_record
     *           The name of the answer record.
     *           Format: `projects/<Project ID>/locations/<location ID>/answer
     *           Records/<Answer Record ID>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * The piece of text from the knowledge base documents that answers
     * the search query
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * The piece of text from the knowledge base documents that answers
     * the search query
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswer($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer = $var;

        return $this;
    }

    /**
     * The type of the answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerType answer_type = 2;</code>
     * @return int
     */
    public function getAnswerType()
    {
        return $this->answer_type;
    }

    /**
     * The type of the answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerType answer_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAnswerType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\SearchKnowledgeAnswer\AnswerType::class);
        $this->answer_type = $var;

        return $this;
    }

    /**
     * All sources used to generate the answer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerSource answer_sources = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnswerSources()
    {
        return $this->answer_sources;
    }

    /**
     * All sources used to generate the answer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerSource answer_sources = 3;</code>
     * @param array<\Google\Cloud\Dialogflow\V2\SearchKnowledgeAnswer\AnswerSource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnswerSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SearchKnowledgeAnswer\AnswerSource::class);
        $this->answer_sources = $arr;

        return $this;
    }

    /**
     * The name of the answer record.
     * Format: `projects/<Project ID>/locations/<location ID>/answer
     * Records/<Answer Record ID>`
     *
     * Generated from protobuf field <code>string answer_record = 5 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAnswerRecord()
    {
        return $this->answer_record;
    }

    /**
     * The name of the answer record.
     * Format: `projects/<Project ID>/locations/<location ID>/answer
     * Records/<Answer Record ID>`
     *
     * Generated from protobuf field <code>string answer_record = 5 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_record = $var;

        return $this;
    }

}

