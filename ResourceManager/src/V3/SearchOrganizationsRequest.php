<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/organizations.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the `SearchOrganizations` method.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.SearchOrganizationsRequest</code>
 */
class SearchOrganizationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The maximum number of organizations to return in the response.
     * The server can return fewer organizations than requested. If unspecified,
     * server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A pagination token returned from a previous call to
     * `SearchOrganizations` that indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. An optional query string used to filter the Organizations to
     * return in the response. Query rules are case-insensitive.
     * ```
     * | Field            | Description                                |
     * |------------------|--------------------------------------------|
     * | directoryCustomerId, owner.directoryCustomerId | Filters by directory
     * customer id. |
     * | domain           | Filters by domain.                         |
     * ```
     * Organizations may be queried by `directoryCustomerId` or by
     * `domain`, where the domain is a G Suite domain, for example:
     * * Query `directorycustomerid:123456789` returns Organization
     * resources with `owner.directory_customer_id` equal to `123456789`.
     * * Query `domain:google.com` returns Organization resources corresponding
     * to the domain `google.com`.
     *
     * Generated from protobuf field <code>string query = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $query = '';

    /**
     * @param string $query Optional. An optional query string used to filter the Organizations to
     *                      return in the response. Query rules are case-insensitive.
     *
     *
     *                      ```
     *                      | Field            | Description                                |
     *                      |------------------|--------------------------------------------|
     *                      | directoryCustomerId, owner.directoryCustomerId | Filters by directory
     *                      customer id. |
     *                      | domain           | Filters by domain.                         |
     *                      ```
     *
     *                      Organizations may be queried by `directoryCustomerId` or by
     *                      `domain`, where the domain is a G Suite domain, for example:
     *
     *                      * Query `directorycustomerid:123456789` returns Organization
     *                      resources with `owner.directory_customer_id` equal to `123456789`.
     *                      * Query `domain:google.com` returns Organization resources corresponding
     *                      to the domain `google.com`.
     *
     * @return \Google\Cloud\ResourceManager\V3\SearchOrganizationsRequest
     *
     * @experimental
     */
    public static function build(string $query): self
    {
        return (new self())
            ->setQuery($query);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_size
     *           Optional. The maximum number of organizations to return in the response.
     *           The server can return fewer organizations than requested. If unspecified,
     *           server picks an appropriate default.
     *     @type string $page_token
     *           Optional. A pagination token returned from a previous call to
     *           `SearchOrganizations` that indicates from where listing should continue.
     *     @type string $query
     *           Optional. An optional query string used to filter the Organizations to
     *           return in the response. Query rules are case-insensitive.
     *           ```
     *           | Field            | Description                                |
     *           |------------------|--------------------------------------------|
     *           | directoryCustomerId, owner.directoryCustomerId | Filters by directory
     *           customer id. |
     *           | domain           | Filters by domain.                         |
     *           ```
     *           Organizations may be queried by `directoryCustomerId` or by
     *           `domain`, where the domain is a G Suite domain, for example:
     *           * Query `directorycustomerid:123456789` returns Organization
     *           resources with `owner.directory_customer_id` equal to `123456789`.
     *           * Query `domain:google.com` returns Organization resources corresponding
     *           to the domain `google.com`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Organizations::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The maximum number of organizations to return in the response.
     * The server can return fewer organizations than requested. If unspecified,
     * server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of organizations to return in the response.
     * The server can return fewer organizations than requested. If unspecified,
     * server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A pagination token returned from a previous call to
     * `SearchOrganizations` that indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A pagination token returned from a previous call to
     * `SearchOrganizations` that indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. An optional query string used to filter the Organizations to
     * return in the response. Query rules are case-insensitive.
     * ```
     * | Field            | Description                                |
     * |------------------|--------------------------------------------|
     * | directoryCustomerId, owner.directoryCustomerId | Filters by directory
     * customer id. |
     * | domain           | Filters by domain.                         |
     * ```
     * Organizations may be queried by `directoryCustomerId` or by
     * `domain`, where the domain is a G Suite domain, for example:
     * * Query `directorycustomerid:123456789` returns Organization
     * resources with `owner.directory_customer_id` equal to `123456789`.
     * * Query `domain:google.com` returns Organization resources corresponding
     * to the domain `google.com`.
     *
     * Generated from protobuf field <code>string query = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Optional. An optional query string used to filter the Organizations to
     * return in the response. Query rules are case-insensitive.
     * ```
     * | Field            | Description                                |
     * |------------------|--------------------------------------------|
     * | directoryCustomerId, owner.directoryCustomerId | Filters by directory
     * customer id. |
     * | domain           | Filters by domain.                         |
     * ```
     * Organizations may be queried by `directoryCustomerId` or by
     * `domain`, where the domain is a G Suite domain, for example:
     * * Query `directorycustomerid:123456789` returns Organization
     * resources with `owner.directory_customer_id` equal to `123456789`.
     * * Query `domain:google.com` returns Organization resources corresponding
     * to the domain `google.com`.
     *
     * Generated from protobuf field <code>string query = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

}

