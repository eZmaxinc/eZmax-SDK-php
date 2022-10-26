<?php
/**
 * ContactinformationsRequest
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
 * The version of the OpenAPI document: 1.1.12
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
 * ContactinformationsRequest Class Doc Comment
 *
 * @category Class
 * @description A Contactinformations Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactinformationsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contactinformations-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iAddressDefault' => 'int',
        'iPhoneDefault' => 'int',
        'iEmailDefault' => 'int',
        'iWebsiteDefault' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iAddressDefault' => null,
        'iPhoneDefault' => null,
        'iEmailDefault' => null,
        'iWebsiteDefault' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'iAddressDefault' => false,
		'iPhoneDefault' => false,
		'iEmailDefault' => false,
		'iWebsiteDefault' => false
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
        'iAddressDefault' => 'iAddressDefault',
        'iPhoneDefault' => 'iPhoneDefault',
        'iEmailDefault' => 'iEmailDefault',
        'iWebsiteDefault' => 'iWebsiteDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iAddressDefault' => 'setIAddressDefault',
        'iPhoneDefault' => 'setIPhoneDefault',
        'iEmailDefault' => 'setIEmailDefault',
        'iWebsiteDefault' => 'setIWebsiteDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iAddressDefault' => 'getIAddressDefault',
        'iPhoneDefault' => 'getIPhoneDefault',
        'iEmailDefault' => 'getIEmailDefault',
        'iWebsiteDefault' => 'getIWebsiteDefault'
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
        $this->setIfExists('iAddressDefault', $data ?? [], null);
        $this->setIfExists('iPhoneDefault', $data ?? [], null);
        $this->setIfExists('iEmailDefault', $data ?? [], null);
        $this->setIfExists('iWebsiteDefault', $data ?? [], null);
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

        if ($this->container['iAddressDefault'] === null) {
            $invalidProperties[] = "'iAddressDefault' can't be null";
        }
        if ($this->container['iPhoneDefault'] === null) {
            $invalidProperties[] = "'iPhoneDefault' can't be null";
        }
        if ($this->container['iEmailDefault'] === null) {
            $invalidProperties[] = "'iEmailDefault' can't be null";
        }
        if ($this->container['iWebsiteDefault'] === null) {
            $invalidProperties[] = "'iWebsiteDefault' can't be null";
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
     * Gets iAddressDefault
     *
     * @return int
     */
    public function getIAddressDefault()
    {
        return $this->container['iAddressDefault'];
    }

    /**
     * Sets iAddressDefault
     *
     * @param int $iAddressDefault The index in the a_objAddress array (zero based index) representing the Address object that should become the default one.  You can leave the value to 0 if the array is empty.
     *
     * @return self
     */
    public function setIAddressDefault($iAddressDefault)
    {

        //if (is_null($iAddressDefault)) {
            //throw new \InvalidArgumentException('non-nullable iAddressDefault cannot be null');
        //}
        $this->container['iAddressDefault'] = (is_null($iAddressDefault) ? null : (int) $iAddressDefault);

        return $this;
    }

    /**
     * Gets iPhoneDefault
     *
     * @return int
     */
    public function getIPhoneDefault()
    {
        return $this->container['iPhoneDefault'];
    }

    /**
     * Sets iPhoneDefault
     *
     * @param int $iPhoneDefault The index in the a_objPhone array (zero based index) representing the Phone object that should become the default one.  You can leave the value to 0 if the array is empty.
     *
     * @return self
     */
    public function setIPhoneDefault($iPhoneDefault)
    {

        //if (is_null($iPhoneDefault)) {
            //throw new \InvalidArgumentException('non-nullable iPhoneDefault cannot be null');
        //}
        $this->container['iPhoneDefault'] = (is_null($iPhoneDefault) ? null : (int) $iPhoneDefault);

        return $this;
    }

    /**
     * Gets iEmailDefault
     *
     * @return int
     */
    public function getIEmailDefault()
    {
        return $this->container['iEmailDefault'];
    }

    /**
     * Sets iEmailDefault
     *
     * @param int $iEmailDefault The index in the a_objEmail array (zero based index) representing the Email object that should become the default one.  You can leave the value to 0 if the array is empty.
     *
     * @return self
     */
    public function setIEmailDefault($iEmailDefault)
    {

        //if (is_null($iEmailDefault)) {
            //throw new \InvalidArgumentException('non-nullable iEmailDefault cannot be null');
        //}
        $this->container['iEmailDefault'] = (is_null($iEmailDefault) ? null : (int) $iEmailDefault);

        return $this;
    }

    /**
     * Gets iWebsiteDefault
     *
     * @return int
     */
    public function getIWebsiteDefault()
    {
        return $this->container['iWebsiteDefault'];
    }

    /**
     * Sets iWebsiteDefault
     *
     * @param int $iWebsiteDefault The index in the a_objWebsite array (zero based index) representing the Website object that should become the default one.  You can leave the value to 0 if the array is empty.
     *
     * @return self
     */
    public function setIWebsiteDefault($iWebsiteDefault)
    {

        //if (is_null($iWebsiteDefault)) {
            //throw new \InvalidArgumentException('non-nullable iWebsiteDefault cannot be null');
        //}
        $this->container['iWebsiteDefault'] = (is_null($iWebsiteDefault) ? null : (int) $iWebsiteDefault);

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


