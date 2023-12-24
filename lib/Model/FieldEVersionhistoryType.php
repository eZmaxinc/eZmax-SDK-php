<?php
/**
 * FieldEVersionhistoryType
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEVersionhistoryType Class Doc Comment
 *
 * @category Class
 * @description The type of Versionhistory.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEVersionhistoryType
{
    /**
     * Possible values of this enum
     */
    public const AGENT_BROKER = 'AgentBroker';

    public const NEW_FEATURE = 'NewFeature';

    public const CORRECTION = 'Correction';

    public const MODIFICATION = 'Modification';

    public const IMPORTANT_MESSAGE = 'ImportantMessage';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENT_BROKER,
            self::NEW_FEATURE,
            self::CORRECTION,
            self::MODIFICATION,
            self::IMPORTANT_MESSAGE
        ];
    }
}


