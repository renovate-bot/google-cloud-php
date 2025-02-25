<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupdr.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ManagementServer describes a single BackupDR ManagementServer instance.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.ManagementServer</code>
 */
class ManagementServer extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. The resource name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Optional. The description of the ManagementServer instance (2048 characters
     * or less).
     *
     * Generated from protobuf field <code>string description = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Resource labels to represent user provided metadata.
     * Labels currently defined:
     * 1. migrate_from_go=<false|true>
     *    If set to true, the MS is created in migration ready mode.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. The type of the ManagementServer resource.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementServer.InstanceType type = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;
    /**
     * Output only. The hostname or ip address of the exposed AGM endpoints, used
     * by clients to connect to AGM/RD graphical user interface and APIs.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementURI management_uri = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $management_uri = null;
    /**
     * Output only. The hostnames of the exposed AGM endpoints for both types of
     * user i.e. 1p and 3p, used to connect AGM/RM UI.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.WorkforceIdentityBasedManagementURI workforce_identity_based_management_uri = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $workforce_identity_based_management_uri = null;
    /**
     * Output only. The ManagementServer state.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementServer.InstanceState state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. VPC networks to which the ManagementServer instance is connected.
     * For this version, only a single network is supported. This field is
     * optional if MS is created without PSA
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.NetworkConfig networks = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $networks;
    /**
     * Optional. Server specified ETag for the ManagementServer resource to
     * prevent simultaneous updates from overwiting each other.
     *
     * Generated from protobuf field <code>string etag = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Output only. The OAuth 2.0 client id is required to make API calls to the
     * BackupDR instance API of this ManagementServer. This is the value that
     * should be provided in the 'aud' field of the OIDC ID Token (see openid
     * specification
     * https://openid.net/specs/openid-connect-core-1_0.html#IDToken).
     *
     * Generated from protobuf field <code>string oauth2_client_id = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $oauth2_client_id = '';
    /**
     * Output only. The OAuth client IDs for both types of user i.e. 1p and 3p.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.WorkforceIdentityBasedOAuth2ClientID workforce_identity_based_oauth2_client_id = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $workforce_identity_based_oauth2_client_id = null;
    /**
     * Output only. The hostname or ip address of the exposed AGM endpoints, used
     * by BAs to connect to BA proxy.
     *
     * Generated from protobuf field <code>repeated string ba_proxy_uri = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $ba_proxy_uri;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. The resource name.
     *     @type string $description
     *           Optional. The description of the ManagementServer instance (2048 characters
     *           or less).
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Resource labels to represent user provided metadata.
     *           Labels currently defined:
     *           1. migrate_from_go=<false|true>
     *              If set to true, the MS is created in migration ready mode.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the instance was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the instance was updated.
     *     @type int $type
     *           Optional. The type of the ManagementServer resource.
     *     @type \Google\Cloud\BackupDR\V1\ManagementURI $management_uri
     *           Output only. The hostname or ip address of the exposed AGM endpoints, used
     *           by clients to connect to AGM/RD graphical user interface and APIs.
     *     @type \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedManagementURI $workforce_identity_based_management_uri
     *           Output only. The hostnames of the exposed AGM endpoints for both types of
     *           user i.e. 1p and 3p, used to connect AGM/RM UI.
     *     @type int $state
     *           Output only. The ManagementServer state.
     *     @type array<\Google\Cloud\BackupDR\V1\NetworkConfig>|\Google\Protobuf\Internal\RepeatedField $networks
     *           Optional. VPC networks to which the ManagementServer instance is connected.
     *           For this version, only a single network is supported. This field is
     *           optional if MS is created without PSA
     *     @type string $etag
     *           Optional. Server specified ETag for the ManagementServer resource to
     *           prevent simultaneous updates from overwiting each other.
     *     @type string $oauth2_client_id
     *           Output only. The OAuth 2.0 client id is required to make API calls to the
     *           BackupDR instance API of this ManagementServer. This is the value that
     *           should be provided in the 'aud' field of the OIDC ID Token (see openid
     *           specification
     *           https://openid.net/specs/openid-connect-core-1_0.html#IDToken).
     *     @type \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedOAuth2ClientID $workforce_identity_based_oauth2_client_id
     *           Output only. The OAuth client IDs for both types of user i.e. 1p and 3p.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ba_proxy_uri
     *           Output only. The hostname or ip address of the exposed AGM endpoints, used
     *           by BAs to connect to BA proxy.
     *     @type \Google\Protobuf\BoolValue $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupdr::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. The resource name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. The resource name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Optional. The description of the ManagementServer instance (2048 characters
     * or less).
     *
     * Generated from protobuf field <code>string description = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the ManagementServer instance (2048 characters
     * or less).
     *
     * Generated from protobuf field <code>string description = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Resource labels to represent user provided metadata.
     * Labels currently defined:
     * 1. migrate_from_go=<false|true>
     *    If set to true, the MS is created in migration ready mode.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Resource labels to represent user provided metadata.
     * Labels currently defined:
     * 1. migrate_from_go=<false|true>
     *    If set to true, the MS is created in migration ready mode.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The type of the ManagementServer resource.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementServer.InstanceType type = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. The type of the ManagementServer resource.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementServer.InstanceType type = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\ManagementServer\InstanceType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The hostname or ip address of the exposed AGM endpoints, used
     * by clients to connect to AGM/RD graphical user interface and APIs.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementURI management_uri = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\ManagementURI|null
     */
    public function getManagementUri()
    {
        return $this->management_uri;
    }

    public function hasManagementUri()
    {
        return isset($this->management_uri);
    }

    public function clearManagementUri()
    {
        unset($this->management_uri);
    }

    /**
     * Output only. The hostname or ip address of the exposed AGM endpoints, used
     * by clients to connect to AGM/RD graphical user interface and APIs.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementURI management_uri = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\ManagementURI $var
     * @return $this
     */
    public function setManagementUri($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\ManagementURI::class);
        $this->management_uri = $var;

        return $this;
    }

    /**
     * Output only. The hostnames of the exposed AGM endpoints for both types of
     * user i.e. 1p and 3p, used to connect AGM/RM UI.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.WorkforceIdentityBasedManagementURI workforce_identity_based_management_uri = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedManagementURI|null
     */
    public function getWorkforceIdentityBasedManagementUri()
    {
        return $this->workforce_identity_based_management_uri;
    }

    public function hasWorkforceIdentityBasedManagementUri()
    {
        return isset($this->workforce_identity_based_management_uri);
    }

    public function clearWorkforceIdentityBasedManagementUri()
    {
        unset($this->workforce_identity_based_management_uri);
    }

    /**
     * Output only. The hostnames of the exposed AGM endpoints for both types of
     * user i.e. 1p and 3p, used to connect AGM/RM UI.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.WorkforceIdentityBasedManagementURI workforce_identity_based_management_uri = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedManagementURI $var
     * @return $this
     */
    public function setWorkforceIdentityBasedManagementUri($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedManagementURI::class);
        $this->workforce_identity_based_management_uri = $var;

        return $this;
    }

    /**
     * Output only. The ManagementServer state.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementServer.InstanceState state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The ManagementServer state.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ManagementServer.InstanceState state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\ManagementServer\InstanceState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. VPC networks to which the ManagementServer instance is connected.
     * For this version, only a single network is supported. This field is
     * optional if MS is created without PSA
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.NetworkConfig networks = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * Optional. VPC networks to which the ManagementServer instance is connected.
     * For this version, only a single network is supported. This field is
     * optional if MS is created without PSA
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.NetworkConfig networks = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\BackupDR\V1\NetworkConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BackupDR\V1\NetworkConfig::class);
        $this->networks = $arr;

        return $this;
    }

    /**
     * Optional. Server specified ETag for the ManagementServer resource to
     * prevent simultaneous updates from overwiting each other.
     *
     * Generated from protobuf field <code>string etag = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Server specified ETag for the ManagementServer resource to
     * prevent simultaneous updates from overwiting each other.
     *
     * Generated from protobuf field <code>string etag = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. The OAuth 2.0 client id is required to make API calls to the
     * BackupDR instance API of this ManagementServer. This is the value that
     * should be provided in the 'aud' field of the OIDC ID Token (see openid
     * specification
     * https://openid.net/specs/openid-connect-core-1_0.html#IDToken).
     *
     * Generated from protobuf field <code>string oauth2_client_id = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOauth2ClientId()
    {
        return $this->oauth2_client_id;
    }

    /**
     * Output only. The OAuth 2.0 client id is required to make API calls to the
     * BackupDR instance API of this ManagementServer. This is the value that
     * should be provided in the 'aud' field of the OIDC ID Token (see openid
     * specification
     * https://openid.net/specs/openid-connect-core-1_0.html#IDToken).
     *
     * Generated from protobuf field <code>string oauth2_client_id = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_id = $var;

        return $this;
    }

    /**
     * Output only. The OAuth client IDs for both types of user i.e. 1p and 3p.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.WorkforceIdentityBasedOAuth2ClientID workforce_identity_based_oauth2_client_id = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedOAuth2ClientID|null
     */
    public function getWorkforceIdentityBasedOauth2ClientId()
    {
        return $this->workforce_identity_based_oauth2_client_id;
    }

    public function hasWorkforceIdentityBasedOauth2ClientId()
    {
        return isset($this->workforce_identity_based_oauth2_client_id);
    }

    public function clearWorkforceIdentityBasedOauth2ClientId()
    {
        unset($this->workforce_identity_based_oauth2_client_id);
    }

    /**
     * Output only. The OAuth client IDs for both types of user i.e. 1p and 3p.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.WorkforceIdentityBasedOAuth2ClientID workforce_identity_based_oauth2_client_id = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedOAuth2ClientID $var
     * @return $this
     */
    public function setWorkforceIdentityBasedOauth2ClientId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\WorkforceIdentityBasedOAuth2ClientID::class);
        $this->workforce_identity_based_oauth2_client_id = $var;

        return $this;
    }

    /**
     * Output only. The hostname or ip address of the exposed AGM endpoints, used
     * by BAs to connect to BA proxy.
     *
     * Generated from protobuf field <code>repeated string ba_proxy_uri = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBaProxyUri()
    {
        return $this->ba_proxy_uri;
    }

    /**
     * Output only. The hostname or ip address of the exposed AGM endpoints, used
     * by BAs to connect to BA proxy.
     *
     * Generated from protobuf field <code>repeated string ba_proxy_uri = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBaProxyUri($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ba_proxy_uri = $arr;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    public function hasSatisfiesPzs()
    {
        return isset($this->satisfies_pzs);
    }

    public function clearSatisfiesPzs()
    {
        unset($this->satisfies_pzs);
    }

    /**
     * Returns the unboxed value from <code>getSatisfiesPzs()</code>

     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getSatisfiesPzsUnwrapped()
    {
        return $this->readWrapperValue("satisfies_pzs");
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setSatisfiesPzsUnwrapped($var)
    {
        $this->writeWrapperValue("satisfies_pzs", $var);
        return $this;}

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

}

