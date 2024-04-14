<?php
/**
 * FieldEAttachmentType
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
 * FieldEAttachmentType Class Doc Comment
 *
 * @category Class
 * @description The type of the Attachment
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEAttachmentType
{
    /**
     * Possible values of this enum
     */
    public const OTHER = 'Other';

    public const PDF = 'Pdf';

    public const PDF_GENERATED = 'PdfGenerated';

    public const PDF_SCANNED = 'PdfScanned';

    public const EZSIGN = 'Ezsign';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::PDF,
            self::PDF_GENERATED,
            self::PDF_SCANNED,
            self::EZSIGN
        ];
    }
}

