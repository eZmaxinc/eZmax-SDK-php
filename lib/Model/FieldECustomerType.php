<?php
/**
 * FieldECustomerType
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
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldECustomerType Class Doc Comment
 *
 * @category Class
 * @description The type of the Customer
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldECustomerType
{
    /**
     * Possible values of this enum
     */
    public const NORMAL = 'Normal';

    public const VETRX_SERVER = 'Vetrx-Server';

    public const REWARD_ADMINISTRATION = 'Reward-Administration';

    public const REWARD_REPRESENTATIVE = 'Reward-Representative';

    public const REWARD_SERVER = 'Reward-Server';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::VETRX_SERVER,
            self::REWARD_ADMINISTRATION,
            self::REWARD_REPRESENTATIVE,
            self::REWARD_SERVER
        ];
    }
}


