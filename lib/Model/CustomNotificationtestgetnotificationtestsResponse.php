<?php
/**
 * CustomNotificationtestgetnotificationtestsResponse
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
 * CustomNotificationtestgetnotificationtestsResponse Class Doc Comment
 *
 * @category Class
 * @description A Notificationtest Object in the context of getNotificationtests
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomNotificationtestgetnotificationtestsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Notificationtestgetnotificationtests-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiNotificationtestID' => 'int',
        'fkiNotificationsubsectionID' => 'int',
        'sNotificationtestFunction' => 'string',
        'sNotificationtestNameX' => 'string',
        'eNotificationpreferenceStatus' => '\eZmaxAPI\Model\FieldENotificationpreferenceStatus',
        'iNotificationtest' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiNotificationtestID' => null,
        'fkiNotificationsubsectionID' => null,
        'sNotificationtestFunction' => null,
        'sNotificationtestNameX' => null,
        'eNotificationpreferenceStatus' => null,
        'iNotificationtest' => null
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
        'pkiNotificationtestID' => 'pkiNotificationtestID',
        'fkiNotificationsubsectionID' => 'fkiNotificationsubsectionID',
        'sNotificationtestFunction' => 'sNotificationtestFunction',
        'sNotificationtestNameX' => 'sNotificationtestNameX',
        'eNotificationpreferenceStatus' => 'eNotificationpreferenceStatus',
        'iNotificationtest' => 'iNotificationtest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiNotificationtestID' => 'setPkiNotificationtestID',
        'fkiNotificationsubsectionID' => 'setFkiNotificationsubsectionID',
        'sNotificationtestFunction' => 'setSNotificationtestFunction',
        'sNotificationtestNameX' => 'setSNotificationtestNameX',
        'eNotificationpreferenceStatus' => 'setENotificationpreferenceStatus',
        'iNotificationtest' => 'setINotificationtest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiNotificationtestID' => 'getPkiNotificationtestID',
        'fkiNotificationsubsectionID' => 'getFkiNotificationsubsectionID',
        'sNotificationtestFunction' => 'getSNotificationtestFunction',
        'sNotificationtestNameX' => 'getSNotificationtestNameX',
        'eNotificationpreferenceStatus' => 'getENotificationpreferenceStatus',
        'iNotificationtest' => 'getINotificationtest'
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
        $this->container['pkiNotificationtestID'] = $data['pkiNotificationtestID'] ?? null;
        $this->container['fkiNotificationsubsectionID'] = $data['fkiNotificationsubsectionID'] ?? null;
        $this->container['sNotificationtestFunction'] = $data['sNotificationtestFunction'] ?? null;
        $this->container['sNotificationtestNameX'] = $data['sNotificationtestNameX'] ?? null;
        $this->container['eNotificationpreferenceStatus'] = $data['eNotificationpreferenceStatus'] ?? null;
        $this->container['iNotificationtest'] = $data['iNotificationtest'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiNotificationtestID'] === null) {
            $invalidProperties[] = "'pkiNotificationtestID' can't be null";
        }
        if (($this->container['pkiNotificationtestID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiNotificationtestID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiNotificationsubsectionID'] === null) {
            $invalidProperties[] = "'fkiNotificationsubsectionID' can't be null";
        }
        if (($this->container['fkiNotificationsubsectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiNotificationsubsectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['sNotificationtestFunction'] === null) {
            $invalidProperties[] = "'sNotificationtestFunction' can't be null";
        }
        if ($this->container['sNotificationtestNameX'] === null) {
            $invalidProperties[] = "'sNotificationtestNameX' can't be null";
        }
        if ($this->container['eNotificationpreferenceStatus'] === null) {
            $invalidProperties[] = "'eNotificationpreferenceStatus' can't be null";
        }
        if ($this->container['iNotificationtest'] === null) {
            $invalidProperties[] = "'iNotificationtest' can't be null";
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
     * Gets pkiNotificationtestID
     *
     * @return int
     */
    public function getPkiNotificationtestID()
    {
        return $this->container['pkiNotificationtestID'];
    }

    /**
     * Sets pkiNotificationtestID
     *
     * @param int $pkiNotificationtestID The unique ID of the Notificationtest
     *
     * @return self
     */
    public function setPkiNotificationtestID($pkiNotificationtestID)
    {

        if (($pkiNotificationtestID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiNotificationtestID when calling CustomNotificationtestgetnotificationtestsResponse., must be bigger than or equal to 0.');
        }

        $this->container['pkiNotificationtestID'] = $pkiNotificationtestID;

        return $this;
    }

    /**
     * Gets fkiNotificationsubsectionID
     *
     * @return int
     */
    public function getFkiNotificationsubsectionID()
    {
        return $this->container['fkiNotificationsubsectionID'];
    }

    /**
     * Sets fkiNotificationsubsectionID
     *
     * @param int $fkiNotificationsubsectionID The unique ID of the Notificationsubsection
     *
     * @return self
     */
    public function setFkiNotificationsubsectionID($fkiNotificationsubsectionID)
    {

        if (($fkiNotificationsubsectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiNotificationsubsectionID when calling CustomNotificationtestgetnotificationtestsResponse., must be bigger than or equal to 0.');
        }

        $this->container['fkiNotificationsubsectionID'] = $fkiNotificationsubsectionID;

        return $this;
    }

    /**
     * Gets sNotificationtestFunction
     *
     * @return string
     */
    public function getSNotificationtestFunction()
    {
        return $this->container['sNotificationtestFunction'];
    }

    /**
     * Sets sNotificationtestFunction
     *
     * @param string $sNotificationtestFunction The function name of the Notificationtest
     *
     * @return self
     */
    public function setSNotificationtestFunction($sNotificationtestFunction)
    {
        $this->container['sNotificationtestFunction'] = $sNotificationtestFunction;

        return $this;
    }

    /**
     * Gets sNotificationtestNameX
     *
     * @return string
     */
    public function getSNotificationtestNameX()
    {
        return $this->container['sNotificationtestNameX'];
    }

    /**
     * Sets sNotificationtestNameX
     *
     * @param string $sNotificationtestNameX The name of the Notificationtest in the language of the requester
     *
     * @return self
     */
    public function setSNotificationtestNameX($sNotificationtestNameX)
    {
        $this->container['sNotificationtestNameX'] = $sNotificationtestNameX;

        return $this;
    }

    /**
     * Gets eNotificationpreferenceStatus
     *
     * @return \eZmaxAPI\Model\FieldENotificationpreferenceStatus
     */
    public function getENotificationpreferenceStatus()
    {
        return $this->container['eNotificationpreferenceStatus'];
    }

    /**
     * Sets eNotificationpreferenceStatus
     *
     * @param \eZmaxAPI\Model\FieldENotificationpreferenceStatus $eNotificationpreferenceStatus eNotificationpreferenceStatus
     *
     * @return self
     */
    public function setENotificationpreferenceStatus($eNotificationpreferenceStatus)
    {
        $this->container['eNotificationpreferenceStatus'] = $eNotificationpreferenceStatus;

        return $this;
    }

    /**
     * Gets iNotificationtest
     *
     * @return int
     */
    public function getINotificationtest()
    {
        return $this->container['iNotificationtest'];
    }

    /**
     * Sets iNotificationtest
     *
     * @param int $iNotificationtest The number of elements returned by the Notificationtest
     *
     * @return self
     */
    public function setINotificationtest($iNotificationtest)
    {
        $this->container['iNotificationtest'] = $iNotificationtest;

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


