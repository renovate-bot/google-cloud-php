<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lustre/v1/instance.proto

namespace Google\Cloud\Lustre\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating a Instance
 *
 * Generated from protobuf message <code>google.cloud.lustre.v1.UpdateInstanceRequest</code>
 */
class UpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Specifies the fields to be overwritten in the instance resource
     * by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If no
     * mask is provided then all fields present in the request are
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The resource name of the instance to update, in the format
     * `projects/{projectId}/locations/{location}/instances/{instanceId}`.
     *
     * Generated from protobuf field <code>.google.cloud.lustre.v1.Instance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param \Google\Cloud\Lustre\V1\Instance $instance   Required. The resource name of the instance to update, in the format
     *                                                     `projects/{projectId}/locations/{location}/instances/{instanceId}`.
     * @param \Google\Protobuf\FieldMask       $updateMask Optional. Specifies the fields to be overwritten in the instance resource
     *                                                     by the update.
     *
     *                                                     The fields specified in the update_mask are relative to the resource, not
     *                                                     the full request. A field will be overwritten if it is in the mask. If no
     *                                                     mask is provided then all fields present in the request are
     *                                                     overwritten.
     *
     * @return \Google\Cloud\Lustre\V1\UpdateInstanceRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Lustre\V1\Instance $instance, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setInstance($instance)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Specifies the fields to be overwritten in the instance resource
     *           by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If no
     *           mask is provided then all fields present in the request are
     *           overwritten.
     *     @type \Google\Cloud\Lustre\V1\Instance $instance
     *           Required. The resource name of the instance to update, in the format
     *           `projects/{projectId}/locations/{location}/instances/{instanceId}`.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lustre\V1\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Specifies the fields to be overwritten in the instance resource
     * by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If no
     * mask is provided then all fields present in the request are
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Specifies the fields to be overwritten in the instance resource
     * by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If no
     * mask is provided then all fields present in the request are
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. The resource name of the instance to update, in the format
     * `projects/{projectId}/locations/{location}/instances/{instanceId}`.
     *
     * Generated from protobuf field <code>.google.cloud.lustre.v1.Instance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Lustre\V1\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. The resource name of the instance to update, in the format
     * `projects/{projectId}/locations/{location}/instances/{instanceId}`.
     *
     * Generated from protobuf field <code>.google.cloud.lustre.v1.Instance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Lustre\V1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Lustre\V1\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
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

