<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/commit_response.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Commit][google.spanner.v1.Spanner.Commit].
 *
 * Generated from protobuf message <code>google.spanner.v1.CommitResponse</code>
 */
class CommitResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The Cloud Spanner timestamp at which the transaction committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_timestamp = 1;</code>
     */
    private $commit_timestamp = null;
    /**
     * The statistics about this Commit. Not returned by default.
     * For more information, see
     * [CommitRequest.return_commit_stats][google.spanner.v1.CommitRequest.return_commit_stats].
     *
     * Generated from protobuf field <code>.google.spanner.v1.CommitResponse.CommitStats commit_stats = 2;</code>
     */
    private $commit_stats = null;
    protected $MultiplexedSessionRetry;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $commit_timestamp
     *           The Cloud Spanner timestamp at which the transaction committed.
     *     @type \Google\Cloud\Spanner\V1\CommitResponse\CommitStats $commit_stats
     *           The statistics about this Commit. Not returned by default.
     *           For more information, see
     *           [CommitRequest.return_commit_stats][google.spanner.v1.CommitRequest.return_commit_stats].
     *     @type \Google\Cloud\Spanner\V1\MultiplexedSessionPrecommitToken $precommit_token
     *           If specified, transaction has not committed yet.
     *           Clients must retry the commit with the new precommit token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\CommitResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The Cloud Spanner timestamp at which the transaction committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_timestamp = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCommitTimestamp()
    {
        return $this->commit_timestamp;
    }

    public function hasCommitTimestamp()
    {
        return isset($this->commit_timestamp);
    }

    public function clearCommitTimestamp()
    {
        unset($this->commit_timestamp);
    }

    /**
     * The Cloud Spanner timestamp at which the transaction committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_timestamp = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCommitTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->commit_timestamp = $var;

        return $this;
    }

    /**
     * The statistics about this Commit. Not returned by default.
     * For more information, see
     * [CommitRequest.return_commit_stats][google.spanner.v1.CommitRequest.return_commit_stats].
     *
     * Generated from protobuf field <code>.google.spanner.v1.CommitResponse.CommitStats commit_stats = 2;</code>
     * @return \Google\Cloud\Spanner\V1\CommitResponse\CommitStats|null
     */
    public function getCommitStats()
    {
        return $this->commit_stats;
    }

    public function hasCommitStats()
    {
        return isset($this->commit_stats);
    }

    public function clearCommitStats()
    {
        unset($this->commit_stats);
    }

    /**
     * The statistics about this Commit. Not returned by default.
     * For more information, see
     * [CommitRequest.return_commit_stats][google.spanner.v1.CommitRequest.return_commit_stats].
     *
     * Generated from protobuf field <code>.google.spanner.v1.CommitResponse.CommitStats commit_stats = 2;</code>
     * @param \Google\Cloud\Spanner\V1\CommitResponse\CommitStats $var
     * @return $this
     */
    public function setCommitStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\CommitResponse\CommitStats::class);
        $this->commit_stats = $var;

        return $this;
    }

    /**
     * If specified, transaction has not committed yet.
     * Clients must retry the commit with the new precommit token.
     *
     * Generated from protobuf field <code>.google.spanner.v1.MultiplexedSessionPrecommitToken precommit_token = 4;</code>
     * @return \Google\Cloud\Spanner\V1\MultiplexedSessionPrecommitToken|null
     */
    public function getPrecommitToken()
    {
        return $this->readOneof(4);
    }

    public function hasPrecommitToken()
    {
        return $this->hasOneof(4);
    }

    /**
     * If specified, transaction has not committed yet.
     * Clients must retry the commit with the new precommit token.
     *
     * Generated from protobuf field <code>.google.spanner.v1.MultiplexedSessionPrecommitToken precommit_token = 4;</code>
     * @param \Google\Cloud\Spanner\V1\MultiplexedSessionPrecommitToken $var
     * @return $this
     */
    public function setPrecommitToken($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\MultiplexedSessionPrecommitToken::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMultiplexedSessionRetry()
    {
        return $this->whichOneof("MultiplexedSessionRetry");
    }

}

