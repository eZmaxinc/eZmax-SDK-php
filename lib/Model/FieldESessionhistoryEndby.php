<?php
/**
 * FieldESessionhistoryEndby
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition (Full)
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldESessionhistoryEndby Class Doc Comment
 *
 * @category Class
 * @description The Type of the Sessionhistory
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldESessionhistoryEndby
{
    /**
     * Possible values of this enum
     */
    public const DECRYPTION = 'Decryption';

    public const HACK = 'Hack';

    public const EXPIRED = 'Expired';

    public const HIJACK = 'Hijack';

    public const DOUBLE_LOGON = 'DoubleLogon';

    public const GARBAGE = 'Garbage';

    public const LOGOFF = 'Logoff';

    public const BAD_AUTH = 'BadAuth';

    public const LOCKED = 'Locked';

    public const INACTIVE = 'Inactive';

    public const INVALID_USER = 'InvalidUser';

    public const BAD_USER_TYPE = 'BadUserType';

    public const BAD_IP = 'BadIP';

    public const FORCED_LOGOFF = 'ForcedLogoff';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DECRYPTION,
            self::HACK,
            self::EXPIRED,
            self::HIJACK,
            self::DOUBLE_LOGON,
            self::GARBAGE,
            self::LOGOFF,
            self::BAD_AUTH,
            self::LOCKED,
            self::INACTIVE,
            self::INVALID_USER,
            self::BAD_USER_TYPE,
            self::BAD_IP,
            self::FORCED_LOGOFF
        ];
    }
}


