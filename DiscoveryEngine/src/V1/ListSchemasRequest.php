<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/schema_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ListSchemasRequest</code>
 */
class ListSchemasRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent data store resource name, in the format of
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of [Schema][google.cloud.discoveryengine.v1.Schema]s to
     * return. The service may return fewer than this value.
     * If unspecified, at most 100
     * [Schema][google.cloud.discoveryengine.v1.Schema]s are returned.
     * The maximum value is 1000; values above 1000 are set to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous
     * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent data store resource name, in the format of
     *                       `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`. Please see
     *                       {@see SchemaServiceClient::dataStoreName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1\ListSchemasRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent data store resource name, in the format of
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
     *     @type int $page_size
     *           The maximum number of [Schema][google.cloud.discoveryengine.v1.Schema]s to
     *           return. The service may return fewer than this value.
     *           If unspecified, at most 100
     *           [Schema][google.cloud.discoveryengine.v1.Schema]s are returned.
     *           The maximum value is 1000; values above 1000 are set to 1000.
     *     @type string $page_token
     *           A page token, received from a previous
     *           [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     *           must match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SchemaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent data store resource name, in the format of
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent data store resource name, in the format of
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
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
     * The maximum number of [Schema][google.cloud.discoveryengine.v1.Schema]s to
     * return. The service may return fewer than this value.
     * If unspecified, at most 100
     * [Schema][google.cloud.discoveryengine.v1.Schema]s are returned.
     * The maximum value is 1000; values above 1000 are set to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of [Schema][google.cloud.discoveryengine.v1.Schema]s to
     * return. The service may return fewer than this value.
     * If unspecified, at most 100
     * [Schema][google.cloud.discoveryengine.v1.Schema]s are returned.
     * The maximum value is 1000; values above 1000 are set to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous
     * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous
     * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1.SchemaService.ListSchemas]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

