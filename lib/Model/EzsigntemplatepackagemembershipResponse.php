<?php
/**
 * EzsigntemplatepackagemembershipResponse
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
 * EzsigntemplatepackagemembershipResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplatepackagemembership Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatepackagemembershipResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatepackagemembership-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatepackagemembershipID' => 'int',
        'fkiEzsigntemplatepackageID' => 'int',
        'fkiEzsigntemplateID' => 'int',
        'iEzsigntemplatepackagemembershipOrder' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatepackagemembershipID' => null,
        'fkiEzsigntemplatepackageID' => null,
        'fkiEzsigntemplateID' => null,
        'iEzsigntemplatepackagemembershipOrder' => null
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
        'pkiEzsigntemplatepackagemembershipID' => 'pkiEzsigntemplatepackagemembershipID',
        'fkiEzsigntemplatepackageID' => 'fkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'fkiEzsigntemplateID',
        'iEzsigntemplatepackagemembershipOrder' => 'iEzsigntemplatepackagemembershipOrder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatepackagemembershipID' => 'setPkiEzsigntemplatepackagemembershipID',
        'fkiEzsigntemplatepackageID' => 'setFkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'setFkiEzsigntemplateID',
        'iEzsigntemplatepackagemembershipOrder' => 'setIEzsigntemplatepackagemembershipOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatepackagemembershipID' => 'getPkiEzsigntemplatepackagemembershipID',
        'fkiEzsigntemplatepackageID' => 'getFkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'getFkiEzsigntemplateID',
        'iEzsigntemplatepackagemembershipOrder' => 'getIEzsigntemplatepackagemembershipOrder'
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
        $this->container['pkiEzsigntemplatepackagemembershipID'] = $data['pkiEzsigntemplatepackagemembershipID'] ?? null;
        $this->container['fkiEzsigntemplatepackageID'] = $data['fkiEzsigntemplatepackageID'] ?? null;
        $this->container['fkiEzsigntemplateID'] = $data['fkiEzsigntemplateID'] ?? null;
        $this->container['iEzsigntemplatepackagemembershipOrder'] = $data['iEzsigntemplatepackagemembershipOrder'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsigntemplatepackagemembershipID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplatepackagemembershipID' can't be null";
        }
        if (($this->container['pkiEzsigntemplatepackagemembershipID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatepackagemembershipID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatepackageID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatepackageID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatepackageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatepackageID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplateID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplateID' can't be null";
        }
        if (($this->container['fkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatepackagemembershipOrder'] === null) {
            $invalidProperties[] = "'iEzsigntemplatepackagemembershipOrder' can't be null";
        }
        if (($this->container['iEzsigntemplatepackagemembershipOrder'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatepackagemembershipOrder', must be bigger than or equal to 1.";
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
     * Gets pkiEzsigntemplatepackagemembershipID
     *
     * @return int
     */
    public function getPkiEzsigntemplatepackagemembershipID()
    {
        return $this->container['pkiEzsigntemplatepackagemembershipID'];
    }

    /**
     * Sets pkiEzsigntemplatepackagemembershipID
     *
     * @param int $pkiEzsigntemplatepackagemembershipID The unique ID of the Ezsigntemplatepackagemembership
     *
     * @return self
     */
    public function setPkiEzsigntemplatepackagemembershipID($pkiEzsigntemplatepackagemembershipID)
    {

        if (($pkiEzsigntemplatepackagemembershipID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatepackagemembershipID when calling EzsigntemplatepackagemembershipResponse., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsigntemplatepackagemembershipID'] = $pkiEzsigntemplatepackagemembershipID;

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatepackageID
     *
     * @return int
     */
    public function getFkiEzsigntemplatepackageID()
    {
        return $this->container['fkiEzsigntemplatepackageID'];
    }

    /**
     * Sets fkiEzsigntemplatepackageID
     *
     * @param int $fkiEzsigntemplatepackageID The unique ID of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setFkiEzsigntemplatepackageID($fkiEzsigntemplatepackageID)
    {

        if (($fkiEzsigntemplatepackageID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatepackageID when calling EzsigntemplatepackagemembershipResponse., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsigntemplatepackageID'] = $fkiEzsigntemplatepackageID;

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateID
     *
     * @return int
     */
    public function getFkiEzsigntemplateID()
    {
        return $this->container['fkiEzsigntemplateID'];
    }

    /**
     * Sets fkiEzsigntemplateID
     *
     * @param int $fkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setFkiEzsigntemplateID($fkiEzsigntemplateID)
    {

        if (($fkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateID when calling EzsigntemplatepackagemembershipResponse., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsigntemplateID'] = $fkiEzsigntemplateID;

        return $this;
    }

    /**
     * Gets iEzsigntemplatepackagemembershipOrder
     *
     * @return int
     */
    public function getIEzsigntemplatepackagemembershipOrder()
    {
        return $this->container['iEzsigntemplatepackagemembershipOrder'];
    }

    /**
     * Sets iEzsigntemplatepackagemembershipOrder
     *
     * @param int $iEzsigntemplatepackagemembershipOrder The order in which the Ezsigntemplate will be imported when using an Ezsigntemplatepackage.
     *
     * @return self
     */
    public function setIEzsigntemplatepackagemembershipOrder($iEzsigntemplatepackagemembershipOrder)
    {

        if (($iEzsigntemplatepackagemembershipOrder < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatepackagemembershipOrder when calling EzsigntemplatepackagemembershipResponse., must be bigger than or equal to 1.');
        }

        $this->container['iEzsigntemplatepackagemembershipOrder'] = $iEzsigntemplatepackagemembershipOrder;

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


