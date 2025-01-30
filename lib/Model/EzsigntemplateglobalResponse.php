<?php
/**
 * EzsigntemplateglobalResponse
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
 * EzsigntemplateglobalResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplateglobal Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplateglobalResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplateglobal-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplateglobalID' => 'int',
        'fkiEzsigntemplateglobaldocumentID' => 'int',
        'fkiModuleID' => 'int',
        'sModuleNameX' => 'string',
        'fkiLanguageID' => 'int',
        'sLanguageNameX' => 'string',
        'eEzsigntemplateglobalModule' => '\eZmaxAPI\Model\FieldEEzsigntemplateglobalModule',
        'eEzsigntemplateglobalSupplier' => '\eZmaxAPI\Model\FieldEEzsigntemplateglobalSupplier',
        'sEzsigntemplateglobalCode' => 'string',
        'sEzsigntemplateglobalDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplateglobalID' => null,
        'fkiEzsigntemplateglobaldocumentID' => null,
        'fkiModuleID' => null,
        'sModuleNameX' => null,
        'fkiLanguageID' => null,
        'sLanguageNameX' => null,
        'eEzsigntemplateglobalModule' => null,
        'eEzsigntemplateglobalSupplier' => null,
        'sEzsigntemplateglobalCode' => null,
        'sEzsigntemplateglobalDescription' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplateglobalID' => false,
		'fkiEzsigntemplateglobaldocumentID' => false,
		'fkiModuleID' => false,
		'sModuleNameX' => false,
		'fkiLanguageID' => false,
		'sLanguageNameX' => false,
		'eEzsigntemplateglobalModule' => false,
		'eEzsigntemplateglobalSupplier' => false,
		'sEzsigntemplateglobalCode' => false,
		'sEzsigntemplateglobalDescription' => false
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
        'pkiEzsigntemplateglobalID' => 'pkiEzsigntemplateglobalID',
        'fkiEzsigntemplateglobaldocumentID' => 'fkiEzsigntemplateglobaldocumentID',
        'fkiModuleID' => 'fkiModuleID',
        'sModuleNameX' => 'sModuleNameX',
        'fkiLanguageID' => 'fkiLanguageID',
        'sLanguageNameX' => 'sLanguageNameX',
        'eEzsigntemplateglobalModule' => 'eEzsigntemplateglobalModule',
        'eEzsigntemplateglobalSupplier' => 'eEzsigntemplateglobalSupplier',
        'sEzsigntemplateglobalCode' => 'sEzsigntemplateglobalCode',
        'sEzsigntemplateglobalDescription' => 'sEzsigntemplateglobalDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplateglobalID' => 'setPkiEzsigntemplateglobalID',
        'fkiEzsigntemplateglobaldocumentID' => 'setFkiEzsigntemplateglobaldocumentID',
        'fkiModuleID' => 'setFkiModuleID',
        'sModuleNameX' => 'setSModuleNameX',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sLanguageNameX' => 'setSLanguageNameX',
        'eEzsigntemplateglobalModule' => 'setEEzsigntemplateglobalModule',
        'eEzsigntemplateglobalSupplier' => 'setEEzsigntemplateglobalSupplier',
        'sEzsigntemplateglobalCode' => 'setSEzsigntemplateglobalCode',
        'sEzsigntemplateglobalDescription' => 'setSEzsigntemplateglobalDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplateglobalID' => 'getPkiEzsigntemplateglobalID',
        'fkiEzsigntemplateglobaldocumentID' => 'getFkiEzsigntemplateglobaldocumentID',
        'fkiModuleID' => 'getFkiModuleID',
        'sModuleNameX' => 'getSModuleNameX',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sLanguageNameX' => 'getSLanguageNameX',
        'eEzsigntemplateglobalModule' => 'getEEzsigntemplateglobalModule',
        'eEzsigntemplateglobalSupplier' => 'getEEzsigntemplateglobalSupplier',
        'sEzsigntemplateglobalCode' => 'getSEzsigntemplateglobalCode',
        'sEzsigntemplateglobalDescription' => 'getSEzsigntemplateglobalDescription'
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
        $this->setIfExists('pkiEzsigntemplateglobalID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplateglobaldocumentID', $data ?? [], null);
        $this->setIfExists('fkiModuleID', $data ?? [], null);
        $this->setIfExists('sModuleNameX', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sLanguageNameX', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateglobalModule', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateglobalSupplier', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateglobalCode', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateglobalDescription', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplateglobalID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplateglobalID' can't be null";
        }
        if (($this->container['pkiEzsigntemplateglobalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplateglobalID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplateglobaldocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplateglobaldocumentID' can't be null";
        }
        if (($this->container['fkiEzsigntemplateglobaldocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateglobaldocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiModuleID'] === null) {
            $invalidProperties[] = "'fkiModuleID' can't be null";
        }
        if (($this->container['fkiModuleID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiModuleID', must be bigger than or equal to 0.";
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
        if ($this->container['eEzsigntemplateglobalModule'] === null) {
            $invalidProperties[] = "'eEzsigntemplateglobalModule' can't be null";
        }
        if ($this->container['eEzsigntemplateglobalSupplier'] === null) {
            $invalidProperties[] = "'eEzsigntemplateglobalSupplier' can't be null";
        }
        if ($this->container['sEzsigntemplateglobalCode'] === null) {
            $invalidProperties[] = "'sEzsigntemplateglobalCode' can't be null";
        }
	//if (!preg_match("/^.{0,10}$/", $this->container['sEzsigntemplateglobalCode'])) {
        if (!is_null($this->container['sEzsigntemplateglobalCode']) && !preg_match("/(*UTF8)^.{0,10}$/", $this->container['sEzsigntemplateglobalCode'])) {
            $invalidProperties[] = "invalid value for 'sEzsigntemplateglobalCode', must be conform to the pattern /^.{0,10}$/.";
        }

        if ($this->container['sEzsigntemplateglobalDescription'] === null) {
            $invalidProperties[] = "'sEzsigntemplateglobalDescription' can't be null";
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
     * Gets pkiEzsigntemplateglobalID
     *
     * @return int
     */
    public function getPkiEzsigntemplateglobalID()
    {
	//return $this->container['pkiEzsigntemplateglobalID'];
        return $this->container['pkiEzsigntemplateglobalID'];
    }

    /**
     * Sets pkiEzsigntemplateglobalID
     *
     * @param int $pkiEzsigntemplateglobalID The unique ID of the Ezsigntemplateglobal
     *
     * @return self
     */
    public function setPkiEzsigntemplateglobalID($pkiEzsigntemplateglobalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplateglobalID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplateglobalID cannot be null');
        //}

	//if (($pkiEzsigntemplateglobalID < 0)) {
        if (($pkiEzsigntemplateglobalID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplateglobalID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsigntemplateglobalID)?'null':'"'.$pkiEzsigntemplateglobalID.'"').' for pkiEzsigntemplateglobalID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplateglobalID'] = $pkiEzsigntemplateglobalID;
        $this->container['pkiEzsigntemplateglobalID'] = (is_null($pkiEzsigntemplateglobalID) ? null : (int) $pkiEzsigntemplateglobalID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateglobaldocumentID
     *
     * @return int
     */
    public function getFkiEzsigntemplateglobaldocumentID()
    {
	//return $this->container['fkiEzsigntemplateglobaldocumentID'];
        return $this->container['fkiEzsigntemplateglobaldocumentID'];
    }

    /**
     * Sets fkiEzsigntemplateglobaldocumentID
     *
     * @param int $fkiEzsigntemplateglobaldocumentID The unique ID of the Ezsigntemplateglobaldocument
     *
     * @return self
     */
    public function setFkiEzsigntemplateglobaldocumentID($fkiEzsigntemplateglobaldocumentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplateglobaldocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateglobaldocumentID cannot be null');
        //}

	//if (($fkiEzsigntemplateglobaldocumentID < 0)) {
        if (($fkiEzsigntemplateglobaldocumentID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateglobaldocumentID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsigntemplateglobaldocumentID)?'null':'"'.$fkiEzsigntemplateglobaldocumentID.'"').' for fkiEzsigntemplateglobaldocumentID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplateglobaldocumentID'] = $fkiEzsigntemplateglobaldocumentID;
        $this->container['fkiEzsigntemplateglobaldocumentID'] = (is_null($fkiEzsigntemplateglobaldocumentID) ? null : (int) $fkiEzsigntemplateglobaldocumentID);

        return $this;
    }

    /**
     * Gets fkiModuleID
     *
     * @return int
     */
    public function getFkiModuleID()
    {
	//return $this->container['fkiModuleID'];
        return $this->container['fkiModuleID'];
    }

    /**
     * Sets fkiModuleID
     *
     * @param int $fkiModuleID The unique ID of the Module
     *
     * @return self
     */
    public function setFkiModuleID($fkiModuleID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiModuleID)) {
            //throw new \InvalidArgumentException('non-nullable fkiModuleID cannot be null');
        //}

	//if (($fkiModuleID < 0)) {
        if (($fkiModuleID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiModuleID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiModuleID)?'null':'"'.$fkiModuleID.'"').' for fkiModuleID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiModuleID'] = $fkiModuleID;
        $this->container['fkiModuleID'] = (is_null($fkiModuleID) ? null : (int) $fkiModuleID);

        return $this;
    }

    /**
     * Gets sModuleNameX
     *
     * @return string|null
     */
    public function getSModuleNameX()
    {
	//return $this->container['sModuleNameX'];
        return is_null($this->container['sModuleNameX']) ? null : trim($this->container['sModuleNameX']);
    }

    /**
     * Sets sModuleNameX
     *
     * @param string|null $sModuleNameX The Name of the Module in the language of the requester
     *
     * @return self
     */
    public function setSModuleNameX($sModuleNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sModuleNameX)) {
            //throw new \InvalidArgumentException('non-nullable sModuleNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sModuleNameX'] = $sModuleNameX;
        $this->container['sModuleNameX'] = (is_null($sModuleNameX) ? null : trim((string) $sModuleNameX));

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
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplateglobalResponse., must be smaller than or equal to 2.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzsigntemplateglobalResponse., must be smaller than or equal to 2.');
        }
	//if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzsigntemplateglobalResponse., must be bigger than or equal to 1.');
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
     * Gets eEzsigntemplateglobalModule
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateglobalModule
     */
    public function getEEzsigntemplateglobalModule()
    {
	//return $this->container['eEzsigntemplateglobalModule'];
        return $this->container['eEzsigntemplateglobalModule'];
    }

    /**
     * Sets eEzsigntemplateglobalModule
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateglobalModule $eEzsigntemplateglobalModule eEzsigntemplateglobalModule
     *
     * @return self
     */
    public function setEEzsigntemplateglobalModule($eEzsigntemplateglobalModule)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsigntemplateglobalModule)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateglobalModule cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsigntemplateglobalModule'] = $eEzsigntemplateglobalModule;
        $this->container['eEzsigntemplateglobalModule'] = $eEzsigntemplateglobalModule;

        return $this;
    }

    /**
     * Gets eEzsigntemplateglobalSupplier
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateglobalSupplier
     */
    public function getEEzsigntemplateglobalSupplier()
    {
	//return $this->container['eEzsigntemplateglobalSupplier'];
        return $this->container['eEzsigntemplateglobalSupplier'];
    }

    /**
     * Sets eEzsigntemplateglobalSupplier
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateglobalSupplier $eEzsigntemplateglobalSupplier eEzsigntemplateglobalSupplier
     *
     * @return self
     */
    public function setEEzsigntemplateglobalSupplier($eEzsigntemplateglobalSupplier)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsigntemplateglobalSupplier)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateglobalSupplier cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsigntemplateglobalSupplier'] = $eEzsigntemplateglobalSupplier;
        $this->container['eEzsigntemplateglobalSupplier'] = $eEzsigntemplateglobalSupplier;

        return $this;
    }

    /**
     * Gets sEzsigntemplateglobalCode
     *
     * @return string
     */
    public function getSEzsigntemplateglobalCode()
    {
	//return $this->container['sEzsigntemplateglobalCode'];
        return is_null($this->container['sEzsigntemplateglobalCode']) ? null : trim($this->container['sEzsigntemplateglobalCode']);
    }

    /**
     * Sets sEzsigntemplateglobalCode
     *
     * @param string $sEzsigntemplateglobalCode The Code of the Ezsigntemplateglobal
     *
     * @return self
     */
    public function setSEzsigntemplateglobalCode($sEzsigntemplateglobalCode)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateglobalCode)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateglobalCode cannot be null');
        //}

	//if ((!preg_match("/^.{0,10}$/", ObjectSerializer::toString($sEzsigntemplateglobalCode)))) {
        if (!is_null($sEzsigntemplateglobalCode) && (!preg_match("/(*UTF8)^.{0,10}$/", ObjectSerializer::toString($sEzsigntemplateglobalCode)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sEzsigntemplateglobalCode when calling EzsigntemplateglobalResponse., must conform to the pattern /^.{0,10}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEzsigntemplateglobalCode)?'null':'"'.$sEzsigntemplateglobalCode.'"')." for sEzsigntemplateglobalCode when calling EzsigntemplateglobalResponse., must conform to the pattern /^.{0,10}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateglobalCode'] = $sEzsigntemplateglobalCode;
        $this->container['sEzsigntemplateglobalCode'] = (is_null($sEzsigntemplateglobalCode) ? null : trim((string) $sEzsigntemplateglobalCode));

        return $this;
    }

    /**
     * Gets sEzsigntemplateglobalDescription
     *
     * @return string
     */
    public function getSEzsigntemplateglobalDescription()
    {
	//return $this->container['sEzsigntemplateglobalDescription'];
        return is_null($this->container['sEzsigntemplateglobalDescription']) ? null : trim($this->container['sEzsigntemplateglobalDescription']);
    }

    /**
     * Sets sEzsigntemplateglobalDescription
     *
     * @param string $sEzsigntemplateglobalDescription The description of the Ezsigntemplate
     *
     * @return self
     */
    public function setSEzsigntemplateglobalDescription($sEzsigntemplateglobalDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateglobalDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateglobalDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateglobalDescription'] = $sEzsigntemplateglobalDescription;
        $this->container['sEzsigntemplateglobalDescription'] = (is_null($sEzsigntemplateglobalDescription) ? null : trim((string) $sEzsigntemplateglobalDescription));

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


