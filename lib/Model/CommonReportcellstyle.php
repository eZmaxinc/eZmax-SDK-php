<?php
/**
 * CommonReportcellstyle
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
 * Generator version: 7.4.0
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
 * CommonReportcellstyle Class Doc Comment
 *
 * @category Class
 * @description Styles applied to a Reportcell
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommonReportcellstyle implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-Reportcellstyle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bReportcellstyleBordertop' => 'bool',
        'bReportcellstyleBorderbottom' => 'bool',
        'bReportcellstyleBorderleft' => 'bool',
        'bReportcellstyleBorderright' => 'bool',
        'eReportcellHorizontalalignment' => '\eZmaxAPI\Model\EnumHorizontalalignment',
        'eReportcellVerticalalignment' => '\eZmaxAPI\Model\EnumVerticalalignment',
        'eReportcellFontweight' => '\eZmaxAPI\Model\EnumFontweight',
        'eReportcellFontunderline' => '\eZmaxAPI\Model\EnumFontunderline'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bReportcellstyleBordertop' => null,
        'bReportcellstyleBorderbottom' => null,
        'bReportcellstyleBorderleft' => null,
        'bReportcellstyleBorderright' => null,
        'eReportcellHorizontalalignment' => null,
        'eReportcellVerticalalignment' => null,
        'eReportcellFontweight' => null,
        'eReportcellFontunderline' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bReportcellstyleBordertop' => false,
		'bReportcellstyleBorderbottom' => false,
		'bReportcellstyleBorderleft' => false,
		'bReportcellstyleBorderright' => false,
		'eReportcellHorizontalalignment' => false,
		'eReportcellVerticalalignment' => false,
		'eReportcellFontweight' => false,
		'eReportcellFontunderline' => false
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
        'bReportcellstyleBordertop' => 'bReportcellstyleBordertop',
        'bReportcellstyleBorderbottom' => 'bReportcellstyleBorderbottom',
        'bReportcellstyleBorderleft' => 'bReportcellstyleBorderleft',
        'bReportcellstyleBorderright' => 'bReportcellstyleBorderright',
        'eReportcellHorizontalalignment' => 'eReportcellHorizontalalignment',
        'eReportcellVerticalalignment' => 'eReportcellVerticalalignment',
        'eReportcellFontweight' => 'eReportcellFontweight',
        'eReportcellFontunderline' => 'eReportcellFontunderline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bReportcellstyleBordertop' => 'setBReportcellstyleBordertop',
        'bReportcellstyleBorderbottom' => 'setBReportcellstyleBorderbottom',
        'bReportcellstyleBorderleft' => 'setBReportcellstyleBorderleft',
        'bReportcellstyleBorderright' => 'setBReportcellstyleBorderright',
        'eReportcellHorizontalalignment' => 'setEReportcellHorizontalalignment',
        'eReportcellVerticalalignment' => 'setEReportcellVerticalalignment',
        'eReportcellFontweight' => 'setEReportcellFontweight',
        'eReportcellFontunderline' => 'setEReportcellFontunderline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bReportcellstyleBordertop' => 'getBReportcellstyleBordertop',
        'bReportcellstyleBorderbottom' => 'getBReportcellstyleBorderbottom',
        'bReportcellstyleBorderleft' => 'getBReportcellstyleBorderleft',
        'bReportcellstyleBorderright' => 'getBReportcellstyleBorderright',
        'eReportcellHorizontalalignment' => 'getEReportcellHorizontalalignment',
        'eReportcellVerticalalignment' => 'getEReportcellVerticalalignment',
        'eReportcellFontweight' => 'getEReportcellFontweight',
        'eReportcellFontunderline' => 'getEReportcellFontunderline'
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
        $this->setIfExists('bReportcellstyleBordertop', $data ?? [], null);
        $this->setIfExists('bReportcellstyleBorderbottom', $data ?? [], null);
        $this->setIfExists('bReportcellstyleBorderleft', $data ?? [], null);
        $this->setIfExists('bReportcellstyleBorderright', $data ?? [], null);
        $this->setIfExists('eReportcellHorizontalalignment', $data ?? [], null);
        $this->setIfExists('eReportcellVerticalalignment', $data ?? [], null);
        $this->setIfExists('eReportcellFontweight', $data ?? [], null);
        $this->setIfExists('eReportcellFontunderline', $data ?? [], null);
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

        if ($this->container['bReportcellstyleBordertop'] === null) {
            $invalidProperties[] = "'bReportcellstyleBordertop' can't be null";
        }
        if ($this->container['bReportcellstyleBorderbottom'] === null) {
            $invalidProperties[] = "'bReportcellstyleBorderbottom' can't be null";
        }
        if ($this->container['bReportcellstyleBorderleft'] === null) {
            $invalidProperties[] = "'bReportcellstyleBorderleft' can't be null";
        }
        if ($this->container['bReportcellstyleBorderright'] === null) {
            $invalidProperties[] = "'bReportcellstyleBorderright' can't be null";
        }
        if ($this->container['eReportcellHorizontalalignment'] === null) {
            $invalidProperties[] = "'eReportcellHorizontalalignment' can't be null";
        }
        if ($this->container['eReportcellVerticalalignment'] === null) {
            $invalidProperties[] = "'eReportcellVerticalalignment' can't be null";
        }
        if ($this->container['eReportcellFontweight'] === null) {
            $invalidProperties[] = "'eReportcellFontweight' can't be null";
        }
        if ($this->container['eReportcellFontunderline'] === null) {
            $invalidProperties[] = "'eReportcellFontunderline' can't be null";
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
     * Gets bReportcellstyleBordertop
     *
     * @return bool
     */
    public function getBReportcellstyleBordertop()
    {
        return $this->container['bReportcellstyleBordertop'];
    }

    /**
     * Sets bReportcellstyleBordertop
     *
     * @param bool $bReportcellstyleBordertop Whether there is a border at the top of the Reportcell
     *
     * @return self
     */
    public function setBReportcellstyleBordertop($bReportcellstyleBordertop)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bReportcellstyleBordertop)) {
            //throw new \InvalidArgumentException('non-nullable bReportcellstyleBordertop cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bReportcellstyleBordertop'] = $bReportcellstyleBordertop;
        $this->container['bReportcellstyleBordertop'] = (is_null($bReportcellstyleBordertop) ? null : (bool) $bReportcellstyleBordertop);

        return $this;
    }

    /**
     * Gets bReportcellstyleBorderbottom
     *
     * @return bool
     */
    public function getBReportcellstyleBorderbottom()
    {
        return $this->container['bReportcellstyleBorderbottom'];
    }

    /**
     * Sets bReportcellstyleBorderbottom
     *
     * @param bool $bReportcellstyleBorderbottom Whether there is a border at the bottom of the Reportcell
     *
     * @return self
     */
    public function setBReportcellstyleBorderbottom($bReportcellstyleBorderbottom)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bReportcellstyleBorderbottom)) {
            //throw new \InvalidArgumentException('non-nullable bReportcellstyleBorderbottom cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bReportcellstyleBorderbottom'] = $bReportcellstyleBorderbottom;
        $this->container['bReportcellstyleBorderbottom'] = (is_null($bReportcellstyleBorderbottom) ? null : (bool) $bReportcellstyleBorderbottom);

        return $this;
    }

    /**
     * Gets bReportcellstyleBorderleft
     *
     * @return bool
     */
    public function getBReportcellstyleBorderleft()
    {
        return $this->container['bReportcellstyleBorderleft'];
    }

    /**
     * Sets bReportcellstyleBorderleft
     *
     * @param bool $bReportcellstyleBorderleft Whether there is a border at the left of the Reportcell
     *
     * @return self
     */
    public function setBReportcellstyleBorderleft($bReportcellstyleBorderleft)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bReportcellstyleBorderleft)) {
            //throw new \InvalidArgumentException('non-nullable bReportcellstyleBorderleft cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bReportcellstyleBorderleft'] = $bReportcellstyleBorderleft;
        $this->container['bReportcellstyleBorderleft'] = (is_null($bReportcellstyleBorderleft) ? null : (bool) $bReportcellstyleBorderleft);

        return $this;
    }

    /**
     * Gets bReportcellstyleBorderright
     *
     * @return bool
     */
    public function getBReportcellstyleBorderright()
    {
        return $this->container['bReportcellstyleBorderright'];
    }

    /**
     * Sets bReportcellstyleBorderright
     *
     * @param bool $bReportcellstyleBorderright Whether there is a border at the right of the Reportcell
     *
     * @return self
     */
    public function setBReportcellstyleBorderright($bReportcellstyleBorderright)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bReportcellstyleBorderright)) {
            //throw new \InvalidArgumentException('non-nullable bReportcellstyleBorderright cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bReportcellstyleBorderright'] = $bReportcellstyleBorderright;
        $this->container['bReportcellstyleBorderright'] = (is_null($bReportcellstyleBorderright) ? null : (bool) $bReportcellstyleBorderright);

        return $this;
    }

    /**
     * Gets eReportcellHorizontalalignment
     *
     * @return \eZmaxAPI\Model\EnumHorizontalalignment
     */
    public function getEReportcellHorizontalalignment()
    {
        return $this->container['eReportcellHorizontalalignment'];
    }

    /**
     * Sets eReportcellHorizontalalignment
     *
     * @param \eZmaxAPI\Model\EnumHorizontalalignment $eReportcellHorizontalalignment eReportcellHorizontalalignment
     *
     * @return self
     */
    public function setEReportcellHorizontalalignment($eReportcellHorizontalalignment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eReportcellHorizontalalignment)) {
            //throw new \InvalidArgumentException('non-nullable eReportcellHorizontalalignment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eReportcellHorizontalalignment'] = $eReportcellHorizontalalignment;
        $this->container['eReportcellHorizontalalignment'] = $eReportcellHorizontalalignment;

        return $this;
    }

    /**
     * Gets eReportcellVerticalalignment
     *
     * @return \eZmaxAPI\Model\EnumVerticalalignment
     */
    public function getEReportcellVerticalalignment()
    {
        return $this->container['eReportcellVerticalalignment'];
    }

    /**
     * Sets eReportcellVerticalalignment
     *
     * @param \eZmaxAPI\Model\EnumVerticalalignment $eReportcellVerticalalignment eReportcellVerticalalignment
     *
     * @return self
     */
    public function setEReportcellVerticalalignment($eReportcellVerticalalignment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eReportcellVerticalalignment)) {
            //throw new \InvalidArgumentException('non-nullable eReportcellVerticalalignment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eReportcellVerticalalignment'] = $eReportcellVerticalalignment;
        $this->container['eReportcellVerticalalignment'] = $eReportcellVerticalalignment;

        return $this;
    }

    /**
     * Gets eReportcellFontweight
     *
     * @return \eZmaxAPI\Model\EnumFontweight
     */
    public function getEReportcellFontweight()
    {
        return $this->container['eReportcellFontweight'];
    }

    /**
     * Sets eReportcellFontweight
     *
     * @param \eZmaxAPI\Model\EnumFontweight $eReportcellFontweight eReportcellFontweight
     *
     * @return self
     */
    public function setEReportcellFontweight($eReportcellFontweight)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eReportcellFontweight)) {
            //throw new \InvalidArgumentException('non-nullable eReportcellFontweight cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eReportcellFontweight'] = $eReportcellFontweight;
        $this->container['eReportcellFontweight'] = $eReportcellFontweight;

        return $this;
    }

    /**
     * Gets eReportcellFontunderline
     *
     * @return \eZmaxAPI\Model\EnumFontunderline
     */
    public function getEReportcellFontunderline()
    {
        return $this->container['eReportcellFontunderline'];
    }

    /**
     * Sets eReportcellFontunderline
     *
     * @param \eZmaxAPI\Model\EnumFontunderline $eReportcellFontunderline eReportcellFontunderline
     *
     * @return self
     */
    public function setEReportcellFontunderline($eReportcellFontunderline)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eReportcellFontunderline)) {
            //throw new \InvalidArgumentException('non-nullable eReportcellFontunderline cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eReportcellFontunderline'] = $eReportcellFontunderline;
        $this->container['eReportcellFontunderline'] = $eReportcellFontunderline;

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


