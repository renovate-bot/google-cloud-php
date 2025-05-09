<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\EntrySource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about individual items in the hierarchy that is associated with
 * the data resource.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.EntrySource.Ancestor</code>
 */
class Ancestor extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The name of the ancestor resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Optional. The type of the ancestor resource.
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. The name of the ancestor resource.
     *     @type string $type
     *           Optional. The type of the ancestor resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The name of the ancestor resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. The name of the ancestor resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The type of the ancestor resource.
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. The type of the ancestor resource.
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}


