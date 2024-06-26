<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [PipelineService.BatchCancelPipelineJobs][google.cloud.aiplatform.v1.PipelineService.BatchCancelPipelineJobs].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchCancelPipelineJobsRequest</code>
 */
class BatchCancelPipelineJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the PipelineJobs' parent resource.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The names of the PipelineJobs to cancel.
     * A maximum of 32 PipelineJobs can be cancelled in a batch.
     * Format:
     * `projects/{project}/locations/{location}/pipelineJobs/{pipelineJob}`
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $names;

    /**
     * @param string   $parent Required. The name of the PipelineJobs' parent resource.
     *                         Format: `projects/{project}/locations/{location}`
     *                         Please see {@see PipelineServiceClient::locationName()} for help formatting this field.
     * @param string[] $names  Required. The names of the PipelineJobs to cancel.
     *                         A maximum of 32 PipelineJobs can be cancelled in a batch.
     *                         Format:
     *                         `projects/{project}/locations/{location}/pipelineJobs/{pipelineJob}`
     *                         Please see {@see PipelineServiceClient::pipelineJobName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\BatchCancelPipelineJobsRequest
     *
     * @experimental
     */
    public static function build(string $parent, array $names): self
    {
        return (new self())
            ->setParent($parent)
            ->setNames($names);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the PipelineJobs' parent resource.
     *           Format: `projects/{project}/locations/{location}`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $names
     *           Required. The names of the PipelineJobs to cancel.
     *           A maximum of 32 PipelineJobs can be cancelled in a batch.
     *           Format:
     *           `projects/{project}/locations/{location}/pipelineJobs/{pipelineJob}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the PipelineJobs' parent resource.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the PipelineJobs' parent resource.
     * Format: `projects/{project}/locations/{location}`
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
     * Required. The names of the PipelineJobs to cancel.
     * A maximum of 32 PipelineJobs can be cancelled in a batch.
     * Format:
     * `projects/{project}/locations/{location}/pipelineJobs/{pipelineJob}`
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Required. The names of the PipelineJobs to cancel.
     * A maximum of 32 PipelineJobs can be cancelled in a batch.
     * Format:
     * `projects/{project}/locations/{location}/pipelineJobs/{pipelineJob}`
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

}

