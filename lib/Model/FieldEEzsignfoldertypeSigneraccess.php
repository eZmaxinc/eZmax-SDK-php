<?php
/**
 * FieldEEzsignfoldertypeSigneraccess
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
 * FieldEEzsignfoldertypeSigneraccess Class Doc Comment
 *
 * @category Class
 * @description Indicates which documents the user has access to.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignfoldertypeSigneraccess
{
    /**
     * Possible values of this enum
     */
    public const NO = 'No';

    public const SIGNER_DOCUMENTS = 'SignerDocuments';

    public const ALL_DOCUMENTS = 'AllDocuments';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO,
            self::SIGNER_DOCUMENTS,
            self::ALL_DOCUMENTS
        ];
    }
}


