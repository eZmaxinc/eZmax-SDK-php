<?php
/**
 * UsergroupListElement
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
 * The version of the OpenAPI document: 1.2.2
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
 * UsergroupListElement Class Doc Comment
 *
 * @category Class
 * @description A Usergroup List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsergroupListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'usergroup-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiUsergroupID' => 'int',
        'sUsergroupNameX' => 'string',
        'iCountUser' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiUsergroupID' => null,
        'sUsergroupNameX' => null,
        'iCountUser' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiUsergroupID' => false,
		'sUsergroupNameX' => false,
		'iCountUser' => false
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
        'pkiUsergroupID' => 'pkiUsergroupID',
        'sUsergroupNameX' => 'sUsergroupNameX',
        'iCountUser' => 'iCountUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiUsergroupID' => 'setPkiUsergroupID',
        'sUsergroupNameX' => 'setSUsergroupNameX',
        'iCountUser' => 'setICountUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiUsergroupID' => 'getPkiUsergroupID',
        'sUsergroupNameX' => 'getSUsergroupNameX',
        'iCountUser' => 'getICountUser'
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
        $this->setIfExists('pkiUsergroupID', $data ?? [], null);
        $this->setIfExists('sUsergroupNameX', $data ?? [], null);
        $this->setIfExists('iCountUser', $data ?? [], null);
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

        if ($this->container['pkiUsergroupID'] === null) {
            $invalidProperties[] = "'pkiUsergroupID' can't be null";
        }
        if (($this->container['pkiUsergroupID'] > 255)) {
            $invalidProperties[] = "invalid value for 'pkiUsergroupID', must be smaller than or equal to 255.";
        }

        if (($this->container['pkiUsergroupID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiUsergroupID', must be bigger than or equal to 0.";
        }

        if ($this->container['sUsergroupNameX'] === null) {
            $invalidProperties[] = "'sUsergroupNameX' can't be null";
        }
	//if (!preg_match("/^.{0,50}$/", $this->container['sUsergroupNameX'])) {
        if (!is_null($this->container['sUsergroupNameX']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sUsergroupNameX'])) {
            $invalidProperties[] = "invalid value for 'sUsergroupNameX', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['iCountUser'] === null) {
            $invalidProperties[] = "'iCountUser' can't be null";
        }
        if (($this->container['iCountUser'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iCountUser', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iCountUser'] < 0)) {
            $invalidProperties[] = "invalid value for 'iCountUser', must be bigger than or equal to 0.";
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
     * Gets pkiUsergroupID
     *
     * @return int
     */
    public function getPkiUsergroupID()
    {
	//return $this->container['pkiUsergroupID'];
        return $this->container['pkiUsergroupID'];
    }

    /**
     * Sets pkiUsergroupID
     *
     * @param int $pkiUsergroupID The unique ID of the Usergroup
     *
     * @return self
     */
    public function setPkiUsergroupID($pkiUsergroupID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiUsergroupID)) {
            //throw new \InvalidArgumentException('non-nullable pkiUsergroupID cannot be null');
        //}

	//if (($pkiUsergroupID > 255)) {
        if (($pkiUsergroupID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiUsergroupID when calling UsergroupListElement., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiUsergroupID)?'null':'"'.$pkiUsergroupID.'"').' for pkiUsergroupID when calling UsergroupListElement., must be smaller than or equal to 255.');
        }
	//if (($pkiUsergroupID < 0)) {
        if (($pkiUsergroupID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiUsergroupID when calling UsergroupListElement., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiUsergroupID)?'null':'"'.$pkiUsergroupID.'"').' for pkiUsergroupID when calling UsergroupListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiUsergroupID'] = $pkiUsergroupID;
        $this->container['pkiUsergroupID'] = (is_null($pkiUsergroupID) ? null : (int) $pkiUsergroupID);

        return $this;
    }

    /**
     * Gets sUsergroupNameX
     *
     * @return string
     */
    public function getSUsergroupNameX()
    {
	//return $this->container['sUsergroupNameX'];
        return is_null($this->container['sUsergroupNameX']) ? null : trim($this->container['sUsergroupNameX']);
    }

    /**
     * Sets sUsergroupNameX
     *
     * @param string $sUsergroupNameX The Name of the Usergroup in the language of the requester
     *
     * @return self
     */
    public function setSUsergroupNameX($sUsergroupNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUsergroupNameX)) {
            //throw new \InvalidArgumentException('non-nullable sUsergroupNameX cannot be null');
        //}

	//if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sUsergroupNameX)))) {
        if (!is_null($sUsergroupNameX) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sUsergroupNameX)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sUsergroupNameX when calling UsergroupListElement., must conform to the pattern /^.{0,50}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sUsergroupNameX)?'null':'"'.$sUsergroupNameX.'"')." for sUsergroupNameX when calling UsergroupListElement., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUsergroupNameX'] = $sUsergroupNameX;
        $this->container['sUsergroupNameX'] = (is_null($sUsergroupNameX) ? null : trim((string) $sUsergroupNameX));

        return $this;
    }

    /**
     * Gets iCountUser
     *
     * @return int
     */
    public function getICountUser()
    {
	//return $this->container['iCountUser'];
        return $this->container['iCountUser'];
    }

    /**
     * Sets iCountUser
     *
     * @param int $iCountUser Number of users in group
     *
     * @return self
     */
    public function setICountUser($iCountUser)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iCountUser)) {
            //throw new \InvalidArgumentException('non-nullable iCountUser cannot be null');
        //}

	//if (($iCountUser > 16777215)) {
        if (($iCountUser > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $iCountUser when calling UsergroupListElement., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iCountUser)?'null':'"'.$iCountUser.'"').' for iCountUser when calling UsergroupListElement., must be smaller than or equal to 16777215.');
        }
	//if (($iCountUser < 0)) {
        if (($iCountUser < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iCountUser when calling UsergroupListElement., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iCountUser)?'null':'"'.$iCountUser.'"').' for iCountUser when calling UsergroupListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iCountUser'] = $iCountUser;
        $this->container['iCountUser'] = (is_null($iCountUser) ? null : (int) $iCountUser);

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


