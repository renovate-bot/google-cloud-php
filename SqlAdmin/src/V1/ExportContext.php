<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance export context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.ExportContext</code>
 */
class ExportContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The path to the file in Google Cloud Storage where the export will be
     * stored. The URI is in the form `gs://bucketName/fileName`. If the file
     * already exists, the request succeeds, but the operation fails. If
     * `fileType` is `SQL` and the filename ends with .gz,
     * the contents are compressed.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';
    /**
     * Databases to be exported. <br /> `MySQL instances:` If
     * `fileType` is `SQL` and no database is specified, all
     * databases are exported, except for the `mysql` system database.
     * If `fileType` is `CSV`, you can specify one database,
     * either by using this property or by using the
     * `csvExportOptions.selectQuery` property, which takes precedence
     * over this property. <br /> `PostgreSQL instances:` You must specify
     * one database to be exported. If `fileType` is `CSV`,
     * this database must match the one specified in the
     * `csvExportOptions.selectQuery` property. <br /> `SQL Server
     * instances:` You must specify one database to be exported, and the
     * `fileType` must be `BAK`.
     *
     * Generated from protobuf field <code>repeated string databases = 2;</code>
     */
    private $databases;
    /**
     * This is always `sql#exportContext`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    protected $kind = '';
    /**
     * Options for exporting data as SQL statements.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlExportOptions sql_export_options = 4;</code>
     */
    protected $sql_export_options = null;
    /**
     * Options for exporting data as CSV. `MySQL` and `PostgreSQL`
     * instances only.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlCsvExportOptions csv_export_options = 5;</code>
     */
    protected $csv_export_options = null;
    /**
     * The file type for the specified uri.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlFileType file_type = 6;</code>
     */
    protected $file_type = 0;
    /**
     * Option for export offload.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue offload = 8;</code>
     */
    protected $offload = null;
    /**
     * Options for exporting data as BAK files.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlBakExportOptions bak_export_options = 9;</code>
     */
    protected $bak_export_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           The path to the file in Google Cloud Storage where the export will be
     *           stored. The URI is in the form `gs://bucketName/fileName`. If the file
     *           already exists, the request succeeds, but the operation fails. If
     *           `fileType` is `SQL` and the filename ends with .gz,
     *           the contents are compressed.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $databases
     *           Databases to be exported. <br /> `MySQL instances:` If
     *           `fileType` is `SQL` and no database is specified, all
     *           databases are exported, except for the `mysql` system database.
     *           If `fileType` is `CSV`, you can specify one database,
     *           either by using this property or by using the
     *           `csvExportOptions.selectQuery` property, which takes precedence
     *           over this property. <br /> `PostgreSQL instances:` You must specify
     *           one database to be exported. If `fileType` is `CSV`,
     *           this database must match the one specified in the
     *           `csvExportOptions.selectQuery` property. <br /> `SQL Server
     *           instances:` You must specify one database to be exported, and the
     *           `fileType` must be `BAK`.
     *     @type string $kind
     *           This is always `sql#exportContext`.
     *     @type \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions $sql_export_options
     *           Options for exporting data as SQL statements.
     *     @type \Google\Cloud\Sql\V1\ExportContext\SqlCsvExportOptions $csv_export_options
     *           Options for exporting data as CSV. `MySQL` and `PostgreSQL`
     *           instances only.
     *     @type int $file_type
     *           The file type for the specified uri.
     *     @type \Google\Protobuf\BoolValue $offload
     *           Option for export offload.
     *     @type \Google\Cloud\Sql\V1\ExportContext\SqlBakExportOptions $bak_export_options
     *           Options for exporting data as BAK files.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The path to the file in Google Cloud Storage where the export will be
     * stored. The URI is in the form `gs://bucketName/fileName`. If the file
     * already exists, the request succeeds, but the operation fails. If
     * `fileType` is `SQL` and the filename ends with .gz,
     * the contents are compressed.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The path to the file in Google Cloud Storage where the export will be
     * stored. The URI is in the form `gs://bucketName/fileName`. If the file
     * already exists, the request succeeds, but the operation fails. If
     * `fileType` is `SQL` and the filename ends with .gz,
     * the contents are compressed.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Databases to be exported. <br /> `MySQL instances:` If
     * `fileType` is `SQL` and no database is specified, all
     * databases are exported, except for the `mysql` system database.
     * If `fileType` is `CSV`, you can specify one database,
     * either by using this property or by using the
     * `csvExportOptions.selectQuery` property, which takes precedence
     * over this property. <br /> `PostgreSQL instances:` You must specify
     * one database to be exported. If `fileType` is `CSV`,
     * this database must match the one specified in the
     * `csvExportOptions.selectQuery` property. <br /> `SQL Server
     * instances:` You must specify one database to be exported, and the
     * `fileType` must be `BAK`.
     *
     * Generated from protobuf field <code>repeated string databases = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatabases()
    {
        return $this->databases;
    }

    /**
     * Databases to be exported. <br /> `MySQL instances:` If
     * `fileType` is `SQL` and no database is specified, all
     * databases are exported, except for the `mysql` system database.
     * If `fileType` is `CSV`, you can specify one database,
     * either by using this property or by using the
     * `csvExportOptions.selectQuery` property, which takes precedence
     * over this property. <br /> `PostgreSQL instances:` You must specify
     * one database to be exported. If `fileType` is `CSV`,
     * this database must match the one specified in the
     * `csvExportOptions.selectQuery` property. <br /> `SQL Server
     * instances:` You must specify one database to be exported, and the
     * `fileType` must be `BAK`.
     *
     * Generated from protobuf field <code>repeated string databases = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatabases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->databases = $arr;

        return $this;
    }

    /**
     * This is always `sql#exportContext`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#exportContext`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Options for exporting data as SQL statements.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlExportOptions sql_export_options = 4;</code>
     * @return \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions|null
     */
    public function getSqlExportOptions()
    {
        return $this->sql_export_options;
    }

    public function hasSqlExportOptions()
    {
        return isset($this->sql_export_options);
    }

    public function clearSqlExportOptions()
    {
        unset($this->sql_export_options);
    }

    /**
     * Options for exporting data as SQL statements.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlExportOptions sql_export_options = 4;</code>
     * @param \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions $var
     * @return $this
     */
    public function setSqlExportOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions::class);
        $this->sql_export_options = $var;

        return $this;
    }

    /**
     * Options for exporting data as CSV. `MySQL` and `PostgreSQL`
     * instances only.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlCsvExportOptions csv_export_options = 5;</code>
     * @return \Google\Cloud\Sql\V1\ExportContext\SqlCsvExportOptions|null
     */
    public function getCsvExportOptions()
    {
        return $this->csv_export_options;
    }

    public function hasCsvExportOptions()
    {
        return isset($this->csv_export_options);
    }

    public function clearCsvExportOptions()
    {
        unset($this->csv_export_options);
    }

    /**
     * Options for exporting data as CSV. `MySQL` and `PostgreSQL`
     * instances only.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlCsvExportOptions csv_export_options = 5;</code>
     * @param \Google\Cloud\Sql\V1\ExportContext\SqlCsvExportOptions $var
     * @return $this
     */
    public function setCsvExportOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ExportContext\SqlCsvExportOptions::class);
        $this->csv_export_options = $var;

        return $this;
    }

    /**
     * The file type for the specified uri.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlFileType file_type = 6;</code>
     * @return int
     */
    public function getFileType()
    {
        return $this->file_type;
    }

    /**
     * The file type for the specified uri.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlFileType file_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\SqlFileType::class);
        $this->file_type = $var;

        return $this;
    }

    /**
     * Option for export offload.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue offload = 8;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getOffload()
    {
        return $this->offload;
    }

    public function hasOffload()
    {
        return isset($this->offload);
    }

    public function clearOffload()
    {
        unset($this->offload);
    }

    /**
     * Returns the unboxed value from <code>getOffload()</code>

     * Option for export offload.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue offload = 8;</code>
     * @return bool|null
     */
    public function getOffloadUnwrapped()
    {
        return $this->readWrapperValue("offload");
    }

    /**
     * Option for export offload.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue offload = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setOffload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->offload = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Option for export offload.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue offload = 8;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setOffloadUnwrapped($var)
    {
        $this->writeWrapperValue("offload", $var);
        return $this;}

    /**
     * Options for exporting data as BAK files.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlBakExportOptions bak_export_options = 9;</code>
     * @return \Google\Cloud\Sql\V1\ExportContext\SqlBakExportOptions|null
     */
    public function getBakExportOptions()
    {
        return $this->bak_export_options;
    }

    public function hasBakExportOptions()
    {
        return isset($this->bak_export_options);
    }

    public function clearBakExportOptions()
    {
        unset($this->bak_export_options);
    }

    /**
     * Options for exporting data as BAK files.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlBakExportOptions bak_export_options = 9;</code>
     * @param \Google\Cloud\Sql\V1\ExportContext\SqlBakExportOptions $var
     * @return $this
     */
    public function setBakExportOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ExportContext\SqlBakExportOptions::class);
        $this->bak_export_options = $var;

        return $this;
    }

}

