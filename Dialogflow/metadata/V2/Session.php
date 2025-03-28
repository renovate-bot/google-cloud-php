<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Session
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Context::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\SessionEntityType::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(
            '
�2
(google/cloud/dialogflow/v2/session.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/dialogflow/v2/audio_config.proto(google/cloud/dialogflow/v2/context.proto\'google/cloud/dialogflow/v2/intent.proto4google/cloud/dialogflow/v2/session_entity_type.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/rpc/status.protogoogle/type/latlng.proto"�
DetectIntentRequest:
session (	B)�A�A#
!dialogflow.googleapis.com/SessionA
query_params (2+.google.cloud.dialogflow.v2.QueryParameters@
query_input (2&.google.cloud.dialogflow.v2.QueryInputB�AJ
output_audio_config (2-.google.cloud.dialogflow.v2.OutputAudioConfig<
output_audio_config_mask (2.google.protobuf.FieldMask
input_audio ("�
DetectIntentResponse
response_id (	=
query_result (2\'.google.cloud.dialogflow.v2.QueryResult*
webhook_status (2.google.rpc.Status
output_audio (J
output_audio_config (2-.google.cloud.dialogflow.v2.OutputAudioConfig"�
QueryParameters
	time_zone (	)
geo_location (2.google.type.LatLng5
contexts (2#.google.cloud.dialogflow.v2.Context
reset_contexts (K
session_entity_types (2-.google.cloud.dialogflow.v2.SessionEntityType(
payload (2.google.protobuf.Structe
!sentiment_analysis_request_config
 (2:.google.cloud.dialogflow.v2.SentimentAnalysisRequestConfigX
webhook_headers (2?.google.cloud.dialogflow.v2.QueryParameters.WebhookHeadersEntry
platform (	5
WebhookHeadersEntry
key (	
value (	:8"�

QueryInputD
audio_config (2,.google.cloud.dialogflow.v2.InputAudioConfigH 5
text (2%.google.cloud.dialogflow.v2.TextInputH 7
event (2&.google.cloud.dialogflow.v2.EventInputH B
input"�
QueryResult

query_text (	
language_code (	%
speech_recognition_confidence (
action (	+

parameters (2.google.protobuf.Struct#
all_required_params_present (
cancels_slot_filling (
fulfillment_text (	H
fulfillment_messages (2*.google.cloud.dialogflow.v2.Intent.Message
webhook_source (	0
webhook_payload	 (2.google.protobuf.Struct<
output_contexts
 (2#.google.cloud.dialogflow.v2.Context2
intent (2".google.cloud.dialogflow.v2.Intent#
intent_detection_confidence (0
diagnostic_info (2.google.protobuf.StructV
sentiment_analysis_result (23.google.cloud.dialogflow.v2.SentimentAnalysisResult"�
StreamingDetectIntentRequest:
session (	B)�A�A#
!dialogflow.googleapis.com/SessionA
query_params (2+.google.cloud.dialogflow.v2.QueryParameters@
query_input (2&.google.cloud.dialogflow.v2.QueryInputB�A
single_utterance (BJ
output_audio_config (2-.google.cloud.dialogflow.v2.OutputAudioConfig<
output_audio_config_mask (2.google.protobuf.FieldMask
input_audio (
enable_debugging_info ("�
CloudConversationDebuggingInfo
audio_data_chunks (9
result_end_time_offset (2.google.protobuf.Duration7
first_audio_duration (2.google.protobuf.Duration
single_utterance (C
 speech_partial_results_end_times (2.google.protobuf.DurationA
speech_final_results_end_times (2.google.protobuf.Duration
partial_responses (,
$speaker_id_passive_latency_ms_offset	 (
bargein_event_triggered
 (
speech_single_utterance (=
dtmf_partial_results_times (2.google.protobuf.Duration;
dtmf_final_results_times (2.google.protobuf.DurationC
 single_utterance_end_time_offset (2.google.protobuf.Duration4
no_speech_timeout (2.google.protobuf.Duration6
endpointing_timeout (2.google.protobuf.Duration
is_input_text (@
client_half_close_time_offset (2.google.protobuf.DurationJ
\'client_half_close_streaming_time_offset (2.google.protobuf.Duration"�
StreamingDetectIntentResponse
response_id (	R
recognition_result (26.google.cloud.dialogflow.v2.StreamingRecognitionResult=
query_result (2\'.google.cloud.dialogflow.v2.QueryResult*
webhook_status (2.google.rpc.Status
output_audio (J
output_audio_config (2-.google.cloud.dialogflow.v2.OutputAudioConfigR
debugging_info (2:.google.cloud.dialogflow.v2.CloudConversationDebuggingInfo"�
StreamingRecognitionResultX
message_type (2B.google.cloud.dialogflow.v2.StreamingRecognitionResult.MessageType

transcript (	
is_final (

confidence (D
speech_word_info (2*.google.cloud.dialogflow.v2.SpeechWordInfo4
speech_end_offset (2.google.protobuf.Duration
language_code
 (	"X
MessageType
MESSAGE_TYPE_UNSPECIFIED 

TRANSCRIPT
END_OF_SINGLE_UTTERANCE":
	TextInput
text (	B�A
language_code (	B�A"h

EventInput
name (	B�A+

parameters (2.google.protobuf.Struct
language_code (	B�A"F
SentimentAnalysisRequestConfig$
analyze_query_text_sentiment ("^
SentimentAnalysisResultC
query_text_sentiment (2%.google.cloud.dialogflow.v2.Sentiment"-
	Sentiment
score (
	magnitude (2�
Sessions�
DetectIntent/.google.cloud.dialogflow.v2.DetectIntentRequest0.google.cloud.dialogflow.v2.DetectIntentResponse"��Asession,query_input����"6/v2/{session=projects/*/agent/sessions/*}:detectIntent:*ZR"M/v2/{session=projects/*/agent/environments/*/users/*/sessions/*}:detectIntent:*ZG"B/v2/{session=projects/*/locations/*/agent/sessions/*}:detectIntent:*Z^"Y/v2/{session=projects/*/locations/*/agent/environments/*/users/*/sessions/*}:detectIntent:*�
StreamingDetectIntent8.google.cloud.dialogflow.v2.StreamingDetectIntentRequest9.google.cloud.dialogflow.v2.StreamingDetectIntentResponse" (0x�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BSessionProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb�DF�Google.Cloud.Dialogflow.V2�A�
!dialogflow.googleapis.com/Session+projects/{project}/agent/sessions/{session}Sprojects/{project}/agent/environments/{environment}/users/{user}/sessions/{session}@projects/{project}/locations/{location}/agent/sessions/{session}hprojects/{project}/locations/{location}/agent/environments/{environment}/users/{user}/sessions/{session}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

