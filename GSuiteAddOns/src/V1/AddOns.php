<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gsuiteaddons/v1/gsuiteaddons.proto

namespace Google\Cloud\GSuiteAddOns\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Workspace add-on configuration.
 *
 * Generated from protobuf message <code>google.cloud.gsuiteaddons.v1.AddOns</code>
 */
class AddOns extends \Google\Protobuf\Internal\Message
{
    /**
     * Configuration that is common across all Google Workspace add-ons.
     *
     * Generated from protobuf field <code>.google.apps.script.type.CommonAddOnManifest common = 1;</code>
     */
    protected $common = null;
    /**
     * Gmail add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.gmail.GmailAddOnManifest gmail = 2;</code>
     */
    protected $gmail = null;
    /**
     * Drive add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.drive.DriveAddOnManifest drive = 5;</code>
     */
    protected $drive = null;
    /**
     * Calendar add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.calendar.CalendarAddOnManifest calendar = 6;</code>
     */
    protected $calendar = null;
    /**
     * Docs add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.docs.DocsAddOnManifest docs = 7;</code>
     */
    protected $docs = null;
    /**
     * Sheets add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.sheets.SheetsAddOnManifest sheets = 8;</code>
     */
    protected $sheets = null;
    /**
     * Slides add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.slides.SlidesAddOnManifest slides = 10;</code>
     */
    protected $slides = null;
    /**
     * Options for sending requests to add-on HTTP endpoints
     *
     * Generated from protobuf field <code>.google.apps.script.type.HttpOptions http_options = 15;</code>
     */
    protected $http_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Script\Type\CommonAddOnManifest $common
     *           Configuration that is common across all Google Workspace add-ons.
     *     @type \Google\Apps\Script\Type\Gmail\GmailAddOnManifest $gmail
     *           Gmail add-on configuration.
     *     @type \Google\Apps\Script\Type\Drive\DriveAddOnManifest $drive
     *           Drive add-on configuration.
     *     @type \Google\Apps\Script\Type\Calendar\CalendarAddOnManifest $calendar
     *           Calendar add-on configuration.
     *     @type \Google\Apps\Script\Type\Docs\DocsAddOnManifest $docs
     *           Docs add-on configuration.
     *     @type \Google\Apps\Script\Type\Sheets\SheetsAddOnManifest $sheets
     *           Sheets add-on configuration.
     *     @type \Google\Apps\Script\Type\Slides\SlidesAddOnManifest $slides
     *           Slides add-on configuration.
     *     @type \Google\Apps\Script\Type\HttpOptions $http_options
     *           Options for sending requests to add-on HTTP endpoints
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gsuiteaddons\V1\Gsuiteaddons::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration that is common across all Google Workspace add-ons.
     *
     * Generated from protobuf field <code>.google.apps.script.type.CommonAddOnManifest common = 1;</code>
     * @return \Google\Apps\Script\Type\CommonAddOnManifest|null
     */
    public function getCommon()
    {
        return $this->common;
    }

    public function hasCommon()
    {
        return isset($this->common);
    }

    public function clearCommon()
    {
        unset($this->common);
    }

    /**
     * Configuration that is common across all Google Workspace add-ons.
     *
     * Generated from protobuf field <code>.google.apps.script.type.CommonAddOnManifest common = 1;</code>
     * @param \Google\Apps\Script\Type\CommonAddOnManifest $var
     * @return $this
     */
    public function setCommon($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\CommonAddOnManifest::class);
        $this->common = $var;

        return $this;
    }

    /**
     * Gmail add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.gmail.GmailAddOnManifest gmail = 2;</code>
     * @return \Google\Apps\Script\Type\Gmail\GmailAddOnManifest|null
     */
    public function getGmail()
    {
        return $this->gmail;
    }

    public function hasGmail()
    {
        return isset($this->gmail);
    }

    public function clearGmail()
    {
        unset($this->gmail);
    }

    /**
     * Gmail add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.gmail.GmailAddOnManifest gmail = 2;</code>
     * @param \Google\Apps\Script\Type\Gmail\GmailAddOnManifest $var
     * @return $this
     */
    public function setGmail($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Gmail\GmailAddOnManifest::class);
        $this->gmail = $var;

        return $this;
    }

    /**
     * Drive add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.drive.DriveAddOnManifest drive = 5;</code>
     * @return \Google\Apps\Script\Type\Drive\DriveAddOnManifest|null
     */
    public function getDrive()
    {
        return $this->drive;
    }

    public function hasDrive()
    {
        return isset($this->drive);
    }

    public function clearDrive()
    {
        unset($this->drive);
    }

    /**
     * Drive add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.drive.DriveAddOnManifest drive = 5;</code>
     * @param \Google\Apps\Script\Type\Drive\DriveAddOnManifest $var
     * @return $this
     */
    public function setDrive($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Drive\DriveAddOnManifest::class);
        $this->drive = $var;

        return $this;
    }

    /**
     * Calendar add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.calendar.CalendarAddOnManifest calendar = 6;</code>
     * @return \Google\Apps\Script\Type\Calendar\CalendarAddOnManifest|null
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    public function hasCalendar()
    {
        return isset($this->calendar);
    }

    public function clearCalendar()
    {
        unset($this->calendar);
    }

    /**
     * Calendar add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.calendar.CalendarAddOnManifest calendar = 6;</code>
     * @param \Google\Apps\Script\Type\Calendar\CalendarAddOnManifest $var
     * @return $this
     */
    public function setCalendar($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Calendar\CalendarAddOnManifest::class);
        $this->calendar = $var;

        return $this;
    }

    /**
     * Docs add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.docs.DocsAddOnManifest docs = 7;</code>
     * @return \Google\Apps\Script\Type\Docs\DocsAddOnManifest|null
     */
    public function getDocs()
    {
        return $this->docs;
    }

    public function hasDocs()
    {
        return isset($this->docs);
    }

    public function clearDocs()
    {
        unset($this->docs);
    }

    /**
     * Docs add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.docs.DocsAddOnManifest docs = 7;</code>
     * @param \Google\Apps\Script\Type\Docs\DocsAddOnManifest $var
     * @return $this
     */
    public function setDocs($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Docs\DocsAddOnManifest::class);
        $this->docs = $var;

        return $this;
    }

    /**
     * Sheets add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.sheets.SheetsAddOnManifest sheets = 8;</code>
     * @return \Google\Apps\Script\Type\Sheets\SheetsAddOnManifest|null
     */
    public function getSheets()
    {
        return $this->sheets;
    }

    public function hasSheets()
    {
        return isset($this->sheets);
    }

    public function clearSheets()
    {
        unset($this->sheets);
    }

    /**
     * Sheets add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.sheets.SheetsAddOnManifest sheets = 8;</code>
     * @param \Google\Apps\Script\Type\Sheets\SheetsAddOnManifest $var
     * @return $this
     */
    public function setSheets($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Sheets\SheetsAddOnManifest::class);
        $this->sheets = $var;

        return $this;
    }

    /**
     * Slides add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.slides.SlidesAddOnManifest slides = 10;</code>
     * @return \Google\Apps\Script\Type\Slides\SlidesAddOnManifest|null
     */
    public function getSlides()
    {
        return $this->slides;
    }

    public function hasSlides()
    {
        return isset($this->slides);
    }

    public function clearSlides()
    {
        unset($this->slides);
    }

    /**
     * Slides add-on configuration.
     *
     * Generated from protobuf field <code>.google.apps.script.type.slides.SlidesAddOnManifest slides = 10;</code>
     * @param \Google\Apps\Script\Type\Slides\SlidesAddOnManifest $var
     * @return $this
     */
    public function setSlides($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Slides\SlidesAddOnManifest::class);
        $this->slides = $var;

        return $this;
    }

    /**
     * Options for sending requests to add-on HTTP endpoints
     *
     * Generated from protobuf field <code>.google.apps.script.type.HttpOptions http_options = 15;</code>
     * @return \Google\Apps\Script\Type\HttpOptions|null
     */
    public function getHttpOptions()
    {
        return $this->http_options;
    }

    public function hasHttpOptions()
    {
        return isset($this->http_options);
    }

    public function clearHttpOptions()
    {
        unset($this->http_options);
    }

    /**
     * Options for sending requests to add-on HTTP endpoints
     *
     * Generated from protobuf field <code>.google.apps.script.type.HttpOptions http_options = 15;</code>
     * @param \Google\Apps\Script\Type\HttpOptions $var
     * @return $this
     */
    public function setHttpOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\HttpOptions::class);
        $this->http_options = $var;

        return $this;
    }

}

