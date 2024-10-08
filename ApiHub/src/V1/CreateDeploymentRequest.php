<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [CreateDeployment][google.cloud.apihub.v1.ApiHub.CreateDeployment]
 * method's request.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.CreateDeploymentRequest</code>
 */
class CreateDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource for the deployment resource.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The ID to use for the deployment resource, which will become the
     * final component of the deployment's resource name. This field is optional.
     * * If provided, the same will be used. The service will throw an error if
     * the specified id is already used by another deployment resource in the API
     * hub.
     * * If not provided, a system generated id will be used.
     * This value should be 4-500 characters, and valid characters
     * are /[a-z][A-Z][0-9]-_/.
     *
     * Generated from protobuf field <code>string deployment_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deployment_id = '';
    /**
     * Required. The deployment resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployment = null;

    /**
     * @param string                             $parent       Required. The parent resource for the deployment resource.
     *                                                         Format: `projects/{project}/locations/{location}`
     *                                                         Please see {@see ApiHubClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\ApiHub\V1\Deployment $deployment   Required. The deployment resource to create.
     * @param string                             $deploymentId Optional. The ID to use for the deployment resource, which will become the
     *                                                         final component of the deployment's resource name. This field is optional.
     *
     *                                                         * If provided, the same will be used. The service will throw an error if
     *                                                         the specified id is already used by another deployment resource in the API
     *                                                         hub.
     *                                                         * If not provided, a system generated id will be used.
     *
     *                                                         This value should be 4-500 characters, and valid characters
     *                                                         are /[a-z][A-Z][0-9]-_/.
     *
     * @return \Google\Cloud\ApiHub\V1\CreateDeploymentRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ApiHub\V1\Deployment $deployment, string $deploymentId): self
    {
        return (new self())
            ->setParent($parent)
            ->setDeployment($deployment)
            ->setDeploymentId($deploymentId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource for the deployment resource.
     *           Format: `projects/{project}/locations/{location}`
     *     @type string $deployment_id
     *           Optional. The ID to use for the deployment resource, which will become the
     *           final component of the deployment's resource name. This field is optional.
     *           * If provided, the same will be used. The service will throw an error if
     *           the specified id is already used by another deployment resource in the API
     *           hub.
     *           * If not provided, a system generated id will be used.
     *           This value should be 4-500 characters, and valid characters
     *           are /[a-z][A-Z][0-9]-_/.
     *     @type \Google\Cloud\ApiHub\V1\Deployment $deployment
     *           Required. The deployment resource to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource for the deployment resource.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource for the deployment resource.
     * Format: `projects/{project}/locations/{location}`
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
     * Optional. The ID to use for the deployment resource, which will become the
     * final component of the deployment's resource name. This field is optional.
     * * If provided, the same will be used. The service will throw an error if
     * the specified id is already used by another deployment resource in the API
     * hub.
     * * If not provided, a system generated id will be used.
     * This value should be 4-500 characters, and valid characters
     * are /[a-z][A-Z][0-9]-_/.
     *
     * Generated from protobuf field <code>string deployment_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDeploymentId()
    {
        return $this->deployment_id;
    }

    /**
     * Optional. The ID to use for the deployment resource, which will become the
     * final component of the deployment's resource name. This field is optional.
     * * If provided, the same will be used. The service will throw an error if
     * the specified id is already used by another deployment resource in the API
     * hub.
     * * If not provided, a system generated id will be used.
     * This value should be 4-500 characters, and valid characters
     * are /[a-z][A-Z][0-9]-_/.
     *
     * Generated from protobuf field <code>string deployment_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDeploymentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployment_id = $var;

        return $this;
    }

    /**
     * Required. The deployment resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiHub\V1\Deployment|null
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    public function hasDeployment()
    {
        return isset($this->deployment);
    }

    public function clearDeployment()
    {
        unset($this->deployment);
    }

    /**
     * Required. The deployment resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiHub\V1\Deployment $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Deployment::class);
        $this->deployment = $var;

        return $this;
    }

}

