<?php
/**
 * FieldEEzsignfolderStep
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.0.44
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsignfolderStep Class Doc Comment
 *
 * @category Class
 * @description The signature step of the Ezsignfolder.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignfolderStep
{
    /**
     * Possible values of this enum
     */
    const UNSENT = 'Unsent';
    const SENT = 'Sent';
    const PARTIALLY_SIGNED = 'PartiallySigned';
    const EXPIRED = 'Expired';
    const SIGNED = 'Signed';
    const COMPLETED = 'Completed';
    const ARCHIVED = 'Archived';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSENT,
            self::SENT,
            self::PARTIALLY_SIGNED,
            self::EXPIRED,
            self::SIGNED,
            self::COMPLETED,
            self::ARCHIVED,
        ];
    }
}


?>