<?php
/**
 * PhonestaticResponseCompound
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
 * PhonestaticResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Phonestatic Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PhonestaticResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'phonestatic-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiPhonestaticID' => 'int',
        'sPhonestaticE164' => 'string',
        'sPhonestaticExtension' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiPhonestaticID' => null,
        'sPhonestaticE164' => null,
        'sPhonestaticExtension' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiPhonestaticID' => false,
		'sPhonestaticE164' => false,
		'sPhonestaticExtension' => false
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
        'pkiPhonestaticID' => 'pkiPhonestaticID',
        'sPhonestaticE164' => 'sPhonestaticE164',
        'sPhonestaticExtension' => 'sPhonestaticExtension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiPhonestaticID' => 'setPkiPhonestaticID',
        'sPhonestaticE164' => 'setSPhonestaticE164',
        'sPhonestaticExtension' => 'setSPhonestaticExtension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiPhonestaticID' => 'getPkiPhonestaticID',
        'sPhonestaticE164' => 'getSPhonestaticE164',
        'sPhonestaticExtension' => 'getSPhonestaticExtension'
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
        $this->setIfExists('pkiPhonestaticID', $data ?? [], null);
        $this->setIfExists('sPhonestaticE164', $data ?? [], null);
        $this->setIfExists('sPhonestaticExtension', $data ?? [], null);
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

        if ($this->container['pkiPhonestaticID'] === null) {
            $invalidProperties[] = "'pkiPhonestaticID' can't be null";
        }
        if (($this->container['pkiPhonestaticID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiPhonestaticID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sPhonestaticE164']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['sPhonestaticE164'])) {
            $invalidProperties[] = "invalid value for 'sPhonestaticE164', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
        }

        if (!is_null($this->container['sPhonestaticExtension']) && !preg_match("/^\\d/", $this->container['sPhonestaticExtension'])) {
            $invalidProperties[] = "invalid value for 'sPhonestaticExtension', must be conform to the pattern /^\\d/.";
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
     * Gets pkiPhonestaticID
     *
     * @return int
     */
    public function getPkiPhonestaticID()
    {
        return $this->container['pkiPhonestaticID'];
    }

    /**
     * Sets pkiPhonestaticID
     *
     * @param int $pkiPhonestaticID The unique ID of the Phone.
     *
     * @return self
     */
    public function setPkiPhonestaticID($pkiPhonestaticID)
    {

        if (($pkiPhonestaticID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiPhonestaticID when calling PhonestaticResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiPhonestaticID)) {
            //throw new \InvalidArgumentException('non-nullable pkiPhonestaticID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiPhonestaticID'] = $pkiPhonestaticID;
        $this->container['pkiPhonestaticID'] = (is_null($pkiPhonestaticID) ? null : (int) $pkiPhonestaticID);

        return $this;
    }

    /**
     * Gets sPhonestaticE164
     *
     * @return string|null
     */
    public function getSPhonestaticE164()
    {
        return $this->container['sPhonestaticE164'];
    }

    /**
     * Sets sPhonestaticE164
     *
     * @param string|null $sPhonestaticE164 A phone number in E.164 Format
     *
     * @return self
     */
    public function setSPhonestaticE164($sPhonestaticE164)
    {

        if (!is_null($sPhonestaticE164) && (!preg_match("/^\\+[1-9]\\d{1,14}$/", $sPhonestaticE164))) {
            throw new \InvalidArgumentException("invalid value for \$sPhonestaticE164 when calling PhonestaticResponseCompound., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhonestaticE164)) {
            //throw new \InvalidArgumentException('non-nullable sPhonestaticE164 cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhonestaticE164'] = $sPhonestaticE164;
        $this->container['sPhonestaticE164'] = (is_null($sPhonestaticE164) ? null : (string) $sPhonestaticE164);

        return $this;
    }

    /**
     * Gets sPhonestaticExtension
     *
     * @return string|null
     */
    public function getSPhonestaticExtension()
    {
        return $this->container['sPhonestaticExtension'];
    }

    /**
     * Sets sPhonestaticExtension
     *
     * @param string|null $sPhonestaticExtension The extension of the phone number.
     *
     * @return self
     */
    public function setSPhonestaticExtension($sPhonestaticExtension)
    {

        if (!is_null($sPhonestaticExtension) && (!preg_match("/^\\d/", $sPhonestaticExtension))) {
            throw new \InvalidArgumentException("invalid value for \$sPhonestaticExtension when calling PhonestaticResponseCompound., must conform to the pattern /^\\d/.");
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhonestaticExtension)) {
            //throw new \InvalidArgumentException('non-nullable sPhonestaticExtension cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhonestaticExtension'] = $sPhonestaticExtension;
        $this->container['sPhonestaticExtension'] = (is_null($sPhonestaticExtension) ? null : (string) $sPhonestaticExtension);

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


