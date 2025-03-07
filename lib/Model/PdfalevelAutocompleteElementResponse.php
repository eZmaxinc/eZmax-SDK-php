<?php
/**
 * PdfalevelAutocompleteElementResponse
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
 * PdfalevelAutocompleteElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Pdfalevel AutocompleteElement Response
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PdfalevelAutocompleteElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pdfalevel-AutocompleteElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiPdfalevelID' => 'int',
        'sPdfalevelName' => 'string',
        'bPdfalevelIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiPdfalevelID' => null,
        'sPdfalevelName' => null,
        'bPdfalevelIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiPdfalevelID' => false,
		'sPdfalevelName' => false,
		'bPdfalevelIsactive' => false
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
        'pkiPdfalevelID' => 'pkiPdfalevelID',
        'sPdfalevelName' => 'sPdfalevelName',
        'bPdfalevelIsactive' => 'bPdfalevelIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiPdfalevelID' => 'setPkiPdfalevelID',
        'sPdfalevelName' => 'setSPdfalevelName',
        'bPdfalevelIsactive' => 'setBPdfalevelIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiPdfalevelID' => 'getPkiPdfalevelID',
        'sPdfalevelName' => 'getSPdfalevelName',
        'bPdfalevelIsactive' => 'getBPdfalevelIsactive'
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
        $this->setIfExists('pkiPdfalevelID', $data ?? [], null);
        $this->setIfExists('sPdfalevelName', $data ?? [], null);
        $this->setIfExists('bPdfalevelIsactive', $data ?? [], null);
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

        if ($this->container['pkiPdfalevelID'] === null) {
            $invalidProperties[] = "'pkiPdfalevelID' can't be null";
        }
        if (($this->container['pkiPdfalevelID'] > 255)) {
            $invalidProperties[] = "invalid value for 'pkiPdfalevelID', must be smaller than or equal to 255.";
        }

        if (($this->container['pkiPdfalevelID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiPdfalevelID', must be bigger than or equal to 0.";
        }

        if ($this->container['sPdfalevelName'] === null) {
            $invalidProperties[] = "'sPdfalevelName' can't be null";
        }
	//if (!preg_match("/^.{0,15}$/", $this->container['sPdfalevelName'])) {
        if (!is_null($this->container['sPdfalevelName']) && !preg_match("/(*UTF8)^.{0,15}$/", $this->container['sPdfalevelName'])) {
            $invalidProperties[] = "invalid value for 'sPdfalevelName', must be conform to the pattern /^.{0,15}$/.";
        }

        if ($this->container['bPdfalevelIsactive'] === null) {
            $invalidProperties[] = "'bPdfalevelIsactive' can't be null";
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
     * Gets pkiPdfalevelID
     *
     * @return int
     */
    public function getPkiPdfalevelID()
    {
	//return $this->container['pkiPdfalevelID'];
        return $this->container['pkiPdfalevelID'];
    }

    /**
     * Sets pkiPdfalevelID
     *
     * @param int $pkiPdfalevelID The unique ID of the Pdfalevel
     *
     * @return self
     */
    public function setPkiPdfalevelID($pkiPdfalevelID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiPdfalevelID)) {
            //throw new \InvalidArgumentException('non-nullable pkiPdfalevelID cannot be null');
        //}

	//if (($pkiPdfalevelID > 255)) {
        if (($pkiPdfalevelID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiPdfalevelID when calling PdfalevelAutocompleteElementResponse., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiPdfalevelID)?'null':'"'.$pkiPdfalevelID.'"').' for pkiPdfalevelID when calling PdfalevelAutocompleteElementResponse., must be smaller than or equal to 255.');
        }
	//if (($pkiPdfalevelID < 0)) {
        if (($pkiPdfalevelID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiPdfalevelID when calling PdfalevelAutocompleteElementResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiPdfalevelID)?'null':'"'.$pkiPdfalevelID.'"').' for pkiPdfalevelID when calling PdfalevelAutocompleteElementResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiPdfalevelID'] = $pkiPdfalevelID;
        $this->container['pkiPdfalevelID'] = (is_null($pkiPdfalevelID) ? null : (int) $pkiPdfalevelID);

        return $this;
    }

    /**
     * Gets sPdfalevelName
     *
     * @return string
     */
    public function getSPdfalevelName()
    {
	//return $this->container['sPdfalevelName'];
        return is_null($this->container['sPdfalevelName']) ? null : trim($this->container['sPdfalevelName']);
    }

    /**
     * Sets sPdfalevelName
     *
     * @param string $sPdfalevelName The name of the Pdfalevel
     *
     * @return self
     */
    public function setSPdfalevelName($sPdfalevelName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPdfalevelName)) {
            //throw new \InvalidArgumentException('non-nullable sPdfalevelName cannot be null');
        //}

	//if ((!preg_match("/^.{0,15}$/", ObjectSerializer::toString($sPdfalevelName)))) {
        if (!is_null($sPdfalevelName) && (!preg_match("/(*UTF8)^.{0,15}$/", ObjectSerializer::toString($sPdfalevelName)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sPdfalevelName when calling PdfalevelAutocompleteElementResponse., must conform to the pattern /^.{0,15}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sPdfalevelName)?'null':'"'.$sPdfalevelName.'"')." for sPdfalevelName when calling PdfalevelAutocompleteElementResponse., must conform to the pattern /^.{0,15}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPdfalevelName'] = $sPdfalevelName;
        $this->container['sPdfalevelName'] = (is_null($sPdfalevelName) ? null : trim((string) $sPdfalevelName));

        return $this;
    }

    /**
     * Gets bPdfalevelIsactive
     *
     * @return bool
     */
    public function getBPdfalevelIsactive()
    {
	//return $this->container['bPdfalevelIsactive'];
        return $this->container['bPdfalevelIsactive'];
    }

    /**
     * Sets bPdfalevelIsactive
     *
     * @param bool $bPdfalevelIsactive Whether the Pdfalevel is active or not
     *
     * @return self
     */
    public function setBPdfalevelIsactive($bPdfalevelIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bPdfalevelIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bPdfalevelIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bPdfalevelIsactive'] = $bPdfalevelIsactive;
        $this->container['bPdfalevelIsactive'] = (is_null($bPdfalevelIsactive) ? null : (bool) $bPdfalevelIsactive);

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


