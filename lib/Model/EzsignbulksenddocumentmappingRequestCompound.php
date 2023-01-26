<?php
/**
 * EzsignbulksenddocumentmappingRequestCompound
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
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * EzsignbulksenddocumentmappingRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezsignbulksenddocumentmapping Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignbulksenddocumentmappingRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksenddocumentmapping-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksenddocumentmappingID' => 'int',
        'fkiEzsignbulksendID' => 'int',
        'fkiEzsigntemplatepackageID' => 'int',
        'fkiEzsigntemplateID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksenddocumentmappingID' => null,
        'fkiEzsignbulksendID' => null,
        'fkiEzsigntemplatepackageID' => null,
        'fkiEzsigntemplateID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignbulksenddocumentmappingID' => false,
		'fkiEzsignbulksendID' => false,
		'fkiEzsigntemplatepackageID' => false,
		'fkiEzsigntemplateID' => false
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
        'pkiEzsignbulksenddocumentmappingID' => 'pkiEzsignbulksenddocumentmappingID',
        'fkiEzsignbulksendID' => 'fkiEzsignbulksendID',
        'fkiEzsigntemplatepackageID' => 'fkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'fkiEzsigntemplateID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksenddocumentmappingID' => 'setPkiEzsignbulksenddocumentmappingID',
        'fkiEzsignbulksendID' => 'setFkiEzsignbulksendID',
        'fkiEzsigntemplatepackageID' => 'setFkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'setFkiEzsigntemplateID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksenddocumentmappingID' => 'getPkiEzsignbulksenddocumentmappingID',
        'fkiEzsignbulksendID' => 'getFkiEzsignbulksendID',
        'fkiEzsigntemplatepackageID' => 'getFkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'getFkiEzsigntemplateID'
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
        $this->setIfExists('pkiEzsignbulksenddocumentmappingID', $data ?? [], null);
        $this->setIfExists('fkiEzsignbulksendID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatepackageID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplateID', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignbulksenddocumentmappingID']) && ($this->container['pkiEzsignbulksenddocumentmappingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignbulksenddocumentmappingID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'fkiEzsignbulksendID' can't be null";
        }
        if (($this->container['fkiEzsignbulksendID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignbulksendID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplatepackageID']) && ($this->container['fkiEzsigntemplatepackageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatepackageID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplateID']) && ($this->container['fkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateID', must be bigger than or equal to 0.";
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
     * Gets pkiEzsignbulksenddocumentmappingID
     *
     * @return int|null
     */
    public function getPkiEzsignbulksenddocumentmappingID()
    {
        return $this->container['pkiEzsignbulksenddocumentmappingID'];
    }

    /**
     * Sets pkiEzsignbulksenddocumentmappingID
     *
     * @param int|null $pkiEzsignbulksenddocumentmappingID The unique ID of the Ezsignbulksenddocumentmapping.
     *
     * @return self
     */
    public function setPkiEzsignbulksenddocumentmappingID($pkiEzsignbulksenddocumentmappingID)
    {

        if (!is_null($pkiEzsignbulksenddocumentmappingID) && ($pkiEzsignbulksenddocumentmappingID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksenddocumentmappingID when calling EzsignbulksenddocumentmappingRequestCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignbulksenddocumentmappingID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignbulksenddocumentmappingID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignbulksenddocumentmappingID'] = $pkiEzsignbulksenddocumentmappingID;
        $this->container['pkiEzsignbulksenddocumentmappingID'] = (is_null($pkiEzsignbulksenddocumentmappingID) ? null : (int) $pkiEzsignbulksenddocumentmappingID);

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
            throw new \InvalidArgumentException('invalid value for $fkiEzsignbulksendID when calling EzsignbulksenddocumentmappingRequestCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignbulksendID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignbulksendID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignbulksendID'] = $fkiEzsignbulksendID;
        $this->container['fkiEzsignbulksendID'] = (is_null($fkiEzsignbulksendID) ? null : (int) $fkiEzsignbulksendID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatepackageID
     *
     * @return int|null
     */
    public function getFkiEzsigntemplatepackageID()
    {
        return $this->container['fkiEzsigntemplatepackageID'];
    }

    /**
     * Sets fkiEzsigntemplatepackageID
     *
     * @param int|null $fkiEzsigntemplatepackageID The unique ID of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setFkiEzsigntemplatepackageID($fkiEzsigntemplatepackageID)
    {

        if (!is_null($fkiEzsigntemplatepackageID) && ($fkiEzsigntemplatepackageID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatepackageID when calling EzsignbulksenddocumentmappingRequestCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplatepackageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatepackageID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplatepackageID'] = $fkiEzsigntemplatepackageID;
        $this->container['fkiEzsigntemplatepackageID'] = (is_null($fkiEzsigntemplatepackageID) ? null : (int) $fkiEzsigntemplatepackageID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateID
     *
     * @return int|null
     */
    public function getFkiEzsigntemplateID()
    {
        return $this->container['fkiEzsigntemplateID'];
    }

    /**
     * Sets fkiEzsigntemplateID
     *
     * @param int|null $fkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setFkiEzsigntemplateID($fkiEzsigntemplateID)
    {

        if (!is_null($fkiEzsigntemplateID) && ($fkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateID when calling EzsignbulksenddocumentmappingRequestCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplateID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplateID'] = $fkiEzsigntemplateID;
        $this->container['fkiEzsigntemplateID'] = (is_null($fkiEzsigntemplateID) ? null : (int) $fkiEzsigntemplateID);

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


