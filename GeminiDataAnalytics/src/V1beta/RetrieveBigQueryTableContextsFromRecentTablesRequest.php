<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/context_retrieval_service.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for retrieving BigQuery table contextual data from recently accessed
 * tables. Response is sorted by semantic similarity to the query.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.RetrieveBigQueryTableContextsFromRecentTablesRequest</code>
 */
class RetrieveBigQueryTableContextsFromRecentTablesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent value for
     * RetrieveBigQueryTableContextsFromRecentTablesRequest. Pattern:
     * `projects/{project}/locations/{location}` For location, use "global" for
     * now. Regional location value will be supported in the future.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Optional. User query in natural language.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent value for
     *           RetrieveBigQueryTableContextsFromRecentTablesRequest. Pattern:
     *           `projects/{project}/locations/{location}` For location, use "global" for
     *           now. Regional location value will be supported in the future.
     *     @type string $query
     *           Optional. User query in natural language.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\ContextRetrievalService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent value for
     * RetrieveBigQueryTableContextsFromRecentTablesRequest. Pattern:
     * `projects/{project}/locations/{location}` For location, use "global" for
     * now. Regional location value will be supported in the future.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent value for
     * RetrieveBigQueryTableContextsFromRecentTablesRequest. Pattern:
     * `projects/{project}/locations/{location}` For location, use "global" for
     * now. Regional location value will be supported in the future.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. User query in natural language.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Optional. User query in natural language.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

}

