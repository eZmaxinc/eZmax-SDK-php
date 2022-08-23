<?php
/**
 * ActivesessionResponseCompoundUser
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
 * The version of the OpenAPI document: 1.1.10
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
 * ActivesessionResponseCompoundUser Class Doc Comment
 *
 * @category Class
 * @description An Activesession-&gt;User Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ActivesessionResponseCompoundUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'activesession-ResponseCompound-User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiUserID' => 'int',
        'fkiTimezoneID' => 'int',
        'sAvatarUrl' => 'string',
        'sUserFirstname' => 'string',
        'sUserLastname' => 'string',
        'sEmailAddress' => 'string',
        'eUserEzsignsendreminderfrequency' => '\eZmaxAPI\Model\FieldEUserEzsignsendreminderfrequency',
        'iUserInterfacecolor' => 'int',
        'bUserInterfacedark' => 'bool',
        'iUserListresult' => 'int'
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
        'fkiTimezoneID' => null,
        'sAvatarUrl' => null,
        'sUserFirstname' => null,
        'sUserLastname' => null,
        'sEmailAddress' => null,
        'eUserEzsignsendreminderfrequency' => null,
        'iUserInterfacecolor' => 'int32',
        'bUserInterfacedark' => null,
        'iUserListresult' => null
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
        'fkiTimezoneID' => 'fkiTimezoneID',
        'sAvatarUrl' => 'sAvatarUrl',
        'sUserFirstname' => 'sUserFirstname',
        'sUserLastname' => 'sUserLastname',
        'sEmailAddress' => 'sEmailAddress',
        'eUserEzsignsendreminderfrequency' => 'eUserEzsignsendreminderfrequency',
        'iUserInterfacecolor' => 'iUserInterfacecolor',
        'bUserInterfacedark' => 'bUserInterfacedark',
        'iUserListresult' => 'iUserListresult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiUserID' => 'setPkiUserID',
        'fkiTimezoneID' => 'setFkiTimezoneID',
        'sAvatarUrl' => 'setSAvatarUrl',
        'sUserFirstname' => 'setSUserFirstname',
        'sUserLastname' => 'setSUserLastname',
        'sEmailAddress' => 'setSEmailAddress',
        'eUserEzsignsendreminderfrequency' => 'setEUserEzsignsendreminderfrequency',
        'iUserInterfacecolor' => 'setIUserInterfacecolor',
        'bUserInterfacedark' => 'setBUserInterfacedark',
        'iUserListresult' => 'setIUserListresult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiUserID' => 'getPkiUserID',
        'fkiTimezoneID' => 'getFkiTimezoneID',
        'sAvatarUrl' => 'getSAvatarUrl',
        'sUserFirstname' => 'getSUserFirstname',
        'sUserLastname' => 'getSUserLastname',
        'sEmailAddress' => 'getSEmailAddress',
        'eUserEzsignsendreminderfrequency' => 'getEUserEzsignsendreminderfrequency',
        'iUserInterfacecolor' => 'getIUserInterfacecolor',
        'bUserInterfacedark' => 'getBUserInterfacedark',
        'iUserListresult' => 'getIUserListresult'
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
        $this->container['fkiTimezoneID'] = $data['fkiTimezoneID'] ?? null;
        $this->container['sAvatarUrl'] = $data['sAvatarUrl'] ?? null;
        $this->container['sUserFirstname'] = $data['sUserFirstname'] ?? null;
        $this->container['sUserLastname'] = $data['sUserLastname'] ?? null;
        $this->container['sEmailAddress'] = $data['sEmailAddress'] ?? null;
        $this->container['eUserEzsignsendreminderfrequency'] = $data['eUserEzsignsendreminderfrequency'] ?? null;
        $this->container['iUserInterfacecolor'] = $data['iUserInterfacecolor'] ?? null;
        $this->container['bUserInterfacedark'] = $data['bUserInterfacedark'] ?? null;
        $this->container['iUserListresult'] = $data['iUserListresult'] ?? null;
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
        if (($this->container['pkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiTimezoneID'] === null) {
            $invalidProperties[] = "'fkiTimezoneID' can't be null";
        }
        if (($this->container['fkiTimezoneID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiTimezoneID', must be bigger than or equal to 0.";
        }

        if ($this->container['sAvatarUrl'] === null) {
            $invalidProperties[] = "'sAvatarUrl' can't be null";
        }
        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
        }
        if ($this->container['sEmailAddress'] === null) {
            $invalidProperties[] = "'sEmailAddress' can't be null";
        }
        if ($this->container['eUserEzsignsendreminderfrequency'] === null) {
            $invalidProperties[] = "'eUserEzsignsendreminderfrequency' can't be null";
        }
        if ($this->container['iUserInterfacecolor'] === null) {
            $invalidProperties[] = "'iUserInterfacecolor' can't be null";
        }
        if (($this->container['iUserInterfacecolor'] < 0)) {
            $invalidProperties[] = "invalid value for 'iUserInterfacecolor', must be bigger than or equal to 0.";
        }

        if ($this->container['bUserInterfacedark'] === null) {
            $invalidProperties[] = "'bUserInterfacedark' can't be null";
        }
        if ($this->container['iUserListresult'] === null) {
            $invalidProperties[] = "'iUserListresult' can't be null";
        }
        if (($this->container['iUserListresult'] > 500)) {
            $invalidProperties[] = "invalid value for 'iUserListresult', must be smaller than or equal to 500.";
        }

        if (($this->container['iUserListresult'] < 5)) {
            $invalidProperties[] = "invalid value for 'iUserListresult', must be bigger than or equal to 5.";
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

        if (($pkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiUserID when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 0.');
        }

        $this->container['pkiUserID'] = $pkiUserID;

        return $this;
    }

    /**
     * Gets fkiTimezoneID
     *
     * @return int
     */
    public function getFkiTimezoneID()
    {
        return $this->container['fkiTimezoneID'];
    }

    /**
     * Sets fkiTimezoneID
     *
     * @param int $fkiTimezoneID The unique ID of the Timezone
     *
     * @return self
     */
    public function setFkiTimezoneID($fkiTimezoneID)
    {

        if (($fkiTimezoneID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiTimezoneID when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 0.');
        }

        $this->container['fkiTimezoneID'] = $fkiTimezoneID;

        return $this;
    }

    /**
     * Gets sAvatarUrl
     *
     * @return string
     */
    public function getSAvatarUrl()
    {
        return $this->container['sAvatarUrl'];
    }

    /**
     * Sets sAvatarUrl
     *
     * @param string $sAvatarUrl The url of the picture used as avatar
     *
     * @return self
     */
    public function setSAvatarUrl($sAvatarUrl)
    {
        $this->container['sAvatarUrl'] = $sAvatarUrl;

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
     * Gets sEmailAddress
     *
     * @return string
     */
    public function getSEmailAddress()
    {
        return $this->container['sEmailAddress'];
    }

    /**
     * Sets sEmailAddress
     *
     * @param string $sEmailAddress The email address.
     *
     * @return self
     */
    public function setSEmailAddress($sEmailAddress)
    {
        $this->container['sEmailAddress'] = $sEmailAddress;

        return $this;
    }

    /**
     * Gets eUserEzsignsendreminderfrequency
     *
     * @return \eZmaxAPI\Model\FieldEUserEzsignsendreminderfrequency
     */
    public function getEUserEzsignsendreminderfrequency()
    {
        return $this->container['eUserEzsignsendreminderfrequency'];
    }

    /**
     * Sets eUserEzsignsendreminderfrequency
     *
     * @param \eZmaxAPI\Model\FieldEUserEzsignsendreminderfrequency $eUserEzsignsendreminderfrequency eUserEzsignsendreminderfrequency
     *
     * @return self
     */
    public function setEUserEzsignsendreminderfrequency($eUserEzsignsendreminderfrequency)
    {
        $this->container['eUserEzsignsendreminderfrequency'] = $eUserEzsignsendreminderfrequency;

        return $this;
    }

    /**
     * Gets iUserInterfacecolor
     *
     * @return int
     */
    public function getIUserInterfacecolor()
    {
        return $this->container['iUserInterfacecolor'];
    }

    /**
     * Sets iUserInterfacecolor
     *
     * @param int $iUserInterfacecolor The int32 representation of the interface color. For example, RGB color #39435B would be 3752795
     *
     * @return self
     */
    public function setIUserInterfacecolor($iUserInterfacecolor)
    {

        if (($iUserInterfacecolor < 0)) {
            throw new \InvalidArgumentException('invalid value for $iUserInterfacecolor when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 0.');
        }

        $this->container['iUserInterfacecolor'] = $iUserInterfacecolor;

        return $this;
    }

    /**
     * Gets bUserInterfacedark
     *
     * @return bool
     */
    public function getBUserInterfacedark()
    {
        return $this->container['bUserInterfacedark'];
    }

    /**
     * Sets bUserInterfacedark
     *
     * @param bool $bUserInterfacedark Whether to use a dark mode interface
     *
     * @return self
     */
    public function setBUserInterfacedark($bUserInterfacedark)
    {
        $this->container['bUserInterfacedark'] = $bUserInterfacedark;

        return $this;
    }

    /**
     * Gets iUserListresult
     *
     * @return int
     */
    public function getIUserListresult()
    {
        return $this->container['iUserListresult'];
    }

    /**
     * Sets iUserListresult
     *
     * @param int $iUserListresult The number of rows to return by default in lists
     *
     * @return self
     */
    public function setIUserListresult($iUserListresult)
    {

        if (($iUserListresult > 500)) {
            throw new \InvalidArgumentException('invalid value for $iUserListresult when calling ActivesessionResponseCompoundUser., must be smaller than or equal to 500.');
        }
        if (($iUserListresult < 5)) {
            throw new \InvalidArgumentException('invalid value for $iUserListresult when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 5.');
        }

        $this->container['iUserListresult'] = $iUserListresult;

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


