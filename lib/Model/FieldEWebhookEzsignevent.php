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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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

    public const DOCUMENT_FORM_COMPLETED = 'DocumentFormCompleted';

    public const DOCUMENT_UNSENT = 'DocumentUnsent';

    public const EZSIGNSIGNER_ACCEPTCLAUSE = 'EzsignsignerAcceptclause';

    public const EZSIGNSIGNER_CONNECT = 'EzsignsignerConnect';

    public const FOLDER_COMPLETED = 'FolderCompleted';

    public const FOLDER_DISPOSED = 'FolderDisposed';

    public const FOLDER_SENT = 'FolderSent';

    public const FOLDER_UNSENT = 'FolderUnsent';

    public const SIGNATURE_SIGNED = 'SignatureSigned';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOCUMENT_COMPLETED,
            self::DOCUMENT_FORM_COMPLETED,
            self::DOCUMENT_UNSENT,
            self::EZSIGNSIGNER_ACCEPTCLAUSE,
            self::EZSIGNSIGNER_CONNECT,
            self::FOLDER_COMPLETED,
            self::FOLDER_DISPOSED,
            self::FOLDER_SENT,
            self::FOLDER_UNSENT,
            self::SIGNATURE_SIGNED
        ];
    }
}


