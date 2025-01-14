<?php
/**
 * FieldEAttachmentlogType
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
 * FieldEAttachmentlogType Class Doc Comment
 *
 * @category Class
 * @description The Type for the Attachmentlog
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEAttachmentlogType
{
    /**
     * Possible values of this enum
     */
    public const AUTO_VALIDATION = 'AutoValidation';

    public const COPY_FROM = 'CopyFrom';

    public const COPY_TO = 'CopyTo';

    public const COPY_TO_EZSIGN = 'CopyToEzsign';

    public const CREATE_BY_EZSIGN = 'CreateByEzsign';

    public const DOWNLOAD = 'Download';

    public const DELETED = 'Deleted';

    public const DESTROYED = 'Destroyed';

    public const EMAIL = 'Email';

    public const EMAIL_CC = 'EmailCC';

    public const EMAIL_CCI = 'EmailCCI';

    public const FAX = 'Fax';

    public const IMPORTED_FROM_EXTERNAL_SYSTEM = 'ImportedFromExternalSystem';

    public const IMPORTED_FROM_EZA = 'ImportedFromEZA';

    public const IMPORTED_FROM_FALTOUR = 'ImportedFromFaltour';

    public const IMPORTED_FROM_LONEWOLF = 'ImportedFromLonewolf';

    public const IMPORTED_FROM_PROSPECTS = 'ImportedFromProspects';

    public const MOVE = 'Move';

    public const OPEN_FROM_EMAIL = 'OpenFromEmail';

    public const PURGED = 'Purged';

    public const REJECT = 'Reject';

    public const RENAME = 'Rename';

    public const RESTORE = 'Restore';

    public const SCANNED = 'Scanned';

    public const SEND_TO_GED = 'SendToGED';

    public const UNVALIDATED_BY = 'UnvalidatedBy';

    public const UPLOAD = 'Upload';

    public const VALIDATED_BY = 'ValidatedBy';

    public const VETINFO_UPLOAD = 'VetinfoUpload';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTO_VALIDATION,
            self::COPY_FROM,
            self::COPY_TO,
            self::COPY_TO_EZSIGN,
            self::CREATE_BY_EZSIGN,
            self::DOWNLOAD,
            self::DELETED,
            self::DESTROYED,
            self::EMAIL,
            self::EMAIL_CC,
            self::EMAIL_CCI,
            self::FAX,
            self::IMPORTED_FROM_EXTERNAL_SYSTEM,
            self::IMPORTED_FROM_EZA,
            self::IMPORTED_FROM_FALTOUR,
            self::IMPORTED_FROM_LONEWOLF,
            self::IMPORTED_FROM_PROSPECTS,
            self::MOVE,
            self::OPEN_FROM_EMAIL,
            self::PURGED,
            self::REJECT,
            self::RENAME,
            self::RESTORE,
            self::SCANNED,
            self::SEND_TO_GED,
            self::UNVALIDATED_BY,
            self::UPLOAD,
            self::VALIDATED_BY,
            self::VETINFO_UPLOAD
        ];
    }
}


