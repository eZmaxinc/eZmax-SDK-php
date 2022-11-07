<?php
/**
 * FieldEEzmaxinvoicingPaymenttype
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
 * The version of the OpenAPI document: 1.1.15
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzmaxinvoicingPaymenttype Class Doc Comment
 *
 * @category Class
 * @description The Ezmaxinvoicing payment type
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzmaxinvoicingPaymenttype
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


