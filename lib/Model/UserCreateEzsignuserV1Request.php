<?php
/**
 * UserCreateEzsignuserV1Request
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
 * The version of the OpenAPI document: 1.2.0
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
 * UserCreateEzsignuserV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/module/user/createEzsignuser
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserCreateEzsignuserV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'user-createEzsignuser-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiLanguageID' => 'int',
        'sUserFirstname' => 'string',
        'sUserLastname' => 'string',
        'sEmailAddress' => 'string',
        'sPhoneRegion' => 'string',
        'sPhoneExchange' => 'string',
        'sPhoneNumber' => 'string',
        'sPhoneExtension' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiLanguageID' => null,
        'sUserFirstname' => null,
        'sUserLastname' => null,
        'sEmailAddress' => null,
        'sPhoneRegion' => null,
        'sPhoneExchange' => null,
        'sPhoneNumber' => null,
        'sPhoneExtension' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiLanguageID' => false,
		'sUserFirstname' => false,
		'sUserLastname' => false,
		'sEmailAddress' => false,
		'sPhoneRegion' => false,
		'sPhoneExchange' => false,
		'sPhoneNumber' => false,
		'sPhoneExtension' => false
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
        'fkiLanguageID' => 'fkiLanguageID',
        'sUserFirstname' => 'sUserFirstname',
        'sUserLastname' => 'sUserLastname',
        'sEmailAddress' => 'sEmailAddress',
        'sPhoneRegion' => 'sPhoneRegion',
        'sPhoneExchange' => 'sPhoneExchange',
        'sPhoneNumber' => 'sPhoneNumber',
        'sPhoneExtension' => 'sPhoneExtension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiLanguageID' => 'setFkiLanguageID',
        'sUserFirstname' => 'setSUserFirstname',
        'sUserLastname' => 'setSUserLastname',
        'sEmailAddress' => 'setSEmailAddress',
        'sPhoneRegion' => 'setSPhoneRegion',
        'sPhoneExchange' => 'setSPhoneExchange',
        'sPhoneNumber' => 'setSPhoneNumber',
        'sPhoneExtension' => 'setSPhoneExtension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiLanguageID' => 'getFkiLanguageID',
        'sUserFirstname' => 'getSUserFirstname',
        'sUserLastname' => 'getSUserLastname',
        'sEmailAddress' => 'getSEmailAddress',
        'sPhoneRegion' => 'getSPhoneRegion',
        'sPhoneExchange' => 'getSPhoneExchange',
        'sPhoneNumber' => 'getSPhoneNumber',
        'sPhoneExtension' => 'getSPhoneExtension'
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
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sUserFirstname', $data ?? [], null);
        $this->setIfExists('sUserLastname', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('sPhoneRegion', $data ?? [], null);
        $this->setIfExists('sPhoneExchange', $data ?? [], null);
        $this->setIfExists('sPhoneNumber', $data ?? [], null);
        $this->setIfExists('sPhoneExtension', $data ?? [], null);
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

        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
        }
        if ($this->container['sEmailAddress'] === null) {
            $invalidProperties[] = "'sEmailAddress' can't be null";
        }
        if ($this->container['sPhoneRegion'] === null) {
            $invalidProperties[] = "'sPhoneRegion' can't be null";
        }
        if ($this->container['sPhoneExchange'] === null) {
            $invalidProperties[] = "'sPhoneExchange' can't be null";
        }
        if ($this->container['sPhoneNumber'] === null) {
            $invalidProperties[] = "'sPhoneNumber' can't be null";
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
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}

//        if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling UserCreateEzsignuserV1Request., must be smaller than or equal to 2.');
        }
//        if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling UserCreateEzsignuserV1Request., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets sUserFirstname
     *
     * @return string
     */
    public function getSUserFirstname()
    {
        return is_null($this->container['sUserFirstname']) ? null : trim($this->container['sUserFirstname']);
    }

    /**
     * Sets sUserFirstname
     *
     * @param string $sUserFirstname The first name of the user
     *
     * @return self
     */
    public function setSUserFirstname($sUserFirstname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sUserFirstname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserFirstname'] = $sUserFirstname;
        $this->container['sUserFirstname'] = (is_null($sUserFirstname) ? null : trim((string) $sUserFirstname));

        return $this;
    }

    /**
     * Gets sUserLastname
     *
     * @return string
     */
    public function getSUserLastname()
    {
        return is_null($this->container['sUserLastname']) ? null : trim($this->container['sUserLastname']);
    }

    /**
     * Sets sUserLastname
     *
     * @param string $sUserLastname The last name of the user
     *
     * @return self
     */
    public function setSUserLastname($sUserLastname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLastname)) {
            //throw new \InvalidArgumentException('non-nullable sUserLastname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLastname'] = $sUserLastname;
        $this->container['sUserLastname'] = (is_null($sUserLastname) ? null : trim((string) $sUserLastname));

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string
     */
    public function getSEmailAddress()
    {
        return is_null($this->container['sEmailAddress']) ? null : trim($this->container['sEmailAddress']);
    }

    /**
     * Sets sEmailAddress
     *
     * @param string $sEmailAddress The email address.
     *
     * @return self
     */
    public function setSEmailAddress($sEmailAddress)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : trim((string) $sEmailAddress));

        return $this;
    }

    /**
     * Gets sPhoneRegion
     *
     * @return string
     * @deprecated
     */
    public function getSPhoneRegion()
    {
        return is_null($this->container['sPhoneRegion']) ? null : trim($this->container['sPhoneRegion']);
    }

    /**
     * Sets sPhoneRegion
     *
     * @param string $sPhoneRegion The region of the phone number. (For a North America Number only)  The region is the \"514\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     * @deprecated
     */
    public function setSPhoneRegion($sPhoneRegion)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneRegion)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneRegion cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneRegion'] = $sPhoneRegion;
        $this->container['sPhoneRegion'] = (is_null($sPhoneRegion) ? null : trim((string) $sPhoneRegion));

        return $this;
    }

    /**
     * Gets sPhoneExchange
     *
     * @return string
     * @deprecated
     */
    public function getSPhoneExchange()
    {
        return is_null($this->container['sPhoneExchange']) ? null : trim($this->container['sPhoneExchange']);
    }

    /**
     * Sets sPhoneExchange
     *
     * @param string $sPhoneExchange The exchange of the phone number. (For a North America Number only)  The exchange is the \"990\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     * @deprecated
     */
    public function setSPhoneExchange($sPhoneExchange)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneExchange)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneExchange cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneExchange'] = $sPhoneExchange;
        $this->container['sPhoneExchange'] = (is_null($sPhoneExchange) ? null : trim((string) $sPhoneExchange));

        return $this;
    }

    /**
     * Gets sPhoneNumber
     *
     * @return string
     * @deprecated
     */
    public function getSPhoneNumber()
    {
        return is_null($this->container['sPhoneNumber']) ? null : trim($this->container['sPhoneNumber']);
    }

    /**
     * Sets sPhoneNumber
     *
     * @param string $sPhoneNumber The number of the phone number. (For a North America Number only)  The number is the \"1516\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     * @deprecated
     */
    public function setSPhoneNumber($sPhoneNumber)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneNumber)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneNumber cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneNumber'] = $sPhoneNumber;
        $this->container['sPhoneNumber'] = (is_null($sPhoneNumber) ? null : trim((string) $sPhoneNumber));

        return $this;
    }

    /**
     * Gets sPhoneExtension
     *
     * @return string|null
     */
    public function getSPhoneExtension()
    {
        return is_null($this->container['sPhoneExtension']) ? null : trim($this->container['sPhoneExtension']);
    }

    /**
     * Sets sPhoneExtension
     *
     * @param string|null $sPhoneExtension The extension of the phone number.  The extension is the \"123\" section in this sample phone number: (514) 990-1516 x123.  It can also be used with international phone numbers
     *
     * @return self
     */
    public function setSPhoneExtension($sPhoneExtension)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneExtension)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneExtension cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneExtension'] = $sPhoneExtension;
        $this->container['sPhoneExtension'] = (is_null($sPhoneExtension) ? null : trim((string) $sPhoneExtension));

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


