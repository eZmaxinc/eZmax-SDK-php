<?php
/**
 * EzsignelementdependencyResponseCompound
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
 * Generator version: 7.9.0
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
 * EzsignelementdependencyResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignelementdependency Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignelementdependencyResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignelementdependency-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignelementdependencyID' => 'int',
        'fkiEzsignformfieldID' => 'int',
        'fkiEzsignsignatureID' => 'int',
        'fkiEzsignformfieldIDValidation' => 'int',
        'fkiEzsignformfieldgroupIDValidation' => 'int',
        'eEzsignelementdependencyValidation' => '\eZmaxAPI\Model\FieldEEzsignelementdependencyValidation',
        'bEzsignelementdependencySelected' => 'bool',
        'eEzsignelementdependencyOperator' => '\eZmaxAPI\Model\FieldEEzsignelementdependencyOperator',
        'sEzsignelementdependencyValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignelementdependencyID' => null,
        'fkiEzsignformfieldID' => null,
        'fkiEzsignsignatureID' => null,
        'fkiEzsignformfieldIDValidation' => null,
        'fkiEzsignformfieldgroupIDValidation' => null,
        'eEzsignelementdependencyValidation' => null,
        'bEzsignelementdependencySelected' => null,
        'eEzsignelementdependencyOperator' => null,
        'sEzsignelementdependencyValue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignelementdependencyID' => false,
		'fkiEzsignformfieldID' => false,
		'fkiEzsignsignatureID' => false,
		'fkiEzsignformfieldIDValidation' => false,
		'fkiEzsignformfieldgroupIDValidation' => false,
		'eEzsignelementdependencyValidation' => false,
		'bEzsignelementdependencySelected' => false,
		'eEzsignelementdependencyOperator' => false,
		'sEzsignelementdependencyValue' => false
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
        'pkiEzsignelementdependencyID' => 'pkiEzsignelementdependencyID',
        'fkiEzsignformfieldID' => 'fkiEzsignformfieldID',
        'fkiEzsignsignatureID' => 'fkiEzsignsignatureID',
        'fkiEzsignformfieldIDValidation' => 'fkiEzsignformfieldIDValidation',
        'fkiEzsignformfieldgroupIDValidation' => 'fkiEzsignformfieldgroupIDValidation',
        'eEzsignelementdependencyValidation' => 'eEzsignelementdependencyValidation',
        'bEzsignelementdependencySelected' => 'bEzsignelementdependencySelected',
        'eEzsignelementdependencyOperator' => 'eEzsignelementdependencyOperator',
        'sEzsignelementdependencyValue' => 'sEzsignelementdependencyValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignelementdependencyID' => 'setPkiEzsignelementdependencyID',
        'fkiEzsignformfieldID' => 'setFkiEzsignformfieldID',
        'fkiEzsignsignatureID' => 'setFkiEzsignsignatureID',
        'fkiEzsignformfieldIDValidation' => 'setFkiEzsignformfieldIDValidation',
        'fkiEzsignformfieldgroupIDValidation' => 'setFkiEzsignformfieldgroupIDValidation',
        'eEzsignelementdependencyValidation' => 'setEEzsignelementdependencyValidation',
        'bEzsignelementdependencySelected' => 'setBEzsignelementdependencySelected',
        'eEzsignelementdependencyOperator' => 'setEEzsignelementdependencyOperator',
        'sEzsignelementdependencyValue' => 'setSEzsignelementdependencyValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignelementdependencyID' => 'getPkiEzsignelementdependencyID',
        'fkiEzsignformfieldID' => 'getFkiEzsignformfieldID',
        'fkiEzsignsignatureID' => 'getFkiEzsignsignatureID',
        'fkiEzsignformfieldIDValidation' => 'getFkiEzsignformfieldIDValidation',
        'fkiEzsignformfieldgroupIDValidation' => 'getFkiEzsignformfieldgroupIDValidation',
        'eEzsignelementdependencyValidation' => 'getEEzsignelementdependencyValidation',
        'bEzsignelementdependencySelected' => 'getBEzsignelementdependencySelected',
        'eEzsignelementdependencyOperator' => 'getEEzsignelementdependencyOperator',
        'sEzsignelementdependencyValue' => 'getSEzsignelementdependencyValue'
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
        $this->setIfExists('pkiEzsignelementdependencyID', $data ?? [], null);
        $this->setIfExists('fkiEzsignformfieldID', $data ?? [], null);
        $this->setIfExists('fkiEzsignsignatureID', $data ?? [], null);
        $this->setIfExists('fkiEzsignformfieldIDValidation', $data ?? [], null);
        $this->setIfExists('fkiEzsignformfieldgroupIDValidation', $data ?? [], null);
        $this->setIfExists('eEzsignelementdependencyValidation', $data ?? [], null);
        $this->setIfExists('bEzsignelementdependencySelected', $data ?? [], null);
        $this->setIfExists('eEzsignelementdependencyOperator', $data ?? [], null);
        $this->setIfExists('sEzsignelementdependencyValue', $data ?? [], null);
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

        if ($this->container['pkiEzsignelementdependencyID'] === null) {
            $invalidProperties[] = "'pkiEzsignelementdependencyID' can't be null";
        }
        if (($this->container['pkiEzsignelementdependencyID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignelementdependencyID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['pkiEzsignelementdependencyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignelementdependencyID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignformfieldID']) && ($this->container['fkiEzsignformfieldID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignformfieldID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignsignatureID']) && ($this->container['fkiEzsignsignatureID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignsignatureID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignformfieldIDValidation']) && ($this->container['fkiEzsignformfieldIDValidation'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignformfieldIDValidation', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignformfieldgroupIDValidation']) && ($this->container['fkiEzsignformfieldgroupIDValidation'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignformfieldgroupIDValidation', must be bigger than or equal to 0.";
        }

        if ($this->container['eEzsignelementdependencyValidation'] === null) {
            $invalidProperties[] = "'eEzsignelementdependencyValidation' can't be null";
        }
//        if (!is_null($this->container['sEzsignelementdependencyValue']) && !preg_match("/^.{0,50}$/", $this->container['sEzsignelementdependencyValue'])) {
        if (!is_null($this->container['sEzsignelementdependencyValue']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sEzsignelementdependencyValue'])) {
            $invalidProperties[] = "invalid value for 'sEzsignelementdependencyValue', must be conform to the pattern /^.{0,50}$/.";
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
     * Gets pkiEzsignelementdependencyID
     *
     * @return int
     */
    public function getPkiEzsignelementdependencyID()
    {
        return $this->container['pkiEzsignelementdependencyID'];
    }

    /**
     * Sets pkiEzsignelementdependencyID
     *
     * @param int $pkiEzsignelementdependencyID The unique ID of the Ezsignelementdependency
     *
     * @return self
     */
    public function setPkiEzsignelementdependencyID($pkiEzsignelementdependencyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignelementdependencyID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignelementdependencyID cannot be null');
        //}

//        if (($pkiEzsignelementdependencyID > 16777215)) {
        if (($pkiEzsignelementdependencyID > 16777215)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignelementdependencyID)?'null':'"'.$pkiEzsignelementdependencyID.'"').' for pkiEzsignelementdependencyID when calling EzsignelementdependencyResponseCompound., must be smaller than or equal to 16777215.');
        }
//        if (($pkiEzsignelementdependencyID < 0)) {
        if (($pkiEzsignelementdependencyID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignelementdependencyID)?'null':'"'.$pkiEzsignelementdependencyID.'"').' for pkiEzsignelementdependencyID when calling EzsignelementdependencyResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignelementdependencyID'] = $pkiEzsignelementdependencyID;
        $this->container['pkiEzsignelementdependencyID'] = (is_null($pkiEzsignelementdependencyID) ? null : (int) $pkiEzsignelementdependencyID);

        return $this;
    }

    /**
     * Gets fkiEzsignformfieldID
     *
     * @return int|null
     */
    public function getFkiEzsignformfieldID()
    {
        return $this->container['fkiEzsignformfieldID'];
    }

    /**
     * Sets fkiEzsignformfieldID
     *
     * @param int|null $fkiEzsignformfieldID The unique ID of the Ezsignformfield
     *
     * @return self
     */
    public function setFkiEzsignformfieldID($fkiEzsignformfieldID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignformfieldID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignformfieldID cannot be null');
        //}

//        if (($fkiEzsignformfieldID < 0)) {
        if (!is_null($fkiEzsignformfieldID) && ($fkiEzsignformfieldID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignformfieldID)?'null':'"'.$fkiEzsignformfieldID.'"').' for fkiEzsignformfieldID when calling EzsignelementdependencyResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignformfieldID'] = $fkiEzsignformfieldID;
        $this->container['fkiEzsignformfieldID'] = (is_null($fkiEzsignformfieldID) ? null : (int) $fkiEzsignformfieldID);

        return $this;
    }

    /**
     * Gets fkiEzsignsignatureID
     *
     * @return int|null
     */
    public function getFkiEzsignsignatureID()
    {
        return $this->container['fkiEzsignsignatureID'];
    }

    /**
     * Sets fkiEzsignsignatureID
     *
     * @param int|null $fkiEzsignsignatureID The unique ID of the Ezsignsignature
     *
     * @return self
     */
    public function setFkiEzsignsignatureID($fkiEzsignsignatureID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignsignatureID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignsignatureID cannot be null');
        //}

//        if (($fkiEzsignsignatureID < 0)) {
        if (!is_null($fkiEzsignsignatureID) && ($fkiEzsignsignatureID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignsignatureID)?'null':'"'.$fkiEzsignsignatureID.'"').' for fkiEzsignsignatureID when calling EzsignelementdependencyResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignsignatureID'] = $fkiEzsignsignatureID;
        $this->container['fkiEzsignsignatureID'] = (is_null($fkiEzsignsignatureID) ? null : (int) $fkiEzsignsignatureID);

        return $this;
    }

    /**
     * Gets fkiEzsignformfieldIDValidation
     *
     * @return int|null
     */
    public function getFkiEzsignformfieldIDValidation()
    {
        return $this->container['fkiEzsignformfieldIDValidation'];
    }

    /**
     * Sets fkiEzsignformfieldIDValidation
     *
     * @param int|null $fkiEzsignformfieldIDValidation The unique ID of the Ezsignformfield
     *
     * @return self
     */
    public function setFkiEzsignformfieldIDValidation($fkiEzsignformfieldIDValidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignformfieldIDValidation)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignformfieldIDValidation cannot be null');
        //}

//        if (($fkiEzsignformfieldIDValidation < 0)) {
        if (!is_null($fkiEzsignformfieldIDValidation) && ($fkiEzsignformfieldIDValidation < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignformfieldIDValidation)?'null':'"'.$fkiEzsignformfieldIDValidation.'"').' for fkiEzsignformfieldIDValidation when calling EzsignelementdependencyResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignformfieldIDValidation'] = $fkiEzsignformfieldIDValidation;
        $this->container['fkiEzsignformfieldIDValidation'] = (is_null($fkiEzsignformfieldIDValidation) ? null : (int) $fkiEzsignformfieldIDValidation);

        return $this;
    }

    /**
     * Gets fkiEzsignformfieldgroupIDValidation
     *
     * @return int|null
     */
    public function getFkiEzsignformfieldgroupIDValidation()
    {
        return $this->container['fkiEzsignformfieldgroupIDValidation'];
    }

    /**
     * Sets fkiEzsignformfieldgroupIDValidation
     *
     * @param int|null $fkiEzsignformfieldgroupIDValidation The unique ID of the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setFkiEzsignformfieldgroupIDValidation($fkiEzsignformfieldgroupIDValidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignformfieldgroupIDValidation)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignformfieldgroupIDValidation cannot be null');
        //}

//        if (($fkiEzsignformfieldgroupIDValidation < 0)) {
        if (!is_null($fkiEzsignformfieldgroupIDValidation) && ($fkiEzsignformfieldgroupIDValidation < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignformfieldgroupIDValidation)?'null':'"'.$fkiEzsignformfieldgroupIDValidation.'"').' for fkiEzsignformfieldgroupIDValidation when calling EzsignelementdependencyResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignformfieldgroupIDValidation'] = $fkiEzsignformfieldgroupIDValidation;
        $this->container['fkiEzsignformfieldgroupIDValidation'] = (is_null($fkiEzsignformfieldgroupIDValidation) ? null : (int) $fkiEzsignformfieldgroupIDValidation);

        return $this;
    }

    /**
     * Gets eEzsignelementdependencyValidation
     *
     * @return \eZmaxAPI\Model\FieldEEzsignelementdependencyValidation
     */
    public function getEEzsignelementdependencyValidation()
    {
        return $this->container['eEzsignelementdependencyValidation'];
    }

    /**
     * Sets eEzsignelementdependencyValidation
     *
     * @param \eZmaxAPI\Model\FieldEEzsignelementdependencyValidation $eEzsignelementdependencyValidation eEzsignelementdependencyValidation
     *
     * @return self
     */
    public function setEEzsignelementdependencyValidation($eEzsignelementdependencyValidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignelementdependencyValidation)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignelementdependencyValidation cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignelementdependencyValidation'] = $eEzsignelementdependencyValidation;
        $this->container['eEzsignelementdependencyValidation'] = $eEzsignelementdependencyValidation;

        return $this;
    }

    /**
     * Gets bEzsignelementdependencySelected
     *
     * @return bool|null
     */
    public function getBEzsignelementdependencySelected()
    {
        return $this->container['bEzsignelementdependencySelected'];
    }

    /**
     * Sets bEzsignelementdependencySelected
     *
     * @param bool|null $bEzsignelementdependencySelected Whether if it's selected or not when using eEzsignelementdependencyValidation = Selected
     *
     * @return self
     */
    public function setBEzsignelementdependencySelected($bEzsignelementdependencySelected)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignelementdependencySelected)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignelementdependencySelected cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignelementdependencySelected'] = $bEzsignelementdependencySelected;
        $this->container['bEzsignelementdependencySelected'] = (is_null($bEzsignelementdependencySelected) ? null : (bool) $bEzsignelementdependencySelected);

        return $this;
    }

    /**
     * Gets eEzsignelementdependencyOperator
     *
     * @return \eZmaxAPI\Model\FieldEEzsignelementdependencyOperator|null
     */
    public function getEEzsignelementdependencyOperator()
    {
        return $this->container['eEzsignelementdependencyOperator'];
    }

    /**
     * Sets eEzsignelementdependencyOperator
     *
     * @param \eZmaxAPI\Model\FieldEEzsignelementdependencyOperator|null $eEzsignelementdependencyOperator eEzsignelementdependencyOperator
     *
     * @return self
     */
    public function setEEzsignelementdependencyOperator($eEzsignelementdependencyOperator)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignelementdependencyOperator)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignelementdependencyOperator cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignelementdependencyOperator'] = $eEzsignelementdependencyOperator;
        $this->container['eEzsignelementdependencyOperator'] = $eEzsignelementdependencyOperator;

        return $this;
    }

    /**
     * Gets sEzsignelementdependencyValue
     *
     * @return string|null
     */
    public function getSEzsignelementdependencyValue()
    {
        return is_null($this->container['sEzsignelementdependencyValue']) ? null : trim($this->container['sEzsignelementdependencyValue']);
    }

    /**
     * Sets sEzsignelementdependencyValue
     *
     * @param string|null $sEzsignelementdependencyValue The value of the Ezsignelementdependency
     *
     * @return self
     */
    public function setSEzsignelementdependencyValue($sEzsignelementdependencyValue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignelementdependencyValue)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignelementdependencyValue cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sEzsignelementdependencyValue)))) {
        if (!is_null($sEzsignelementdependencyValue) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sEzsignelementdependencyValue)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($sEzsignelementdependencyValue)?'null':'"'.$sEzsignelementdependencyValue.'"')." for sEzsignelementdependencyValue when calling EzsignelementdependencyResponseCompound., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignelementdependencyValue'] = $sEzsignelementdependencyValue;
        $this->container['sEzsignelementdependencyValue'] = (is_null($sEzsignelementdependencyValue) ? null : trim((string) $sEzsignelementdependencyValue));

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


