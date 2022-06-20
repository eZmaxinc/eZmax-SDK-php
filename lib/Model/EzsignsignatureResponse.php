<?php
/**
 * EzsignsignatureResponse
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
 * EzsignsignatureResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsignature Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsignatureResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsignature-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignsignatureID' => 'int',
        'fkiEzsigndocumentID' => 'int',
        'fkiEzsignfoldersignerassociationID' => 'int',
        'iEzsignpagePagenumber' => 'int',
        'iEzsignsignatureX' => 'int',
        'iEzsignsignatureY' => 'int',
        'iEzsignsignatureStep' => 'int',
        'eEzsignsignatureType' => '\eZmaxAPI\Model\FieldEEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'string',
        'eEzsignsignatureTooltipposition' => '\eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => '\eZmaxAPI\Model\FieldEEzsignsignatureFont'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignsignatureID' => null,
        'fkiEzsigndocumentID' => null,
        'fkiEzsignfoldersignerassociationID' => null,
        'iEzsignpagePagenumber' => null,
        'iEzsignsignatureX' => null,
        'iEzsignsignatureY' => null,
        'iEzsignsignatureStep' => null,
        'eEzsignsignatureType' => null,
        'tEzsignsignatureTooltip' => null,
        'eEzsignsignatureTooltipposition' => null,
        'eEzsignsignatureFont' => null
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
        'pkiEzsignsignatureID' => 'pkiEzsignsignatureID',
        'fkiEzsigndocumentID' => 'fkiEzsigndocumentID',
        'fkiEzsignfoldersignerassociationID' => 'fkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber',
        'iEzsignsignatureX' => 'iEzsignsignatureX',
        'iEzsignsignatureY' => 'iEzsignsignatureY',
        'iEzsignsignatureStep' => 'iEzsignsignatureStep',
        'eEzsignsignatureType' => 'eEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'tEzsignsignatureTooltip',
        'eEzsignsignatureTooltipposition' => 'eEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => 'eEzsignsignatureFont'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignsignatureID' => 'setPkiEzsignsignatureID',
        'fkiEzsigndocumentID' => 'setFkiEzsigndocumentID',
        'fkiEzsignfoldersignerassociationID' => 'setFkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'setIEzsignpagePagenumber',
        'iEzsignsignatureX' => 'setIEzsignsignatureX',
        'iEzsignsignatureY' => 'setIEzsignsignatureY',
        'iEzsignsignatureStep' => 'setIEzsignsignatureStep',
        'eEzsignsignatureType' => 'setEEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'setTEzsignsignatureTooltip',
        'eEzsignsignatureTooltipposition' => 'setEEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => 'setEEzsignsignatureFont'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignsignatureID' => 'getPkiEzsignsignatureID',
        'fkiEzsigndocumentID' => 'getFkiEzsigndocumentID',
        'fkiEzsignfoldersignerassociationID' => 'getFkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'getIEzsignpagePagenumber',
        'iEzsignsignatureX' => 'getIEzsignsignatureX',
        'iEzsignsignatureY' => 'getIEzsignsignatureY',
        'iEzsignsignatureStep' => 'getIEzsignsignatureStep',
        'eEzsignsignatureType' => 'getEEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'getTEzsignsignatureTooltip',
        'eEzsignsignatureTooltipposition' => 'getEEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => 'getEEzsignsignatureFont'
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
        $this->container['pkiEzsignsignatureID'] = $data['pkiEzsignsignatureID'] ?? null;
        $this->container['fkiEzsigndocumentID'] = $data['fkiEzsigndocumentID'] ?? null;
        $this->container['fkiEzsignfoldersignerassociationID'] = $data['fkiEzsignfoldersignerassociationID'] ?? null;
        $this->container['iEzsignpagePagenumber'] = $data['iEzsignpagePagenumber'] ?? null;
        $this->container['iEzsignsignatureX'] = $data['iEzsignsignatureX'] ?? null;
        $this->container['iEzsignsignatureY'] = $data['iEzsignsignatureY'] ?? null;
        $this->container['iEzsignsignatureStep'] = $data['iEzsignsignatureStep'] ?? null;
        $this->container['eEzsignsignatureType'] = $data['eEzsignsignatureType'] ?? null;
        $this->container['tEzsignsignatureTooltip'] = $data['tEzsignsignatureTooltip'] ?? null;
        $this->container['eEzsignsignatureTooltipposition'] = $data['eEzsignsignatureTooltipposition'] ?? null;
        $this->container['eEzsignsignatureFont'] = $data['eEzsignsignatureFont'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignsignatureID'] === null) {
            $invalidProperties[] = "'pkiEzsignsignatureID' can't be null";
        }
        if (($this->container['pkiEzsignsignatureID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsignatureID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigndocumentID' can't be null";
        }
        if (($this->container['fkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldersignerassociationID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldersignerassociationID' can't be null";
        }
        if (($this->container['fkiEzsignfoldersignerassociationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldersignerassociationID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsignpagePagenumber' can't be null";
        }
        if (($this->container['iEzsignpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsignpagePagenumber', must be bigger than or equal to 1.";
        }

        if ($this->container['iEzsignsignatureX'] === null) {
            $invalidProperties[] = "'iEzsignsignatureX' can't be null";
        }
        if (($this->container['iEzsignsignatureX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignsignatureX', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignsignatureY'] === null) {
            $invalidProperties[] = "'iEzsignsignatureY' can't be null";
        }
        if (($this->container['iEzsignsignatureY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignsignatureY', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignsignatureStep'] === null) {
            $invalidProperties[] = "'iEzsignsignatureStep' can't be null";
        }
        if ($this->container['eEzsignsignatureType'] === null) {
            $invalidProperties[] = "'eEzsignsignatureType' can't be null";
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
     * Gets pkiEzsignsignatureID
     *
     * @return int
     */
    public function getPkiEzsignsignatureID()
    {
        return $this->container['pkiEzsignsignatureID'];
    }

    /**
     * Sets pkiEzsignsignatureID
     *
     * @param int $pkiEzsignsignatureID The unique ID of the Ezsignsignature
     *
     * @return self
     */
    public function setPkiEzsignsignatureID($pkiEzsignsignatureID)
    {

        if (($pkiEzsignsignatureID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignsignatureID when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsignsignatureID'] = $pkiEzsignsignatureID;

        return $this;
    }

    /**
     * Gets fkiEzsigndocumentID
     *
     * @return int
     */
    public function getFkiEzsigndocumentID()
    {
        return $this->container['fkiEzsigndocumentID'];
    }

    /**
     * Sets fkiEzsigndocumentID
     *
     * @param int $fkiEzsigndocumentID The unique ID of the Ezsigndocument
     *
     * @return self
     */
    public function setFkiEzsigndocumentID($fkiEzsigndocumentID)
    {

        if (($fkiEzsigndocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigndocumentID when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsigndocumentID'] = $fkiEzsigndocumentID;

        return $this;
    }

    /**
     * Gets fkiEzsignfoldersignerassociationID
     *
     * @return int
     */
    public function getFkiEzsignfoldersignerassociationID()
    {
        return $this->container['fkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets fkiEzsignfoldersignerassociationID
     *
     * @param int $fkiEzsignfoldersignerassociationID The unique ID of the Ezsignfoldersignerassociation
     *
     * @return self
     */
    public function setFkiEzsignfoldersignerassociationID($fkiEzsignfoldersignerassociationID)
    {

        if (($fkiEzsignfoldersignerassociationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldersignerassociationID when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsignfoldersignerassociationID'] = $fkiEzsignfoldersignerassociationID;

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
            throw new \InvalidArgumentException('invalid value for $iEzsignpagePagenumber when calling EzsignsignatureResponse., must be bigger than or equal to 1.');
        }

        $this->container['iEzsignpagePagenumber'] = $iEzsignpagePagenumber;

        return $this;
    }

    /**
     * Gets iEzsignsignatureX
     *
     * @return int
     */
    public function getIEzsignsignatureX()
    {
        return $this->container['iEzsignsignatureX'];
    }

    /**
     * Sets iEzsignsignatureX
     *
     * @param int $iEzsignsignatureX The X coordinate (Horizontal) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignsignatureX($iEzsignsignatureX)
    {

        if (($iEzsignsignatureX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignsignatureX when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignsignatureX'] = $iEzsignsignatureX;

        return $this;
    }

    /**
     * Gets iEzsignsignatureY
     *
     * @return int
     */
    public function getIEzsignsignatureY()
    {
        return $this->container['iEzsignsignatureY'];
    }

    /**
     * Sets iEzsignsignatureY
     *
     * @param int $iEzsignsignatureY The Y coordinate (Vertical) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignsignatureY($iEzsignsignatureY)
    {

        if (($iEzsignsignatureY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignsignatureY when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignsignatureY'] = $iEzsignsignatureY;

        return $this;
    }

    /**
     * Gets iEzsignsignatureStep
     *
     * @return int
     */
    public function getIEzsignsignatureStep()
    {
        return $this->container['iEzsignsignatureStep'];
    }

    /**
     * Sets iEzsignsignatureStep
     *
     * @param int $iEzsignsignatureStep The step when the Ezsignsigner will be invited to sign
     *
     * @return self
     */
    public function setIEzsignsignatureStep($iEzsignsignatureStep)
    {
        $this->container['iEzsignsignatureStep'] = $iEzsignsignatureStep;

        return $this;
    }

    /**
     * Gets eEzsignsignatureType
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignatureType
     */
    public function getEEzsignsignatureType()
    {
        return $this->container['eEzsignsignatureType'];
    }

    /**
     * Sets eEzsignsignatureType
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignatureType $eEzsignsignatureType eEzsignsignatureType
     *
     * @return self
     */
    public function setEEzsignsignatureType($eEzsignsignatureType)
    {
        $this->container['eEzsignsignatureType'] = $eEzsignsignatureType;

        return $this;
    }

    /**
     * Gets tEzsignsignatureTooltip
     *
     * @return string|null
     */
    public function getTEzsignsignatureTooltip()
    {
        return $this->container['tEzsignsignatureTooltip'];
    }

    /**
     * Sets tEzsignsignatureTooltip
     *
     * @param string|null $tEzsignsignatureTooltip A tooltip that will be presented to Ezsignsigner about the Ezsignsignature
     *
     * @return self
     */
    public function setTEzsignsignatureTooltip($tEzsignsignatureTooltip)
    {
        $this->container['tEzsignsignatureTooltip'] = $tEzsignsignatureTooltip;

        return $this;
    }

    /**
     * Gets eEzsignsignatureTooltipposition
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition|null
     */
    public function getEEzsignsignatureTooltipposition()
    {
        return $this->container['eEzsignsignatureTooltipposition'];
    }

    /**
     * Sets eEzsignsignatureTooltipposition
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition|null $eEzsignsignatureTooltipposition eEzsignsignatureTooltipposition
     *
     * @return self
     */
    public function setEEzsignsignatureTooltipposition($eEzsignsignatureTooltipposition)
    {
        $this->container['eEzsignsignatureTooltipposition'] = $eEzsignsignatureTooltipposition;

        return $this;
    }

    /**
     * Gets eEzsignsignatureFont
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignatureFont|null
     */
    public function getEEzsignsignatureFont()
    {
        return $this->container['eEzsignsignatureFont'];
    }

    /**
     * Sets eEzsignsignatureFont
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignatureFont|null $eEzsignsignatureFont eEzsignsignatureFont
     *
     * @return self
     */
    public function setEEzsignsignatureFont($eEzsignsignatureFont)
    {
        $this->container['eEzsignsignatureFont'] = $eEzsignsignatureFont;

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


