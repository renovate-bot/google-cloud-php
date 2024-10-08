<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An AwsS3Data resource can be a data source, but not a data sink.
 * In an AwsS3Data resource, an object's name is the S3 object's key name.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.AwsS3Data</code>
 */
class AwsS3Data extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. S3 Bucket name (see
     * [Creating a
     * bucket](https://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     *
     * Generated from protobuf field <code>string bucket_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $bucket_name = '';
    /**
     * Input only. AWS access key used to sign the API requests to the AWS S3
     * bucket. Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * For information on our data retention policy for user credentials, see
     * [User credentials](/storage-transfer/docs/data-retention#user-credentials).
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $aws_access_key = null;
    /**
     * Root path to transfer objects.
     * Must be an empty string or full path name that ends with a '/'. This field
     * is treated as an object prefix. As such, it should generally not begin with
     * a '/'.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     */
    protected $path = '';
    /**
     * The Amazon Resource Name (ARN) of the role to support temporary
     * credentials via `AssumeRoleWithWebIdentity`. For more information about
     * ARNs, see [IAM
     * ARNs](https://docs.aws.amazon.com/IAM/latest/UserGuide/reference_identifiers.html#identifiers-arns).
     * When a role ARN is provided, Transfer Service fetches temporary
     * credentials for the session using a `AssumeRoleWithWebIdentity` call for
     * the provided role using the
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] for
     * this project.
     *
     * Generated from protobuf field <code>string role_arn = 4;</code>
     */
    protected $role_arn = '';
    /**
     * Optional. The CloudFront distribution domain name pointing to this bucket,
     * to use when fetching.
     * See
     * [Transfer from S3 via
     * CloudFront](https://cloud.google.com/storage-transfer/docs/s3-cloudfront)
     * for more information.
     * Format: `https://{id}.cloudfront.net` or any valid custom domain. Must
     * begin with `https://`.
     *
     * Generated from protobuf field <code>string cloudfront_domain = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cloudfront_domain = '';
    /**
     * Optional. The Resource name of a secret in Secret Manager.
     * AWS credentials must be stored in Secret Manager in JSON format:
     * {
     *  "access_key_id": "ACCESS_KEY_ID",
     *  "secret_access_key": "SECRET_ACCESS_KEY"
     * }
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     * be granted `roles/secretmanager.secretAccessor` for the resource.
     * See [Configure access to a source: Amazon S3]
     * (https://cloud.google.com/storage-transfer/docs/source-amazon-s3#secret_manager)
     * for more information.
     * If `credentials_secret` is specified, do not specify
     * [role_arn][google.storagetransfer.v1.AwsS3Data.role_arn] or
     * [aws_access_key][google.storagetransfer.v1.AwsS3Data.aws_access_key].
     * Format: `projects/{project_number}/secrets/{secret_name}`
     *
     * Generated from protobuf field <code>string credentials_secret = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $credentials_secret = '';
    protected $private_network;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *           Required. S3 Bucket name (see
     *           [Creating a
     *           bucket](https://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     *     @type \Google\Cloud\StorageTransfer\V1\AwsAccessKey $aws_access_key
     *           Input only. AWS access key used to sign the API requests to the AWS S3
     *           bucket. Permissions on the bucket must be granted to the access ID of the
     *           AWS access key.
     *           For information on our data retention policy for user credentials, see
     *           [User credentials](/storage-transfer/docs/data-retention#user-credentials).
     *     @type string $path
     *           Root path to transfer objects.
     *           Must be an empty string or full path name that ends with a '/'. This field
     *           is treated as an object prefix. As such, it should generally not begin with
     *           a '/'.
     *     @type string $role_arn
     *           The Amazon Resource Name (ARN) of the role to support temporary
     *           credentials via `AssumeRoleWithWebIdentity`. For more information about
     *           ARNs, see [IAM
     *           ARNs](https://docs.aws.amazon.com/IAM/latest/UserGuide/reference_identifiers.html#identifiers-arns).
     *           When a role ARN is provided, Transfer Service fetches temporary
     *           credentials for the session using a `AssumeRoleWithWebIdentity` call for
     *           the provided role using the
     *           [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] for
     *           this project.
     *     @type string $cloudfront_domain
     *           Optional. The CloudFront distribution domain name pointing to this bucket,
     *           to use when fetching.
     *           See
     *           [Transfer from S3 via
     *           CloudFront](https://cloud.google.com/storage-transfer/docs/s3-cloudfront)
     *           for more information.
     *           Format: `https://{id}.cloudfront.net` or any valid custom domain. Must
     *           begin with `https://`.
     *     @type string $credentials_secret
     *           Optional. The Resource name of a secret in Secret Manager.
     *           AWS credentials must be stored in Secret Manager in JSON format:
     *           {
     *            "access_key_id": "ACCESS_KEY_ID",
     *            "secret_access_key": "SECRET_ACCESS_KEY"
     *           }
     *           [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     *           be granted `roles/secretmanager.secretAccessor` for the resource.
     *           See [Configure access to a source: Amazon S3]
     *           (https://cloud.google.com/storage-transfer/docs/source-amazon-s3#secret_manager)
     *           for more information.
     *           If `credentials_secret` is specified, do not specify
     *           [role_arn][google.storagetransfer.v1.AwsS3Data.role_arn] or
     *           [aws_access_key][google.storagetransfer.v1.AwsS3Data.aws_access_key].
     *           Format: `projects/{project_number}/secrets/{secret_name}`
     *     @type bool $managed_private_network
     *           Egress bytes over a Google-managed private network.
     *           This network is shared between other users of Storage Transfer Service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. S3 Bucket name (see
     * [Creating a
     * bucket](https://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     *
     * Generated from protobuf field <code>string bucket_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * Required. S3 Bucket name (see
     * [Creating a
     * bucket](https://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     *
     * Generated from protobuf field <code>string bucket_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * Input only. AWS access key used to sign the API requests to the AWS S3
     * bucket. Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * For information on our data retention policy for user credentials, see
     * [User credentials](/storage-transfer/docs/data-retention#user-credentials).
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Cloud\StorageTransfer\V1\AwsAccessKey|null
     */
    public function getAwsAccessKey()
    {
        return $this->aws_access_key;
    }

    public function hasAwsAccessKey()
    {
        return isset($this->aws_access_key);
    }

    public function clearAwsAccessKey()
    {
        unset($this->aws_access_key);
    }

    /**
     * Input only. AWS access key used to sign the API requests to the AWS S3
     * bucket. Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * For information on our data retention policy for user credentials, see
     * [User credentials](/storage-transfer/docs/data-retention#user-credentials).
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\StorageTransfer\V1\AwsAccessKey $var
     * @return $this
     */
    public function setAwsAccessKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AwsAccessKey::class);
        $this->aws_access_key = $var;

        return $this;
    }

    /**
     * Root path to transfer objects.
     * Must be an empty string or full path name that ends with a '/'. This field
     * is treated as an object prefix. As such, it should generally not begin with
     * a '/'.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Root path to transfer objects.
     * Must be an empty string or full path name that ends with a '/'. This field
     * is treated as an object prefix. As such, it should generally not begin with
     * a '/'.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * The Amazon Resource Name (ARN) of the role to support temporary
     * credentials via `AssumeRoleWithWebIdentity`. For more information about
     * ARNs, see [IAM
     * ARNs](https://docs.aws.amazon.com/IAM/latest/UserGuide/reference_identifiers.html#identifiers-arns).
     * When a role ARN is provided, Transfer Service fetches temporary
     * credentials for the session using a `AssumeRoleWithWebIdentity` call for
     * the provided role using the
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] for
     * this project.
     *
     * Generated from protobuf field <code>string role_arn = 4;</code>
     * @return string
     */
    public function getRoleArn()
    {
        return $this->role_arn;
    }

    /**
     * The Amazon Resource Name (ARN) of the role to support temporary
     * credentials via `AssumeRoleWithWebIdentity`. For more information about
     * ARNs, see [IAM
     * ARNs](https://docs.aws.amazon.com/IAM/latest/UserGuide/reference_identifiers.html#identifiers-arns).
     * When a role ARN is provided, Transfer Service fetches temporary
     * credentials for the session using a `AssumeRoleWithWebIdentity` call for
     * the provided role using the
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] for
     * this project.
     *
     * Generated from protobuf field <code>string role_arn = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRoleArn($var)
    {
        GPBUtil::checkString($var, True);
        $this->role_arn = $var;

        return $this;
    }

    /**
     * Optional. The CloudFront distribution domain name pointing to this bucket,
     * to use when fetching.
     * See
     * [Transfer from S3 via
     * CloudFront](https://cloud.google.com/storage-transfer/docs/s3-cloudfront)
     * for more information.
     * Format: `https://{id}.cloudfront.net` or any valid custom domain. Must
     * begin with `https://`.
     *
     * Generated from protobuf field <code>string cloudfront_domain = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCloudfrontDomain()
    {
        return $this->cloudfront_domain;
    }

    /**
     * Optional. The CloudFront distribution domain name pointing to this bucket,
     * to use when fetching.
     * See
     * [Transfer from S3 via
     * CloudFront](https://cloud.google.com/storage-transfer/docs/s3-cloudfront)
     * for more information.
     * Format: `https://{id}.cloudfront.net` or any valid custom domain. Must
     * begin with `https://`.
     *
     * Generated from protobuf field <code>string cloudfront_domain = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCloudfrontDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloudfront_domain = $var;

        return $this;
    }

    /**
     * Optional. The Resource name of a secret in Secret Manager.
     * AWS credentials must be stored in Secret Manager in JSON format:
     * {
     *  "access_key_id": "ACCESS_KEY_ID",
     *  "secret_access_key": "SECRET_ACCESS_KEY"
     * }
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     * be granted `roles/secretmanager.secretAccessor` for the resource.
     * See [Configure access to a source: Amazon S3]
     * (https://cloud.google.com/storage-transfer/docs/source-amazon-s3#secret_manager)
     * for more information.
     * If `credentials_secret` is specified, do not specify
     * [role_arn][google.storagetransfer.v1.AwsS3Data.role_arn] or
     * [aws_access_key][google.storagetransfer.v1.AwsS3Data.aws_access_key].
     * Format: `projects/{project_number}/secrets/{secret_name}`
     *
     * Generated from protobuf field <code>string credentials_secret = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCredentialsSecret()
    {
        return $this->credentials_secret;
    }

    /**
     * Optional. The Resource name of a secret in Secret Manager.
     * AWS credentials must be stored in Secret Manager in JSON format:
     * {
     *  "access_key_id": "ACCESS_KEY_ID",
     *  "secret_access_key": "SECRET_ACCESS_KEY"
     * }
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     * be granted `roles/secretmanager.secretAccessor` for the resource.
     * See [Configure access to a source: Amazon S3]
     * (https://cloud.google.com/storage-transfer/docs/source-amazon-s3#secret_manager)
     * for more information.
     * If `credentials_secret` is specified, do not specify
     * [role_arn][google.storagetransfer.v1.AwsS3Data.role_arn] or
     * [aws_access_key][google.storagetransfer.v1.AwsS3Data.aws_access_key].
     * Format: `projects/{project_number}/secrets/{secret_name}`
     *
     * Generated from protobuf field <code>string credentials_secret = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCredentialsSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->credentials_secret = $var;

        return $this;
    }

    /**
     * Egress bytes over a Google-managed private network.
     * This network is shared between other users of Storage Transfer Service.
     *
     * Generated from protobuf field <code>bool managed_private_network = 8;</code>
     * @return bool
     */
    public function getManagedPrivateNetwork()
    {
        return $this->readOneof(8);
    }

    public function hasManagedPrivateNetwork()
    {
        return $this->hasOneof(8);
    }

    /**
     * Egress bytes over a Google-managed private network.
     * This network is shared between other users of Storage Transfer Service.
     *
     * Generated from protobuf field <code>bool managed_private_network = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setManagedPrivateNetwork($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateNetwork()
    {
        return $this->whichOneof("private_network");
    }

}

