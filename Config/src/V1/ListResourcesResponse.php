<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response to a 'ListResources' call. Contains a list of Resources.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.ListResourcesResponse</code>
 */
class ListResourcesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of [Resources][google.cloud.config.v1.Resource].
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.Resource resources = 1;</code>
     */
    private $resources;
    /**
     * A token to request the next page of resources from the 'ListResources'
     * method. The value of an empty string means that there are no more resources
     * to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Config\V1\Resource>|\Google\Protobuf\Internal\RepeatedField $resources
     *           List of [Resources][google.cloud.config.v1.Resource].
     *     @type string $next_page_token
     *           A token to request the next page of resources from the 'ListResources'
     *           method. The value of an empty string means that there are no more resources
     *           to return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * List of [Resources][google.cloud.config.v1.Resource].
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.Resource resources = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * List of [Resources][google.cloud.config.v1.Resource].
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.Resource resources = 1;</code>
     * @param array<\Google\Cloud\Config\V1\Resource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Config\V1\Resource::class);
        $this->resources = $arr;

        return $this;
    }

    /**
     * A token to request the next page of resources from the 'ListResources'
     * method. The value of an empty string means that there are no more resources
     * to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to request the next page of resources from the 'ListResources'
     * method. The value of an empty string means that there are no more resources
     * to return.
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

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

