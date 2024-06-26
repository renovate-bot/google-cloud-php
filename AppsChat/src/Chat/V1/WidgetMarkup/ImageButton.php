<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/widgets.proto

namespace Google\Apps\Chat\V1\WidgetMarkup;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An image button with an `onclick` action.
 *
 * Generated from protobuf message <code>google.chat.v1.WidgetMarkup.ImageButton</code>
 */
class ImageButton extends \Google\Protobuf\Internal\Message
{
    /**
     * The `onclick` action.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.OnClick on_click = 2;</code>
     */
    protected $on_click = null;
    /**
     * The name of this `image_button` that's used for accessibility.
     * Default value is provided if this name isn't specified.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    protected $icons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $icon
     *           The icon specified by an `enum` that indices to an icon provided by
     *           Chat API.
     *     @type string $icon_url
     *           The icon specified by a URL.
     *     @type \Google\Apps\Chat\V1\WidgetMarkup\OnClick $on_click
     *           The `onclick` action.
     *     @type string $name
     *           The name of this `image_button` that's used for accessibility.
     *           Default value is provided if this name isn't specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Widgets::initOnce();
        parent::__construct($data);
    }

    /**
     * The icon specified by an `enum` that indices to an icon provided by
     * Chat API.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.Icon icon = 1;</code>
     * @return int
     */
    public function getIcon()
    {
        return $this->readOneof(1);
    }

    public function hasIcon()
    {
        return $this->hasOneof(1);
    }

    /**
     * The icon specified by an `enum` that indices to an icon provided by
     * Chat API.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.Icon icon = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\WidgetMarkup\Icon::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The icon specified by a URL.
     *
     * Generated from protobuf field <code>string icon_url = 3;</code>
     * @return string
     */
    public function getIconUrl()
    {
        return $this->readOneof(3);
    }

    public function hasIconUrl()
    {
        return $this->hasOneof(3);
    }

    /**
     * The icon specified by a URL.
     *
     * Generated from protobuf field <code>string icon_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIconUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The `onclick` action.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.OnClick on_click = 2;</code>
     * @return \Google\Apps\Chat\V1\WidgetMarkup\OnClick|null
     */
    public function getOnClick()
    {
        return $this->on_click;
    }

    public function hasOnClick()
    {
        return isset($this->on_click);
    }

    public function clearOnClick()
    {
        unset($this->on_click);
    }

    /**
     * The `onclick` action.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.OnClick on_click = 2;</code>
     * @param \Google\Apps\Chat\V1\WidgetMarkup\OnClick $var
     * @return $this
     */
    public function setOnClick($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\WidgetMarkup\OnClick::class);
        $this->on_click = $var;

        return $this;
    }

    /**
     * The name of this `image_button` that's used for accessibility.
     * Default value is provided if this name isn't specified.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this `image_button` that's used for accessibility.
     * Default value is provided if this name isn't specified.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcons()
    {
        return $this->whichOneof("icons");
    }

}


