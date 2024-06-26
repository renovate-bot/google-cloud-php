<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [VmwareEngine.ListPrivateConnectionPeeringRoutes][google.cloud.vmwareengine.v1.VmwareEngine.ListPrivateConnectionPeeringRoutes]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.ListPrivateConnectionPeeringRoutesResponse</code>
 */
class ListPrivateConnectionPeeringRoutesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of peering routes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.PeeringRoute peering_routes = 1;</code>
     */
    private $peering_routes;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VmwareEngine\V1\PeeringRoute>|\Google\Protobuf\Internal\RepeatedField $peering_routes
     *           A list of peering routes.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of peering routes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.PeeringRoute peering_routes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeeringRoutes()
    {
        return $this->peering_routes;
    }

    /**
     * A list of peering routes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.PeeringRoute peering_routes = 1;</code>
     * @param array<\Google\Cloud\VmwareEngine\V1\PeeringRoute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeeringRoutes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\PeeringRoute::class);
        $this->peering_routes = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

