<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/ad_tag_details.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of an ad request to an ad server.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.AdRequest</code>
 */
class AdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ad tag URI processed with integrated macros.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';
    /**
     * The request metadata used to make the ad request.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.RequestMetadata request_metadata = 2;</code>
     */
    protected $request_metadata = null;
    /**
     * The response metadata received from the ad request.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.ResponseMetadata response_metadata = 3;</code>
     */
    protected $response_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           The ad tag URI processed with integrated macros.
     *     @type \Google\Cloud\Video\Stitcher\V1\RequestMetadata $request_metadata
     *           The request metadata used to make the ad request.
     *     @type \Google\Cloud\Video\Stitcher\V1\ResponseMetadata $response_metadata
     *           The response metadata received from the ad request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\AdTagDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The ad tag URI processed with integrated macros.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The ad tag URI processed with integrated macros.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The request metadata used to make the ad request.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.RequestMetadata request_metadata = 2;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\RequestMetadata|null
     */
    public function getRequestMetadata()
    {
        return $this->request_metadata;
    }

    public function hasRequestMetadata()
    {
        return isset($this->request_metadata);
    }

    public function clearRequestMetadata()
    {
        unset($this->request_metadata);
    }

    /**
     * The request metadata used to make the ad request.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.RequestMetadata request_metadata = 2;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\RequestMetadata $var
     * @return $this
     */
    public function setRequestMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\RequestMetadata::class);
        $this->request_metadata = $var;

        return $this;
    }

    /**
     * The response metadata received from the ad request.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.ResponseMetadata response_metadata = 3;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\ResponseMetadata|null
     */
    public function getResponseMetadata()
    {
        return $this->response_metadata;
    }

    public function hasResponseMetadata()
    {
        return isset($this->response_metadata);
    }

    public function clearResponseMetadata()
    {
        unset($this->response_metadata);
    }

    /**
     * The response metadata received from the ad request.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.ResponseMetadata response_metadata = 3;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\ResponseMetadata::class);
        $this->response_metadata = $var;

        return $this;
    }

}

