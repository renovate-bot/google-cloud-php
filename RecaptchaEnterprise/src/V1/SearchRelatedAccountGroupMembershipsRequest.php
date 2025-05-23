<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message to search related account group memberships.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.SearchRelatedAccountGroupMembershipsRequest</code>
 */
class SearchRelatedAccountGroupMembershipsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project to search related account group
     * memberships from. Specify the project name in the following format:
     * `projects/{project}`.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $project = '';
    /**
     * Optional. The unique stable account identifier used to search connections.
     * The identifier should correspond to an `account_id` provided in a previous
     * `CreateAssessment` or `AnnotateAssessment` call. Either hashed_account_id
     * or account_id must be set, but not both.
     *
     * Generated from protobuf field <code>string account_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $account_id = '';
    /**
     * Optional. Deprecated: use `account_id` instead.
     * The unique stable hashed account identifier used to search connections. The
     * identifier should correspond to a `hashed_account_id` provided in a
     * previous `CreateAssessment` or `AnnotateAssessment` call. Either
     * hashed_account_id or account_id must be set, but not both.
     *
     * Generated from protobuf field <code>bytes hashed_account_id = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $hashed_account_id = '';
    /**
     * Optional. The maximum number of groups to return. The service might return
     * fewer than this value. If unspecified, at most 50 groups are returned. The
     * maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous
     * `SearchRelatedAccountGroupMemberships` call. Provide this to retrieve the
     * subsequent page.
     * When paginating, all other parameters provided to
     * `SearchRelatedAccountGroupMemberships` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $project         Required. The name of the project to search related account group
     *                                memberships from. Specify the project name in the following format:
     *                                `projects/{project}`. Please see
     *                                {@see RecaptchaEnterpriseServiceClient::projectName()} for help formatting this field.
     * @param string $hashedAccountId Optional. Deprecated: use `account_id` instead.
     *                                The unique stable hashed account identifier used to search connections. The
     *                                identifier should correspond to a `hashed_account_id` provided in a
     *                                previous `CreateAssessment` or `AnnotateAssessment` call. Either
     *                                hashed_account_id or account_id must be set, but not both.
     *
     * @return \Google\Cloud\RecaptchaEnterprise\V1\SearchRelatedAccountGroupMembershipsRequest
     *
     * @experimental
     */
    public static function build(string $project, string $hashedAccountId): self
    {
        return (new self())
            ->setProject($project)
            ->setHashedAccountId($hashedAccountId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Required. The name of the project to search related account group
     *           memberships from. Specify the project name in the following format:
     *           `projects/{project}`.
     *     @type string $account_id
     *           Optional. The unique stable account identifier used to search connections.
     *           The identifier should correspond to an `account_id` provided in a previous
     *           `CreateAssessment` or `AnnotateAssessment` call. Either hashed_account_id
     *           or account_id must be set, but not both.
     *     @type string $hashed_account_id
     *           Optional. Deprecated: use `account_id` instead.
     *           The unique stable hashed account identifier used to search connections. The
     *           identifier should correspond to a `hashed_account_id` provided in a
     *           previous `CreateAssessment` or `AnnotateAssessment` call. Either
     *           hashed_account_id or account_id must be set, but not both.
     *     @type int $page_size
     *           Optional. The maximum number of groups to return. The service might return
     *           fewer than this value. If unspecified, at most 50 groups are returned. The
     *           maximum value is 1000; values above 1000 are coerced to 1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous
     *           `SearchRelatedAccountGroupMemberships` call. Provide this to retrieve the
     *           subsequent page.
     *           When paginating, all other parameters provided to
     *           `SearchRelatedAccountGroupMemberships` must match the call that provided
     *           the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project to search related account group
     * memberships from. Specify the project name in the following format:
     * `projects/{project}`.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Required. The name of the project to search related account group
     * memberships from. Specify the project name in the following format:
     * `projects/{project}`.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Optional. The unique stable account identifier used to search connections.
     * The identifier should correspond to an `account_id` provided in a previous
     * `CreateAssessment` or `AnnotateAssessment` call. Either hashed_account_id
     * or account_id must be set, but not both.
     *
     * Generated from protobuf field <code>string account_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Optional. The unique stable account identifier used to search connections.
     * The identifier should correspond to an `account_id` provided in a previous
     * `CreateAssessment` or `AnnotateAssessment` call. Either hashed_account_id
     * or account_id must be set, but not both.
     *
     * Generated from protobuf field <code>string account_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     * Optional. Deprecated: use `account_id` instead.
     * The unique stable hashed account identifier used to search connections. The
     * identifier should correspond to a `hashed_account_id` provided in a
     * previous `CreateAssessment` or `AnnotateAssessment` call. Either
     * hashed_account_id or account_id must be set, but not both.
     *
     * Generated from protobuf field <code>bytes hashed_account_id = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     * @deprecated
     */
    public function getHashedAccountId()
    {
        if ($this->hashed_account_id !== '') {
            @trigger_error('hashed_account_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->hashed_account_id;
    }

    /**
     * Optional. Deprecated: use `account_id` instead.
     * The unique stable hashed account identifier used to search connections. The
     * identifier should correspond to a `hashed_account_id` provided in a
     * previous `CreateAssessment` or `AnnotateAssessment` call. Either
     * hashed_account_id or account_id must be set, but not both.
     *
     * Generated from protobuf field <code>bytes hashed_account_id = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setHashedAccountId($var)
    {
        @trigger_error('hashed_account_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, False);
        $this->hashed_account_id = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of groups to return. The service might return
     * fewer than this value. If unspecified, at most 50 groups are returned. The
     * maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of groups to return. The service might return
     * fewer than this value. If unspecified, at most 50 groups are returned. The
     * maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A page token, received from a previous
     * `SearchRelatedAccountGroupMemberships` call. Provide this to retrieve the
     * subsequent page.
     * When paginating, all other parameters provided to
     * `SearchRelatedAccountGroupMemberships` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous
     * `SearchRelatedAccountGroupMemberships` call. Provide this to retrieve the
     * subsequent page.
     * When paginating, all other parameters provided to
     * `SearchRelatedAccountGroupMemberships` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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

