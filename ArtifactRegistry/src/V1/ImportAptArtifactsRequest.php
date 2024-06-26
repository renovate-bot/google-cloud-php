<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/apt_artifact.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to import new apt artifacts.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.ImportAptArtifactsRequest</code>
 */
class ImportAptArtifactsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the parent resource where the artifacts will be imported.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ArtifactRegistry\V1\ImportAptArtifactsGcsSource $gcs_source
     *           Google Cloud Storage location where input content is located.
     *     @type string $parent
     *           The name of the parent resource where the artifacts will be imported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\AptArtifact::initOnce();
        parent::__construct($data);
    }

    /**
     * Google Cloud Storage location where input content is located.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.ImportAptArtifactsGcsSource gcs_source = 2;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\ImportAptArtifactsGcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Google Cloud Storage location where input content is located.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.ImportAptArtifactsGcsSource gcs_source = 2;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\ImportAptArtifactsGcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\ImportAptArtifactsGcsSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The name of the parent resource where the artifacts will be imported.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The name of the parent resource where the artifacts will be imported.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

