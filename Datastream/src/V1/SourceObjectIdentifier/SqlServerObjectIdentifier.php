<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1\SourceObjectIdentifier;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SQLServer data source object identifier.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.SourceObjectIdentifier.SqlServerObjectIdentifier</code>
 */
class SqlServerObjectIdentifier extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The schema name.
     *
     * Generated from protobuf field <code>string schema = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $schema = '';
    /**
     * Required. The table name.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $schema
     *           Required. The schema name.
     *     @type string $table
     *           Required. The table name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The schema name.
     *
     * Generated from protobuf field <code>string schema = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Required. The schema name.
     *
     * Generated from protobuf field <code>string schema = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema = $var;

        return $this;
    }

    /**
     * Required. The table name.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Required. The table name.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

}


