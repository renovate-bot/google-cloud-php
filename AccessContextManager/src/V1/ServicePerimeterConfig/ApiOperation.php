<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/service_perimeter.proto

namespace Google\Identity\AccessContextManager\V1\ServicePerimeterConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identification for an API Operation.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation</code>
 */
class ApiOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the API whose methods or permissions the [IngressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * or [EgressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * want to allow. A single [ApiOperation]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation]
     * with `service_name` field set to `*` will allow all methods AND
     * permissions for all services.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     */
    protected $service_name = '';
    /**
     * API methods or permissions to allow. Method or permission must belong to
     * the service specified by `service_name` field. A single [MethodSelector]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector]
     * entry with `*` specified for the `method` field will allow all methods
     * AND permissions for the service specified in `service_name`.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector method_selectors = 2;</code>
     */
    private $method_selectors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           The name of the API whose methods or permissions the [IngressPolicy]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     *           or [EgressPolicy]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     *           want to allow. A single [ApiOperation]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation]
     *           with `service_name` field set to `*` will allow all methods AND
     *           permissions for all services.
     *     @type array<\Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\MethodSelector>|\Google\Protobuf\Internal\RepeatedField $method_selectors
     *           API methods or permissions to allow. Method or permission must belong to
     *           the service specified by `service_name` field. A single [MethodSelector]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector]
     *           entry with `*` specified for the `method` field will allow all methods
     *           AND permissions for the service specified in `service_name`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\ServicePerimeter::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the API whose methods or permissions the [IngressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * or [EgressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * want to allow. A single [ApiOperation]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation]
     * with `service_name` field set to `*` will allow all methods AND
     * permissions for all services.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * The name of the API whose methods or permissions the [IngressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * or [EgressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * want to allow. A single [ApiOperation]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation]
     * with `service_name` field set to `*` will allow all methods AND
     * permissions for all services.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * API methods or permissions to allow. Method or permission must belong to
     * the service specified by `service_name` field. A single [MethodSelector]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector]
     * entry with `*` specified for the `method` field will allow all methods
     * AND permissions for the service specified in `service_name`.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector method_selectors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethodSelectors()
    {
        return $this->method_selectors;
    }

    /**
     * API methods or permissions to allow. Method or permission must belong to
     * the service specified by `service_name` field. A single [MethodSelector]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector]
     * entry with `*` specified for the `method` field will allow all methods
     * AND permissions for the service specified in `service_name`.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector method_selectors = 2;</code>
     * @param array<\Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\MethodSelector>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethodSelectors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\MethodSelector::class);
        $this->method_selectors = $arr;

        return $this;
    }

}


