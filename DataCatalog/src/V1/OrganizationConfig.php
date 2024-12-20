<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration related to the migration from Data Catalog to Dataplex that
 * has been applied to an organization and any projects under it. It is the
 * response message for
 * [RetrieveConfig][google.cloud.datacatalog.v1.DataCatalog.RetrieveConfig].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.OrganizationConfig</code>
 */
class OrganizationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Map of organizations and project resource names and their configuration.
     * The format for the map keys is `organizations/{organizationId}` or
     * `projects/{projectId}`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.MigrationConfig> config = 1;</code>
     */
    private $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $config
     *           Map of organizations and project resource names and their configuration.
     *           The format for the map keys is `organizations/{organizationId}` or
     *           `projects/{projectId}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Map of organizations and project resource names and their configuration.
     * The format for the map keys is `organizations/{organizationId}` or
     * `projects/{projectId}`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.MigrationConfig> config = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Map of organizations and project resource names and their configuration.
     * The format for the map keys is `organizations/{organizationId}` or
     * `projects/{projectId}`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.MigrationConfig> config = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setConfig($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\MigrationConfig::class);
        $this->config = $arr;

        return $this;
    }

}

