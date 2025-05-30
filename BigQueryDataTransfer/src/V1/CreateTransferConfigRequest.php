<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a data transfer configuration. If new credentials are
 * needed for this transfer configuration, authorization info must be provided.
 * If authorization info is provided, the transfer configuration will be
 * associated with the user id corresponding to the authorization info.
 * Otherwise, the transfer configuration will be associated with the calling
 * user.
 * When using a cross project service account for creating a transfer config,
 * you must enable cross project service account usage. For more information,
 * see [Disable attachment of service accounts to resources in other
 * projects](https://cloud.google.com/resource-manager/docs/organization-policy/restricting-service-accounts#disable_cross_project_service_accounts).
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.CreateTransferConfigRequest</code>
 */
class CreateTransferConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The BigQuery project id where the transfer configuration should
     * be created. Must be in the format
     * projects/{project_id}/locations/{location_id} or projects/{project_id}. If
     * specified location and location of the destination bigquery dataset do not
     * match - the request will fail.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Data transfer configuration to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $transfer_config = null;
    /**
     * Deprecated: Authorization code was required when
     * `transferConfig.dataSourceId` is 'youtube_channel' but it is no longer used
     * in any data sources. Use `version_info` instead.
     * Optional OAuth2 authorization code to use with this transfer configuration.
     * This is required only if `transferConfig.dataSourceId` is 'youtube_channel'
     * and new credentials are needed, as indicated by `CheckValidCreds`. In order
     * to obtain authorization_code, make a request to the following URL:
     * <pre class="prettyprint" suppresswarning="true">
     * https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=authorization_code&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     * </pre>
     * * The <var>client_id</var> is the OAuth client_id of the data source as
     * returned by ListDataSources method.
     * * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     * method.
     * Note that this should not be set when `service_account_name` is used to
     * create the transfer config.
     *
     * Generated from protobuf field <code>string authorization_code = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $authorization_code = '';
    /**
     * Optional version info. This parameter replaces `authorization_code` which
     * is no longer used in any data sources. This is required only if
     * `transferConfig.dataSourceId` is 'youtube_channel' *or* new credentials
     * are needed, as indicated by `CheckValidCreds`. In order to obtain version
     * info, make a request to the following URL:
     * <pre class="prettyprint" suppresswarning="true">
     * https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=version_info&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     * </pre>
     * * The <var>client_id</var> is the OAuth client_id of the data source as
     * returned by ListDataSources method.
     * * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     * method.
     * Note that this should not be set when `service_account_name` is used to
     * create the transfer config.
     *
     * Generated from protobuf field <code>string version_info = 5;</code>
     */
    protected $version_info = '';
    /**
     * Optional service account email. If this field is set, the transfer config
     * will be created with this service account's credentials. It requires that
     * the requesting user calling this API has permissions to act as this service
     * account.
     * Note that not all data sources support service account credentials when
     * creating a transfer config. For the latest list of data sources, read about
     * [using service
     * accounts](https://cloud.google.com/bigquery-transfer/docs/use-service-accounts).
     *
     * Generated from protobuf field <code>string service_account_name = 6;</code>
     */
    protected $service_account_name = '';

    /**
     * @param string                                                $parent         Required. The BigQuery project id where the transfer configuration should
     *                                                                              be created. Must be in the format
     *                                                                              projects/{project_id}/locations/{location_id} or projects/{project_id}. If
     *                                                                              specified location and location of the destination bigquery dataset do not
     *                                                                              match - the request will fail. Please see
     *                                                                              {@see DataTransferServiceClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig $transferConfig Required. Data transfer configuration to create.
     *
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\CreateTransferConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig $transferConfig): self
    {
        return (new self())
            ->setParent($parent)
            ->setTransferConfig($transferConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The BigQuery project id where the transfer configuration should
     *           be created. Must be in the format
     *           projects/{project_id}/locations/{location_id} or projects/{project_id}. If
     *           specified location and location of the destination bigquery dataset do not
     *           match - the request will fail.
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig $transfer_config
     *           Required. Data transfer configuration to create.
     *     @type string $authorization_code
     *           Deprecated: Authorization code was required when
     *           `transferConfig.dataSourceId` is 'youtube_channel' but it is no longer used
     *           in any data sources. Use `version_info` instead.
     *           Optional OAuth2 authorization code to use with this transfer configuration.
     *           This is required only if `transferConfig.dataSourceId` is 'youtube_channel'
     *           and new credentials are needed, as indicated by `CheckValidCreds`. In order
     *           to obtain authorization_code, make a request to the following URL:
     *           <pre class="prettyprint" suppresswarning="true">
     *           https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=authorization_code&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     *           </pre>
     *           * The <var>client_id</var> is the OAuth client_id of the data source as
     *           returned by ListDataSources method.
     *           * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     *           method.
     *           Note that this should not be set when `service_account_name` is used to
     *           create the transfer config.
     *     @type string $version_info
     *           Optional version info. This parameter replaces `authorization_code` which
     *           is no longer used in any data sources. This is required only if
     *           `transferConfig.dataSourceId` is 'youtube_channel' *or* new credentials
     *           are needed, as indicated by `CheckValidCreds`. In order to obtain version
     *           info, make a request to the following URL:
     *           <pre class="prettyprint" suppresswarning="true">
     *           https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=version_info&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     *           </pre>
     *           * The <var>client_id</var> is the OAuth client_id of the data source as
     *           returned by ListDataSources method.
     *           * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     *           method.
     *           Note that this should not be set when `service_account_name` is used to
     *           create the transfer config.
     *     @type string $service_account_name
     *           Optional service account email. If this field is set, the transfer config
     *           will be created with this service account's credentials. It requires that
     *           the requesting user calling this API has permissions to act as this service
     *           account.
     *           Note that not all data sources support service account credentials when
     *           creating a transfer config. For the latest list of data sources, read about
     *           [using service
     *           accounts](https://cloud.google.com/bigquery-transfer/docs/use-service-accounts).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The BigQuery project id where the transfer configuration should
     * be created. Must be in the format
     * projects/{project_id}/locations/{location_id} or projects/{project_id}. If
     * specified location and location of the destination bigquery dataset do not
     * match - the request will fail.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The BigQuery project id where the transfer configuration should
     * be created. Must be in the format
     * projects/{project_id}/locations/{location_id} or projects/{project_id}. If
     * specified location and location of the destination bigquery dataset do not
     * match - the request will fail.
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
     * Required. Data transfer configuration to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig|null
     */
    public function getTransferConfig()
    {
        return $this->transfer_config;
    }

    public function hasTransferConfig()
    {
        return isset($this->transfer_config);
    }

    public function clearTransferConfig()
    {
        unset($this->transfer_config);
    }

    /**
     * Required. Data transfer configuration to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig $var
     * @return $this
     */
    public function setTransferConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig::class);
        $this->transfer_config = $var;

        return $this;
    }

    /**
     * Deprecated: Authorization code was required when
     * `transferConfig.dataSourceId` is 'youtube_channel' but it is no longer used
     * in any data sources. Use `version_info` instead.
     * Optional OAuth2 authorization code to use with this transfer configuration.
     * This is required only if `transferConfig.dataSourceId` is 'youtube_channel'
     * and new credentials are needed, as indicated by `CheckValidCreds`. In order
     * to obtain authorization_code, make a request to the following URL:
     * <pre class="prettyprint" suppresswarning="true">
     * https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=authorization_code&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     * </pre>
     * * The <var>client_id</var> is the OAuth client_id of the data source as
     * returned by ListDataSources method.
     * * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     * method.
     * Note that this should not be set when `service_account_name` is used to
     * create the transfer config.
     *
     * Generated from protobuf field <code>string authorization_code = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getAuthorizationCode()
    {
        if ($this->authorization_code !== '') {
            @trigger_error('authorization_code is deprecated.', E_USER_DEPRECATED);
        }
        return $this->authorization_code;
    }

    /**
     * Deprecated: Authorization code was required when
     * `transferConfig.dataSourceId` is 'youtube_channel' but it is no longer used
     * in any data sources. Use `version_info` instead.
     * Optional OAuth2 authorization code to use with this transfer configuration.
     * This is required only if `transferConfig.dataSourceId` is 'youtube_channel'
     * and new credentials are needed, as indicated by `CheckValidCreds`. In order
     * to obtain authorization_code, make a request to the following URL:
     * <pre class="prettyprint" suppresswarning="true">
     * https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=authorization_code&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     * </pre>
     * * The <var>client_id</var> is the OAuth client_id of the data source as
     * returned by ListDataSources method.
     * * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     * method.
     * Note that this should not be set when `service_account_name` is used to
     * create the transfer config.
     *
     * Generated from protobuf field <code>string authorization_code = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setAuthorizationCode($var)
    {
        @trigger_error('authorization_code is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->authorization_code = $var;

        return $this;
    }

    /**
     * Optional version info. This parameter replaces `authorization_code` which
     * is no longer used in any data sources. This is required only if
     * `transferConfig.dataSourceId` is 'youtube_channel' *or* new credentials
     * are needed, as indicated by `CheckValidCreds`. In order to obtain version
     * info, make a request to the following URL:
     * <pre class="prettyprint" suppresswarning="true">
     * https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=version_info&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     * </pre>
     * * The <var>client_id</var> is the OAuth client_id of the data source as
     * returned by ListDataSources method.
     * * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     * method.
     * Note that this should not be set when `service_account_name` is used to
     * create the transfer config.
     *
     * Generated from protobuf field <code>string version_info = 5;</code>
     * @return string
     */
    public function getVersionInfo()
    {
        return $this->version_info;
    }

    /**
     * Optional version info. This parameter replaces `authorization_code` which
     * is no longer used in any data sources. This is required only if
     * `transferConfig.dataSourceId` is 'youtube_channel' *or* new credentials
     * are needed, as indicated by `CheckValidCreds`. In order to obtain version
     * info, make a request to the following URL:
     * <pre class="prettyprint" suppresswarning="true">
     * https://bigquery.cloud.google.com/datatransfer/oauthz/auth?redirect_uri=urn:ietf:wg:oauth:2.0:oob&response_type=version_info&client_id=<var>client_id</var>&scope=<var>data_source_scopes</var>
     * </pre>
     * * The <var>client_id</var> is the OAuth client_id of the data source as
     * returned by ListDataSources method.
     * * <var>data_source_scopes</var> are the scopes returned by ListDataSources
     * method.
     * Note that this should not be set when `service_account_name` is used to
     * create the transfer config.
     *
     * Generated from protobuf field <code>string version_info = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_info = $var;

        return $this;
    }

    /**
     * Optional service account email. If this field is set, the transfer config
     * will be created with this service account's credentials. It requires that
     * the requesting user calling this API has permissions to act as this service
     * account.
     * Note that not all data sources support service account credentials when
     * creating a transfer config. For the latest list of data sources, read about
     * [using service
     * accounts](https://cloud.google.com/bigquery-transfer/docs/use-service-accounts).
     *
     * Generated from protobuf field <code>string service_account_name = 6;</code>
     * @return string
     */
    public function getServiceAccountName()
    {
        return $this->service_account_name;
    }

    /**
     * Optional service account email. If this field is set, the transfer config
     * will be created with this service account's credentials. It requires that
     * the requesting user calling this API has permissions to act as this service
     * account.
     * Note that not all data sources support service account credentials when
     * creating a transfer config. For the latest list of data sources, read about
     * [using service
     * accounts](https://cloud.google.com/bigquery-transfer/docs/use-service-accounts).
     *
     * Generated from protobuf field <code>string service_account_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_name = $var;

        return $this;
    }

}

