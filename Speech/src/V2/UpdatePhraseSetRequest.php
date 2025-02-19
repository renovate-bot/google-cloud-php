<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the
 * [UpdatePhraseSet][google.cloud.speech.v2.Speech.UpdatePhraseSet] method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.UpdatePhraseSetRequest</code>
 */
class UpdatePhraseSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The PhraseSet to update.
     * The PhraseSet's `name` field is used to identify the PhraseSet to update.
     * Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet phrase_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $phrase_set = null;
    /**
     * The list of fields to update. If empty, all non-default valued fields are
     * considered for update. Use `*` to update the entire PhraseSet resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;
    /**
     * If set, validate the request and preview the updated PhraseSet, but do not
     * actually update it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    protected $validate_only = false;

    /**
     * @param \Google\Cloud\Speech\V2\PhraseSet $phraseSet  Required. The PhraseSet to update.
     *
     *                                                      The PhraseSet's `name` field is used to identify the PhraseSet to update.
     *                                                      Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     * @param \Google\Protobuf\FieldMask        $updateMask The list of fields to update. If empty, all non-default valued fields are
     *                                                      considered for update. Use `*` to update the entire PhraseSet resource.
     *
     * @return \Google\Cloud\Speech\V2\UpdatePhraseSetRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Speech\V2\PhraseSet $phraseSet, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setPhraseSet($phraseSet)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V2\PhraseSet $phrase_set
     *           Required. The PhraseSet to update.
     *           The PhraseSet's `name` field is used to identify the PhraseSet to update.
     *           Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to update. If empty, all non-default valued fields are
     *           considered for update. Use `*` to update the entire PhraseSet resource.
     *     @type bool $validate_only
     *           If set, validate the request and preview the updated PhraseSet, but do not
     *           actually update it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The PhraseSet to update.
     * The PhraseSet's `name` field is used to identify the PhraseSet to update.
     * Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet phrase_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Speech\V2\PhraseSet|null
     */
    public function getPhraseSet()
    {
        return $this->phrase_set;
    }

    public function hasPhraseSet()
    {
        return isset($this->phrase_set);
    }

    public function clearPhraseSet()
    {
        unset($this->phrase_set);
    }

    /**
     * Required. The PhraseSet to update.
     * The PhraseSet's `name` field is used to identify the PhraseSet to update.
     * Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet phrase_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Speech\V2\PhraseSet $var
     * @return $this
     */
    public function setPhraseSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\PhraseSet::class);
        $this->phrase_set = $var;

        return $this;
    }

    /**
     * The list of fields to update. If empty, all non-default valued fields are
     * considered for update. Use `*` to update the entire PhraseSet resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * The list of fields to update. If empty, all non-default valued fields are
     * considered for update. Use `*` to update the entire PhraseSet resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If set, validate the request and preview the updated PhraseSet, but do not
     * actually update it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, validate the request and preview the updated PhraseSet, but do not
     * actually update it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

