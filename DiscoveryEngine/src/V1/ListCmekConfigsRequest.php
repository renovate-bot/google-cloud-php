<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/cmek_config_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CmekConfigService.ListCmekConfigs][google.cloud.discoveryengine.v1.CmekConfigService.ListCmekConfigs]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ListCmekConfigsRequest</code>
 */
class ListCmekConfigsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location resource name, such as
     * `projects/{project}/locations/{location}`.
     * If the caller does not have permission to list
     * [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig]s under this
     * location, regardless of whether or not a CmekConfig exists, a
     * PERMISSION_DENIED error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';

    /**
     * @param string $parent Required. The parent location resource name, such as
     *                       `projects/{project}/locations/{location}`.
     *
     *                       If the caller does not have permission to list
     *                       [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig]s under this
     *                       location, regardless of whether or not a CmekConfig exists, a
     *                       PERMISSION_DENIED error is returned. Please see
     *                       {@see CmekConfigServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1\ListCmekConfigsRequest
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
     *           Required. The parent location resource name, such as
     *           `projects/{project}/locations/{location}`.
     *           If the caller does not have permission to list
     *           [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig]s under this
     *           location, regardless of whether or not a CmekConfig exists, a
     *           PERMISSION_DENIED error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\CmekConfigService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location resource name, such as
     * `projects/{project}/locations/{location}`.
     * If the caller does not have permission to list
     * [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig]s under this
     * location, regardless of whether or not a CmekConfig exists, a
     * PERMISSION_DENIED error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent location resource name, such as
     * `projects/{project}/locations/{location}`.
     * If the caller does not have permission to list
     * [CmekConfig][google.cloud.discoveryengine.v1.CmekConfig]s under this
     * location, regardless of whether or not a CmekConfig exists, a
     * PERMISSION_DENIED error is returned.
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

}

