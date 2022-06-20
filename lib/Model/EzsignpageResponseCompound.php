<?php
/**
 * EzsignpageResponseCompound
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
 * The version of the OpenAPI document: 1.1.9
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
 * EzsignpageResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignpage Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignpageResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignpage-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignpageID' => 'int',
        'iEzsignpageWidthimage' => 'int',
        'iEzsignpageHeightimage' => 'int',
        'iEzsignpageWidthpdf' => 'int',
        'iEzsignpageHeightpdf' => 'int',
        'iEzsignpagePagenumber' => 'int',
        'sImageUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignpageID' => null,
        'iEzsignpageWidthimage' => null,
        'iEzsignpageHeightimage' => null,
        'iEzsignpageWidthpdf' => null,
        'iEzsignpageHeightpdf' => null,
        'iEzsignpagePagenumber' => null,
        'sImageUrl' => null
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
        'pkiEzsignpageID' => 'pkiEzsignpageID',
        'iEzsignpageWidthimage' => 'iEzsignpageWidthimage',
        'iEzsignpageHeightimage' => 'iEzsignpageHeightimage',
        'iEzsignpageWidthpdf' => 'iEzsignpageWidthpdf',
        'iEzsignpageHeightpdf' => 'iEzsignpageHeightpdf',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber',
        'sImageUrl' => 'sImageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignpageID' => 'setPkiEzsignpageID',
        'iEzsignpageWidthimage' => 'setIEzsignpageWidthimage',
        'iEzsignpageHeightimage' => 'setIEzsignpageHeightimage',
        'iEzsignpageWidthpdf' => 'setIEzsignpageWidthpdf',
        'iEzsignpageHeightpdf' => 'setIEzsignpageHeightpdf',
        'iEzsignpagePagenumber' => 'setIEzsignpagePagenumber',
        'sImageUrl' => 'setSImageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignpageID' => 'getPkiEzsignpageID',
        'iEzsignpageWidthimage' => 'getIEzsignpageWidthimage',
        'iEzsignpageHeightimage' => 'getIEzsignpageHeightimage',
        'iEzsignpageWidthpdf' => 'getIEzsignpageWidthpdf',
        'iEzsignpageHeightpdf' => 'getIEzsignpageHeightpdf',
        'iEzsignpagePagenumber' => 'getIEzsignpagePagenumber',
        'sImageUrl' => 'getSImageUrl'
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
        $this->container['pkiEzsignpageID'] = $data['pkiEzsignpageID'] ?? null;
        $this->container['iEzsignpageWidthimage'] = $data['iEzsignpageWidthimage'] ?? null;
        $this->container['iEzsignpageHeightimage'] = $data['iEzsignpageHeightimage'] ?? null;
        $this->container['iEzsignpageWidthpdf'] = $data['iEzsignpageWidthpdf'] ?? null;
        $this->container['iEzsignpageHeightpdf'] = $data['iEzsignpageHeightpdf'] ?? null;
        $this->container['iEzsignpagePagenumber'] = $data['iEzsignpagePagenumber'] ?? null;
        $this->container['sImageUrl'] = $data['sImageUrl'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignpageID'] === null) {
            $invalidProperties[] = "'pkiEzsignpageID' can't be null";
        }
        if (($this->container['pkiEzsignpageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignpageID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpageWidthimage'] === null) {
            $invalidProperties[] = "'iEzsignpageWidthimage' can't be null";
        }
        if (($this->container['iEzsignpageWidthimage'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignpageWidthimage', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpageHeightimage'] === null) {
            $invalidProperties[] = "'iEzsignpageHeightimage' can't be null";
        }
        if (($this->container['iEzsignpageHeightimage'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignpageHeightimage', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpageWidthpdf'] === null) {
            $invalidProperties[] = "'iEzsignpageWidthpdf' can't be null";
        }
        if (($this->container['iEzsignpageWidthpdf'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignpageWidthpdf', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpageHeightpdf'] === null) {
            $invalidProperties[] = "'iEzsignpageHeightpdf' can't be null";
        }
        if (($this->container['iEzsignpageHeightpdf'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignpageHeightpdf', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsignpagePagenumber' can't be null";
        }
        if (($this->container['iEzsignpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsignpagePagenumber', must be bigger than or equal to 1.";
        }

        if ($this->container['sImageUrl'] === null) {
            $invalidProperties[] = "'sImageUrl' can't be null";
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
     * Gets pkiEzsignpageID
     *
     * @return int
     */
    public function getPkiEzsignpageID()
    {
        return $this->container['pkiEzsignpageID'];
    }

    /**
     * Sets pkiEzsignpageID
     *
     * @param int $pkiEzsignpageID The unique ID of the Ezsignpage
     *
     * @return self
     */
    public function setPkiEzsignpageID($pkiEzsignpageID)
    {

        if (($pkiEzsignpageID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignpageID when calling EzsignpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsignpageID'] = $pkiEzsignpageID;

        return $this;
    }

    /**
     * Gets iEzsignpageWidthimage
     *
     * @return int
     */
    public function getIEzsignpageWidthimage()
    {
        return $this->container['iEzsignpageWidthimage'];
    }

    /**
     * Sets iEzsignpageWidthimage
     *
     * @param int $iEzsignpageWidthimage The Width of the page's image in pixels calculated at 100 DPI
     *
     * @return self
     */
    public function setIEzsignpageWidthimage($iEzsignpageWidthimage)
    {

        if (($iEzsignpageWidthimage < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignpageWidthimage when calling EzsignpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignpageWidthimage'] = $iEzsignpageWidthimage;

        return $this;
    }

    /**
     * Gets iEzsignpageHeightimage
     *
     * @return int
     */
    public function getIEzsignpageHeightimage()
    {
        return $this->container['iEzsignpageHeightimage'];
    }

    /**
     * Sets iEzsignpageHeightimage
     *
     * @param int $iEzsignpageHeightimage The Height of the page's image in pixels calculated at 100 DPI
     *
     * @return self
     */
    public function setIEzsignpageHeightimage($iEzsignpageHeightimage)
    {

        if (($iEzsignpageHeightimage < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignpageHeightimage when calling EzsignpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignpageHeightimage'] = $iEzsignpageHeightimage;

        return $this;
    }

    /**
     * Gets iEzsignpageWidthpdf
     *
     * @return int
     */
    public function getIEzsignpageWidthpdf()
    {
        return $this->container['iEzsignpageWidthpdf'];
    }

    /**
     * Sets iEzsignpageWidthpdf
     *
     * @param int $iEzsignpageWidthpdf The Width of the page in points calculated at 72 DPI
     *
     * @return self
     */
    public function setIEzsignpageWidthpdf($iEzsignpageWidthpdf)
    {

        if (($iEzsignpageWidthpdf < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignpageWidthpdf when calling EzsignpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignpageWidthpdf'] = $iEzsignpageWidthpdf;

        return $this;
    }

    /**
     * Gets iEzsignpageHeightpdf
     *
     * @return int
     */
    public function getIEzsignpageHeightpdf()
    {
        return $this->container['iEzsignpageHeightpdf'];
    }

    /**
     * Sets iEzsignpageHeightpdf
     *
     * @param int $iEzsignpageHeightpdf The Height of the page in points calculated at 72 DPI
     *
     * @return self
     */
    public function setIEzsignpageHeightpdf($iEzsignpageHeightpdf)
    {

        if (($iEzsignpageHeightpdf < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignpageHeightpdf when calling EzsignpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignpageHeightpdf'] = $iEzsignpageHeightpdf;

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

        if (($iEzsignpagePagenumber < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignpagePagenumber when calling EzsignpageResponseCompound., must be bigger than or equal to 1.');
        }

        $this->container['iEzsignpagePagenumber'] = $iEzsignpagePagenumber;

        return $this;
    }

    /**
     * Gets sImageUrl
     *
     * @return string
     */
    public function getSImageUrl()
    {
        return $this->container['sImageUrl'];
    }

    /**
     * Sets sImageUrl
     *
     * @param string $sImageUrl The Url to the Ezsignpage's rasterized image.  Url will expire after 5 minutes.
     *
     * @return self
     */
    public function setSImageUrl($sImageUrl)
    {
        $this->container['sImageUrl'] = $sImageUrl;

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


