<?php
/**
 * UserResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.1.4
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
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
 * UserResponse Class Doc Comment
 *
 * @category Class
 * @description A User Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'user-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiUserID' => 'int',
        'fkiLanguageID' => 'int',
        'eUserType' => '\eZmaxAPI\Model\FieldEUserType',
        'sUserFirstname' => 'string',
        'sUserLastname' => 'string',
        'sUserLoginname' => 'string',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiUserID' => null,
        'fkiLanguageID' => null,
        'eUserType' => null,
        'sUserFirstname' => null,
        'sUserLastname' => null,
        'sUserLoginname' => null,
        'objAudit' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pkiUserID' => 'pkiUserID',
        'fkiLanguageID' => 'fkiLanguageID',
        'eUserType' => 'eUserType',
        'sUserFirstname' => 'sUserFirstname',
        'sUserLastname' => 'sUserLastname',
        'sUserLoginname' => 'sUserLoginname',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiUserID' => 'setPkiUserID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'eUserType' => 'setEUserType',
        'sUserFirstname' => 'setSUserFirstname',
        'sUserLastname' => 'setSUserLastname',
        'sUserLoginname' => 'setSUserLoginname',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiUserID' => 'getPkiUserID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'eUserType' => 'getEUserType',
        'sUserFirstname' => 'getSUserFirstname',
        'sUserLastname' => 'getSUserLastname',
        'sUserLoginname' => 'getSUserLoginname',
        'objAudit' => 'getObjAudit'
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
        $this->container['pkiUserID'] = $data['pkiUserID'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['eUserType'] = $data['eUserType'] ?? null;
        $this->container['sUserFirstname'] = $data['sUserFirstname'] ?? null;
        $this->container['sUserLastname'] = $data['sUserLastname'] ?? null;
        $this->container['sUserLoginname'] = $data['sUserLoginname'] ?? null;
        $this->container['objAudit'] = $data['objAudit'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiUserID'] === null) {
            $invalidProperties[] = "'pkiUserID' can't be null";
        }
        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if ($this->container['eUserType'] === null) {
            $invalidProperties[] = "'eUserType' can't be null";
        }
        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
        }
        if ($this->container['sUserLoginname'] === null) {
            $invalidProperties[] = "'sUserLoginname' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
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
     * Gets pkiUserID
     *
     * @return int
     */
    public function getPkiUserID()
    {
        return $this->container['pkiUserID'];
    }

    /**
     * Sets pkiUserID
     *
     * @param int $pkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setPkiUserID($pkiUserID)
    {
        $this->container['pkiUserID'] = $pkiUserID;

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling UserResponse., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling UserResponse., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets eUserType
     *
     * @return \eZmaxAPI\Model\FieldEUserType
     */
    public function getEUserType()
    {
        return $this->container['eUserType'];
    }

    /**
     * Sets eUserType
     *
     * @param \eZmaxAPI\Model\FieldEUserType $eUserType eUserType
     *
     * @return self
     */
    public function setEUserType($eUserType)
    {
        $this->container['eUserType'] = $eUserType;

        return $this;
    }

    /**
     * Gets sUserFirstname
     *
     * @return string
     */
    public function getSUserFirstname()
    {
        return $this->container['sUserFirstname'];
    }

    /**
     * Sets sUserFirstname
     *
     * @param string $sUserFirstname The First name of the user
     *
     * @return self
     */
    public function setSUserFirstname($sUserFirstname)
    {
        $this->container['sUserFirstname'] = $sUserFirstname;

        return $this;
    }

    /**
     * Gets sUserLastname
     *
     * @return string
     */
    public function getSUserLastname()
    {
        return $this->container['sUserLastname'];
    }

    /**
     * Sets sUserLastname
     *
     * @param string $sUserLastname The Last name of the user
     *
     * @return self
     */
    public function setSUserLastname($sUserLastname)
    {
        $this->container['sUserLastname'] = $sUserLastname;

        return $this;
    }

    /**
     * Gets sUserLoginname
     *
     * @return string
     */
    public function getSUserLoginname()
    {
        return $this->container['sUserLoginname'];
    }

    /**
     * Sets sUserLoginname
     *
     * @param string $sUserLoginname The Login name of the User.
     *
     * @return self
     */
    public function setSUserLoginname($sUserLoginname)
    {
        $this->container['sUserLoginname'] = $sUserLoginname;

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {
        $this->container['objAudit'] = $objAudit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


