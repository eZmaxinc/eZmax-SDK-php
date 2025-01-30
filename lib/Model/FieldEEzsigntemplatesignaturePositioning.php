<?php
/**
 * FieldEEzsigntemplatesignaturePositioning
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
 * The version of the OpenAPI document: 1.2.2
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
 * FieldEEzsigntemplatesignaturePositioning Class Doc Comment
 *
 * @category Class
 * @description How the positioning of the Ezsigntemplatesignature will be done
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigntemplatesignaturePositioning
{
    /**
     * Possible values of this enum
     */
    public const PER_COORDINATES = 'PerCoordinates';

    public const PER_POSITIONING_PATTERN = 'PerPositioningPattern';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PER_COORDINATES,
            self::PER_POSITIONING_PATTERN
        ];
    }
}


