<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/authorization_policy.proto

namespace Google\Cloud\NetworkSecurity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the CreateAuthorizationPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1.CreateAuthorizationPolicyRequest</code>
 */
class CreateAuthorizationPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the AuthorizationPolicy. Must be in the
     * format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the AuthorizationPolicy resource to be created.
     * This value should be 1-63 characters long, containing only
     * letters, numbers, hyphens, and underscores, and should not start
     * with a number. E.g. "authz_policy".
     *
     * Generated from protobuf field <code>string authorization_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $authorization_policy_id = '';
    /**
     * Required. AuthorizationPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.AuthorizationPolicy authorization_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $authorization_policy = null;

    /**
     * @param string                                               $parent                Required. The parent resource of the AuthorizationPolicy. Must be in the
     *                                                                                    format `projects/{project}/locations/{location}`. Please see
     *                                                                                    {@see NetworkSecurityClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy $authorizationPolicy   Required. AuthorizationPolicy resource to be created.
     * @param string                                               $authorizationPolicyId Required. Short name of the AuthorizationPolicy resource to be created.
     *                                                                                    This value should be 1-63 characters long, containing only
     *                                                                                    letters, numbers, hyphens, and underscores, and should not start
     *                                                                                    with a number. E.g. "authz_policy".
     *
     * @return \Google\Cloud\NetworkSecurity\V1\CreateAuthorizationPolicyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy $authorizationPolicy, string $authorizationPolicyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAuthorizationPolicy($authorizationPolicy)
            ->setAuthorizationPolicyId($authorizationPolicyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the AuthorizationPolicy. Must be in the
     *           format `projects/{project}/locations/{location}`.
     *     @type string $authorization_policy_id
     *           Required. Short name of the AuthorizationPolicy resource to be created.
     *           This value should be 1-63 characters long, containing only
     *           letters, numbers, hyphens, and underscores, and should not start
     *           with a number. E.g. "authz_policy".
     *     @type \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy $authorization_policy
     *           Required. AuthorizationPolicy resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1\AuthorizationPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the AuthorizationPolicy. Must be in the
     * format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the AuthorizationPolicy. Must be in the
     * format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Short name of the AuthorizationPolicy resource to be created.
     * This value should be 1-63 characters long, containing only
     * letters, numbers, hyphens, and underscores, and should not start
     * with a number. E.g. "authz_policy".
     *
     * Generated from protobuf field <code>string authorization_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAuthorizationPolicyId()
    {
        return $this->authorization_policy_id;
    }

    /**
     * Required. Short name of the AuthorizationPolicy resource to be created.
     * This value should be 1-63 characters long, containing only
     * letters, numbers, hyphens, and underscores, and should not start
     * with a number. E.g. "authz_policy".
     *
     * Generated from protobuf field <code>string authorization_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizationPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorization_policy_id = $var;

        return $this;
    }

    /**
     * Required. AuthorizationPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.AuthorizationPolicy authorization_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy|null
     */
    public function getAuthorizationPolicy()
    {
        return $this->authorization_policy;
    }

    public function hasAuthorizationPolicy()
    {
        return isset($this->authorization_policy);
    }

    public function clearAuthorizationPolicy()
    {
        unset($this->authorization_policy);
    }

    /**
     * Required. AuthorizationPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.AuthorizationPolicy authorization_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy $var
     * @return $this
     */
    public function setAuthorizationPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy::class);
        $this->authorization_policy = $var;

        return $this;
    }

}

