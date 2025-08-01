<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securesourcemanager/v1/secure_source_manager.proto

namespace Google\Cloud\SecureSourceManager\V1\PullRequestComment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The position of the code comment.
 *
 * Generated from protobuf message <code>google.cloud.securesourcemanager.v1.PullRequestComment.Position</code>
 */
class Position extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The path of the file.
     *
     * Generated from protobuf field <code>string path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $path = '';
    /**
     * Required. The line number of the comment. Positive value means it's on
     * the new side of the diff, negative value means it's on the old side.
     *
     * Generated from protobuf field <code>int64 line = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $line = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           Required. The path of the file.
     *     @type int|string $line
     *           Required. The line number of the comment. Positive value means it's on
     *           the new side of the diff, negative value means it's on the old side.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securesourcemanager\V1\SecureSourceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The path of the file.
     *
     * Generated from protobuf field <code>string path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Required. The path of the file.
     *
     * Generated from protobuf field <code>string path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The line number of the comment. Positive value means it's on
     * the new side of the diff, negative value means it's on the old side.
     *
     * Generated from protobuf field <code>int64 line = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Required. The line number of the comment. Positive value means it's on
     * the new side of the diff, negative value means it's on the old side.
     *
     * Generated from protobuf field <code>int64 line = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt64($var);
        $this->line = $var;

        return $this;
    }

}


