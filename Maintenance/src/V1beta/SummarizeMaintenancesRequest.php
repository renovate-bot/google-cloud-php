<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/maintenance/api/v1beta/maintenance_service.proto

namespace Google\Cloud\Maintenance\Api\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for SummarizeMaintenances custom method.
 *
 * Generated from protobuf message <code>google.cloud.maintenance.api.v1beta.SummarizeMaintenancesRequest</code>
 */
class SummarizeMaintenancesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent of the resource maintenance.
     * eg. `projects/123/locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 10006 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of resource maintenances to send per page. The default
     * page size is 20 and the maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 10505;</code>
     */
    protected $page_size = 0;
    /**
     * The page token: If the next_page_token from a previous response
     * is provided, this request will send the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 10506;</code>
     */
    protected $page_token = '';
    /**
     * Filter the list as specified in https://google.aip.dev/160.
     * Supported fields include:
     * - state
     * - resource.location
     * - resource.resourceName
     * - resource.type
     * - maintenance.maintenanceName
     * - maintenanceStartTime
     * - maintenanceCompleteTime
     * Examples:
     * - state="SCHEDULED"
     * - resource.location="us-central1-c"
     * - resource.resourceName=~"*&#47;instance-20241212-211259"
     * - maintenanceStartTime>"2000-10-11T20:44:51Z"
     * - state="SCHEDULED" OR resource.type="compute.googleapis.com/Instance"
     * - maintenance.maitenanceName="eb3b709c-9ca1-5472-9fb6-800a3849eda1" AND
     * maintenanceCompleteTime>"2000-10-11T20:44:51Z"
     *
     * Generated from protobuf field <code>string filter = 10507;</code>
     */
    protected $filter = '';
    /**
     * Order results as specified in https://google.aip.dev/132.
     *
     * Generated from protobuf field <code>string order_by = 10508;</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The parent of the resource maintenance.
     *                       eg. `projects/123/locations/*`
     *                       Please see {@see MaintenanceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Maintenance\Api\V1beta\SummarizeMaintenancesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent of the resource maintenance.
     *           eg. `projects/123/locations/&#42;`
     *     @type int $page_size
     *           The maximum number of resource maintenances to send per page. The default
     *           page size is 20 and the maximum is 1000.
     *     @type string $page_token
     *           The page token: If the next_page_token from a previous response
     *           is provided, this request will send the subsequent page.
     *     @type string $filter
     *           Filter the list as specified in https://google.aip.dev/160.
     *           Supported fields include:
     *           - state
     *           - resource.location
     *           - resource.resourceName
     *           - resource.type
     *           - maintenance.maintenanceName
     *           - maintenanceStartTime
     *           - maintenanceCompleteTime
     *           Examples:
     *           - state="SCHEDULED"
     *           - resource.location="us-central1-c"
     *           - resource.resourceName=~"*&#47;instance-20241212-211259"
     *           - maintenanceStartTime>"2000-10-11T20:44:51Z"
     *           - state="SCHEDULED" OR resource.type="compute.googleapis.com/Instance"
     *           - maintenance.maitenanceName="eb3b709c-9ca1-5472-9fb6-800a3849eda1" AND
     *           maintenanceCompleteTime>"2000-10-11T20:44:51Z"
     *     @type string $order_by
     *           Order results as specified in https://google.aip.dev/132.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Maintenance\Api\V1Beta\MaintenanceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent of the resource maintenance.
     * eg. `projects/123/locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 10006 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent of the resource maintenance.
     * eg. `projects/123/locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 10006 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * The maximum number of resource maintenances to send per page. The default
     * page size is 20 and the maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 10505;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of resource maintenances to send per page. The default
     * page size is 20 and the maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 10505;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The page token: If the next_page_token from a previous response
     * is provided, this request will send the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 10506;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The page token: If the next_page_token from a previous response
     * is provided, this request will send the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 10506;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Filter the list as specified in https://google.aip.dev/160.
     * Supported fields include:
     * - state
     * - resource.location
     * - resource.resourceName
     * - resource.type
     * - maintenance.maintenanceName
     * - maintenanceStartTime
     * - maintenanceCompleteTime
     * Examples:
     * - state="SCHEDULED"
     * - resource.location="us-central1-c"
     * - resource.resourceName=~"*&#47;instance-20241212-211259"
     * - maintenanceStartTime>"2000-10-11T20:44:51Z"
     * - state="SCHEDULED" OR resource.type="compute.googleapis.com/Instance"
     * - maintenance.maitenanceName="eb3b709c-9ca1-5472-9fb6-800a3849eda1" AND
     * maintenanceCompleteTime>"2000-10-11T20:44:51Z"
     *
     * Generated from protobuf field <code>string filter = 10507;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter the list as specified in https://google.aip.dev/160.
     * Supported fields include:
     * - state
     * - resource.location
     * - resource.resourceName
     * - resource.type
     * - maintenance.maintenanceName
     * - maintenanceStartTime
     * - maintenanceCompleteTime
     * Examples:
     * - state="SCHEDULED"
     * - resource.location="us-central1-c"
     * - resource.resourceName=~"*&#47;instance-20241212-211259"
     * - maintenanceStartTime>"2000-10-11T20:44:51Z"
     * - state="SCHEDULED" OR resource.type="compute.googleapis.com/Instance"
     * - maintenance.maitenanceName="eb3b709c-9ca1-5472-9fb6-800a3849eda1" AND
     * maintenanceCompleteTime>"2000-10-11T20:44:51Z"
     *
     * Generated from protobuf field <code>string filter = 10507;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Order results as specified in https://google.aip.dev/132.
     *
     * Generated from protobuf field <code>string order_by = 10508;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Order results as specified in https://google.aip.dev/132.
     *
     * Generated from protobuf field <code>string order_by = 10508;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

