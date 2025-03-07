<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta\SpaceConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines restrictions for features when the meeting is moderated.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions</code>
 */
class ModerationRestrictions extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines who has permission to send chat messages in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType chat_restriction = 1;</code>
     */
    protected $chat_restriction = 0;
    /**
     * Defines who has permission to send reactions in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType reaction_restriction = 2;</code>
     */
    protected $reaction_restriction = 0;
    /**
     * Defines who has permission to share their screen in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType present_restriction = 3;</code>
     */
    protected $present_restriction = 0;
    /**
     * Defines whether to restrict the default role assigned to users as viewer.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.DefaultJoinAsViewerType default_join_as_viewer_type = 4;</code>
     */
    protected $default_join_as_viewer_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $chat_restriction
     *           Defines who has permission to send chat messages in the meeting space.
     *     @type int $reaction_restriction
     *           Defines who has permission to send reactions in the meeting space.
     *     @type int $present_restriction
     *           Defines who has permission to share their screen in the meeting space.
     *     @type int $default_join_as_viewer_type
     *           Defines whether to restrict the default role assigned to users as viewer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines who has permission to send chat messages in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType chat_restriction = 1;</code>
     * @return int
     */
    public function getChatRestriction()
    {
        return $this->chat_restriction;
    }

    /**
     * Defines who has permission to send chat messages in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType chat_restriction = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChatRestriction($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Meet\V2beta\SpaceConfig\ModerationRestrictions\RestrictionType::class);
        $this->chat_restriction = $var;

        return $this;
    }

    /**
     * Defines who has permission to send reactions in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType reaction_restriction = 2;</code>
     * @return int
     */
    public function getReactionRestriction()
    {
        return $this->reaction_restriction;
    }

    /**
     * Defines who has permission to send reactions in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType reaction_restriction = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setReactionRestriction($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Meet\V2beta\SpaceConfig\ModerationRestrictions\RestrictionType::class);
        $this->reaction_restriction = $var;

        return $this;
    }

    /**
     * Defines who has permission to share their screen in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType present_restriction = 3;</code>
     * @return int
     */
    public function getPresentRestriction()
    {
        return $this->present_restriction;
    }

    /**
     * Defines who has permission to share their screen in the meeting space.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.RestrictionType present_restriction = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPresentRestriction($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Meet\V2beta\SpaceConfig\ModerationRestrictions\RestrictionType::class);
        $this->present_restriction = $var;

        return $this;
    }

    /**
     * Defines whether to restrict the default role assigned to users as viewer.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.DefaultJoinAsViewerType default_join_as_viewer_type = 4;</code>
     * @return int
     */
    public function getDefaultJoinAsViewerType()
    {
        return $this->default_join_as_viewer_type;
    }

    /**
     * Defines whether to restrict the default role assigned to users as viewer.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SpaceConfig.ModerationRestrictions.DefaultJoinAsViewerType default_join_as_viewer_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultJoinAsViewerType($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Meet\V2beta\SpaceConfig\ModerationRestrictions\DefaultJoinAsViewerType::class);
        $this->default_join_as_viewer_type = $var;

        return $this;
    }

}


