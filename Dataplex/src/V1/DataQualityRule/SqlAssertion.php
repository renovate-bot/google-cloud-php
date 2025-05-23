<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1\DataQualityRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A SQL statement that is evaluated to return rows that match an invalid
 * state. If any rows are are returned, this rule fails.
 * The SQL statement must use [GoogleSQL
 * syntax](https://cloud.google.com/bigquery/docs/reference/standard-sql/query-syntax),
 * and must not contain any semicolons.
 * You can use the data reference parameter `${data()}` to reference the
 * source table with all of its precondition filters applied. Examples of
 * precondition filters include row filters, incremental data filters, and
 * sampling. For more information, see [Data reference
 * parameter](https://cloud.google.com/dataplex/docs/auto-data-quality-overview#data-reference-parameter).
 * Example: `SELECT * FROM ${data()} WHERE price < 0`
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityRule.SqlAssertion</code>
 */
class SqlAssertion extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The SQL statement.
     *
     * Generated from protobuf field <code>string sql_statement = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $sql_statement = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql_statement
     *           Optional. The SQL statement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The SQL statement.
     *
     * Generated from protobuf field <code>string sql_statement = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSqlStatement()
    {
        return $this->sql_statement;
    }

    /**
     * Optional. The SQL statement.
     *
     * Generated from protobuf field <code>string sql_statement = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSqlStatement($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql_statement = $var;

        return $this;
    }

}


