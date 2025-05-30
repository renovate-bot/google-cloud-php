<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A datatype containing media that is part of a multi-part `Content` message.
 * A `Part` consists of data which has an associated datatype. A `Part` can only
 * contain one of the accepted types in `Part.data`.
 * A `Part` must have a fixed IANA MIME type identifying the type and subtype
 * of the media if `inline_data` or `file_data` field is filled with raw bytes.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Part</code>
 */
class Part extends \Google\Protobuf\Internal\Message
{
    protected $data;
    protected $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Optional. Text part (can be code).
     *     @type \Google\Cloud\AIPlatform\V1\Blob $inline_data
     *           Optional. Inlined bytes data.
     *     @type \Google\Cloud\AIPlatform\V1\FileData $file_data
     *           Optional. URI based data.
     *     @type \Google\Cloud\AIPlatform\V1\FunctionCall $function_call
     *           Optional. A predicted [FunctionCall] returned from the model that
     *           contains a string representing the [FunctionDeclaration.name] with the
     *           parameters and their values.
     *     @type \Google\Cloud\AIPlatform\V1\FunctionResponse $function_response
     *           Optional. The result output of a [FunctionCall] that contains a string
     *           representing the [FunctionDeclaration.name] and a structured JSON object
     *           containing any output from the function call. It is used as context to
     *           the model.
     *     @type \Google\Cloud\AIPlatform\V1\ExecutableCode $executable_code
     *           Optional. Code generated by the model that is meant to be executed.
     *     @type \Google\Cloud\AIPlatform\V1\CodeExecutionResult $code_execution_result
     *           Optional. Result of executing the [ExecutableCode].
     *     @type bool $thought
     *           Indicates if the part is thought from the model.
     *     @type string $thought_signature
     *           An opaque signature for the thought so it can be reused in subsequent
     *           requests.
     *     @type \Google\Cloud\AIPlatform\V1\VideoMetadata $video_metadata
     *           Optional. Video metadata. The metadata should only be specified while the
     *           video data is presented in inline_data or file_data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Text part (can be code).
     *
     * Generated from protobuf field <code>string text = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getText()
    {
        return $this->readOneof(1);
    }

    public function hasText()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. Text part (can be code).
     *
     * Generated from protobuf field <code>string text = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. Inlined bytes data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Blob inline_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Blob|null
     */
    public function getInlineData()
    {
        return $this->readOneof(2);
    }

    public function hasInlineData()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. Inlined bytes data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Blob inline_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Blob $var
     * @return $this
     */
    public function setInlineData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Blob::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. URI based data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FileData file_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\FileData|null
     */
    public function getFileData()
    {
        return $this->readOneof(3);
    }

    public function hasFileData()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. URI based data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FileData file_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\FileData $var
     * @return $this
     */
    public function setFileData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FileData::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. A predicted [FunctionCall] returned from the model that
     * contains a string representing the [FunctionDeclaration.name] with the
     * parameters and their values.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FunctionCall function_call = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\FunctionCall|null
     */
    public function getFunctionCall()
    {
        return $this->readOneof(5);
    }

    public function hasFunctionCall()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. A predicted [FunctionCall] returned from the model that
     * contains a string representing the [FunctionDeclaration.name] with the
     * parameters and their values.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FunctionCall function_call = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\FunctionCall $var
     * @return $this
     */
    public function setFunctionCall($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FunctionCall::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. The result output of a [FunctionCall] that contains a string
     * representing the [FunctionDeclaration.name] and a structured JSON object
     * containing any output from the function call. It is used as context to
     * the model.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FunctionResponse function_response = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\FunctionResponse|null
     */
    public function getFunctionResponse()
    {
        return $this->readOneof(6);
    }

    public function hasFunctionResponse()
    {
        return $this->hasOneof(6);
    }

    /**
     * Optional. The result output of a [FunctionCall] that contains a string
     * representing the [FunctionDeclaration.name] and a structured JSON object
     * containing any output from the function call. It is used as context to
     * the model.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FunctionResponse function_response = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\FunctionResponse $var
     * @return $this
     */
    public function setFunctionResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FunctionResponse::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Optional. Code generated by the model that is meant to be executed.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExecutableCode executable_code = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\ExecutableCode|null
     */
    public function getExecutableCode()
    {
        return $this->readOneof(8);
    }

    public function hasExecutableCode()
    {
        return $this->hasOneof(8);
    }

    /**
     * Optional. Code generated by the model that is meant to be executed.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExecutableCode executable_code = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\ExecutableCode $var
     * @return $this
     */
    public function setExecutableCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExecutableCode::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Optional. Result of executing the [ExecutableCode].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CodeExecutionResult code_execution_result = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\CodeExecutionResult|null
     */
    public function getCodeExecutionResult()
    {
        return $this->readOneof(9);
    }

    public function hasCodeExecutionResult()
    {
        return $this->hasOneof(9);
    }

    /**
     * Optional. Result of executing the [ExecutableCode].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CodeExecutionResult code_execution_result = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\CodeExecutionResult $var
     * @return $this
     */
    public function setCodeExecutionResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CodeExecutionResult::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Indicates if the part is thought from the model.
     *
     * Generated from protobuf field <code>bool thought = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getThought()
    {
        return $this->readOneof(10);
    }

    public function hasThought()
    {
        return $this->hasOneof(10);
    }

    /**
     * Indicates if the part is thought from the model.
     *
     * Generated from protobuf field <code>bool thought = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setThought($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * An opaque signature for the thought so it can be reused in subsequent
     * requests.
     *
     * Generated from protobuf field <code>bytes thought_signature = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getThoughtSignature()
    {
        return $this->readOneof(11);
    }

    public function hasThoughtSignature()
    {
        return $this->hasOneof(11);
    }

    /**
     * An opaque signature for the thought so it can be reused in subsequent
     * requests.
     *
     * Generated from protobuf field <code>bytes thought_signature = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setThoughtSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Optional. Video metadata. The metadata should only be specified while the
     * video data is presented in inline_data or file_data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.VideoMetadata video_metadata = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\VideoMetadata|null
     */
    public function getVideoMetadata()
    {
        return $this->readOneof(4);
    }

    public function hasVideoMetadata()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Video metadata. The metadata should only be specified while the
     * video data is presented in inline_data or file_data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.VideoMetadata video_metadata = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\VideoMetadata $var
     * @return $this
     */
    public function setVideoMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\VideoMetadata::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->whichOneof("metadata");
    }

}

