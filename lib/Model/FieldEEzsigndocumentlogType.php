<?php
/**
 * FieldEEzsigndocumentlogType
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
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsigndocumentlogType Class Doc Comment
 *
 * @category Class
 * @description The Ezsigndocumentlog Type.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsigndocumentlogType
{
    /**
     * Possible values of this enum
     */
    public const _CLONE = 'Clone';

    public const LOGIN = 'Login';

    public const SENDCODE = 'Sendcode';

    public const BADCODE = 'Badcode';

    public const GOODCODE = 'Goodcode';

    public const BADRESPONSE = 'Badresponse';

    public const GOODRESPONSE = 'Goodresponse';

    public const AUTHENTICATION = 'Authentication';

    public const CREATEPAGE = 'Createpage';

    public const DOWNLOAD = 'Download';

    public const SEND = 'Send';

    public const SIGN = 'Sign';

    public const UPLOAD = 'Upload';

    public const VIEW = 'View';

    public const COMPLETION = 'Completion';

    public const CHANGELIMITDATE = 'Changelimitdate';

    public const UNSIGN = 'Unsign';

    public const IMPORT_FROM_INSTANET = 'ImportFromInstanet';

    public const CREATED_FROM_EZSIGNTEMPLATEPUBLIC = 'CreatedFromEzsigntemplatepublic';

    public const SEND_EMAIL = 'SendEmail';

    public const FORM_COMPLETION = 'FormCompletion';

    public const FORM_SAVE_AS_DRAFT = 'FormSaveAsDraft';

    public const SIGNATURE_ATTACHMENT_ADD = 'SignatureAttachmentAdd';

    public const SIGNATURE_ATTACHMENT_VALIDATION = 'SignatureAttachmentValidation';

    public const SIGNATURE_ATTACHMENT_REFUSED = 'SignatureAttachmentRefused';

    public const SIGNATURE_ATTACHMENT_DELETED = 'SignatureAttachmentDeleted';

    public const DECLINED_TO_SIGN = 'DeclinedToSign';

    public const DELAYED_SEND_EMAIL = 'DelayedSendEmail';

    public const ANNOTATION_ADDED = 'AnnotationAdded';

    public const FLATTEN = 'Flatten';

    public const REGENERATE_PAGE = 'RegeneratePage';

    public const REGENERATE_PAGE_FORM = 'RegeneratePageForm';

    public const REASSIGN = 'Reassign';

    public const DOCUMENT_COMPLETION = 'DocumentCompletion';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_CLONE,
            self::LOGIN,
            self::SENDCODE,
            self::BADCODE,
            self::GOODCODE,
            self::BADRESPONSE,
            self::GOODRESPONSE,
            self::AUTHENTICATION,
            self::CREATEPAGE,
            self::DOWNLOAD,
            self::SEND,
            self::SIGN,
            self::UPLOAD,
            self::VIEW,
            self::COMPLETION,
            self::CHANGELIMITDATE,
            self::UNSIGN,
            self::IMPORT_FROM_INSTANET,
            self::CREATED_FROM_EZSIGNTEMPLATEPUBLIC,
            self::SEND_EMAIL,
            self::FORM_COMPLETION,
            self::FORM_SAVE_AS_DRAFT,
            self::SIGNATURE_ATTACHMENT_ADD,
            self::SIGNATURE_ATTACHMENT_VALIDATION,
            self::SIGNATURE_ATTACHMENT_REFUSED,
            self::SIGNATURE_ATTACHMENT_DELETED,
            self::DECLINED_TO_SIGN,
            self::DELAYED_SEND_EMAIL,
            self::ANNOTATION_ADDED,
            self::FLATTEN,
            self::REGENERATE_PAGE,
            self::REGENERATE_PAGE_FORM,
            self::REASSIGN,
            self::DOCUMENT_COMPLETION
        ];
    }
}


