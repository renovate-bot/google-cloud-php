<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/schemaregistry/v1/schema_registry.proto

namespace Google\Cloud\ManagedKafka\SchemaRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for listing subjects.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.schemaregistry.v1.ListSubjectsBySchemaIdRequest</code>
 */
class ListSubjectsBySchemaIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The schema resource whose associated subjects are to be listed.
     * Structured like:
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/schemas/ids/{schema}`
     * or
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/contexts/{context}/schemas/ids/{schema}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The subject to filter the subjects by.
     *
     * Generated from protobuf field <code>optional string subject = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $subject = null;
    /**
     * Optional. If true, the response will include soft-deleted subjects. The
     * default is false.
     *
     * Generated from protobuf field <code>optional bool deleted = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deleted = null;

    /**
     * @param string $parent  Required. The schema resource whose associated subjects are to be listed.
     *                        Structured like:
     *                        `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/schemas/ids/{schema}`
     *                        or
     *                        `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/contexts/{context}/schemas/ids/{schema}`
     * @param string $subject Optional. The subject to filter the subjects by.
     * @param bool   $deleted Optional. If true, the response will include soft-deleted subjects. The
     *                        default is false.
     *
     * @return \Google\Cloud\ManagedKafka\SchemaRegistry\V1\ListSubjectsBySchemaIdRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $subject, bool $deleted): self
    {
        return (new self())
            ->setParent($parent)
            ->setSubject($subject)
            ->setDeleted($deleted);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The schema resource whose associated subjects are to be listed.
     *           Structured like:
     *           `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/schemas/ids/{schema}`
     *           or
     *           `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/contexts/{context}/schemas/ids/{schema}`
     *     @type string $subject
     *           Optional. The subject to filter the subjects by.
     *     @type bool $deleted
     *           Optional. If true, the response will include soft-deleted subjects. The
     *           default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\Schemaregistry\V1\SchemaRegistry::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The schema resource whose associated subjects are to be listed.
     * Structured like:
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/schemas/ids/{schema}`
     * or
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/contexts/{context}/schemas/ids/{schema}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The schema resource whose associated subjects are to be listed.
     * Structured like:
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/schemas/ids/{schema}`
     * or
     * `projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/contexts/{context}/schemas/ids/{schema}`
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

    /**
     * Optional. The subject to filter the subjects by.
     *
     * Generated from protobuf field <code>optional string subject = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubject()
    {
        return isset($this->subject) ? $this->subject : '';
    }

    public function hasSubject()
    {
        return isset($this->subject);
    }

    public function clearSubject()
    {
        unset($this->subject);
    }

    /**
     * Optional. The subject to filter the subjects by.
     *
     * Generated from protobuf field <code>optional string subject = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Optional. If true, the response will include soft-deleted subjects. The
     * default is false.
     *
     * Generated from protobuf field <code>optional bool deleted = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDeleted()
    {
        return isset($this->deleted) ? $this->deleted : false;
    }

    public function hasDeleted()
    {
        return isset($this->deleted);
    }

    public function clearDeleted()
    {
        unset($this->deleted);
    }

    /**
     * Optional. If true, the response will include soft-deleted subjects. The
     * default is false.
     *
     * Generated from protobuf field <code>optional bool deleted = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

}

