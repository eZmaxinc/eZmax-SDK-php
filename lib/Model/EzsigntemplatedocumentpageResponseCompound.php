<?php
/**
 * EzsigntemplatedocumentpageResponseCompound
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
 * The version of the OpenAPI document: 1.1.10
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
 * EzsigntemplatedocumentpageResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplatedocumentpage Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatedocumentpageResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatedocumentpage-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatedocumentpageID' => 'int',
        'iEzsigntemplatedocumentpageWidthimage' => 'int',
        'iEzsigntemplatedocumentpageHeightimage' => 'int',
        'iEzsigntemplatedocumentpageWidthpdf' => 'int',
        'iEzsigntemplatedocumentpageHeightpdf' => 'int',
        'iEzsigntemplatedocumentpagePagenumber' => 'int',
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
        'pkiEzsigntemplatedocumentpageID' => null,
        'iEzsigntemplatedocumentpageWidthimage' => null,
        'iEzsigntemplatedocumentpageHeightimage' => null,
        'iEzsigntemplatedocumentpageWidthpdf' => null,
        'iEzsigntemplatedocumentpageHeightpdf' => null,
        'iEzsigntemplatedocumentpagePagenumber' => null,
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
        'pkiEzsigntemplatedocumentpageID' => 'pkiEzsigntemplatedocumentpageID',
        'iEzsigntemplatedocumentpageWidthimage' => 'iEzsigntemplatedocumentpageWidthimage',
        'iEzsigntemplatedocumentpageHeightimage' => 'iEzsigntemplatedocumentpageHeightimage',
        'iEzsigntemplatedocumentpageWidthpdf' => 'iEzsigntemplatedocumentpageWidthpdf',
        'iEzsigntemplatedocumentpageHeightpdf' => 'iEzsigntemplatedocumentpageHeightpdf',
        'iEzsigntemplatedocumentpagePagenumber' => 'iEzsigntemplatedocumentpagePagenumber',
        'sImageUrl' => 'sImageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatedocumentpageID' => 'setPkiEzsigntemplatedocumentpageID',
        'iEzsigntemplatedocumentpageWidthimage' => 'setIEzsigntemplatedocumentpageWidthimage',
        'iEzsigntemplatedocumentpageHeightimage' => 'setIEzsigntemplatedocumentpageHeightimage',
        'iEzsigntemplatedocumentpageWidthpdf' => 'setIEzsigntemplatedocumentpageWidthpdf',
        'iEzsigntemplatedocumentpageHeightpdf' => 'setIEzsigntemplatedocumentpageHeightpdf',
        'iEzsigntemplatedocumentpagePagenumber' => 'setIEzsigntemplatedocumentpagePagenumber',
        'sImageUrl' => 'setSImageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatedocumentpageID' => 'getPkiEzsigntemplatedocumentpageID',
        'iEzsigntemplatedocumentpageWidthimage' => 'getIEzsigntemplatedocumentpageWidthimage',
        'iEzsigntemplatedocumentpageHeightimage' => 'getIEzsigntemplatedocumentpageHeightimage',
        'iEzsigntemplatedocumentpageWidthpdf' => 'getIEzsigntemplatedocumentpageWidthpdf',
        'iEzsigntemplatedocumentpageHeightpdf' => 'getIEzsigntemplatedocumentpageHeightpdf',
        'iEzsigntemplatedocumentpagePagenumber' => 'getIEzsigntemplatedocumentpagePagenumber',
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
        $this->container['pkiEzsigntemplatedocumentpageID'] = $data['pkiEzsigntemplatedocumentpageID'] ?? null;
        $this->container['iEzsigntemplatedocumentpageWidthimage'] = $data['iEzsigntemplatedocumentpageWidthimage'] ?? null;
        $this->container['iEzsigntemplatedocumentpageHeightimage'] = $data['iEzsigntemplatedocumentpageHeightimage'] ?? null;
        $this->container['iEzsigntemplatedocumentpageWidthpdf'] = $data['iEzsigntemplatedocumentpageWidthpdf'] ?? null;
        $this->container['iEzsigntemplatedocumentpageHeightpdf'] = $data['iEzsigntemplatedocumentpageHeightpdf'] ?? null;
        $this->container['iEzsigntemplatedocumentpagePagenumber'] = $data['iEzsigntemplatedocumentpagePagenumber'] ?? null;
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

        if ($this->container['pkiEzsigntemplatedocumentpageID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplatedocumentpageID' can't be null";
        }
        if (($this->container['pkiEzsigntemplatedocumentpageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatedocumentpageID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageWidthimage'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageWidthimage' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageWidthimage'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageWidthimage', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageHeightimage'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageHeightimage' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageHeightimage'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageHeightimage', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageWidthpdf'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageWidthpdf' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageWidthpdf'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageWidthpdf', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageHeightpdf'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageHeightpdf' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageHeightpdf'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageHeightpdf', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpagePagenumber' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpagePagenumber', must be bigger than or equal to 1.";
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
     * Gets pkiEzsigntemplatedocumentpageID
     *
     * @return int
     */
    public function getPkiEzsigntemplatedocumentpageID()
    {
        return $this->container['pkiEzsigntemplatedocumentpageID'];
    }

    /**
     * Sets pkiEzsigntemplatedocumentpageID
     *
     * @param int $pkiEzsigntemplatedocumentpageID The unique ID of the Ezsigntemplatedocumentpage
     *
     * @return self
     */
    public function setPkiEzsigntemplatedocumentpageID($pkiEzsigntemplatedocumentpageID)
    {

        if (($pkiEzsigntemplatedocumentpageID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatedocumentpageID when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsigntemplatedocumentpageID'] = $pkiEzsigntemplatedocumentpageID;

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageWidthimage
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageWidthimage()
    {
        return $this->container['iEzsigntemplatedocumentpageWidthimage'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageWidthimage
     *
     * @param int $iEzsigntemplatedocumentpageWidthimage The Width of the page's image in pixels calculated at 100 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageWidthimage($iEzsigntemplatedocumentpageWidthimage)
    {

        if (($iEzsigntemplatedocumentpageWidthimage < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageWidthimage when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatedocumentpageWidthimage'] = $iEzsigntemplatedocumentpageWidthimage;

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageHeightimage
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageHeightimage()
    {
        return $this->container['iEzsigntemplatedocumentpageHeightimage'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageHeightimage
     *
     * @param int $iEzsigntemplatedocumentpageHeightimage The Height of the page's image in pixels calculated at 100 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageHeightimage($iEzsigntemplatedocumentpageHeightimage)
    {

        if (($iEzsigntemplatedocumentpageHeightimage < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageHeightimage when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatedocumentpageHeightimage'] = $iEzsigntemplatedocumentpageHeightimage;

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageWidthpdf
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageWidthpdf()
    {
        return $this->container['iEzsigntemplatedocumentpageWidthpdf'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageWidthpdf
     *
     * @param int $iEzsigntemplatedocumentpageWidthpdf The Width of the page in points calculated at 72 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageWidthpdf($iEzsigntemplatedocumentpageWidthpdf)
    {

        if (($iEzsigntemplatedocumentpageWidthpdf < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageWidthpdf when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatedocumentpageWidthpdf'] = $iEzsigntemplatedocumentpageWidthpdf;

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageHeightpdf
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageHeightpdf()
    {
        return $this->container['iEzsigntemplatedocumentpageHeightpdf'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageHeightpdf
     *
     * @param int $iEzsigntemplatedocumentpageHeightpdf The Height of the page in points calculated at 72 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageHeightpdf($iEzsigntemplatedocumentpageHeightpdf)
    {

        if (($iEzsigntemplatedocumentpageHeightpdf < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageHeightpdf when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatedocumentpageHeightpdf'] = $iEzsigntemplatedocumentpageHeightpdf;

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

        if (($iEzsigntemplatedocumentpagePagenumber < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpagePagenumber when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 1.');
        }

        $this->container['iEzsigntemplatedocumentpagePagenumber'] = $iEzsigntemplatedocumentpagePagenumber;

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
     * @param string $sImageUrl The Url to the Ezsigntemplatedocumentpage's rasterized image.  Url will expire after 5 minutes.
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


