<?php
/**
 * MultilingualUserlogintypeDescription
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * MultilingualUserlogintypeDescription Class Doc Comment
 *
 * @category Class
 * @description The description of the Userlogintype
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MultilingualUserlogintypeDescription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Multilingual-UserlogintypeDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sUserlogintypeDescription1' => 'string',
        'sUserlogintypeDescription2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sUserlogintypeDescription1' => null,
        'sUserlogintypeDescription2' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sUserlogintypeDescription1' => false,
		'sUserlogintypeDescription2' => false
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'sUserlogintypeDescription1' => 'sUserlogintypeDescription1',
        'sUserlogintypeDescription2' => 'sUserlogintypeDescription2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sUserlogintypeDescription1' => 'setSUserlogintypeDescription1',
        'sUserlogintypeDescription2' => 'setSUserlogintypeDescription2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sUserlogintypeDescription1' => 'getSUserlogintypeDescription1',
        'sUserlogintypeDescription2' => 'getSUserlogintypeDescription2'
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
        $this->setIfExists('sUserlogintypeDescription1', $data ?? [], null);
        $this->setIfExists('sUserlogintypeDescription2', $data ?? [], null);
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

//        if (!is_null($this->container['sUserlogintypeDescription1']) && !preg_match("/^.{0,50}$/", $this->container['sUserlogintypeDescription1'])) {
        if (!is_null($this->container['sUserlogintypeDescription1']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sUserlogintypeDescription1'])) {
            $invalidProperties[] = "invalid value for 'sUserlogintypeDescription1', must be conform to the pattern /^.{0,50}$/.";
        }

//        if (!is_null($this->container['sUserlogintypeDescription2']) && !preg_match("/^.{0,50}$/", $this->container['sUserlogintypeDescription2'])) {
        if (!is_null($this->container['sUserlogintypeDescription2']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sUserlogintypeDescription2'])) {
            $invalidProperties[] = "invalid value for 'sUserlogintypeDescription2', must be conform to the pattern /^.{0,50}$/.";
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
     * Gets sUserlogintypeDescription1
     *
     * @return string|null
     */
    public function getSUserlogintypeDescription1()
    {
        return is_null($this->container['sUserlogintypeDescription1']) ? null : trim($this->container['sUserlogintypeDescription1']);
    }

    /**
     * Sets sUserlogintypeDescription1
     *
     * @param string|null $sUserlogintypeDescription1 The description of the Userlogintype in French
     *
     * @return self
     */
    public function setSUserlogintypeDescription1($sUserlogintypeDescription1)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserlogintypeDescription1)) {
            //throw new \InvalidArgumentException('non-nullable sUserlogintypeDescription1 cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sUserlogintypeDescription1)))) {
        if (!is_null($sUserlogintypeDescription1) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sUserlogintypeDescription1)))) {
            throw new \InvalidArgumentException("invalid value for \$sUserlogintypeDescription1 when calling MultilingualUserlogintypeDescription., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserlogintypeDescription1'] = $sUserlogintypeDescription1;
        $this->container['sUserlogintypeDescription1'] = (is_null($sUserlogintypeDescription1) ? null : trim((string) $sUserlogintypeDescription1));

        return $this;
    }

    /**
     * Gets sUserlogintypeDescription2
     *
     * @return string|null
     */
    public function getSUserlogintypeDescription2()
    {
        return is_null($this->container['sUserlogintypeDescription2']) ? null : trim($this->container['sUserlogintypeDescription2']);
    }

    /**
     * Sets sUserlogintypeDescription2
     *
     * @param string|null $sUserlogintypeDescription2 The description of the Userlogintype in English
     *
     * @return self
     */
    public function setSUserlogintypeDescription2($sUserlogintypeDescription2)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserlogintypeDescription2)) {
            //throw new \InvalidArgumentException('non-nullable sUserlogintypeDescription2 cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sUserlogintypeDescription2)))) {
        if (!is_null($sUserlogintypeDescription2) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sUserlogintypeDescription2)))) {
            throw new \InvalidArgumentException("invalid value for \$sUserlogintypeDescription2 when calling MultilingualUserlogintypeDescription., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserlogintypeDescription2'] = $sUserlogintypeDescription2;
        $this->container['sUserlogintypeDescription2'] = (is_null($sUserlogintypeDescription2) ? null : trim((string) $sUserlogintypeDescription2));

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

