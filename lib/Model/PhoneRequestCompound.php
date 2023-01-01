<?php
/**
 * PhoneRequestCompound
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
 * PhoneRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Phone Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PhoneRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'phone-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiPhonetypeID' => 'int',
        'ePhoneType' => '\eZmaxAPI\Model\FieldEPhoneType',
        'sPhoneRegion' => 'string',
        'sPhoneExchange' => 'string',
        'sPhoneNumber' => 'string',
        'sPhoneInternational' => 'string',
        'sPhoneExtension' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiPhonetypeID' => null,
        'ePhoneType' => null,
        'sPhoneRegion' => null,
        'sPhoneExchange' => null,
        'sPhoneNumber' => null,
        'sPhoneInternational' => null,
        'sPhoneExtension' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiPhonetypeID' => false,
		'ePhoneType' => false,
		'sPhoneRegion' => false,
		'sPhoneExchange' => false,
		'sPhoneNumber' => false,
		'sPhoneInternational' => false,
		'sPhoneExtension' => false
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
        'fkiPhonetypeID' => 'fkiPhonetypeID',
        'ePhoneType' => 'ePhoneType',
        'sPhoneRegion' => 'sPhoneRegion',
        'sPhoneExchange' => 'sPhoneExchange',
        'sPhoneNumber' => 'sPhoneNumber',
        'sPhoneInternational' => 'sPhoneInternational',
        'sPhoneExtension' => 'sPhoneExtension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiPhonetypeID' => 'setFkiPhonetypeID',
        'ePhoneType' => 'setEPhoneType',
        'sPhoneRegion' => 'setSPhoneRegion',
        'sPhoneExchange' => 'setSPhoneExchange',
        'sPhoneNumber' => 'setSPhoneNumber',
        'sPhoneInternational' => 'setSPhoneInternational',
        'sPhoneExtension' => 'setSPhoneExtension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiPhonetypeID' => 'getFkiPhonetypeID',
        'ePhoneType' => 'getEPhoneType',
        'sPhoneRegion' => 'getSPhoneRegion',
        'sPhoneExchange' => 'getSPhoneExchange',
        'sPhoneNumber' => 'getSPhoneNumber',
        'sPhoneInternational' => 'getSPhoneInternational',
        'sPhoneExtension' => 'getSPhoneExtension'
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
        $this->setIfExists('fkiPhonetypeID', $data ?? [], null);
        $this->setIfExists('ePhoneType', $data ?? [], null);
        $this->setIfExists('sPhoneRegion', $data ?? [], null);
        $this->setIfExists('sPhoneExchange', $data ?? [], null);
        $this->setIfExists('sPhoneNumber', $data ?? [], null);
        $this->setIfExists('sPhoneInternational', $data ?? [], null);
        $this->setIfExists('sPhoneExtension', $data ?? [], null);
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

        if ($this->container['fkiPhonetypeID'] === null) {
            $invalidProperties[] = "'fkiPhonetypeID' can't be null";
        }
        if (($this->container['fkiPhonetypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiPhonetypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['ePhoneType'] === null) {
            $invalidProperties[] = "'ePhoneType' can't be null";
        }
        if (!is_null($this->container['sPhoneInternational']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneInternational'])) {
            $invalidProperties[] = "invalid value for 'sPhoneInternational', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
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
     * Gets fkiPhonetypeID
     *
     * @return int
     */
    public function getFkiPhonetypeID()
    {
        return $this->container['fkiPhonetypeID'];
    }

    /**
     * Sets fkiPhonetypeID
     *
     * @param int $fkiPhonetypeID The unique ID of the Phonetype.  Valid values:  |Value|Description| |-|-| |1|Office| |2|Home| |3|Mobile| |4|Fax| |5|Pager| |6|Toll Free|
     *
     * @return self
     */
    public function setFkiPhonetypeID($fkiPhonetypeID)
    {

        if (($fkiPhonetypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiPhonetypeID when calling PhoneRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiPhonetypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiPhonetypeID cannot be null');
        //}
        $this->container['fkiPhonetypeID'] = (is_null($fkiPhonetypeID) ? null : (int) $fkiPhonetypeID);

        return $this;
    }

    /**
     * Gets ePhoneType
     *
     * @return \eZmaxAPI\Model\FieldEPhoneType
     */
    public function getEPhoneType()
    {
        return $this->container['ePhoneType'];
    }

    /**
     * Sets ePhoneType
     *
     * @param \eZmaxAPI\Model\FieldEPhoneType $ePhoneType ePhoneType
     *
     * @return self
     */
    public function setEPhoneType($ePhoneType)
    {

        //if (is_null($ePhoneType)) {
            //throw new \InvalidArgumentException('non-nullable ePhoneType cannot be null');
        //}
        $this->container['ePhoneType'] = $ePhoneType;

        return $this;
    }

    /**
     * Gets sPhoneRegion
     *
     * @return string|null
     */
    public function getSPhoneRegion()
    {
        return $this->container['sPhoneRegion'];
    }

    /**
     * Sets sPhoneRegion
     *
     * @param string|null $sPhoneRegion The region of the phone number. (For a North America Number only)  The region is the \"514\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneRegion($sPhoneRegion)
    {

        //if (is_null($sPhoneRegion)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneRegion cannot be null');
        //}
        $this->container['sPhoneRegion'] = (is_null($sPhoneRegion) ? null : (string) $sPhoneRegion);

        return $this;
    }

    /**
     * Gets sPhoneExchange
     *
     * @return string|null
     */
    public function getSPhoneExchange()
    {
        return $this->container['sPhoneExchange'];
    }

    /**
     * Sets sPhoneExchange
     *
     * @param string|null $sPhoneExchange The exchange of the phone number. (For a North America Number only)  The exchange is the \"990\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneExchange($sPhoneExchange)
    {

        //if (is_null($sPhoneExchange)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneExchange cannot be null');
        //}
        $this->container['sPhoneExchange'] = (is_null($sPhoneExchange) ? null : (string) $sPhoneExchange);

        return $this;
    }

    /**
     * Gets sPhoneNumber
     *
     * @return string|null
     */
    public function getSPhoneNumber()
    {
        return $this->container['sPhoneNumber'];
    }

    /**
     * Sets sPhoneNumber
     *
     * @param string|null $sPhoneNumber The number of the phone number. (For a North America Number only)  The number is the \"1516\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneNumber($sPhoneNumber)
    {

        //if (is_null($sPhoneNumber)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneNumber cannot be null');
        //}
        $this->container['sPhoneNumber'] = (is_null($sPhoneNumber) ? null : (string) $sPhoneNumber);

        return $this;
    }

    /**
     * Gets sPhoneInternational
     *
     * @return string|null
     */
    public function getSPhoneInternational()
    {
        return $this->container['sPhoneInternational'];
    }

    /**
     * Sets sPhoneInternational
     *
     * @param string|null $sPhoneInternational A phone number in E.164 Format
     *
     * @return self
     */
    public function setSPhoneInternational($sPhoneInternational)
    {

        if (!is_null($sPhoneInternational) && (!preg_match("/^\\+[1-9]\\d{1,14}$/", $sPhoneInternational))) {
            throw new \InvalidArgumentException("invalid value for \$sPhoneInternational when calling PhoneRequestCompound., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }


        //if (is_null($sPhoneInternational)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneInternational cannot be null');
        //}
        $this->container['sPhoneInternational'] = (is_null($sPhoneInternational) ? null : (string) $sPhoneInternational);

        return $this;
    }

    /**
     * Gets sPhoneExtension
     *
     * @return string|null
     */
    public function getSPhoneExtension()
    {
        return $this->container['sPhoneExtension'];
    }

    /**
     * Sets sPhoneExtension
     *
     * @param string|null $sPhoneExtension The extension of the phone number.  The extension is the \"123\" section in this sample phone number: (514) 990-1516 x123.  It can also be used with international phone numbers
     *
     * @return self
     */
    public function setSPhoneExtension($sPhoneExtension)
    {

        //if (is_null($sPhoneExtension)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneExtension cannot be null');
        //}
        $this->container['sPhoneExtension'] = (is_null($sPhoneExtension) ? null : (string) $sPhoneExtension);

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


