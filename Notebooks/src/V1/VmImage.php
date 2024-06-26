<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/environment.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Definition of a custom Compute Engine virtual machine image for starting a
 * notebook instance with the environment installed directly on the VM.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.VmImage</code>
 */
class VmImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Google Cloud project that this VM image belongs to.
     * Format: `{project_id}`
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    protected $image;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Required. The name of the Google Cloud project that this VM image belongs to.
     *           Format: `{project_id}`
     *     @type string $image_name
     *           Use VM image name to find the image.
     *     @type string $image_family
     *           Use this VM image family to find the image; the newest image in this
     *           family will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Google Cloud project that this VM image belongs to.
     * Format: `{project_id}`
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Required. The name of the Google Cloud project that this VM image belongs to.
     * Format: `{project_id}`
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Use VM image name to find the image.
     *
     * Generated from protobuf field <code>string image_name = 2;</code>
     * @return string
     */
    public function getImageName()
    {
        return $this->readOneof(2);
    }

    public function hasImageName()
    {
        return $this->hasOneof(2);
    }

    /**
     * Use VM image name to find the image.
     *
     * Generated from protobuf field <code>string image_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Use this VM image family to find the image; the newest image in this
     * family will be used.
     *
     * Generated from protobuf field <code>string image_family = 3;</code>
     * @return string
     */
    public function getImageFamily()
    {
        return $this->readOneof(3);
    }

    public function hasImageFamily()
    {
        return $this->hasOneof(3);
    }

    /**
     * Use this VM image family to find the image; the newest image in this
     * family will be used.
     *
     * Generated from protobuf field <code>string image_family = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setImageFamily($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->whichOneof("image");
    }

}

