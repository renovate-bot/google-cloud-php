<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetBigQueryLink RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.GetBigQueryLinkRequest</code>
 */
class GetBigQueryLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the BigQuery link to lookup.
     * Format: properties/{property_id}/bigQueryLinks/{bigquery_link_id}
     * Example: properties/123/bigQueryLinks/456
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the BigQuery link to lookup.
     *                     Format: properties/{property_id}/bigQueryLinks/{bigquery_link_id}
     *                     Example: properties/123/bigQueryLinks/456
     *                     Please see {@see AnalyticsAdminServiceClient::bigQueryLinkName()} for help formatting this field.
     *
     * @return \Google\Analytics\Admin\V1alpha\GetBigQueryLinkRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the BigQuery link to lookup.
     *           Format: properties/{property_id}/bigQueryLinks/{bigquery_link_id}
     *           Example: properties/123/bigQueryLinks/456
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the BigQuery link to lookup.
     * Format: properties/{property_id}/bigQueryLinks/{bigquery_link_id}
     * Example: properties/123/bigQueryLinks/456
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the BigQuery link to lookup.
     * Format: properties/{property_id}/bigQueryLinks/{bigquery_link_id}
     * Example: properties/123/bigQueryLinks/456
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

