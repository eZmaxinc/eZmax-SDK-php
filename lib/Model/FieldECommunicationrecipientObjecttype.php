<?php
/**
 * FieldECommunicationrecipientObjecttype
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldECommunicationrecipientObjecttype Class Doc Comment
 *
 * @category Class
 * @description The object type for the Communicationrecipient
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldECommunicationrecipientObjecttype
{
    /**
     * Possible values of this enum
     */
    public const AGENT = 'Agent';

    public const AGENTINCORPORATION = 'Agentincorporation';

    public const ASSISTANT = 'Assistant';

    public const BROKER = 'Broker';

    public const CONTACT = 'Contact';

    public const CUSTOMER = 'Customer';

    public const EMPLOYEE = 'Employee';

    public const EXTERNALBROKER = 'Externalbroker';

    public const EZCOMAGENT = 'Ezcomagent';

    public const EZCOMCOMPANY = 'Ezcomcompany';

    public const EZSIGNSIGNER = 'Ezsignsigner';

    public const FRANCHISEOFFICE = 'Franchiseoffice';

    public const NOTARY = 'Notary';

    public const REWARDMEMBER = 'Rewardmember';

    public const SUPPLIER = 'Supplier';

    public const USER = 'User';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENT,
            self::AGENTINCORPORATION,
            self::ASSISTANT,
            self::BROKER,
            self::CONTACT,
            self::CUSTOMER,
            self::EMPLOYEE,
            self::EXTERNALBROKER,
            self::EZCOMAGENT,
            self::EZCOMCOMPANY,
            self::EZSIGNSIGNER,
            self::FRANCHISEOFFICE,
            self::NOTARY,
            self::REWARDMEMBER,
            self::SUPPLIER,
            self::USER
        ];
    }
}


