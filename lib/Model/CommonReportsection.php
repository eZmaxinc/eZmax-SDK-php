<?php
/**
 * CommonReportsection
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
 * CommonReportsection Class Doc Comment
 *
 * @category Class
 * @description A section in a Report. Each Reportsection shares Reportcolumns disposition with all its Reportsubsection
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommonReportsection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-Reportsection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aObjReportsubsection' => '\eZmaxAPI\Model\CommonReportsubsection[]',
        'aObjReportcolumn' => '\eZmaxAPI\Model\CommonReportcolumn[]',
        'eReportsectionHorizontalalignment' => '\eZmaxAPI\Model\EnumHorizontalalignment',
        'iReportsectionColumncount' => 'int',
        'iReportsectionWidth' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aObjReportsubsection' => null,
        'aObjReportcolumn' => null,
        'eReportsectionHorizontalalignment' => null,
        'iReportsectionColumncount' => null,
        'iReportsectionWidth' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aObjReportsubsection' => false,
		'aObjReportcolumn' => false,
		'eReportsectionHorizontalalignment' => false,
		'iReportsectionColumncount' => false,
		'iReportsectionWidth' => false
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
        'aObjReportsubsection' => 'a_objReportsubsection',
        'aObjReportcolumn' => 'a_objReportcolumn',
        'eReportsectionHorizontalalignment' => 'eReportsectionHorizontalalignment',
        'iReportsectionColumncount' => 'iReportsectionColumncount',
        'iReportsectionWidth' => 'iReportsectionWidth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aObjReportsubsection' => 'setAObjReportsubsection',
        'aObjReportcolumn' => 'setAObjReportcolumn',
        'eReportsectionHorizontalalignment' => 'setEReportsectionHorizontalalignment',
        'iReportsectionColumncount' => 'setIReportsectionColumncount',
        'iReportsectionWidth' => 'setIReportsectionWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aObjReportsubsection' => 'getAObjReportsubsection',
        'aObjReportcolumn' => 'getAObjReportcolumn',
        'eReportsectionHorizontalalignment' => 'getEReportsectionHorizontalalignment',
        'iReportsectionColumncount' => 'getIReportsectionColumncount',
        'iReportsectionWidth' => 'getIReportsectionWidth'
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
        $this->setIfExists('aObjReportsubsection', $data ?? [], null);
        $this->setIfExists('aObjReportcolumn', $data ?? [], null);
        $this->setIfExists('eReportsectionHorizontalalignment', $data ?? [], null);
        $this->setIfExists('iReportsectionColumncount', $data ?? [], null);
        $this->setIfExists('iReportsectionWidth', $data ?? [], null);
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

        if ($this->container['aObjReportsubsection'] === null) {
            $invalidProperties[] = "'aObjReportsubsection' can't be null";
        }
        if ($this->container['aObjReportcolumn'] === null) {
            $invalidProperties[] = "'aObjReportcolumn' can't be null";
        }
        if ($this->container['eReportsectionHorizontalalignment'] === null) {
            $invalidProperties[] = "'eReportsectionHorizontalalignment' can't be null";
        }
        if ($this->container['iReportsectionColumncount'] === null) {
            $invalidProperties[] = "'iReportsectionColumncount' can't be null";
        }
        if ($this->container['iReportsectionWidth'] === null) {
            $invalidProperties[] = "'iReportsectionWidth' can't be null";
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
     * Gets aObjReportsubsection
     *
     * @return \eZmaxAPI\Model\CommonReportsubsection[]
     */
    public function getAObjReportsubsection()
    {
	//return $this->container['aObjReportsubsection'];
        return $this->container['aObjReportsubsection'];
    }

    /**
     * Sets aObjReportsubsection
     *
     * @param \eZmaxAPI\Model\CommonReportsubsection[] $aObjReportsubsection aObjReportsubsection
     *
     * @return self
     */
    public function setAObjReportsubsection($aObjReportsubsection)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjReportsubsection)) {
            //throw new \InvalidArgumentException('non-nullable aObjReportsubsection cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjReportsubsection'] = $aObjReportsubsection;
        $this->container['aObjReportsubsection'] = $aObjReportsubsection;

        return $this;
    }

    /**
     * Gets aObjReportcolumn
     *
     * @return \eZmaxAPI\Model\CommonReportcolumn[]
     */
    public function getAObjReportcolumn()
    {
	//return $this->container['aObjReportcolumn'];
        return $this->container['aObjReportcolumn'];
    }

    /**
     * Sets aObjReportcolumn
     *
     * @param \eZmaxAPI\Model\CommonReportcolumn[] $aObjReportcolumn aObjReportcolumn
     *
     * @return self
     */
    public function setAObjReportcolumn($aObjReportcolumn)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjReportcolumn)) {
            //throw new \InvalidArgumentException('non-nullable aObjReportcolumn cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjReportcolumn'] = $aObjReportcolumn;
        $this->container['aObjReportcolumn'] = $aObjReportcolumn;

        return $this;
    }

    /**
     * Gets eReportsectionHorizontalalignment
     *
     * @return \eZmaxAPI\Model\EnumHorizontalalignment
     */
    public function getEReportsectionHorizontalalignment()
    {
	//return $this->container['eReportsectionHorizontalalignment'];
        return $this->container['eReportsectionHorizontalalignment'];
    }

    /**
     * Sets eReportsectionHorizontalalignment
     *
     * @param \eZmaxAPI\Model\EnumHorizontalalignment $eReportsectionHorizontalalignment eReportsectionHorizontalalignment
     *
     * @return self
     */
    public function setEReportsectionHorizontalalignment($eReportsectionHorizontalalignment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eReportsectionHorizontalalignment)) {
            //throw new \InvalidArgumentException('non-nullable eReportsectionHorizontalalignment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eReportsectionHorizontalalignment'] = $eReportsectionHorizontalalignment;
        $this->container['eReportsectionHorizontalalignment'] = $eReportsectionHorizontalalignment;

        return $this;
    }

    /**
     * Gets iReportsectionColumncount
     *
     * @return int
     */
    public function getIReportsectionColumncount()
    {
	//return $this->container['iReportsectionColumncount'];
        return $this->container['iReportsectionColumncount'];
    }

    /**
     * Sets iReportsectionColumncount
     *
     * @param int $iReportsectionColumncount The number of Reportcolumns in the Reportsection
     *
     * @return self
     */
    public function setIReportsectionColumncount($iReportsectionColumncount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iReportsectionColumncount)) {
            //throw new \InvalidArgumentException('non-nullable iReportsectionColumncount cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iReportsectionColumncount'] = $iReportsectionColumncount;
        $this->container['iReportsectionColumncount'] = (is_null($iReportsectionColumncount) ? null : (int) $iReportsectionColumncount);

        return $this;
    }

    /**
     * Gets iReportsectionWidth
     *
     * @return int
     */
    public function getIReportsectionWidth()
    {
	//return $this->container['iReportsectionWidth'];
        return $this->container['iReportsectionWidth'];
    }

    /**
     * Sets iReportsectionWidth
     *
     * @param int $iReportsectionWidth The combined width of all the Reportcolumns in the Reportsection
     *
     * @return self
     */
    public function setIReportsectionWidth($iReportsectionWidth)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iReportsectionWidth)) {
            //throw new \InvalidArgumentException('non-nullable iReportsectionWidth cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iReportsectionWidth'] = $iReportsectionWidth;
        $this->container['iReportsectionWidth'] = (is_null($iReportsectionWidth) ? null : (int) $iReportsectionWidth);

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


