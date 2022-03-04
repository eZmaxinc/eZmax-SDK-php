<?php
/**
 * FieldEEzsigntemplatepackageType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.1.6
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsigntemplatepackageType Class Doc Comment
 *
 * @category Class
 * @description The type of the Ezsigntemplatepackage.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigntemplatepackageType
{
    /**
     * Possible values of this enum
     */
    const COMPANY = 'Company';

    const DEPARTMENT = 'Department';

    const TEAM = 'Team';

    const USER = 'User';

    const USERGROUP = 'Usergroup';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COMPANY,
            self::DEPARTMENT,
            self::TEAM,
            self::USER,
            self::USERGROUP
        ];
    }
}


