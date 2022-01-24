<?php
/**
 * FieldEEzsigndocumentStep
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
 * The version of the OpenAPI document: 1.1.4
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
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
    const UNSENT = 'Unsent';

    const UNSIGNED = 'Unsigned';

    const PARTIALLY_SIGNED = 'PartiallySigned';

    const DECLINED_TO_SIGN = 'DeclinedToSign';

    const PREMATURELY_ENDED = 'PrematurelyEnded';

    const COMPLETED = 'Completed';

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
            self::COMPLETED
        ];
    }
}


