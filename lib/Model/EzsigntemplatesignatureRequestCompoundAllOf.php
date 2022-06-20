<?php
/**
 * EzsigntemplatesignatureRequestCompoundAllOf
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
 * The version of the OpenAPI document: 1.1.9
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
 * EzsigntemplatesignatureRequestCompoundAllOf Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatesignatureRequestCompoundAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatesignature_RequestCompound_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bEzsigntemplatesignatureCustomdate' => 'bool',
        'aObjEzsigntemplatesignaturecustomdate' => '\eZmaxAPI\Model\EzsigntemplatesignaturecustomdateRequestCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bEzsigntemplatesignatureCustomdate' => null,
        'aObjEzsigntemplatesignaturecustomdate' => null
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
        'bEzsigntemplatesignatureCustomdate' => 'bEzsigntemplatesignatureCustomdate',
        'aObjEzsigntemplatesignaturecustomdate' => 'a_objEzsigntemplatesignaturecustomdate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bEzsigntemplatesignatureCustomdate' => 'setBEzsigntemplatesignatureCustomdate',
        'aObjEzsigntemplatesignaturecustomdate' => 'setAObjEzsigntemplatesignaturecustomdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bEzsigntemplatesignatureCustomdate' => 'getBEzsigntemplatesignatureCustomdate',
        'aObjEzsigntemplatesignaturecustomdate' => 'getAObjEzsigntemplatesignaturecustomdate'
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
        $this->container['bEzsigntemplatesignatureCustomdate'] = $data['bEzsigntemplatesignatureCustomdate'] ?? null;
        $this->container['aObjEzsigntemplatesignaturecustomdate'] = $data['aObjEzsigntemplatesignaturecustomdate'] ?? null;
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
     * Gets bEzsigntemplatesignatureCustomdate
     *
     * @return bool|null
     */
    public function getBEzsigntemplatesignatureCustomdate()
    {
        return $this->container['bEzsigntemplatesignatureCustomdate'];
    }

    /**
     * Sets bEzsigntemplatesignatureCustomdate
     *
     * @param bool|null $bEzsigntemplatesignatureCustomdate Whether the Ezsigntemplatesignature has a custom date format or not. (Only possible when eEzsigntemplatesignatureType is **Name** or **Handwritten**)
     *
     * @return self
     */
    public function setBEzsigntemplatesignatureCustomdate($bEzsigntemplatesignatureCustomdate)
    {
        $this->container['bEzsigntemplatesignatureCustomdate'] = $bEzsigntemplatesignatureCustomdate;

        return $this;
    }

    /**
     * Gets aObjEzsigntemplatesignaturecustomdate
     *
     * @return \eZmaxAPI\Model\EzsigntemplatesignaturecustomdateRequestCompound[]|null
     */
    public function getAObjEzsigntemplatesignaturecustomdate()
    {
        return $this->container['aObjEzsigntemplatesignaturecustomdate'];
    }

    /**
     * Sets aObjEzsigntemplatesignaturecustomdate
     *
     * @param \eZmaxAPI\Model\EzsigntemplatesignaturecustomdateRequestCompound[]|null $aObjEzsigntemplatesignaturecustomdate An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsigntemplatesignatureCustomdate is true.  Use an empty array if you don't want to have a date at all.
     *
     * @return self
     */
    public function setAObjEzsigntemplatesignaturecustomdate($aObjEzsigntemplatesignaturecustomdate)
    {
        $this->container['aObjEzsigntemplatesignaturecustomdate'] = $aObjEzsigntemplatesignaturecustomdate;

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


