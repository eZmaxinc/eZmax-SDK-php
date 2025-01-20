<?php
/**
 * FieldEUserType
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEUserType Class Doc Comment
 *
 * @category Class
 * @description The user type of the User.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEUserType
{
    /**
     * Possible values of this enum
     */
    public const AGENT_BROKER = 'AgentBroker';

    public const ASSISTANT = 'Assistant';

    public const EMPLOYEE = 'Employee';

    public const EZSIGN_USER = 'EzsignUser';

    public const NORMAL = 'Normal';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENT_BROKER,
            self::ASSISTANT,
            self::EMPLOYEE,
            self::EZSIGN_USER,
            self::NORMAL
        ];
    }
}


