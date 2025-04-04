<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [EntityTypes.ImportEntityTypes][google.cloud.dialogflow.cx.v3.EntityTypes.ImportEntityTypes].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest</code>
 */
class ImportEntityTypesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to import the entity types into.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Merge option for importing entity types.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest.MergeOption merge_option = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $merge_option = 0;
    /**
     * Optional. The target entity type to import into.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entity_types/<EntityTypeID>`.
     * If set, there should be only one entity type included in
     * [entity_types][google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest.entity_types],
     * of which the type should match the type of the target entity type. All
     * [entities][google.cloud.dialogflow.cx.v3.EntityType.entities] in the
     * imported entity type will be added to the target entity type.
     *
     * Generated from protobuf field <code>string target_entity_type = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $target_entity_type = '';
    protected $entity_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to import the entity types into.
     *           Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *     @type string $entity_types_uri
     *           The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI
     *           to import entity types from. The format of this URI must be
     *           `gs://<bucket-name>/<object-name>`.
     *           Dialogflow performs a read operation for the Cloud Storage object
     *           on the caller's behalf, so your request authentication must
     *           have read permissions for the object. For more information, see
     *           [Dialogflow access
     *           control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *     @type \Google\Cloud\Dialogflow\Cx\V3\InlineSource $entity_types_content
     *           Uncompressed byte content of entity types.
     *     @type int $merge_option
     *           Required. Merge option for importing entity types.
     *     @type string $target_entity_type
     *           Optional. The target entity type to import into.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entity_types/<EntityTypeID>`.
     *           If set, there should be only one entity type included in
     *           [entity_types][google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest.entity_types],
     *           of which the type should match the type of the target entity type. All
     *           [entities][google.cloud.dialogflow.cx.v3.EntityType.entities] in the
     *           imported entity type will be added to the target entity type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to import the entity types into.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to import the entity types into.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
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
     * The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI
     * to import entity types from. The format of this URI must be
     * `gs://<bucket-name>/<object-name>`.
     * Dialogflow performs a read operation for the Cloud Storage object
     * on the caller's behalf, so your request authentication must
     * have read permissions for the object. For more information, see
     * [Dialogflow access
     * control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *
     * Generated from protobuf field <code>string entity_types_uri = 2;</code>
     * @return string
     */
    public function getEntityTypesUri()
    {
        return $this->readOneof(2);
    }

    public function hasEntityTypesUri()
    {
        return $this->hasOneof(2);
    }

    /**
     * The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI
     * to import entity types from. The format of this URI must be
     * `gs://<bucket-name>/<object-name>`.
     * Dialogflow performs a read operation for the Cloud Storage object
     * on the caller's behalf, so your request authentication must
     * have read permissions for the object. For more information, see
     * [Dialogflow access
     * control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *
     * Generated from protobuf field <code>string entity_types_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityTypesUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Uncompressed byte content of entity types.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.InlineSource entity_types_content = 3;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\InlineSource|null
     */
    public function getEntityTypesContent()
    {
        return $this->readOneof(3);
    }

    public function hasEntityTypesContent()
    {
        return $this->hasOneof(3);
    }

    /**
     * Uncompressed byte content of entity types.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.InlineSource entity_types_content = 3;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\InlineSource $var
     * @return $this
     */
    public function setEntityTypesContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\InlineSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Required. Merge option for importing entity types.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest.MergeOption merge_option = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMergeOption()
    {
        return $this->merge_option;
    }

    /**
     * Required. Merge option for importing entity types.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest.MergeOption merge_option = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMergeOption($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\ImportEntityTypesRequest\MergeOption::class);
        $this->merge_option = $var;

        return $this;
    }

    /**
     * Optional. The target entity type to import into.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entity_types/<EntityTypeID>`.
     * If set, there should be only one entity type included in
     * [entity_types][google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest.entity_types],
     * of which the type should match the type of the target entity type. All
     * [entities][google.cloud.dialogflow.cx.v3.EntityType.entities] in the
     * imported entity type will be added to the target entity type.
     *
     * Generated from protobuf field <code>string target_entity_type = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetEntityType()
    {
        return $this->target_entity_type;
    }

    /**
     * Optional. The target entity type to import into.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/entity_types/<EntityTypeID>`.
     * If set, there should be only one entity type included in
     * [entity_types][google.cloud.dialogflow.cx.v3.ImportEntityTypesRequest.entity_types],
     * of which the type should match the type of the target entity type. All
     * [entities][google.cloud.dialogflow.cx.v3.EntityType.entities] in the
     * imported entity type will be added to the target entity type.
     *
     * Generated from protobuf field <code>string target_entity_type = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_entity_type = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntityTypes()
    {
        return $this->whichOneof("entity_types");
    }

}

