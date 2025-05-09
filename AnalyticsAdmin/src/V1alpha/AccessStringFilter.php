<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/access_report.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The filter for strings.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AccessStringFilter</code>
 */
class AccessStringFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The match type for this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessStringFilter.MatchType match_type = 1;</code>
     */
    protected $match_type = 0;
    /**
     * The string value used for the matching.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    protected $value = '';
    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     */
    protected $case_sensitive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $match_type
     *           The match type for this filter.
     *     @type string $value
     *           The string value used for the matching.
     *     @type bool $case_sensitive
     *           If true, the string value is case sensitive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AccessReport::initOnce();
        parent::__construct($data);
    }

    /**
     * The match type for this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessStringFilter.MatchType match_type = 1;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The match type for this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessStringFilter.MatchType match_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\AccessStringFilter\MatchType::class);
        $this->match_type = $var;

        return $this;
    }

    /**
     * The string value used for the matching.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The string value used for the matching.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;

        return $this;
    }

}

