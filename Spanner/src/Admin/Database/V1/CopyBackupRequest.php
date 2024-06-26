<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [CopyBackup][google.spanner.admin.database.v1.DatabaseAdmin.CopyBackup].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.CopyBackupRequest</code>
 */
class CopyBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the destination instance that will contain the backup
     * copy. Values are of the form: `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The id of the backup copy.
     * The `backup_id` appended to `parent` forms the full backup_uri of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backup_id = '';
    /**
     * Required. The source backup to be copied.
     * The source backup needs to be in READY state for it to be copied.
     * Once CopyBackup is in progress, the source backup cannot be deleted or
     * cleaned up on expiration until CopyBackup is finished.
     * Values are of the form:
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string source_backup = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $source_backup = '';
    /**
     * Required. The expiration time of the backup in microsecond granularity.
     * The expiration time must be at least 6 hours and at most 366 days
     * from the `create_time` of the source backup. Once the `expire_time` has
     * passed, the backup is eligible to be automatically deleted by Cloud Spanner
     * to free the resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $expire_time = null;
    /**
     * Optional. The encryption configuration used to encrypt the backup. If this
     * field is not specified, the backup will use the same encryption
     * configuration as the source backup by default, namely
     * [encryption_type][google.spanner.admin.database.v1.CopyBackupEncryptionConfig.encryption_type]
     * = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CopyBackupEncryptionConfig encryption_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $encryption_config = null;

    /**
     * @param string                     $parent       Required. The name of the destination instance that will contain the backup
     *                                                 copy. Values are of the form: `projects/<project>/instances/<instance>`. Please see
     *                                                 {@see DatabaseAdminClient::instanceName()} for help formatting this field.
     * @param string                     $backupId     Required. The id of the backup copy.
     *                                                 The `backup_id` appended to `parent` forms the full backup_uri of the form
     *                                                 `projects/<project>/instances/<instance>/backups/<backup>`.
     * @param string                     $sourceBackup Required. The source backup to be copied.
     *                                                 The source backup needs to be in READY state for it to be copied.
     *                                                 Once CopyBackup is in progress, the source backup cannot be deleted or
     *                                                 cleaned up on expiration until CopyBackup is finished.
     *                                                 Values are of the form:
     *                                                 `projects/<project>/instances/<instance>/backups/<backup>`. Please see
     *                                                 {@see DatabaseAdminClient::backupName()} for help formatting this field.
     * @param \Google\Protobuf\Timestamp $expireTime   Required. The expiration time of the backup in microsecond granularity.
     *                                                 The expiration time must be at least 6 hours and at most 366 days
     *                                                 from the `create_time` of the source backup. Once the `expire_time` has
     *                                                 passed, the backup is eligible to be automatically deleted by Cloud Spanner
     *                                                 to free the resources used by the backup.
     *
     * @return \Google\Cloud\Spanner\Admin\Database\V1\CopyBackupRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $backupId, string $sourceBackup, \Google\Protobuf\Timestamp $expireTime): self
    {
        return (new self())
            ->setParent($parent)
            ->setBackupId($backupId)
            ->setSourceBackup($sourceBackup)
            ->setExpireTime($expireTime);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the destination instance that will contain the backup
     *           copy. Values are of the form: `projects/<project>/instances/<instance>`.
     *     @type string $backup_id
     *           Required. The id of the backup copy.
     *           The `backup_id` appended to `parent` forms the full backup_uri of the form
     *           `projects/<project>/instances/<instance>/backups/<backup>`.
     *     @type string $source_backup
     *           Required. The source backup to be copied.
     *           The source backup needs to be in READY state for it to be copied.
     *           Once CopyBackup is in progress, the source backup cannot be deleted or
     *           cleaned up on expiration until CopyBackup is finished.
     *           Values are of the form:
     *           `projects/<project>/instances/<instance>/backups/<backup>`.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Required. The expiration time of the backup in microsecond granularity.
     *           The expiration time must be at least 6 hours and at most 366 days
     *           from the `create_time` of the source backup. Once the `expire_time` has
     *           passed, the backup is eligible to be automatically deleted by Cloud Spanner
     *           to free the resources used by the backup.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\CopyBackupEncryptionConfig $encryption_config
     *           Optional. The encryption configuration used to encrypt the backup. If this
     *           field is not specified, the backup will use the same encryption
     *           configuration as the source backup by default, namely
     *           [encryption_type][google.spanner.admin.database.v1.CopyBackupEncryptionConfig.encryption_type]
     *           = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the destination instance that will contain the backup
     * copy. Values are of the form: `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the destination instance that will contain the backup
     * copy. Values are of the form: `projects/<project>/instances/<instance>`.
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
     * Required. The id of the backup copy.
     * The `backup_id` appended to `parent` forms the full backup_uri of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * Required. The id of the backup copy.
     * The `backup_id` appended to `parent` forms the full backup_uri of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_id = $var;

        return $this;
    }

    /**
     * Required. The source backup to be copied.
     * The source backup needs to be in READY state for it to be copied.
     * Once CopyBackup is in progress, the source backup cannot be deleted or
     * cleaned up on expiration until CopyBackup is finished.
     * Values are of the form:
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string source_backup = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSourceBackup()
    {
        return $this->source_backup;
    }

    /**
     * Required. The source backup to be copied.
     * The source backup needs to be in READY state for it to be copied.
     * Once CopyBackup is in progress, the source backup cannot be deleted or
     * cleaned up on expiration until CopyBackup is finished.
     * Values are of the form:
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string source_backup = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSourceBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_backup = $var;

        return $this;
    }

    /**
     * Required. The expiration time of the backup in microsecond granularity.
     * The expiration time must be at least 6 hours and at most 366 days
     * from the `create_time` of the source backup. Once the `expire_time` has
     * passed, the backup is eligible to be automatically deleted by Cloud Spanner
     * to free the resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The expiration time of the backup in microsecond granularity.
     * The expiration time must be at least 6 hours and at most 366 days
     * from the `create_time` of the source backup. Once the `expire_time` has
     * passed, the backup is eligible to be automatically deleted by Cloud Spanner
     * to free the resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. The encryption configuration used to encrypt the backup. If this
     * field is not specified, the backup will use the same encryption
     * configuration as the source backup by default, namely
     * [encryption_type][google.spanner.admin.database.v1.CopyBackupEncryptionConfig.encryption_type]
     * = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CopyBackupEncryptionConfig encryption_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\CopyBackupEncryptionConfig|null
     */
    public function getEncryptionConfig()
    {
        return $this->encryption_config;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Optional. The encryption configuration used to encrypt the backup. If this
     * field is not specified, the backup will use the same encryption
     * configuration as the source backup by default, namely
     * [encryption_type][google.spanner.admin.database.v1.CopyBackupEncryptionConfig.encryption_type]
     * = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CopyBackupEncryptionConfig encryption_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\CopyBackupEncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\CopyBackupEncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

}

