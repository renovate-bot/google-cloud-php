<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/persistent_resource.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents long-lasting resources that are dedicated to users to runs custom
 * workloads.
 * A PersistentResource can have multiple node pools and each node
 * pool can have its own machine spec.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PersistentResource</code>
 */
class PersistentResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Resource name of a PersistentResource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Optional. The display name of the PersistentResource.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Required. The spec of the pools of different resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ResourcePool resource_pools = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource_pools;
    /**
     * Output only. The detailed state of a Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PersistentResource.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Only populated when persistent resource's state is `STOPPING`
     * or `ERROR`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = null;
    /**
     * Output only. Time when the PersistentResource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when the PersistentResource for the first time entered
     * the `RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Time when the PersistentResource was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. The labels with user-defined metadata to organize
     * PersistentResource.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. The full name of the Compute Engine
     * [network](/compute/docs/networks-and-firewalls#networks) to peered with
     * Vertex AI to host the persistent resources.
     * For example, `projects/12345/global/networks/myVPC`.
     * [Format](/compute/docs/reference/rest/v1/networks/insert)
     * is of the form `projects/{project}/global/networks/{network}`.
     * Where {project} is a project number, as in `12345`, and {network} is a
     * network name.
     * To specify this field, you must have already [configured VPC Network
     * Peering for Vertex
     * AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     * If this field is left unspecified, the resources aren't peered with any
     * network.
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * Optional. Configuration for PSC-I for PersistentResource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PscInterfaceConfig psc_interface_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $psc_interface_config = null;
    /**
     * Optional. Customer-managed encryption key spec for a PersistentResource.
     * If set, this PersistentResource and all sub-resources of this
     * PersistentResource will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encryption_spec = null;
    /**
     * Optional. Persistent Resource runtime spec.
     * For example, used for Ray cluster configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ResourceRuntimeSpec resource_runtime_spec = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $resource_runtime_spec = null;
    /**
     * Output only. Runtime information of the Persistent Resource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ResourceRuntime resource_runtime = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $resource_runtime = null;
    /**
     * Optional. A list of names for the reserved IP ranges under the VPC network
     * that can be used for this persistent resource.
     * If set, we will deploy the persistent resource within the provided IP
     * ranges. Otherwise, the persistent resource is deployed to any IP
     * ranges under the provided VPC network.
     * Example: ['vertex-ai-ip-range'].
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $reserved_ip_ranges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. Resource name of a PersistentResource.
     *     @type string $display_name
     *           Optional. The display name of the PersistentResource.
     *           The name can be up to 128 characters long and can consist of any UTF-8
     *           characters.
     *     @type array<\Google\Cloud\AIPlatform\V1\ResourcePool>|\Google\Protobuf\Internal\RepeatedField $resource_pools
     *           Required. The spec of the pools of different resources.
     *     @type int $state
     *           Output only. The detailed state of a Study.
     *     @type \Google\Rpc\Status $error
     *           Output only. Only populated when persistent resource's state is `STOPPING`
     *           or `ERROR`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the PersistentResource was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Time when the PersistentResource for the first time entered
     *           the `RUNNING` state.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when the PersistentResource was most recently updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize
     *           PersistentResource.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *     @type string $network
     *           Optional. The full name of the Compute Engine
     *           [network](/compute/docs/networks-and-firewalls#networks) to peered with
     *           Vertex AI to host the persistent resources.
     *           For example, `projects/12345/global/networks/myVPC`.
     *           [Format](/compute/docs/reference/rest/v1/networks/insert)
     *           is of the form `projects/{project}/global/networks/{network}`.
     *           Where {project} is a project number, as in `12345`, and {network} is a
     *           network name.
     *           To specify this field, you must have already [configured VPC Network
     *           Peering for Vertex
     *           AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     *           If this field is left unspecified, the resources aren't peered with any
     *           network.
     *     @type \Google\Cloud\AIPlatform\V1\PscInterfaceConfig $psc_interface_config
     *           Optional. Configuration for PSC-I for PersistentResource.
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Optional. Customer-managed encryption key spec for a PersistentResource.
     *           If set, this PersistentResource and all sub-resources of this
     *           PersistentResource will be secured by this key.
     *     @type \Google\Cloud\AIPlatform\V1\ResourceRuntimeSpec $resource_runtime_spec
     *           Optional. Persistent Resource runtime spec.
     *           For example, used for Ray cluster configuration.
     *     @type \Google\Cloud\AIPlatform\V1\ResourceRuntime $resource_runtime
     *           Output only. Runtime information of the Persistent Resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $reserved_ip_ranges
     *           Optional. A list of names for the reserved IP ranges under the VPC network
     *           that can be used for this persistent resource.
     *           If set, we will deploy the persistent resource within the provided IP
     *           ranges. Otherwise, the persistent resource is deployed to any IP
     *           ranges under the provided VPC network.
     *           Example: ['vertex-ai-ip-range'].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PersistentResource::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Resource name of a PersistentResource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. Resource name of a PersistentResource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Optional. The display name of the PersistentResource.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. The display name of the PersistentResource.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. The spec of the pools of different resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ResourcePool resource_pools = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourcePools()
    {
        return $this->resource_pools;
    }

    /**
     * Required. The spec of the pools of different resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ResourcePool resource_pools = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ResourcePool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourcePools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ResourcePool::class);
        $this->resource_pools = $arr;

        return $this;
    }

    /**
     * Output only. The detailed state of a Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PersistentResource.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The detailed state of a Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PersistentResource.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\PersistentResource\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Only populated when persistent resource's state is `STOPPING`
     * or `ERROR`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. Only populated when persistent resource's state is `STOPPING`
     * or `ERROR`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Output only. Time when the PersistentResource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when the PersistentResource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the PersistentResource for the first time entered
     * the `RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Time when the PersistentResource for the first time entered
     * the `RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the PersistentResource was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when the PersistentResource was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata to organize
     * PersistentResource.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize
     * PersistentResource.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. The full name of the Compute Engine
     * [network](/compute/docs/networks-and-firewalls#networks) to peered with
     * Vertex AI to host the persistent resources.
     * For example, `projects/12345/global/networks/myVPC`.
     * [Format](/compute/docs/reference/rest/v1/networks/insert)
     * is of the form `projects/{project}/global/networks/{network}`.
     * Where {project} is a project number, as in `12345`, and {network} is a
     * network name.
     * To specify this field, you must have already [configured VPC Network
     * Peering for Vertex
     * AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     * If this field is left unspecified, the resources aren't peered with any
     * network.
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Optional. The full name of the Compute Engine
     * [network](/compute/docs/networks-and-firewalls#networks) to peered with
     * Vertex AI to host the persistent resources.
     * For example, `projects/12345/global/networks/myVPC`.
     * [Format](/compute/docs/reference/rest/v1/networks/insert)
     * is of the form `projects/{project}/global/networks/{network}`.
     * Where {project} is a project number, as in `12345`, and {network} is a
     * network name.
     * To specify this field, you must have already [configured VPC Network
     * Peering for Vertex
     * AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     * If this field is left unspecified, the resources aren't peered with any
     * network.
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. Configuration for PSC-I for PersistentResource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PscInterfaceConfig psc_interface_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\PscInterfaceConfig|null
     */
    public function getPscInterfaceConfig()
    {
        return $this->psc_interface_config;
    }

    public function hasPscInterfaceConfig()
    {
        return isset($this->psc_interface_config);
    }

    public function clearPscInterfaceConfig()
    {
        unset($this->psc_interface_config);
    }

    /**
     * Optional. Configuration for PSC-I for PersistentResource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PscInterfaceConfig psc_interface_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\PscInterfaceConfig $var
     * @return $this
     */
    public function setPscInterfaceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\PscInterfaceConfig::class);
        $this->psc_interface_config = $var;

        return $this;
    }

    /**
     * Optional. Customer-managed encryption key spec for a PersistentResource.
     * If set, this PersistentResource and all sub-resources of this
     * PersistentResource will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Optional. Customer-managed encryption key spec for a PersistentResource.
     * If set, this PersistentResource and all sub-resources of this
     * PersistentResource will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * Optional. Persistent Resource runtime spec.
     * For example, used for Ray cluster configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ResourceRuntimeSpec resource_runtime_spec = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\ResourceRuntimeSpec|null
     */
    public function getResourceRuntimeSpec()
    {
        return $this->resource_runtime_spec;
    }

    public function hasResourceRuntimeSpec()
    {
        return isset($this->resource_runtime_spec);
    }

    public function clearResourceRuntimeSpec()
    {
        unset($this->resource_runtime_spec);
    }

    /**
     * Optional. Persistent Resource runtime spec.
     * For example, used for Ray cluster configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ResourceRuntimeSpec resource_runtime_spec = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\ResourceRuntimeSpec $var
     * @return $this
     */
    public function setResourceRuntimeSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ResourceRuntimeSpec::class);
        $this->resource_runtime_spec = $var;

        return $this;
    }

    /**
     * Output only. Runtime information of the Persistent Resource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ResourceRuntime resource_runtime = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\ResourceRuntime|null
     */
    public function getResourceRuntime()
    {
        return $this->resource_runtime;
    }

    public function hasResourceRuntime()
    {
        return isset($this->resource_runtime);
    }

    public function clearResourceRuntime()
    {
        unset($this->resource_runtime);
    }

    /**
     * Output only. Runtime information of the Persistent Resource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ResourceRuntime resource_runtime = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\ResourceRuntime $var
     * @return $this
     */
    public function setResourceRuntime($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ResourceRuntime::class);
        $this->resource_runtime = $var;

        return $this;
    }

    /**
     * Optional. A list of names for the reserved IP ranges under the VPC network
     * that can be used for this persistent resource.
     * If set, we will deploy the persistent resource within the provided IP
     * ranges. Otherwise, the persistent resource is deployed to any IP
     * ranges under the provided VPC network.
     * Example: ['vertex-ai-ip-range'].
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservedIpRanges()
    {
        return $this->reserved_ip_ranges;
    }

    /**
     * Optional. A list of names for the reserved IP ranges under the VPC network
     * that can be used for this persistent resource.
     * If set, we will deploy the persistent resource within the provided IP
     * ranges. Otherwise, the persistent resource is deployed to any IP
     * ranges under the provided VPC network.
     * Example: ['vertex-ai-ip-range'].
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservedIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reserved_ip_ranges = $arr;

        return $this;
    }

}

