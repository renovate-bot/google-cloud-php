<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/nfs_share.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message containing the list of NFS shares.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.ListNfsSharesResponse</code>
 */
class ListNfsSharesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of NFS shares.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.NfsShare nfs_shares = 1;</code>
     */
    private $nfs_shares;
    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BareMetalSolution\V2\NfsShare>|\Google\Protobuf\Internal\RepeatedField $nfs_shares
     *           The list of NFS shares.
     *     @type string $next_page_token
     *           A token identifying a page of results from the server.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\NfsShare::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of NFS shares.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.NfsShare nfs_shares = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNfsShares()
    {
        return $this->nfs_shares;
    }

    /**
     * The list of NFS shares.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.NfsShare nfs_shares = 1;</code>
     * @param array<\Google\Cloud\BareMetalSolution\V2\NfsShare>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNfsShares($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BareMetalSolution\V2\NfsShare::class);
        $this->nfs_shares = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

