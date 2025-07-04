<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use UnexpectedValueException;

/**
 * Cluster components that can be activated.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.Component</code>
 */
class Component
{
    /**
     * Unspecified component. Specifying this will cause Cluster creation to fail.
     *
     * Generated from protobuf enum <code>COMPONENT_UNSPECIFIED = 0;</code>
     */
    const COMPONENT_UNSPECIFIED = 0;
    /**
     * The Anaconda component is no longer supported or applicable to
     * [supported Dataproc on Compute Engine image versions]
     * (https://cloud.google.com/dataproc/docs/concepts/versioning/dataproc-version-clusters#supported-dataproc-image-versions).
     * It cannot be activated on clusters created with supported Dataproc on
     * Compute Engine image versions.
     *
     * Generated from protobuf enum <code>ANACONDA = 5;</code>
     */
    const ANACONDA = 5;
    /**
     * Delta Lake.
     *
     * Generated from protobuf enum <code>DELTA = 20;</code>
     */
    const DELTA = 20;
    /**
     * Docker
     *
     * Generated from protobuf enum <code>DOCKER = 13;</code>
     */
    const DOCKER = 13;
    /**
     * The Druid query engine. (alpha)
     *
     * Generated from protobuf enum <code>DRUID = 9;</code>
     */
    const DRUID = 9;
    /**
     * Flink
     *
     * Generated from protobuf enum <code>FLINK = 14;</code>
     */
    const FLINK = 14;
    /**
     * HBase. (beta)
     *
     * Generated from protobuf enum <code>HBASE = 11;</code>
     */
    const HBASE = 11;
    /**
     * The Hive Web HCatalog (the REST service for accessing HCatalog).
     *
     * Generated from protobuf enum <code>HIVE_WEBHCAT = 3;</code>
     */
    const HIVE_WEBHCAT = 3;
    /**
     * Hudi.
     *
     * Generated from protobuf enum <code>HUDI = 18;</code>
     */
    const HUDI = 18;
    /**
     * Iceberg.
     *
     * Generated from protobuf enum <code>ICEBERG = 19;</code>
     */
    const ICEBERG = 19;
    /**
     * The Jupyter Notebook.
     *
     * Generated from protobuf enum <code>JUPYTER = 1;</code>
     */
    const JUPYTER = 1;
    /**
     * The Pig component.
     *
     * Generated from protobuf enum <code>PIG = 21;</code>
     */
    const PIG = 21;
    /**
     * The Presto query engine.
     *
     * Generated from protobuf enum <code>PRESTO = 6;</code>
     */
    const PRESTO = 6;
    /**
     * The Trino query engine.
     *
     * Generated from protobuf enum <code>TRINO = 17;</code>
     */
    const TRINO = 17;
    /**
     * The Ranger service.
     *
     * Generated from protobuf enum <code>RANGER = 12;</code>
     */
    const RANGER = 12;
    /**
     * The Solr service.
     *
     * Generated from protobuf enum <code>SOLR = 10;</code>
     */
    const SOLR = 10;
    /**
     * The Zeppelin notebook.
     *
     * Generated from protobuf enum <code>ZEPPELIN = 4;</code>
     */
    const ZEPPELIN = 4;
    /**
     * The Zookeeper service.
     *
     * Generated from protobuf enum <code>ZOOKEEPER = 8;</code>
     */
    const ZOOKEEPER = 8;

    private static $valueToName = [
        self::COMPONENT_UNSPECIFIED => 'COMPONENT_UNSPECIFIED',
        self::ANACONDA => 'ANACONDA',
        self::DELTA => 'DELTA',
        self::DOCKER => 'DOCKER',
        self::DRUID => 'DRUID',
        self::FLINK => 'FLINK',
        self::HBASE => 'HBASE',
        self::HIVE_WEBHCAT => 'HIVE_WEBHCAT',
        self::HUDI => 'HUDI',
        self::ICEBERG => 'ICEBERG',
        self::JUPYTER => 'JUPYTER',
        self::PIG => 'PIG',
        self::PRESTO => 'PRESTO',
        self::TRINO => 'TRINO',
        self::RANGER => 'RANGER',
        self::SOLR => 'SOLR',
        self::ZEPPELIN => 'ZEPPELIN',
        self::ZOOKEEPER => 'ZOOKEEPER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

