<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ProvisionAccountTicket RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.ProvisionAccountTicketResponse</code>
 */
class ProvisionAccountTicketResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The param to be passed in the ToS link.
     *
     * Generated from protobuf field <code>string account_ticket_id = 1;</code>
     */
    protected $account_ticket_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_ticket_id
     *           The param to be passed in the ToS link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The param to be passed in the ToS link.
     *
     * Generated from protobuf field <code>string account_ticket_id = 1;</code>
     * @return string
     */
    public function getAccountTicketId()
    {
        return $this->account_ticket_id;
    }

    /**
     * The param to be passed in the ToS link.
     *
     * Generated from protobuf field <code>string account_ticket_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountTicketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_ticket_id = $var;

        return $this;
    }

}

