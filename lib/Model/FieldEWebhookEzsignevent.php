<?php
/**
 * FieldEWebhookEzsignevent
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
 * FieldEWebhookEzsignevent Class Doc Comment
 *
 * @category Class
 * @description This Ezsign Event. This property will be set only if the Module is \&quot;Ezsign\&quot;
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEWebhookEzsignevent
{
    /**
     * Possible values of this enum
     */
    public const DOCUMENT_COMPLETED = 'DocumentCompleted';

    public const EZSIGNSIGNER_ACCEPTCLAUSE = 'EzsignsignerAcceptclause';

    public const EZSIGNSIGNER_CONNECT = 'EzsignsignerConnect';

    public const FOLDER_COMPLETED = 'FolderCompleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOCUMENT_COMPLETED,
            self::EZSIGNSIGNER_ACCEPTCLAUSE,
            self::EZSIGNSIGNER_CONNECT,
            self::FOLDER_COMPLETED
        ];
    }
}


