<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_group.proto

namespace Google\Cloud\AIPlatform\V1\FeatureGroup;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input source type for BigQuery Tables and Views.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureGroup.BigQuery</code>
 */
class BigQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. The BigQuery source URI that points to either a
     * BigQuery Table or View.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQuerySource big_query_source = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $big_query_source = null;
    /**
     * Optional. Columns to construct entity_id / row keys.
     * If not provided defaults to `entity_id`.
     *
     * Generated from protobuf field <code>repeated string entity_id_columns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $entity_id_columns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\BigQuerySource $big_query_source
     *           Required. Immutable. The BigQuery source URI that points to either a
     *           BigQuery Table or View.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $entity_id_columns
     *           Optional. Columns to construct entity_id / row keys.
     *           If not provided defaults to `entity_id`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. The BigQuery source URI that points to either a
     * BigQuery Table or View.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQuerySource big_query_source = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\BigQuerySource|null
     */
    public function getBigQuerySource()
    {
        return $this->big_query_source;
    }

    public function hasBigQuerySource()
    {
        return isset($this->big_query_source);
    }

    public function clearBigQuerySource()
    {
        unset($this->big_query_source);
    }

    /**
     * Required. Immutable. The BigQuery source URI that points to either a
     * BigQuery Table or View.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQuerySource big_query_source = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\BigQuerySource $var
     * @return $this
     */
    public function setBigQuerySource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\BigQuerySource::class);
        $this->big_query_source = $var;

        return $this;
    }

    /**
     * Optional. Columns to construct entity_id / row keys.
     * If not provided defaults to `entity_id`.
     *
     * Generated from protobuf field <code>repeated string entity_id_columns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityIdColumns()
    {
        return $this->entity_id_columns;
    }

    /**
     * Optional. Columns to construct entity_id / row keys.
     * If not provided defaults to `entity_id`.
     *
     * Generated from protobuf field <code>repeated string entity_id_columns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityIdColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->entity_id_columns = $arr;

        return $this;
    }

}


