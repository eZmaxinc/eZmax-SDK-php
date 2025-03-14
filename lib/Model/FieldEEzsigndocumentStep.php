<?php
/**
 * FieldEEzsigndocumentStep
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
 * FieldEEzsigndocumentStep Class Doc Comment
 *
 * @category Class
 * @description The signature step of the Ezsigndocument.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigndocumentStep
{
    /**
     * Possible values of this enum
     */
    public const UNSENT = 'Unsent';

    public const UNSIGNED = 'Unsigned';

    public const PARTIALLY_SIGNED = 'PartiallySigned';

    public const DECLINED_TO_SIGN = 'DeclinedToSign';

    public const PREMATURELY_ENDED = 'PrematurelyEnded';

    public const PENDING_COMPLETION = 'PendingCompletion';

    public const COMPLETED = 'Completed';

    public const DISPOSED = 'Disposed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSENT,
            self::UNSIGNED,
            self::PARTIALLY_SIGNED,
            self::DECLINED_TO_SIGN,
            self::PREMATURELY_ENDED,
            self::PENDING_COMPLETION,
            self::COMPLETED,
            self::DISPOSED
        ];
    }
}


