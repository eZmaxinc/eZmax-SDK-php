<?php
/**
 * EzsignpageResponse
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
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * EzsignpageResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignpage Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignpageResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignpage-Response';

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
        'sComputedImageurl' => 'string'
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
        'sComputedImageurl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignpageID' => false,
		'iEzsignpageWidthimage' => false,
		'iEzsignpageHeightimage' => false,
		'iEzsignpageWidthpdf' => false,
		'iEzsignpageHeightpdf' => false,
		'iEzsignpagePagenumber' => false,
		'sComputedImageurl' => false
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
        'pkiEzsignpageID' => 'pkiEzsignpageID',
        'iEzsignpageWidthimage' => 'iEzsignpageWidthimage',
        'iEzsignpageHeightimage' => 'iEzsignpageHeightimage',
        'iEzsignpageWidthpdf' => 'iEzsignpageWidthpdf',
        'iEzsignpageHeightpdf' => 'iEzsignpageHeightpdf',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber',
        'sComputedImageurl' => 'sComputedImageurl'
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
        'sComputedImageurl' => 'setSComputedImageurl'
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
        'sComputedImageurl' => 'getSComputedImageurl'
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
        $this->setIfExists('pkiEzsignpageID', $data ?? [], null);
        $this->setIfExists('iEzsignpageWidthimage', $data ?? [], null);
        $this->setIfExists('iEzsignpageHeightimage', $data ?? [], null);
        $this->setIfExists('iEzsignpageWidthpdf', $data ?? [], null);
        $this->setIfExists('iEzsignpageHeightpdf', $data ?? [], null);
        $this->setIfExists('iEzsignpagePagenumber', $data ?? [], null);
        $this->setIfExists('sComputedImageurl', $data ?? [], null);
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

        if ($this->container['sComputedImageurl'] === null) {
            $invalidProperties[] = "'sComputedImageurl' can't be null";
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
            throw new \InvalidArgumentException('invalid value for $pkiEzsignpageID when calling EzsignpageResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsignpageID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignpageID cannot be null');
        //}
        $this->container['pkiEzsignpageID'] = (is_null($pkiEzsignpageID) ? null : (int) $pkiEzsignpageID);

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
            throw new \InvalidArgumentException('invalid value for $iEzsignpageWidthimage when calling EzsignpageResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsignpageWidthimage)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignpageWidthimage cannot be null');
        //}
        $this->container['iEzsignpageWidthimage'] = (is_null($iEzsignpageWidthimage) ? null : (int) $iEzsignpageWidthimage);

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
            throw new \InvalidArgumentException('invalid value for $iEzsignpageHeightimage when calling EzsignpageResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsignpageHeightimage)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignpageHeightimage cannot be null');
        //}
        $this->container['iEzsignpageHeightimage'] = (is_null($iEzsignpageHeightimage) ? null : (int) $iEzsignpageHeightimage);

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
            throw new \InvalidArgumentException('invalid value for $iEzsignpageWidthpdf when calling EzsignpageResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsignpageWidthpdf)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignpageWidthpdf cannot be null');
        //}
        $this->container['iEzsignpageWidthpdf'] = (is_null($iEzsignpageWidthpdf) ? null : (int) $iEzsignpageWidthpdf);

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
            throw new \InvalidArgumentException('invalid value for $iEzsignpageHeightpdf when calling EzsignpageResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsignpageHeightpdf)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignpageHeightpdf cannot be null');
        //}
        $this->container['iEzsignpageHeightpdf'] = (is_null($iEzsignpageHeightpdf) ? null : (int) $iEzsignpageHeightpdf);

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
            throw new \InvalidArgumentException('invalid value for $iEzsignpagePagenumber when calling EzsignpageResponse., must be bigger than or equal to 1.');
        }


        //if (is_null($iEzsignpagePagenumber)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignpagePagenumber cannot be null');
        //}
        $this->container['iEzsignpagePagenumber'] = (is_null($iEzsignpagePagenumber) ? null : (int) $iEzsignpagePagenumber);

        return $this;
    }

    /**
     * Gets sComputedImageurl
     *
     * @return string
     */
    public function getSComputedImageurl()
    {
        return $this->container['sComputedImageurl'];
    }

    /**
     * Sets sComputedImageurl
     *
     * @param string $sComputedImageurl The Url to the Ezsignpage's rasterized image.  Url will expire after 5 minutes.
     *
     * @return self
     */
    public function setSComputedImageurl($sComputedImageurl)
    {

        //if (is_null($sComputedImageurl)) {
            //throw new \InvalidArgumentException('non-nullable sComputedImageurl cannot be null');
        //}
        $this->container['sComputedImageurl'] = (is_null($sComputedImageurl) ? null : (string) $sComputedImageurl);

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


