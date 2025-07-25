<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/service_lb_policy.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the ServiceLbPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateServiceLbPolicyRequest</code>
 */
class CreateServiceLbPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the ServiceLbPolicy. Must be in the
     * format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the ServiceLbPolicy resource to be created.
     * E.g. for resource name
     * `projects/{project}/locations/{location}/serviceLbPolicies/{service_lb_policy_name}`.
     * the id is value of {service_lb_policy_name}
     *
     * Generated from protobuf field <code>string service_lb_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_lb_policy_id = '';
    /**
     * Required. ServiceLbPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.ServiceLbPolicy service_lb_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_lb_policy = null;

    /**
     * @param string                                           $parent            Required. The parent resource of the ServiceLbPolicy. Must be in the
     *                                                                            format `projects/{project}/locations/{location}`. Please see
     *                                                                            {@see NetworkServicesClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkServices\V1\ServiceLbPolicy $serviceLbPolicy   Required. ServiceLbPolicy resource to be created.
     * @param string                                           $serviceLbPolicyId Required. Short name of the ServiceLbPolicy resource to be created.
     *                                                                            E.g. for resource name
     *                                                                            `projects/{project}/locations/{location}/serviceLbPolicies/{service_lb_policy_name}`.
     *                                                                            the id is value of {service_lb_policy_name}
     *
     * @return \Google\Cloud\NetworkServices\V1\CreateServiceLbPolicyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkServices\V1\ServiceLbPolicy $serviceLbPolicy, string $serviceLbPolicyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setServiceLbPolicy($serviceLbPolicy)
            ->setServiceLbPolicyId($serviceLbPolicyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the ServiceLbPolicy. Must be in the
     *           format `projects/{project}/locations/{location}`.
     *     @type string $service_lb_policy_id
     *           Required. Short name of the ServiceLbPolicy resource to be created.
     *           E.g. for resource name
     *           `projects/{project}/locations/{location}/serviceLbPolicies/{service_lb_policy_name}`.
     *           the id is value of {service_lb_policy_name}
     *     @type \Google\Cloud\NetworkServices\V1\ServiceLbPolicy $service_lb_policy
     *           Required. ServiceLbPolicy resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\ServiceLbPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the ServiceLbPolicy. Must be in the
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
     * Required. The parent resource of the ServiceLbPolicy. Must be in the
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
     * Required. Short name of the ServiceLbPolicy resource to be created.
     * E.g. for resource name
     * `projects/{project}/locations/{location}/serviceLbPolicies/{service_lb_policy_name}`.
     * the id is value of {service_lb_policy_name}
     *
     * Generated from protobuf field <code>string service_lb_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceLbPolicyId()
    {
        return $this->service_lb_policy_id;
    }

    /**
     * Required. Short name of the ServiceLbPolicy resource to be created.
     * E.g. for resource name
     * `projects/{project}/locations/{location}/serviceLbPolicies/{service_lb_policy_name}`.
     * the id is value of {service_lb_policy_name}
     *
     * Generated from protobuf field <code>string service_lb_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceLbPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_lb_policy_id = $var;

        return $this;
    }

    /**
     * Required. ServiceLbPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.ServiceLbPolicy service_lb_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\ServiceLbPolicy|null
     */
    public function getServiceLbPolicy()
    {
        return $this->service_lb_policy;
    }

    public function hasServiceLbPolicy()
    {
        return isset($this->service_lb_policy);
    }

    public function clearServiceLbPolicy()
    {
        unset($this->service_lb_policy);
    }

    /**
     * Required. ServiceLbPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.ServiceLbPolicy service_lb_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\ServiceLbPolicy $var
     * @return $this
     */
    public function setServiceLbPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\ServiceLbPolicy::class);
        $this->service_lb_policy = $var;

        return $this;
    }

}

