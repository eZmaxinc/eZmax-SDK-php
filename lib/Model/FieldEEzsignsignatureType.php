<?php
/**
 * FieldEEzsignsignatureType
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
 * FieldEEzsignsignatureType Class Doc Comment
 *
 * @category Class
 * @description The type of signature.  1. **Acknowledgement** is for an acknowledgment of receipt. 2. **Attachments** is to ask for files as attachment that may be validate in another step.  3. **City** is to request the city where the document is signed. 4. **Consultation** is to trigger the webhook Signaturesigned when the user consult the document 5. **Creditcard** is to ask for a payment using a creditcard 6. **FieldText** is to ask for a short text. 7. **Fieldtextarea** is to ask for a text     8. **Handwritten** is for a handwritten kind of signature where users needs to \&quot;draw\&quot; their signature on screen. **DEPRECATED** 9. **Initials** is a simple \&quot;click to add initials\&quot; block. 10. **Name** is a simple \&quot;Click to sign\&quot; block. This is the most common block of signature. **DEPRECATED** 11. **NameReason** is to ask for a signing reason. **DEPRECATED** 12. **Signature** is the type replacing **Name** and **Handwritten** and will support a font or svg
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignsignatureType
{
    /**
     * Possible values of this enum
     */
    public const ACKNOWLEDGEMENT = 'Acknowledgement';

    public const ATTACHMENTS = 'Attachments';

    public const ATTACHMENTS_CONFIRMATION = 'AttachmentsConfirmation';

    public const CITY = 'City';

    public const CONSULTATION = 'Consultation';

    public const CREDITCARD = 'Creditcard';

    public const FIELD_TEXT = 'FieldText';

    public const FIELD_TEXTAREA = 'FieldTextarea';

    public const HANDWRITTEN = 'Handwritten';

    public const INITIALS = 'Initials';

    public const NAME = 'Name';

    public const NAME_REASON = 'NameReason';

    public const SIGNATURE = 'Signature';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACKNOWLEDGEMENT,
            self::ATTACHMENTS,
            self::ATTACHMENTS_CONFIRMATION,
            self::CITY,
            self::CONSULTATION,
            self::CREDITCARD,
            self::FIELD_TEXT,
            self::FIELD_TEXTAREA,
            self::HANDWRITTEN,
            self::INITIALS,
            self::NAME,
            self::NAME_REASON,
            self::SIGNATURE
        ];
    }
}


