<?php
/**
 * UserCreateEzsignuserV1Request
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
 * The version of the OpenAPI document: 1.0.38
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
 * UserCreateEzsignuserV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for the /1/module/user/createEzsignuser API Request
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
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
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sUserFirstname'] = $data['sUserFirstname'] ?? null;
        $this->container['sUserLastname'] = $data['sUserLastname'] ?? null;
        $this->container['sEmailAddress'] = $data['sEmailAddress'] ?? null;
        $this->container['sPhoneRegion'] = $data['sPhoneRegion'] ?? null;
        $this->container['sPhoneExchange'] = $data['sPhoneExchange'] ?? null;
        $this->container['sPhoneNumber'] = $data['sPhoneNumber'] ?? null;
        $this->container['sPhoneExtension'] = $data['sPhoneExtension'] ?? null;
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

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling UserCreateEzsignuserV1Request., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling UserCreateEzsignuserV1Request., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets sUserFirstname
     *
     * @return string
     */
    public function getSUserFirstname()
    {
        return $this->container['sUserFirstname'];
    }

    /**
     * Sets sUserFirstname
     *
     * @param string $sUserFirstname The First name of the user
     *
     * @return self
     */
    public function setSUserFirstname($sUserFirstname)
    {
        $this->container['sUserFirstname'] = $sUserFirstname;

        return $this;
    }

    /**
     * Gets sUserLastname
     *
     * @return string
     */
    public function getSUserLastname()
    {
        return $this->container['sUserLastname'];
    }

    /**
     * Sets sUserLastname
     *
     * @param string $sUserLastname The Last name of the user
     *
     * @return self
     */
    public function setSUserLastname($sUserLastname)
    {
        $this->container['sUserLastname'] = $sUserLastname;

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string
     */
    public function getSEmailAddress()
    {
        return $this->container['sEmailAddress'];
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
        $this->container['sEmailAddress'] = $sEmailAddress;

        return $this;
    }

    /**
     * Gets sPhoneRegion
     *
     * @return string
     */
    public function getSPhoneRegion()
    {
        return $this->container['sPhoneRegion'];
    }

    /**
     * Sets sPhoneRegion
     *
     * @param string $sPhoneRegion The region of the phone number. (For a North America Number only)  The region is the \"514\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneRegion($sPhoneRegion)
    {
        $this->container['sPhoneRegion'] = $sPhoneRegion;

        return $this;
    }

    /**
     * Gets sPhoneExchange
     *
     * @return string
     */
    public function getSPhoneExchange()
    {
        return $this->container['sPhoneExchange'];
    }

    /**
     * Sets sPhoneExchange
     *
     * @param string $sPhoneExchange The exchange of the phone number. (For a North America Number only)  The exchange is the \"990\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneExchange($sPhoneExchange)
    {
        $this->container['sPhoneExchange'] = $sPhoneExchange;

        return $this;
    }

    /**
     * Gets sPhoneNumber
     *
     * @return string
     */
    public function getSPhoneNumber()
    {
        return $this->container['sPhoneNumber'];
    }

    /**
     * Sets sPhoneNumber
     *
     * @param string $sPhoneNumber The number of the phone number. (For a North America Number only)  The number is the \"1516\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneNumber($sPhoneNumber)
    {
        $this->container['sPhoneNumber'] = $sPhoneNumber;

        return $this;
    }

    /**
     * Gets sPhoneExtension
     *
     * @return string|null
     */
    public function getSPhoneExtension()
    {
        return $this->container['sPhoneExtension'];
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
        $this->container['sPhoneExtension'] = $sPhoneExtension;

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


