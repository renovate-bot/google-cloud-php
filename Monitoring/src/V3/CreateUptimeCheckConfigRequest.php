<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The protocol for the `CreateUptimeCheckConfig` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.CreateUptimeCheckConfigRequest</code>
 */
class CreateUptimeCheckConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
     * to create the Uptime check. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The new Uptime check configuration.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig uptime_check_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uptime_check_config = null;

    /**
     * @param string                                        $parent            Required. The
     *                                                                         [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
     *                                                                         to create the Uptime check. The format is:
     *
     *                                                                         projects/[PROJECT_ID_OR_NUMBER]
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig $uptimeCheckConfig Required. The new Uptime check configuration.
     *
     * @return \Google\Cloud\Monitoring\V3\CreateUptimeCheckConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Monitoring\V3\UptimeCheckConfig $uptimeCheckConfig): self
    {
        return (new self())
            ->setParent($parent)
            ->setUptimeCheckConfig($uptimeCheckConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The
     *           [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
     *           to create the Uptime check. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *     @type \Google\Cloud\Monitoring\V3\UptimeCheckConfig $uptime_check_config
     *           Required. The new Uptime check configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\UptimeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
     * to create the Uptime check. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
     * to create the Uptime check. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
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
     * Required. The new Uptime check configuration.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig uptime_check_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig|null
     */
    public function getUptimeCheckConfig()
    {
        return $this->uptime_check_config;
    }

    public function hasUptimeCheckConfig()
    {
        return isset($this->uptime_check_config);
    }

    public function clearUptimeCheckConfig()
    {
        unset($this->uptime_check_config);
    }

    /**
     * Required. The new Uptime check configuration.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig uptime_check_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig $var
     * @return $this
     */
    public function setUptimeCheckConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig::class);
        $this->uptime_check_config = $var;

        return $this;
    }

}

