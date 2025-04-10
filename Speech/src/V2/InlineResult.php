<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Final results returned inline in the recognition response.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.InlineResult</code>
 */
class InlineResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The transcript for the audio file.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.BatchRecognizeResults transcript = 1;</code>
     */
    protected $transcript = null;
    /**
     * The transcript for the audio file as VTT formatted captions. This is
     * populated only when `VTT` output is requested.
     *
     * Generated from protobuf field <code>string vtt_captions = 2;</code>
     */
    protected $vtt_captions = '';
    /**
     * The transcript for the audio file as SRT formatted captions. This is
     * populated only when `SRT` output is requested.
     *
     * Generated from protobuf field <code>string srt_captions = 3;</code>
     */
    protected $srt_captions = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V2\BatchRecognizeResults $transcript
     *           The transcript for the audio file.
     *     @type string $vtt_captions
     *           The transcript for the audio file as VTT formatted captions. This is
     *           populated only when `VTT` output is requested.
     *     @type string $srt_captions
     *           The transcript for the audio file as SRT formatted captions. This is
     *           populated only when `SRT` output is requested.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * The transcript for the audio file.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.BatchRecognizeResults transcript = 1;</code>
     * @return \Google\Cloud\Speech\V2\BatchRecognizeResults|null
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    public function hasTranscript()
    {
        return isset($this->transcript);
    }

    public function clearTranscript()
    {
        unset($this->transcript);
    }

    /**
     * The transcript for the audio file.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.BatchRecognizeResults transcript = 1;</code>
     * @param \Google\Cloud\Speech\V2\BatchRecognizeResults $var
     * @return $this
     */
    public function setTranscript($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\BatchRecognizeResults::class);
        $this->transcript = $var;

        return $this;
    }

    /**
     * The transcript for the audio file as VTT formatted captions. This is
     * populated only when `VTT` output is requested.
     *
     * Generated from protobuf field <code>string vtt_captions = 2;</code>
     * @return string
     */
    public function getVttCaptions()
    {
        return $this->vtt_captions;
    }

    /**
     * The transcript for the audio file as VTT formatted captions. This is
     * populated only when `VTT` output is requested.
     *
     * Generated from protobuf field <code>string vtt_captions = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVttCaptions($var)
    {
        GPBUtil::checkString($var, True);
        $this->vtt_captions = $var;

        return $this;
    }

    /**
     * The transcript for the audio file as SRT formatted captions. This is
     * populated only when `SRT` output is requested.
     *
     * Generated from protobuf field <code>string srt_captions = 3;</code>
     * @return string
     */
    public function getSrtCaptions()
    {
        return $this->srt_captions;
    }

    /**
     * The transcript for the audio file as SRT formatted captions. This is
     * populated only when `SRT` output is requested.
     *
     * Generated from protobuf field <code>string srt_captions = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSrtCaptions($var)
    {
        GPBUtil::checkString($var, True);
        $this->srt_captions = $var;

        return $this;
    }

}

