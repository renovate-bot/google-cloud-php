<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes an appliance version.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.ApplianceVersion</code>
 */
class ApplianceVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * The appliance version.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * A link for downloading the version.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * Determine whether it's critical to upgrade the appliance to this version.
     *
     * Generated from protobuf field <code>bool critical = 3;</code>
     */
    protected $critical = false;
    /**
     * Link to a page that contains the version release notes.
     *
     * Generated from protobuf field <code>string release_notes_uri = 4;</code>
     */
    protected $release_notes_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The appliance version.
     *     @type string $uri
     *           A link for downloading the version.
     *     @type bool $critical
     *           Determine whether it's critical to upgrade the appliance to this version.
     *     @type string $release_notes_uri
     *           Link to a page that contains the version release notes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * The appliance version.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The appliance version.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * A link for downloading the version.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * A link for downloading the version.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Determine whether it's critical to upgrade the appliance to this version.
     *
     * Generated from protobuf field <code>bool critical = 3;</code>
     * @return bool
     */
    public function getCritical()
    {
        return $this->critical;
    }

    /**
     * Determine whether it's critical to upgrade the appliance to this version.
     *
     * Generated from protobuf field <code>bool critical = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCritical($var)
    {
        GPBUtil::checkBool($var);
        $this->critical = $var;

        return $this;
    }

    /**
     * Link to a page that contains the version release notes.
     *
     * Generated from protobuf field <code>string release_notes_uri = 4;</code>
     * @return string
     */
    public function getReleaseNotesUri()
    {
        return $this->release_notes_uri;
    }

    /**
     * Link to a page that contains the version release notes.
     *
     * Generated from protobuf field <code>string release_notes_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setReleaseNotesUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->release_notes_uri = $var;

        return $this;
    }

}

