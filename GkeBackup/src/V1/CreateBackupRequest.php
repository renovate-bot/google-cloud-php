<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateBackup.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.CreateBackupRequest</code>
 */
class CreateBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The BackupPlan within which to create the Backup.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The Backup resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.Backup backup = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $backup = null;
    /**
     * Optional. The client-provided short name for the Backup resource.
     * This name must:
     * - be between 1 and 63 characters long (inclusive)
     * - consist of only lower-case ASCII letters, numbers, and dashes
     * - start with a lower-case letter
     * - end with a lower-case letter or number
     * - be unique within the set of Backups in this BackupPlan
     *
     * Generated from protobuf field <code>string backup_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $backup_id = '';

    /**
     * @param string                            $parent   Required. The BackupPlan within which to create the Backup.
     *                                                    Format: `projects/&#42;/locations/&#42;/backupPlans/*`
     *                                                    Please see {@see BackupForGKEClient::backupPlanName()} for help formatting this field.
     * @param \Google\Cloud\GkeBackup\V1\Backup $backup   Optional. The Backup resource to create.
     * @param string                            $backupId Optional. The client-provided short name for the Backup resource.
     *                                                    This name must:
     *
     *                                                    - be between 1 and 63 characters long (inclusive)
     *                                                    - consist of only lower-case ASCII letters, numbers, and dashes
     *                                                    - start with a lower-case letter
     *                                                    - end with a lower-case letter or number
     *                                                    - be unique within the set of Backups in this BackupPlan
     *
     * @return \Google\Cloud\GkeBackup\V1\CreateBackupRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\GkeBackup\V1\Backup $backup, string $backupId): self
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
     *           Required. The BackupPlan within which to create the Backup.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
     *     @type \Google\Cloud\GkeBackup\V1\Backup $backup
     *           Optional. The Backup resource to create.
     *     @type string $backup_id
     *           Optional. The client-provided short name for the Backup resource.
     *           This name must:
     *           - be between 1 and 63 characters long (inclusive)
     *           - consist of only lower-case ASCII letters, numbers, and dashes
     *           - start with a lower-case letter
     *           - end with a lower-case letter or number
     *           - be unique within the set of Backups in this BackupPlan
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The BackupPlan within which to create the Backup.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The BackupPlan within which to create the Backup.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
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
     * Optional. The Backup resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.Backup backup = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeBackup\V1\Backup|null
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
     * Optional. The Backup resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.Backup backup = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeBackup\V1\Backup $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\Backup::class);
        $this->backup = $var;

        return $this;
    }

    /**
     * Optional. The client-provided short name for the Backup resource.
     * This name must:
     * - be between 1 and 63 characters long (inclusive)
     * - consist of only lower-case ASCII letters, numbers, and dashes
     * - start with a lower-case letter
     * - end with a lower-case letter or number
     * - be unique within the set of Backups in this BackupPlan
     *
     * Generated from protobuf field <code>string backup_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * Optional. The client-provided short name for the Backup resource.
     * This name must:
     * - be between 1 and 63 characters long (inclusive)
     * - consist of only lower-case ASCII letters, numbers, and dashes
     * - start with a lower-case letter
     * - end with a lower-case letter or number
     * - be unique within the set of Backups in this BackupPlan
     *
     * Generated from protobuf field <code>string backup_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_id = $var;

        return $this;
    }

}

