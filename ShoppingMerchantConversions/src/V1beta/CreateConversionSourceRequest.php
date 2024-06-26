<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/conversions/v1beta/conversionsources.proto

namespace Google\Shopping\Merchant\Conversions\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the CreateConversionSource method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.conversions.v1beta.CreateConversionSourceRequest</code>
 */
class CreateConversionSourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The merchant account that will own the new conversion source.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The conversion source description. A new ID will be automatically
     * assigned to it upon creation.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.conversions.v1beta.ConversionSource conversion_source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $conversion_source = null;

    /**
     * @param string                                                        $parent           Required. The merchant account that will own the new conversion source.
     *                                                                                        Format: accounts/{account}
     *                                                                                        Please see {@see ConversionSourcesServiceClient::accountName()} for help formatting this field.
     * @param \Google\Shopping\Merchant\Conversions\V1beta\ConversionSource $conversionSource Required. The conversion source description. A new ID will be automatically
     *                                                                                        assigned to it upon creation.
     *
     * @return \Google\Shopping\Merchant\Conversions\V1beta\CreateConversionSourceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Shopping\Merchant\Conversions\V1beta\ConversionSource $conversionSource): self
    {
        return (new self())
            ->setParent($parent)
            ->setConversionSource($conversionSource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The merchant account that will own the new conversion source.
     *           Format: accounts/{account}
     *     @type \Google\Shopping\Merchant\Conversions\V1beta\ConversionSource $conversion_source
     *           Required. The conversion source description. A new ID will be automatically
     *           assigned to it upon creation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Conversions\V1Beta\Conversionsources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The merchant account that will own the new conversion source.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The merchant account that will own the new conversion source.
     * Format: accounts/{account}
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
     * Required. The conversion source description. A new ID will be automatically
     * assigned to it upon creation.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.conversions.v1beta.ConversionSource conversion_source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\Conversions\V1beta\ConversionSource|null
     */
    public function getConversionSource()
    {
        return $this->conversion_source;
    }

    public function hasConversionSource()
    {
        return isset($this->conversion_source);
    }

    public function clearConversionSource()
    {
        unset($this->conversion_source);
    }

    /**
     * Required. The conversion source description. A new ID will be automatically
     * assigned to it upon creation.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.conversions.v1beta.ConversionSource conversion_source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\Conversions\V1beta\ConversionSource $var
     * @return $this
     */
    public function setConversionSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Conversions\V1beta\ConversionSource::class);
        $this->conversion_source = $var;

        return $this;
    }

}

