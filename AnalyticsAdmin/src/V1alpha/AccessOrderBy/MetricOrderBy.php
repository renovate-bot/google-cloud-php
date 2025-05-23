<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/access_report.proto

namespace Google\Analytics\Admin\V1alpha\AccessOrderBy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sorts by metric values.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AccessOrderBy.MetricOrderBy</code>
 */
class MetricOrderBy extends \Google\Protobuf\Internal\Message
{
    /**
     * A metric name in the request to order by.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     */
    protected $metric_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $metric_name
     *           A metric name in the request to order by.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AccessReport::initOnce();
        parent::__construct($data);
    }

    /**
     * A metric name in the request to order by.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @return string
     */
    public function getMetricName()
    {
        return $this->metric_name;
    }

    /**
     * A metric name in the request to order by.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;

        return $this;
    }

}


