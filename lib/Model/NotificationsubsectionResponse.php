<?php
/**
 * NotificationsubsectionResponse
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
 * NotificationsubsectionResponse Class Doc Comment
 *
 * @category Class
 * @description A Notificationsubsection Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NotificationsubsectionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'notificationsubsection-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiNotificationsubsectionID' => 'int',
        'fkiNotificationsectionID' => 'int',
        'objNotificationsubsectionName' => '\eZmaxAPI\Model\MultilingualNotificationsubsectionName',
        'sNotificationsectionNameX' => 'string',
        'sNotificationsubsectionNameX' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiNotificationsubsectionID' => null,
        'fkiNotificationsectionID' => null,
        'objNotificationsubsectionName' => null,
        'sNotificationsectionNameX' => null,
        'sNotificationsubsectionNameX' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiNotificationsubsectionID' => false,
		'fkiNotificationsectionID' => false,
		'objNotificationsubsectionName' => false,
		'sNotificationsectionNameX' => false,
		'sNotificationsubsectionNameX' => false
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
        'pkiNotificationsubsectionID' => 'pkiNotificationsubsectionID',
        'fkiNotificationsectionID' => 'fkiNotificationsectionID',
        'objNotificationsubsectionName' => 'objNotificationsubsectionName',
        'sNotificationsectionNameX' => 'sNotificationsectionNameX',
        'sNotificationsubsectionNameX' => 'sNotificationsubsectionNameX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiNotificationsubsectionID' => 'setPkiNotificationsubsectionID',
        'fkiNotificationsectionID' => 'setFkiNotificationsectionID',
        'objNotificationsubsectionName' => 'setObjNotificationsubsectionName',
        'sNotificationsectionNameX' => 'setSNotificationsectionNameX',
        'sNotificationsubsectionNameX' => 'setSNotificationsubsectionNameX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiNotificationsubsectionID' => 'getPkiNotificationsubsectionID',
        'fkiNotificationsectionID' => 'getFkiNotificationsectionID',
        'objNotificationsubsectionName' => 'getObjNotificationsubsectionName',
        'sNotificationsectionNameX' => 'getSNotificationsectionNameX',
        'sNotificationsubsectionNameX' => 'getSNotificationsubsectionNameX'
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
        $this->setIfExists('pkiNotificationsubsectionID', $data ?? [], null);
        $this->setIfExists('fkiNotificationsectionID', $data ?? [], null);
        $this->setIfExists('objNotificationsubsectionName', $data ?? [], null);
        $this->setIfExists('sNotificationsectionNameX', $data ?? [], null);
        $this->setIfExists('sNotificationsubsectionNameX', $data ?? [], null);
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

        if ($this->container['pkiNotificationsubsectionID'] === null) {
            $invalidProperties[] = "'pkiNotificationsubsectionID' can't be null";
        }
        if (($this->container['pkiNotificationsubsectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiNotificationsubsectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiNotificationsectionID'] === null) {
            $invalidProperties[] = "'fkiNotificationsectionID' can't be null";
        }
        if (($this->container['fkiNotificationsectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiNotificationsectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['sNotificationsubsectionNameX'] === null) {
            $invalidProperties[] = "'sNotificationsubsectionNameX' can't be null";
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
     * Gets pkiNotificationsubsectionID
     *
     * @return int
     */
    public function getPkiNotificationsubsectionID()
    {
        return $this->container['pkiNotificationsubsectionID'];
    }

    /**
     * Sets pkiNotificationsubsectionID
     *
     * @param int $pkiNotificationsubsectionID The unique ID of the Notificationsubsection
     *
     * @return self
     */
    public function setPkiNotificationsubsectionID($pkiNotificationsubsectionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiNotificationsubsectionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiNotificationsubsectionID cannot be null');
        //}

//        if (($pkiNotificationsubsectionID < 0)) {
        if (($pkiNotificationsubsectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiNotificationsubsectionID when calling NotificationsubsectionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiNotificationsubsectionID'] = $pkiNotificationsubsectionID;
        $this->container['pkiNotificationsubsectionID'] = (is_null($pkiNotificationsubsectionID) ? null : (int) $pkiNotificationsubsectionID);

        return $this;
    }

    /**
     * Gets fkiNotificationsectionID
     *
     * @return int
     */
    public function getFkiNotificationsectionID()
    {
        return $this->container['fkiNotificationsectionID'];
    }

    /**
     * Sets fkiNotificationsectionID
     *
     * @param int $fkiNotificationsectionID The unique ID of the Notificationsection
     *
     * @return self
     */
    public function setFkiNotificationsectionID($fkiNotificationsectionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiNotificationsectionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiNotificationsectionID cannot be null');
        //}

//        if (($fkiNotificationsectionID < 0)) {
        if (($fkiNotificationsectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiNotificationsectionID when calling NotificationsubsectionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiNotificationsectionID'] = $fkiNotificationsectionID;
        $this->container['fkiNotificationsectionID'] = (is_null($fkiNotificationsectionID) ? null : (int) $fkiNotificationsectionID);

        return $this;
    }

    /**
     * Gets objNotificationsubsectionName
     *
     * @return \eZmaxAPI\Model\MultilingualNotificationsubsectionName|null
     */
    public function getObjNotificationsubsectionName()
    {
        return $this->container['objNotificationsubsectionName'];
    }

    /**
     * Sets objNotificationsubsectionName
     *
     * @param \eZmaxAPI\Model\MultilingualNotificationsubsectionName|null $objNotificationsubsectionName objNotificationsubsectionName
     *
     * @return self
     */
    public function setObjNotificationsubsectionName($objNotificationsubsectionName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objNotificationsubsectionName)) {
            //throw new \InvalidArgumentException('non-nullable objNotificationsubsectionName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objNotificationsubsectionName'] = $objNotificationsubsectionName;
        $this->container['objNotificationsubsectionName'] = $objNotificationsubsectionName;

        return $this;
    }

    /**
     * Gets sNotificationsectionNameX
     *
     * @return string|null
     */
    public function getSNotificationsectionNameX()
    {
        return is_null($this->container['sNotificationsectionNameX']) ? null : trim($this->container['sNotificationsectionNameX']);
    }

    /**
     * Sets sNotificationsectionNameX
     *
     * @param string|null $sNotificationsectionNameX The name of the Notificationsection in the language of the requester
     *
     * @return self
     */
    public function setSNotificationsectionNameX($sNotificationsectionNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sNotificationsectionNameX)) {
            //throw new \InvalidArgumentException('non-nullable sNotificationsectionNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sNotificationsectionNameX'] = $sNotificationsectionNameX;
        $this->container['sNotificationsectionNameX'] = (is_null($sNotificationsectionNameX) ? null : trim((string) $sNotificationsectionNameX));

        return $this;
    }

    /**
     * Gets sNotificationsubsectionNameX
     *
     * @return string
     */
    public function getSNotificationsubsectionNameX()
    {
        return is_null($this->container['sNotificationsubsectionNameX']) ? null : trim($this->container['sNotificationsubsectionNameX']);
    }

    /**
     * Sets sNotificationsubsectionNameX
     *
     * @param string $sNotificationsubsectionNameX The name of the Notificationsubsection in the language of the requester
     *
     * @return self
     */
    public function setSNotificationsubsectionNameX($sNotificationsubsectionNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sNotificationsubsectionNameX)) {
            //throw new \InvalidArgumentException('non-nullable sNotificationsubsectionNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sNotificationsubsectionNameX'] = $sNotificationsubsectionNameX;
        $this->container['sNotificationsubsectionNameX'] = (is_null($sNotificationsubsectionNameX) ? null : trim((string) $sNotificationsubsectionNameX));

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


