<?php
/**
 * EzsigndocumentResponse
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
 * The version of the OpenAPI document: 1.0.12
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;

use \ArrayAccess;
use \eZmaxAPI\ObjectSerializer;

/**
 * EzsigndocumentResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsigndocument Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EzsigndocumentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocument-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignfolderID' => 'int',
        'dtEzsigndocumentDuedate' => 'string',
        'fkiLanguageID' => 'int',
        'sEzsigndocumentFilename' => 'string',
        'sEzsigndocumentName' => 'string',
        'pkiEzsigndocumentID' => 'int',
        'eEzsigndocumentStep' => '\eZmaxAPI\Model\FieldEEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'string',
        'dtEzsigndocumentLastsend' => 'string',
        'iEzsigndocumentOrder' => 'int',
        'iEzsigndocumentPagetotal' => 'int',
        'iEzsigndocumentSignaturesigned' => 'int',
        'iEzsigndocumentSignaturetotal' => 'int',
        'sEzsigndocumentMD5initial' => 'string',
        'sEzsigndocumentMD5signed' => 'string',
        'fkiUserIDCreated' => 'int',
        'fkiUserIDModified' => 'int',
        'fkiApikeyIDCreated' => 'int',
        'fkiApikeyIDModified' => 'int',
        'dtCreatedDate' => 'string',
        'dtModifiedDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fkiEzsignfolderID' => null,
        'dtEzsigndocumentDuedate' => null,
        'fkiLanguageID' => null,
        'sEzsigndocumentFilename' => null,
        'sEzsigndocumentName' => null,
        'pkiEzsigndocumentID' => null,
        'eEzsigndocumentStep' => null,
        'dtEzsigndocumentFirstsend' => null,
        'dtEzsigndocumentLastsend' => null,
        'iEzsigndocumentOrder' => null,
        'iEzsigndocumentPagetotal' => null,
        'iEzsigndocumentSignaturesigned' => null,
        'iEzsigndocumentSignaturetotal' => 'int32',
        'sEzsigndocumentMD5initial' => null,
        'sEzsigndocumentMD5signed' => null,
        'fkiUserIDCreated' => null,
        'fkiUserIDModified' => null,
        'fkiApikeyIDCreated' => null,
        'fkiApikeyIDModified' => null,
        'dtCreatedDate' => null,
        'dtModifiedDate' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'dtEzsigndocumentDuedate',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEzsigndocumentFilename' => 'sEzsigndocumentFilename',
        'sEzsigndocumentName' => 'sEzsigndocumentName',
        'pkiEzsigndocumentID' => 'pkiEzsigndocumentID',
        'eEzsigndocumentStep' => 'eEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'dtEzsigndocumentFirstsend',
        'dtEzsigndocumentLastsend' => 'dtEzsigndocumentLastsend',
        'iEzsigndocumentOrder' => 'iEzsigndocumentOrder',
        'iEzsigndocumentPagetotal' => 'iEzsigndocumentPagetotal',
        'iEzsigndocumentSignaturesigned' => 'iEzsigndocumentSignaturesigned',
        'iEzsigndocumentSignaturetotal' => 'iEzsigndocumentSignaturetotal',
        'sEzsigndocumentMD5initial' => 'sEzsigndocumentMD5initial',
        'sEzsigndocumentMD5signed' => 'sEzsigndocumentMD5signed',
        'fkiUserIDCreated' => 'fkiUserIDCreated',
        'fkiUserIDModified' => 'fkiUserIDModified',
        'fkiApikeyIDCreated' => 'fkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'fkiApikeyIDModified',
        'dtCreatedDate' => 'dtCreatedDate',
        'dtModifiedDate' => 'dtModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'setDtEzsigndocumentDuedate',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEzsigndocumentFilename' => 'setSEzsigndocumentFilename',
        'sEzsigndocumentName' => 'setSEzsigndocumentName',
        'pkiEzsigndocumentID' => 'setPkiEzsigndocumentID',
        'eEzsigndocumentStep' => 'setEEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'setDtEzsigndocumentFirstsend',
        'dtEzsigndocumentLastsend' => 'setDtEzsigndocumentLastsend',
        'iEzsigndocumentOrder' => 'setIEzsigndocumentOrder',
        'iEzsigndocumentPagetotal' => 'setIEzsigndocumentPagetotal',
        'iEzsigndocumentSignaturesigned' => 'setIEzsigndocumentSignaturesigned',
        'iEzsigndocumentSignaturetotal' => 'setIEzsigndocumentSignaturetotal',
        'sEzsigndocumentMD5initial' => 'setSEzsigndocumentMD5initial',
        'sEzsigndocumentMD5signed' => 'setSEzsigndocumentMD5signed',
        'fkiUserIDCreated' => 'setFkiUserIDCreated',
        'fkiUserIDModified' => 'setFkiUserIDModified',
        'fkiApikeyIDCreated' => 'setFkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'setFkiApikeyIDModified',
        'dtCreatedDate' => 'setDtCreatedDate',
        'dtModifiedDate' => 'setDtModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'getDtEzsigndocumentDuedate',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEzsigndocumentFilename' => 'getSEzsigndocumentFilename',
        'sEzsigndocumentName' => 'getSEzsigndocumentName',
        'pkiEzsigndocumentID' => 'getPkiEzsigndocumentID',
        'eEzsigndocumentStep' => 'getEEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'getDtEzsigndocumentFirstsend',
        'dtEzsigndocumentLastsend' => 'getDtEzsigndocumentLastsend',
        'iEzsigndocumentOrder' => 'getIEzsigndocumentOrder',
        'iEzsigndocumentPagetotal' => 'getIEzsigndocumentPagetotal',
        'iEzsigndocumentSignaturesigned' => 'getIEzsigndocumentSignaturesigned',
        'iEzsigndocumentSignaturetotal' => 'getIEzsigndocumentSignaturetotal',
        'sEzsigndocumentMD5initial' => 'getSEzsigndocumentMD5initial',
        'sEzsigndocumentMD5signed' => 'getSEzsigndocumentMD5signed',
        'fkiUserIDCreated' => 'getFkiUserIDCreated',
        'fkiUserIDModified' => 'getFkiUserIDModified',
        'fkiApikeyIDCreated' => 'getFkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'getFkiApikeyIDModified',
        'dtCreatedDate' => 'getDtCreatedDate',
        'dtModifiedDate' => 'getDtModifiedDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fkiEzsignfolderID'] = isset($data['fkiEzsignfolderID']) ? $data['fkiEzsignfolderID'] : null;
        $this->container['dtEzsigndocumentDuedate'] = isset($data['dtEzsigndocumentDuedate']) ? $data['dtEzsigndocumentDuedate'] : null;
        $this->container['fkiLanguageID'] = isset($data['fkiLanguageID']) ? $data['fkiLanguageID'] : null;
        $this->container['sEzsigndocumentFilename'] = isset($data['sEzsigndocumentFilename']) ? $data['sEzsigndocumentFilename'] : null;
        $this->container['sEzsigndocumentName'] = isset($data['sEzsigndocumentName']) ? $data['sEzsigndocumentName'] : null;
        $this->container['pkiEzsigndocumentID'] = isset($data['pkiEzsigndocumentID']) ? $data['pkiEzsigndocumentID'] : null;
        $this->container['eEzsigndocumentStep'] = isset($data['eEzsigndocumentStep']) ? $data['eEzsigndocumentStep'] : null;
        $this->container['dtEzsigndocumentFirstsend'] = isset($data['dtEzsigndocumentFirstsend']) ? $data['dtEzsigndocumentFirstsend'] : null;
        $this->container['dtEzsigndocumentLastsend'] = isset($data['dtEzsigndocumentLastsend']) ? $data['dtEzsigndocumentLastsend'] : null;
        $this->container['iEzsigndocumentOrder'] = isset($data['iEzsigndocumentOrder']) ? $data['iEzsigndocumentOrder'] : null;
        $this->container['iEzsigndocumentPagetotal'] = isset($data['iEzsigndocumentPagetotal']) ? $data['iEzsigndocumentPagetotal'] : null;
        $this->container['iEzsigndocumentSignaturesigned'] = isset($data['iEzsigndocumentSignaturesigned']) ? $data['iEzsigndocumentSignaturesigned'] : null;
        $this->container['iEzsigndocumentSignaturetotal'] = isset($data['iEzsigndocumentSignaturetotal']) ? $data['iEzsigndocumentSignaturetotal'] : null;
        $this->container['sEzsigndocumentMD5initial'] = isset($data['sEzsigndocumentMD5initial']) ? $data['sEzsigndocumentMD5initial'] : null;
        $this->container['sEzsigndocumentMD5signed'] = isset($data['sEzsigndocumentMD5signed']) ? $data['sEzsigndocumentMD5signed'] : null;
        $this->container['fkiUserIDCreated'] = isset($data['fkiUserIDCreated']) ? $data['fkiUserIDCreated'] : null;
        $this->container['fkiUserIDModified'] = isset($data['fkiUserIDModified']) ? $data['fkiUserIDModified'] : null;
        $this->container['fkiApikeyIDCreated'] = isset($data['fkiApikeyIDCreated']) ? $data['fkiApikeyIDCreated'] : null;
        $this->container['fkiApikeyIDModified'] = isset($data['fkiApikeyIDModified']) ? $data['fkiApikeyIDModified'] : null;
        $this->container['dtCreatedDate'] = isset($data['dtCreatedDate']) ? $data['dtCreatedDate'] : null;
        $this->container['dtModifiedDate'] = isset($data['dtModifiedDate']) ? $data['dtModifiedDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if ($this->container['dtEzsigndocumentDuedate'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentDuedate' can't be null";
        }
        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsigndocumentFilename'] === null) {
            $invalidProperties[] = "'sEzsigndocumentFilename' can't be null";
        }
        if ($this->container['sEzsigndocumentName'] === null) {
            $invalidProperties[] = "'sEzsigndocumentName' can't be null";
        }
        if ($this->container['pkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'pkiEzsigndocumentID' can't be null";
        }
        if ($this->container['eEzsigndocumentStep'] === null) {
            $invalidProperties[] = "'eEzsigndocumentStep' can't be null";
        }
        if ($this->container['dtEzsigndocumentFirstsend'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentFirstsend' can't be null";
        }
        if ($this->container['dtEzsigndocumentLastsend'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentLastsend' can't be null";
        }
        if ($this->container['iEzsigndocumentOrder'] === null) {
            $invalidProperties[] = "'iEzsigndocumentOrder' can't be null";
        }
        if ($this->container['iEzsigndocumentPagetotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentPagetotal' can't be null";
        }
        if ($this->container['iEzsigndocumentSignaturesigned'] === null) {
            $invalidProperties[] = "'iEzsigndocumentSignaturesigned' can't be null";
        }
        if ($this->container['iEzsigndocumentSignaturetotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentSignaturetotal' can't be null";
        }
        if ($this->container['sEzsigndocumentMD5initial'] === null) {
            $invalidProperties[] = "'sEzsigndocumentMD5initial' can't be null";
        }
        if ($this->container['sEzsigndocumentMD5signed'] === null) {
            $invalidProperties[] = "'sEzsigndocumentMD5signed' can't be null";
        }
        if ($this->container['fkiUserIDCreated'] === null) {
            $invalidProperties[] = "'fkiUserIDCreated' can't be null";
        }
        if ($this->container['fkiUserIDModified'] === null) {
            $invalidProperties[] = "'fkiUserIDModified' can't be null";
        }
        if ($this->container['dtCreatedDate'] === null) {
            $invalidProperties[] = "'dtCreatedDate' can't be null";
        }
        if ($this->container['dtModifiedDate'] === null) {
            $invalidProperties[] = "'dtModifiedDate' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets fkiEzsignfolderID
     *
     * @return int
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int $fkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return $this
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {
        $this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentDuedate
     *
     * @return string
     */
    public function getDtEzsigndocumentDuedate()
    {
        return $this->container['dtEzsigndocumentDuedate'];
    }

    /**
     * Sets dtEzsigndocumentDuedate
     *
     * @param string $dtEzsigndocumentDuedate The maximum date and time at which the document can be signed.
     *
     * @return $this
     */
    public function setDtEzsigndocumentDuedate($dtEzsigndocumentDuedate)
    {
        $this->container['dtEzsigndocumentDuedate'] = $dtEzsigndocumentDuedate;

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return $this
     */
    public function setFkiLanguageID($fkiLanguageID)
    {

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentResponse., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentResponse., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets sEzsigndocumentFilename
     *
     * @return string
     */
    public function getSEzsigndocumentFilename()
    {
        return $this->container['sEzsigndocumentFilename'];
    }

    /**
     * Sets sEzsigndocumentFilename
     *
     * @param string $sEzsigndocumentFilename The actual file name that will be used when downloading or attaching to an email.
     *
     * @return $this
     */
    public function setSEzsigndocumentFilename($sEzsigndocumentFilename)
    {
        $this->container['sEzsigndocumentFilename'] = $sEzsigndocumentFilename;

        return $this;
    }

    /**
     * Gets sEzsigndocumentName
     *
     * @return string
     */
    public function getSEzsigndocumentName()
    {
        return $this->container['sEzsigndocumentName'];
    }

    /**
     * Sets sEzsigndocumentName
     *
     * @param string $sEzsigndocumentName The name of the document that will be presented to Ezsignfoldersignerassociations
     *
     * @return $this
     */
    public function setSEzsigndocumentName($sEzsigndocumentName)
    {
        $this->container['sEzsigndocumentName'] = $sEzsigndocumentName;

        return $this;
    }

    /**
     * Gets pkiEzsigndocumentID
     *
     * @return int
     */
    public function getPkiEzsigndocumentID()
    {
        return $this->container['pkiEzsigndocumentID'];
    }

    /**
     * Sets pkiEzsigndocumentID
     *
     * @param int $pkiEzsigndocumentID The unique ID of the Ezsigndocument
     *
     * @return $this
     */
    public function setPkiEzsigndocumentID($pkiEzsigndocumentID)
    {
        $this->container['pkiEzsigndocumentID'] = $pkiEzsigndocumentID;

        return $this;
    }

    /**
     * Gets eEzsigndocumentStep
     *
     * @return \eZmaxAPI\Model\FieldEEzsigndocumentStep
     */
    public function getEEzsigndocumentStep()
    {
        return $this->container['eEzsigndocumentStep'];
    }

    /**
     * Sets eEzsigndocumentStep
     *
     * @param \eZmaxAPI\Model\FieldEEzsigndocumentStep $eEzsigndocumentStep eEzsigndocumentStep
     *
     * @return $this
     */
    public function setEEzsigndocumentStep($eEzsigndocumentStep)
    {
        $this->container['eEzsigndocumentStep'] = $eEzsigndocumentStep;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentFirstsend
     *
     * @return string
     */
    public function getDtEzsigndocumentFirstsend()
    {
        return $this->container['dtEzsigndocumentFirstsend'];
    }

    /**
     * Sets dtEzsigndocumentFirstsend
     *
     * @param string $dtEzsigndocumentFirstsend The date and time when the Ezsigndocument was first sent.
     *
     * @return $this
     */
    public function setDtEzsigndocumentFirstsend($dtEzsigndocumentFirstsend)
    {
        $this->container['dtEzsigndocumentFirstsend'] = $dtEzsigndocumentFirstsend;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentLastsend
     *
     * @return string
     */
    public function getDtEzsigndocumentLastsend()
    {
        return $this->container['dtEzsigndocumentLastsend'];
    }

    /**
     * Sets dtEzsigndocumentLastsend
     *
     * @param string $dtEzsigndocumentLastsend The date and time when the Ezsigndocument was sent the last time.
     *
     * @return $this
     */
    public function setDtEzsigndocumentLastsend($dtEzsigndocumentLastsend)
    {
        $this->container['dtEzsigndocumentLastsend'] = $dtEzsigndocumentLastsend;

        return $this;
    }

    /**
     * Gets iEzsigndocumentOrder
     *
     * @return int
     */
    public function getIEzsigndocumentOrder()
    {
        return $this->container['iEzsigndocumentOrder'];
    }

    /**
     * Sets iEzsigndocumentOrder
     *
     * @param int $iEzsigndocumentOrder The order in which the Ezsigndocument will be presented to the signatory in the Ezsignfolder.
     *
     * @return $this
     */
    public function setIEzsigndocumentOrder($iEzsigndocumentOrder)
    {
        $this->container['iEzsigndocumentOrder'] = $iEzsigndocumentOrder;

        return $this;
    }

    /**
     * Gets iEzsigndocumentPagetotal
     *
     * @return int
     */
    public function getIEzsigndocumentPagetotal()
    {
        return $this->container['iEzsigndocumentPagetotal'];
    }

    /**
     * Sets iEzsigndocumentPagetotal
     *
     * @param int $iEzsigndocumentPagetotal The number of pages in the Ezsigndocument.
     *
     * @return $this
     */
    public function setIEzsigndocumentPagetotal($iEzsigndocumentPagetotal)
    {
        $this->container['iEzsigndocumentPagetotal'] = $iEzsigndocumentPagetotal;

        return $this;
    }

    /**
     * Gets iEzsigndocumentSignaturesigned
     *
     * @return int
     */
    public function getIEzsigndocumentSignaturesigned()
    {
        return $this->container['iEzsigndocumentSignaturesigned'];
    }

    /**
     * Sets iEzsigndocumentSignaturesigned
     *
     * @param int $iEzsigndocumentSignaturesigned The number of signatures that were signed in the document.
     *
     * @return $this
     */
    public function setIEzsigndocumentSignaturesigned($iEzsigndocumentSignaturesigned)
    {
        $this->container['iEzsigndocumentSignaturesigned'] = $iEzsigndocumentSignaturesigned;

        return $this;
    }

    /**
     * Gets iEzsigndocumentSignaturetotal
     *
     * @return int
     */
    public function getIEzsigndocumentSignaturetotal()
    {
        return $this->container['iEzsigndocumentSignaturetotal'];
    }

    /**
     * Sets iEzsigndocumentSignaturetotal
     *
     * @param int $iEzsigndocumentSignaturetotal The number of total signatures that were requested in the Ezsigndocument.
     *
     * @return $this
     */
    public function setIEzsigndocumentSignaturetotal($iEzsigndocumentSignaturetotal)
    {
        $this->container['iEzsigndocumentSignaturetotal'] = $iEzsigndocumentSignaturetotal;

        return $this;
    }

    /**
     * Gets sEzsigndocumentMD5initial
     *
     * @return string
     */
    public function getSEzsigndocumentMD5initial()
    {
        return $this->container['sEzsigndocumentMD5initial'];
    }

    /**
     * Sets sEzsigndocumentMD5initial
     *
     * @param string $sEzsigndocumentMD5initial MD5 Hash of the initial PDF Document before signatures were applied to it.
     *
     * @return $this
     */
    public function setSEzsigndocumentMD5initial($sEzsigndocumentMD5initial)
    {
        $this->container['sEzsigndocumentMD5initial'] = $sEzsigndocumentMD5initial;

        return $this;
    }

    /**
     * Gets sEzsigndocumentMD5signed
     *
     * @return string
     */
    public function getSEzsigndocumentMD5signed()
    {
        return $this->container['sEzsigndocumentMD5signed'];
    }

    /**
     * Sets sEzsigndocumentMD5signed
     *
     * @param string $sEzsigndocumentMD5signed MD5 Hash of the final PDF Document after all signatures were applied to it.
     *
     * @return $this
     */
    public function setSEzsigndocumentMD5signed($sEzsigndocumentMD5signed)
    {
        $this->container['sEzsigndocumentMD5signed'] = $sEzsigndocumentMD5signed;

        return $this;
    }

    /**
     * Gets fkiUserIDCreated
     *
     * @return int
     */
    public function getFkiUserIDCreated()
    {
        return $this->container['fkiUserIDCreated'];
    }

    /**
     * Sets fkiUserIDCreated
     *
     * @param int $fkiUserIDCreated The id of the User that created the object.
     *
     * @return $this
     */
    public function setFkiUserIDCreated($fkiUserIDCreated)
    {
        $this->container['fkiUserIDCreated'] = $fkiUserIDCreated;

        return $this;
    }

    /**
     * Gets fkiUserIDModified
     *
     * @return int
     */
    public function getFkiUserIDModified()
    {
        return $this->container['fkiUserIDModified'];
    }

    /**
     * Sets fkiUserIDModified
     *
     * @param int $fkiUserIDModified The id of the User that made the last modification on the object.
     *
     * @return $this
     */
    public function setFkiUserIDModified($fkiUserIDModified)
    {
        $this->container['fkiUserIDModified'] = $fkiUserIDModified;

        return $this;
    }

    /**
     * Gets fkiApikeyIDCreated
     *
     * @return int|null
     */
    public function getFkiApikeyIDCreated()
    {
        return $this->container['fkiApikeyIDCreated'];
    }

    /**
     * Sets fkiApikeyIDCreated
     *
     * @param int|null $fkiApikeyIDCreated The id of the API Key that created the object.
     *
     * @return $this
     */
    public function setFkiApikeyIDCreated($fkiApikeyIDCreated)
    {
        $this->container['fkiApikeyIDCreated'] = $fkiApikeyIDCreated;

        return $this;
    }

    /**
     * Gets fkiApikeyIDModified
     *
     * @return int|null
     */
    public function getFkiApikeyIDModified()
    {
        return $this->container['fkiApikeyIDModified'];
    }

    /**
     * Sets fkiApikeyIDModified
     *
     * @param int|null $fkiApikeyIDModified The id of the API Key that made the last modification on the object.
     *
     * @return $this
     */
    public function setFkiApikeyIDModified($fkiApikeyIDModified)
    {
        $this->container['fkiApikeyIDModified'] = $fkiApikeyIDModified;

        return $this;
    }

    /**
     * Gets dtCreatedDate
     *
     * @return string
     */
    public function getDtCreatedDate()
    {
        return $this->container['dtCreatedDate'];
    }

    /**
     * Sets dtCreatedDate
     *
     * @param string $dtCreatedDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return $this
     */
    public function setDtCreatedDate($dtCreatedDate)
    {
        $this->container['dtCreatedDate'] = $dtCreatedDate;

        return $this;
    }

    /**
     * Gets dtModifiedDate
     *
     * @return string
     */
    public function getDtModifiedDate()
    {
        return $this->container['dtModifiedDate'];
    }

    /**
     * Sets dtModifiedDate
     *
     * @param string $dtModifiedDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return $this
     */
    public function setDtModifiedDate($dtModifiedDate)
    {
        $this->container['dtModifiedDate'] = $dtModifiedDate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


