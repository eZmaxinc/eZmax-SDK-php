<?php
/**
 * CommonResponseObjDebugPayloadGetList
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
 * CommonResponseObjDebugPayloadGetList Class Doc Comment
 *
 * @category Class
 * @description This is a debug object containing debugging information on the actual function
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommonResponseObjDebugPayloadGetList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-Response-objDebugPayload_getList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iVersionMin' => 'int',
        'iVersionMax' => 'int',
        'aRequiredPermission' => 'int[]',
        'bVersionDeprecated' => 'bool',
        'dtResponseDate' => 'string',
        'aFilter' => '\eZmaxAPI\Model\CommonResponseFilter',
        'aOrderBy' => 'array<string,string>',
        'iRowMax' => 'int',
        'iRowOffset' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iVersionMin' => null,
        'iVersionMax' => null,
        'aRequiredPermission' => null,
        'bVersionDeprecated' => null,
        'dtResponseDate' => null,
        'aFilter' => null,
        'aOrderBy' => null,
        'iRowMax' => null,
        'iRowOffset' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'iVersionMin' => false,
		'iVersionMax' => false,
		'aRequiredPermission' => false,
		'bVersionDeprecated' => false,
		'dtResponseDate' => false,
		'aFilter' => false,
		'aOrderBy' => false,
		'iRowMax' => false,
		'iRowOffset' => false
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
        'iVersionMin' => 'iVersionMin',
        'iVersionMax' => 'iVersionMax',
        'aRequiredPermission' => 'a_RequiredPermission',
        'bVersionDeprecated' => 'bVersionDeprecated',
        'dtResponseDate' => 'dtResponseDate',
        'aFilter' => 'a_Filter',
        'aOrderBy' => 'a_OrderBy',
        'iRowMax' => 'iRowMax',
        'iRowOffset' => 'iRowOffset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iVersionMin' => 'setIVersionMin',
        'iVersionMax' => 'setIVersionMax',
        'aRequiredPermission' => 'setARequiredPermission',
        'bVersionDeprecated' => 'setBVersionDeprecated',
        'dtResponseDate' => 'setDtResponseDate',
        'aFilter' => 'setAFilter',
        'aOrderBy' => 'setAOrderBy',
        'iRowMax' => 'setIRowMax',
        'iRowOffset' => 'setIRowOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iVersionMin' => 'getIVersionMin',
        'iVersionMax' => 'getIVersionMax',
        'aRequiredPermission' => 'getARequiredPermission',
        'bVersionDeprecated' => 'getBVersionDeprecated',
        'dtResponseDate' => 'getDtResponseDate',
        'aFilter' => 'getAFilter',
        'aOrderBy' => 'getAOrderBy',
        'iRowMax' => 'getIRowMax',
        'iRowOffset' => 'getIRowOffset'
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
        $this->setIfExists('iVersionMin', $data ?? [], null);
        $this->setIfExists('iVersionMax', $data ?? [], null);
        $this->setIfExists('aRequiredPermission', $data ?? [], null);
        $this->setIfExists('bVersionDeprecated', $data ?? [], null);
        $this->setIfExists('dtResponseDate', $data ?? [], null);
        $this->setIfExists('aFilter', $data ?? [], null);
        $this->setIfExists('aOrderBy', $data ?? [], null);
        $this->setIfExists('iRowMax', $data ?? [], null);
        $this->setIfExists('iRowOffset', $data ?? [], 0);
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

        if ($this->container['iVersionMin'] === null) {
            $invalidProperties[] = "'iVersionMin' can't be null";
        }
        if ($this->container['iVersionMax'] === null) {
            $invalidProperties[] = "'iVersionMax' can't be null";
        }
        if ($this->container['aRequiredPermission'] === null) {
            $invalidProperties[] = "'aRequiredPermission' can't be null";
        }
        if ($this->container['bVersionDeprecated'] === null) {
            $invalidProperties[] = "'bVersionDeprecated' can't be null";
        }
        if ($this->container['dtResponseDate'] === null) {
            $invalidProperties[] = "'dtResponseDate' can't be null";
        }
        if ($this->container['aFilter'] === null) {
            $invalidProperties[] = "'aFilter' can't be null";
        }
        if ($this->container['aOrderBy'] === null) {
            $invalidProperties[] = "'aOrderBy' can't be null";
        }
        if ($this->container['iRowMax'] === null) {
            $invalidProperties[] = "'iRowMax' can't be null";
        }
        if (($this->container['iRowMax'] > 10000)) {
            $invalidProperties[] = "invalid value for 'iRowMax', must be smaller than or equal to 10000.";
        }

        if (($this->container['iRowMax'] < 1)) {
            $invalidProperties[] = "invalid value for 'iRowMax', must be bigger than or equal to 1.";
        }

        if ($this->container['iRowOffset'] === null) {
            $invalidProperties[] = "'iRowOffset' can't be null";
        }
        if (($this->container['iRowOffset'] < 0)) {
            $invalidProperties[] = "invalid value for 'iRowOffset', must be bigger than or equal to 0.";
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
     * Gets iVersionMin
     *
     * @return int
     */
    public function getIVersionMin()
    {
	//return $this->container['iVersionMin'];
        return $this->container['iVersionMin'];
    }

    /**
     * Sets iVersionMin
     *
     * @param int $iVersionMin The minimum version of the function that can be called
     *
     * @return self
     */
    public function setIVersionMin($iVersionMin)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iVersionMin)) {
            //throw new \InvalidArgumentException('non-nullable iVersionMin cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iVersionMin'] = $iVersionMin;
        $this->container['iVersionMin'] = (is_null($iVersionMin) ? null : (int) $iVersionMin);

        return $this;
    }

    /**
     * Gets iVersionMax
     *
     * @return int
     */
    public function getIVersionMax()
    {
	//return $this->container['iVersionMax'];
        return $this->container['iVersionMax'];
    }

    /**
     * Sets iVersionMax
     *
     * @param int $iVersionMax The maximum version of the function that can be called
     *
     * @return self
     */
    public function setIVersionMax($iVersionMax)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iVersionMax)) {
            //throw new \InvalidArgumentException('non-nullable iVersionMax cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iVersionMax'] = $iVersionMax;
        $this->container['iVersionMax'] = (is_null($iVersionMax) ? null : (int) $iVersionMax);

        return $this;
    }

    /**
     * Gets aRequiredPermission
     *
     * @return int[]
     */
    public function getARequiredPermission()
    {
	//return $this->container['aRequiredPermission'];
        return $this->container['aRequiredPermission'];
    }

    /**
     * Sets aRequiredPermission
     *
     * @param int[] $aRequiredPermission An array of permissions required to access this function.  If the value \"0\" is present in the array, anyone can call this function.  You must have one of the permission to access the function. You don't need to have all of them.
     *
     * @return self
     */
    public function setARequiredPermission($aRequiredPermission)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aRequiredPermission)) {
            //throw new \InvalidArgumentException('non-nullable aRequiredPermission cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aRequiredPermission'] = $aRequiredPermission;
        $this->container['aRequiredPermission'] = (is_null($aRequiredPermission) ? null : $aRequiredPermission);

        return $this;
    }

    /**
     * Gets bVersionDeprecated
     *
     * @return bool
     */
    public function getBVersionDeprecated()
    {
	//return $this->container['bVersionDeprecated'];
        return $this->container['bVersionDeprecated'];
    }

    /**
     * Sets bVersionDeprecated
     *
     * @param bool $bVersionDeprecated Wheter the current route is deprecated or not
     *
     * @return self
     */
    public function setBVersionDeprecated($bVersionDeprecated)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bVersionDeprecated)) {
            //throw new \InvalidArgumentException('non-nullable bVersionDeprecated cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bVersionDeprecated'] = $bVersionDeprecated;
        $this->container['bVersionDeprecated'] = (is_null($bVersionDeprecated) ? null : (bool) $bVersionDeprecated);

        return $this;
    }

    /**
     * Gets dtResponseDate
     *
     * @return string
     */
    public function getDtResponseDate()
    {
	//return $this->container['dtResponseDate'];
        return is_null($this->container['dtResponseDate']) ? null : trim($this->container['dtResponseDate']);
    }

    /**
     * Sets dtResponseDate
     *
     * @param string $dtResponseDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return self
     */
    public function setDtResponseDate($dtResponseDate)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtResponseDate)) {
            //throw new \InvalidArgumentException('non-nullable dtResponseDate cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtResponseDate'] = $dtResponseDate;
        $this->container['dtResponseDate'] = (is_null($dtResponseDate) ? null : trim((string) $dtResponseDate));

        return $this;
    }

    /**
     * Gets aFilter
     *
     * @return \eZmaxAPI\Model\CommonResponseFilter
     */
    public function getAFilter()
    {
	//return $this->container['aFilter'];
        return $this->container['aFilter'];
    }

    /**
     * Sets aFilter
     *
     * @param \eZmaxAPI\Model\CommonResponseFilter $aFilter aFilter
     *
     * @return self
     */
    public function setAFilter($aFilter)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aFilter)) {
            //throw new \InvalidArgumentException('non-nullable aFilter cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aFilter'] = $aFilter;
        $this->container['aFilter'] = $aFilter;

        return $this;
    }

    /**
     * Gets aOrderBy
     *
     * @return array<string,string>
     */
    public function getAOrderBy()
    {
	//return $this->container['aOrderBy'];
        return $this->container['aOrderBy'];
    }

    /**
     * Sets aOrderBy
     *
     * @param array<string,string> $aOrderBy List of available values for *eOrderBy*
     *
     * @return self
     */
    public function setAOrderBy($aOrderBy)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aOrderBy)) {
            //throw new \InvalidArgumentException('non-nullable aOrderBy cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aOrderBy'] = $aOrderBy;
        $this->container['aOrderBy'] = (is_null($aOrderBy) ? null : $aOrderBy);

        return $this;
    }

    /**
     * Gets iRowMax
     *
     * @return int
     */
    public function getIRowMax()
    {
	//return $this->container['iRowMax'];
        return $this->container['iRowMax'];
    }

    /**
     * Sets iRowMax
     *
     * @param int $iRowMax The maximum numbers of results to be returned.  When the content-type is **application/json** there is an implicit default of 10 000.  When it's **application/vnd.openxmlformats-officedocument.spreadsheetml.sheet** the is no implicit default so if you do not specify iRowMax, all records will be returned.
     *
     * @return self
     */
    public function setIRowMax($iRowMax)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iRowMax)) {
            //throw new \InvalidArgumentException('non-nullable iRowMax cannot be null');
        //}

	//if (($iRowMax > 10000)) {
        if (($iRowMax > 10000)) {
	    //throw new \InvalidArgumentException('invalid value for $iRowMax when calling CommonResponseObjDebugPayloadGetList., must be smaller than or equal to 10000.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iRowMax)?'null':'"'.$iRowMax.'"').' for iRowMax when calling CommonResponseObjDebugPayloadGetList., must be smaller than or equal to 10000.');
        }
	//if (($iRowMax < 1)) {
        if (($iRowMax < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $iRowMax when calling CommonResponseObjDebugPayloadGetList., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iRowMax)?'null':'"'.$iRowMax.'"').' for iRowMax when calling CommonResponseObjDebugPayloadGetList., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iRowMax'] = $iRowMax;
        $this->container['iRowMax'] = (is_null($iRowMax) ? null : (int) $iRowMax);

        return $this;
    }

    /**
     * Gets iRowOffset
     *
     * @return int
     */
    public function getIRowOffset()
    {
	//return $this->container['iRowOffset'];
        return $this->container['iRowOffset'];
    }

    /**
     * Sets iRowOffset
     *
     * @param int $iRowOffset The starting element from where to start retrieving the results. For example if you started at iRowOffset=0 and asked for iRowMax=100, to get the next 100 results, you could specify iRowOffset=100&iRowMax=100,
     *
     * @return self
     */
    public function setIRowOffset($iRowOffset)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iRowOffset)) {
            //throw new \InvalidArgumentException('non-nullable iRowOffset cannot be null');
        //}

	//if (($iRowOffset < 0)) {
        if (($iRowOffset < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iRowOffset when calling CommonResponseObjDebugPayloadGetList., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iRowOffset)?'null':'"'.$iRowOffset.'"').' for iRowOffset when calling CommonResponseObjDebugPayloadGetList., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iRowOffset'] = $iRowOffset;
        $this->container['iRowOffset'] = (is_null($iRowOffset) ? null : (int) $iRowOffset);

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


