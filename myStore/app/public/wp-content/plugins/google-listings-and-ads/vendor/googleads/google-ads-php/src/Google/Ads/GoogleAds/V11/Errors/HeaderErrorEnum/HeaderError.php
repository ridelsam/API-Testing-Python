<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/header_error.proto

namespace Google\Ads\GoogleAds\V11\Errors\HeaderErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible header errors.
 *
 * Protobuf type <code>google.ads.googleads.v11.errors.HeaderErrorEnum.HeaderError</code>
 */
class HeaderError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The login customer ID could not be validated.
     *
     * Generated from protobuf enum <code>INVALID_LOGIN_CUSTOMER_ID = 3;</code>
     */
    const INVALID_LOGIN_CUSTOMER_ID = 3;
    /**
     * The linked customer ID could not be validated.
     *
     * Generated from protobuf enum <code>INVALID_LINKED_CUSTOMER_ID = 7;</code>
     */
    const INVALID_LINKED_CUSTOMER_ID = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID_LOGIN_CUSTOMER_ID => 'INVALID_LOGIN_CUSTOMER_ID',
        self::INVALID_LINKED_CUSTOMER_ID => 'INVALID_LINKED_CUSTOMER_ID',
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
class_alias(HeaderError::class, \Google\Ads\GoogleAds\V11\Errors\HeaderErrorEnum_HeaderError::class);

