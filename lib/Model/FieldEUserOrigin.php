<?php
/**
 * FieldEUserOrigin
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEUserOrigin Class Doc Comment
 *
 * @category Class
 * @description The origin of the User
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEUserOrigin
{
    /**
     * Possible values of this enum
     */
    public const BUILT_IN = 'BuiltIn';

    public const EXTERNAL = 'External';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUILT_IN,
            self::EXTERNAL
        ];
    }
}


