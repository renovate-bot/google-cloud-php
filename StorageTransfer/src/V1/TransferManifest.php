<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies where the manifest is located.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.TransferManifest</code>
 */
class TransferManifest extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the path to the manifest in Cloud Storage. The Google-managed
     * service account for the transfer must have `storage.objects.get`
     * permission for this object. An example path is
     * `gs://bucket_name/path/manifest.csv`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    protected $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Specifies the path to the manifest in Cloud Storage. The Google-managed
     *           service account for the transfer must have `storage.objects.get`
     *           permission for this object. An example path is
     *           `gs://bucket_name/path/manifest.csv`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the path to the manifest in Cloud Storage. The Google-managed
     * service account for the transfer must have `storage.objects.get`
     * permission for this object. An example path is
     * `gs://bucket_name/path/manifest.csv`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Specifies the path to the manifest in Cloud Storage. The Google-managed
     * service account for the transfer must have `storage.objects.get`
     * permission for this object. An example path is
     * `gs://bucket_name/path/manifest.csv`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

