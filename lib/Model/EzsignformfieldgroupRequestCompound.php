<?php
/**
 * EzsignformfieldgroupRequestCompound
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
 * The version of the OpenAPI document: 1.1.6
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
 * EzsignformfieldgroupRequestCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignformfieldgroup Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignformfieldgroupRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignformfieldgroup-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignformfieldgroupID' => 'int',
        'fkiEzsigndocumentID' => 'int',
        'eEzsignformfieldgroupType' => '\eZmaxAPI\Model\FieldEEzsignformfieldgroupType',
        'eEzsignformfieldgroupSignerrequirement' => '\eZmaxAPI\Model\FieldEEzsignformfieldgroupSignerrequirement',
        'sEzsignformfieldgroupLabel' => 'string',
        'iEzsignformfieldgroupStep' => 'int',
        'sEzsignformfieldgroupDefaultvalue' => 'string',
        'iEzsignformfieldgroupFilledmin' => 'int',
        'iEzsignformfieldgroupFilledmax' => 'int',
        'bEzsignformfieldgroupReadonly' => 'bool',
        'iEzsignformfieldgroupMaxlength' => 'int',
        'bEzsignformfieldgroupEncrypted' => 'bool',
        'sEzsignformfieldgroupRegexp' => 'string',
        'tEzsignformfieldgroupTooltip' => 'string',
        'eEzsignformfieldgroupTooltipposition' => '\eZmaxAPI\Model\FieldEEzsignformfieldgroupTooltipposition',
        'aObjEzsignformfieldgroupsigner' => '\eZmaxAPI\Model\EzsignformfieldgroupsignerRequestCompound[]',
        'aObjDropdownElement' => '\eZmaxAPI\Model\CustomDropdownElementRequestCompound[]',
        'aObjEzsignformfield' => '\eZmaxAPI\Model\EzsignformfieldRequestCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignformfieldgroupID' => null,
        'fkiEzsigndocumentID' => null,
        'eEzsignformfieldgroupType' => null,
        'eEzsignformfieldgroupSignerrequirement' => null,
        'sEzsignformfieldgroupLabel' => null,
        'iEzsignformfieldgroupStep' => null,
        'sEzsignformfieldgroupDefaultvalue' => null,
        'iEzsignformfieldgroupFilledmin' => null,
        'iEzsignformfieldgroupFilledmax' => null,
        'bEzsignformfieldgroupReadonly' => null,
        'iEzsignformfieldgroupMaxlength' => null,
        'bEzsignformfieldgroupEncrypted' => null,
        'sEzsignformfieldgroupRegexp' => null,
        'tEzsignformfieldgroupTooltip' => null,
        'eEzsignformfieldgroupTooltipposition' => null,
        'aObjEzsignformfieldgroupsigner' => null,
        'aObjDropdownElement' => null,
        'aObjEzsignformfield' => null
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
        'pkiEzsignformfieldgroupID' => 'pkiEzsignformfieldgroupID',
        'fkiEzsigndocumentID' => 'fkiEzsigndocumentID',
        'eEzsignformfieldgroupType' => 'eEzsignformfieldgroupType',
        'eEzsignformfieldgroupSignerrequirement' => 'eEzsignformfieldgroupSignerrequirement',
        'sEzsignformfieldgroupLabel' => 'sEzsignformfieldgroupLabel',
        'iEzsignformfieldgroupStep' => 'iEzsignformfieldgroupStep',
        'sEzsignformfieldgroupDefaultvalue' => 'sEzsignformfieldgroupDefaultvalue',
        'iEzsignformfieldgroupFilledmin' => 'iEzsignformfieldgroupFilledmin',
        'iEzsignformfieldgroupFilledmax' => 'iEzsignformfieldgroupFilledmax',
        'bEzsignformfieldgroupReadonly' => 'bEzsignformfieldgroupReadonly',
        'iEzsignformfieldgroupMaxlength' => 'iEzsignformfieldgroupMaxlength',
        'bEzsignformfieldgroupEncrypted' => 'bEzsignformfieldgroupEncrypted',
        'sEzsignformfieldgroupRegexp' => 'sEzsignformfieldgroupRegexp',
        'tEzsignformfieldgroupTooltip' => 'tEzsignformfieldgroupTooltip',
        'eEzsignformfieldgroupTooltipposition' => 'eEzsignformfieldgroupTooltipposition',
        'aObjEzsignformfieldgroupsigner' => 'a_objEzsignformfieldgroupsigner',
        'aObjDropdownElement' => 'a_objDropdownElement',
        'aObjEzsignformfield' => 'a_objEzsignformfield'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignformfieldgroupID' => 'setPkiEzsignformfieldgroupID',
        'fkiEzsigndocumentID' => 'setFkiEzsigndocumentID',
        'eEzsignformfieldgroupType' => 'setEEzsignformfieldgroupType',
        'eEzsignformfieldgroupSignerrequirement' => 'setEEzsignformfieldgroupSignerrequirement',
        'sEzsignformfieldgroupLabel' => 'setSEzsignformfieldgroupLabel',
        'iEzsignformfieldgroupStep' => 'setIEzsignformfieldgroupStep',
        'sEzsignformfieldgroupDefaultvalue' => 'setSEzsignformfieldgroupDefaultvalue',
        'iEzsignformfieldgroupFilledmin' => 'setIEzsignformfieldgroupFilledmin',
        'iEzsignformfieldgroupFilledmax' => 'setIEzsignformfieldgroupFilledmax',
        'bEzsignformfieldgroupReadonly' => 'setBEzsignformfieldgroupReadonly',
        'iEzsignformfieldgroupMaxlength' => 'setIEzsignformfieldgroupMaxlength',
        'bEzsignformfieldgroupEncrypted' => 'setBEzsignformfieldgroupEncrypted',
        'sEzsignformfieldgroupRegexp' => 'setSEzsignformfieldgroupRegexp',
        'tEzsignformfieldgroupTooltip' => 'setTEzsignformfieldgroupTooltip',
        'eEzsignformfieldgroupTooltipposition' => 'setEEzsignformfieldgroupTooltipposition',
        'aObjEzsignformfieldgroupsigner' => 'setAObjEzsignformfieldgroupsigner',
        'aObjDropdownElement' => 'setAObjDropdownElement',
        'aObjEzsignformfield' => 'setAObjEzsignformfield'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignformfieldgroupID' => 'getPkiEzsignformfieldgroupID',
        'fkiEzsigndocumentID' => 'getFkiEzsigndocumentID',
        'eEzsignformfieldgroupType' => 'getEEzsignformfieldgroupType',
        'eEzsignformfieldgroupSignerrequirement' => 'getEEzsignformfieldgroupSignerrequirement',
        'sEzsignformfieldgroupLabel' => 'getSEzsignformfieldgroupLabel',
        'iEzsignformfieldgroupStep' => 'getIEzsignformfieldgroupStep',
        'sEzsignformfieldgroupDefaultvalue' => 'getSEzsignformfieldgroupDefaultvalue',
        'iEzsignformfieldgroupFilledmin' => 'getIEzsignformfieldgroupFilledmin',
        'iEzsignformfieldgroupFilledmax' => 'getIEzsignformfieldgroupFilledmax',
        'bEzsignformfieldgroupReadonly' => 'getBEzsignformfieldgroupReadonly',
        'iEzsignformfieldgroupMaxlength' => 'getIEzsignformfieldgroupMaxlength',
        'bEzsignformfieldgroupEncrypted' => 'getBEzsignformfieldgroupEncrypted',
        'sEzsignformfieldgroupRegexp' => 'getSEzsignformfieldgroupRegexp',
        'tEzsignformfieldgroupTooltip' => 'getTEzsignformfieldgroupTooltip',
        'eEzsignformfieldgroupTooltipposition' => 'getEEzsignformfieldgroupTooltipposition',
        'aObjEzsignformfieldgroupsigner' => 'getAObjEzsignformfieldgroupsigner',
        'aObjDropdownElement' => 'getAObjDropdownElement',
        'aObjEzsignformfield' => 'getAObjEzsignformfield'
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
        $this->container['pkiEzsignformfieldgroupID'] = $data['pkiEzsignformfieldgroupID'] ?? null;
        $this->container['fkiEzsigndocumentID'] = $data['fkiEzsigndocumentID'] ?? null;
        $this->container['eEzsignformfieldgroupType'] = $data['eEzsignformfieldgroupType'] ?? null;
        $this->container['eEzsignformfieldgroupSignerrequirement'] = $data['eEzsignformfieldgroupSignerrequirement'] ?? null;
        $this->container['sEzsignformfieldgroupLabel'] = $data['sEzsignformfieldgroupLabel'] ?? null;
        $this->container['iEzsignformfieldgroupStep'] = $data['iEzsignformfieldgroupStep'] ?? null;
        $this->container['sEzsignformfieldgroupDefaultvalue'] = $data['sEzsignformfieldgroupDefaultvalue'] ?? null;
        $this->container['iEzsignformfieldgroupFilledmin'] = $data['iEzsignformfieldgroupFilledmin'] ?? null;
        $this->container['iEzsignformfieldgroupFilledmax'] = $data['iEzsignformfieldgroupFilledmax'] ?? null;
        $this->container['bEzsignformfieldgroupReadonly'] = $data['bEzsignformfieldgroupReadonly'] ?? null;
        $this->container['iEzsignformfieldgroupMaxlength'] = $data['iEzsignformfieldgroupMaxlength'] ?? null;
        $this->container['bEzsignformfieldgroupEncrypted'] = $data['bEzsignformfieldgroupEncrypted'] ?? null;
        $this->container['sEzsignformfieldgroupRegexp'] = $data['sEzsignformfieldgroupRegexp'] ?? null;
        $this->container['tEzsignformfieldgroupTooltip'] = $data['tEzsignformfieldgroupTooltip'] ?? null;
        $this->container['eEzsignformfieldgroupTooltipposition'] = $data['eEzsignformfieldgroupTooltipposition'] ?? null;
        $this->container['aObjEzsignformfieldgroupsigner'] = $data['aObjEzsignformfieldgroupsigner'] ?? null;
        $this->container['aObjDropdownElement'] = $data['aObjDropdownElement'] ?? null;
        $this->container['aObjEzsignformfield'] = $data['aObjEzsignformfield'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigndocumentID' can't be null";
        }
        if ($this->container['eEzsignformfieldgroupType'] === null) {
            $invalidProperties[] = "'eEzsignformfieldgroupType' can't be null";
        }
        if ($this->container['eEzsignformfieldgroupSignerrequirement'] === null) {
            $invalidProperties[] = "'eEzsignformfieldgroupSignerrequirement' can't be null";
        }
        if ($this->container['sEzsignformfieldgroupLabel'] === null) {
            $invalidProperties[] = "'sEzsignformfieldgroupLabel' can't be null";
        }
        if ($this->container['iEzsignformfieldgroupStep'] === null) {
            $invalidProperties[] = "'iEzsignformfieldgroupStep' can't be null";
        }
        if ($this->container['sEzsignformfieldgroupDefaultvalue'] === null) {
            $invalidProperties[] = "'sEzsignformfieldgroupDefaultvalue' can't be null";
        }
        if ($this->container['iEzsignformfieldgroupFilledmin'] === null) {
            $invalidProperties[] = "'iEzsignformfieldgroupFilledmin' can't be null";
        }
        if ($this->container['iEzsignformfieldgroupFilledmax'] === null) {
            $invalidProperties[] = "'iEzsignformfieldgroupFilledmax' can't be null";
        }
        if ($this->container['bEzsignformfieldgroupReadonly'] === null) {
            $invalidProperties[] = "'bEzsignformfieldgroupReadonly' can't be null";
        }
        if ($this->container['aObjEzsignformfieldgroupsigner'] === null) {
            $invalidProperties[] = "'aObjEzsignformfieldgroupsigner' can't be null";
        }
        if ($this->container['aObjEzsignformfield'] === null) {
            $invalidProperties[] = "'aObjEzsignformfield' can't be null";
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
     * Gets pkiEzsignformfieldgroupID
     *
     * @return int|null
     */
    public function getPkiEzsignformfieldgroupID()
    {
        return $this->container['pkiEzsignformfieldgroupID'];
    }

    /**
     * Sets pkiEzsignformfieldgroupID
     *
     * @param int|null $pkiEzsignformfieldgroupID The unique ID of the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setPkiEzsignformfieldgroupID($pkiEzsignformfieldgroupID)
    {
        $this->container['pkiEzsignformfieldgroupID'] = $pkiEzsignformfieldgroupID;

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
        $this->container['fkiEzsigndocumentID'] = $fkiEzsigndocumentID;

        return $this;
    }

    /**
     * Gets eEzsignformfieldgroupType
     *
     * @return \eZmaxAPI\Model\FieldEEzsignformfieldgroupType
     */
    public function getEEzsignformfieldgroupType()
    {
        return $this->container['eEzsignformfieldgroupType'];
    }

    /**
     * Sets eEzsignformfieldgroupType
     *
     * @param \eZmaxAPI\Model\FieldEEzsignformfieldgroupType $eEzsignformfieldgroupType eEzsignformfieldgroupType
     *
     * @return self
     */
    public function setEEzsignformfieldgroupType($eEzsignformfieldgroupType)
    {
        $this->container['eEzsignformfieldgroupType'] = $eEzsignformfieldgroupType;

        return $this;
    }

    /**
     * Gets eEzsignformfieldgroupSignerrequirement
     *
     * @return \eZmaxAPI\Model\FieldEEzsignformfieldgroupSignerrequirement
     */
    public function getEEzsignformfieldgroupSignerrequirement()
    {
        return $this->container['eEzsignformfieldgroupSignerrequirement'];
    }

    /**
     * Sets eEzsignformfieldgroupSignerrequirement
     *
     * @param \eZmaxAPI\Model\FieldEEzsignformfieldgroupSignerrequirement $eEzsignformfieldgroupSignerrequirement eEzsignformfieldgroupSignerrequirement
     *
     * @return self
     */
    public function setEEzsignformfieldgroupSignerrequirement($eEzsignformfieldgroupSignerrequirement)
    {
        $this->container['eEzsignformfieldgroupSignerrequirement'] = $eEzsignformfieldgroupSignerrequirement;

        return $this;
    }

    /**
     * Gets sEzsignformfieldgroupLabel
     *
     * @return string
     */
    public function getSEzsignformfieldgroupLabel()
    {
        return $this->container['sEzsignformfieldgroupLabel'];
    }

    /**
     * Sets sEzsignformfieldgroupLabel
     *
     * @param string $sEzsignformfieldgroupLabel The Label for the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setSEzsignformfieldgroupLabel($sEzsignformfieldgroupLabel)
    {
        $this->container['sEzsignformfieldgroupLabel'] = $sEzsignformfieldgroupLabel;

        return $this;
    }

    /**
     * Gets iEzsignformfieldgroupStep
     *
     * @return int
     */
    public function getIEzsignformfieldgroupStep()
    {
        return $this->container['iEzsignformfieldgroupStep'];
    }

    /**
     * Sets iEzsignformfieldgroupStep
     *
     * @param int $iEzsignformfieldgroupStep The step when the Ezsignsigner will be invited to fill the form fields
     *
     * @return self
     */
    public function setIEzsignformfieldgroupStep($iEzsignformfieldgroupStep)
    {
        $this->container['iEzsignformfieldgroupStep'] = $iEzsignformfieldgroupStep;

        return $this;
    }

    /**
     * Gets sEzsignformfieldgroupDefaultvalue
     *
     * @return string
     */
    public function getSEzsignformfieldgroupDefaultvalue()
    {
        return $this->container['sEzsignformfieldgroupDefaultvalue'];
    }

    /**
     * Sets sEzsignformfieldgroupDefaultvalue
     *
     * @param string $sEzsignformfieldgroupDefaultvalue The default value for the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setSEzsignformfieldgroupDefaultvalue($sEzsignformfieldgroupDefaultvalue)
    {
        $this->container['sEzsignformfieldgroupDefaultvalue'] = $sEzsignformfieldgroupDefaultvalue;

        return $this;
    }

    /**
     * Gets iEzsignformfieldgroupFilledmin
     *
     * @return int
     */
    public function getIEzsignformfieldgroupFilledmin()
    {
        return $this->container['iEzsignformfieldgroupFilledmin'];
    }

    /**
     * Sets iEzsignformfieldgroupFilledmin
     *
     * @param int $iEzsignformfieldgroupFilledmin The minimum number of Ezsignformfield that must be filled in the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setIEzsignformfieldgroupFilledmin($iEzsignformfieldgroupFilledmin)
    {
        $this->container['iEzsignformfieldgroupFilledmin'] = $iEzsignformfieldgroupFilledmin;

        return $this;
    }

    /**
     * Gets iEzsignformfieldgroupFilledmax
     *
     * @return int
     */
    public function getIEzsignformfieldgroupFilledmax()
    {
        return $this->container['iEzsignformfieldgroupFilledmax'];
    }

    /**
     * Sets iEzsignformfieldgroupFilledmax
     *
     * @param int $iEzsignformfieldgroupFilledmax The maximum number of Ezsignformfield that must be filled in the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setIEzsignformfieldgroupFilledmax($iEzsignformfieldgroupFilledmax)
    {
        $this->container['iEzsignformfieldgroupFilledmax'] = $iEzsignformfieldgroupFilledmax;

        return $this;
    }

    /**
     * Gets bEzsignformfieldgroupReadonly
     *
     * @return bool
     */
    public function getBEzsignformfieldgroupReadonly()
    {
        return $this->container['bEzsignformfieldgroupReadonly'];
    }

    /**
     * Sets bEzsignformfieldgroupReadonly
     *
     * @param bool $bEzsignformfieldgroupReadonly Whether the Ezsignformfieldgroup is read only or not.
     *
     * @return self
     */
    public function setBEzsignformfieldgroupReadonly($bEzsignformfieldgroupReadonly)
    {
        $this->container['bEzsignformfieldgroupReadonly'] = $bEzsignformfieldgroupReadonly;

        return $this;
    }

    /**
     * Gets iEzsignformfieldgroupMaxlength
     *
     * @return int|null
     */
    public function getIEzsignformfieldgroupMaxlength()
    {
        return $this->container['iEzsignformfieldgroupMaxlength'];
    }

    /**
     * Sets iEzsignformfieldgroupMaxlength
     *
     * @param int|null $iEzsignformfieldgroupMaxlength The maximum length for the value in the Ezsignformfieldgroup  This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea**
     *
     * @return self
     */
    public function setIEzsignformfieldgroupMaxlength($iEzsignformfieldgroupMaxlength)
    {
        $this->container['iEzsignformfieldgroupMaxlength'] = $iEzsignformfieldgroupMaxlength;

        return $this;
    }

    /**
     * Gets bEzsignformfieldgroupEncrypted
     *
     * @return bool|null
     */
    public function getBEzsignformfieldgroupEncrypted()
    {
        return $this->container['bEzsignformfieldgroupEncrypted'];
    }

    /**
     * Sets bEzsignformfieldgroupEncrypted
     *
     * @param bool|null $bEzsignformfieldgroupEncrypted Whether the Ezsignformfieldgroup is encrypted in the database or not. Encrypted values are not displayed on the Ezsigndocument. This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea**
     *
     * @return self
     */
    public function setBEzsignformfieldgroupEncrypted($bEzsignformfieldgroupEncrypted)
    {
        $this->container['bEzsignformfieldgroupEncrypted'] = $bEzsignformfieldgroupEncrypted;

        return $this;
    }

    /**
     * Gets sEzsignformfieldgroupRegexp
     *
     * @return string|null
     */
    public function getSEzsignformfieldgroupRegexp()
    {
        return $this->container['sEzsignformfieldgroupRegexp'];
    }

    /**
     * Sets sEzsignformfieldgroupRegexp
     *
     * @param string|null $sEzsignformfieldgroupRegexp A regular expression to indicate what values are acceptable for the Ezsignformfieldgroup.  This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea**
     *
     * @return self
     */
    public function setSEzsignformfieldgroupRegexp($sEzsignformfieldgroupRegexp)
    {
        $this->container['sEzsignformfieldgroupRegexp'] = $sEzsignformfieldgroupRegexp;

        return $this;
    }

    /**
     * Gets tEzsignformfieldgroupTooltip
     *
     * @return string|null
     */
    public function getTEzsignformfieldgroupTooltip()
    {
        return $this->container['tEzsignformfieldgroupTooltip'];
    }

    /**
     * Sets tEzsignformfieldgroupTooltip
     *
     * @param string|null $tEzsignformfieldgroupTooltip A tooltip that will be presented to Ezsignsigner about the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setTEzsignformfieldgroupTooltip($tEzsignformfieldgroupTooltip)
    {
        $this->container['tEzsignformfieldgroupTooltip'] = $tEzsignformfieldgroupTooltip;

        return $this;
    }

    /**
     * Gets eEzsignformfieldgroupTooltipposition
     *
     * @return \eZmaxAPI\Model\FieldEEzsignformfieldgroupTooltipposition|null
     */
    public function getEEzsignformfieldgroupTooltipposition()
    {
        return $this->container['eEzsignformfieldgroupTooltipposition'];
    }

    /**
     * Sets eEzsignformfieldgroupTooltipposition
     *
     * @param \eZmaxAPI\Model\FieldEEzsignformfieldgroupTooltipposition|null $eEzsignformfieldgroupTooltipposition eEzsignformfieldgroupTooltipposition
     *
     * @return self
     */
    public function setEEzsignformfieldgroupTooltipposition($eEzsignformfieldgroupTooltipposition)
    {
        $this->container['eEzsignformfieldgroupTooltipposition'] = $eEzsignformfieldgroupTooltipposition;

        return $this;
    }

    /**
     * Gets aObjEzsignformfieldgroupsigner
     *
     * @return \eZmaxAPI\Model\EzsignformfieldgroupsignerRequestCompound[]
     */
    public function getAObjEzsignformfieldgroupsigner()
    {
        return $this->container['aObjEzsignformfieldgroupsigner'];
    }

    /**
     * Sets aObjEzsignformfieldgroupsigner
     *
     * @param \eZmaxAPI\Model\EzsignformfieldgroupsignerRequestCompound[] $aObjEzsignformfieldgroupsigner aObjEzsignformfieldgroupsigner
     *
     * @return self
     */
    public function setAObjEzsignformfieldgroupsigner($aObjEzsignformfieldgroupsigner)
    {
        $this->container['aObjEzsignformfieldgroupsigner'] = $aObjEzsignformfieldgroupsigner;

        return $this;
    }

    /**
     * Gets aObjDropdownElement
     *
     * @return \eZmaxAPI\Model\CustomDropdownElementRequestCompound[]|null
     */
    public function getAObjDropdownElement()
    {
        return $this->container['aObjDropdownElement'];
    }

    /**
     * Sets aObjDropdownElement
     *
     * @param \eZmaxAPI\Model\CustomDropdownElementRequestCompound[]|null $aObjDropdownElement aObjDropdownElement
     *
     * @return self
     */
    public function setAObjDropdownElement($aObjDropdownElement)
    {
        $this->container['aObjDropdownElement'] = $aObjDropdownElement;

        return $this;
    }

    /**
     * Gets aObjEzsignformfield
     *
     * @return \eZmaxAPI\Model\EzsignformfieldRequestCompound[]
     */
    public function getAObjEzsignformfield()
    {
        return $this->container['aObjEzsignformfield'];
    }

    /**
     * Sets aObjEzsignformfield
     *
     * @param \eZmaxAPI\Model\EzsignformfieldRequestCompound[] $aObjEzsignformfield aObjEzsignformfield
     *
     * @return self
     */
    public function setAObjEzsignformfield($aObjEzsignformfield)
    {
        $this->container['aObjEzsignformfield'] = $aObjEzsignformfield;

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


