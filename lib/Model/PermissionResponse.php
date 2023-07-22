<?php
/**
 * PermissionResponse
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * PermissionResponse Class Doc Comment
 *
 * @category Class
 * @description A Permission Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PermissionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'permission-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiPermissionID' => 'int',
        'fkiUserID' => 'int',
        'fkiApikeyID' => 'int',
        'fkiUsergroupID' => 'int',
        'fkiCompanyID' => 'int',
        'fkiModulesectionID' => 'int',
        'sCompanyNameX' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiPermissionID' => null,
        'fkiUserID' => null,
        'fkiApikeyID' => null,
        'fkiUsergroupID' => null,
        'fkiCompanyID' => null,
        'fkiModulesectionID' => null,
        'sCompanyNameX' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiPermissionID' => false,
		'fkiUserID' => false,
		'fkiApikeyID' => false,
		'fkiUsergroupID' => false,
		'fkiCompanyID' => false,
		'fkiModulesectionID' => false,
		'sCompanyNameX' => false
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
        'pkiPermissionID' => 'pkiPermissionID',
        'fkiUserID' => 'fkiUserID',
        'fkiApikeyID' => 'fkiApikeyID',
        'fkiUsergroupID' => 'fkiUsergroupID',
        'fkiCompanyID' => 'fkiCompanyID',
        'fkiModulesectionID' => 'fkiModulesectionID',
        'sCompanyNameX' => 'sCompanyNameX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiPermissionID' => 'setPkiPermissionID',
        'fkiUserID' => 'setFkiUserID',
        'fkiApikeyID' => 'setFkiApikeyID',
        'fkiUsergroupID' => 'setFkiUsergroupID',
        'fkiCompanyID' => 'setFkiCompanyID',
        'fkiModulesectionID' => 'setFkiModulesectionID',
        'sCompanyNameX' => 'setSCompanyNameX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiPermissionID' => 'getPkiPermissionID',
        'fkiUserID' => 'getFkiUserID',
        'fkiApikeyID' => 'getFkiApikeyID',
        'fkiUsergroupID' => 'getFkiUsergroupID',
        'fkiCompanyID' => 'getFkiCompanyID',
        'fkiModulesectionID' => 'getFkiModulesectionID',
        'sCompanyNameX' => 'getSCompanyNameX'
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
        $this->setIfExists('pkiPermissionID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('fkiApikeyID', $data ?? [], null);
        $this->setIfExists('fkiUsergroupID', $data ?? [], null);
        $this->setIfExists('fkiCompanyID', $data ?? [], null);
        $this->setIfExists('fkiModulesectionID', $data ?? [], null);
        $this->setIfExists('sCompanyNameX', $data ?? [], null);
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

        if ($this->container['pkiPermissionID'] === null) {
            $invalidProperties[] = "'pkiPermissionID' can't be null";
        }
        if (($this->container['pkiPermissionID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiPermissionID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiPermissionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiPermissionID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUserID']) && ($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiApikeyID']) && ($this->container['fkiApikeyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiApikeyID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUsergroupID']) && ($this->container['fkiUsergroupID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiUsergroupID', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fkiUsergroupID']) && ($this->container['fkiUsergroupID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUsergroupID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiCompanyID']) && ($this->container['fkiCompanyID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiCompanyID', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fkiCompanyID']) && ($this->container['fkiCompanyID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiCompanyID', must be bigger than or equal to 1.";
        }

        if ($this->container['fkiModulesectionID'] === null) {
            $invalidProperties[] = "'fkiModulesectionID' can't be null";
        }
        if (($this->container['fkiModulesectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiModulesectionID', must be bigger than or equal to 0.";
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
     * Gets pkiPermissionID
     *
     * @return int
     */
    public function getPkiPermissionID()
    {
        return $this->container['pkiPermissionID'];
    }

    /**
     * Sets pkiPermissionID
     *
     * @param int $pkiPermissionID The unique ID of the Permission
     *
     * @return self
     */
    public function setPkiPermissionID($pkiPermissionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiPermissionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiPermissionID cannot be null');
        //}

//        if (($pkiPermissionID > 65535)) {
        if (($pkiPermissionID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $pkiPermissionID when calling PermissionResponse., must be smaller than or equal to 65535.');
        }
//        if (($pkiPermissionID < 0)) {
        if (($pkiPermissionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiPermissionID when calling PermissionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiPermissionID'] = $pkiPermissionID;
        $this->container['pkiPermissionID'] = (is_null($pkiPermissionID) ? null : (int) $pkiPermissionID);

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int|null
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int|null $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserID cannot be null');
        //}

//        if (($fkiUserID < 0)) {
        if (!is_null($fkiUserID) && ($fkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserID when calling PermissionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiApikeyID)) {
            //throw new \InvalidArgumentException('non-nullable fkiApikeyID cannot be null');
        //}

//        if (($fkiApikeyID < 0)) {
        if (!is_null($fkiApikeyID) && ($fkiApikeyID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiApikeyID when calling PermissionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiApikeyID'] = $fkiApikeyID;
        $this->container['fkiApikeyID'] = (is_null($fkiApikeyID) ? null : (int) $fkiApikeyID);

        return $this;
    }

    /**
     * Gets fkiUsergroupID
     *
     * @return int|null
     */
    public function getFkiUsergroupID()
    {
        return $this->container['fkiUsergroupID'];
    }

    /**
     * Sets fkiUsergroupID
     *
     * @param int|null $fkiUsergroupID The unique ID of the Usergroup
     *
     * @return self
     */
    public function setFkiUsergroupID($fkiUsergroupID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUsergroupID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUsergroupID cannot be null');
        //}

//        if (($fkiUsergroupID > 255)) {
        if (!is_null($fkiUsergroupID) && ($fkiUsergroupID > 255)) {
            throw new \InvalidArgumentException('invalid value for $fkiUsergroupID when calling PermissionResponse., must be smaller than or equal to 255.');
        }
//        if (($fkiUsergroupID < 0)) {
        if (!is_null($fkiUsergroupID) && ($fkiUsergroupID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUsergroupID when calling PermissionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUsergroupID'] = $fkiUsergroupID;
        $this->container['fkiUsergroupID'] = (is_null($fkiUsergroupID) ? null : (int) $fkiUsergroupID);

        return $this;
    }

    /**
     * Gets fkiCompanyID
     *
     * @return int|null
     */
    public function getFkiCompanyID()
    {
        return $this->container['fkiCompanyID'];
    }

    /**
     * Sets fkiCompanyID
     *
     * @param int|null $fkiCompanyID The unique ID of the Company
     *
     * @return self
     */
    public function setFkiCompanyID($fkiCompanyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiCompanyID)) {
            //throw new \InvalidArgumentException('non-nullable fkiCompanyID cannot be null');
        //}

//        if (($fkiCompanyID > 255)) {
        if (!is_null($fkiCompanyID) && ($fkiCompanyID > 255)) {
            throw new \InvalidArgumentException('invalid value for $fkiCompanyID when calling PermissionResponse., must be smaller than or equal to 255.');
        }
//        if (($fkiCompanyID < 1)) {
        if (!is_null($fkiCompanyID) && ($fkiCompanyID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiCompanyID when calling PermissionResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiCompanyID'] = $fkiCompanyID;
        $this->container['fkiCompanyID'] = (is_null($fkiCompanyID) ? null : (int) $fkiCompanyID);

        return $this;
    }

    /**
     * Gets fkiModulesectionID
     *
     * @return int
     */
    public function getFkiModulesectionID()
    {
        return $this->container['fkiModulesectionID'];
    }

    /**
     * Sets fkiModulesectionID
     *
     * @param int $fkiModulesectionID The unique ID of the Modulesection
     *
     * @return self
     */
    public function setFkiModulesectionID($fkiModulesectionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiModulesectionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiModulesectionID cannot be null');
        //}

//        if (($fkiModulesectionID < 0)) {
        if (($fkiModulesectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiModulesectionID when calling PermissionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiModulesectionID'] = $fkiModulesectionID;
        $this->container['fkiModulesectionID'] = (is_null($fkiModulesectionID) ? null : (int) $fkiModulesectionID);

        return $this;
    }

    /**
     * Gets sCompanyNameX
     *
     * @return string|null
     */
    public function getSCompanyNameX()
    {
        return $this->container['sCompanyNameX'];
    }

    /**
     * Sets sCompanyNameX
     *
     * @param string|null $sCompanyNameX The Name of the Company in the language of the requester
     *
     * @return self
     */
    public function setSCompanyNameX($sCompanyNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCompanyNameX)) {
            //throw new \InvalidArgumentException('non-nullable sCompanyNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCompanyNameX'] = $sCompanyNameX;
        $this->container['sCompanyNameX'] = (is_null($sCompanyNameX) ? null : (string) $sCompanyNameX);

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


