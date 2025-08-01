<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Output Only] The metros of Attachments in this group in this region.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectAttachmentGroupLogicalStructureRegionMetro</code>
 */
class InterconnectAttachmentGroupLogicalStructureRegionMetro extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectAttachmentGroupLogicalStructureRegionMetroFacility facilities = 536683137;</code>
     */
    private $facilities;
    /**
     * [Output Only] The name of the metro, as a three-letter lowercase string like "iad". This is the first component of the location of an Interconnect.
     *
     * Generated from protobuf field <code>optional string metro = 103787801;</code>
     */
    private $metro = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\InterconnectAttachmentGroupLogicalStructureRegionMetroFacility>|\Google\Protobuf\Internal\RepeatedField $facilities
     *     @type string $metro
     *           [Output Only] The name of the metro, as a three-letter lowercase string like "iad". This is the first component of the location of an Interconnect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectAttachmentGroupLogicalStructureRegionMetroFacility facilities = 536683137;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectAttachmentGroupLogicalStructureRegionMetroFacility facilities = 536683137;</code>
     * @param array<\Google\Cloud\Compute\V1\InterconnectAttachmentGroupLogicalStructureRegionMetroFacility>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFacilities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InterconnectAttachmentGroupLogicalStructureRegionMetroFacility::class);
        $this->facilities = $arr;

        return $this;
    }

    /**
     * [Output Only] The name of the metro, as a three-letter lowercase string like "iad". This is the first component of the location of an Interconnect.
     *
     * Generated from protobuf field <code>optional string metro = 103787801;</code>
     * @return string
     */
    public function getMetro()
    {
        return isset($this->metro) ? $this->metro : '';
    }

    public function hasMetro()
    {
        return isset($this->metro);
    }

    public function clearMetro()
    {
        unset($this->metro);
    }

    /**
     * [Output Only] The name of the metro, as a three-letter lowercase string like "iad". This is the first component of the location of an Interconnect.
     *
     * Generated from protobuf field <code>optional string metro = 103787801;</code>
     * @param string $var
     * @return $this
     */
    public function setMetro($var)
    {
        GPBUtil::checkString($var, True);
        $this->metro = $var;

        return $this;
    }

}

