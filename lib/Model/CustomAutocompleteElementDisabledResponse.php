<?php
/**
 * CustomAutocompleteElementDisabledResponse
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
 * The version of the OpenAPI document: 1.1.15
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * CustomAutocompleteElementDisabledResponse Class Doc Comment
 *
 * @category Class
 * @description Generic AutocompleteElement Response with a bDisabled Flag
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomAutocompleteElementDisabledResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-AutocompleteElementDisabled-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bDisabled' => 'bool',
        'sCategory' => 'string',
        'sLabel' => 'string',
        'sValue' => 'string',
        'mValue' => 'string',
        'bActive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bDisabled' => null,
        'sCategory' => null,
        'sLabel' => null,
        'sValue' => null,
        'mValue' => null,
        'bActive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bDisabled' => false,
		'sCategory' => false,
		'sLabel' => false,
		'sValue' => false,
		'mValue' => false,
		'bActive' => false
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
        'bDisabled' => 'bDisabled',
        'sCategory' => 'sCategory',
        'sLabel' => 'sLabel',
        'sValue' => 'sValue',
        'mValue' => 'mValue',
        'bActive' => 'bActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bDisabled' => 'setBDisabled',
        'sCategory' => 'setSCategory',
        'sLabel' => 'setSLabel',
        'sValue' => 'setSValue',
        'mValue' => 'setMValue',
        'bActive' => 'setBActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bDisabled' => 'getBDisabled',
        'sCategory' => 'getSCategory',
        'sLabel' => 'getSLabel',
        'sValue' => 'getSValue',
        'mValue' => 'getMValue',
        'bActive' => 'getBActive'
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
        $this->setIfExists('bDisabled', $data ?? [], null);
        $this->setIfExists('sCategory', $data ?? [], null);
        $this->setIfExists('sLabel', $data ?? [], null);
        $this->setIfExists('sValue', $data ?? [], null);
        $this->setIfExists('mValue', $data ?? [], null);
        $this->setIfExists('bActive', $data ?? [], null);
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

        if ($this->container['bDisabled'] === null) {
            $invalidProperties[] = "'bDisabled' can't be null";
        }
        if ($this->container['sCategory'] === null) {
            $invalidProperties[] = "'sCategory' can't be null";
        }
        if ($this->container['sLabel'] === null) {
            $invalidProperties[] = "'sLabel' can't be null";
        }
        if ($this->container['sValue'] === null) {
            $invalidProperties[] = "'sValue' can't be null";
        }
        if ($this->container['bActive'] === null) {
            $invalidProperties[] = "'bActive' can't be null";
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
     * Gets bDisabled
     *
     * @return bool
     */
    public function getBDisabled()
    {
        return $this->container['bDisabled'];
    }

    /**
     * Sets bDisabled
     *
     * @param bool $bDisabled Indicates if the element is disabled in the context
     *
     * @return self
     */
    public function setBDisabled($bDisabled)
    {

        //if (is_null($bDisabled)) {
            //throw new \InvalidArgumentException('non-nullable bDisabled cannot be null');
        //}
        $this->container['bDisabled'] = (is_null($bDisabled) ? null : (bool) $bDisabled);

        return $this;
    }

    /**
     * Gets sCategory
     *
     * @return string
     */
    public function getSCategory()
    {
        return $this->container['sCategory'];
    }

    /**
     * Sets sCategory
     *
     * @param string $sCategory The Category for the dropdown or an empty string if not categorized
     *
     * @return self
     */
    public function setSCategory($sCategory)
    {

        //if (is_null($sCategory)) {
            //throw new \InvalidArgumentException('non-nullable sCategory cannot be null');
        //}
        $this->container['sCategory'] = (is_null($sCategory) ? null : (string) $sCategory);

        return $this;
    }

    /**
     * Gets sLabel
     *
     * @return string
     */
    public function getSLabel()
    {
        return $this->container['sLabel'];
    }

    /**
     * Sets sLabel
     *
     * @param string $sLabel The Description of the element
     *
     * @return self
     */
    public function setSLabel($sLabel)
    {

        //if (is_null($sLabel)) {
            //throw new \InvalidArgumentException('non-nullable sLabel cannot be null');
        //}
        $this->container['sLabel'] = (is_null($sLabel) ? null : (string) $sLabel);

        return $this;
    }

    /**
     * Gets sValue
     *
     * @return string
     */
    public function getSValue()
    {
        return $this->container['sValue'];
    }

    /**
     * Sets sValue
     *
     * @param string $sValue The Unique ID of the element
     *
     * @return self
     */
    public function setSValue($sValue)
    {

        //if (is_null($sValue)) {
            //throw new \InvalidArgumentException('non-nullable sValue cannot be null');
        //}
        $this->container['sValue'] = (is_null($sValue) ? null : (string) $sValue);

        return $this;
    }

    /**
     * Gets mValue
     *
     * @return string|null
     * @deprecated
     */
    public function getMValue()
    {
        return $this->container['mValue'];
    }

    /**
     * Sets mValue
     *
     * @param string|null $mValue The Unique ID of the element
     *
     * @return self
     * @deprecated
     */
    public function setMValue($mValue)
    {

        //if (is_null($mValue)) {
            //throw new \InvalidArgumentException('non-nullable mValue cannot be null');
        //}
        $this->container['mValue'] = (is_null($mValue) ? null : (string) $mValue);

        return $this;
    }

    /**
     * Gets bActive
     *
     * @return bool
     */
    public function getBActive()
    {
        return $this->container['bActive'];
    }

    /**
     * Sets bActive
     *
     * @param bool $bActive Indicates if the element is active
     *
     * @return self
     */
    public function setBActive($bActive)
    {

        //if (is_null($bActive)) {
            //throw new \InvalidArgumentException('non-nullable bActive cannot be null');
        //}
        $this->container['bActive'] = (is_null($bActive) ? null : (bool) $bActive);

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


