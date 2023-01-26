<?php
/**
 * EzsigntemplatepackagesignermembershipResponseCompound
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
 * EzsigntemplatepackagesignermembershipResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplatepackagesignermembership Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatepackagesignermembershipResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatepackagesignermembership-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatepackagesignermembershipID' => 'int',
        'fkiEzsigntemplatepackagemembershipID' => 'int',
        'fkiEzsigntemplatepackagesignerID' => 'int',
        'fkiEzsigntemplatesignerID' => 'int',
        'iEzsigntemplatepackagesignermembershipCopy' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatepackagesignermembershipID' => null,
        'fkiEzsigntemplatepackagemembershipID' => null,
        'fkiEzsigntemplatepackagesignerID' => null,
        'fkiEzsigntemplatesignerID' => null,
        'iEzsigntemplatepackagesignermembershipCopy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplatepackagesignermembershipID' => false,
		'fkiEzsigntemplatepackagemembershipID' => false,
		'fkiEzsigntemplatepackagesignerID' => false,
		'fkiEzsigntemplatesignerID' => false,
		'iEzsigntemplatepackagesignermembershipCopy' => false
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
        'pkiEzsigntemplatepackagesignermembershipID' => 'pkiEzsigntemplatepackagesignermembershipID',
        'fkiEzsigntemplatepackagemembershipID' => 'fkiEzsigntemplatepackagemembershipID',
        'fkiEzsigntemplatepackagesignerID' => 'fkiEzsigntemplatepackagesignerID',
        'fkiEzsigntemplatesignerID' => 'fkiEzsigntemplatesignerID',
        'iEzsigntemplatepackagesignermembershipCopy' => 'iEzsigntemplatepackagesignermembershipCopy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatepackagesignermembershipID' => 'setPkiEzsigntemplatepackagesignermembershipID',
        'fkiEzsigntemplatepackagemembershipID' => 'setFkiEzsigntemplatepackagemembershipID',
        'fkiEzsigntemplatepackagesignerID' => 'setFkiEzsigntemplatepackagesignerID',
        'fkiEzsigntemplatesignerID' => 'setFkiEzsigntemplatesignerID',
        'iEzsigntemplatepackagesignermembershipCopy' => 'setIEzsigntemplatepackagesignermembershipCopy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatepackagesignermembershipID' => 'getPkiEzsigntemplatepackagesignermembershipID',
        'fkiEzsigntemplatepackagemembershipID' => 'getFkiEzsigntemplatepackagemembershipID',
        'fkiEzsigntemplatepackagesignerID' => 'getFkiEzsigntemplatepackagesignerID',
        'fkiEzsigntemplatesignerID' => 'getFkiEzsigntemplatesignerID',
        'iEzsigntemplatepackagesignermembershipCopy' => 'getIEzsigntemplatepackagesignermembershipCopy'
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
        $this->setIfExists('pkiEzsigntemplatepackagesignermembershipID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatepackagemembershipID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatepackagesignerID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatesignerID', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatepackagesignermembershipCopy', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplatepackagesignermembershipID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplatepackagesignermembershipID' can't be null";
        }
        if (($this->container['pkiEzsigntemplatepackagesignermembershipID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatepackagesignermembershipID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatepackagemembershipID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatepackagemembershipID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatepackagemembershipID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatepackagemembershipID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatepackagesignerID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatepackagesignerID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatepackagesignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatepackagesignerID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatesignerID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatesignerID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatesignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatesignerID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iEzsigntemplatepackagesignermembershipCopy']) && ($this->container['iEzsigntemplatepackagesignermembershipCopy'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatepackagesignermembershipCopy', must be bigger than or equal to 1.";
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
     * Gets pkiEzsigntemplatepackagesignermembershipID
     *
     * @return int
     */
    public function getPkiEzsigntemplatepackagesignermembershipID()
    {
        return $this->container['pkiEzsigntemplatepackagesignermembershipID'];
    }

    /**
     * Sets pkiEzsigntemplatepackagesignermembershipID
     *
     * @param int $pkiEzsigntemplatepackagesignermembershipID The unique ID of the Ezsigntemplatepackagesignermembership
     *
     * @return self
     */
    public function setPkiEzsigntemplatepackagesignermembershipID($pkiEzsigntemplatepackagesignermembershipID)
    {

        if (($pkiEzsigntemplatepackagesignermembershipID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatepackagesignermembershipID when calling EzsigntemplatepackagesignermembershipResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplatepackagesignermembershipID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplatepackagesignermembershipID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplatepackagesignermembershipID'] = $pkiEzsigntemplatepackagesignermembershipID;
        $this->container['pkiEzsigntemplatepackagesignermembershipID'] = (is_null($pkiEzsigntemplatepackagesignermembershipID) ? null : (int) $pkiEzsigntemplatepackagesignermembershipID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatepackagemembershipID
     *
     * @return int
     */
    public function getFkiEzsigntemplatepackagemembershipID()
    {
        return $this->container['fkiEzsigntemplatepackagemembershipID'];
    }

    /**
     * Sets fkiEzsigntemplatepackagemembershipID
     *
     * @param int $fkiEzsigntemplatepackagemembershipID The unique ID of the Ezsigntemplatepackagemembership
     *
     * @return self
     */
    public function setFkiEzsigntemplatepackagemembershipID($fkiEzsigntemplatepackagemembershipID)
    {

        if (($fkiEzsigntemplatepackagemembershipID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatepackagemembershipID when calling EzsigntemplatepackagesignermembershipResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplatepackagemembershipID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatepackagemembershipID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplatepackagemembershipID'] = $fkiEzsigntemplatepackagemembershipID;
        $this->container['fkiEzsigntemplatepackagemembershipID'] = (is_null($fkiEzsigntemplatepackagemembershipID) ? null : (int) $fkiEzsigntemplatepackagemembershipID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatepackagesignerID
     *
     * @return int
     */
    public function getFkiEzsigntemplatepackagesignerID()
    {
        return $this->container['fkiEzsigntemplatepackagesignerID'];
    }

    /**
     * Sets fkiEzsigntemplatepackagesignerID
     *
     * @param int $fkiEzsigntemplatepackagesignerID The unique ID of the Ezsigntemplatepackagesigner
     *
     * @return self
     */
    public function setFkiEzsigntemplatepackagesignerID($fkiEzsigntemplatepackagesignerID)
    {

        if (($fkiEzsigntemplatepackagesignerID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatepackagesignerID when calling EzsigntemplatepackagesignermembershipResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplatepackagesignerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatepackagesignerID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplatepackagesignerID'] = $fkiEzsigntemplatepackagesignerID;
        $this->container['fkiEzsigntemplatepackagesignerID'] = (is_null($fkiEzsigntemplatepackagesignerID) ? null : (int) $fkiEzsigntemplatepackagesignerID);

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
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatesignerID when calling EzsigntemplatepackagesignermembershipResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplatesignerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatesignerID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplatesignerID'] = $fkiEzsigntemplatesignerID;
        $this->container['fkiEzsigntemplatesignerID'] = (is_null($fkiEzsigntemplatesignerID) ? null : (int) $fkiEzsigntemplatesignerID);

        return $this;
    }

    /**
     * Gets iEzsigntemplatepackagesignermembershipCopy
     *
     * @return int|null
     */
    public function getIEzsigntemplatepackagesignermembershipCopy()
    {
        return $this->container['iEzsigntemplatepackagesignermembershipCopy'];
    }

    /**
     * Sets iEzsigntemplatepackagesignermembershipCopy
     *
     * @param int|null $iEzsigntemplatepackagesignermembershipCopy The Copy number in case of multiple copies.
     *
     * @return self
     */
    public function setIEzsigntemplatepackagesignermembershipCopy($iEzsigntemplatepackagesignermembershipCopy)
    {

        if (!is_null($iEzsigntemplatepackagesignermembershipCopy) && ($iEzsigntemplatepackagesignermembershipCopy < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatepackagesignermembershipCopy when calling EzsigntemplatepackagesignermembershipResponseCompound., must be bigger than or equal to 1.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatepackagesignermembershipCopy)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatepackagesignermembershipCopy cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatepackagesignermembershipCopy'] = $iEzsigntemplatepackagesignermembershipCopy;
        $this->container['iEzsigntemplatepackagesignermembershipCopy'] = (is_null($iEzsigntemplatepackagesignermembershipCopy) ? null : (int) $iEzsigntemplatepackagesignermembershipCopy);

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


