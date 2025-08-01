<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message describing a Backup object.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.Backup</code>
 */
class Backup extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. Name of the backup to create. It must have the
     * format`"projects/<project>/locations/<location>/backupVaults/<backupvault>/dataSources/{datasource}/backups/{backup}"`.
     * `{backup}` cannot be changed after creation. It must be between 3-63
     * characters long and must be unique within the datasource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. The description of the Backup instance (2048 characters or
     * less).
     *
     * Generated from protobuf field <code>optional string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $description = null;
    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Resource labels to represent user provided metadata.
     * No labels currently defined.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. The backup can not be deleted before this time.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp enforced_retention_end_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enforced_retention_end_time = null;
    /**
     * Optional. When this backup is automatically expired.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp expire_time = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $expire_time = null;
    /**
     * Output only. The point in time when this backup was captured from the
     * source.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consistency_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $consistency_time = null;
    /**
     * Optional. Server specified ETag to prevent updates from overwriting each
     * other.
     *
     * Generated from protobuf field <code>optional string etag = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = null;
    /**
     * Output only. The Backup resource instance state.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The list of BackupLocks taken by the service to prevent the
     * deletion of the backup.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupLock service_locks = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_locks;
    /**
     * Optional. The list of BackupLocks taken by the accessor Backup Appliance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupLock backup_appliance_locks = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $backup_appliance_locks;
    /**
     * Output only. Type of the backup, unspecified, scheduled or ondemand.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.BackupType backup_type = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $backup_type = 0;
    /**
     * Output only. source resource size in bytes at the time of the backup.
     *
     * Generated from protobuf field <code>int64 resource_size_bytes = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $resource_size_bytes = 0;
    /**
     * Optional. Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 24 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $satisfies_pzs = null;
    /**
     * Optional. Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzi = 25 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $satisfies_pzi = null;
    protected $backup_properties;
    protected $plan_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. Name of the backup to create. It must have the
     *           format`"projects/<project>/locations/<location>/backupVaults/<backupvault>/dataSources/{datasource}/backups/{backup}"`.
     *           `{backup}` cannot be changed after creation. It must be between 3-63
     *           characters long and must be unique within the datasource.
     *     @type string $description
     *           Output only. The description of the Backup instance (2048 characters or
     *           less).
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the instance was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the instance was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Resource labels to represent user provided metadata.
     *           No labels currently defined.
     *     @type \Google\Protobuf\Timestamp $enforced_retention_end_time
     *           Optional. The backup can not be deleted before this time.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Optional. When this backup is automatically expired.
     *     @type \Google\Protobuf\Timestamp $consistency_time
     *           Output only. The point in time when this backup was captured from the
     *           source.
     *     @type string $etag
     *           Optional. Server specified ETag to prevent updates from overwriting each
     *           other.
     *     @type int $state
     *           Output only. The Backup resource instance state.
     *     @type array<\Google\Cloud\BackupDR\V1\BackupLock>|\Google\Protobuf\Internal\RepeatedField $service_locks
     *           Output only. The list of BackupLocks taken by the service to prevent the
     *           deletion of the backup.
     *     @type array<\Google\Cloud\BackupDR\V1\BackupLock>|\Google\Protobuf\Internal\RepeatedField $backup_appliance_locks
     *           Optional. The list of BackupLocks taken by the accessor Backup Appliance.
     *     @type \Google\Cloud\BackupDR\V1\ComputeInstanceBackupProperties $compute_instance_backup_properties
     *           Output only. Compute Engine specific backup properties.
     *     @type \Google\Cloud\BackupDR\V1\CloudSqlInstanceBackupProperties $cloud_sql_instance_backup_properties
     *           Output only. Cloud SQL specific backup properties.
     *     @type \Google\Cloud\BackupDR\V1\BackupApplianceBackupProperties $backup_appliance_backup_properties
     *           Output only. Backup Appliance specific backup properties.
     *     @type \Google\Cloud\BackupDR\V1\DiskBackupProperties $disk_backup_properties
     *           Output only. Disk specific backup properties.
     *     @type int $backup_type
     *           Output only. Type of the backup, unspecified, scheduled or ondemand.
     *     @type \Google\Cloud\BackupDR\V1\Backup\GCPBackupPlanInfo $gcp_backup_plan_info
     *           Output only. Configuration for a Google Cloud resource.
     *     @type int|string $resource_size_bytes
     *           Output only. source resource size in bytes at the time of the backup.
     *     @type bool $satisfies_pzs
     *           Optional. Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Optional. Output only. Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. Name of the backup to create. It must have the
     * format`"projects/<project>/locations/<location>/backupVaults/<backupvault>/dataSources/{datasource}/backups/{backup}"`.
     * `{backup}` cannot be changed after creation. It must be between 3-63
     * characters long and must be unique within the datasource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. Name of the backup to create. It must have the
     * format`"projects/<project>/locations/<location>/backupVaults/<backupvault>/dataSources/{datasource}/backups/{backup}"`.
     * `{backup}` cannot be changed after creation. It must be between 3-63
     * characters long and must be unique within the datasource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. The description of the Backup instance (2048 characters or
     * less).
     *
     * Generated from protobuf field <code>optional string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Output only. The description of the Backup instance (2048 characters or
     * less).
     *
     * Generated from protobuf field <code>optional string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Resource labels to represent user provided metadata.
     * No labels currently defined.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Resource labels to represent user provided metadata.
     * No labels currently defined.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. The backup can not be deleted before this time.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp enforced_retention_end_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEnforcedRetentionEndTime()
    {
        return $this->enforced_retention_end_time;
    }

    public function hasEnforcedRetentionEndTime()
    {
        return isset($this->enforced_retention_end_time);
    }

    public function clearEnforcedRetentionEndTime()
    {
        unset($this->enforced_retention_end_time);
    }

    /**
     * Optional. The backup can not be deleted before this time.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp enforced_retention_end_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEnforcedRetentionEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->enforced_retention_end_time = $var;

        return $this;
    }

    /**
     * Optional. When this backup is automatically expired.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp expire_time = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Optional. When this backup is automatically expired.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp expire_time = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Output only. The point in time when this backup was captured from the
     * source.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consistency_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getConsistencyTime()
    {
        return $this->consistency_time;
    }

    public function hasConsistencyTime()
    {
        return isset($this->consistency_time);
    }

    public function clearConsistencyTime()
    {
        unset($this->consistency_time);
    }

    /**
     * Output only. The point in time when this backup was captured from the
     * source.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consistency_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setConsistencyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->consistency_time = $var;

        return $this;
    }

    /**
     * Optional. Server specified ETag to prevent updates from overwriting each
     * other.
     *
     * Generated from protobuf field <code>optional string etag = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return isset($this->etag) ? $this->etag : '';
    }

    public function hasEtag()
    {
        return isset($this->etag);
    }

    public function clearEtag()
    {
        unset($this->etag);
    }

    /**
     * Optional. Server specified ETag to prevent updates from overwriting each
     * other.
     *
     * Generated from protobuf field <code>optional string etag = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. The Backup resource instance state.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The Backup resource instance state.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\Backup\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The list of BackupLocks taken by the service to prevent the
     * deletion of the backup.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupLock service_locks = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceLocks()
    {
        return $this->service_locks;
    }

    /**
     * Output only. The list of BackupLocks taken by the service to prevent the
     * deletion of the backup.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupLock service_locks = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\BackupDR\V1\BackupLock>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceLocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BackupDR\V1\BackupLock::class);
        $this->service_locks = $arr;

        return $this;
    }

    /**
     * Optional. The list of BackupLocks taken by the accessor Backup Appliance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupLock backup_appliance_locks = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBackupApplianceLocks()
    {
        return $this->backup_appliance_locks;
    }

    /**
     * Optional. The list of BackupLocks taken by the accessor Backup Appliance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupLock backup_appliance_locks = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\BackupDR\V1\BackupLock>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBackupApplianceLocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BackupDR\V1\BackupLock::class);
        $this->backup_appliance_locks = $arr;

        return $this;
    }

    /**
     * Output only. Compute Engine specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ComputeInstanceBackupProperties compute_instance_backup_properties = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\ComputeInstanceBackupProperties|null
     */
    public function getComputeInstanceBackupProperties()
    {
        return $this->readOneof(19);
    }

    public function hasComputeInstanceBackupProperties()
    {
        return $this->hasOneof(19);
    }

    /**
     * Output only. Compute Engine specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ComputeInstanceBackupProperties compute_instance_backup_properties = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\ComputeInstanceBackupProperties $var
     * @return $this
     */
    public function setComputeInstanceBackupProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\ComputeInstanceBackupProperties::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Output only. Cloud SQL specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.CloudSqlInstanceBackupProperties cloud_sql_instance_backup_properties = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\CloudSqlInstanceBackupProperties|null
     */
    public function getCloudSqlInstanceBackupProperties()
    {
        return $this->readOneof(26);
    }

    public function hasCloudSqlInstanceBackupProperties()
    {
        return $this->hasOneof(26);
    }

    /**
     * Output only. Cloud SQL specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.CloudSqlInstanceBackupProperties cloud_sql_instance_backup_properties = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\CloudSqlInstanceBackupProperties $var
     * @return $this
     */
    public function setCloudSqlInstanceBackupProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\CloudSqlInstanceBackupProperties::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * Output only. Backup Appliance specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupApplianceBackupProperties backup_appliance_backup_properties = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\BackupApplianceBackupProperties|null
     */
    public function getBackupApplianceBackupProperties()
    {
        return $this->readOneof(21);
    }

    public function hasBackupApplianceBackupProperties()
    {
        return $this->hasOneof(21);
    }

    /**
     * Output only. Backup Appliance specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupApplianceBackupProperties backup_appliance_backup_properties = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\BackupApplianceBackupProperties $var
     * @return $this
     */
    public function setBackupApplianceBackupProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\BackupApplianceBackupProperties::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Output only. Disk specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.DiskBackupProperties disk_backup_properties = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\DiskBackupProperties|null
     */
    public function getDiskBackupProperties()
    {
        return $this->readOneof(28);
    }

    public function hasDiskBackupProperties()
    {
        return $this->hasOneof(28);
    }

    /**
     * Output only. Disk specific backup properties.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.DiskBackupProperties disk_backup_properties = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\DiskBackupProperties $var
     * @return $this
     */
    public function setDiskBackupProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\DiskBackupProperties::class);
        $this->writeOneof(28, $var);

        return $this;
    }

    /**
     * Output only. Type of the backup, unspecified, scheduled or ondemand.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.BackupType backup_type = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getBackupType()
    {
        return $this->backup_type;
    }

    /**
     * Output only. Type of the backup, unspecified, scheduled or ondemand.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.BackupType backup_type = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setBackupType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\Backup\BackupType::class);
        $this->backup_type = $var;

        return $this;
    }

    /**
     * Output only. Configuration for a Google Cloud resource.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.GCPBackupPlanInfo gcp_backup_plan_info = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BackupDR\V1\Backup\GCPBackupPlanInfo|null
     */
    public function getGcpBackupPlanInfo()
    {
        return $this->readOneof(22);
    }

    public function hasGcpBackupPlanInfo()
    {
        return $this->hasOneof(22);
    }

    /**
     * Output only. Configuration for a Google Cloud resource.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.Backup.GCPBackupPlanInfo gcp_backup_plan_info = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BackupDR\V1\Backup\GCPBackupPlanInfo $var
     * @return $this
     */
    public function setGcpBackupPlanInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\Backup\GCPBackupPlanInfo::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Output only. source resource size in bytes at the time of the backup.
     *
     * Generated from protobuf field <code>int64 resource_size_bytes = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getResourceSizeBytes()
    {
        return $this->resource_size_bytes;
    }

    /**
     * Output only. source resource size in bytes at the time of the backup.
     *
     * Generated from protobuf field <code>int64 resource_size_bytes = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setResourceSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->resource_size_bytes = $var;

        return $this;
    }

    /**
     * Optional. Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 24 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return isset($this->satisfies_pzs) ? $this->satisfies_pzs : false;
    }

    public function hasSatisfiesPzs()
    {
        return isset($this->satisfies_pzs);
    }

    public function clearSatisfiesPzs()
    {
        unset($this->satisfies_pzs);
    }

    /**
     * Optional. Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 24 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Optional. Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzi = 25 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return isset($this->satisfies_pzi) ? $this->satisfies_pzi : false;
    }

    public function hasSatisfiesPzi()
    {
        return isset($this->satisfies_pzi);
    }

    public function clearSatisfiesPzi()
    {
        unset($this->satisfies_pzi);
    }

    /**
     * Optional. Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzi = 25 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackupProperties()
    {
        return $this->whichOneof("backup_properties");
    }

    /**
     * @return string
     */
    public function getPlanInfo()
    {
        return $this->whichOneof("plan_info");
    }

}

