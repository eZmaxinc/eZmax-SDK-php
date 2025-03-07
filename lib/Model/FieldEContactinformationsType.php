<?php
/**
 * FieldEContactinformationsType
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
 * FieldEContactinformationsType Class Doc Comment
 *
 * @category Class
 * @description The type of the Contactinformations
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEContactinformationsType
{
    /**
     * Possible values of this enum
     */
    public const BANK_ACCOUNT = 'BankAccount';

    public const CONTACT_OBJECT = 'ContactObject';

    public const CREDIT_CARD = 'CreditCard';

    public const CUSTOMER = 'Customer';

    public const EXTERNAL_BROKER = 'ExternalBroker';

    public const EXTERNAL_BROKER_FIRM = 'ExternalBrokerFirm';

    public const EZCOM_COMPANY = 'EzcomCompany';

    public const FINANCIAL_INSTITUTION = 'FinancialInstitution';

    public const FRANCHISE_COMPANY = 'FranchiseCompany';

    public const FRANCHISE_OFFICE = 'FranchiseOffice';

    public const SUPPLIER = 'Supplier';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BANK_ACCOUNT,
            self::CONTACT_OBJECT,
            self::CREDIT_CARD,
            self::CUSTOMER,
            self::EXTERNAL_BROKER,
            self::EXTERNAL_BROKER_FIRM,
            self::EZCOM_COMPANY,
            self::FINANCIAL_INSTITUTION,
            self::FRANCHISE_COMPANY,
            self::FRANCHISE_OFFICE,
            self::SUPPLIER
        ];
    }
}


