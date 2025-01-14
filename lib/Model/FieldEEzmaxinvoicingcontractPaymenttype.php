<?php
/**
 * FieldEEzmaxinvoicingcontractPaymenttype
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzmaxinvoicingcontractPaymenttype Class Doc Comment
 *
 * @category Class
 * @description The Ezmaxinvoicingcontract payment type
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzmaxinvoicingcontractPaymenttype
{
    /**
     * Possible values of this enum
     */
    public const CHEQUE = 'Cheque';

    public const CREDIT_CARD = 'CreditCard';

    public const DIRECT_DEBIT = 'DirectDebit';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHEQUE,
            self::CREDIT_CARD,
            self::DIRECT_DEBIT
        ];
    }
}


