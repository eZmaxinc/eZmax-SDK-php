<?php
/**
 * FieldEEzsigntemplatesignerMapping
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
 * FieldEEzsigntemplatesignerMapping Class Doc Comment
 *
 * @category Class
 * @description Mapping configuration to use when template is apply to an document.  1. **Manual** User need to choose mapping manually. 2. **Creator** mapping will be set to creator of template. 3. **User** mapping will be set to fkiUserID 4. **Usergroup** mapping will be set to fkiUsergroupID.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigntemplatesignerMapping
{
    /**
     * Possible values of this enum
     */
    public const MANUAL = 'Manual';

    public const CREATOR = 'Creator';

    public const USER = 'User';

    public const USERGROUP = 'Usergroup';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MANUAL,
            self::CREATOR,
            self::USER,
            self::USERGROUP
        ];
    }
}


