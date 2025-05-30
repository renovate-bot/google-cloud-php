<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateGlossary.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.CreateGlossaryRequest</code>
 */
class CreateGlossaryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project name.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The glossary to create.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.Glossary glossary = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $glossary = null;

    /**
     * @param string                              $parent   Required. The project name. Please see
     *                                                      {@see TranslationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Translate\V3\Glossary $glossary Required. The glossary to create.
     *
     * @return \Google\Cloud\Translate\V3\CreateGlossaryRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Translate\V3\Glossary $glossary): self
    {
        return (new self())
            ->setParent($parent)
            ->setGlossary($glossary);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project name.
     *     @type \Google\Cloud\Translate\V3\Glossary $glossary
     *           Required. The glossary to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project name.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project name.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The glossary to create.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.Glossary glossary = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Translate\V3\Glossary|null
     */
    public function getGlossary()
    {
        return $this->glossary;
    }

    public function hasGlossary()
    {
        return isset($this->glossary);
    }

    public function clearGlossary()
    {
        unset($this->glossary);
    }

    /**
     * Required. The glossary to create.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.Glossary glossary = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Translate\V3\Glossary $var
     * @return $this
     */
    public function setGlossary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\Glossary::class);
        $this->glossary = $var;

        return $this;
    }

}

