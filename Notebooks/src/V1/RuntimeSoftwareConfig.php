<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/runtime.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the selection and configuration of software inside the runtime.
 * The properties to set on runtime.
 * Properties keys are specified in `key:value` format, for example:
 * * `idle_shutdown: true`
 * * `idle_shutdown_timeout: 180`
 * * `enable_health_monitoring: true`
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.RuntimeSoftwareConfig</code>
 */
class RuntimeSoftwareConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Cron expression in UTC timezone, used to schedule instance auto upgrade.
     * Please follow the [cron format](https://en.wikipedia.org/wiki/Cron).
     *
     * Generated from protobuf field <code>string notebook_upgrade_schedule = 1;</code>
     */
    protected $notebook_upgrade_schedule = '';
    /**
     * Verifies core internal services are running.
     * Default: True
     *
     * Generated from protobuf field <code>optional bool enable_health_monitoring = 2;</code>
     */
    protected $enable_health_monitoring = null;
    /**
     * Runtime will automatically shutdown after idle_shutdown_time.
     * Default: True
     *
     * Generated from protobuf field <code>optional bool idle_shutdown = 3;</code>
     */
    protected $idle_shutdown = null;
    /**
     * Time in minutes to wait before shutting down runtime. Default: 180 minutes
     *
     * Generated from protobuf field <code>int32 idle_shutdown_timeout = 4;</code>
     */
    protected $idle_shutdown_timeout = 0;
    /**
     * Install Nvidia Driver automatically.
     * Default: True
     *
     * Generated from protobuf field <code>bool install_gpu_driver = 5;</code>
     */
    protected $install_gpu_driver = false;
    /**
     * Specify a custom Cloud Storage path where the GPU driver is stored.
     * If not specified, we'll automatically choose from official GPU drivers.
     *
     * Generated from protobuf field <code>string custom_gpu_driver_path = 6;</code>
     */
    protected $custom_gpu_driver_path = '';
    /**
     * Path to a Bash script that automatically runs after a notebook instance
     * fully boots up. The path must be a URL or
     * Cloud Storage path (`gs://path-to-file/file-name`).
     *
     * Generated from protobuf field <code>string post_startup_script = 7;</code>
     */
    protected $post_startup_script = '';
    /**
     * Optional. Use a list of container images to use as Kernels in the notebook instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.ContainerImage kernels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $kernels;
    /**
     * Output only. Bool indicating whether an newer image is available in an image family.
     *
     * Generated from protobuf field <code>optional bool upgradeable = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $upgradeable = null;
    /**
     * Behavior for the post startup script.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.RuntimeSoftwareConfig.PostStartupScriptBehavior post_startup_script_behavior = 10;</code>
     */
    protected $post_startup_script_behavior = 0;
    /**
     * Bool indicating whether JupyterLab terminal will be available or not.
     * Default: False
     *
     * Generated from protobuf field <code>optional bool disable_terminal = 11;</code>
     */
    protected $disable_terminal = null;
    /**
     * Output only. version of boot image such as M100, from release label of the image.
     *
     * Generated from protobuf field <code>optional string version = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $notebook_upgrade_schedule
     *           Cron expression in UTC timezone, used to schedule instance auto upgrade.
     *           Please follow the [cron format](https://en.wikipedia.org/wiki/Cron).
     *     @type bool $enable_health_monitoring
     *           Verifies core internal services are running.
     *           Default: True
     *     @type bool $idle_shutdown
     *           Runtime will automatically shutdown after idle_shutdown_time.
     *           Default: True
     *     @type int $idle_shutdown_timeout
     *           Time in minutes to wait before shutting down runtime. Default: 180 minutes
     *     @type bool $install_gpu_driver
     *           Install Nvidia Driver automatically.
     *           Default: True
     *     @type string $custom_gpu_driver_path
     *           Specify a custom Cloud Storage path where the GPU driver is stored.
     *           If not specified, we'll automatically choose from official GPU drivers.
     *     @type string $post_startup_script
     *           Path to a Bash script that automatically runs after a notebook instance
     *           fully boots up. The path must be a URL or
     *           Cloud Storage path (`gs://path-to-file/file-name`).
     *     @type array<\Google\Cloud\Notebooks\V1\ContainerImage>|\Google\Protobuf\Internal\RepeatedField $kernels
     *           Optional. Use a list of container images to use as Kernels in the notebook instance.
     *     @type bool $upgradeable
     *           Output only. Bool indicating whether an newer image is available in an image family.
     *     @type int $post_startup_script_behavior
     *           Behavior for the post startup script.
     *     @type bool $disable_terminal
     *           Bool indicating whether JupyterLab terminal will be available or not.
     *           Default: False
     *     @type string $version
     *           Output only. version of boot image such as M100, from release label of the image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Runtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Cron expression in UTC timezone, used to schedule instance auto upgrade.
     * Please follow the [cron format](https://en.wikipedia.org/wiki/Cron).
     *
     * Generated from protobuf field <code>string notebook_upgrade_schedule = 1;</code>
     * @return string
     */
    public function getNotebookUpgradeSchedule()
    {
        return $this->notebook_upgrade_schedule;
    }

    /**
     * Cron expression in UTC timezone, used to schedule instance auto upgrade.
     * Please follow the [cron format](https://en.wikipedia.org/wiki/Cron).
     *
     * Generated from protobuf field <code>string notebook_upgrade_schedule = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNotebookUpgradeSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->notebook_upgrade_schedule = $var;

        return $this;
    }

    /**
     * Verifies core internal services are running.
     * Default: True
     *
     * Generated from protobuf field <code>optional bool enable_health_monitoring = 2;</code>
     * @return bool
     */
    public function getEnableHealthMonitoring()
    {
        return isset($this->enable_health_monitoring) ? $this->enable_health_monitoring : false;
    }

    public function hasEnableHealthMonitoring()
    {
        return isset($this->enable_health_monitoring);
    }

    public function clearEnableHealthMonitoring()
    {
        unset($this->enable_health_monitoring);
    }

    /**
     * Verifies core internal services are running.
     * Default: True
     *
     * Generated from protobuf field <code>optional bool enable_health_monitoring = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableHealthMonitoring($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_health_monitoring = $var;

        return $this;
    }

    /**
     * Runtime will automatically shutdown after idle_shutdown_time.
     * Default: True
     *
     * Generated from protobuf field <code>optional bool idle_shutdown = 3;</code>
     * @return bool
     */
    public function getIdleShutdown()
    {
        return isset($this->idle_shutdown) ? $this->idle_shutdown : false;
    }

    public function hasIdleShutdown()
    {
        return isset($this->idle_shutdown);
    }

    public function clearIdleShutdown()
    {
        unset($this->idle_shutdown);
    }

    /**
     * Runtime will automatically shutdown after idle_shutdown_time.
     * Default: True
     *
     * Generated from protobuf field <code>optional bool idle_shutdown = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIdleShutdown($var)
    {
        GPBUtil::checkBool($var);
        $this->idle_shutdown = $var;

        return $this;
    }

    /**
     * Time in minutes to wait before shutting down runtime. Default: 180 minutes
     *
     * Generated from protobuf field <code>int32 idle_shutdown_timeout = 4;</code>
     * @return int
     */
    public function getIdleShutdownTimeout()
    {
        return $this->idle_shutdown_timeout;
    }

    /**
     * Time in minutes to wait before shutting down runtime. Default: 180 minutes
     *
     * Generated from protobuf field <code>int32 idle_shutdown_timeout = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIdleShutdownTimeout($var)
    {
        GPBUtil::checkInt32($var);
        $this->idle_shutdown_timeout = $var;

        return $this;
    }

    /**
     * Install Nvidia Driver automatically.
     * Default: True
     *
     * Generated from protobuf field <code>bool install_gpu_driver = 5;</code>
     * @return bool
     */
    public function getInstallGpuDriver()
    {
        return $this->install_gpu_driver;
    }

    /**
     * Install Nvidia Driver automatically.
     * Default: True
     *
     * Generated from protobuf field <code>bool install_gpu_driver = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setInstallGpuDriver($var)
    {
        GPBUtil::checkBool($var);
        $this->install_gpu_driver = $var;

        return $this;
    }

    /**
     * Specify a custom Cloud Storage path where the GPU driver is stored.
     * If not specified, we'll automatically choose from official GPU drivers.
     *
     * Generated from protobuf field <code>string custom_gpu_driver_path = 6;</code>
     * @return string
     */
    public function getCustomGpuDriverPath()
    {
        return $this->custom_gpu_driver_path;
    }

    /**
     * Specify a custom Cloud Storage path where the GPU driver is stored.
     * If not specified, we'll automatically choose from official GPU drivers.
     *
     * Generated from protobuf field <code>string custom_gpu_driver_path = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomGpuDriverPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_gpu_driver_path = $var;

        return $this;
    }

    /**
     * Path to a Bash script that automatically runs after a notebook instance
     * fully boots up. The path must be a URL or
     * Cloud Storage path (`gs://path-to-file/file-name`).
     *
     * Generated from protobuf field <code>string post_startup_script = 7;</code>
     * @return string
     */
    public function getPostStartupScript()
    {
        return $this->post_startup_script;
    }

    /**
     * Path to a Bash script that automatically runs after a notebook instance
     * fully boots up. The path must be a URL or
     * Cloud Storage path (`gs://path-to-file/file-name`).
     *
     * Generated from protobuf field <code>string post_startup_script = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPostStartupScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_startup_script = $var;

        return $this;
    }

    /**
     * Optional. Use a list of container images to use as Kernels in the notebook instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.ContainerImage kernels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKernels()
    {
        return $this->kernels;
    }

    /**
     * Optional. Use a list of container images to use as Kernels in the notebook instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.ContainerImage kernels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Notebooks\V1\ContainerImage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKernels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V1\ContainerImage::class);
        $this->kernels = $arr;

        return $this;
    }

    /**
     * Output only. Bool indicating whether an newer image is available in an image family.
     *
     * Generated from protobuf field <code>optional bool upgradeable = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getUpgradeable()
    {
        return isset($this->upgradeable) ? $this->upgradeable : false;
    }

    public function hasUpgradeable()
    {
        return isset($this->upgradeable);
    }

    public function clearUpgradeable()
    {
        unset($this->upgradeable);
    }

    /**
     * Output only. Bool indicating whether an newer image is available in an image family.
     *
     * Generated from protobuf field <code>optional bool upgradeable = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setUpgradeable($var)
    {
        GPBUtil::checkBool($var);
        $this->upgradeable = $var;

        return $this;
    }

    /**
     * Behavior for the post startup script.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.RuntimeSoftwareConfig.PostStartupScriptBehavior post_startup_script_behavior = 10;</code>
     * @return int
     */
    public function getPostStartupScriptBehavior()
    {
        return $this->post_startup_script_behavior;
    }

    /**
     * Behavior for the post startup script.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.RuntimeSoftwareConfig.PostStartupScriptBehavior post_startup_script_behavior = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPostStartupScriptBehavior($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V1\RuntimeSoftwareConfig\PostStartupScriptBehavior::class);
        $this->post_startup_script_behavior = $var;

        return $this;
    }

    /**
     * Bool indicating whether JupyterLab terminal will be available or not.
     * Default: False
     *
     * Generated from protobuf field <code>optional bool disable_terminal = 11;</code>
     * @return bool
     */
    public function getDisableTerminal()
    {
        return isset($this->disable_terminal) ? $this->disable_terminal : false;
    }

    public function hasDisableTerminal()
    {
        return isset($this->disable_terminal);
    }

    public function clearDisableTerminal()
    {
        unset($this->disable_terminal);
    }

    /**
     * Bool indicating whether JupyterLab terminal will be available or not.
     * Default: False
     *
     * Generated from protobuf field <code>optional bool disable_terminal = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableTerminal($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_terminal = $var;

        return $this;
    }

    /**
     * Output only. version of boot image such as M100, from release label of the image.
     *
     * Generated from protobuf field <code>optional string version = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVersion()
    {
        return isset($this->version) ? $this->version : '';
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Output only. version of boot image such as M100, from release label of the image.
     *
     * Generated from protobuf field <code>optional string version = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

