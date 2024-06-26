<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_values.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for getting a TagValue by its namespaced name.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.GetNamespacedTagValueRequest</code>
 */
class GetNamespacedTagValueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A namespaced tag value name in the following format:
     *   `{parentId}/{tagKeyShort}/{tagValueShort}`
     * Examples:
     * - `42/foo/abc` for a value with short name "abc" under the key with short
     *   name "foo" under the organization with ID 42
     * - `r2-d2/bar/xyz` for a value with short name "xyz" under the key with
     *    short name "bar" under the project with ID "r2-d2"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. A namespaced tag value name in the following format:
     *
     *                     `{parentId}/{tagKeyShort}/{tagValueShort}`
     *
     *                     Examples:
     *                     - `42/foo/abc` for a value with short name "abc" under the key with short
     *                     name "foo" under the organization with ID 42
     *                     - `r2-d2/bar/xyz` for a value with short name "xyz" under the key with
     *                     short name "bar" under the project with ID "r2-d2"
     *                     Please see {@see TagValuesClient::tagValueName()} for help formatting this field.
     *
     * @return \Google\Cloud\ResourceManager\V3\GetNamespacedTagValueRequest
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
     *           Required. A namespaced tag value name in the following format:
     *             `{parentId}/{tagKeyShort}/{tagValueShort}`
     *           Examples:
     *           - `42/foo/abc` for a value with short name "abc" under the key with short
     *             name "foo" under the organization with ID 42
     *           - `r2-d2/bar/xyz` for a value with short name "xyz" under the key with
     *              short name "bar" under the project with ID "r2-d2"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagValues::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A namespaced tag value name in the following format:
     *   `{parentId}/{tagKeyShort}/{tagValueShort}`
     * Examples:
     * - `42/foo/abc` for a value with short name "abc" under the key with short
     *   name "foo" under the organization with ID 42
     * - `r2-d2/bar/xyz` for a value with short name "xyz" under the key with
     *    short name "bar" under the project with ID "r2-d2"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A namespaced tag value name in the following format:
     *   `{parentId}/{tagKeyShort}/{tagValueShort}`
     * Examples:
     * - `42/foo/abc` for a value with short name "abc" under the key with short
     *   name "foo" under the organization with ID 42
     * - `r2-d2/bar/xyz` for a value with short name "xyz" under the key with
     *    short name "bar" under the project with ID "r2-d2"
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

