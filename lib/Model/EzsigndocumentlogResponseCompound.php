<?php
/**
 * EzsigndocumentlogResponseCompound
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
 * The version of the OpenAPI document: 1.1.5
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * EzsigndocumentlogResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsigndocumentlog Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsigndocumentlogResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocumentlog-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiUserID' => 'int',
        'fkiEzsignsignerID' => 'int',
        'dtEzsigndocumentlogDatetime' => 'string',
        'eEzsigndocumentlogType' => '\eZmaxAPI\Model\FieldEEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'string',
        'sEzsigndocumentlogLastname' => 'string',
        'sEzsigndocumentlogFirstname' => 'string',
        'sEzsigndocumentlogIP' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiUserID' => null,
        'fkiEzsignsignerID' => null,
        'dtEzsigndocumentlogDatetime' => null,
        'eEzsigndocumentlogType' => null,
        'sEzsigndocumentlogDetail' => null,
        'sEzsigndocumentlogLastname' => null,
        'sEzsigndocumentlogFirstname' => null,
        'sEzsigndocumentlogIP' => null
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
        'fkiUserID' => 'fkiUserID',
        'fkiEzsignsignerID' => 'fkiEzsignsignerID',
        'dtEzsigndocumentlogDatetime' => 'dtEzsigndocumentlogDatetime',
        'eEzsigndocumentlogType' => 'eEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'sEzsigndocumentlogDetail',
        'sEzsigndocumentlogLastname' => 'sEzsigndocumentlogLastname',
        'sEzsigndocumentlogFirstname' => 'sEzsigndocumentlogFirstname',
        'sEzsigndocumentlogIP' => 'sEzsigndocumentlogIP'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiUserID' => 'setFkiUserID',
        'fkiEzsignsignerID' => 'setFkiEzsignsignerID',
        'dtEzsigndocumentlogDatetime' => 'setDtEzsigndocumentlogDatetime',
        'eEzsigndocumentlogType' => 'setEEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'setSEzsigndocumentlogDetail',
        'sEzsigndocumentlogLastname' => 'setSEzsigndocumentlogLastname',
        'sEzsigndocumentlogFirstname' => 'setSEzsigndocumentlogFirstname',
        'sEzsigndocumentlogIP' => 'setSEzsigndocumentlogIP'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiUserID' => 'getFkiUserID',
        'fkiEzsignsignerID' => 'getFkiEzsignsignerID',
        'dtEzsigndocumentlogDatetime' => 'getDtEzsigndocumentlogDatetime',
        'eEzsigndocumentlogType' => 'getEEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'getSEzsigndocumentlogDetail',
        'sEzsigndocumentlogLastname' => 'getSEzsigndocumentlogLastname',
        'sEzsigndocumentlogFirstname' => 'getSEzsigndocumentlogFirstname',
        'sEzsigndocumentlogIP' => 'getSEzsigndocumentlogIP'
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
        $this->container['fkiUserID'] = $data['fkiUserID'] ?? null;
        $this->container['fkiEzsignsignerID'] = $data['fkiEzsignsignerID'] ?? null;
        $this->container['dtEzsigndocumentlogDatetime'] = $data['dtEzsigndocumentlogDatetime'] ?? null;
        $this->container['eEzsigndocumentlogType'] = $data['eEzsigndocumentlogType'] ?? null;
        $this->container['sEzsigndocumentlogDetail'] = $data['sEzsigndocumentlogDetail'] ?? null;
        $this->container['sEzsigndocumentlogLastname'] = $data['sEzsigndocumentlogLastname'] ?? null;
        $this->container['sEzsigndocumentlogFirstname'] = $data['sEzsigndocumentlogFirstname'] ?? null;
        $this->container['sEzsigndocumentlogIP'] = $data['sEzsigndocumentlogIP'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if ($this->container['fkiEzsignsignerID'] === null) {
            $invalidProperties[] = "'fkiEzsignsignerID' can't be null";
        }
        if ($this->container['dtEzsigndocumentlogDatetime'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentlogDatetime' can't be null";
        }
        if ($this->container['eEzsigndocumentlogType'] === null) {
            $invalidProperties[] = "'eEzsigndocumentlogType' can't be null";
        }
        if ($this->container['sEzsigndocumentlogDetail'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogDetail' can't be null";
        }
        if ($this->container['sEzsigndocumentlogLastname'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogLastname' can't be null";
        }
        if ($this->container['sEzsigndocumentlogFirstname'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogFirstname' can't be null";
        }
        if ($this->container['sEzsigndocumentlogIP'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogIP' can't be null";
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
     * Gets fkiUserID
     *
     * @return int
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
        $this->container['fkiUserID'] = $fkiUserID;

        return $this;
    }

    /**
     * Gets fkiEzsignsignerID
     *
     * @return int
     */
    public function getFkiEzsignsignerID()
    {
        return $this->container['fkiEzsignsignerID'];
    }

    /**
     * Sets fkiEzsignsignerID
     *
     * @param int $fkiEzsignsignerID The unique ID of the Ezsignsigner
     *
     * @return self
     */
    public function setFkiEzsignsignerID($fkiEzsignsignerID)
    {
        $this->container['fkiEzsignsignerID'] = $fkiEzsignsignerID;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentlogDatetime
     *
     * @return string
     */
    public function getDtEzsigndocumentlogDatetime()
    {
        return $this->container['dtEzsigndocumentlogDatetime'];
    }

    /**
     * Sets dtEzsigndocumentlogDatetime
     *
     * @param string $dtEzsigndocumentlogDatetime The date and time at which the event was logged
     *
     * @return self
     */
    public function setDtEzsigndocumentlogDatetime($dtEzsigndocumentlogDatetime)
    {
        $this->container['dtEzsigndocumentlogDatetime'] = $dtEzsigndocumentlogDatetime;

        return $this;
    }

    /**
     * Gets eEzsigndocumentlogType
     *
     * @return \eZmaxAPI\Model\FieldEEzsigndocumentlogType
     */
    public function getEEzsigndocumentlogType()
    {
        return $this->container['eEzsigndocumentlogType'];
    }

    /**
     * Sets eEzsigndocumentlogType
     *
     * @param \eZmaxAPI\Model\FieldEEzsigndocumentlogType $eEzsigndocumentlogType eEzsigndocumentlogType
     *
     * @return self
     */
    public function setEEzsigndocumentlogType($eEzsigndocumentlogType)
    {
        $this->container['eEzsigndocumentlogType'] = $eEzsigndocumentlogType;

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogDetail
     *
     * @return string
     */
    public function getSEzsigndocumentlogDetail()
    {
        return $this->container['sEzsigndocumentlogDetail'];
    }

    /**
     * Sets sEzsigndocumentlogDetail
     *
     * @param string $sEzsigndocumentlogDetail The detail of the Ezsigndocumentlog
     *
     * @return self
     */
    public function setSEzsigndocumentlogDetail($sEzsigndocumentlogDetail)
    {
        $this->container['sEzsigndocumentlogDetail'] = $sEzsigndocumentlogDetail;

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogLastname
     *
     * @return string
     */
    public function getSEzsigndocumentlogLastname()
    {
        return $this->container['sEzsigndocumentlogLastname'];
    }

    /**
     * Sets sEzsigndocumentlogLastname
     *
     * @param string $sEzsigndocumentlogLastname The last name of the User or Ezsignsigner
     *
     * @return self
     */
    public function setSEzsigndocumentlogLastname($sEzsigndocumentlogLastname)
    {
        $this->container['sEzsigndocumentlogLastname'] = $sEzsigndocumentlogLastname;

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogFirstname
     *
     * @return string
     */
    public function getSEzsigndocumentlogFirstname()
    {
        return $this->container['sEzsigndocumentlogFirstname'];
    }

    /**
     * Sets sEzsigndocumentlogFirstname
     *
     * @param string $sEzsigndocumentlogFirstname The first name of the User or Ezsignsigner
     *
     * @return self
     */
    public function setSEzsigndocumentlogFirstname($sEzsigndocumentlogFirstname)
    {
        $this->container['sEzsigndocumentlogFirstname'] = $sEzsigndocumentlogFirstname;

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogIP
     *
     * @return string
     */
    public function getSEzsigndocumentlogIP()
    {
        return $this->container['sEzsigndocumentlogIP'];
    }

    /**
     * Sets sEzsigndocumentlogIP
     *
     * @param string $sEzsigndocumentlogIP Represent an IP address.
     *
     * @return self
     */
    public function setSEzsigndocumentlogIP($sEzsigndocumentlogIP)
    {
        $this->container['sEzsigndocumentlogIP'] = $sEzsigndocumentlogIP;

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


