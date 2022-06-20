<?php
/**
 * CustomFormDataDocumentResponse
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
 * The version of the OpenAPI document: 1.1.8
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
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
 * CustomFormDataDocumentResponse Class Doc Comment
 *
 * @category Class
 * @description A form Data Document Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomFormDataDocumentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-FormDataDocument-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigndocumentID' => 'int',
        'fkiEzsignfolderID' => 'int',
        'sEzsigndocumentName' => 'string',
        'dtModifiedDate' => 'string',
        'aObjFormDataSigner' => '\eZmaxAPI\Model\CustomFormDataSignerResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigndocumentID' => null,
        'fkiEzsignfolderID' => null,
        'sEzsigndocumentName' => null,
        'dtModifiedDate' => null,
        'aObjFormDataSigner' => null
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
        'pkiEzsigndocumentID' => 'pkiEzsigndocumentID',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'sEzsigndocumentName' => 'sEzsigndocumentName',
        'dtModifiedDate' => 'dtModifiedDate',
        'aObjFormDataSigner' => 'a_objFormDataSigner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigndocumentID' => 'setPkiEzsigndocumentID',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'sEzsigndocumentName' => 'setSEzsigndocumentName',
        'dtModifiedDate' => 'setDtModifiedDate',
        'aObjFormDataSigner' => 'setAObjFormDataSigner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigndocumentID' => 'getPkiEzsigndocumentID',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'sEzsigndocumentName' => 'getSEzsigndocumentName',
        'dtModifiedDate' => 'getDtModifiedDate',
        'aObjFormDataSigner' => 'getAObjFormDataSigner'
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
        $this->container['pkiEzsigndocumentID'] = $data['pkiEzsigndocumentID'] ?? null;
        $this->container['fkiEzsignfolderID'] = $data['fkiEzsignfolderID'] ?? null;
        $this->container['sEzsigndocumentName'] = $data['sEzsigndocumentName'] ?? null;
        $this->container['dtModifiedDate'] = $data['dtModifiedDate'] ?? null;
        $this->container['aObjFormDataSigner'] = $data['aObjFormDataSigner'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'pkiEzsigndocumentID' can't be null";
        }
        if (($this->container['pkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if (($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsigndocumentName'] === null) {
            $invalidProperties[] = "'sEzsigndocumentName' can't be null";
        }
        if ($this->container['dtModifiedDate'] === null) {
            $invalidProperties[] = "'dtModifiedDate' can't be null";
        }
        if ($this->container['aObjFormDataSigner'] === null) {
            $invalidProperties[] = "'aObjFormDataSigner' can't be null";
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
            throw new \InvalidArgumentException('invalid value for $pkiEzsigndocumentID when calling CustomFormDataDocumentResponse., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsigndocumentID'] = $pkiEzsigndocumentID;

        return $this;
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
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling CustomFormDataDocumentResponse., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;

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
        $this->container['sEzsigndocumentName'] = $sEzsigndocumentName;

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
     * @param string $dtModifiedDate The date and time at which the object was last modified
     *
     * @return self
     */
    public function setDtModifiedDate($dtModifiedDate)
    {
        $this->container['dtModifiedDate'] = $dtModifiedDate;

        return $this;
    }

    /**
     * Gets aObjFormDataSigner
     *
     * @return \eZmaxAPI\Model\CustomFormDataSignerResponse[]
     */
    public function getAObjFormDataSigner()
    {
        return $this->container['aObjFormDataSigner'];
    }

    /**
     * Sets aObjFormDataSigner
     *
     * @param \eZmaxAPI\Model\CustomFormDataSignerResponse[] $aObjFormDataSigner aObjFormDataSigner
     *
     * @return self
     */
    public function setAObjFormDataSigner($aObjFormDataSigner)
    {


        $this->container['aObjFormDataSigner'] = $aObjFormDataSigner;

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


