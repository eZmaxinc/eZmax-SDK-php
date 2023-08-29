<?php
/**
 * ContactinformationsRequestCompound
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
 * OpenAPI Generator version: 7.0.0
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
 * ContactinformationsRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Contactinformations Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactinformationsRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contactinformations-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iAddressDefault' => 'int',
        'iPhoneDefault' => 'int',
        'iEmailDefault' => 'int',
        'iWebsiteDefault' => 'int',
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
        'iAddressDefault' => null,
        'iPhoneDefault' => null,
        'iEmailDefault' => null,
        'iWebsiteDefault' => null,
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
        'iAddressDefault' => false,
		'iPhoneDefault' => false,
		'iEmailDefault' => false,
		'iWebsiteDefault' => false,
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
        'iAddressDefault' => 'iAddressDefault',
        'iPhoneDefault' => 'iPhoneDefault',
        'iEmailDefault' => 'iEmailDefault',
        'iWebsiteDefault' => 'iWebsiteDefault',
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
        'iAddressDefault' => 'setIAddressDefault',
        'iPhoneDefault' => 'setIPhoneDefault',
        'iEmailDefault' => 'setIEmailDefault',
        'iWebsiteDefault' => 'setIWebsiteDefault',
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
        'iAddressDefault' => 'getIAddressDefault',
        'iPhoneDefault' => 'getIPhoneDefault',
        'iEmailDefault' => 'getIEmailDefault',
        'iWebsiteDefault' => 'getIWebsiteDefault',
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
        $this->setIfExists('iAddressDefault', $data ?? [], null);
        $this->setIfExists('iPhoneDefault', $data ?? [], null);
        $this->setIfExists('iEmailDefault', $data ?? [], null);
        $this->setIfExists('iWebsiteDefault', $data ?? [], null);
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iAddressDefault)) {
            //throw new \InvalidArgumentException('non-nullable iAddressDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iAddressDefault'] = $iAddressDefault;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iPhoneDefault)) {
            //throw new \InvalidArgumentException('non-nullable iPhoneDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iPhoneDefault'] = $iPhoneDefault;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEmailDefault)) {
            //throw new \InvalidArgumentException('non-nullable iEmailDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEmailDefault'] = $iEmailDefault;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iWebsiteDefault)) {
            //throw new \InvalidArgumentException('non-nullable iWebsiteDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iWebsiteDefault'] = $iWebsiteDefault;
        $this->container['iWebsiteDefault'] = (is_null($iWebsiteDefault) ? null : (int) $iWebsiteDefault);

        return $this;
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


