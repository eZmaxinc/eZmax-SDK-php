<?php
/**
 * EzsigndocumentdependencyRequest
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
 * The version of the OpenAPI document: 1.2.2
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * EzsigndocumentdependencyRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsigndocumentdependency Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigndocumentdependencyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocumentdependency-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigndocumentdependencyID' => 'int',
        'fkiEzsigndocumentIDdependency' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigndocumentdependencyID' => null,
        'fkiEzsigndocumentIDdependency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigndocumentdependencyID' => false,
		'fkiEzsigndocumentIDdependency' => false
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'pkiEzsigndocumentdependencyID' => 'pkiEzsigndocumentdependencyID',
        'fkiEzsigndocumentIDdependency' => 'fkiEzsigndocumentIDdependency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigndocumentdependencyID' => 'setPkiEzsigndocumentdependencyID',
        'fkiEzsigndocumentIDdependency' => 'setFkiEzsigndocumentIDdependency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigndocumentdependencyID' => 'getPkiEzsigndocumentdependencyID',
        'fkiEzsigndocumentIDdependency' => 'getFkiEzsigndocumentIDdependency'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pkiEzsigndocumentdependencyID', $data ?? [], null);
        $this->setIfExists('fkiEzsigndocumentIDdependency', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsigndocumentdependencyID']) && ($this->container['pkiEzsigndocumentdependencyID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigndocumentdependencyID', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['pkiEzsigndocumentdependencyID']) && ($this->container['pkiEzsigndocumentdependencyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigndocumentdependencyID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigndocumentIDdependency'] === null) {
            $invalidProperties[] = "'fkiEzsigndocumentIDdependency' can't be null";
        }
        if (($this->container['fkiEzsigndocumentIDdependency'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigndocumentIDdependency', must be bigger than or equal to 0.";
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
     * Gets pkiEzsigndocumentdependencyID
     *
     * @return int|null
     */
    public function getPkiEzsigndocumentdependencyID()
    {
	//return $this->container['pkiEzsigndocumentdependencyID'];
        return $this->container['pkiEzsigndocumentdependencyID'];
    }

    /**
     * Sets pkiEzsigndocumentdependencyID
     *
     * @param int|null $pkiEzsigndocumentdependencyID The unique ID of the Ezsigndocumentdependency
     *
     * @return self
     */
    public function setPkiEzsigndocumentdependencyID($pkiEzsigndocumentdependencyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigndocumentdependencyID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigndocumentdependencyID cannot be null');
        //}

	//if (($pkiEzsigndocumentdependencyID > 16777215)) {
        if (!is_null($pkiEzsigndocumentdependencyID) && ($pkiEzsigndocumentdependencyID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsigndocumentdependencyID when calling EzsigndocumentdependencyRequest., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsigndocumentdependencyID)?'null':'"'.$pkiEzsigndocumentdependencyID.'"').' for pkiEzsigndocumentdependencyID when calling EzsigndocumentdependencyRequest., must be smaller than or equal to 16777215.');
        }
	//if (($pkiEzsigndocumentdependencyID < 0)) {
        if (!is_null($pkiEzsigndocumentdependencyID) && ($pkiEzsigndocumentdependencyID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsigndocumentdependencyID when calling EzsigndocumentdependencyRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsigndocumentdependencyID)?'null':'"'.$pkiEzsigndocumentdependencyID.'"').' for pkiEzsigndocumentdependencyID when calling EzsigndocumentdependencyRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigndocumentdependencyID'] = $pkiEzsigndocumentdependencyID;
        $this->container['pkiEzsigndocumentdependencyID'] = (is_null($pkiEzsigndocumentdependencyID) ? null : (int) $pkiEzsigndocumentdependencyID);

        return $this;
    }

    /**
     * Gets fkiEzsigndocumentIDdependency
     *
     * @return int
     */
    public function getFkiEzsigndocumentIDdependency()
    {
	//return $this->container['fkiEzsigndocumentIDdependency'];
        return $this->container['fkiEzsigndocumentIDdependency'];
    }

    /**
     * Sets fkiEzsigndocumentIDdependency
     *
     * @param int $fkiEzsigndocumentIDdependency The unique ID of the Ezsigndocument
     *
     * @return self
     */
    public function setFkiEzsigndocumentIDdependency($fkiEzsigndocumentIDdependency)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigndocumentIDdependency)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigndocumentIDdependency cannot be null');
        //}

	//if (($fkiEzsigndocumentIDdependency < 0)) {
        if (($fkiEzsigndocumentIDdependency < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsigndocumentIDdependency when calling EzsigndocumentdependencyRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsigndocumentIDdependency)?'null':'"'.$fkiEzsigndocumentIDdependency.'"').' for fkiEzsigndocumentIDdependency when calling EzsigndocumentdependencyRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigndocumentIDdependency'] = $fkiEzsigndocumentIDdependency;
        $this->container['fkiEzsigndocumentIDdependency'] = (is_null($fkiEzsigndocumentIDdependency) ? null : (int) $fkiEzsigndocumentIDdependency);

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


