<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/access_report.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a dimension column in the report. Dimensions requested in a report
 * produce column entries within rows and DimensionHeaders. However, dimensions
 * used exclusively within filters or expressions do not produce columns in a
 * report; correspondingly, those dimensions do not produce headers.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.AccessDimensionHeader</code>
 */
class AccessDimensionHeader extends \Google\Protobuf\Internal\Message
{
    /**
     * The dimension's name; for example 'userEmail'.
     *
     * Generated from protobuf field <code>string dimension_name = 1;</code>
     */
    protected $dimension_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dimension_name
     *           The dimension's name; for example 'userEmail'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AccessReport::initOnce();
        parent::__construct($data);
    }

    /**
     * The dimension's name; for example 'userEmail'.
     *
     * Generated from protobuf field <code>string dimension_name = 1;</code>
     * @return string
     */
    public function getDimensionName()
    {
        return $this->dimension_name;
    }

    /**
     * The dimension's name; for example 'userEmail'.
     *
     * Generated from protobuf field <code>string dimension_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDimensionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->dimension_name = $var;

        return $this;
    }

}

