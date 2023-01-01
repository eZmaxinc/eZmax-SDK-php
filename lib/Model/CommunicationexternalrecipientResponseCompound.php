<?php
/**
 * CommunicationexternalrecipientResponseCompound
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
 * CommunicationexternalrecipientResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Communicationexternalrecipient Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationexternalrecipientResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'communicationexternalrecipient-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCommunicationexternalrecipientID' => 'int',
        'sEmailAddress' => 'string',
        'objPhoneSms' => '\eZmaxAPI\Model\PhoneResponseCompound',
        'eCommunicationexternalrecipientType' => '\eZmaxAPI\Model\FieldECommunicationexternalrecipientType',
        'sCommunicationexternalrecipientName' => 'string'
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
        'sEmailAddress' => null,
        'objPhoneSms' => null,
        'eCommunicationexternalrecipientType' => null,
        'sCommunicationexternalrecipientName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCommunicationexternalrecipientID' => false,
		'sEmailAddress' => false,
		'objPhoneSms' => false,
		'eCommunicationexternalrecipientType' => false,
		'sCommunicationexternalrecipientName' => false
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
        'pkiCommunicationexternalrecipientID' => 'pkiCommunicationexternalrecipientID',
        'sEmailAddress' => 'sEmailAddress',
        'objPhoneSms' => 'objPhoneSms',
        'eCommunicationexternalrecipientType' => 'eCommunicationexternalrecipientType',
        'sCommunicationexternalrecipientName' => 'sCommunicationexternalrecipientName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCommunicationexternalrecipientID' => 'setPkiCommunicationexternalrecipientID',
        'sEmailAddress' => 'setSEmailAddress',
        'objPhoneSms' => 'setObjPhoneSms',
        'eCommunicationexternalrecipientType' => 'setECommunicationexternalrecipientType',
        'sCommunicationexternalrecipientName' => 'setSCommunicationexternalrecipientName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCommunicationexternalrecipientID' => 'getPkiCommunicationexternalrecipientID',
        'sEmailAddress' => 'getSEmailAddress',
        'objPhoneSms' => 'getObjPhoneSms',
        'eCommunicationexternalrecipientType' => 'getECommunicationexternalrecipientType',
        'sCommunicationexternalrecipientName' => 'getSCommunicationexternalrecipientName'
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
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('objPhoneSms', $data ?? [], null);
        $this->setIfExists('eCommunicationexternalrecipientType', $data ?? [], null);
        $this->setIfExists('sCommunicationexternalrecipientName', $data ?? [], null);
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
        if ($this->container['sCommunicationexternalrecipientName'] === null) {
            $invalidProperties[] = "'sCommunicationexternalrecipientName' can't be null";
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

        //if (is_null($pkiCommunicationexternalrecipientID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCommunicationexternalrecipientID cannot be null');
        //}
        $this->container['pkiCommunicationexternalrecipientID'] = (is_null($pkiCommunicationexternalrecipientID) ? null : (int) $pkiCommunicationexternalrecipientID);

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string|null
     */
    public function getSEmailAddress()
    {
        return $this->container['sEmailAddress'];
    }

    /**
     * Sets sEmailAddress
     *
     * @param string|null $sEmailAddress The email address.
     *
     * @return self
     */
    public function setSEmailAddress($sEmailAddress)
    {

        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : (string) $sEmailAddress);

        return $this;
    }

    /**
     * Gets objPhoneSms
     *
     * @return \eZmaxAPI\Model\PhoneResponseCompound|null
     */
    public function getObjPhoneSms()
    {
        return $this->container['objPhoneSms'];
    }

    /**
     * Sets objPhoneSms
     *
     * @param \eZmaxAPI\Model\PhoneResponseCompound|null $objPhoneSms objPhoneSms
     *
     * @return self
     */
    public function setObjPhoneSms($objPhoneSms)
    {

        //if (is_null($objPhoneSms)) {
            //throw new \InvalidArgumentException('non-nullable objPhoneSms cannot be null');
        //}
        $this->container['objPhoneSms'] = $objPhoneSms;

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

        //if (is_null($eCommunicationexternalrecipientType)) {
            //throw new \InvalidArgumentException('non-nullable eCommunicationexternalrecipientType cannot be null');
        //}
        $this->container['eCommunicationexternalrecipientType'] = $eCommunicationexternalrecipientType;

        return $this;
    }

    /**
     * Gets sCommunicationexternalrecipientName
     *
     * @return string
     */
    public function getSCommunicationexternalrecipientName()
    {
        return $this->container['sCommunicationexternalrecipientName'];
    }

    /**
     * Sets sCommunicationexternalrecipientName
     *
     * @param string $sCommunicationexternalrecipientName The Name of the Communicationexternalrecipient
     *
     * @return self
     */
    public function setSCommunicationexternalrecipientName($sCommunicationexternalrecipientName)
    {

        //if (is_null($sCommunicationexternalrecipientName)) {
            //throw new \InvalidArgumentException('non-nullable sCommunicationexternalrecipientName cannot be null');
        //}
        $this->container['sCommunicationexternalrecipientName'] = (is_null($sCommunicationexternalrecipientName) ? null : (string) $sCommunicationexternalrecipientName);

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


