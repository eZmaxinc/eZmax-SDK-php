<?php
/**
 * GenericResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eZmaxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * TODO Api description
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Client\Model;

use \ArrayAccess;
use \eZmaxAPI\Client\ObjectSerializer;

/**
 * GenericResponse Class Doc Comment
 *
 * @category Class
 * @description All API response will inherit this based Response.
 * @package  eZmaxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GenericResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Generic-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objDebugPayload' => '\eZmaxAPI\Client\Model\GenericResponseObjDebugPayload',
        'objDebug' => '\eZmaxAPI\Client\Model\GenericResponseObjDebug'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'objDebugPayload' => null,
        'objDebug' => null
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
        'objDebugPayload' => 'objDebugPayload',
        'objDebug' => 'objDebug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objDebugPayload' => 'setObjDebugPayload',
        'objDebug' => 'setObjDebug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objDebugPayload' => 'getObjDebugPayload',
        'objDebug' => 'getObjDebug'
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
        $this->container['objDebugPayload'] = isset($data['objDebugPayload']) ? $data['objDebugPayload'] : null;
        $this->container['objDebug'] = isset($data['objDebug']) ? $data['objDebug'] : null;
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
     * Gets objDebugPayload
     *
     * @return \eZmaxAPI\Client\Model\GenericResponseObjDebugPayload|null
     */
    public function getObjDebugPayload()
    {
        return $this->container['objDebugPayload'];
    }

    /**
     * Sets objDebugPayload
     *
     * @param \eZmaxAPI\Client\Model\GenericResponseObjDebugPayload|null $objDebugPayload objDebugPayload
     *
     * @return $this
     */
    public function setObjDebugPayload($objDebugPayload)
    {
        $this->container['objDebugPayload'] = $objDebugPayload;

        return $this;
    }

    /**
     * Gets objDebug
     *
     * @return \eZmaxAPI\Client\Model\GenericResponseObjDebug|null
     */
    public function getObjDebug()
    {
        return $this->container['objDebug'];
    }

    /**
     * Sets objDebug
     *
     * @param \eZmaxAPI\Client\Model\GenericResponseObjDebug|null $objDebug objDebug
     *
     * @return $this
     */
    public function setObjDebug($objDebug)
    {
        $this->container['objDebug'] = $objDebug;

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


