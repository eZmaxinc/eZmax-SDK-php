<?php
/**
 * ContactinformationsRequestCompoundAllOf
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * ContactinformationsRequestCompoundAllOf Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactinformationsRequestCompoundAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contactinformations_RequestCompound_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aObjAddress' => '\eZmaxAPI\Model\AddressRequestCompound[]',
        'aObjPhone' => '\eZmaxAPI\Model\PhoneRequestCompound[]',
        'aObjEmail' => '\eZmaxAPI\Model\EmailRequestCompound[]',
        'aObjWebsite' => '\eZmaxAPI\Model\WebsiteRequestCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aObjAddress' => null,
        'aObjPhone' => null,
        'aObjEmail' => null,
        'aObjWebsite' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aObjAddress' => false,
		'aObjPhone' => false,
		'aObjEmail' => false,
		'aObjWebsite' => false
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
        'aObjAddress' => 'a_objAddress',
        'aObjPhone' => 'a_objPhone',
        'aObjEmail' => 'a_objEmail',
        'aObjWebsite' => 'a_objWebsite'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aObjAddress' => 'setAObjAddress',
        'aObjPhone' => 'setAObjPhone',
        'aObjEmail' => 'setAObjEmail',
        'aObjWebsite' => 'setAObjWebsite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aObjAddress' => 'getAObjAddress',
        'aObjPhone' => 'getAObjPhone',
        'aObjEmail' => 'getAObjEmail',
        'aObjWebsite' => 'getAObjWebsite'
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
        $this->setIfExists('aObjAddress', $data ?? [], null);
        $this->setIfExists('aObjPhone', $data ?? [], null);
        $this->setIfExists('aObjEmail', $data ?? [], null);
        $this->setIfExists('aObjWebsite', $data ?? [], null);
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

        if ($this->container['aObjAddress'] === null) {
            $invalidProperties[] = "'aObjAddress' can't be null";
        }
        if ($this->container['aObjPhone'] === null) {
            $invalidProperties[] = "'aObjPhone' can't be null";
        }
        if ($this->container['aObjEmail'] === null) {
            $invalidProperties[] = "'aObjEmail' can't be null";
        }
        if ($this->container['aObjWebsite'] === null) {
            $invalidProperties[] = "'aObjWebsite' can't be null";
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
     * Gets aObjAddress
     *
     * @return \eZmaxAPI\Model\AddressRequestCompound[]
     */
    public function getAObjAddress()
    {
        return $this->container['aObjAddress'];
    }

    /**
     * Sets aObjAddress
     *
     * @param \eZmaxAPI\Model\AddressRequestCompound[] $aObjAddress aObjAddress
     *
     * @return self
     */
    public function setAObjAddress($aObjAddress)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjAddress)) {
            //throw new \InvalidArgumentException('non-nullable aObjAddress cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjAddress'] = $aObjAddress;
        $this->container['aObjAddress'] = $aObjAddress;

        return $this;
    }

    /**
     * Gets aObjPhone
     *
     * @return \eZmaxAPI\Model\PhoneRequestCompound[]
     */
    public function getAObjPhone()
    {
        return $this->container['aObjPhone'];
    }

    /**
     * Sets aObjPhone
     *
     * @param \eZmaxAPI\Model\PhoneRequestCompound[] $aObjPhone aObjPhone
     *
     * @return self
     */
    public function setAObjPhone($aObjPhone)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjPhone)) {
            //throw new \InvalidArgumentException('non-nullable aObjPhone cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjPhone'] = $aObjPhone;
        $this->container['aObjPhone'] = $aObjPhone;

        return $this;
    }

    /**
     * Gets aObjEmail
     *
     * @return \eZmaxAPI\Model\EmailRequestCompound[]
     */
    public function getAObjEmail()
    {
        return $this->container['aObjEmail'];
    }

    /**
     * Sets aObjEmail
     *
     * @param \eZmaxAPI\Model\EmailRequestCompound[] $aObjEmail aObjEmail
     *
     * @return self
     */
    public function setAObjEmail($aObjEmail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEmail)) {
            //throw new \InvalidArgumentException('non-nullable aObjEmail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEmail'] = $aObjEmail;
        $this->container['aObjEmail'] = $aObjEmail;

        return $this;
    }

    /**
     * Gets aObjWebsite
     *
     * @return \eZmaxAPI\Model\WebsiteRequestCompound[]
     */
    public function getAObjWebsite()
    {
        return $this->container['aObjWebsite'];
    }

    /**
     * Sets aObjWebsite
     *
     * @param \eZmaxAPI\Model\WebsiteRequestCompound[] $aObjWebsite aObjWebsite
     *
     * @return self
     */
    public function setAObjWebsite($aObjWebsite)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjWebsite)) {
            //throw new \InvalidArgumentException('non-nullable aObjWebsite cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjWebsite'] = $aObjWebsite;
        $this->container['aObjWebsite'] = $aObjWebsite;

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


