<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_issuance_config.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CreateCertificateIssuanceConfig` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.CreateCertificateIssuanceConfigRequest</code>
 */
class CreateCertificateIssuanceConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the certificate issuance config. Must be
     * in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. A user-provided name of the certificate config.
     *
     * Generated from protobuf field <code>string certificate_issuance_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $certificate_issuance_config_id = '';
    /**
     * Required. A definition of the certificate issuance config to create.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig certificate_issuance_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $certificate_issuance_config = null;

    /**
     * @param string                                                        $parent                      Required. The parent resource of the certificate issuance config. Must be
     *                                                                                                   in the format `projects/&#42;/locations/*`. Please see
     *                                                                                                   {@see CertificateManagerClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig $certificateIssuanceConfig   Required. A definition of the certificate issuance config to create.
     * @param string                                                        $certificateIssuanceConfigId Required. A user-provided name of the certificate config.
     *
     * @return \Google\Cloud\CertificateManager\V1\CreateCertificateIssuanceConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig $certificateIssuanceConfig, string $certificateIssuanceConfigId): self
    {
        return (new self())
            ->setParent($parent)
            ->setCertificateIssuanceConfig($certificateIssuanceConfig)
            ->setCertificateIssuanceConfigId($certificateIssuanceConfigId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the certificate issuance config. Must be
     *           in the format `projects/&#42;&#47;locations/&#42;`.
     *     @type string $certificate_issuance_config_id
     *           Required. A user-provided name of the certificate config.
     *     @type \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig $certificate_issuance_config
     *           Required. A definition of the certificate issuance config to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateIssuanceConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the certificate issuance config. Must be
     * in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the certificate issuance config. Must be
     * in the format `projects/&#42;&#47;locations/&#42;`.
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
     * Required. A user-provided name of the certificate config.
     *
     * Generated from protobuf field <code>string certificate_issuance_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCertificateIssuanceConfigId()
    {
        return $this->certificate_issuance_config_id;
    }

    /**
     * Required. A user-provided name of the certificate config.
     *
     * Generated from protobuf field <code>string certificate_issuance_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateIssuanceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificate_issuance_config_id = $var;

        return $this;
    }

    /**
     * Required. A definition of the certificate issuance config to create.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig certificate_issuance_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig|null
     */
    public function getCertificateIssuanceConfig()
    {
        return $this->certificate_issuance_config;
    }

    public function hasCertificateIssuanceConfig()
    {
        return isset($this->certificate_issuance_config);
    }

    public function clearCertificateIssuanceConfig()
    {
        unset($this->certificate_issuance_config);
    }

    /**
     * Required. A definition of the certificate issuance config to create.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig certificate_issuance_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig $var
     * @return $this
     */
    public function setCertificateIssuanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig::class);
        $this->certificate_issuance_config = $var;

        return $this;
    }

}

