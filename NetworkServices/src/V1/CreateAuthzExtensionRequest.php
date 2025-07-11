<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/dep.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a `AuthzExtension` resource.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateAuthzExtensionRequest</code>
 */
class CreateAuthzExtensionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the `AuthzExtension` resource. Must
     * be in the format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. User-provided ID of the `AuthzExtension` resource to be
     * created.
     *
     * Generated from protobuf field <code>string authz_extension_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $authz_extension_id = '';
    /**
     * Required. `AuthzExtension` resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.AuthzExtension authz_extension = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $authz_extension = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server ignores the second request This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                                          $parent           Required. The parent resource of the `AuthzExtension` resource. Must
     *                                                                          be in the format `projects/{project}/locations/{location}`. Please see
     *                                                                          {@see DepServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkServices\V1\AuthzExtension $authzExtension   Required. `AuthzExtension` resource to be created.
     * @param string                                          $authzExtensionId Required. User-provided ID of the `AuthzExtension` resource to be
     *                                                                          created.
     *
     * @return \Google\Cloud\NetworkServices\V1\CreateAuthzExtensionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkServices\V1\AuthzExtension $authzExtension, string $authzExtensionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAuthzExtension($authzExtension)
            ->setAuthzExtensionId($authzExtensionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the `AuthzExtension` resource. Must
     *           be in the format `projects/{project}/locations/{location}`.
     *     @type string $authz_extension_id
     *           Required. User-provided ID of the `AuthzExtension` resource to be
     *           created.
     *     @type \Google\Cloud\NetworkServices\V1\AuthzExtension $authz_extension
     *           Required. `AuthzExtension` resource to be created.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server can ignore
     *           the request if it has already been completed. The server guarantees
     *           that for 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server ignores the second request This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\Dep::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the `AuthzExtension` resource. Must
     * be in the format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the `AuthzExtension` resource. Must
     * be in the format `projects/{project}/locations/{location}`.
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
     * Required. User-provided ID of the `AuthzExtension` resource to be
     * created.
     *
     * Generated from protobuf field <code>string authz_extension_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAuthzExtensionId()
    {
        return $this->authz_extension_id;
    }

    /**
     * Required. User-provided ID of the `AuthzExtension` resource to be
     * created.
     *
     * Generated from protobuf field <code>string authz_extension_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAuthzExtensionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->authz_extension_id = $var;

        return $this;
    }

    /**
     * Required. `AuthzExtension` resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.AuthzExtension authz_extension = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\AuthzExtension|null
     */
    public function getAuthzExtension()
    {
        return $this->authz_extension;
    }

    public function hasAuthzExtension()
    {
        return isset($this->authz_extension);
    }

    public function clearAuthzExtension()
    {
        unset($this->authz_extension);
    }

    /**
     * Required. `AuthzExtension` resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.AuthzExtension authz_extension = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\AuthzExtension $var
     * @return $this
     */
    public function setAuthzExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\AuthzExtension::class);
        $this->authz_extension = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server ignores the second request This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server ignores the second request This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

