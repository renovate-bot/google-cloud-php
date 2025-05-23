<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/cross_network_automation.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for CreateServiceConnectionPolicy.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.CreateServiceConnectionPolicyRequest</code>
 */
class CreateServiceConnectionPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource's name of the ServiceConnectionPolicy. ex.
     * projects/123/locations/us-east1
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Resource ID
     * (i.e. 'foo' in
     * '[...]/projects/p/locations/l/serviceConnectionPolicies/foo') See
     * https://google.aip.dev/122#resource-id-segments Unique per location.
     *
     * Generated from protobuf field <code>string service_connection_policy_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_connection_policy_id = '';
    /**
     * Required. Initial values for a new ServiceConnectionPolicies
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.ServiceConnectionPolicy service_connection_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_connection_policy = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string                                                       $parent                    Required. The parent resource's name of the ServiceConnectionPolicy. ex.
     *                                                                                                projects/123/locations/us-east1
     *                                                                                                Please see {@see CrossNetworkAutomationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkConnectivity\V1\ServiceConnectionPolicy $serviceConnectionPolicy   Required. Initial values for a new ServiceConnectionPolicies
     * @param string                                                       $serviceConnectionPolicyId Optional. Resource ID
     *                                                                                                (i.e. 'foo' in
     *                                                                                                '[...]/projects/p/locations/l/serviceConnectionPolicies/foo') See
     *                                                                                                https://google.aip.dev/122#resource-id-segments Unique per location.
     *
     * @return \Google\Cloud\NetworkConnectivity\V1\CreateServiceConnectionPolicyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkConnectivity\V1\ServiceConnectionPolicy $serviceConnectionPolicy, string $serviceConnectionPolicyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setServiceConnectionPolicy($serviceConnectionPolicy)
            ->setServiceConnectionPolicyId($serviceConnectionPolicyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource's name of the ServiceConnectionPolicy. ex.
     *           projects/123/locations/us-east1
     *     @type string $service_connection_policy_id
     *           Optional. Resource ID
     *           (i.e. 'foo' in
     *           '[...]/projects/p/locations/l/serviceConnectionPolicies/foo') See
     *           https://google.aip.dev/122#resource-id-segments Unique per location.
     *     @type \Google\Cloud\NetworkConnectivity\V1\ServiceConnectionPolicy $service_connection_policy
     *           Required. Initial values for a new ServiceConnectionPolicies
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\CrossNetworkAutomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource's name of the ServiceConnectionPolicy. ex.
     * projects/123/locations/us-east1
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource's name of the ServiceConnectionPolicy. ex.
     * projects/123/locations/us-east1
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
     * Optional. Resource ID
     * (i.e. 'foo' in
     * '[...]/projects/p/locations/l/serviceConnectionPolicies/foo') See
     * https://google.aip.dev/122#resource-id-segments Unique per location.
     *
     * Generated from protobuf field <code>string service_connection_policy_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceConnectionPolicyId()
    {
        return $this->service_connection_policy_id;
    }

    /**
     * Optional. Resource ID
     * (i.e. 'foo' in
     * '[...]/projects/p/locations/l/serviceConnectionPolicies/foo') See
     * https://google.aip.dev/122#resource-id-segments Unique per location.
     *
     * Generated from protobuf field <code>string service_connection_policy_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceConnectionPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_connection_policy_id = $var;

        return $this;
    }

    /**
     * Required. Initial values for a new ServiceConnectionPolicies
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.ServiceConnectionPolicy service_connection_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\ServiceConnectionPolicy|null
     */
    public function getServiceConnectionPolicy()
    {
        return $this->service_connection_policy;
    }

    public function hasServiceConnectionPolicy()
    {
        return isset($this->service_connection_policy);
    }

    public function clearServiceConnectionPolicy()
    {
        unset($this->service_connection_policy);
    }

    /**
     * Required. Initial values for a new ServiceConnectionPolicies
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.ServiceConnectionPolicy service_connection_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\ServiceConnectionPolicy $var
     * @return $this
     */
    public function setServiceConnectionPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\ServiceConnectionPolicy::class);
        $this->service_connection_policy = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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

