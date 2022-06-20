<?php
/**
 * EzsigntemplatesignatureRequestCompound
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
 * EzsigntemplatesignatureRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplatesignature Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsigntemplatesignatureRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatesignature-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatesignatureID' => 'int',
        'fkiEzsigntemplatedocumentID' => 'int',
        'fkiEzsigntemplatesignerID' => 'int',
        'iEzsigntemplatedocumentpagePagenumber' => 'int',
        'iEzsigntemplatesignatureX' => 'int',
        'iEzsigntemplatesignatureY' => 'int',
        'iEzsigntemplatesignatureStep' => 'int',
        'eEzsigntemplatesignatureType' => '\eZmaxAPI\Model\FieldEEzsigntemplatesignatureType',
        'tEzsigntemplatesignatureTooltip' => 'string',
        'eEzsigntemplatesignatureTooltipposition' => '\eZmaxAPI\Model\FieldEEzsigntemplatesignatureTooltipposition',
        'eEzsigntemplatesignatureFont' => '\eZmaxAPI\Model\FieldEEzsigntemplatesignatureFont',
        'bEzsigntemplatesignatureCustomdate' => 'bool',
        'aObjEzsigntemplatesignaturecustomdate' => '\eZmaxAPI\Model\EzsigntemplatesignaturecustomdateRequestCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatesignatureID' => null,
        'fkiEzsigntemplatedocumentID' => null,
        'fkiEzsigntemplatesignerID' => null,
        'iEzsigntemplatedocumentpagePagenumber' => null,
        'iEzsigntemplatesignatureX' => null,
        'iEzsigntemplatesignatureY' => null,
        'iEzsigntemplatesignatureStep' => null,
        'eEzsigntemplatesignatureType' => null,
        'tEzsigntemplatesignatureTooltip' => null,
        'eEzsigntemplatesignatureTooltipposition' => null,
        'eEzsigntemplatesignatureFont' => null,
        'bEzsigntemplatesignatureCustomdate' => null,
        'aObjEzsigntemplatesignaturecustomdate' => null
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
        'pkiEzsigntemplatesignatureID' => 'pkiEzsigntemplatesignatureID',
        'fkiEzsigntemplatedocumentID' => 'fkiEzsigntemplatedocumentID',
        'fkiEzsigntemplatesignerID' => 'fkiEzsigntemplatesignerID',
        'iEzsigntemplatedocumentpagePagenumber' => 'iEzsigntemplatedocumentpagePagenumber',
        'iEzsigntemplatesignatureX' => 'iEzsigntemplatesignatureX',
        'iEzsigntemplatesignatureY' => 'iEzsigntemplatesignatureY',
        'iEzsigntemplatesignatureStep' => 'iEzsigntemplatesignatureStep',
        'eEzsigntemplatesignatureType' => 'eEzsigntemplatesignatureType',
        'tEzsigntemplatesignatureTooltip' => 'tEzsigntemplatesignatureTooltip',
        'eEzsigntemplatesignatureTooltipposition' => 'eEzsigntemplatesignatureTooltipposition',
        'eEzsigntemplatesignatureFont' => 'eEzsigntemplatesignatureFont',
        'bEzsigntemplatesignatureCustomdate' => 'bEzsigntemplatesignatureCustomdate',
        'aObjEzsigntemplatesignaturecustomdate' => 'a_objEzsigntemplatesignaturecustomdate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatesignatureID' => 'setPkiEzsigntemplatesignatureID',
        'fkiEzsigntemplatedocumentID' => 'setFkiEzsigntemplatedocumentID',
        'fkiEzsigntemplatesignerID' => 'setFkiEzsigntemplatesignerID',
        'iEzsigntemplatedocumentpagePagenumber' => 'setIEzsigntemplatedocumentpagePagenumber',
        'iEzsigntemplatesignatureX' => 'setIEzsigntemplatesignatureX',
        'iEzsigntemplatesignatureY' => 'setIEzsigntemplatesignatureY',
        'iEzsigntemplatesignatureStep' => 'setIEzsigntemplatesignatureStep',
        'eEzsigntemplatesignatureType' => 'setEEzsigntemplatesignatureType',
        'tEzsigntemplatesignatureTooltip' => 'setTEzsigntemplatesignatureTooltip',
        'eEzsigntemplatesignatureTooltipposition' => 'setEEzsigntemplatesignatureTooltipposition',
        'eEzsigntemplatesignatureFont' => 'setEEzsigntemplatesignatureFont',
        'bEzsigntemplatesignatureCustomdate' => 'setBEzsigntemplatesignatureCustomdate',
        'aObjEzsigntemplatesignaturecustomdate' => 'setAObjEzsigntemplatesignaturecustomdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatesignatureID' => 'getPkiEzsigntemplatesignatureID',
        'fkiEzsigntemplatedocumentID' => 'getFkiEzsigntemplatedocumentID',
        'fkiEzsigntemplatesignerID' => 'getFkiEzsigntemplatesignerID',
        'iEzsigntemplatedocumentpagePagenumber' => 'getIEzsigntemplatedocumentpagePagenumber',
        'iEzsigntemplatesignatureX' => 'getIEzsigntemplatesignatureX',
        'iEzsigntemplatesignatureY' => 'getIEzsigntemplatesignatureY',
        'iEzsigntemplatesignatureStep' => 'getIEzsigntemplatesignatureStep',
        'eEzsigntemplatesignatureType' => 'getEEzsigntemplatesignatureType',
        'tEzsigntemplatesignatureTooltip' => 'getTEzsigntemplatesignatureTooltip',
        'eEzsigntemplatesignatureTooltipposition' => 'getEEzsigntemplatesignatureTooltipposition',
        'eEzsigntemplatesignatureFont' => 'getEEzsigntemplatesignatureFont',
        'bEzsigntemplatesignatureCustomdate' => 'getBEzsigntemplatesignatureCustomdate',
        'aObjEzsigntemplatesignaturecustomdate' => 'getAObjEzsigntemplatesignaturecustomdate'
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
        $this->container['pkiEzsigntemplatesignatureID'] = $data['pkiEzsigntemplatesignatureID'] ?? null;
        $this->container['fkiEzsigntemplatedocumentID'] = $data['fkiEzsigntemplatedocumentID'] ?? null;
        $this->container['fkiEzsigntemplatesignerID'] = $data['fkiEzsigntemplatesignerID'] ?? null;
        $this->container['iEzsigntemplatedocumentpagePagenumber'] = $data['iEzsigntemplatedocumentpagePagenumber'] ?? null;
        $this->container['iEzsigntemplatesignatureX'] = $data['iEzsigntemplatesignatureX'] ?? null;
        $this->container['iEzsigntemplatesignatureY'] = $data['iEzsigntemplatesignatureY'] ?? null;
        $this->container['iEzsigntemplatesignatureStep'] = $data['iEzsigntemplatesignatureStep'] ?? null;
        $this->container['eEzsigntemplatesignatureType'] = $data['eEzsigntemplatesignatureType'] ?? null;
        $this->container['tEzsigntemplatesignatureTooltip'] = $data['tEzsigntemplatesignatureTooltip'] ?? null;
        $this->container['eEzsigntemplatesignatureTooltipposition'] = $data['eEzsigntemplatesignatureTooltipposition'] ?? null;
        $this->container['eEzsigntemplatesignatureFont'] = $data['eEzsigntemplatesignatureFont'] ?? null;
        $this->container['bEzsigntemplatesignatureCustomdate'] = $data['bEzsigntemplatesignatureCustomdate'] ?? null;
        $this->container['aObjEzsigntemplatesignaturecustomdate'] = $data['aObjEzsigntemplatesignaturecustomdate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pkiEzsigntemplatesignatureID']) && ($this->container['pkiEzsigntemplatesignatureID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatesignatureID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatedocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatedocumentID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatedocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatedocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatesignerID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatesignerID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatesignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatesignerID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpagePagenumber' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpagePagenumber', must be bigger than or equal to 1.";
        }

        if ($this->container['iEzsigntemplatesignatureX'] === null) {
            $invalidProperties[] = "'iEzsigntemplatesignatureX' can't be null";
        }
        if (($this->container['iEzsigntemplatesignatureX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatesignatureX', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatesignatureY'] === null) {
            $invalidProperties[] = "'iEzsigntemplatesignatureY' can't be null";
        }
        if (($this->container['iEzsigntemplatesignatureY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatesignatureY', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatesignatureStep'] === null) {
            $invalidProperties[] = "'iEzsigntemplatesignatureStep' can't be null";
        }
        if (($this->container['iEzsigntemplatesignatureStep'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatesignatureStep', must be bigger than or equal to 1.";
        }

        if ($this->container['eEzsigntemplatesignatureType'] === null) {
            $invalidProperties[] = "'eEzsigntemplatesignatureType' can't be null";
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
     * Gets pkiEzsigntemplatesignatureID
     *
     * @return int|null
     */
    public function getPkiEzsigntemplatesignatureID()
    {
        return $this->container['pkiEzsigntemplatesignatureID'];
    }

    /**
     * Sets pkiEzsigntemplatesignatureID
     *
     * @param int|null $pkiEzsigntemplatesignatureID The unique ID of the Ezsigntemplatesignature
     *
     * @return self
     */
    public function setPkiEzsigntemplatesignatureID($pkiEzsigntemplatesignatureID)
    {

        if (!is_null($pkiEzsigntemplatesignatureID) && ($pkiEzsigntemplatesignatureID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatesignatureID when calling EzsigntemplatesignatureRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsigntemplatesignatureID'] = $pkiEzsigntemplatesignatureID;

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatedocumentID
     *
     * @return int
     */
    public function getFkiEzsigntemplatedocumentID()
    {
        return $this->container['fkiEzsigntemplatedocumentID'];
    }

    /**
     * Sets fkiEzsigntemplatedocumentID
     *
     * @param int $fkiEzsigntemplatedocumentID The unique ID of the Ezsigntemplatedocument
     *
     * @return self
     */
    public function setFkiEzsigntemplatedocumentID($fkiEzsigntemplatedocumentID)
    {

        if (($fkiEzsigntemplatedocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatedocumentID when calling EzsigntemplatesignatureRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsigntemplatedocumentID'] = $fkiEzsigntemplatedocumentID;

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatesignerID
     *
     * @return int
     */
    public function getFkiEzsigntemplatesignerID()
    {
        return $this->container['fkiEzsigntemplatesignerID'];
    }

    /**
     * Sets fkiEzsigntemplatesignerID
     *
     * @param int $fkiEzsigntemplatesignerID The unique ID of the Ezsigntemplatesigner
     *
     * @return self
     */
    public function setFkiEzsigntemplatesignerID($fkiEzsigntemplatesignerID)
    {

        if (($fkiEzsigntemplatesignerID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatesignerID when calling EzsigntemplatesignatureRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsigntemplatesignerID'] = $fkiEzsigntemplatesignerID;

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
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpagePagenumber when calling EzsigntemplatesignatureRequestCompound., must be bigger than or equal to 1.');
        }

        $this->container['iEzsigntemplatedocumentpagePagenumber'] = $iEzsigntemplatedocumentpagePagenumber;

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignatureX
     *
     * @return int
     */
    public function getIEzsigntemplatesignatureX()
    {
        return $this->container['iEzsigntemplatesignatureX'];
    }

    /**
     * Sets iEzsigntemplatesignatureX
     *
     * @param int $iEzsigntemplatesignatureX The X coordinate (Horizontal) where to put the Ezsigntemplatesignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignature 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplatesignatureX($iEzsigntemplatesignatureX)
    {

        if (($iEzsigntemplatesignatureX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatesignatureX when calling EzsigntemplatesignatureRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatesignatureX'] = $iEzsigntemplatesignatureX;

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignatureY
     *
     * @return int
     */
    public function getIEzsigntemplatesignatureY()
    {
        return $this->container['iEzsigntemplatesignatureY'];
    }

    /**
     * Sets iEzsigntemplatesignatureY
     *
     * @param int $iEzsigntemplatesignatureY The Y coordinate (Vertical) where to put the Ezsigntemplatesignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignature 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplatesignatureY($iEzsigntemplatesignatureY)
    {

        if (($iEzsigntemplatesignatureY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatesignatureY when calling EzsigntemplatesignatureRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsigntemplatesignatureY'] = $iEzsigntemplatesignatureY;

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignatureStep
     *
     * @return int
     */
    public function getIEzsigntemplatesignatureStep()
    {
        return $this->container['iEzsigntemplatesignatureStep'];
    }

    /**
     * Sets iEzsigntemplatesignatureStep
     *
     * @param int $iEzsigntemplatesignatureStep The step when the Ezsigntemplatesigner will be invited to sign
     *
     * @return self
     */
    public function setIEzsigntemplatesignatureStep($iEzsigntemplatesignatureStep)
    {

        if (($iEzsigntemplatesignatureStep < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatesignatureStep when calling EzsigntemplatesignatureRequestCompound., must be bigger than or equal to 1.');
        }

        $this->container['iEzsigntemplatesignatureStep'] = $iEzsigntemplatesignatureStep;

        return $this;
    }

    /**
     * Gets eEzsigntemplatesignatureType
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplatesignatureType
     */
    public function getEEzsigntemplatesignatureType()
    {
        return $this->container['eEzsigntemplatesignatureType'];
    }

    /**
     * Sets eEzsigntemplatesignatureType
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplatesignatureType $eEzsigntemplatesignatureType eEzsigntemplatesignatureType
     *
     * @return self
     */
    public function setEEzsigntemplatesignatureType($eEzsigntemplatesignatureType)
    {
        $this->container['eEzsigntemplatesignatureType'] = $eEzsigntemplatesignatureType;

        return $this;
    }

    /**
     * Gets tEzsigntemplatesignatureTooltip
     *
     * @return string|null
     */
    public function getTEzsigntemplatesignatureTooltip()
    {
        return $this->container['tEzsigntemplatesignatureTooltip'];
    }

    /**
     * Sets tEzsigntemplatesignatureTooltip
     *
     * @param string|null $tEzsigntemplatesignatureTooltip A tooltip that will be presented to Ezsigntemplatesigner about the Ezsigntemplatesignature
     *
     * @return self
     */
    public function setTEzsigntemplatesignatureTooltip($tEzsigntemplatesignatureTooltip)
    {
        $this->container['tEzsigntemplatesignatureTooltip'] = $tEzsigntemplatesignatureTooltip;

        return $this;
    }

    /**
     * Gets eEzsigntemplatesignatureTooltipposition
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplatesignatureTooltipposition|null
     */
    public function getEEzsigntemplatesignatureTooltipposition()
    {
        return $this->container['eEzsigntemplatesignatureTooltipposition'];
    }

    /**
     * Sets eEzsigntemplatesignatureTooltipposition
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplatesignatureTooltipposition|null $eEzsigntemplatesignatureTooltipposition eEzsigntemplatesignatureTooltipposition
     *
     * @return self
     */
    public function setEEzsigntemplatesignatureTooltipposition($eEzsigntemplatesignatureTooltipposition)
    {
        $this->container['eEzsigntemplatesignatureTooltipposition'] = $eEzsigntemplatesignatureTooltipposition;

        return $this;
    }

    /**
     * Gets eEzsigntemplatesignatureFont
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplatesignatureFont|null
     */
    public function getEEzsigntemplatesignatureFont()
    {
        return $this->container['eEzsigntemplatesignatureFont'];
    }

    /**
     * Sets eEzsigntemplatesignatureFont
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplatesignatureFont|null $eEzsigntemplatesignatureFont eEzsigntemplatesignatureFont
     *
     * @return self
     */
    public function setEEzsigntemplatesignatureFont($eEzsigntemplatesignatureFont)
    {
        $this->container['eEzsigntemplatesignatureFont'] = $eEzsigntemplatesignatureFont;

        return $this;
    }

    /**
     * Gets bEzsigntemplatesignatureCustomdate
     *
     * @return bool|null
     */
    public function getBEzsigntemplatesignatureCustomdate()
    {
        return $this->container['bEzsigntemplatesignatureCustomdate'];
    }

    /**
     * Sets bEzsigntemplatesignatureCustomdate
     *
     * @param bool|null $bEzsigntemplatesignatureCustomdate Whether the Ezsigntemplatesignature has a custom date format or not. (Only possible when eEzsigntemplatesignatureType is **Name** or **Handwritten**)
     *
     * @return self
     */
    public function setBEzsigntemplatesignatureCustomdate($bEzsigntemplatesignatureCustomdate)
    {
        $this->container['bEzsigntemplatesignatureCustomdate'] = $bEzsigntemplatesignatureCustomdate;

        return $this;
    }

    /**
     * Gets aObjEzsigntemplatesignaturecustomdate
     *
     * @return \eZmaxAPI\Model\EzsigntemplatesignaturecustomdateRequestCompound[]|null
     */
    public function getAObjEzsigntemplatesignaturecustomdate()
    {
        return $this->container['aObjEzsigntemplatesignaturecustomdate'];
    }

    /**
     * Sets aObjEzsigntemplatesignaturecustomdate
     *
     * @param \eZmaxAPI\Model\EzsigntemplatesignaturecustomdateRequestCompound[]|null $aObjEzsigntemplatesignaturecustomdate An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsigntemplatesignatureCustomdate is true.  Use an empty array if you don't want to have a date at all.
     *
     * @return self
     */
    public function setAObjEzsigntemplatesignaturecustomdate($aObjEzsigntemplatesignaturecustomdate)
    {
        $this->container['aObjEzsigntemplatesignaturecustomdate'] = $aObjEzsigntemplatesignaturecustomdate;

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


