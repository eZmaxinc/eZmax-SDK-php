<?php
/**
 * CustomEzmaxpricingResponse
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
 * CustomEzmaxpricingResponse Class Doc Comment
 *
 * @category Class
 * @description A Custom Ezmaxpricing Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomEzmaxpricingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Ezmaxpricing-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxpricingID' => 'int',
        'dEzmaxpricingRebateezsignallagents' => 'string',
        'dtEzmaxpricingStart' => 'string',
        'dtEzmaxpricingEnd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxpricingID' => null,
        'dEzmaxpricingRebateezsignallagents' => null,
        'dtEzmaxpricingStart' => null,
        'dtEzmaxpricingEnd' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxpricingID' => false,
		'dEzmaxpricingRebateezsignallagents' => false,
		'dtEzmaxpricingStart' => false,
		'dtEzmaxpricingEnd' => false
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
        'pkiEzmaxpricingID' => 'pkiEzmaxpricingID',
        'dEzmaxpricingRebateezsignallagents' => 'dEzmaxpricingRebateezsignallagents',
        'dtEzmaxpricingStart' => 'dtEzmaxpricingStart',
        'dtEzmaxpricingEnd' => 'dtEzmaxpricingEnd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxpricingID' => 'setPkiEzmaxpricingID',
        'dEzmaxpricingRebateezsignallagents' => 'setDEzmaxpricingRebateezsignallagents',
        'dtEzmaxpricingStart' => 'setDtEzmaxpricingStart',
        'dtEzmaxpricingEnd' => 'setDtEzmaxpricingEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxpricingID' => 'getPkiEzmaxpricingID',
        'dEzmaxpricingRebateezsignallagents' => 'getDEzmaxpricingRebateezsignallagents',
        'dtEzmaxpricingStart' => 'getDtEzmaxpricingStart',
        'dtEzmaxpricingEnd' => 'getDtEzmaxpricingEnd'
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
        $this->setIfExists('pkiEzmaxpricingID', $data ?? [], null);
        $this->setIfExists('dEzmaxpricingRebateezsignallagents', $data ?? [], null);
        $this->setIfExists('dtEzmaxpricingStart', $data ?? [], null);
        $this->setIfExists('dtEzmaxpricingEnd', $data ?? [], null);
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

        if ($this->container['pkiEzmaxpricingID'] === null) {
            $invalidProperties[] = "'pkiEzmaxpricingID' can't be null";
        }
        if (($this->container['pkiEzmaxpricingID'] < 1)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxpricingID', must be bigger than or equal to 1.";
        }

        if ($this->container['dEzmaxpricingRebateezsignallagents'] === null) {
            $invalidProperties[] = "'dEzmaxpricingRebateezsignallagents' can't be null";
        }
        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxpricingRebateezsignallagents'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxpricingRebateezsignallagents', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dtEzmaxpricingStart'] === null) {
            $invalidProperties[] = "'dtEzmaxpricingStart' can't be null";
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
     * Gets pkiEzmaxpricingID
     *
     * @return int
     */
    public function getPkiEzmaxpricingID()
    {
        return $this->container['pkiEzmaxpricingID'];
    }

    /**
     * Sets pkiEzmaxpricingID
     *
     * @param int $pkiEzmaxpricingID The unique ID of the Ezmaxpricing
     *
     * @return self
     */
    public function setPkiEzmaxpricingID($pkiEzmaxpricingID)
    {

        if (($pkiEzmaxpricingID < 1)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzmaxpricingID when calling CustomEzmaxpricingResponse., must be bigger than or equal to 1.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzmaxpricingID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxpricingID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzmaxpricingID'] = $pkiEzmaxpricingID;
        $this->container['pkiEzmaxpricingID'] = (is_null($pkiEzmaxpricingID) ? null : (int) $pkiEzmaxpricingID);

        return $this;
    }

    /**
     * Gets dEzmaxpricingRebateezsignallagents
     *
     * @return string
     */
    public function getDEzmaxpricingRebateezsignallagents()
    {
        return $this->container['dEzmaxpricingRebateezsignallagents'];
    }

    /**
     * Sets dEzmaxpricingRebateezsignallagents
     *
     * @param string $dEzmaxpricingRebateezsignallagents The rebate offered when eZsign is taken for all agents
     *
     * @return self
     */
    public function setDEzmaxpricingRebateezsignallagents($dEzmaxpricingRebateezsignallagents)
    {

        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxpricingRebateezsignallagents))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxpricingRebateezsignallagents when calling CustomEzmaxpricingResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxpricingRebateezsignallagents)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxpricingRebateezsignallagents cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxpricingRebateezsignallagents'] = $dEzmaxpricingRebateezsignallagents;
        $this->container['dEzmaxpricingRebateezsignallagents'] = (is_null($dEzmaxpricingRebateezsignallagents) ? null : (string) $dEzmaxpricingRebateezsignallagents);

        return $this;
    }

    /**
     * Gets dtEzmaxpricingStart
     *
     * @return string
     */
    public function getDtEzmaxpricingStart()
    {
        return $this->container['dtEzmaxpricingStart'];
    }

    /**
     * Sets dtEzmaxpricingStart
     *
     * @param string $dtEzmaxpricingStart The start date of the Ezmaxpricing
     *
     * @return self
     */
    public function setDtEzmaxpricingStart($dtEzmaxpricingStart)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzmaxpricingStart)) {
            //throw new \InvalidArgumentException('non-nullable dtEzmaxpricingStart cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzmaxpricingStart'] = $dtEzmaxpricingStart;
        $this->container['dtEzmaxpricingStart'] = (is_null($dtEzmaxpricingStart) ? null : (string) $dtEzmaxpricingStart);

        return $this;
    }

    /**
     * Gets dtEzmaxpricingEnd
     *
     * @return string|null
     */
    public function getDtEzmaxpricingEnd()
    {
        return $this->container['dtEzmaxpricingEnd'];
    }

    /**
     * Sets dtEzmaxpricingEnd
     *
     * @param string|null $dtEzmaxpricingEnd The end date of the Ezmaxpricing
     *
     * @return self
     */
    public function setDtEzmaxpricingEnd($dtEzmaxpricingEnd)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzmaxpricingEnd)) {
            //throw new \InvalidArgumentException('non-nullable dtEzmaxpricingEnd cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzmaxpricingEnd'] = $dtEzmaxpricingEnd;
        $this->container['dtEzmaxpricingEnd'] = (is_null($dtEzmaxpricingEnd) ? null : (string) $dtEzmaxpricingEnd);

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


