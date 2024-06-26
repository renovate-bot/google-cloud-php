<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.DeleteTable][google.bigtable.admin.v2.BigtableTableAdmin.DeleteTable]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.DeleteTableRequest</code>
 */
class DeleteTableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the table to be deleted.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The unique name of the table to be deleted.
     *                     Values are of the form
     *                     `projects/{project}/instances/{instance}/tables/{table}`. Please see
     *                     {@see BigtableTableAdminClient::tableName()} for help formatting this field.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\DeleteTableRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique name of the table to be deleted.
     *           Values are of the form
     *           `projects/{project}/instances/{instance}/tables/{table}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the table to be deleted.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique name of the table to be deleted.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

