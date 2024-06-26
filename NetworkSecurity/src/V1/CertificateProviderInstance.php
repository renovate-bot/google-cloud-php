<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/tls.proto

namespace Google\Cloud\NetworkSecurity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of a TLS certificate provider instance. Workloads may have one
 * or more CertificateProvider instances (plugins) and one of them is enabled
 * and configured by specifying this message. Workloads use the values from this
 * message to locate and load the CertificateProvider instance configuration.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1.CertificateProviderInstance</code>
 */
class CertificateProviderInstance extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Plugin instance name, used to locate and load CertificateProvider instance
     * configuration. Set to "google_cloud_private_spiffe" to use Certificate
     * Authority Service certificate provider instance.
     *
     * Generated from protobuf field <code>string plugin_instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $plugin_instance = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plugin_instance
     *           Required. Plugin instance name, used to locate and load CertificateProvider instance
     *           configuration. Set to "google_cloud_private_spiffe" to use Certificate
     *           Authority Service certificate provider instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1\Tls::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Plugin instance name, used to locate and load CertificateProvider instance
     * configuration. Set to "google_cloud_private_spiffe" to use Certificate
     * Authority Service certificate provider instance.
     *
     * Generated from protobuf field <code>string plugin_instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPluginInstance()
    {
        return $this->plugin_instance;
    }

    /**
     * Required. Plugin instance name, used to locate and load CertificateProvider instance
     * configuration. Set to "google_cloud_private_spiffe" to use Certificate
     * Authority Service certificate provider instance.
     *
     * Generated from protobuf field <code>string plugin_instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPluginInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->plugin_instance = $var;

        return $this;
    }

}

