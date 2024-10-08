<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Custom information type provided by the user. Used to find domain-specific
 * sensitive information configurable to the data in question.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CustomInfoType</code>
 */
class CustomInfoType extends \Google\Protobuf\Internal\Message
{
    /**
     * CustomInfoType can either be a new infoType, or an extension of built-in
     * infoType, when the name matches one of existing infoTypes and that infoType
     * is specified in `InspectContent.info_types` field. Specifying the latter
     * adds findings to the one detected by the system. If built-in info type is
     * not specified in `InspectContent.info_types` list then the name is treated
     * as a custom info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     */
    protected $info_type = null;
    /**
     * Likelihood to return for this CustomInfoType. This base value can be
     * altered by a detection rule if the finding meets the criteria specified by
     * the rule. Defaults to `VERY_LIKELY` if not specified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 6;</code>
     */
    protected $likelihood = 0;
    /**
     * Set of detection rules to apply to all findings of this CustomInfoType.
     * Rules are applied in order that they are specified. Not supported for the
     * `surrogate_type` CustomInfoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CustomInfoType.DetectionRule detection_rules = 7;</code>
     */
    private $detection_rules;
    /**
     * If set to EXCLUSION_TYPE_EXCLUDE this infoType will not cause a finding
     * to be returned. It still can be used for rules matching.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.ExclusionType exclusion_type = 8;</code>
     */
    protected $exclusion_type = 0;
    /**
     * Sensitivity for this CustomInfoType. If this CustomInfoType extends an
     * existing InfoType, the sensitivity here will take precedence over that of
     * the original InfoType. If unset for a CustomInfoType, it will default to
     * HIGH.
     * This only applies to data profiling.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 9;</code>
     */
    protected $sensitivity_score = null;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\InfoType $info_type
     *           CustomInfoType can either be a new infoType, or an extension of built-in
     *           infoType, when the name matches one of existing infoTypes and that infoType
     *           is specified in `InspectContent.info_types` field. Specifying the latter
     *           adds findings to the one detected by the system. If built-in info type is
     *           not specified in `InspectContent.info_types` list then the name is treated
     *           as a custom info type.
     *     @type int $likelihood
     *           Likelihood to return for this CustomInfoType. This base value can be
     *           altered by a detection rule if the finding meets the criteria specified by
     *           the rule. Defaults to `VERY_LIKELY` if not specified.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary $dictionary
     *           A list of phrases to detect as a CustomInfoType.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\Regex $regex
     *           Regular expression based CustomInfoType.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\SurrogateType $surrogate_type
     *           Message for detecting output from deidentification transformations that
     *           support reversing.
     *     @type \Google\Cloud\Dlp\V2\StoredType $stored_type
     *           Load an existing `StoredInfoType` resource for use in
     *           `InspectDataSource`. Not currently supported in `InspectContent`.
     *     @type array<\Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule>|\Google\Protobuf\Internal\RepeatedField $detection_rules
     *           Set of detection rules to apply to all findings of this CustomInfoType.
     *           Rules are applied in order that they are specified. Not supported for the
     *           `surrogate_type` CustomInfoType.
     *     @type int $exclusion_type
     *           If set to EXCLUSION_TYPE_EXCLUDE this infoType will not cause a finding
     *           to be returned. It still can be used for rules matching.
     *     @type \Google\Cloud\Dlp\V2\SensitivityScore $sensitivity_score
     *           Sensitivity for this CustomInfoType. If this CustomInfoType extends an
     *           existing InfoType, the sensitivity here will take precedence over that of
     *           the original InfoType. If unset for a CustomInfoType, it will default to
     *           HIGH.
     *           This only applies to data profiling.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * CustomInfoType can either be a new infoType, or an extension of built-in
     * infoType, when the name matches one of existing infoTypes and that infoType
     * is specified in `InspectContent.info_types` field. Specifying the latter
     * adds findings to the one detected by the system. If built-in info type is
     * not specified in `InspectContent.info_types` list then the name is treated
     * as a custom info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     * @return \Google\Cloud\Dlp\V2\InfoType|null
     */
    public function getInfoType()
    {
        return $this->info_type;
    }

    public function hasInfoType()
    {
        return isset($this->info_type);
    }

    public function clearInfoType()
    {
        unset($this->info_type);
    }

    /**
     * CustomInfoType can either be a new infoType, or an extension of built-in
     * infoType, when the name matches one of existing infoTypes and that infoType
     * is specified in `InspectContent.info_types` field. Specifying the latter
     * adds findings to the one detected by the system. If built-in info type is
     * not specified in `InspectContent.info_types` list then the name is treated
     * as a custom info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     * @param \Google\Cloud\Dlp\V2\InfoType $var
     * @return $this
     */
    public function setInfoType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->info_type = $var;

        return $this;
    }

    /**
     * Likelihood to return for this CustomInfoType. This base value can be
     * altered by a detection rule if the finding meets the criteria specified by
     * the rule. Defaults to `VERY_LIKELY` if not specified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 6;</code>
     * @return int
     */
    public function getLikelihood()
    {
        return $this->likelihood;
    }

    /**
     * Likelihood to return for this CustomInfoType. This base value can be
     * altered by a detection rule if the finding meets the criteria specified by
     * the rule. Defaults to `VERY_LIKELY` if not specified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\Likelihood::class);
        $this->likelihood = $var;

        return $this;
    }

    /**
     * A list of phrases to detect as a CustomInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 2;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary|null
     */
    public function getDictionary()
    {
        return $this->readOneof(2);
    }

    public function hasDictionary()
    {
        return $this->hasOneof(2);
    }

    /**
     * A list of phrases to detect as a CustomInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 2;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary $var
     * @return $this
     */
    public function setDictionary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Regular expression based CustomInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 3;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\Regex|null
     */
    public function getRegex()
    {
        return $this->readOneof(3);
    }

    public function hasRegex()
    {
        return $this->hasOneof(3);
    }

    /**
     * Regular expression based CustomInfoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 3;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\Regex $var
     * @return $this
     */
    public function setRegex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\Regex::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Message for detecting output from deidentification transformations that
     * support reversing.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.SurrogateType surrogate_type = 4;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\SurrogateType|null
     */
    public function getSurrogateType()
    {
        return $this->readOneof(4);
    }

    public function hasSurrogateType()
    {
        return $this->hasOneof(4);
    }

    /**
     * Message for detecting output from deidentification transformations that
     * support reversing.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.SurrogateType surrogate_type = 4;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\SurrogateType $var
     * @return $this
     */
    public function setSurrogateType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\SurrogateType::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Load an existing `StoredInfoType` resource for use in
     * `InspectDataSource`. Not currently supported in `InspectContent`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredType stored_type = 5;</code>
     * @return \Google\Cloud\Dlp\V2\StoredType|null
     */
    public function getStoredType()
    {
        return $this->readOneof(5);
    }

    public function hasStoredType()
    {
        return $this->hasOneof(5);
    }

    /**
     * Load an existing `StoredInfoType` resource for use in
     * `InspectDataSource`. Not currently supported in `InspectContent`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredType stored_type = 5;</code>
     * @param \Google\Cloud\Dlp\V2\StoredType $var
     * @return $this
     */
    public function setStoredType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\StoredType::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Set of detection rules to apply to all findings of this CustomInfoType.
     * Rules are applied in order that they are specified. Not supported for the
     * `surrogate_type` CustomInfoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CustomInfoType.DetectionRule detection_rules = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectionRules()
    {
        return $this->detection_rules;
    }

    /**
     * Set of detection rules to apply to all findings of this CustomInfoType.
     * Rules are applied in order that they are specified. Not supported for the
     * `surrogate_type` CustomInfoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CustomInfoType.DetectionRule detection_rules = 7;</code>
     * @param array<\Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectionRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule::class);
        $this->detection_rules = $arr;

        return $this;
    }

    /**
     * If set to EXCLUSION_TYPE_EXCLUDE this infoType will not cause a finding
     * to be returned. It still can be used for rules matching.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.ExclusionType exclusion_type = 8;</code>
     * @return int
     */
    public function getExclusionType()
    {
        return $this->exclusion_type;
    }

    /**
     * If set to EXCLUSION_TYPE_EXCLUDE this infoType will not cause a finding
     * to be returned. It still can be used for rules matching.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.ExclusionType exclusion_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setExclusionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\CustomInfoType\ExclusionType::class);
        $this->exclusion_type = $var;

        return $this;
    }

    /**
     * Sensitivity for this CustomInfoType. If this CustomInfoType extends an
     * existing InfoType, the sensitivity here will take precedence over that of
     * the original InfoType. If unset for a CustomInfoType, it will default to
     * HIGH.
     * This only applies to data profiling.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 9;</code>
     * @return \Google\Cloud\Dlp\V2\SensitivityScore|null
     */
    public function getSensitivityScore()
    {
        return $this->sensitivity_score;
    }

    public function hasSensitivityScore()
    {
        return isset($this->sensitivity_score);
    }

    public function clearSensitivityScore()
    {
        unset($this->sensitivity_score);
    }

    /**
     * Sensitivity for this CustomInfoType. If this CustomInfoType extends an
     * existing InfoType, the sensitivity here will take precedence over that of
     * the original InfoType. If unset for a CustomInfoType, it will default to
     * HIGH.
     * This only applies to data profiling.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 9;</code>
     * @param \Google\Cloud\Dlp\V2\SensitivityScore $var
     * @return $this
     */
    public function setSensitivityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\SensitivityScore::class);
        $this->sensitivity_score = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

