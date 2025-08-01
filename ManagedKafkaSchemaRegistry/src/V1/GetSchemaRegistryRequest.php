<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/schemaregistry/v1/schema_registry.proto

namespace Google\Cloud\ManagedKafka\SchemaRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for GetSchemaRegistry.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.schemaregistry.v1.GetSchemaRegistryRequest</code>
 */
class GetSchemaRegistryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the schema registry instance to return. Structured
     * like:
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the schema registry instance to return. Structured
     *                     like:
     *                     `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}`
     *                     Please see {@see ManagedSchemaRegistryClient::schemaRegistryName()} for help formatting this field.
     *
     * @return \Google\Cloud\ManagedKafka\SchemaRegistry\V1\GetSchemaRegistryRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the schema registry instance to return. Structured
     *           like:
     *           `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\Schemaregistry\V1\SchemaRegistry::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the schema registry instance to return. Structured
     * like:
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the schema registry instance to return. Structured
     * like:
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

