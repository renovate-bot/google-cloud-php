<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/devicestreaming/v1/service.proto

namespace Google\Cloud\DeviceStreaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DirectAccessService.UpdateDeviceSession.
 *
 * Generated from protobuf message <code>google.cloud.devicestreaming.v1.UpdateDeviceSessionRequest</code>
 */
class UpdateDeviceSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. DeviceSession to update.
     * The DeviceSession's `name` field is used to identify the session to update
     * "projects/{project_id}/deviceSessions/{session_id}"
     *
     * Generated from protobuf field <code>.google.cloud.devicestreaming.v1.DeviceSession device_session = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $device_session = null;
    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\DeviceStreaming\V1\DeviceSession $deviceSession Required. DeviceSession to update.
     *                                                                      The DeviceSession's `name` field is used to identify the session to update
     *                                                                      "projects/{project_id}/deviceSessions/{session_id}"
     * @param \Google\Protobuf\FieldMask                     $updateMask    Optional. The list of fields to update.
     *
     * @return \Google\Cloud\DeviceStreaming\V1\UpdateDeviceSessionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\DeviceStreaming\V1\DeviceSession $deviceSession, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setDeviceSession($deviceSession)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DeviceStreaming\V1\DeviceSession $device_session
     *           Required. DeviceSession to update.
     *           The DeviceSession's `name` field is used to identify the session to update
     *           "projects/{project_id}/deviceSessions/{session_id}"
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The list of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Devicestreaming\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. DeviceSession to update.
     * The DeviceSession's `name` field is used to identify the session to update
     * "projects/{project_id}/deviceSessions/{session_id}"
     *
     * Generated from protobuf field <code>.google.cloud.devicestreaming.v1.DeviceSession device_session = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DeviceStreaming\V1\DeviceSession|null
     */
    public function getDeviceSession()
    {
        return $this->device_session;
    }

    public function hasDeviceSession()
    {
        return isset($this->device_session);
    }

    public function clearDeviceSession()
    {
        unset($this->device_session);
    }

    /**
     * Required. DeviceSession to update.
     * The DeviceSession's `name` field is used to identify the session to update
     * "projects/{project_id}/deviceSessions/{session_id}"
     *
     * Generated from protobuf field <code>.google.cloud.devicestreaming.v1.DeviceSession device_session = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DeviceStreaming\V1\DeviceSession $var
     * @return $this
     */
    public function setDeviceSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DeviceStreaming\V1\DeviceSession::class);
        $this->device_session = $var;

        return $this;
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

