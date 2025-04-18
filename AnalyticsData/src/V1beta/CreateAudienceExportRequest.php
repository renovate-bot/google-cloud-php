<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a new audience export.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.CreateAudienceExportRequest</code>
 */
class CreateAudienceExportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this audience export will be created.
     * Format: `properties/{property}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The audience export to create.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.AudienceExport audience_export = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $audience_export = null;

    /**
     * @param string                                       $parent         Required. The parent resource where this audience export will be created.
     *                                                                     Format: `properties/{property}`
     *                                                                     Please see {@see BetaAnalyticsDataClient::propertyName()} for help formatting this field.
     * @param \Google\Analytics\Data\V1beta\AudienceExport $audienceExport Required. The audience export to create.
     *
     * @return \Google\Analytics\Data\V1beta\CreateAudienceExportRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Analytics\Data\V1beta\AudienceExport $audienceExport): self
    {
        return (new self())
            ->setParent($parent)
            ->setAudienceExport($audienceExport);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this audience export will be created.
     *           Format: `properties/{property}`
     *     @type \Google\Analytics\Data\V1beta\AudienceExport $audience_export
     *           Required. The audience export to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this audience export will be created.
     * Format: `properties/{property}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this audience export will be created.
     * Format: `properties/{property}`
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
     * Required. The audience export to create.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.AudienceExport audience_export = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Data\V1beta\AudienceExport|null
     */
    public function getAudienceExport()
    {
        return $this->audience_export;
    }

    public function hasAudienceExport()
    {
        return isset($this->audience_export);
    }

    public function clearAudienceExport()
    {
        unset($this->audience_export);
    }

    /**
     * Required. The audience export to create.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.AudienceExport audience_export = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Data\V1beta\AudienceExport $var
     * @return $this
     */
    public function setAudienceExport($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\AudienceExport::class);
        $this->audience_export = $var;

        return $this;
    }

}

