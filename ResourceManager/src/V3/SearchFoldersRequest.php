<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/folders.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for searching folders.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.SearchFoldersRequest</code>
 */
class SearchFoldersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The maximum number of folders to return in the response. The
     * server can return fewer folders than requested. If unspecified, server
     * picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A pagination token returned from a previous call to
     * `SearchFolders` that indicates from where search should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Search criteria used to select the folders to return.
     * If no search criteria is specified then all accessible folders will be
     * returned.
     * Query expressions can be used to restrict results based upon displayName,
     * state and parent, where the operators `=` (`:`) `NOT`, `AND` and `OR`
     * can be used along with the suffix wildcard symbol `*`.
     * The `displayName` field in a query expression should use escaped quotes
     * for values that include whitespace to prevent unexpected behavior.
     * ```
     * | Field                   | Description                            |
     * |-------------------------|----------------------------------------|
     * | displayName             | Filters by displayName.                |
     * | parent                  | Filters by parent (for example: folders/123). |
     * | state, lifecycleState   | Filters by state.                      |
     * ```
     * Some example queries are:
     * * Query `displayName=Test*` returns Folder resources whose display name
     * starts with "Test".
     * * Query `state=ACTIVE` returns Folder resources with
     * `state` set to `ACTIVE`.
     * * Query `parent=folders/123` returns Folder resources that have
     * `folders/123` as a parent resource.
     * * Query `parent=folders/123 AND state=ACTIVE` returns active
     * Folder resources that have `folders/123` as a parent resource.
     * * Query `displayName=\\"Test String\\"` returns Folder resources with
     * display names that include both "Test" and "String".
     *
     * Generated from protobuf field <code>string query = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $query = '';

    /**
     * @param string $query Optional. Search criteria used to select the folders to return.
     *                      If no search criteria is specified then all accessible folders will be
     *                      returned.
     *
     *                      Query expressions can be used to restrict results based upon displayName,
     *                      state and parent, where the operators `=` (`:`) `NOT`, `AND` and `OR`
     *                      can be used along with the suffix wildcard symbol `*`.
     *
     *                      The `displayName` field in a query expression should use escaped quotes
     *                      for values that include whitespace to prevent unexpected behavior.
     *
     *                      ```
     *                      | Field                   | Description                            |
     *                      |-------------------------|----------------------------------------|
     *                      | displayName             | Filters by displayName.                |
     *                      | parent                  | Filters by parent (for example: folders/123). |
     *                      | state, lifecycleState   | Filters by state.                      |
     *                      ```
     *
     *                      Some example queries are:
     *
     *                      * Query `displayName=Test*` returns Folder resources whose display name
     *                      starts with "Test".
     *                      * Query `state=ACTIVE` returns Folder resources with
     *                      `state` set to `ACTIVE`.
     *                      * Query `parent=folders/123` returns Folder resources that have
     *                      `folders/123` as a parent resource.
     *                      * Query `parent=folders/123 AND state=ACTIVE` returns active
     *                      Folder resources that have `folders/123` as a parent resource.
     *                      * Query `displayName=\\"Test String\\"` returns Folder resources with
     *                      display names that include both "Test" and "String".
     *
     * @return \Google\Cloud\ResourceManager\V3\SearchFoldersRequest
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
     *           Optional. The maximum number of folders to return in the response. The
     *           server can return fewer folders than requested. If unspecified, server
     *           picks an appropriate default.
     *     @type string $page_token
     *           Optional. A pagination token returned from a previous call to
     *           `SearchFolders` that indicates from where search should continue.
     *     @type string $query
     *           Optional. Search criteria used to select the folders to return.
     *           If no search criteria is specified then all accessible folders will be
     *           returned.
     *           Query expressions can be used to restrict results based upon displayName,
     *           state and parent, where the operators `=` (`:`) `NOT`, `AND` and `OR`
     *           can be used along with the suffix wildcard symbol `*`.
     *           The `displayName` field in a query expression should use escaped quotes
     *           for values that include whitespace to prevent unexpected behavior.
     *           ```
     *           | Field                   | Description                            |
     *           |-------------------------|----------------------------------------|
     *           | displayName             | Filters by displayName.                |
     *           | parent                  | Filters by parent (for example: folders/123). |
     *           | state, lifecycleState   | Filters by state.                      |
     *           ```
     *           Some example queries are:
     *           * Query `displayName=Test*` returns Folder resources whose display name
     *           starts with "Test".
     *           * Query `state=ACTIVE` returns Folder resources with
     *           `state` set to `ACTIVE`.
     *           * Query `parent=folders/123` returns Folder resources that have
     *           `folders/123` as a parent resource.
     *           * Query `parent=folders/123 AND state=ACTIVE` returns active
     *           Folder resources that have `folders/123` as a parent resource.
     *           * Query `displayName=\\"Test String\\"` returns Folder resources with
     *           display names that include both "Test" and "String".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Folders::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The maximum number of folders to return in the response. The
     * server can return fewer folders than requested. If unspecified, server
     * picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of folders to return in the response. The
     * server can return fewer folders than requested. If unspecified, server
     * picks an appropriate default.
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
     * `SearchFolders` that indicates from where search should continue.
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
     * `SearchFolders` that indicates from where search should continue.
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
     * Optional. Search criteria used to select the folders to return.
     * If no search criteria is specified then all accessible folders will be
     * returned.
     * Query expressions can be used to restrict results based upon displayName,
     * state and parent, where the operators `=` (`:`) `NOT`, `AND` and `OR`
     * can be used along with the suffix wildcard symbol `*`.
     * The `displayName` field in a query expression should use escaped quotes
     * for values that include whitespace to prevent unexpected behavior.
     * ```
     * | Field                   | Description                            |
     * |-------------------------|----------------------------------------|
     * | displayName             | Filters by displayName.                |
     * | parent                  | Filters by parent (for example: folders/123). |
     * | state, lifecycleState   | Filters by state.                      |
     * ```
     * Some example queries are:
     * * Query `displayName=Test*` returns Folder resources whose display name
     * starts with "Test".
     * * Query `state=ACTIVE` returns Folder resources with
     * `state` set to `ACTIVE`.
     * * Query `parent=folders/123` returns Folder resources that have
     * `folders/123` as a parent resource.
     * * Query `parent=folders/123 AND state=ACTIVE` returns active
     * Folder resources that have `folders/123` as a parent resource.
     * * Query `displayName=\\"Test String\\"` returns Folder resources with
     * display names that include both "Test" and "String".
     *
     * Generated from protobuf field <code>string query = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Optional. Search criteria used to select the folders to return.
     * If no search criteria is specified then all accessible folders will be
     * returned.
     * Query expressions can be used to restrict results based upon displayName,
     * state and parent, where the operators `=` (`:`) `NOT`, `AND` and `OR`
     * can be used along with the suffix wildcard symbol `*`.
     * The `displayName` field in a query expression should use escaped quotes
     * for values that include whitespace to prevent unexpected behavior.
     * ```
     * | Field                   | Description                            |
     * |-------------------------|----------------------------------------|
     * | displayName             | Filters by displayName.                |
     * | parent                  | Filters by parent (for example: folders/123). |
     * | state, lifecycleState   | Filters by state.                      |
     * ```
     * Some example queries are:
     * * Query `displayName=Test*` returns Folder resources whose display name
     * starts with "Test".
     * * Query `state=ACTIVE` returns Folder resources with
     * `state` set to `ACTIVE`.
     * * Query `parent=folders/123` returns Folder resources that have
     * `folders/123` as a parent resource.
     * * Query `parent=folders/123 AND state=ACTIVE` returns active
     * Folder resources that have `folders/123` as a parent resource.
     * * Query `displayName=\\"Test String\\"` returns Folder resources with
     * display names that include both "Test" and "String".
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

