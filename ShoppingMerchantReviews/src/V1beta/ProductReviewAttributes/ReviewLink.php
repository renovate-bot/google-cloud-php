<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reviews/v1beta/productreviews_common.proto

namespace Google\Shopping\Merchant\Reviews\V1beta\ProductReviewAttributes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The URI of the review landing page.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reviews.v1beta.ProductReviewAttributes.ReviewLink</code>
 */
class ReviewLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Type of the review URI.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reviews.v1beta.ProductReviewAttributes.ReviewLink.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;
    /**
     * Optional. The URI of the review landing page.
     * For example: `http://www.example.com/review_5.html`.
     *
     * Generated from protobuf field <code>string link = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $link = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Optional. Type of the review URI.
     *     @type string $link
     *           Optional. The URI of the review landing page.
     *           For example: `http://www.example.com/review_5.html`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reviews\V1Beta\ProductreviewsCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Type of the review URI.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reviews.v1beta.ProductReviewAttributes.ReviewLink.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Type of the review URI.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reviews.v1beta.ProductReviewAttributes.ReviewLink.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Reviews\V1beta\ProductReviewAttributes\ReviewLink\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. The URI of the review landing page.
     * For example: `http://www.example.com/review_5.html`.
     *
     * Generated from protobuf field <code>string link = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Optional. The URI of the review landing page.
     * For example: `http://www.example.com/review_5.html`.
     *
     * Generated from protobuf field <code>string link = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->link = $var;

        return $this;
    }

}


