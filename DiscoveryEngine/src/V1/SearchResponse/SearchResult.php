<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the search results.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchResponse.SearchResult</code>
 */
class SearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * [Document.id][google.cloud.discoveryengine.v1.Document.id] of the
     * searched [Document][google.cloud.discoveryengine.v1.Document].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The document data snippet in the search response. Only fields that are
     * marked as `retrievable` are populated.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Document document = 2;</code>
     */
    protected $document = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           [Document.id][google.cloud.discoveryengine.v1.Document.id] of the
     *           searched [Document][google.cloud.discoveryengine.v1.Document].
     *     @type \Google\Cloud\DiscoveryEngine\V1\Document $document
     *           The document data snippet in the search response. Only fields that are
     *           marked as `retrievable` are populated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * [Document.id][google.cloud.discoveryengine.v1.Document.id] of the
     * searched [Document][google.cloud.discoveryengine.v1.Document].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Document.id][google.cloud.discoveryengine.v1.Document.id] of the
     * searched [Document][google.cloud.discoveryengine.v1.Document].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The document data snippet in the search response. Only fields that are
     * marked as `retrievable` are populated.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Document document = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * The document data snippet in the search response. Only fields that are
     * marked as `retrievable` are populated.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Document document = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Document::class);
        $this->document = $var;

        return $this;
    }

}


