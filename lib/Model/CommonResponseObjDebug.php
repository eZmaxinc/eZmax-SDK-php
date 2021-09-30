<?php
/**
 * CommonResponseObjDebug
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
 * The version of the OpenAPI document: 1.1.0
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
 * CommonResponseObjDebug Class Doc Comment
 *
 * @category Class
 * @description This is a generic debug object that is returned by all API requests
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CommonResponseObjDebug implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-Response-objDebug';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sMemoryUsage' => 'string',
        'sRunTime' => 'string',
        'iSQLSelects' => 'int',
        'iSQLQueries' => 'int',
        'aObjSQLQuery' => '\eZmaxAPI\Model\CommonResponseObjSQLQuery[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sMemoryUsage' => null,
        'sRunTime' => null,
        'iSQLSelects' => null,
        'iSQLQueries' => null,
        'aObjSQLQuery' => null
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
        'sMemoryUsage' => 'sMemoryUsage',
        'sRunTime' => 'sRunTime',
        'iSQLSelects' => 'iSQLSelects',
        'iSQLQueries' => 'iSQLQueries',
        'aObjSQLQuery' => 'a_objSQLQuery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sMemoryUsage' => 'setSMemoryUsage',
        'sRunTime' => 'setSRunTime',
        'iSQLSelects' => 'setISQLSelects',
        'iSQLQueries' => 'setISQLQueries',
        'aObjSQLQuery' => 'setAObjSQLQuery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sMemoryUsage' => 'getSMemoryUsage',
        'sRunTime' => 'getSRunTime',
        'iSQLSelects' => 'getISQLSelects',
        'iSQLQueries' => 'getISQLQueries',
        'aObjSQLQuery' => 'getAObjSQLQuery'
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
        $this->container['sMemoryUsage'] = $data['sMemoryUsage'] ?? null;
        $this->container['sRunTime'] = $data['sRunTime'] ?? null;
        $this->container['iSQLSelects'] = $data['iSQLSelects'] ?? null;
        $this->container['iSQLQueries'] = $data['iSQLQueries'] ?? null;
        $this->container['aObjSQLQuery'] = $data['aObjSQLQuery'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sMemoryUsage'] === null) {
            $invalidProperties[] = "'sMemoryUsage' can't be null";
        }
        if ($this->container['sRunTime'] === null) {
            $invalidProperties[] = "'sRunTime' can't be null";
        }
        if ($this->container['iSQLSelects'] === null) {
            $invalidProperties[] = "'iSQLSelects' can't be null";
        }
        if ($this->container['iSQLQueries'] === null) {
            $invalidProperties[] = "'iSQLQueries' can't be null";
        }
        if ($this->container['aObjSQLQuery'] === null) {
            $invalidProperties[] = "'aObjSQLQuery' can't be null";
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
     * Gets sMemoryUsage
     *
     * @return string
     */
    public function getSMemoryUsage()
    {
        return $this->container['sMemoryUsage'];
    }

    /**
     * Sets sMemoryUsage
     *
     * @param string $sMemoryUsage The peak memory allocated during the API request execution. Formatted as a human readable string
     *
     * @return self
     */
    public function setSMemoryUsage($sMemoryUsage)
    {
        $this->container['sMemoryUsage'] = $sMemoryUsage;

        return $this;
    }

    /**
     * Gets sRunTime
     *
     * @return string
     */
    public function getSRunTime()
    {
        return $this->container['sRunTime'];
    }

    /**
     * Sets sRunTime
     *
     * @param string $sRunTime The total server execution time of the API request execution. Formatted as a human readable string
     *
     * @return self
     */
    public function setSRunTime($sRunTime)
    {
        $this->container['sRunTime'] = $sRunTime;

        return $this;
    }

    /**
     * Gets iSQLSelects
     *
     * @return int
     */
    public function getISQLSelects()
    {
        return $this->container['iSQLSelects'];
    }

    /**
     * Sets iSQLSelects
     *
     * @param int $iSQLSelects The number of SQL SELECT queries that were sent to the database server during the API request execution
     *
     * @return self
     */
    public function setISQLSelects($iSQLSelects)
    {
        $this->container['iSQLSelects'] = $iSQLSelects;

        return $this;
    }

    /**
     * Gets iSQLQueries
     *
     * @return int
     */
    public function getISQLQueries()
    {
        return $this->container['iSQLQueries'];
    }

    /**
     * Sets iSQLQueries
     *
     * @param int $iSQLQueries The number of SQL INSERT/UPDATE/DELETE queries that were sent to the database server during the API request execution
     *
     * @return self
     */
    public function setISQLQueries($iSQLQueries)
    {
        $this->container['iSQLQueries'] = $iSQLQueries;

        return $this;
    }

    /**
     * Gets aObjSQLQuery
     *
     * @return \eZmaxAPI\Model\CommonResponseObjSQLQuery[]
     */
    public function getAObjSQLQuery()
    {
        return $this->container['aObjSQLQuery'];
    }

    /**
     * Sets aObjSQLQuery
     *
     * @param \eZmaxAPI\Model\CommonResponseObjSQLQuery[] $aObjSQLQuery An array of the SQL Queries that were executed during the API request execution
     *
     * @return self
     */
    public function setAObjSQLQuery($aObjSQLQuery)
    {
        $this->container['aObjSQLQuery'] = $aObjSQLQuery;

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


?>