<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/service.proto

namespace GPBMetadata\Google\Cloud\Alloydb\V1;

class Service
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
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Alloydb\V1\DataModel::initOnce();
        \GPBMetadata\Google\Cloud\Alloydb\V1\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
%google/cloud/alloydb/v1/service.protogoogle.cloud.alloydb.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.proto(google/cloud/alloydb/v1/data_model.proto\'google/cloud/alloydb/v1/resources.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
ListClustersRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster
	page_size (B�A

page_token (	
filter (	B�A
order_by (	B�A"x
ListClustersResponse2
clusters (2 .google.cloud.alloydb.v1.Cluster
next_page_token (	
unreachable (	"�
GetClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster7
view (2$.google.cloud.alloydb.v1.ClusterViewB�A"�
CreateSecondaryClusterRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"�
CreateClusterRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A""
GcsDestination
uri (	B�A"�
ExportClusterRequestG
gcs_destination (2\'.google.cloud.alloydb.v1.GcsDestinationB�AH \\
csv_export_options (2>.google.cloud.alloydb.v1.ExportClusterRequest.CsvExportOptionsH\\
sql_export_options (2>.google.cloud.alloydb.v1.ExportClusterRequest.SqlExportOptionsH4
name (	B&�A�A 
alloydb.googleapis.com/Cluster
database (	B�A�
CsvExportOptions
select_query (	B�A
field_delimiter (	B�A
quote_character (	B�A
escape_character (	B�A�
SqlExportOptions
tables (	B�A
schema_only (B�AH �&
clean_target_objects (B�AH�)
if_exist_target_objects (B�AH�B
_schema_onlyB
_clean_target_objectsB
_if_exist_target_objectsB
destinationB
export_options"o
ExportClusterResponseG
gcs_destination (2\'.google.cloud.alloydb.v1.GcsDestinationB�AH B
destination"�
ImportClusterRequest\\
sql_import_options (2>.google.cloud.alloydb.v1.ImportClusterRequest.SqlImportOptionsH \\
csv_import_options (2>.google.cloud.alloydb.v1.ImportClusterRequest.CsvImportOptionsH 4
name (	B&�A�A 
alloydb.googleapis.com/Cluster
gcs_uri (	B�A
database (	B�A
user (	B�A
SqlImportOptions�
CsvImportOptions
table (	B�A
columns (	B�A
field_delimiter (	B�A
quote_character (	B�A
escape_character (	B�AB
import_options"6
ImportClusterResponse
bytes_downloaded (B�A"�
UpgradeClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster>
version (2(.google.cloud.alloydb.v1.DatabaseVersionB�A

request_id (	B�A���
validate_only (B�A
etag (	B�A"�

UpgradeClusterResponseF
status (26.google.cloud.alloydb.v1.UpgradeClusterResponse.Status
message (	f
cluster_upgrade_details (2E.google.cloud.alloydb.v1.UpgradeClusterResponse.ClusterUpgradeDetails�
	StageInfoD
stage (25.google.cloud.alloydb.v1.UpgradeClusterResponse.StageF
status (26.google.cloud.alloydb.v1.UpgradeClusterResponse.Status
logs_url (	�
InstanceUpgradeDetails
name (	N
upgrade_status (26.google.cloud.alloydb.v1.UpgradeClusterResponse.StatusE
instance_type (2..google.cloud.alloydb.v1.Instance.InstanceType�
ClusterUpgradeDetails
name (	N
upgrade_status (26.google.cloud.alloydb.v1.UpgradeClusterResponse.StatusB
cluster_type (2,.google.cloud.alloydb.v1.Cluster.ClusterTypeB
database_version (2(.google.cloud.alloydb.v1.DatabaseVersionM

stage_info (29.google.cloud.alloydb.v1.UpgradeClusterResponse.StageInfoh
instance_upgrade_details (2F.google.cloud.alloydb.v1.UpgradeClusterResponse.InstanceUpgradeDetails"�
Status
STATUS_UNSPECIFIED 
NOT_STARTED
IN_PROGRESS
SUCCESS

FAILED
PARTIAL_SUCCESS
CANCEL_IN_PROGRESS
	CANCELLED"�
Stage
STAGE_UNSPECIFIED 
ALLOYDB_PRECHECK
PG_UPGRADE_CHECK
PREPARE_FOR_UPGRADE
PRIMARY_INSTANCE_UPGRADE
READ_POOL_INSTANCES_UPGRADE
ROLLBACK
CLEANUP"�
DeleteClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
etag (	B�A
validate_only (B�A
force (B�A"�
SwitchoverClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
validate_only (B�A"�
PromoteClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
etag (	B�A
validate_only (B�A"�
RestoreClusterRequest>
backup_source (2%.google.cloud.alloydb.v1.BackupSourceH S
continuous_backup_source (2/.google.cloud.alloydb.v1.ContinuousBackupSourceH 6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�AB
source"�
ListInstancesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
	page_size (B�A

page_token (	
filter (	B�A
order_by (	B�A"{
ListInstancesResponse4
	instances (2!.google.cloud.alloydb.v1.Instance
next_page_token (	
unreachable (	"�
GetInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance3
view (2%.google.cloud.alloydb.v1.InstanceView"�
CreateInstanceRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
instance_id (	B�A8
instance (2!.google.cloud.alloydb.v1.InstanceB�A

request_id (	B�A
validate_only (B�A"�
CreateSecondaryInstanceRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
instance_id (	B�A8
instance (2!.google.cloud.alloydb.v1.InstanceB�A

request_id (	B�A
validate_only (B�A"o
CreateInstanceRequestsU
create_instance_requests (2..google.cloud.alloydb.v1.CreateInstanceRequestB�A"�
BatchCreateInstancesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/InstanceF
requests (2/.google.cloud.alloydb.v1.CreateInstanceRequestsB�A

request_id (	B�A"T
BatchCreateInstancesResponse4
	instances (2!.google.cloud.alloydb.v1.Instance"�
BatchCreateInstancesMetadata
instance_targets (	f
instance_statuses (2K.google.cloud.alloydb.v1.BatchCreateInstancesMetadata.InstanceStatusesEntryk
InstanceStatusesEntry
key (	A
value (22.google.cloud.alloydb.v1.BatchCreateInstanceStatus:8"�
BatchCreateInstanceStatusG
state (28.google.cloud.alloydb.v1.BatchCreateInstanceStatus.State
	error_msg (	!
error (2.google.rpc.Status<
type (2..google.cloud.alloydb.v1.Instance.InstanceType"v
State
STATE_UNSPECIFIED 
PENDING_CREATE	
READY
CREATING
DELETING

FAILED
ROLLED_BACK"�
UpdateInstanceRequest4
update_mask (2.google.protobuf.FieldMaskB�A8
instance (2!.google.cloud.alloydb.v1.InstanceB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
etag (	B�A
validate_only (B�A"�
FailoverInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"�
InjectFaultRequestN

fault_type (25.google.cloud.alloydb.v1.InjectFaultRequest.FaultTypeB�A5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"4
	FaultType
FAULT_TYPE_UNSPECIFIED 
STOP_VM"�
RestartInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A
node_ids (	B�A"�
ExecuteSqlRequest
password (	B�AH 9
instance (	B\'�A�A!
alloydb.googleapis.com/Instance
database (	B�A
user (	B�A
sql_statement (	B�AB
user_credential"�
ExecuteSqlResponse7
sql_results (2".google.cloud.alloydb.v1.SqlResult=
metadata (2+.google.cloud.alloydb.v1.ExecuteSqlMetadata"�
ExecuteSqlMetadata
message (	
partial_result (C
 sql_statement_execution_duration (2.google.protobuf.DurationB
status (22.google.cloud.alloydb.v1.ExecuteSqlMetadata.Status"@
Status
STATUS_UNSPECIFIED 
OK
PARTIAL	
ERROR"�
ListBackupsRequest5
parent (	B%�A�Aalloydb.googleapis.com/Backup
	page_size (

page_token (	
filter (	
order_by (	"u
ListBackupsResponse0
backups (2.google.cloud.alloydb.v1.Backup
next_page_token (	
unreachable (	"G
GetBackupRequest3
name (	B%�A�A
alloydb.googleapis.com/Backup"�
CreateBackupRequest5
parent (	B%�A�Aalloydb.googleapis.com/Backup
	backup_id (	B�A4
backup (2.google.cloud.alloydb.v1.BackupB�A

request_id (	B�A
validate_only (B�A"�
UpdateBackupRequest4
update_mask (2.google.protobuf.FieldMaskB�A4
backup (2.google.cloud.alloydb.v1.BackupB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteBackupRequest3
name (	B%�A�A
alloydb.googleapis.com/Backup

request_id (	B�A
validate_only (B�A
etag (	B�A"�
!ListSupportedDatabaseFlagsRequestD
parent (	B4�A�A.,alloydb.googleapis.com/SupportedDatabaseFlag
	page_size (

page_token (	H
scope (24.google.cloud.alloydb.v1.SupportedDatabaseFlag.ScopeB�A"�
"ListSupportedDatabaseFlagsResponseP
supported_database_flags (2..google.cloud.alloydb.v1.SupportedDatabaseFlag
next_page_token (	"�
 GenerateClientCertificateRequest6
parent (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A5
cert_duration (2.google.protobuf.DurationB�A

public_key (	B�A"
use_metadata_exchange (B�A"]
!GenerateClientCertificateResponse"
pem_certificate_chain (	B�A
ca_cert (	B�A"l
GetConnectionInfoRequest7
parent (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A"�
OperationMetadatae
batch_create_instances_metadata (25.google.cloud.alloydb.v1.BatchCreateInstancesMetadataB�AH T
upgrade_cluster_status
 (2-.google.cloud.alloydb.v1.UpgradeClusterStatusB�AH 4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�AB
request_specific"�
UpgradeClusterStatusE
state (26.google.cloud.alloydb.v1.UpgradeClusterResponse.Status
cancellable (@
source_version (2(.google.cloud.alloydb.v1.DatabaseVersion@
target_version (2(.google.cloud.alloydb.v1.DatabaseVersionI
stages (29.google.cloud.alloydb.v1.UpgradeClusterStatus.StageStatus�
StageStatusx
read_pool_instances_upgrade (2Q.google.cloud.alloydb.v1.UpgradeClusterStatus.ReadPoolInstancesUpgradeStageStatusH D
stage (25.google.cloud.alloydb.v1.UpgradeClusterResponse.StageE
state (26.google.cloud.alloydb.v1.UpgradeClusterResponse.StatusB
stage_specific_status�
#ReadPoolInstancesUpgradeStageStatusn
upgrade_stats (2W.google.cloud.alloydb.v1.UpgradeClusterStatus.ReadPoolInstancesUpgradeStageStatus.StatsN
Stats
not_started (
ongoing (
success (
failed ("�
ListUsersRequest3
parent (	B#�A�Aalloydb.googleapis.com/User
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"o
ListUsersResponse,
users (2.google.cloud.alloydb.v1.User
next_page_token (	
unreachable (	"C
GetUserRequest1
name (	B#�A�A
alloydb.googleapis.com/User"�
CreateUserRequest3
parent (	B#�A�Aalloydb.googleapis.com/User
user_id (	B�A0
user (2.google.cloud.alloydb.v1.UserB�A

request_id (	B�A
validate_only (B�A"�
UpdateUserRequest4
update_mask (2.google.protobuf.FieldMaskB�A0
user (2.google.cloud.alloydb.v1.UserB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"{
DeleteUserRequest1
name (	B#�A�A
alloydb.googleapis.com/User

request_id (	B�A
validate_only (B�A"�
ListDatabasesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Database
	page_size (B�A

page_token (	B�A
filter (	B�A"f
ListDatabasesResponse4
	databases (2!.google.cloud.alloydb.v1.Database
next_page_token (	2�<
AlloyDBAdmin�
ListClusters,.google.cloud.alloydb.v1.ListClustersRequest-.google.cloud.alloydb.v1.ListClustersResponse"=�Aparent���.,/v1/{parent=projects/*/locations/*}/clusters�

GetCluster*.google.cloud.alloydb.v1.GetClusterRequest .google.cloud.alloydb.v1.Cluster";�Aname���.,/v1/{name=projects/*/locations/*/clusters/*}�
CreateCluster-.google.cloud.alloydb.v1.CreateClusterRequest.google.longrunning.Operation"x�A
ClusterOperationMetadata�Aparent,cluster,cluster_id���7",/v1/{parent=projects/*/locations/*}/clusters:cluster�
UpdateCluster-.google.cloud.alloydb.v1.UpdateClusterRequest.google.longrunning.Operation"z�A
ClusterOperationMetadata�Acluster,update_mask���?24/v1/{cluster.name=projects/*/locations/*/clusters/*}:cluster�
ExportCluster-.google.cloud.alloydb.v1.ExportClusterRequest.google.longrunning.Operation"��A*
ExportClusterResponseOperationMetadata�ACname,gcs_destination,database,csv_export_options,sql_export_options���8"3/v1/{name=projects/*/locations/*/clusters/*}:export:*�
ImportCluster-.google.cloud.alloydb.v1.ImportClusterRequest.google.longrunning.Operation"��A*
ImportClusterResponseOperationMetadata�Aname,gcs_uri,database,user���8"3/v1/{name=projects/*/locations/*/clusters/*}:import:*�
UpgradeCluster..google.cloud.alloydb.v1.UpgradeClusterRequest.google.longrunning.Operation"|�A+
UpgradeClusterResponseOperationMetadata�Aname,version���924/v1/{name=projects/*/locations/*/clusters/*}:upgrade:*�
DeleteCluster-.google.cloud.alloydb.v1.DeleteClusterRequest.google.longrunning.Operation"h�A*
google.protobuf.EmptyOperationMetadata�Aname���.*,/v1/{name=projects/*/locations/*/clusters/*}�
PromoteCluster..google.cloud.alloydb.v1.PromoteClusterRequest.google.longrunning.Operation"e�A
ClusterOperationMetadata�Aname���9"4/v1/{name=projects/*/locations/*/clusters/*}:promote:*�
SwitchoverCluster1.google.cloud.alloydb.v1.SwitchoverClusterRequest.google.longrunning.Operation"h�A
ClusterOperationMetadata�Aname���<"7/v1/{name=projects/*/locations/*/clusters/*}:switchover:*�
RestoreCluster..google.cloud.alloydb.v1.RestoreClusterRequest.google.longrunning.Operation"^�A
ClusterOperationMetadata���9"4/v1/{parent=projects/*/locations/*}/clusters:restore:*�
CreateSecondaryCluster6.google.cloud.alloydb.v1.CreateSecondaryClusterRequest.google.longrunning.Operation"��A
ClusterOperationMetadata�Aparent,cluster,cluster_id���G"</v1/{parent=projects/*/locations/*}/clusters:createsecondary:cluster�
ListInstances-.google.cloud.alloydb.v1.ListInstancesRequest..google.cloud.alloydb.v1.ListInstancesResponse"I�Aparent���:8/v1/{parent=projects/*/locations/*/clusters/*}/instances�
GetInstance+.google.cloud.alloydb.v1.GetInstanceRequest!.google.cloud.alloydb.v1.Instance"G�Aname���:8/v1/{name=projects/*/locations/*/clusters/*/instances/*}�
CreateInstance..google.cloud.alloydb.v1.CreateInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Aparent,instance,instance_id���D"8/v1/{parent=projects/*/locations/*/clusters/*}/instances:instance�
CreateSecondaryInstance7.google.cloud.alloydb.v1.CreateSecondaryInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Aparent,instance,instance_id���T"H/v1/{parent=projects/*/locations/*/clusters/*}/instances:createsecondary:instance�
BatchCreateInstances4.google.cloud.alloydb.v1.BatchCreateInstancesRequest.google.longrunning.Operation"��A1
BatchCreateInstancesResponseOperationMetadata���P"D/v1/{parent=projects/*/locations/*/clusters/*}/instances:batchCreate:requests�
UpdateInstance..google.cloud.alloydb.v1.UpdateInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Ainstance,update_mask���M2A/v1/{instance.name=projects/*/locations/*/clusters/*/instances/*}:instance�
DeleteInstance..google.cloud.alloydb.v1.DeleteInstanceRequest.google.longrunning.Operation"t�A*
google.protobuf.EmptyOperationMetadata�Aname���:*8/v1/{name=projects/*/locations/*/clusters/*/instances/*}�
FailoverInstance0.google.cloud.alloydb.v1.FailoverInstanceRequest.google.longrunning.Operation"s�A
InstanceOperationMetadata�Aname���F"A/v1/{name=projects/*/locations/*/clusters/*/instances/*}:failover:*�
InjectFault+.google.cloud.alloydb.v1.InjectFaultRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Afault_type,name���I"D/v1/{name=projects/*/locations/*/clusters/*/instances/*}:injectFault:*�
RestartInstance/.google.cloud.alloydb.v1.RestartInstanceRequest.google.longrunning.Operation"r�A
InstanceOperationMetadata�Aname���E"@/v1/{name=projects/*/locations/*/clusters/*/instances/*}:restart:*�

ExecuteSql*.google.cloud.alloydb.v1.ExecuteSqlRequest+.google.cloud.alloydb.v1.ExecuteSqlResponse"��A-instance,database,user,sql_statement,password���L"G/v1/{instance=projects/*/locations/*/clusters/*/instances/*}:executeSql:*�
ListBackups+.google.cloud.alloydb.v1.ListBackupsRequest,.google.cloud.alloydb.v1.ListBackupsResponse"<�Aparent���-+/v1/{parent=projects/*/locations/*}/backups�
	GetBackup).google.cloud.alloydb.v1.GetBackupRequest.google.cloud.alloydb.v1.Backup":�Aname���-+/v1/{name=projects/*/locations/*/backups/*}�
CreateBackup,.google.cloud.alloydb.v1.CreateBackupRequest.google.longrunning.Operation"s�A
BackupOperationMetadata�Aparent,backup,backup_id���5"+/v1/{parent=projects/*/locations/*}/backups:backup�
UpdateBackup,.google.cloud.alloydb.v1.UpdateBackupRequest.google.longrunning.Operation"u�A
BackupOperationMetadata�Abackup,update_mask���<22/v1/{backup.name=projects/*/locations/*/backups/*}:backup�
DeleteBackup,.google.cloud.alloydb.v1.DeleteBackupRequest.google.longrunning.Operation"g�A*
google.protobuf.EmptyOperationMetadata�Aname���-*+/v1/{name=projects/*/locations/*/backups/*}�
ListSupportedDatabaseFlags:.google.cloud.alloydb.v1.ListSupportedDatabaseFlagsRequest;.google.cloud.alloydb.v1.ListSupportedDatabaseFlagsResponse"K�Aparent���<:/v1/{parent=projects/*/locations/*}/supportedDatabaseFlags�
GenerateClientCertificate9.google.cloud.alloydb.v1.GenerateClientCertificateRequest:.google.cloud.alloydb.v1.GenerateClientCertificateResponse"\\�Aparent���M"H/v1/{parent=projects/*/locations/*/clusters/*}:generateClientCertificate:*�
GetConnectionInfo1.google.cloud.alloydb.v1.GetConnectionInfoRequest\'.google.cloud.alloydb.v1.ConnectionInfo"Z�Aparent���KI/v1/{parent=projects/*/locations/*/clusters/*/instances/*}/connectionInfo�
	ListUsers).google.cloud.alloydb.v1.ListUsersRequest*.google.cloud.alloydb.v1.ListUsersResponse"E�Aparent���64/v1/{parent=projects/*/locations/*/clusters/*}/users�
GetUser\'.google.cloud.alloydb.v1.GetUserRequest.google.cloud.alloydb.v1.User"C�Aname���64/v1/{name=projects/*/locations/*/clusters/*/users/*}�

CreateUser*.google.cloud.alloydb.v1.CreateUserRequest.google.cloud.alloydb.v1.User"X�Aparent,user,user_id���<"4/v1/{parent=projects/*/locations/*/clusters/*}/users:user�

UpdateUser*.google.cloud.alloydb.v1.UpdateUserRequest.google.cloud.alloydb.v1.User"Z�Auser,update_mask���A29/v1/{user.name=projects/*/locations/*/clusters/*/users/*}:user�

DeleteUser*.google.cloud.alloydb.v1.DeleteUserRequest.google.protobuf.Empty"C�Aname���6*4/v1/{name=projects/*/locations/*/clusters/*/users/*}�
ListDatabases-.google.cloud.alloydb.v1.ListDatabasesRequest..google.cloud.alloydb.v1.ListDatabasesResponse"I�Aparent���:8/v1/{parent=projects/*/locations/*/clusters/*}/databasesJ�Aalloydb.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.alloydb.v1BServiceProtoPZ5cloud.google.com/go/alloydb/apiv1/alloydbpb;alloydbpb�Google.Cloud.AlloyDb.V1�Google\\Cloud\\AlloyDb\\V1�Google::Cloud::AlloyDB::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

