<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A
 * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
 * refers to a managed template for certificate issuance.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CertificateTemplate</code>
 */
class CertificateTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name for this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * in the format `projects/&#42;&#47;locations/&#42;&#47;certificateTemplates/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Optional. The maximum lifetime allowed for issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate] that use
     * this template. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool] resource's
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * specifies a
     * [maximum_lifetime][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.maximum_lifetime]
     * the minimum of the two durations will be the maximum lifetime for issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate]. Note that
     * if the issuing
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * expires before a
     * [Certificate][google.cloud.security.privateca.v1.Certificate]'s requested
     * maximum_lifetime, the effective lifetime will be explicitly truncated
     *  to match it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_lifetime = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $maximum_lifetime = null;
    /**
     * Optional. A set of X.509 values that will be applied to all issued
     * certificates that use this template. If the certificate request includes
     * conflicting values for the same properties, they will be overwritten by the
     * values defined here. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * defines conflicting
     * [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     * for the same properties, the certificate issuance request will fail.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters predefined_values = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $predefined_values = null;
    /**
     * Optional. Describes constraints on identities that may be appear in
     * [Certificates][google.cloud.security.privateca.v1.Certificate] issued using
     * this template. If this is omitted, then this template will not add
     * restrictions on a certificate's identity.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateIdentityConstraints identity_constraints = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $identity_constraints = null;
    /**
     * Optional. Describes the set of X.509 extensions that may appear in a
     * [Certificate][google.cloud.security.privateca.v1.Certificate] issued using
     * this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate].
     * If a certificate request sets extensions that don't appear in the
     * [passthrough_extensions][google.cloud.security.privateca.v1.CertificateTemplate.passthrough_extensions],
     * those extensions will be dropped. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * defines
     * [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     * that don't appear here, the certificate issuance request will fail. If this
     * is omitted, then this template will not add restrictions on a certificate's
     * X.509 extensions. These constraints do not apply to X.509 extensions set in
     * this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]'s
     * [predefined_values][google.cloud.security.privateca.v1.CertificateTemplate.predefined_values].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateExtensionConstraints passthrough_extensions = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $passthrough_extensions = null;
    /**
     * Optional. A human-readable description of scenarios this template is
     * intended for.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. The time at which this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name for this
     *           [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     *           in the format `projects/&#42;&#47;locations/&#42;&#47;certificateTemplates/&#42;`.
     *     @type \Google\Protobuf\Duration $maximum_lifetime
     *           Optional. The maximum lifetime allowed for issued
     *           [Certificates][google.cloud.security.privateca.v1.Certificate] that use
     *           this template. If the issuing
     *           [CaPool][google.cloud.security.privateca.v1.CaPool] resource's
     *           [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     *           specifies a
     *           [maximum_lifetime][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.maximum_lifetime]
     *           the minimum of the two durations will be the maximum lifetime for issued
     *           [Certificates][google.cloud.security.privateca.v1.Certificate]. Note that
     *           if the issuing
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     *           expires before a
     *           [Certificate][google.cloud.security.privateca.v1.Certificate]'s requested
     *           maximum_lifetime, the effective lifetime will be explicitly truncated
     *            to match it.
     *     @type \Google\Cloud\Security\PrivateCA\V1\X509Parameters $predefined_values
     *           Optional. A set of X.509 values that will be applied to all issued
     *           certificates that use this template. If the certificate request includes
     *           conflicting values for the same properties, they will be overwritten by the
     *           values defined here. If the issuing
     *           [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     *           [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     *           defines conflicting
     *           [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     *           for the same properties, the certificate issuance request will fail.
     *     @type \Google\Cloud\Security\PrivateCA\V1\CertificateIdentityConstraints $identity_constraints
     *           Optional. Describes constraints on identities that may be appear in
     *           [Certificates][google.cloud.security.privateca.v1.Certificate] issued using
     *           this template. If this is omitted, then this template will not add
     *           restrictions on a certificate's identity.
     *     @type \Google\Cloud\Security\PrivateCA\V1\CertificateExtensionConstraints $passthrough_extensions
     *           Optional. Describes the set of X.509 extensions that may appear in a
     *           [Certificate][google.cloud.security.privateca.v1.Certificate] issued using
     *           this
     *           [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate].
     *           If a certificate request sets extensions that don't appear in the
     *           [passthrough_extensions][google.cloud.security.privateca.v1.CertificateTemplate.passthrough_extensions],
     *           those extensions will be dropped. If the issuing
     *           [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     *           [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     *           defines
     *           [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     *           that don't appear here, the certificate issuance request will fail. If this
     *           is omitted, then this template will not add restrictions on a certificate's
     *           X.509 extensions. These constraints do not apply to X.509 extensions set in
     *           this
     *           [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]'s
     *           [predefined_values][google.cloud.security.privateca.v1.CertificateTemplate.predefined_values].
     *     @type string $description
     *           Optional. A human-readable description of scenarios this template is
     *           intended for.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this
     *           [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     *           was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this
     *           [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     *           was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels with user-defined metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name for this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * in the format `projects/&#42;&#47;locations/&#42;&#47;certificateTemplates/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name for this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * in the format `projects/&#42;&#47;locations/&#42;&#47;certificateTemplates/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Optional. The maximum lifetime allowed for issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate] that use
     * this template. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool] resource's
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * specifies a
     * [maximum_lifetime][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.maximum_lifetime]
     * the minimum of the two durations will be the maximum lifetime for issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate]. Note that
     * if the issuing
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * expires before a
     * [Certificate][google.cloud.security.privateca.v1.Certificate]'s requested
     * maximum_lifetime, the effective lifetime will be explicitly truncated
     *  to match it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_lifetime = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaximumLifetime()
    {
        return $this->maximum_lifetime;
    }

    public function hasMaximumLifetime()
    {
        return isset($this->maximum_lifetime);
    }

    public function clearMaximumLifetime()
    {
        unset($this->maximum_lifetime);
    }

    /**
     * Optional. The maximum lifetime allowed for issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate] that use
     * this template. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool] resource's
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * specifies a
     * [maximum_lifetime][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.maximum_lifetime]
     * the minimum of the two durations will be the maximum lifetime for issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate]. Note that
     * if the issuing
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * expires before a
     * [Certificate][google.cloud.security.privateca.v1.Certificate]'s requested
     * maximum_lifetime, the effective lifetime will be explicitly truncated
     *  to match it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_lifetime = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaximumLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->maximum_lifetime = $var;

        return $this;
    }

    /**
     * Optional. A set of X.509 values that will be applied to all issued
     * certificates that use this template. If the certificate request includes
     * conflicting values for the same properties, they will be overwritten by the
     * values defined here. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * defines conflicting
     * [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     * for the same properties, the certificate issuance request will fail.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters predefined_values = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\X509Parameters|null
     */
    public function getPredefinedValues()
    {
        return $this->predefined_values;
    }

    public function hasPredefinedValues()
    {
        return isset($this->predefined_values);
    }

    public function clearPredefinedValues()
    {
        unset($this->predefined_values);
    }

    /**
     * Optional. A set of X.509 values that will be applied to all issued
     * certificates that use this template. If the certificate request includes
     * conflicting values for the same properties, they will be overwritten by the
     * values defined here. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * defines conflicting
     * [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     * for the same properties, the certificate issuance request will fail.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters predefined_values = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\X509Parameters $var
     * @return $this
     */
    public function setPredefinedValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\X509Parameters::class);
        $this->predefined_values = $var;

        return $this;
    }

    /**
     * Optional. Describes constraints on identities that may be appear in
     * [Certificates][google.cloud.security.privateca.v1.Certificate] issued using
     * this template. If this is omitted, then this template will not add
     * restrictions on a certificate's identity.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateIdentityConstraints identity_constraints = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CertificateIdentityConstraints|null
     */
    public function getIdentityConstraints()
    {
        return $this->identity_constraints;
    }

    public function hasIdentityConstraints()
    {
        return isset($this->identity_constraints);
    }

    public function clearIdentityConstraints()
    {
        unset($this->identity_constraints);
    }

    /**
     * Optional. Describes constraints on identities that may be appear in
     * [Certificates][google.cloud.security.privateca.v1.Certificate] issued using
     * this template. If this is omitted, then this template will not add
     * restrictions on a certificate's identity.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateIdentityConstraints identity_constraints = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CertificateIdentityConstraints $var
     * @return $this
     */
    public function setIdentityConstraints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CertificateIdentityConstraints::class);
        $this->identity_constraints = $var;

        return $this;
    }

    /**
     * Optional. Describes the set of X.509 extensions that may appear in a
     * [Certificate][google.cloud.security.privateca.v1.Certificate] issued using
     * this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate].
     * If a certificate request sets extensions that don't appear in the
     * [passthrough_extensions][google.cloud.security.privateca.v1.CertificateTemplate.passthrough_extensions],
     * those extensions will be dropped. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * defines
     * [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     * that don't appear here, the certificate issuance request will fail. If this
     * is omitted, then this template will not add restrictions on a certificate's
     * X.509 extensions. These constraints do not apply to X.509 extensions set in
     * this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]'s
     * [predefined_values][google.cloud.security.privateca.v1.CertificateTemplate.predefined_values].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateExtensionConstraints passthrough_extensions = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CertificateExtensionConstraints|null
     */
    public function getPassthroughExtensions()
    {
        return $this->passthrough_extensions;
    }

    public function hasPassthroughExtensions()
    {
        return isset($this->passthrough_extensions);
    }

    public function clearPassthroughExtensions()
    {
        unset($this->passthrough_extensions);
    }

    /**
     * Optional. Describes the set of X.509 extensions that may appear in a
     * [Certificate][google.cloud.security.privateca.v1.Certificate] issued using
     * this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate].
     * If a certificate request sets extensions that don't appear in the
     * [passthrough_extensions][google.cloud.security.privateca.v1.CertificateTemplate.passthrough_extensions],
     * those extensions will be dropped. If the issuing
     * [CaPool][google.cloud.security.privateca.v1.CaPool]'s
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * defines
     * [baseline_values][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.baseline_values]
     * that don't appear here, the certificate issuance request will fail. If this
     * is omitted, then this template will not add restrictions on a certificate's
     * X.509 extensions. These constraints do not apply to X.509 extensions set in
     * this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]'s
     * [predefined_values][google.cloud.security.privateca.v1.CertificateTemplate.predefined_values].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateExtensionConstraints passthrough_extensions = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CertificateExtensionConstraints $var
     * @return $this
     */
    public function setPassthroughExtensions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CertificateExtensionConstraints::class);
        $this->passthrough_extensions = $var;

        return $this;
    }

    /**
     * Optional. A human-readable description of scenarios this template is
     * intended for.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A human-readable description of scenarios this template is
     * intended for.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The time at which this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this
     * [CertificateTemplate][google.cloud.security.privateca.v1.CertificateTemplate]
     * was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

