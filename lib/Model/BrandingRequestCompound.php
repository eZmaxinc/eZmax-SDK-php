<?php
/**
 * BrandingRequestCompound
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
 * BrandingRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Branding Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BrandingRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'branding-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiBrandingID' => 'int',
        'objBrandingDescription' => '\eZmaxAPI\Model\MultilingualBrandingDescription',
        'eBrandingLogo' => '\eZmaxAPI\Model\FieldEBrandingLogo',
        'sBrandingBase64' => 'string',
        'iBrandingColortext' => 'int',
        'iBrandingColortextlinkbox' => 'int',
        'iBrandingColortextbutton' => 'int',
        'iBrandingColorbackground' => 'int',
        'iBrandingColorbackgroundbutton' => 'int',
        'iBrandingColorbackgroundsmallbox' => 'int',
        'bBrandingIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiBrandingID' => null,
        'objBrandingDescription' => null,
        'eBrandingLogo' => null,
        'sBrandingBase64' => 'byte',
        'iBrandingColortext' => null,
        'iBrandingColortextlinkbox' => null,
        'iBrandingColortextbutton' => null,
        'iBrandingColorbackground' => null,
        'iBrandingColorbackgroundbutton' => null,
        'iBrandingColorbackgroundsmallbox' => null,
        'bBrandingIsactive' => null
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
        'pkiBrandingID' => 'pkiBrandingID',
        'objBrandingDescription' => 'objBrandingDescription',
        'eBrandingLogo' => 'eBrandingLogo',
        'sBrandingBase64' => 'sBrandingBase64',
        'iBrandingColortext' => 'iBrandingColortext',
        'iBrandingColortextlinkbox' => 'iBrandingColortextlinkbox',
        'iBrandingColortextbutton' => 'iBrandingColortextbutton',
        'iBrandingColorbackground' => 'iBrandingColorbackground',
        'iBrandingColorbackgroundbutton' => 'iBrandingColorbackgroundbutton',
        'iBrandingColorbackgroundsmallbox' => 'iBrandingColorbackgroundsmallbox',
        'bBrandingIsactive' => 'bBrandingIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiBrandingID' => 'setPkiBrandingID',
        'objBrandingDescription' => 'setObjBrandingDescription',
        'eBrandingLogo' => 'setEBrandingLogo',
        'sBrandingBase64' => 'setSBrandingBase64',
        'iBrandingColortext' => 'setIBrandingColortext',
        'iBrandingColortextlinkbox' => 'setIBrandingColortextlinkbox',
        'iBrandingColortextbutton' => 'setIBrandingColortextbutton',
        'iBrandingColorbackground' => 'setIBrandingColorbackground',
        'iBrandingColorbackgroundbutton' => 'setIBrandingColorbackgroundbutton',
        'iBrandingColorbackgroundsmallbox' => 'setIBrandingColorbackgroundsmallbox',
        'bBrandingIsactive' => 'setBBrandingIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiBrandingID' => 'getPkiBrandingID',
        'objBrandingDescription' => 'getObjBrandingDescription',
        'eBrandingLogo' => 'getEBrandingLogo',
        'sBrandingBase64' => 'getSBrandingBase64',
        'iBrandingColortext' => 'getIBrandingColortext',
        'iBrandingColortextlinkbox' => 'getIBrandingColortextlinkbox',
        'iBrandingColortextbutton' => 'getIBrandingColortextbutton',
        'iBrandingColorbackground' => 'getIBrandingColorbackground',
        'iBrandingColorbackgroundbutton' => 'getIBrandingColorbackgroundbutton',
        'iBrandingColorbackgroundsmallbox' => 'getIBrandingColorbackgroundsmallbox',
        'bBrandingIsactive' => 'getBBrandingIsactive'
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
        $this->container['pkiBrandingID'] = $data['pkiBrandingID'] ?? null;
        $this->container['objBrandingDescription'] = $data['objBrandingDescription'] ?? null;
        $this->container['eBrandingLogo'] = $data['eBrandingLogo'] ?? null;
        $this->container['sBrandingBase64'] = $data['sBrandingBase64'] ?? null;
        $this->container['iBrandingColortext'] = $data['iBrandingColortext'] ?? null;
        $this->container['iBrandingColortextlinkbox'] = $data['iBrandingColortextlinkbox'] ?? null;
        $this->container['iBrandingColortextbutton'] = $data['iBrandingColortextbutton'] ?? null;
        $this->container['iBrandingColorbackground'] = $data['iBrandingColorbackground'] ?? null;
        $this->container['iBrandingColorbackgroundbutton'] = $data['iBrandingColorbackgroundbutton'] ?? null;
        $this->container['iBrandingColorbackgroundsmallbox'] = $data['iBrandingColorbackgroundsmallbox'] ?? null;
        $this->container['bBrandingIsactive'] = $data['bBrandingIsactive'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pkiBrandingID']) && ($this->container['pkiBrandingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiBrandingID', must be bigger than or equal to 0.";
        }

        if ($this->container['objBrandingDescription'] === null) {
            $invalidProperties[] = "'objBrandingDescription' can't be null";
        }
        if ($this->container['eBrandingLogo'] === null) {
            $invalidProperties[] = "'eBrandingLogo' can't be null";
        }
        if ($this->container['iBrandingColortext'] === null) {
            $invalidProperties[] = "'iBrandingColortext' can't be null";
        }
        if (($this->container['iBrandingColortext'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortext', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColortext'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortext', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColortextlinkbox'] === null) {
            $invalidProperties[] = "'iBrandingColortextlinkbox' can't be null";
        }
        if (($this->container['iBrandingColortextlinkbox'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextlinkbox', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColortextlinkbox'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextlinkbox', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColortextbutton'] === null) {
            $invalidProperties[] = "'iBrandingColortextbutton' can't be null";
        }
        if (($this->container['iBrandingColortextbutton'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextbutton', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColortextbutton'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextbutton', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColorbackground'] === null) {
            $invalidProperties[] = "'iBrandingColorbackground' can't be null";
        }
        if (($this->container['iBrandingColorbackground'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackground', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColorbackground'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackground', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColorbackgroundbutton'] === null) {
            $invalidProperties[] = "'iBrandingColorbackgroundbutton' can't be null";
        }
        if (($this->container['iBrandingColorbackgroundbutton'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundbutton', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColorbackgroundbutton'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundbutton', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColorbackgroundsmallbox'] === null) {
            $invalidProperties[] = "'iBrandingColorbackgroundsmallbox' can't be null";
        }
        if (($this->container['iBrandingColorbackgroundsmallbox'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundsmallbox', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColorbackgroundsmallbox'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundsmallbox', must be bigger than or equal to 0.";
        }

        if ($this->container['bBrandingIsactive'] === null) {
            $invalidProperties[] = "'bBrandingIsactive' can't be null";
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
     * Gets pkiBrandingID
     *
     * @return int|null
     */
    public function getPkiBrandingID()
    {
        return $this->container['pkiBrandingID'];
    }

    /**
     * Sets pkiBrandingID
     *
     * @param int|null $pkiBrandingID The unique ID of the Branding
     *
     * @return self
     */
    public function setPkiBrandingID($pkiBrandingID)
    {

        if (!is_null($pkiBrandingID) && ($pkiBrandingID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiBrandingID when calling BrandingRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['pkiBrandingID'] = $pkiBrandingID;

        return $this;
    }

    /**
     * Gets objBrandingDescription
     *
     * @return \eZmaxAPI\Model\MultilingualBrandingDescription
     */
    public function getObjBrandingDescription()
    {
        return $this->container['objBrandingDescription'];
    }

    /**
     * Sets objBrandingDescription
     *
     * @param \eZmaxAPI\Model\MultilingualBrandingDescription $objBrandingDescription objBrandingDescription
     *
     * @return self
     */
    public function setObjBrandingDescription($objBrandingDescription)
    {
        $this->container['objBrandingDescription'] = $objBrandingDescription;

        return $this;
    }

    /**
     * Gets eBrandingLogo
     *
     * @return \eZmaxAPI\Model\FieldEBrandingLogo
     */
    public function getEBrandingLogo()
    {
        return $this->container['eBrandingLogo'];
    }

    /**
     * Sets eBrandingLogo
     *
     * @param \eZmaxAPI\Model\FieldEBrandingLogo $eBrandingLogo eBrandingLogo
     *
     * @return self
     */
    public function setEBrandingLogo($eBrandingLogo)
    {
        $this->container['eBrandingLogo'] = $eBrandingLogo;

        return $this;
    }

    /**
     * Gets sBrandingBase64
     *
     * @return string|null
     */
    public function getSBrandingBase64()
    {
        return $this->container['sBrandingBase64'];
    }

    /**
     * Sets sBrandingBase64
     *
     * @param string|null $sBrandingBase64 The Base64 encoded binary content of the branding logo. This need to match image type selected in eBrandingLogo if you supply an image. If you select 'Default', the logo will be deleted and the default one will be used.
     *
     * @return self
     */
    public function setSBrandingBase64($sBrandingBase64)
    {
        $this->container['sBrandingBase64'] = $sBrandingBase64;

        return $this;
    }

    /**
     * Gets iBrandingColortext
     *
     * @return int
     */
    public function getIBrandingColortext()
    {
        return $this->container['iBrandingColortext'];
    }

    /**
     * Sets iBrandingColortext
     *
     * @param int $iBrandingColortext The color of the text. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColortext($iBrandingColortext)
    {

        if (($iBrandingColortext > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortext when calling BrandingRequestCompound., must be smaller than or equal to 16777215.');
        }
        if (($iBrandingColortext < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortext when calling BrandingRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iBrandingColortext'] = $iBrandingColortext;

        return $this;
    }

    /**
     * Gets iBrandingColortextlinkbox
     *
     * @return int
     */
    public function getIBrandingColortextlinkbox()
    {
        return $this->container['iBrandingColortextlinkbox'];
    }

    /**
     * Sets iBrandingColortextlinkbox
     *
     * @param int $iBrandingColortextlinkbox The color of the text in the link box. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColortextlinkbox($iBrandingColortextlinkbox)
    {

        if (($iBrandingColortextlinkbox > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextlinkbox when calling BrandingRequestCompound., must be smaller than or equal to 16777215.');
        }
        if (($iBrandingColortextlinkbox < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextlinkbox when calling BrandingRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iBrandingColortextlinkbox'] = $iBrandingColortextlinkbox;

        return $this;
    }

    /**
     * Gets iBrandingColortextbutton
     *
     * @return int
     */
    public function getIBrandingColortextbutton()
    {
        return $this->container['iBrandingColortextbutton'];
    }

    /**
     * Sets iBrandingColortextbutton
     *
     * @param int $iBrandingColortextbutton The color of the text in the button. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColortextbutton($iBrandingColortextbutton)
    {

        if (($iBrandingColortextbutton > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextbutton when calling BrandingRequestCompound., must be smaller than or equal to 16777215.');
        }
        if (($iBrandingColortextbutton < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextbutton when calling BrandingRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iBrandingColortextbutton'] = $iBrandingColortextbutton;

        return $this;
    }

    /**
     * Gets iBrandingColorbackground
     *
     * @return int
     */
    public function getIBrandingColorbackground()
    {
        return $this->container['iBrandingColorbackground'];
    }

    /**
     * Sets iBrandingColorbackground
     *
     * @param int $iBrandingColorbackground The color of the background. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColorbackground($iBrandingColorbackground)
    {

        if (($iBrandingColorbackground > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackground when calling BrandingRequestCompound., must be smaller than or equal to 16777215.');
        }
        if (($iBrandingColorbackground < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackground when calling BrandingRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iBrandingColorbackground'] = $iBrandingColorbackground;

        return $this;
    }

    /**
     * Gets iBrandingColorbackgroundbutton
     *
     * @return int
     */
    public function getIBrandingColorbackgroundbutton()
    {
        return $this->container['iBrandingColorbackgroundbutton'];
    }

    /**
     * Sets iBrandingColorbackgroundbutton
     *
     * @param int $iBrandingColorbackgroundbutton The color of the background of the button. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColorbackgroundbutton($iBrandingColorbackgroundbutton)
    {

        if (($iBrandingColorbackgroundbutton > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundbutton when calling BrandingRequestCompound., must be smaller than or equal to 16777215.');
        }
        if (($iBrandingColorbackgroundbutton < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundbutton when calling BrandingRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iBrandingColorbackgroundbutton'] = $iBrandingColorbackgroundbutton;

        return $this;
    }

    /**
     * Gets iBrandingColorbackgroundsmallbox
     *
     * @return int
     */
    public function getIBrandingColorbackgroundsmallbox()
    {
        return $this->container['iBrandingColorbackgroundsmallbox'];
    }

    /**
     * Sets iBrandingColorbackgroundsmallbox
     *
     * @param int $iBrandingColorbackgroundsmallbox The color of the background of the small box. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColorbackgroundsmallbox($iBrandingColorbackgroundsmallbox)
    {

        if (($iBrandingColorbackgroundsmallbox > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundsmallbox when calling BrandingRequestCompound., must be smaller than or equal to 16777215.');
        }
        if (($iBrandingColorbackgroundsmallbox < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundsmallbox when calling BrandingRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iBrandingColorbackgroundsmallbox'] = $iBrandingColorbackgroundsmallbox;

        return $this;
    }

    /**
     * Gets bBrandingIsactive
     *
     * @return bool
     */
    public function getBBrandingIsactive()
    {
        return $this->container['bBrandingIsactive'];
    }

    /**
     * Sets bBrandingIsactive
     *
     * @param bool $bBrandingIsactive Whether the Branding is active or not
     *
     * @return self
     */
    public function setBBrandingIsactive($bBrandingIsactive)
    {
        $this->container['bBrandingIsactive'] = $bBrandingIsactive;

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


