<?php
/**
 * CommonAuditdetail
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
 * CommonAuditdetail Class Doc Comment
 *
 * @category Class
 * @description Gives informations about the user that created the object or the last user to have modified it.  If the object was never modified after creation, both Created and Modified informations will be the same.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommonAuditdetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-Auditdetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiUserID' => 'int',
        'fkiApikeyID' => 'int',
        'sUserLoginname' => 'string',
        'sUserLastname' => 'string',
        'sUserFirstname' => 'string',
        'sApikeyDescriptionX' => 'string',
        'dtAuditdetailDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiUserID' => null,
        'fkiApikeyID' => null,
        'sUserLoginname' => null,
        'sUserLastname' => null,
        'sUserFirstname' => null,
        'sApikeyDescriptionX' => null,
        'dtAuditdetailDate' => null
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
        'fkiUserID' => 'fkiUserID',
        'fkiApikeyID' => 'fkiApikeyID',
        'sUserLoginname' => 'sUserLoginname',
        'sUserLastname' => 'sUserLastname',
        'sUserFirstname' => 'sUserFirstname',
        'sApikeyDescriptionX' => 'sApikeyDescriptionX',
        'dtAuditdetailDate' => 'dtAuditdetailDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiUserID' => 'setFkiUserID',
        'fkiApikeyID' => 'setFkiApikeyID',
        'sUserLoginname' => 'setSUserLoginname',
        'sUserLastname' => 'setSUserLastname',
        'sUserFirstname' => 'setSUserFirstname',
        'sApikeyDescriptionX' => 'setSApikeyDescriptionX',
        'dtAuditdetailDate' => 'setDtAuditdetailDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiUserID' => 'getFkiUserID',
        'fkiApikeyID' => 'getFkiApikeyID',
        'sUserLoginname' => 'getSUserLoginname',
        'sUserLastname' => 'getSUserLastname',
        'sUserFirstname' => 'getSUserFirstname',
        'sApikeyDescriptionX' => 'getSApikeyDescriptionX',
        'dtAuditdetailDate' => 'getDtAuditdetailDate'
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
        $this->container['fkiUserID'] = $data['fkiUserID'] ?? null;
        $this->container['fkiApikeyID'] = $data['fkiApikeyID'] ?? null;
        $this->container['sUserLoginname'] = $data['sUserLoginname'] ?? null;
        $this->container['sUserLastname'] = $data['sUserLastname'] ?? null;
        $this->container['sUserFirstname'] = $data['sUserFirstname'] ?? null;
        $this->container['sApikeyDescriptionX'] = $data['sApikeyDescriptionX'] ?? null;
        $this->container['dtAuditdetailDate'] = $data['dtAuditdetailDate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if (($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiApikeyID']) && ($this->container['fkiApikeyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiApikeyID', must be bigger than or equal to 0.";
        }

        if ($this->container['sUserLoginname'] === null) {
            $invalidProperties[] = "'sUserLoginname' can't be null";
        }
        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
        }
        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['dtAuditdetailDate'] === null) {
            $invalidProperties[] = "'dtAuditdetailDate' can't be null";
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
     * Gets fkiUserID
     *
     * @return int
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {

        if (($fkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserID when calling CommonAuditdetail., must be bigger than or equal to 0.');
        }

        $this->container['fkiUserID'] = $fkiUserID;

        return $this;
    }

    /**
     * Gets fkiApikeyID
     *
     * @return int|null
     */
    public function getFkiApikeyID()
    {
        return $this->container['fkiApikeyID'];
    }

    /**
     * Sets fkiApikeyID
     *
     * @param int|null $fkiApikeyID The unique ID of the Apikey
     *
     * @return self
     */
    public function setFkiApikeyID($fkiApikeyID)
    {

        if (!is_null($fkiApikeyID) && ($fkiApikeyID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiApikeyID when calling CommonAuditdetail., must be bigger than or equal to 0.');
        }

        $this->container['fkiApikeyID'] = $fkiApikeyID;

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
     * Gets sApikeyDescriptionX
     *
     * @return string|null
     */
    public function getSApikeyDescriptionX()
    {
        return $this->container['sApikeyDescriptionX'];
    }

    /**
     * Sets sApikeyDescriptionX
     *
     * @param string|null $sApikeyDescriptionX The description of the Apikey in the language of the requester
     *
     * @return self
     */
    public function setSApikeyDescriptionX($sApikeyDescriptionX)
    {
        $this->container['sApikeyDescriptionX'] = $sApikeyDescriptionX;

        return $this;
    }

    /**
     * Gets dtAuditdetailDate
     *
     * @return string
     */
    public function getDtAuditdetailDate()
    {
        return $this->container['dtAuditdetailDate'];
    }

    /**
     * Sets dtAuditdetailDate
     *
     * @param string $dtAuditdetailDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return self
     */
    public function setDtAuditdetailDate($dtAuditdetailDate)
    {
        $this->container['dtAuditdetailDate'] = $dtAuditdetailDate;

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


