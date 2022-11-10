<?php
/**
 * NotificationtestGetElementsV1ResponseMPayload
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
 * The version of the OpenAPI document: 1.1.16
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * NotificationtestGetElementsV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for GET /1/object/notificationtest/{pkiNotificationtestID}/getElements
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NotificationtestGetElementsV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'notificationtest-getElements-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiNotificationtestID' => 'int',
        'sNotificationtestFunction' => 'string',
        'aSVariableobjectProperty' => 'string[]',
        'aObjVariableobject' => 'array[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiNotificationtestID' => null,
        'sNotificationtestFunction' => null,
        'aSVariableobjectProperty' => null,
        'aObjVariableobject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiNotificationtestID' => false,
		'sNotificationtestFunction' => false,
		'aSVariableobjectProperty' => false,
		'aObjVariableobject' => false
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
        'pkiNotificationtestID' => 'pkiNotificationtestID',
        'sNotificationtestFunction' => 'sNotificationtestFunction',
        'aSVariableobjectProperty' => 'a_sVariableobjectProperty',
        'aObjVariableobject' => 'a_objVariableobject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiNotificationtestID' => 'setPkiNotificationtestID',
        'sNotificationtestFunction' => 'setSNotificationtestFunction',
        'aSVariableobjectProperty' => 'setASVariableobjectProperty',
        'aObjVariableobject' => 'setAObjVariableobject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiNotificationtestID' => 'getPkiNotificationtestID',
        'sNotificationtestFunction' => 'getSNotificationtestFunction',
        'aSVariableobjectProperty' => 'getASVariableobjectProperty',
        'aObjVariableobject' => 'getAObjVariableobject'
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
        $this->setIfExists('pkiNotificationtestID', $data ?? [], null);
        $this->setIfExists('sNotificationtestFunction', $data ?? [], null);
        $this->setIfExists('aSVariableobjectProperty', $data ?? [], null);
        $this->setIfExists('aObjVariableobject', $data ?? [], null);
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

        if ($this->container['pkiNotificationtestID'] === null) {
            $invalidProperties[] = "'pkiNotificationtestID' can't be null";
        }
        if (($this->container['pkiNotificationtestID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiNotificationtestID', must be bigger than or equal to 0.";
        }

        if ($this->container['sNotificationtestFunction'] === null) {
            $invalidProperties[] = "'sNotificationtestFunction' can't be null";
        }
        if ($this->container['aObjVariableobject'] === null) {
            $invalidProperties[] = "'aObjVariableobject' can't be null";
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
     * Gets pkiNotificationtestID
     *
     * @return int
     */
    public function getPkiNotificationtestID()
    {
        return $this->container['pkiNotificationtestID'];
    }

    /**
     * Sets pkiNotificationtestID
     *
     * @param int $pkiNotificationtestID The unique ID of the Notificationtest
     *
     * @return self
     */
    public function setPkiNotificationtestID($pkiNotificationtestID)
    {

        if (($pkiNotificationtestID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiNotificationtestID when calling NotificationtestGetElementsV1ResponseMPayload., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiNotificationtestID)) {
            //throw new \InvalidArgumentException('non-nullable pkiNotificationtestID cannot be null');
        //}
        $this->container['pkiNotificationtestID'] = (is_null($pkiNotificationtestID) ? null : (int) $pkiNotificationtestID);

        return $this;
    }

    /**
     * Gets sNotificationtestFunction
     *
     * @return string
     */
    public function getSNotificationtestFunction()
    {
        return $this->container['sNotificationtestFunction'];
    }

    /**
     * Sets sNotificationtestFunction
     *
     * @param string $sNotificationtestFunction The function name of the Notificationtest
     *
     * @return self
     */
    public function setSNotificationtestFunction($sNotificationtestFunction)
    {

        //if (is_null($sNotificationtestFunction)) {
            //throw new \InvalidArgumentException('non-nullable sNotificationtestFunction cannot be null');
        //}
        $this->container['sNotificationtestFunction'] = (is_null($sNotificationtestFunction) ? null : (string) $sNotificationtestFunction);

        return $this;
    }

    /**
     * Gets aSVariableobjectProperty
     *
     * @return string[]|null
     */
    public function getASVariableobjectProperty()
    {
        return $this->container['aSVariableobjectProperty'];
    }

    /**
     * Sets aSVariableobjectProperty
     *
     * @param string[]|null $aSVariableobjectProperty aSVariableobjectProperty
     *
     * @return self
     */
    public function setASVariableobjectProperty($aSVariableobjectProperty)
    {

        //if (is_null($aSVariableobjectProperty)) {
            //throw new \InvalidArgumentException('non-nullable aSVariableobjectProperty cannot be null');
        //}
        $this->container['aSVariableobjectProperty'] = (is_null($aSVariableobjectProperty) ? null : $aSVariableobjectProperty);

        return $this;
    }

    /**
     * Gets aObjVariableobject
     *
     * @return array[]
     */
    public function getAObjVariableobject()
    {
        return $this->container['aObjVariableobject'];
    }

    /**
     * Sets aObjVariableobject
     *
     * @param array[] $aObjVariableobject aObjVariableobject
     *
     * @return self
     */
    public function setAObjVariableobject($aObjVariableobject)
    {

        //if (is_null($aObjVariableobject)) {
            //throw new \InvalidArgumentException('non-nullable aObjVariableobject cannot be null');
        //}
        $this->container['aObjVariableobject'] = (is_null($aObjVariableobject) ? null : $aObjVariableobject);

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


