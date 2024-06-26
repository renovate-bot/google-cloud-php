<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to acquire a lease for SSRS.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.SqlInstancesAcquireSsrsLeaseRequest</code>
 */
class SqlInstancesAcquireSsrsLeaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Cloud SQL instance ID. This doesn't include the project ID. It's
     * composed of lowercase letters, numbers, and hyphens, and it must start with
     * a letter. The total length must be 98 characters or less (Example:
     * instance-id).
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = '';
    /**
     * Required. Project ID of the project that contains the instance (Example:
     * project-id).
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Required. The request body.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.InstancesAcquireSsrsLeaseRequest body = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Required. Cloud SQL instance ID. This doesn't include the project ID. It's
     *           composed of lowercase letters, numbers, and hyphens, and it must start with
     *           a letter. The total length must be 98 characters or less (Example:
     *           instance-id).
     *     @type string $project
     *           Required. Project ID of the project that contains the instance (Example:
     *           project-id).
     *     @type \Google\Cloud\Sql\V1\InstancesAcquireSsrsLeaseRequest $body
     *           Required. The request body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Cloud SQL instance ID. This doesn't include the project ID. It's
     * composed of lowercase letters, numbers, and hyphens, and it must start with
     * a letter. The total length must be 98 characters or less (Example:
     * instance-id).
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Required. Cloud SQL instance ID. This doesn't include the project ID. It's
     * composed of lowercase letters, numbers, and hyphens, and it must start with
     * a letter. The total length must be 98 characters or less (Example:
     * instance-id).
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Required. Project ID of the project that contains the instance (Example:
     * project-id).
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Required. Project ID of the project that contains the instance (Example:
     * project-id).
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Required. The request body.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.InstancesAcquireSsrsLeaseRequest body = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Sql\V1\InstancesAcquireSsrsLeaseRequest|null
     */
    public function getBody()
    {
        return $this->body;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * Required. The request body.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.InstancesAcquireSsrsLeaseRequest body = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Sql\V1\InstancesAcquireSsrsLeaseRequest $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\InstancesAcquireSsrsLeaseRequest::class);
        $this->body = $var;

        return $this;
    }

}

