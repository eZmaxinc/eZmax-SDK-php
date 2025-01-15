<?php
/**
 * CustomCommunicationsenderRequest
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
 * CustomCommunicationsenderRequest Class Doc Comment
 *
 * @category Class
 * @description A Communicationsender Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomCommunicationsenderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Communicationsender-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiAgentID' => 'int',
        'fkiBrokerID' => 'int',
        'fkiMailboxsharedID' => 'int',
        'fkiPhonelinesharedID' => 'int',
        'fkiUserID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiAgentID' => null,
        'fkiBrokerID' => null,
        'fkiMailboxsharedID' => null,
        'fkiPhonelinesharedID' => null,
        'fkiUserID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiAgentID' => false,
		'fkiBrokerID' => false,
		'fkiMailboxsharedID' => false,
		'fkiPhonelinesharedID' => false,
		'fkiUserID' => false
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
        'fkiAgentID' => 'fkiAgentID',
        'fkiBrokerID' => 'fkiBrokerID',
        'fkiMailboxsharedID' => 'fkiMailboxsharedID',
        'fkiPhonelinesharedID' => 'fkiPhonelinesharedID',
        'fkiUserID' => 'fkiUserID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiAgentID' => 'setFkiAgentID',
        'fkiBrokerID' => 'setFkiBrokerID',
        'fkiMailboxsharedID' => 'setFkiMailboxsharedID',
        'fkiPhonelinesharedID' => 'setFkiPhonelinesharedID',
        'fkiUserID' => 'setFkiUserID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiAgentID' => 'getFkiAgentID',
        'fkiBrokerID' => 'getFkiBrokerID',
        'fkiMailboxsharedID' => 'getFkiMailboxsharedID',
        'fkiPhonelinesharedID' => 'getFkiPhonelinesharedID',
        'fkiUserID' => 'getFkiUserID'
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
        $this->setIfExists('fkiAgentID', $data ?? [], null);
        $this->setIfExists('fkiBrokerID', $data ?? [], null);
        $this->setIfExists('fkiMailboxsharedID', $data ?? [], null);
        $this->setIfExists('fkiPhonelinesharedID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
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

        if (!is_null($this->container['fkiAgentID']) && ($this->container['fkiAgentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiAgentID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiBrokerID']) && ($this->container['fkiBrokerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiBrokerID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiMailboxsharedID']) && ($this->container['fkiMailboxsharedID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiMailboxsharedID', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fkiMailboxsharedID']) && ($this->container['fkiMailboxsharedID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiMailboxsharedID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiPhonelinesharedID']) && ($this->container['fkiPhonelinesharedID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiPhonelinesharedID', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fkiPhonelinesharedID']) && ($this->container['fkiPhonelinesharedID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiPhonelinesharedID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUserID']) && ($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
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
     * Gets fkiAgentID
     *
     * @return int|null
     */
    public function getFkiAgentID()
    {
	//return $this->container['fkiAgentID'];
        return $this->container['fkiAgentID'];
    }

    /**
     * Sets fkiAgentID
     *
     * @param int|null $fkiAgentID The unique ID of the Agent.
     *
     * @return self
     */
    public function setFkiAgentID($fkiAgentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiAgentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiAgentID cannot be null');
        //}

	//if (($fkiAgentID < 0)) {
        if (!is_null($fkiAgentID) && ($fkiAgentID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiAgentID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiAgentID)?'null':'"'.$fkiAgentID.'"').' for fkiAgentID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiAgentID'] = $fkiAgentID;
        $this->container['fkiAgentID'] = (is_null($fkiAgentID) ? null : (int) $fkiAgentID);

        return $this;
    }

    /**
     * Gets fkiBrokerID
     *
     * @return int|null
     */
    public function getFkiBrokerID()
    {
	//return $this->container['fkiBrokerID'];
        return $this->container['fkiBrokerID'];
    }

    /**
     * Sets fkiBrokerID
     *
     * @param int|null $fkiBrokerID The unique ID of the Broker.
     *
     * @return self
     */
    public function setFkiBrokerID($fkiBrokerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiBrokerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBrokerID cannot be null');
        //}

	//if (($fkiBrokerID < 0)) {
        if (!is_null($fkiBrokerID) && ($fkiBrokerID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiBrokerID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiBrokerID)?'null':'"'.$fkiBrokerID.'"').' for fkiBrokerID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiBrokerID'] = $fkiBrokerID;
        $this->container['fkiBrokerID'] = (is_null($fkiBrokerID) ? null : (int) $fkiBrokerID);

        return $this;
    }

    /**
     * Gets fkiMailboxsharedID
     *
     * @return int|null
     */
    public function getFkiMailboxsharedID()
    {
	//return $this->container['fkiMailboxsharedID'];
        return $this->container['fkiMailboxsharedID'];
    }

    /**
     * Sets fkiMailboxsharedID
     *
     * @param int|null $fkiMailboxsharedID The unique ID of the Mailboxshared
     *
     * @return self
     */
    public function setFkiMailboxsharedID($fkiMailboxsharedID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiMailboxsharedID)) {
            //throw new \InvalidArgumentException('non-nullable fkiMailboxsharedID cannot be null');
        //}

	//if (($fkiMailboxsharedID > 255)) {
        if (!is_null($fkiMailboxsharedID) && ($fkiMailboxsharedID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiMailboxsharedID when calling CustomCommunicationsenderRequest., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiMailboxsharedID)?'null':'"'.$fkiMailboxsharedID.'"').' for fkiMailboxsharedID when calling CustomCommunicationsenderRequest., must be smaller than or equal to 255.');
        }
	//if (($fkiMailboxsharedID < 0)) {
        if (!is_null($fkiMailboxsharedID) && ($fkiMailboxsharedID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiMailboxsharedID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiMailboxsharedID)?'null':'"'.$fkiMailboxsharedID.'"').' for fkiMailboxsharedID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiMailboxsharedID'] = $fkiMailboxsharedID;
        $this->container['fkiMailboxsharedID'] = (is_null($fkiMailboxsharedID) ? null : (int) $fkiMailboxsharedID);

        return $this;
    }

    /**
     * Gets fkiPhonelinesharedID
     *
     * @return int|null
     */
    public function getFkiPhonelinesharedID()
    {
	//return $this->container['fkiPhonelinesharedID'];
        return $this->container['fkiPhonelinesharedID'];
    }

    /**
     * Sets fkiPhonelinesharedID
     *
     * @param int|null $fkiPhonelinesharedID The unique ID of the Phonelineshared
     *
     * @return self
     */
    public function setFkiPhonelinesharedID($fkiPhonelinesharedID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiPhonelinesharedID)) {
            //throw new \InvalidArgumentException('non-nullable fkiPhonelinesharedID cannot be null');
        //}

	//if (($fkiPhonelinesharedID > 255)) {
        if (!is_null($fkiPhonelinesharedID) && ($fkiPhonelinesharedID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiPhonelinesharedID when calling CustomCommunicationsenderRequest., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiPhonelinesharedID)?'null':'"'.$fkiPhonelinesharedID.'"').' for fkiPhonelinesharedID when calling CustomCommunicationsenderRequest., must be smaller than or equal to 255.');
        }
	//if (($fkiPhonelinesharedID < 0)) {
        if (!is_null($fkiPhonelinesharedID) && ($fkiPhonelinesharedID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiPhonelinesharedID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiPhonelinesharedID)?'null':'"'.$fkiPhonelinesharedID.'"').' for fkiPhonelinesharedID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiPhonelinesharedID'] = $fkiPhonelinesharedID;
        $this->container['fkiPhonelinesharedID'] = (is_null($fkiPhonelinesharedID) ? null : (int) $fkiPhonelinesharedID);

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
	    //throw new \InvalidArgumentException('invalid value for $fkiUserID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserID)?'null':'"'.$fkiUserID.'"').' for fkiUserID when calling CustomCommunicationsenderRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

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


