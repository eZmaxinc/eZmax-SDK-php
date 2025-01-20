<?php
/**
 * EzsignsigningreasonRequest
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
 * Generator version: 7.9.0
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
 * EzsignsigningreasonRequest Class Doc Comment
 *
 * @category Class
 * @description A Ezsignsigningreason Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsigningreasonRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsigningreason-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignsigningreasonID' => 'int',
        'objEzsignsigningreasonDescription' => '\eZmaxAPI\Model\MultilingualEzsignsigningreasonDescription',
        'bEzsignsigningreasonIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignsigningreasonID' => null,
        'objEzsignsigningreasonDescription' => null,
        'bEzsignsigningreasonIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignsigningreasonID' => false,
		'objEzsignsigningreasonDescription' => false,
		'bEzsignsigningreasonIsactive' => false
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
        'pkiEzsignsigningreasonID' => 'pkiEzsignsigningreasonID',
        'objEzsignsigningreasonDescription' => 'objEzsignsigningreasonDescription',
        'bEzsignsigningreasonIsactive' => 'bEzsignsigningreasonIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignsigningreasonID' => 'setPkiEzsignsigningreasonID',
        'objEzsignsigningreasonDescription' => 'setObjEzsignsigningreasonDescription',
        'bEzsignsigningreasonIsactive' => 'setBEzsignsigningreasonIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignsigningreasonID' => 'getPkiEzsignsigningreasonID',
        'objEzsignsigningreasonDescription' => 'getObjEzsignsigningreasonDescription',
        'bEzsignsigningreasonIsactive' => 'getBEzsignsigningreasonIsactive'
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
        $this->setIfExists('pkiEzsignsigningreasonID', $data ?? [], null);
        $this->setIfExists('objEzsignsigningreasonDescription', $data ?? [], null);
        $this->setIfExists('bEzsignsigningreasonIsactive', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignsigningreasonID']) && ($this->container['pkiEzsignsigningreasonID'] > 255)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsigningreasonID', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['pkiEzsignsigningreasonID']) && ($this->container['pkiEzsignsigningreasonID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsigningreasonID', must be bigger than or equal to 0.";
        }

        if ($this->container['objEzsignsigningreasonDescription'] === null) {
            $invalidProperties[] = "'objEzsignsigningreasonDescription' can't be null";
        }
        if ($this->container['bEzsignsigningreasonIsactive'] === null) {
            $invalidProperties[] = "'bEzsignsigningreasonIsactive' can't be null";
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
     * Gets pkiEzsignsigningreasonID
     *
     * @return int|null
     */
    public function getPkiEzsignsigningreasonID()
    {
	//return $this->container['pkiEzsignsigningreasonID'];
        return $this->container['pkiEzsignsigningreasonID'];
    }

    /**
     * Sets pkiEzsignsigningreasonID
     *
     * @param int|null $pkiEzsignsigningreasonID The unique ID of the Ezsignsigningreason
     *
     * @return self
     */
    public function setPkiEzsignsigningreasonID($pkiEzsignsigningreasonID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignsigningreasonID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignsigningreasonID cannot be null');
        //}

	//if (($pkiEzsignsigningreasonID > 255)) {
        if (!is_null($pkiEzsignsigningreasonID) && ($pkiEzsignsigningreasonID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignsigningreasonID when calling EzsignsigningreasonRequest., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignsigningreasonID)?'null':'"'.$pkiEzsignsigningreasonID.'"').' for pkiEzsignsigningreasonID when calling EzsignsigningreasonRequest., must be smaller than or equal to 255.');
        }
	//if (($pkiEzsignsigningreasonID < 0)) {
        if (!is_null($pkiEzsignsigningreasonID) && ($pkiEzsignsigningreasonID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignsigningreasonID when calling EzsignsigningreasonRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignsigningreasonID)?'null':'"'.$pkiEzsignsigningreasonID.'"').' for pkiEzsignsigningreasonID when calling EzsignsigningreasonRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignsigningreasonID'] = $pkiEzsignsigningreasonID;
        $this->container['pkiEzsignsigningreasonID'] = (is_null($pkiEzsignsigningreasonID) ? null : (int) $pkiEzsignsigningreasonID);

        return $this;
    }

    /**
     * Gets objEzsignsigningreasonDescription
     *
     * @return \eZmaxAPI\Model\MultilingualEzsignsigningreasonDescription
     */
    public function getObjEzsignsigningreasonDescription()
    {
	//return $this->container['objEzsignsigningreasonDescription'];
        return $this->container['objEzsignsigningreasonDescription'];
    }

    /**
     * Sets objEzsignsigningreasonDescription
     *
     * @param \eZmaxAPI\Model\MultilingualEzsignsigningreasonDescription $objEzsignsigningreasonDescription objEzsignsigningreasonDescription
     *
     * @return self
     */
    public function setObjEzsignsigningreasonDescription($objEzsignsigningreasonDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objEzsignsigningreasonDescription)) {
            //throw new \InvalidArgumentException('non-nullable objEzsignsigningreasonDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objEzsignsigningreasonDescription'] = $objEzsignsigningreasonDescription;
        $this->container['objEzsignsigningreasonDescription'] = $objEzsignsigningreasonDescription;

        return $this;
    }

    /**
     * Gets bEzsignsigningreasonIsactive
     *
     * @return bool
     */
    public function getBEzsignsigningreasonIsactive()
    {
	//return $this->container['bEzsignsigningreasonIsactive'];
        return $this->container['bEzsignsigningreasonIsactive'];
    }

    /**
     * Sets bEzsignsigningreasonIsactive
     *
     * @param bool $bEzsignsigningreasonIsactive Whether the ezsignsigningreason is active or not
     *
     * @return self
     */
    public function setBEzsignsigningreasonIsactive($bEzsignsigningreasonIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignsigningreasonIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignsigningreasonIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignsigningreasonIsactive'] = $bEzsignsigningreasonIsactive;
        $this->container['bEzsignsigningreasonIsactive'] = (is_null($bEzsignsigningreasonIsactive) ? null : (bool) $bEzsignsigningreasonIsactive);

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


