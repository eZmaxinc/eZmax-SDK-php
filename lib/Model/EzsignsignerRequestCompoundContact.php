<?php
/**
 * EzsignsignerRequestCompoundContact
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.0.42
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
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
 * EzsignsignerRequestCompoundContact Class Doc Comment
 *
 * @category Class
 * @description A Ezsignsigner-&gt;Contact Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignsignerRequestCompoundContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsigner-RequestCompound-Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sContactFirstname' => 'string',
        'sContactLastname' => 'string',
        'fkiLanguageID' => 'int',
        'sEmailAddress' => 'string',
        'sPhoneNumber' => 'string',
        'sPhoneNumberCell' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sContactFirstname' => null,
        'sContactLastname' => null,
        'fkiLanguageID' => null,
        'sEmailAddress' => null,
        'sPhoneNumber' => null,
        'sPhoneNumberCell' => null
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
        'sContactFirstname' => 'sContactFirstname',
        'sContactLastname' => 'sContactLastname',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEmailAddress' => 'sEmailAddress',
        'sPhoneNumber' => 'sPhoneNumber',
        'sPhoneNumberCell' => 'sPhoneNumberCell'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sContactFirstname' => 'setSContactFirstname',
        'sContactLastname' => 'setSContactLastname',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEmailAddress' => 'setSEmailAddress',
        'sPhoneNumber' => 'setSPhoneNumber',
        'sPhoneNumberCell' => 'setSPhoneNumberCell'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sContactFirstname' => 'getSContactFirstname',
        'sContactLastname' => 'getSContactLastname',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEmailAddress' => 'getSEmailAddress',
        'sPhoneNumber' => 'getSPhoneNumber',
        'sPhoneNumberCell' => 'getSPhoneNumberCell'
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
        $this->container['sContactFirstname'] = $data['sContactFirstname'] ?? null;
        $this->container['sContactLastname'] = $data['sContactLastname'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sEmailAddress'] = $data['sEmailAddress'] ?? null;
        $this->container['sPhoneNumber'] = $data['sPhoneNumber'] ?? null;
        $this->container['sPhoneNumberCell'] = $data['sPhoneNumberCell'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string $sContactFirstname The first name of the Contact
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
     * @param string $sContactLastname The last name of the Contact
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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignsignerRequestCompoundContact., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignsignerRequestCompoundContact., must be bigger than or equal to 1.');
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
     * @param string|null $sEmailAddress The email address of the contact. Must be filled if email authentification was requested
     *
     * @return self
     */
    public function setSEmailAddress($sEmailAddress)
    {
        $this->container['sEmailAddress'] = $sEmailAddress;

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
     * @param string|null $sPhoneNumber The Phone number of the contact. Use format \"5149901516\" for North American Numbers (Without \"1\" for long distance code) you would dial like this: 1-514-990-1516. Use format \"498945233886\" for international numbers (Without \"011\") you would dial like this: +49 89 452 33 88-6. In this example \"49\" is the country code of Germany.
     *
     * @return self
     */
    public function setSPhoneNumber($sPhoneNumber)
    {
        $this->container['sPhoneNumber'] = $sPhoneNumber;

        return $this;
    }

    /**
     * Gets sPhoneNumberCell
     *
     * @return string|null
     */
    public function getSPhoneNumberCell()
    {
        return $this->container['sPhoneNumberCell'];
    }

    /**
     * Sets sPhoneNumberCell
     *
     * @param string|null $sPhoneNumberCell The Cell Phone number of the contact. Use format \"5149901516\" for North American Numbers (Without \"1\" for long distance code) you would dial like this: 1-514-990-1516. Use format \"498945233886\" for international numbers (Without \"011\") you would dial like this: +49 89 452 33 88-6. In this example \"49\" is the country code of Germany.
     *
     * @return self
     */
    public function setSPhoneNumberCell($sPhoneNumberCell)
    {
        $this->container['sPhoneNumberCell'] = $sPhoneNumberCell;

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


