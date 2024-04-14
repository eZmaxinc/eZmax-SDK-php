<?php
/**
 * FieldEWebhookManagementevent
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
 * FieldEWebhookManagementevent Class Doc Comment
 *
 * @category Class
 * @description This Management Event. This property will be set only if the Module is \&quot;Management\&quot;.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEWebhookManagementevent
{
    /**
     * Possible values of this enum
     */
    public const USER_CREATED = 'UserCreated';

    public const USERSTAGED_CREATED = 'UserstagedCreated';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USER_CREATED,
            self::USERSTAGED_CREATED
        ];
    }
}


