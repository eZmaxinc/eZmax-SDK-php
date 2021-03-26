<?php
/**
 * EzsignfoldersignerassociationCreateObjectV1Request
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
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.0.39
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
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
 * EzsignfoldersignerassociationCreateObjectV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for the /1/object/ezsignfoldersignerassociation/createObject API Request
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class EzsignfoldersignerassociationCreateObjectV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfoldersignerassociation-createObject-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objEzsignfoldersignerassociation' => '\eZmaxAPI\Model\EzsignfoldersignerassociationRequest',
        'objEzsignfoldersignerassociationCompound' => '\eZmaxAPI\Model\EzsignfoldersignerassociationRequestCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'objEzsignfoldersignerassociation' => null,
        'objEzsignfoldersignerassociationCompound' => null
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
        'objEzsignfoldersignerassociation' => 'objEzsignfoldersignerassociation',
        'objEzsignfoldersignerassociationCompound' => 'objEzsignfoldersignerassociationCompound'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objEzsignfoldersignerassociation' => 'setObjEzsignfoldersignerassociation',
        'objEzsignfoldersignerassociationCompound' => 'setObjEzsignfoldersignerassociationCompound'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objEzsignfoldersignerassociation' => 'getObjEzsignfoldersignerassociation',
        'objEzsignfoldersignerassociationCompound' => 'getObjEzsignfoldersignerassociationCompound'
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
        $this->container['objEzsignfoldersignerassociation'] = $data['objEzsignfoldersignerassociation'] ?? null;
        $this->container['objEzsignfoldersignerassociationCompound'] = $data['objEzsignfoldersignerassociationCompound'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets objEzsignfoldersignerassociation
     *
     * @return \eZmaxAPI\Model\EzsignfoldersignerassociationRequest|null
     */
    public function getObjEzsignfoldersignerassociation()
    {
        return $this->container['objEzsignfoldersignerassociation'];
    }

    /**
     * Sets objEzsignfoldersignerassociation
     *
     * @param \eZmaxAPI\Model\EzsignfoldersignerassociationRequest|null $objEzsignfoldersignerassociation objEzsignfoldersignerassociation
     *
     * @return self
     */
    public function setObjEzsignfoldersignerassociation($objEzsignfoldersignerassociation)
    {
        $this->container['objEzsignfoldersignerassociation'] = $objEzsignfoldersignerassociation;

        return $this;
    }

    /**
     * Gets objEzsignfoldersignerassociationCompound
     *
     * @return \eZmaxAPI\Model\EzsignfoldersignerassociationRequestCompound|null
     */
    public function getObjEzsignfoldersignerassociationCompound()
    {
        return $this->container['objEzsignfoldersignerassociationCompound'];
    }

    /**
     * Sets objEzsignfoldersignerassociationCompound
     *
     * @param \eZmaxAPI\Model\EzsignfoldersignerassociationRequestCompound|null $objEzsignfoldersignerassociationCompound objEzsignfoldersignerassociationCompound
     *
     * @return self
     */
    public function setObjEzsignfoldersignerassociationCompound($objEzsignfoldersignerassociationCompound)
    {
        $this->container['objEzsignfoldersignerassociationCompound'] = $objEzsignfoldersignerassociationCompound;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


