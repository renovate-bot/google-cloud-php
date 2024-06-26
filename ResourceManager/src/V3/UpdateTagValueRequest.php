<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_values.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for updating a TagValue.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.UpdateTagValueRequest</code>
 */
class UpdateTagValueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new definition of the TagValue. Only fields `description` and
     * `etag` fields can be updated by this request. If the `etag` field is
     * nonempty, it must match the `etag` field of the existing ControlGroup.
     * Otherwise, `ABORTED` will be returned.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.TagValue tag_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tag_value = null;
    /**
     * Optional. Fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Optional. True to perform validations necessary for updating the resource,
     * but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param \Google\Cloud\ResourceManager\V3\TagValue $tagValue   Required. The new definition of the TagValue. Only fields `description` and
     *                                                              `etag` fields can be updated by this request. If the `etag` field is
     *                                                              nonempty, it must match the `etag` field of the existing ControlGroup.
     *                                                              Otherwise, `ABORTED` will be returned.
     * @param \Google\Protobuf\FieldMask                $updateMask Optional. Fields to be updated.
     *
     * @return \Google\Cloud\ResourceManager\V3\UpdateTagValueRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ResourceManager\V3\TagValue $tagValue, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setTagValue($tagValue)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ResourceManager\V3\TagValue $tag_value
     *           Required. The new definition of the TagValue. Only fields `description` and
     *           `etag` fields can be updated by this request. If the `etag` field is
     *           nonempty, it must match the `etag` field of the existing ControlGroup.
     *           Otherwise, `ABORTED` will be returned.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Fields to be updated.
     *     @type bool $validate_only
     *           Optional. True to perform validations necessary for updating the resource,
     *           but not actually perform the action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagValues::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new definition of the TagValue. Only fields `description` and
     * `etag` fields can be updated by this request. If the `etag` field is
     * nonempty, it must match the `etag` field of the existing ControlGroup.
     * Otherwise, `ABORTED` will be returned.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.TagValue tag_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ResourceManager\V3\TagValue|null
     */
    public function getTagValue()
    {
        return $this->tag_value;
    }

    public function hasTagValue()
    {
        return isset($this->tag_value);
    }

    public function clearTagValue()
    {
        unset($this->tag_value);
    }

    /**
     * Required. The new definition of the TagValue. Only fields `description` and
     * `etag` fields can be updated by this request. If the `etag` field is
     * nonempty, it must match the `etag` field of the existing ControlGroup.
     * Otherwise, `ABORTED` will be returned.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.TagValue tag_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ResourceManager\V3\TagValue $var
     * @return $this
     */
    public function setTagValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ResourceManager\V3\TagValue::class);
        $this->tag_value = $var;

        return $this;
    }

    /**
     * Optional. Fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Optional. True to perform validations necessary for updating the resource,
     * but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. True to perform validations necessary for updating the resource,
     * but not actually perform the action.
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

