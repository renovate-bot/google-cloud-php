<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Preprocessing configurations.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.PreprocessingConfig</code>
 */
class PreprocessingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Audio audio = 1;</code>
     */
    protected $audio = null;
    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Crop crop = 2;</code>
     */
    protected $crop = null;
    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Pad pad = 3;</code>
     */
    protected $pad = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Audio $audio
     *           Audio preprocessing configuration.
     *     @type \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Crop $crop
     *           Specify the video cropping configuration.
     *     @type \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Pad $pad
     *           Specify the video pad filter configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Outputs::initOnce();
        parent::__construct($data);
    }

    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Audio audio = 1;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Audio|null
     */
    public function getAudio()
    {
        return $this->audio;
    }

    public function hasAudio()
    {
        return isset($this->audio);
    }

    public function clearAudio()
    {
        unset($this->audio);
    }

    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Audio audio = 1;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Audio $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Audio::class);
        $this->audio = $var;

        return $this;
    }

    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Crop crop = 2;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Crop|null
     */
    public function getCrop()
    {
        return $this->crop;
    }

    public function hasCrop()
    {
        return isset($this->crop);
    }

    public function clearCrop()
    {
        unset($this->crop);
    }

    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Crop crop = 2;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Crop $var
     * @return $this
     */
    public function setCrop($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Crop::class);
        $this->crop = $var;

        return $this;
    }

    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Pad pad = 3;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Pad|null
     */
    public function getPad()
    {
        return $this->pad;
    }

    public function hasPad()
    {
        return isset($this->pad);
    }

    public function clearPad()
    {
        unset($this->pad);
    }

    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.PreprocessingConfig.Pad pad = 3;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Pad $var
     * @return $this
     */
    public function setPad($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\PreprocessingConfig\Pad::class);
        $this->pad = $var;

        return $this;
    }

}

