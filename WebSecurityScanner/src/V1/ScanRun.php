<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/scan_run.proto

namespace Google\Cloud\WebSecurityScanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A ScanRun is a output-only resource representing an actual run of the scan.
 * Next id: 12
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1.ScanRun</code>
 */
class ScanRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the ScanRun. The name follows the format of
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * The ScanRun IDs are generated by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. The execution state of the ScanRun.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRun.ExecutionState execution_state = 2;</code>
     */
    protected $execution_state = 0;
    /**
     * Output only. The result state of the ScanRun. This field is only available after the
     * execution state reaches "FINISHED".
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRun.ResultState result_state = 3;</code>
     */
    protected $result_state = 0;
    /**
     * Output only. The time at which the ScanRun started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    protected $start_time = null;
    /**
     * Output only. The time at which the ScanRun reached termination state - that the ScanRun
     * is either finished or stopped by user.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     */
    protected $end_time = null;
    /**
     * Output only. The number of URLs crawled during this ScanRun. If the scan is in progress,
     * the value represents the number of URLs crawled up to now.
     *
     * Generated from protobuf field <code>int64 urls_crawled_count = 6;</code>
     */
    protected $urls_crawled_count = 0;
    /**
     * Output only. The number of URLs tested during this ScanRun. If the scan is in progress,
     * the value represents the number of URLs tested up to now. The number of
     * URLs tested is usually larger than the number URLS crawled because
     * typically a crawled URL is tested with multiple test payloads.
     *
     * Generated from protobuf field <code>int64 urls_tested_count = 7;</code>
     */
    protected $urls_tested_count = 0;
    /**
     * Output only. Whether the scan run has found any vulnerabilities.
     *
     * Generated from protobuf field <code>bool has_vulnerabilities = 8;</code>
     */
    protected $has_vulnerabilities = false;
    /**
     * Output only. The percentage of total completion ranging from 0 to 100.
     * If the scan is in queue, the value is 0.
     * If the scan is running, the value ranges from 0 to 100.
     * If the scan is finished, the value is 100.
     *
     * Generated from protobuf field <code>int32 progress_percent = 9;</code>
     */
    protected $progress_percent = 0;
    /**
     * Output only. If result_state is an ERROR, this field provides the primary reason for
     * scan's termination and more details, if such are available.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRunErrorTrace error_trace = 10;</code>
     */
    protected $error_trace = null;
    /**
     * Output only. A list of warnings, if such are encountered during this scan run.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.ScanRunWarningTrace warning_traces = 11;</code>
     */
    private $warning_traces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the ScanRun. The name follows the format of
     *           'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *           The ScanRun IDs are generated by the system.
     *     @type int $execution_state
     *           Output only. The execution state of the ScanRun.
     *     @type int $result_state
     *           Output only. The result state of the ScanRun. This field is only available after the
     *           execution state reaches "FINISHED".
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. The time at which the ScanRun started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time at which the ScanRun reached termination state - that the ScanRun
     *           is either finished or stopped by user.
     *     @type int|string $urls_crawled_count
     *           Output only. The number of URLs crawled during this ScanRun. If the scan is in progress,
     *           the value represents the number of URLs crawled up to now.
     *     @type int|string $urls_tested_count
     *           Output only. The number of URLs tested during this ScanRun. If the scan is in progress,
     *           the value represents the number of URLs tested up to now. The number of
     *           URLs tested is usually larger than the number URLS crawled because
     *           typically a crawled URL is tested with multiple test payloads.
     *     @type bool $has_vulnerabilities
     *           Output only. Whether the scan run has found any vulnerabilities.
     *     @type int $progress_percent
     *           Output only. The percentage of total completion ranging from 0 to 100.
     *           If the scan is in queue, the value is 0.
     *           If the scan is running, the value ranges from 0 to 100.
     *           If the scan is finished, the value is 100.
     *     @type \Google\Cloud\WebSecurityScanner\V1\ScanRunErrorTrace $error_trace
     *           Output only. If result_state is an ERROR, this field provides the primary reason for
     *           scan's termination and more details, if such are available.
     *     @type array<\Google\Cloud\WebSecurityScanner\V1\ScanRunWarningTrace>|\Google\Protobuf\Internal\RepeatedField $warning_traces
     *           Output only. A list of warnings, if such are encountered during this scan run.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1\ScanRun::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the ScanRun. The name follows the format of
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * The ScanRun IDs are generated by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the ScanRun. The name follows the format of
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * The ScanRun IDs are generated by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The execution state of the ScanRun.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRun.ExecutionState execution_state = 2;</code>
     * @return int
     */
    public function getExecutionState()
    {
        return $this->execution_state;
    }

    /**
     * Output only. The execution state of the ScanRun.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRun.ExecutionState execution_state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExecutionState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1\ScanRun\ExecutionState::class);
        $this->execution_state = $var;

        return $this;
    }

    /**
     * Output only. The result state of the ScanRun. This field is only available after the
     * execution state reaches "FINISHED".
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRun.ResultState result_state = 3;</code>
     * @return int
     */
    public function getResultState()
    {
        return $this->result_state;
    }

    /**
     * Output only. The result state of the ScanRun. This field is only available after the
     * execution state reaches "FINISHED".
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRun.ResultState result_state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setResultState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1\ScanRun\ResultState::class);
        $this->result_state = $var;

        return $this;
    }

    /**
     * Output only. The time at which the ScanRun started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. The time at which the ScanRun started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which the ScanRun reached termination state - that the ScanRun
     * is either finished or stopped by user.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time at which the ScanRun reached termination state - that the ScanRun
     * is either finished or stopped by user.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. The number of URLs crawled during this ScanRun. If the scan is in progress,
     * the value represents the number of URLs crawled up to now.
     *
     * Generated from protobuf field <code>int64 urls_crawled_count = 6;</code>
     * @return int|string
     */
    public function getUrlsCrawledCount()
    {
        return $this->urls_crawled_count;
    }

    /**
     * Output only. The number of URLs crawled during this ScanRun. If the scan is in progress,
     * the value represents the number of URLs crawled up to now.
     *
     * Generated from protobuf field <code>int64 urls_crawled_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUrlsCrawledCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->urls_crawled_count = $var;

        return $this;
    }

    /**
     * Output only. The number of URLs tested during this ScanRun. If the scan is in progress,
     * the value represents the number of URLs tested up to now. The number of
     * URLs tested is usually larger than the number URLS crawled because
     * typically a crawled URL is tested with multiple test payloads.
     *
     * Generated from protobuf field <code>int64 urls_tested_count = 7;</code>
     * @return int|string
     */
    public function getUrlsTestedCount()
    {
        return $this->urls_tested_count;
    }

    /**
     * Output only. The number of URLs tested during this ScanRun. If the scan is in progress,
     * the value represents the number of URLs tested up to now. The number of
     * URLs tested is usually larger than the number URLS crawled because
     * typically a crawled URL is tested with multiple test payloads.
     *
     * Generated from protobuf field <code>int64 urls_tested_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUrlsTestedCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->urls_tested_count = $var;

        return $this;
    }

    /**
     * Output only. Whether the scan run has found any vulnerabilities.
     *
     * Generated from protobuf field <code>bool has_vulnerabilities = 8;</code>
     * @return bool
     */
    public function getHasVulnerabilities()
    {
        return $this->has_vulnerabilities;
    }

    /**
     * Output only. Whether the scan run has found any vulnerabilities.
     *
     * Generated from protobuf field <code>bool has_vulnerabilities = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasVulnerabilities($var)
    {
        GPBUtil::checkBool($var);
        $this->has_vulnerabilities = $var;

        return $this;
    }

    /**
     * Output only. The percentage of total completion ranging from 0 to 100.
     * If the scan is in queue, the value is 0.
     * If the scan is running, the value ranges from 0 to 100.
     * If the scan is finished, the value is 100.
     *
     * Generated from protobuf field <code>int32 progress_percent = 9;</code>
     * @return int
     */
    public function getProgressPercent()
    {
        return $this->progress_percent;
    }

    /**
     * Output only. The percentage of total completion ranging from 0 to 100.
     * If the scan is in queue, the value is 0.
     * If the scan is running, the value ranges from 0 to 100.
     * If the scan is finished, the value is 100.
     *
     * Generated from protobuf field <code>int32 progress_percent = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setProgressPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress_percent = $var;

        return $this;
    }

    /**
     * Output only. If result_state is an ERROR, this field provides the primary reason for
     * scan's termination and more details, if such are available.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRunErrorTrace error_trace = 10;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1\ScanRunErrorTrace|null
     */
    public function getErrorTrace()
    {
        return $this->error_trace;
    }

    public function hasErrorTrace()
    {
        return isset($this->error_trace);
    }

    public function clearErrorTrace()
    {
        unset($this->error_trace);
    }

    /**
     * Output only. If result_state is an ERROR, this field provides the primary reason for
     * scan's termination and more details, if such are available.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanRunErrorTrace error_trace = 10;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1\ScanRunErrorTrace $var
     * @return $this
     */
    public function setErrorTrace($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1\ScanRunErrorTrace::class);
        $this->error_trace = $var;

        return $this;
    }

    /**
     * Output only. A list of warnings, if such are encountered during this scan run.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.ScanRunWarningTrace warning_traces = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWarningTraces()
    {
        return $this->warning_traces;
    }

    /**
     * Output only. A list of warnings, if such are encountered during this scan run.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.ScanRunWarningTrace warning_traces = 11;</code>
     * @param array<\Google\Cloud\WebSecurityScanner\V1\ScanRunWarningTrace>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWarningTraces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\WebSecurityScanner\V1\ScanRunWarningTrace::class);
        $this->warning_traces = $arr;

        return $this;
    }

}

