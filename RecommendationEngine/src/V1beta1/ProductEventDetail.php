<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ProductEventDetail captures user event information specific to retail
 * products.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.ProductEventDetail</code>
 */
class ProductEventDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Required for `search` events. Other event types should not set this field.
     * The user's search query as UTF-8 encoded text with a length limit of 5 KiB.
     *
     * Generated from protobuf field <code>string search_query = 1;</code>
     */
    protected $search_query = '';
    /**
     * Required for `category-page-view` events. Other event types should not set
     * this field.
     * The categories associated with a category page.
     * Category pages include special pages such as sales or promotions. For
     * instance, a special sale page may have the category hierarchy:
     * categories : ["Sales", "2017 Black Friday Deals"].
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem.CategoryHierarchy page_categories = 2;</code>
     */
    private $page_categories;
    /**
     * The main product details related to the event.
     * This field is required for the following event types:
     * * `add-to-cart`
     * * `add-to-list`
     * * `checkout-start`
     * * `detail-page-view`
     * * `purchase-complete`
     * * `refund`
     * * `remove-from-cart`
     * * `remove-from-list`
     * This field is optional for the following event types:
     * * `page-visit`
     * * `shopping-cart-page-view` - note that 'product_details' should be set for
     *   this unless the shopping cart is empty.
     * This field is not allowed for the following event types:
     * * `category-page-view`
     * * `home-page-view`
     * * `search`
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.ProductDetail product_details = 3;</code>
     */
    private $product_details;
    /**
     * Required for `add-to-list` and `remove-from-list` events. The id or name of
     * the list that the item is being added to or removed from. Other event types
     * should not set this field.
     *
     * Generated from protobuf field <code>string list_id = 4;</code>
     */
    protected $list_id = '';
    /**
     * Optional. The id or name of the associated shopping cart. This id is used
     * to associate multiple items added or present in the cart before purchase.
     * This can only be set for `add-to-cart`, `remove-from-cart`,
     * `checkout-start`, `purchase-complete`, or `shopping-cart-page-view` events.
     *
     * Generated from protobuf field <code>string cart_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cart_id = '';
    /**
     * Optional. A transaction represents the entire purchase transaction.
     * Required for `purchase-complete` events. Optional for `checkout-start`
     * events. Other event types should not set this field.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.PurchaseTransaction purchase_transaction = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $purchase_transaction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $search_query
     *           Required for `search` events. Other event types should not set this field.
     *           The user's search query as UTF-8 encoded text with a length limit of 5 KiB.
     *     @type array<\Google\Cloud\RecommendationEngine\V1beta1\CatalogItem\CategoryHierarchy>|\Google\Protobuf\Internal\RepeatedField $page_categories
     *           Required for `category-page-view` events. Other event types should not set
     *           this field.
     *           The categories associated with a category page.
     *           Category pages include special pages such as sales or promotions. For
     *           instance, a special sale page may have the category hierarchy:
     *           categories : ["Sales", "2017 Black Friday Deals"].
     *     @type array<\Google\Cloud\RecommendationEngine\V1beta1\ProductDetail>|\Google\Protobuf\Internal\RepeatedField $product_details
     *           The main product details related to the event.
     *           This field is required for the following event types:
     *           * `add-to-cart`
     *           * `add-to-list`
     *           * `checkout-start`
     *           * `detail-page-view`
     *           * `purchase-complete`
     *           * `refund`
     *           * `remove-from-cart`
     *           * `remove-from-list`
     *           This field is optional for the following event types:
     *           * `page-visit`
     *           * `shopping-cart-page-view` - note that 'product_details' should be set for
     *             this unless the shopping cart is empty.
     *           This field is not allowed for the following event types:
     *           * `category-page-view`
     *           * `home-page-view`
     *           * `search`
     *     @type string $list_id
     *           Required for `add-to-list` and `remove-from-list` events. The id or name of
     *           the list that the item is being added to or removed from. Other event types
     *           should not set this field.
     *     @type string $cart_id
     *           Optional. The id or name of the associated shopping cart. This id is used
     *           to associate multiple items added or present in the cart before purchase.
     *           This can only be set for `add-to-cart`, `remove-from-cart`,
     *           `checkout-start`, `purchase-complete`, or `shopping-cart-page-view` events.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\PurchaseTransaction $purchase_transaction
     *           Optional. A transaction represents the entire purchase transaction.
     *           Required for `purchase-complete` events. Optional for `checkout-start`
     *           events. Other event types should not set this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required for `search` events. Other event types should not set this field.
     * The user's search query as UTF-8 encoded text with a length limit of 5 KiB.
     *
     * Generated from protobuf field <code>string search_query = 1;</code>
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->search_query;
    }

    /**
     * Required for `search` events. Other event types should not set this field.
     * The user's search query as UTF-8 encoded text with a length limit of 5 KiB.
     *
     * Generated from protobuf field <code>string search_query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_query = $var;

        return $this;
    }

    /**
     * Required for `category-page-view` events. Other event types should not set
     * this field.
     * The categories associated with a category page.
     * Category pages include special pages such as sales or promotions. For
     * instance, a special sale page may have the category hierarchy:
     * categories : ["Sales", "2017 Black Friday Deals"].
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem.CategoryHierarchy page_categories = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPageCategories()
    {
        return $this->page_categories;
    }

    /**
     * Required for `category-page-view` events. Other event types should not set
     * this field.
     * The categories associated with a category page.
     * Category pages include special pages such as sales or promotions. For
     * instance, a special sale page may have the category hierarchy:
     * categories : ["Sales", "2017 Black Friday Deals"].
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem.CategoryHierarchy page_categories = 2;</code>
     * @param array<\Google\Cloud\RecommendationEngine\V1beta1\CatalogItem\CategoryHierarchy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPageCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem\CategoryHierarchy::class);
        $this->page_categories = $arr;

        return $this;
    }

    /**
     * The main product details related to the event.
     * This field is required for the following event types:
     * * `add-to-cart`
     * * `add-to-list`
     * * `checkout-start`
     * * `detail-page-view`
     * * `purchase-complete`
     * * `refund`
     * * `remove-from-cart`
     * * `remove-from-list`
     * This field is optional for the following event types:
     * * `page-visit`
     * * `shopping-cart-page-view` - note that 'product_details' should be set for
     *   this unless the shopping cart is empty.
     * This field is not allowed for the following event types:
     * * `category-page-view`
     * * `home-page-view`
     * * `search`
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.ProductDetail product_details = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProductDetails()
    {
        return $this->product_details;
    }

    /**
     * The main product details related to the event.
     * This field is required for the following event types:
     * * `add-to-cart`
     * * `add-to-list`
     * * `checkout-start`
     * * `detail-page-view`
     * * `purchase-complete`
     * * `refund`
     * * `remove-from-cart`
     * * `remove-from-list`
     * This field is optional for the following event types:
     * * `page-visit`
     * * `shopping-cart-page-view` - note that 'product_details' should be set for
     *   this unless the shopping cart is empty.
     * This field is not allowed for the following event types:
     * * `category-page-view`
     * * `home-page-view`
     * * `search`
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.ProductDetail product_details = 3;</code>
     * @param array<\Google\Cloud\RecommendationEngine\V1beta1\ProductDetail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProductDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\ProductDetail::class);
        $this->product_details = $arr;

        return $this;
    }

    /**
     * Required for `add-to-list` and `remove-from-list` events. The id or name of
     * the list that the item is being added to or removed from. Other event types
     * should not set this field.
     *
     * Generated from protobuf field <code>string list_id = 4;</code>
     * @return string
     */
    public function getListId()
    {
        return $this->list_id;
    }

    /**
     * Required for `add-to-list` and `remove-from-list` events. The id or name of
     * the list that the item is being added to or removed from. Other event types
     * should not set this field.
     *
     * Generated from protobuf field <code>string list_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setListId($var)
    {
        GPBUtil::checkString($var, True);
        $this->list_id = $var;

        return $this;
    }

    /**
     * Optional. The id or name of the associated shopping cart. This id is used
     * to associate multiple items added or present in the cart before purchase.
     * This can only be set for `add-to-cart`, `remove-from-cart`,
     * `checkout-start`, `purchase-complete`, or `shopping-cart-page-view` events.
     *
     * Generated from protobuf field <code>string cart_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCartId()
    {
        return $this->cart_id;
    }

    /**
     * Optional. The id or name of the associated shopping cart. This id is used
     * to associate multiple items added or present in the cart before purchase.
     * This can only be set for `add-to-cart`, `remove-from-cart`,
     * `checkout-start`, `purchase-complete`, or `shopping-cart-page-view` events.
     *
     * Generated from protobuf field <code>string cart_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCartId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cart_id = $var;

        return $this;
    }

    /**
     * Optional. A transaction represents the entire purchase transaction.
     * Required for `purchase-complete` events. Optional for `checkout-start`
     * events. Other event types should not set this field.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.PurchaseTransaction purchase_transaction = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\PurchaseTransaction|null
     */
    public function getPurchaseTransaction()
    {
        return $this->purchase_transaction;
    }

    public function hasPurchaseTransaction()
    {
        return isset($this->purchase_transaction);
    }

    public function clearPurchaseTransaction()
    {
        unset($this->purchase_transaction);
    }

    /**
     * Optional. A transaction represents the entire purchase transaction.
     * Required for `purchase-complete` events. Optional for `checkout-start`
     * events. Other event types should not set this field.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.PurchaseTransaction purchase_transaction = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\PurchaseTransaction $var
     * @return $this
     */
    public function setPurchaseTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\PurchaseTransaction::class);
        $this->purchase_transaction = $var;

        return $this;
    }

}

