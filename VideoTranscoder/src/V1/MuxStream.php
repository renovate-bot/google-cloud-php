<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Multiplexing settings for output stream.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.MuxStream</code>
 */
class MuxStream extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique key for this multiplexed stream.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    protected $key = '';
    /**
     * The name of the generated file. The default is
     * [MuxStream.key][google.cloud.video.transcoder.v1.MuxStream.key] with the
     * extension suffix corresponding to the
     * [MuxStream.container][google.cloud.video.transcoder.v1.MuxStream.container].
     * Individual segments also have an incremental 10-digit zero-padded suffix
     * starting from 0 before the extension, such as `mux_stream0000000123.ts`.
     *
     * Generated from protobuf field <code>string file_name = 2;</code>
     */
    protected $file_name = '';
    /**
     * The container format. The default is `mp4`
     * Supported streaming formats:
     * - `ts`
     * - `fmp4`- the corresponding file extension is `.m4s`
     * Supported standalone file formats:
     * - `mp4`
     * - `mp3`
     * - `ogg`
     * - `vtt`
     * See also:
     * [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats)
     *
     * Generated from protobuf field <code>string container = 3;</code>
     */
    protected $container = '';
    /**
     * List of
     * [ElementaryStream.key][google.cloud.video.transcoder.v1.ElementaryStream.key]
     * values multiplexed in this stream.
     *
     * Generated from protobuf field <code>repeated string elementary_streams = 4;</code>
     */
    private $elementary_streams;
    /**
     * Segment settings for `ts`, `fmp4` and `vtt`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.SegmentSettings segment_settings = 5;</code>
     */
    protected $segment_settings = null;
    /**
     * Identifier of the encryption configuration to use. If omitted, output will
     * be unencrypted.
     *
     * Generated from protobuf field <code>string encryption_id = 7;</code>
     */
    protected $encryption_id = '';
    protected $container_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           A unique key for this multiplexed stream.
     *     @type string $file_name
     *           The name of the generated file. The default is
     *           [MuxStream.key][google.cloud.video.transcoder.v1.MuxStream.key] with the
     *           extension suffix corresponding to the
     *           [MuxStream.container][google.cloud.video.transcoder.v1.MuxStream.container].
     *           Individual segments also have an incremental 10-digit zero-padded suffix
     *           starting from 0 before the extension, such as `mux_stream0000000123.ts`.
     *     @type string $container
     *           The container format. The default is `mp4`
     *           Supported streaming formats:
     *           - `ts`
     *           - `fmp4`- the corresponding file extension is `.m4s`
     *           Supported standalone file formats:
     *           - `mp4`
     *           - `mp3`
     *           - `ogg`
     *           - `vtt`
     *           See also:
     *           [Supported input and output
     *           formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $elementary_streams
     *           List of
     *           [ElementaryStream.key][google.cloud.video.transcoder.v1.ElementaryStream.key]
     *           values multiplexed in this stream.
     *     @type \Google\Cloud\Video\Transcoder\V1\SegmentSettings $segment_settings
     *           Segment settings for `ts`, `fmp4` and `vtt`.
     *     @type string $encryption_id
     *           Identifier of the encryption configuration to use. If omitted, output will
     *           be unencrypted.
     *     @type \Google\Cloud\Video\Transcoder\V1\MuxStream\Fmp4Config $fmp4
     *           Optional. `fmp4` container configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique key for this multiplexed stream.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * A unique key for this multiplexed stream.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The name of the generated file. The default is
     * [MuxStream.key][google.cloud.video.transcoder.v1.MuxStream.key] with the
     * extension suffix corresponding to the
     * [MuxStream.container][google.cloud.video.transcoder.v1.MuxStream.container].
     * Individual segments also have an incremental 10-digit zero-padded suffix
     * starting from 0 before the extension, such as `mux_stream0000000123.ts`.
     *
     * Generated from protobuf field <code>string file_name = 2;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * The name of the generated file. The default is
     * [MuxStream.key][google.cloud.video.transcoder.v1.MuxStream.key] with the
     * extension suffix corresponding to the
     * [MuxStream.container][google.cloud.video.transcoder.v1.MuxStream.container].
     * Individual segments also have an incremental 10-digit zero-padded suffix
     * starting from 0 before the extension, such as `mux_stream0000000123.ts`.
     *
     * Generated from protobuf field <code>string file_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_name = $var;

        return $this;
    }

    /**
     * The container format. The default is `mp4`
     * Supported streaming formats:
     * - `ts`
     * - `fmp4`- the corresponding file extension is `.m4s`
     * Supported standalone file formats:
     * - `mp4`
     * - `mp3`
     * - `ogg`
     * - `vtt`
     * See also:
     * [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats)
     *
     * Generated from protobuf field <code>string container = 3;</code>
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The container format. The default is `mp4`
     * Supported streaming formats:
     * - `ts`
     * - `fmp4`- the corresponding file extension is `.m4s`
     * Supported standalone file formats:
     * - `mp4`
     * - `mp3`
     * - `ogg`
     * - `vtt`
     * See also:
     * [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats)
     *
     * Generated from protobuf field <code>string container = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContainer($var)
    {
        GPBUtil::checkString($var, True);
        $this->container = $var;

        return $this;
    }

    /**
     * List of
     * [ElementaryStream.key][google.cloud.video.transcoder.v1.ElementaryStream.key]
     * values multiplexed in this stream.
     *
     * Generated from protobuf field <code>repeated string elementary_streams = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElementaryStreams()
    {
        return $this->elementary_streams;
    }

    /**
     * List of
     * [ElementaryStream.key][google.cloud.video.transcoder.v1.ElementaryStream.key]
     * values multiplexed in this stream.
     *
     * Generated from protobuf field <code>repeated string elementary_streams = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElementaryStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->elementary_streams = $arr;

        return $this;
    }

    /**
     * Segment settings for `ts`, `fmp4` and `vtt`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.SegmentSettings segment_settings = 5;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\SegmentSettings|null
     */
    public function getSegmentSettings()
    {
        return $this->segment_settings;
    }

    public function hasSegmentSettings()
    {
        return isset($this->segment_settings);
    }

    public function clearSegmentSettings()
    {
        unset($this->segment_settings);
    }

    /**
     * Segment settings for `ts`, `fmp4` and `vtt`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.SegmentSettings segment_settings = 5;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\SegmentSettings $var
     * @return $this
     */
    public function setSegmentSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\SegmentSettings::class);
        $this->segment_settings = $var;

        return $this;
    }

    /**
     * Identifier of the encryption configuration to use. If omitted, output will
     * be unencrypted.
     *
     * Generated from protobuf field <code>string encryption_id = 7;</code>
     * @return string
     */
    public function getEncryptionId()
    {
        return $this->encryption_id;
    }

    /**
     * Identifier of the encryption configuration to use. If omitted, output will
     * be unencrypted.
     *
     * Generated from protobuf field <code>string encryption_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->encryption_id = $var;

        return $this;
    }

    /**
     * Optional. `fmp4` container configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.MuxStream.Fmp4Config fmp4 = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Video\Transcoder\V1\MuxStream\Fmp4Config|null
     */
    public function getFmp4()
    {
        return $this->readOneof(8);
    }

    public function hasFmp4()
    {
        return $this->hasOneof(8);
    }

    /**
     * Optional. `fmp4` container configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.MuxStream.Fmp4Config fmp4 = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Video\Transcoder\V1\MuxStream\Fmp4Config $var
     * @return $this
     */
    public function setFmp4($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\MuxStream\Fmp4Config::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getContainerConfig()
    {
        return $this->whichOneof("container_config");
    }

}

