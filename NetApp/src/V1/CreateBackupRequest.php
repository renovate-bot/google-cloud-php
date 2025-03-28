<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/backup.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateBackupRequest creates a backup.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.CreateBackupRequest</code>
 */
class CreateBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The NetApp backupVault to create the backups of, in the format
     * `projects/&#42;&#47;locations/&#42;&#47;backupVaults/{backup_vault_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID to use for the backup.
     * The ID must be unique within the specified backupVault.
     * Must contain only letters, numbers and hyphen, with the first
     * character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_id = '';
    /**
     * Required. A backup resource
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup = null;

    /**
     * @param string                         $parent   Required. The NetApp backupVault to create the backups of, in the format
     *                                                 `projects/&#42;/locations/&#42;/backupVaults/{backup_vault_id}`
     *                                                 Please see {@see NetAppClient::backupVaultName()} for help formatting this field.
     * @param \Google\Cloud\NetApp\V1\Backup $backup   Required. A backup resource
     * @param string                         $backupId Required. The ID to use for the backup.
     *                                                 The ID must be unique within the specified backupVault.
     *                                                 Must contain only letters, numbers and hyphen, with the first
     *                                                 character a letter, the last a letter or a
     *                                                 number, and a 63 character maximum.
     *
     * @return \Google\Cloud\NetApp\V1\CreateBackupRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetApp\V1\Backup $backup, string $backupId): self
    {
        return (new self())
            ->setParent($parent)
            ->setBackup($backup)
            ->setBackupId($backupId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The NetApp backupVault to create the backups of, in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;backupVaults/{backup_vault_id}`
     *     @type string $backup_id
     *           Required. The ID to use for the backup.
     *           The ID must be unique within the specified backupVault.
     *           Must contain only letters, numbers and hyphen, with the first
     *           character a letter, the last a letter or a
     *           number, and a 63 character maximum.
     *     @type \Google\Cloud\NetApp\V1\Backup $backup
     *           Required. A backup resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The NetApp backupVault to create the backups of, in the format
     * `projects/&#42;&#47;locations/&#42;&#47;backupVaults/{backup_vault_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The NetApp backupVault to create the backups of, in the format
     * `projects/&#42;&#47;locations/&#42;&#47;backupVaults/{backup_vault_id}`
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
     * Required. The ID to use for the backup.
     * The ID must be unique within the specified backupVault.
     * Must contain only letters, numbers and hyphen, with the first
     * character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * Required. The ID to use for the backup.
     * The ID must be unique within the specified backupVault.
     * Must contain only letters, numbers and hyphen, with the first
     * character a letter, the last a letter or a
     * number, and a 63 character maximum.
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
     * Required. A backup resource
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetApp\V1\Backup|null
     */
    public function getBackup()
    {
        return $this->backup;
    }

    public function hasBackup()
    {
        return isset($this->backup);
    }

    public function clearBackup()
    {
        unset($this->backup);
    }

    /**
     * Required. A backup resource
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetApp\V1\Backup $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\Backup::class);
        $this->backup = $var;

        return $this;
    }

}

