<?php
/**
 * NotificationsubsectionResponse
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
 * NotificationsubsectionResponse Class Doc Comment
 *
 * @category Class
 * @description A Notificationsubsection Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NotificationsubsectionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'notificationsubsection-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiNotificationsubsectionID' => 'int',
        'fkiNotificationsectionID' => 'int',
        'sNotificationsubsectionNameX' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiNotificationsubsectionID' => null,
        'fkiNotificationsectionID' => null,
        'sNotificationsubsectionNameX' => null
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
        'pkiNotificationsubsectionID' => 'pkiNotificationsubsectionID',
        'fkiNotificationsectionID' => 'fkiNotificationsectionID',
        'sNotificationsubsectionNameX' => 'sNotificationsubsectionNameX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiNotificationsubsectionID' => 'setPkiNotificationsubsectionID',
        'fkiNotificationsectionID' => 'setFkiNotificationsectionID',
        'sNotificationsubsectionNameX' => 'setSNotificationsubsectionNameX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiNotificationsubsectionID' => 'getPkiNotificationsubsectionID',
        'fkiNotificationsectionID' => 'getFkiNotificationsectionID',
        'sNotificationsubsectionNameX' => 'getSNotificationsubsectionNameX'
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
        $this->container['pkiNotificationsubsectionID'] = $data['pkiNotificationsubsectionID'] ?? null;
        $this->container['fkiNotificationsectionID'] = $data['fkiNotificationsectionID'] ?? null;
        $this->container['sNotificationsubsectionNameX'] = $data['sNotificationsubsectionNameX'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiNotificationsubsectionID'] === null) {
            $invalidProperties[] = "'pkiNotificationsubsectionID' can't be null";
        }
        if (($this->container['pkiNotificationsubsectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiNotificationsubsectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiNotificationsectionID'] === null) {
            $invalidProperties[] = "'fkiNotificationsectionID' can't be null";
        }
        if (($this->container['fkiNotificationsectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiNotificationsectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['sNotificationsubsectionNameX'] === null) {
            $invalidProperties[] = "'sNotificationsubsectionNameX' can't be null";
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
     * Gets pkiNotificationsubsectionID
     *
     * @return int
     */
    public function getPkiNotificationsubsectionID()
    {
        return $this->container['pkiNotificationsubsectionID'];
    }

    /**
     * Sets pkiNotificationsubsectionID
     *
     * @param int $pkiNotificationsubsectionID The unique ID of the Notificationsubsection
     *
     * @return self
     */
    public function setPkiNotificationsubsectionID($pkiNotificationsubsectionID)
    {

        if (($pkiNotificationsubsectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiNotificationsubsectionID when calling NotificationsubsectionResponse., must be bigger than or equal to 0.');
        }

        $this->container['pkiNotificationsubsectionID'] = $pkiNotificationsubsectionID;

        return $this;
    }

    /**
     * Gets fkiNotificationsectionID
     *
     * @return int
     */
    public function getFkiNotificationsectionID()
    {
        return $this->container['fkiNotificationsectionID'];
    }

    /**
     * Sets fkiNotificationsectionID
     *
     * @param int $fkiNotificationsectionID The unique ID of the Notificationsection
     *
     * @return self
     */
    public function setFkiNotificationsectionID($fkiNotificationsectionID)
    {

        if (($fkiNotificationsectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiNotificationsectionID when calling NotificationsubsectionResponse., must be bigger than or equal to 0.');
        }

        $this->container['fkiNotificationsectionID'] = $fkiNotificationsectionID;

        return $this;
    }

    /**
     * Gets sNotificationsubsectionNameX
     *
     * @return string
     */
    public function getSNotificationsubsectionNameX()
    {
        return $this->container['sNotificationsubsectionNameX'];
    }

    /**
     * Sets sNotificationsubsectionNameX
     *
     * @param string $sNotificationsubsectionNameX The name of the Notificationsubsection in the language of the requester
     *
     * @return self
     */
    public function setSNotificationsubsectionNameX($sNotificationsubsectionNameX)
    {
        $this->container['sNotificationsubsectionNameX'] = $sNotificationsubsectionNameX;

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


