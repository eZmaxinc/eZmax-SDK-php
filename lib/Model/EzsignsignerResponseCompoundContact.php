<?php
/**
 * EzsignsignerResponseCompoundContact
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
 * EzsignsignerResponseCompoundContact Class Doc Comment
 *
 * @category Class
 * @description A Ezsignsigner-&gt;Contact Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsignerResponseCompoundContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsigner-ResponseCompound-Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiContactID' => 'int',
        'sContactFirstname' => 'string',
        'sContactLastname' => 'string',
        'fkiLanguageID' => 'int',
        'sEmailAddress' => 'string',
        'sPhoneE164' => 'string',
        'sPhoneExtension' => 'string',
        'sPhoneE164Cell' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiContactID' => null,
        'sContactFirstname' => null,
        'sContactLastname' => null,
        'fkiLanguageID' => null,
        'sEmailAddress' => null,
        'sPhoneE164' => null,
        'sPhoneExtension' => null,
        'sPhoneE164Cell' => null
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
        'pkiContactID' => 'pkiContactID',
        'sContactFirstname' => 'sContactFirstname',
        'sContactLastname' => 'sContactLastname',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEmailAddress' => 'sEmailAddress',
        'sPhoneE164' => 'sPhoneE164',
        'sPhoneExtension' => 'sPhoneExtension',
        'sPhoneE164Cell' => 'sPhoneE164Cell'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiContactID' => 'setPkiContactID',
        'sContactFirstname' => 'setSContactFirstname',
        'sContactLastname' => 'setSContactLastname',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEmailAddress' => 'setSEmailAddress',
        'sPhoneE164' => 'setSPhoneE164',
        'sPhoneExtension' => 'setSPhoneExtension',
        'sPhoneE164Cell' => 'setSPhoneE164Cell'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiContactID' => 'getPkiContactID',
        'sContactFirstname' => 'getSContactFirstname',
        'sContactLastname' => 'getSContactLastname',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEmailAddress' => 'getSEmailAddress',
        'sPhoneE164' => 'getSPhoneE164',
        'sPhoneExtension' => 'getSPhoneExtension',
        'sPhoneE164Cell' => 'getSPhoneE164Cell'
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
        $this->container['pkiContactID'] = $data['pkiContactID'] ?? null;
        $this->container['sContactFirstname'] = $data['sContactFirstname'] ?? null;
        $this->container['sContactLastname'] = $data['sContactLastname'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sEmailAddress'] = $data['sEmailAddress'] ?? null;
        $this->container['sPhoneE164'] = $data['sPhoneE164'] ?? null;
        $this->container['sPhoneExtension'] = $data['sPhoneExtension'] ?? null;
        $this->container['sPhoneE164Cell'] = $data['sPhoneE164Cell'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiContactID'] === null) {
            $invalidProperties[] = "'pkiContactID' can't be null";
        }
        if (($this->container['pkiContactID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiContactID', must be bigger than or equal to 0.";
        }

        if ($this->container['sContactFirstname'] === null) {
            $invalidProperties[] = "'sContactFirstname' can't be null";
        }
        if ($this->container['sContactLastname'] === null) {
            $invalidProperties[] = "'sContactLastname' can't be null";
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

        if (!is_null($this->container['sPhoneE164']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164'])) {
            $invalidProperties[] = "invalid value for 'sPhoneE164', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
        }

        if (!is_null($this->container['sPhoneE164Cell']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164Cell'])) {
            $invalidProperties[] = "invalid value for 'sPhoneE164Cell', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
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
     * Gets pkiContactID
     *
     * @return int
     */
    public function getPkiContactID()
    {
        return $this->container['pkiContactID'];
    }

    /**
     * Sets pkiContactID
     *
     * @param int $pkiContactID The unique ID of the Contact
     *
     * @return self
     */
    public function setPkiContactID($pkiContactID)
    {

        if (($pkiContactID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiContactID when calling EzsignsignerResponseCompoundContact., must be bigger than or equal to 0.');
        }

        $this->container['pkiContactID'] = $pkiContactID;

        return $this;
    }

    /**
     * Gets sContactFirstname
     *
     * @return string
     */
    public function getSContactFirstname()
    {
        return $this->container['sContactFirstname'];
    }

    /**
     * Sets sContactFirstname
     *
     * @param string $sContactFirstname The First name of the contact
     *
     * @return self
     */
    public function setSContactFirstname($sContactFirstname)
    {
        $this->container['sContactFirstname'] = $sContactFirstname;

        return $this;
    }

    /**
     * Gets sContactLastname
     *
     * @return string
     */
    public function getSContactLastname()
    {
        return $this->container['sContactLastname'];
    }

    /**
     * Sets sContactLastname
     *
     * @param string $sContactLastname The Last name of the contact
     *
     * @return self
     */
    public function setSContactLastname($sContactLastname)
    {
        $this->container['sContactLastname'] = $sContactLastname;

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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignsignerResponseCompoundContact., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignsignerResponseCompoundContact., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

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
        $this->container['sEmailAddress'] = $sEmailAddress;

        return $this;
    }

    /**
     * Gets sPhoneE164
     *
     * @return string|null
     */
    public function getSPhoneE164()
    {
        return $this->container['sPhoneE164'];
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

        if (!is_null($sPhoneE164) && (!preg_match("/^\\+[1-9]\\d{1,14}$/", $sPhoneE164))) {
            throw new \InvalidArgumentException("invalid value for $sPhoneE164 when calling EzsignsignerResponseCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        $this->container['sPhoneE164'] = $sPhoneE164;

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
        $this->container['sPhoneExtension'] = $sPhoneExtension;

        return $this;
    }

    /**
     * Gets sPhoneE164Cell
     *
     * @return string|null
     */
    public function getSPhoneE164Cell()
    {
        return $this->container['sPhoneE164Cell'];
    }

    /**
     * Sets sPhoneE164Cell
     *
     * @param string|null $sPhoneE164Cell A phone number in E.164 Format
     *
     * @return self
     */
    public function setSPhoneE164Cell($sPhoneE164Cell)
    {

        if (!is_null($sPhoneE164Cell) && (!preg_match("/^\\+[1-9]\\d{1,14}$/", $sPhoneE164Cell))) {
            throw new \InvalidArgumentException("invalid value for $sPhoneE164Cell when calling EzsignsignerResponseCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        $this->container['sPhoneE164Cell'] = $sPhoneE164Cell;

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


