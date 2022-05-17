<?php
/**
 * EzsignsignaturecustomdateResponseCompound
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
 * EzsignsignaturecustomdateResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsignaturecustomdate Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignsignaturecustomdateResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsignaturecustomdate-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignsignaturecustomdateID' => 'int',
        'iEzsignsignaturecustomdateX' => 'int',
        'iEzsignsignaturecustomdateY' => 'int',
        'sEzsignsignaturecustomdateFormat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignsignaturecustomdateID' => null,
        'iEzsignsignaturecustomdateX' => null,
        'iEzsignsignaturecustomdateY' => null,
        'sEzsignsignaturecustomdateFormat' => null
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
        'pkiEzsignsignaturecustomdateID' => 'pkiEzsignsignaturecustomdateID',
        'iEzsignsignaturecustomdateX' => 'iEzsignsignaturecustomdateX',
        'iEzsignsignaturecustomdateY' => 'iEzsignsignaturecustomdateY',
        'sEzsignsignaturecustomdateFormat' => 'sEzsignsignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignsignaturecustomdateID' => 'setPkiEzsignsignaturecustomdateID',
        'iEzsignsignaturecustomdateX' => 'setIEzsignsignaturecustomdateX',
        'iEzsignsignaturecustomdateY' => 'setIEzsignsignaturecustomdateY',
        'sEzsignsignaturecustomdateFormat' => 'setSEzsignsignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignsignaturecustomdateID' => 'getPkiEzsignsignaturecustomdateID',
        'iEzsignsignaturecustomdateX' => 'getIEzsignsignaturecustomdateX',
        'iEzsignsignaturecustomdateY' => 'getIEzsignsignaturecustomdateY',
        'sEzsignsignaturecustomdateFormat' => 'getSEzsignsignaturecustomdateFormat'
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
        $this->container['pkiEzsignsignaturecustomdateID'] = $data['pkiEzsignsignaturecustomdateID'] ?? null;
        $this->container['iEzsignsignaturecustomdateX'] = $data['iEzsignsignaturecustomdateX'] ?? null;
        $this->container['iEzsignsignaturecustomdateY'] = $data['iEzsignsignaturecustomdateY'] ?? null;
        $this->container['sEzsignsignaturecustomdateFormat'] = $data['sEzsignsignaturecustomdateFormat'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignsignaturecustomdateID'] === null) {
            $invalidProperties[] = "'pkiEzsignsignaturecustomdateID' can't be null";
        }
        if ($this->container['iEzsignsignaturecustomdateX'] === null) {
            $invalidProperties[] = "'iEzsignsignaturecustomdateX' can't be null";
        }
        if ($this->container['iEzsignsignaturecustomdateY'] === null) {
            $invalidProperties[] = "'iEzsignsignaturecustomdateY' can't be null";
        }
        if ($this->container['sEzsignsignaturecustomdateFormat'] === null) {
            $invalidProperties[] = "'sEzsignsignaturecustomdateFormat' can't be null";
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
     * Gets pkiEzsignsignaturecustomdateID
     *
     * @return int
     */
    public function getPkiEzsignsignaturecustomdateID()
    {
        return $this->container['pkiEzsignsignaturecustomdateID'];
    }

    /**
     * Sets pkiEzsignsignaturecustomdateID
     *
     * @param int $pkiEzsignsignaturecustomdateID The unique ID of the Ezsignsignaturecustomdate
     *
     * @return self
     */
    public function setPkiEzsignsignaturecustomdateID($pkiEzsignsignaturecustomdateID)
    {
        $this->container['pkiEzsignsignaturecustomdateID'] = $pkiEzsignsignaturecustomdateID;

        return $this;
    }

    /**
     * Gets iEzsignsignaturecustomdateX
     *
     * @return int
     */
    public function getIEzsignsignaturecustomdateX()
    {
        return $this->container['iEzsignsignaturecustomdateX'];
    }

    /**
     * Sets iEzsignsignaturecustomdateX
     *
     * @param int $iEzsignsignaturecustomdateX The X coordinate (Horizontal) where to put the Ezsignsignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignaturecustomdate block 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignsignaturecustomdateX($iEzsignsignaturecustomdateX)
    {
        $this->container['iEzsignsignaturecustomdateX'] = $iEzsignsignaturecustomdateX;

        return $this;
    }

    /**
     * Gets iEzsignsignaturecustomdateY
     *
     * @return int
     */
    public function getIEzsignsignaturecustomdateY()
    {
        return $this->container['iEzsignsignaturecustomdateY'];
    }

    /**
     * Sets iEzsignsignaturecustomdateY
     *
     * @param int $iEzsignsignaturecustomdateY The Y coordinate (Vertical) where to put the Ezsignsignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignaturecustomdate block 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignsignaturecustomdateY($iEzsignsignaturecustomdateY)
    {
        $this->container['iEzsignsignaturecustomdateY'] = $iEzsignsignaturecustomdateY;

        return $this;
    }

    /**
     * Gets sEzsignsignaturecustomdateFormat
     *
     * @return string
     */
    public function getSEzsignsignaturecustomdateFormat()
    {
        return $this->container['sEzsignsignaturecustomdateFormat'];
    }

    /**
     * Sets sEzsignsignaturecustomdateFormat
     *
     * @param string $sEzsignsignaturecustomdateFormat The custom date format to use  You can use the codes below and they will be replaced at signature time. Text values like month and day names will be rendered in the proper language. Other text will be left as-is.  The codes examples below are based on the following datetime: Thursday, January 6, 2022 at 08:07:09 EST  For example, the format \"Signature date: {MM}/{DD}/{YYYY} {hh}:{mm}\" would become \"Signature date: 01/06/2022 08:07\"  **Year**  | Code | Example | | - | - | | {YYYY} | 2022 | | {YY} | 22 |  **Month**  | Code | Example | | - | - | | {MonthCapitalize} | Janvier | | {Month} | janvier | | {MM} | 01 | | {M} | 1 |  **Day**  | Code | Example | | - | - | | {DayCapitalize} | Jeudi | | {Day} | jeudi | | {DD} | 06 | | {D} | 6 |  **Hour**  | Code | Example | | - | - | | {hh} | 08 |  **Minute**  | Code | Example | | - | - | | {mm} | 07 |  **Second**  | Code | Example | | - | - | | {ss} | 09 |        **Timezone**  | Code | Example | | - | - | | {Z} | EST |       **Time**  | Code | Example | | - | - | | {Time} | 08:07:09 |   | {TimeZ} | 08:07:09 EST |     **Date**  | Code | Example | | - | - | | {Date} | 2022-01-06 |   | {DateText} | 1er Janvier 2022 |  **Full**  | Code | Example | | - | - | | {DateTime} | 2022-01-06 08:07:09 |   | {DateTimeZ} | 2022-01-06 08:07:09 EST |
     *
     * @return self
     */
    public function setSEzsignsignaturecustomdateFormat($sEzsignsignaturecustomdateFormat)
    {
        $this->container['sEzsignsignaturecustomdateFormat'] = $sEzsignsignaturecustomdateFormat;

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


