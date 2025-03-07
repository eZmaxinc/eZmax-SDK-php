<?php
/**
 * FieldECreditcardtransactionAvsresult
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
 * FieldECreditcardtransactionAvsresult Class Doc Comment
 *
 * @category Class
 * @description The result for the address validation
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldECreditcardtransactionAvsresult
{
    /**
     * Possible values of this enum
     */
    public const MATCH = 'Match';

    public const NO_MATCH = 'NoMatch';

    public const PARTIAL_MATCH = 'PartialMatch';

    public const NOT_IMPLEMENTED = 'NotImplemented';

    public const NOT_VERIFIED = 'NotVerified';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MATCH,
            self::NO_MATCH,
            self::PARTIAL_MATCH,
            self::NOT_IMPLEMENTED,
            self::NOT_VERIFIED
        ];
    }
}


