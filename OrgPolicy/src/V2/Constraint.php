<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/constraint.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A constraint describes a way to restrict resource's configuration. For
 * example, you could enforce a constraint that controls which Google Cloud
 * services can be activated across an organization, or whether a Compute Engine
 * instance can have serial port connections established. Constraints can be
 * configured by the organization policy administrator to fit the needs of the
 * organization by setting a policy that includes constraints at different
 * locations in the organization's resource hierarchy. Policies are inherited
 * down the resource hierarchy from higher levels, but can also be overridden.
 * For details about the inheritance rules, see
 * [`Policy`][google.cloud.orgpolicy.v2.Policy].
 * Constraints have a default behavior determined by the `constraint_default`
 * field, which is the enforcement behavior that is used in the absence of a
 * policy being defined or inherited for the resource in question.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.Constraint</code>
 */
class Constraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the constraint. Must be in one of
     * the following forms:
     * * `projects/{project_number}/constraints/{constraint_name}`
     * * `folders/{folder_id}/constraints/{constraint_name}`
     * * `organizations/{organization_id}/constraints/{constraint_name}`
     * For example, "/projects/123/constraints/compute.disableSerialPortAccess".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * The human readable name.
     * Mutable.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Detailed description of what this constraint controls as well as how and
     * where it is enforced.
     * Mutable.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * The evaluation behavior of this constraint in the absence of a policy.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.Constraint.ConstraintDefault constraint_default = 4;</code>
     */
    protected $constraint_default = 0;
    /**
     * Shows if dry run is supported for this constraint or not.
     *
     * Generated from protobuf field <code>bool supports_dry_run = 7;</code>
     */
    protected $supports_dry_run = false;
    /**
     * Managed constraint and canned constraint sometimes can have
     * equivalents. This field is used to store the equivalent constraint name.
     *
     * Generated from protobuf field <code>string equivalent_constraint = 8;</code>
     */
    protected $equivalent_constraint = '';
    /**
     * Shows if simulation is supported for this constraint or not.
     *
     * Generated from protobuf field <code>bool supports_simulation = 9;</code>
     */
    protected $supports_simulation = false;
    protected $constraint_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name of the constraint. Must be in one of
     *           the following forms:
     *           * `projects/{project_number}/constraints/{constraint_name}`
     *           * `folders/{folder_id}/constraints/{constraint_name}`
     *           * `organizations/{organization_id}/constraints/{constraint_name}`
     *           For example, "/projects/123/constraints/compute.disableSerialPortAccess".
     *     @type string $display_name
     *           The human readable name.
     *           Mutable.
     *     @type string $description
     *           Detailed description of what this constraint controls as well as how and
     *           where it is enforced.
     *           Mutable.
     *     @type int $constraint_default
     *           The evaluation behavior of this constraint in the absence of a policy.
     *     @type \Google\Cloud\OrgPolicy\V2\Constraint\ListConstraint $list_constraint
     *           Defines this constraint as being a list constraint.
     *     @type \Google\Cloud\OrgPolicy\V2\Constraint\BooleanConstraint $boolean_constraint
     *           Defines this constraint as being a boolean constraint.
     *     @type bool $supports_dry_run
     *           Shows if dry run is supported for this constraint or not.
     *     @type string $equivalent_constraint
     *           Managed constraint and canned constraint sometimes can have
     *           equivalents. This field is used to store the equivalent constraint name.
     *     @type bool $supports_simulation
     *           Shows if simulation is supported for this constraint or not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Constraint::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the constraint. Must be in one of
     * the following forms:
     * * `projects/{project_number}/constraints/{constraint_name}`
     * * `folders/{folder_id}/constraints/{constraint_name}`
     * * `organizations/{organization_id}/constraints/{constraint_name}`
     * For example, "/projects/123/constraints/compute.disableSerialPortAccess".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the constraint. Must be in one of
     * the following forms:
     * * `projects/{project_number}/constraints/{constraint_name}`
     * * `folders/{folder_id}/constraints/{constraint_name}`
     * * `organizations/{organization_id}/constraints/{constraint_name}`
     * For example, "/projects/123/constraints/compute.disableSerialPortAccess".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * The human readable name.
     * Mutable.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The human readable name.
     * Mutable.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Detailed description of what this constraint controls as well as how and
     * where it is enforced.
     * Mutable.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Detailed description of what this constraint controls as well as how and
     * where it is enforced.
     * Mutable.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The evaluation behavior of this constraint in the absence of a policy.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.Constraint.ConstraintDefault constraint_default = 4;</code>
     * @return int
     */
    public function getConstraintDefault()
    {
        return $this->constraint_default;
    }

    /**
     * The evaluation behavior of this constraint in the absence of a policy.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.Constraint.ConstraintDefault constraint_default = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setConstraintDefault($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OrgPolicy\V2\Constraint\ConstraintDefault::class);
        $this->constraint_default = $var;

        return $this;
    }

    /**
     * Defines this constraint as being a list constraint.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.Constraint.ListConstraint list_constraint = 5;</code>
     * @return \Google\Cloud\OrgPolicy\V2\Constraint\ListConstraint|null
     */
    public function getListConstraint()
    {
        return $this->readOneof(5);
    }

    public function hasListConstraint()
    {
        return $this->hasOneof(5);
    }

    /**
     * Defines this constraint as being a list constraint.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.Constraint.ListConstraint list_constraint = 5;</code>
     * @param \Google\Cloud\OrgPolicy\V2\Constraint\ListConstraint $var
     * @return $this
     */
    public function setListConstraint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V2\Constraint\ListConstraint::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Defines this constraint as being a boolean constraint.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.Constraint.BooleanConstraint boolean_constraint = 6;</code>
     * @return \Google\Cloud\OrgPolicy\V2\Constraint\BooleanConstraint|null
     */
    public function getBooleanConstraint()
    {
        return $this->readOneof(6);
    }

    public function hasBooleanConstraint()
    {
        return $this->hasOneof(6);
    }

    /**
     * Defines this constraint as being a boolean constraint.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.Constraint.BooleanConstraint boolean_constraint = 6;</code>
     * @param \Google\Cloud\OrgPolicy\V2\Constraint\BooleanConstraint $var
     * @return $this
     */
    public function setBooleanConstraint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V2\Constraint\BooleanConstraint::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Shows if dry run is supported for this constraint or not.
     *
     * Generated from protobuf field <code>bool supports_dry_run = 7;</code>
     * @return bool
     */
    public function getSupportsDryRun()
    {
        return $this->supports_dry_run;
    }

    /**
     * Shows if dry run is supported for this constraint or not.
     *
     * Generated from protobuf field <code>bool supports_dry_run = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsDryRun($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_dry_run = $var;

        return $this;
    }

    /**
     * Managed constraint and canned constraint sometimes can have
     * equivalents. This field is used to store the equivalent constraint name.
     *
     * Generated from protobuf field <code>string equivalent_constraint = 8;</code>
     * @return string
     */
    public function getEquivalentConstraint()
    {
        return $this->equivalent_constraint;
    }

    /**
     * Managed constraint and canned constraint sometimes can have
     * equivalents. This field is used to store the equivalent constraint name.
     *
     * Generated from protobuf field <code>string equivalent_constraint = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setEquivalentConstraint($var)
    {
        GPBUtil::checkString($var, True);
        $this->equivalent_constraint = $var;

        return $this;
    }

    /**
     * Shows if simulation is supported for this constraint or not.
     *
     * Generated from protobuf field <code>bool supports_simulation = 9;</code>
     * @return bool
     */
    public function getSupportsSimulation()
    {
        return $this->supports_simulation;
    }

    /**
     * Shows if simulation is supported for this constraint or not.
     *
     * Generated from protobuf field <code>bool supports_simulation = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsSimulation($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_simulation = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getConstraintType()
    {
        return $this->whichOneof("constraint_type");
    }

}

