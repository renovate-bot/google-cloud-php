<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/css/v1/accounts.proto

namespace Google\Shopping\Css\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about CSS/MC account.
 *
 * Generated from protobuf message <code>google.shopping.css.v1.Account</code>
 */
class Account extends \Google\Protobuf\Internal\Message
{
    /**
     * The label resource name.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. Immutable. The CSS/MC account's full name.
     *
     * Generated from protobuf field <code>string full_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $full_name = '';
    /**
     * The CSS/MC account's short display name.
     *
     * Generated from protobuf field <code>optional string display_name = 3;</code>
     */
    protected $display_name = null;
    /**
     * Output only. Immutable. The CSS/MC account's homepage.
     *
     * Generated from protobuf field <code>optional string homepage_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $homepage_uri = null;
    /**
     * The CSS/MC account's parent resource. CSS group for CSS domains; CSS
     * domain for MC accounts. Returned only if the user has access to the
     * parent account.
     * Note: For MC sub-accounts, this is also the CSS domain that is the parent
     * resource of the MCA account, since we are effectively flattening the
     * hierarchy."
     *
     * Generated from protobuf field <code>optional string parent = 5;</code>
     */
    protected $parent = null;
    /**
     * Manually created label IDs assigned to the CSS/MC account by a CSS parent
     * account.
     *
     * Generated from protobuf field <code>repeated int64 label_ids = 6;</code>
     */
    private $label_ids;
    /**
     * Automatically created label IDs assigned to the MC account by
     * CSS Center.
     *
     * Generated from protobuf field <code>repeated int64 automatic_label_ids = 7;</code>
     */
    private $automatic_label_ids;
    /**
     * Output only. The type of this account.
     *
     * Generated from protobuf field <code>.google.shopping.css.v1.Account.AccountType account_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $account_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The label resource name.
     *           Format: accounts/{account}
     *     @type string $full_name
     *           Output only. Immutable. The CSS/MC account's full name.
     *     @type string $display_name
     *           The CSS/MC account's short display name.
     *     @type string $homepage_uri
     *           Output only. Immutable. The CSS/MC account's homepage.
     *     @type string $parent
     *           The CSS/MC account's parent resource. CSS group for CSS domains; CSS
     *           domain for MC accounts. Returned only if the user has access to the
     *           parent account.
     *           Note: For MC sub-accounts, this is also the CSS domain that is the parent
     *           resource of the MCA account, since we are effectively flattening the
     *           hierarchy."
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $label_ids
     *           Manually created label IDs assigned to the CSS/MC account by a CSS parent
     *           account.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $automatic_label_ids
     *           Automatically created label IDs assigned to the MC account by
     *           CSS Center.
     *     @type int $account_type
     *           Output only. The type of this account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Css\V1\Accounts::initOnce();
        parent::__construct($data);
    }

    /**
     * The label resource name.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The label resource name.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Immutable. The CSS/MC account's full name.
     *
     * Generated from protobuf field <code>string full_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Output only. Immutable. The CSS/MC account's full name.
     *
     * Generated from protobuf field <code>string full_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_name = $var;

        return $this;
    }

    /**
     * The CSS/MC account's short display name.
     *
     * Generated from protobuf field <code>optional string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return isset($this->display_name) ? $this->display_name : '';
    }

    public function hasDisplayName()
    {
        return isset($this->display_name);
    }

    public function clearDisplayName()
    {
        unset($this->display_name);
    }

    /**
     * The CSS/MC account's short display name.
     *
     * Generated from protobuf field <code>optional string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Immutable. The CSS/MC account's homepage.
     *
     * Generated from protobuf field <code>optional string homepage_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getHomepageUri()
    {
        return isset($this->homepage_uri) ? $this->homepage_uri : '';
    }

    public function hasHomepageUri()
    {
        return isset($this->homepage_uri);
    }

    public function clearHomepageUri()
    {
        unset($this->homepage_uri);
    }

    /**
     * Output only. Immutable. The CSS/MC account's homepage.
     *
     * Generated from protobuf field <code>optional string homepage_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setHomepageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->homepage_uri = $var;

        return $this;
    }

    /**
     * The CSS/MC account's parent resource. CSS group for CSS domains; CSS
     * domain for MC accounts. Returned only if the user has access to the
     * parent account.
     * Note: For MC sub-accounts, this is also the CSS domain that is the parent
     * resource of the MCA account, since we are effectively flattening the
     * hierarchy."
     *
     * Generated from protobuf field <code>optional string parent = 5;</code>
     * @return string
     */
    public function getParent()
    {
        return isset($this->parent) ? $this->parent : '';
    }

    public function hasParent()
    {
        return isset($this->parent);
    }

    public function clearParent()
    {
        unset($this->parent);
    }

    /**
     * The CSS/MC account's parent resource. CSS group for CSS domains; CSS
     * domain for MC accounts. Returned only if the user has access to the
     * parent account.
     * Note: For MC sub-accounts, this is also the CSS domain that is the parent
     * resource of the MCA account, since we are effectively flattening the
     * hierarchy."
     *
     * Generated from protobuf field <code>optional string parent = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Manually created label IDs assigned to the CSS/MC account by a CSS parent
     * account.
     *
     * Generated from protobuf field <code>repeated int64 label_ids = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabelIds()
    {
        return $this->label_ids;
    }

    /**
     * Manually created label IDs assigned to the CSS/MC account by a CSS parent
     * account.
     *
     * Generated from protobuf field <code>repeated int64 label_ids = 6;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabelIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->label_ids = $arr;

        return $this;
    }

    /**
     * Automatically created label IDs assigned to the MC account by
     * CSS Center.
     *
     * Generated from protobuf field <code>repeated int64 automatic_label_ids = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutomaticLabelIds()
    {
        return $this->automatic_label_ids;
    }

    /**
     * Automatically created label IDs assigned to the MC account by
     * CSS Center.
     *
     * Generated from protobuf field <code>repeated int64 automatic_label_ids = 7;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutomaticLabelIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->automatic_label_ids = $arr;

        return $this;
    }

    /**
     * Output only. The type of this account.
     *
     * Generated from protobuf field <code>.google.shopping.css.v1.Account.AccountType account_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAccountType()
    {
        return $this->account_type;
    }

    /**
     * Output only. The type of this account.
     *
     * Generated from protobuf field <code>.google.shopping.css.v1.Account.AccountType account_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAccountType($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Css\V1\Account\AccountType::class);
        $this->account_type = $var;

        return $this;
    }

}

