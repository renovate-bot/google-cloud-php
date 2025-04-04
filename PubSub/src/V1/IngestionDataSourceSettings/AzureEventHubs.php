<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\IngestionDataSourceSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Ingestion settings for Azure Event Hubs.
 *
 * Generated from protobuf message <code>google.pubsub.v1.IngestionDataSourceSettings.AzureEventHubs</code>
 */
class AzureEventHubs extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. An output-only field that indicates the state of the Event
     * Hubs ingestion source.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.AzureEventHubs.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Optional. Name of the resource group within the azure subscription.
     *
     * Generated from protobuf field <code>string resource_group = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_group = '';
    /**
     * Optional. The name of the Event Hubs namespace.
     *
     * Generated from protobuf field <code>string namespace = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $namespace = '';
    /**
     * Optional. The name of the Event Hub.
     *
     * Generated from protobuf field <code>string event_hub = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $event_hub = '';
    /**
     * Optional. The client id of the Azure application that is being used to
     * authenticate Pub/Sub.
     *
     * Generated from protobuf field <code>string client_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $client_id = '';
    /**
     * Optional. The tenant id of the Azure application that is being used to
     * authenticate Pub/Sub.
     *
     * Generated from protobuf field <code>string tenant_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tenant_id = '';
    /**
     * Optional. The Azure subscription id.
     *
     * Generated from protobuf field <code>string subscription_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subscription_id = '';
    /**
     * Optional. The GCP service account to be used for Federated Identity
     * authentication.
     *
     * Generated from protobuf field <code>string gcp_service_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $gcp_service_account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Output only. An output-only field that indicates the state of the Event
     *           Hubs ingestion source.
     *     @type string $resource_group
     *           Optional. Name of the resource group within the azure subscription.
     *     @type string $namespace
     *           Optional. The name of the Event Hubs namespace.
     *     @type string $event_hub
     *           Optional. The name of the Event Hub.
     *     @type string $client_id
     *           Optional. The client id of the Azure application that is being used to
     *           authenticate Pub/Sub.
     *     @type string $tenant_id
     *           Optional. The tenant id of the Azure application that is being used to
     *           authenticate Pub/Sub.
     *     @type string $subscription_id
     *           Optional. The Azure subscription id.
     *     @type string $gcp_service_account
     *           Optional. The GCP service account to be used for Federated Identity
     *           authentication.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. An output-only field that indicates the state of the Event
     * Hubs ingestion source.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.AzureEventHubs.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. An output-only field that indicates the state of the Event
     * Hubs ingestion source.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.AzureEventHubs.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AzureEventHubs\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. Name of the resource group within the azure subscription.
     *
     * Generated from protobuf field <code>string resource_group = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getResourceGroup()
    {
        return $this->resource_group;
    }

    /**
     * Optional. Name of the resource group within the azure subscription.
     *
     * Generated from protobuf field <code>string resource_group = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setResourceGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_group = $var;

        return $this;
    }

    /**
     * Optional. The name of the Event Hubs namespace.
     *
     * Generated from protobuf field <code>string namespace = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Optional. The name of the Event Hubs namespace.
     *
     * Generated from protobuf field <code>string namespace = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Optional. The name of the Event Hub.
     *
     * Generated from protobuf field <code>string event_hub = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEventHub()
    {
        return $this->event_hub;
    }

    /**
     * Optional. The name of the Event Hub.
     *
     * Generated from protobuf field <code>string event_hub = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEventHub($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_hub = $var;

        return $this;
    }

    /**
     * Optional. The client id of the Azure application that is being used to
     * authenticate Pub/Sub.
     *
     * Generated from protobuf field <code>string client_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Optional. The client id of the Azure application that is being used to
     * authenticate Pub/Sub.
     *
     * Generated from protobuf field <code>string client_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Optional. The tenant id of the Azure application that is being used to
     * authenticate Pub/Sub.
     *
     * Generated from protobuf field <code>string tenant_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTenantId()
    {
        return $this->tenant_id;
    }

    /**
     * Optional. The tenant id of the Azure application that is being used to
     * authenticate Pub/Sub.
     *
     * Generated from protobuf field <code>string tenant_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTenantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_id = $var;

        return $this;
    }

    /**
     * Optional. The Azure subscription id.
     *
     * Generated from protobuf field <code>string subscription_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscription_id;
    }

    /**
     * Optional. The Azure subscription id.
     *
     * Generated from protobuf field <code>string subscription_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubscriptionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription_id = $var;

        return $this;
    }

    /**
     * Optional. The GCP service account to be used for Federated Identity
     * authentication.
     *
     * Generated from protobuf field <code>string gcp_service_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getGcpServiceAccount()
    {
        return $this->gcp_service_account;
    }

    /**
     * Optional. The GCP service account to be used for Federated Identity
     * authentication.
     *
     * Generated from protobuf field <code>string gcp_service_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setGcpServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcp_service_account = $var;

        return $this;
    }

}


