<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/events/subscriptions/v1/subscriptions_service.proto

namespace GPBMetadata\Google\Apps\Events\Subscriptions\V1;

class SubscriptionsService
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
        \GPBMetadata\Google\Apps\Events\Subscriptions\V1\SubscriptionResource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/apps/events/subscriptions/v1/subscriptions_service.proto#google.apps.events.subscriptions.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto?google/apps/events/subscriptions/v1/subscription_resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateSubscriptionRequestL
subscription (21.google.apps.events.subscriptions.v1.SubscriptionB�A
validate_only (B�A"�
DeleteSubscriptionRequestA
name (	B3�A�A-
+workspaceevents.googleapis.com/Subscription
validate_only (B�A
allow_missing (B�A
etag (	B�A"[
GetSubscriptionRequestA
name (	B3�A�A-
+workspaceevents.googleapis.com/Subscription"�
UpdateSubscriptionRequestL
subscription (21.google.apps.events.subscriptions.v1.SubscriptionB�A4
update_mask (2.google.protobuf.FieldMaskB�A
validate_only (B�A"b
ReactivateSubscriptionRequestA
name (	B3�A�A-
+workspaceevents.googleapis.com/Subscription"`
ListSubscriptionsRequest
	page_size (B�A

page_token (	B�A
filter (	B�A"~
ListSubscriptionsResponseH
subscriptions (21.google.apps.events.subscriptions.v1.Subscription
next_page_token (	"
UpdateSubscriptionMetadata"
CreateSubscriptionMetadata"
DeleteSubscriptionMetadata" 
ReactivateSubscriptionMetadata2�
SubscriptionsService�
CreateSubscription>.google.apps.events.subscriptions.v1.CreateSubscriptionRequest.google.longrunning.Operation"c�A*
SubscriptionCreateSubscriptionMetadata�Asubscription���!"/v1/subscriptions:subscription�
DeleteSubscription>.google.apps.events.subscriptions.v1.DeleteSubscriptionRequest.google.longrunning.Operation"_�A3
google.protobuf.EmptyDeleteSubscriptionMetadata�Aname���*/v1/{name=subscriptions/*}�
GetSubscription;.google.apps.events.subscriptions.v1.GetSubscriptionRequest1.google.apps.events.subscriptions.v1.Subscription")�Aname���/v1/{name=subscriptions/*}�
ListSubscriptions=.google.apps.events.subscriptions.v1.ListSubscriptionsRequest>.google.apps.events.subscriptions.v1.ListSubscriptionsResponse""�Afilter���/v1/subscriptions�
UpdateSubscription>.google.apps.events.subscriptions.v1.UpdateSubscriptionRequest.google.longrunning.Operation"��A*
SubscriptionUpdateSubscriptionMetadata�Asubscription,update_mask���72\'/v1/{subscription.name=subscriptions/*}:subscription�
ReactivateSubscriptionB.google.apps.events.subscriptions.v1.ReactivateSubscriptionRequest.google.longrunning.Operation"h�A.
SubscriptionReactivateSubscriptionMetadata�Aname���*"%/v1/{name=subscriptions/*}:reactivate:*��Aworkspaceevents.googleapis.com�A�https://www.googleapis.com/auth/chat.memberships,https://www.googleapis.com/auth/chat.memberships.readonly,https://www.googleapis.com/auth/chat.messages,https://www.googleapis.com/auth/chat.messages.reactions,https://www.googleapis.com/auth/chat.messages.reactions.readonly,https://www.googleapis.com/auth/chat.messages.readonly,https://www.googleapis.com/auth/chat.spaces,https://www.googleapis.com/auth/chat.spaces.readonly,https://www.googleapis.com/auth/meetings.space.created,https://www.googleapis.com/auth/meetings.space.readonlyB�
\'com.google.apps.events.subscriptions.v1BSubscriptionsServiceProtoPZScloud.google.com/go/apps/events/subscriptions/apiv1/subscriptionspb;subscriptionspb�#Google.Apps.Events.Subscriptions.V1�#Google\\Apps\\Events\\Subscriptions\\V1�\'Google::Apps::Events::Subscriptions::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

