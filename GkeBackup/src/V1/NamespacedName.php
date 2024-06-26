<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/common.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference to a namespaced resource in Kubernetes.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.NamespacedName</code>
 */
class NamespacedName extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Namespace of the Kubernetes resource.
     *
     * Generated from protobuf field <code>string namespace = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $namespace = '';
    /**
     * Optional. The name of the Kubernetes resource.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Optional. The Namespace of the Kubernetes resource.
     *     @type string $name
     *           Optional. The name of the Kubernetes resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Namespace of the Kubernetes resource.
     *
     * Generated from protobuf field <code>string namespace = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Optional. The Namespace of the Kubernetes resource.
     *
     * Generated from protobuf field <code>string namespace = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The name of the Kubernetes resource.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. The name of the Kubernetes resource.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

