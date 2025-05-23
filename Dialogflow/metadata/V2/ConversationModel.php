<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class ConversationModel
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�@
3google/cloud/dialogflow/v2/conversation_model.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
ConversationModel
name (	
display_name (	B�A4
create_time (2.google.protobuf.TimestampB�A?
datasets (2(.google.cloud.dialogflow.v2.InputDatasetB�AG
state (23.google.cloud.dialogflow.v2.ConversationModel.StateB�A
language_code (	g
!article_suggestion_model_metadata (2:.google.cloud.dialogflow.v2.ArticleSuggestionModelMetadataH Y
smart_reply_model_metadata	 (23.google.cloud.dialogflow.v2.SmartReplyModelMetadataH 
satisfies_pzs (B�AH�
satisfies_pzi (B�AH�"�
State
STATE_UNSPECIFIED 
CREATING

UNDEPLOYED
	DEPLOYING
DEPLOYED
UNDEPLOYING
DELETING

FAILED
PENDING"g
	ModelType
MODEL_TYPE_UNSPECIFIED "
SMART_REPLY_DUAL_ENCODER_MODEL
SMART_REPLY_BERT_MODEL:��A�
+dialogflow.googleapis.com/ConversationModelOprojects/{project}/locations/{location}/conversationModels/{conversation_model}:projects/{project}/conversationModels/{conversation_model}B
model_metadataB
_satisfies_pzsB
_satisfies_pzi"�
ConversationModelEvaluation
name (	
display_name (	B�AL
evaluation_config (2,.google.cloud.dialogflow.v2.EvaluationConfigB�A4
create_time (2.google.protobuf.TimestampB�AQ
smart_reply_metrics (2-.google.cloud.dialogflow.v2.SmartReplyMetricsB�AH (
raw_human_eval_template_csv (	B�A:��A�
5dialogflow.googleapis.com/ConversationModelEvaluationSprojects/{project}/conversationModels/{conversation_model}/evaluations/{evaluation}hprojects/{project}/locations/{location}/conversationModels/{conversation_model}/evaluations/{evaluation}B	
metrics"�
EvaluationConfig?
datasets (2(.google.cloud.dialogflow.v2.InputDatasetB�A[
smart_reply_config (2=.google.cloud.dialogflow.v2.EvaluationConfig.SmartReplyConfigH _
smart_compose_config (2?.google.cloud.dialogflow.v2.EvaluationConfig.SmartComposeConfigH v
SmartReplyConfigC
allowlist_document (	B\'�A$
"dialogflow.googleapis.com/Document
max_result_count (B�Ax
SmartComposeConfigC
allowlist_document (	B\'�A$
"dialogflow.googleapis.com/Document
max_result_count (B�AB
model_specific_config"V
InputDatasetF
dataset (	B5�A�A/
-dialogflow.googleapis.com/ConversationDataset"{
ArticleSuggestionModelMetadataY
training_model_type (27.google.cloud.dialogflow.v2.ConversationModel.ModelTypeB�A"t
SmartReplyModelMetadataY
training_model_type (27.google.cloud.dialogflow.v2.ConversationModel.ModelTypeB�A"�
SmartReplyMetrics
allowlist_coverage (P
top_n_metrics (29.google.cloud.dialogflow.v2.SmartReplyMetrics.TopNMetrics
conversation_count ((
TopNMetrics	
n (
recall ("�
CreateConversationModelRequest
parent (	N
conversation_model (2-.google.cloud.dialogflow.v2.ConversationModelB�A"0
GetConversationModelRequest
name (	B�A"e
ListConversationModelsRequest
parent (	B�A
	page_size (B�A

page_token (	B�A"�
ListConversationModelsResponseJ
conversation_models (2-.google.cloud.dialogflow.v2.ConversationModel
next_page_token (	"3
DeleteConversationModelRequest
name (	B�A"3
DeployConversationModelRequest
name (	B�A"5
 UndeployConversationModelRequest
name (	B�A":
%GetConversationModelEvaluationRequest
name (	B�A"o
\'ListConversationModelEvaluationsRequest
parent (	B�A
	page_size (B�A

page_token (	B�A"�
(ListConversationModelEvaluationsResponse_
conversation_model_evaluations (27.google.cloud.dialogflow.v2.ConversationModelEvaluation
next_page_token (	"�
(CreateConversationModelEvaluationRequestM
parent (	B=�A�A75dialogflow.googleapis.com/ConversationModelEvaluationc
conversation_model_evaluation (27.google.cloud.dialogflow.v2.ConversationModelEvaluationB�A"�
(CreateConversationModelOperationMetadata
conversation_model (	Y
state (2J.google.cloud.dialogflow.v2.CreateConversationModelOperationMetadata.State/
create_time (2.google.protobuf.Timestamp"s
State
STATE_UNSPECIFIED 
PENDING
	SUCCEEDED

FAILED
	CANCELLED

CANCELLING
TRAINING"w
(DeployConversationModelOperationMetadata
conversation_model (	/
create_time (2.google.protobuf.Timestamp"y
*UndeployConversationModelOperationMetadata
conversation_model (	/
create_time (2.google.protobuf.Timestamp"w
(DeleteConversationModelOperationMetadata
conversation_model (	/
create_time (2.google.protobuf.Timestamp"�
2CreateConversationModelEvaluationOperationMetadata%
conversation_model_evaluation (	
conversation_model (	c
state (2T.google.cloud.dialogflow.v2.CreateConversationModelEvaluationOperationMetadata.State/
create_time (2.google.protobuf.Timestamp"g
State
STATE_UNSPECIFIED 
INITIALIZING
RUNNING
	CANCELLED
	SUCCEEDED

FAILED2�
ConversationModels�
CreateConversationModel:.google.cloud.dialogflow.v2.CreateConversationModelRequest.google.longrunning.Operation"��A=
ConversationModel(CreateConversationModelOperationMetadata�Aparent,conversation_model����"*/v2/{parent=projects/*}/conversationModels:conversation_modelZL"6/v2/{parent=projects/*/locations/*}/conversationModels:conversation_model�
GetConversationModel7.google.cloud.dialogflow.v2.GetConversationModelRequest-.google.cloud.dialogflow.v2.ConversationModel"s�Aname���f*/v2/{name=projects/*/conversationModels/*}Z86/v2/{name=projects/*/locations/*/conversationModels/*}�
ListConversationModels9.google.cloud.dialogflow.v2.ListConversationModelsRequest:.google.cloud.dialogflow.v2.ListConversationModelsResponse"u�Aparent���f*/v2/{parent=projects/*}/conversationModelsZ86/v2/{parent=projects/*/locations/*}/conversationModels�
DeleteConversationModel:.google.cloud.dialogflow.v2.DeleteConversationModelRequest.google.longrunning.Operation"��AA
google.protobuf.Empty(DeleteConversationModelOperationMetadata�Aname���f**/v2/{name=projects/*/conversationModels/*}Z8*6/v2/{name=projects/*/locations/*/conversationModels/*}�
DeployConversationModel:.google.cloud.dialogflow.v2.DeployConversationModelRequest.google.longrunning.Operation"��AA
google.protobuf.Empty(DeployConversationModelOperationMetadata���z"1/v2/{name=projects/*/conversationModels/*}:deploy:*ZB"=/v2/{name=projects/*/locations/*/conversationModels/*}:deploy:*�
UndeployConversationModel<.google.cloud.dialogflow.v2.UndeployConversationModelRequest.google.longrunning.Operation"��AC
google.protobuf.Empty*UndeployConversationModelOperationMetadata���~"3/v2/{name=projects/*/conversationModels/*}:undeploy:*ZD"?/v2/{name=projects/*/locations/*/conversationModels/*}:undeploy:*�
GetConversationModelEvaluationA.google.cloud.dialogflow.v2.GetConversationModelEvaluationRequest7.google.cloud.dialogflow.v2.ConversationModelEvaluation"��Aname����8/v2/{name=projects/*/conversationModels/*/evaluations/*}ZFD/v2/{name=projects/*/locations/*/conversationModels/*/evaluations/*}�
 ListConversationModelEvaluationsC.google.cloud.dialogflow.v2.ListConversationModelEvaluationsRequestD.google.cloud.dialogflow.v2.ListConversationModelEvaluationsResponse"��Aparent����8/v2/{parent=projects/*/conversationModels/*}/evaluationsZFD/v2/{parent=projects/*/locations/*/conversationModels/*}/evaluations�
!CreateConversationModelEvaluationD.google.cloud.dialogflow.v2.CreateConversationModelEvaluationRequest.google.longrunning.Operation"��AQ
ConversationModelEvaluation2CreateConversationModelEvaluationOperationMetadata�A$parent,conversation_model_evaluation���I"D/v2/{parent=projects/*/locations/*/conversationModels/*}/evaluations:*x�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BConversationModelProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb�DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

