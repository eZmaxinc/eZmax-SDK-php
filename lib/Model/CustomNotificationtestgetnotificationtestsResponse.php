<?php
/**
 * CustomNotificationtestgetnotificationtestsResponse
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
 * CustomNotificationtestgetnotificationtestsResponse Class Doc Comment
 *
 * @category Class
 * @description A Notificationtest Object in the context of getNotificationtests
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomNotificationtestgetnotificationtestsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Notificationtestgetnotificationtests-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiNotificationtestID' => 'int',
        'objNotificationtestName' => '\eZmaxAPI\Model\MultilingualNotificationtestName',
        'fkiNotificationsubsectionID' => 'int',
        'sNotificationtestFunction' => 'string',
        'sNotificationtestNameX' => 'string',
        'eNotificationpreferenceStatus' => '\eZmaxAPI\Model\FieldENotificationpreferenceStatus',
        'iNotificationtest' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiNotificationtestID' => null,
        'objNotificationtestName' => null,
        'fkiNotificationsubsectionID' => null,
        'sNotificationtestFunction' => null,
        'sNotificationtestNameX' => null,
        'eNotificationpreferenceStatus' => null,
        'iNotificationtest' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiNotificationtestID' => false,
		'objNotificationtestName' => false,
		'fkiNotificationsubsectionID' => false,
		'sNotificationtestFunction' => false,
		'sNotificationtestNameX' => false,
		'eNotificationpreferenceStatus' => false,
		'iNotificationtest' => false
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
        'pkiNotificationtestID' => 'pkiNotificationtestID',
        'objNotificationtestName' => 'objNotificationtestName',
        'fkiNotificationsubsectionID' => 'fkiNotificationsubsectionID',
        'sNotificationtestFunction' => 'sNotificationtestFunction',
        'sNotificationtestNameX' => 'sNotificationtestNameX',
        'eNotificationpreferenceStatus' => 'eNotificationpreferenceStatus',
        'iNotificationtest' => 'iNotificationtest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiNotificationtestID' => 'setPkiNotificationtestID',
        'objNotificationtestName' => 'setObjNotificationtestName',
        'fkiNotificationsubsectionID' => 'setFkiNotificationsubsectionID',
        'sNotificationtestFunction' => 'setSNotificationtestFunction',
        'sNotificationtestNameX' => 'setSNotificationtestNameX',
        'eNotificationpreferenceStatus' => 'setENotificationpreferenceStatus',
        'iNotificationtest' => 'setINotificationtest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiNotificationtestID' => 'getPkiNotificationtestID',
        'objNotificationtestName' => 'getObjNotificationtestName',
        'fkiNotificationsubsectionID' => 'getFkiNotificationsubsectionID',
        'sNotificationtestFunction' => 'getSNotificationtestFunction',
        'sNotificationtestNameX' => 'getSNotificationtestNameX',
        'eNotificationpreferenceStatus' => 'getENotificationpreferenceStatus',
        'iNotificationtest' => 'getINotificationtest'
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
        $this->setIfExists('pkiNotificationtestID', $data ?? [], null);
        $this->setIfExists('objNotificationtestName', $data ?? [], null);
        $this->setIfExists('fkiNotificationsubsectionID', $data ?? [], null);
        $this->setIfExists('sNotificationtestFunction', $data ?? [], null);
        $this->setIfExists('sNotificationtestNameX', $data ?? [], null);
        $this->setIfExists('eNotificationpreferenceStatus', $data ?? [], null);
        $this->setIfExists('iNotificationtest', $data ?? [], null);
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

        if ($this->container['pkiNotificationtestID'] === null) {
            $invalidProperties[] = "'pkiNotificationtestID' can't be null";
        }
        if (($this->container['pkiNotificationtestID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiNotificationtestID', must be bigger than or equal to 0.";
        }

        if ($this->container['objNotificationtestName'] === null) {
            $invalidProperties[] = "'objNotificationtestName' can't be null";
        }
        if ($this->container['fkiNotificationsubsectionID'] === null) {
            $invalidProperties[] = "'fkiNotificationsubsectionID' can't be null";
        }
        if (($this->container['fkiNotificationsubsectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiNotificationsubsectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['sNotificationtestFunction'] === null) {
            $invalidProperties[] = "'sNotificationtestFunction' can't be null";
        }
        if ($this->container['sNotificationtestNameX'] === null) {
            $invalidProperties[] = "'sNotificationtestNameX' can't be null";
        }
        if ($this->container['eNotificationpreferenceStatus'] === null) {
            $invalidProperties[] = "'eNotificationpreferenceStatus' can't be null";
        }
        if ($this->container['iNotificationtest'] === null) {
            $invalidProperties[] = "'iNotificationtest' can't be null";
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
     * Gets pkiNotificationtestID
     *
     * @return int
     */
    public function getPkiNotificationtestID()
    {
	//return $this->container['pkiNotificationtestID'];
        return $this->container['pkiNotificationtestID'];
    }

    /**
     * Sets pkiNotificationtestID
     *
     * @param int $pkiNotificationtestID The unique ID of the Notificationtest
     *
     * @return self
     */
    public function setPkiNotificationtestID($pkiNotificationtestID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiNotificationtestID)) {
            //throw new \InvalidArgumentException('non-nullable pkiNotificationtestID cannot be null');
        //}

	//if (($pkiNotificationtestID < 0)) {
        if (($pkiNotificationtestID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiNotificationtestID when calling CustomNotificationtestgetnotificationtestsResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiNotificationtestID)?'null':'"'.$pkiNotificationtestID.'"').' for pkiNotificationtestID when calling CustomNotificationtestgetnotificationtestsResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiNotificationtestID'] = $pkiNotificationtestID;
        $this->container['pkiNotificationtestID'] = (is_null($pkiNotificationtestID) ? null : (int) $pkiNotificationtestID);

        return $this;
    }

    /**
     * Gets objNotificationtestName
     *
     * @return \eZmaxAPI\Model\MultilingualNotificationtestName
     */
    public function getObjNotificationtestName()
    {
	//return $this->container['objNotificationtestName'];
        return $this->container['objNotificationtestName'];
    }

    /**
     * Sets objNotificationtestName
     *
     * @param \eZmaxAPI\Model\MultilingualNotificationtestName $objNotificationtestName objNotificationtestName
     *
     * @return self
     */
    public function setObjNotificationtestName($objNotificationtestName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objNotificationtestName)) {
            //throw new \InvalidArgumentException('non-nullable objNotificationtestName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objNotificationtestName'] = $objNotificationtestName;
        $this->container['objNotificationtestName'] = $objNotificationtestName;

        return $this;
    }

    /**
     * Gets fkiNotificationsubsectionID
     *
     * @return int
     */
    public function getFkiNotificationsubsectionID()
    {
	//return $this->container['fkiNotificationsubsectionID'];
        return $this->container['fkiNotificationsubsectionID'];
    }

    /**
     * Sets fkiNotificationsubsectionID
     *
     * @param int $fkiNotificationsubsectionID The unique ID of the Notificationsubsection
     *
     * @return self
     */
    public function setFkiNotificationsubsectionID($fkiNotificationsubsectionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiNotificationsubsectionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiNotificationsubsectionID cannot be null');
        //}

	//if (($fkiNotificationsubsectionID < 0)) {
        if (($fkiNotificationsubsectionID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiNotificationsubsectionID when calling CustomNotificationtestgetnotificationtestsResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiNotificationsubsectionID)?'null':'"'.$fkiNotificationsubsectionID.'"').' for fkiNotificationsubsectionID when calling CustomNotificationtestgetnotificationtestsResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiNotificationsubsectionID'] = $fkiNotificationsubsectionID;
        $this->container['fkiNotificationsubsectionID'] = (is_null($fkiNotificationsubsectionID) ? null : (int) $fkiNotificationsubsectionID);

        return $this;
    }

    /**
     * Gets sNotificationtestFunction
     *
     * @return string
     */
    public function getSNotificationtestFunction()
    {
	//return $this->container['sNotificationtestFunction'];
        return is_null($this->container['sNotificationtestFunction']) ? null : trim($this->container['sNotificationtestFunction']);
    }

    /**
     * Sets sNotificationtestFunction
     *
     * @param string $sNotificationtestFunction The function name of the Notificationtest
     *
     * @return self
     */
    public function setSNotificationtestFunction($sNotificationtestFunction)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sNotificationtestFunction)) {
            //throw new \InvalidArgumentException('non-nullable sNotificationtestFunction cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sNotificationtestFunction'] = $sNotificationtestFunction;
        $this->container['sNotificationtestFunction'] = (is_null($sNotificationtestFunction) ? null : trim((string) $sNotificationtestFunction));

        return $this;
    }

    /**
     * Gets sNotificationtestNameX
     *
     * @return string
     */
    public function getSNotificationtestNameX()
    {
	//return $this->container['sNotificationtestNameX'];
        return is_null($this->container['sNotificationtestNameX']) ? null : trim($this->container['sNotificationtestNameX']);
    }

    /**
     * Sets sNotificationtestNameX
     *
     * @param string $sNotificationtestNameX The name of the Notificationtest in the language of the requester
     *
     * @return self
     */
    public function setSNotificationtestNameX($sNotificationtestNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sNotificationtestNameX)) {
            //throw new \InvalidArgumentException('non-nullable sNotificationtestNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sNotificationtestNameX'] = $sNotificationtestNameX;
        $this->container['sNotificationtestNameX'] = (is_null($sNotificationtestNameX) ? null : trim((string) $sNotificationtestNameX));

        return $this;
    }

    /**
     * Gets eNotificationpreferenceStatus
     *
     * @return \eZmaxAPI\Model\FieldENotificationpreferenceStatus
     */
    public function getENotificationpreferenceStatus()
    {
	//return $this->container['eNotificationpreferenceStatus'];
        return $this->container['eNotificationpreferenceStatus'];
    }

    /**
     * Sets eNotificationpreferenceStatus
     *
     * @param \eZmaxAPI\Model\FieldENotificationpreferenceStatus $eNotificationpreferenceStatus eNotificationpreferenceStatus
     *
     * @return self
     */
    public function setENotificationpreferenceStatus($eNotificationpreferenceStatus)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eNotificationpreferenceStatus)) {
            //throw new \InvalidArgumentException('non-nullable eNotificationpreferenceStatus cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eNotificationpreferenceStatus'] = $eNotificationpreferenceStatus;
        $this->container['eNotificationpreferenceStatus'] = $eNotificationpreferenceStatus;

        return $this;
    }

    /**
     * Gets iNotificationtest
     *
     * @return int
     */
    public function getINotificationtest()
    {
	//return $this->container['iNotificationtest'];
        return $this->container['iNotificationtest'];
    }

    /**
     * Sets iNotificationtest
     *
     * @param int $iNotificationtest The number of elements returned by the Notificationtest
     *
     * @return self
     */
    public function setINotificationtest($iNotificationtest)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iNotificationtest)) {
            //throw new \InvalidArgumentException('non-nullable iNotificationtest cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iNotificationtest'] = $iNotificationtest;
        $this->container['iNotificationtest'] = (is_null($iNotificationtest) ? null : (int) $iNotificationtest);

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


