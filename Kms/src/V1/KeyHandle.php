<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/autokey.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource-oriented representation of a request to Cloud KMS Autokey and the
 * resulting provisioning of a [CryptoKey][google.cloud.kms.v1.CryptoKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.KeyHandle</code>
 */
class KeyHandle extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle]
     * resource, e.g.
     * `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Name of a [CryptoKey][google.cloud.kms.v1.CryptoKey] that has
     * been provisioned for Customer Managed Encryption Key (CMEK) use in the
     * [KeyHandle][google.cloud.kms.v1.KeyHandle] project and location for the
     * requested resource type. The [CryptoKey][google.cloud.kms.v1.CryptoKey]
     * project will reflect the value configured in the
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] on the resource
     * project's ancestor folder at the time of the
     * [KeyHandle][google.cloud.kms.v1.KeyHandle] creation. If more than one
     * ancestor folder has a configured
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig], the nearest of these
     * configurations is used.
     *
     * Generated from protobuf field <code>string kms_key = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $kms_key = '';
    /**
     * Required. Indicates the resource type that the resulting
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] is meant to protect, e.g.
     * `{SERVICE}.googleapis.com/{TYPE}`. See documentation for supported resource
     * types.
     *
     * Generated from protobuf field <code>string resource_type_selector = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $resource_type_selector = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle]
     *           resource, e.g.
     *           `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
     *     @type string $kms_key
     *           Output only. Name of a [CryptoKey][google.cloud.kms.v1.CryptoKey] that has
     *           been provisioned for Customer Managed Encryption Key (CMEK) use in the
     *           [KeyHandle][google.cloud.kms.v1.KeyHandle] project and location for the
     *           requested resource type. The [CryptoKey][google.cloud.kms.v1.CryptoKey]
     *           project will reflect the value configured in the
     *           [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] on the resource
     *           project's ancestor folder at the time of the
     *           [KeyHandle][google.cloud.kms.v1.KeyHandle] creation. If more than one
     *           ancestor folder has a configured
     *           [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig], the nearest of these
     *           configurations is used.
     *     @type string $resource_type_selector
     *           Required. Indicates the resource type that the resulting
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] is meant to protect, e.g.
     *           `{SERVICE}.googleapis.com/{TYPE}`. See documentation for supported resource
     *           types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Autokey::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle]
     * resource, e.g.
     * `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle]
     * resource, e.g.
     * `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. Name of a [CryptoKey][google.cloud.kms.v1.CryptoKey] that has
     * been provisioned for Customer Managed Encryption Key (CMEK) use in the
     * [KeyHandle][google.cloud.kms.v1.KeyHandle] project and location for the
     * requested resource type. The [CryptoKey][google.cloud.kms.v1.CryptoKey]
     * project will reflect the value configured in the
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] on the resource
     * project's ancestor folder at the time of the
     * [KeyHandle][google.cloud.kms.v1.KeyHandle] creation. If more than one
     * ancestor folder has a configured
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig], the nearest of these
     * configurations is used.
     *
     * Generated from protobuf field <code>string kms_key = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Output only. Name of a [CryptoKey][google.cloud.kms.v1.CryptoKey] that has
     * been provisioned for Customer Managed Encryption Key (CMEK) use in the
     * [KeyHandle][google.cloud.kms.v1.KeyHandle] project and location for the
     * requested resource type. The [CryptoKey][google.cloud.kms.v1.CryptoKey]
     * project will reflect the value configured in the
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] on the resource
     * project's ancestor folder at the time of the
     * [KeyHandle][google.cloud.kms.v1.KeyHandle] creation. If more than one
     * ancestor folder has a configured
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig], the nearest of these
     * configurations is used.
     *
     * Generated from protobuf field <code>string kms_key = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

    /**
     * Required. Indicates the resource type that the resulting
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] is meant to protect, e.g.
     * `{SERVICE}.googleapis.com/{TYPE}`. See documentation for supported resource
     * types.
     *
     * Generated from protobuf field <code>string resource_type_selector = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResourceTypeSelector()
    {
        return $this->resource_type_selector;
    }

    /**
     * Required. Indicates the resource type that the resulting
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] is meant to protect, e.g.
     * `{SERVICE}.googleapis.com/{TYPE}`. See documentation for supported resource
     * types.
     *
     * Generated from protobuf field <code>string resource_type_selector = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResourceTypeSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type_selector = $var;

        return $this;
    }

}

