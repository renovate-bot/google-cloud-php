<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for response to the list of Listings.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.ListListingsResponse</code>
 */
class ListListingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of Listing.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.dataexchange.v1beta1.Listing listings = 1;</code>
     */
    private $listings;
    /**
     * A token to request the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BigQuery\DataExchange\V1beta1\Listing>|\Google\Protobuf\Internal\RepeatedField $listings
     *           The list of Listing.
     *     @type string $next_page_token
     *           A token to request the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of Listing.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.dataexchange.v1beta1.Listing listings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getListings()
    {
        return $this->listings;
    }

    /**
     * The list of Listing.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.dataexchange.v1beta1.Listing listings = 1;</code>
     * @param array<\Google\Cloud\BigQuery\DataExchange\V1beta1\Listing>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setListings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing::class);
        $this->listings = $arr;

        return $this;
    }

    /**
     * A token to request the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to request the next page of results.
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

}

