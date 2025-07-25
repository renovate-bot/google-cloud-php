<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/data_chat_service.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Retrieved data.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.DataResult</code>
 */
class DataResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A snake-case name for the data result that reflects its contents.
     * The name is used to pass the result around by reference, and serves as a
     * signal about its meaning.
     * * Example: "total_sales_by_product"
     * * Example: "sales_for_product_12345"
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Optional. The schema of the data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.Schema schema = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $schema = null;
    /**
     * Optional. The content of the data. Each row is a struct that matches the
     * schema. Simple values are represented as strings, while nested structures
     * are represented as lists or structs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Struct data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. A snake-case name for the data result that reflects its contents.
     *           The name is used to pass the result around by reference, and serves as a
     *           signal about its meaning.
     *           * Example: "total_sales_by_product"
     *           * Example: "sales_for_product_12345"
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\Schema $schema
     *           Optional. The schema of the data.
     *     @type array<\Google\Protobuf\Struct>|\Google\Protobuf\Internal\RepeatedField $data
     *           Optional. The content of the data. Each row is a struct that matches the
     *           schema. Simple values are represented as strings, while nested structures
     *           are represented as lists or structs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\DataChatService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A snake-case name for the data result that reflects its contents.
     * The name is used to pass the result around by reference, and serves as a
     * signal about its meaning.
     * * Example: "total_sales_by_product"
     * * Example: "sales_for_product_12345"
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. A snake-case name for the data result that reflects its contents.
     * The name is used to pass the result around by reference, and serves as a
     * signal about its meaning.
     * * Example: "total_sales_by_product"
     * * Example: "sales_for_product_12345"
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The schema of the data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.Schema schema = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\Schema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    public function hasSchema()
    {
        return isset($this->schema);
    }

    public function clearSchema()
    {
        unset($this->schema);
    }

    /**
     * Optional. The schema of the data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.Schema schema = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\Schema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\Schema::class);
        $this->schema = $var;

        return $this;
    }

    /**
     * Optional. The content of the data. Each row is a struct that matches the
     * schema. Simple values are represented as strings, while nested structures
     * are represented as lists or structs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Struct data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Optional. The content of the data. Each row is a struct that matches the
     * schema. Simple values are represented as strings, while nested structures
     * are represented as lists or structs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Struct data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Protobuf\Struct>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Struct::class);
        $this->data = $arr;

        return $this;
    }

}

