<?php
/**
 * FieldEErrorCode
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
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEErrorCode Class Doc Comment
 *
 * @category Class
 * @description The error code. See documentation for valid values
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEErrorCode
{
    /**
     * Possible values of this enum
     */
    public const BADREQUEST = 'BADREQUEST';

    public const BADREQUEST_CLOCKSKEW = 'BADREQUEST_CLOCKSKEW';

    public const UNAUTHORIZED_BADAUTH = 'UNAUTHORIZED_BADAUTH';

    public const UNAUTHORIZED_BADMFA = 'UNAUTHORIZED_BADMFA';

    public const UNAUTHORIZED_EXPIRED = 'UNAUTHORIZED_EXPIRED';

    public const UNAUTHORIZED_REQUEST = 'UNAUTHORIZED_REQUEST';

    public const FORBIDDEN = 'FORBIDDEN';

    public const FORBIDDEN_CONFIGURATION = 'FORBIDDEN_CONFIGURATION';

    public const FORBIDDEN_MODULE = 'FORBIDDEN_MODULE';

    public const FORBIDDEN_NOACCESS = 'FORBIDDEN_NOACCESS';

    public const FORBIDDEN_PERMISSION = 'FORBIDDEN_PERMISSION';

    public const FORBIDDEN_SUBSCRIPTION = 'FORBIDDEN_SUBSCRIPTION';

    public const FORBIDDEN_USERTYPE = 'FORBIDDEN_USERTYPE';

    public const FORBIDDEN_USER_ORIGIN_EXTERNAL = 'FORBIDDEN_USER_ORIGIN_EXTERNAL';

    public const NOTFOUND = 'NOTFOUND';

    public const NOTFOUND_OBJECT = 'NOTFOUND_OBJECT';

    public const NOTFOUND_ROUTE = 'NOTFOUND_ROUTE';

    public const METHODNOTALLOWED = 'METHODNOTALLOWED';

    public const NOTACCEPTABLE_CONTENT = 'NOTACCEPTABLE_CONTENT';

    public const NOTACCEPTABLE_LANGUAGE = 'NOTACCEPTABLE_LANGUAGE';

    public const UNPROCESSABLEENTITY_ACTIVESESSION_ALREADY_CLONING = 'UNPROCESSABLEENTITY_ACTIVESESSION_ALREADY_CLONING';

    public const UNPROCESSABLEENTITY_CANNOTDELETE = 'UNPROCESSABLEENTITY_CANNOTDELETE';

    public const UNPROCESSABLEENTITY_CANNOTMODIFY = 'UNPROCESSABLEENTITY_CANNOTMODIFY';

    public const UNPROCESSABLEENTITY_CHANGEPASSWORD_INVALID_CURRENT = 'UNPROCESSABLEENTITY_CHANGEPASSWORD_INVALID_CURRENT';

    public const UNPROCESSABLEENTITY_CHANGEPASSWORD_SAME = 'UNPROCESSABLEENTITY_CHANGEPASSWORD_SAME';

    public const UNPROCESSABLEENTITY_DATA_MISSING = 'UNPROCESSABLEENTITY_DATA_MISSING';

    public const UNPROCESSABLEENTITY_DATA_UNIQUE = 'UNPROCESSABLEENTITY_DATA_UNIQUE';

    public const UNPROCESSABLEENTITY_DATA_VALIDATION = 'UNPROCESSABLEENTITY_DATA_VALIDATION';

    public const UNPROCESSABLEENTITY_DATA_OUTOFBOUND = 'UNPROCESSABLEENTITY_DATA_OUTOFBOUND';

    public const UNPROCESSABLEENTITY_DOWNLOAD_ERROR = 'UNPROCESSABLEENTITY_DOWNLOAD_ERROR';

    public const UNPROCESSABLEENTITY_EZSIGNFORM_VALIDATION = 'UNPROCESSABLEENTITY_EZSIGNFORM_VALIDATION';

    public const UNPROCESSABLEENTITY_EZSIGNSIGNERCONNECTED = 'UNPROCESSABLEENTITY_EZSIGNSIGNERCONNECTED';

    public const UNPROCESSABLEENTITY_NOTHINGTODO = 'UNPROCESSABLEENTITY_NOTHINGTODO';

    public const UNPROCESSABLEENTITY_NOTREADY = 'UNPROCESSABLEENTITY_NOTREADY';

    public const UNPROCESSABLEENTITY_PDF_FORM = 'UNPROCESSABLEENTITY_PDF_FORM';

    public const UNPROCESSABLEENTITY_PDF_SIGNATURE = 'UNPROCESSABLEENTITY_PDF_SIGNATURE';

    public const UNPROCESSABLEENTITY_PDF_FORM_AND_SIGNATURE = 'UNPROCESSABLEENTITY_PDF_FORM_AND_SIGNATURE';

    public const UNPROCESSABLEENTITY_PDF_INCOMPATIBLE = 'UNPROCESSABLEENTITY_PDF_INCOMPATIBLE';

    public const UNPROCESSABLEENTITY_PDF_PASSWORD = 'UNPROCESSABLEENTITY_PDF_PASSWORD';

    public const UNPROCESSABLEENTITY_PDF_WRONG_PASSWORD = 'UNPROCESSABLEENTITY_PDF_WRONG_PASSWORD';

    public const UNPROCESSABLEENTITY_PDF_REPAIRABLE = 'UNPROCESSABLEENTITY_PDF_REPAIRABLE';

    public const UNPROCESSABLEENTITY_PDF_XFA = 'UNPROCESSABLEENTITY_PDF_XFA';

    public const UNPROCESSABLEENTITY_TEMPLATE_MISMATCH = 'UNPROCESSABLEENTITY_TEMPLATE_MISMATCH';

    public const UNPROCESSABLEENTITY_UNMODIFIABLE_FIELD = 'UNPROCESSABLEENTITY_UNMODIFIABLE_FIELD';

    public const UNPROCESSABLEENTITY_USER_STAGED = 'UNPROCESSABLEENTITY_USER_STAGED';

    public const TOOMANYREQUESTS = 'TOOMANYREQUESTS';

    public const TOOMANYREQUESTS_THIRDPARTY = 'TOOMANYREQUESTS_THIRDPARTY';

    public const ERROR_INTERNAL = 'ERROR_INTERNAL';

    public const ERROR_CONFIGURATION = 'ERROR_CONFIGURATION';

    public const ERROR_NOTIMPLEMENTED = 'ERROR_NOTIMPLEMENTED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BADREQUEST,
            self::BADREQUEST_CLOCKSKEW,
            self::UNAUTHORIZED_BADAUTH,
            self::UNAUTHORIZED_BADMFA,
            self::UNAUTHORIZED_EXPIRED,
            self::UNAUTHORIZED_REQUEST,
            self::FORBIDDEN,
            self::FORBIDDEN_CONFIGURATION,
            self::FORBIDDEN_MODULE,
            self::FORBIDDEN_NOACCESS,
            self::FORBIDDEN_PERMISSION,
            self::FORBIDDEN_SUBSCRIPTION,
            self::FORBIDDEN_USERTYPE,
            self::FORBIDDEN_USER_ORIGIN_EXTERNAL,
            self::NOTFOUND,
            self::NOTFOUND_OBJECT,
            self::NOTFOUND_ROUTE,
            self::METHODNOTALLOWED,
            self::NOTACCEPTABLE_CONTENT,
            self::NOTACCEPTABLE_LANGUAGE,
            self::UNPROCESSABLEENTITY_ACTIVESESSION_ALREADY_CLONING,
            self::UNPROCESSABLEENTITY_CANNOTDELETE,
            self::UNPROCESSABLEENTITY_CANNOTMODIFY,
            self::UNPROCESSABLEENTITY_CHANGEPASSWORD_INVALID_CURRENT,
            self::UNPROCESSABLEENTITY_CHANGEPASSWORD_SAME,
            self::UNPROCESSABLEENTITY_DATA_MISSING,
            self::UNPROCESSABLEENTITY_DATA_UNIQUE,
            self::UNPROCESSABLEENTITY_DATA_VALIDATION,
            self::UNPROCESSABLEENTITY_DATA_OUTOFBOUND,
            self::UNPROCESSABLEENTITY_DOWNLOAD_ERROR,
            self::UNPROCESSABLEENTITY_EZSIGNFORM_VALIDATION,
            self::UNPROCESSABLEENTITY_EZSIGNSIGNERCONNECTED,
            self::UNPROCESSABLEENTITY_NOTHINGTODO,
            self::UNPROCESSABLEENTITY_NOTREADY,
            self::UNPROCESSABLEENTITY_PDF_FORM,
            self::UNPROCESSABLEENTITY_PDF_SIGNATURE,
            self::UNPROCESSABLEENTITY_PDF_FORM_AND_SIGNATURE,
            self::UNPROCESSABLEENTITY_PDF_INCOMPATIBLE,
            self::UNPROCESSABLEENTITY_PDF_PASSWORD,
            self::UNPROCESSABLEENTITY_PDF_WRONG_PASSWORD,
            self::UNPROCESSABLEENTITY_PDF_REPAIRABLE,
            self::UNPROCESSABLEENTITY_PDF_XFA,
            self::UNPROCESSABLEENTITY_TEMPLATE_MISMATCH,
            self::UNPROCESSABLEENTITY_UNMODIFIABLE_FIELD,
            self::UNPROCESSABLEENTITY_USER_STAGED,
            self::TOOMANYREQUESTS,
            self::TOOMANYREQUESTS_THIRDPARTY,
            self::ERROR_INTERNAL,
            self::ERROR_CONFIGURATION,
            self::ERROR_NOTIMPLEMENTED
        ];
    }
}


