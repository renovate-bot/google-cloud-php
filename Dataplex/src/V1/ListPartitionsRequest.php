<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List metadata partitions request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListPartitionsRequest</code>
 */
class ListPartitionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent entity:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Maximum number of partitions to return. The service may return
     * fewer than this value. If unspecified, 100 partitions will be returned by
     * default. The maximum page size is 500; larger values will will be truncated
     * to 500.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Page token received from a previous `ListPartitions` call.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters provided to `ListPartitions` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Filter the partitions returned to the caller using a key value
     * pair expression. Supported operators and syntax:
     * - logic operators: AND, OR
     * - comparison operators: <, >, >=, <= ,=, !=
     * - LIKE operators:
     *   - The right hand of a LIKE operator supports "." and
     *     "*" for wildcard searches, for example "value1 LIKE ".*oo.*"
     * - parenthetical grouping: ( )
     * Sample filter expression: `?filter="key1 < value1 OR key2 > value2"
     * **Notes:**
     * - Keys to the left of operators are case insensitive.
     * - Partition results are sorted first by creation time, then by
     *   lexicographic order.
     * - Up to 20 key value filter pairs are allowed, but due to performance
     *   considerations, only the first 10 will be used as a filter.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. The resource name of the parent entity:
     *                       `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`. Please see
     *                       {@see MetadataServiceClient::entityName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataplex\V1\ListPartitionsRequest
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
     *           Required. The resource name of the parent entity:
     *           `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`.
     *     @type int $page_size
     *           Optional. Maximum number of partitions to return. The service may return
     *           fewer than this value. If unspecified, 100 partitions will be returned by
     *           default. The maximum page size is 500; larger values will will be truncated
     *           to 500.
     *     @type string $page_token
     *           Optional. Page token received from a previous `ListPartitions` call.
     *           Provide this to retrieve the subsequent page. When paginating, all other
     *           parameters provided to `ListPartitions` must match the call that provided
     *           the page token.
     *     @type string $filter
     *           Optional. Filter the partitions returned to the caller using a key value
     *           pair expression. Supported operators and syntax:
     *           - logic operators: AND, OR
     *           - comparison operators: <, >, >=, <= ,=, !=
     *           - LIKE operators:
     *             - The right hand of a LIKE operator supports "." and
     *               "*" for wildcard searches, for example "value1 LIKE ".*oo.*"
     *           - parenthetical grouping: ( )
     *           Sample filter expression: `?filter="key1 < value1 OR key2 > value2"
     *           **Notes:**
     *           - Keys to the left of operators are case insensitive.
     *           - Partition results are sorted first by creation time, then by
     *             lexicographic order.
     *           - Up to 20 key value filter pairs are allowed, but due to performance
     *             considerations, only the first 10 will be used as a filter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent entity:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent entity:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`.
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
     * Optional. Maximum number of partitions to return. The service may return
     * fewer than this value. If unspecified, 100 partitions will be returned by
     * default. The maximum page size is 500; larger values will will be truncated
     * to 500.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of partitions to return. The service may return
     * fewer than this value. If unspecified, 100 partitions will be returned by
     * default. The maximum page size is 500; larger values will will be truncated
     * to 500.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Page token received from a previous `ListPartitions` call.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters provided to `ListPartitions` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page token received from a previous `ListPartitions` call.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters provided to `ListPartitions` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filter the partitions returned to the caller using a key value
     * pair expression. Supported operators and syntax:
     * - logic operators: AND, OR
     * - comparison operators: <, >, >=, <= ,=, !=
     * - LIKE operators:
     *   - The right hand of a LIKE operator supports "." and
     *     "*" for wildcard searches, for example "value1 LIKE ".*oo.*"
     * - parenthetical grouping: ( )
     * Sample filter expression: `?filter="key1 < value1 OR key2 > value2"
     * **Notes:**
     * - Keys to the left of operators are case insensitive.
     * - Partition results are sorted first by creation time, then by
     *   lexicographic order.
     * - Up to 20 key value filter pairs are allowed, but due to performance
     *   considerations, only the first 10 will be used as a filter.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter the partitions returned to the caller using a key value
     * pair expression. Supported operators and syntax:
     * - logic operators: AND, OR
     * - comparison operators: <, >, >=, <= ,=, !=
     * - LIKE operators:
     *   - The right hand of a LIKE operator supports "." and
     *     "*" for wildcard searches, for example "value1 LIKE ".*oo.*"
     * - parenthetical grouping: ( )
     * Sample filter expression: `?filter="key1 < value1 OR key2 > value2"
     * **Notes:**
     * - Keys to the left of operators are case insensitive.
     * - Partition results are sorted first by creation time, then by
     *   lexicographic order.
     * - Up to 20 key value filter pairs are allowed, but due to performance
     *   considerations, only the first 10 will be used as a filter.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

