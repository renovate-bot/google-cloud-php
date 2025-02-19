<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [BatchRecognize][google.cloud.speech.v2.Speech.BatchRecognize] that is
 * packaged into a longrunning [Operation][google.longrunning.Operation].
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.BatchRecognizeResponse</code>
 */
class BatchRecognizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Map from filename to the final result for that file.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.speech.v2.BatchRecognizeFileResult> results = 1;</code>
     */
    private $results;
    /**
     * When available, billed audio seconds for the corresponding request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_billed_duration = 2;</code>
     */
    protected $total_billed_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $results
     *           Map from filename to the final result for that file.
     *     @type \Google\Protobuf\Duration $total_billed_duration
     *           When available, billed audio seconds for the corresponding request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Map from filename to the final result for that file.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.speech.v2.BatchRecognizeFileResult> results = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Map from filename to the final result for that file.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.speech.v2.BatchRecognizeFileResult> results = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V2\BatchRecognizeFileResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * When available, billed audio seconds for the corresponding request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_billed_duration = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTotalBilledDuration()
    {
        return $this->total_billed_duration;
    }

    public function hasTotalBilledDuration()
    {
        return isset($this->total_billed_duration);
    }

    public function clearTotalBilledDuration()
    {
        unset($this->total_billed_duration);
    }

    /**
     * When available, billed audio seconds for the corresponding request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_billed_duration = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTotalBilledDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->total_billed_duration = $var;

        return $this;
    }

}

