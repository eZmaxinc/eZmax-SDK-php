<?php
/**
 * CustomWordPositionOccurenceResponse
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 1.1.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
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
 * CustomWordPositionOccurenceResponse Class Doc Comment
 *
 * @category Class
 * @description A Word Position Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomWordPositionOccurenceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-WordPositionOccurence-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iPage' => 'int',
        'iX' => 'int',
        'iY' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iPage' => null,
        'iX' => null,
        'iY' => null
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
        'iPage' => 'iPage',
        'iX' => 'iX',
        'iY' => 'iY'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iPage' => 'setIPage',
        'iX' => 'setIX',
        'iY' => 'setIY'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iPage' => 'getIPage',
        'iX' => 'getIX',
        'iY' => 'getIY'
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
        $this->container['iPage'] = $data['iPage'] ?? null;
        $this->container['iX'] = $data['iX'] ?? null;
        $this->container['iY'] = $data['iY'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['iPage']) && ($this->container['iPage'] < 1)) {
            $invalidProperties[] = "invalid value for 'iPage', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['iX']) && ($this->container['iX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iX', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iY']) && ($this->container['iY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iY', must be bigger than or equal to 0.";
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
     * Gets iPage
     *
     * @return int|null
     */
    public function getIPage()
    {
        return $this->container['iPage'];
    }

    /**
     * Sets iPage
     *
     * @param int|null $iPage The page where the word occurence was found
     *
     * @return self
     */
    public function setIPage($iPage)
    {

        if (!is_null($iPage) && ($iPage < 1)) {
            throw new \InvalidArgumentException('invalid value for $iPage when calling CustomWordPositionOccurenceResponse., must be bigger than or equal to 1.');
        }

        $this->container['iPage'] = $iPage;

        return $this;
    }

    /**
     * Gets iX
     *
     * @return int|null
     */
    public function getIX()
    {
        return $this->container['iX'];
    }

    /**
     * Sets iX
     *
     * @param int|null $iX The X coordinate (Horizontal) where the Word occurence was found.  Coordinate is calculated at 100dpi (dot per inch).
     *
     * @return self
     */
    public function setIX($iX)
    {

        if (!is_null($iX) && ($iX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iX when calling CustomWordPositionOccurenceResponse., must be bigger than or equal to 0.');
        }

        $this->container['iX'] = $iX;

        return $this;
    }

    /**
     * Gets iY
     *
     * @return int|null
     */
    public function getIY()
    {
        return $this->container['iY'];
    }

    /**
     * Sets iY
     *
     * @param int|null $iY The Y coordinate (Vertical) where the Word occurence was found.  Coordinate is calculated at 100dpi (dot per inch).
     *
     * @return self
     */
    public function setIY($iY)
    {

        if (!is_null($iY) && ($iY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iY when calling CustomWordPositionOccurenceResponse., must be bigger than or equal to 0.');
        }

        $this->container['iY'] = $iY;

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


