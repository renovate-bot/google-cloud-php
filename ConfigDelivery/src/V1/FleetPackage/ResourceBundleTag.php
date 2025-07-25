<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/configdelivery/v1/config_delivery.proto

namespace Google\Cloud\ConfigDelivery\V1\FleetPackage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceBundleTag contains the information to refer to a release for a
 * `ResourceBundle`.
 *
 * Generated from protobuf message <code>google.cloud.configdelivery.v1.FleetPackage.ResourceBundleTag</code>
 */
class ResourceBundleTag extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the `ResourceBundle`.
     * Format is projects/{p}/locations/{l}/resourceBundles/{r}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. Tag refers to a version of the release in a `ResourceBundle`.
     * This is a Git tag in the semantic version format `vX.Y.Z`.
     *
     * Generated from protobuf field <code>string tag = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the `ResourceBundle`.
     *           Format is projects/{p}/locations/{l}/resourceBundles/{r}.
     *     @type string $tag
     *           Required. Tag refers to a version of the release in a `ResourceBundle`.
     *           This is a Git tag in the semantic version format `vX.Y.Z`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Configdelivery\V1\ConfigDelivery::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the `ResourceBundle`.
     * Format is projects/{p}/locations/{l}/resourceBundles/{r}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the `ResourceBundle`.
     * Format is projects/{p}/locations/{l}/resourceBundles/{r}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Tag refers to a version of the release in a `ResourceBundle`.
     * This is a Git tag in the semantic version format `vX.Y.Z`.
     *
     * Generated from protobuf field <code>string tag = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Required. Tag refers to a version of the release in a `ResourceBundle`.
     * This is a Git tag in the semantic version format `vX.Y.Z`.
     *
     * Generated from protobuf field <code>string tag = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

}


