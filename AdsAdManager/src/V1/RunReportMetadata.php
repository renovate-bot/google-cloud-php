<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `RunReport` operation metadata.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.RunReportMetadata</code>
 */
class RunReportMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * An estimate of how close this report is to being completed. Will always be
     * 100 for failed and completed reports.
     *
     * Generated from protobuf field <code>int32 percent_complete = 2;</code>
     */
    protected $percent_complete = 0;
    /**
     * The result's parent report.
     *
     * Generated from protobuf field <code>string report = 4 [(.google.api.resource_reference) = {</code>
     */
    protected $report = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $percent_complete
     *           An estimate of how close this report is to being completed. Will always be
     *           100 for failed and completed reports.
     *     @type string $report
     *           The result's parent report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\ReportService::initOnce();
        parent::__construct($data);
    }

    /**
     * An estimate of how close this report is to being completed. Will always be
     * 100 for failed and completed reports.
     *
     * Generated from protobuf field <code>int32 percent_complete = 2;</code>
     * @return int
     */
    public function getPercentComplete()
    {
        return $this->percent_complete;
    }

    /**
     * An estimate of how close this report is to being completed. Will always be
     * 100 for failed and completed reports.
     *
     * Generated from protobuf field <code>int32 percent_complete = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPercentComplete($var)
    {
        GPBUtil::checkInt32($var);
        $this->percent_complete = $var;

        return $this;
    }

    /**
     * The result's parent report.
     *
     * Generated from protobuf field <code>string report = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * The result's parent report.
     *
     * Generated from protobuf field <code>string report = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setReport($var)
    {
        GPBUtil::checkString($var, True);
        $this->report = $var;

        return $this;
    }

}

