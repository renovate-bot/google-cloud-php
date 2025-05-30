<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace GPBMetadata\Google\Cloud\Kms\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�8
#google/cloud/kms/v1/resources.protogoogle.cloud.kms.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
KeyRing
name (	B�A4
create_time (2.google.protobuf.TimestampB�A:a�A^
cloudkms.googleapis.com/KeyRing;projects/{project}/locations/{location}/keyRings/{key_ring}"�
	CryptoKey
name (	B�A;
primary (2%.google.cloud.kms.v1.CryptoKeyVersionB�AE
purpose (2/.google.cloud.kms.v1.CryptoKey.CryptoKeyPurposeB�A4
create_time (2.google.protobuf.TimestampB�A6
next_rotation_time (2.google.protobuf.Timestamp4
rotation_period (2.google.protobuf.DurationH G
version_template (2-.google.cloud.kms.v1.CryptoKeyVersionTemplate:
labels
 (2*.google.cloud.kms.v1.CryptoKey.LabelsEntry
import_only (B�AB
destroy_scheduled_duration (2.google.protobuf.DurationB�A%
crypto_key_backend (	B	�A�A
*a
 key_access_justifications_policy (22.google.cloud.kms.v1.KeyAccessJustificationsPolicyB�A-
LabelsEntry
key (	
value (	:8"�
CryptoKeyPurpose"
CRYPTO_KEY_PURPOSE_UNSPECIFIED 
ENCRYPT_DECRYPT
ASYMMETRIC_SIGN
ASYMMETRIC_DECRYPT
RAW_ENCRYPT_DECRYPT
MAC	:{�Ax
!cloudkms.googleapis.com/CryptoKeySprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}B
rotation_schedule"�
CryptoKeyVersionTemplate>
protection_level (2$.google.cloud.kms.v1.ProtectionLevelW
	algorithm (2?.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithmB�A"�
KeyOperationAttestationS
format (2>.google.cloud.kms.v1.KeyOperationAttestation.AttestationFormatB�A
content (B�AX
cert_chains (2>.google.cloud.kms.v1.KeyOperationAttestation.CertificateChainsB�Ad
CertificateChains
cavium_certs (	
google_card_certs (	
google_partition_certs (	"k
AttestationFormat"
ATTESTATION_FORMAT_UNSPECIFIED 
CAVIUM_V1_COMPRESSED
CAVIUM_V2_COMPRESSED"�
CryptoKeyVersion
name (	B�AJ
state (2;.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionStateC
protection_level (2$.google.cloud.kms.v1.ProtectionLevelB�AW
	algorithm
 (2?.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithmB�AF
attestation (2,.google.cloud.kms.v1.KeyOperationAttestationB�A4
create_time (2.google.protobuf.TimestampB�A6
generate_time (2.google.protobuf.TimestampB�A5
destroy_time (2.google.protobuf.TimestampB�A;
destroy_event_time (2.google.protobuf.TimestampB�A

import_job (	B�A4
import_time (2.google.protobuf.TimestampB�A"
import_failure_reason (	B�A&
generation_failure_reason (	B�A0
#external_destruction_failure_reason (	B�A^
!external_protection_level_options (23.google.cloud.kms.v1.ExternalProtectionLevelOptions
reimport_eligible (B�A"�
CryptoKeyVersionAlgorithm,
(CRYPTO_KEY_VERSION_ALGORITHM_UNSPECIFIED 
GOOGLE_SYMMETRIC_ENCRYPTION
AES_128_GCM)
AES_256_GCM
AES_128_CBC*
AES_256_CBC+
AES_128_CTR,
AES_256_CTR-
RSA_SIGN_PSS_2048_SHA256
RSA_SIGN_PSS_3072_SHA256
RSA_SIGN_PSS_4096_SHA256
RSA_SIGN_PSS_4096_SHA512
RSA_SIGN_PKCS1_2048_SHA256
RSA_SIGN_PKCS1_3072_SHA256
RSA_SIGN_PKCS1_4096_SHA256
RSA_SIGN_PKCS1_4096_SHA512
RSA_SIGN_RAW_PKCS1_2048
RSA_SIGN_RAW_PKCS1_3072
RSA_SIGN_RAW_PKCS1_4096 
RSA_DECRYPT_OAEP_2048_SHA256 
RSA_DECRYPT_OAEP_3072_SHA256	 
RSA_DECRYPT_OAEP_4096_SHA256
 
RSA_DECRYPT_OAEP_4096_SHA512
RSA_DECRYPT_OAEP_2048_SHA1%
RSA_DECRYPT_OAEP_3072_SHA1&
RSA_DECRYPT_OAEP_4096_SHA1\'
EC_SIGN_P256_SHA256
EC_SIGN_P384_SHA384
EC_SIGN_SECP256K1_SHA256
EC_SIGN_ED25519(
HMAC_SHA256 
	HMAC_SHA1!
HMAC_SHA384"
HMAC_SHA512#
HMAC_SHA224$!
EXTERNAL_SYMMETRIC_ENCRYPTION
PQ_SIGN_ML_DSA_658
PQ_SIGN_SLH_DSA_SHA2_128S9"�
CryptoKeyVersionState(
$CRYPTO_KEY_VERSION_STATE_UNSPECIFIED 
PENDING_GENERATION
ENABLED
DISABLED
	DESTROYED
DESTROY_SCHEDULED
PENDING_IMPORT
IMPORT_FAILED
GENERATION_FAILED 
PENDING_EXTERNAL_DESTRUCTION	
EXTERNAL_DESTRUCTION_FAILED
"I
CryptoKeyVersionView\'
#CRYPTO_KEY_VERSION_VIEW_UNSPECIFIED 
FULL:��A�
(cloudkms.googleapis.com/CryptoKeyVersionzprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}"U
ChecksummedData
data (4
crc32c_checksum (2.google.protobuf.Int64Value"�
	PublicKey
pem (	R
	algorithm (2?.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm/

pem_crc32c (2.google.protobuf.Int64Value
name (	>
protection_level (2$.google.cloud.kms.v1.ProtectionLevelI
public_key_format (2..google.cloud.kms.v1.PublicKey.PublicKeyFormat8

public_key (2$.google.cloud.kms.v1.ChecksummedData"K
PublicKeyFormat!
PUBLIC_KEY_FORMAT_UNSPECIFIED 
PEM
NIST_PQC:��A�
!cloudkms.googleapis.com/PublicKey�projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}/publicKey"�
	ImportJob
name (	B�AJ
import_method (2+.google.cloud.kms.v1.ImportJob.ImportMethodB�A�AF
protection_level	 (2$.google.cloud.kms.v1.ProtectionLevelB�A�A4
create_time (2.google.protobuf.TimestampB�A6
generate_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�A:
expire_event_time
 (2.google.protobuf.TimestampB�AA
state (2-.google.cloud.kms.v1.ImportJob.ImportJobStateB�AI

public_key (20.google.cloud.kms.v1.ImportJob.WrappingPublicKeyB�AF
attestation (2,.google.cloud.kms.v1.KeyOperationAttestationB�A 
WrappingPublicKey
pem (	"�
ImportMethod
IMPORT_METHOD_UNSPECIFIED 
RSA_OAEP_3072_SHA1_AES_256
RSA_OAEP_4096_SHA1_AES_256 
RSA_OAEP_3072_SHA256_AES_256 
RSA_OAEP_4096_SHA256_AES_256
RSA_OAEP_3072_SHA256
RSA_OAEP_4096_SHA256"c
ImportJobState 
IMPORT_JOB_STATE_UNSPECIFIED 
PENDING_GENERATION

ACTIVE
EXPIRED:{�Ax
!cloudkms.googleapis.com/ImportJobSprojects/{project}/locations/{location}/keyRings/{key_ring}/importJobs/{import_job}"[
ExternalProtectionLevelOptions
external_key_uri (	
ekm_connection_key_path (	"b
KeyAccessJustificationsPolicyA
allowed_access_reasons (2!.google.cloud.kms.v1.AccessReason*j
ProtectionLevel 
PROTECTION_LEVEL_UNSPECIFIED 
SOFTWARE
HSM
EXTERNAL
EXTERNAL_VPC*�
AccessReason
REASON_UNSPECIFIED 
CUSTOMER_INITIATED_SUPPORT
GOOGLE_INITIATED_SERVICE
THIRD_PARTY_DATA_REQUEST
GOOGLE_INITIATED_REVIEW
CUSTOMER_INITIATED_ACCESS%
!GOOGLE_INITIATED_SYSTEM_OPERATION
REASON_NOT_EXPECTED&
"MODIFIED_CUSTOMER_INITIATED_ACCESS.
*MODIFIED_GOOGLE_INITIATED_SYSTEM_OPERATION	\'
#GOOGLE_RESPONSE_TO_PRODUCTION_ALERT
*
&CUSTOMER_AUTHORIZED_WORKFLOW_SERVICINGB�
com.google.cloud.kms.v1BKmsResourcesProtoPZ)cloud.google.com/go/kms/apiv1/kmspb;kmspb�Google.Cloud.Kms.V1�Google\\Cloud\\Kms\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

