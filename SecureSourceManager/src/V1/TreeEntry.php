<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securesourcemanager/v1/secure_source_manager.proto

namespace Google\Cloud\SecureSourceManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an entry within a tree structure (like a Git tree).
 *
 * Generated from protobuf message <code>google.cloud.securesourcemanager.v1.TreeEntry</code>
 */
class TreeEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The type of the object (TREE, BLOB, COMMIT).  Output-only.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.TreeEntry.ObjectType type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Output only. The SHA-1 hash of the object (unique identifier). Output-only.
     *
     * Generated from protobuf field <code>string sha = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $sha = '';
    /**
     * Output only. The path of the file or directory within the tree (e.g.,
     * "src/main/java/MyClass.java"). Output-only.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $path = '';
    /**
     * Output only. The file mode as a string (e.g., "100644"). Indicates file
     * type. Output-only.
     *
     * Generated from protobuf field <code>string mode = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $mode = '';
    /**
     * Output only. The size of the object in bytes (only for blobs). Output-only.
     *
     * Generated from protobuf field <code>int64 size = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Output only. The type of the object (TREE, BLOB, COMMIT).  Output-only.
     *     @type string $sha
     *           Output only. The SHA-1 hash of the object (unique identifier). Output-only.
     *     @type string $path
     *           Output only. The path of the file or directory within the tree (e.g.,
     *           "src/main/java/MyClass.java"). Output-only.
     *     @type string $mode
     *           Output only. The file mode as a string (e.g., "100644"). Indicates file
     *           type. Output-only.
     *     @type int|string $size
     *           Output only. The size of the object in bytes (only for blobs). Output-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securesourcemanager\V1\SecureSourceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The type of the object (TREE, BLOB, COMMIT).  Output-only.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.TreeEntry.ObjectType type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the object (TREE, BLOB, COMMIT).  Output-only.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.TreeEntry.ObjectType type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecureSourceManager\V1\TreeEntry\ObjectType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The SHA-1 hash of the object (unique identifier). Output-only.
     *
     * Generated from protobuf field <code>string sha = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * Output only. The SHA-1 hash of the object (unique identifier). Output-only.
     *
     * Generated from protobuf field <code>string sha = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSha($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha = $var;

        return $this;
    }

    /**
     * Output only. The path of the file or directory within the tree (e.g.,
     * "src/main/java/MyClass.java"). Output-only.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Output only. The path of the file or directory within the tree (e.g.,
     * "src/main/java/MyClass.java"). Output-only.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Output only. The file mode as a string (e.g., "100644"). Indicates file
     * type. Output-only.
     *
     * Generated from protobuf field <code>string mode = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Output only. The file mode as a string (e.g., "100644"). Indicates file
     * type. Output-only.
     *
     * Generated from protobuf field <code>string mode = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Output only. The size of the object in bytes (only for blobs). Output-only.
     *
     * Generated from protobuf field <code>int64 size = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Output only. The size of the object in bytes (only for blobs). Output-only.
     *
     * Generated from protobuf field <code>int64 size = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

}

