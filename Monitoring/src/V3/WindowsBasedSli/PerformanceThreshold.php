<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\WindowsBasedSli;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `PerformanceThreshold` is used when each window is good when that window
 * has a sufficiently high `performance`.
 *
 * Generated from protobuf message <code>google.monitoring.v3.WindowsBasedSli.PerformanceThreshold</code>
 */
class PerformanceThreshold extends \Google\Protobuf\Internal\Message
{
    /**
     * If window `performance >= threshold`, the window is counted as good.
     *
     * Generated from protobuf field <code>double threshold = 2;</code>
     */
    protected $threshold = 0.0;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Monitoring\V3\RequestBasedSli $performance
     *           `RequestBasedSli` to evaluate to judge window quality.
     *     @type \Google\Cloud\Monitoring\V3\BasicSli $basic_sli_performance
     *           `BasicSli` to evaluate to judge window quality.
     *     @type float $threshold
     *           If window `performance >= threshold`, the window is counted as good.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * `RequestBasedSli` to evaluate to judge window quality.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.RequestBasedSli performance = 1;</code>
     * @return \Google\Cloud\Monitoring\V3\RequestBasedSli|null
     */
    public function getPerformance()
    {
        return $this->readOneof(1);
    }

    public function hasPerformance()
    {
        return $this->hasOneof(1);
    }

    /**
     * `RequestBasedSli` to evaluate to judge window quality.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.RequestBasedSli performance = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\RequestBasedSli $var
     * @return $this
     */
    public function setPerformance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\RequestBasedSli::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * `BasicSli` to evaluate to judge window quality.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.BasicSli basic_sli_performance = 3;</code>
     * @return \Google\Cloud\Monitoring\V3\BasicSli|null
     */
    public function getBasicSliPerformance()
    {
        return $this->readOneof(3);
    }

    public function hasBasicSliPerformance()
    {
        return $this->hasOneof(3);
    }

    /**
     * `BasicSli` to evaluate to judge window quality.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.BasicSli basic_sli_performance = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\BasicSli $var
     * @return $this
     */
    public function setBasicSliPerformance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\BasicSli::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * If window `performance >= threshold`, the window is counted as good.
     *
     * Generated from protobuf field <code>double threshold = 2;</code>
     * @return float
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * If window `performance >= threshold`, the window is counted as good.
     *
     * Generated from protobuf field <code>double threshold = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setThreshold($var)
    {
        GPBUtil::checkDouble($var);
        $this->threshold = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}


