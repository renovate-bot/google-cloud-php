<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `TimedPromoteReleaseRule` will automatically promote a release from the
 * current target(s) to the specified target(s) on a configured schedule.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.TimedPromoteReleaseRule</code>
 */
class TimedPromoteReleaseRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. ID of the rule. This ID must be unique in the `Automation`
     * resource to which this rule belongs. The format is
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    /**
     * Optional. The ID of the stage in the pipeline to which this `Release` is
     * deploying. If unspecified, default it to the next stage in the promotion
     * flow. The value of this field could be one of the following:
     * * The last segment of a target name
     * * "&#64;next", the next target in the promotion sequence
     *
     * Generated from protobuf field <code>string destination_target_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $destination_target_id = '';
    /**
     * Required. Schedule in crontab format. e.g. "0 9 * * 1" for every Monday at
     * 9am.
     *
     * Generated from protobuf field <code>string schedule = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $schedule = '';
    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_zone = '';
    /**
     * Output only. Information around the state of the Automation rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationRuleCondition condition = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $condition = null;
    /**
     * Optional. The starting phase of the rollout created by this rule. Default
     * to the first phase.
     *
     * Generated from protobuf field <code>string destination_phase = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $destination_phase = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. ID of the rule. This ID must be unique in the `Automation`
     *           resource to which this rule belongs. The format is
     *           `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *     @type string $destination_target_id
     *           Optional. The ID of the stage in the pipeline to which this `Release` is
     *           deploying. If unspecified, default it to the next stage in the promotion
     *           flow. The value of this field could be one of the following:
     *           * The last segment of a target name
     *           * "&#64;next", the next target in the promotion sequence
     *     @type string $schedule
     *           Required. Schedule in crontab format. e.g. "0 9 * * 1" for every Monday at
     *           9am.
     *     @type string $time_zone
     *           Required. The time zone in IANA format [IANA Time Zone
     *           Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *     @type \Google\Cloud\Deploy\V1\AutomationRuleCondition $condition
     *           Output only. Information around the state of the Automation rule.
     *     @type string $destination_phase
     *           Optional. The starting phase of the rollout created by this rule. Default
     *           to the first phase.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. ID of the rule. This ID must be unique in the `Automation`
     * resource to which this rule belongs. The format is
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. ID of the rule. This ID must be unique in the `Automation`
     * resource to which this rule belongs. The format is
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional. The ID of the stage in the pipeline to which this `Release` is
     * deploying. If unspecified, default it to the next stage in the promotion
     * flow. The value of this field could be one of the following:
     * * The last segment of a target name
     * * "&#64;next", the next target in the promotion sequence
     *
     * Generated from protobuf field <code>string destination_target_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDestinationTargetId()
    {
        return $this->destination_target_id;
    }

    /**
     * Optional. The ID of the stage in the pipeline to which this `Release` is
     * deploying. If unspecified, default it to the next stage in the promotion
     * flow. The value of this field could be one of the following:
     * * The last segment of a target name
     * * "&#64;next", the next target in the promotion sequence
     *
     * Generated from protobuf field <code>string destination_target_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_target_id = $var;

        return $this;
    }

    /**
     * Required. Schedule in crontab format. e.g. "0 9 * * 1" for every Monday at
     * 9am.
     *
     * Generated from protobuf field <code>string schedule = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Required. Schedule in crontab format. e.g. "0 9 * * 1" for every Monday at
     * 9am.
     *
     * Generated from protobuf field <code>string schedule = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule = $var;

        return $this;
    }

    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Output only. Information around the state of the Automation rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationRuleCondition condition = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\AutomationRuleCondition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * Output only. Information around the state of the Automation rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationRuleCondition condition = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\AutomationRuleCondition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\AutomationRuleCondition::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * Optional. The starting phase of the rollout created by this rule. Default
     * to the first phase.
     *
     * Generated from protobuf field <code>string destination_phase = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDestinationPhase()
    {
        return $this->destination_phase;
    }

    /**
     * Optional. The starting phase of the rollout created by this rule. Default
     * to the first phase.
     *
     * Generated from protobuf field <code>string destination_phase = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationPhase($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_phase = $var;

        return $this;
    }

}

