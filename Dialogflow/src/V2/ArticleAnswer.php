<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents article answer.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ArticleAnswer</code>
 */
class ArticleAnswer extends \Google\Protobuf\Internal\Message
{
    /**
     * The article title.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * The article URI.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * Article snippets.
     *
     * Generated from protobuf field <code>repeated string snippets = 3;</code>
     */
    private $snippets;
    /**
     * Article match confidence.
     * The system's confidence score that this article is a good match for this
     * conversation, as a value from 0.0 (completely uncertain) to 1.0
     * (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     */
    protected $confidence = 0.0;
    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     */
    private $metadata;
    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     */
    protected $answer_record = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           The article title.
     *     @type string $uri
     *           The article URI.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $snippets
     *           Article snippets.
     *     @type float $confidence
     *           Article match confidence.
     *           The system's confidence score that this article is a good match for this
     *           conversation, as a value from 0.0 (completely uncertain) to 1.0
     *           (completely certain).
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           A map that contains metadata about the answer and the
     *           document from which it originates.
     *     @type string $answer_record
     *           The name of answer record, in the format of
     *           "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     *           ID>"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The article title.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The article title.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The article URI.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The article URI.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Article snippets.
     *
     * Generated from protobuf field <code>repeated string snippets = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnippets()
    {
        return $this->snippets;
    }

    /**
     * Article snippets.
     *
     * Generated from protobuf field <code>repeated string snippets = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnippets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->snippets = $arr;

        return $this;
    }

    /**
     * Article match confidence.
     * The system's confidence score that this article is a good match for this
     * conversation, as a value from 0.0 (completely uncertain) to 1.0
     * (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Article match confidence.
     * The system's confidence score that this article is a good match for this
     * conversation, as a value from 0.0 (completely uncertain) to 1.0
     * (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     * @return string
     */
    public function getAnswerRecord()
    {
        return $this->answer_record;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
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

