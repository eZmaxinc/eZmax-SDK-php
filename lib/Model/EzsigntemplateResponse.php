<?php
/**
 * EzsigntemplateResponse
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * EzsigntemplateResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplate Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplate-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplateID' => 'int',
        'fkiEzsigntemplatedocumentID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'sLanguageNameX' => 'string',
        'sEzsigntemplateDescription' => 'string',
        'sEzsigntemplateFilenamepattern' => 'string',
        'bEzsigntemplateAdminonly' => 'bool',
        'sEzsignfoldertypeNameX' => 'string',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit',
        'bEzsigntemplateEditallowed' => 'bool',
        'eEzsigntemplateType' => '\eZmaxAPI\Model\FieldEEzsigntemplateType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplateID' => null,
        'fkiEzsigntemplatedocumentID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'sLanguageNameX' => null,
        'sEzsigntemplateDescription' => null,
        'sEzsigntemplateFilenamepattern' => null,
        'bEzsigntemplateAdminonly' => null,
        'sEzsignfoldertypeNameX' => null,
        'objAudit' => null,
        'bEzsigntemplateEditallowed' => null,
        'eEzsigntemplateType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplateID' => false,
		'fkiEzsigntemplatedocumentID' => false,
		'fkiEzsignfoldertypeID' => false,
		'fkiLanguageID' => false,
		'sLanguageNameX' => false,
		'sEzsigntemplateDescription' => false,
		'sEzsigntemplateFilenamepattern' => false,
		'bEzsigntemplateAdminonly' => false,
		'sEzsignfoldertypeNameX' => false,
		'objAudit' => false,
		'bEzsigntemplateEditallowed' => false,
		'eEzsigntemplateType' => false
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'pkiEzsigntemplateID' => 'pkiEzsigntemplateID',
        'fkiEzsigntemplatedocumentID' => 'fkiEzsigntemplatedocumentID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sLanguageNameX' => 'sLanguageNameX',
        'sEzsigntemplateDescription' => 'sEzsigntemplateDescription',
        'sEzsigntemplateFilenamepattern' => 'sEzsigntemplateFilenamepattern',
        'bEzsigntemplateAdminonly' => 'bEzsigntemplateAdminonly',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'objAudit' => 'objAudit',
        'bEzsigntemplateEditallowed' => 'bEzsigntemplateEditallowed',
        'eEzsigntemplateType' => 'eEzsigntemplateType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplateID' => 'setPkiEzsigntemplateID',
        'fkiEzsigntemplatedocumentID' => 'setFkiEzsigntemplatedocumentID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sLanguageNameX' => 'setSLanguageNameX',
        'sEzsigntemplateDescription' => 'setSEzsigntemplateDescription',
        'sEzsigntemplateFilenamepattern' => 'setSEzsigntemplateFilenamepattern',
        'bEzsigntemplateAdminonly' => 'setBEzsigntemplateAdminonly',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'objAudit' => 'setObjAudit',
        'bEzsigntemplateEditallowed' => 'setBEzsigntemplateEditallowed',
        'eEzsigntemplateType' => 'setEEzsigntemplateType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplateID' => 'getPkiEzsigntemplateID',
        'fkiEzsigntemplatedocumentID' => 'getFkiEzsigntemplatedocumentID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sLanguageNameX' => 'getSLanguageNameX',
        'sEzsigntemplateDescription' => 'getSEzsigntemplateDescription',
        'sEzsigntemplateFilenamepattern' => 'getSEzsigntemplateFilenamepattern',
        'bEzsigntemplateAdminonly' => 'getBEzsigntemplateAdminonly',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'objAudit' => 'getObjAudit',
        'bEzsigntemplateEditallowed' => 'getBEzsigntemplateEditallowed',
        'eEzsigntemplateType' => 'getEEzsigntemplateType'
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
        $this->setIfExists('pkiEzsigntemplateID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplatedocumentID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sLanguageNameX', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateDescription', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateFilenamepattern', $data ?? [], null);
        $this->setIfExists('bEzsigntemplateAdminonly', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
        $this->setIfExists('bEzsigntemplateEditallowed', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateType', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplateID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplateID' can't be null";
        }
        if (($this->container['pkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplatedocumentID']) && ($this->container['fkiEzsigntemplatedocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatedocumentID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
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

        if ($this->container['sLanguageNameX'] === null) {
            $invalidProperties[] = "'sLanguageNameX' can't be null";
        }
        if ($this->container['sEzsigntemplateDescription'] === null) {
            $invalidProperties[] = "'sEzsigntemplateDescription' can't be null";
        }
//        if (!is_null($this->container['sEzsigntemplateFilenamepattern']) && !preg_match("/^.{1,50}$/", $this->container['sEzsigntemplateFilenamepattern'])) {
        if (!is_null($this->container['sEzsigntemplateFilenamepattern']) && !preg_match("/(*UTF8)^.{1,50}$/", $this->container['sEzsigntemplateFilenamepattern'])) {
            $invalidProperties[] = "invalid value for 'sEzsigntemplateFilenamepattern', must be conform to the pattern /^.{1,50}$/.";
        }

        if ($this->container['bEzsigntemplateAdminonly'] === null) {
            $invalidProperties[] = "'bEzsigntemplateAdminonly' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
        }
        if ($this->container['bEzsigntemplateEditallowed'] === null) {
            $invalidProperties[] = "'bEzsigntemplateEditallowed' can't be null";
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
     * Gets pkiEzsigntemplateID
     *
     * @return int
     */
    public function getPkiEzsigntemplateID()
    {
        return $this->container['pkiEzsigntemplateID'];
    }

    /**
     * Sets pkiEzsigntemplateID
     *
     * @param int $pkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setPkiEzsigntemplateID($pkiEzsigntemplateID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplateID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplateID cannot be null');
        //}

//        if (($pkiEzsigntemplateID < 0)) {
        if (($pkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplateID when calling EzsigntemplateResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplateID'] = $pkiEzsigntemplateID;
        $this->container['pkiEzsigntemplateID'] = (is_null($pkiEzsigntemplateID) ? null : (int) $pkiEzsigntemplateID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatedocumentID
     *
     * @return int|null
     */
    public function getFkiEzsigntemplatedocumentID()
    {
        return $this->container['fkiEzsigntemplatedocumentID'];
    }

    /**
     * Sets fkiEzsigntemplatedocumentID
     *
     * @param int|null $fkiEzsigntemplatedocumentID The unique ID of the Ezsigntemplatedocument
     *
     * @return self
     */
    public function setFkiEzsigntemplatedocumentID($fkiEzsigntemplatedocumentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplatedocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatedocumentID cannot be null');
        //}

//        if (($fkiEzsigntemplatedocumentID < 0)) {
        if (!is_null($fkiEzsigntemplatedocumentID) && ($fkiEzsigntemplatedocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatedocumentID when calling EzsigntemplateResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplatedocumentID'] = $fkiEzsigntemplatedocumentID;
        $this->container['fkiEzsigntemplatedocumentID'] = (is_null($fkiEzsigntemplatedocumentID) ? null : (int) $fkiEzsigntemplatedocumentID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int|null
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int|null $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}

//        if (($fkiEzsignfoldertypeID > 65535)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsigntemplateResponse., must be smaller than or equal to 65535.');
        }
//        if (($fkiEzsignfoldertypeID < 0)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsigntemplateResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}

//        if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplateResponse., must be smaller than or equal to 2.');
        }
//        if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplateResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets sLanguageNameX
     *
     * @return string
     */
    public function getSLanguageNameX()
    {
        return is_null($this->container['sLanguageNameX']) ? null : trim($this->container['sLanguageNameX']);
    }

    /**
     * Sets sLanguageNameX
     *
     * @param string $sLanguageNameX The Name of the Language in the language of the requester
     *
     * @return self
     */
    public function setSLanguageNameX($sLanguageNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sLanguageNameX)) {
            //throw new \InvalidArgumentException('non-nullable sLanguageNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sLanguageNameX'] = $sLanguageNameX;
        $this->container['sLanguageNameX'] = (is_null($sLanguageNameX) ? null : trim((string) $sLanguageNameX));

        return $this;
    }

    /**
     * Gets sEzsigntemplateDescription
     *
     * @return string
     */
    public function getSEzsigntemplateDescription()
    {
        return is_null($this->container['sEzsigntemplateDescription']) ? null : trim($this->container['sEzsigntemplateDescription']);
    }

    /**
     * Sets sEzsigntemplateDescription
     *
     * @param string $sEzsigntemplateDescription The description of the Ezsigntemplate
     *
     * @return self
     */
    public function setSEzsigntemplateDescription($sEzsigntemplateDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateDescription'] = $sEzsigntemplateDescription;
        $this->container['sEzsigntemplateDescription'] = (is_null($sEzsigntemplateDescription) ? null : trim((string) $sEzsigntemplateDescription));

        return $this;
    }

    /**
     * Gets sEzsigntemplateFilenamepattern
     *
     * @return string|null
     */
    public function getSEzsigntemplateFilenamepattern()
    {
        return is_null($this->container['sEzsigntemplateFilenamepattern']) ? null : trim($this->container['sEzsigntemplateFilenamepattern']);
    }

    /**
     * Sets sEzsigntemplateFilenamepattern
     *
     * @param string|null $sEzsigntemplateFilenamepattern The filename pattern of the Ezsigntemplate
     *
     * @return self
     */
    public function setSEzsigntemplateFilenamepattern($sEzsigntemplateFilenamepattern)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateFilenamepattern)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateFilenamepattern cannot be null');
        //}

//        if ((!preg_match("/^.{1,50}$/", ObjectSerializer::toString($sEzsigntemplateFilenamepattern)))) {
        if (!is_null($sEzsigntemplateFilenamepattern) && (!preg_match("/(*UTF8)^.{1,50}$/", ObjectSerializer::toString($sEzsigntemplateFilenamepattern)))) {
            throw new \InvalidArgumentException("invalid value for \$sEzsigntemplateFilenamepattern when calling EzsigntemplateResponse., must conform to the pattern /^.{1,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateFilenamepattern'] = $sEzsigntemplateFilenamepattern;
        $this->container['sEzsigntemplateFilenamepattern'] = (is_null($sEzsigntemplateFilenamepattern) ? null : trim((string) $sEzsigntemplateFilenamepattern));

        return $this;
    }

    /**
     * Gets bEzsigntemplateAdminonly
     *
     * @return bool
     */
    public function getBEzsigntemplateAdminonly()
    {
        return $this->container['bEzsigntemplateAdminonly'];
    }

    /**
     * Sets bEzsigntemplateAdminonly
     *
     * @param bool $bEzsigntemplateAdminonly Whether the Ezsigntemplate can be accessed by admin users only (eUserType=Normal)
     *
     * @return self
     */
    public function setBEzsigntemplateAdminonly($bEzsigntemplateAdminonly)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsigntemplateAdminonly)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplateAdminonly cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsigntemplateAdminonly'] = $bEzsigntemplateAdminonly;
        $this->container['bEzsigntemplateAdminonly'] = (is_null($bEzsigntemplateAdminonly) ? null : (bool) $bEzsigntemplateAdminonly);

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string|null
     */
    public function getSEzsignfoldertypeNameX()
    {
        return is_null($this->container['sEzsignfoldertypeNameX']) ? null : trim($this->container['sEzsignfoldertypeNameX']);
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string|null $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfoldertypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfoldertypeNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfoldertypeNameX'] = $sEzsignfoldertypeNameX;
        $this->container['sEzsignfoldertypeNameX'] = (is_null($sEzsignfoldertypeNameX) ? null : trim((string) $sEzsignfoldertypeNameX));

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objAudit)) {
            //throw new \InvalidArgumentException('non-nullable objAudit cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objAudit'] = $objAudit;
        $this->container['objAudit'] = $objAudit;

        return $this;
    }

    /**
     * Gets bEzsigntemplateEditallowed
     *
     * @return bool
     */
    public function getBEzsigntemplateEditallowed()
    {
        return $this->container['bEzsigntemplateEditallowed'];
    }

    /**
     * Sets bEzsigntemplateEditallowed
     *
     * @param bool $bEzsigntemplateEditallowed Whether the Ezsigntemplate if allowed to edit or not
     *
     * @return self
     */
    public function setBEzsigntemplateEditallowed($bEzsigntemplateEditallowed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsigntemplateEditallowed)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplateEditallowed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsigntemplateEditallowed'] = $bEzsigntemplateEditallowed;
        $this->container['bEzsigntemplateEditallowed'] = (is_null($bEzsigntemplateEditallowed) ? null : (bool) $bEzsigntemplateEditallowed);

        return $this;
    }

    /**
     * Gets eEzsigntemplateType
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateType|null
     */
    public function getEEzsigntemplateType()
    {
        return $this->container['eEzsigntemplateType'];
    }

    /**
     * Sets eEzsigntemplateType
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateType|null $eEzsigntemplateType eEzsigntemplateType
     *
     * @return self
     */
    public function setEEzsigntemplateType($eEzsigntemplateType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsigntemplateType)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsigntemplateType'] = $eEzsigntemplateType;
        $this->container['eEzsigntemplateType'] = $eEzsigntemplateType;

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


