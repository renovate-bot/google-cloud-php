<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3\Glossary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used with unidirectional glossaries.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.Glossary.LanguageCodePair</code>
 */
class LanguageCodePair extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ISO-639 language code of the input text, for example,
     * "en-US". Expected to be an exact match for GlossaryTerm.language_code.
     *
     * Generated from protobuf field <code>string source_language_code = 1;</code>
     */
    protected $source_language_code = '';
    /**
     * Required. The ISO-639 language code for translation output, for example,
     * "zh-CN". Expected to be an exact match for GlossaryTerm.language_code.
     *
     * Generated from protobuf field <code>string target_language_code = 2;</code>
     */
    protected $target_language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_language_code
     *           Required. The ISO-639 language code of the input text, for example,
     *           "en-US". Expected to be an exact match for GlossaryTerm.language_code.
     *     @type string $target_language_code
     *           Required. The ISO-639 language code for translation output, for example,
     *           "zh-CN". Expected to be an exact match for GlossaryTerm.language_code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ISO-639 language code of the input text, for example,
     * "en-US". Expected to be an exact match for GlossaryTerm.language_code.
     *
     * Generated from protobuf field <code>string source_language_code = 1;</code>
     * @return string
     */
    public function getSourceLanguageCode()
    {
        return $this->source_language_code;
    }

    /**
     * Required. The ISO-639 language code of the input text, for example,
     * "en-US". Expected to be an exact match for GlossaryTerm.language_code.
     *
     * Generated from protobuf field <code>string source_language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_language_code = $var;

        return $this;
    }

    /**
     * Required. The ISO-639 language code for translation output, for example,
     * "zh-CN". Expected to be an exact match for GlossaryTerm.language_code.
     *
     * Generated from protobuf field <code>string target_language_code = 2;</code>
     * @return string
     */
    public function getTargetLanguageCode()
    {
        return $this->target_language_code;
    }

    /**
     * Required. The ISO-639 language code for translation output, for example,
     * "zh-CN". Expected to be an exact match for GlossaryTerm.language_code.
     *
     * Generated from protobuf field <code>string target_language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_language_code = $var;

        return $this;
    }

}


