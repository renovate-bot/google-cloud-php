<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `GkeHubMembershipService.DeleteMembership` method.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.DeleteMembershipRequest</code>
 */
class DeleteMembershipRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Membership resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The Membership resource name in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Membership resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The Membership resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

