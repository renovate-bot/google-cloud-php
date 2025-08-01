<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/licensemanager/v1/api_entities.proto

namespace GPBMetadata\Google\Cloud\Licensemanager\V1;

class ApiEntities
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/licensemanager/v1/api_entities.protogoogle.cloud.licensemanager.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
Configuration
name (	B�A
display_name (	B�A>
product (	B-�A�A\'
%licensemanager.googleapis.com/ProductF
license_type (2+.google.cloud.licensemanager.v1.LicenseTypeB�AN
current_billing_info (2+.google.cloud.licensemanager.v1.BillingInfoB�AK
next_billing_info	 (2+.google.cloud.licensemanager.v1.BillingInfoB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AN
labels (29.google.cloud.licensemanager.v1.Configuration.LabelsEntryB�AG
state
 (23.google.cloud.licensemanager.v1.Configuration.StateB�A-
LabelsEntry
key (	
value (	:8"X
State
STATE_UNSPECIFIED 
STATE_ACTIVE
STATE_SUSPENDED
STATE_DELETED:��A�
+licensemanager.googleapis.com/ConfigurationFprojects/{project}/locations/{location}/configurations/{configuration}*configurations2configuration"�
BillingInfoW
user_count_billing (24.google.cloud.licensemanager.v1.UserCountBillingInfoB�AH 3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AB
current_billing_info"/
UserCountBillingInfo

user_count (B�A"0
UserCountUsage
unique_user_count (B�A"�
Product
name (	B�A
version (	B�A
product_company (	B�AA
state (2-.google.cloud.licensemanager.v1.Product.StateB�A
sku (	B�A
description (	B�A
display_name (	B�A"v
State
STATE_UNSPECIFIED 
STATE_PROVISIONING
STATE_RUNNING
STATE_TERMINATING
STATE_TERMINATED:y�Av
%licensemanager.googleapis.com/Product:projects/{project}/locations/{location}/products/{product}*products2product"�
Instance
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AI
labels (24.google.cloud.licensemanager.v1.Instance.LabelsEntryB�AB
state (2..google.cloud.licensemanager.v1.Instance.StateB�A
region (	B�A`
product_activation (2?.google.cloud.licensemanager.v1.Instance.ProductActivationEntryB�A
license_version_id (	B�AH
compute_instance	 (	B.�A�A(
&compute.googleapis.com/ComputeInstance-
LabelsEntry
key (	
value (	:8i
ProductActivationEntry
key (	>
value (2/.google.cloud.licensemanager.v1.ActivationState:8"�
State
STATE_UNSPECIFIED 
PROVISIONING
STAGING
RUNNING
STOPPING
STOPPED

TERMINATED
	REPAIRING:~�A{
&licensemanager.googleapis.com/Instance<projects/{project}/locations/{location}/instances/{instance}*	instances2instance"Z
UsageB
lima_instance (	B+�A(
&licensemanager.googleapis.com/Instance
users (*y
LicenseType
LICENSE_TYPE_UNSPECIFIED #
LICENSE_TYPE_PER_MONTH_PER_USER\'
#LICENSE_TYPE_BRING_YOUR_OWN_LICENSE*�
ActivationState 
ACTIVATION_STATE_UNSPECIFIED "
ACTIVATION_STATE_KEY_REQUESTED
ACTIVATION_STATE_ACTIVATING
ACTIVATION_STATE_ACTIVATED!
ACTIVATION_STATE_DEACTIVATING 
ACTIVATION_STATE_DEACTIVATED
ACTIVATION_STATE_TERMINATEDB�
"com.google.cloud.licensemanager.v1BApiEntitiesProtoPZJcloud.google.com/go/licensemanager/apiv1/licensemanagerpb;licensemanagerpb�Google.Cloud.LicenseManager.V1�Google\\Cloud\\LicenseManager\\V1�!Google::Cloud::LicenseManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

