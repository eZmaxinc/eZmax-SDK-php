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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiUserID' => false,
		'fkiTimezoneID' => false,
		'sAvatarUrl' => false,
		'sUserFirstname' => false,
		'sUserLastname' => false,
		'sEmailAddress' => false,
		'eUserEzsignsendreminderfrequency' => false,
		'iUserInterfacecolor' => false,
		'bUserInterfacedark' => false,
		'iUserListresult' => false
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
        $this->setIfExists('pkiUserID', $data ?? [], null);
        $this->setIfExists('fkiTimezoneID', $data ?? [], null);
        $this->setIfExists('sAvatarUrl', $data ?? [], null);
        $this->setIfExists('sUserFirstname', $data ?? [], null);
        $this->setIfExists('sUserLastname', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('eUserEzsignsendreminderfrequency', $data ?? [], null);
        $this->setIfExists('iUserInterfacecolor', $data ?? [], null);
        $this->setIfExists('bUserInterfacedark', $data ?? [], null);
        $this->setIfExists('iUserListresult', $data ?? [], null);
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

        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable pkiUserID cannot be null');
        //}

//        if (($pkiUserID < 0)) {
        if (($pkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiUserID when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiUserID'] = $pkiUserID;
        $this->container['pkiUserID'] = (is_null($pkiUserID) ? null : (int) $pkiUserID);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiTimezoneID)) {
            //throw new \InvalidArgumentException('non-nullable fkiTimezoneID cannot be null');
        //}

//        if (($fkiTimezoneID < 0)) {
        if (($fkiTimezoneID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiTimezoneID when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiTimezoneID'] = $fkiTimezoneID;
        $this->container['fkiTimezoneID'] = (is_null($fkiTimezoneID) ? null : (int) $fkiTimezoneID);

        return $this;
    }

    /**
     * Gets sAvatarUrl
     *
     * @return string|null
     */
    public function getSAvatarUrl()
    {
        return is_null($this->container['sAvatarUrl']) ? null : trim($this->container['sAvatarUrl']);
    }

    /**
     * Sets sAvatarUrl
     *
     * @param string|null $sAvatarUrl The url of the picture used as avatar
     *
     * @return self
     */
    public function setSAvatarUrl($sAvatarUrl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAvatarUrl)) {
            //throw new \InvalidArgumentException('non-nullable sAvatarUrl cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAvatarUrl'] = $sAvatarUrl;
        $this->container['sAvatarUrl'] = (is_null($sAvatarUrl) ? null : trim((string) $sAvatarUrl));

        return $this;
    }

    /**
     * Gets sUserFirstname
     *
     * @return string
     */
    public function getSUserFirstname()
    {
        return is_null($this->container['sUserFirstname']) ? null : trim($this->container['sUserFirstname']);
    }

    /**
     * Sets sUserFirstname
     *
     * @param string $sUserFirstname The first name of the user
     *
     * @return self
     */
    public function setSUserFirstname($sUserFirstname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sUserFirstname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserFirstname'] = $sUserFirstname;
        $this->container['sUserFirstname'] = (is_null($sUserFirstname) ? null : trim((string) $sUserFirstname));

        return $this;
    }

    /**
     * Gets sUserLastname
     *
     * @return string
     */
    public function getSUserLastname()
    {
        return is_null($this->container['sUserLastname']) ? null : trim($this->container['sUserLastname']);
    }

    /**
     * Sets sUserLastname
     *
     * @param string $sUserLastname The last name of the user
     *
     * @return self
     */
    public function setSUserLastname($sUserLastname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLastname)) {
            //throw new \InvalidArgumentException('non-nullable sUserLastname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLastname'] = $sUserLastname;
        $this->container['sUserLastname'] = (is_null($sUserLastname) ? null : trim((string) $sUserLastname));

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eUserEzsignsendreminderfrequency)) {
            //throw new \InvalidArgumentException('non-nullable eUserEzsignsendreminderfrequency cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eUserEzsignsendreminderfrequency'] = $eUserEzsignsendreminderfrequency;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iUserInterfacecolor)) {
            //throw new \InvalidArgumentException('non-nullable iUserInterfacecolor cannot be null');
        //}

//        if (($iUserInterfacecolor < 0)) {
        if (($iUserInterfacecolor < 0)) {
            throw new \InvalidArgumentException('invalid value for $iUserInterfacecolor when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iUserInterfacecolor'] = $iUserInterfacecolor;
        $this->container['iUserInterfacecolor'] = (is_null($iUserInterfacecolor) ? null : (int) $iUserInterfacecolor);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bUserInterfacedark)) {
            //throw new \InvalidArgumentException('non-nullable bUserInterfacedark cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bUserInterfacedark'] = $bUserInterfacedark;
        $this->container['bUserInterfacedark'] = (is_null($bUserInterfacedark) ? null : (bool) $bUserInterfacedark);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iUserListresult)) {
            //throw new \InvalidArgumentException('non-nullable iUserListresult cannot be null');
        //}

//        if (($iUserListresult > 500)) {
        if (($iUserListresult > 500)) {
            throw new \InvalidArgumentException('invalid value for $iUserListresult when calling ActivesessionResponseCompoundUser., must be smaller than or equal to 500.');
        }
//        if (($iUserListresult < 5)) {
        if (($iUserListresult < 5)) {
            throw new \InvalidArgumentException('invalid value for $iUserListresult when calling ActivesessionResponseCompoundUser., must be bigger than or equal to 5.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iUserListresult'] = $iUserListresult;
        $this->container['iUserListresult'] = (is_null($iUserListresult) ? null : (int) $iUserListresult);

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


