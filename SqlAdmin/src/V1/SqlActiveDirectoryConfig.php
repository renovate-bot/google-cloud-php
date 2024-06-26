<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Active Directory configuration, relevant only for Cloud SQL for SQL Server.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.SqlActiveDirectoryConfig</code>
 */
class SqlActiveDirectoryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always sql#activeDirectoryConfig.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    protected $kind = '';
    /**
     * The name of the domain (e.g., mydomain.com).
     *
     * Generated from protobuf field <code>string domain = 2;</code>
     */
    protected $domain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always sql#activeDirectoryConfig.
     *     @type string $domain
     *           The name of the domain (e.g., mydomain.com).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always sql#activeDirectoryConfig.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always sql#activeDirectoryConfig.
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
     * The name of the domain (e.g., mydomain.com).
     *
     * Generated from protobuf field <code>string domain = 2;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * The name of the domain (e.g., mydomain.com).
     *
     * Generated from protobuf field <code>string domain = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

}

