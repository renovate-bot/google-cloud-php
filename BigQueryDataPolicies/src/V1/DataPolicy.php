<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the label-policy binding.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datapolicies.v1.DataPolicy</code>
 */
class DataPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this data policy, in the format of
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Type of data policy.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataPolicy.DataPolicyType data_policy_type = 2;</code>
     */
    protected $data_policy_type = 0;
    /**
     * User-assigned (human readable) ID of the data policy that needs to be
     * unique within a project. Used as {data_policy_id} in part of the resource
     * name.
     *
     * Generated from protobuf field <code>string data_policy_id = 3;</code>
     */
    protected $data_policy_id = '';
    protected $matching_label;
    protected $policy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $policy_tag
     *           Policy tag resource name, in the format of
     *           `projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}/policyTags/{policyTag_id}`.
     *     @type \Google\Cloud\BigQuery\DataPolicies\V1\DataMaskingPolicy $data_masking_policy
     *           The data masking policy that specifies the data masking rule to use.
     *     @type string $name
     *           Output only. Resource name of this data policy, in the format of
     *           `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *     @type int $data_policy_type
     *           Type of data policy.
     *     @type string $data_policy_id
     *           User-assigned (human readable) ID of the data policy that needs to be
     *           unique within a project. Used as {data_policy_id} in part of the resource
     *           name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datapolicies\V1\Datapolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Policy tag resource name, in the format of
     * `projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}/policyTags/{policyTag_id}`.
     *
     * Generated from protobuf field <code>string policy_tag = 4;</code>
     * @return string
     */
    public function getPolicyTag()
    {
        return $this->readOneof(4);
    }

    public function hasPolicyTag()
    {
        return $this->hasOneof(4);
    }

    /**
     * Policy tag resource name, in the format of
     * `projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}/policyTags/{policyTag_id}`.
     *
     * Generated from protobuf field <code>string policy_tag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPolicyTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The data masking policy that specifies the data masking rule to use.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataMaskingPolicy data_masking_policy = 5;</code>
     * @return \Google\Cloud\BigQuery\DataPolicies\V1\DataMaskingPolicy|null
     */
    public function getDataMaskingPolicy()
    {
        return $this->readOneof(5);
    }

    public function hasDataMaskingPolicy()
    {
        return $this->hasOneof(5);
    }

    /**
     * The data masking policy that specifies the data masking rule to use.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataMaskingPolicy data_masking_policy = 5;</code>
     * @param \Google\Cloud\BigQuery\DataPolicies\V1\DataMaskingPolicy $var
     * @return $this
     */
    public function setDataMaskingPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataPolicies\V1\DataMaskingPolicy::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Output only. Resource name of this data policy, in the format of
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this data policy, in the format of
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Type of data policy.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataPolicy.DataPolicyType data_policy_type = 2;</code>
     * @return int
     */
    public function getDataPolicyType()
    {
        return $this->data_policy_type;
    }

    /**
     * Type of data policy.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1.DataPolicy.DataPolicyType data_policy_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDataPolicyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\DataPolicies\V1\DataPolicy\DataPolicyType::class);
        $this->data_policy_type = $var;

        return $this;
    }

    /**
     * User-assigned (human readable) ID of the data policy that needs to be
     * unique within a project. Used as {data_policy_id} in part of the resource
     * name.
     *
     * Generated from protobuf field <code>string data_policy_id = 3;</code>
     * @return string
     */
    public function getDataPolicyId()
    {
        return $this->data_policy_id;
    }

    /**
     * User-assigned (human readable) ID of the data policy that needs to be
     * unique within a project. Used as {data_policy_id} in part of the resource
     * name.
     *
     * Generated from protobuf field <code>string data_policy_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDataPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_policy_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMatchingLabel()
    {
        return $this->whichOneof("matching_label");
    }

    /**
     * @return string
     */
    public function getPolicy()
    {
        return $this->whichOneof("policy");
    }

}

