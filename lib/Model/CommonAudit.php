<?php
/**
 * CommonAudit
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 1.1.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
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
 * CommonAudit Class Doc Comment
 *
 * @category Class
 * @description Gives informations about the user that created the object and the last user to have modified it.  If the object was never modified after creation, both Created and Modified informations will be the same.  Apikey details will only be provided if the changes were made by an API key.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CommonAudit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-Audit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiUserIDCreated' => 'int',
        'fkiUserIDModified' => 'int',
        'fkiApikeyIDCreated' => 'int',
        'fkiApikeyIDModified' => 'int',
        'dtCreatedDate' => 'string',
        'dtModifiedDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiUserIDCreated' => null,
        'fkiUserIDModified' => null,
        'fkiApikeyIDCreated' => null,
        'fkiApikeyIDModified' => null,
        'dtCreatedDate' => null,
        'dtModifiedDate' => null
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
        'fkiUserIDCreated' => 'fkiUserIDCreated',
        'fkiUserIDModified' => 'fkiUserIDModified',
        'fkiApikeyIDCreated' => 'fkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'fkiApikeyIDModified',
        'dtCreatedDate' => 'dtCreatedDate',
        'dtModifiedDate' => 'dtModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiUserIDCreated' => 'setFkiUserIDCreated',
        'fkiUserIDModified' => 'setFkiUserIDModified',
        'fkiApikeyIDCreated' => 'setFkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'setFkiApikeyIDModified',
        'dtCreatedDate' => 'setDtCreatedDate',
        'dtModifiedDate' => 'setDtModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiUserIDCreated' => 'getFkiUserIDCreated',
        'fkiUserIDModified' => 'getFkiUserIDModified',
        'fkiApikeyIDCreated' => 'getFkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'getFkiApikeyIDModified',
        'dtCreatedDate' => 'getDtCreatedDate',
        'dtModifiedDate' => 'getDtModifiedDate'
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
        $this->container['fkiUserIDCreated'] = $data['fkiUserIDCreated'] ?? null;
        $this->container['fkiUserIDModified'] = $data['fkiUserIDModified'] ?? null;
        $this->container['fkiApikeyIDCreated'] = $data['fkiApikeyIDCreated'] ?? null;
        $this->container['fkiApikeyIDModified'] = $data['fkiApikeyIDModified'] ?? null;
        $this->container['dtCreatedDate'] = $data['dtCreatedDate'] ?? null;
        $this->container['dtModifiedDate'] = $data['dtModifiedDate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiUserIDCreated'] === null) {
            $invalidProperties[] = "'fkiUserIDCreated' can't be null";
        }
        if ($this->container['fkiUserIDModified'] === null) {
            $invalidProperties[] = "'fkiUserIDModified' can't be null";
        }
        if ($this->container['dtCreatedDate'] === null) {
            $invalidProperties[] = "'dtCreatedDate' can't be null";
        }
        if ($this->container['dtModifiedDate'] === null) {
            $invalidProperties[] = "'dtModifiedDate' can't be null";
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
     * Gets fkiUserIDCreated
     *
     * @return int
     */
    public function getFkiUserIDCreated()
    {
        return $this->container['fkiUserIDCreated'];
    }

    /**
     * Sets fkiUserIDCreated
     *
     * @param int $fkiUserIDCreated The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserIDCreated($fkiUserIDCreated)
    {
        $this->container['fkiUserIDCreated'] = $fkiUserIDCreated;

        return $this;
    }

    /**
     * Gets fkiUserIDModified
     *
     * @return int
     */
    public function getFkiUserIDModified()
    {
        return $this->container['fkiUserIDModified'];
    }

    /**
     * Sets fkiUserIDModified
     *
     * @param int $fkiUserIDModified The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserIDModified($fkiUserIDModified)
    {
        $this->container['fkiUserIDModified'] = $fkiUserIDModified;

        return $this;
    }

    /**
     * Gets fkiApikeyIDCreated
     *
     * @return int|null
     */
    public function getFkiApikeyIDCreated()
    {
        return $this->container['fkiApikeyIDCreated'];
    }

    /**
     * Sets fkiApikeyIDCreated
     *
     * @param int|null $fkiApikeyIDCreated The unique ID of the Apikey
     *
     * @return self
     */
    public function setFkiApikeyIDCreated($fkiApikeyIDCreated)
    {
        $this->container['fkiApikeyIDCreated'] = $fkiApikeyIDCreated;

        return $this;
    }

    /**
     * Gets fkiApikeyIDModified
     *
     * @return int|null
     */
    public function getFkiApikeyIDModified()
    {
        return $this->container['fkiApikeyIDModified'];
    }

    /**
     * Sets fkiApikeyIDModified
     *
     * @param int|null $fkiApikeyIDModified The unique ID of the Apikey
     *
     * @return self
     */
    public function setFkiApikeyIDModified($fkiApikeyIDModified)
    {
        $this->container['fkiApikeyIDModified'] = $fkiApikeyIDModified;

        return $this;
    }

    /**
     * Gets dtCreatedDate
     *
     * @return string
     */
    public function getDtCreatedDate()
    {
        return $this->container['dtCreatedDate'];
    }

    /**
     * Sets dtCreatedDate
     *
     * @param string $dtCreatedDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return self
     */
    public function setDtCreatedDate($dtCreatedDate)
    {
        $this->container['dtCreatedDate'] = $dtCreatedDate;

        return $this;
    }

    /**
     * Gets dtModifiedDate
     *
     * @return string
     */
    public function getDtModifiedDate()
    {
        return $this->container['dtModifiedDate'];
    }

    /**
     * Sets dtModifiedDate
     *
     * @param string $dtModifiedDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return self
     */
    public function setDtModifiedDate($dtModifiedDate)
    {
        $this->container['dtModifiedDate'] = $dtModifiedDate;

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


