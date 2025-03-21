<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/adaptive_mt.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List AdaptiveMt sentences response.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ListAdaptiveMtSentencesResponse</code>
 */
class ListAdaptiveMtSentencesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The list of AdaptiveMtSentences.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtSentence adaptive_mt_sentences = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $adaptive_mt_sentences;
    /**
     * Optional.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Translate\V3\AdaptiveMtSentence>|\Google\Protobuf\Internal\RepeatedField $adaptive_mt_sentences
     *           Output only. The list of AdaptiveMtSentences.
     *     @type string $next_page_token
     *           Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AdaptiveMt::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The list of AdaptiveMtSentences.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtSentence adaptive_mt_sentences = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdaptiveMtSentences()
    {
        return $this->adaptive_mt_sentences;
    }

    /**
     * Output only. The list of AdaptiveMtSentences.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtSentence adaptive_mt_sentences = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Translate\V3\AdaptiveMtSentence>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdaptiveMtSentences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3\AdaptiveMtSentence::class);
        $this->adaptive_mt_sentences = $arr;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

