<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/flow.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Flows.ImportFlow][google.cloud.dialogflow.cx.v3.Flows.ImportFlow].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ImportFlowRequest</code>
 */
class ImportFlowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to import the flow into.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Flow import mode. If not specified, `KEEP` is assumed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ImportFlowRequest.ImportOption import_option = 4;</code>
     */
    protected $import_option = 0;
    /**
     * Optional. Specifies the import strategy used when resolving resource
     * conflicts.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.FlowImportStrategy flow_import_strategy = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $flow_import_strategy = null;
    protected $flow;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to import the flow into.
     *           Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *     @type string $flow_uri
     *           The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI
     *           to import flow from. The format of this URI must be
     *           `gs://<bucket-name>/<object-name>`.
     *           Dialogflow performs a read operation for the Cloud Storage object
     *           on the caller's behalf, so your request authentication must
     *           have read permissions for the object. For more information, see
     *           [Dialogflow access
     *           control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *     @type string $flow_content
     *           Uncompressed raw byte content for flow.
     *     @type int $import_option
     *           Flow import mode. If not specified, `KEEP` is assumed.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\FlowImportStrategy $flow_import_strategy
     *           Optional. Specifies the import strategy used when resolving resource
     *           conflicts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Flow::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to import the flow into.
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
     * Required. The agent to import the flow into.
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
     * to import flow from. The format of this URI must be
     * `gs://<bucket-name>/<object-name>`.
     * Dialogflow performs a read operation for the Cloud Storage object
     * on the caller's behalf, so your request authentication must
     * have read permissions for the object. For more information, see
     * [Dialogflow access
     * control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *
     * Generated from protobuf field <code>string flow_uri = 2;</code>
     * @return string
     */
    public function getFlowUri()
    {
        return $this->readOneof(2);
    }

    public function hasFlowUri()
    {
        return $this->hasOneof(2);
    }

    /**
     * The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI
     * to import flow from. The format of this URI must be
     * `gs://<bucket-name>/<object-name>`.
     * Dialogflow performs a read operation for the Cloud Storage object
     * on the caller's behalf, so your request authentication must
     * have read permissions for the object. For more information, see
     * [Dialogflow access
     * control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *
     * Generated from protobuf field <code>string flow_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFlowUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Uncompressed raw byte content for flow.
     *
     * Generated from protobuf field <code>bytes flow_content = 3;</code>
     * @return string
     */
    public function getFlowContent()
    {
        return $this->readOneof(3);
    }

    public function hasFlowContent()
    {
        return $this->hasOneof(3);
    }

    /**
     * Uncompressed raw byte content for flow.
     *
     * Generated from protobuf field <code>bytes flow_content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFlowContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Flow import mode. If not specified, `KEEP` is assumed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ImportFlowRequest.ImportOption import_option = 4;</code>
     * @return int
     */
    public function getImportOption()
    {
        return $this->import_option;
    }

    /**
     * Flow import mode. If not specified, `KEEP` is assumed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ImportFlowRequest.ImportOption import_option = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setImportOption($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\ImportFlowRequest\ImportOption::class);
        $this->import_option = $var;

        return $this;
    }

    /**
     * Optional. Specifies the import strategy used when resolving resource
     * conflicts.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.FlowImportStrategy flow_import_strategy = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\FlowImportStrategy|null
     */
    public function getFlowImportStrategy()
    {
        return $this->flow_import_strategy;
    }

    public function hasFlowImportStrategy()
    {
        return isset($this->flow_import_strategy);
    }

    public function clearFlowImportStrategy()
    {
        unset($this->flow_import_strategy);
    }

    /**
     * Optional. Specifies the import strategy used when resolving resource
     * conflicts.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.FlowImportStrategy flow_import_strategy = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\FlowImportStrategy $var
     * @return $this
     */
    public function setFlowImportStrategy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\FlowImportStrategy::class);
        $this->flow_import_strategy = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFlow()
    {
        return $this->whichOneof("flow");
    }

}

