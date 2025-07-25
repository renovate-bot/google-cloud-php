<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/transaction.proto

namespace Google\Cloud\Spanner\V1\TransactionOptions\ReadWrite;

use UnexpectedValueException;

/**
 * `ReadLockMode` is used to set the read lock mode for read-write
 * transactions.
 *
 * Protobuf type <code>google.spanner.v1.TransactionOptions.ReadWrite.ReadLockMode</code>
 */
class ReadLockMode
{
    /**
     * Default value.
     * * If isolation level is
     *   [REPEATABLE_READ][google.spanner.v1.TransactionOptions.IsolationLevel.REPEATABLE_READ],
     *   then it is an error to specify `read_lock_mode`. Locking semantics
     *   default to `OPTIMISTIC`. No validation checks are done for reads,
     *   except to validate that the data that was served at the snapshot time
     *   is unchanged at commit time in the following cases:
     *     1. reads done as part of queries that use `SELECT FOR UPDATE`
     *     2. reads done as part of statements with a `LOCK_SCANNED_RANGES`
     *        hint
     *     3. reads done as part of DML statements
     * * At all other isolation levels, if `read_lock_mode` is the default
     *   value, then pessimistic read locks are used.
     *
     * Generated from protobuf enum <code>READ_LOCK_MODE_UNSPECIFIED = 0;</code>
     */
    const READ_LOCK_MODE_UNSPECIFIED = 0;
    /**
     * Pessimistic lock mode.
     * Read locks are acquired immediately on read.
     * Semantics described only applies to
     * [SERIALIZABLE][google.spanner.v1.TransactionOptions.IsolationLevel.SERIALIZABLE]
     * isolation.
     *
     * Generated from protobuf enum <code>PESSIMISTIC = 1;</code>
     */
    const PESSIMISTIC = 1;
    /**
     * Optimistic lock mode.
     * Locks for reads within the transaction are not acquired on read.
     * Instead the locks are acquired on a commit to validate that
     * read/queried data has not changed since the transaction started.
     * Semantics described only applies to
     * [SERIALIZABLE][google.spanner.v1.TransactionOptions.IsolationLevel.SERIALIZABLE]
     * isolation.
     *
     * Generated from protobuf enum <code>OPTIMISTIC = 2;</code>
     */
    const OPTIMISTIC = 2;

    private static $valueToName = [
        self::READ_LOCK_MODE_UNSPECIFIED => 'READ_LOCK_MODE_UNSPECIFIED',
        self::PESSIMISTIC => 'PESSIMISTIC',
        self::OPTIMISTIC => 'OPTIMISTIC',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadLockMode::class, \Google\Cloud\Spanner\V1\TransactionOptions_ReadWrite_ReadLockMode::class);

