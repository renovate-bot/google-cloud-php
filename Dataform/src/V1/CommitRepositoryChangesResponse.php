<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1/dataform.proto

namespace Google\Cloud\Dataform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `CommitRepositoryChanges` response message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1.CommitRepositoryChangesResponse</code>
 */
class CommitRepositoryChangesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The commit SHA of the current commit.
     *
     * Generated from protobuf field <code>string commit_sha = 1;</code>
     */
    protected $commit_sha = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $commit_sha
     *           The commit SHA of the current commit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * The commit SHA of the current commit.
     *
     * Generated from protobuf field <code>string commit_sha = 1;</code>
     * @return string
     */
    public function getCommitSha()
    {
        return $this->commit_sha;
    }

    /**
     * The commit SHA of the current commit.
     *
     * Generated from protobuf field <code>string commit_sha = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCommitSha($var)
    {
        GPBUtil::checkString($var, True);
        $this->commit_sha = $var;

        return $this;
    }

}

