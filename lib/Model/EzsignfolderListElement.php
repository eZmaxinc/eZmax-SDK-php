<?php
/**
 * EzsignfolderListElement
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
 * The version of the OpenAPI document: 1.1.14
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
 * EzsignfolderListElement Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignfolderListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfolderID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'eEzsignfoldertypePrivacylevel' => '\eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'string',
        'sEzsignfolderDescription' => 'string',
        'eEzsignfolderStep' => '\eZmaxAPI\Model\FieldEEzsignfolderStep',
        'dtCreatedDate' => 'string',
        'dtEzsignfolderSentdate' => 'string',
        'dtEzsignfolderDuedate' => 'string',
        'iEzsigndocument' => 'int',
        'iEzsigndocumentEdm' => 'int',
        'iEzsignsignature' => 'int',
        'iEzsignsignatureSigned' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignfolderID' => null,
        'fkiEzsignfoldertypeID' => null,
        'eEzsignfoldertypePrivacylevel' => null,
        'sEzsignfoldertypeNameX' => null,
        'sEzsignfolderDescription' => null,
        'eEzsignfolderStep' => null,
        'dtCreatedDate' => null,
        'dtEzsignfolderSentdate' => null,
        'dtEzsignfolderDuedate' => null,
        'iEzsigndocument' => null,
        'iEzsigndocumentEdm' => null,
        'iEzsignsignature' => null,
        'iEzsignsignatureSigned' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignfolderID' => false,
		'fkiEzsignfoldertypeID' => false,
		'eEzsignfoldertypePrivacylevel' => false,
		'sEzsignfoldertypeNameX' => false,
		'sEzsignfolderDescription' => false,
		'eEzsignfolderStep' => false,
		'dtCreatedDate' => false,
		'dtEzsignfolderSentdate' => false,
		'dtEzsignfolderDuedate' => false,
		'iEzsigndocument' => false,
		'iEzsigndocumentEdm' => false,
		'iEzsignsignature' => false,
		'iEzsignsignatureSigned' => false
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
        'pkiEzsignfolderID' => 'pkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'eEzsignfoldertypePrivacylevel' => 'eEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'eEzsignfolderStep' => 'eEzsignfolderStep',
        'dtCreatedDate' => 'dtCreatedDate',
        'dtEzsignfolderSentdate' => 'dtEzsignfolderSentdate',
        'dtEzsignfolderDuedate' => 'dtEzsignfolderDuedate',
        'iEzsigndocument' => 'iEzsigndocument',
        'iEzsigndocumentEdm' => 'iEzsigndocumentEdm',
        'iEzsignsignature' => 'iEzsignsignature',
        'iEzsignsignatureSigned' => 'iEzsignsignatureSigned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'eEzsignfoldertypePrivacylevel' => 'setEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'eEzsignfolderStep' => 'setEEzsignfolderStep',
        'dtCreatedDate' => 'setDtCreatedDate',
        'dtEzsignfolderSentdate' => 'setDtEzsignfolderSentdate',
        'dtEzsignfolderDuedate' => 'setDtEzsignfolderDuedate',
        'iEzsigndocument' => 'setIEzsigndocument',
        'iEzsigndocumentEdm' => 'setIEzsigndocumentEdm',
        'iEzsignsignature' => 'setIEzsignsignature',
        'iEzsignsignatureSigned' => 'setIEzsignsignatureSigned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'eEzsignfoldertypePrivacylevel' => 'getEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'eEzsignfolderStep' => 'getEEzsignfolderStep',
        'dtCreatedDate' => 'getDtCreatedDate',
        'dtEzsignfolderSentdate' => 'getDtEzsignfolderSentdate',
        'dtEzsignfolderDuedate' => 'getDtEzsignfolderDuedate',
        'iEzsigndocument' => 'getIEzsigndocument',
        'iEzsigndocumentEdm' => 'getIEzsigndocumentEdm',
        'iEzsignsignature' => 'getIEzsignsignature',
        'iEzsignsignatureSigned' => 'getIEzsignsignatureSigned'
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
        $this->setIfExists('pkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('eEzsignfoldertypePrivacylevel', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('sEzsignfolderDescription', $data ?? [], null);
        $this->setIfExists('eEzsignfolderStep', $data ?? [], null);
        $this->setIfExists('dtCreatedDate', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderSentdate', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderDuedate', $data ?? [], null);
        $this->setIfExists('iEzsigndocument', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentEdm', $data ?? [], null);
        $this->setIfExists('iEzsignsignature', $data ?? [], null);
        $this->setIfExists('iEzsignsignatureSigned', $data ?? [], null);
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

        if ($this->container['pkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'pkiEzsignfolderID' can't be null";
        }
        if (($this->container['pkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['eEzsignfoldertypePrivacylevel'] === null) {
            $invalidProperties[] = "'eEzsignfoldertypePrivacylevel' can't be null";
        }
        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
        if ($this->container['eEzsignfolderStep'] === null) {
            $invalidProperties[] = "'eEzsignfolderStep' can't be null";
        }
        if ($this->container['dtCreatedDate'] === null) {
            $invalidProperties[] = "'dtCreatedDate' can't be null";
        }
        if ($this->container['iEzsigndocument'] === null) {
            $invalidProperties[] = "'iEzsigndocument' can't be null";
        }
        if ($this->container['iEzsigndocumentEdm'] === null) {
            $invalidProperties[] = "'iEzsigndocumentEdm' can't be null";
        }
        if ($this->container['iEzsignsignature'] === null) {
            $invalidProperties[] = "'iEzsignsignature' can't be null";
        }
        if ($this->container['iEzsignsignatureSigned'] === null) {
            $invalidProperties[] = "'iEzsignsignatureSigned' can't be null";
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
     * Gets pkiEzsignfolderID
     *
     * @return int
     */
    public function getPkiEzsignfolderID()
    {
        return $this->container['pkiEzsignfolderID'];
    }

    /**
     * Sets pkiEzsignfolderID
     *
     * @param int $pkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setPkiEzsignfolderID($pkiEzsignfolderID)
    {

        if (($pkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignfolderID when calling EzsignfolderListElement., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignfolderID cannot be null');
        //}
        $this->container['pkiEzsignfolderID'] = (is_null($pkiEzsignfolderID) ? null : (int) $pkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {

        if (($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignfolderListElement., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets eEzsignfoldertypePrivacylevel
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel
     */
    public function getEEzsignfoldertypePrivacylevel()
    {
        return $this->container['eEzsignfoldertypePrivacylevel'];
    }

    /**
     * Sets eEzsignfoldertypePrivacylevel
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel $eEzsignfoldertypePrivacylevel eEzsignfoldertypePrivacylevel
     *
     * @return self
     */
    public function setEEzsignfoldertypePrivacylevel($eEzsignfoldertypePrivacylevel)
    {

        //if (is_null($eEzsignfoldertypePrivacylevel)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfoldertypePrivacylevel cannot be null');
        //}
        $this->container['eEzsignfoldertypePrivacylevel'] = $eEzsignfoldertypePrivacylevel;

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string
     */
    public function getSEzsignfoldertypeNameX()
    {
        return $this->container['sEzsignfoldertypeNameX'];
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {

        //if (is_null($sEzsignfoldertypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfoldertypeNameX cannot be null');
        //}
        $this->container['sEzsignfoldertypeNameX'] = (is_null($sEzsignfoldertypeNameX) ? null : (string) $sEzsignfoldertypeNameX);

        return $this;
    }

    /**
     * Gets sEzsignfolderDescription
     *
     * @return string
     */
    public function getSEzsignfolderDescription()
    {
        return $this->container['sEzsignfolderDescription'];
    }

    /**
     * Sets sEzsignfolderDescription
     *
     * @param string $sEzsignfolderDescription The description of the Ezsignfolder
     *
     * @return self
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {

        //if (is_null($sEzsignfolderDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfolderDescription cannot be null');
        //}
        $this->container['sEzsignfolderDescription'] = (is_null($sEzsignfolderDescription) ? null : (string) $sEzsignfolderDescription);

        return $this;
    }

    /**
     * Gets eEzsignfolderStep
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderStep
     */
    public function getEEzsignfolderStep()
    {
        return $this->container['eEzsignfolderStep'];
    }

    /**
     * Sets eEzsignfolderStep
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderStep $eEzsignfolderStep eEzsignfolderStep
     *
     * @return self
     */
    public function setEEzsignfolderStep($eEzsignfolderStep)
    {

        //if (is_null($eEzsignfolderStep)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfolderStep cannot be null');
        //}
        $this->container['eEzsignfolderStep'] = $eEzsignfolderStep;

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
     * @param string $dtCreatedDate The date and time at which the object was created
     *
     * @return self
     */
    public function setDtCreatedDate($dtCreatedDate)
    {

        //if (is_null($dtCreatedDate)) {
            //throw new \InvalidArgumentException('non-nullable dtCreatedDate cannot be null');
        //}
        $this->container['dtCreatedDate'] = (is_null($dtCreatedDate) ? null : (string) $dtCreatedDate);

        return $this;
    }

    /**
     * Gets dtEzsignfolderSentdate
     *
     * @return string|null
     */
    public function getDtEzsignfolderSentdate()
    {
        return $this->container['dtEzsignfolderSentdate'];
    }

    /**
     * Sets dtEzsignfolderSentdate
     *
     * @param string|null $dtEzsignfolderSentdate The date and time at which the Ezsign folder was sent the last time.
     *
     * @return self
     */
    public function setDtEzsignfolderSentdate($dtEzsignfolderSentdate)
    {

        //if (is_null($dtEzsignfolderSentdate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderSentdate cannot be null');
        //}
        $this->container['dtEzsignfolderSentdate'] = (is_null($dtEzsignfolderSentdate) ? null : (string) $dtEzsignfolderSentdate);

        return $this;
    }

    /**
     * Gets dtEzsignfolderDuedate
     *
     * @return string|null
     */
    public function getDtEzsignfolderDuedate()
    {
        return $this->container['dtEzsignfolderDuedate'];
    }

    /**
     * Sets dtEzsignfolderDuedate
     *
     * @param string|null $dtEzsignfolderDuedate The maximum date and time at which the Ezsignfolder can be signed.
     *
     * @return self
     */
    public function setDtEzsignfolderDuedate($dtEzsignfolderDuedate)
    {

        //if (is_null($dtEzsignfolderDuedate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderDuedate cannot be null');
        //}
        $this->container['dtEzsignfolderDuedate'] = (is_null($dtEzsignfolderDuedate) ? null : (string) $dtEzsignfolderDuedate);

        return $this;
    }

    /**
     * Gets iEzsigndocument
     *
     * @return int
     */
    public function getIEzsigndocument()
    {
        return $this->container['iEzsigndocument'];
    }

    /**
     * Sets iEzsigndocument
     *
     * @param int $iEzsigndocument The total number of Ezsigndocument in the folder
     *
     * @return self
     */
    public function setIEzsigndocument($iEzsigndocument)
    {

        //if (is_null($iEzsigndocument)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocument cannot be null');
        //}
        $this->container['iEzsigndocument'] = (is_null($iEzsigndocument) ? null : (int) $iEzsigndocument);

        return $this;
    }

    /**
     * Gets iEzsigndocumentEdm
     *
     * @return int
     */
    public function getIEzsigndocumentEdm()
    {
        return $this->container['iEzsigndocumentEdm'];
    }

    /**
     * Sets iEzsigndocumentEdm
     *
     * @param int $iEzsigndocumentEdm The total number of Ezsigndocument in the folder that were saved in the edm system
     *
     * @return self
     */
    public function setIEzsigndocumentEdm($iEzsigndocumentEdm)
    {

        //if (is_null($iEzsigndocumentEdm)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentEdm cannot be null');
        //}
        $this->container['iEzsigndocumentEdm'] = (is_null($iEzsigndocumentEdm) ? null : (int) $iEzsigndocumentEdm);

        return $this;
    }

    /**
     * Gets iEzsignsignature
     *
     * @return int
     */
    public function getIEzsignsignature()
    {
        return $this->container['iEzsignsignature'];
    }

    /**
     * Sets iEzsignsignature
     *
     * @param int $iEzsignsignature The total number of signature blocks in all Ezsigndocuments in the folder
     *
     * @return self
     */
    public function setIEzsignsignature($iEzsignsignature)
    {

        //if (is_null($iEzsignsignature)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignature cannot be null');
        //}
        $this->container['iEzsignsignature'] = (is_null($iEzsignsignature) ? null : (int) $iEzsignsignature);

        return $this;
    }

    /**
     * Gets iEzsignsignatureSigned
     *
     * @return int
     */
    public function getIEzsignsignatureSigned()
    {
        return $this->container['iEzsignsignatureSigned'];
    }

    /**
     * Sets iEzsignsignatureSigned
     *
     * @param int $iEzsignsignatureSigned The total number of already signed signature blocks in all Ezsigndocuments in the folder
     *
     * @return self
     */
    public function setIEzsignsignatureSigned($iEzsignsignatureSigned)
    {

        //if (is_null($iEzsignsignatureSigned)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignatureSigned cannot be null');
        //}
        $this->container['iEzsignsignatureSigned'] = (is_null($iEzsignsignatureSigned) ? null : (int) $iEzsignsignatureSigned);

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


