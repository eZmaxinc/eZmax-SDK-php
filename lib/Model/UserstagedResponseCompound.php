<?php
/**
 * UserstagedResponseCompound
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
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
 * UserstagedResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Userstaged Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserstagedResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'userstaged-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiUserstagedID' => 'int',
        'fkiEmailID' => 'int',
        'sEmailAddress' => 'string',
        'sUserstagedFirstname' => 'string',
        'sUserstagedLastname' => 'string',
        'sUserstagedExternalid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiUserstagedID' => null,
        'fkiEmailID' => null,
        'sEmailAddress' => null,
        'sUserstagedFirstname' => null,
        'sUserstagedLastname' => null,
        'sUserstagedExternalid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiUserstagedID' => false,
		'fkiEmailID' => false,
		'sEmailAddress' => false,
		'sUserstagedFirstname' => false,
		'sUserstagedLastname' => false,
		'sUserstagedExternalid' => false
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
        'pkiUserstagedID' => 'pkiUserstagedID',
        'fkiEmailID' => 'fkiEmailID',
        'sEmailAddress' => 'sEmailAddress',
        'sUserstagedFirstname' => 'sUserstagedFirstname',
        'sUserstagedLastname' => 'sUserstagedLastname',
        'sUserstagedExternalid' => 'sUserstagedExternalid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiUserstagedID' => 'setPkiUserstagedID',
        'fkiEmailID' => 'setFkiEmailID',
        'sEmailAddress' => 'setSEmailAddress',
        'sUserstagedFirstname' => 'setSUserstagedFirstname',
        'sUserstagedLastname' => 'setSUserstagedLastname',
        'sUserstagedExternalid' => 'setSUserstagedExternalid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiUserstagedID' => 'getPkiUserstagedID',
        'fkiEmailID' => 'getFkiEmailID',
        'sEmailAddress' => 'getSEmailAddress',
        'sUserstagedFirstname' => 'getSUserstagedFirstname',
        'sUserstagedLastname' => 'getSUserstagedLastname',
        'sUserstagedExternalid' => 'getSUserstagedExternalid'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pkiUserstagedID', $data ?? [], null);
        $this->setIfExists('fkiEmailID', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('sUserstagedFirstname', $data ?? [], null);
        $this->setIfExists('sUserstagedLastname', $data ?? [], null);
        $this->setIfExists('sUserstagedExternalid', $data ?? [], null);
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

        if ($this->container['pkiUserstagedID'] === null) {
            $invalidProperties[] = "'pkiUserstagedID' can't be null";
        }
        if (($this->container['pkiUserstagedID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiUserstagedID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiUserstagedID'] < 1)) {
            $invalidProperties[] = "invalid value for 'pkiUserstagedID', must be bigger than or equal to 1.";
        }

        if ($this->container['fkiEmailID'] === null) {
            $invalidProperties[] = "'fkiEmailID' can't be null";
        }
        if (($this->container['fkiEmailID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiEmailID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['fkiEmailID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEmailID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEmailAddress'] === null) {
            $invalidProperties[] = "'sEmailAddress' can't be null";
        }
	//if (!preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
        if (!is_null($this->container['sEmailAddress']) && !preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
            $invalidProperties[] = "invalid value for 'sEmailAddress', must be conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.";
        }

        if ($this->container['sUserstagedFirstname'] === null) {
            $invalidProperties[] = "'sUserstagedFirstname' can't be null";
        }
	//if (!preg_match("/^.{0,20}$/", $this->container['sUserstagedFirstname'])) {
        if (!is_null($this->container['sUserstagedFirstname']) && !preg_match("/(*UTF8)^.{0,20}$/", $this->container['sUserstagedFirstname'])) {
            $invalidProperties[] = "invalid value for 'sUserstagedFirstname', must be conform to the pattern /^.{0,20}$/.";
        }

        if ($this->container['sUserstagedLastname'] === null) {
            $invalidProperties[] = "'sUserstagedLastname' can't be null";
        }
	//if (!preg_match("/^.{0,25}$/", $this->container['sUserstagedLastname'])) {
        if (!is_null($this->container['sUserstagedLastname']) && !preg_match("/(*UTF8)^.{0,25}$/", $this->container['sUserstagedLastname'])) {
            $invalidProperties[] = "invalid value for 'sUserstagedLastname', must be conform to the pattern /^.{0,25}$/.";
        }

        if ($this->container['sUserstagedExternalid'] === null) {
            $invalidProperties[] = "'sUserstagedExternalid' can't be null";
        }
	//if (!preg_match("/^.{1,60}$/", $this->container['sUserstagedExternalid'])) {
        if (!is_null($this->container['sUserstagedExternalid']) && !preg_match("/(*UTF8)^.{1,60}$/", $this->container['sUserstagedExternalid'])) {
            $invalidProperties[] = "invalid value for 'sUserstagedExternalid', must be conform to the pattern /^.{1,60}$/.";
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
     * Gets pkiUserstagedID
     *
     * @return int
     */
    public function getPkiUserstagedID()
    {
	//return $this->container['pkiUserstagedID'];
        return $this->container['pkiUserstagedID'];
    }

    /**
     * Sets pkiUserstagedID
     *
     * @param int $pkiUserstagedID The unique ID of the Userstaged
     *
     * @return self
     */
    public function setPkiUserstagedID($pkiUserstagedID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiUserstagedID)) {
            //throw new \InvalidArgumentException('non-nullable pkiUserstagedID cannot be null');
        //}

	//if (($pkiUserstagedID > 65535)) {
        if (($pkiUserstagedID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiUserstagedID when calling UserstagedResponseCompound., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiUserstagedID)?'null':'"'.$pkiUserstagedID.'"').' for pkiUserstagedID when calling UserstagedResponseCompound., must be smaller than or equal to 65535.');
        }
	//if (($pkiUserstagedID < 1)) {
        if (($pkiUserstagedID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiUserstagedID when calling UserstagedResponseCompound., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiUserstagedID)?'null':'"'.$pkiUserstagedID.'"').' for pkiUserstagedID when calling UserstagedResponseCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiUserstagedID'] = $pkiUserstagedID;
        $this->container['pkiUserstagedID'] = (is_null($pkiUserstagedID) ? null : (int) $pkiUserstagedID);

        return $this;
    }

    /**
     * Gets fkiEmailID
     *
     * @return int
     */
    public function getFkiEmailID()
    {
	//return $this->container['fkiEmailID'];
        return $this->container['fkiEmailID'];
    }

    /**
     * Sets fkiEmailID
     *
     * @param int $fkiEmailID The unique ID of the Email
     *
     * @return self
     */
    public function setFkiEmailID($fkiEmailID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEmailID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEmailID cannot be null');
        //}

	//if (($fkiEmailID > 16777215)) {
        if (($fkiEmailID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEmailID when calling UserstagedResponseCompound., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEmailID)?'null':'"'.$fkiEmailID.'"').' for fkiEmailID when calling UserstagedResponseCompound., must be smaller than or equal to 16777215.');
        }
	//if (($fkiEmailID < 1)) {
        if (($fkiEmailID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEmailID when calling UserstagedResponseCompound., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEmailID)?'null':'"'.$fkiEmailID.'"').' for fkiEmailID when calling UserstagedResponseCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEmailID'] = $fkiEmailID;
        $this->container['fkiEmailID'] = (is_null($fkiEmailID) ? null : (int) $fkiEmailID);

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string
     */
    public function getSEmailAddress()
    {
	//return $this->container['sEmailAddress'];
        return is_null($this->container['sEmailAddress']) ? null : trim($this->container['sEmailAddress']);
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}

	//if ((!preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
        if (!is_null($sEmailAddress) && (!preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sEmailAddress when calling UserstagedResponseCompound., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEmailAddress)?'null':'"'.$sEmailAddress.'"')." for sEmailAddress when calling UserstagedResponseCompound., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : trim((string) $sEmailAddress));

        return $this;
    }

    /**
     * Gets sUserstagedFirstname
     *
     * @return string
     */
    public function getSUserstagedFirstname()
    {
	//return $this->container['sUserstagedFirstname'];
        return is_null($this->container['sUserstagedFirstname']) ? null : trim($this->container['sUserstagedFirstname']);
    }

    /**
     * Sets sUserstagedFirstname
     *
     * @param string $sUserstagedFirstname The firstname of the Userstaged
     *
     * @return self
     */
    public function setSUserstagedFirstname($sUserstagedFirstname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserstagedFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sUserstagedFirstname cannot be null');
        //}

	//if ((!preg_match("/^.{0,20}$/", ObjectSerializer::toString($sUserstagedFirstname)))) {
        if (!is_null($sUserstagedFirstname) && (!preg_match("/(*UTF8)^.{0,20}$/", ObjectSerializer::toString($sUserstagedFirstname)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sUserstagedFirstname when calling UserstagedResponseCompound., must conform to the pattern /^.{0,20}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sUserstagedFirstname)?'null':'"'.$sUserstagedFirstname.'"')." for sUserstagedFirstname when calling UserstagedResponseCompound., must conform to the pattern /^.{0,20}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserstagedFirstname'] = $sUserstagedFirstname;
        $this->container['sUserstagedFirstname'] = (is_null($sUserstagedFirstname) ? null : trim((string) $sUserstagedFirstname));

        return $this;
    }

    /**
     * Gets sUserstagedLastname
     *
     * @return string
     */
    public function getSUserstagedLastname()
    {
	//return $this->container['sUserstagedLastname'];
        return is_null($this->container['sUserstagedLastname']) ? null : trim($this->container['sUserstagedLastname']);
    }

    /**
     * Sets sUserstagedLastname
     *
     * @param string $sUserstagedLastname The lastname of the Userstaged
     *
     * @return self
     */
    public function setSUserstagedLastname($sUserstagedLastname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserstagedLastname)) {
            //throw new \InvalidArgumentException('non-nullable sUserstagedLastname cannot be null');
        //}

	//if ((!preg_match("/^.{0,25}$/", ObjectSerializer::toString($sUserstagedLastname)))) {
        if (!is_null($sUserstagedLastname) && (!preg_match("/(*UTF8)^.{0,25}$/", ObjectSerializer::toString($sUserstagedLastname)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sUserstagedLastname when calling UserstagedResponseCompound., must conform to the pattern /^.{0,25}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sUserstagedLastname)?'null':'"'.$sUserstagedLastname.'"')." for sUserstagedLastname when calling UserstagedResponseCompound., must conform to the pattern /^.{0,25}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserstagedLastname'] = $sUserstagedLastname;
        $this->container['sUserstagedLastname'] = (is_null($sUserstagedLastname) ? null : trim((string) $sUserstagedLastname));

        return $this;
    }

    /**
     * Gets sUserstagedExternalid
     *
     * @return string
     */
    public function getSUserstagedExternalid()
    {
	//return $this->container['sUserstagedExternalid'];
        return is_null($this->container['sUserstagedExternalid']) ? null : trim($this->container['sUserstagedExternalid']);
    }

    /**
     * Sets sUserstagedExternalid
     *
     * @param string $sUserstagedExternalid The externalid of the Userstaged
     *
     * @return self
     */
    public function setSUserstagedExternalid($sUserstagedExternalid)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserstagedExternalid)) {
            //throw new \InvalidArgumentException('non-nullable sUserstagedExternalid cannot be null');
        //}

	//if ((!preg_match("/^.{1,60}$/", ObjectSerializer::toString($sUserstagedExternalid)))) {
        if (!is_null($sUserstagedExternalid) && (!preg_match("/(*UTF8)^.{1,60}$/", ObjectSerializer::toString($sUserstagedExternalid)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sUserstagedExternalid when calling UserstagedResponseCompound., must conform to the pattern /^.{1,60}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sUserstagedExternalid)?'null':'"'.$sUserstagedExternalid.'"')." for sUserstagedExternalid when calling UserstagedResponseCompound., must conform to the pattern /^.{1,60}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserstagedExternalid'] = $sUserstagedExternalid;
        $this->container['sUserstagedExternalid'] = (is_null($sUserstagedExternalid) ? null : trim((string) $sUserstagedExternalid));

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


