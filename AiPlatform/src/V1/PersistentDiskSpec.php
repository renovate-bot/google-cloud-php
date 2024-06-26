<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/machine_resources.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the spec of [persistent
 * disk][https://cloud.google.com/compute/docs/disks/persistent-disks] options.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PersistentDiskSpec</code>
 */
class PersistentDiskSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the disk (default is "pd-standard").
     * Valid values: "pd-ssd" (Persistent Disk Solid State Drive)
     * "pd-standard" (Persistent Disk Hard Disk Drive)
     * "pd-balanced" (Balanced Persistent Disk)
     * "pd-extreme" (Extreme Persistent Disk)
     *
     * Generated from protobuf field <code>string disk_type = 1;</code>
     */
    protected $disk_type = '';
    /**
     * Size in GB of the disk (default is 100GB).
     *
     * Generated from protobuf field <code>int64 disk_size_gb = 2;</code>
     */
    protected $disk_size_gb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $disk_type
     *           Type of the disk (default is "pd-standard").
     *           Valid values: "pd-ssd" (Persistent Disk Solid State Drive)
     *           "pd-standard" (Persistent Disk Hard Disk Drive)
     *           "pd-balanced" (Balanced Persistent Disk)
     *           "pd-extreme" (Extreme Persistent Disk)
     *     @type int|string $disk_size_gb
     *           Size in GB of the disk (default is 100GB).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the disk (default is "pd-standard").
     * Valid values: "pd-ssd" (Persistent Disk Solid State Drive)
     * "pd-standard" (Persistent Disk Hard Disk Drive)
     * "pd-balanced" (Balanced Persistent Disk)
     * "pd-extreme" (Extreme Persistent Disk)
     *
     * Generated from protobuf field <code>string disk_type = 1;</code>
     * @return string
     */
    public function getDiskType()
    {
        return $this->disk_type;
    }

    /**
     * Type of the disk (default is "pd-standard").
     * Valid values: "pd-ssd" (Persistent Disk Solid State Drive)
     * "pd-standard" (Persistent Disk Hard Disk Drive)
     * "pd-balanced" (Balanced Persistent Disk)
     * "pd-extreme" (Extreme Persistent Disk)
     *
     * Generated from protobuf field <code>string disk_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDiskType($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk_type = $var;

        return $this;
    }

    /**
     * Size in GB of the disk (default is 100GB).
     *
     * Generated from protobuf field <code>int64 disk_size_gb = 2;</code>
     * @return int|string
     */
    public function getDiskSizeGb()
    {
        return $this->disk_size_gb;
    }

    /**
     * Size in GB of the disk (default is 100GB).
     *
     * Generated from protobuf field <code>int64 disk_size_gb = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_size_gb = $var;

        return $this;
    }

}

