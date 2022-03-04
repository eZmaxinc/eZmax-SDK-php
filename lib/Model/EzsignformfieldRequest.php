<?php
/**
 * EzsignformfieldRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.1.5
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
 * EzsignformfieldRequest Class Doc Comment
 *
 * @category Class
 * @description A Ezsignformfield Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignformfieldRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignformfield-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignformfieldID' => 'int',
        'iEzsignpagePagenumber' => 'int',
        'sEzsignformfieldLabel' => 'string',
        'sEzsignformfieldValue' => 'string',
        'iEzsignformfieldX' => 'int',
        'iEzsignformfieldY' => 'int',
        'iEzsignformfieldWidth' => 'int',
        'iEzsignformfieldHeight' => 'int',
        'bEzsignformfieldSelected' => 'bool',
        'sEzsignformfieldEnteredvalue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignformfieldID' => null,
        'iEzsignpagePagenumber' => null,
        'sEzsignformfieldLabel' => null,
        'sEzsignformfieldValue' => null,
        'iEzsignformfieldX' => null,
        'iEzsignformfieldY' => null,
        'iEzsignformfieldWidth' => null,
        'iEzsignformfieldHeight' => null,
        'bEzsignformfieldSelected' => null,
        'sEzsignformfieldEnteredvalue' => null
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
        'pkiEzsignformfieldID' => 'pkiEzsignformfieldID',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber',
        'sEzsignformfieldLabel' => 'sEzsignformfieldLabel',
        'sEzsignformfieldValue' => 'sEzsignformfieldValue',
        'iEzsignformfieldX' => 'iEzsignformfieldX',
        'iEzsignformfieldY' => 'iEzsignformfieldY',
        'iEzsignformfieldWidth' => 'iEzsignformfieldWidth',
        'iEzsignformfieldHeight' => 'iEzsignformfieldHeight',
        'bEzsignformfieldSelected' => 'bEzsignformfieldSelected',
        'sEzsignformfieldEnteredvalue' => 'sEzsignformfieldEnteredvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignformfieldID' => 'setPkiEzsignformfieldID',
        'iEzsignpagePagenumber' => 'setIEzsignpagePagenumber',
        'sEzsignformfieldLabel' => 'setSEzsignformfieldLabel',
        'sEzsignformfieldValue' => 'setSEzsignformfieldValue',
        'iEzsignformfieldX' => 'setIEzsignformfieldX',
        'iEzsignformfieldY' => 'setIEzsignformfieldY',
        'iEzsignformfieldWidth' => 'setIEzsignformfieldWidth',
        'iEzsignformfieldHeight' => 'setIEzsignformfieldHeight',
        'bEzsignformfieldSelected' => 'setBEzsignformfieldSelected',
        'sEzsignformfieldEnteredvalue' => 'setSEzsignformfieldEnteredvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignformfieldID' => 'getPkiEzsignformfieldID',
        'iEzsignpagePagenumber' => 'getIEzsignpagePagenumber',
        'sEzsignformfieldLabel' => 'getSEzsignformfieldLabel',
        'sEzsignformfieldValue' => 'getSEzsignformfieldValue',
        'iEzsignformfieldX' => 'getIEzsignformfieldX',
        'iEzsignformfieldY' => 'getIEzsignformfieldY',
        'iEzsignformfieldWidth' => 'getIEzsignformfieldWidth',
        'iEzsignformfieldHeight' => 'getIEzsignformfieldHeight',
        'bEzsignformfieldSelected' => 'getBEzsignformfieldSelected',
        'sEzsignformfieldEnteredvalue' => 'getSEzsignformfieldEnteredvalue'
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
        $this->container['pkiEzsignformfieldID'] = $data['pkiEzsignformfieldID'] ?? null;
        $this->container['iEzsignpagePagenumber'] = $data['iEzsignpagePagenumber'] ?? null;
        $this->container['sEzsignformfieldLabel'] = $data['sEzsignformfieldLabel'] ?? null;
        $this->container['sEzsignformfieldValue'] = $data['sEzsignformfieldValue'] ?? null;
        $this->container['iEzsignformfieldX'] = $data['iEzsignformfieldX'] ?? null;
        $this->container['iEzsignformfieldY'] = $data['iEzsignformfieldY'] ?? null;
        $this->container['iEzsignformfieldWidth'] = $data['iEzsignformfieldWidth'] ?? null;
        $this->container['iEzsignformfieldHeight'] = $data['iEzsignformfieldHeight'] ?? null;
        $this->container['bEzsignformfieldSelected'] = $data['bEzsignformfieldSelected'] ?? null;
        $this->container['sEzsignformfieldEnteredvalue'] = $data['sEzsignformfieldEnteredvalue'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['iEzsignpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsignpagePagenumber' can't be null";
        }
        if ($this->container['sEzsignformfieldLabel'] === null) {
            $invalidProperties[] = "'sEzsignformfieldLabel' can't be null";
        }
        if ($this->container['iEzsignformfieldX'] === null) {
            $invalidProperties[] = "'iEzsignformfieldX' can't be null";
        }
        if ($this->container['iEzsignformfieldY'] === null) {
            $invalidProperties[] = "'iEzsignformfieldY' can't be null";
        }
        if ($this->container['iEzsignformfieldWidth'] === null) {
            $invalidProperties[] = "'iEzsignformfieldWidth' can't be null";
        }
        if ($this->container['iEzsignformfieldHeight'] === null) {
            $invalidProperties[] = "'iEzsignformfieldHeight' can't be null";
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
     * Gets pkiEzsignformfieldID
     *
     * @return int|null
     */
    public function getPkiEzsignformfieldID()
    {
        return $this->container['pkiEzsignformfieldID'];
    }

    /**
     * Sets pkiEzsignformfieldID
     *
     * @param int|null $pkiEzsignformfieldID The unique ID of the Ezsignformfield
     *
     * @return self
     */
    public function setPkiEzsignformfieldID($pkiEzsignformfieldID)
    {
        $this->container['pkiEzsignformfieldID'] = $pkiEzsignformfieldID;

        return $this;
    }

    /**
     * Gets iEzsignpagePagenumber
     *
     * @return int
     */
    public function getIEzsignpagePagenumber()
    {
        return $this->container['iEzsignpagePagenumber'];
    }

    /**
     * Sets iEzsignpagePagenumber
     *
     * @param int $iEzsignpagePagenumber The page number in the Ezsigndocument
     *
     * @return self
     */
    public function setIEzsignpagePagenumber($iEzsignpagePagenumber)
    {
        $this->container['iEzsignpagePagenumber'] = $iEzsignpagePagenumber;

        return $this;
    }

    /**
     * Gets sEzsignformfieldLabel
     *
     * @return string
     */
    public function getSEzsignformfieldLabel()
    {
        return $this->container['sEzsignformfieldLabel'];
    }

    /**
     * Sets sEzsignformfieldLabel
     *
     * @param string $sEzsignformfieldLabel The Label for the Ezsignformfield
     *
     * @return self
     */
    public function setSEzsignformfieldLabel($sEzsignformfieldLabel)
    {
        $this->container['sEzsignformfieldLabel'] = $sEzsignformfieldLabel;

        return $this;
    }

    /**
     * Gets sEzsignformfieldValue
     *
     * @return string|null
     */
    public function getSEzsignformfieldValue()
    {
        return $this->container['sEzsignformfieldValue'];
    }

    /**
     * Sets sEzsignformfieldValue
     *
     * @param string|null $sEzsignformfieldValue The value for the Ezsignformfield  This can only be set if eEzsignformfieldgroupType is Checkbox or Radio
     *
     * @return self
     */
    public function setSEzsignformfieldValue($sEzsignformfieldValue)
    {
        $this->container['sEzsignformfieldValue'] = $sEzsignformfieldValue;

        return $this;
    }

    /**
     * Gets iEzsignformfieldX
     *
     * @return int
     */
    public function getIEzsignformfieldX()
    {
        return $this->container['iEzsignformfieldX'];
    }

    /**
     * Sets iEzsignformfieldX
     *
     * @param int $iEzsignformfieldX The X coordinate (Horizontal) where to put the Ezsignformfield on the Ezsignpage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignformfield 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignformfieldX($iEzsignformfieldX)
    {
        $this->container['iEzsignformfieldX'] = $iEzsignformfieldX;

        return $this;
    }

    /**
     * Gets iEzsignformfieldY
     *
     * @return int
     */
    public function getIEzsignformfieldY()
    {
        return $this->container['iEzsignformfieldY'];
    }

    /**
     * Sets iEzsignformfieldY
     *
     * @param int $iEzsignformfieldY The Y coordinate (Vertical) where to put the Ezsignformfield on the Ezsignpage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignformfield 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignformfieldY($iEzsignformfieldY)
    {
        $this->container['iEzsignformfieldY'] = $iEzsignformfieldY;

        return $this;
    }

    /**
     * Gets iEzsignformfieldWidth
     *
     * @return int
     */
    public function getIEzsignformfieldWidth()
    {
        return $this->container['iEzsignformfieldWidth'];
    }

    /**
     * Sets iEzsignformfieldWidth
     *
     * @param int $iEzsignformfieldWidth The Width of the Ezsignformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsignformfieldgroupType.  | eEzsignformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22-65535     | | Radio                     | 22           | | Text                      | 22-65535     | | Textarea                  | 22-65535     |
     *
     * @return self
     */
    public function setIEzsignformfieldWidth($iEzsignformfieldWidth)
    {
        $this->container['iEzsignformfieldWidth'] = $iEzsignformfieldWidth;

        return $this;
    }

    /**
     * Gets iEzsignformfieldHeight
     *
     * @return int
     */
    public function getIEzsignformfieldHeight()
    {
        return $this->container['iEzsignformfieldHeight'];
    }

    /**
     * Sets iEzsignformfieldHeight
     *
     * @param int $iEzsignformfieldHeight The Height of the Ezsignformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsignformfieldgroupType.  | eEzsignformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22           | | Radio                     | 22           | | Text                      | 22           | | Textarea                  | 22-65535     |
     *
     * @return self
     */
    public function setIEzsignformfieldHeight($iEzsignformfieldHeight)
    {
        $this->container['iEzsignformfieldHeight'] = $iEzsignformfieldHeight;

        return $this;
    }

    /**
     * Gets bEzsignformfieldSelected
     *
     * @return bool|null
     */
    public function getBEzsignformfieldSelected()
    {
        return $this->container['bEzsignformfieldSelected'];
    }

    /**
     * Sets bEzsignformfieldSelected
     *
     * @param bool|null $bEzsignformfieldSelected Whether the Ezsignformfield is selected or not by default.  This can only be set if eEzsignformfieldgroupType is **Checkbox** or **Radio**
     *
     * @return self
     */
    public function setBEzsignformfieldSelected($bEzsignformfieldSelected)
    {
        $this->container['bEzsignformfieldSelected'] = $bEzsignformfieldSelected;

        return $this;
    }

    /**
     * Gets sEzsignformfieldEnteredvalue
     *
     * @return string|null
     */
    public function getSEzsignformfieldEnteredvalue()
    {
        return $this->container['sEzsignformfieldEnteredvalue'];
    }

    /**
     * Sets sEzsignformfieldEnteredvalue
     *
     * @param string|null $sEzsignformfieldEnteredvalue This is the value enterred for the Ezsignformfield  This can only be set if eEzsignformfieldgroupType is **Dropdown**, **Text** or **Textarea**
     *
     * @return self
     */
    public function setSEzsignformfieldEnteredvalue($sEzsignformfieldEnteredvalue)
    {
        $this->container['sEzsignformfieldEnteredvalue'] = $sEzsignformfieldEnteredvalue;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


