<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Salesforce organization structure.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.SalesforceOrg</code>
 */
class SalesforceOrg extends \Google\Protobuf\Internal\Message
{
    /**
     * Salesforce objects in the database server.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.SalesforceObject objects = 1;</code>
     */
    private $objects;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Datastream\V1\SalesforceObject>|\Google\Protobuf\Internal\RepeatedField $objects
     *           Salesforce objects in the database server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Salesforce objects in the database server.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.SalesforceObject objects = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Salesforce objects in the database server.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.SalesforceObject objects = 1;</code>
     * @param array<\Google\Cloud\Datastream\V1\SalesforceObject>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObjects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastream\V1\SalesforceObject::class);
        $this->objects = $arr;

        return $this;
    }

}

