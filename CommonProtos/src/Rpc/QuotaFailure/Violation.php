<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc\QuotaFailure;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message type used to describe a single quota violation.  For example, a
 * daily quota or a custom quota that was exceeded.
 *
 * Generated from protobuf message <code>google.rpc.QuotaFailure.Violation</code>
 */
class Violation extends \Google\Protobuf\Internal\Message
{
    /**
     * The subject on which the quota check failed.
     * For example, "clientip:<ip address of client>" or "project:<Google
     * developer project id>".
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     */
    protected $subject = '';
    /**
     * A description of how the quota check failed. Clients can use this
     * description to find more about the quota configuration in the service's
     * public documentation, or find the relevant quota limit to adjust through
     * developer console.
     * For example: "Service disabled" or "Daily Limit for read operations
     * exceeded".
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * The API Service from which the `QuotaFailure.Violation` orginates. In
     * some cases, Quota issues originate from an API Service other than the one
     * that was called. In other words, a dependency of the called API Service
     * could be the cause of the `QuotaFailure`, and this field would have the
     * dependency API service name.
     * For example, if the called API is Kubernetes Engine API
     * (container.googleapis.com), and a quota violation occurs in the
     * Kubernetes Engine API itself, this field would be
     * "container.googleapis.com". On the other hand, if the quota violation
     * occurs when the Kubernetes Engine API creates VMs in the Compute Engine
     * API (compute.googleapis.com), this field would be
     * "compute.googleapis.com".
     *
     * Generated from protobuf field <code>string api_service = 3;</code>
     */
    protected $api_service = '';
    /**
     * The metric of the violated quota. A quota metric is a named counter to
     * measure usage, such as API requests or CPUs. When an activity occurs in a
     * service, such as Virtual Machine allocation, one or more quota metrics
     * may be affected.
     * For example, "compute.googleapis.com/cpus_per_vm_family",
     * "storage.googleapis.com/internet_egress_bandwidth".
     *
     * Generated from protobuf field <code>string quota_metric = 4;</code>
     */
    protected $quota_metric = '';
    /**
     * The id of the violated quota. Also know as "limit name", this is the
     * unique identifier of a quota in the context of an API service.
     * For example, "CPUS-PER-VM-FAMILY-per-project-region".
     *
     * Generated from protobuf field <code>string quota_id = 5;</code>
     */
    protected $quota_id = '';
    /**
     * The dimensions of the violated quota. Every non-global quota is enforced
     * on a set of dimensions. While quota metric defines what to count, the
     * dimensions specify for what aspects the counter should be increased.
     * For example, the quota "CPUs per region per VM family" enforces a limit
     * on the metric "compute.googleapis.com/cpus_per_vm_family" on dimensions
     * "region" and "vm_family". And if the violation occurred in region
     * "us-central1" and for VM family "n1", the quota_dimensions would be,
     * {
     *   "region": "us-central1",
     *   "vm_family": "n1",
     * }
     * When a quota is enforced globally, the quota_dimensions would always be
     * empty.
     *
     * Generated from protobuf field <code>map<string, string> quota_dimensions = 6;</code>
     */
    private $quota_dimensions;
    /**
     * The enforced quota value at the time of the `QuotaFailure`.
     * For example, if the enforced quota value at the time of the
     * `QuotaFailure` on the number of CPUs is "10", then the value of this
     * field would reflect this quantity.
     *
     * Generated from protobuf field <code>int64 quota_value = 7;</code>
     */
    protected $quota_value = 0;
    /**
     * The new quota value being rolled out at the time of the violation. At the
     * completion of the rollout, this value will be enforced in place of
     * quota_value. If no rollout is in progress at the time of the violation,
     * this field is not set.
     * For example, if at the time of the violation a rollout is in progress
     * changing the number of CPUs quota from 10 to 20, 20 would be the value of
     * this field.
     *
     * Generated from protobuf field <code>optional int64 future_quota_value = 8;</code>
     */
    protected $future_quota_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subject
     *           The subject on which the quota check failed.
     *           For example, "clientip:<ip address of client>" or "project:<Google
     *           developer project id>".
     *     @type string $description
     *           A description of how the quota check failed. Clients can use this
     *           description to find more about the quota configuration in the service's
     *           public documentation, or find the relevant quota limit to adjust through
     *           developer console.
     *           For example: "Service disabled" or "Daily Limit for read operations
     *           exceeded".
     *     @type string $api_service
     *           The API Service from which the `QuotaFailure.Violation` orginates. In
     *           some cases, Quota issues originate from an API Service other than the one
     *           that was called. In other words, a dependency of the called API Service
     *           could be the cause of the `QuotaFailure`, and this field would have the
     *           dependency API service name.
     *           For example, if the called API is Kubernetes Engine API
     *           (container.googleapis.com), and a quota violation occurs in the
     *           Kubernetes Engine API itself, this field would be
     *           "container.googleapis.com". On the other hand, if the quota violation
     *           occurs when the Kubernetes Engine API creates VMs in the Compute Engine
     *           API (compute.googleapis.com), this field would be
     *           "compute.googleapis.com".
     *     @type string $quota_metric
     *           The metric of the violated quota. A quota metric is a named counter to
     *           measure usage, such as API requests or CPUs. When an activity occurs in a
     *           service, such as Virtual Machine allocation, one or more quota metrics
     *           may be affected.
     *           For example, "compute.googleapis.com/cpus_per_vm_family",
     *           "storage.googleapis.com/internet_egress_bandwidth".
     *     @type string $quota_id
     *           The id of the violated quota. Also know as "limit name", this is the
     *           unique identifier of a quota in the context of an API service.
     *           For example, "CPUS-PER-VM-FAMILY-per-project-region".
     *     @type array|\Google\Protobuf\Internal\MapField $quota_dimensions
     *           The dimensions of the violated quota. Every non-global quota is enforced
     *           on a set of dimensions. While quota metric defines what to count, the
     *           dimensions specify for what aspects the counter should be increased.
     *           For example, the quota "CPUs per region per VM family" enforces a limit
     *           on the metric "compute.googleapis.com/cpus_per_vm_family" on dimensions
     *           "region" and "vm_family". And if the violation occurred in region
     *           "us-central1" and for VM family "n1", the quota_dimensions would be,
     *           {
     *             "region": "us-central1",
     *             "vm_family": "n1",
     *           }
     *           When a quota is enforced globally, the quota_dimensions would always be
     *           empty.
     *     @type int|string $quota_value
     *           The enforced quota value at the time of the `QuotaFailure`.
     *           For example, if the enforced quota value at the time of the
     *           `QuotaFailure` on the number of CPUs is "10", then the value of this
     *           field would reflect this quantity.
     *     @type int|string $future_quota_value
     *           The new quota value being rolled out at the time of the violation. At the
     *           completion of the rollout, this value will be enforced in place of
     *           quota_value. If no rollout is in progress at the time of the violation,
     *           this field is not set.
     *           For example, if at the time of the violation a rollout is in progress
     *           changing the number of CPUs quota from 10 to 20, 20 would be the value of
     *           this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The subject on which the quota check failed.
     * For example, "clientip:<ip address of client>" or "project:<Google
     * developer project id>".
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject on which the quota check failed.
     * For example, "clientip:<ip address of client>" or "project:<Google
     * developer project id>".
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * A description of how the quota check failed. Clients can use this
     * description to find more about the quota configuration in the service's
     * public documentation, or find the relevant quota limit to adjust through
     * developer console.
     * For example: "Service disabled" or "Daily Limit for read operations
     * exceeded".
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of how the quota check failed. Clients can use this
     * description to find more about the quota configuration in the service's
     * public documentation, or find the relevant quota limit to adjust through
     * developer console.
     * For example: "Service disabled" or "Daily Limit for read operations
     * exceeded".
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * The API Service from which the `QuotaFailure.Violation` orginates. In
     * some cases, Quota issues originate from an API Service other than the one
     * that was called. In other words, a dependency of the called API Service
     * could be the cause of the `QuotaFailure`, and this field would have the
     * dependency API service name.
     * For example, if the called API is Kubernetes Engine API
     * (container.googleapis.com), and a quota violation occurs in the
     * Kubernetes Engine API itself, this field would be
     * "container.googleapis.com". On the other hand, if the quota violation
     * occurs when the Kubernetes Engine API creates VMs in the Compute Engine
     * API (compute.googleapis.com), this field would be
     * "compute.googleapis.com".
     *
     * Generated from protobuf field <code>string api_service = 3;</code>
     * @return string
     */
    public function getApiService()
    {
        return $this->api_service;
    }

    /**
     * The API Service from which the `QuotaFailure.Violation` orginates. In
     * some cases, Quota issues originate from an API Service other than the one
     * that was called. In other words, a dependency of the called API Service
     * could be the cause of the `QuotaFailure`, and this field would have the
     * dependency API service name.
     * For example, if the called API is Kubernetes Engine API
     * (container.googleapis.com), and a quota violation occurs in the
     * Kubernetes Engine API itself, this field would be
     * "container.googleapis.com". On the other hand, if the quota violation
     * occurs when the Kubernetes Engine API creates VMs in the Compute Engine
     * API (compute.googleapis.com), this field would be
     * "compute.googleapis.com".
     *
     * Generated from protobuf field <code>string api_service = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setApiService($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_service = $var;

        return $this;
    }

    /**
     * The metric of the violated quota. A quota metric is a named counter to
     * measure usage, such as API requests or CPUs. When an activity occurs in a
     * service, such as Virtual Machine allocation, one or more quota metrics
     * may be affected.
     * For example, "compute.googleapis.com/cpus_per_vm_family",
     * "storage.googleapis.com/internet_egress_bandwidth".
     *
     * Generated from protobuf field <code>string quota_metric = 4;</code>
     * @return string
     */
    public function getQuotaMetric()
    {
        return $this->quota_metric;
    }

    /**
     * The metric of the violated quota. A quota metric is a named counter to
     * measure usage, such as API requests or CPUs. When an activity occurs in a
     * service, such as Virtual Machine allocation, one or more quota metrics
     * may be affected.
     * For example, "compute.googleapis.com/cpus_per_vm_family",
     * "storage.googleapis.com/internet_egress_bandwidth".
     *
     * Generated from protobuf field <code>string quota_metric = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setQuotaMetric($var)
    {
        GPBUtil::checkString($var, True);
        $this->quota_metric = $var;

        return $this;
    }

    /**
     * The id of the violated quota. Also know as "limit name", this is the
     * unique identifier of a quota in the context of an API service.
     * For example, "CPUS-PER-VM-FAMILY-per-project-region".
     *
     * Generated from protobuf field <code>string quota_id = 5;</code>
     * @return string
     */
    public function getQuotaId()
    {
        return $this->quota_id;
    }

    /**
     * The id of the violated quota. Also know as "limit name", this is the
     * unique identifier of a quota in the context of an API service.
     * For example, "CPUS-PER-VM-FAMILY-per-project-region".
     *
     * Generated from protobuf field <code>string quota_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setQuotaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->quota_id = $var;

        return $this;
    }

    /**
     * The dimensions of the violated quota. Every non-global quota is enforced
     * on a set of dimensions. While quota metric defines what to count, the
     * dimensions specify for what aspects the counter should be increased.
     * For example, the quota "CPUs per region per VM family" enforces a limit
     * on the metric "compute.googleapis.com/cpus_per_vm_family" on dimensions
     * "region" and "vm_family". And if the violation occurred in region
     * "us-central1" and for VM family "n1", the quota_dimensions would be,
     * {
     *   "region": "us-central1",
     *   "vm_family": "n1",
     * }
     * When a quota is enforced globally, the quota_dimensions would always be
     * empty.
     *
     * Generated from protobuf field <code>map<string, string> quota_dimensions = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getQuotaDimensions()
    {
        return $this->quota_dimensions;
    }

    /**
     * The dimensions of the violated quota. Every non-global quota is enforced
     * on a set of dimensions. While quota metric defines what to count, the
     * dimensions specify for what aspects the counter should be increased.
     * For example, the quota "CPUs per region per VM family" enforces a limit
     * on the metric "compute.googleapis.com/cpus_per_vm_family" on dimensions
     * "region" and "vm_family". And if the violation occurred in region
     * "us-central1" and for VM family "n1", the quota_dimensions would be,
     * {
     *   "region": "us-central1",
     *   "vm_family": "n1",
     * }
     * When a quota is enforced globally, the quota_dimensions would always be
     * empty.
     *
     * Generated from protobuf field <code>map<string, string> quota_dimensions = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setQuotaDimensions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->quota_dimensions = $arr;

        return $this;
    }

    /**
     * The enforced quota value at the time of the `QuotaFailure`.
     * For example, if the enforced quota value at the time of the
     * `QuotaFailure` on the number of CPUs is "10", then the value of this
     * field would reflect this quantity.
     *
     * Generated from protobuf field <code>int64 quota_value = 7;</code>
     * @return int|string
     */
    public function getQuotaValue()
    {
        return $this->quota_value;
    }

    /**
     * The enforced quota value at the time of the `QuotaFailure`.
     * For example, if the enforced quota value at the time of the
     * `QuotaFailure` on the number of CPUs is "10", then the value of this
     * field would reflect this quantity.
     *
     * Generated from protobuf field <code>int64 quota_value = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuotaValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->quota_value = $var;

        return $this;
    }

    /**
     * The new quota value being rolled out at the time of the violation. At the
     * completion of the rollout, this value will be enforced in place of
     * quota_value. If no rollout is in progress at the time of the violation,
     * this field is not set.
     * For example, if at the time of the violation a rollout is in progress
     * changing the number of CPUs quota from 10 to 20, 20 would be the value of
     * this field.
     *
     * Generated from protobuf field <code>optional int64 future_quota_value = 8;</code>
     * @return int|string
     */
    public function getFutureQuotaValue()
    {
        return isset($this->future_quota_value) ? $this->future_quota_value : 0;
    }

    public function hasFutureQuotaValue()
    {
        return isset($this->future_quota_value);
    }

    public function clearFutureQuotaValue()
    {
        unset($this->future_quota_value);
    }

    /**
     * The new quota value being rolled out at the time of the violation. At the
     * completion of the rollout, this value will be enforced in place of
     * quota_value. If no rollout is in progress at the time of the violation,
     * this field is not set.
     * For example, if at the time of the violation a rollout is in progress
     * changing the number of CPUs quota from 10 to 20, 20 would be the value of
     * this field.
     *
     * Generated from protobuf field <code>optional int64 future_quota_value = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFutureQuotaValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->future_quota_value = $var;

        return $this;
    }

}


