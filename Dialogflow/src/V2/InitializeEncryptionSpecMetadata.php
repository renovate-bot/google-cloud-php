<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/encryption_spec.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for initializing a location-level encryption specification.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.InitializeEncryptionSpecMetadata</code>
 */
class InitializeEncryptionSpecMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The original request for initialization.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InitializeEncryptionSpecRequest request = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $request = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\InitializeEncryptionSpecRequest $request
     *           Output only. The original request for initialization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EncryptionSpec::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The original request for initialization.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InitializeEncryptionSpecRequest request = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dialogflow\V2\InitializeEncryptionSpecRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * Output only. The original request for initialization.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InitializeEncryptionSpecRequest request = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dialogflow\V2\InitializeEncryptionSpecRequest $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\InitializeEncryptionSpecRequest::class);
        $this->request = $var;

        return $this;
    }

}

