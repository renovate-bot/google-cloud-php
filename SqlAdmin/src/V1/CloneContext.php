<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance clone context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.CloneContext</code>
 */
class CloneContext extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#cloneContext`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    protected $kind = '';
    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>int64 pitr_timestamp_ms = 2;</code>
     */
    protected $pitr_timestamp_ms = 0;
    /**
     * Name of the Cloud SQL instance to be created as a clone.
     *
     * Generated from protobuf field <code>string destination_instance_name = 3;</code>
     */
    protected $destination_instance_name = '';
    /**
     * Binary log coordinates, if specified, identify the position up to which the
     * source instance is cloned. If not specified, the source instance is
     * cloned up to the most recent binary log coordinates.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BinLogCoordinates bin_log_coordinates = 4;</code>
     */
    protected $bin_log_coordinates = null;
    /**
     * Timestamp, if specified, identifies the time to which the source instance
     * is cloned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 5;</code>
     */
    protected $point_in_time = null;
    /**
     * The name of the allocated ip range for the private ip Cloud SQL instance.
     * For example: "google-managed-services-default". If set, the cloned instance
     * ip will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * [a-z]([-a-z0-9]*[a-z0-9])?.
     * Reserved for future use.
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     */
    protected $allocated_ip_range = '';
    /**
     * (SQL Server only) Clone only the specified databases from the source
     * instance. Clone all databases if empty.
     *
     * Generated from protobuf field <code>repeated string database_names = 9;</code>
     */
    private $database_names;
    /**
     * Optional. Copy clone and point-in-time recovery clone of an instance to the
     * specified zone. If no zone is specified, clone to the same primary zone as
     * the source instance. This field applies to all DB types.
     *
     * Generated from protobuf field <code>optional string preferred_zone = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $preferred_zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#cloneContext`.
     *     @type int|string $pitr_timestamp_ms
     *           Reserved for future use.
     *     @type string $destination_instance_name
     *           Name of the Cloud SQL instance to be created as a clone.
     *     @type \Google\Cloud\Sql\V1\BinLogCoordinates $bin_log_coordinates
     *           Binary log coordinates, if specified, identify the position up to which the
     *           source instance is cloned. If not specified, the source instance is
     *           cloned up to the most recent binary log coordinates.
     *     @type \Google\Protobuf\Timestamp $point_in_time
     *           Timestamp, if specified, identifies the time to which the source instance
     *           is cloned.
     *     @type string $allocated_ip_range
     *           The name of the allocated ip range for the private ip Cloud SQL instance.
     *           For example: "google-managed-services-default". If set, the cloned instance
     *           ip will be created in the allocated range. The range name must comply with
     *           [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     *           must be 1-63 characters long and match the regular expression
     *           [a-z]([-a-z0-9]*[a-z0-9])?.
     *           Reserved for future use.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $database_names
     *           (SQL Server only) Clone only the specified databases from the source
     *           instance. Clone all databases if empty.
     *     @type string $preferred_zone
     *           Optional. Copy clone and point-in-time recovery clone of an instance to the
     *           specified zone. If no zone is specified, clone to the same primary zone as
     *           the source instance. This field applies to all DB types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#cloneContext`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#cloneContext`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>int64 pitr_timestamp_ms = 2;</code>
     * @return int|string
     */
    public function getPitrTimestampMs()
    {
        return $this->pitr_timestamp_ms;
    }

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>int64 pitr_timestamp_ms = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPitrTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->pitr_timestamp_ms = $var;

        return $this;
    }

    /**
     * Name of the Cloud SQL instance to be created as a clone.
     *
     * Generated from protobuf field <code>string destination_instance_name = 3;</code>
     * @return string
     */
    public function getDestinationInstanceName()
    {
        return $this->destination_instance_name;
    }

    /**
     * Name of the Cloud SQL instance to be created as a clone.
     *
     * Generated from protobuf field <code>string destination_instance_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_instance_name = $var;

        return $this;
    }

    /**
     * Binary log coordinates, if specified, identify the position up to which the
     * source instance is cloned. If not specified, the source instance is
     * cloned up to the most recent binary log coordinates.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BinLogCoordinates bin_log_coordinates = 4;</code>
     * @return \Google\Cloud\Sql\V1\BinLogCoordinates|null
     */
    public function getBinLogCoordinates()
    {
        return $this->bin_log_coordinates;
    }

    public function hasBinLogCoordinates()
    {
        return isset($this->bin_log_coordinates);
    }

    public function clearBinLogCoordinates()
    {
        unset($this->bin_log_coordinates);
    }

    /**
     * Binary log coordinates, if specified, identify the position up to which the
     * source instance is cloned. If not specified, the source instance is
     * cloned up to the most recent binary log coordinates.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BinLogCoordinates bin_log_coordinates = 4;</code>
     * @param \Google\Cloud\Sql\V1\BinLogCoordinates $var
     * @return $this
     */
    public function setBinLogCoordinates($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\BinLogCoordinates::class);
        $this->bin_log_coordinates = $var;

        return $this;
    }

    /**
     * Timestamp, if specified, identifies the time to which the source instance
     * is cloned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPointInTime()
    {
        return $this->point_in_time;
    }

    public function hasPointInTime()
    {
        return isset($this->point_in_time);
    }

    public function clearPointInTime()
    {
        unset($this->point_in_time);
    }

    /**
     * Timestamp, if specified, identifies the time to which the source instance
     * is cloned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPointInTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->point_in_time = $var;

        return $this;
    }

    /**
     * The name of the allocated ip range for the private ip Cloud SQL instance.
     * For example: "google-managed-services-default". If set, the cloned instance
     * ip will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * [a-z]([-a-z0-9]*[a-z0-9])?.
     * Reserved for future use.
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     * @return string
     */
    public function getAllocatedIpRange()
    {
        return $this->allocated_ip_range;
    }

    /**
     * The name of the allocated ip range for the private ip Cloud SQL instance.
     * For example: "google-managed-services-default". If set, the cloned instance
     * ip will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * [a-z]([-a-z0-9]*[a-z0-9])?.
     * Reserved for future use.
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAllocatedIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->allocated_ip_range = $var;

        return $this;
    }

    /**
     * (SQL Server only) Clone only the specified databases from the source
     * instance. Clone all databases if empty.
     *
     * Generated from protobuf field <code>repeated string database_names = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatabaseNames()
    {
        return $this->database_names;
    }

    /**
     * (SQL Server only) Clone only the specified databases from the source
     * instance. Clone all databases if empty.
     *
     * Generated from protobuf field <code>repeated string database_names = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatabaseNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->database_names = $arr;

        return $this;
    }

    /**
     * Optional. Copy clone and point-in-time recovery clone of an instance to the
     * specified zone. If no zone is specified, clone to the same primary zone as
     * the source instance. This field applies to all DB types.
     *
     * Generated from protobuf field <code>optional string preferred_zone = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPreferredZone()
    {
        return isset($this->preferred_zone) ? $this->preferred_zone : '';
    }

    public function hasPreferredZone()
    {
        return isset($this->preferred_zone);
    }

    public function clearPreferredZone()
    {
        unset($this->preferred_zone);
    }

    /**
     * Optional. Copy clone and point-in-time recovery clone of an instance to the
     * specified zone. If no zone is specified, clone to the same primary zone as
     * the source instance. This field applies to all DB types.
     *
     * Generated from protobuf field <code>optional string preferred_zone = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPreferredZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->preferred_zone = $var;

        return $this;
    }

}

