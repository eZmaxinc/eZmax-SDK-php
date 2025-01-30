<?php
/**
 * FieldEEzsignfoldertypePdfarequirement
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
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsignfoldertypePdfarequirement Class Doc Comment
 *
 * @category Class
 * @description The PDF/a requirement of the Ezsignfolder type.  * **None** is for not enforcing the PDF/a * **Declared** is to check the value declared by the document * **Verified** is to verify the document to see the compliance. May takes more time processing the document
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignfoldertypePdfarequirement
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const DECLARED = 'Declared';

    public const VERIFIED = 'Verified';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::DECLARED,
            self::VERIFIED
        ];
    }
}


