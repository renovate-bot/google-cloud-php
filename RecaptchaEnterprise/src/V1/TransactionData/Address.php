<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\TransactionData;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Structured address format for billing and shipping addresses.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.TransactionData.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The recipient name, potentially including information such as
     * "care of".
     *
     * Generated from protobuf field <code>string recipient = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $recipient = '';
    /**
     * Optional. The first lines of the address. The first line generally
     * contains the street name and number, and further lines may include
     * information such as an apartment number.
     *
     * Generated from protobuf field <code>repeated string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $address;
    /**
     * Optional. The town/city of the address.
     *
     * Generated from protobuf field <code>string locality = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $locality = '';
    /**
     * Optional. The state, province, or otherwise administrative area of the
     * address.
     *
     * Generated from protobuf field <code>string administrative_area = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $administrative_area = '';
    /**
     * Optional. The CLDR country/region of the address.
     *
     * Generated from protobuf field <code>string region_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $region_code = '';
    /**
     * Optional. The postal or ZIP code of the address.
     *
     * Generated from protobuf field <code>string postal_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $postal_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $recipient
     *           Optional. The recipient name, potentially including information such as
     *           "care of".
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $address
     *           Optional. The first lines of the address. The first line generally
     *           contains the street name and number, and further lines may include
     *           information such as an apartment number.
     *     @type string $locality
     *           Optional. The town/city of the address.
     *     @type string $administrative_area
     *           Optional. The state, province, or otherwise administrative area of the
     *           address.
     *     @type string $region_code
     *           Optional. The CLDR country/region of the address.
     *     @type string $postal_code
     *           Optional. The postal or ZIP code of the address.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The recipient name, potentially including information such as
     * "care of".
     *
     * Generated from protobuf field <code>string recipient = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Optional. The recipient name, potentially including information such as
     * "care of".
     *
     * Generated from protobuf field <code>string recipient = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRecipient($var)
    {
        GPBUtil::checkString($var, True);
        $this->recipient = $var;

        return $this;
    }

    /**
     * Optional. The first lines of the address. The first line generally
     * contains the street name and number, and further lines may include
     * information such as an apartment number.
     *
     * Generated from protobuf field <code>repeated string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Optional. The first lines of the address. The first line generally
     * contains the street name and number, and further lines may include
     * information such as an apartment number.
     *
     * Generated from protobuf field <code>repeated string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddress($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->address = $arr;

        return $this;
    }

    /**
     * Optional. The town/city of the address.
     *
     * Generated from protobuf field <code>string locality = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Optional. The town/city of the address.
     *
     * Generated from protobuf field <code>string locality = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLocality($var)
    {
        GPBUtil::checkString($var, True);
        $this->locality = $var;

        return $this;
    }

    /**
     * Optional. The state, province, or otherwise administrative area of the
     * address.
     *
     * Generated from protobuf field <code>string administrative_area = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->administrative_area;
    }

    /**
     * Optional. The state, province, or otherwise administrative area of the
     * address.
     *
     * Generated from protobuf field <code>string administrative_area = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAdministrativeArea($var)
    {
        GPBUtil::checkString($var, True);
        $this->administrative_area = $var;

        return $this;
    }

    /**
     * Optional. The CLDR country/region of the address.
     *
     * Generated from protobuf field <code>string region_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Optional. The CLDR country/region of the address.
     *
     * Generated from protobuf field <code>string region_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * Optional. The postal or ZIP code of the address.
     *
     * Generated from protobuf field <code>string postal_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Optional. The postal or ZIP code of the address.
     *
     * Generated from protobuf field <code>string postal_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->postal_code = $var;

        return $this;
    }

}


