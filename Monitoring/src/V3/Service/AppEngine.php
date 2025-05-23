<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App Engine service. Learn more at https://cloud.google.com/appengine.
 *
 * Generated from protobuf message <code>google.monitoring.v3.Service.AppEngine</code>
 */
class AppEngine extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the App Engine module underlying this service. Corresponds to
     * the `module_id` resource label in the [`gae_app` monitored
     * resource](https://cloud.google.com/monitoring/api/resources#tag_gae_app).
     *
     * Generated from protobuf field <code>string module_id = 1;</code>
     */
    protected $module_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $module_id
     *           The ID of the App Engine module underlying this service. Corresponds to
     *           the `module_id` resource label in the [`gae_app` monitored
     *           resource](https://cloud.google.com/monitoring/api/resources#tag_gae_app).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the App Engine module underlying this service. Corresponds to
     * the `module_id` resource label in the [`gae_app` monitored
     * resource](https://cloud.google.com/monitoring/api/resources#tag_gae_app).
     *
     * Generated from protobuf field <code>string module_id = 1;</code>
     * @return string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * The ID of the App Engine module underlying this service. Corresponds to
     * the `module_id` resource label in the [`gae_app` monitored
     * resource](https://cloud.google.com/monitoring/api/resources#tag_gae_app).
     *
     * Generated from protobuf field <code>string module_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_id = $var;

        return $this;
    }

}


