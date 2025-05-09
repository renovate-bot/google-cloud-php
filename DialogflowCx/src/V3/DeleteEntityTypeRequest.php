<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [EntityTypes.DeleteEntityType][google.cloud.dialogflow.cx.v3.EntityTypes.DeleteEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.DeleteEntityTypeRequest</code>
 */
class DeleteEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the entity type to delete.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entityTypes/<EntityTypeID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * This field has no effect for entity type not being used.
     * For entity types that are used by intents or pages:
     * *  If `force` is set to false, an error will be returned with message
     *    indicating the referencing resources.
     * *  If `force` is set to true, Dialogflow will remove the entity type, as
     *    well as any references to the entity type (i.e. Page
     *    [parameter][google.cloud.dialogflow.cx.v3.Form.Parameter] of the entity
     *    type will be changed to
     *    '&#64;sys.any' and intent
     *    [parameter][google.cloud.dialogflow.cx.v3.Intent.Parameter] of the
     *    entity type will be removed).
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    protected $force = false;

    /**
     * @param string $name Required. The name of the entity type to delete.
     *                     Format:
     *                     `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entityTypes/<EntityTypeID>`. Please see
     *                     {@see EntityTypesClient::entityTypeName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\DeleteEntityTypeRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the entity type to delete.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entityTypes/<EntityTypeID>`.
     *     @type bool $force
     *           This field has no effect for entity type not being used.
     *           For entity types that are used by intents or pages:
     *           *  If `force` is set to false, an error will be returned with message
     *              indicating the referencing resources.
     *           *  If `force` is set to true, Dialogflow will remove the entity type, as
     *              well as any references to the entity type (i.e. Page
     *              [parameter][google.cloud.dialogflow.cx.v3.Form.Parameter] of the entity
     *              type will be changed to
     *              '&#64;sys.any' and intent
     *              [parameter][google.cloud.dialogflow.cx.v3.Intent.Parameter] of the
     *              entity type will be removed).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the entity type to delete.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entityTypes/<EntityTypeID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the entity type to delete.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entityTypes/<EntityTypeID>`.
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
     * This field has no effect for entity type not being used.
     * For entity types that are used by intents or pages:
     * *  If `force` is set to false, an error will be returned with message
     *    indicating the referencing resources.
     * *  If `force` is set to true, Dialogflow will remove the entity type, as
     *    well as any references to the entity type (i.e. Page
     *    [parameter][google.cloud.dialogflow.cx.v3.Form.Parameter] of the entity
     *    type will be changed to
     *    '&#64;sys.any' and intent
     *    [parameter][google.cloud.dialogflow.cx.v3.Intent.Parameter] of the
     *    entity type will be removed).
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * This field has no effect for entity type not being used.
     * For entity types that are used by intents or pages:
     * *  If `force` is set to false, an error will be returned with message
     *    indicating the referencing resources.
     * *  If `force` is set to true, Dialogflow will remove the entity type, as
     *    well as any references to the entity type (i.e. Page
     *    [parameter][google.cloud.dialogflow.cx.v3.Form.Parameter] of the entity
     *    type will be changed to
     *    '&#64;sys.any' and intent
     *    [parameter][google.cloud.dialogflow.cx.v3.Intent.Parameter] of the
     *    entity type will be removed).
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

