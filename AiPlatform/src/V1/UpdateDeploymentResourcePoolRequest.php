<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/deployment_resource_pool_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateDeploymentResourcePool method.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateDeploymentResourcePoolRequest</code>
 */
class UpdateDeploymentResourcePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The DeploymentResourcePool to update.
     * The DeploymentResourcePool's `name` field is used to identify the
     * DeploymentResourcePool to update.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeploymentResourcePool deployment_resource_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployment_resource_pool = null;
    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\AIPlatform\V1\DeploymentResourcePool $deploymentResourcePool Required. The DeploymentResourcePool to update.
     *
     *                                                                                   The DeploymentResourcePool's `name` field is used to identify the
     *                                                                                   DeploymentResourcePool to update.
     *                                                                                   Format:
     *                                                                                   `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     * @param \Google\Protobuf\FieldMask                         $updateMask             Required. The list of fields to update.
     *
     * @return \Google\Cloud\AIPlatform\V1\UpdateDeploymentResourcePoolRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AIPlatform\V1\DeploymentResourcePool $deploymentResourcePool, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setDeploymentResourcePool($deploymentResourcePool)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\DeploymentResourcePool $deployment_resource_pool
     *           Required. The DeploymentResourcePool to update.
     *           The DeploymentResourcePool's `name` field is used to identify the
     *           DeploymentResourcePool to update.
     *           Format:
     *           `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeploymentResourcePoolService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The DeploymentResourcePool to update.
     * The DeploymentResourcePool's `name` field is used to identify the
     * DeploymentResourcePool to update.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeploymentResourcePool deployment_resource_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\DeploymentResourcePool|null
     */
    public function getDeploymentResourcePool()
    {
        return $this->deployment_resource_pool;
    }

    public function hasDeploymentResourcePool()
    {
        return isset($this->deployment_resource_pool);
    }

    public function clearDeploymentResourcePool()
    {
        unset($this->deployment_resource_pool);
    }

    /**
     * Required. The DeploymentResourcePool to update.
     * The DeploymentResourcePool's `name` field is used to identify the
     * DeploymentResourcePool to update.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeploymentResourcePool deployment_resource_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\DeploymentResourcePool $var
     * @return $this
     */
    public function setDeploymentResourcePool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DeploymentResourcePool::class);
        $this->deployment_resource_pool = $var;

        return $this;
    }

    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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

