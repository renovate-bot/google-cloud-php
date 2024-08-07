<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/table_spec.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification for a group of BigQuery tables with the `[prefix]YYYYMMDD` name
 * pattern.
 * For more information, see [Introduction to partitioned tables]
 * (https://cloud.google.com/bigquery/docs/partitioned-tables#partitioning_versus_sharding).
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.BigQueryDateShardedSpec</code>
 */
class BigQueryDateShardedSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Data Catalog resource name of the dataset entry the
     * current table belongs to. For example:
     * `projects/{PROJECT_ID}/locations/{LOCATION}/entrygroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $dataset = '';
    /**
     * Output only. The table name prefix of the shards.
     * The name of any given shard is `[table_prefix]YYYYMMDD`.
     * For example, for the `MyTable20180101` shard, the
     * `table_prefix` is `MyTable`.
     *
     * Generated from protobuf field <code>string table_prefix = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $table_prefix = '';
    /**
     * Output only. Total number of shards.
     *
     * Generated from protobuf field <code>int64 shard_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $shard_count = 0;
    /**
     * Output only. BigQuery resource name of the latest shard.
     *
     * Generated from protobuf field <code>string latest_shard_resource = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $latest_shard_resource = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Output only. The Data Catalog resource name of the dataset entry the
     *           current table belongs to. For example:
     *           `projects/{PROJECT_ID}/locations/{LOCATION}/entrygroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`.
     *     @type string $table_prefix
     *           Output only. The table name prefix of the shards.
     *           The name of any given shard is `[table_prefix]YYYYMMDD`.
     *           For example, for the `MyTable20180101` shard, the
     *           `table_prefix` is `MyTable`.
     *     @type int|string $shard_count
     *           Output only. Total number of shards.
     *     @type string $latest_shard_resource
     *           Output only. BigQuery resource name of the latest shard.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\TableSpec::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The Data Catalog resource name of the dataset entry the
     * current table belongs to. For example:
     * `projects/{PROJECT_ID}/locations/{LOCATION}/entrygroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Output only. The Data Catalog resource name of the dataset entry the
     * current table belongs to. For example:
     * `projects/{PROJECT_ID}/locations/{LOCATION}/entrygroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Output only. The table name prefix of the shards.
     * The name of any given shard is `[table_prefix]YYYYMMDD`.
     * For example, for the `MyTable20180101` shard, the
     * `table_prefix` is `MyTable`.
     *
     * Generated from protobuf field <code>string table_prefix = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTablePrefix()
    {
        return $this->table_prefix;
    }

    /**
     * Output only. The table name prefix of the shards.
     * The name of any given shard is `[table_prefix]YYYYMMDD`.
     * For example, for the `MyTable20180101` shard, the
     * `table_prefix` is `MyTable`.
     *
     * Generated from protobuf field <code>string table_prefix = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTablePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_prefix = $var;

        return $this;
    }

    /**
     * Output only. Total number of shards.
     *
     * Generated from protobuf field <code>int64 shard_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getShardCount()
    {
        return $this->shard_count;
    }

    /**
     * Output only. Total number of shards.
     *
     * Generated from protobuf field <code>int64 shard_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setShardCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->shard_count = $var;

        return $this;
    }

    /**
     * Output only. BigQuery resource name of the latest shard.
     *
     * Generated from protobuf field <code>string latest_shard_resource = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLatestShardResource()
    {
        return $this->latest_shard_resource;
    }

    /**
     * Output only. BigQuery resource name of the latest shard.
     *
     * Generated from protobuf field <code>string latest_shard_resource = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLatestShardResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->latest_shard_resource = $var;

        return $this;
    }

}

