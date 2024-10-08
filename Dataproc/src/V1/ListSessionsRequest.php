<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/sessions.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list sessions in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ListSessionsRequest</code>
 */
class ListSessionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, which owns this collection of sessions.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of sessions to return in each response.
     * The service may return fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token received from a previous `ListSessions` call.
     * Provide this token to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. A filter for the sessions to return in the response.
     * A filter is a logical expression constraining the values of various fields
     * in each session resource. Filters are case sensitive, and may contain
     * multiple clauses combined with logical operators (AND, OR).
     * Supported fields are `session_id`, `session_uuid`, `state`, `create_time`,
     * and `labels`.
     * Example: `state = ACTIVE and create_time < "2023-01-01T00:00:00Z"`
     * is a filter for sessions in an ACTIVE state that were created before
     * 2023-01-01. `state = ACTIVE and labels.environment=production` is a filter
     * for sessions in an ACTIVE state that have a production environment label.
     * See https://google.aip.dev/assets/misc/ebnf-filtering.txt for a detailed
     * description of the filter syntax and a list of supported comparators.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. The parent, which owns this collection of sessions. Please see
     *                       {@see SessionControllerClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataproc\V1\ListSessionsRequest
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
     *           Required. The parent, which owns this collection of sessions.
     *     @type int $page_size
     *           Optional. The maximum number of sessions to return in each response.
     *           The service may return fewer than this value.
     *     @type string $page_token
     *           Optional. A page token received from a previous `ListSessions` call.
     *           Provide this token to retrieve the subsequent page.
     *     @type string $filter
     *           Optional. A filter for the sessions to return in the response.
     *           A filter is a logical expression constraining the values of various fields
     *           in each session resource. Filters are case sensitive, and may contain
     *           multiple clauses combined with logical operators (AND, OR).
     *           Supported fields are `session_id`, `session_uuid`, `state`, `create_time`,
     *           and `labels`.
     *           Example: `state = ACTIVE and create_time < "2023-01-01T00:00:00Z"`
     *           is a filter for sessions in an ACTIVE state that were created before
     *           2023-01-01. `state = ACTIVE and labels.environment=production` is a filter
     *           for sessions in an ACTIVE state that have a production environment label.
     *           See https://google.aip.dev/assets/misc/ebnf-filtering.txt for a detailed
     *           description of the filter syntax and a list of supported comparators.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, which owns this collection of sessions.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, which owns this collection of sessions.
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
     * Optional. The maximum number of sessions to return in each response.
     * The service may return fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of sessions to return in each response.
     * The service may return fewer than this value.
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
     * Optional. A page token received from a previous `ListSessions` call.
     * Provide this token to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token received from a previous `ListSessions` call.
     * Provide this token to retrieve the subsequent page.
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
     * Optional. A filter for the sessions to return in the response.
     * A filter is a logical expression constraining the values of various fields
     * in each session resource. Filters are case sensitive, and may contain
     * multiple clauses combined with logical operators (AND, OR).
     * Supported fields are `session_id`, `session_uuid`, `state`, `create_time`,
     * and `labels`.
     * Example: `state = ACTIVE and create_time < "2023-01-01T00:00:00Z"`
     * is a filter for sessions in an ACTIVE state that were created before
     * 2023-01-01. `state = ACTIVE and labels.environment=production` is a filter
     * for sessions in an ACTIVE state that have a production environment label.
     * See https://google.aip.dev/assets/misc/ebnf-filtering.txt for a detailed
     * description of the filter syntax and a list of supported comparators.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter for the sessions to return in the response.
     * A filter is a logical expression constraining the values of various fields
     * in each session resource. Filters are case sensitive, and may contain
     * multiple clauses combined with logical operators (AND, OR).
     * Supported fields are `session_id`, `session_uuid`, `state`, `create_time`,
     * and `labels`.
     * Example: `state = ACTIVE and create_time < "2023-01-01T00:00:00Z"`
     * is a filter for sessions in an ACTIVE state that were created before
     * 2023-01-01. `state = ACTIVE and labels.environment=production` is a filter
     * for sessions in an ACTIVE state that have a production environment label.
     * See https://google.aip.dev/assets/misc/ebnf-filtering.txt for a detailed
     * description of the filter syntax and a list of supported comparators.
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

