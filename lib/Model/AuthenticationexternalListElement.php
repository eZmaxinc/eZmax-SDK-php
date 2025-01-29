<?php
/**
 * AuthenticationexternalListElement
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
 * AuthenticationexternalListElement Class Doc Comment
 *
 * @category Class
 * @description A Authenticationexternal List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuthenticationexternalListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'authenticationexternal-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiAuthenticationexternalID' => 'int',
        'sAuthenticationexternalDescription' => 'string',
        'eAuthenticationexternalType' => '\eZmaxAPI\Model\FieldEAuthenticationexternalType',
        'bAuthenticationexternalConnected' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiAuthenticationexternalID' => null,
        'sAuthenticationexternalDescription' => null,
        'eAuthenticationexternalType' => null,
        'bAuthenticationexternalConnected' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiAuthenticationexternalID' => false,
		'sAuthenticationexternalDescription' => false,
		'eAuthenticationexternalType' => false,
		'bAuthenticationexternalConnected' => false
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
        'pkiAuthenticationexternalID' => 'pkiAuthenticationexternalID',
        'sAuthenticationexternalDescription' => 'sAuthenticationexternalDescription',
        'eAuthenticationexternalType' => 'eAuthenticationexternalType',
        'bAuthenticationexternalConnected' => 'bAuthenticationexternalConnected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiAuthenticationexternalID' => 'setPkiAuthenticationexternalID',
        'sAuthenticationexternalDescription' => 'setSAuthenticationexternalDescription',
        'eAuthenticationexternalType' => 'setEAuthenticationexternalType',
        'bAuthenticationexternalConnected' => 'setBAuthenticationexternalConnected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiAuthenticationexternalID' => 'getPkiAuthenticationexternalID',
        'sAuthenticationexternalDescription' => 'getSAuthenticationexternalDescription',
        'eAuthenticationexternalType' => 'getEAuthenticationexternalType',
        'bAuthenticationexternalConnected' => 'getBAuthenticationexternalConnected'
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
        $this->setIfExists('pkiAuthenticationexternalID', $data ?? [], null);
        $this->setIfExists('sAuthenticationexternalDescription', $data ?? [], null);
        $this->setIfExists('eAuthenticationexternalType', $data ?? [], null);
        $this->setIfExists('bAuthenticationexternalConnected', $data ?? [], null);
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

        if ($this->container['pkiAuthenticationexternalID'] === null) {
            $invalidProperties[] = "'pkiAuthenticationexternalID' can't be null";
        }
        if (($this->container['pkiAuthenticationexternalID'] > 255)) {
            $invalidProperties[] = "invalid value for 'pkiAuthenticationexternalID', must be smaller than or equal to 255.";
        }

        if (($this->container['pkiAuthenticationexternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiAuthenticationexternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['sAuthenticationexternalDescription'] === null) {
            $invalidProperties[] = "'sAuthenticationexternalDescription' can't be null";
        }
	//if (!preg_match("/^.{0,50}$/", $this->container['sAuthenticationexternalDescription'])) {
        if (!is_null($this->container['sAuthenticationexternalDescription']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sAuthenticationexternalDescription'])) {
            $invalidProperties[] = "invalid value for 'sAuthenticationexternalDescription', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['eAuthenticationexternalType'] === null) {
            $invalidProperties[] = "'eAuthenticationexternalType' can't be null";
        }
        if ($this->container['bAuthenticationexternalConnected'] === null) {
            $invalidProperties[] = "'bAuthenticationexternalConnected' can't be null";
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
     * Gets pkiAuthenticationexternalID
     *
     * @return int
     */
    public function getPkiAuthenticationexternalID()
    {
	//return $this->container['pkiAuthenticationexternalID'];
        return $this->container['pkiAuthenticationexternalID'];
    }

    /**
     * Sets pkiAuthenticationexternalID
     *
     * @param int $pkiAuthenticationexternalID The unique ID of the Authenticationexternal
     *
     * @return self
     */
    public function setPkiAuthenticationexternalID($pkiAuthenticationexternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiAuthenticationexternalID)) {
            //throw new \InvalidArgumentException('non-nullable pkiAuthenticationexternalID cannot be null');
        //}

	//if (($pkiAuthenticationexternalID > 255)) {
        if (($pkiAuthenticationexternalID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiAuthenticationexternalID when calling AuthenticationexternalListElement., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiAuthenticationexternalID)?'null':'"'.$pkiAuthenticationexternalID.'"').' for pkiAuthenticationexternalID when calling AuthenticationexternalListElement., must be smaller than or equal to 255.');
        }
	//if (($pkiAuthenticationexternalID < 0)) {
        if (($pkiAuthenticationexternalID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiAuthenticationexternalID when calling AuthenticationexternalListElement., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiAuthenticationexternalID)?'null':'"'.$pkiAuthenticationexternalID.'"').' for pkiAuthenticationexternalID when calling AuthenticationexternalListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiAuthenticationexternalID'] = $pkiAuthenticationexternalID;
        $this->container['pkiAuthenticationexternalID'] = (is_null($pkiAuthenticationexternalID) ? null : (int) $pkiAuthenticationexternalID);

        return $this;
    }

    /**
     * Gets sAuthenticationexternalDescription
     *
     * @return string
     */
    public function getSAuthenticationexternalDescription()
    {
	//return $this->container['sAuthenticationexternalDescription'];
        return is_null($this->container['sAuthenticationexternalDescription']) ? null : trim($this->container['sAuthenticationexternalDescription']);
    }

    /**
     * Sets sAuthenticationexternalDescription
     *
     * @param string $sAuthenticationexternalDescription The description of the Authenticationexternal
     *
     * @return self
     */
    public function setSAuthenticationexternalDescription($sAuthenticationexternalDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAuthenticationexternalDescription)) {
            //throw new \InvalidArgumentException('non-nullable sAuthenticationexternalDescription cannot be null');
        //}

	//if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sAuthenticationexternalDescription)))) {
        if (!is_null($sAuthenticationexternalDescription) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sAuthenticationexternalDescription)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sAuthenticationexternalDescription when calling AuthenticationexternalListElement., must conform to the pattern /^.{0,50}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sAuthenticationexternalDescription)?'null':'"'.$sAuthenticationexternalDescription.'"')." for sAuthenticationexternalDescription when calling AuthenticationexternalListElement., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAuthenticationexternalDescription'] = $sAuthenticationexternalDescription;
        $this->container['sAuthenticationexternalDescription'] = (is_null($sAuthenticationexternalDescription) ? null : trim((string) $sAuthenticationexternalDescription));

        return $this;
    }

    /**
     * Gets eAuthenticationexternalType
     *
     * @return \eZmaxAPI\Model\FieldEAuthenticationexternalType
     */
    public function getEAuthenticationexternalType()
    {
	//return $this->container['eAuthenticationexternalType'];
        return $this->container['eAuthenticationexternalType'];
    }

    /**
     * Sets eAuthenticationexternalType
     *
     * @param \eZmaxAPI\Model\FieldEAuthenticationexternalType $eAuthenticationexternalType eAuthenticationexternalType
     *
     * @return self
     */
    public function setEAuthenticationexternalType($eAuthenticationexternalType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eAuthenticationexternalType)) {
            //throw new \InvalidArgumentException('non-nullable eAuthenticationexternalType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eAuthenticationexternalType'] = $eAuthenticationexternalType;
        $this->container['eAuthenticationexternalType'] = $eAuthenticationexternalType;

        return $this;
    }

    /**
     * Gets bAuthenticationexternalConnected
     *
     * @return bool
     */
    public function getBAuthenticationexternalConnected()
    {
	//return $this->container['bAuthenticationexternalConnected'];
        return $this->container['bAuthenticationexternalConnected'];
    }

    /**
     * Sets bAuthenticationexternalConnected
     *
     * @param bool $bAuthenticationexternalConnected Whether the Authenticationexternal has been connected or not
     *
     * @return self
     */
    public function setBAuthenticationexternalConnected($bAuthenticationexternalConnected)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bAuthenticationexternalConnected)) {
            //throw new \InvalidArgumentException('non-nullable bAuthenticationexternalConnected cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bAuthenticationexternalConnected'] = $bAuthenticationexternalConnected;
        $this->container['bAuthenticationexternalConnected'] = (is_null($bAuthenticationexternalConnected) ? null : (bool) $bAuthenticationexternalConnected);

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


