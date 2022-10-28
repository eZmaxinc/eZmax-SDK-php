<?php
/**
 * EzsigndocumentRequestCompound
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
 * EzsigndocumentRequestCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsigndocument Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigndocumentRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocument-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigndocumentID' => 'int',
        'fkiEzsignfolderID' => 'int',
        'fkiEzsigntemplateID' => 'int',
        'fkiEzsignfoldersignerassociationID' => 'int',
        'fkiLanguageID' => 'int',
        'eEzsigndocumentSource' => 'string',
        'eEzsigndocumentFormat' => 'string',
        'sEzsigndocumentBase64' => 'string',
        'sEzsigndocumentUrl' => 'string',
        'bEzsigndocumentForcerepair' => 'bool',
        'sEzsigndocumentPassword' => 'string',
        'eEzsigndocumentForm' => 'string',
        'dtEzsigndocumentDuedate' => 'string',
        'sEzsigndocumentName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigndocumentID' => null,
        'fkiEzsignfolderID' => null,
        'fkiEzsigntemplateID' => null,
        'fkiEzsignfoldersignerassociationID' => null,
        'fkiLanguageID' => null,
        'eEzsigndocumentSource' => null,
        'eEzsigndocumentFormat' => null,
        'sEzsigndocumentBase64' => 'byte',
        'sEzsigndocumentUrl' => null,
        'bEzsigndocumentForcerepair' => null,
        'sEzsigndocumentPassword' => null,
        'eEzsigndocumentForm' => null,
        'dtEzsigndocumentDuedate' => null,
        'sEzsigndocumentName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigndocumentID' => false,
		'fkiEzsignfolderID' => false,
		'fkiEzsigntemplateID' => false,
		'fkiEzsignfoldersignerassociationID' => false,
		'fkiLanguageID' => false,
		'eEzsigndocumentSource' => false,
		'eEzsigndocumentFormat' => false,
		'sEzsigndocumentBase64' => false,
		'sEzsigndocumentUrl' => false,
		'bEzsigndocumentForcerepair' => false,
		'sEzsigndocumentPassword' => false,
		'eEzsigndocumentForm' => false,
		'dtEzsigndocumentDuedate' => false,
		'sEzsigndocumentName' => false
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
        'pkiEzsigndocumentID' => 'pkiEzsigndocumentID',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'fkiEzsigntemplateID' => 'fkiEzsigntemplateID',
        'fkiEzsignfoldersignerassociationID' => 'fkiEzsignfoldersignerassociationID',
        'fkiLanguageID' => 'fkiLanguageID',
        'eEzsigndocumentSource' => 'eEzsigndocumentSource',
        'eEzsigndocumentFormat' => 'eEzsigndocumentFormat',
        'sEzsigndocumentBase64' => 'sEzsigndocumentBase64',
        'sEzsigndocumentUrl' => 'sEzsigndocumentUrl',
        'bEzsigndocumentForcerepair' => 'bEzsigndocumentForcerepair',
        'sEzsigndocumentPassword' => 'sEzsigndocumentPassword',
        'eEzsigndocumentForm' => 'eEzsigndocumentForm',
        'dtEzsigndocumentDuedate' => 'dtEzsigndocumentDuedate',
        'sEzsigndocumentName' => 'sEzsigndocumentName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigndocumentID' => 'setPkiEzsigndocumentID',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'fkiEzsigntemplateID' => 'setFkiEzsigntemplateID',
        'fkiEzsignfoldersignerassociationID' => 'setFkiEzsignfoldersignerassociationID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'eEzsigndocumentSource' => 'setEEzsigndocumentSource',
        'eEzsigndocumentFormat' => 'setEEzsigndocumentFormat',
        'sEzsigndocumentBase64' => 'setSEzsigndocumentBase64',
        'sEzsigndocumentUrl' => 'setSEzsigndocumentUrl',
        'bEzsigndocumentForcerepair' => 'setBEzsigndocumentForcerepair',
        'sEzsigndocumentPassword' => 'setSEzsigndocumentPassword',
        'eEzsigndocumentForm' => 'setEEzsigndocumentForm',
        'dtEzsigndocumentDuedate' => 'setDtEzsigndocumentDuedate',
        'sEzsigndocumentName' => 'setSEzsigndocumentName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigndocumentID' => 'getPkiEzsigndocumentID',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'fkiEzsigntemplateID' => 'getFkiEzsigntemplateID',
        'fkiEzsignfoldersignerassociationID' => 'getFkiEzsignfoldersignerassociationID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'eEzsigndocumentSource' => 'getEEzsigndocumentSource',
        'eEzsigndocumentFormat' => 'getEEzsigndocumentFormat',
        'sEzsigndocumentBase64' => 'getSEzsigndocumentBase64',
        'sEzsigndocumentUrl' => 'getSEzsigndocumentUrl',
        'bEzsigndocumentForcerepair' => 'getBEzsigndocumentForcerepair',
        'sEzsigndocumentPassword' => 'getSEzsigndocumentPassword',
        'eEzsigndocumentForm' => 'getEEzsigndocumentForm',
        'dtEzsigndocumentDuedate' => 'getDtEzsigndocumentDuedate',
        'sEzsigndocumentName' => 'getSEzsigndocumentName'
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

    public const E_EZSIGNDOCUMENT_SOURCE_BASE64 = 'Base64';
    public const E_EZSIGNDOCUMENT_SOURCE_EZSIGNTEMPLATE = 'Ezsigntemplate';
    public const E_EZSIGNDOCUMENT_SOURCE_URL = 'Url';
    public const E_EZSIGNDOCUMENT_FORMAT_PDF = 'Pdf';
    public const E_EZSIGNDOCUMENT_FORM_KEEP = 'Keep';
    public const E_EZSIGNDOCUMENT_FORM_CONVERT = 'Convert';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigndocumentSourceAllowableValues()
    {
        return [
            self::E_EZSIGNDOCUMENT_SOURCE_BASE64,
            self::E_EZSIGNDOCUMENT_SOURCE_EZSIGNTEMPLATE,
            self::E_EZSIGNDOCUMENT_SOURCE_URL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigndocumentFormatAllowableValues()
    {
        return [
            self::E_EZSIGNDOCUMENT_FORMAT_PDF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigndocumentFormAllowableValues()
    {
        return [
            self::E_EZSIGNDOCUMENT_FORM_KEEP,
            self::E_EZSIGNDOCUMENT_FORM_CONVERT,
        ];
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
        $this->setIfExists('pkiEzsigndocumentID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplateID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldersignerassociationID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('eEzsigndocumentSource', $data ?? [], null);
        $this->setIfExists('eEzsigndocumentFormat', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentBase64', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentUrl', $data ?? [], null);
        $this->setIfExists('bEzsigndocumentForcerepair', $data ?? [], true);
        $this->setIfExists('sEzsigndocumentPassword', $data ?? [], null);
        $this->setIfExists('eEzsigndocumentForm', $data ?? [], null);
        $this->setIfExists('dtEzsigndocumentDuedate', $data ?? [], null);
        $this->setIfExists('sEzsigndocumentName', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsigndocumentID']) && ($this->container['pkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if (($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplateID']) && ($this->container['fkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignfoldersignerassociationID']) && ($this->container['fkiEzsignfoldersignerassociationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldersignerassociationID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if ($this->container['eEzsigndocumentSource'] === null) {
            $invalidProperties[] = "'eEzsigndocumentSource' can't be null";
        }
        $allowedValues = $this->getEEzsigndocumentSourceAllowableValues();
        if (!is_null($this->container['eEzsigndocumentSource']) && !in_array($this->container['eEzsigndocumentSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsigndocumentSource', must be one of '%s'",
                $this->container['eEzsigndocumentSource'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEEzsigndocumentFormatAllowableValues();
        if (!is_null($this->container['eEzsigndocumentFormat']) && !in_array($this->container['eEzsigndocumentFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsigndocumentFormat', must be one of '%s'",
                $this->container['eEzsigndocumentFormat'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEEzsigndocumentFormAllowableValues();
        if (!is_null($this->container['eEzsigndocumentForm']) && !in_array($this->container['eEzsigndocumentForm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsigndocumentForm', must be one of '%s'",
                $this->container['eEzsigndocumentForm'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dtEzsigndocumentDuedate'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentDuedate' can't be null";
        }
        if ($this->container['sEzsigndocumentName'] === null) {
            $invalidProperties[] = "'sEzsigndocumentName' can't be null";
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
     * Gets pkiEzsigndocumentID
     *
     * @return int|null
     */
    public function getPkiEzsigndocumentID()
    {
        return $this->container['pkiEzsigndocumentID'];
    }

    /**
     * Sets pkiEzsigndocumentID
     *
     * @param int|null $pkiEzsigndocumentID The unique ID of the Ezsigndocument
     *
     * @return self
     */
    public function setPkiEzsigndocumentID($pkiEzsigndocumentID)
    {

        if (!is_null($pkiEzsigndocumentID) && ($pkiEzsigndocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigndocumentID when calling EzsigndocumentRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsigndocumentID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigndocumentID cannot be null');
        //}
        $this->container['pkiEzsigndocumentID'] = (is_null($pkiEzsigndocumentID) ? null : (int) $pkiEzsigndocumentID);

        return $this;
    }

    /**
     * Gets fkiEzsignfolderID
     *
     * @return int
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int $fkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {

        if (($fkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling EzsigndocumentRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfolderID cannot be null');
        //}
        $this->container['fkiEzsignfolderID'] = (is_null($fkiEzsignfolderID) ? null : (int) $fkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateID
     *
     * @return int|null
     */
    public function getFkiEzsigntemplateID()
    {
        return $this->container['fkiEzsigntemplateID'];
    }

    /**
     * Sets fkiEzsigntemplateID
     *
     * @param int|null $fkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setFkiEzsigntemplateID($fkiEzsigntemplateID)
    {

        if (!is_null($fkiEzsigntemplateID) && ($fkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateID when calling EzsigndocumentRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigntemplateID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateID cannot be null');
        //}
        $this->container['fkiEzsigntemplateID'] = (is_null($fkiEzsigntemplateID) ? null : (int) $fkiEzsigntemplateID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldersignerassociationID
     *
     * @return int|null
     */
    public function getFkiEzsignfoldersignerassociationID()
    {
        return $this->container['fkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets fkiEzsignfoldersignerassociationID
     *
     * @param int|null $fkiEzsignfoldersignerassociationID The unique ID of the Ezsignfoldersignerassociation
     *
     * @return self
     */
    public function setFkiEzsignfoldersignerassociationID($fkiEzsignfoldersignerassociationID)
    {

        if (!is_null($fkiEzsignfoldersignerassociationID) && ($fkiEzsignfoldersignerassociationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldersignerassociationID when calling EzsigndocumentRequestCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfoldersignerassociationID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldersignerassociationID cannot be null');
        //}
        $this->container['fkiEzsignfoldersignerassociationID'] = (is_null($fkiEzsignfoldersignerassociationID) ? null : (int) $fkiEzsignfoldersignerassociationID);

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentRequestCompound., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentRequestCompound., must be bigger than or equal to 1.');
        }


        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets eEzsigndocumentSource
     *
     * @return string
     */
    public function getEEzsigndocumentSource()
    {
        return $this->container['eEzsigndocumentSource'];
    }

    /**
     * Sets eEzsigndocumentSource
     *
     * @param string $eEzsigndocumentSource Indicates where to look for the document binary content.
     *
     * @return self
     */
    public function setEEzsigndocumentSource($eEzsigndocumentSource)
    {
        $allowedValues = $this->getEEzsigndocumentSourceAllowableValues();
        if (!in_array($eEzsigndocumentSource, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsigndocumentSource', must be one of '%s'",
                    $eEzsigndocumentSource,
                    implode("', '", $allowedValues)
                )
            );
        }

        //if (is_null($eEzsigndocumentSource)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigndocumentSource cannot be null');
        //}
        $this->container['eEzsigndocumentSource'] = (is_null($eEzsigndocumentSource) ? null : (string) $eEzsigndocumentSource);

        return $this;
    }

    /**
     * Gets eEzsigndocumentFormat
     *
     * @return string|null
     */
    public function getEEzsigndocumentFormat()
    {
        return $this->container['eEzsigndocumentFormat'];
    }

    /**
     * Sets eEzsigndocumentFormat
     *
     * @param string|null $eEzsigndocumentFormat Indicates the format of the document.
     *
     * @return self
     */
    public function setEEzsigndocumentFormat($eEzsigndocumentFormat)
    {
        $allowedValues = $this->getEEzsigndocumentFormatAllowableValues();
        if (!is_null($eEzsigndocumentFormat) && !in_array($eEzsigndocumentFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsigndocumentFormat', must be one of '%s'",
                    $eEzsigndocumentFormat,
                    implode("', '", $allowedValues)
                )
            );
        }

        //if (is_null($eEzsigndocumentFormat)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigndocumentFormat cannot be null');
        //}
        $this->container['eEzsigndocumentFormat'] = (is_null($eEzsigndocumentFormat) ? null : (string) $eEzsigndocumentFormat);

        return $this;
    }

    /**
     * Gets sEzsigndocumentBase64
     *
     * @return string|null
     */
    public function getSEzsigndocumentBase64()
    {
        return $this->container['sEzsigndocumentBase64'];
    }

    /**
     * Sets sEzsigndocumentBase64
     *
     * @param string|null $sEzsigndocumentBase64 The Base64 encoded binary content of the document.  This field is Required when eEzsigndocumentSource = Base64.
     *
     * @return self
     */
    public function setSEzsigndocumentBase64($sEzsigndocumentBase64)
    {

        //if (is_null($sEzsigndocumentBase64)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentBase64 cannot be null');
        //}
        $this->container['sEzsigndocumentBase64'] = (is_null($sEzsigndocumentBase64) ? null : $sEzsigndocumentBase64);

        return $this;
    }

    /**
     * Gets sEzsigndocumentUrl
     *
     * @return string|null
     */
    public function getSEzsigndocumentUrl()
    {
        return $this->container['sEzsigndocumentUrl'];
    }

    /**
     * Sets sEzsigndocumentUrl
     *
     * @param string|null $sEzsigndocumentUrl The url where the document content resides.  This field is Required when eEzsigndocumentSource = Url.
     *
     * @return self
     */
    public function setSEzsigndocumentUrl($sEzsigndocumentUrl)
    {

        //if (is_null($sEzsigndocumentUrl)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentUrl cannot be null');
        //}
        $this->container['sEzsigndocumentUrl'] = (is_null($sEzsigndocumentUrl) ? null : (string) $sEzsigndocumentUrl);

        return $this;
    }

    /**
     * Gets bEzsigndocumentForcerepair
     *
     * @return bool|null
     */
    public function getBEzsigndocumentForcerepair()
    {
        return $this->container['bEzsigndocumentForcerepair'];
    }

    /**
     * Sets bEzsigndocumentForcerepair
     *
     * @param bool|null $bEzsigndocumentForcerepair Try to repair the document or flatten it if it cannot be used for electronic signature.
     *
     * @return self
     */
    public function setBEzsigndocumentForcerepair($bEzsigndocumentForcerepair)
    {

        //if (is_null($bEzsigndocumentForcerepair)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigndocumentForcerepair cannot be null');
        //}
        $this->container['bEzsigndocumentForcerepair'] = (is_null($bEzsigndocumentForcerepair) ? null : (bool) $bEzsigndocumentForcerepair);

        return $this;
    }

    /**
     * Gets sEzsigndocumentPassword
     *
     * @return string|null
     */
    public function getSEzsigndocumentPassword()
    {
        return $this->container['sEzsigndocumentPassword'];
    }

    /**
     * Sets sEzsigndocumentPassword
     *
     * @param string|null $sEzsigndocumentPassword If the source document is password protected, the password to open/modify it.
     *
     * @return self
     */
    public function setSEzsigndocumentPassword($sEzsigndocumentPassword)
    {

        //if (is_null($sEzsigndocumentPassword)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentPassword cannot be null');
        //}
        $this->container['sEzsigndocumentPassword'] = (is_null($sEzsigndocumentPassword) ? null : (string) $sEzsigndocumentPassword);

        return $this;
    }

    /**
     * Gets eEzsigndocumentForm
     *
     * @return string|null
     */
    public function getEEzsigndocumentForm()
    {
        return $this->container['eEzsigndocumentForm'];
    }

    /**
     * Sets eEzsigndocumentForm
     *
     * @param string|null $eEzsigndocumentForm If the document contains an existing PDF form this property must be set.  **Keep** leaves the form as-is in the document.  **Convert** removes the form and convert all the existing fields to Ezsignformfieldgroups and assign them to the specified **fkiEzsignfoldersignerassociationID**
     *
     * @return self
     */
    public function setEEzsigndocumentForm($eEzsigndocumentForm)
    {
        $allowedValues = $this->getEEzsigndocumentFormAllowableValues();
        if (!is_null($eEzsigndocumentForm) && !in_array($eEzsigndocumentForm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsigndocumentForm', must be one of '%s'",
                    $eEzsigndocumentForm,
                    implode("', '", $allowedValues)
                )
            );
        }

        //if (is_null($eEzsigndocumentForm)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigndocumentForm cannot be null');
        //}
        $this->container['eEzsigndocumentForm'] = (is_null($eEzsigndocumentForm) ? null : (string) $eEzsigndocumentForm);

        return $this;
    }

    /**
     * Gets dtEzsigndocumentDuedate
     *
     * @return string
     */
    public function getDtEzsigndocumentDuedate()
    {
        return $this->container['dtEzsigndocumentDuedate'];
    }

    /**
     * Sets dtEzsigndocumentDuedate
     *
     * @param string $dtEzsigndocumentDuedate The maximum date and time at which the Ezsigndocument can be signed.
     *
     * @return self
     */
    public function setDtEzsigndocumentDuedate($dtEzsigndocumentDuedate)
    {

        //if (is_null($dtEzsigndocumentDuedate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsigndocumentDuedate cannot be null');
        //}
        $this->container['dtEzsigndocumentDuedate'] = (is_null($dtEzsigndocumentDuedate) ? null : (string) $dtEzsigndocumentDuedate);

        return $this;
    }

    /**
     * Gets sEzsigndocumentName
     *
     * @return string
     */
    public function getSEzsigndocumentName()
    {
        return $this->container['sEzsigndocumentName'];
    }

    /**
     * Sets sEzsigndocumentName
     *
     * @param string $sEzsigndocumentName The name of the document that will be presented to Ezsignfoldersignerassociations
     *
     * @return self
     */
    public function setSEzsigndocumentName($sEzsigndocumentName)
    {

        //if (is_null($sEzsigndocumentName)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigndocumentName cannot be null');
        //}
        $this->container['sEzsigndocumentName'] = (is_null($sEzsigndocumentName) ? null : (string) $sEzsigndocumentName);

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


