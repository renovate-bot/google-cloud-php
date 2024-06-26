<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/server_tls_policy.proto

namespace Google\Cloud\NetworkSecurity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the CreateServerTlsPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1.CreateServerTlsPolicyRequest</code>
 */
class CreateServerTlsPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the ServerTlsPolicy. Must be in
     * the format `projects/&#42;&#47;locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the ServerTlsPolicy resource to be created. This value should
     * be 1-63 characters long, containing only letters, numbers, hyphens, and
     * underscores, and should not start with a number. E.g. "server_mtls_policy".
     *
     * Generated from protobuf field <code>string server_tls_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $server_tls_policy_id = '';
    /**
     * Required. ServerTlsPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.ServerTlsPolicy server_tls_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $server_tls_policy = null;

    /**
     * @param string                                           $parent            Required. The parent resource of the ServerTlsPolicy. Must be in
     *                                                                            the format `projects/&#42;/locations/{location}`. Please see
     *                                                                            {@see NetworkSecurityClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkSecurity\V1\ServerTlsPolicy $serverTlsPolicy   Required. ServerTlsPolicy resource to be created.
     * @param string                                           $serverTlsPolicyId Required. Short name of the ServerTlsPolicy resource to be created. This value should
     *                                                                            be 1-63 characters long, containing only letters, numbers, hyphens, and
     *                                                                            underscores, and should not start with a number. E.g. "server_mtls_policy".
     *
     * @return \Google\Cloud\NetworkSecurity\V1\CreateServerTlsPolicyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkSecurity\V1\ServerTlsPolicy $serverTlsPolicy, string $serverTlsPolicyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setServerTlsPolicy($serverTlsPolicy)
            ->setServerTlsPolicyId($serverTlsPolicyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the ServerTlsPolicy. Must be in
     *           the format `projects/&#42;&#47;locations/{location}`.
     *     @type string $server_tls_policy_id
     *           Required. Short name of the ServerTlsPolicy resource to be created. This value should
     *           be 1-63 characters long, containing only letters, numbers, hyphens, and
     *           underscores, and should not start with a number. E.g. "server_mtls_policy".
     *     @type \Google\Cloud\NetworkSecurity\V1\ServerTlsPolicy $server_tls_policy
     *           Required. ServerTlsPolicy resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1\ServerTlsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the ServerTlsPolicy. Must be in
     * the format `projects/&#42;&#47;locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the ServerTlsPolicy. Must be in
     * the format `projects/&#42;&#47;locations/{location}`.
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
     * Required. Short name of the ServerTlsPolicy resource to be created. This value should
     * be 1-63 characters long, containing only letters, numbers, hyphens, and
     * underscores, and should not start with a number. E.g. "server_mtls_policy".
     *
     * Generated from protobuf field <code>string server_tls_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServerTlsPolicyId()
    {
        return $this->server_tls_policy_id;
    }

    /**
     * Required. Short name of the ServerTlsPolicy resource to be created. This value should
     * be 1-63 characters long, containing only letters, numbers, hyphens, and
     * underscores, and should not start with a number. E.g. "server_mtls_policy".
     *
     * Generated from protobuf field <code>string server_tls_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServerTlsPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_tls_policy_id = $var;

        return $this;
    }

    /**
     * Required. ServerTlsPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.ServerTlsPolicy server_tls_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkSecurity\V1\ServerTlsPolicy|null
     */
    public function getServerTlsPolicy()
    {
        return $this->server_tls_policy;
    }

    public function hasServerTlsPolicy()
    {
        return isset($this->server_tls_policy);
    }

    public function clearServerTlsPolicy()
    {
        unset($this->server_tls_policy);
    }

    /**
     * Required. ServerTlsPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.ServerTlsPolicy server_tls_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkSecurity\V1\ServerTlsPolicy $var
     * @return $this
     */
    public function setServerTlsPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkSecurity\V1\ServerTlsPolicy::class);
        $this->server_tls_policy = $var;

        return $this;
    }

}

