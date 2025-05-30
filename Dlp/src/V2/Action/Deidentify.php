<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create a de-identified copy of a storage bucket. Only compatible
 * with Cloud Storage buckets.
 * A TransformationDetail will be created for each transformation.
 * Compatible with: Inspection of Cloud Storage
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Action.Deidentify</code>
 */
class Deidentify extends \Google\Protobuf\Internal\Message
{
    /**
     * User specified deidentify templates and configs for structured,
     * unstructured, and image files.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationConfig transformation_config = 7;</code>
     */
    protected $transformation_config = null;
    /**
     * Config for storing transformation details.
     * This field specifies the configuration for storing detailed metadata
     * about each transformation performed during a de-identification process.
     * The metadata is stored separately from the de-identified content itself
     * and provides a granular record of both successful transformations and any
     * failures that occurred.
     * Enabling this configuration is essential for users who need to access
     * comprehensive information about the status, outcome, and specifics of
     * each transformation. The details are captured in the
     * [TransformationDetails][google.privacy.dlp.v2.TransformationDetails]
     * message for each operation.
     * Key use cases:
     * * **Auditing and compliance**
     *     * Provides a verifiable audit trail of de-identification activities,
     *     which is crucial for meeting regulatory requirements and internal
     *     data governance policies.
     *     * Logs what data was transformed, what transformations were applied,
     *     when they occurred, and their success status. This helps
     *     demonstrate accountability and due diligence in protecting
     *     sensitive data.
     * * **Troubleshooting and debugging**
     *     * Offers detailed error messages and context if a transformation
     *     fails. This information is useful for diagnosing and resolving
     *     issues in the de-identification pipeline.
     *     * Helps pinpoint the exact location and nature of failures, speeding
     *     up the debugging process.
     * * **Process verification and quality assurance**
     *     * Allows users to confirm that de-identification rules and
     *     transformations were applied correctly and consistently across
     *     the dataset as intended.
     *     * Helps in verifying the effectiveness of the chosen
     *     de-identification strategies.
     * * **Data lineage and impact analysis**
     *     * Creates a record of how data elements were modified, contributing
     *     to data lineage. This is useful for understanding the provenance
     *     of de-identified data.
     *     * Aids in assessing the potential impact of de-identification choices
     *     on downstream analytical processes or data usability.
     * * **Reporting and operational insights**
     *     * You can analyze the metadata stored in a queryable BigQuery table
     *     to generate reports on transformation success rates, common
     *     error types, processing volumes (e.g., transformedBytes), and the
     *     types of transformations applied.
     *     * These insights can inform optimization of de-identification
     *     configurations and resource planning.
     * To take advantage of these benefits, set this configuration. The stored
     * details include a description of the transformation, success or
     * error codes, error messages, the number of bytes transformed, the
     * location of the transformed content, and identifiers for the job and
     * source data.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationDetailsStorageConfig transformation_details_storage_config = 3;</code>
     */
    protected $transformation_details_storage_config = null;
    /**
     * List of user-specified file type groups to transform. If specified, only
     * the files with these file types will be transformed. If empty, all
     * supported files will be transformed. Supported types may be automatically
     * added over time. If a file type is set in this field that isn't supported
     * by the Deidentify action then the job will fail and will not be
     * successfully created/started. Currently the only file types supported
     * are: IMAGES, TEXT_FILES, CSV, TSV.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileType file_types_to_transform = 8;</code>
     */
    private $file_types_to_transform;
    protected $output;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\TransformationConfig $transformation_config
     *           User specified deidentify templates and configs for structured,
     *           unstructured, and image files.
     *     @type \Google\Cloud\Dlp\V2\TransformationDetailsStorageConfig $transformation_details_storage_config
     *           Config for storing transformation details.
     *           This field specifies the configuration for storing detailed metadata
     *           about each transformation performed during a de-identification process.
     *           The metadata is stored separately from the de-identified content itself
     *           and provides a granular record of both successful transformations and any
     *           failures that occurred.
     *           Enabling this configuration is essential for users who need to access
     *           comprehensive information about the status, outcome, and specifics of
     *           each transformation. The details are captured in the
     *           [TransformationDetails][google.privacy.dlp.v2.TransformationDetails]
     *           message for each operation.
     *           Key use cases:
     *           * **Auditing and compliance**
     *               * Provides a verifiable audit trail of de-identification activities,
     *               which is crucial for meeting regulatory requirements and internal
     *               data governance policies.
     *               * Logs what data was transformed, what transformations were applied,
     *               when they occurred, and their success status. This helps
     *               demonstrate accountability and due diligence in protecting
     *               sensitive data.
     *           * **Troubleshooting and debugging**
     *               * Offers detailed error messages and context if a transformation
     *               fails. This information is useful for diagnosing and resolving
     *               issues in the de-identification pipeline.
     *               * Helps pinpoint the exact location and nature of failures, speeding
     *               up the debugging process.
     *           * **Process verification and quality assurance**
     *               * Allows users to confirm that de-identification rules and
     *               transformations were applied correctly and consistently across
     *               the dataset as intended.
     *               * Helps in verifying the effectiveness of the chosen
     *               de-identification strategies.
     *           * **Data lineage and impact analysis**
     *               * Creates a record of how data elements were modified, contributing
     *               to data lineage. This is useful for understanding the provenance
     *               of de-identified data.
     *               * Aids in assessing the potential impact of de-identification choices
     *               on downstream analytical processes or data usability.
     *           * **Reporting and operational insights**
     *               * You can analyze the metadata stored in a queryable BigQuery table
     *               to generate reports on transformation success rates, common
     *               error types, processing volumes (e.g., transformedBytes), and the
     *               types of transformations applied.
     *               * These insights can inform optimization of de-identification
     *               configurations and resource planning.
     *           To take advantage of these benefits, set this configuration. The stored
     *           details include a description of the transformation, success or
     *           error codes, error messages, the number of bytes transformed, the
     *           location of the transformed content, and identifiers for the job and
     *           source data.
     *     @type string $cloud_storage_output
     *           Required. User settable Cloud Storage bucket and folders to store
     *           de-identified files. This field must be set for Cloud Storage
     *           deidentification. The output Cloud Storage bucket must be different
     *           from the input bucket. De-identified files will overwrite files in the
     *           output path.
     *           Form of: gs://bucket/folder/ or gs://bucket
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $file_types_to_transform
     *           List of user-specified file type groups to transform. If specified, only
     *           the files with these file types will be transformed. If empty, all
     *           supported files will be transformed. Supported types may be automatically
     *           added over time. If a file type is set in this field that isn't supported
     *           by the Deidentify action then the job will fail and will not be
     *           successfully created/started. Currently the only file types supported
     *           are: IMAGES, TEXT_FILES, CSV, TSV.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * User specified deidentify templates and configs for structured,
     * unstructured, and image files.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationConfig transformation_config = 7;</code>
     * @return \Google\Cloud\Dlp\V2\TransformationConfig|null
     */
    public function getTransformationConfig()
    {
        return $this->transformation_config;
    }

    public function hasTransformationConfig()
    {
        return isset($this->transformation_config);
    }

    public function clearTransformationConfig()
    {
        unset($this->transformation_config);
    }

    /**
     * User specified deidentify templates and configs for structured,
     * unstructured, and image files.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationConfig transformation_config = 7;</code>
     * @param \Google\Cloud\Dlp\V2\TransformationConfig $var
     * @return $this
     */
    public function setTransformationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\TransformationConfig::class);
        $this->transformation_config = $var;

        return $this;
    }

    /**
     * Config for storing transformation details.
     * This field specifies the configuration for storing detailed metadata
     * about each transformation performed during a de-identification process.
     * The metadata is stored separately from the de-identified content itself
     * and provides a granular record of both successful transformations and any
     * failures that occurred.
     * Enabling this configuration is essential for users who need to access
     * comprehensive information about the status, outcome, and specifics of
     * each transformation. The details are captured in the
     * [TransformationDetails][google.privacy.dlp.v2.TransformationDetails]
     * message for each operation.
     * Key use cases:
     * * **Auditing and compliance**
     *     * Provides a verifiable audit trail of de-identification activities,
     *     which is crucial for meeting regulatory requirements and internal
     *     data governance policies.
     *     * Logs what data was transformed, what transformations were applied,
     *     when they occurred, and their success status. This helps
     *     demonstrate accountability and due diligence in protecting
     *     sensitive data.
     * * **Troubleshooting and debugging**
     *     * Offers detailed error messages and context if a transformation
     *     fails. This information is useful for diagnosing and resolving
     *     issues in the de-identification pipeline.
     *     * Helps pinpoint the exact location and nature of failures, speeding
     *     up the debugging process.
     * * **Process verification and quality assurance**
     *     * Allows users to confirm that de-identification rules and
     *     transformations were applied correctly and consistently across
     *     the dataset as intended.
     *     * Helps in verifying the effectiveness of the chosen
     *     de-identification strategies.
     * * **Data lineage and impact analysis**
     *     * Creates a record of how data elements were modified, contributing
     *     to data lineage. This is useful for understanding the provenance
     *     of de-identified data.
     *     * Aids in assessing the potential impact of de-identification choices
     *     on downstream analytical processes or data usability.
     * * **Reporting and operational insights**
     *     * You can analyze the metadata stored in a queryable BigQuery table
     *     to generate reports on transformation success rates, common
     *     error types, processing volumes (e.g., transformedBytes), and the
     *     types of transformations applied.
     *     * These insights can inform optimization of de-identification
     *     configurations and resource planning.
     * To take advantage of these benefits, set this configuration. The stored
     * details include a description of the transformation, success or
     * error codes, error messages, the number of bytes transformed, the
     * location of the transformed content, and identifiers for the job and
     * source data.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationDetailsStorageConfig transformation_details_storage_config = 3;</code>
     * @return \Google\Cloud\Dlp\V2\TransformationDetailsStorageConfig|null
     */
    public function getTransformationDetailsStorageConfig()
    {
        return $this->transformation_details_storage_config;
    }

    public function hasTransformationDetailsStorageConfig()
    {
        return isset($this->transformation_details_storage_config);
    }

    public function clearTransformationDetailsStorageConfig()
    {
        unset($this->transformation_details_storage_config);
    }

    /**
     * Config for storing transformation details.
     * This field specifies the configuration for storing detailed metadata
     * about each transformation performed during a de-identification process.
     * The metadata is stored separately from the de-identified content itself
     * and provides a granular record of both successful transformations and any
     * failures that occurred.
     * Enabling this configuration is essential for users who need to access
     * comprehensive information about the status, outcome, and specifics of
     * each transformation. The details are captured in the
     * [TransformationDetails][google.privacy.dlp.v2.TransformationDetails]
     * message for each operation.
     * Key use cases:
     * * **Auditing and compliance**
     *     * Provides a verifiable audit trail of de-identification activities,
     *     which is crucial for meeting regulatory requirements and internal
     *     data governance policies.
     *     * Logs what data was transformed, what transformations were applied,
     *     when they occurred, and their success status. This helps
     *     demonstrate accountability and due diligence in protecting
     *     sensitive data.
     * * **Troubleshooting and debugging**
     *     * Offers detailed error messages and context if a transformation
     *     fails. This information is useful for diagnosing and resolving
     *     issues in the de-identification pipeline.
     *     * Helps pinpoint the exact location and nature of failures, speeding
     *     up the debugging process.
     * * **Process verification and quality assurance**
     *     * Allows users to confirm that de-identification rules and
     *     transformations were applied correctly and consistently across
     *     the dataset as intended.
     *     * Helps in verifying the effectiveness of the chosen
     *     de-identification strategies.
     * * **Data lineage and impact analysis**
     *     * Creates a record of how data elements were modified, contributing
     *     to data lineage. This is useful for understanding the provenance
     *     of de-identified data.
     *     * Aids in assessing the potential impact of de-identification choices
     *     on downstream analytical processes or data usability.
     * * **Reporting and operational insights**
     *     * You can analyze the metadata stored in a queryable BigQuery table
     *     to generate reports on transformation success rates, common
     *     error types, processing volumes (e.g., transformedBytes), and the
     *     types of transformations applied.
     *     * These insights can inform optimization of de-identification
     *     configurations and resource planning.
     * To take advantage of these benefits, set this configuration. The stored
     * details include a description of the transformation, success or
     * error codes, error messages, the number of bytes transformed, the
     * location of the transformed content, and identifiers for the job and
     * source data.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationDetailsStorageConfig transformation_details_storage_config = 3;</code>
     * @param \Google\Cloud\Dlp\V2\TransformationDetailsStorageConfig $var
     * @return $this
     */
    public function setTransformationDetailsStorageConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\TransformationDetailsStorageConfig::class);
        $this->transformation_details_storage_config = $var;

        return $this;
    }

    /**
     * Required. User settable Cloud Storage bucket and folders to store
     * de-identified files. This field must be set for Cloud Storage
     * deidentification. The output Cloud Storage bucket must be different
     * from the input bucket. De-identified files will overwrite files in the
     * output path.
     * Form of: gs://bucket/folder/ or gs://bucket
     *
     * Generated from protobuf field <code>string cloud_storage_output = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCloudStorageOutput()
    {
        return $this->readOneof(9);
    }

    public function hasCloudStorageOutput()
    {
        return $this->hasOneof(9);
    }

    /**
     * Required. User settable Cloud Storage bucket and folders to store
     * de-identified files. This field must be set for Cloud Storage
     * deidentification. The output Cloud Storage bucket must be different
     * from the input bucket. De-identified files will overwrite files in the
     * output path.
     * Form of: gs://bucket/folder/ or gs://bucket
     *
     * Generated from protobuf field <code>string cloud_storage_output = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCloudStorageOutput($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * List of user-specified file type groups to transform. If specified, only
     * the files with these file types will be transformed. If empty, all
     * supported files will be transformed. Supported types may be automatically
     * added over time. If a file type is set in this field that isn't supported
     * by the Deidentify action then the job will fail and will not be
     * successfully created/started. Currently the only file types supported
     * are: IMAGES, TEXT_FILES, CSV, TSV.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileType file_types_to_transform = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileTypesToTransform()
    {
        return $this->file_types_to_transform;
    }

    /**
     * List of user-specified file type groups to transform. If specified, only
     * the files with these file types will be transformed. If empty, all
     * supported files will be transformed. Supported types may be automatically
     * added over time. If a file type is set in this field that isn't supported
     * by the Deidentify action then the job will fail and will not be
     * successfully created/started. Currently the only file types supported
     * are: IMAGES, TEXT_FILES, CSV, TSV.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileType file_types_to_transform = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileTypesToTransform($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dlp\V2\FileType::class);
        $this->file_types_to_transform = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->whichOneof("output");
    }

}


