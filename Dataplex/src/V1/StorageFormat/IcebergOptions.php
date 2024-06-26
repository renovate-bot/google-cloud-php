<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\StorageFormat;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes Iceberg data format.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.StorageFormat.IcebergOptions</code>
 */
class IcebergOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The location of where the iceberg metadata is present, must be
     * within the table path
     *
     * Generated from protobuf field <code>string metadata_location = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $metadata_location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $metadata_location
     *           Optional. The location of where the iceberg metadata is present, must be
     *           within the table path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The location of where the iceberg metadata is present, must be
     * within the table path
     *
     * Generated from protobuf field <code>string metadata_location = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMetadataLocation()
    {
        return $this->metadata_location;
    }

    /**
     * Optional. The location of where the iceberg metadata is present, must be
     * within the table path
     *
     * Generated from protobuf field <code>string metadata_location = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata_location = $var;

        return $this;
    }

}


