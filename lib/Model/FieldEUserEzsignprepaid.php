<?php
/**
 * FieldEUserEzsignprepaid
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
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEUserEzsignprepaid Class Doc Comment
 *
 * @category Class
 * @description Subscription level when a user has a Prepaid subscription.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEUserEzsignprepaid
{
    /**
     * Possible values of this enum
     */
    public const NO = 'No';

    public const BASIC = 'Basic';

    public const STANDARD = 'Standard';

    public const PRO = 'Pro';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO,
            self::BASIC,
            self::STANDARD,
            self::PRO
        ];
    }
}

