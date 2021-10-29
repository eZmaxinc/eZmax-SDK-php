<?php
/**
 * FieldEEzsignfolderSendreminderfrequency
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
 * The version of the OpenAPI document: 1.1.3
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsignfolderSendreminderfrequency Class Doc Comment
 *
 * @category Class
 * @description Frequency at which reminders will be sent to signers that haven&#39;t signed the documents
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignfolderSendreminderfrequency
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';

    const DAILY = 'Daily';

    const WEEKLY = 'Weekly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::DAILY,
            self::WEEKLY
        ];
    }
}


