<?php
/**
 * CorsRequest
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
 * The version of the OpenAPI document: 1.2.0
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
 * CorsRequest Class Doc Comment
 *
 * @category Class
 * @description A Cors Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CorsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cors-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCorsID' => 'int',
        'fkiApikeyID' => 'int',
        'sCorsEntryurl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCorsID' => null,
        'fkiApikeyID' => null,
        'sCorsEntryurl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCorsID' => false,
		'fkiApikeyID' => false,
		'sCorsEntryurl' => false
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
        'pkiCorsID' => 'pkiCorsID',
        'fkiApikeyID' => 'fkiApikeyID',
        'sCorsEntryurl' => 'sCorsEntryurl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCorsID' => 'setPkiCorsID',
        'fkiApikeyID' => 'setFkiApikeyID',
        'sCorsEntryurl' => 'setSCorsEntryurl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCorsID' => 'getPkiCorsID',
        'fkiApikeyID' => 'getFkiApikeyID',
        'sCorsEntryurl' => 'getSCorsEntryurl'
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
        $this->setIfExists('pkiCorsID', $data ?? [], null);
        $this->setIfExists('fkiApikeyID', $data ?? [], null);
        $this->setIfExists('sCorsEntryurl', $data ?? [], null);
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

        if (!is_null($this->container['pkiCorsID']) && ($this->container['pkiCorsID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiCorsID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['pkiCorsID']) && ($this->container['pkiCorsID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiCorsID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiApikeyID'] === null) {
            $invalidProperties[] = "'fkiApikeyID' can't be null";
        }
        if (($this->container['fkiApikeyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiApikeyID', must be bigger than or equal to 0.";
        }

        if ($this->container['sCorsEntryurl'] === null) {
            $invalidProperties[] = "'sCorsEntryurl' can't be null";
        }
//        if (!preg_match("/^.{0,2048}$/", $this->container['sCorsEntryurl'])) {
        if (!is_null($this->container['sCorsEntryurl']) && !preg_match("/(*UTF8)^.{0,2048}$/", $this->container['sCorsEntryurl'])) {
            $invalidProperties[] = "invalid value for 'sCorsEntryurl', must be conform to the pattern /^.{0,2048}$/.";
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
     * Gets pkiCorsID
     *
     * @return int|null
     */
    public function getPkiCorsID()
    {
        return $this->container['pkiCorsID'];
    }

    /**
     * Sets pkiCorsID
     *
     * @param int|null $pkiCorsID The unique ID of the Cors
     *
     * @return self
     */
    public function setPkiCorsID($pkiCorsID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCorsID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCorsID cannot be null');
        //}

//        if (($pkiCorsID > 65535)) {
        if (!is_null($pkiCorsID) && ($pkiCorsID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $pkiCorsID when calling CorsRequest., must be smaller than or equal to 65535.');
        }
//        if (($pkiCorsID < 0)) {
        if (!is_null($pkiCorsID) && ($pkiCorsID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiCorsID when calling CorsRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCorsID'] = $pkiCorsID;
        $this->container['pkiCorsID'] = (is_null($pkiCorsID) ? null : (int) $pkiCorsID);

        return $this;
    }

    /**
     * Gets fkiApikeyID
     *
     * @return int
     */
    public function getFkiApikeyID()
    {
        return $this->container['fkiApikeyID'];
    }

    /**
     * Sets fkiApikeyID
     *
     * @param int $fkiApikeyID The unique ID of the Apikey
     *
     * @return self
     */
    public function setFkiApikeyID($fkiApikeyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiApikeyID)) {
            //throw new \InvalidArgumentException('non-nullable fkiApikeyID cannot be null');
        //}

//        if (($fkiApikeyID < 0)) {
        if (($fkiApikeyID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiApikeyID when calling CorsRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiApikeyID'] = $fkiApikeyID;
        $this->container['fkiApikeyID'] = (is_null($fkiApikeyID) ? null : (int) $fkiApikeyID);

        return $this;
    }

    /**
     * Gets sCorsEntryurl
     *
     * @return string
     */
    public function getSCorsEntryurl()
    {
        return is_null($this->container['sCorsEntryurl']) ? null : trim($this->container['sCorsEntryurl']);
    }

    /**
     * Sets sCorsEntryurl
     *
     * @param string $sCorsEntryurl The entryurl of the Cors
     *
     * @return self
     */
    public function setSCorsEntryurl($sCorsEntryurl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCorsEntryurl)) {
            //throw new \InvalidArgumentException('non-nullable sCorsEntryurl cannot be null');
        //}

//        if ((!preg_match("/^.{0,2048}$/", ObjectSerializer::toString($sCorsEntryurl)))) {
        if (!is_null($sCorsEntryurl) && (!preg_match("/(*UTF8)^.{0,2048}$/", ObjectSerializer::toString($sCorsEntryurl)))) {
            throw new \InvalidArgumentException("invalid value for \$sCorsEntryurl when calling CorsRequest., must conform to the pattern /^.{0,2048}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCorsEntryurl'] = $sCorsEntryurl;
        $this->container['sCorsEntryurl'] = (is_null($sCorsEntryurl) ? null : trim((string) $sCorsEntryurl));

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


