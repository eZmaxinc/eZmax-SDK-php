<?php
/**
 * FieldEEzsigntemplateformfieldgroupType
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
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsigntemplateformfieldgroupType Class Doc Comment
 *
 * @category Class
 * @description The Type of Ezsigntemplateformfieldgroup
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigntemplateformfieldgroupType
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'Text';

    public const TEXTAREA = 'Textarea';

    public const DROPDOWN = 'Dropdown';

    public const RADIO = 'Radio';

    public const CHECKBOX = 'Checkbox';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::TEXTAREA,
            self::DROPDOWN,
            self::RADIO,
            self::CHECKBOX
        ];
    }
}


