<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/user_event.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detailed document information associated with a user event.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.DocumentInfo</code>
 */
class DocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Quantity of the Document associated with the user event. Defaults to 1.
     * For example, this field is 2 if two quantities of the same Document
     * are involved in a `add-to-cart` event.
     * Required for events of the following event types:
     * * `add-to-cart`
     * * `purchase`
     *
     * Generated from protobuf field <code>optional int32 quantity = 3;</code>
     */
    protected $quantity = null;
    /**
     * The promotion IDs associated with this Document.
     * Currently, this field is restricted to at most one ID.
     *
     * Generated from protobuf field <code>repeated string promotion_ids = 4;</code>
     */
    private $promotion_ids;
    /**
     * Output only. Whether the referenced Document can be found in the data
     * store.
     *
     * Generated from protobuf field <code>bool joined = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $joined = false;
    /**
     * Optional. The conversion value associated with this Document.
     * Must be set if
     * [UserEvent.event_type][google.cloud.discoveryengine.v1.UserEvent.event_type]
     * is "conversion".
     * For example, a value of 1000 signifies that 1000 seconds were spent viewing
     * a Document for the `watch` conversion type.
     *
     * Generated from protobuf field <code>optional float conversion_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $conversion_value = null;
    protected $document_descriptor;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The [Document][google.cloud.discoveryengine.v1.Document] resource ID.
     *     @type string $name
     *           The [Document][google.cloud.discoveryengine.v1.Document] resource full
     *           name, of the form:
     *           `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}/branches/{branch_id}/documents/{document_id}`
     *     @type string $uri
     *           The [Document][google.cloud.discoveryengine.v1.Document] URI - only
     *           allowed for website data stores.
     *     @type int $quantity
     *           Quantity of the Document associated with the user event. Defaults to 1.
     *           For example, this field is 2 if two quantities of the same Document
     *           are involved in a `add-to-cart` event.
     *           Required for events of the following event types:
     *           * `add-to-cart`
     *           * `purchase`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $promotion_ids
     *           The promotion IDs associated with this Document.
     *           Currently, this field is restricted to at most one ID.
     *     @type bool $joined
     *           Output only. Whether the referenced Document can be found in the data
     *           store.
     *     @type float $conversion_value
     *           Optional. The conversion value associated with this Document.
     *           Must be set if
     *           [UserEvent.event_type][google.cloud.discoveryengine.v1.UserEvent.event_type]
     *           is "conversion".
     *           For example, a value of 1000 signifies that 1000 seconds were spent viewing
     *           a Document for the `watch` conversion type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1.Document] resource ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->readOneof(1);
    }

    public function hasId()
    {
        return $this->hasOneof(1);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1.Document] resource ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1.Document] resource full
     * name, of the form:
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}/branches/{branch_id}/documents/{document_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(2);
    }

    public function hasName()
    {
        return $this->hasOneof(2);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1.Document] resource full
     * name, of the form:
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}/branches/{branch_id}/documents/{document_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1.Document] URI - only
     * allowed for website data stores.
     *
     * Generated from protobuf field <code>string uri = 6;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(6);
    }

    public function hasUri()
    {
        return $this->hasOneof(6);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1.Document] URI - only
     * allowed for website data stores.
     *
     * Generated from protobuf field <code>string uri = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Quantity of the Document associated with the user event. Defaults to 1.
     * For example, this field is 2 if two quantities of the same Document
     * are involved in a `add-to-cart` event.
     * Required for events of the following event types:
     * * `add-to-cart`
     * * `purchase`
     *
     * Generated from protobuf field <code>optional int32 quantity = 3;</code>
     * @return int
     */
    public function getQuantity()
    {
        return isset($this->quantity) ? $this->quantity : 0;
    }

    public function hasQuantity()
    {
        return isset($this->quantity);
    }

    public function clearQuantity()
    {
        unset($this->quantity);
    }

    /**
     * Quantity of the Document associated with the user event. Defaults to 1.
     * For example, this field is 2 if two quantities of the same Document
     * are involved in a `add-to-cart` event.
     * Required for events of the following event types:
     * * `add-to-cart`
     * * `purchase`
     *
     * Generated from protobuf field <code>optional int32 quantity = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt32($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     * The promotion IDs associated with this Document.
     * Currently, this field is restricted to at most one ID.
     *
     * Generated from protobuf field <code>repeated string promotion_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPromotionIds()
    {
        return $this->promotion_ids;
    }

    /**
     * The promotion IDs associated with this Document.
     * Currently, this field is restricted to at most one ID.
     *
     * Generated from protobuf field <code>repeated string promotion_ids = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPromotionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->promotion_ids = $arr;

        return $this;
    }

    /**
     * Output only. Whether the referenced Document can be found in the data
     * store.
     *
     * Generated from protobuf field <code>bool joined = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getJoined()
    {
        return $this->joined;
    }

    /**
     * Output only. Whether the referenced Document can be found in the data
     * store.
     *
     * Generated from protobuf field <code>bool joined = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setJoined($var)
    {
        GPBUtil::checkBool($var);
        $this->joined = $var;

        return $this;
    }

    /**
     * Optional. The conversion value associated with this Document.
     * Must be set if
     * [UserEvent.event_type][google.cloud.discoveryengine.v1.UserEvent.event_type]
     * is "conversion".
     * For example, a value of 1000 signifies that 1000 seconds were spent viewing
     * a Document for the `watch` conversion type.
     *
     * Generated from protobuf field <code>optional float conversion_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getConversionValue()
    {
        return isset($this->conversion_value) ? $this->conversion_value : 0.0;
    }

    public function hasConversionValue()
    {
        return isset($this->conversion_value);
    }

    public function clearConversionValue()
    {
        unset($this->conversion_value);
    }

    /**
     * Optional. The conversion value associated with this Document.
     * Must be set if
     * [UserEvent.event_type][google.cloud.discoveryengine.v1.UserEvent.event_type]
     * is "conversion".
     * For example, a value of 1000 signifies that 1000 seconds were spent viewing
     * a Document for the `watch` conversion type.
     *
     * Generated from protobuf field <code>optional float conversion_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setConversionValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->conversion_value = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentDescriptor()
    {
        return $this->whichOneof("document_descriptor");
    }

}

