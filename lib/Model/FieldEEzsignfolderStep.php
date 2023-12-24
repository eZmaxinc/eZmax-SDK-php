<?php
/**
 * FieldEEzsignfolderStep
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
    public const UNSENT = 'Unsent';

    public const PENDING_SEND = 'PendingSend';

    public const SENT = 'Sent';

    public const PARTIALLY_SIGNED = 'PartiallySigned';

    public const EXPIRED = 'Expired';

    public const COMPLETED = 'Completed';

    public const ARCHIVED = 'Archived';

    public const DISPOSED = 'Disposed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSENT,
            self::PENDING_SEND,
            self::SENT,
            self::PARTIALLY_SIGNED,
            self::EXPIRED,
            self::COMPLETED,
            self::ARCHIVED,
            self::DISPOSED
        ];
    }
}


