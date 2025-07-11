<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_messages.proto

namespace Google\Ads\AdManager\V1\Report;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a single value in a report.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.Report.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $int_value
     *           For integer values.
     *     @type float $double_value
     *           For double values.
     *     @type string $string_value
     *           For string values.
     *     @type bool $bool_value
     *           For boolean values.
     *     @type \Google\Ads\AdManager\V1\Report\Value\IntList $int_list_value
     *           For lists of integer values.
     *     @type \Google\Ads\AdManager\V1\Report\Value\StringList $string_list_value
     *           For lists of string values.
     *     @type string $bytes_value
     *           For bytes values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\ReportMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * For integer values.
     *
     * Generated from protobuf field <code>int64 int_value = 1;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(1);
    }

    public function hasIntValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * For integer values.
     *
     * Generated from protobuf field <code>int64 int_value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * For double values.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(2);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * For double values.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * For string values.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(3);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * For string values.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * For boolean values.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(4);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * For boolean values.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * For lists of integer values.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.Value.IntList int_list_value = 6;</code>
     * @return \Google\Ads\AdManager\V1\Report\Value\IntList|null
     */
    public function getIntListValue()
    {
        return $this->readOneof(6);
    }

    public function hasIntListValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * For lists of integer values.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.Value.IntList int_list_value = 6;</code>
     * @param \Google\Ads\AdManager\V1\Report\Value\IntList $var
     * @return $this
     */
    public function setIntListValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Report\Value\IntList::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * For lists of string values.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.Value.StringList string_list_value = 7;</code>
     * @return \Google\Ads\AdManager\V1\Report\Value\StringList|null
     */
    public function getStringListValue()
    {
        return $this->readOneof(7);
    }

    public function hasStringListValue()
    {
        return $this->hasOneof(7);
    }

    /**
     * For lists of string values.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.Value.StringList string_list_value = 7;</code>
     * @param \Google\Ads\AdManager\V1\Report\Value\StringList $var
     * @return $this
     */
    public function setStringListValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Report\Value\StringList::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * For bytes values.
     *
     * Generated from protobuf field <code>bytes bytes_value = 8;</code>
     * @return string
     */
    public function getBytesValue()
    {
        return $this->readOneof(8);
    }

    public function hasBytesValue()
    {
        return $this->hasOneof(8);
    }

    /**
     * For bytes values.
     *
     * Generated from protobuf field <code>bytes bytes_value = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBytesValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}


