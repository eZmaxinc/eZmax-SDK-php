<?php
/**
 * EzsigndocumentlogResponse
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
 * EzsigndocumentlogResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsigndocumentlog Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigndocumentlogResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocumentlog-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiUserID' => 'int',
        'fkiEzsignsignerID' => 'int',
        'dtEzsigndocumentlogDatetime' => 'string',
        'eEzsigndocumentlogType' => '\eZmaxAPI\Model\FieldEEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'string',
        'sEzsigndocumentlogLastname' => 'string',
        'sEzsigndocumentlogFirstname' => 'string',
        'sEzsigndocumentlogIP' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiUserID' => null,
        'fkiEzsignsignerID' => null,
        'dtEzsigndocumentlogDatetime' => null,
        'eEzsigndocumentlogType' => null,
        'sEzsigndocumentlogDetail' => null,
        'sEzsigndocumentlogLastname' => null,
        'sEzsigndocumentlogFirstname' => null,
        'sEzsigndocumentlogIP' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiUserID' => false,
		'fkiEzsignsignerID' => false,
		'dtEzsigndocumentlogDatetime' => false,
		'eEzsigndocumentlogType' => false,
		'sEzsigndocumentlogDetail' => false,
		'sEzsigndocumentlogLastname' => false,
		'sEzsigndocumentlogFirstname' => false,
		'sEzsigndocumentlogIP' => false
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
        'fkiUserID' => 'fkiUserID',
        'fkiEzsignsignerID' => 'fkiEzsignsignerID',
        'dtEzsigndocumentlogDatetime' => 'dtEzsigndocumentlogDatetime',
        'eEzsigndocumentlogType' => 'eEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'sEzsigndocumentlogDetail',
        'sEzsigndocumentlogLastname' => 'sEzsigndocumentlogLastname',
        'sEzsigndocumentlogFirstname' => 'sEzsigndocumentlogFirstname',
        'sEzsigndocumentlogIP' => 'sEzsigndocumentlogIP'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiUserID' => 'setFkiUserID',
        'fkiEzsignsignerID' => 'setFkiEzsignsignerID',
        'dtEzsigndocumentlogDatetime' => 'setDtEzsigndocumentlogDatetime',
        'eEzsigndocumentlogType' => 'setEEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'setSEzsigndocumentlogDetail',
        'sEzsigndocumentlogLastname' => 'setSEzsigndocumentlogLastname',
        'sEzsigndocumentlogFirstname' => 'setSEzsigndocumentlogFirstname',
        'sEzsigndocumentlogIP' => 'setSEzsigndocumentlogIP'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiUserID' => 'getFkiUserID',
        'fkiEzsignsignerID' => 'getFkiEzsignsignerID',
        'dtEzsigndocumentlogDatetime' => 'getDtEzsigndocumentlogDatetime',
        'eEzsigndocumentlogType' => 'getEEzsigndocumentlogType',
        'sEzsigndocumentlogDetail' => 'getSEzsigndocumentlogDetail',
        'sEzsigndocumentlogLastname' => 'getSEzsigndocumentlogLastname',
        'sEzsigndocumentlogFirstname' => 'getSEzsigndocumentlogFirstname',
        'sEzsigndocumentlogIP' => 'getSEzsigndocumentlogIP'
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
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('fkiEzsignsignerID', $data ?? [], null);
        $this->setIfExists('dtEzsigndocumentlogDatetime', $data ?? [], null);
        $this->setIfExists('eEzsigndocumentlogType', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentlogDetail', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentlogLastname', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentlogFirstname', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentlogIP', $data ?? [], null);
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

        if (!is_null($this->container['fkiUserID']) && ($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignsignerID']) && ($this->container['fkiEzsignsignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignsignerID', must be bigger than or equal to 0.";
        }

        if ($this->container['dtEzsigndocumentlogDatetime'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentlogDatetime' can't be null";
        }
        if ($this->container['eEzsigndocumentlogType'] === null) {
            $invalidProperties[] = "'eEzsigndocumentlogType' can't be null";
        }
        if ($this->container['sEzsigndocumentlogDetail'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogDetail' can't be null";
        }
        if ($this->container['sEzsigndocumentlogLastname'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogLastname' can't be null";
        }
        if ($this->container['sEzsigndocumentlogFirstname'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogFirstname' can't be null";
        }
        if ($this->container['sEzsigndocumentlogIP'] === null) {
            $invalidProperties[] = "'sEzsigndocumentlogIP' can't be null";
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
	    //throw new \InvalidArgumentException('invalid value for $fkiUserID when calling EzsigndocumentlogResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserID)?'null':'"'.$fkiUserID.'"').' for fkiUserID when calling EzsigndocumentlogResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets fkiEzsignsignerID
     *
     * @return int|null
     */
    public function getFkiEzsignsignerID()
    {
	//return $this->container['fkiEzsignsignerID'];
        return $this->container['fkiEzsignsignerID'];
    }

    /**
     * Sets fkiEzsignsignerID
     *
     * @param int|null $fkiEzsignsignerID The unique ID of the Ezsignsigner
     *
     * @return self
     */
    public function setFkiEzsignsignerID($fkiEzsignsignerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignsignerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignsignerID cannot be null');
        //}

	//if (($fkiEzsignsignerID < 0)) {
        if (!is_null($fkiEzsignsignerID) && ($fkiEzsignsignerID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsignsignerID when calling EzsigndocumentlogResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignsignerID)?'null':'"'.$fkiEzsignsignerID.'"').' for fkiEzsignsignerID when calling EzsigndocumentlogResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignsignerID'] = $fkiEzsignsignerID;
        $this->container['fkiEzsignsignerID'] = (is_null($fkiEzsignsignerID) ? null : (int) $fkiEzsignsignerID);

        return $this;
    }

    /**
     * Gets dtEzsigndocumentlogDatetime
     *
     * @return string
     */
    public function getDtEzsigndocumentlogDatetime()
    {
	//return $this->container['dtEzsigndocumentlogDatetime'];
        return is_null($this->container['dtEzsigndocumentlogDatetime']) ? null : trim($this->container['dtEzsigndocumentlogDatetime']);
    }

    /**
     * Sets dtEzsigndocumentlogDatetime
     *
     * @param string $dtEzsigndocumentlogDatetime The date and time at which the event was logged
     *
     * @return self
     */
    public function setDtEzsigndocumentlogDatetime($dtEzsigndocumentlogDatetime)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzsigndocumentlogDatetime)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsigndocumentlogDatetime cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzsigndocumentlogDatetime'] = $dtEzsigndocumentlogDatetime;
        $this->container['dtEzsigndocumentlogDatetime'] = (is_null($dtEzsigndocumentlogDatetime) ? null : trim((string) $dtEzsigndocumentlogDatetime));

        return $this;
    }

    /**
     * Gets eEzsigndocumentlogType
     *
     * @return \eZmaxAPI\Model\FieldEEzsigndocumentlogType
     */
    public function getEEzsigndocumentlogType()
    {
	//return $this->container['eEzsigndocumentlogType'];
        return $this->container['eEzsigndocumentlogType'];
    }

    /**
     * Sets eEzsigndocumentlogType
     *
     * @param \eZmaxAPI\Model\FieldEEzsigndocumentlogType $eEzsigndocumentlogType eEzsigndocumentlogType
     *
     * @return self
     */
    public function setEEzsigndocumentlogType($eEzsigndocumentlogType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsigndocumentlogType)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigndocumentlogType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsigndocumentlogType'] = $eEzsigndocumentlogType;
        $this->container['eEzsigndocumentlogType'] = $eEzsigndocumentlogType;

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogDetail
     *
     * @return string
     */
    public function getSEzsigndocumentlogDetail()
    {
	//return $this->container['sEzsigndocumentlogDetail'];
        return is_null($this->container['sEzsigndocumentlogDetail']) ? null : trim($this->container['sEzsigndocumentlogDetail']);
    }

    /**
     * Sets sEzsigndocumentlogDetail
     *
     * @param string $sEzsigndocumentlogDetail The detail of the Ezsigndocumentlog
     *
     * @return self
     */
    public function setSEzsigndocumentlogDetail($sEzsigndocumentlogDetail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigndocumentlogDetail)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentlogDetail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigndocumentlogDetail'] = $sEzsigndocumentlogDetail;
        $this->container['sEzsigndocumentlogDetail'] = (is_null($sEzsigndocumentlogDetail) ? null : trim((string) $sEzsigndocumentlogDetail));

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogLastname
     *
     * @return string
     */
    public function getSEzsigndocumentlogLastname()
    {
	//return $this->container['sEzsigndocumentlogLastname'];
        return is_null($this->container['sEzsigndocumentlogLastname']) ? null : trim($this->container['sEzsigndocumentlogLastname']);
    }

    /**
     * Sets sEzsigndocumentlogLastname
     *
     * @param string $sEzsigndocumentlogLastname The last name of the User or Ezsignsigner
     *
     * @return self
     */
    public function setSEzsigndocumentlogLastname($sEzsigndocumentlogLastname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigndocumentlogLastname)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentlogLastname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigndocumentlogLastname'] = $sEzsigndocumentlogLastname;
        $this->container['sEzsigndocumentlogLastname'] = (is_null($sEzsigndocumentlogLastname) ? null : trim((string) $sEzsigndocumentlogLastname));

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogFirstname
     *
     * @return string
     */
    public function getSEzsigndocumentlogFirstname()
    {
	//return $this->container['sEzsigndocumentlogFirstname'];
        return is_null($this->container['sEzsigndocumentlogFirstname']) ? null : trim($this->container['sEzsigndocumentlogFirstname']);
    }

    /**
     * Sets sEzsigndocumentlogFirstname
     *
     * @param string $sEzsigndocumentlogFirstname The first name of the User or Ezsignsigner
     *
     * @return self
     */
    public function setSEzsigndocumentlogFirstname($sEzsigndocumentlogFirstname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigndocumentlogFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentlogFirstname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigndocumentlogFirstname'] = $sEzsigndocumentlogFirstname;
        $this->container['sEzsigndocumentlogFirstname'] = (is_null($sEzsigndocumentlogFirstname) ? null : trim((string) $sEzsigndocumentlogFirstname));

        return $this;
    }

    /**
     * Gets sEzsigndocumentlogIP
     *
     * @return string
     */
    public function getSEzsigndocumentlogIP()
    {
	//return $this->container['sEzsigndocumentlogIP'];
        return is_null($this->container['sEzsigndocumentlogIP']) ? null : trim($this->container['sEzsigndocumentlogIP']);
    }

    /**
     * Sets sEzsigndocumentlogIP
     *
     * @param string $sEzsigndocumentlogIP Represent an IP address.
     *
     * @return self
     */
    public function setSEzsigndocumentlogIP($sEzsigndocumentlogIP)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigndocumentlogIP)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentlogIP cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigndocumentlogIP'] = $sEzsigndocumentlogIP;
        $this->container['sEzsigndocumentlogIP'] = (is_null($sEzsigndocumentlogIP) ? null : trim((string) $sEzsigndocumentlogIP));

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


