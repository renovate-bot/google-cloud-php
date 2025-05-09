<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PhraseSet for biasing in speech recognition. A PhraseSet is used to provide
 * "hints" to the speech recognizer to favor specific words and phrases in the
 * results.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.PhraseSet</code>
 */
class PhraseSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. The resource name of the PhraseSet.
     * Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. System-assigned unique identifier for the PhraseSet.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * A list of word and phrases.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.PhraseSet.Phrase phrases = 3;</code>
     */
    private $phrases;
    /**
     * Hint Boost. Positive value will increase the probability that a specific
     * phrase will be recognized over other similar sounding phrases. The higher
     * the boost, the higher the chance of false positive recognition as well.
     * Valid `boost` values are between 0 (exclusive) and 20. We recommend using a
     * binary search approach to finding the optimal value for your use case as
     * well as adding phrases both with and without boost to your requests.
     *
     * Generated from protobuf field <code>float boost = 4;</code>
     */
    protected $boost = 0.0;
    /**
     * User-settable, human-readable name for the PhraseSet. Must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     */
    protected $display_name = '';
    /**
     * Output only. The PhraseSet lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The most recent time this resource was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. The time at which this resource was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_time = null;
    /**
     * Output only. The time at which this resource will be purged.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $expire_time = null;
    /**
     * Allows users to store small amounts of arbitrary data.
     * Both the key and the value must be 63 characters or less each.
     * At most 100 annotations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 10;</code>
     */
    private $annotations;
    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields. This may be sent on update, undelete, and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $etag = '';
    /**
     * Output only. Whether or not this PhraseSet is in the process of being
     * updated.
     *
     * Generated from protobuf field <code>bool reconciling = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $reconciling = false;
    /**
     * Output only. The [KMS key
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     * the PhraseSet is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $kms_key_name = '';
    /**
     * Output only. The [KMS key version
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     * with which the PhraseSet is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $kms_key_version_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. The resource name of the PhraseSet.
     *           Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *     @type string $uid
     *           Output only. System-assigned unique identifier for the PhraseSet.
     *     @type array<\Google\Cloud\Speech\V2\PhraseSet\Phrase>|\Google\Protobuf\Internal\RepeatedField $phrases
     *           A list of word and phrases.
     *     @type float $boost
     *           Hint Boost. Positive value will increase the probability that a specific
     *           phrase will be recognized over other similar sounding phrases. The higher
     *           the boost, the higher the chance of false positive recognition as well.
     *           Valid `boost` values are between 0 (exclusive) and 20. We recommend using a
     *           binary search approach to finding the optimal value for your use case as
     *           well as adding phrases both with and without boost to your requests.
     *     @type string $display_name
     *           User-settable, human-readable name for the PhraseSet. Must be 63
     *           characters or less.
     *     @type int $state
     *           Output only. The PhraseSet lifecycle state.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The most recent time this resource was modified.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. The time at which this resource was requested for deletion.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. The time at which this resource will be purged.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Allows users to store small amounts of arbitrary data.
     *           Both the key and the value must be 63 characters or less each.
     *           At most 100 annotations.
     *     @type string $etag
     *           Output only. This checksum is computed by the server based on the value of
     *           other fields. This may be sent on update, undelete, and delete requests to
     *           ensure the client has an up-to-date value before proceeding.
     *     @type bool $reconciling
     *           Output only. Whether or not this PhraseSet is in the process of being
     *           updated.
     *     @type string $kms_key_name
     *           Output only. The [KMS key
     *           name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     *           the PhraseSet is encrypted. The expected format is
     *           `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *     @type string $kms_key_version_name
     *           Output only. The [KMS key version
     *           name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     *           with which the PhraseSet is encrypted. The expected format is
     *           `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. The resource name of the PhraseSet.
     * Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. The resource name of the PhraseSet.
     * Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. System-assigned unique identifier for the PhraseSet.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System-assigned unique identifier for the PhraseSet.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * A list of word and phrases.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.PhraseSet.Phrase phrases = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhrases()
    {
        return $this->phrases;
    }

    /**
     * A list of word and phrases.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.PhraseSet.Phrase phrases = 3;</code>
     * @param array<\Google\Cloud\Speech\V2\PhraseSet\Phrase>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhrases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V2\PhraseSet\Phrase::class);
        $this->phrases = $arr;

        return $this;
    }

    /**
     * Hint Boost. Positive value will increase the probability that a specific
     * phrase will be recognized over other similar sounding phrases. The higher
     * the boost, the higher the chance of false positive recognition as well.
     * Valid `boost` values are between 0 (exclusive) and 20. We recommend using a
     * binary search approach to finding the optimal value for your use case as
     * well as adding phrases both with and without boost to your requests.
     *
     * Generated from protobuf field <code>float boost = 4;</code>
     * @return float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * Hint Boost. Positive value will increase the probability that a specific
     * phrase will be recognized over other similar sounding phrases. The higher
     * the boost, the higher the chance of false positive recognition as well.
     * Valid `boost` values are between 0 (exclusive) and 20. We recommend using a
     * binary search approach to finding the optimal value for your use case as
     * well as adding phrases both with and without boost to your requests.
     *
     * Generated from protobuf field <code>float boost = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * User-settable, human-readable name for the PhraseSet. Must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User-settable, human-readable name for the PhraseSet. Must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The PhraseSet lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The PhraseSet lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Speech\V2\PhraseSet\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The most recent time this resource was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The most recent time this resource was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this resource was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. The time at which this resource was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this resource will be purged.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. The time at which this resource will be purged.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Allows users to store small amounts of arbitrary data.
     * Both the key and the value must be 63 characters or less each.
     * At most 100 annotations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Allows users to store small amounts of arbitrary data.
     * Both the key and the value must be 63 characters or less each.
     * At most 100 annotations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields. This may be sent on update, undelete, and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields. This may be sent on update, undelete, and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. Whether or not this PhraseSet is in the process of being
     * updated.
     *
     * Generated from protobuf field <code>bool reconciling = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. Whether or not this PhraseSet is in the process of being
     * updated.
     *
     * Generated from protobuf field <code>bool reconciling = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * Output only. The [KMS key
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     * the PhraseSet is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Output only. The [KMS key
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     * the PhraseSet is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Output only. The [KMS key version
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     * with which the PhraseSet is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyVersionName()
    {
        return $this->kms_key_version_name;
    }

    /**
     * Output only. The [KMS key version
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     * with which the PhraseSet is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyVersionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_version_name = $var;

        return $this;
    }

}

