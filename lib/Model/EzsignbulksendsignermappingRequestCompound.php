<?php
/**
 * EzsignbulksendsignermappingRequestCompound
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
 * EzsignbulksendsignermappingRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezsignbulksendsignermapping Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignbulksendsignermappingRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksendsignermapping-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksendsignermappingID' => 'int',
        'fkiEzsignbulksendID' => 'int',
        'fkiUserID' => 'int',
        'sEzsignbulksendsignermappingDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksendsignermappingID' => null,
        'fkiEzsignbulksendID' => null,
        'fkiUserID' => null,
        'sEzsignbulksendsignermappingDescription' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignbulksendsignermappingID' => false,
		'fkiEzsignbulksendID' => false,
		'fkiUserID' => false,
		'sEzsignbulksendsignermappingDescription' => false
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
        'pkiEzsignbulksendsignermappingID' => 'pkiEzsignbulksendsignermappingID',
        'fkiEzsignbulksendID' => 'fkiEzsignbulksendID',
        'fkiUserID' => 'fkiUserID',
        'sEzsignbulksendsignermappingDescription' => 'sEzsignbulksendsignermappingDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksendsignermappingID' => 'setPkiEzsignbulksendsignermappingID',
        'fkiEzsignbulksendID' => 'setFkiEzsignbulksendID',
        'fkiUserID' => 'setFkiUserID',
        'sEzsignbulksendsignermappingDescription' => 'setSEzsignbulksendsignermappingDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksendsignermappingID' => 'getPkiEzsignbulksendsignermappingID',
        'fkiEzsignbulksendID' => 'getFkiEzsignbulksendID',
        'fkiUserID' => 'getFkiUserID',
        'sEzsignbulksendsignermappingDescription' => 'getSEzsignbulksendsignermappingDescription'
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
        $this->setIfExists('pkiEzsignbulksendsignermappingID', $data ?? [], null);
        $this->setIfExists('fkiEzsignbulksendID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('sEzsignbulksendsignermappingDescription', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignbulksendsignermappingID']) && ($this->container['pkiEzsignbulksendsignermappingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignbulksendsignermappingID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'fkiEzsignbulksendID' can't be null";
        }
        if (($this->container['fkiEzsignbulksendID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignbulksendID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUserID']) && ($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsignbulksendsignermappingDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendsignermappingDescription' can't be null";
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
     * Gets pkiEzsignbulksendsignermappingID
     *
     * @return int|null
     */
    public function getPkiEzsignbulksendsignermappingID()
    {
        return $this->container['pkiEzsignbulksendsignermappingID'];
    }

    /**
     * Sets pkiEzsignbulksendsignermappingID
     *
     * @param int|null $pkiEzsignbulksendsignermappingID The unique ID of the Ezsignbulksendsignermapping
     *
     * @return self
     */
    public function setPkiEzsignbulksendsignermappingID($pkiEzsignbulksendsignermappingID)
    {

        if (!is_null($pkiEzsignbulksendsignermappingID) && ($pkiEzsignbulksendsignermappingID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksendsignermappingID when calling EzsignbulksendsignermappingRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsignbulksendsignermappingID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignbulksendsignermappingID cannot be null');
        //}
        $this->container['pkiEzsignbulksendsignermappingID'] = (is_null($pkiEzsignbulksendsignermappingID) ? null : (int) $pkiEzsignbulksendsignermappingID);

        return $this;
    }

    /**
     * Gets fkiEzsignbulksendID
     *
     * @return int
     */
    public function getFkiEzsignbulksendID()
    {
        return $this->container['fkiEzsignbulksendID'];
    }

    /**
     * Sets fkiEzsignbulksendID
     *
     * @param int $fkiEzsignbulksendID The unique ID of the Ezsignbulksend
     *
     * @return self
     */
    public function setFkiEzsignbulksendID($fkiEzsignbulksendID)
    {

        if (($fkiEzsignbulksendID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignbulksendID when calling EzsignbulksendsignermappingRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignbulksendID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignbulksendID cannot be null');
        //}
        $this->container['fkiEzsignbulksendID'] = (is_null($fkiEzsignbulksendID) ? null : (int) $fkiEzsignbulksendID);

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int|null
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int|null $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {

        if (!is_null($fkiUserID) && ($fkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserID when calling EzsignbulksendsignermappingRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserID cannot be null');
        //}
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets sEzsignbulksendsignermappingDescription
     *
     * @return string
     */
    public function getSEzsignbulksendsignermappingDescription()
    {
        return $this->container['sEzsignbulksendsignermappingDescription'];
    }

    /**
     * Sets sEzsignbulksendsignermappingDescription
     *
     * @param string $sEzsignbulksendsignermappingDescription The description of the Ezsignbulksendsignermapping
     *
     * @return self
     */
    public function setSEzsignbulksendsignermappingDescription($sEzsignbulksendsignermappingDescription)
    {

        //if (is_null($sEzsignbulksendsignermappingDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignbulksendsignermappingDescription cannot be null');
        //}
        $this->container['sEzsignbulksendsignermappingDescription'] = (is_null($sEzsignbulksendsignermappingDescription) ? null : (string) $sEzsignbulksendsignermappingDescription);

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


