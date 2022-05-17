<?php
/**
 * EzsignbulksendsignermappingResponse
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
 * The version of the OpenAPI document: 1.1.7
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * EzsignbulksendsignermappingResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsignbulksendsignermapping Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignbulksendsignermappingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksendsignermapping-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksendsignermappingID' => 'int',
        'fkiEzsignbulksendID' => 'int',
        'fkiUserID' => 'int',
        'sEzsignbulksendsignermappingDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksendsignermappingID' => null,
        'fkiEzsignbulksendID' => null,
        'fkiUserID' => null,
        'sEzsignbulksendsignermappingDescription' => null
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
        'pkiEzsignbulksendsignermappingID' => 'pkiEzsignbulksendsignermappingID',
        'fkiEzsignbulksendID' => 'fkiEzsignbulksendID',
        'fkiUserID' => 'fkiUserID',
        'sEzsignbulksendsignermappingDescription' => 'sEzsignbulksendsignermappingDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksendsignermappingID' => 'setPkiEzsignbulksendsignermappingID',
        'fkiEzsignbulksendID' => 'setFkiEzsignbulksendID',
        'fkiUserID' => 'setFkiUserID',
        'sEzsignbulksendsignermappingDescription' => 'setSEzsignbulksendsignermappingDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksendsignermappingID' => 'getPkiEzsignbulksendsignermappingID',
        'fkiEzsignbulksendID' => 'getFkiEzsignbulksendID',
        'fkiUserID' => 'getFkiUserID',
        'sEzsignbulksendsignermappingDescription' => 'getSEzsignbulksendsignermappingDescription'
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
        $this->container['pkiEzsignbulksendsignermappingID'] = $data['pkiEzsignbulksendsignermappingID'] ?? null;
        $this->container['fkiEzsignbulksendID'] = $data['fkiEzsignbulksendID'] ?? null;
        $this->container['fkiUserID'] = $data['fkiUserID'] ?? null;
        $this->container['sEzsignbulksendsignermappingDescription'] = $data['sEzsignbulksendsignermappingDescription'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignbulksendsignermappingID'] === null) {
            $invalidProperties[] = "'pkiEzsignbulksendsignermappingID' can't be null";
        }
        if ($this->container['fkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'fkiEzsignbulksendID' can't be null";
        }
        if ($this->container['sEzsignbulksendsignermappingDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendsignermappingDescription' can't be null";
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
     * Gets pkiEzsignbulksendsignermappingID
     *
     * @return int
     */
    public function getPkiEzsignbulksendsignermappingID()
    {
        return $this->container['pkiEzsignbulksendsignermappingID'];
    }

    /**
     * Sets pkiEzsignbulksendsignermappingID
     *
     * @param int $pkiEzsignbulksendsignermappingID The unique ID of the Ezsignbulksendsignermapping
     *
     * @return self
     */
    public function setPkiEzsignbulksendsignermappingID($pkiEzsignbulksendsignermappingID)
    {
        $this->container['pkiEzsignbulksendsignermappingID'] = $pkiEzsignbulksendsignermappingID;

        return $this;
    }

    /**
     * Gets fkiEzsignbulksendID
     *
     * @return int
     */
    public function getFkiEzsignbulksendID()
    {
        return $this->container['fkiEzsignbulksendID'];
    }

    /**
     * Sets fkiEzsignbulksendID
     *
     * @param int $fkiEzsignbulksendID The unique ID of the Ezsignbulksend
     *
     * @return self
     */
    public function setFkiEzsignbulksendID($fkiEzsignbulksendID)
    {
        $this->container['fkiEzsignbulksendID'] = $fkiEzsignbulksendID;

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int|null
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int|null $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
        $this->container['fkiUserID'] = $fkiUserID;

        return $this;
    }

    /**
     * Gets sEzsignbulksendsignermappingDescription
     *
     * @return string
     */
    public function getSEzsignbulksendsignermappingDescription()
    {
        return $this->container['sEzsignbulksendsignermappingDescription'];
    }

    /**
     * Sets sEzsignbulksendsignermappingDescription
     *
     * @param string $sEzsignbulksendsignermappingDescription The description of the Ezsignbulksendsignermapping
     *
     * @return self
     */
    public function setSEzsignbulksendsignermappingDescription($sEzsignbulksendsignermappingDescription)
    {
        $this->container['sEzsignbulksendsignermappingDescription'] = $sEzsignbulksendsignermappingDescription;

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


