<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/schemaregistry/v1/schema_registry.proto

namespace Google\Cloud\ManagedKafka\SchemaRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListSchemaRegistries.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.schemaregistry.v1.ListSchemaRegistriesRequest</code>
 */
class ListSchemaRegistriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent whose schema registry instances are to be listed.
     * Structured like: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';

    /**
     * @param string $parent Required. The parent whose schema registry instances are to be listed.
     *                       Structured like: `projects/{project}/locations/{location}`
     *
     * @return \Google\Cloud\ManagedKafka\SchemaRegistry\V1\ListSchemaRegistriesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent whose schema registry instances are to be listed.
     *           Structured like: `projects/{project}/locations/{location}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\Schemaregistry\V1\SchemaRegistry::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent whose schema registry instances are to be listed.
     * Structured like: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent whose schema registry instances are to be listed.
     * Structured like: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

