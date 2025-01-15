<?php
/**
 * FieldEEzsigntemplateformfieldPositioningoccurence
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
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsigntemplateformfieldPositioningoccurence Class Doc Comment
 *
 * @category Class
 * @description The occurence of the pattern to add the Ezsigntemplateformfield  This will be required if **eEzsigntemplateformfieldPositioning** is set to **PerCoordinates**
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigntemplateformfieldPositioningoccurence
{
    /**
     * Possible values of this enum
     */
    public const ALL = 'All';

    public const FIRST = 'First';

    public const LAST = 'Last';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::FIRST,
            self::LAST
        ];
    }
}


