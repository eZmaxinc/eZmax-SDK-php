<?php
/**
 * FieldEBrandingLogo
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
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEBrandingLogo Class Doc Comment
 *
 * @category Class
 * @description The logo for the Branding. Select the value &#39;Default&#39; if you want to use the default logo and delete the custom one if you used one
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEBrandingLogo
{
    /**
     * Possible values of this enum
     */
    public const _DEFAULT = 'Default';

    public const JPEG = 'JPEG';

    public const PNG = 'PNG';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::JPEG,
            self::PNG
        ];
    }
}


