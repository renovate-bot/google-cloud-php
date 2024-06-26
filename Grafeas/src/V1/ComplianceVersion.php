<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/compliance.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the CIS benchmark version that is applicable to a given OS and
 * os version.
 *
 * Generated from protobuf message <code>grafeas.v1.ComplianceVersion</code>
 */
class ComplianceVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * The CPE URI (https://cpe.mitre.org/specification/) this benchmark is
     * applicable to.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     */
    protected $cpe_uri = '';
    /**
     * The name of the document that defines this benchmark, e.g. "CIS
     * Container-Optimized OS".
     *
     * Generated from protobuf field <code>string benchmark_document = 3;</code>
     */
    protected $benchmark_document = '';
    /**
     * The version of the benchmark. This is set to the version of the OS-specific
     * CIS document the benchmark is defined in.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cpe_uri
     *           The CPE URI (https://cpe.mitre.org/specification/) this benchmark is
     *           applicable to.
     *     @type string $benchmark_document
     *           The name of the document that defines this benchmark, e.g. "CIS
     *           Container-Optimized OS".
     *     @type string $version
     *           The version of the benchmark. This is set to the version of the OS-specific
     *           CIS document the benchmark is defined in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Compliance::initOnce();
        parent::__construct($data);
    }

    /**
     * The CPE URI (https://cpe.mitre.org/specification/) this benchmark is
     * applicable to.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     * @return string
     */
    public function getCpeUri()
    {
        return $this->cpe_uri;
    }

    /**
     * The CPE URI (https://cpe.mitre.org/specification/) this benchmark is
     * applicable to.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCpeUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpe_uri = $var;

        return $this;
    }

    /**
     * The name of the document that defines this benchmark, e.g. "CIS
     * Container-Optimized OS".
     *
     * Generated from protobuf field <code>string benchmark_document = 3;</code>
     * @return string
     */
    public function getBenchmarkDocument()
    {
        return $this->benchmark_document;
    }

    /**
     * The name of the document that defines this benchmark, e.g. "CIS
     * Container-Optimized OS".
     *
     * Generated from protobuf field <code>string benchmark_document = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBenchmarkDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->benchmark_document = $var;

        return $this;
    }

    /**
     * The version of the benchmark. This is set to the version of the OS-specific
     * CIS document the benchmark is defined in.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the benchmark. This is set to the version of the OS-specific
     * CIS document the benchmark is defined in.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

