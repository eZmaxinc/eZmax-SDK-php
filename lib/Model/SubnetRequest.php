<?php
/**
 * SubnetRequest
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
 * Generator version: 7.10.0
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
 * SubnetRequest Class Doc Comment
 *
 * @category Class
 * @description A Subnet Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubnetRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'subnet-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiSubnetID' => 'int',
        'fkiUserID' => 'int',
        'fkiApikeyID' => 'int',
        'objSubnetDescription' => '\eZmaxAPI\Model\MultilingualSubnetDescription',
        'iSubnetNetwork' => 'int',
        'iSubnetMask' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiSubnetID' => null,
        'fkiUserID' => null,
        'fkiApikeyID' => null,
        'objSubnetDescription' => null,
        'iSubnetNetwork' => 'int64',
        'iSubnetMask' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiSubnetID' => false,
		'fkiUserID' => false,
		'fkiApikeyID' => false,
		'objSubnetDescription' => false,
		'iSubnetNetwork' => false,
		'iSubnetMask' => false
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
        'pkiSubnetID' => 'pkiSubnetID',
        'fkiUserID' => 'fkiUserID',
        'fkiApikeyID' => 'fkiApikeyID',
        'objSubnetDescription' => 'objSubnetDescription',
        'iSubnetNetwork' => 'iSubnetNetwork',
        'iSubnetMask' => 'iSubnetMask'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiSubnetID' => 'setPkiSubnetID',
        'fkiUserID' => 'setFkiUserID',
        'fkiApikeyID' => 'setFkiApikeyID',
        'objSubnetDescription' => 'setObjSubnetDescription',
        'iSubnetNetwork' => 'setISubnetNetwork',
        'iSubnetMask' => 'setISubnetMask'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiSubnetID' => 'getPkiSubnetID',
        'fkiUserID' => 'getFkiUserID',
        'fkiApikeyID' => 'getFkiApikeyID',
        'objSubnetDescription' => 'getObjSubnetDescription',
        'iSubnetNetwork' => 'getISubnetNetwork',
        'iSubnetMask' => 'getISubnetMask'
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
        $this->setIfExists('pkiSubnetID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('fkiApikeyID', $data ?? [], null);
        $this->setIfExists('objSubnetDescription', $data ?? [], null);
        $this->setIfExists('iSubnetNetwork', $data ?? [], null);
        $this->setIfExists('iSubnetMask', $data ?? [], null);
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

        if (!is_null($this->container['pkiSubnetID']) && ($this->container['pkiSubnetID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiSubnetID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['pkiSubnetID']) && ($this->container['pkiSubnetID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiSubnetID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUserID']) && ($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiApikeyID']) && ($this->container['fkiApikeyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiApikeyID', must be bigger than or equal to 0.";
        }

        if ($this->container['objSubnetDescription'] === null) {
            $invalidProperties[] = "'objSubnetDescription' can't be null";
        }
        if ($this->container['iSubnetNetwork'] === null) {
            $invalidProperties[] = "'iSubnetNetwork' can't be null";
        }
        if (($this->container['iSubnetNetwork'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'iSubnetNetwork', must be smaller than or equal to 4294967295.";
        }

        if (($this->container['iSubnetNetwork'] < 0)) {
            $invalidProperties[] = "invalid value for 'iSubnetNetwork', must be bigger than or equal to 0.";
        }

        if ($this->container['iSubnetMask'] === null) {
            $invalidProperties[] = "'iSubnetMask' can't be null";
        }
        if (($this->container['iSubnetMask'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'iSubnetMask', must be smaller than or equal to 4294967295.";
        }

        if (($this->container['iSubnetMask'] < 0)) {
            $invalidProperties[] = "invalid value for 'iSubnetMask', must be bigger than or equal to 0.";
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
     * Gets pkiSubnetID
     *
     * @return int|null
     */
    public function getPkiSubnetID()
    {
	//return $this->container['pkiSubnetID'];
        return $this->container['pkiSubnetID'];
    }

    /**
     * Sets pkiSubnetID
     *
     * @param int|null $pkiSubnetID The unique ID of the Subnet
     *
     * @return self
     */
    public function setPkiSubnetID($pkiSubnetID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiSubnetID)) {
            //throw new \InvalidArgumentException('non-nullable pkiSubnetID cannot be null');
        //}

	//if (($pkiSubnetID > 65535)) {
        if (!is_null($pkiSubnetID) && ($pkiSubnetID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiSubnetID when calling SubnetRequest., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiSubnetID)?'null':'"'.$pkiSubnetID.'"').' for pkiSubnetID when calling SubnetRequest., must be smaller than or equal to 65535.');
        }
	//if (($pkiSubnetID < 0)) {
        if (!is_null($pkiSubnetID) && ($pkiSubnetID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiSubnetID when calling SubnetRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiSubnetID)?'null':'"'.$pkiSubnetID.'"').' for pkiSubnetID when calling SubnetRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiSubnetID'] = $pkiSubnetID;
        $this->container['pkiSubnetID'] = (is_null($pkiSubnetID) ? null : (int) $pkiSubnetID);

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int|null
     */
    public function getFkiUserID()
    {
	//return $this->container['fkiUserID'];
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

	//if (($fkiUserID < 0)) {
        if (!is_null($fkiUserID) && ($fkiUserID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiUserID when calling SubnetRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserID)?'null':'"'.$fkiUserID.'"').' for fkiUserID when calling SubnetRequest., must be bigger than or equal to 0.');
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
	//return $this->container['fkiApikeyID'];
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

	//if (($fkiApikeyID < 0)) {
        if (!is_null($fkiApikeyID) && ($fkiApikeyID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiApikeyID when calling SubnetRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiApikeyID)?'null':'"'.$fkiApikeyID.'"').' for fkiApikeyID when calling SubnetRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiApikeyID'] = $fkiApikeyID;
        $this->container['fkiApikeyID'] = (is_null($fkiApikeyID) ? null : (int) $fkiApikeyID);

        return $this;
    }

    /**
     * Gets objSubnetDescription
     *
     * @return \eZmaxAPI\Model\MultilingualSubnetDescription
     */
    public function getObjSubnetDescription()
    {
	//return $this->container['objSubnetDescription'];
        return $this->container['objSubnetDescription'];
    }

    /**
     * Sets objSubnetDescription
     *
     * @param \eZmaxAPI\Model\MultilingualSubnetDescription $objSubnetDescription objSubnetDescription
     *
     * @return self
     */
    public function setObjSubnetDescription($objSubnetDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objSubnetDescription)) {
            //throw new \InvalidArgumentException('non-nullable objSubnetDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objSubnetDescription'] = $objSubnetDescription;
        $this->container['objSubnetDescription'] = $objSubnetDescription;

        return $this;
    }

    /**
     * Gets iSubnetNetwork
     *
     * @return int
     */
    public function getISubnetNetwork()
    {
	//return $this->container['iSubnetNetwork'];
        return $this->container['iSubnetNetwork'];
    }

    /**
     * Sets iSubnetNetwork
     *
     * @param int $iSubnetNetwork The network of the Subnet in integer form. For example 8.8.8.0 would be 134744064
     *
     * @return self
     */
    public function setISubnetNetwork($iSubnetNetwork)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iSubnetNetwork)) {
            //throw new \InvalidArgumentException('non-nullable iSubnetNetwork cannot be null');
        //}

	//if (($iSubnetNetwork > 4294967295)) {
        if (($iSubnetNetwork > 4294967295)) {
	    //throw new \InvalidArgumentException('invalid value for $iSubnetNetwork when calling SubnetRequest., must be smaller than or equal to 4294967295.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iSubnetNetwork)?'null':'"'.$iSubnetNetwork.'"').' for iSubnetNetwork when calling SubnetRequest., must be smaller than or equal to 4294967295.');
        }
	//if (($iSubnetNetwork < 0)) {
        if (($iSubnetNetwork < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iSubnetNetwork when calling SubnetRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iSubnetNetwork)?'null':'"'.$iSubnetNetwork.'"').' for iSubnetNetwork when calling SubnetRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iSubnetNetwork'] = $iSubnetNetwork;
        $this->container['iSubnetNetwork'] = (is_null($iSubnetNetwork) ? null : (int) $iSubnetNetwork);

        return $this;
    }

    /**
     * Gets iSubnetMask
     *
     * @return int
     */
    public function getISubnetMask()
    {
	//return $this->container['iSubnetMask'];
        return $this->container['iSubnetMask'];
    }

    /**
     * Sets iSubnetMask
     *
     * @param int $iSubnetMask The mask of the Subnet  in integer form. For example 255.255.255.0 would be 4294967040
     *
     * @return self
     */
    public function setISubnetMask($iSubnetMask)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iSubnetMask)) {
            //throw new \InvalidArgumentException('non-nullable iSubnetMask cannot be null');
        //}

	//if (($iSubnetMask > 4294967295)) {
        if (($iSubnetMask > 4294967295)) {
	    //throw new \InvalidArgumentException('invalid value for $iSubnetMask when calling SubnetRequest., must be smaller than or equal to 4294967295.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iSubnetMask)?'null':'"'.$iSubnetMask.'"').' for iSubnetMask when calling SubnetRequest., must be smaller than or equal to 4294967295.');
        }
	//if (($iSubnetMask < 0)) {
        if (($iSubnetMask < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iSubnetMask when calling SubnetRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iSubnetMask)?'null':'"'.$iSubnetMask.'"').' for iSubnetMask when calling SubnetRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iSubnetMask'] = $iSubnetMask;
        $this->container['iSubnetMask'] = (is_null($iSubnetMask) ? null : (int) $iSubnetMask);

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


