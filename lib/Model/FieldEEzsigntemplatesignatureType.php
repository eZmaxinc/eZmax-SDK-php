<?php
/**
 * FieldEEzsigntemplatesignatureType
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
 * The version of the OpenAPI document: 1.1.7
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsigntemplatesignatureType Class Doc Comment
 *
 * @category Class
 * @description The type of signature.  1. **Acknowledgement** is for an acknowledgment of receipt. 2. **City** is to request the city where the document is signed. 2. **Handwritten** is for a handwritten kind of signature where users needs to \&quot;draw\&quot; their signature on screen. 3. **Initials** is a simple \&quot;click to add initials\&quot; block. 4. **Name** is a simple \&quot;Click to sign\&quot; block. This is the most common block of signature.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigntemplatesignatureType
{
    /**
     * Possible values of this enum
     */
    public const ACKNOWLEDGEMENT = 'Acknowledgement';

    public const CITY = 'City';

    public const HANDWRITTEN = 'Handwritten';

    public const INITIALS = 'Initials';

    public const NAME = 'Name';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACKNOWLEDGEMENT,
            self::CITY,
            self::HANDWRITTEN,
            self::INITIALS,
            self::NAME
        ];
    }
}

