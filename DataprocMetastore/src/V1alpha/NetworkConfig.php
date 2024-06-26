<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Network configuration for the Dataproc Metastore service.
 * Next available ID: 4
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1alpha.NetworkConfig</code>
 */
class NetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The consumer-side network configuration for the Dataproc
     * Metastore instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.metastore.v1alpha.NetworkConfig.Consumer consumers = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $consumers;
    /**
     * Enables custom routes to be imported and exported for the Dataproc
     * Metastore service's peered VPC network.
     *
     * Generated from protobuf field <code>bool custom_routes_enabled = 2;</code>
     */
    protected $custom_routes_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Metastore\V1alpha\NetworkConfig\Consumer>|\Google\Protobuf\Internal\RepeatedField $consumers
     *           Immutable. The consumer-side network configuration for the Dataproc
     *           Metastore instance.
     *     @type bool $custom_routes_enabled
     *           Enables custom routes to be imported and exported for the Dataproc
     *           Metastore service's peered VPC network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The consumer-side network configuration for the Dataproc
     * Metastore instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.metastore.v1alpha.NetworkConfig.Consumer consumers = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConsumers()
    {
        return $this->consumers;
    }

    /**
     * Immutable. The consumer-side network configuration for the Dataproc
     * Metastore instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.metastore.v1alpha.NetworkConfig.Consumer consumers = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<\Google\Cloud\Metastore\V1alpha\NetworkConfig\Consumer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsumers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Metastore\V1alpha\NetworkConfig\Consumer::class);
        $this->consumers = $arr;

        return $this;
    }

    /**
     * Enables custom routes to be imported and exported for the Dataproc
     * Metastore service's peered VPC network.
     *
     * Generated from protobuf field <code>bool custom_routes_enabled = 2;</code>
     * @return bool
     */
    public function getCustomRoutesEnabled()
    {
        return $this->custom_routes_enabled;
    }

    /**
     * Enables custom routes to be imported and exported for the Dataproc
     * Metastore service's peered VPC network.
     *
     * Generated from protobuf field <code>bool custom_routes_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCustomRoutesEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->custom_routes_enabled = $var;

        return $this;
    }

}

