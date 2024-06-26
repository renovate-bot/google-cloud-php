<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\Answer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query understanding information.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo</code>
 */
class QueryUnderstandingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Query classification information.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo query_classification_info = 1;</code>
     */
    private $query_classification_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo\QueryClassificationInfo>|\Google\Protobuf\Internal\RepeatedField $query_classification_info
     *           Query classification information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * Query classification information.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo query_classification_info = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryClassificationInfo()
    {
        return $this->query_classification_info;
    }

    /**
     * Query classification information.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo query_classification_info = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo\QueryClassificationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryClassificationInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo\QueryClassificationInfo::class);
        $this->query_classification_info = $arr;

        return $this;
    }

}


