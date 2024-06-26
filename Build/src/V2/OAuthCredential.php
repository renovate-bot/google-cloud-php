<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an OAuth token of the account that authorized the Connection,
 * and associated metadata.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.OAuthCredential</code>
 */
class OAuthCredential extends \Google\Protobuf\Internal\Message
{
    /**
     * A SecretManager resource containing the OAuth token that authorizes
     * the Cloud Build connection. Format: `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string oauth_token_secret_version = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $oauth_token_secret_version = '';
    /**
     * Output only. The username associated to this token.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $username = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $oauth_token_secret_version
     *           A SecretManager resource containing the OAuth token that authorizes
     *           the Cloud Build connection. Format: `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *     @type string $username
     *           Output only. The username associated to this token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * A SecretManager resource containing the OAuth token that authorizes
     * the Cloud Build connection. Format: `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string oauth_token_secret_version = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOauthTokenSecretVersion()
    {
        return $this->oauth_token_secret_version;
    }

    /**
     * A SecretManager resource containing the OAuth token that authorizes
     * the Cloud Build connection. Format: `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string oauth_token_secret_version = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOauthTokenSecretVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth_token_secret_version = $var;

        return $this;
    }

    /**
     * Output only. The username associated to this token.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Output only. The username associated to this token.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

}

