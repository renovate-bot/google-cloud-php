<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DateTime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time zone of the date time object.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DateTime.TimeZone</code>
 */
class TimeZone extends \Google\Protobuf\Internal\Message
{
    /**
     * Set only if the offset can be determined. Positive for time ahead of UTC.
     * E.g. For "UTC-9", this value is -540.
     *
     * Generated from protobuf field <code>int32 offset_minutes = 1;</code>
     */
    protected $offset_minutes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $offset_minutes
     *           Set only if the offset can be determined. Positive for time ahead of UTC.
     *           E.g. For "UTC-9", this value is -540.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Set only if the offset can be determined. Positive for time ahead of UTC.
     * E.g. For "UTC-9", this value is -540.
     *
     * Generated from protobuf field <code>int32 offset_minutes = 1;</code>
     * @return int
     */
    public function getOffsetMinutes()
    {
        return $this->offset_minutes;
    }

    /**
     * Set only if the offset can be determined. Positive for time ahead of UTC.
     * E.g. For "UTC-9", this value is -540.
     *
     * Generated from protobuf field <code>int32 offset_minutes = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOffsetMinutes($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset_minutes = $var;

        return $this;
    }

}


