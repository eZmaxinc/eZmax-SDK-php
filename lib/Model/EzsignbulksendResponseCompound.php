<?php
/**
 * EzsignbulksendResponseCompound
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
 * The version of the OpenAPI document: 1.2.2
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
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
 * EzsignbulksendResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignbulksend Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignbulksendResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksend-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksendID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'sLanguageNameX' => 'string',
        'eEzsignfoldertypePrivacylevel' => '\eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'string',
        'sEzsignbulksendDescription' => 'string',
        'tEzsignbulksendNote' => 'string',
        'bEzsignbulksendNeedvalidation' => 'bool',
        'bEzsignbulksendIsactive' => 'bool',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit',
        'aObjEzsignbulksenddocumentmapping' => '\eZmaxAPI\Model\EzsignbulksenddocumentmappingResponseCompound[]',
        'aObjEzsignbulksendsignermapping' => '\eZmaxAPI\Model\EzsignbulksendsignermappingResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksendID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'sLanguageNameX' => null,
        'eEzsignfoldertypePrivacylevel' => null,
        'sEzsignfoldertypeNameX' => null,
        'sEzsignbulksendDescription' => null,
        'tEzsignbulksendNote' => null,
        'bEzsignbulksendNeedvalidation' => null,
        'bEzsignbulksendIsactive' => null,
        'objAudit' => null,
        'aObjEzsignbulksenddocumentmapping' => null,
        'aObjEzsignbulksendsignermapping' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignbulksendID' => false,
		'fkiEzsignfoldertypeID' => false,
		'fkiLanguageID' => false,
		'sLanguageNameX' => false,
		'eEzsignfoldertypePrivacylevel' => false,
		'sEzsignfoldertypeNameX' => false,
		'sEzsignbulksendDescription' => false,
		'tEzsignbulksendNote' => false,
		'bEzsignbulksendNeedvalidation' => false,
		'bEzsignbulksendIsactive' => false,
		'objAudit' => false,
		'aObjEzsignbulksenddocumentmapping' => false,
		'aObjEzsignbulksendsignermapping' => false
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
        'pkiEzsignbulksendID' => 'pkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sLanguageNameX' => 'sLanguageNameX',
        'eEzsignfoldertypePrivacylevel' => 'eEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'sEzsignbulksendDescription' => 'sEzsignbulksendDescription',
        'tEzsignbulksendNote' => 'tEzsignbulksendNote',
        'bEzsignbulksendNeedvalidation' => 'bEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'bEzsignbulksendIsactive',
        'objAudit' => 'objAudit',
        'aObjEzsignbulksenddocumentmapping' => 'a_objEzsignbulksenddocumentmapping',
        'aObjEzsignbulksendsignermapping' => 'a_objEzsignbulksendsignermapping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksendID' => 'setPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sLanguageNameX' => 'setSLanguageNameX',
        'eEzsignfoldertypePrivacylevel' => 'setEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'sEzsignbulksendDescription' => 'setSEzsignbulksendDescription',
        'tEzsignbulksendNote' => 'setTEzsignbulksendNote',
        'bEzsignbulksendNeedvalidation' => 'setBEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'setBEzsignbulksendIsactive',
        'objAudit' => 'setObjAudit',
        'aObjEzsignbulksenddocumentmapping' => 'setAObjEzsignbulksenddocumentmapping',
        'aObjEzsignbulksendsignermapping' => 'setAObjEzsignbulksendsignermapping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksendID' => 'getPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sLanguageNameX' => 'getSLanguageNameX',
        'eEzsignfoldertypePrivacylevel' => 'getEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'sEzsignbulksendDescription' => 'getSEzsignbulksendDescription',
        'tEzsignbulksendNote' => 'getTEzsignbulksendNote',
        'bEzsignbulksendNeedvalidation' => 'getBEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'getBEzsignbulksendIsactive',
        'objAudit' => 'getObjAudit',
        'aObjEzsignbulksenddocumentmapping' => 'getAObjEzsignbulksenddocumentmapping',
        'aObjEzsignbulksendsignermapping' => 'getAObjEzsignbulksendsignermapping'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pkiEzsignbulksendID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sLanguageNameX', $data ?? [], null);
        $this->setIfExists('eEzsignfoldertypePrivacylevel', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('sEzsignbulksendDescription', $data ?? [], null);
        $this->setIfExists('tEzsignbulksendNote', $data ?? [], null);
        $this->setIfExists('bEzsignbulksendNeedvalidation', $data ?? [], null);
        $this->setIfExists('bEzsignbulksendIsactive', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
        $this->setIfExists('aObjEzsignbulksenddocumentmapping', $data ?? [], null);
        $this->setIfExists('aObjEzsignbulksendsignermapping', $data ?? [], null);
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

        if ($this->container['pkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'pkiEzsignbulksendID' can't be null";
        }
        if (($this->container['pkiEzsignbulksendID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignbulksendID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['fkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
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
        if ($this->container['eEzsignfoldertypePrivacylevel'] === null) {
            $invalidProperties[] = "'eEzsignfoldertypePrivacylevel' can't be null";
        }
        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['sEzsignbulksendDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendDescription' can't be null";
        }
        if ($this->container['tEzsignbulksendNote'] === null) {
            $invalidProperties[] = "'tEzsignbulksendNote' can't be null";
        }
        if ($this->container['bEzsignbulksendNeedvalidation'] === null) {
            $invalidProperties[] = "'bEzsignbulksendNeedvalidation' can't be null";
        }
        if ($this->container['bEzsignbulksendIsactive'] === null) {
            $invalidProperties[] = "'bEzsignbulksendIsactive' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
        }
        if ($this->container['aObjEzsignbulksenddocumentmapping'] === null) {
            $invalidProperties[] = "'aObjEzsignbulksenddocumentmapping' can't be null";
        }
        if ($this->container['aObjEzsignbulksendsignermapping'] === null) {
            $invalidProperties[] = "'aObjEzsignbulksendsignermapping' can't be null";
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
     * Gets pkiEzsignbulksendID
     *
     * @return int
     */
    public function getPkiEzsignbulksendID()
    {
	//return $this->container['pkiEzsignbulksendID'];
        return $this->container['pkiEzsignbulksendID'];
    }

    /**
     * Sets pkiEzsignbulksendID
     *
     * @param int $pkiEzsignbulksendID The unique ID of the Ezsignbulksend
     *
     * @return self
     */
    public function setPkiEzsignbulksendID($pkiEzsignbulksendID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignbulksendID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignbulksendID cannot be null');
        //}

	//if (($pkiEzsignbulksendID < 0)) {
        if (($pkiEzsignbulksendID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksendID when calling EzsignbulksendResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignbulksendID)?'null':'"'.$pkiEzsignbulksendID.'"').' for pkiEzsignbulksendID when calling EzsignbulksendResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignbulksendID'] = $pkiEzsignbulksendID;
        $this->container['pkiEzsignbulksendID'] = (is_null($pkiEzsignbulksendID) ? null : (int) $pkiEzsignbulksendID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
	//return $this->container['fkiEzsignfoldertypeID'];
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}

	//if (($fkiEzsignfoldertypeID > 65535)) {
        if (($fkiEzsignfoldertypeID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignbulksendResponseCompound., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignfoldertypeID)?'null':'"'.$fkiEzsignfoldertypeID.'"').' for fkiEzsignfoldertypeID when calling EzsignbulksendResponseCompound., must be smaller than or equal to 65535.');
        }
	//if (($fkiEzsignfoldertypeID < 0)) {
        if (($fkiEzsignfoldertypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignbulksendResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignfoldertypeID)?'null':'"'.$fkiEzsignfoldertypeID.'"').' for fkiEzsignfoldertypeID when calling EzsignbulksendResponseCompound., must be bigger than or equal to 0.');
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
	//return $this->container['fkiLanguageID'];
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

	//if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignbulksendResponseCompound., must be smaller than or equal to 2.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzsignbulksendResponseCompound., must be smaller than or equal to 2.');
        }
	//if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignbulksendResponseCompound., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzsignbulksendResponseCompound., must be bigger than or equal to 1.');
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
	//return $this->container['sLanguageNameX'];
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
     * Gets eEzsignfoldertypePrivacylevel
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel
     */
    public function getEEzsignfoldertypePrivacylevel()
    {
	//return $this->container['eEzsignfoldertypePrivacylevel'];
        return $this->container['eEzsignfoldertypePrivacylevel'];
    }

    /**
     * Sets eEzsignfoldertypePrivacylevel
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel $eEzsignfoldertypePrivacylevel eEzsignfoldertypePrivacylevel
     *
     * @return self
     */
    public function setEEzsignfoldertypePrivacylevel($eEzsignfoldertypePrivacylevel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignfoldertypePrivacylevel)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfoldertypePrivacylevel cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignfoldertypePrivacylevel'] = $eEzsignfoldertypePrivacylevel;
        $this->container['eEzsignfoldertypePrivacylevel'] = $eEzsignfoldertypePrivacylevel;

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string
     */
    public function getSEzsignfoldertypeNameX()
    {
	//return $this->container['sEzsignfoldertypeNameX'];
        return is_null($this->container['sEzsignfoldertypeNameX']) ? null : trim($this->container['sEzsignfoldertypeNameX']);
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
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
     * Gets sEzsignbulksendDescription
     *
     * @return string
     */
    public function getSEzsignbulksendDescription()
    {
	//return $this->container['sEzsignbulksendDescription'];
        return is_null($this->container['sEzsignbulksendDescription']) ? null : trim($this->container['sEzsignbulksendDescription']);
    }

    /**
     * Sets sEzsignbulksendDescription
     *
     * @param string $sEzsignbulksendDescription The description of the Ezsignbulksend
     *
     * @return self
     */
    public function setSEzsignbulksendDescription($sEzsignbulksendDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignbulksendDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignbulksendDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignbulksendDescription'] = $sEzsignbulksendDescription;
        $this->container['sEzsignbulksendDescription'] = (is_null($sEzsignbulksendDescription) ? null : trim((string) $sEzsignbulksendDescription));

        return $this;
    }

    /**
     * Gets tEzsignbulksendNote
     *
     * @return string
     */
    public function getTEzsignbulksendNote()
    {
	//return $this->container['tEzsignbulksendNote'];
        return is_null($this->container['tEzsignbulksendNote']) ? null : trim($this->container['tEzsignbulksendNote']);
    }

    /**
     * Sets tEzsignbulksendNote
     *
     * @param string $tEzsignbulksendNote Note about the Ezsignbulksend
     *
     * @return self
     */
    public function setTEzsignbulksendNote($tEzsignbulksendNote)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tEzsignbulksendNote)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignbulksendNote cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tEzsignbulksendNote'] = $tEzsignbulksendNote;
        $this->container['tEzsignbulksendNote'] = (is_null($tEzsignbulksendNote) ? null : trim((string) $tEzsignbulksendNote));

        return $this;
    }

    /**
     * Gets bEzsignbulksendNeedvalidation
     *
     * @return bool
     */
    public function getBEzsignbulksendNeedvalidation()
    {
	//return $this->container['bEzsignbulksendNeedvalidation'];
        return $this->container['bEzsignbulksendNeedvalidation'];
    }

    /**
     * Sets bEzsignbulksendNeedvalidation
     *
     * @param bool $bEzsignbulksendNeedvalidation Whether the Ezsigntemplatepackage was automatically modified and needs a manual validation
     *
     * @return self
     */
    public function setBEzsignbulksendNeedvalidation($bEzsignbulksendNeedvalidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignbulksendNeedvalidation)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignbulksendNeedvalidation cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignbulksendNeedvalidation'] = $bEzsignbulksendNeedvalidation;
        $this->container['bEzsignbulksendNeedvalidation'] = (is_null($bEzsignbulksendNeedvalidation) ? null : (bool) $bEzsignbulksendNeedvalidation);

        return $this;
    }

    /**
     * Gets bEzsignbulksendIsactive
     *
     * @return bool
     */
    public function getBEzsignbulksendIsactive()
    {
	//return $this->container['bEzsignbulksendIsactive'];
        return $this->container['bEzsignbulksendIsactive'];
    }

    /**
     * Sets bEzsignbulksendIsactive
     *
     * @param bool $bEzsignbulksendIsactive Whether the Ezsignbulksend is active or not
     *
     * @return self
     */
    public function setBEzsignbulksendIsactive($bEzsignbulksendIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignbulksendIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignbulksendIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignbulksendIsactive'] = $bEzsignbulksendIsactive;
        $this->container['bEzsignbulksendIsactive'] = (is_null($bEzsignbulksendIsactive) ? null : (bool) $bEzsignbulksendIsactive);

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
	//return $this->container['objAudit'];
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
     * Gets aObjEzsignbulksenddocumentmapping
     *
     * @return \eZmaxAPI\Model\EzsignbulksenddocumentmappingResponseCompound[]
     */
    public function getAObjEzsignbulksenddocumentmapping()
    {
	//return $this->container['aObjEzsignbulksenddocumentmapping'];
        return $this->container['aObjEzsignbulksenddocumentmapping'];
    }

    /**
     * Sets aObjEzsignbulksenddocumentmapping
     *
     * @param \eZmaxAPI\Model\EzsignbulksenddocumentmappingResponseCompound[] $aObjEzsignbulksenddocumentmapping aObjEzsignbulksenddocumentmapping
     *
     * @return self
     */
    public function setAObjEzsignbulksenddocumentmapping($aObjEzsignbulksenddocumentmapping)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEzsignbulksenddocumentmapping)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignbulksenddocumentmapping cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEzsignbulksenddocumentmapping'] = $aObjEzsignbulksenddocumentmapping;
        $this->container['aObjEzsignbulksenddocumentmapping'] = $aObjEzsignbulksenddocumentmapping;

        return $this;
    }

    /**
     * Gets aObjEzsignbulksendsignermapping
     *
     * @return \eZmaxAPI\Model\EzsignbulksendsignermappingResponse[]
     */
    public function getAObjEzsignbulksendsignermapping()
    {
	//return $this->container['aObjEzsignbulksendsignermapping'];
        return $this->container['aObjEzsignbulksendsignermapping'];
    }

    /**
     * Sets aObjEzsignbulksendsignermapping
     *
     * @param \eZmaxAPI\Model\EzsignbulksendsignermappingResponse[] $aObjEzsignbulksendsignermapping aObjEzsignbulksendsignermapping
     *
     * @return self
     */
    public function setAObjEzsignbulksendsignermapping($aObjEzsignbulksendsignermapping)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEzsignbulksendsignermapping)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignbulksendsignermapping cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEzsignbulksendsignermapping'] = $aObjEzsignbulksendsignermapping;
        $this->container['aObjEzsignbulksendsignermapping'] = $aObjEzsignbulksendsignermapping;

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


