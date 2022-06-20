<?php
/**
 * EzsigntemplatesignaturecustomdateRequest
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
 * The version of the OpenAPI document: 1.1.8
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
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
 * EzsigntemplatesignaturecustomdateRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplatesignaturecustomdate Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsigntemplatesignaturecustomdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatesignaturecustomdate-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatesignaturecustomdateID' => 'int',
        'iEzsigntemplatesignaturecustomdateX' => 'int',
        'iEzsigntemplatesignaturecustomdateY' => 'int',
        'sEzsigntemplatesignaturecustomdateFormat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatesignaturecustomdateID' => null,
        'iEzsigntemplatesignaturecustomdateX' => null,
        'iEzsigntemplatesignaturecustomdateY' => null,
        'sEzsigntemplatesignaturecustomdateFormat' => null
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
        'pkiEzsigntemplatesignaturecustomdateID' => 'pkiEzsigntemplatesignaturecustomdateID',
        'iEzsigntemplatesignaturecustomdateX' => 'iEzsigntemplatesignaturecustomdateX',
        'iEzsigntemplatesignaturecustomdateY' => 'iEzsigntemplatesignaturecustomdateY',
        'sEzsigntemplatesignaturecustomdateFormat' => 'sEzsigntemplatesignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatesignaturecustomdateID' => 'setPkiEzsigntemplatesignaturecustomdateID',
        'iEzsigntemplatesignaturecustomdateX' => 'setIEzsigntemplatesignaturecustomdateX',
        'iEzsigntemplatesignaturecustomdateY' => 'setIEzsigntemplatesignaturecustomdateY',
        'sEzsigntemplatesignaturecustomdateFormat' => 'setSEzsigntemplatesignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatesignaturecustomdateID' => 'getPkiEzsigntemplatesignaturecustomdateID',
        'iEzsigntemplatesignaturecustomdateX' => 'getIEzsigntemplatesignaturecustomdateX',
        'iEzsigntemplatesignaturecustomdateY' => 'getIEzsigntemplatesignaturecustomdateY',
        'sEzsigntemplatesignaturecustomdateFormat' => 'getSEzsigntemplatesignaturecustomdateFormat'
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
        $this->container['pkiEzsigntemplatesignaturecustomdateID'] = $data['pkiEzsigntemplatesignaturecustomdateID'] ?? null;
        $this->container['iEzsigntemplatesignaturecustomdateX'] = $data['iEzsigntemplatesignaturecustomdateX'] ?? null;
        $this->container['iEzsigntemplatesignaturecustomdateY'] = $data['iEzsigntemplatesignaturecustomdateY'] ?? null;
        $this->container['sEzsigntemplatesignaturecustomdateFormat'] = $data['sEzsigntemplatesignaturecustomdateFormat'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pkiEzsigntemplatesignaturecustomdateID']) && ($this->container['pkiEzsigntemplatesignaturecustomdateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatesignaturecustomdateID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatesignaturecustomdateX'] === null) {
            $invalidProperties[] = "'iEzsigntemplatesignaturecustomdateX' can't be null";
        }
        if (($this->container['iEzsigntemplatesignaturecustomdateX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatesignaturecustomdateX', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatesignaturecustomdateY'] === null) {
            $invalidProperties[] = "'iEzsigntemplatesignaturecustomdateY' can't be null";
        }
        if (($this->container['iEzsigntemplatesignaturecustomdateY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatesignaturecustomdateY', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsigntemplatesignaturecustomdateFormat'] === null) {
            $invalidProperties[] = "'sEzsigntemplatesignaturecustomdateFormat' can't be null";
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
     * Gets pkiEzsigntemplatesignaturecustomdateID
     *
     * @return int|null
     */
    public function getPkiEzsigntemplatesignaturecustomdateID()
    {
        return $this->container['pkiEzsigntemplatesignaturecustomdateID'];
    }

    /**
     * Sets pkiEzsigntemplatesignaturecustomdateID
     *
     * @param int|null $pkiEzsigntemplatesignaturecustomdateID The unique ID of the Ezsigntemplatesignaturecustomdate
     *
     * @return self
     */
    public function setPkiEzsigntemplatesignaturecustomdateID($pkiEzsigntemplatesignaturecustomdateID)
    {

        if (!is_null($pkiEzsigntemplatesignaturecustomdateID) && ($pkiEzsigntemplatesignaturecustomdateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatesignaturecustomdateID when calling EzsigntemplatesignaturecustomdateRequest., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsigntemplatesignaturecustomdateID'] = $pkiEzsigntemplatesignaturecustomdateID;

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignaturecustomdateX
     *
     * @return int
     */
    public function getIEzsigntemplatesignaturecustomdateX()
    {
        return $this->container['iEzsigntemplatesignaturecustomdateX'];
    }

    /**
     * Sets iEzsigntemplatesignaturecustomdateX
     *
     * @param int $iEzsigntemplatesignaturecustomdateX The X coordinate (Horizontal) where to put the Ezsigntemplatesignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignaturecustomdate 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplatesignaturecustomdateX($iEzsigntemplatesignaturecustomdateX)
    {

        if (($iEzsigntemplatesignaturecustomdateX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatesignaturecustomdateX when calling EzsigntemplatesignaturecustomdateRequest., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatesignaturecustomdateX'] = $iEzsigntemplatesignaturecustomdateX;

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignaturecustomdateY
     *
     * @return int
     */
    public function getIEzsigntemplatesignaturecustomdateY()
    {
        return $this->container['iEzsigntemplatesignaturecustomdateY'];
    }

    /**
     * Sets iEzsigntemplatesignaturecustomdateY
     *
     * @param int $iEzsigntemplatesignaturecustomdateY The Y coordinate (Vertical) where to put the Ezsigntemplatesignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignaturecustomdate 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplatesignaturecustomdateY($iEzsigntemplatesignaturecustomdateY)
    {

        if (($iEzsigntemplatesignaturecustomdateY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatesignaturecustomdateY when calling EzsigntemplatesignaturecustomdateRequest., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatesignaturecustomdateY'] = $iEzsigntemplatesignaturecustomdateY;

        return $this;
    }

    /**
     * Gets sEzsigntemplatesignaturecustomdateFormat
     *
     * @return string
     */
    public function getSEzsigntemplatesignaturecustomdateFormat()
    {
        return $this->container['sEzsigntemplatesignaturecustomdateFormat'];
    }

    /**
     * Sets sEzsigntemplatesignaturecustomdateFormat
     *
     * @param string $sEzsigntemplatesignaturecustomdateFormat The custom date format to use  You can use the codes below and they will be replaced at signature time. Text values like month and day names will be rendered in the proper language. Other text will be left as-is.  The codes examples below are based on the following datetime: Thursday, January 6, 2022 at 08:07:09 EST  For example, the format \"Signature date: {MM}/{DD}/{YYYY} {hh}:{mm}\" would become \"Signature date: 01/06/2022 08:07\"  **Year**  | Code | Example | | - | - | | {YYYY} | 2022 | | {YY} | 22 |  **Month**  | Code | Example | | - | - | | {MonthCapitalize} | Janvier | | {Month} | janvier | | {MM} | 01 | | {M} | 1 |  **Day**  | Code | Example | | - | - | | {DayCapitalize} | Jeudi | | {Day} | jeudi | | {DD} | 06 | | {D} | 6 |  **Hour**  | Code | Example | | - | - | | {hh} | 08 |  **Minute**  | Code | Example | | - | - | | {mm} | 07 |  **Second**  | Code | Example | | - | - | | {ss} | 09 |        **Timezone**  | Code | Example | | - | - | | {Z} | EST |       **Time**  | Code | Example | | - | - | | {Time} | 08:07:09 |   | {TimeZ} | 08:07:09 EST |     **Date**  | Code | Example | | - | - | | {Date} | 2022-01-06 |   | {DateText} | 1er Janvier 2022 |  **Full**  | Code | Example | | - | - | | {DateTime} | 2022-01-06 08:07:09 |   | {DateTimeZ} | 2022-01-06 08:07:09 EST |
     *
     * @return self
     */
    public function setSEzsigntemplatesignaturecustomdateFormat($sEzsigntemplatesignaturecustomdateFormat)
    {
        $this->container['sEzsigntemplatesignaturecustomdateFormat'] = $sEzsigntemplatesignaturecustomdateFormat;

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


