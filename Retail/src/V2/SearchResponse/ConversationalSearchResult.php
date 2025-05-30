<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This field specifies all related information that is needed on client
 * side for UI rendering of conversational retail search.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SearchResponse.ConversationalSearchResult</code>
 */
class ConversationalSearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Conversation UUID. This field will be stored in client side storage to
     * maintain the conversation session with server and will be used for next
     * search request's
     * [SearchRequest.ConversationalSearchSpec.conversation_id][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.conversation_id]
     * to restore conversation state in server.
     *
     * Generated from protobuf field <code>string conversation_id = 1;</code>
     */
    protected $conversation_id = '';
    /**
     * The current refined query for the conversational search. This field
     * will be used in customer UI that the query in the search bar should be
     * replaced with the refined query. For example, if
     * [SearchRequest.query][google.cloud.retail.v2.SearchRequest.query] is
     * `dress` and next
     * [SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer]
     * is `red color`, which does not match any product attribute value filters,
     * the refined query will be `dress, red color`.
     *
     * Generated from protobuf field <code>string refined_query = 2;</code>
     */
    protected $refined_query = '';
    /**
     * This field is deprecated but will be kept for backward compatibility.
     * There is expected to have only one additional filter and the value will
     * be the same to the same as field `additional_filter`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.AdditionalFilter additional_filters = 3 [deprecated = true];</code>
     * @deprecated
     */
    private $additional_filters;
    /**
     * The follow-up question. e.g., `What is the color?`
     *
     * Generated from protobuf field <code>string followup_question = 4;</code>
     */
    protected $followup_question = '';
    /**
     * The answer options provided to client for the follow-up question.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.SuggestedAnswer suggested_answers = 5;</code>
     */
    private $suggested_answers;
    /**
     * This is the incremental additional filters implied from the current
     * user answer. User should add the suggested addition filters to the
     * previous
     * [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],  and
     * use the merged filter in the follow up search request.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.AdditionalFilter additional_filter = 6;</code>
     */
    protected $additional_filter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conversation_id
     *           Conversation UUID. This field will be stored in client side storage to
     *           maintain the conversation session with server and will be used for next
     *           search request's
     *           [SearchRequest.ConversationalSearchSpec.conversation_id][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.conversation_id]
     *           to restore conversation state in server.
     *     @type string $refined_query
     *           The current refined query for the conversational search. This field
     *           will be used in customer UI that the query in the search bar should be
     *           replaced with the refined query. For example, if
     *           [SearchRequest.query][google.cloud.retail.v2.SearchRequest.query] is
     *           `dress` and next
     *           [SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer]
     *           is `red color`, which does not match any product attribute value filters,
     *           the refined query will be `dress, red color`.
     *     @type array<\Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\AdditionalFilter>|\Google\Protobuf\Internal\RepeatedField $additional_filters
     *           This field is deprecated but will be kept for backward compatibility.
     *           There is expected to have only one additional filter and the value will
     *           be the same to the same as field `additional_filter`.
     *     @type string $followup_question
     *           The follow-up question. e.g., `What is the color?`
     *     @type array<\Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\SuggestedAnswer>|\Google\Protobuf\Internal\RepeatedField $suggested_answers
     *           The answer options provided to client for the follow-up question.
     *     @type \Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\AdditionalFilter $additional_filter
     *           This is the incremental additional filters implied from the current
     *           user answer. User should add the suggested addition filters to the
     *           previous
     *           [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],  and
     *           use the merged filter in the follow up search request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Conversation UUID. This field will be stored in client side storage to
     * maintain the conversation session with server and will be used for next
     * search request's
     * [SearchRequest.ConversationalSearchSpec.conversation_id][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.conversation_id]
     * to restore conversation state in server.
     *
     * Generated from protobuf field <code>string conversation_id = 1;</code>
     * @return string
     */
    public function getConversationId()
    {
        return $this->conversation_id;
    }

    /**
     * Conversation UUID. This field will be stored in client side storage to
     * maintain the conversation session with server and will be used for next
     * search request's
     * [SearchRequest.ConversationalSearchSpec.conversation_id][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.conversation_id]
     * to restore conversation state in server.
     *
     * Generated from protobuf field <code>string conversation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_id = $var;

        return $this;
    }

    /**
     * The current refined query for the conversational search. This field
     * will be used in customer UI that the query in the search bar should be
     * replaced with the refined query. For example, if
     * [SearchRequest.query][google.cloud.retail.v2.SearchRequest.query] is
     * `dress` and next
     * [SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer]
     * is `red color`, which does not match any product attribute value filters,
     * the refined query will be `dress, red color`.
     *
     * Generated from protobuf field <code>string refined_query = 2;</code>
     * @return string
     */
    public function getRefinedQuery()
    {
        return $this->refined_query;
    }

    /**
     * The current refined query for the conversational search. This field
     * will be used in customer UI that the query in the search bar should be
     * replaced with the refined query. For example, if
     * [SearchRequest.query][google.cloud.retail.v2.SearchRequest.query] is
     * `dress` and next
     * [SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer][google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.UserAnswer.text_answer]
     * is `red color`, which does not match any product attribute value filters,
     * the refined query will be `dress, red color`.
     *
     * Generated from protobuf field <code>string refined_query = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRefinedQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->refined_query = $var;

        return $this;
    }

    /**
     * This field is deprecated but will be kept for backward compatibility.
     * There is expected to have only one additional filter and the value will
     * be the same to the same as field `additional_filter`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.AdditionalFilter additional_filters = 3 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getAdditionalFilters()
    {
        if ($this->additional_filters->count() !== 0) {
            @trigger_error('additional_filters is deprecated.', E_USER_DEPRECATED);
        }
        return $this->additional_filters;
    }

    /**
     * This field is deprecated but will be kept for backward compatibility.
     * There is expected to have only one additional filter and the value will
     * be the same to the same as field `additional_filter`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.AdditionalFilter additional_filters = 3 [deprecated = true];</code>
     * @param array<\Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\AdditionalFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setAdditionalFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\AdditionalFilter::class);
        if (count($arr) !== 0) {
            @trigger_error('additional_filters is deprecated.', E_USER_DEPRECATED);
        }
        $this->additional_filters = $arr;

        return $this;
    }

    /**
     * The follow-up question. e.g., `What is the color?`
     *
     * Generated from protobuf field <code>string followup_question = 4;</code>
     * @return string
     */
    public function getFollowupQuestion()
    {
        return $this->followup_question;
    }

    /**
     * The follow-up question. e.g., `What is the color?`
     *
     * Generated from protobuf field <code>string followup_question = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFollowupQuestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->followup_question = $var;

        return $this;
    }

    /**
     * The answer options provided to client for the follow-up question.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.SuggestedAnswer suggested_answers = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSuggestedAnswers()
    {
        return $this->suggested_answers;
    }

    /**
     * The answer options provided to client for the follow-up question.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.SuggestedAnswer suggested_answers = 5;</code>
     * @param array<\Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\SuggestedAnswer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSuggestedAnswers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\SuggestedAnswer::class);
        $this->suggested_answers = $arr;

        return $this;
    }

    /**
     * This is the incremental additional filters implied from the current
     * user answer. User should add the suggested addition filters to the
     * previous
     * [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],  and
     * use the merged filter in the follow up search request.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.AdditionalFilter additional_filter = 6;</code>
     * @return \Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\AdditionalFilter|null
     */
    public function getAdditionalFilter()
    {
        return $this->additional_filter;
    }

    public function hasAdditionalFilter()
    {
        return isset($this->additional_filter);
    }

    public function clearAdditionalFilter()
    {
        unset($this->additional_filter);
    }

    /**
     * This is the incremental additional filters implied from the current
     * user answer. User should add the suggested addition filters to the
     * previous
     * [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],  and
     * use the merged filter in the follow up search request.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.AdditionalFilter additional_filter = 6;</code>
     * @param \Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\AdditionalFilter $var
     * @return $this
     */
    public function setAdditionalFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult\AdditionalFilter::class);
        $this->additional_filter = $var;

        return $this;
    }

}


