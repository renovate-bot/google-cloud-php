<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `UpdateProduct` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.UpdateProductRequest</code>
 */
class UpdateProductRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Product resource which replaces the one on the server.
     * product.name is immutable.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $product = null;
    /**
     * The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     * to update.
     * If update_mask isn't specified, all mutable fields are to be updated.
     * Valid mask paths include `product_labels`, `display_name`, and
     * `description`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Vision\V1\Product $product    Required. The Product resource which replaces the one on the server.
     *                                                    product.name is immutable.
     * @param \Google\Protobuf\FieldMask      $updateMask The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     *                                                    to update.
     *                                                    If update_mask isn't specified, all mutable fields are to be updated.
     *                                                    Valid mask paths include `product_labels`, `display_name`, and
     *                                                    `description`.
     *
     * @return \Google\Cloud\Vision\V1\UpdateProductRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Vision\V1\Product $product, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setProduct($product)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\Product $product
     *           Required. The Product resource which replaces the one on the server.
     *           product.name is immutable.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     *           to update.
     *           If update_mask isn't specified, all mutable fields are to be updated.
     *           Valid mask paths include `product_labels`, `display_name`, and
     *           `description`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Product resource which replaces the one on the server.
     * product.name is immutable.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Vision\V1\Product|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    public function hasProduct()
    {
        return isset($this->product);
    }

    public function clearProduct()
    {
        unset($this->product);
    }

    /**
     * Required. The Product resource which replaces the one on the server.
     * product.name is immutable.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Vision\V1\Product $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\Product::class);
        $this->product = $var;

        return $this;
    }

    /**
     * The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     * to update.
     * If update_mask isn't specified, all mutable fields are to be updated.
     * Valid mask paths include `product_labels`, `display_name`, and
     * `description`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     * to update.
     * If update_mask isn't specified, all mutable fields are to be updated.
     * Valid mask paths include `product_labels`, `display_name`, and
     * `description`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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

