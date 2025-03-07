<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data with integrity verification field.
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.ChecksummedData</code>
 */
class ChecksummedData extends \Google\Protobuf\Internal\Message
{
    /**
     * Raw Data.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     */
    protected $data = '';
    /**
     * Integrity verification field. A CRC32C
     * checksum of the returned
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data]. An
     * integrity check of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] can be
     * performed by computing the CRC32C checksum of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed `2^32-1`, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value crc32c_checksum = 2;</code>
     */
    protected $crc32c_checksum = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           Raw Data.
     *     @type \Google\Protobuf\Int64Value $crc32c_checksum
     *           Integrity verification field. A CRC32C
     *           checksum of the returned
     *           [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data]. An
     *           integrity check of
     *           [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] can be
     *           performed by computing the CRC32C checksum of
     *           [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] and
     *           comparing your results to this field. Discard the response in case of
     *           non-matching checksum values, and perform a limited number of retries. A
     *           persistent mismatch may indicate an issue in your computation of the CRC32C
     *           checksum. Note: This field is defined as int64 for reasons of compatibility
     *           across different languages. However, it is a non-negative integer, which
     *           will never exceed `2^32-1`, and can be safely downconverted to uint32 in
     *           languages that support this type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Raw Data.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Raw Data.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Integrity verification field. A CRC32C
     * checksum of the returned
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data]. An
     * integrity check of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] can be
     * performed by computing the CRC32C checksum of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed `2^32-1`, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value crc32c_checksum = 2;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getCrc32CChecksum()
    {
        return $this->crc32c_checksum;
    }

    public function hasCrc32CChecksum()
    {
        return isset($this->crc32c_checksum);
    }

    public function clearCrc32CChecksum()
    {
        unset($this->crc32c_checksum);
    }

    /**
     * Returns the unboxed value from <code>getCrc32CChecksum()</code>

     * Integrity verification field. A CRC32C
     * checksum of the returned
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data]. An
     * integrity check of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] can be
     * performed by computing the CRC32C checksum of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed `2^32-1`, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value crc32c_checksum = 2;</code>
     * @return int|string|null
     */
    public function getCrc32CChecksumUnwrapped()
    {
        return $this->readWrapperValue("crc32c_checksum");
    }

    /**
     * Integrity verification field. A CRC32C
     * checksum of the returned
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data]. An
     * integrity check of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] can be
     * performed by computing the CRC32C checksum of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed `2^32-1`, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value crc32c_checksum = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCrc32CChecksum($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->crc32c_checksum = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Integrity verification field. A CRC32C
     * checksum of the returned
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data]. An
     * integrity check of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] can be
     * performed by computing the CRC32C checksum of
     * [ChecksummedData.data][google.cloud.kms.v1.ChecksummedData.data] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed `2^32-1`, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value crc32c_checksum = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCrc32CChecksumUnwrapped($var)
    {
        $this->writeWrapperValue("crc32c_checksum", $var);
        return $this;}

}

