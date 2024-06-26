<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/folders.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The CreateFolder request message.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.CreateFolderRequest</code>
 */
class CreateFolderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The folder being created, only the display name and parent will
     * be consulted. All other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Folder folder = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $folder = null;

    /**
     * @param \Google\Cloud\ResourceManager\V3\Folder $folder Required. The folder being created, only the display name and parent will
     *                                                        be consulted. All other fields will be ignored.
     *
     * @return \Google\Cloud\ResourceManager\V3\CreateFolderRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ResourceManager\V3\Folder $folder): self
    {
        return (new self())
            ->setFolder($folder);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ResourceManager\V3\Folder $folder
     *           Required. The folder being created, only the display name and parent will
     *           be consulted. All other fields will be ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Folders::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The folder being created, only the display name and parent will
     * be consulted. All other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Folder folder = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ResourceManager\V3\Folder|null
     */
    public function getFolder()
    {
        return $this->folder;
    }

    public function hasFolder()
    {
        return isset($this->folder);
    }

    public function clearFolder()
    {
        unset($this->folder);
    }

    /**
     * Required. The folder being created, only the display name and parent will
     * be consulted. All other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Folder folder = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ResourceManager\V3\Folder $var
     * @return $this
     */
    public function setFolder($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ResourceManager\V3\Folder::class);
        $this->folder = $var;

        return $this;
    }

}

