<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.updateSlate.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.UpdateSlateRequest</code>
 */
class UpdateSlateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource with updated fields.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.Slate slate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $slate = null;
    /**
     * Required. The update mask which specifies fields which should be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Video\Stitcher\V1\Slate $slate      Required. The resource with updated fields.
     * @param \Google\Protobuf\FieldMask            $updateMask Required. The update mask which specifies fields which should be updated.
     *
     * @return \Google\Cloud\Video\Stitcher\V1\UpdateSlateRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Video\Stitcher\V1\Slate $slate, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSlate($slate)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Stitcher\V1\Slate $slate
     *           Required. The resource with updated fields.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask which specifies fields which should be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource with updated fields.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.Slate slate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The resource with updated fields.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.Slate slate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The update mask which specifies fields which should be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The update mask which specifies fields which should be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

