<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1;

class Privilegedaccessmanager
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
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�w
Egoogle/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto\'google.cloud.privilegedaccessmanager.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"j
CheckOnboardingStatusRequestJ
parent (	B:�A�A42privilegedaccessmanager.googleapis.com/Entitlement"�
CheckOnboardingStatusResponse
service_account (	`
findings (2N.google.cloud.privilegedaccessmanager.v1.CheckOnboardingStatusResponse.Finding�
Finding{
iam_access_denied (2^.google.cloud.privilegedaccessmanager.v1.CheckOnboardingStatusResponse.Finding.IAMAccessDeniedH .
IAMAccessDenied
missing_permissions (	B
finding_type"�
Entitlement
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AX
eligible_users (2;.google.cloud.privilegedaccessmanager.v1.AccessControlEntryB�AY
approval_workflow (29.google.cloud.privilegedaccessmanager.v1.ApprovalWorkflowB�AT
privileged_access (29.google.cloud.privilegedaccessmanager.v1.PrivilegedAccess<
max_request_duration (2.google.protobuf.DurationB�AN
state	 (2:.google.cloud.privilegedaccessmanager.v1.Entitlement.StateB�A~
requester_justification_config
 (2Q.google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfigB�A�
additional_notification_targets (2R.google.cloud.privilegedaccessmanager.v1.Entitlement.AdditionalNotificationTargetsB�A
etag (	�
RequesterJustificationConfigw
not_mandatory (2^.google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfig.NotMandatoryH v
unstructured (2^.google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfig.UnstructuredH 
NotMandatory
UnstructuredB
justification_typem
AdditionalNotificationTargets#
admin_email_recipients (	B�A\'
requester_email_recipients (	B�A"d
State
STATE_UNSPECIFIED 
CREATING
	AVAILABLE
DELETING
DELETED
UPDATING:��A�
2privilegedaccessmanager.googleapis.com/EntitlementBprojects/{project}/locations/{location}/entitlements/{entitlement}@folders/{folder}/locations/{location}/entitlements/{entitlement}Lorganizations/{organization}/locations/{location}/entitlements/{entitlement}*entitlements2entitlement"-
AccessControlEntry

principals (	B�A"}
ApprovalWorkflowT
manual_approvals (28.google.cloud.privilegedaccessmanager.v1.ManualApprovalsH B
approval_workflow"�
ManualApprovals+
require_approver_justification (B�AQ
steps (2=.google.cloud.privilegedaccessmanager.v1.ManualApprovals.StepB�A�
StepS
	approvers (2;.google.cloud.privilegedaccessmanager.v1.AccessControlEntryB�A
approvals_needed (B�A&
approver_email_recipients (	B�A"�
PrivilegedAccess`
gcp_iam_access (2F.google.cloud.privilegedaccessmanager.v1.PrivilegedAccess.GcpIamAccessH �
GcpIamAccess
resource_type (	B�A
resource (	B�An
role_bindings (2R.google.cloud.privilegedaccessmanager.v1.PrivilegedAccess.GcpIamAccess.RoleBindingB�AC
RoleBinding
role (	B�A!
condition_expression (	B�AB
access_type"�
ListEntitlementsRequestJ
parent (	B:�A�A42privilegedaccessmanager.googleapis.com/Entitlement
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListEntitlementsResponseJ
entitlements (24.google.cloud.privilegedaccessmanager.v1.Entitlement
next_page_token (	
unreachable (	"�
SearchEntitlementsRequestJ
parent (	B:�A�A42privilegedaccessmanager.googleapis.com/Entitlementt
caller_access_type (2S.google.cloud.privilegedaccessmanager.v1.SearchEntitlementsRequest.CallerAccessTypeB�A
filter (	B�A
	page_size (B�A

page_token (	B�A"_
CallerAccessType"
CALLER_ACCESS_TYPE_UNSPECIFIED 
GRANT_REQUESTER
GRANT_APPROVER"�
SearchEntitlementsResponseJ
entitlements (24.google.cloud.privilegedaccessmanager.v1.Entitlement
next_page_token (	"a
GetEntitlementRequestH
name (	B:�A�A4
2privilegedaccessmanager.googleapis.com/Entitlement"�
CreateEntitlementRequestJ
parent (	B:�A�A42privilegedaccessmanager.googleapis.com/Entitlement
entitlement_id (	B�AN
entitlement (24.google.cloud.privilegedaccessmanager.v1.EntitlementB�A

request_id (	B�A"�
DeleteEntitlementRequestH
name (	B:�A�A4
2privilegedaccessmanager.googleapis.com/Entitlement

request_id (	B�A
force (B�A"�
UpdateEntitlementRequestN
entitlement (24.google.cloud.privilegedaccessmanager.v1.EntitlementB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
Grant
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
	requester (	B�A:
requested_duration (2.google.protobuf.DurationB�AR
justification (26.google.cloud.privilegedaccessmanager.v1.JustificationB�AH
state (24.google.cloud.privilegedaccessmanager.v1.Grant.StateB�AN
timeline (27.google.cloud.privilegedaccessmanager.v1.Grant.TimelineB�AY
privileged_access	 (29.google.cloud.privilegedaccessmanager.v1.PrivilegedAccessB�AS
audit_trail
 (29.google.cloud.privilegedaccessmanager.v1.Grant.AuditTrailB�A(
additional_email_recipients (	B�A 
externally_modified (B�A�
TimelineR
events (2=.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.EventB�A�
Event\\
	requested (2G.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.RequestedH Z
approved (2F.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.ApprovedH V
denied (2D.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.DeniedH X
revoked (2E.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.RevokedH \\
	scheduled (2G.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.ScheduledH \\
	activated (2G.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.ActivatedH k
activation_failed (2N.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.ActivationFailedH X
expired
 (2E.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.ExpiredH T
ended (2C.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.EndedH o
externally_modified (2P.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.ExternallyModifiedH \\
	withdrawn (2G.google.cloud.privilegedaccessmanager.v1.Grant.Timeline.Event.WithdrawnH 3

event_time (2.google.protobuf.TimestampB�AA
	Requested4
expire_time (2.google.protobuf.TimestampB�A3
Approved
reason (	B�A
actor (	B�A1
Denied
reason (	B�A
actor (	B�A2
Revoked
reason (	B�A
actor (	B�A
	WithdrawnO
	ScheduledB
scheduled_activation_time (2.google.protobuf.TimestampB�A
	Activated:
ActivationFailed&
error (2.google.rpc.StatusB�A	
Expired
Ended
ExternallyModifiedB
event�

AuditTrail:
access_grant_time (2.google.protobuf.TimestampB�A;
access_remove_time (2.google.protobuf.TimestampB�A"�
State
STATE_UNSPECIFIED 
APPROVAL_AWAITED

DENIED
	SCHEDULED

ACTIVATING

ACTIVE
ACTIVATION_FAILED
EXPIRED
REVOKING	
REVOKED
	
ENDED
WITHDRAWING
	WITHDRAWN:��A�
,privilegedaccessmanager.googleapis.com/GrantQprojects/{project}/locations/{location}/entitlements/{entitlement}/grants/{grant}Ofolders/{folder}/locations/{location}/entitlements/{entitlement}/grants/{grant}[organizations/{organization}/locations/{location}/entitlements/{entitlement}/grants/{grant}*grants2grant"F
Justification$
unstructured_justification (	H B
justification"�
ListGrantsRequestD
parent (	B4�A�A.,privilegedaccessmanager.googleapis.com/Grant
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListGrantsResponse>
grants (2..google.cloud.privilegedaccessmanager.v1.Grant
next_page_token (	
unreachable (	"�
SearchGrantsRequestD
parent (	B4�A�A.,privilegedaccessmanager.googleapis.com/Grantu
caller_relationship (2S.google.cloud.privilegedaccessmanager.v1.SearchGrantsRequest.CallerRelationshipTypeB�A
filter (	B�A
	page_size (B�A

page_token (	B�A"v
CallerRelationshipType(
$CALLER_RELATIONSHIP_TYPE_UNSPECIFIED 
HAD_CREATED
CAN_APPROVE
HAD_APPROVED"o
SearchGrantsResponse>
grants (2..google.cloud.privilegedaccessmanager.v1.Grant
next_page_token (	"U
GetGrantRequestB
name (	B4�A�A.
,privilegedaccessmanager.googleapis.com/Grant"n
ApproveGrantRequestB
name (	B4�A�A.
,privilegedaccessmanager.googleapis.com/Grant
reason (	B�A"k
DenyGrantRequestB
name (	B4�A�A.
,privilegedaccessmanager.googleapis.com/Grant
reason (	B�A"m
RevokeGrantRequestB
name (	B4�A�A.
,privilegedaccessmanager.googleapis.com/Grant
reason (	B�A"�
CreateGrantRequestD
parent (	B4�A�A.,privilegedaccessmanager.googleapis.com/GrantB
grant (2..google.cloud.privilegedaccessmanager.v1.GrantB�A

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�\'
PrivilegedAccessManager�
CheckOnboardingStatusE.google.cloud.privilegedaccessmanager.v1.CheckOnboardingStatusRequestF.google.cloud.privilegedaccessmanager.v1.CheckOnboardingStatusResponse"�����9/v1/{parent=projects/*/locations/*}:checkOnboardingStatusZ@>/v1/{parent=organizations/*/locations/*}:checkOnboardingStatusZ:8/v1/{parent=folders/*/locations/*}:checkOnboardingStatus�
ListEntitlements@.google.cloud.privilegedaccessmanager.v1.ListEntitlementsRequestA.google.cloud.privilegedaccessmanager.v1.ListEntitlementsResponse"��Aparent����0/v1/{parent=projects/*/locations/*}/entitlementsZ75/v1/{parent=organizations/*/locations/*}/entitlementsZ1//v1/{parent=folders/*/locations/*}/entitlements�
SearchEntitlementsB.google.cloud.privilegedaccessmanager.v1.SearchEntitlementsRequestC.google.cloud.privilegedaccessmanager.v1.SearchEntitlementsResponse"�����7/v1/{parent=projects/*/locations/*}/entitlements:searchZ></v1/{parent=organizations/*/locations/*}/entitlements:searchZ86/v1/{parent=folders/*/locations/*}/entitlements:search�
GetEntitlement>.google.cloud.privilegedaccessmanager.v1.GetEntitlementRequest4.google.cloud.privilegedaccessmanager.v1.Entitlement"��Aname����0/v1/{name=projects/*/locations/*/entitlements/*}Z75/v1/{name=organizations/*/locations/*/entitlements/*}Z1//v1/{name=folders/*/locations/*/entitlements/*}�
CreateEntitlementA.google.cloud.privilegedaccessmanager.v1.CreateEntitlementRequest.google.longrunning.Operation"��A 
EntitlementOperationMetadata�A!parent,entitlement,entitlement_id����"0/v1/{parent=projects/*/locations/*}/entitlements:entitlementZD"5/v1/{parent=organizations/*/locations/*}/entitlements:entitlementZ>"//v1/{parent=folders/*/locations/*}/entitlements:entitlement�
DeleteEntitlementA.google.cloud.privilegedaccessmanager.v1.DeleteEntitlementRequest.google.longrunning.Operation"��A 
EntitlementOperationMetadata�Aname����*0/v1/{name=projects/*/locations/*/entitlements/*}Z7*5/v1/{name=organizations/*/locations/*/entitlements/*}Z1*//v1/{name=folders/*/locations/*/entitlements/*}�
UpdateEntitlementA.google.cloud.privilegedaccessmanager.v1.UpdateEntitlementRequest.google.longrunning.Operation"��A 
EntitlementOperationMetadata�Aentitlement,update_mask����2</v1/{entitlement.name=projects/*/locations/*/entitlements/*}:entitlementZP2A/v1/{entitlement.name=organizations/*/locations/*/entitlements/*}:entitlementZJ2;/v1/{entitlement.name=folders/*/locations/*/entitlements/*}:entitlement�

ListGrants:.google.cloud.privilegedaccessmanager.v1.ListGrantsRequest;.google.cloud.privilegedaccessmanager.v1.ListGrantsResponse"��Aparent����9/v1/{parent=projects/*/locations/*/entitlements/*}/grantsZ@>/v1/{parent=organizations/*/locations/*/entitlements/*}/grantsZ:8/v1/{parent=folders/*/locations/*/entitlements/*}/grants�
SearchGrants<.google.cloud.privilegedaccessmanager.v1.SearchGrantsRequest=.google.cloud.privilegedaccessmanager.v1.SearchGrantsResponse"�����@/v1/{parent=projects/*/locations/*/entitlements/*}/grants:searchZGE/v1/{parent=organizations/*/locations/*/entitlements/*}/grants:searchZA?/v1/{parent=folders/*/locations/*/entitlements/*}/grants:search�
GetGrant8.google.cloud.privilegedaccessmanager.v1.GetGrantRequest..google.cloud.privilegedaccessmanager.v1.Grant"��Aname����9/v1/{name=projects/*/locations/*/entitlements/*/grants/*}Z@>/v1/{name=organizations/*/locations/*/entitlements/*/grants/*}Z:8/v1/{name=folders/*/locations/*/entitlements/*/grants/*}�
CreateGrant;.google.cloud.privilegedaccessmanager.v1.CreateGrantRequest..google.cloud.privilegedaccessmanager.v1.Grant"��Aparent,grant����"9/v1/{parent=projects/*/locations/*/entitlements/*}/grants:grantZG">/v1/{parent=organizations/*/locations/*/entitlements/*}/grants:grantZA"8/v1/{parent=folders/*/locations/*/entitlements/*}/grants:grant�
ApproveGrant<.google.cloud.privilegedaccessmanager.v1.ApproveGrantRequest..google.cloud.privilegedaccessmanager.v1.Grant"�����"A/v1/{name=projects/*/locations/*/entitlements/*/grants/*}:approve:*ZK"F/v1/{name=organizations/*/locations/*/entitlements/*/grants/*}:approve:*ZE"@/v1/{name=folders/*/locations/*/entitlements/*/grants/*}:approve:*�
	DenyGrant9.google.cloud.privilegedaccessmanager.v1.DenyGrantRequest..google.cloud.privilegedaccessmanager.v1.Grant"�����">/v1/{name=projects/*/locations/*/entitlements/*/grants/*}:deny:*ZH"C/v1/{name=organizations/*/locations/*/entitlements/*/grants/*}:deny:*ZB"=/v1/{name=folders/*/locations/*/entitlements/*/grants/*}:deny:*�
RevokeGrant;.google.cloud.privilegedaccessmanager.v1.RevokeGrantRequest.google.longrunning.Operation"��A
GrantOperationMetadata����"@/v1/{name=projects/*/locations/*/entitlements/*/grants/*}:revoke:*ZJ"E/v1/{name=organizations/*/locations/*/entitlements/*/grants/*}:revoke:*ZD"?/v1/{name=folders/*/locations/*/entitlements/*/grants/*}:revoke:*Z�A&privilegedaccessmanager.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
+com.google.cloud.privilegedaccessmanager.v1BPrivilegedAccessManagerProtoPZecloud.google.com/go/privilegedaccessmanager/apiv1/privilegedaccessmanagerpb;privilegedaccessmanagerpb�\'Google.Cloud.PrivilegedAccessManager.V1�\'Google\\Cloud\\PrivilegedAccessManager\\V1�*Google::Cloud::PrivilegedAccessManager::V1�Ap
;privilegedaccessmanager.googleapis.com/OrganizationLocation1organizations/{organization}/locations/{location}�A^
5privilegedaccessmanager.googleapis.com/FolderLocation%folders/{folder}/locations/{location}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

