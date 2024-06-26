<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.createSlate.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.CreateSlateRequest</code>
 */
class CreateSlateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project in which the slate should be created, in the form of
     * `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The unique identifier for the slate.
     * This value should conform to RFC-1034, which restricts to
     * lower-case letters, numbers, and hyphen, with the first character a
     * letter, the last a letter or a number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string slate_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $slate_id = '';
    /**
     * Required. The slate to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.Slate slate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $slate = null;
    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';

    /**
     * @param string                                $parent  Required. The project in which the slate should be created, in the form of
     *                                                       `projects/{project_number}/locations/{location}`. Please see
     *                                                       {@see VideoStitcherServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Video\Stitcher\V1\Slate $slate   Required. The slate to create.
     * @param string                                $slateId Required. The unique identifier for the slate.
     *                                                       This value should conform to RFC-1034, which restricts to
     *                                                       lower-case letters, numbers, and hyphen, with the first character a
     *                                                       letter, the last a letter or a number, and a 63 character maximum.
     *
     * @return \Google\Cloud\Video\Stitcher\V1\CreateSlateRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Video\Stitcher\V1\Slate $slate, string $slateId): self
    {
        return (new self())
            ->setParent($parent)
            ->setSlate($slate)
            ->setSlateId($slateId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project in which the slate should be created, in the form of
     *           `projects/{project_number}/locations/{location}`.
     *     @type string $slate_id
     *           Required. The unique identifier for the slate.
     *           This value should conform to RFC-1034, which restricts to
     *           lower-case letters, numbers, and hyphen, with the first character a
     *           letter, the last a letter or a number, and a 63 character maximum.
     *     @type \Google\Cloud\Video\Stitcher\V1\Slate $slate
     *           Required. The slate to create.
     *     @type string $request_id
     *           A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported `(00000000-0000-0000-0000-000000000000)`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project in which the slate should be created, in the form of
     * `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project in which the slate should be created, in the form of
     * `projects/{project_number}/locations/{location}`.
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
     * Required. The unique identifier for the slate.
     * This value should conform to RFC-1034, which restricts to
     * lower-case letters, numbers, and hyphen, with the first character a
     * letter, the last a letter or a number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string slate_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSlateId()
    {
        return $this->slate_id;
    }

    /**
     * Required. The unique identifier for the slate.
     * This value should conform to RFC-1034, which restricts to
     * lower-case letters, numbers, and hyphen, with the first character a
     * letter, the last a letter or a number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string slate_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSlateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->slate_id = $var;

        return $this;
    }

    /**
     * Required. The slate to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.Slate slate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\Stitcher\V1\Slate|null
     */
    public function getSlate()
    {
        return $this->slate;
    }

    public function hasSlate()
    {
        return isset($this->slate);
    }

    public function clearSlate()
    {
        unset($this->slate);
    }

    /**
     * Required. The slate to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.Slate slate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\Stitcher\V1\Slate $var
     * @return $this
     */
    public function setSlate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\Slate::class);
        $this->slate = $var;

        return $this;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
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

