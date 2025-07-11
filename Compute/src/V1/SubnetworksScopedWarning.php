<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SubnetworksScopedWarning</code>
 */
class SubnetworksScopedWarning extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the scope containing this set of Subnetworks.
     *
     * Generated from protobuf field <code>optional string scope_name = 345557398;</code>
     */
    private $scope_name = null;
    /**
     * An informational warning about unreachable scope
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     */
    private $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope_name
     *           Name of the scope containing this set of Subnetworks.
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     *           An informational warning about unreachable scope
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the scope containing this set of Subnetworks.
     *
     * Generated from protobuf field <code>optional string scope_name = 345557398;</code>
     * @return string
     */
    public function getScopeName()
    {
        return isset($this->scope_name) ? $this->scope_name : '';
    }

    public function hasScopeName()
    {
        return isset($this->scope_name);
    }

    public function clearScopeName()
    {
        unset($this->scope_name);
    }

    /**
     * Name of the scope containing this set of Subnetworks.
     *
     * Generated from protobuf field <code>optional string scope_name = 345557398;</code>
     * @param string $var
     * @return $this
     */
    public function setScopeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope_name = $var;

        return $this;
    }

    /**
     * An informational warning about unreachable scope
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @return \Google\Cloud\Compute\V1\Warning|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * An informational warning about unreachable scope
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

