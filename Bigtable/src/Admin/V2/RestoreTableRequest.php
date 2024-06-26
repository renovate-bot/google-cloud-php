<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [RestoreTable][google.bigtable.admin.v2.BigtableTableAdmin.RestoreTable].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.RestoreTableRequest</code>
 */
class RestoreTableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the instance in which to create the restored
     * table. Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The id of the table to create and restore to. This
     * table must not already exist. The `table_id` appended to
     * `parent` forms the full table name of the form
     * `projects/<project>/instances/<instance>/tables/<table_id>`.
     *
     * Generated from protobuf field <code>string table_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table_id = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the instance in which to create the restored
     *           table. Values are of the form `projects/<project>/instances/<instance>`.
     *     @type string $table_id
     *           Required. The id of the table to create and restore to. This
     *           table must not already exist. The `table_id` appended to
     *           `parent` forms the full table name of the form
     *           `projects/<project>/instances/<instance>/tables/<table_id>`.
     *     @type string $backup
     *           Name of the backup from which to restore.  Values are of the form
     *           `projects/<project>/instances/<instance>/clusters/<cluster>/backups/<backup>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the instance in which to create the restored
     * table. Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the instance in which to create the restored
     * table. Values are of the form `projects/<project>/instances/<instance>`.
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
     * Required. The id of the table to create and restore to. This
     * table must not already exist. The `table_id` appended to
     * `parent` forms the full table name of the form
     * `projects/<project>/instances/<instance>/tables/<table_id>`.
     *
     * Generated from protobuf field <code>string table_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * Required. The id of the table to create and restore to. This
     * table must not already exist. The `table_id` appended to
     * `parent` forms the full table name of the form
     * `projects/<project>/instances/<instance>/tables/<table_id>`.
     *
     * Generated from protobuf field <code>string table_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;

        return $this;
    }

    /**
     * Name of the backup from which to restore.  Values are of the form
     * `projects/<project>/instances/<instance>/clusters/<cluster>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string backup = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBackup()
    {
        return $this->readOneof(3);
    }

    public function hasBackup()
    {
        return $this->hasOneof(3);
    }

    /**
     * Name of the backup from which to restore.  Values are of the form
     * `projects/<project>/instances/<instance>/clusters/<cluster>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string backup = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

