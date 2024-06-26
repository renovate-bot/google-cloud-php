<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_backup_runs.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Backup run list results.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.BackupRunsListResponse</code>
 */
class BackupRunsListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#backupRunsList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    protected $kind = '';
    /**
     * A list of backup runs in reverse chronological order of the enqueued time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.BackupRun items = 2;</code>
     */
    private $items;
    /**
     * The continuation token, used to page through large result sets. Provide
     * this value in a subsequent request to return the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#backupRunsList`.
     *     @type array<\Google\Cloud\Sql\V1\BackupRun>|\Google\Protobuf\Internal\RepeatedField $items
     *           A list of backup runs in reverse chronological order of the enqueued time.
     *     @type string $next_page_token
     *           The continuation token, used to page through large result sets. Provide
     *           this value in a subsequent request to return the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlBackupRuns::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#backupRunsList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#backupRunsList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
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
     * A list of backup runs in reverse chronological order of the enqueued time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.BackupRun items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * A list of backup runs in reverse chronological order of the enqueued time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.BackupRun items = 2;</code>
     * @param array<\Google\Cloud\Sql\V1\BackupRun>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1\BackupRun::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * The continuation token, used to page through large result sets. Provide
     * this value in a subsequent request to return the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The continuation token, used to page through large result sets. Provide
     * this value in a subsequent request to return the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

