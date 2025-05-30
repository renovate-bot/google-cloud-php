<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/financialservices/v1/bigquery_destination.proto

namespace Google\Cloud\FinancialServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BigQueryDestination is a wrapper for BigQuery output information.
 *
 * Generated from protobuf message <code>google.cloud.financialservices.v1.BigQueryDestination</code>
 */
class BigQueryDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. BigQuery URI to a table, must be of the form
     * bq://projectId.bqDatasetId.tableId.
     * Note that the BigQuery dataset must already exist.
     * VPC-SC restrictions apply.
     *
     * Generated from protobuf field <code>string table_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $table_uri = '';
    /**
     * Required. Whether or not to overwrite the destination table. By default the
     * table won't be overwritten and an error will be returned if the table
     * exists and contains data.
     *
     * Generated from protobuf field <code>.google.cloud.financialservices.v1.BigQueryDestination.WriteDisposition write_disposition = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $write_disposition = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_uri
     *           Optional. BigQuery URI to a table, must be of the form
     *           bq://projectId.bqDatasetId.tableId.
     *           Note that the BigQuery dataset must already exist.
     *           VPC-SC restrictions apply.
     *     @type int $write_disposition
     *           Required. Whether or not to overwrite the destination table. By default the
     *           table won't be overwritten and an error will be returned if the table
     *           exists and contains data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Financialservices\V1\BigqueryDestination::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. BigQuery URI to a table, must be of the form
     * bq://projectId.bqDatasetId.tableId.
     * Note that the BigQuery dataset must already exist.
     * VPC-SC restrictions apply.
     *
     * Generated from protobuf field <code>string table_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTableUri()
    {
        return $this->table_uri;
    }

    /**
     * Optional. BigQuery URI to a table, must be of the form
     * bq://projectId.bqDatasetId.tableId.
     * Note that the BigQuery dataset must already exist.
     * VPC-SC restrictions apply.
     *
     * Generated from protobuf field <code>string table_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTableUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_uri = $var;

        return $this;
    }

    /**
     * Required. Whether or not to overwrite the destination table. By default the
     * table won't be overwritten and an error will be returned if the table
     * exists and contains data.
     *
     * Generated from protobuf field <code>.google.cloud.financialservices.v1.BigQueryDestination.WriteDisposition write_disposition = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getWriteDisposition()
    {
        return $this->write_disposition;
    }

    /**
     * Required. Whether or not to overwrite the destination table. By default the
     * table won't be overwritten and an error will be returned if the table
     * exists and contains data.
     *
     * Generated from protobuf field <code>.google.cloud.financialservices.v1.BigQueryDestination.WriteDisposition write_disposition = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setWriteDisposition($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\FinancialServices\V1\BigQueryDestination\WriteDisposition::class);
        $this->write_disposition = $var;

        return $this;
    }

}

