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
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiContactID' => false,
		'sContactFirstname' => false,
		'sContactLastname' => false,
		'fkiLanguageID' => false,
		'sEmailAddress' => false,
		'sPhoneE164' => false,
		'sPhoneExtension' => false,
		'sPhoneE164Cell' => false
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
        $this->setIfExists('pkiContactID', $data ?? [], null);
        $this->setIfExists('sContactFirstname', $data ?? [], null);
        $this->setIfExists('sContactLastname', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('sPhoneE164', $data ?? [], null);
        $this->setIfExists('sPhoneExtension', $data ?? [], null);
        $this->setIfExists('sPhoneE164Cell', $data ?? [], null);
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


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiContactID)) {
            //throw new \InvalidArgumentException('non-nullable pkiContactID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiContactID'] = $pkiContactID;
        $this->container['pkiContactID'] = (is_null($pkiContactID) ? null : (int) $pkiContactID);

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

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sContactFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sContactFirstname cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactFirstname'] = $sContactFirstname;
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

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sContactLastname)) {
            //throw new \InvalidArgumentException('non-nullable sContactLastname cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactLastname'] = $sContactLastname;
        $this->container['sContactLastname'] = (is_null($sContactLastname) ? null : (string) $sContactLastname);

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


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

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

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : (string) $sEmailAddress);

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
            throw new \InvalidArgumentException("invalid value for \$sPhoneE164 when calling EzsignsignerResponseCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneE164)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneE164 cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneE164'] = $sPhoneE164;
        $this->container['sPhoneE164'] = (is_null($sPhoneE164) ? null : (string) $sPhoneE164);

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

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneExtension)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneExtension cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneExtension'] = $sPhoneExtension;
        $this->container['sPhoneExtension'] = (is_null($sPhoneExtension) ? null : (string) $sPhoneExtension);

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
            throw new \InvalidArgumentException("invalid value for \$sPhoneE164Cell when calling EzsignsignerResponseCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneE164Cell)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneE164Cell cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneE164Cell'] = $sPhoneE164Cell;
        $this->container['sPhoneE164Cell'] = (is_null($sPhoneE164Cell) ? null : (string) $sPhoneE164Cell);

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


