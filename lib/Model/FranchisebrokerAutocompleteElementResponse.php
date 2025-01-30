<?php
/**
 * FranchisebrokerAutocompleteElementResponse
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
 * Generator version: 7.11.0
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
 * FranchisebrokerAutocompleteElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Franchisebroker AutocompleteElement Response
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FranchisebrokerAutocompleteElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'franchisebroker-AutocompleteElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sFranchisebrokerName' => 'string',
        'pkiFranchisebrokerID' => 'int',
        'bFranchisebrokerIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sFranchisebrokerName' => null,
        'pkiFranchisebrokerID' => null,
        'bFranchisebrokerIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sFranchisebrokerName' => false,
		'pkiFranchisebrokerID' => false,
		'bFranchisebrokerIsactive' => false
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
        'sFranchisebrokerName' => 'sFranchisebrokerName',
        'pkiFranchisebrokerID' => 'pkiFranchisebrokerID',
        'bFranchisebrokerIsactive' => 'bFranchisebrokerIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sFranchisebrokerName' => 'setSFranchisebrokerName',
        'pkiFranchisebrokerID' => 'setPkiFranchisebrokerID',
        'bFranchisebrokerIsactive' => 'setBFranchisebrokerIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sFranchisebrokerName' => 'getSFranchisebrokerName',
        'pkiFranchisebrokerID' => 'getPkiFranchisebrokerID',
        'bFranchisebrokerIsactive' => 'getBFranchisebrokerIsactive'
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
        $this->setIfExists('sFranchisebrokerName', $data ?? [], null);
        $this->setIfExists('pkiFranchisebrokerID', $data ?? [], null);
        $this->setIfExists('bFranchisebrokerIsactive', $data ?? [], null);
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

        if ($this->container['sFranchisebrokerName'] === null) {
            $invalidProperties[] = "'sFranchisebrokerName' can't be null";
        }
        if ($this->container['pkiFranchisebrokerID'] === null) {
            $invalidProperties[] = "'pkiFranchisebrokerID' can't be null";
        }
        if (($this->container['pkiFranchisebrokerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiFranchisebrokerID', must be bigger than or equal to 0.";
        }

        if ($this->container['bFranchisebrokerIsactive'] === null) {
            $invalidProperties[] = "'bFranchisebrokerIsactive' can't be null";
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
     * Gets sFranchisebrokerName
     *
     * @return string
     */
    public function getSFranchisebrokerName()
    {
	//return $this->container['sFranchisebrokerName'];
        return is_null($this->container['sFranchisebrokerName']) ? null : trim($this->container['sFranchisebrokerName']);
    }

    /**
     * Sets sFranchisebrokerName
     *
     * @param string $sFranchisebrokerName The name of the Franchisebroker
     *
     * @return self
     */
    public function setSFranchisebrokerName($sFranchisebrokerName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sFranchisebrokerName)) {
            //throw new \InvalidArgumentException('non-nullable sFranchisebrokerName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sFranchisebrokerName'] = $sFranchisebrokerName;
        $this->container['sFranchisebrokerName'] = (is_null($sFranchisebrokerName) ? null : trim((string) $sFranchisebrokerName));

        return $this;
    }

    /**
     * Gets pkiFranchisebrokerID
     *
     * @return int
     */
    public function getPkiFranchisebrokerID()
    {
	//return $this->container['pkiFranchisebrokerID'];
        return $this->container['pkiFranchisebrokerID'];
    }

    /**
     * Sets pkiFranchisebrokerID
     *
     * @param int $pkiFranchisebrokerID The unique ID of the Franchisebroker
     *
     * @return self
     */
    public function setPkiFranchisebrokerID($pkiFranchisebrokerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiFranchisebrokerID)) {
            //throw new \InvalidArgumentException('non-nullable pkiFranchisebrokerID cannot be null');
        //}

	//if (($pkiFranchisebrokerID < 0)) {
        if (($pkiFranchisebrokerID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiFranchisebrokerID when calling FranchisebrokerAutocompleteElementResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiFranchisebrokerID)?'null':'"'.$pkiFranchisebrokerID.'"').' for pkiFranchisebrokerID when calling FranchisebrokerAutocompleteElementResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiFranchisebrokerID'] = $pkiFranchisebrokerID;
        $this->container['pkiFranchisebrokerID'] = (is_null($pkiFranchisebrokerID) ? null : (int) $pkiFranchisebrokerID);

        return $this;
    }

    /**
     * Gets bFranchisebrokerIsactive
     *
     * @return bool
     */
    public function getBFranchisebrokerIsactive()
    {
	//return $this->container['bFranchisebrokerIsactive'];
        return $this->container['bFranchisebrokerIsactive'];
    }

    /**
     * Sets bFranchisebrokerIsactive
     *
     * @param bool $bFranchisebrokerIsactive Whether the Franchisebroker is active or not
     *
     * @return self
     */
    public function setBFranchisebrokerIsactive($bFranchisebrokerIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bFranchisebrokerIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bFranchisebrokerIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bFranchisebrokerIsactive'] = $bFranchisebrokerIsactive;
        $this->container['bFranchisebrokerIsactive'] = (is_null($bFranchisebrokerIsactive) ? null : (bool) $bFranchisebrokerIsactive);

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


