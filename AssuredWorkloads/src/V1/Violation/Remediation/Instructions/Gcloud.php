<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1\Violation\Remediation\Instructions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Remediation instructions to resolve violation via gcloud cli
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1.Violation.Remediation.Instructions.Gcloud</code>
 */
class Gcloud extends \Google\Protobuf\Internal\Message
{
    /**
     * Gcloud command to resolve violation
     *
     * Generated from protobuf field <code>repeated string gcloud_commands = 1;</code>
     */
    private $gcloud_commands;
    /**
     * Steps to resolve violation via gcloud cli
     *
     * Generated from protobuf field <code>repeated string steps = 2;</code>
     */
    private $steps;
    /**
     * Additional urls for more information about steps
     *
     * Generated from protobuf field <code>repeated string additional_links = 3;</code>
     */
    private $additional_links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $gcloud_commands
     *           Gcloud command to resolve violation
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $steps
     *           Steps to resolve violation via gcloud cli
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $additional_links
     *           Additional urls for more information about steps
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Gcloud command to resolve violation
     *
     * Generated from protobuf field <code>repeated string gcloud_commands = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGcloudCommands()
    {
        return $this->gcloud_commands;
    }

    /**
     * Gcloud command to resolve violation
     *
     * Generated from protobuf field <code>repeated string gcloud_commands = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGcloudCommands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->gcloud_commands = $arr;

        return $this;
    }

    /**
     * Steps to resolve violation via gcloud cli
     *
     * Generated from protobuf field <code>repeated string steps = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Steps to resolve violation via gcloud cli
     *
     * Generated from protobuf field <code>repeated string steps = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSteps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->steps = $arr;

        return $this;
    }

    /**
     * Additional urls for more information about steps
     *
     * Generated from protobuf field <code>repeated string additional_links = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalLinks()
    {
        return $this->additional_links;
    }

    /**
     * Additional urls for more information about steps
     *
     * Generated from protobuf field <code>repeated string additional_links = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_links = $arr;

        return $this;
    }

}


