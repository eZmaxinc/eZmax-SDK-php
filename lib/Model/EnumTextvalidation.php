<?php
/**
 * EnumTextvalidation
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * EnumTextvalidation Class Doc Comment
 *
 * @category Class
 * @description The text validation
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EnumTextvalidation
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const DATE__YYYY_MM_DD = 'Date (YYYY-MM-DD)';

    public const DATE__MM_DD_YYYY = 'Date (MM/DD/YYYY)';

    public const DATE__MM_DD_YY = 'Date (MM/DD/YY)';

    public const DATE__DD_MM_YYYY = 'Date (DD/MM/YYYY)';

    public const DATE__DD_MM_YY = 'Date (DD/MM/YY)';

    public const EMAIL = 'Email';

    public const LETTERS = 'Letters';

    public const NUMBERS = 'Numbers';

    public const ZIP = 'Zip';

    public const ZIP4 = 'Zip+4';

    public const POSTAL_CODE = 'PostalCode';

    public const CUSTOM = 'Custom';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::DATE__YYYY_MM_DD,
            self::DATE__MM_DD_YYYY,
            self::DATE__MM_DD_YY,
            self::DATE__DD_MM_YYYY,
            self::DATE__DD_MM_YY,
            self::EMAIL,
            self::LETTERS,
            self::NUMBERS,
            self::ZIP,
            self::ZIP4,
            self::POSTAL_CODE,
            self::CUSTOM
        ];
    }
}


