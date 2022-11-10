<?php
/**
 * ContactRequestCompound
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
 * ContactRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Contact Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contact-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiContacttitleID' => 'int',
        'fkiLanguageID' => 'int',
        'sContactFirstname' => 'string',
        'sContactLastname' => 'string',
        'sContactCompany' => 'string',
        'dtContactBirthdate' => 'string',
        'objContactinformations' => '\eZmaxAPI\Model\ContactinformationsRequestCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiContacttitleID' => null,
        'fkiLanguageID' => null,
        'sContactFirstname' => null,
        'sContactLastname' => null,
        'sContactCompany' => null,
        'dtContactBirthdate' => null,
        'objContactinformations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiContacttitleID' => false,
		'fkiLanguageID' => false,
		'sContactFirstname' => false,
		'sContactLastname' => false,
		'sContactCompany' => false,
		'dtContactBirthdate' => false,
		'objContactinformations' => false
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
        'fkiContacttitleID' => 'fkiContacttitleID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sContactFirstname' => 'sContactFirstname',
        'sContactLastname' => 'sContactLastname',
        'sContactCompany' => 'sContactCompany',
        'dtContactBirthdate' => 'dtContactBirthdate',
        'objContactinformations' => 'objContactinformations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiContacttitleID' => 'setFkiContacttitleID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sContactFirstname' => 'setSContactFirstname',
        'sContactLastname' => 'setSContactLastname',
        'sContactCompany' => 'setSContactCompany',
        'dtContactBirthdate' => 'setDtContactBirthdate',
        'objContactinformations' => 'setObjContactinformations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiContacttitleID' => 'getFkiContacttitleID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sContactFirstname' => 'getSContactFirstname',
        'sContactLastname' => 'getSContactLastname',
        'sContactCompany' => 'getSContactCompany',
        'dtContactBirthdate' => 'getDtContactBirthdate',
        'objContactinformations' => 'getObjContactinformations'
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
        $this->setIfExists('fkiContacttitleID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sContactFirstname', $data ?? [], null);
        $this->setIfExists('sContactLastname', $data ?? [], null);
        $this->setIfExists('sContactCompany', $data ?? [], null);
        $this->setIfExists('dtContactBirthdate', $data ?? [], null);
        $this->setIfExists('objContactinformations', $data ?? [], null);
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

        if ($this->container['fkiContacttitleID'] === null) {
            $invalidProperties[] = "'fkiContacttitleID' can't be null";
        }
        if (($this->container['fkiContacttitleID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiContacttitleID', must be bigger than or equal to 0.";
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

        if ($this->container['sContactFirstname'] === null) {
            $invalidProperties[] = "'sContactFirstname' can't be null";
        }
        if ($this->container['sContactLastname'] === null) {
            $invalidProperties[] = "'sContactLastname' can't be null";
        }
        if ($this->container['sContactCompany'] === null) {
            $invalidProperties[] = "'sContactCompany' can't be null";
        }
        if ($this->container['objContactinformations'] === null) {
            $invalidProperties[] = "'objContactinformations' can't be null";
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
     * Gets fkiContacttitleID
     *
     * @return int
     */
    public function getFkiContacttitleID()
    {
        return $this->container['fkiContacttitleID'];
    }

    /**
     * Sets fkiContacttitleID
     *
     * @param int $fkiContacttitleID The unique ID of the Contacttitle.  Valid values:  |Value|Description| |-|-| |1|Ms.| |2|Mr.| |4|(Blank)| |5|Me (For Notaries)|
     *
     * @return self
     */
    public function setFkiContacttitleID($fkiContacttitleID)
    {

        if (($fkiContacttitleID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiContacttitleID when calling ContactRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiContacttitleID)) {
            //throw new \InvalidArgumentException('non-nullable fkiContacttitleID cannot be null');
        //}
        $this->container['fkiContacttitleID'] = (is_null($fkiContacttitleID) ? null : (int) $fkiContacttitleID);

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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ContactRequestCompound., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ContactRequestCompound., must be bigger than or equal to 1.');
        }


        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

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

        //if (is_null($sContactFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sContactFirstname cannot be null');
        //}
        $this->container['sContactFirstname'] = (is_null($sContactFirstname) ? null : (string) $sContactFirstname);

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

        //if (is_null($sContactLastname)) {
            //throw new \InvalidArgumentException('non-nullable sContactLastname cannot be null');
        //}
        $this->container['sContactLastname'] = (is_null($sContactLastname) ? null : (string) $sContactLastname);

        return $this;
    }

    /**
     * Gets sContactCompany
     *
     * @return string
     */
    public function getSContactCompany()
    {
        return $this->container['sContactCompany'];
    }

    /**
     * Sets sContactCompany
     *
     * @param string $sContactCompany The Company name of the contact
     *
     * @return self
     */
    public function setSContactCompany($sContactCompany)
    {

        //if (is_null($sContactCompany)) {
            //throw new \InvalidArgumentException('non-nullable sContactCompany cannot be null');
        //}
        $this->container['sContactCompany'] = (is_null($sContactCompany) ? null : (string) $sContactCompany);

        return $this;
    }

    /**
     * Gets dtContactBirthdate
     *
     * @return string|null
     */
    public function getDtContactBirthdate()
    {
        return $this->container['dtContactBirthdate'];
    }

    /**
     * Sets dtContactBirthdate
     *
     * @param string|null $dtContactBirthdate The Birth Date of the contact
     *
     * @return self
     */
    public function setDtContactBirthdate($dtContactBirthdate)
    {

        //if (is_null($dtContactBirthdate)) {
            //throw new \InvalidArgumentException('non-nullable dtContactBirthdate cannot be null');
        //}
        $this->container['dtContactBirthdate'] = (is_null($dtContactBirthdate) ? null : (string) $dtContactBirthdate);

        return $this;
    }

    /**
     * Gets objContactinformations
     *
     * @return \eZmaxAPI\Model\ContactinformationsRequestCompound
     */
    public function getObjContactinformations()
    {
        return $this->container['objContactinformations'];
    }

    /**
     * Sets objContactinformations
     *
     * @param \eZmaxAPI\Model\ContactinformationsRequestCompound $objContactinformations objContactinformations
     *
     * @return self
     */
    public function setObjContactinformations($objContactinformations)
    {

        //if (is_null($objContactinformations)) {
            //throw new \InvalidArgumentException('non-nullable objContactinformations cannot be null');
        //}
        $this->container['objContactinformations'] = $objContactinformations;

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


