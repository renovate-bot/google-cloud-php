<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `GetGroup` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.GetGroupRequest</code>
 */
class GetGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The group to retrieve. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The group to retrieve. The format is:
     *
     *                     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *                     Please see {@see GroupServiceClient::groupName()} for help formatting this field.
     *
     * @return \Google\Cloud\Monitoring\V3\GetGroupRequest
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
     *           Required. The group to retrieve. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The group to retrieve. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The group to retrieve. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

