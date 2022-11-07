<?php
/**
 * EzsigntemplateformfieldgroupsignerResponseCompound
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
 * The version of the OpenAPI document: 1.1.15
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * EzsigntemplateformfieldgroupsignerResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplateformfieldgroupsigner Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplateformfieldgroupsignerResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplateformfieldgroupsigner-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplateformfieldgroupsignerID' => 'int',
        'fkiEzsigntemplatesignerID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplateformfieldgroupsignerID' => null,
        'fkiEzsigntemplatesignerID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplateformfieldgroupsignerID' => false,
		'fkiEzsigntemplatesignerID' => false
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
        'pkiEzsigntemplateformfieldgroupsignerID' => 'pkiEzsigntemplateformfieldgroupsignerID',
        'fkiEzsigntemplatesignerID' => 'fkiEzsigntemplatesignerID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplateformfieldgroupsignerID' => 'setPkiEzsigntemplateformfieldgroupsignerID',
        'fkiEzsigntemplatesignerID' => 'setFkiEzsigntemplatesignerID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplateformfieldgroupsignerID' => 'getPkiEzsigntemplateformfieldgroupsignerID',
        'fkiEzsigntemplatesignerID' => 'getFkiEzsigntemplatesignerID'
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
        $this->setIfExists('pkiEzsigntemplateformfieldgroupsignerID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatesignerID', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplateformfieldgroupsignerID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplateformfieldgroupsignerID' can't be null";
        }
        if (($this->container['pkiEzsigntemplateformfieldgroupsignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplateformfieldgroupsignerID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatesignerID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatesignerID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatesignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatesignerID', must be bigger than or equal to 0.";
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
     * Gets pkiEzsigntemplateformfieldgroupsignerID
     *
     * @return int
     */
    public function getPkiEzsigntemplateformfieldgroupsignerID()
    {
        return $this->container['pkiEzsigntemplateformfieldgroupsignerID'];
    }

    /**
     * Sets pkiEzsigntemplateformfieldgroupsignerID
     *
     * @param int $pkiEzsigntemplateformfieldgroupsignerID The unique ID of the Ezsigntemplateformfieldgroupsigner
     *
     * @return self
     */
    public function setPkiEzsigntemplateformfieldgroupsignerID($pkiEzsigntemplateformfieldgroupsignerID)
    {

        if (($pkiEzsigntemplateformfieldgroupsignerID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplateformfieldgroupsignerID when calling EzsigntemplateformfieldgroupsignerResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsigntemplateformfieldgroupsignerID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplateformfieldgroupsignerID cannot be null');
        //}
        $this->container['pkiEzsigntemplateformfieldgroupsignerID'] = (is_null($pkiEzsigntemplateformfieldgroupsignerID) ? null : (int) $pkiEzsigntemplateformfieldgroupsignerID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatesignerID
     *
     * @return int
     */
    public function getFkiEzsigntemplatesignerID()
    {
        return $this->container['fkiEzsigntemplatesignerID'];
    }

    /**
     * Sets fkiEzsigntemplatesignerID
     *
     * @param int $fkiEzsigntemplatesignerID The unique ID of the Ezsigntemplatesigner
     *
     * @return self
     */
    public function setFkiEzsigntemplatesignerID($fkiEzsigntemplatesignerID)
    {

        if (($fkiEzsigntemplatesignerID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatesignerID when calling EzsigntemplateformfieldgroupsignerResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigntemplatesignerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatesignerID cannot be null');
        //}
        $this->container['fkiEzsigntemplatesignerID'] = (is_null($fkiEzsigntemplatesignerID) ? null : (int) $fkiEzsigntemplatesignerID);

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


