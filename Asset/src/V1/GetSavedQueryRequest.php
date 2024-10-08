<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get a saved query.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.GetSavedQueryRequest</code>
 */
class GetSavedQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the saved query and it must be in the format of:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the saved query and it must be in the format of:
     *
     *                     * projects/project_number/savedQueries/saved_query_id
     *                     * folders/folder_number/savedQueries/saved_query_id
     *                     * organizations/organization_number/savedQueries/saved_query_id
     *                     Please see {@see AssetServiceClient::savedQueryName()} for help formatting this field.
     *
     * @return \Google\Cloud\Asset\V1\GetSavedQueryRequest
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
     *           Required. The name of the saved query and it must be in the format of:
     *           * projects/project_number/savedQueries/saved_query_id
     *           * folders/folder_number/savedQueries/saved_query_id
     *           * organizations/organization_number/savedQueries/saved_query_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the saved query and it must be in the format of:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the saved query and it must be in the format of:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
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

}

