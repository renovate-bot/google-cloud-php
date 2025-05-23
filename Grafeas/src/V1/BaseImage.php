<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/common.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BaseImage describes a base image of a container image.
 *
 * Generated from protobuf message <code>grafeas.v1.BaseImage</code>
 */
class BaseImage extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the base image.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The repository name in which the base image is from.
     *
     * Generated from protobuf field <code>string repository = 2;</code>
     */
    protected $repository = '';
    /**
     * The number of layers that the base image is composed of.
     *
     * Generated from protobuf field <code>int32 layer_count = 3;</code>
     */
    protected $layer_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the base image.
     *     @type string $repository
     *           The repository name in which the base image is from.
     *     @type int $layer_count
     *           The number of layers that the base image is composed of.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the base image.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the base image.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The repository name in which the base image is from.
     *
     * Generated from protobuf field <code>string repository = 2;</code>
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * The repository name in which the base image is from.
     *
     * Generated from protobuf field <code>string repository = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository = $var;

        return $this;
    }

    /**
     * The number of layers that the base image is composed of.
     *
     * Generated from protobuf field <code>int32 layer_count = 3;</code>
     * @return int
     */
    public function getLayerCount()
    {
        return $this->layer_count;
    }

    /**
     * The number of layers that the base image is composed of.
     *
     * Generated from protobuf field <code>int32 layer_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLayerCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->layer_count = $var;

        return $this;
    }

}

