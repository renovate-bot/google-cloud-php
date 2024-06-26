<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Errors pertaining to the installation of Config Sync
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.ConfigSyncError</code>
 */
class ConfigSyncError extends \Google\Protobuf\Internal\Message
{
    /**
     * A string representing the user facing error message
     *
     * Generated from protobuf field <code>string error_message = 1;</code>
     */
    protected $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $error_message
     *           A string representing the user facing error message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * A string representing the user facing error message
     *
     * Generated from protobuf field <code>string error_message = 1;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * A string representing the user facing error message
     *
     * Generated from protobuf field <code>string error_message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}

