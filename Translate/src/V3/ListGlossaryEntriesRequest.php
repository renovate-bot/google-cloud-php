<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListGlossaryEntries
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ListGlossaryEntriesRequest</code>
 */
class ListGlossaryEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent glossary resource name for listing the glossary's
     * entries.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Requested page size. The server may return fewer glossary entries
     * than requested. If unspecified, the server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListGlossaryEntriesResponse.next_page_token] returned from the previous
     * call. The first page is returned if `page_token`is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent glossary resource name for listing the glossary's
     *                       entries. Please see
     *                       {@see TranslationServiceClient::glossaryName()} for help formatting this field.
     *
     * @return \Google\Cloud\Translate\V3\ListGlossaryEntriesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent glossary resource name for listing the glossary's
     *           entries.
     *     @type int $page_size
     *           Optional. Requested page size. The server may return fewer glossary entries
     *           than requested. If unspecified, the server picks an appropriate default.
     *     @type string $page_token
     *           Optional. A token identifying a page of results the server should return.
     *           Typically, this is the value of
     *           [ListGlossaryEntriesResponse.next_page_token] returned from the previous
     *           call. The first page is returned if `page_token`is empty or missing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent glossary resource name for listing the glossary's
     * entries.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent glossary resource name for listing the glossary's
     * entries.
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
     * Optional. Requested page size. The server may return fewer glossary entries
     * than requested. If unspecified, the server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. The server may return fewer glossary entries
     * than requested. If unspecified, the server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListGlossaryEntriesResponse.next_page_token] returned from the previous
     * call. The first page is returned if `page_token`is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListGlossaryEntriesResponse.next_page_token] returned from the previous
     * call. The first page is returned if `page_token`is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

