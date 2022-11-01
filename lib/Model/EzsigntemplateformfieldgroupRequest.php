<?php
/**
 * EzsigntemplateformfieldgroupRequest
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
 * The version of the OpenAPI document: 1.1.14
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
 * EzsigntemplateformfieldgroupRequest Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplateformfieldgroup Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplateformfieldgroupRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplateformfieldgroup-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplateformfieldgroupID' => 'int',
        'fkiEzsigntemplatedocumentID' => 'int',
        'eEzsigntemplateformfieldgroupType' => '\eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupType',
        'eEzsigntemplateformfieldgroupSignerrequirement' => '\eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupSignerrequirement',
        'sEzsigntemplateformfieldgroupLabel' => 'string',
        'iEzsigntemplateformfieldgroupStep' => 'int',
        'sEzsigntemplateformfieldgroupDefaultvalue' => 'string',
        'iEzsigntemplateformfieldgroupFilledmin' => 'int',
        'iEzsigntemplateformfieldgroupFilledmax' => 'int',
        'bEzsigntemplateformfieldgroupReadonly' => 'bool',
        'iEzsigntemplateformfieldgroupMaxlength' => 'int',
        'bEzsigntemplateformfieldgroupEncrypted' => 'bool',
        'sEzsigntemplateformfieldgroupRegexp' => 'string',
        'tEzsigntemplateformfieldgroupTooltip' => 'string',
        'eEzsigntemplateformfieldgroupTooltipposition' => '\eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupTooltipposition'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplateformfieldgroupID' => null,
        'fkiEzsigntemplatedocumentID' => null,
        'eEzsigntemplateformfieldgroupType' => null,
        'eEzsigntemplateformfieldgroupSignerrequirement' => null,
        'sEzsigntemplateformfieldgroupLabel' => null,
        'iEzsigntemplateformfieldgroupStep' => null,
        'sEzsigntemplateformfieldgroupDefaultvalue' => null,
        'iEzsigntemplateformfieldgroupFilledmin' => null,
        'iEzsigntemplateformfieldgroupFilledmax' => null,
        'bEzsigntemplateformfieldgroupReadonly' => null,
        'iEzsigntemplateformfieldgroupMaxlength' => null,
        'bEzsigntemplateformfieldgroupEncrypted' => null,
        'sEzsigntemplateformfieldgroupRegexp' => null,
        'tEzsigntemplateformfieldgroupTooltip' => null,
        'eEzsigntemplateformfieldgroupTooltipposition' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplateformfieldgroupID' => false,
		'fkiEzsigntemplatedocumentID' => false,
		'eEzsigntemplateformfieldgroupType' => false,
		'eEzsigntemplateformfieldgroupSignerrequirement' => false,
		'sEzsigntemplateformfieldgroupLabel' => false,
		'iEzsigntemplateformfieldgroupStep' => false,
		'sEzsigntemplateformfieldgroupDefaultvalue' => false,
		'iEzsigntemplateformfieldgroupFilledmin' => false,
		'iEzsigntemplateformfieldgroupFilledmax' => false,
		'bEzsigntemplateformfieldgroupReadonly' => false,
		'iEzsigntemplateformfieldgroupMaxlength' => false,
		'bEzsigntemplateformfieldgroupEncrypted' => false,
		'sEzsigntemplateformfieldgroupRegexp' => false,
		'tEzsigntemplateformfieldgroupTooltip' => false,
		'eEzsigntemplateformfieldgroupTooltipposition' => false
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
        'pkiEzsigntemplateformfieldgroupID' => 'pkiEzsigntemplateformfieldgroupID',
        'fkiEzsigntemplatedocumentID' => 'fkiEzsigntemplatedocumentID',
        'eEzsigntemplateformfieldgroupType' => 'eEzsigntemplateformfieldgroupType',
        'eEzsigntemplateformfieldgroupSignerrequirement' => 'eEzsigntemplateformfieldgroupSignerrequirement',
        'sEzsigntemplateformfieldgroupLabel' => 'sEzsigntemplateformfieldgroupLabel',
        'iEzsigntemplateformfieldgroupStep' => 'iEzsigntemplateformfieldgroupStep',
        'sEzsigntemplateformfieldgroupDefaultvalue' => 'sEzsigntemplateformfieldgroupDefaultvalue',
        'iEzsigntemplateformfieldgroupFilledmin' => 'iEzsigntemplateformfieldgroupFilledmin',
        'iEzsigntemplateformfieldgroupFilledmax' => 'iEzsigntemplateformfieldgroupFilledmax',
        'bEzsigntemplateformfieldgroupReadonly' => 'bEzsigntemplateformfieldgroupReadonly',
        'iEzsigntemplateformfieldgroupMaxlength' => 'iEzsigntemplateformfieldgroupMaxlength',
        'bEzsigntemplateformfieldgroupEncrypted' => 'bEzsigntemplateformfieldgroupEncrypted',
        'sEzsigntemplateformfieldgroupRegexp' => 'sEzsigntemplateformfieldgroupRegexp',
        'tEzsigntemplateformfieldgroupTooltip' => 'tEzsigntemplateformfieldgroupTooltip',
        'eEzsigntemplateformfieldgroupTooltipposition' => 'eEzsigntemplateformfieldgroupTooltipposition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplateformfieldgroupID' => 'setPkiEzsigntemplateformfieldgroupID',
        'fkiEzsigntemplatedocumentID' => 'setFkiEzsigntemplatedocumentID',
        'eEzsigntemplateformfieldgroupType' => 'setEEzsigntemplateformfieldgroupType',
        'eEzsigntemplateformfieldgroupSignerrequirement' => 'setEEzsigntemplateformfieldgroupSignerrequirement',
        'sEzsigntemplateformfieldgroupLabel' => 'setSEzsigntemplateformfieldgroupLabel',
        'iEzsigntemplateformfieldgroupStep' => 'setIEzsigntemplateformfieldgroupStep',
        'sEzsigntemplateformfieldgroupDefaultvalue' => 'setSEzsigntemplateformfieldgroupDefaultvalue',
        'iEzsigntemplateformfieldgroupFilledmin' => 'setIEzsigntemplateformfieldgroupFilledmin',
        'iEzsigntemplateformfieldgroupFilledmax' => 'setIEzsigntemplateformfieldgroupFilledmax',
        'bEzsigntemplateformfieldgroupReadonly' => 'setBEzsigntemplateformfieldgroupReadonly',
        'iEzsigntemplateformfieldgroupMaxlength' => 'setIEzsigntemplateformfieldgroupMaxlength',
        'bEzsigntemplateformfieldgroupEncrypted' => 'setBEzsigntemplateformfieldgroupEncrypted',
        'sEzsigntemplateformfieldgroupRegexp' => 'setSEzsigntemplateformfieldgroupRegexp',
        'tEzsigntemplateformfieldgroupTooltip' => 'setTEzsigntemplateformfieldgroupTooltip',
        'eEzsigntemplateformfieldgroupTooltipposition' => 'setEEzsigntemplateformfieldgroupTooltipposition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplateformfieldgroupID' => 'getPkiEzsigntemplateformfieldgroupID',
        'fkiEzsigntemplatedocumentID' => 'getFkiEzsigntemplatedocumentID',
        'eEzsigntemplateformfieldgroupType' => 'getEEzsigntemplateformfieldgroupType',
        'eEzsigntemplateformfieldgroupSignerrequirement' => 'getEEzsigntemplateformfieldgroupSignerrequirement',
        'sEzsigntemplateformfieldgroupLabel' => 'getSEzsigntemplateformfieldgroupLabel',
        'iEzsigntemplateformfieldgroupStep' => 'getIEzsigntemplateformfieldgroupStep',
        'sEzsigntemplateformfieldgroupDefaultvalue' => 'getSEzsigntemplateformfieldgroupDefaultvalue',
        'iEzsigntemplateformfieldgroupFilledmin' => 'getIEzsigntemplateformfieldgroupFilledmin',
        'iEzsigntemplateformfieldgroupFilledmax' => 'getIEzsigntemplateformfieldgroupFilledmax',
        'bEzsigntemplateformfieldgroupReadonly' => 'getBEzsigntemplateformfieldgroupReadonly',
        'iEzsigntemplateformfieldgroupMaxlength' => 'getIEzsigntemplateformfieldgroupMaxlength',
        'bEzsigntemplateformfieldgroupEncrypted' => 'getBEzsigntemplateformfieldgroupEncrypted',
        'sEzsigntemplateformfieldgroupRegexp' => 'getSEzsigntemplateformfieldgroupRegexp',
        'tEzsigntemplateformfieldgroupTooltip' => 'getTEzsigntemplateformfieldgroupTooltip',
        'eEzsigntemplateformfieldgroupTooltipposition' => 'getEEzsigntemplateformfieldgroupTooltipposition'
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
        $this->setIfExists('pkiEzsigntemplateformfieldgroupID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatedocumentID', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateformfieldgroupType', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateformfieldgroupSignerrequirement', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateformfieldgroupLabel', $data ?? [], null);
        $this->setIfExists('iEzsigntemplateformfieldgroupStep', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateformfieldgroupDefaultvalue', $data ?? [], null);
        $this->setIfExists('iEzsigntemplateformfieldgroupFilledmin', $data ?? [], null);
        $this->setIfExists('iEzsigntemplateformfieldgroupFilledmax', $data ?? [], null);
        $this->setIfExists('bEzsigntemplateformfieldgroupReadonly', $data ?? [], null);
        $this->setIfExists('iEzsigntemplateformfieldgroupMaxlength', $data ?? [], null);
        $this->setIfExists('bEzsigntemplateformfieldgroupEncrypted', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateformfieldgroupRegexp', $data ?? [], null);
        $this->setIfExists('tEzsigntemplateformfieldgroupTooltip', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateformfieldgroupTooltipposition', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsigntemplateformfieldgroupID']) && ($this->container['pkiEzsigntemplateformfieldgroupID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplateformfieldgroupID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplatedocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatedocumentID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatedocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatedocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['eEzsigntemplateformfieldgroupType'] === null) {
            $invalidProperties[] = "'eEzsigntemplateformfieldgroupType' can't be null";
        }
        if ($this->container['eEzsigntemplateformfieldgroupSignerrequirement'] === null) {
            $invalidProperties[] = "'eEzsigntemplateformfieldgroupSignerrequirement' can't be null";
        }
        if ($this->container['sEzsigntemplateformfieldgroupLabel'] === null) {
            $invalidProperties[] = "'sEzsigntemplateformfieldgroupLabel' can't be null";
        }
        if ($this->container['iEzsigntemplateformfieldgroupStep'] === null) {
            $invalidProperties[] = "'iEzsigntemplateformfieldgroupStep' can't be null";
        }
        if (($this->container['iEzsigntemplateformfieldgroupStep'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplateformfieldgroupStep', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsigntemplateformfieldgroupDefaultvalue'] === null) {
            $invalidProperties[] = "'sEzsigntemplateformfieldgroupDefaultvalue' can't be null";
        }
        if ($this->container['iEzsigntemplateformfieldgroupFilledmin'] === null) {
            $invalidProperties[] = "'iEzsigntemplateformfieldgroupFilledmin' can't be null";
        }
        if (($this->container['iEzsigntemplateformfieldgroupFilledmin'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplateformfieldgroupFilledmin', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplateformfieldgroupFilledmax'] === null) {
            $invalidProperties[] = "'iEzsigntemplateformfieldgroupFilledmax' can't be null";
        }
        if (($this->container['iEzsigntemplateformfieldgroupFilledmax'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplateformfieldgroupFilledmax', must be bigger than or equal to 0.";
        }

        if ($this->container['bEzsigntemplateformfieldgroupReadonly'] === null) {
            $invalidProperties[] = "'bEzsigntemplateformfieldgroupReadonly' can't be null";
        }
        if (!is_null($this->container['iEzsigntemplateformfieldgroupMaxlength']) && ($this->container['iEzsigntemplateformfieldgroupMaxlength'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplateformfieldgroupMaxlength', must be bigger than or equal to 0.";
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
     * Gets pkiEzsigntemplateformfieldgroupID
     *
     * @return int|null
     */
    public function getPkiEzsigntemplateformfieldgroupID()
    {
        return $this->container['pkiEzsigntemplateformfieldgroupID'];
    }

    /**
     * Sets pkiEzsigntemplateformfieldgroupID
     *
     * @param int|null $pkiEzsigntemplateformfieldgroupID The unique ID of the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setPkiEzsigntemplateformfieldgroupID($pkiEzsigntemplateformfieldgroupID)
    {

        if (!is_null($pkiEzsigntemplateformfieldgroupID) && ($pkiEzsigntemplateformfieldgroupID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplateformfieldgroupID when calling EzsigntemplateformfieldgroupRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsigntemplateformfieldgroupID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplateformfieldgroupID cannot be null');
        //}
        $this->container['pkiEzsigntemplateformfieldgroupID'] = (is_null($pkiEzsigntemplateformfieldgroupID) ? null : (int) $pkiEzsigntemplateformfieldgroupID);

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
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatedocumentID when calling EzsigntemplateformfieldgroupRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigntemplatedocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatedocumentID cannot be null');
        //}
        $this->container['fkiEzsigntemplatedocumentID'] = (is_null($fkiEzsigntemplatedocumentID) ? null : (int) $fkiEzsigntemplatedocumentID);

        return $this;
    }

    /**
     * Gets eEzsigntemplateformfieldgroupType
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupType
     */
    public function getEEzsigntemplateformfieldgroupType()
    {
        return $this->container['eEzsigntemplateformfieldgroupType'];
    }

    /**
     * Sets eEzsigntemplateformfieldgroupType
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupType $eEzsigntemplateformfieldgroupType eEzsigntemplateformfieldgroupType
     *
     * @return self
     */
    public function setEEzsigntemplateformfieldgroupType($eEzsigntemplateformfieldgroupType)
    {

        //if (is_null($eEzsigntemplateformfieldgroupType)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateformfieldgroupType cannot be null');
        //}
        $this->container['eEzsigntemplateformfieldgroupType'] = $eEzsigntemplateformfieldgroupType;

        return $this;
    }

    /**
     * Gets eEzsigntemplateformfieldgroupSignerrequirement
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupSignerrequirement
     */
    public function getEEzsigntemplateformfieldgroupSignerrequirement()
    {
        return $this->container['eEzsigntemplateformfieldgroupSignerrequirement'];
    }

    /**
     * Sets eEzsigntemplateformfieldgroupSignerrequirement
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupSignerrequirement $eEzsigntemplateformfieldgroupSignerrequirement eEzsigntemplateformfieldgroupSignerrequirement
     *
     * @return self
     */
    public function setEEzsigntemplateformfieldgroupSignerrequirement($eEzsigntemplateformfieldgroupSignerrequirement)
    {

        //if (is_null($eEzsigntemplateformfieldgroupSignerrequirement)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateformfieldgroupSignerrequirement cannot be null');
        //}
        $this->container['eEzsigntemplateformfieldgroupSignerrequirement'] = $eEzsigntemplateformfieldgroupSignerrequirement;

        return $this;
    }

    /**
     * Gets sEzsigntemplateformfieldgroupLabel
     *
     * @return string
     */
    public function getSEzsigntemplateformfieldgroupLabel()
    {
        return $this->container['sEzsigntemplateformfieldgroupLabel'];
    }

    /**
     * Sets sEzsigntemplateformfieldgroupLabel
     *
     * @param string $sEzsigntemplateformfieldgroupLabel The Label for the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setSEzsigntemplateformfieldgroupLabel($sEzsigntemplateformfieldgroupLabel)
    {

        //if (is_null($sEzsigntemplateformfieldgroupLabel)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateformfieldgroupLabel cannot be null');
        //}
        $this->container['sEzsigntemplateformfieldgroupLabel'] = (is_null($sEzsigntemplateformfieldgroupLabel) ? null : (string) $sEzsigntemplateformfieldgroupLabel);

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldgroupStep
     *
     * @return int
     */
    public function getIEzsigntemplateformfieldgroupStep()
    {
        return $this->container['iEzsigntemplateformfieldgroupStep'];
    }

    /**
     * Sets iEzsigntemplateformfieldgroupStep
     *
     * @param int $iEzsigntemplateformfieldgroupStep The step when the Ezsigntemplatesigner will be invited to fill the form fields
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldgroupStep($iEzsigntemplateformfieldgroupStep)
    {

        if (($iEzsigntemplateformfieldgroupStep < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplateformfieldgroupStep when calling EzsigntemplateformfieldgroupRequest., must be bigger than or equal to 1.');
        }


        //if (is_null($iEzsigntemplateformfieldgroupStep)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplateformfieldgroupStep cannot be null');
        //}
        $this->container['iEzsigntemplateformfieldgroupStep'] = (is_null($iEzsigntemplateformfieldgroupStep) ? null : (int) $iEzsigntemplateformfieldgroupStep);

        return $this;
    }

    /**
     * Gets sEzsigntemplateformfieldgroupDefaultvalue
     *
     * @return string
     */
    public function getSEzsigntemplateformfieldgroupDefaultvalue()
    {
        return $this->container['sEzsigntemplateformfieldgroupDefaultvalue'];
    }

    /**
     * Sets sEzsigntemplateformfieldgroupDefaultvalue
     *
     * @param string $sEzsigntemplateformfieldgroupDefaultvalue The default value for the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setSEzsigntemplateformfieldgroupDefaultvalue($sEzsigntemplateformfieldgroupDefaultvalue)
    {

        //if (is_null($sEzsigntemplateformfieldgroupDefaultvalue)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateformfieldgroupDefaultvalue cannot be null');
        //}
        $this->container['sEzsigntemplateformfieldgroupDefaultvalue'] = (is_null($sEzsigntemplateformfieldgroupDefaultvalue) ? null : (string) $sEzsigntemplateformfieldgroupDefaultvalue);

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldgroupFilledmin
     *
     * @return int
     */
    public function getIEzsigntemplateformfieldgroupFilledmin()
    {
        return $this->container['iEzsigntemplateformfieldgroupFilledmin'];
    }

    /**
     * Sets iEzsigntemplateformfieldgroupFilledmin
     *
     * @param int $iEzsigntemplateformfieldgroupFilledmin The minimum number of Ezsigntemplateformfield that must be filled in the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldgroupFilledmin($iEzsigntemplateformfieldgroupFilledmin)
    {

        if (($iEzsigntemplateformfieldgroupFilledmin < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplateformfieldgroupFilledmin when calling EzsigntemplateformfieldgroupRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsigntemplateformfieldgroupFilledmin)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplateformfieldgroupFilledmin cannot be null');
        //}
        $this->container['iEzsigntemplateformfieldgroupFilledmin'] = (is_null($iEzsigntemplateformfieldgroupFilledmin) ? null : (int) $iEzsigntemplateformfieldgroupFilledmin);

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldgroupFilledmax
     *
     * @return int
     */
    public function getIEzsigntemplateformfieldgroupFilledmax()
    {
        return $this->container['iEzsigntemplateformfieldgroupFilledmax'];
    }

    /**
     * Sets iEzsigntemplateformfieldgroupFilledmax
     *
     * @param int $iEzsigntemplateformfieldgroupFilledmax The maximum number of Ezsigntemplateformfield that must be filled in the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldgroupFilledmax($iEzsigntemplateformfieldgroupFilledmax)
    {

        if (($iEzsigntemplateformfieldgroupFilledmax < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplateformfieldgroupFilledmax when calling EzsigntemplateformfieldgroupRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsigntemplateformfieldgroupFilledmax)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplateformfieldgroupFilledmax cannot be null');
        //}
        $this->container['iEzsigntemplateformfieldgroupFilledmax'] = (is_null($iEzsigntemplateformfieldgroupFilledmax) ? null : (int) $iEzsigntemplateformfieldgroupFilledmax);

        return $this;
    }

    /**
     * Gets bEzsigntemplateformfieldgroupReadonly
     *
     * @return bool
     */
    public function getBEzsigntemplateformfieldgroupReadonly()
    {
        return $this->container['bEzsigntemplateformfieldgroupReadonly'];
    }

    /**
     * Sets bEzsigntemplateformfieldgroupReadonly
     *
     * @param bool $bEzsigntemplateformfieldgroupReadonly Whether the Ezsigntemplateformfieldgroup is read only or not.
     *
     * @return self
     */
    public function setBEzsigntemplateformfieldgroupReadonly($bEzsigntemplateformfieldgroupReadonly)
    {

        //if (is_null($bEzsigntemplateformfieldgroupReadonly)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplateformfieldgroupReadonly cannot be null');
        //}
        $this->container['bEzsigntemplateformfieldgroupReadonly'] = (is_null($bEzsigntemplateformfieldgroupReadonly) ? null : (bool) $bEzsigntemplateformfieldgroupReadonly);

        return $this;
    }

    /**
     * Gets iEzsigntemplateformfieldgroupMaxlength
     *
     * @return int|null
     */
    public function getIEzsigntemplateformfieldgroupMaxlength()
    {
        return $this->container['iEzsigntemplateformfieldgroupMaxlength'];
    }

    /**
     * Sets iEzsigntemplateformfieldgroupMaxlength
     *
     * @param int|null $iEzsigntemplateformfieldgroupMaxlength The maximum length for the value in the Ezsigntemplateformfieldgroup  This can only be set if eEzsigntemplateformfieldgroupType is **Text** or **Textarea**
     *
     * @return self
     */
    public function setIEzsigntemplateformfieldgroupMaxlength($iEzsigntemplateformfieldgroupMaxlength)
    {

        if (!is_null($iEzsigntemplateformfieldgroupMaxlength) && ($iEzsigntemplateformfieldgroupMaxlength < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplateformfieldgroupMaxlength when calling EzsigntemplateformfieldgroupRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($iEzsigntemplateformfieldgroupMaxlength)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplateformfieldgroupMaxlength cannot be null');
        //}
        $this->container['iEzsigntemplateformfieldgroupMaxlength'] = (is_null($iEzsigntemplateformfieldgroupMaxlength) ? null : (int) $iEzsigntemplateformfieldgroupMaxlength);

        return $this;
    }

    /**
     * Gets bEzsigntemplateformfieldgroupEncrypted
     *
     * @return bool|null
     */
    public function getBEzsigntemplateformfieldgroupEncrypted()
    {
        return $this->container['bEzsigntemplateformfieldgroupEncrypted'];
    }

    /**
     * Sets bEzsigntemplateformfieldgroupEncrypted
     *
     * @param bool|null $bEzsigntemplateformfieldgroupEncrypted Whether the Ezsigntemplateformfieldgroup is encrypted in the database or not. Encrypted values are not displayed on the Ezsigndocument. This can only be set if eEzsigntemplateformfieldgroupType is **Text** or **Textarea**
     *
     * @return self
     */
    public function setBEzsigntemplateformfieldgroupEncrypted($bEzsigntemplateformfieldgroupEncrypted)
    {

        //if (is_null($bEzsigntemplateformfieldgroupEncrypted)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplateformfieldgroupEncrypted cannot be null');
        //}
        $this->container['bEzsigntemplateformfieldgroupEncrypted'] = (is_null($bEzsigntemplateformfieldgroupEncrypted) ? null : (bool) $bEzsigntemplateformfieldgroupEncrypted);

        return $this;
    }

    /**
     * Gets sEzsigntemplateformfieldgroupRegexp
     *
     * @return string|null
     */
    public function getSEzsigntemplateformfieldgroupRegexp()
    {
        return $this->container['sEzsigntemplateformfieldgroupRegexp'];
    }

    /**
     * Sets sEzsigntemplateformfieldgroupRegexp
     *
     * @param string|null $sEzsigntemplateformfieldgroupRegexp A regular expression to indicate what values are acceptable for the Ezsigntemplateformfieldgroup.  This can only be set if eEzsigntemplateformfieldgroupType is **Text** or **Textarea**
     *
     * @return self
     */
    public function setSEzsigntemplateformfieldgroupRegexp($sEzsigntemplateformfieldgroupRegexp)
    {

        //if (is_null($sEzsigntemplateformfieldgroupRegexp)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateformfieldgroupRegexp cannot be null');
        //}
        $this->container['sEzsigntemplateformfieldgroupRegexp'] = (is_null($sEzsigntemplateformfieldgroupRegexp) ? null : (string) $sEzsigntemplateformfieldgroupRegexp);

        return $this;
    }

    /**
     * Gets tEzsigntemplateformfieldgroupTooltip
     *
     * @return string|null
     */
    public function getTEzsigntemplateformfieldgroupTooltip()
    {
        return $this->container['tEzsigntemplateformfieldgroupTooltip'];
    }

    /**
     * Sets tEzsigntemplateformfieldgroupTooltip
     *
     * @param string|null $tEzsigntemplateformfieldgroupTooltip A tooltip that will be presented to Ezsigntemplatesigner about the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setTEzsigntemplateformfieldgroupTooltip($tEzsigntemplateformfieldgroupTooltip)
    {

        //if (is_null($tEzsigntemplateformfieldgroupTooltip)) {
            //throw new \InvalidArgumentException('non-nullable tEzsigntemplateformfieldgroupTooltip cannot be null');
        //}
        $this->container['tEzsigntemplateformfieldgroupTooltip'] = (is_null($tEzsigntemplateformfieldgroupTooltip) ? null : (string) $tEzsigntemplateformfieldgroupTooltip);

        return $this;
    }

    /**
     * Gets eEzsigntemplateformfieldgroupTooltipposition
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupTooltipposition|null
     */
    public function getEEzsigntemplateformfieldgroupTooltipposition()
    {
        return $this->container['eEzsigntemplateformfieldgroupTooltipposition'];
    }

    /**
     * Sets eEzsigntemplateformfieldgroupTooltipposition
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupTooltipposition|null $eEzsigntemplateformfieldgroupTooltipposition eEzsigntemplateformfieldgroupTooltipposition
     *
     * @return self
     */
    public function setEEzsigntemplateformfieldgroupTooltipposition($eEzsigntemplateformfieldgroupTooltipposition)
    {

        //if (is_null($eEzsigntemplateformfieldgroupTooltipposition)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateformfieldgroupTooltipposition cannot be null');
        //}
        $this->container['eEzsigntemplateformfieldgroupTooltipposition'] = $eEzsigntemplateformfieldgroupTooltipposition;

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


