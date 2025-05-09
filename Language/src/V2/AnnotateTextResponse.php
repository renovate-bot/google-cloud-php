<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v2/language_service.proto

namespace Google\Cloud\Language\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The text annotations response message.
 *
 * Generated from protobuf message <code>google.cloud.language.v2.AnnotateTextResponse</code>
 */
class AnnotateTextResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Sentences in the input document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.Sentence sentences = 1;</code>
     */
    private $sentences;
    /**
     * Entities, along with their semantic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_entities][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entities]
     * or
     * [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entity_sentiment].
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.Entity entities = 2;</code>
     */
    private $entities;
    /**
     * The overall sentiment for the document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *
     * Generated from protobuf field <code>.google.cloud.language.v2.Sentiment document_sentiment = 3;</code>
     */
    protected $document_sentiment = null;
    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][] field for more details.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     */
    protected $language_code = '';
    /**
     * Categories identified in the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.ClassificationCategory categories = 5;</code>
     */
    private $categories;
    /**
     * Harmful and sensitive categories identified in the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.ClassificationCategory moderation_categories = 6;</code>
     */
    private $moderation_categories;
    /**
     * Whether the language is officially supported by all requested features.
     * The API may still return a response when the language is not supported, but
     * it is on a best effort basis.
     *
     * Generated from protobuf field <code>bool language_supported = 7;</code>
     */
    protected $language_supported = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Language\V2\Sentence>|\Google\Protobuf\Internal\RepeatedField $sentences
     *           Sentences in the input document. Populated if the user enables
     *           [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *     @type array<\Google\Cloud\Language\V2\Entity>|\Google\Protobuf\Internal\RepeatedField $entities
     *           Entities, along with their semantic information, in the input document.
     *           Populated if the user enables
     *           [AnnotateTextRequest.Features.extract_entities][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entities]
     *           or
     *           [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entity_sentiment].
     *     @type \Google\Cloud\Language\V2\Sentiment $document_sentiment
     *           The overall sentiment for the document. Populated if the user enables
     *           [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *     @type string $language_code
     *           The language of the text, which will be the same as the language specified
     *           in the request or, if not specified, the automatically-detected language.
     *           See [Document.language][] field for more details.
     *     @type array<\Google\Cloud\Language\V2\ClassificationCategory>|\Google\Protobuf\Internal\RepeatedField $categories
     *           Categories identified in the input document.
     *     @type array<\Google\Cloud\Language\V2\ClassificationCategory>|\Google\Protobuf\Internal\RepeatedField $moderation_categories
     *           Harmful and sensitive categories identified in the input document.
     *     @type bool $language_supported
     *           Whether the language is officially supported by all requested features.
     *           The API may still return a response when the language is not supported, but
     *           it is on a best effort basis.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Sentences in the input document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.Sentence sentences = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSentences()
    {
        return $this->sentences;
    }

    /**
     * Sentences in the input document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.Sentence sentences = 1;</code>
     * @param array<\Google\Cloud\Language\V2\Sentence>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSentences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V2\Sentence::class);
        $this->sentences = $arr;

        return $this;
    }

    /**
     * Entities, along with their semantic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_entities][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entities]
     * or
     * [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entity_sentiment].
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.Entity entities = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Entities, along with their semantic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_entities][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entities]
     * or
     * [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_entity_sentiment].
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.Entity entities = 2;</code>
     * @param array<\Google\Cloud\Language\V2\Entity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V2\Entity::class);
        $this->entities = $arr;

        return $this;
    }

    /**
     * The overall sentiment for the document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *
     * Generated from protobuf field <code>.google.cloud.language.v2.Sentiment document_sentiment = 3;</code>
     * @return \Google\Cloud\Language\V2\Sentiment|null
     */
    public function getDocumentSentiment()
    {
        return $this->document_sentiment;
    }

    public function hasDocumentSentiment()
    {
        return isset($this->document_sentiment);
    }

    public function clearDocumentSentiment()
    {
        unset($this->document_sentiment);
    }

    /**
     * The overall sentiment for the document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v2.AnnotateTextRequest.Features.extract_document_sentiment].
     *
     * Generated from protobuf field <code>.google.cloud.language.v2.Sentiment document_sentiment = 3;</code>
     * @param \Google\Cloud\Language\V2\Sentiment $var
     * @return $this
     */
    public function setDocumentSentiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V2\Sentiment::class);
        $this->document_sentiment = $var;

        return $this;
    }

    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][] field for more details.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][] field for more details.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Categories identified in the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.ClassificationCategory categories = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Categories identified in the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.ClassificationCategory categories = 5;</code>
     * @param array<\Google\Cloud\Language\V2\ClassificationCategory>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V2\ClassificationCategory::class);
        $this->categories = $arr;

        return $this;
    }

    /**
     * Harmful and sensitive categories identified in the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.ClassificationCategory moderation_categories = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModerationCategories()
    {
        return $this->moderation_categories;
    }

    /**
     * Harmful and sensitive categories identified in the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v2.ClassificationCategory moderation_categories = 6;</code>
     * @param array<\Google\Cloud\Language\V2\ClassificationCategory>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModerationCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V2\ClassificationCategory::class);
        $this->moderation_categories = $arr;

        return $this;
    }

    /**
     * Whether the language is officially supported by all requested features.
     * The API may still return a response when the language is not supported, but
     * it is on a best effort basis.
     *
     * Generated from protobuf field <code>bool language_supported = 7;</code>
     * @return bool
     */
    public function getLanguageSupported()
    {
        return $this->language_supported;
    }

    /**
     * Whether the language is officially supported by all requested features.
     * The API may still return a response when the language is not supported, but
     * it is on a best effort basis.
     *
     * Generated from protobuf field <code>bool language_supported = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setLanguageSupported($var)
    {
        GPBUtil::checkBool($var);
        $this->language_supported = $var;

        return $this;
    }

}

