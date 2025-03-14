<?php
/**
 * EzsignuserResponse
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
 * Generator version: 7.12.0
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
 * EzsignuserResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsignuser Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignuserResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignuser-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignuserID' => 'int',
        'fkiContactID' => 'int',
        'objContact' => '\eZmaxAPI\Model\ContactResponseCompound',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignuserID' => null,
        'fkiContactID' => null,
        'objContact' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignuserID' => false,
		'fkiContactID' => false,
		'objContact' => false,
		'objAudit' => false
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
        'pkiEzsignuserID' => 'pkiEzsignuserID',
        'fkiContactID' => 'fkiContactID',
        'objContact' => 'objContact',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignuserID' => 'setPkiEzsignuserID',
        'fkiContactID' => 'setFkiContactID',
        'objContact' => 'setObjContact',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignuserID' => 'getPkiEzsignuserID',
        'fkiContactID' => 'getFkiContactID',
        'objContact' => 'getObjContact',
        'objAudit' => 'getObjAudit'
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
        $this->setIfExists('pkiEzsignuserID', $data ?? [], null);
        $this->setIfExists('fkiContactID', $data ?? [], null);
        $this->setIfExists('objContact', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
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

        if ($this->container['pkiEzsignuserID'] === null) {
            $invalidProperties[] = "'pkiEzsignuserID' can't be null";
        }
        if (($this->container['pkiEzsignuserID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignuserID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiEzsignuserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignuserID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiContactID'] === null) {
            $invalidProperties[] = "'fkiContactID' can't be null";
        }
        if (($this->container['fkiContactID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiContactID', must be bigger than or equal to 0.";
        }

        if ($this->container['objContact'] === null) {
            $invalidProperties[] = "'objContact' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
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
     * Gets pkiEzsignuserID
     *
     * @return int
     */
    public function getPkiEzsignuserID()
    {
	//return $this->container['pkiEzsignuserID'];
        return $this->container['pkiEzsignuserID'];
    }

    /**
     * Sets pkiEzsignuserID
     *
     * @param int $pkiEzsignuserID The unique ID of the Ezsignuser
     *
     * @return self
     */
    public function setPkiEzsignuserID($pkiEzsignuserID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignuserID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignuserID cannot be null');
        //}

	//if (($pkiEzsignuserID > 65535)) {
        if (($pkiEzsignuserID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignuserID when calling EzsignuserResponse., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignuserID)?'null':'"'.$pkiEzsignuserID.'"').' for pkiEzsignuserID when calling EzsignuserResponse., must be smaller than or equal to 65535.');
        }
	//if (($pkiEzsignuserID < 0)) {
        if (($pkiEzsignuserID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignuserID when calling EzsignuserResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignuserID)?'null':'"'.$pkiEzsignuserID.'"').' for pkiEzsignuserID when calling EzsignuserResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignuserID'] = $pkiEzsignuserID;
        $this->container['pkiEzsignuserID'] = (is_null($pkiEzsignuserID) ? null : (int) $pkiEzsignuserID);

        return $this;
    }

    /**
     * Gets fkiContactID
     *
     * @return int
     */
    public function getFkiContactID()
    {
	//return $this->container['fkiContactID'];
        return $this->container['fkiContactID'];
    }

    /**
     * Sets fkiContactID
     *
     * @param int $fkiContactID The unique ID of the Contact
     *
     * @return self
     */
    public function setFkiContactID($fkiContactID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiContactID)) {
            //throw new \InvalidArgumentException('non-nullable fkiContactID cannot be null');
        //}

	//if (($fkiContactID < 0)) {
        if (($fkiContactID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiContactID when calling EzsignuserResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiContactID)?'null':'"'.$fkiContactID.'"').' for fkiContactID when calling EzsignuserResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiContactID'] = $fkiContactID;
        $this->container['fkiContactID'] = (is_null($fkiContactID) ? null : (int) $fkiContactID);

        return $this;
    }

    /**
     * Gets objContact
     *
     * @return \eZmaxAPI\Model\ContactResponseCompound
     */
    public function getObjContact()
    {
	//return $this->container['objContact'];
        return $this->container['objContact'];
    }

    /**
     * Sets objContact
     *
     * @param \eZmaxAPI\Model\ContactResponseCompound $objContact objContact
     *
     * @return self
     */
    public function setObjContact($objContact)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objContact)) {
            //throw new \InvalidArgumentException('non-nullable objContact cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objContact'] = $objContact;
        $this->container['objContact'] = $objContact;

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
	//return $this->container['objAudit'];
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objAudit)) {
            //throw new \InvalidArgumentException('non-nullable objAudit cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objAudit'] = $objAudit;
        $this->container['objAudit'] = $objAudit;

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


