<?php
/**
 * CommunicationexternalrecipientResponse
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
 * CommunicationexternalrecipientResponse Class Doc Comment
 *
 * @category Class
 * @description A Communicationexternalrecipient Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationexternalrecipientResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'communicationexternalrecipient-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCommunicationexternalrecipientID' => 'int',
        'eCommunicationexternalrecipientType' => '\eZmaxAPI\Model\FieldECommunicationexternalrecipientType',
        'objDescriptionstatic' => '\eZmaxAPI\Model\DescriptionstaticResponseCompound',
        'objEmailstatic' => '\eZmaxAPI\Model\EmailstaticResponseCompound',
        'objPhonestatic' => '\eZmaxAPI\Model\PhonestaticResponseCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCommunicationexternalrecipientID' => null,
        'eCommunicationexternalrecipientType' => null,
        'objDescriptionstatic' => null,
        'objEmailstatic' => null,
        'objPhonestatic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCommunicationexternalrecipientID' => false,
		'eCommunicationexternalrecipientType' => false,
		'objDescriptionstatic' => false,
		'objEmailstatic' => false,
		'objPhonestatic' => false
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
        'pkiCommunicationexternalrecipientID' => 'pkiCommunicationexternalrecipientID',
        'eCommunicationexternalrecipientType' => 'eCommunicationexternalrecipientType',
        'objDescriptionstatic' => 'objDescriptionstatic',
        'objEmailstatic' => 'objEmailstatic',
        'objPhonestatic' => 'objPhonestatic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCommunicationexternalrecipientID' => 'setPkiCommunicationexternalrecipientID',
        'eCommunicationexternalrecipientType' => 'setECommunicationexternalrecipientType',
        'objDescriptionstatic' => 'setObjDescriptionstatic',
        'objEmailstatic' => 'setObjEmailstatic',
        'objPhonestatic' => 'setObjPhonestatic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCommunicationexternalrecipientID' => 'getPkiCommunicationexternalrecipientID',
        'eCommunicationexternalrecipientType' => 'getECommunicationexternalrecipientType',
        'objDescriptionstatic' => 'getObjDescriptionstatic',
        'objEmailstatic' => 'getObjEmailstatic',
        'objPhonestatic' => 'getObjPhonestatic'
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
        $this->setIfExists('pkiCommunicationexternalrecipientID', $data ?? [], null);
        $this->setIfExists('eCommunicationexternalrecipientType', $data ?? [], null);
        $this->setIfExists('objDescriptionstatic', $data ?? [], null);
        $this->setIfExists('objEmailstatic', $data ?? [], null);
        $this->setIfExists('objPhonestatic', $data ?? [], null);
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

        if ($this->container['pkiCommunicationexternalrecipientID'] === null) {
            $invalidProperties[] = "'pkiCommunicationexternalrecipientID' can't be null";
        }
        if ($this->container['eCommunicationexternalrecipientType'] === null) {
            $invalidProperties[] = "'eCommunicationexternalrecipientType' can't be null";
        }
        if ($this->container['objDescriptionstatic'] === null) {
            $invalidProperties[] = "'objDescriptionstatic' can't be null";
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
     * Gets pkiCommunicationexternalrecipientID
     *
     * @return int
     */
    public function getPkiCommunicationexternalrecipientID()
    {
        return $this->container['pkiCommunicationexternalrecipientID'];
    }

    /**
     * Sets pkiCommunicationexternalrecipientID
     *
     * @param int $pkiCommunicationexternalrecipientID The unique ID of the Communicationexternalrecipient
     *
     * @return self
     */
    public function setPkiCommunicationexternalrecipientID($pkiCommunicationexternalrecipientID)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCommunicationexternalrecipientID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCommunicationexternalrecipientID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCommunicationexternalrecipientID'] = $pkiCommunicationexternalrecipientID;
        $this->container['pkiCommunicationexternalrecipientID'] = (is_null($pkiCommunicationexternalrecipientID) ? null : (int) $pkiCommunicationexternalrecipientID);

        return $this;
    }

    /**
     * Gets eCommunicationexternalrecipientType
     *
     * @return \eZmaxAPI\Model\FieldECommunicationexternalrecipientType
     */
    public function getECommunicationexternalrecipientType()
    {
        return $this->container['eCommunicationexternalrecipientType'];
    }

    /**
     * Sets eCommunicationexternalrecipientType
     *
     * @param \eZmaxAPI\Model\FieldECommunicationexternalrecipientType $eCommunicationexternalrecipientType eCommunicationexternalrecipientType
     *
     * @return self
     */
    public function setECommunicationexternalrecipientType($eCommunicationexternalrecipientType)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCommunicationexternalrecipientType)) {
            //throw new \InvalidArgumentException('non-nullable eCommunicationexternalrecipientType cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCommunicationexternalrecipientType'] = $eCommunicationexternalrecipientType;
        $this->container['eCommunicationexternalrecipientType'] = $eCommunicationexternalrecipientType;

        return $this;
    }

    /**
     * Gets objDescriptionstatic
     *
     * @return \eZmaxAPI\Model\DescriptionstaticResponseCompound
     */
    public function getObjDescriptionstatic()
    {
        return $this->container['objDescriptionstatic'];
    }

    /**
     * Sets objDescriptionstatic
     *
     * @param \eZmaxAPI\Model\DescriptionstaticResponseCompound $objDescriptionstatic objDescriptionstatic
     *
     * @return self
     */
    public function setObjDescriptionstatic($objDescriptionstatic)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objDescriptionstatic)) {
            //throw new \InvalidArgumentException('non-nullable objDescriptionstatic cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objDescriptionstatic'] = $objDescriptionstatic;
        $this->container['objDescriptionstatic'] = $objDescriptionstatic;

        return $this;
    }

    /**
     * Gets objEmailstatic
     *
     * @return \eZmaxAPI\Model\EmailstaticResponseCompound|null
     */
    public function getObjEmailstatic()
    {
        return $this->container['objEmailstatic'];
    }

    /**
     * Sets objEmailstatic
     *
     * @param \eZmaxAPI\Model\EmailstaticResponseCompound|null $objEmailstatic objEmailstatic
     *
     * @return self
     */
    public function setObjEmailstatic($objEmailstatic)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objEmailstatic)) {
            //throw new \InvalidArgumentException('non-nullable objEmailstatic cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objEmailstatic'] = $objEmailstatic;
        $this->container['objEmailstatic'] = $objEmailstatic;

        return $this;
    }

    /**
     * Gets objPhonestatic
     *
     * @return \eZmaxAPI\Model\PhonestaticResponseCompound|null
     */
    public function getObjPhonestatic()
    {
        return $this->container['objPhonestatic'];
    }

    /**
     * Sets objPhonestatic
     *
     * @param \eZmaxAPI\Model\PhonestaticResponseCompound|null $objPhonestatic objPhonestatic
     *
     * @return self
     */
    public function setObjPhonestatic($objPhonestatic)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objPhonestatic)) {
            //throw new \InvalidArgumentException('non-nullable objPhonestatic cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objPhonestatic'] = $objPhonestatic;
        $this->container['objPhonestatic'] = $objPhonestatic;

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


