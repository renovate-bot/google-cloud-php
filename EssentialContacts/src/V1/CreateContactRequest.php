<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/essentialcontacts/v1/service.proto

namespace Google\Cloud\EssentialContacts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the CreateContact method.
 *
 * Generated from protobuf message <code>google.cloud.essentialcontacts.v1.CreateContactRequest</code>
 */
class CreateContactRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource to save this contact for.
     * Format: organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The contact to create. Must specify an email address and language
     * tag.
     *
     * Generated from protobuf field <code>.google.cloud.essentialcontacts.v1.Contact contact = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $contact = null;

    /**
     * @param string                                     $parent  Required. The resource to save this contact for.
     *                                                            Format: organizations/{organization_id}, folders/{folder_id} or
     *                                                            projects/{project_id}
     *                                                            Please see {@see EssentialContactsServiceClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\EssentialContacts\V1\Contact $contact Required. The contact to create. Must specify an email address and language
     *                                                            tag.
     *
     * @return \Google\Cloud\EssentialContacts\V1\CreateContactRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\EssentialContacts\V1\Contact $contact): self
    {
        return (new self())
            ->setParent($parent)
            ->setContact($contact);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource to save this contact for.
     *           Format: organizations/{organization_id}, folders/{folder_id} or
     *           projects/{project_id}
     *     @type \Google\Cloud\EssentialContacts\V1\Contact $contact
     *           Required. The contact to create. Must specify an email address and language
     *           tag.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Essentialcontacts\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource to save this contact for.
     * Format: organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource to save this contact for.
     * Format: organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The contact to create. Must specify an email address and language
     * tag.
     *
     * Generated from protobuf field <code>.google.cloud.essentialcontacts.v1.Contact contact = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\EssentialContacts\V1\Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    public function hasContact()
    {
        return isset($this->contact);
    }

    public function clearContact()
    {
        unset($this->contact);
    }

    /**
     * Required. The contact to create. Must specify an email address and language
     * tag.
     *
     * Generated from protobuf field <code>.google.cloud.essentialcontacts.v1.Contact contact = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\EssentialContacts\V1\Contact $var
     * @return $this
     */
    public function setContact($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\EssentialContacts\V1\Contact::class);
        $this->contact = $var;

        return $this;
    }

}

