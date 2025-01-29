<?php
/**
 * FieldPksEzmaxclientOs
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
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldPksEzmaxclientOs Class Doc Comment
 *
 * @category Class
 * @description The OS of the system running the application
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldPksEzmaxclientOs
{
    /**
     * Possible values of this enum
     */
    public const ANDROID = 'Android';

    public const I_OS = 'iOS';

    public const I_PAD_OS = 'iPadOS';

    public const MAC_OS = 'macOS';

    public const WINDOWS = 'Windows';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ANDROID,
            self::I_OS,
            self::I_PAD_OS,
            self::MAC_OS,
            self::WINDOWS
        ];
    }
}


