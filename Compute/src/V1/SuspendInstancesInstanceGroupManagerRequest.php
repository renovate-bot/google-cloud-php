<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for InstanceGroupManagers.SuspendInstances. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SuspendInstancesInstanceGroupManagerRequest</code>
 */
class SuspendInstancesInstanceGroupManagerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the managed instance group.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_group_manager = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagersSuspendInstancesRequest instance_group_managers_suspend_instances_request_resource = 46679761 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_group_managers_suspend_instances_request_resource = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * The name of the zone where the managed instance group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     */
    private $zone = '';

    /**
     * @param string                                                                $project                                              Project ID for this request.
     * @param string                                                                $zone                                                 The name of the zone where the managed instance group is located.
     * @param string                                                                $instanceGroupManager                                 The name of the managed instance group.
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagersSuspendInstancesRequest $instanceGroupManagersSuspendInstancesRequestResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\SuspendInstancesInstanceGroupManagerRequest
     *
     * @experimental
     */
    public static function build(string $project, string $zone, string $instanceGroupManager, \Google\Cloud\Compute\V1\InstanceGroupManagersSuspendInstancesRequest $instanceGroupManagersSuspendInstancesRequestResource): self
    {
        return (new self())
            ->setProject($project)
            ->setZone($zone)
            ->setInstanceGroupManager($instanceGroupManager)
            ->setInstanceGroupManagersSuspendInstancesRequestResource($instanceGroupManagersSuspendInstancesRequestResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_group_manager
     *           The name of the managed instance group.
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagersSuspendInstancesRequest $instance_group_managers_suspend_instances_request_resource
     *           The body resource for this request
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type string $zone
     *           The name of the zone where the managed instance group is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the managed instance group.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceGroupManager()
    {
        return $this->instance_group_manager;
    }

    /**
     * The name of the managed instance group.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroupManager($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group_manager = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagersSuspendInstancesRequest instance_group_managers_suspend_instances_request_resource = 46679761 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagersSuspendInstancesRequest|null
     */
    public function getInstanceGroupManagersSuspendInstancesRequestResource()
    {
        return $this->instance_group_managers_suspend_instances_request_resource;
    }

    public function hasInstanceGroupManagersSuspendInstancesRequestResource()
    {
        return isset($this->instance_group_managers_suspend_instances_request_resource);
    }

    public function clearInstanceGroupManagersSuspendInstancesRequestResource()
    {
        unset($this->instance_group_managers_suspend_instances_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagersSuspendInstancesRequest instance_group_managers_suspend_instances_request_resource = 46679761 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagersSuspendInstancesRequest $var
     * @return $this
     */
    public function setInstanceGroupManagersSuspendInstancesRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceGroupManagersSuspendInstancesRequest::class);
        $this->instance_group_managers_suspend_instances_request_resource = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The name of the zone where the managed instance group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone where the managed instance group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

