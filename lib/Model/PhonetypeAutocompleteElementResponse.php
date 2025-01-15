<?php
/**
 * PhonetypeAutocompleteElementResponse
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
 * Generator version: 7.10.0
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
 * PhonetypeAutocompleteElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Phonetype AutocompleteElement Response
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PhonetypeAutocompleteElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'phonetype-AutocompleteElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiPhonetypeID' => 'int',
        'sPhonetypeNameX' => 'string',
        'bPhonetypeIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiPhonetypeID' => null,
        'sPhonetypeNameX' => null,
        'bPhonetypeIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiPhonetypeID' => false,
		'sPhonetypeNameX' => false,
		'bPhonetypeIsactive' => false
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
        'pkiPhonetypeID' => 'pkiPhonetypeID',
        'sPhonetypeNameX' => 'sPhonetypeNameX',
        'bPhonetypeIsactive' => 'bPhonetypeIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiPhonetypeID' => 'setPkiPhonetypeID',
        'sPhonetypeNameX' => 'setSPhonetypeNameX',
        'bPhonetypeIsactive' => 'setBPhonetypeIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiPhonetypeID' => 'getPkiPhonetypeID',
        'sPhonetypeNameX' => 'getSPhonetypeNameX',
        'bPhonetypeIsactive' => 'getBPhonetypeIsactive'
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
        $this->setIfExists('pkiPhonetypeID', $data ?? [], null);
        $this->setIfExists('sPhonetypeNameX', $data ?? [], null);
        $this->setIfExists('bPhonetypeIsactive', $data ?? [], null);
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

        if ($this->container['pkiPhonetypeID'] === null) {
            $invalidProperties[] = "'pkiPhonetypeID' can't be null";
        }
        if (($this->container['pkiPhonetypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiPhonetypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sPhonetypeNameX'] === null) {
            $invalidProperties[] = "'sPhonetypeNameX' can't be null";
        }
	//if (!preg_match("/^.{0,20}$/", $this->container['sPhonetypeNameX'])) {
        if (!is_null($this->container['sPhonetypeNameX']) && !preg_match("/(*UTF8)^.{0,20}$/", $this->container['sPhonetypeNameX'])) {
            $invalidProperties[] = "invalid value for 'sPhonetypeNameX', must be conform to the pattern /^.{0,20}$/.";
        }

        if ($this->container['bPhonetypeIsactive'] === null) {
            $invalidProperties[] = "'bPhonetypeIsactive' can't be null";
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
     * Gets pkiPhonetypeID
     *
     * @return int
     */
    public function getPkiPhonetypeID()
    {
	//return $this->container['pkiPhonetypeID'];
        return $this->container['pkiPhonetypeID'];
    }

    /**
     * Sets pkiPhonetypeID
     *
     * @param int $pkiPhonetypeID The unique ID of the Phonetype.  Valid values:  |Value|Description| |-|-| |1|Office| |2|Home| |3|Mobile| |4|Fax| |5|Pager| |6|Toll Free|
     *
     * @return self
     */
    public function setPkiPhonetypeID($pkiPhonetypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiPhonetypeID)) {
            //throw new \InvalidArgumentException('non-nullable pkiPhonetypeID cannot be null');
        //}

	//if (($pkiPhonetypeID < 0)) {
        if (($pkiPhonetypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiPhonetypeID when calling PhonetypeAutocompleteElementResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiPhonetypeID)?'null':'"'.$pkiPhonetypeID.'"').' for pkiPhonetypeID when calling PhonetypeAutocompleteElementResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiPhonetypeID'] = $pkiPhonetypeID;
        $this->container['pkiPhonetypeID'] = (is_null($pkiPhonetypeID) ? null : (int) $pkiPhonetypeID);

        return $this;
    }

    /**
     * Gets sPhonetypeNameX
     *
     * @return string
     */
    public function getSPhonetypeNameX()
    {
	//return $this->container['sPhonetypeNameX'];
        return is_null($this->container['sPhonetypeNameX']) ? null : trim($this->container['sPhonetypeNameX']);
    }

    /**
     * Sets sPhonetypeNameX
     *
     * @param string $sPhonetypeNameX The name of the Phonetype in the language of the requester
     *
     * @return self
     */
    public function setSPhonetypeNameX($sPhonetypeNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhonetypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sPhonetypeNameX cannot be null');
        //}

	//if ((!preg_match("/^.{0,20}$/", ObjectSerializer::toString($sPhonetypeNameX)))) {
        if (!is_null($sPhonetypeNameX) && (!preg_match("/(*UTF8)^.{0,20}$/", ObjectSerializer::toString($sPhonetypeNameX)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sPhonetypeNameX when calling PhonetypeAutocompleteElementResponse., must conform to the pattern /^.{0,20}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sPhonetypeNameX)?'null':'"'.$sPhonetypeNameX.'"')." for sPhonetypeNameX when calling PhonetypeAutocompleteElementResponse., must conform to the pattern /^.{0,20}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhonetypeNameX'] = $sPhonetypeNameX;
        $this->container['sPhonetypeNameX'] = (is_null($sPhonetypeNameX) ? null : trim((string) $sPhonetypeNameX));

        return $this;
    }

    /**
     * Gets bPhonetypeIsactive
     *
     * @return bool
     */
    public function getBPhonetypeIsactive()
    {
	//return $this->container['bPhonetypeIsactive'];
        return $this->container['bPhonetypeIsactive'];
    }

    /**
     * Sets bPhonetypeIsactive
     *
     * @param bool $bPhonetypeIsactive Whether the Phonetype is active or not
     *
     * @return self
     */
    public function setBPhonetypeIsactive($bPhonetypeIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bPhonetypeIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bPhonetypeIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bPhonetypeIsactive'] = $bPhonetypeIsactive;
        $this->container['bPhonetypeIsactive'] = (is_null($bPhonetypeIsactive) ? null : (bool) $bPhonetypeIsactive);

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


