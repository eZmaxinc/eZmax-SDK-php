<?php
/**
 * EzsigntemplatedocumentRequest
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
 * EzsigntemplatedocumentRequest Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplatedocument Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatedocumentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatedocument-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatedocumentID' => 'int',
        'fkiEzsigntemplateID' => 'int',
        'fkiEzsigndocumentID' => 'int',
        'fkiEzsigntemplatesignerID' => 'int',
        'sEzsigntemplatedocumentName' => 'string',
        'eEzsigntemplatedocumentSource' => 'string',
        'eEzsigntemplatedocumentFormat' => 'string',
        'sEzsigntemplatedocumentBase64' => 'string',
        'sEzsigntemplatedocumentUrl' => 'string',
        'bEzsigntemplatedocumentForcerepair' => 'bool',
        'eEzsigntemplatedocumentForm' => 'string',
        'sEzsigntemplatedocumentPassword' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatedocumentID' => null,
        'fkiEzsigntemplateID' => null,
        'fkiEzsigndocumentID' => null,
        'fkiEzsigntemplatesignerID' => null,
        'sEzsigntemplatedocumentName' => null,
        'eEzsigntemplatedocumentSource' => null,
        'eEzsigntemplatedocumentFormat' => null,
        'sEzsigntemplatedocumentBase64' => 'byte',
        'sEzsigntemplatedocumentUrl' => null,
        'bEzsigntemplatedocumentForcerepair' => null,
        'eEzsigntemplatedocumentForm' => null,
        'sEzsigntemplatedocumentPassword' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplatedocumentID' => false,
		'fkiEzsigntemplateID' => false,
		'fkiEzsigndocumentID' => false,
		'fkiEzsigntemplatesignerID' => false,
		'sEzsigntemplatedocumentName' => false,
		'eEzsigntemplatedocumentSource' => false,
		'eEzsigntemplatedocumentFormat' => false,
		'sEzsigntemplatedocumentBase64' => false,
		'sEzsigntemplatedocumentUrl' => false,
		'bEzsigntemplatedocumentForcerepair' => false,
		'eEzsigntemplatedocumentForm' => false,
		'sEzsigntemplatedocumentPassword' => false
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
        'pkiEzsigntemplatedocumentID' => 'pkiEzsigntemplatedocumentID',
        'fkiEzsigntemplateID' => 'fkiEzsigntemplateID',
        'fkiEzsigndocumentID' => 'fkiEzsigndocumentID',
        'fkiEzsigntemplatesignerID' => 'fkiEzsigntemplatesignerID',
        'sEzsigntemplatedocumentName' => 'sEzsigntemplatedocumentName',
        'eEzsigntemplatedocumentSource' => 'eEzsigntemplatedocumentSource',
        'eEzsigntemplatedocumentFormat' => 'eEzsigntemplatedocumentFormat',
        'sEzsigntemplatedocumentBase64' => 'sEzsigntemplatedocumentBase64',
        'sEzsigntemplatedocumentUrl' => 'sEzsigntemplatedocumentUrl',
        'bEzsigntemplatedocumentForcerepair' => 'bEzsigntemplatedocumentForcerepair',
        'eEzsigntemplatedocumentForm' => 'eEzsigntemplatedocumentForm',
        'sEzsigntemplatedocumentPassword' => 'sEzsigntemplatedocumentPassword'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatedocumentID' => 'setPkiEzsigntemplatedocumentID',
        'fkiEzsigntemplateID' => 'setFkiEzsigntemplateID',
        'fkiEzsigndocumentID' => 'setFkiEzsigndocumentID',
        'fkiEzsigntemplatesignerID' => 'setFkiEzsigntemplatesignerID',
        'sEzsigntemplatedocumentName' => 'setSEzsigntemplatedocumentName',
        'eEzsigntemplatedocumentSource' => 'setEEzsigntemplatedocumentSource',
        'eEzsigntemplatedocumentFormat' => 'setEEzsigntemplatedocumentFormat',
        'sEzsigntemplatedocumentBase64' => 'setSEzsigntemplatedocumentBase64',
        'sEzsigntemplatedocumentUrl' => 'setSEzsigntemplatedocumentUrl',
        'bEzsigntemplatedocumentForcerepair' => 'setBEzsigntemplatedocumentForcerepair',
        'eEzsigntemplatedocumentForm' => 'setEEzsigntemplatedocumentForm',
        'sEzsigntemplatedocumentPassword' => 'setSEzsigntemplatedocumentPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatedocumentID' => 'getPkiEzsigntemplatedocumentID',
        'fkiEzsigntemplateID' => 'getFkiEzsigntemplateID',
        'fkiEzsigndocumentID' => 'getFkiEzsigndocumentID',
        'fkiEzsigntemplatesignerID' => 'getFkiEzsigntemplatesignerID',
        'sEzsigntemplatedocumentName' => 'getSEzsigntemplatedocumentName',
        'eEzsigntemplatedocumentSource' => 'getEEzsigntemplatedocumentSource',
        'eEzsigntemplatedocumentFormat' => 'getEEzsigntemplatedocumentFormat',
        'sEzsigntemplatedocumentBase64' => 'getSEzsigntemplatedocumentBase64',
        'sEzsigntemplatedocumentUrl' => 'getSEzsigntemplatedocumentUrl',
        'bEzsigntemplatedocumentForcerepair' => 'getBEzsigntemplatedocumentForcerepair',
        'eEzsigntemplatedocumentForm' => 'getEEzsigntemplatedocumentForm',
        'sEzsigntemplatedocumentPassword' => 'getSEzsigntemplatedocumentPassword'
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

    public const E_EZSIGNTEMPLATEDOCUMENT_SOURCE_BASE64 = 'Base64';
    public const E_EZSIGNTEMPLATEDOCUMENT_SOURCE_URL = 'Url';
    public const E_EZSIGNTEMPLATEDOCUMENT_SOURCE_EZSIGNDOCUMENT = 'Ezsigndocument';
    public const E_EZSIGNTEMPLATEDOCUMENT_FORMAT_PDF = 'Pdf';
    public const E_EZSIGNTEMPLATEDOCUMENT_FORM_KEEP = 'Keep';
    public const E_EZSIGNTEMPLATEDOCUMENT_FORM_CONVERT = 'Convert';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigntemplatedocumentSourceAllowableValues()
    {
        return [
            self::E_EZSIGNTEMPLATEDOCUMENT_SOURCE_BASE64,
            self::E_EZSIGNTEMPLATEDOCUMENT_SOURCE_URL,
            self::E_EZSIGNTEMPLATEDOCUMENT_SOURCE_EZSIGNDOCUMENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigntemplatedocumentFormatAllowableValues()
    {
        return [
            self::E_EZSIGNTEMPLATEDOCUMENT_FORMAT_PDF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigntemplatedocumentFormAllowableValues()
    {
        return [
            self::E_EZSIGNTEMPLATEDOCUMENT_FORM_KEEP,
            self::E_EZSIGNTEMPLATEDOCUMENT_FORM_CONVERT,
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
        $this->setIfExists('pkiEzsigntemplatedocumentID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplateID', $data ?? [], null);
        $this->setIfExists('fkiEzsigndocumentID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatesignerID', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatedocumentName', $data ?? [], null);
        $this->setIfExists('eEzsigntemplatedocumentSource', $data ?? [], null);
        $this->setIfExists('eEzsigntemplatedocumentFormat', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatedocumentBase64', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatedocumentUrl', $data ?? [], null);
        $this->setIfExists('bEzsigntemplatedocumentForcerepair', $data ?? [], null);
        $this->setIfExists('eEzsigntemplatedocumentForm', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatedocumentPassword', $data ?? [], '');
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

        if (!is_null($this->container['pkiEzsigntemplatedocumentID']) && ($this->container['pkiEzsigntemplatedocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatedocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplateID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplateID' can't be null";
        }
        if (($this->container['fkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigndocumentID']) && ($this->container['fkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplatesignerID']) && ($this->container['fkiEzsigntemplatesignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatesignerID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsigntemplatedocumentName'] === null) {
            $invalidProperties[] = "'sEzsigntemplatedocumentName' can't be null";
        }
        if ($this->container['eEzsigntemplatedocumentSource'] === null) {
            $invalidProperties[] = "'eEzsigntemplatedocumentSource' can't be null";
        }
        $allowedValues = $this->getEEzsigntemplatedocumentSourceAllowableValues();
        if (!is_null($this->container['eEzsigntemplatedocumentSource']) && !in_array($this->container['eEzsigntemplatedocumentSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsigntemplatedocumentSource', must be one of '%s'",
                $this->container['eEzsigntemplatedocumentSource'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEEzsigntemplatedocumentFormatAllowableValues();
        if (!is_null($this->container['eEzsigntemplatedocumentFormat']) && !in_array($this->container['eEzsigntemplatedocumentFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsigntemplatedocumentFormat', must be one of '%s'",
                $this->container['eEzsigntemplatedocumentFormat'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEEzsigntemplatedocumentFormAllowableValues();
        if (!is_null($this->container['eEzsigntemplatedocumentForm']) && !in_array($this->container['eEzsigntemplatedocumentForm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsigntemplatedocumentForm', must be one of '%s'",
                $this->container['eEzsigntemplatedocumentForm'],
                implode("', '", $allowedValues)
            );
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
     * Gets pkiEzsigntemplatedocumentID
     *
     * @return int|null
     */
    public function getPkiEzsigntemplatedocumentID()
    {
        return $this->container['pkiEzsigntemplatedocumentID'];
    }

    /**
     * Sets pkiEzsigntemplatedocumentID
     *
     * @param int|null $pkiEzsigntemplatedocumentID The unique ID of the Ezsigntemplatedocument
     *
     * @return self
     */
    public function setPkiEzsigntemplatedocumentID($pkiEzsigntemplatedocumentID)
    {

        if (!is_null($pkiEzsigntemplatedocumentID) && ($pkiEzsigntemplatedocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatedocumentID when calling EzsigntemplatedocumentRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsigntemplatedocumentID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplatedocumentID cannot be null');
        //}
        $this->container['pkiEzsigntemplatedocumentID'] = (is_null($pkiEzsigntemplatedocumentID) ? null : (int) $pkiEzsigntemplatedocumentID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateID
     *
     * @return int
     */
    public function getFkiEzsigntemplateID()
    {
        return $this->container['fkiEzsigntemplateID'];
    }

    /**
     * Sets fkiEzsigntemplateID
     *
     * @param int $fkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setFkiEzsigntemplateID($fkiEzsigntemplateID)
    {

        if (($fkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateID when calling EzsigntemplatedocumentRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigntemplateID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateID cannot be null');
        //}
        $this->container['fkiEzsigntemplateID'] = (is_null($fkiEzsigntemplateID) ? null : (int) $fkiEzsigntemplateID);

        return $this;
    }

    /**
     * Gets fkiEzsigndocumentID
     *
     * @return int|null
     */
    public function getFkiEzsigndocumentID()
    {
        return $this->container['fkiEzsigndocumentID'];
    }

    /**
     * Sets fkiEzsigndocumentID
     *
     * @param int|null $fkiEzsigndocumentID The unique ID of the Ezsigndocument
     *
     * @return self
     */
    public function setFkiEzsigndocumentID($fkiEzsigndocumentID)
    {

        if (!is_null($fkiEzsigndocumentID) && ($fkiEzsigndocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigndocumentID when calling EzsigntemplatedocumentRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigndocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigndocumentID cannot be null');
        //}
        $this->container['fkiEzsigndocumentID'] = (is_null($fkiEzsigndocumentID) ? null : (int) $fkiEzsigndocumentID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatesignerID
     *
     * @return int|null
     */
    public function getFkiEzsigntemplatesignerID()
    {
        return $this->container['fkiEzsigntemplatesignerID'];
    }

    /**
     * Sets fkiEzsigntemplatesignerID
     *
     * @param int|null $fkiEzsigntemplatesignerID The unique ID of the Ezsigntemplatesigner
     *
     * @return self
     */
    public function setFkiEzsigntemplatesignerID($fkiEzsigntemplatesignerID)
    {

        if (!is_null($fkiEzsigntemplatesignerID) && ($fkiEzsigntemplatesignerID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatesignerID when calling EzsigntemplatedocumentRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigntemplatesignerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatesignerID cannot be null');
        //}
        $this->container['fkiEzsigntemplatesignerID'] = (is_null($fkiEzsigntemplatesignerID) ? null : (int) $fkiEzsigntemplatesignerID);

        return $this;
    }

    /**
     * Gets sEzsigntemplatedocumentName
     *
     * @return string
     */
    public function getSEzsigntemplatedocumentName()
    {
        return $this->container['sEzsigntemplatedocumentName'];
    }

    /**
     * Sets sEzsigntemplatedocumentName
     *
     * @param string $sEzsigntemplatedocumentName The name of the Ezsigntemplatedocument.
     *
     * @return self
     */
    public function setSEzsigntemplatedocumentName($sEzsigntemplatedocumentName)
    {

        //if (is_null($sEzsigntemplatedocumentName)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatedocumentName cannot be null');
        //}
        $this->container['sEzsigntemplatedocumentName'] = (is_null($sEzsigntemplatedocumentName) ? null : (string) $sEzsigntemplatedocumentName);

        return $this;
    }

    /**
     * Gets eEzsigntemplatedocumentSource
     *
     * @return string
     */
    public function getEEzsigntemplatedocumentSource()
    {
        return $this->container['eEzsigntemplatedocumentSource'];
    }

    /**
     * Sets eEzsigntemplatedocumentSource
     *
     * @param string $eEzsigntemplatedocumentSource Indicates where to look for the document binary content.
     *
     * @return self
     */
    public function setEEzsigntemplatedocumentSource($eEzsigntemplatedocumentSource)
    {
        $allowedValues = $this->getEEzsigntemplatedocumentSourceAllowableValues();
        if (!in_array($eEzsigntemplatedocumentSource, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsigntemplatedocumentSource', must be one of '%s'",
                    $eEzsigntemplatedocumentSource,
                    implode("', '", $allowedValues)
                )
            );
        }

        //if (is_null($eEzsigntemplatedocumentSource)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplatedocumentSource cannot be null');
        //}
        $this->container['eEzsigntemplatedocumentSource'] = (is_null($eEzsigntemplatedocumentSource) ? null : (string) $eEzsigntemplatedocumentSource);

        return $this;
    }

    /**
     * Gets eEzsigntemplatedocumentFormat
     *
     * @return string|null
     */
    public function getEEzsigntemplatedocumentFormat()
    {
        return $this->container['eEzsigntemplatedocumentFormat'];
    }

    /**
     * Sets eEzsigntemplatedocumentFormat
     *
     * @param string|null $eEzsigntemplatedocumentFormat Indicates the format of the template.
     *
     * @return self
     */
    public function setEEzsigntemplatedocumentFormat($eEzsigntemplatedocumentFormat)
    {
        $allowedValues = $this->getEEzsigntemplatedocumentFormatAllowableValues();
        if (!is_null($eEzsigntemplatedocumentFormat) && !in_array($eEzsigntemplatedocumentFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsigntemplatedocumentFormat', must be one of '%s'",
                    $eEzsigntemplatedocumentFormat,
                    implode("', '", $allowedValues)
                )
            );
        }

        //if (is_null($eEzsigntemplatedocumentFormat)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplatedocumentFormat cannot be null');
        //}
        $this->container['eEzsigntemplatedocumentFormat'] = (is_null($eEzsigntemplatedocumentFormat) ? null : (string) $eEzsigntemplatedocumentFormat);

        return $this;
    }

    /**
     * Gets sEzsigntemplatedocumentBase64
     *
     * @return string|null
     */
    public function getSEzsigntemplatedocumentBase64()
    {
        return $this->container['sEzsigntemplatedocumentBase64'];
    }

    /**
     * Sets sEzsigntemplatedocumentBase64
     *
     * @param string|null $sEzsigntemplatedocumentBase64 The Base64 encoded binary content of the document.  This field is Required when eEzsigntemplatedocumentSource = Base64.
     *
     * @return self
     */
    public function setSEzsigntemplatedocumentBase64($sEzsigntemplatedocumentBase64)
    {

        //if (is_null($sEzsigntemplatedocumentBase64)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatedocumentBase64 cannot be null');
        //}
        $this->container['sEzsigntemplatedocumentBase64'] = (is_null($sEzsigntemplatedocumentBase64) ? null : $sEzsigntemplatedocumentBase64);

        return $this;
    }

    /**
     * Gets sEzsigntemplatedocumentUrl
     *
     * @return string|null
     */
    public function getSEzsigntemplatedocumentUrl()
    {
        return $this->container['sEzsigntemplatedocumentUrl'];
    }

    /**
     * Sets sEzsigntemplatedocumentUrl
     *
     * @param string|null $sEzsigntemplatedocumentUrl The url where the document content resides.  This field is Required when eEzsigntemplatedocumentSource = Url.
     *
     * @return self
     */
    public function setSEzsigntemplatedocumentUrl($sEzsigntemplatedocumentUrl)
    {

        //if (is_null($sEzsigntemplatedocumentUrl)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatedocumentUrl cannot be null');
        //}
        $this->container['sEzsigntemplatedocumentUrl'] = (is_null($sEzsigntemplatedocumentUrl) ? null : (string) $sEzsigntemplatedocumentUrl);

        return $this;
    }

    /**
     * Gets bEzsigntemplatedocumentForcerepair
     *
     * @return bool|null
     */
    public function getBEzsigntemplatedocumentForcerepair()
    {
        return $this->container['bEzsigntemplatedocumentForcerepair'];
    }

    /**
     * Sets bEzsigntemplatedocumentForcerepair
     *
     * @param bool|null $bEzsigntemplatedocumentForcerepair Try to repair the document or flatten it if it cannot be used for electronic signature.
     *
     * @return self
     */
    public function setBEzsigntemplatedocumentForcerepair($bEzsigntemplatedocumentForcerepair)
    {

        //if (is_null($bEzsigntemplatedocumentForcerepair)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplatedocumentForcerepair cannot be null');
        //}
        $this->container['bEzsigntemplatedocumentForcerepair'] = (is_null($bEzsigntemplatedocumentForcerepair) ? null : (bool) $bEzsigntemplatedocumentForcerepair);

        return $this;
    }

    /**
     * Gets eEzsigntemplatedocumentForm
     *
     * @return string|null
     */
    public function getEEzsigntemplatedocumentForm()
    {
        return $this->container['eEzsigntemplatedocumentForm'];
    }

    /**
     * Sets eEzsigntemplatedocumentForm
     *
     * @param string|null $eEzsigntemplatedocumentForm If the document contains an existing PDF form this property must be set.  **Keep** leaves the form as-is in the document.  **Convert** removes the form and convert all the existing fields to Ezsigntemplateformfieldgroups and assign them to the specified **fkiEzsigntemplatesignerID**
     *
     * @return self
     */
    public function setEEzsigntemplatedocumentForm($eEzsigntemplatedocumentForm)
    {
        $allowedValues = $this->getEEzsigntemplatedocumentFormAllowableValues();
        if (!is_null($eEzsigntemplatedocumentForm) && !in_array($eEzsigntemplatedocumentForm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsigntemplatedocumentForm', must be one of '%s'",
                    $eEzsigntemplatedocumentForm,
                    implode("', '", $allowedValues)
                )
            );
        }

        //if (is_null($eEzsigntemplatedocumentForm)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplatedocumentForm cannot be null');
        //}
        $this->container['eEzsigntemplatedocumentForm'] = (is_null($eEzsigntemplatedocumentForm) ? null : (string) $eEzsigntemplatedocumentForm);

        return $this;
    }

    /**
     * Gets sEzsigntemplatedocumentPassword
     *
     * @return string|null
     */
    public function getSEzsigntemplatedocumentPassword()
    {
        return $this->container['sEzsigntemplatedocumentPassword'];
    }

    /**
     * Sets sEzsigntemplatedocumentPassword
     *
     * @param string|null $sEzsigntemplatedocumentPassword If the source template is password protected, the password to open/modify it.
     *
     * @return self
     */
    public function setSEzsigntemplatedocumentPassword($sEzsigntemplatedocumentPassword)
    {

        //if (is_null($sEzsigntemplatedocumentPassword)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatedocumentPassword cannot be null');
        //}
        $this->container['sEzsigntemplatedocumentPassword'] = (is_null($sEzsigntemplatedocumentPassword) ? null : (string) $sEzsigntemplatedocumentPassword);

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


