<?php
/**
 * EzsignbulksendGetListV1ResponseMPayload
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
 * EzsignbulksendGetListV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for GET /1/object/ezsignbulksend/getList
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignbulksendGetListV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksend-getList-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aObjEzsignbulksend' => '\eZmaxAPI\Model\EzsignbulksendListElement[]',
        'iRowReturned' => 'int',
        'iRowFiltered' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aObjEzsignbulksend' => null,
        'iRowReturned' => null,
        'iRowFiltered' => null
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
        'aObjEzsignbulksend' => 'a_objEzsignbulksend',
        'iRowReturned' => 'iRowReturned',
        'iRowFiltered' => 'iRowFiltered'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aObjEzsignbulksend' => 'setAObjEzsignbulksend',
        'iRowReturned' => 'setIRowReturned',
        'iRowFiltered' => 'setIRowFiltered'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aObjEzsignbulksend' => 'getAObjEzsignbulksend',
        'iRowReturned' => 'getIRowReturned',
        'iRowFiltered' => 'getIRowFiltered'
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
        $this->container['aObjEzsignbulksend'] = $data['aObjEzsignbulksend'] ?? null;
        $this->container['iRowReturned'] = $data['iRowReturned'] ?? null;
        $this->container['iRowFiltered'] = $data['iRowFiltered'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aObjEzsignbulksend'] === null) {
            $invalidProperties[] = "'aObjEzsignbulksend' can't be null";
        }
        if ($this->container['iRowReturned'] === null) {
            $invalidProperties[] = "'iRowReturned' can't be null";
        }
        if ($this->container['iRowFiltered'] === null) {
            $invalidProperties[] = "'iRowFiltered' can't be null";
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
     * Gets aObjEzsignbulksend
     *
     * @return \eZmaxAPI\Model\EzsignbulksendListElement[]
     */
    public function getAObjEzsignbulksend()
    {
        return $this->container['aObjEzsignbulksend'];
    }

    /**
     * Sets aObjEzsignbulksend
     *
     * @param \eZmaxAPI\Model\EzsignbulksendListElement[] $aObjEzsignbulksend aObjEzsignbulksend
     *
     * @return self
     */
    public function setAObjEzsignbulksend($aObjEzsignbulksend)
    {
        $this->container['aObjEzsignbulksend'] = $aObjEzsignbulksend;

        return $this;
    }

    /**
     * Gets iRowReturned
     *
     * @return int
     */
    public function getIRowReturned()
    {
        return $this->container['iRowReturned'];
    }

    /**
     * Sets iRowReturned
     *
     * @param int $iRowReturned The number of rows returned
     *
     * @return self
     */
    public function setIRowReturned($iRowReturned)
    {
        $this->container['iRowReturned'] = $iRowReturned;

        return $this;
    }

    /**
     * Gets iRowFiltered
     *
     * @return int
     */
    public function getIRowFiltered()
    {
        return $this->container['iRowFiltered'];
    }

    /**
     * Sets iRowFiltered
     *
     * @param int $iRowFiltered The number of rows matching your filters (if any) or the total number of rows
     *
     * @return self
     */
    public function setIRowFiltered($iRowFiltered)
    {
        $this->container['iRowFiltered'] = $iRowFiltered;

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


