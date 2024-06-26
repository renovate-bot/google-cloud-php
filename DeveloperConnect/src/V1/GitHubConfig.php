<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for connections to github.com.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.GitHubConfig</code>
 */
class GitHubConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. The GitHub Application that was installed to the
     * GitHub user or organization.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.GitHubConfig.GitHubApp github_app = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $github_app = 0;
    /**
     * Optional. OAuth credential of the account that authorized the GitHub App.
     * It is recommended to use a robot account instead of a human user account.
     * The OAuth token must be tied to the GitHub App of this config.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.OAuthCredential authorizer_credential = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $authorizer_credential = null;
    /**
     * Optional. GitHub App installation id.
     *
     * Generated from protobuf field <code>int64 app_installation_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $app_installation_id = 0;
    /**
     * Output only. The URI to navigate to in order to manage the installation
     * associated with this GitHubConfig.
     *
     * Generated from protobuf field <code>string installation_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $installation_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $github_app
     *           Required. Immutable. The GitHub Application that was installed to the
     *           GitHub user or organization.
     *     @type \Google\Cloud\DeveloperConnect\V1\OAuthCredential $authorizer_credential
     *           Optional. OAuth credential of the account that authorized the GitHub App.
     *           It is recommended to use a robot account instead of a human user account.
     *           The OAuth token must be tied to the GitHub App of this config.
     *     @type int|string $app_installation_id
     *           Optional. GitHub App installation id.
     *     @type string $installation_uri
     *           Output only. The URI to navigate to in order to manage the installation
     *           associated with this GitHubConfig.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. The GitHub Application that was installed to the
     * GitHub user or organization.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.GitHubConfig.GitHubApp github_app = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getGithubApp()
    {
        return $this->github_app;
    }

    /**
     * Required. Immutable. The GitHub Application that was installed to the
     * GitHub user or organization.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.GitHubConfig.GitHubApp github_app = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setGithubApp($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DeveloperConnect\V1\GitHubConfig\GitHubApp::class);
        $this->github_app = $var;

        return $this;
    }

    /**
     * Optional. OAuth credential of the account that authorized the GitHub App.
     * It is recommended to use a robot account instead of a human user account.
     * The OAuth token must be tied to the GitHub App of this config.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.OAuthCredential authorizer_credential = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DeveloperConnect\V1\OAuthCredential|null
     */
    public function getAuthorizerCredential()
    {
        return $this->authorizer_credential;
    }

    public function hasAuthorizerCredential()
    {
        return isset($this->authorizer_credential);
    }

    public function clearAuthorizerCredential()
    {
        unset($this->authorizer_credential);
    }

    /**
     * Optional. OAuth credential of the account that authorized the GitHub App.
     * It is recommended to use a robot account instead of a human user account.
     * The OAuth token must be tied to the GitHub App of this config.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.OAuthCredential authorizer_credential = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DeveloperConnect\V1\OAuthCredential $var
     * @return $this
     */
    public function setAuthorizerCredential($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DeveloperConnect\V1\OAuthCredential::class);
        $this->authorizer_credential = $var;

        return $this;
    }

    /**
     * Optional. GitHub App installation id.
     *
     * Generated from protobuf field <code>int64 app_installation_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getAppInstallationId()
    {
        return $this->app_installation_id;
    }

    /**
     * Optional. GitHub App installation id.
     *
     * Generated from protobuf field <code>int64 app_installation_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAppInstallationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->app_installation_id = $var;

        return $this;
    }

    /**
     * Output only. The URI to navigate to in order to manage the installation
     * associated with this GitHubConfig.
     *
     * Generated from protobuf field <code>string installation_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstallationUri()
    {
        return $this->installation_uri;
    }

    /**
     * Output only. The URI to navigate to in order to manage the installation
     * associated with this GitHubConfig.
     *
     * Generated from protobuf field <code>string installation_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstallationUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->installation_uri = $var;

        return $this;
    }

}

