<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\ControlPlaneEndpointsConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IP endpoints configuration.
 *
 * Generated from protobuf message <code>google.container.v1.ControlPlaneEndpointsConfig.IPEndpointsConfig</code>
 */
class IPEndpointsConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Controls whether to allow direct IP access.
     *
     * Generated from protobuf field <code>optional bool enabled = 1;</code>
     */
    protected $enabled = null;
    /**
     * Controls whether the control plane allows access through a public IP.
     * It is invalid to specify both
     * [PrivateClusterConfig.enablePrivateEndpoint][] and this field at the same
     * time.
     *
     * Generated from protobuf field <code>optional bool enable_public_endpoint = 2;</code>
     */
    protected $enable_public_endpoint = null;
    /**
     * Controls whether the control plane's private endpoint is accessible from
     * sources in other regions.
     * It is invalid to specify both
     * [PrivateClusterMasterGlobalAccessConfig.enabled][google.container.v1.PrivateClusterMasterGlobalAccessConfig.enabled]
     * and this field at the same time.
     *
     * Generated from protobuf field <code>optional bool global_access = 3;</code>
     */
    protected $global_access = null;
    /**
     * Configuration of authorized networks. If enabled, restricts access to the
     * control plane based on source IP.
     * It is invalid to specify both
     * [Cluster.masterAuthorizedNetworksConfig][] and this field at the same
     * time.
     *
     * Generated from protobuf field <code>.google.container.v1.MasterAuthorizedNetworksConfig authorized_networks_config = 4;</code>
     */
    protected $authorized_networks_config = null;
    /**
     * Output only. The external IP address of this cluster's control plane.
     * Only populated if enabled.
     *
     * Generated from protobuf field <code>string public_endpoint = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $public_endpoint = '';
    /**
     * Output only. The internal IP address of this cluster's control plane.
     * Only populated if enabled.
     *
     * Generated from protobuf field <code>string private_endpoint = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $private_endpoint = '';
    /**
     * Subnet to provision the master's private endpoint during cluster
     * creation. Specified in projects/&#42;&#47;regions/&#42;&#47;subnetworks/&#42; format. It is
     * invalid to specify both
     * [PrivateClusterConfig.privateEndpointSubnetwork][] and this field at the
     * same time.
     *
     * Generated from protobuf field <code>string private_endpoint_subnetwork = 7;</code>
     */
    protected $private_endpoint_subnetwork = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Controls whether to allow direct IP access.
     *     @type bool $enable_public_endpoint
     *           Controls whether the control plane allows access through a public IP.
     *           It is invalid to specify both
     *           [PrivateClusterConfig.enablePrivateEndpoint][] and this field at the same
     *           time.
     *     @type bool $global_access
     *           Controls whether the control plane's private endpoint is accessible from
     *           sources in other regions.
     *           It is invalid to specify both
     *           [PrivateClusterMasterGlobalAccessConfig.enabled][google.container.v1.PrivateClusterMasterGlobalAccessConfig.enabled]
     *           and this field at the same time.
     *     @type \Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig $authorized_networks_config
     *           Configuration of authorized networks. If enabled, restricts access to the
     *           control plane based on source IP.
     *           It is invalid to specify both
     *           [Cluster.masterAuthorizedNetworksConfig][] and this field at the same
     *           time.
     *     @type string $public_endpoint
     *           Output only. The external IP address of this cluster's control plane.
     *           Only populated if enabled.
     *     @type string $private_endpoint
     *           Output only. The internal IP address of this cluster's control plane.
     *           Only populated if enabled.
     *     @type string $private_endpoint_subnetwork
     *           Subnet to provision the master's private endpoint during cluster
     *           creation. Specified in projects/&#42;&#47;regions/&#42;&#47;subnetworks/&#42; format. It is
     *           invalid to specify both
     *           [PrivateClusterConfig.privateEndpointSubnetwork][] and this field at the
     *           same time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Controls whether to allow direct IP access.
     *
     * Generated from protobuf field <code>optional bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return isset($this->enabled) ? $this->enabled : false;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * Controls whether to allow direct IP access.
     *
     * Generated from protobuf field <code>optional bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Controls whether the control plane allows access through a public IP.
     * It is invalid to specify both
     * [PrivateClusterConfig.enablePrivateEndpoint][] and this field at the same
     * time.
     *
     * Generated from protobuf field <code>optional bool enable_public_endpoint = 2;</code>
     * @return bool
     */
    public function getEnablePublicEndpoint()
    {
        return isset($this->enable_public_endpoint) ? $this->enable_public_endpoint : false;
    }

    public function hasEnablePublicEndpoint()
    {
        return isset($this->enable_public_endpoint);
    }

    public function clearEnablePublicEndpoint()
    {
        unset($this->enable_public_endpoint);
    }

    /**
     * Controls whether the control plane allows access through a public IP.
     * It is invalid to specify both
     * [PrivateClusterConfig.enablePrivateEndpoint][] and this field at the same
     * time.
     *
     * Generated from protobuf field <code>optional bool enable_public_endpoint = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePublicEndpoint($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_public_endpoint = $var;

        return $this;
    }

    /**
     * Controls whether the control plane's private endpoint is accessible from
     * sources in other regions.
     * It is invalid to specify both
     * [PrivateClusterMasterGlobalAccessConfig.enabled][google.container.v1.PrivateClusterMasterGlobalAccessConfig.enabled]
     * and this field at the same time.
     *
     * Generated from protobuf field <code>optional bool global_access = 3;</code>
     * @return bool
     */
    public function getGlobalAccess()
    {
        return isset($this->global_access) ? $this->global_access : false;
    }

    public function hasGlobalAccess()
    {
        return isset($this->global_access);
    }

    public function clearGlobalAccess()
    {
        unset($this->global_access);
    }

    /**
     * Controls whether the control plane's private endpoint is accessible from
     * sources in other regions.
     * It is invalid to specify both
     * [PrivateClusterMasterGlobalAccessConfig.enabled][google.container.v1.PrivateClusterMasterGlobalAccessConfig.enabled]
     * and this field at the same time.
     *
     * Generated from protobuf field <code>optional bool global_access = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGlobalAccess($var)
    {
        GPBUtil::checkBool($var);
        $this->global_access = $var;

        return $this;
    }

    /**
     * Configuration of authorized networks. If enabled, restricts access to the
     * control plane based on source IP.
     * It is invalid to specify both
     * [Cluster.masterAuthorizedNetworksConfig][] and this field at the same
     * time.
     *
     * Generated from protobuf field <code>.google.container.v1.MasterAuthorizedNetworksConfig authorized_networks_config = 4;</code>
     * @return \Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig|null
     */
    public function getAuthorizedNetworksConfig()
    {
        return $this->authorized_networks_config;
    }

    public function hasAuthorizedNetworksConfig()
    {
        return isset($this->authorized_networks_config);
    }

    public function clearAuthorizedNetworksConfig()
    {
        unset($this->authorized_networks_config);
    }

    /**
     * Configuration of authorized networks. If enabled, restricts access to the
     * control plane based on source IP.
     * It is invalid to specify both
     * [Cluster.masterAuthorizedNetworksConfig][] and this field at the same
     * time.
     *
     * Generated from protobuf field <code>.google.container.v1.MasterAuthorizedNetworksConfig authorized_networks_config = 4;</code>
     * @param \Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig $var
     * @return $this
     */
    public function setAuthorizedNetworksConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig::class);
        $this->authorized_networks_config = $var;

        return $this;
    }

    /**
     * Output only. The external IP address of this cluster's control plane.
     * Only populated if enabled.
     *
     * Generated from protobuf field <code>string public_endpoint = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPublicEndpoint()
    {
        return $this->public_endpoint;
    }

    /**
     * Output only. The external IP address of this cluster's control plane.
     * Only populated if enabled.
     *
     * Generated from protobuf field <code>string public_endpoint = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPublicEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_endpoint = $var;

        return $this;
    }

    /**
     * Output only. The internal IP address of this cluster's control plane.
     * Only populated if enabled.
     *
     * Generated from protobuf field <code>string private_endpoint = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPrivateEndpoint()
    {
        return $this->private_endpoint;
    }

    /**
     * Output only. The internal IP address of this cluster's control plane.
     * Only populated if enabled.
     *
     * Generated from protobuf field <code>string private_endpoint = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_endpoint = $var;

        return $this;
    }

    /**
     * Subnet to provision the master's private endpoint during cluster
     * creation. Specified in projects/&#42;&#47;regions/&#42;&#47;subnetworks/&#42; format. It is
     * invalid to specify both
     * [PrivateClusterConfig.privateEndpointSubnetwork][] and this field at the
     * same time.
     *
     * Generated from protobuf field <code>string private_endpoint_subnetwork = 7;</code>
     * @return string
     */
    public function getPrivateEndpointSubnetwork()
    {
        return $this->private_endpoint_subnetwork;
    }

    /**
     * Subnet to provision the master's private endpoint during cluster
     * creation. Specified in projects/&#42;&#47;regions/&#42;&#47;subnetworks/&#42; format. It is
     * invalid to specify both
     * [PrivateClusterConfig.privateEndpointSubnetwork][] and this field at the
     * same time.
     *
     * Generated from protobuf field <code>string private_endpoint_subnetwork = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateEndpointSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_endpoint_subnetwork = $var;

        return $this;
    }

}


