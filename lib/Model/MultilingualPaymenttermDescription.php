<?php
/**
 * MultilingualPaymenttermDescription
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
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
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
 * MultilingualPaymenttermDescription Class Doc Comment
 *
 * @category Class
 * @description Description of the Paymentterm
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MultilingualPaymenttermDescription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Multilingual-PaymenttermDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sPaymenttermDescription1' => 'string',
        'sPaymenttermDescription2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sPaymenttermDescription1' => null,
        'sPaymenttermDescription2' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sPaymenttermDescription1' => false,
		'sPaymenttermDescription2' => false
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
        'sPaymenttermDescription1' => 'sPaymenttermDescription1',
        'sPaymenttermDescription2' => 'sPaymenttermDescription2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sPaymenttermDescription1' => 'setSPaymenttermDescription1',
        'sPaymenttermDescription2' => 'setSPaymenttermDescription2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sPaymenttermDescription1' => 'getSPaymenttermDescription1',
        'sPaymenttermDescription2' => 'getSPaymenttermDescription2'
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
        $this->setIfExists('sPaymenttermDescription1', $data ?? [], null);
        $this->setIfExists('sPaymenttermDescription2', $data ?? [], null);
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

//        if (!is_null($this->container['sPaymenttermDescription1']) && !preg_match("/^.{1,40}$/", $this->container['sPaymenttermDescription1'])) {
        if (!is_null($this->container['sPaymenttermDescription1']) && !preg_match("/^.{1,40}$/", $this->container['sPaymenttermDescription1'])) {
            $invalidProperties[] = "invalid value for 'sPaymenttermDescription1', must be conform to the pattern /^.{1,40}$/.";
        }

//        if (!is_null($this->container['sPaymenttermDescription2']) && !preg_match("/^.{1,40}$/", $this->container['sPaymenttermDescription2'])) {
        if (!is_null($this->container['sPaymenttermDescription2']) && !preg_match("/^.{1,40}$/", $this->container['sPaymenttermDescription2'])) {
            $invalidProperties[] = "invalid value for 'sPaymenttermDescription2', must be conform to the pattern /^.{1,40}$/.";
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
     * Gets sPaymenttermDescription1
     *
     * @return string|null
     */
    public function getSPaymenttermDescription1()
    {
        return $this->container['sPaymenttermDescription1'];
    }

    /**
     * Sets sPaymenttermDescription1
     *
     * @param string|null $sPaymenttermDescription1 The description of the Paymentterm in French
     *
     * @return self
     */
    public function setSPaymenttermDescription1($sPaymenttermDescription1)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPaymenttermDescription1)) {
            //throw new \InvalidArgumentException('non-nullable sPaymenttermDescription1 cannot be null');
        //}

//        if ((!preg_match("/^.{1,40}$/", $sPaymenttermDescription1))) {
        if (!is_null($sPaymenttermDescription1) && (!preg_match("/^.{1,40}$/", $sPaymenttermDescription1))) {
            throw new \InvalidArgumentException("invalid value for \$sPaymenttermDescription1 when calling MultilingualPaymenttermDescription., must conform to the pattern /^.{1,40}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPaymenttermDescription1'] = $sPaymenttermDescription1;
        $this->container['sPaymenttermDescription1'] = (is_null($sPaymenttermDescription1) ? null : (string) $sPaymenttermDescription1);

        return $this;
    }

    /**
     * Gets sPaymenttermDescription2
     *
     * @return string|null
     */
    public function getSPaymenttermDescription2()
    {
        return $this->container['sPaymenttermDescription2'];
    }

    /**
     * Sets sPaymenttermDescription2
     *
     * @param string|null $sPaymenttermDescription2 The description of the Paymentterm in English
     *
     * @return self
     */
    public function setSPaymenttermDescription2($sPaymenttermDescription2)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPaymenttermDescription2)) {
            //throw new \InvalidArgumentException('non-nullable sPaymenttermDescription2 cannot be null');
        //}

//        if ((!preg_match("/^.{1,40}$/", $sPaymenttermDescription2))) {
        if (!is_null($sPaymenttermDescription2) && (!preg_match("/^.{1,40}$/", $sPaymenttermDescription2))) {
            throw new \InvalidArgumentException("invalid value for \$sPaymenttermDescription2 when calling MultilingualPaymenttermDescription., must conform to the pattern /^.{1,40}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPaymenttermDescription2'] = $sPaymenttermDescription2;
        $this->container['sPaymenttermDescription2'] = (is_null($sPaymenttermDescription2) ? null : (string) $sPaymenttermDescription2);

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


