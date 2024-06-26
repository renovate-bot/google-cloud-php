<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/artifact.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DockerImage represents a docker artifact.
 * The following fields are returned as untyped metadata in the Version
 * resource, using camelcase keys (i.e. metadata.imageSizeBytes):
 * * imageSizeBytes
 * * mediaType
 * * buildTime
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.DockerImage</code>
 */
class DockerImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. registry_location, project_id, repository_name and image id forms
     * a unique image
     * name:`projects/<project_id>/locations/<location>/repository/<repository_name>/dockerImages/<docker_image>`.
     * For example,
     * "projects/test-project/locations/us-west4/repositories/test-repo/dockerImages/
     * nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf",
     * where "us-west4" is the registry_location, "test-project" is the
     * project_id, "test-repo" is the repository_name and
     * "nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf"
     * is the image's digest.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. URL to access the image.
     * Example:
     * us-west4-docker.pkg.dev/test-project/test-repo/nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';
    /**
     * Tags attached to this image.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     */
    private $tags;
    /**
     * Calculated size of the image.
     * This field is returned as the 'metadata.imageSizeBytes' field in the
     * Version resource.
     *
     * Generated from protobuf field <code>int64 image_size_bytes = 4;</code>
     */
    protected $image_size_bytes = 0;
    /**
     * Time the image was uploaded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp upload_time = 5;</code>
     */
    protected $upload_time = null;
    /**
     * Media type of this image, e.g.
     * "application/vnd.docker.distribution.manifest.v2+json".
     * This field is returned as the 'metadata.mediaType' field in the
     * Version resource.
     *
     * Generated from protobuf field <code>string media_type = 6;</code>
     */
    protected $media_type = '';
    /**
     * The time this image was built.
     * This field is returned as the 'metadata.buildTime' field in the
     * Version resource.
     * The build time is returned to the client as an RFC 3339 string, which can
     * be easily used with the JavaScript Date constructor.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp build_time = 7;</code>
     */
    protected $build_time = null;
    /**
     * Output only. The time when the docker image was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. registry_location, project_id, repository_name and image id forms
     *           a unique image
     *           name:`projects/<project_id>/locations/<location>/repository/<repository_name>/dockerImages/<docker_image>`.
     *           For example,
     *           "projects/test-project/locations/us-west4/repositories/test-repo/dockerImages/
     *           nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf",
     *           where "us-west4" is the registry_location, "test-project" is the
     *           project_id, "test-repo" is the repository_name and
     *           "nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf"
     *           is the image's digest.
     *     @type string $uri
     *           Required. URL to access the image.
     *           Example:
     *           us-west4-docker.pkg.dev/test-project/test-repo/nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           Tags attached to this image.
     *     @type int|string $image_size_bytes
     *           Calculated size of the image.
     *           This field is returned as the 'metadata.imageSizeBytes' field in the
     *           Version resource.
     *     @type \Google\Protobuf\Timestamp $upload_time
     *           Time the image was uploaded.
     *     @type string $media_type
     *           Media type of this image, e.g.
     *           "application/vnd.docker.distribution.manifest.v2+json".
     *           This field is returned as the 'metadata.mediaType' field in the
     *           Version resource.
     *     @type \Google\Protobuf\Timestamp $build_time
     *           The time this image was built.
     *           This field is returned as the 'metadata.buildTime' field in the
     *           Version resource.
     *           The build time is returned to the client as an RFC 3339 string, which can
     *           be easily used with the JavaScript Date constructor.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the docker image was last updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Artifact::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. registry_location, project_id, repository_name and image id forms
     * a unique image
     * name:`projects/<project_id>/locations/<location>/repository/<repository_name>/dockerImages/<docker_image>`.
     * For example,
     * "projects/test-project/locations/us-west4/repositories/test-repo/dockerImages/
     * nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf",
     * where "us-west4" is the registry_location, "test-project" is the
     * project_id, "test-repo" is the repository_name and
     * "nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf"
     * is the image's digest.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. registry_location, project_id, repository_name and image id forms
     * a unique image
     * name:`projects/<project_id>/locations/<location>/repository/<repository_name>/dockerImages/<docker_image>`.
     * For example,
     * "projects/test-project/locations/us-west4/repositories/test-repo/dockerImages/
     * nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf",
     * where "us-west4" is the registry_location, "test-project" is the
     * project_id, "test-repo" is the repository_name and
     * "nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf"
     * is the image's digest.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. URL to access the image.
     * Example:
     * us-west4-docker.pkg.dev/test-project/test-repo/nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. URL to access the image.
     * Example:
     * us-west4-docker.pkg.dev/test-project/test-repo/nginx&#64;sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf072163515467d6a823c7cf
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Tags attached to this image.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Tags attached to this image.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Calculated size of the image.
     * This field is returned as the 'metadata.imageSizeBytes' field in the
     * Version resource.
     *
     * Generated from protobuf field <code>int64 image_size_bytes = 4;</code>
     * @return int|string
     */
    public function getImageSizeBytes()
    {
        return $this->image_size_bytes;
    }

    /**
     * Calculated size of the image.
     * This field is returned as the 'metadata.imageSizeBytes' field in the
     * Version resource.
     *
     * Generated from protobuf field <code>int64 image_size_bytes = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setImageSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->image_size_bytes = $var;

        return $this;
    }

    /**
     * Time the image was uploaded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp upload_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUploadTime()
    {
        return $this->upload_time;
    }

    public function hasUploadTime()
    {
        return isset($this->upload_time);
    }

    public function clearUploadTime()
    {
        unset($this->upload_time);
    }

    /**
     * Time the image was uploaded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp upload_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUploadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->upload_time = $var;

        return $this;
    }

    /**
     * Media type of this image, e.g.
     * "application/vnd.docker.distribution.manifest.v2+json".
     * This field is returned as the 'metadata.mediaType' field in the
     * Version resource.
     *
     * Generated from protobuf field <code>string media_type = 6;</code>
     * @return string
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Media type of this image, e.g.
     * "application/vnd.docker.distribution.manifest.v2+json".
     * This field is returned as the 'metadata.mediaType' field in the
     * Version resource.
     *
     * Generated from protobuf field <code>string media_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMediaType($var)
    {
        GPBUtil::checkString($var, True);
        $this->media_type = $var;

        return $this;
    }

    /**
     * The time this image was built.
     * This field is returned as the 'metadata.buildTime' field in the
     * Version resource.
     * The build time is returned to the client as an RFC 3339 string, which can
     * be easily used with the JavaScript Date constructor.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp build_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getBuildTime()
    {
        return $this->build_time;
    }

    public function hasBuildTime()
    {
        return isset($this->build_time);
    }

    public function clearBuildTime()
    {
        unset($this->build_time);
    }

    /**
     * The time this image was built.
     * This field is returned as the 'metadata.buildTime' field in the
     * Version resource.
     * The build time is returned to the client as an RFC 3339 string, which can
     * be easily used with the JavaScript Date constructor.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp build_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setBuildTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->build_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the docker image was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the docker image was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

