<?php
/**
 * CustomUserResponse
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
 * The version of the OpenAPI document: 1.1.8
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
 * CustomUserResponse Class Doc Comment
 *
 * @category Class
 * @description A User Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomUserResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-User-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiUserID' => 'int',
        'sUserLastname' => 'string',
        'sUserFirstname' => 'string',
        'sEmailAddress' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiUserID' => null,
        'sUserLastname' => null,
        'sUserFirstname' => null,
        'sEmailAddress' => null
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
        'pkiUserID' => 'pkiUserID',
        'sUserLastname' => 'sUserLastname',
        'sUserFirstname' => 'sUserFirstname',
        'sEmailAddress' => 'sEmailAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiUserID' => 'setPkiUserID',
        'sUserLastname' => 'setSUserLastname',
        'sUserFirstname' => 'setSUserFirstname',
        'sEmailAddress' => 'setSEmailAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiUserID' => 'getPkiUserID',
        'sUserLastname' => 'getSUserLastname',
        'sUserFirstname' => 'getSUserFirstname',
        'sEmailAddress' => 'getSEmailAddress'
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
        $this->container['pkiUserID'] = $data['pkiUserID'] ?? null;
        $this->container['sUserLastname'] = $data['sUserLastname'] ?? null;
        $this->container['sUserFirstname'] = $data['sUserFirstname'] ?? null;
        $this->container['sEmailAddress'] = $data['sEmailAddress'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiUserID'] === null) {
            $invalidProperties[] = "'pkiUserID' can't be null";
        }
        if (($this->container['pkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
        }
        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['sEmailAddress'] === null) {
            $invalidProperties[] = "'sEmailAddress' can't be null";
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
     * Gets pkiUserID
     *
     * @return int
     */
    public function getPkiUserID()
    {
        return $this->container['pkiUserID'];
    }

    /**
     * Sets pkiUserID
     *
     * @param int $pkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setPkiUserID($pkiUserID)
    {

        if (($pkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiUserID when calling CustomUserResponse., must be bigger than or equal to 0.');
        }

        $this->container['pkiUserID'] = $pkiUserID;

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


