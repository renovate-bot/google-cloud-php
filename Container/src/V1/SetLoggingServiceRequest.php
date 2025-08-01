<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetLoggingServiceRequest sets the logging service of a cluster.
 *
 * Generated from protobuf message <code>google.container.v1.SetLoggingServiceRequest</code>
 */
class SetLoggingServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $project_id = '';
    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available)
     * in which the cluster resides. This field has been deprecated and replaced
     * by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $zone = '';
    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $cluster_id = '';
    /**
     * Required. The logging service the cluster should use to write logs.
     * Currently available options:
     * * `logging.googleapis.com/kubernetes` - The Cloud Logging
     * service with a Kubernetes-native resource model
     * * `logging.googleapis.com` - The legacy Cloud Logging service (no longer
     *   available as of GKE 1.15).
     * * `none` - no logs will be exported from the cluster.
     * If left as an empty string,`logging.googleapis.com/kubernetes` will be
     * used for GKE 1.14+ or `logging.googleapis.com` for earlier versions.
     *
     * Generated from protobuf field <code>string logging_service = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $logging_service = '';
    /**
     * The name (project, location, cluster) of the cluster to set logging.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';

    /**
     * @param string $projectId      Deprecated. The Google Developers Console [project ID or project
     *                               number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *                               This field has been deprecated and replaced by the name field.
     * @param string $zone           Deprecated. The name of the Google Compute Engine
     *                               [zone](https://cloud.google.com/compute/docs/zones#available)
     *                               in which the cluster resides. This field has been deprecated and replaced
     *                               by the name field.
     * @param string $clusterId      Deprecated. The name of the cluster to upgrade.
     *                               This field has been deprecated and replaced by the name field.
     * @param string $loggingService Required. The logging service the cluster should use to write logs.
     *                               Currently available options:
     *
     *                               * `logging.googleapis.com/kubernetes` - The Cloud Logging
     *                               service with a Kubernetes-native resource model
     *                               * `logging.googleapis.com` - The legacy Cloud Logging service (no longer
     *                               available as of GKE 1.15).
     *                               * `none` - no logs will be exported from the cluster.
     *
     *                               If left as an empty string,`logging.googleapis.com/kubernetes` will be
     *                               used for GKE 1.14+ or `logging.googleapis.com` for earlier versions.
     *
     * @return \Google\Cloud\Container\V1\SetLoggingServiceRequest
     *
     * @experimental
     */
    public static function build(string $projectId, string $zone, string $clusterId, string $loggingService): self
    {
        return (new self())
            ->setProjectId($projectId)
            ->setZone($zone)
            ->setClusterId($clusterId)
            ->setLoggingService($loggingService);
    }

    /**
     * @param string $name           The name (project, location, cluster) of the cluster to set logging.
     *                               Specified in the format `projects/&#42;/locations/&#42;/clusters/*`.
     * @param string $loggingService Required. The logging service the cluster should use to write logs.
     *                               Currently available options:
     *
     *                               * `logging.googleapis.com/kubernetes` - The Cloud Logging
     *                               service with a Kubernetes-native resource model
     *                               * `logging.googleapis.com` - The legacy Cloud Logging service (no longer
     *                               available as of GKE 1.15).
     *                               * `none` - no logs will be exported from the cluster.
     *
     *                               If left as an empty string,`logging.googleapis.com/kubernetes` will be
     *                               used for GKE 1.14+ or `logging.googleapis.com` for earlier versions.
     *
     * @return \Google\Cloud\Container\V1\SetLoggingServiceRequest
     *
     * @experimental
     */
    public static function buildFromNameLoggingService(string $name, string $loggingService): self
    {
        return (new self())
            ->setName($name)
            ->setLoggingService($loggingService);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Deprecated. The Google Developers Console [project ID or project
     *           number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available)
     *           in which the cluster resides. This field has been deprecated and replaced
     *           by the name field.
     *     @type string $cluster_id
     *           Deprecated. The name of the cluster to upgrade.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $logging_service
     *           Required. The logging service the cluster should use to write logs.
     *           Currently available options:
     *           * `logging.googleapis.com/kubernetes` - The Cloud Logging
     *           service with a Kubernetes-native resource model
     *           * `logging.googleapis.com` - The legacy Cloud Logging service (no longer
     *             available as of GKE 1.15).
     *           * `none` - no logs will be exported from the cluster.
     *           If left as an empty string,`logging.googleapis.com/kubernetes` will be
     *           used for GKE 1.14+ or `logging.googleapis.com` for earlier versions.
     *     @type string $name
     *           The name (project, location, cluster) of the cluster to set logging.
     *           Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getProjectId()
    {
        if ($this->project_id !== '') {
            @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->project_id;
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setProjectId($var)
    {
        @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available)
     * in which the cluster resides. This field has been deprecated and replaced
     * by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getZone()
    {
        if ($this->zone !== '') {
            @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        }
        return $this->zone;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available)
     * in which the cluster resides. This field has been deprecated and replaced
     * by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setZone($var)
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getClusterId()
    {
        if ($this->cluster_id !== '') {
            @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->cluster_id;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setClusterId($var)
    {
        @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. The logging service the cluster should use to write logs.
     * Currently available options:
     * * `logging.googleapis.com/kubernetes` - The Cloud Logging
     * service with a Kubernetes-native resource model
     * * `logging.googleapis.com` - The legacy Cloud Logging service (no longer
     *   available as of GKE 1.15).
     * * `none` - no logs will be exported from the cluster.
     * If left as an empty string,`logging.googleapis.com/kubernetes` will be
     * used for GKE 1.14+ or `logging.googleapis.com` for earlier versions.
     *
     * Generated from protobuf field <code>string logging_service = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLoggingService()
    {
        return $this->logging_service;
    }

    /**
     * Required. The logging service the cluster should use to write logs.
     * Currently available options:
     * * `logging.googleapis.com/kubernetes` - The Cloud Logging
     * service with a Kubernetes-native resource model
     * * `logging.googleapis.com` - The legacy Cloud Logging service (no longer
     *   available as of GKE 1.15).
     * * `none` - no logs will be exported from the cluster.
     * If left as an empty string,`logging.googleapis.com/kubernetes` will be
     * used for GKE 1.14+ or `logging.googleapis.com` for earlier versions.
     *
     * Generated from protobuf field <code>string logging_service = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLoggingService($var)
    {
        GPBUtil::checkString($var, True);
        $this->logging_service = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster) of the cluster to set logging.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster) of the cluster to set logging.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

