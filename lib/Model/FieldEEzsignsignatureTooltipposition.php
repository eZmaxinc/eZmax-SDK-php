<?php
/**
 * FieldEEzsignsignatureTooltipposition
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
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsignsignatureTooltipposition Class Doc Comment
 *
 * @category Class
 * @description The location of the tooltip relative to the Ezsignsignature&#39;s location.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignsignatureTooltipposition
{
    /**
     * Possible values of this enum
     */
    public const TOP_LEFT = 'TopLeft';

    public const TOP_CENTER = 'TopCenter';

    public const TOP_RIGHT = 'TopRight';

    public const MIDDLE_LEFT = 'MiddleLeft';

    public const MIDDLE_RIGHT = 'MiddleRight';

    public const BOTTOM_LEFT = 'BottomLeft';

    public const BOTTOM_CENTER = 'BottomCenter';

    public const BOTTOM_RIGHT = 'BottomRight';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TOP_LEFT,
            self::TOP_CENTER,
            self::TOP_RIGHT,
            self::MIDDLE_LEFT,
            self::MIDDLE_RIGHT,
            self::BOTTOM_LEFT,
            self::BOTTOM_CENTER,
            self::BOTTOM_RIGHT
        ];
    }
}


