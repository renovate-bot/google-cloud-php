<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup_schedule.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [ListBackupSchedules][google.spanner.admin.database.v1.DatabaseAdmin.ListBackupSchedules].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.ListBackupSchedulesRequest</code>
 */
class ListBackupSchedulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Database is the parent resource whose backup schedules should be
     * listed. Values are of the form
     * projects/<project>/instances/<instance>/databases/<database>
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Number of backup schedules to be returned in the response. If 0
     * or less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListBackupSchedulesResponse.next_page_token]
     * from a previous
     * [ListBackupSchedulesResponse][google.spanner.admin.database.v1.ListBackupSchedulesResponse]
     * to the same `parent`.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. Database is the parent resource whose backup schedules should be
     *                       listed. Values are of the form
     *                       projects/<project>/instances/<instance>/databases/<database>
     *                       Please see {@see DatabaseAdminClient::databaseName()} for help formatting this field.
     *
     * @return \Google\Cloud\Spanner\Admin\Database\V1\ListBackupSchedulesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Database is the parent resource whose backup schedules should be
     *           listed. Values are of the form
     *           projects/<project>/instances/<instance>/databases/<database>
     *     @type int $page_size
     *           Optional. Number of backup schedules to be returned in the response. If 0
     *           or less, defaults to the server's maximum allowed page size.
     *     @type string $page_token
     *           Optional. If non-empty, `page_token` should contain a
     *           [next_page_token][google.spanner.admin.database.v1.ListBackupSchedulesResponse.next_page_token]
     *           from a previous
     *           [ListBackupSchedulesResponse][google.spanner.admin.database.v1.ListBackupSchedulesResponse]
     *           to the same `parent`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\BackupSchedule::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Database is the parent resource whose backup schedules should be
     * listed. Values are of the form
     * projects/<project>/instances/<instance>/databases/<database>
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Database is the parent resource whose backup schedules should be
     * listed. Values are of the form
     * projects/<project>/instances/<instance>/databases/<database>
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
     * Optional. Number of backup schedules to be returned in the response. If 0
     * or less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Number of backup schedules to be returned in the response. If 0
     * or less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListBackupSchedulesResponse.next_page_token]
     * from a previous
     * [ListBackupSchedulesResponse][google.spanner.admin.database.v1.ListBackupSchedulesResponse]
     * to the same `parent`.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListBackupSchedulesResponse.next_page_token]
     * from a previous
     * [ListBackupSchedulesResponse][google.spanner.admin.database.v1.ListBackupSchedulesResponse]
     * to the same `parent`.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

