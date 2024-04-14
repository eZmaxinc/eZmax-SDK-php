<?php
/**
 * ModulesectionResponse
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * ModulesectionResponse Class Doc Comment
 *
 * @category Class
 * @description A Modulesection Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModulesectionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'modulesection-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiModulesectionID' => 'int',
        'fkiModuleID' => 'int',
        'sModulesectionInternalname' => 'string',
        'sModulesectionNameX' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiModulesectionID' => null,
        'fkiModuleID' => null,
        'sModulesectionInternalname' => null,
        'sModulesectionNameX' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiModulesectionID' => false,
		'fkiModuleID' => false,
		'sModulesectionInternalname' => false,
		'sModulesectionNameX' => false
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
        'pkiModulesectionID' => 'pkiModulesectionID',
        'fkiModuleID' => 'fkiModuleID',
        'sModulesectionInternalname' => 'sModulesectionInternalname',
        'sModulesectionNameX' => 'sModulesectionNameX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiModulesectionID' => 'setPkiModulesectionID',
        'fkiModuleID' => 'setFkiModuleID',
        'sModulesectionInternalname' => 'setSModulesectionInternalname',
        'sModulesectionNameX' => 'setSModulesectionNameX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiModulesectionID' => 'getPkiModulesectionID',
        'fkiModuleID' => 'getFkiModuleID',
        'sModulesectionInternalname' => 'getSModulesectionInternalname',
        'sModulesectionNameX' => 'getSModulesectionNameX'
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
        $this->setIfExists('pkiModulesectionID', $data ?? [], null);
        $this->setIfExists('fkiModuleID', $data ?? [], null);
        $this->setIfExists('sModulesectionInternalname', $data ?? [], null);
        $this->setIfExists('sModulesectionNameX', $data ?? [], null);
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

        if ($this->container['pkiModulesectionID'] === null) {
            $invalidProperties[] = "'pkiModulesectionID' can't be null";
        }
        if (($this->container['pkiModulesectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiModulesectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiModuleID'] === null) {
            $invalidProperties[] = "'fkiModuleID' can't be null";
        }
        if (($this->container['fkiModuleID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiModuleID', must be bigger than or equal to 0.";
        }

        if ($this->container['sModulesectionInternalname'] === null) {
            $invalidProperties[] = "'sModulesectionInternalname' can't be null";
        }
        if ($this->container['sModulesectionNameX'] === null) {
            $invalidProperties[] = "'sModulesectionNameX' can't be null";
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
     * Gets pkiModulesectionID
     *
     * @return int
     */
    public function getPkiModulesectionID()
    {
        return $this->container['pkiModulesectionID'];
    }

    /**
     * Sets pkiModulesectionID
     *
     * @param int $pkiModulesectionID The unique ID of the Modulesection
     *
     * @return self
     */
    public function setPkiModulesectionID($pkiModulesectionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiModulesectionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiModulesectionID cannot be null');
        //}

//        if (($pkiModulesectionID < 0)) {
        if (($pkiModulesectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiModulesectionID when calling ModulesectionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiModulesectionID'] = $pkiModulesectionID;
        $this->container['pkiModulesectionID'] = (is_null($pkiModulesectionID) ? null : (int) $pkiModulesectionID);

        return $this;
    }

    /**
     * Gets fkiModuleID
     *
     * @return int
     */
    public function getFkiModuleID()
    {
        return $this->container['fkiModuleID'];
    }

    /**
     * Sets fkiModuleID
     *
     * @param int $fkiModuleID The unique ID of the Module
     *
     * @return self
     */
    public function setFkiModuleID($fkiModuleID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiModuleID)) {
            //throw new \InvalidArgumentException('non-nullable fkiModuleID cannot be null');
        //}

//        if (($fkiModuleID < 0)) {
        if (($fkiModuleID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiModuleID when calling ModulesectionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiModuleID'] = $fkiModuleID;
        $this->container['fkiModuleID'] = (is_null($fkiModuleID) ? null : (int) $fkiModuleID);

        return $this;
    }

    /**
     * Gets sModulesectionInternalname
     *
     * @return string
     */
    public function getSModulesectionInternalname()
    {
        return is_null($this->container['sModulesectionInternalname']) ? null : trim($this->container['sModulesectionInternalname']);
    }

    /**
     * Sets sModulesectionInternalname
     *
     * @param string $sModulesectionInternalname The Internal name of the Module section.
     *
     * @return self
     */
    public function setSModulesectionInternalname($sModulesectionInternalname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sModulesectionInternalname)) {
            //throw new \InvalidArgumentException('non-nullable sModulesectionInternalname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sModulesectionInternalname'] = $sModulesectionInternalname;
        $this->container['sModulesectionInternalname'] = (is_null($sModulesectionInternalname) ? null : trim((string) $sModulesectionInternalname));

        return $this;
    }

    /**
     * Gets sModulesectionNameX
     *
     * @return string
     */
    public function getSModulesectionNameX()
    {
        return is_null($this->container['sModulesectionNameX']) ? null : trim($this->container['sModulesectionNameX']);
    }

    /**
     * Sets sModulesectionNameX
     *
     * @param string $sModulesectionNameX The Name of the Modulesection in the language of the requester
     *
     * @return self
     */
    public function setSModulesectionNameX($sModulesectionNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sModulesectionNameX)) {
            //throw new \InvalidArgumentException('non-nullable sModulesectionNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sModulesectionNameX'] = $sModulesectionNameX;
        $this->container['sModulesectionNameX'] = (is_null($sModulesectionNameX) ? null : trim((string) $sModulesectionNameX));

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


