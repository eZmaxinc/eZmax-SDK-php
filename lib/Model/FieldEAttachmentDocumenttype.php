<?php
/**
 * FieldEAttachmentDocumenttype
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
 * FieldEAttachmentDocumenttype Class Doc Comment
 *
 * @category Class
 * @description The documenttype of the Attachment
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEAttachmentDocumenttype
{
    /**
     * Possible values of this enum
     */
    public const ADJUSTMENT = 'Adjustment';

    public const AGENT = 'Agent';

    public const BANKACCOUNT = 'Bankaccount';

    public const BROKER = 'Broker';

    public const BUYERCONTRACT = 'Buyercontract';

    public const COMMISSIONADVANCE = 'Commissionadvance';

    public const COMMUNICATION = 'Communication';

    public const CUSTOMER = 'Customer';

    public const CUSTOMERTEMPLATE = 'Customertemplate';

    public const DEPOSIT = 'Deposit';

    public const DEPOSITTRANSITCHEQUE = 'Deposittransitcheque';

    public const DISCLOSURE = 'Disclosure';

    public const ELECTRONICFUNDSTRANSFER = 'Electronicfundstransfer';

    public const EMPLOYEE = 'Employee';

    public const EXTERNALBROKER = 'Externalbroker';

    public const EZCOMADVANCESERVER = 'Ezcomadvanceserver';

    public const EZCOMCOMPANY = 'Ezcomcompany';

    public const EZSIGNDOCUMENT = 'Ezsigndocument';

    public const EZSIGNDOCUMENT_PROOF = 'EzsigndocumentProof';

    public const EZSIGNDOCUMENT_PROOFDOCUMENT = 'EzsigndocumentProofdocument';

    public const EZSIGNDOCUMENTGROUP = 'Ezsigndocumentgroup';

    public const EZSIGNDOCUMENTGROUP_PROOF = 'EzsigndocumentgroupProof';

    public const EZSIGNDOCUMENTGROUP_PROOFDOCUMENT = 'EzsigndocumentgroupProofdocument';

    public const EZSIGNDOCUMENT_ATTACHMENT = 'EzsigndocumentAttachment';

    public const FOLDER = 'Folder';

    public const FRANCHISEAGENCE = 'Franchiseagence';

    public const FRANCHISEBROKER = 'Franchisebroker';

    public const FRANCHISECOMPLAINT = 'Franchisecomplaint';

    public const FRANCHISEFRANCHISE = 'Franchisefranchise';

    public const FRANCHISEOFFICE = 'Franchiseoffice';

    public const GHACQCONTRACT = 'Ghacqcontract';

    public const INSCRIPTION = 'Inscription';

    public const INSCRIPTIONNOTAUTHENTICATED = 'Inscriptionnotauthenticated';

    public const INSCRIPTIONTEMP = 'Inscriptiontemp';

    public const INVOICE = 'Invoice';

    public const LEAD = 'Lead';

    public const MARKETINGFOLLOW = 'Marketingfollow';

    public const MARKETINGPROGRAM = 'Marketingprogram';

    public const NOTARY = 'Notary';

    public const OFFICETAXREPORT = 'Officetaxreport';

    public const OTHERINCOME = 'Otherincome';

    public const PAYMENTPREPARATION = 'Paymentpreparation';

    public const PURCHASE = 'Purchase';

    public const RECONCILIATION = 'Reconciliation';

    public const REJECTEDOFFERTOPURCHASE = 'Rejectedoffertopurchase';

    public const SALARY = 'Salary';

    public const SUPPLIER = 'Supplier';

    public const TEMPLATE = 'Template';

    public const TRANQCONTRACT = 'Tranqcontract';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADJUSTMENT,
            self::AGENT,
            self::BANKACCOUNT,
            self::BROKER,
            self::BUYERCONTRACT,
            self::COMMISSIONADVANCE,
            self::COMMUNICATION,
            self::CUSTOMER,
            self::CUSTOMERTEMPLATE,
            self::DEPOSIT,
            self::DEPOSITTRANSITCHEQUE,
            self::DISCLOSURE,
            self::ELECTRONICFUNDSTRANSFER,
            self::EMPLOYEE,
            self::EXTERNALBROKER,
            self::EZCOMADVANCESERVER,
            self::EZCOMCOMPANY,
            self::EZSIGNDOCUMENT,
            self::EZSIGNDOCUMENT_PROOF,
            self::EZSIGNDOCUMENT_PROOFDOCUMENT,
            self::EZSIGNDOCUMENTGROUP,
            self::EZSIGNDOCUMENTGROUP_PROOF,
            self::EZSIGNDOCUMENTGROUP_PROOFDOCUMENT,
            self::EZSIGNDOCUMENT_ATTACHMENT,
            self::FOLDER,
            self::FRANCHISEAGENCE,
            self::FRANCHISEBROKER,
            self::FRANCHISECOMPLAINT,
            self::FRANCHISEFRANCHISE,
            self::FRANCHISEOFFICE,
            self::GHACQCONTRACT,
            self::INSCRIPTION,
            self::INSCRIPTIONNOTAUTHENTICATED,
            self::INSCRIPTIONTEMP,
            self::INVOICE,
            self::LEAD,
            self::MARKETINGFOLLOW,
            self::MARKETINGPROGRAM,
            self::NOTARY,
            self::OFFICETAXREPORT,
            self::OTHERINCOME,
            self::PAYMENTPREPARATION,
            self::PURCHASE,
            self::RECONCILIATION,
            self::REJECTEDOFFERTOPURCHASE,
            self::SALARY,
            self::SUPPLIER,
            self::TEMPLATE,
            self::TRANQCONTRACT
        ];
    }
}


