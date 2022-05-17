<?php
/**
 * EzsigntemplateformfieldResponse
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
 * The version of the OpenAPI document: 1.1.7
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * EzsigntemplateformfieldResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplateformfield Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsigntemplateformfieldResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplateformfield-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplateformfieldID' => 'int',
        'iEzsigntemplatedocumentpagePagenumber' => 'int',
        'sEzsigntemplateformfieldLabel' => 'string',
        'sEzsigntemplateformfieldValue' => 'string',
        'iEzsigntemplateformfieldX' => 'int',
        'iEzsigntemplateformfieldY' => 'int',
        'iEzsigntemplateformfieldWidth' => 'int',
        'iEzsigntemplateformfieldHeight' => 'int',
        'bEzsigntemplateformfieldSelected' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplateformfieldID' => null,
        'iEzsigntemplatedocumentpagePagenumber' => null,
        'sEzsigntemplateformfieldLabel' => null,
        'sEzsigntemplateformfieldValue' => null,
        'iEzsigntemplateformfieldX' => null,
        'iEzsigntemplateformfieldY' => null,
        'iEzsigntemplateformfieldWidth' => null,
        'iEzsigntemplateformfieldHeight' => null,
        'bEzsigntemplateformfieldSelected' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pkiEzsigntemplateformfieldID' => 'pkiEzsigntemplateformfieldID',
        'iEzsigntemplatedocumentpagePagenumber' => 'iEzsigntemplatedocumentpagePagenumber',
        'sEzsigntemplateformfieldLabel' => 'sEzsigntemplateformfieldLabel',
        'sEzsigntemplateformfieldValue' => 'sEzsigntemplateformfieldValue',
        'iEzsigntemplateformfieldX' => 'iEzsigntemplateformfieldX',
        'iEzsigntemplateformfieldY' => 'iEzsigntemplateformfieldY',
        'iEzsigntemplateformfieldWidth' => 'iEzsigntemplateformfieldWidth',
        'iEzsigntemplateformfieldHeight' => 'iEzsigntemplateformfieldHeight',
        'bEzsigntemplateformfieldSelected' => 'bEzsigntemplateformfieldSelected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplateformfieldID' => 'setPkiEzsigntemplateformfieldID',
        'iEzsigntemplatedocumentpagePagenumber' => 'setIEzsigntemplatedocumentpagePagenumber',
        'sEzsigntemplateformfieldLabel' => 'setSEzsigntemplateformfieldLabel',
        'sEzsigntemplateformfieldValue' => 'setSEzsigntemplateformfieldValue',
        'iEzsigntemplateformfieldX' => 'setIEzsigntemplateformfieldX',
        'iEzsigntemplateformfieldY' => 'setIEzsigntemplateformfieldY',
        'iEzsigntemplateformfieldWidth' => 'setIEzsigntemplateformfieldWidth',
        'iEzsigntemplateformfieldHeight' => 'setIEzsigntemplateformfieldHeight',
        'bEzsigntemplateformfieldSelected' => 'setBEzsigntemplateformfieldSelected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplateformfieldID' => 'getPkiEzsigntemplateformfieldID',
        'iEzsigntemplatedocumentpagePagenumber' => 'getIEzsigntemplatedocumentpagePagenumber',
        'sEzsigntemplateformfieldLabel' => 'getSEzsigntemplateformfieldLabel',
        'sEzsigntemplateformfieldValue' => 'getSEzsigntemplateformfieldValue',
        'iEzsigntemplateformfieldX' => 'getIEzsigntemplateformfieldX',
        'iEzsigntemplateformfieldY' => 'getIEzsigntemplateformfieldY',
        'iEzsigntemplateformfieldWidth' => 'getIEzsigntemplateformfieldWidth',
        'iEzsigntemplateformfieldHeight' => 'getIEzsigntemplateformfieldHeight',
        'bEzsigntemplateformfieldSelected' => 'getBEzsigntemplateformfieldSelected'
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
        $this->container['pkiEzsigntemplateformfieldID'] = $data['pkiEzsigntemplateformfieldID'] ?? null;
        $this->container['iEzsigntemplatedocumentpagePagenumber'] = $data['iEzsigntemplatedocumentpagePagenumber'] ?? null;
        $this->container['sEzsigntemplateformfieldLabel'] = $data['sEzsigntemplateformfieldLabel'] ?? null;
        $this->container['sEzsigntemplateformfieldValue'] = $data['sEzsigntemplateformfieldValue'] ?? null;
        $this->container['iEzsigntemplateformfieldX'] = $data['iEzsigntemplateformfieldX'] ?? null;
        $this->container['iEzsigntemplateformfieldY'] = $data['iEzsigntemplateformfieldY'] ?? null;
        $this->container['iEzsigntemplateformfieldWidth'] = $data['iEzsigntemplateformfieldWidth'] ?? null;
        $this->container['iEzsigntemplateformfieldHeight'] = $data['iEzsigntemplateformfieldHeight'] ?? null;
        $this->container['bEzsigntemplateformfieldSelected'] = $data['bEzsigntemplateformfieldSelected'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsigntemplateformfieldID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplateformfieldID' can't be null";
        }
        if ($this->container['iEzsigntemplatedocumentpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpagePagenumber' can't be null";
        }
        if ($this->container['sEzsigntemplateformfieldLabel'] === null) {
            $invalidProperties[] = "'sEzsigntemplateformfieldLabel' can't be null";
        }
        if ($this->container['sEzsigntemplateformfieldValue'] === null) {
            $invalidProperties[] = "'sEzsigntemplateformfieldValue' can't be null";
        }
        if ($this->container['iEzsigntemplateformfieldX'] === null) {
            $invalidProperties[] = "'iEzsigntemplateformfieldX' can't be null";
        }
        if ($this->container['iEzsigntemplateformfieldY'] === null) {
            $invalidProperties[] = "'iEzsigntemplateformfieldY' can't be null";
        }
        if ($this->container['iEzsigntemplateformfieldWidth'] === null) {
            $invalidProperties[] = "'iEzsigntemplateformfieldWidth' can't be null";
        }
        if ($this->container['iEzsigntemplateformfieldHeight'] === null) {
            $invalidProperties[] = "'iEzsigntemplateformfieldHeight' can't be null";
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
     * Gets pkiEzsigntemplateformfieldID
     *
     * @return int
     */
    public function getPkiEzsigntemplateformfieldID()
    {
        return $this->container['pkiEzsigntemplateformfieldID'];
    }

    /**
     * Sets pkiEzsigntemplateformfieldID
     *
     * @param int $pkiEzsigntemplateformfieldID The unique ID of the Ezsigntemplateformfield
     *
     * @return self
     */
    public function setPkiEzsigntemplateformfieldID($pkiEzsigntemplateformfieldID)
    {
        $this->container['pkiEzsigntemplateformfieldID'] = $pkiEzsigntemplateformfieldID;

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpagePagenumber
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpagePagenumber()
    {
        return $this->container['iEzsigntemplatedocumentpagePagenumber'];
    }

    /**
     * Sets iEzsigntemplatedocumentpagePagenumber
     *
     * @param int $iEzsigntemplatedocumentpagePagenumber The page number in the Ezsigntemplatedocument
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpagePagenumber($iEzsigntemplatedocumentpagePagenumber)
    {
        $this->container['iEzsigntemplatedocumentpagePagenumber'] = $iEzsigntemplatedocumentpagePagenumber;

        return $this;
    }

    /**
     * Gets sEzsigntemplateformfieldLabel
     *
     * @return string
     */
    public function getSEzsigntemplateformfieldLabel()
    {
        return $this->container['sEzsigntemplateformfieldLabel'];
    }

    /**
     * Sets sEzsigntemplateformfieldLabel
     *
     * @param string $sEzsigntemplateformfieldLabel The Label for the Ezsigntemplateformfield
     *
     * @return self
     */
    public function setSEzsigntemplateformfieldLabel($sEzsigntemplateformfieldLabel)
    {
        $this->container['sEzsigntemplateformfieldLabel'] = $sEzsigntemplateformfieldLabel;

        return $this;
    }

    /**
     * Gets sEzsigntemplateformfieldValue
     *
     * @return string
     */
    public function getSEzsigntemplateformfieldValue()
    {
        return $this->container['sEzsigntemplateformfieldValue'];
    }

    /**
     * Sets sEzsigntemplateformfieldValue
     *
     * @param string $sEzsigntemplateformfieldValue The value for the Ezsigntemplateformfield  This can only be set if eEzsigntemplateformfieldgroupType is Checkbox or Radio
     *
     * @return self
     */
    public function setSEzsigntemplateformfieldValue($sEzsigntemplateformfieldValue)
    {
        $this->container['sEzsigntemplateformfieldValue'] = $sEzsigntemplateformfieldValue;

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldX
     *
     * @return int
     */
    public function getIEzsigntemplateformfieldX()
    {
        return $this->container['iEzsigntemplateformfieldX'];
    }

    /**
     * Sets iEzsigntemplateformfieldX
     *
     * @param int $iEzsigntemplateformfieldX The X coordinate (Horizontal) where to put the Ezsigntemplateformfield on the Ezsigntemplatepage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplateformfield 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldX($iEzsigntemplateformfieldX)
    {
        $this->container['iEzsigntemplateformfieldX'] = $iEzsigntemplateformfieldX;

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldY
     *
     * @return int
     */
    public function getIEzsigntemplateformfieldY()
    {
        return $this->container['iEzsigntemplateformfieldY'];
    }

    /**
     * Sets iEzsigntemplateformfieldY
     *
     * @param int $iEzsigntemplateformfieldY The Y coordinate (Vertical) where to put the Ezsigntemplateformfield on the Ezsigntemplatepage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplateformfield 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldY($iEzsigntemplateformfieldY)
    {
        $this->container['iEzsigntemplateformfieldY'] = $iEzsigntemplateformfieldY;

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldWidth
     *
     * @return int
     */
    public function getIEzsigntemplateformfieldWidth()
    {
        return $this->container['iEzsigntemplateformfieldWidth'];
    }

    /**
     * Sets iEzsigntemplateformfieldWidth
     *
     * @param int $iEzsigntemplateformfieldWidth The Width of the Ezsigntemplateformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsigntemplateformfieldgroupType.  | eEzsigntemplateformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22-65535     | | Radio                     | 22           | | Text                      | 22-65535     | | Textarea                  | 22-65535     |
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldWidth($iEzsigntemplateformfieldWidth)
    {
        $this->container['iEzsigntemplateformfieldWidth'] = $iEzsigntemplateformfieldWidth;

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldHeight
     *
     * @return int
     */
    public function getIEzsigntemplateformfieldHeight()
    {
        return $this->container['iEzsigntemplateformfieldHeight'];
    }

    /**
     * Sets iEzsigntemplateformfieldHeight
     *
     * @param int $iEzsigntemplateformfieldHeight The Height of the Ezsigntemplateformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsigntemplateformfieldgroupType.  | eEzsigntemplateformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22           | | Radio                     | 22           | | Text                      | 22           | | Textarea                  | 22-65535     |
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldHeight($iEzsigntemplateformfieldHeight)
    {
        $this->container['iEzsigntemplateformfieldHeight'] = $iEzsigntemplateformfieldHeight;

        return $this;
    }

    /**
     * Gets bEzsigntemplateformfieldSelected
     *
     * @return bool|null
     */
    public function getBEzsigntemplateformfieldSelected()
    {
        return $this->container['bEzsigntemplateformfieldSelected'];
    }

    /**
     * Sets bEzsigntemplateformfieldSelected
     *
     * @param bool|null $bEzsigntemplateformfieldSelected Whether the Ezsigntemplateformfield is selected or not by default.  This can only be set if eEzsigntemplateformfieldgroupType is **Checkbox** or **Radio**
     *
     * @return self
     */
    public function setBEzsigntemplateformfieldSelected($bEzsigntemplateformfieldSelected)
    {
        $this->container['bEzsigntemplateformfieldSelected'] = $bEzsigntemplateformfieldSelected;

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


