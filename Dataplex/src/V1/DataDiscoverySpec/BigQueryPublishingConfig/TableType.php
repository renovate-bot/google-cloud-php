<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_discovery.proto

namespace Google\Cloud\Dataplex\V1\DataDiscoverySpec\BigQueryPublishingConfig;

use UnexpectedValueException;

/**
 * Determines how discovered tables are published.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.DataDiscoverySpec.BigQueryPublishingConfig.TableType</code>
 */
class TableType
{
    /**
     * Table type unspecified.
     *
     * Generated from protobuf enum <code>TABLE_TYPE_UNSPECIFIED = 0;</code>
     */
    const TABLE_TYPE_UNSPECIFIED = 0;
    /**
     * Default. Discovered tables are published as BigQuery external tables
     * whose data is accessed using the credentials of the user querying the
     * table.
     *
     * Generated from protobuf enum <code>EXTERNAL = 1;</code>
     */
    const EXTERNAL = 1;
    /**
     * Discovered tables are published as BigLake external tables whose data
     * is accessed using the credentials of the associated BigQuery
     * connection.
     *
     * Generated from protobuf enum <code>BIGLAKE = 2;</code>
     */
    const BIGLAKE = 2;

    private static $valueToName = [
        self::TABLE_TYPE_UNSPECIFIED => 'TABLE_TYPE_UNSPECIFIED',
        self::EXTERNAL => 'EXTERNAL',
        self::BIGLAKE => 'BIGLAKE',
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


