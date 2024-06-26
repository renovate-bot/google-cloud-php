<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update a metadata entity request.
 * The exiting entity will be fully replaced by the entity in the request.
 * The entity ID is mutable. To modify the ID, use the current entity ID in the
 * request URL and specify the new ID in the request body.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.UpdateEntityRequest</code>
 */
class UpdateEntityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Update description.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity entity = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entity = null;
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\Entity $entity
     *           Required. Update description.
     *     @type bool $validate_only
     *           Optional. Only validate the request, but do not perform mutations.
     *           The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Update description.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity entity = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\Entity|null
     */
    public function getEntity()
    {
        return $this->entity;
    }

    public function hasEntity()
    {
        return isset($this->entity);
    }

    public function clearEntity()
    {
        unset($this->entity);
    }

    /**
     * Required. Update description.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity entity = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

