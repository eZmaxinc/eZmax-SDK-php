<?php
/**
 * FieldEEzsignelementdependencyOperator
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsignelementdependencyOperator Class Doc Comment
 *
 * @category Class
 * @description The operator of the Ezsignelementdependency
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignelementdependencyOperator
{
    /**
     * Possible values of this enum
     */
    public const EQ = 'eq';

    public const NEQ = 'neq';

    public const GT = 'gt';

    public const GTE = 'gte';

    public const LT = 'lt';

    public const LTE = 'lte';

    public const IN = 'in';

    public const NIN = 'nin';

    public const RG = 'rg';

    public const LIKE = 'like';

    public const BETWEEN = 'between';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EQ,
            self::NEQ,
            self::GT,
            self::GTE,
            self::LT,
            self::LTE,
            self::IN,
            self::NIN,
            self::RG,
            self::LIKE,
            self::BETWEEN
        ];
    }
}


