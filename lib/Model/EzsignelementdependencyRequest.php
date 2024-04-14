<?php
/**
 * EzsignelementdependencyRequest
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
 * EzsignelementdependencyRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsignelementdependency Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignelementdependencyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignelementdependency-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignelementdependencyID' => 'int',
        'fkiEzsignformfieldIDValidation' => 'int',
        'fkiEzsignformfieldgroupIDValidation' => 'int',
        'sEzsignelementdependencyEzsignformfieldgrouplabel' => 'string',
        'sEzsignelementdependencyEzsignformfieldlabel' => 'string',
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
        'fkiEzsignformfieldIDValidation' => null,
        'fkiEzsignformfieldgroupIDValidation' => null,
        'sEzsignelementdependencyEzsignformfieldgrouplabel' => null,
        'sEzsignelementdependencyEzsignformfieldlabel' => null,
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
		'fkiEzsignformfieldIDValidation' => false,
		'fkiEzsignformfieldgroupIDValidation' => false,
		'sEzsignelementdependencyEzsignformfieldgrouplabel' => false,
		'sEzsignelementdependencyEzsignformfieldlabel' => false,
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
        'fkiEzsignformfieldIDValidation' => 'fkiEzsignformfieldIDValidation',
        'fkiEzsignformfieldgroupIDValidation' => 'fkiEzsignformfieldgroupIDValidation',
        'sEzsignelementdependencyEzsignformfieldgrouplabel' => 'sEzsignelementdependencyEzsignformfieldgrouplabel',
        'sEzsignelementdependencyEzsignformfieldlabel' => 'sEzsignelementdependencyEzsignformfieldlabel',
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
        'fkiEzsignformfieldIDValidation' => 'setFkiEzsignformfieldIDValidation',
        'fkiEzsignformfieldgroupIDValidation' => 'setFkiEzsignformfieldgroupIDValidation',
        'sEzsignelementdependencyEzsignformfieldgrouplabel' => 'setSEzsignelementdependencyEzsignformfieldgrouplabel',
        'sEzsignelementdependencyEzsignformfieldlabel' => 'setSEzsignelementdependencyEzsignformfieldlabel',
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
        'fkiEzsignformfieldIDValidation' => 'getFkiEzsignformfieldIDValidation',
        'fkiEzsignformfieldgroupIDValidation' => 'getFkiEzsignformfieldgroupIDValidation',
        'sEzsignelementdependencyEzsignformfieldgrouplabel' => 'getSEzsignelementdependencyEzsignformfieldgrouplabel',
        'sEzsignelementdependencyEzsignformfieldlabel' => 'getSEzsignelementdependencyEzsignformfieldlabel',
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
        $this->setIfExists('fkiEzsignformfieldIDValidation', $data ?? [], null);
        $this->setIfExists('fkiEzsignformfieldgroupIDValidation', $data ?? [], null);
        $this->setIfExists('sEzsignelementdependencyEzsignformfieldgrouplabel', $data ?? [], null);
        $this->setIfExists('sEzsignelementdependencyEzsignformfieldlabel', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignelementdependencyID']) && ($this->container['pkiEzsignelementdependencyID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignelementdependencyID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['pkiEzsignelementdependencyID']) && ($this->container['pkiEzsignelementdependencyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignelementdependencyID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignformfieldIDValidation']) && ($this->container['fkiEzsignformfieldIDValidation'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignformfieldIDValidation', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignformfieldgroupIDValidation']) && ($this->container['fkiEzsignformfieldgroupIDValidation'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignformfieldgroupIDValidation', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sEzsignelementdependencyEzsignformfieldgrouplabel']) && (mb_strlen($this->container['sEzsignelementdependencyEzsignformfieldgrouplabel']) > 50)) {
            $invalidProperties[] = "invalid value for 'sEzsignelementdependencyEzsignformfieldgrouplabel', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['sEzsignelementdependencyEzsignformfieldgrouplabel']) && (mb_strlen($this->container['sEzsignelementdependencyEzsignformfieldgrouplabel']) < 1)) {
            $invalidProperties[] = "invalid value for 'sEzsignelementdependencyEzsignformfieldgrouplabel', the character length must be bigger than or equal to 1.";
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
     * @return int|null
     */
    public function getPkiEzsignelementdependencyID()
    {
        return $this->container['pkiEzsignelementdependencyID'];
    }

    /**
     * Sets pkiEzsignelementdependencyID
     *
     * @param int|null $pkiEzsignelementdependencyID The unique ID of the Ezsignelementdependency
     *
     * @return self
     */
    public function setPkiEzsignelementdependencyID($pkiEzsignelementdependencyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignelementdependencyID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignelementdependencyID cannot be null');
        //}

//        if (($pkiEzsignelementdependencyID > 65535)) {
        if (!is_null($pkiEzsignelementdependencyID) && ($pkiEzsignelementdependencyID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignelementdependencyID when calling EzsignelementdependencyRequest., must be smaller than or equal to 65535.');
        }
//        if (($pkiEzsignelementdependencyID < 0)) {
        if (!is_null($pkiEzsignelementdependencyID) && ($pkiEzsignelementdependencyID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignelementdependencyID when calling EzsignelementdependencyRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignelementdependencyID'] = $pkiEzsignelementdependencyID;
        $this->container['pkiEzsignelementdependencyID'] = (is_null($pkiEzsignelementdependencyID) ? null : (int) $pkiEzsignelementdependencyID);

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
            throw new \InvalidArgumentException('invalid value for $fkiEzsignformfieldIDValidation when calling EzsignelementdependencyRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $fkiEzsignformfieldgroupIDValidation when calling EzsignelementdependencyRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignformfieldgroupIDValidation'] = $fkiEzsignformfieldgroupIDValidation;
        $this->container['fkiEzsignformfieldgroupIDValidation'] = (is_null($fkiEzsignformfieldgroupIDValidation) ? null : (int) $fkiEzsignformfieldgroupIDValidation);

        return $this;
    }

    /**
     * Gets sEzsignelementdependencyEzsignformfieldgrouplabel
     *
     * @return string|null
     */
    public function getSEzsignelementdependencyEzsignformfieldgrouplabel()
    {
        return is_null($this->container['sEzsignelementdependencyEzsignformfieldgrouplabel']) ? null : trim($this->container['sEzsignelementdependencyEzsignformfieldgrouplabel']);
    }

    /**
     * Sets sEzsignelementdependencyEzsignformfieldgrouplabel
     *
     * @param string|null $sEzsignelementdependencyEzsignformfieldgrouplabel The Label for the Ezsignformfieldgroup
     *
     * @return self
     */
    public function setSEzsignelementdependencyEzsignformfieldgrouplabel($sEzsignelementdependencyEzsignformfieldgrouplabel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignelementdependencyEzsignformfieldgrouplabel)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignelementdependencyEzsignformfieldgrouplabel cannot be null');
        //}
//        if ((mb_strlen($sEzsignelementdependencyEzsignformfieldgrouplabel) > 50)) {
        if (!is_null($sEzsignelementdependencyEzsignformfieldgrouplabel) && (mb_strlen($sEzsignelementdependencyEzsignformfieldgrouplabel) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sEzsignelementdependencyEzsignformfieldgrouplabel when calling EzsignelementdependencyRequest., must be smaller than or equal to 50.');
        }
//        if ((mb_strlen($sEzsignelementdependencyEzsignformfieldgrouplabel) < 1)) {
        if (!is_null($sEzsignelementdependencyEzsignformfieldgrouplabel) && (mb_strlen($sEzsignelementdependencyEzsignformfieldgrouplabel) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sEzsignelementdependencyEzsignformfieldgrouplabel when calling EzsignelementdependencyRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignelementdependencyEzsignformfieldgrouplabel'] = $sEzsignelementdependencyEzsignformfieldgrouplabel;
        $this->container['sEzsignelementdependencyEzsignformfieldgrouplabel'] = (is_null($sEzsignelementdependencyEzsignformfieldgrouplabel) ? null : trim((string) $sEzsignelementdependencyEzsignformfieldgrouplabel));

        return $this;
    }

    /**
     * Gets sEzsignelementdependencyEzsignformfieldlabel
     *
     * @return string|null
     */
    public function getSEzsignelementdependencyEzsignformfieldlabel()
    {
        return is_null($this->container['sEzsignelementdependencyEzsignformfieldlabel']) ? null : trim($this->container['sEzsignelementdependencyEzsignformfieldlabel']);
    }

    /**
     * Sets sEzsignelementdependencyEzsignformfieldlabel
     *
     * @param string|null $sEzsignelementdependencyEzsignformfieldlabel The Label for the Ezsignformfield
     *
     * @return self
     */
    public function setSEzsignelementdependencyEzsignformfieldlabel($sEzsignelementdependencyEzsignformfieldlabel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignelementdependencyEzsignformfieldlabel)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignelementdependencyEzsignformfieldlabel cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignelementdependencyEzsignformfieldlabel'] = $sEzsignelementdependencyEzsignformfieldlabel;
        $this->container['sEzsignelementdependencyEzsignformfieldlabel'] = (is_null($sEzsignelementdependencyEzsignformfieldlabel) ? null : trim((string) $sEzsignelementdependencyEzsignformfieldlabel));

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
            throw new \InvalidArgumentException("invalid value for \$sEzsignelementdependencyValue when calling EzsignelementdependencyRequest., must conform to the pattern /^.{0,50}$/.");
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


