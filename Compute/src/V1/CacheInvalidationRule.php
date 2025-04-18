<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.CacheInvalidationRule</code>
 */
class CacheInvalidationRule extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of cache tags used to identify cached objects. - Cache tags are specified when the response is first cached, by setting the `Cache-Tag` response header at the origin. - Multiple cache tags in the same invalidation request are treated as Boolean `OR` - for example, `tag1 OR tag2 OR tag3`. - If other fields are also specified, these are treated as Boolean `AND` with any tags. Up to 10 tags can be specified in a single invalidation request.
     *
     * Generated from protobuf field <code>repeated string cache_tags = 29073078;</code>
     */
    private $cache_tags;
    /**
     * If set, this invalidation rule will only apply to requests with a Host header matching host.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     */
    private $host = null;
    /**
     * Generated from protobuf field <code>optional string path = 3433509;</code>
     */
    private $path = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $cache_tags
     *           A list of cache tags used to identify cached objects. - Cache tags are specified when the response is first cached, by setting the `Cache-Tag` response header at the origin. - Multiple cache tags in the same invalidation request are treated as Boolean `OR` - for example, `tag1 OR tag2 OR tag3`. - If other fields are also specified, these are treated as Boolean `AND` with any tags. Up to 10 tags can be specified in a single invalidation request.
     *     @type string $host
     *           If set, this invalidation rule will only apply to requests with a Host header matching host.
     *     @type string $path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of cache tags used to identify cached objects. - Cache tags are specified when the response is first cached, by setting the `Cache-Tag` response header at the origin. - Multiple cache tags in the same invalidation request are treated as Boolean `OR` - for example, `tag1 OR tag2 OR tag3`. - If other fields are also specified, these are treated as Boolean `AND` with any tags. Up to 10 tags can be specified in a single invalidation request.
     *
     * Generated from protobuf field <code>repeated string cache_tags = 29073078;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCacheTags()
    {
        return $this->cache_tags;
    }

    /**
     * A list of cache tags used to identify cached objects. - Cache tags are specified when the response is first cached, by setting the `Cache-Tag` response header at the origin. - Multiple cache tags in the same invalidation request are treated as Boolean `OR` - for example, `tag1 OR tag2 OR tag3`. - If other fields are also specified, these are treated as Boolean `AND` with any tags. Up to 10 tags can be specified in a single invalidation request.
     *
     * Generated from protobuf field <code>repeated string cache_tags = 29073078;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCacheTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cache_tags = $arr;

        return $this;
    }

    /**
     * If set, this invalidation rule will only apply to requests with a Host header matching host.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @return string
     */
    public function getHost()
    {
        return isset($this->host) ? $this->host : '';
    }

    public function hasHost()
    {
        return isset($this->host);
    }

    public function clearHost()
    {
        unset($this->host);
    }

    /**
     * If set, this invalidation rule will only apply to requests with a Host header matching host.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string path = 3433509;</code>
     * @return string
     */
    public function getPath()
    {
        return isset($this->path) ? $this->path : '';
    }

    public function hasPath()
    {
        return isset($this->path);
    }

    public function clearPath()
    {
        unset($this->path);
    }

    /**
     * Generated from protobuf field <code>optional string path = 3433509;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

