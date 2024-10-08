<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/external_system.proto

namespace Google\Cloud\SecurityCenter\V1\ExternalSystem;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the ticket, if any, that is being used to track the
 * resolution of the issue that is identified by this finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ExternalSystem.TicketInfo</code>
 */
class TicketInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The identifier of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The assignee of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string assignee = 2;</code>
     */
    protected $assignee = '';
    /**
     * The description of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * The link to the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string uri = 4;</code>
     */
    protected $uri = '';
    /**
     * The latest status of the ticket, as reported by the ticket system.
     *
     * Generated from protobuf field <code>string status = 5;</code>
     */
    protected $status = '';
    /**
     * The time when the ticket was last updated, as reported by the ticket
     * system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The identifier of the ticket in the ticket system.
     *     @type string $assignee
     *           The assignee of the ticket in the ticket system.
     *     @type string $description
     *           The description of the ticket in the ticket system.
     *     @type string $uri
     *           The link to the ticket in the ticket system.
     *     @type string $status
     *           The latest status of the ticket, as reported by the ticket system.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The time when the ticket was last updated, as reported by the ticket
     *           system.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\ExternalSystem::initOnce();
        parent::__construct($data);
    }

    /**
     * The identifier of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The identifier of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string id = 1;</code>
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
     * The assignee of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string assignee = 2;</code>
     * @return string
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * The assignee of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string assignee = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAssignee($var)
    {
        GPBUtil::checkString($var, True);
        $this->assignee = $var;

        return $this;
    }

    /**
     * The description of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The link to the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string uri = 4;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The link to the ticket in the ticket system.
     *
     * Generated from protobuf field <code>string uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The latest status of the ticket, as reported by the ticket system.
     *
     * Generated from protobuf field <code>string status = 5;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The latest status of the ticket, as reported by the ticket system.
     *
     * Generated from protobuf field <code>string status = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * The time when the ticket was last updated, as reported by the ticket
     * system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The time when the ticket was last updated, as reported by the ticket
     * system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}


