<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for VideoStitcher.ListCdnKeys.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.ListCdnKeysResponse</code>
 */
class ListCdnKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of CDN keys.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.CdnKey cdn_keys = 1;</code>
     */
    private $cdn_keys;
    /**
     * A token identifying a page of results the server should return.
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
     *     @type array<\Google\Cloud\Video\Stitcher\V1\CdnKey>|\Google\Protobuf\Internal\RepeatedField $cdn_keys
     *           List of CDN keys.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of CDN keys.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.CdnKey cdn_keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCdnKeys()
    {
        return $this->cdn_keys;
    }

    /**
     * List of CDN keys.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.CdnKey cdn_keys = 1;</code>
     * @param array<\Google\Cloud\Video\Stitcher\V1\CdnKey>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCdnKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Stitcher\V1\CdnKey::class);
        $this->cdn_keys = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
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

