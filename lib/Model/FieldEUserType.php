<?php
/**
 * FieldEUserType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign application.  We provide SDKs for customers. They are generated using OpenAPI codegen, we encourage customers to use them as we also provide samples for them.  You can choose to build your own implementation manually or can use any compatible OpenAPI 3.0 generator like Swagger Codegen, OpenAPI codegen or any commercial generators.  If you need helping understanding how to use this API, don't waste too much time looking for it. Contact support-api@ezmax.ca, we're here to help. We are developpers so we know programmers don't like bad documentation. If you don't find what you need in the documentation, let us know, we'll improve it and put you rapidly up on track.
 *
 * The version of the OpenAPI document: 1.0.26
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEUserType Class Doc Comment
 *
 * @category Class
 * @description The user type of the User.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEUserType
{
    /**
     * Possible values of this enum
     */
    const AGENT_BROKER = 'AgentBroker';
    const ASSISTANT = 'Assistant';
    const ATTENDANCE = 'Attendance';
    const CUSTOMER = 'Customer';
    const EMPLOYEE = 'Employee';
    const EZCOM = 'Ezcom';
    const EZSIGN_SIGNER = 'EzsignSigner';
    const EZSIGN_USER = 'EzsignUser';
    const FRANCHISE_CUSTOMER_SERVER = 'FranchiseCustomerServer';
    const NORMAL = 'Normal';
    const REWARD_ADMINISTRATION = 'RewardAdministration';
    const REWARD_MEMBER = 'RewardMember';
    const REWARD_REPRESENTATIVE = 'RewardRepresentative';
    const REWARD_CUSTOMER = 'RewardCustomer';
    const REWARD_DISTRIBUTOR_SERVER = 'RewardDistributorServer';
    const SUPPLIER = 'Supplier';
    const VETRX_CUSTOMER = 'VetrxCustomer';
    const VETRXCUSTOMERGROUP = 'Vetrxcustomergroup';
    const VETRX_CUSTOMER_SERVER = 'VetrxCustomerServer';
    const VETRX_MANUFACTURER = 'VetrxManufacturer';
    const VETRX_VENDOR = 'VetrxVendor';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENT_BROKER,
            self::ASSISTANT,
            self::ATTENDANCE,
            self::CUSTOMER,
            self::EMPLOYEE,
            self::EZCOM,
            self::EZSIGN_SIGNER,
            self::EZSIGN_USER,
            self::FRANCHISE_CUSTOMER_SERVER,
            self::NORMAL,
            self::REWARD_ADMINISTRATION,
            self::REWARD_MEMBER,
            self::REWARD_REPRESENTATIVE,
            self::REWARD_CUSTOMER,
            self::REWARD_DISTRIBUTOR_SERVER,
            self::SUPPLIER,
            self::VETRX_CUSTOMER,
            self::VETRXCUSTOMERGROUP,
            self::VETRX_CUSTOMER_SERVER,
            self::VETRX_MANUFACTURER,
            self::VETRX_VENDOR,
        ];
    }
}


