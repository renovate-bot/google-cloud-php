<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/chronicle/v1/entity.proto

namespace Google\Cloud\Chronicle\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating watchlist.
 *
 * Generated from protobuf message <code>google.cloud.chronicle.v1.UpdateWatchlistRequest</code>
 */
class UpdateWatchlistRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The watchlist to update.
     * The watchlist's `name` field is used to identify the watchlist to update.
     * Format:
     * `projects/{project}/locations/{location}/instances/{instance}/watchlists/{watchlist}`
     *
     * Generated from protobuf field <code>.google.cloud.chronicle.v1.Watchlist watchlist = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $watchlist = null;
    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Chronicle\V1\Watchlist $watchlist  Required. The watchlist to update.
     *
     *                                                         The watchlist's `name` field is used to identify the watchlist to update.
     *                                                         Format:
     *                                                         `projects/{project}/locations/{location}/instances/{instance}/watchlists/{watchlist}`
     * @param \Google\Protobuf\FieldMask           $updateMask Optional. The list of fields to update.
     *
     * @return \Google\Cloud\Chronicle\V1\UpdateWatchlistRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Chronicle\V1\Watchlist $watchlist, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setWatchlist($watchlist)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Chronicle\V1\Watchlist $watchlist
     *           Required. The watchlist to update.
     *           The watchlist's `name` field is used to identify the watchlist to update.
     *           Format:
     *           `projects/{project}/locations/{location}/instances/{instance}/watchlists/{watchlist}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The list of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Chronicle\V1\Entity::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The watchlist to update.
     * The watchlist's `name` field is used to identify the watchlist to update.
     * Format:
     * `projects/{project}/locations/{location}/instances/{instance}/watchlists/{watchlist}`
     *
     * Generated from protobuf field <code>.google.cloud.chronicle.v1.Watchlist watchlist = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Chronicle\V1\Watchlist|null
     */
    public function getWatchlist()
    {
        return $this->watchlist;
    }

    public function hasWatchlist()
    {
        return isset($this->watchlist);
    }

    public function clearWatchlist()
    {
        unset($this->watchlist);
    }

    /**
     * Required. The watchlist to update.
     * The watchlist's `name` field is used to identify the watchlist to update.
     * Format:
     * `projects/{project}/locations/{location}/instances/{instance}/watchlists/{watchlist}`
     *
     * Generated from protobuf field <code>.google.cloud.chronicle.v1.Watchlist watchlist = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Chronicle\V1\Watchlist $var
     * @return $this
     */
    public function setWatchlist($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Chronicle\V1\Watchlist::class);
        $this->watchlist = $var;

        return $this;
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

