<?php
/**
 * EzsigndocumentResponse
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
 * The version of the OpenAPI document: 1.1.13
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigndocumentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
        'dtEzsignformCompleted' => 'string',
        'fkiLanguageID' => 'int',
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
        'bEzsigndocumentEzsignform' => 'bool',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiEzsignfolderID' => null,
        'dtEzsigndocumentDuedate' => null,
        'dtEzsignformCompleted' => null,
        'fkiLanguageID' => null,
        'sEzsigndocumentName' => null,
        'pkiEzsigndocumentID' => null,
        'eEzsigndocumentStep' => null,
        'dtEzsigndocumentFirstsend' => null,
        'dtEzsigndocumentLastsend' => null,
        'iEzsigndocumentOrder' => null,
        'iEzsigndocumentPagetotal' => null,
        'iEzsigndocumentSignaturesigned' => null,
        'iEzsigndocumentSignaturetotal' => null,
        'sEzsigndocumentMD5initial' => null,
        'sEzsigndocumentMD5signed' => null,
        'bEzsigndocumentEzsignform' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiEzsignfolderID' => false,
		'dtEzsigndocumentDuedate' => false,
		'dtEzsignformCompleted' => false,
		'fkiLanguageID' => false,
		'sEzsigndocumentName' => false,
		'pkiEzsigndocumentID' => false,
		'eEzsigndocumentStep' => false,
		'dtEzsigndocumentFirstsend' => false,
		'dtEzsigndocumentLastsend' => false,
		'iEzsigndocumentOrder' => false,
		'iEzsigndocumentPagetotal' => false,
		'iEzsigndocumentSignaturesigned' => false,
		'iEzsigndocumentSignaturetotal' => false,
		'sEzsigndocumentMD5initial' => false,
		'sEzsigndocumentMD5signed' => false,
		'bEzsigndocumentEzsignform' => false,
		'objAudit' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'dtEzsignformCompleted' => 'dtEzsignformCompleted',
        'fkiLanguageID' => 'fkiLanguageID',
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
        'bEzsigndocumentEzsignform' => 'bEzsigndocumentEzsignform',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'setDtEzsigndocumentDuedate',
        'dtEzsignformCompleted' => 'setDtEzsignformCompleted',
        'fkiLanguageID' => 'setFkiLanguageID',
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
        'bEzsigndocumentEzsignform' => 'setBEzsigndocumentEzsignform',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'getDtEzsigndocumentDuedate',
        'dtEzsignformCompleted' => 'getDtEzsignformCompleted',
        'fkiLanguageID' => 'getFkiLanguageID',
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
        'bEzsigndocumentEzsignform' => 'getBEzsigndocumentEzsignform',
        'objAudit' => 'getObjAudit'
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
        $this->setIfExists('fkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('dtEzsigndocumentDuedate', $data ?? [], null);
        $this->setIfExists('dtEzsignformCompleted', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentName', $data ?? [], null);
        $this->setIfExists('pkiEzsigndocumentID', $data ?? [], null);
        $this->setIfExists('eEzsigndocumentStep', $data ?? [], null);
        $this->setIfExists('dtEzsigndocumentFirstsend', $data ?? [], null);
        $this->setIfExists('dtEzsigndocumentLastsend', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentOrder', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentPagetotal', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentSignaturesigned', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentSignaturetotal', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentMD5initial', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentMD5signed', $data ?? [], null);
        $this->setIfExists('bEzsigndocumentEzsignform', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if (($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
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

        if ($this->container['sEzsigndocumentName'] === null) {
            $invalidProperties[] = "'sEzsigndocumentName' can't be null";
        }
        if ($this->container['pkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'pkiEzsigndocumentID' can't be null";
        }
        if (($this->container['pkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['eEzsigndocumentStep'] === null) {
            $invalidProperties[] = "'eEzsigndocumentStep' can't be null";
        }
        if ($this->container['iEzsigndocumentOrder'] === null) {
            $invalidProperties[] = "'iEzsigndocumentOrder' can't be null";
        }
        if (($this->container['iEzsigndocumentOrder'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigndocumentOrder', must be bigger than or equal to 1.";
        }

        if ($this->container['iEzsigndocumentPagetotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentPagetotal' can't be null";
        }
        if (($this->container['iEzsigndocumentPagetotal'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigndocumentPagetotal', must be bigger than or equal to 1.";
        }

        if ($this->container['iEzsigndocumentSignaturesigned'] === null) {
            $invalidProperties[] = "'iEzsigndocumentSignaturesigned' can't be null";
        }
        if (($this->container['iEzsigndocumentSignaturesigned'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigndocumentSignaturesigned', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigndocumentSignaturetotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentSignaturetotal' can't be null";
        }
        if (($this->container['iEzsigndocumentSignaturetotal'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigndocumentSignaturetotal', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsigndocumentMD5initial'] === null) {
            $invalidProperties[] = "'sEzsigndocumentMD5initial' can't be null";
        }
        if ($this->container['sEzsigndocumentMD5signed'] === null) {
            $invalidProperties[] = "'sEzsigndocumentMD5signed' can't be null";
        }
        if ($this->container['bEzsigndocumentEzsignform'] === null) {
            $invalidProperties[] = "'bEzsigndocumentEzsignform' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
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
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {

        if (($fkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling EzsigndocumentResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfolderID cannot be null');
        //}
        $this->container['fkiEzsignfolderID'] = (is_null($fkiEzsignfolderID) ? null : (int) $fkiEzsignfolderID);

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
     * @param string $dtEzsigndocumentDuedate The maximum date and time at which the Ezsigndocument can be signed.
     *
     * @return self
     */
    public function setDtEzsigndocumentDuedate($dtEzsigndocumentDuedate)
    {

        //if (is_null($dtEzsigndocumentDuedate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsigndocumentDuedate cannot be null');
        //}
        $this->container['dtEzsigndocumentDuedate'] = (is_null($dtEzsigndocumentDuedate) ? null : (string) $dtEzsigndocumentDuedate);

        return $this;
    }

    /**
     * Gets dtEzsignformCompleted
     *
     * @return string|null
     */
    public function getDtEzsignformCompleted()
    {
        return $this->container['dtEzsignformCompleted'];
    }

    /**
     * Sets dtEzsignformCompleted
     *
     * @param string|null $dtEzsignformCompleted The date and time at which the Ezsignform has been completed.
     *
     * @return self
     */
    public function setDtEzsignformCompleted($dtEzsignformCompleted)
    {

        //if (is_null($dtEzsignformCompleted)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignformCompleted cannot be null');
        //}
        $this->container['dtEzsignformCompleted'] = (is_null($dtEzsignformCompleted) ? null : (string) $dtEzsignformCompleted);

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
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentResponse., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentResponse., must be bigger than or equal to 1.');
        }


        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

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
     * @return self
     */
    public function setSEzsigndocumentName($sEzsigndocumentName)
    {

        //if (is_null($sEzsigndocumentName)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentName cannot be null');
        //}
        $this->container['sEzsigndocumentName'] = (is_null($sEzsigndocumentName) ? null : (string) $sEzsigndocumentName);

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
     * @return self
     */
    public function setPkiEzsigndocumentID($pkiEzsigndocumentID)
    {

        if (($pkiEzsigndocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigndocumentID when calling EzsigndocumentResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsigndocumentID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigndocumentID cannot be null');
        //}
        $this->container['pkiEzsigndocumentID'] = (is_null($pkiEzsigndocumentID) ? null : (int) $pkiEzsigndocumentID);

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
     * @return self
     */
    public function setEEzsigndocumentStep($eEzsigndocumentStep)
    {

        //if (is_null($eEzsigndocumentStep)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigndocumentStep cannot be null');
        //}
        $this->container['eEzsigndocumentStep'] = $eEzsigndocumentStep;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentFirstsend
     *
     * @return string|null
     */
    public function getDtEzsigndocumentFirstsend()
    {
        return $this->container['dtEzsigndocumentFirstsend'];
    }

    /**
     * Sets dtEzsigndocumentFirstsend
     *
     * @param string|null $dtEzsigndocumentFirstsend The date and time when the Ezsigndocument was first sent.
     *
     * @return self
     */
    public function setDtEzsigndocumentFirstsend($dtEzsigndocumentFirstsend)
    {

        //if (is_null($dtEzsigndocumentFirstsend)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsigndocumentFirstsend cannot be null');
        //}
        $this->container['dtEzsigndocumentFirstsend'] = (is_null($dtEzsigndocumentFirstsend) ? null : (string) $dtEzsigndocumentFirstsend);

        return $this;
    }

    /**
     * Gets dtEzsigndocumentLastsend
     *
     * @return string|null
     */
    public function getDtEzsigndocumentLastsend()
    {
        return $this->container['dtEzsigndocumentLastsend'];
    }

    /**
     * Sets dtEzsigndocumentLastsend
     *
     * @param string|null $dtEzsigndocumentLastsend The date and time when the Ezsigndocument was sent the last time.
     *
     * @return self
     */
    public function setDtEzsigndocumentLastsend($dtEzsigndocumentLastsend)
    {

        //if (is_null($dtEzsigndocumentLastsend)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsigndocumentLastsend cannot be null');
        //}
        $this->container['dtEzsigndocumentLastsend'] = (is_null($dtEzsigndocumentLastsend) ? null : (string) $dtEzsigndocumentLastsend);

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
     * @return self
     */
    public function setIEzsigndocumentOrder($iEzsigndocumentOrder)
    {

        if (($iEzsigndocumentOrder < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndocumentOrder when calling EzsigndocumentResponse., must be bigger than or equal to 1.');
        }


        //if (is_null($iEzsigndocumentOrder)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentOrder cannot be null');
        //}
        $this->container['iEzsigndocumentOrder'] = (is_null($iEzsigndocumentOrder) ? null : (int) $iEzsigndocumentOrder);

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
     * @return self
     */
    public function setIEzsigndocumentPagetotal($iEzsigndocumentPagetotal)
    {

        if (($iEzsigndocumentPagetotal < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndocumentPagetotal when calling EzsigndocumentResponse., must be bigger than or equal to 1.');
        }


        //if (is_null($iEzsigndocumentPagetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentPagetotal cannot be null');
        //}
        $this->container['iEzsigndocumentPagetotal'] = (is_null($iEzsigndocumentPagetotal) ? null : (int) $iEzsigndocumentPagetotal);

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
     * @return self
     */
    public function setIEzsigndocumentSignaturesigned($iEzsigndocumentSignaturesigned)
    {

        if (($iEzsigndocumentSignaturesigned < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndocumentSignaturesigned when calling EzsigndocumentResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsigndocumentSignaturesigned)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentSignaturesigned cannot be null');
        //}
        $this->container['iEzsigndocumentSignaturesigned'] = (is_null($iEzsigndocumentSignaturesigned) ? null : (int) $iEzsigndocumentSignaturesigned);

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
     * @return self
     */
    public function setIEzsigndocumentSignaturetotal($iEzsigndocumentSignaturetotal)
    {

        if (($iEzsigndocumentSignaturetotal < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndocumentSignaturetotal when calling EzsigndocumentResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsigndocumentSignaturetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentSignaturetotal cannot be null');
        //}
        $this->container['iEzsigndocumentSignaturetotal'] = (is_null($iEzsigndocumentSignaturetotal) ? null : (int) $iEzsigndocumentSignaturetotal);

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
     * @return self
     */
    public function setSEzsigndocumentMD5initial($sEzsigndocumentMD5initial)
    {

        //if (is_null($sEzsigndocumentMD5initial)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentMD5initial cannot be null');
        //}
        $this->container['sEzsigndocumentMD5initial'] = (is_null($sEzsigndocumentMD5initial) ? null : (string) $sEzsigndocumentMD5initial);

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
     * @return self
     */
    public function setSEzsigndocumentMD5signed($sEzsigndocumentMD5signed)
    {

        //if (is_null($sEzsigndocumentMD5signed)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentMD5signed cannot be null');
        //}
        $this->container['sEzsigndocumentMD5signed'] = (is_null($sEzsigndocumentMD5signed) ? null : (string) $sEzsigndocumentMD5signed);

        return $this;
    }

    /**
     * Gets bEzsigndocumentEzsignform
     *
     * @return bool
     */
    public function getBEzsigndocumentEzsignform()
    {
        return $this->container['bEzsigndocumentEzsignform'];
    }

    /**
     * Sets bEzsigndocumentEzsignform
     *
     * @param bool $bEzsigndocumentEzsignform If the Ezsigndocument contains an Ezsignform or not
     *
     * @return self
     */
    public function setBEzsigndocumentEzsignform($bEzsigndocumentEzsignform)
    {

        //if (is_null($bEzsigndocumentEzsignform)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigndocumentEzsignform cannot be null');
        //}
        $this->container['bEzsigndocumentEzsignform'] = (is_null($bEzsigndocumentEzsignform) ? null : (bool) $bEzsigndocumentEzsignform);

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {

        //if (is_null($objAudit)) {
            //throw new \InvalidArgumentException('non-nullable objAudit cannot be null');
        //}
        $this->container['objAudit'] = $objAudit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


