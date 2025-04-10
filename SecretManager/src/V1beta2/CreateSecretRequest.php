<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1beta2/service.proto

namespace Google\Cloud\SecretManager\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SecretManagerService.CreateSecret][google.cloud.secretmanager.v1beta2.SecretManagerService.CreateSecret].
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1beta2.CreateSecretRequest</code>
 */
class CreateSecretRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the project to associate with the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret], in the format
     * `projects/&#42;` or `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. This must be unique within the project.
     * A secret ID is a string with a maximum length of 255 characters and can
     * contain uppercase and lowercase letters, numerals, and the hyphen (`-`) and
     * underscore (`_`) characters.
     *
     * Generated from protobuf field <code>string secret_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $secret_id = '';
    /**
     * Required. A [Secret][google.cloud.secretmanager.v1beta2.Secret] with
     * initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Secret secret = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $secret = null;

    /**
     * @param string                                     $parent   Required. The resource name of the project to associate with the
     *                                                             [Secret][google.cloud.secretmanager.v1beta2.Secret], in the format
     *                                                             `projects/*` or `projects/&#42;/locations/*`. Please see
     *                                                             {@see SecretManagerServiceClient::projectName()} for help formatting this field.
     * @param string                                     $secretId Required. This must be unique within the project.
     *
     *                                                             A secret ID is a string with a maximum length of 255 characters and can
     *                                                             contain uppercase and lowercase letters, numerals, and the hyphen (`-`) and
     *                                                             underscore (`_`) characters.
     * @param \Google\Cloud\SecretManager\V1beta2\Secret $secret   Required. A [Secret][google.cloud.secretmanager.v1beta2.Secret] with
     *                                                             initial field values.
     *
     * @return \Google\Cloud\SecretManager\V1beta2\CreateSecretRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $secretId, \Google\Cloud\SecretManager\V1beta2\Secret $secret): self
    {
        return (new self())
            ->setParent($parent)
            ->setSecretId($secretId)
            ->setSecret($secret);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the project to associate with the
     *           [Secret][google.cloud.secretmanager.v1beta2.Secret], in the format
     *           `projects/&#42;` or `projects/&#42;&#47;locations/&#42;`.
     *     @type string $secret_id
     *           Required. This must be unique within the project.
     *           A secret ID is a string with a maximum length of 255 characters and can
     *           contain uppercase and lowercase letters, numerals, and the hyphen (`-`) and
     *           underscore (`_`) characters.
     *     @type \Google\Cloud\SecretManager\V1beta2\Secret $secret
     *           Required. A [Secret][google.cloud.secretmanager.v1beta2.Secret] with
     *           initial field values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1Beta2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the project to associate with the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret], in the format
     * `projects/&#42;` or `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the project to associate with the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret], in the format
     * `projects/&#42;` or `projects/&#42;&#47;locations/&#42;`.
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
     * Required. This must be unique within the project.
     * A secret ID is a string with a maximum length of 255 characters and can
     * contain uppercase and lowercase letters, numerals, and the hyphen (`-`) and
     * underscore (`_`) characters.
     *
     * Generated from protobuf field <code>string secret_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSecretId()
    {
        return $this->secret_id;
    }

    /**
     * Required. This must be unique within the project.
     * A secret ID is a string with a maximum length of 255 characters and can
     * contain uppercase and lowercase letters, numerals, and the hyphen (`-`) and
     * underscore (`_`) characters.
     *
     * Generated from protobuf field <code>string secret_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSecretId($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_id = $var;

        return $this;
    }

    /**
     * Required. A [Secret][google.cloud.secretmanager.v1beta2.Secret] with
     * initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Secret secret = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecretManager\V1beta2\Secret|null
     */
    public function getSecret()
    {
        return $this->secret;
    }

    public function hasSecret()
    {
        return isset($this->secret);
    }

    public function clearSecret()
    {
        unset($this->secret);
    }

    /**
     * Required. A [Secret][google.cloud.secretmanager.v1beta2.Secret] with
     * initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Secret secret = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecretManager\V1beta2\Secret $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1beta2\Secret::class);
        $this->secret = $var;

        return $this;
    }

}

