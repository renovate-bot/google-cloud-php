<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a reservation block resource.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ReservationBlock</code>
 */
class ReservationBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The number of resources that are allocated in this reservation block.
     *
     * Generated from protobuf field <code>optional int32 count = 94851343;</code>
     */
    private $count = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * [Output Only] Health information for the reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationBlockHealthInfo health_info = 235287729;</code>
     */
    private $health_info = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] The number of instances that are currently in use on this reservation block.
     *
     * Generated from protobuf field <code>optional int32 in_use_count = 493458877;</code>
     */
    private $in_use_count = null;
    /**
     * [Output Only] Type of the resource. Always compute#reservationBlock for reservation blocks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] The name of this reservation block generated by Google Compute Engine. The name must be 1-63 characters long, and comply with RFC1035 &#64;pattern [a-z](?:[-a-z0-9]{0,61}[a-z0-9])?
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] The physical topology of the reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationBlockPhysicalTopology physical_topology = 279778519;</code>
     */
    private $physical_topology = null;
    /**
     * [Output Only] Maintenance information for this reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.GroupMaintenanceInfo reservation_maintenance = 340607776;</code>
     */
    private $reservation_maintenance = null;
    /**
     * [Output Only] The number of reservation subBlocks associated with this reservation block.
     *
     * Generated from protobuf field <code>optional int32 reservation_sub_block_count = 330782955;</code>
     */
    private $reservation_sub_block_count = null;
    /**
     * [Output Only] The number of in-use reservation subBlocks associated with this reservation block. If at least one VM is running on a subBlock, it is considered in-use.
     *
     * Generated from protobuf field <code>optional int32 reservation_sub_block_in_use_count = 186007137;</code>
     */
    private $reservation_sub_block_in_use_count = null;
    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     */
    private $self_link_with_id = null;
    /**
     * [Output Only] Status of the reservation block.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * [Output Only] Zone in which the reservation block resides.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $count
     *           [Output Only] The number of resources that are allocated in this reservation block.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\ReservationBlockHealthInfo $health_info
     *           [Output Only] Health information for the reservation block.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type int $in_use_count
     *           [Output Only] The number of instances that are currently in use on this reservation block.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#reservationBlock for reservation blocks.
     *     @type string $name
     *           [Output Only] The name of this reservation block generated by Google Compute Engine. The name must be 1-63 characters long, and comply with RFC1035 &#64;pattern [a-z](?:[-a-z0-9]{0,61}[a-z0-9])?
     *     @type \Google\Cloud\Compute\V1\ReservationBlockPhysicalTopology $physical_topology
     *           [Output Only] The physical topology of the reservation block.
     *     @type \Google\Cloud\Compute\V1\GroupMaintenanceInfo $reservation_maintenance
     *           [Output Only] Maintenance information for this reservation block.
     *     @type int $reservation_sub_block_count
     *           [Output Only] The number of reservation subBlocks associated with this reservation block.
     *     @type int $reservation_sub_block_in_use_count
     *           [Output Only] The number of in-use reservation subBlocks associated with this reservation block. If at least one VM is running on a subBlock, it is considered in-use.
     *     @type string $self_link
     *           [Output Only] Server-defined fully-qualified URL for this resource.
     *     @type string $self_link_with_id
     *           [Output Only] Server-defined URL for this resource with the resource id.
     *     @type string $status
     *           [Output Only] Status of the reservation block.
     *           Check the Status enum for the list of possible values.
     *     @type string $zone
     *           [Output Only] Zone in which the reservation block resides.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The number of resources that are allocated in this reservation block.
     *
     * Generated from protobuf field <code>optional int32 count = 94851343;</code>
     * @return int
     */
    public function getCount()
    {
        return isset($this->count) ? $this->count : 0;
    }

    public function hasCount()
    {
        return isset($this->count);
    }

    public function clearCount()
    {
        unset($this->count);
    }

    /**
     * [Output Only] The number of resources that are allocated in this reservation block.
     *
     * Generated from protobuf field <code>optional int32 count = 94851343;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] Health information for the reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationBlockHealthInfo health_info = 235287729;</code>
     * @return \Google\Cloud\Compute\V1\ReservationBlockHealthInfo|null
     */
    public function getHealthInfo()
    {
        return $this->health_info;
    }

    public function hasHealthInfo()
    {
        return isset($this->health_info);
    }

    public function clearHealthInfo()
    {
        unset($this->health_info);
    }

    /**
     * [Output Only] Health information for the reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationBlockHealthInfo health_info = 235287729;</code>
     * @param \Google\Cloud\Compute\V1\ReservationBlockHealthInfo $var
     * @return $this
     */
    public function setHealthInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ReservationBlockHealthInfo::class);
        $this->health_info = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances that are currently in use on this reservation block.
     *
     * Generated from protobuf field <code>optional int32 in_use_count = 493458877;</code>
     * @return int
     */
    public function getInUseCount()
    {
        return isset($this->in_use_count) ? $this->in_use_count : 0;
    }

    public function hasInUseCount()
    {
        return isset($this->in_use_count);
    }

    public function clearInUseCount()
    {
        unset($this->in_use_count);
    }

    /**
     * [Output Only] The number of instances that are currently in use on this reservation block.
     *
     * Generated from protobuf field <code>optional int32 in_use_count = 493458877;</code>
     * @param int $var
     * @return $this
     */
    public function setInUseCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->in_use_count = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#reservationBlock for reservation blocks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#reservationBlock for reservation blocks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] The name of this reservation block generated by Google Compute Engine. The name must be 1-63 characters long, and comply with RFC1035 &#64;pattern [a-z](?:[-a-z0-9]{0,61}[a-z0-9])?
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * [Output Only] The name of this reservation block generated by Google Compute Engine. The name must be 1-63 characters long, and comply with RFC1035 &#64;pattern [a-z](?:[-a-z0-9]{0,61}[a-z0-9])?
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * [Output Only] The physical topology of the reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationBlockPhysicalTopology physical_topology = 279778519;</code>
     * @return \Google\Cloud\Compute\V1\ReservationBlockPhysicalTopology|null
     */
    public function getPhysicalTopology()
    {
        return $this->physical_topology;
    }

    public function hasPhysicalTopology()
    {
        return isset($this->physical_topology);
    }

    public function clearPhysicalTopology()
    {
        unset($this->physical_topology);
    }

    /**
     * [Output Only] The physical topology of the reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationBlockPhysicalTopology physical_topology = 279778519;</code>
     * @param \Google\Cloud\Compute\V1\ReservationBlockPhysicalTopology $var
     * @return $this
     */
    public function setPhysicalTopology($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ReservationBlockPhysicalTopology::class);
        $this->physical_topology = $var;

        return $this;
    }

    /**
     * [Output Only] Maintenance information for this reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.GroupMaintenanceInfo reservation_maintenance = 340607776;</code>
     * @return \Google\Cloud\Compute\V1\GroupMaintenanceInfo|null
     */
    public function getReservationMaintenance()
    {
        return $this->reservation_maintenance;
    }

    public function hasReservationMaintenance()
    {
        return isset($this->reservation_maintenance);
    }

    public function clearReservationMaintenance()
    {
        unset($this->reservation_maintenance);
    }

    /**
     * [Output Only] Maintenance information for this reservation block.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.GroupMaintenanceInfo reservation_maintenance = 340607776;</code>
     * @param \Google\Cloud\Compute\V1\GroupMaintenanceInfo $var
     * @return $this
     */
    public function setReservationMaintenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\GroupMaintenanceInfo::class);
        $this->reservation_maintenance = $var;

        return $this;
    }

    /**
     * [Output Only] The number of reservation subBlocks associated with this reservation block.
     *
     * Generated from protobuf field <code>optional int32 reservation_sub_block_count = 330782955;</code>
     * @return int
     */
    public function getReservationSubBlockCount()
    {
        return isset($this->reservation_sub_block_count) ? $this->reservation_sub_block_count : 0;
    }

    public function hasReservationSubBlockCount()
    {
        return isset($this->reservation_sub_block_count);
    }

    public function clearReservationSubBlockCount()
    {
        unset($this->reservation_sub_block_count);
    }

    /**
     * [Output Only] The number of reservation subBlocks associated with this reservation block.
     *
     * Generated from protobuf field <code>optional int32 reservation_sub_block_count = 330782955;</code>
     * @param int $var
     * @return $this
     */
    public function setReservationSubBlockCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->reservation_sub_block_count = $var;

        return $this;
    }

    /**
     * [Output Only] The number of in-use reservation subBlocks associated with this reservation block. If at least one VM is running on a subBlock, it is considered in-use.
     *
     * Generated from protobuf field <code>optional int32 reservation_sub_block_in_use_count = 186007137;</code>
     * @return int
     */
    public function getReservationSubBlockInUseCount()
    {
        return isset($this->reservation_sub_block_in_use_count) ? $this->reservation_sub_block_in_use_count : 0;
    }

    public function hasReservationSubBlockInUseCount()
    {
        return isset($this->reservation_sub_block_in_use_count);
    }

    public function clearReservationSubBlockInUseCount()
    {
        unset($this->reservation_sub_block_in_use_count);
    }

    /**
     * [Output Only] The number of in-use reservation subBlocks associated with this reservation block. If at least one VM is running on a subBlock, it is considered in-use.
     *
     * Generated from protobuf field <code>optional int32 reservation_sub_block_in_use_count = 186007137;</code>
     * @param int $var
     * @return $this
     */
    public function setReservationSubBlockInUseCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->reservation_sub_block_in_use_count = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @return string
     */
    public function getSelfLinkWithId()
    {
        return isset($this->self_link_with_id) ? $this->self_link_with_id : '';
    }

    public function hasSelfLinkWithId()
    {
        return isset($this->self_link_with_id);
    }

    public function clearSelfLinkWithId()
    {
        unset($this->self_link_with_id);
    }

    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLinkWithId($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link_with_id = $var;

        return $this;
    }

    /**
     * [Output Only] Status of the reservation block.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] Status of the reservation block.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
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
     * [Output Only] Zone in which the reservation block resides.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] Zone in which the reservation block resides.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

