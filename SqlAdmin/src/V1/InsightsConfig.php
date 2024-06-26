<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Insights configuration. This specifies when Cloud SQL Insights feature is
 * enabled and optional configuration.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.InsightsConfig</code>
 */
class InsightsConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether Query Insights feature is enabled.
     *
     * Generated from protobuf field <code>bool query_insights_enabled = 1;</code>
     */
    protected $query_insights_enabled = false;
    /**
     * Whether Query Insights will record client address when enabled.
     *
     * Generated from protobuf field <code>bool record_client_address = 2;</code>
     */
    protected $record_client_address = false;
    /**
     * Whether Query Insights will record application tags from query when
     * enabled.
     *
     * Generated from protobuf field <code>bool record_application_tags = 3;</code>
     */
    protected $record_application_tags = false;
    /**
     * Maximum query length stored in bytes. Default value: 1024 bytes.
     * Range: 256-4500 bytes. Query length more than this field value will be
     * truncated to this value. When unset, query length will be the default
     * value. Changing query length will restart the database.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_string_length = 4;</code>
     */
    protected $query_string_length = null;
    /**
     * Number of query execution plans captured by Insights per minute
     * for all queries combined. Default is 5.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_plans_per_minute = 5;</code>
     */
    protected $query_plans_per_minute = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $query_insights_enabled
     *           Whether Query Insights feature is enabled.
     *     @type bool $record_client_address
     *           Whether Query Insights will record client address when enabled.
     *     @type bool $record_application_tags
     *           Whether Query Insights will record application tags from query when
     *           enabled.
     *     @type \Google\Protobuf\Int32Value $query_string_length
     *           Maximum query length stored in bytes. Default value: 1024 bytes.
     *           Range: 256-4500 bytes. Query length more than this field value will be
     *           truncated to this value. When unset, query length will be the default
     *           value. Changing query length will restart the database.
     *     @type \Google\Protobuf\Int32Value $query_plans_per_minute
     *           Number of query execution plans captured by Insights per minute
     *           for all queries combined. Default is 5.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether Query Insights feature is enabled.
     *
     * Generated from protobuf field <code>bool query_insights_enabled = 1;</code>
     * @return bool
     */
    public function getQueryInsightsEnabled()
    {
        return $this->query_insights_enabled;
    }

    /**
     * Whether Query Insights feature is enabled.
     *
     * Generated from protobuf field <code>bool query_insights_enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setQueryInsightsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->query_insights_enabled = $var;

        return $this;
    }

    /**
     * Whether Query Insights will record client address when enabled.
     *
     * Generated from protobuf field <code>bool record_client_address = 2;</code>
     * @return bool
     */
    public function getRecordClientAddress()
    {
        return $this->record_client_address;
    }

    /**
     * Whether Query Insights will record client address when enabled.
     *
     * Generated from protobuf field <code>bool record_client_address = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecordClientAddress($var)
    {
        GPBUtil::checkBool($var);
        $this->record_client_address = $var;

        return $this;
    }

    /**
     * Whether Query Insights will record application tags from query when
     * enabled.
     *
     * Generated from protobuf field <code>bool record_application_tags = 3;</code>
     * @return bool
     */
    public function getRecordApplicationTags()
    {
        return $this->record_application_tags;
    }

    /**
     * Whether Query Insights will record application tags from query when
     * enabled.
     *
     * Generated from protobuf field <code>bool record_application_tags = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecordApplicationTags($var)
    {
        GPBUtil::checkBool($var);
        $this->record_application_tags = $var;

        return $this;
    }

    /**
     * Maximum query length stored in bytes. Default value: 1024 bytes.
     * Range: 256-4500 bytes. Query length more than this field value will be
     * truncated to this value. When unset, query length will be the default
     * value. Changing query length will restart the database.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_string_length = 4;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getQueryStringLength()
    {
        return $this->query_string_length;
    }

    public function hasQueryStringLength()
    {
        return isset($this->query_string_length);
    }

    public function clearQueryStringLength()
    {
        unset($this->query_string_length);
    }

    /**
     * Returns the unboxed value from <code>getQueryStringLength()</code>

     * Maximum query length stored in bytes. Default value: 1024 bytes.
     * Range: 256-4500 bytes. Query length more than this field value will be
     * truncated to this value. When unset, query length will be the default
     * value. Changing query length will restart the database.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_string_length = 4;</code>
     * @return int|null
     */
    public function getQueryStringLengthUnwrapped()
    {
        return $this->readWrapperValue("query_string_length");
    }

    /**
     * Maximum query length stored in bytes. Default value: 1024 bytes.
     * Range: 256-4500 bytes. Query length more than this field value will be
     * truncated to this value. When unset, query length will be the default
     * value. Changing query length will restart the database.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_string_length = 4;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setQueryStringLength($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->query_string_length = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Maximum query length stored in bytes. Default value: 1024 bytes.
     * Range: 256-4500 bytes. Query length more than this field value will be
     * truncated to this value. When unset, query length will be the default
     * value. Changing query length will restart the database.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_string_length = 4;</code>
     * @param int|null $var
     * @return $this
     */
    public function setQueryStringLengthUnwrapped($var)
    {
        $this->writeWrapperValue("query_string_length", $var);
        return $this;}

    /**
     * Number of query execution plans captured by Insights per minute
     * for all queries combined. Default is 5.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_plans_per_minute = 5;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getQueryPlansPerMinute()
    {
        return $this->query_plans_per_minute;
    }

    public function hasQueryPlansPerMinute()
    {
        return isset($this->query_plans_per_minute);
    }

    public function clearQueryPlansPerMinute()
    {
        unset($this->query_plans_per_minute);
    }

    /**
     * Returns the unboxed value from <code>getQueryPlansPerMinute()</code>

     * Number of query execution plans captured by Insights per minute
     * for all queries combined. Default is 5.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_plans_per_minute = 5;</code>
     * @return int|null
     */
    public function getQueryPlansPerMinuteUnwrapped()
    {
        return $this->readWrapperValue("query_plans_per_minute");
    }

    /**
     * Number of query execution plans captured by Insights per minute
     * for all queries combined. Default is 5.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_plans_per_minute = 5;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setQueryPlansPerMinute($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->query_plans_per_minute = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Number of query execution plans captured by Insights per minute
     * for all queries combined. Default is 5.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value query_plans_per_minute = 5;</code>
     * @param int|null $var
     * @return $this
     */
    public function setQueryPlansPerMinuteUnwrapped($var)
    {
        $this->writeWrapperValue("query_plans_per_minute", $var);
        return $this;}

}

