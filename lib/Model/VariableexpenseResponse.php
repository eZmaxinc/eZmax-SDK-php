<?php
/**
 * VariableexpenseResponse
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
 * OpenAPI Generator version: 6.5.0
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
 * VariableexpenseResponse Class Doc Comment
 *
 * @category Class
 * @description A Variableexpense Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VariableexpenseResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'variableexpense-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiVariableexpenseID' => 'int',
        'sVariableexpenseCode' => 'string',
        'objVariableexpenseDescription' => '\eZmaxAPI\Model\MultilingualVariableexpenseDescription',
        'eVariableexpenseTaxable' => '\eZmaxAPI\Model\FieldEVariableexpenseTaxable',
        'bVariableexpenseIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiVariableexpenseID' => null,
        'sVariableexpenseCode' => null,
        'objVariableexpenseDescription' => null,
        'eVariableexpenseTaxable' => null,
        'bVariableexpenseIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiVariableexpenseID' => false,
		'sVariableexpenseCode' => false,
		'objVariableexpenseDescription' => false,
		'eVariableexpenseTaxable' => false,
		'bVariableexpenseIsactive' => false
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
        'pkiVariableexpenseID' => 'pkiVariableexpenseID',
        'sVariableexpenseCode' => 'sVariableexpenseCode',
        'objVariableexpenseDescription' => 'objVariableexpenseDescription',
        'eVariableexpenseTaxable' => 'eVariableexpenseTaxable',
        'bVariableexpenseIsactive' => 'bVariableexpenseIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiVariableexpenseID' => 'setPkiVariableexpenseID',
        'sVariableexpenseCode' => 'setSVariableexpenseCode',
        'objVariableexpenseDescription' => 'setObjVariableexpenseDescription',
        'eVariableexpenseTaxable' => 'setEVariableexpenseTaxable',
        'bVariableexpenseIsactive' => 'setBVariableexpenseIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiVariableexpenseID' => 'getPkiVariableexpenseID',
        'sVariableexpenseCode' => 'getSVariableexpenseCode',
        'objVariableexpenseDescription' => 'getObjVariableexpenseDescription',
        'eVariableexpenseTaxable' => 'getEVariableexpenseTaxable',
        'bVariableexpenseIsactive' => 'getBVariableexpenseIsactive'
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
        $this->setIfExists('pkiVariableexpenseID', $data ?? [], null);
        $this->setIfExists('sVariableexpenseCode', $data ?? [], null);
        $this->setIfExists('objVariableexpenseDescription', $data ?? [], null);
        $this->setIfExists('eVariableexpenseTaxable', $data ?? [], null);
        $this->setIfExists('bVariableexpenseIsactive', $data ?? [], null);
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

        if ($this->container['pkiVariableexpenseID'] === null) {
            $invalidProperties[] = "'pkiVariableexpenseID' can't be null";
        }
        if (($this->container['pkiVariableexpenseID'] > 255)) {
            $invalidProperties[] = "invalid value for 'pkiVariableexpenseID', must be smaller than or equal to 255.";
        }

        if (($this->container['pkiVariableexpenseID'] < 1)) {
            $invalidProperties[] = "invalid value for 'pkiVariableexpenseID', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sVariableexpenseCode']) && !preg_match("/^.{0,5}$/", $this->container['sVariableexpenseCode'])) {
            $invalidProperties[] = "invalid value for 'sVariableexpenseCode', must be conform to the pattern /^.{0,5}$/.";
        }

        if ($this->container['objVariableexpenseDescription'] === null) {
            $invalidProperties[] = "'objVariableexpenseDescription' can't be null";
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
     * Gets pkiVariableexpenseID
     *
     * @return int
     */
    public function getPkiVariableexpenseID()
    {
        return $this->container['pkiVariableexpenseID'];
    }

    /**
     * Sets pkiVariableexpenseID
     *
     * @param int $pkiVariableexpenseID The unique ID of the Variableexpense
     *
     * @return self
     */
    public function setPkiVariableexpenseID($pkiVariableexpenseID)
    {

        if (($pkiVariableexpenseID > 255)) {
            throw new \InvalidArgumentException('invalid value for $pkiVariableexpenseID when calling VariableexpenseResponse., must be smaller than or equal to 255.');
        }
        if (($pkiVariableexpenseID < 1)) {
            throw new \InvalidArgumentException('invalid value for $pkiVariableexpenseID when calling VariableexpenseResponse., must be bigger than or equal to 1.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiVariableexpenseID)) {
            //throw new \InvalidArgumentException('non-nullable pkiVariableexpenseID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiVariableexpenseID'] = $pkiVariableexpenseID;
        $this->container['pkiVariableexpenseID'] = (is_null($pkiVariableexpenseID) ? null : (int) $pkiVariableexpenseID);

        return $this;
    }

    /**
     * Gets sVariableexpenseCode
     *
     * @return string|null
     */
    public function getSVariableexpenseCode()
    {
        return $this->container['sVariableexpenseCode'];
    }

    /**
     * Sets sVariableexpenseCode
     *
     * @param string|null $sVariableexpenseCode The code of the Variableexpense
     *
     * @return self
     */
    public function setSVariableexpenseCode($sVariableexpenseCode)
    {

        if (!is_null($sVariableexpenseCode) && (!preg_match("/^.{0,5}$/", $sVariableexpenseCode))) {
            throw new \InvalidArgumentException("invalid value for \$sVariableexpenseCode when calling VariableexpenseResponse., must conform to the pattern /^.{0,5}$/.");
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sVariableexpenseCode)) {
            //throw new \InvalidArgumentException('non-nullable sVariableexpenseCode cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sVariableexpenseCode'] = $sVariableexpenseCode;
        $this->container['sVariableexpenseCode'] = (is_null($sVariableexpenseCode) ? null : (string) $sVariableexpenseCode);

        return $this;
    }

    /**
     * Gets objVariableexpenseDescription
     *
     * @return \eZmaxAPI\Model\MultilingualVariableexpenseDescription
     */
    public function getObjVariableexpenseDescription()
    {
        return $this->container['objVariableexpenseDescription'];
    }

    /**
     * Sets objVariableexpenseDescription
     *
     * @param \eZmaxAPI\Model\MultilingualVariableexpenseDescription $objVariableexpenseDescription objVariableexpenseDescription
     *
     * @return self
     */
    public function setObjVariableexpenseDescription($objVariableexpenseDescription)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objVariableexpenseDescription)) {
            //throw new \InvalidArgumentException('non-nullable objVariableexpenseDescription cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objVariableexpenseDescription'] = $objVariableexpenseDescription;
        $this->container['objVariableexpenseDescription'] = $objVariableexpenseDescription;

        return $this;
    }

    /**
     * Gets eVariableexpenseTaxable
     *
     * @return \eZmaxAPI\Model\FieldEVariableexpenseTaxable|null
     */
    public function getEVariableexpenseTaxable()
    {
        return $this->container['eVariableexpenseTaxable'];
    }

    /**
     * Sets eVariableexpenseTaxable
     *
     * @param \eZmaxAPI\Model\FieldEVariableexpenseTaxable|null $eVariableexpenseTaxable eVariableexpenseTaxable
     *
     * @return self
     */
    public function setEVariableexpenseTaxable($eVariableexpenseTaxable)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eVariableexpenseTaxable)) {
            //throw new \InvalidArgumentException('non-nullable eVariableexpenseTaxable cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eVariableexpenseTaxable'] = $eVariableexpenseTaxable;
        $this->container['eVariableexpenseTaxable'] = $eVariableexpenseTaxable;

        return $this;
    }

    /**
     * Gets bVariableexpenseIsactive
     *
     * @return bool|null
     */
    public function getBVariableexpenseIsactive()
    {
        return $this->container['bVariableexpenseIsactive'];
    }

    /**
     * Sets bVariableexpenseIsactive
     *
     * @param bool|null $bVariableexpenseIsactive Whether the variableexpense is active or not
     *
     * @return self
     */
    public function setBVariableexpenseIsactive($bVariableexpenseIsactive)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bVariableexpenseIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bVariableexpenseIsactive cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bVariableexpenseIsactive'] = $bVariableexpenseIsactive;
        $this->container['bVariableexpenseIsactive'] = (is_null($bVariableexpenseIsactive) ? null : (bool) $bVariableexpenseIsactive);

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


