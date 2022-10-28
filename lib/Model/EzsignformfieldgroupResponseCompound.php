<?php
/**
 * EzsignformfieldgroupResponseCompound
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
 * The version of the OpenAPI document: 1.1.13
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
 * EzsignformfieldgroupResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignformfieldgroup Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignformfieldgroupResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignformfieldgroup-ResponseCompound';

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
        'aObjEzsignformfield' => '\eZmaxAPI\Model\EzsignformfieldResponseCompound[]',
        'aObjDropdownElement' => '\eZmaxAPI\Model\CustomDropdownElementResponseCompound[]',
        'aObjEzsignformfieldgroupsigner' => '\eZmaxAPI\Model\EzsignformfieldgroupsignerResponseCompound[]'
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
        'aObjEzsignformfield' => null,
        'aObjDropdownElement' => null,
        'aObjEzsignformfieldgroupsigner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignformfieldgroupID' => false,
		'fkiEzsigndocumentID' => false,
		'eEzsignformfieldgroupType' => false,
		'eEzsignformfieldgroupSignerrequirement' => false,
		'sEzsignformfieldgroupLabel' => false,
		'iEzsignformfieldgroupStep' => false,
		'sEzsignformfieldgroupDefaultvalue' => false,
		'iEzsignformfieldgroupFilledmin' => false,
		'iEzsignformfieldgroupFilledmax' => false,
		'bEzsignformfieldgroupReadonly' => false,
		'iEzsignformfieldgroupMaxlength' => false,
		'bEzsignformfieldgroupEncrypted' => false,
		'sEzsignformfieldgroupRegexp' => false,
		'tEzsignformfieldgroupTooltip' => false,
		'eEzsignformfieldgroupTooltipposition' => false,
		'aObjEzsignformfield' => false,
		'aObjDropdownElement' => false,
		'aObjEzsignformfieldgroupsigner' => false
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
        'aObjEzsignformfield' => 'a_objEzsignformfield',
        'aObjDropdownElement' => 'a_objDropdownElement',
        'aObjEzsignformfieldgroupsigner' => 'a_objEzsignformfieldgroupsigner'
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
        'aObjEzsignformfield' => 'setAObjEzsignformfield',
        'aObjDropdownElement' => 'setAObjDropdownElement',
        'aObjEzsignformfieldgroupsigner' => 'setAObjEzsignformfieldgroupsigner'
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
        'aObjEzsignformfield' => 'getAObjEzsignformfield',
        'aObjDropdownElement' => 'getAObjDropdownElement',
        'aObjEzsignformfieldgroupsigner' => 'getAObjEzsignformfieldgroupsigner'
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
        $this->setIfExists('pkiEzsignformfieldgroupID', $data ?? [], null);
        $this->setIfExists('fkiEzsigndocumentID', $data ?? [], null);
        $this->setIfExists('eEzsignformfieldgroupType', $data ?? [], null);
        $this->setIfExists('eEzsignformfieldgroupSignerrequirement', $data ?? [], null);
        $this->setIfExists('sEzsignformfieldgroupLabel', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldgroupStep', $data ?? [], null);
        $this->setIfExists('sEzsignformfieldgroupDefaultvalue', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldgroupFilledmin', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldgroupFilledmax', $data ?? [], null);
        $this->setIfExists('bEzsignformfieldgroupReadonly', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldgroupMaxlength', $data ?? [], null);
        $this->setIfExists('bEzsignformfieldgroupEncrypted', $data ?? [], null);
        $this->setIfExists('sEzsignformfieldgroupRegexp', $data ?? [], null);
        $this->setIfExists('tEzsignformfieldgroupTooltip', $data ?? [], null);
        $this->setIfExists('eEzsignformfieldgroupTooltipposition', $data ?? [], null);
        $this->setIfExists('aObjEzsignformfield', $data ?? [], null);
        $this->setIfExists('aObjDropdownElement', $data ?? [], null);
        $this->setIfExists('aObjEzsignformfieldgroupsigner', $data ?? [], null);
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

        if ($this->container['pkiEzsignformfieldgroupID'] === null) {
            $invalidProperties[] = "'pkiEzsignformfieldgroupID' can't be null";
        }
        if (($this->container['pkiEzsignformfieldgroupID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignformfieldgroupID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigndocumentID' can't be null";
        }
        if (($this->container['fkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigndocumentID', must be bigger than or equal to 0.";
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
        if (($this->container['iEzsignformfieldgroupStep'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldgroupStep', must be bigger than or equal to 1.";
        }

        if ($this->container['iEzsignformfieldgroupFilledmin'] === null) {
            $invalidProperties[] = "'iEzsignformfieldgroupFilledmin' can't be null";
        }
        if (($this->container['iEzsignformfieldgroupFilledmin'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldgroupFilledmin', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignformfieldgroupFilledmax'] === null) {
            $invalidProperties[] = "'iEzsignformfieldgroupFilledmax' can't be null";
        }
        if (($this->container['iEzsignformfieldgroupFilledmax'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldgroupFilledmax', must be bigger than or equal to 0.";
        }

        if ($this->container['bEzsignformfieldgroupReadonly'] === null) {
            $invalidProperties[] = "'bEzsignformfieldgroupReadonly' can't be null";
        }
        if (!is_null($this->container['iEzsignformfieldgroupMaxlength']) && ($this->container['iEzsignformfieldgroupMaxlength'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldgroupMaxlength', must be bigger than or equal to 0.";
        }

        if ($this->container['aObjEzsignformfield'] === null) {
            $invalidProperties[] = "'aObjEzsignformfield' can't be null";
        }
        if ($this->container['aObjEzsignformfieldgroupsigner'] === null) {
            $invalidProperties[] = "'aObjEzsignformfieldgroupsigner' can't be null";
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
     * @return int
     */
    public function getPkiEzsignformfieldgroupID()
    {
        return $this->container['pkiEzsignformfieldgroupID'];
    }

    /**
     * Sets pkiEzsignformfieldgroupID
     *
     * @param int $pkiEzsignformfieldgroupID The unique ID of the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setPkiEzsignformfieldgroupID($pkiEzsignformfieldgroupID)
    {

        if (($pkiEzsignformfieldgroupID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignformfieldgroupID when calling EzsignformfieldgroupResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsignformfieldgroupID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignformfieldgroupID cannot be null');
        //}
        $this->container['pkiEzsignformfieldgroupID'] = (is_null($pkiEzsignformfieldgroupID) ? null : (int) $pkiEzsignformfieldgroupID);

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
            throw new \InvalidArgumentException('invalid value for $fkiEzsigndocumentID when calling EzsignformfieldgroupResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigndocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigndocumentID cannot be null');
        //}
        $this->container['fkiEzsigndocumentID'] = (is_null($fkiEzsigndocumentID) ? null : (int) $fkiEzsigndocumentID);

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

        //if (is_null($eEzsignformfieldgroupType)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignformfieldgroupType cannot be null');
        //}
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

        //if (is_null($eEzsignformfieldgroupSignerrequirement)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignformfieldgroupSignerrequirement cannot be null');
        //}
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

        //if (is_null($sEzsignformfieldgroupLabel)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignformfieldgroupLabel cannot be null');
        //}
        $this->container['sEzsignformfieldgroupLabel'] = (is_null($sEzsignformfieldgroupLabel) ? null : (string) $sEzsignformfieldgroupLabel);

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

        if (($iEzsignformfieldgroupStep < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldgroupStep when calling EzsignformfieldgroupResponseCompound., must be bigger than or equal to 1.');
        }


        //if (is_null($iEzsignformfieldgroupStep)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldgroupStep cannot be null');
        //}
        $this->container['iEzsignformfieldgroupStep'] = (is_null($iEzsignformfieldgroupStep) ? null : (int) $iEzsignformfieldgroupStep);

        return $this;
    }

    /**
     * Gets sEzsignformfieldgroupDefaultvalue
     *
     * @return string|null
     */
    public function getSEzsignformfieldgroupDefaultvalue()
    {
        return $this->container['sEzsignformfieldgroupDefaultvalue'];
    }

    /**
     * Sets sEzsignformfieldgroupDefaultvalue
     *
     * @param string|null $sEzsignformfieldgroupDefaultvalue The default value for the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setSEzsignformfieldgroupDefaultvalue($sEzsignformfieldgroupDefaultvalue)
    {

        //if (is_null($sEzsignformfieldgroupDefaultvalue)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignformfieldgroupDefaultvalue cannot be null');
        //}
        $this->container['sEzsignformfieldgroupDefaultvalue'] = (is_null($sEzsignformfieldgroupDefaultvalue) ? null : (string) $sEzsignformfieldgroupDefaultvalue);

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

        if (($iEzsignformfieldgroupFilledmin < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldgroupFilledmin when calling EzsignformfieldgroupResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsignformfieldgroupFilledmin)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldgroupFilledmin cannot be null');
        //}
        $this->container['iEzsignformfieldgroupFilledmin'] = (is_null($iEzsignformfieldgroupFilledmin) ? null : (int) $iEzsignformfieldgroupFilledmin);

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

        if (($iEzsignformfieldgroupFilledmax < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldgroupFilledmax when calling EzsignformfieldgroupResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsignformfieldgroupFilledmax)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldgroupFilledmax cannot be null');
        //}
        $this->container['iEzsignformfieldgroupFilledmax'] = (is_null($iEzsignformfieldgroupFilledmax) ? null : (int) $iEzsignformfieldgroupFilledmax);

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

        //if (is_null($bEzsignformfieldgroupReadonly)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignformfieldgroupReadonly cannot be null');
        //}
        $this->container['bEzsignformfieldgroupReadonly'] = (is_null($bEzsignformfieldgroupReadonly) ? null : (bool) $bEzsignformfieldgroupReadonly);

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

        if (!is_null($iEzsignformfieldgroupMaxlength) && ($iEzsignformfieldgroupMaxlength < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldgroupMaxlength when calling EzsignformfieldgroupResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsignformfieldgroupMaxlength)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldgroupMaxlength cannot be null');
        //}
        $this->container['iEzsignformfieldgroupMaxlength'] = (is_null($iEzsignformfieldgroupMaxlength) ? null : (int) $iEzsignformfieldgroupMaxlength);

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

        //if (is_null($bEzsignformfieldgroupEncrypted)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignformfieldgroupEncrypted cannot be null');
        //}
        $this->container['bEzsignformfieldgroupEncrypted'] = (is_null($bEzsignformfieldgroupEncrypted) ? null : (bool) $bEzsignformfieldgroupEncrypted);

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

        //if (is_null($sEzsignformfieldgroupRegexp)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignformfieldgroupRegexp cannot be null');
        //}
        $this->container['sEzsignformfieldgroupRegexp'] = (is_null($sEzsignformfieldgroupRegexp) ? null : (string) $sEzsignformfieldgroupRegexp);

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

        //if (is_null($tEzsignformfieldgroupTooltip)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignformfieldgroupTooltip cannot be null');
        //}
        $this->container['tEzsignformfieldgroupTooltip'] = (is_null($tEzsignformfieldgroupTooltip) ? null : (string) $tEzsignformfieldgroupTooltip);

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

        //if (is_null($eEzsignformfieldgroupTooltipposition)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignformfieldgroupTooltipposition cannot be null');
        //}
        $this->container['eEzsignformfieldgroupTooltipposition'] = $eEzsignformfieldgroupTooltipposition;

        return $this;
    }

    /**
     * Gets aObjEzsignformfield
     *
     * @return \eZmaxAPI\Model\EzsignformfieldResponseCompound[]
     */
    public function getAObjEzsignformfield()
    {
        return $this->container['aObjEzsignformfield'];
    }

    /**
     * Sets aObjEzsignformfield
     *
     * @param \eZmaxAPI\Model\EzsignformfieldResponseCompound[] $aObjEzsignformfield aObjEzsignformfield
     *
     * @return self
     */
    public function setAObjEzsignformfield($aObjEzsignformfield)
    {

        //if (is_null($aObjEzsignformfield)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignformfield cannot be null');
        //}
        $this->container['aObjEzsignformfield'] = $aObjEzsignformfield;

        return $this;
    }

    /**
     * Gets aObjDropdownElement
     *
     * @return \eZmaxAPI\Model\CustomDropdownElementResponseCompound[]|null
     */
    public function getAObjDropdownElement()
    {
        return $this->container['aObjDropdownElement'];
    }

    /**
     * Sets aObjDropdownElement
     *
     * @param \eZmaxAPI\Model\CustomDropdownElementResponseCompound[]|null $aObjDropdownElement aObjDropdownElement
     *
     * @return self
     */
    public function setAObjDropdownElement($aObjDropdownElement)
    {

        //if (is_null($aObjDropdownElement)) {
            //throw new \InvalidArgumentException('non-nullable aObjDropdownElement cannot be null');
        //}
        $this->container['aObjDropdownElement'] = $aObjDropdownElement;

        return $this;
    }

    /**
     * Gets aObjEzsignformfieldgroupsigner
     *
     * @return \eZmaxAPI\Model\EzsignformfieldgroupsignerResponseCompound[]
     */
    public function getAObjEzsignformfieldgroupsigner()
    {
        return $this->container['aObjEzsignformfieldgroupsigner'];
    }

    /**
     * Sets aObjEzsignformfieldgroupsigner
     *
     * @param \eZmaxAPI\Model\EzsignformfieldgroupsignerResponseCompound[] $aObjEzsignformfieldgroupsigner aObjEzsignformfieldgroupsigner
     *
     * @return self
     */
    public function setAObjEzsignformfieldgroupsigner($aObjEzsignformfieldgroupsigner)
    {

        //if (is_null($aObjEzsignformfieldgroupsigner)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignformfieldgroupsigner cannot be null');
        //}
        $this->container['aObjEzsignformfieldgroupsigner'] = $aObjEzsignformfieldgroupsigner;

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


