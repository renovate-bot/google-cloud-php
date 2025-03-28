<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create AspectType Request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CreateAspectTypeRequest</code>
 */
class CreateAspectTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the AspectType, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a Google Cloud region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. AspectType identifier.
     *
     * Generated from protobuf field <code>string aspect_type_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aspect_type_id = '';
    /**
     * Required. AspectType Resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType aspect_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aspect_type = null;
    /**
     * Optional. The service validates the request without performing any
     * mutations. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                               $parent       Required. The resource name of the AspectType, of the form:
     *                                                           projects/{project_number}/locations/{location_id}
     *                                                           where `location_id` refers to a Google Cloud region. Please see
     *                                                           {@see CatalogServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dataplex\V1\AspectType $aspectType   Required. AspectType Resource.
     * @param string                               $aspectTypeId Required. AspectType identifier.
     *
     * @return \Google\Cloud\Dataplex\V1\CreateAspectTypeRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataplex\V1\AspectType $aspectType, string $aspectTypeId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAspectType($aspectType)
            ->setAspectTypeId($aspectTypeId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the AspectType, of the form:
     *           projects/{project_number}/locations/{location_id}
     *           where `location_id` refers to a Google Cloud region.
     *     @type string $aspect_type_id
     *           Required. AspectType identifier.
     *     @type \Google\Cloud\Dataplex\V1\AspectType $aspect_type
     *           Required. AspectType Resource.
     *     @type bool $validate_only
     *           Optional. The service validates the request without performing any
     *           mutations. The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the AspectType, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a Google Cloud region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the AspectType, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a Google Cloud region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. AspectType identifier.
     *
     * Generated from protobuf field <code>string aspect_type_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAspectTypeId()
    {
        return $this->aspect_type_id;
    }

    /**
     * Required. AspectType identifier.
     *
     * Generated from protobuf field <code>string aspect_type_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAspectTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->aspect_type_id = $var;

        return $this;
    }

    /**
     * Required. AspectType Resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType aspect_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\AspectType|null
     */
    public function getAspectType()
    {
        return $this->aspect_type;
    }

    public function hasAspectType()
    {
        return isset($this->aspect_type);
    }

    public function clearAspectType()
    {
        unset($this->aspect_type);
    }

    /**
     * Required. AspectType Resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType aspect_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\AspectType $var
     * @return $this
     */
    public function setAspectType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\AspectType::class);
        $this->aspect_type = $var;

        return $this;
    }

    /**
     * Optional. The service validates the request without performing any
     * mutations. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. The service validates the request without performing any
     * mutations. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

