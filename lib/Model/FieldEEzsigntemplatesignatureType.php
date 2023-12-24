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
 * FieldEEzsigntemplatesignatureType Class Doc Comment
 *
 * @category Class
 * @description The type of signature.  1. **Acknowledgement** is for an acknowledgment of receipt. 2. **City** is to request the city where the document is signed. 3. **Handwritten** is for a handwritten kind of signature where users needs to \&quot;draw\&quot; their signature on screen. 4. **Initials** is a simple \&quot;click to add initials\&quot; block. 5. **Name** is a simple \&quot;Click to sign\&quot; block. This is the most common block of signature. 6. **NameReason** is to ask for a signing reason.  7. **Attachments** is to ask for files as attachment that may be validate in another step.
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

    public const NAME_REASON = 'NameReason';

    public const ATTACHMENTS = 'Attachments';

    public const FIELD_TEXT = 'FieldText';

    public const FIELD_TEXTAREA = 'FieldTextarea';

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
            self::NAME,
            self::NAME_REASON,
            self::ATTACHMENTS,
            self::FIELD_TEXT,
            self::FIELD_TEXTAREA
        ];
    }
}


