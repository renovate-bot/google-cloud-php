<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing descendant Event Threat Detection custom
 * modules.
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.ListDescendantEventThreatDetectionCustomModulesRequest</code>
 */
class ListDescendantEventThreatDetectionCustomModulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of parent to list custom modules. Its format is
     * `organizations/{organization}/locations/{location}`,
     * `folders/{folder}/locations/{location}`,
     * or
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of modules to return. The service may return
     * fewer than this value. If unspecified, at most 10 configs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. Name of parent to list custom modules. Its format is
     *                       `organizations/{organization}/locations/{location}`,
     *                       `folders/{folder}/locations/{location}`,
     *                       or
     *                       `projects/{project}/locations/{location}`
     *                       Please see {@see SecurityCenterManagementClient::organizationLocationName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenterManagement\V1\ListDescendantEventThreatDetectionCustomModulesRequest
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
     *           Required. Name of parent to list custom modules. Its format is
     *           `organizations/{organization}/locations/{location}`,
     *           `folders/{folder}/locations/{location}`,
     *           or
     *           `projects/{project}/locations/{location}`
     *     @type int $page_size
     *           Optional. The maximum number of modules to return. The service may return
     *           fewer than this value. If unspecified, at most 10 configs will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           Optional. A token identifying a page of results the server should return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of parent to list custom modules. Its format is
     * `organizations/{organization}/locations/{location}`,
     * `folders/{folder}/locations/{location}`,
     * or
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of parent to list custom modules. Its format is
     * `organizations/{organization}/locations/{location}`,
     * `folders/{folder}/locations/{location}`,
     * or
     * `projects/{project}/locations/{location}`
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
     * Optional. The maximum number of modules to return. The service may return
     * fewer than this value. If unspecified, at most 10 configs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of modules to return. The service may return
     * fewer than this value. If unspecified, at most 10 configs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

