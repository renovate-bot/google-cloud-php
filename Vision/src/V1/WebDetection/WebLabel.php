<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/web_detection.proto

namespace Google\Cloud\Vision\V1\WebDetection;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Label to provide extra metadata for the web detection.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.WebDetection.WebLabel</code>
 */
class WebLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * Label for extra metadata.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     */
    protected $label = '';
    /**
     * The BCP-47 language code for `label`, such as "en-US" or "sr-Latn".
     * For more information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    protected $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $label
     *           Label for extra metadata.
     *     @type string $language_code
     *           The BCP-47 language code for `label`, such as "en-US" or "sr-Latn".
     *           For more information, see
     *           http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\WebDetection::initOnce();
        parent::__construct($data);
    }

    /**
     * Label for extra metadata.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Label for extra metadata.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * The BCP-47 language code for `label`, such as "en-US" or "sr-Latn".
     * For more information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The BCP-47 language code for `label`, such as "en-US" or "sr-Latn".
     * For more information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}


