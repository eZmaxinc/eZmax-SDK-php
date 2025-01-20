<?php
/**
 * CustomDiscussionconfigurationResponse
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
 * Generator version: 7.9.0
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
 * CustomDiscussionconfigurationResponse Class Doc Comment
 *
 * @category Class
 * @description A Custom Discussionconfiguration Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomDiscussionconfigurationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Discussionconfiguration-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bDiscussionconfigurationCompletehistorywhenadded' => 'bool',
        'bDiscussionconfigurationCreateallowed' => 'bool',
        'bDiscussionconfigurationDeleteallowed' => 'bool',
        'bDiscussionconfigurationDeletediscussionmessageallowed' => 'bool',
        'bDiscussionconfigurationEditdiscussionmessageallowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bDiscussionconfigurationCompletehistorywhenadded' => null,
        'bDiscussionconfigurationCreateallowed' => null,
        'bDiscussionconfigurationDeleteallowed' => null,
        'bDiscussionconfigurationDeletediscussionmessageallowed' => null,
        'bDiscussionconfigurationEditdiscussionmessageallowed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bDiscussionconfigurationCompletehistorywhenadded' => false,
		'bDiscussionconfigurationCreateallowed' => false,
		'bDiscussionconfigurationDeleteallowed' => false,
		'bDiscussionconfigurationDeletediscussionmessageallowed' => false,
		'bDiscussionconfigurationEditdiscussionmessageallowed' => false
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
        'bDiscussionconfigurationCompletehistorywhenadded' => 'bDiscussionconfigurationCompletehistorywhenadded',
        'bDiscussionconfigurationCreateallowed' => 'bDiscussionconfigurationCreateallowed',
        'bDiscussionconfigurationDeleteallowed' => 'bDiscussionconfigurationDeleteallowed',
        'bDiscussionconfigurationDeletediscussionmessageallowed' => 'bDiscussionconfigurationDeletediscussionmessageallowed',
        'bDiscussionconfigurationEditdiscussionmessageallowed' => 'bDiscussionconfigurationEditdiscussionmessageallowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bDiscussionconfigurationCompletehistorywhenadded' => 'setBDiscussionconfigurationCompletehistorywhenadded',
        'bDiscussionconfigurationCreateallowed' => 'setBDiscussionconfigurationCreateallowed',
        'bDiscussionconfigurationDeleteallowed' => 'setBDiscussionconfigurationDeleteallowed',
        'bDiscussionconfigurationDeletediscussionmessageallowed' => 'setBDiscussionconfigurationDeletediscussionmessageallowed',
        'bDiscussionconfigurationEditdiscussionmessageallowed' => 'setBDiscussionconfigurationEditdiscussionmessageallowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bDiscussionconfigurationCompletehistorywhenadded' => 'getBDiscussionconfigurationCompletehistorywhenadded',
        'bDiscussionconfigurationCreateallowed' => 'getBDiscussionconfigurationCreateallowed',
        'bDiscussionconfigurationDeleteallowed' => 'getBDiscussionconfigurationDeleteallowed',
        'bDiscussionconfigurationDeletediscussionmessageallowed' => 'getBDiscussionconfigurationDeletediscussionmessageallowed',
        'bDiscussionconfigurationEditdiscussionmessageallowed' => 'getBDiscussionconfigurationEditdiscussionmessageallowed'
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
        $this->setIfExists('bDiscussionconfigurationCompletehistorywhenadded', $data ?? [], null);
        $this->setIfExists('bDiscussionconfigurationCreateallowed', $data ?? [], null);
        $this->setIfExists('bDiscussionconfigurationDeleteallowed', $data ?? [], null);
        $this->setIfExists('bDiscussionconfigurationDeletediscussionmessageallowed', $data ?? [], null);
        $this->setIfExists('bDiscussionconfigurationEditdiscussionmessageallowed', $data ?? [], null);
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

        if ($this->container['bDiscussionconfigurationCompletehistorywhenadded'] === null) {
            $invalidProperties[] = "'bDiscussionconfigurationCompletehistorywhenadded' can't be null";
        }
        if ($this->container['bDiscussionconfigurationCreateallowed'] === null) {
            $invalidProperties[] = "'bDiscussionconfigurationCreateallowed' can't be null";
        }
        if ($this->container['bDiscussionconfigurationDeleteallowed'] === null) {
            $invalidProperties[] = "'bDiscussionconfigurationDeleteallowed' can't be null";
        }
        if ($this->container['bDiscussionconfigurationDeletediscussionmessageallowed'] === null) {
            $invalidProperties[] = "'bDiscussionconfigurationDeletediscussionmessageallowed' can't be null";
        }
        if ($this->container['bDiscussionconfigurationEditdiscussionmessageallowed'] === null) {
            $invalidProperties[] = "'bDiscussionconfigurationEditdiscussionmessageallowed' can't be null";
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
     * Gets bDiscussionconfigurationCompletehistorywhenadded
     *
     * @return bool
     */
    public function getBDiscussionconfigurationCompletehistorywhenadded()
    {
	//return $this->container['bDiscussionconfigurationCompletehistorywhenadded'];
        return $this->container['bDiscussionconfigurationCompletehistorywhenadded'];
    }

    /**
     * Sets bDiscussionconfigurationCompletehistorywhenadded
     *
     * @param bool $bDiscussionconfigurationCompletehistorywhenadded If the added Discussionmembership will have access to the entire history or not
     *
     * @return self
     */
    public function setBDiscussionconfigurationCompletehistorywhenadded($bDiscussionconfigurationCompletehistorywhenadded)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bDiscussionconfigurationCompletehistorywhenadded)) {
            //throw new \InvalidArgumentException('non-nullable bDiscussionconfigurationCompletehistorywhenadded cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bDiscussionconfigurationCompletehistorywhenadded'] = $bDiscussionconfigurationCompletehistorywhenadded;
        $this->container['bDiscussionconfigurationCompletehistorywhenadded'] = (is_null($bDiscussionconfigurationCompletehistorywhenadded) ? null : (bool) $bDiscussionconfigurationCompletehistorywhenadded);

        return $this;
    }

    /**
     * Gets bDiscussionconfigurationCreateallowed
     *
     * @return bool
     */
    public function getBDiscussionconfigurationCreateallowed()
    {
	//return $this->container['bDiscussionconfigurationCreateallowed'];
        return $this->container['bDiscussionconfigurationCreateallowed'];
    }

    /**
     * Sets bDiscussionconfigurationCreateallowed
     *
     * @param bool $bDiscussionconfigurationCreateallowed If the the creation of the Discussion is allowed or not
     *
     * @return self
     */
    public function setBDiscussionconfigurationCreateallowed($bDiscussionconfigurationCreateallowed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bDiscussionconfigurationCreateallowed)) {
            //throw new \InvalidArgumentException('non-nullable bDiscussionconfigurationCreateallowed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bDiscussionconfigurationCreateallowed'] = $bDiscussionconfigurationCreateallowed;
        $this->container['bDiscussionconfigurationCreateallowed'] = (is_null($bDiscussionconfigurationCreateallowed) ? null : (bool) $bDiscussionconfigurationCreateallowed);

        return $this;
    }

    /**
     * Gets bDiscussionconfigurationDeleteallowed
     *
     * @return bool
     */
    public function getBDiscussionconfigurationDeleteallowed()
    {
	//return $this->container['bDiscussionconfigurationDeleteallowed'];
        return $this->container['bDiscussionconfigurationDeleteallowed'];
    }

    /**
     * Sets bDiscussionconfigurationDeleteallowed
     *
     * @param bool $bDiscussionconfigurationDeleteallowed If the the destruction of the Discussion is allowed or not
     *
     * @return self
     */
    public function setBDiscussionconfigurationDeleteallowed($bDiscussionconfigurationDeleteallowed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bDiscussionconfigurationDeleteallowed)) {
            //throw new \InvalidArgumentException('non-nullable bDiscussionconfigurationDeleteallowed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bDiscussionconfigurationDeleteallowed'] = $bDiscussionconfigurationDeleteallowed;
        $this->container['bDiscussionconfigurationDeleteallowed'] = (is_null($bDiscussionconfigurationDeleteallowed) ? null : (bool) $bDiscussionconfigurationDeleteallowed);

        return $this;
    }

    /**
     * Gets bDiscussionconfigurationDeletediscussionmessageallowed
     *
     * @return bool
     */
    public function getBDiscussionconfigurationDeletediscussionmessageallowed()
    {
	//return $this->container['bDiscussionconfigurationDeletediscussionmessageallowed'];
        return $this->container['bDiscussionconfigurationDeletediscussionmessageallowed'];
    }

    /**
     * Sets bDiscussionconfigurationDeletediscussionmessageallowed
     *
     * @param bool $bDiscussionconfigurationDeletediscussionmessageallowed If the the destruction of the Discussionmessage is allowed or not
     *
     * @return self
     */
    public function setBDiscussionconfigurationDeletediscussionmessageallowed($bDiscussionconfigurationDeletediscussionmessageallowed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bDiscussionconfigurationDeletediscussionmessageallowed)) {
            //throw new \InvalidArgumentException('non-nullable bDiscussionconfigurationDeletediscussionmessageallowed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bDiscussionconfigurationDeletediscussionmessageallowed'] = $bDiscussionconfigurationDeletediscussionmessageallowed;
        $this->container['bDiscussionconfigurationDeletediscussionmessageallowed'] = (is_null($bDiscussionconfigurationDeletediscussionmessageallowed) ? null : (bool) $bDiscussionconfigurationDeletediscussionmessageallowed);

        return $this;
    }

    /**
     * Gets bDiscussionconfigurationEditdiscussionmessageallowed
     *
     * @return bool
     */
    public function getBDiscussionconfigurationEditdiscussionmessageallowed()
    {
	//return $this->container['bDiscussionconfigurationEditdiscussionmessageallowed'];
        return $this->container['bDiscussionconfigurationEditdiscussionmessageallowed'];
    }

    /**
     * Sets bDiscussionconfigurationEditdiscussionmessageallowed
     *
     * @param bool $bDiscussionconfigurationEditdiscussionmessageallowed If the the creation of the Discussionmessage is allowed or not
     *
     * @return self
     */
    public function setBDiscussionconfigurationEditdiscussionmessageallowed($bDiscussionconfigurationEditdiscussionmessageallowed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bDiscussionconfigurationEditdiscussionmessageallowed)) {
            //throw new \InvalidArgumentException('non-nullable bDiscussionconfigurationEditdiscussionmessageallowed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bDiscussionconfigurationEditdiscussionmessageallowed'] = $bDiscussionconfigurationEditdiscussionmessageallowed;
        $this->container['bDiscussionconfigurationEditdiscussionmessageallowed'] = (is_null($bDiscussionconfigurationEditdiscussionmessageallowed) ? null : (bool) $bDiscussionconfigurationEditdiscussionmessageallowed);

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


