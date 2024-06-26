<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/field.proto

namespace Google\Cloud\Firestore\Admin\V1\Field;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The TTL (time-to-live) configuration for documents that have this `Field`
 * set.
 * Storing a timestamp value into a TTL-enabled field will be treated as
 * the document's absolute expiration time. Timestamp values in the past
 * indicate that the document is eligible for immediate expiration. Using any
 * other data type or leaving the field absent will disable expiration for the
 * individual document.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.Field.TtlConfig</code>
 */
class TtlConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The state of the TTL configuration.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.TtlConfig.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Output only. The state of the TTL configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Field::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The state of the TTL configuration.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.TtlConfig.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the TTL configuration.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.TtlConfig.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\Field\TtlConfig\State::class);
        $this->state = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TtlConfig::class, \Google\Cloud\Firestore\Admin\V1\Field_TtlConfig::class);

