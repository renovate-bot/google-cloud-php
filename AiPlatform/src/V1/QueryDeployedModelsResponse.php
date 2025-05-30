<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/deployment_resource_pool_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for QueryDeployedModels method.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.QueryDeployedModelsResponse</code>
 */
class QueryDeployedModelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * DEPRECATED Use deployed_model_refs instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModel deployed_models = 1 [deprecated = true];</code>
     * @deprecated
     */
    private $deployed_models;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * References to the DeployedModels that share the specified
     * deploymentResourcePool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModelRef deployed_model_refs = 3;</code>
     */
    private $deployed_model_refs;
    /**
     * The total number of DeployedModels on this DeploymentResourcePool.
     *
     * Generated from protobuf field <code>int32 total_deployed_model_count = 4;</code>
     */
    protected $total_deployed_model_count = 0;
    /**
     * The total number of Endpoints that have DeployedModels on this
     * DeploymentResourcePool.
     *
     * Generated from protobuf field <code>int32 total_endpoint_count = 5;</code>
     */
    protected $total_endpoint_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\DeployedModel>|\Google\Protobuf\Internal\RepeatedField $deployed_models
     *           DEPRECATED Use deployed_model_refs instead.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     *     @type array<\Google\Cloud\AIPlatform\V1\DeployedModelRef>|\Google\Protobuf\Internal\RepeatedField $deployed_model_refs
     *           References to the DeployedModels that share the specified
     *           deploymentResourcePool.
     *     @type int $total_deployed_model_count
     *           The total number of DeployedModels on this DeploymentResourcePool.
     *     @type int $total_endpoint_count
     *           The total number of Endpoints that have DeployedModels on this
     *           DeploymentResourcePool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeploymentResourcePoolService::initOnce();
        parent::__construct($data);
    }

    /**
     * DEPRECATED Use deployed_model_refs instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModel deployed_models = 1 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getDeployedModels()
    {
        if ($this->deployed_models->count() !== 0) {
            @trigger_error('deployed_models is deprecated.', E_USER_DEPRECATED);
        }
        return $this->deployed_models;
    }

    /**
     * DEPRECATED Use deployed_model_refs instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModel deployed_models = 1 [deprecated = true];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\DeployedModel>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setDeployedModels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\DeployedModel::class);
        if (count($arr) !== 0) {
            @trigger_error('deployed_models is deprecated.', E_USER_DEPRECATED);
        }
        $this->deployed_models = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * References to the DeployedModels that share the specified
     * deploymentResourcePool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModelRef deployed_model_refs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeployedModelRefs()
    {
        return $this->deployed_model_refs;
    }

    /**
     * References to the DeployedModels that share the specified
     * deploymentResourcePool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModelRef deployed_model_refs = 3;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\DeployedModelRef>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeployedModelRefs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\DeployedModelRef::class);
        $this->deployed_model_refs = $arr;

        return $this;
    }

    /**
     * The total number of DeployedModels on this DeploymentResourcePool.
     *
     * Generated from protobuf field <code>int32 total_deployed_model_count = 4;</code>
     * @return int
     */
    public function getTotalDeployedModelCount()
    {
        return $this->total_deployed_model_count;
    }

    /**
     * The total number of DeployedModels on this DeploymentResourcePool.
     *
     * Generated from protobuf field <code>int32 total_deployed_model_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalDeployedModelCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_deployed_model_count = $var;

        return $this;
    }

    /**
     * The total number of Endpoints that have DeployedModels on this
     * DeploymentResourcePool.
     *
     * Generated from protobuf field <code>int32 total_endpoint_count = 5;</code>
     * @return int
     */
    public function getTotalEndpointCount()
    {
        return $this->total_endpoint_count;
    }

    /**
     * The total number of Endpoints that have DeployedModels on this
     * DeploymentResourcePool.
     *
     * Generated from protobuf field <code>int32 total_endpoint_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalEndpointCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_endpoint_count = $var;

        return $this;
    }

}

