<?php
/**
 * CommunicationexternalrecipientRequest
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
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
 * CommunicationexternalrecipientRequest Class Doc Comment
 *
 * @category Class
 * @description A Communicationexternalrecipient Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationexternalrecipientRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'communicationexternalrecipient-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCommunicationexternalrecipientID' => 'int',
        'sEmailAddress' => 'string',
        'sPhoneE164' => 'string',
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
        'sPhoneE164' => null,
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
		'sPhoneE164' => false,
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
        'sEmailAddress' => 'sEmailAddress',
        'sPhoneE164' => 'sPhoneE164',
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
        'sPhoneE164' => 'setSPhoneE164',
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
        'sPhoneE164' => 'getSPhoneE164',
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
        $this->setIfExists('sPhoneE164', $data ?? [], null);
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

//        if (!is_null($this->container['sPhoneE164']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164'])) {
        if (!is_null($this->container['sPhoneE164']) && !preg_match("/(*UTF8)^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164'])) {
            $invalidProperties[] = "invalid value for 'sPhoneE164', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
        }

//        if (!is_null($this->container['sCommunicationexternalrecipientName']) && !preg_match("/^.{0,50}$/", $this->container['sCommunicationexternalrecipientName'])) {
        if (!is_null($this->container['sCommunicationexternalrecipientName']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sCommunicationexternalrecipientName'])) {
            $invalidProperties[] = "invalid value for 'sCommunicationexternalrecipientName', must be conform to the pattern /^.{0,50}$/.";
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
     * @return int|null
     */
    public function getPkiCommunicationexternalrecipientID()
    {
        return $this->container['pkiCommunicationexternalrecipientID'];
    }

    /**
     * Sets pkiCommunicationexternalrecipientID
     *
     * @param int|null $pkiCommunicationexternalrecipientID The unique ID of the Communicationexternalrecipient
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
     * Gets sEmailAddress
     *
     * @return string|null
     */
    public function getSEmailAddress()
    {
        return is_null($this->container['sEmailAddress']) ? null : trim($this->container['sEmailAddress']);
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : trim((string) $sEmailAddress));

        return $this;
    }

    /**
     * Gets sPhoneE164
     *
     * @return string|null
     */
    public function getSPhoneE164()
    {
        return is_null($this->container['sPhoneE164']) ? null : trim($this->container['sPhoneE164']);
    }

    /**
     * Sets sPhoneE164
     *
     * @param string|null $sPhoneE164 A phone number in E.164 Format
     *
     * @return self
     */
    public function setSPhoneE164($sPhoneE164)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneE164)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneE164 cannot be null');
        //}

//        if ((!preg_match("/^\\+[1-9]\\d{1,14}$/", ObjectSerializer::toString($sPhoneE164)))) {
        if (!is_null($sPhoneE164) && (!preg_match("/(*UTF8)^\\+[1-9]\\d{1,14}$/", ObjectSerializer::toString($sPhoneE164)))) {
            throw new \InvalidArgumentException("invalid value for \$sPhoneE164 when calling CommunicationexternalrecipientRequest., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneE164'] = $sPhoneE164;
        $this->container['sPhoneE164'] = (is_null($sPhoneE164) ? null : trim((string) $sPhoneE164));

        return $this;
    }

    /**
     * Gets eCommunicationexternalrecipientType
     *
     * @return \eZmaxAPI\Model\FieldECommunicationexternalrecipientType|null
     */
    public function getECommunicationexternalrecipientType()
    {
        return $this->container['eCommunicationexternalrecipientType'];
    }

    /**
     * Sets eCommunicationexternalrecipientType
     *
     * @param \eZmaxAPI\Model\FieldECommunicationexternalrecipientType|null $eCommunicationexternalrecipientType eCommunicationexternalrecipientType
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
     * Gets sCommunicationexternalrecipientName
     *
     * @return string|null
     */
    public function getSCommunicationexternalrecipientName()
    {
        return is_null($this->container['sCommunicationexternalrecipientName']) ? null : trim($this->container['sCommunicationexternalrecipientName']);
    }

    /**
     * Sets sCommunicationexternalrecipientName
     *
     * @param string|null $sCommunicationexternalrecipientName The name of the Communicationexternalrecipient
     *
     * @return self
     */
    public function setSCommunicationexternalrecipientName($sCommunicationexternalrecipientName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCommunicationexternalrecipientName)) {
            //throw new \InvalidArgumentException('non-nullable sCommunicationexternalrecipientName cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sCommunicationexternalrecipientName)))) {
        if (!is_null($sCommunicationexternalrecipientName) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sCommunicationexternalrecipientName)))) {
            throw new \InvalidArgumentException("invalid value for \$sCommunicationexternalrecipientName when calling CommunicationexternalrecipientRequest., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCommunicationexternalrecipientName'] = $sCommunicationexternalrecipientName;
        $this->container['sCommunicationexternalrecipientName'] = (is_null($sCommunicationexternalrecipientName) ? null : trim((string) $sCommunicationexternalrecipientName));

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


