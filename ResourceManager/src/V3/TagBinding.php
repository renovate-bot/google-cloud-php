<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_bindings.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A TagBinding represents a connection between a TagValue and a cloud
 * resource Once a TagBinding is created, the TagValue is applied to all the
 * descendants of the Google Cloud resource.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.TagBinding</code>
 */
class TagBinding extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the TagBinding. This is a String of the form:
     * `tagBindings/{full-resource-name}/{tag-value-name}` (e.g.
     * `tagBindings/%2F%2Fcloudresourcemanager.googleapis.com%2Fprojects%2F123/tagValues/456`).
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * The full resource name of the resource the TagValue is bound to.
     * E.g. `//cloudresourcemanager.googleapis.com/projects/123`
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     */
    protected $parent = '';
    /**
     * The TagValue of the TagBinding.
     * Must be of the form `tagValues/456`.
     *
     * Generated from protobuf field <code>string tag_value = 3;</code>
     */
    protected $tag_value = '';
    /**
     * The namespaced name for the TagValue of the TagBinding.
     * Must be in the format
     * `{parent_id}/{tag_key_short_name}/{short_name}`.
     * For methods that support TagValue namespaced name, only one of
     * tag_value_namespaced_name or tag_value may be filled. Requests with both
     * fields will be rejected.
     *
     * Generated from protobuf field <code>string tag_value_namespaced_name = 4;</code>
     */
    protected $tag_value_namespaced_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the TagBinding. This is a String of the form:
     *           `tagBindings/{full-resource-name}/{tag-value-name}` (e.g.
     *           `tagBindings/%2F%2Fcloudresourcemanager.googleapis.com%2Fprojects%2F123/tagValues/456`).
     *     @type string $parent
     *           The full resource name of the resource the TagValue is bound to.
     *           E.g. `//cloudresourcemanager.googleapis.com/projects/123`
     *     @type string $tag_value
     *           The TagValue of the TagBinding.
     *           Must be of the form `tagValues/456`.
     *     @type string $tag_value_namespaced_name
     *           The namespaced name for the TagValue of the TagBinding.
     *           Must be in the format
     *           `{parent_id}/{tag_key_short_name}/{short_name}`.
     *           For methods that support TagValue namespaced name, only one of
     *           tag_value_namespaced_name or tag_value may be filled. Requests with both
     *           fields will be rejected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagBindings::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the TagBinding. This is a String of the form:
     * `tagBindings/{full-resource-name}/{tag-value-name}` (e.g.
     * `tagBindings/%2F%2Fcloudresourcemanager.googleapis.com%2Fprojects%2F123/tagValues/456`).
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the TagBinding. This is a String of the form:
     * `tagBindings/{full-resource-name}/{tag-value-name}` (e.g.
     * `tagBindings/%2F%2Fcloudresourcemanager.googleapis.com%2Fprojects%2F123/tagValues/456`).
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The full resource name of the resource the TagValue is bound to.
     * E.g. `//cloudresourcemanager.googleapis.com/projects/123`
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The full resource name of the resource the TagValue is bound to.
     * E.g. `//cloudresourcemanager.googleapis.com/projects/123`
     *
     * Generated from protobuf field <code>string parent = 2;</code>
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
     * The TagValue of the TagBinding.
     * Must be of the form `tagValues/456`.
     *
     * Generated from protobuf field <code>string tag_value = 3;</code>
     * @return string
     */
    public function getTagValue()
    {
        return $this->tag_value;
    }

    /**
     * The TagValue of the TagBinding.
     * Must be of the form `tagValues/456`.
     *
     * Generated from protobuf field <code>string tag_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTagValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_value = $var;

        return $this;
    }

    /**
     * The namespaced name for the TagValue of the TagBinding.
     * Must be in the format
     * `{parent_id}/{tag_key_short_name}/{short_name}`.
     * For methods that support TagValue namespaced name, only one of
     * tag_value_namespaced_name or tag_value may be filled. Requests with both
     * fields will be rejected.
     *
     * Generated from protobuf field <code>string tag_value_namespaced_name = 4;</code>
     * @return string
     */
    public function getTagValueNamespacedName()
    {
        return $this->tag_value_namespaced_name;
    }

    /**
     * The namespaced name for the TagValue of the TagBinding.
     * Must be in the format
     * `{parent_id}/{tag_key_short_name}/{short_name}`.
     * For methods that support TagValue namespaced name, only one of
     * tag_value_namespaced_name or tag_value may be filled. Requests with both
     * fields will be rejected.
     *
     * Generated from protobuf field <code>string tag_value_namespaced_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTagValueNamespacedName($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_value_namespaced_name = $var;

        return $this;
    }

}

