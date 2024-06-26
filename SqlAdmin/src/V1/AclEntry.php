<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entry for an Access Control list.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.AclEntry</code>
 */
class AclEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The allowlisted value for the access control list.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    protected $value = '';
    /**
     * The time when this access control entry expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 2;</code>
     */
    protected $expiration_time = null;
    /**
     * Optional. A label to identify this entry.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * This is always `sql#aclEntry`.
     *
     * Generated from protobuf field <code>string kind = 4;</code>
     */
    protected $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The allowlisted value for the access control list.
     *     @type \Google\Protobuf\Timestamp $expiration_time
     *           The time when this access control entry expires in
     *           [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     *           `2012-11-15T16:19:00.094Z`.
     *     @type string $name
     *           Optional. A label to identify this entry.
     *     @type string $kind
     *           This is always `sql#aclEntry`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The allowlisted value for the access control list.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The allowlisted value for the access control list.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * The time when this access control entry expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     * The time when this access control entry expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * Optional. A label to identify this entry.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. A label to identify this entry.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * This is always `sql#aclEntry`.
     *
     * Generated from protobuf field <code>string kind = 4;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#aclEntry`.
     *
     * Generated from protobuf field <code>string kind = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

