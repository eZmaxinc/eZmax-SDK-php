<?php
/**
 * EzsigntemplateelementdependencyRequestCompound
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
 * EzsigntemplateelementdependencyRequestCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplateelementdependency Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplateelementdependencyRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplateelementdependency-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplateelementdependencyID' => 'int',
        'fkiEzsigntemplateformfieldIDValidation' => 'int',
        'fkiEzsigntemplateformfieldgroupIDValidation' => 'int',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel' => 'string',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel' => 'string',
        'eEzsigntemplateelementdependencyValidation' => '\eZmaxAPI\Model\FieldEEzsigntemplateelementdependencyValidation',
        'bEzsigntemplateelementdependencySelected' => 'bool',
        'eEzsigntemplateelementdependencyOperator' => '\eZmaxAPI\Model\FieldEEzsigntemplateelementdependencyOperator',
        'sEzsigntemplateelementdependencyValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplateelementdependencyID' => null,
        'fkiEzsigntemplateformfieldIDValidation' => null,
        'fkiEzsigntemplateformfieldgroupIDValidation' => null,
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel' => null,
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel' => null,
        'eEzsigntemplateelementdependencyValidation' => null,
        'bEzsigntemplateelementdependencySelected' => null,
        'eEzsigntemplateelementdependencyOperator' => null,
        'sEzsigntemplateelementdependencyValue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplateelementdependencyID' => false,
		'fkiEzsigntemplateformfieldIDValidation' => false,
		'fkiEzsigntemplateformfieldgroupIDValidation' => false,
		'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel' => false,
		'sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel' => false,
		'eEzsigntemplateelementdependencyValidation' => false,
		'bEzsigntemplateelementdependencySelected' => false,
		'eEzsigntemplateelementdependencyOperator' => false,
		'sEzsigntemplateelementdependencyValue' => false
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
        'pkiEzsigntemplateelementdependencyID' => 'pkiEzsigntemplateelementdependencyID',
        'fkiEzsigntemplateformfieldIDValidation' => 'fkiEzsigntemplateformfieldIDValidation',
        'fkiEzsigntemplateformfieldgroupIDValidation' => 'fkiEzsigntemplateformfieldgroupIDValidation',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel' => 'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel' => 'sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel',
        'eEzsigntemplateelementdependencyValidation' => 'eEzsigntemplateelementdependencyValidation',
        'bEzsigntemplateelementdependencySelected' => 'bEzsigntemplateelementdependencySelected',
        'eEzsigntemplateelementdependencyOperator' => 'eEzsigntemplateelementdependencyOperator',
        'sEzsigntemplateelementdependencyValue' => 'sEzsigntemplateelementdependencyValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplateelementdependencyID' => 'setPkiEzsigntemplateelementdependencyID',
        'fkiEzsigntemplateformfieldIDValidation' => 'setFkiEzsigntemplateformfieldIDValidation',
        'fkiEzsigntemplateformfieldgroupIDValidation' => 'setFkiEzsigntemplateformfieldgroupIDValidation',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel' => 'setSEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel' => 'setSEzsigntemplateelementdependencyEzsigntemplateformfieldlabel',
        'eEzsigntemplateelementdependencyValidation' => 'setEEzsigntemplateelementdependencyValidation',
        'bEzsigntemplateelementdependencySelected' => 'setBEzsigntemplateelementdependencySelected',
        'eEzsigntemplateelementdependencyOperator' => 'setEEzsigntemplateelementdependencyOperator',
        'sEzsigntemplateelementdependencyValue' => 'setSEzsigntemplateelementdependencyValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplateelementdependencyID' => 'getPkiEzsigntemplateelementdependencyID',
        'fkiEzsigntemplateformfieldIDValidation' => 'getFkiEzsigntemplateformfieldIDValidation',
        'fkiEzsigntemplateformfieldgroupIDValidation' => 'getFkiEzsigntemplateformfieldgroupIDValidation',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel' => 'getSEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel',
        'sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel' => 'getSEzsigntemplateelementdependencyEzsigntemplateformfieldlabel',
        'eEzsigntemplateelementdependencyValidation' => 'getEEzsigntemplateelementdependencyValidation',
        'bEzsigntemplateelementdependencySelected' => 'getBEzsigntemplateelementdependencySelected',
        'eEzsigntemplateelementdependencyOperator' => 'getEEzsigntemplateelementdependencyOperator',
        'sEzsigntemplateelementdependencyValue' => 'getSEzsigntemplateelementdependencyValue'
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
        $this->setIfExists('pkiEzsigntemplateelementdependencyID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplateformfieldIDValidation', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplateformfieldgroupIDValidation', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateelementdependencyValidation', $data ?? [], null);
        $this->setIfExists('bEzsigntemplateelementdependencySelected', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateelementdependencyOperator', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateelementdependencyValue', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsigntemplateelementdependencyID']) && ($this->container['pkiEzsigntemplateelementdependencyID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplateelementdependencyID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['pkiEzsigntemplateelementdependencyID']) && ($this->container['pkiEzsigntemplateelementdependencyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplateelementdependencyID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplateformfieldIDValidation']) && ($this->container['fkiEzsigntemplateformfieldIDValidation'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateformfieldIDValidation', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplateformfieldgroupIDValidation']) && ($this->container['fkiEzsigntemplateformfieldgroupIDValidation'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateformfieldgroupIDValidation', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel']) && (mb_strlen($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel']) > 50)) {
            $invalidProperties[] = "invalid value for 'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel']) && (mb_strlen($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel']) < 1)) {
            $invalidProperties[] = "invalid value for 'sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['eEzsigntemplateelementdependencyValidation'] === null) {
            $invalidProperties[] = "'eEzsigntemplateelementdependencyValidation' can't be null";
        }
//        if (!is_null($this->container['sEzsigntemplateelementdependencyValue']) && !preg_match("/^.{0,50}$/", $this->container['sEzsigntemplateelementdependencyValue'])) {
        if (!is_null($this->container['sEzsigntemplateelementdependencyValue']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sEzsigntemplateelementdependencyValue'])) {
            $invalidProperties[] = "invalid value for 'sEzsigntemplateelementdependencyValue', must be conform to the pattern /^.{0,50}$/.";
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
     * Gets pkiEzsigntemplateelementdependencyID
     *
     * @return int|null
     */
    public function getPkiEzsigntemplateelementdependencyID()
    {
        return $this->container['pkiEzsigntemplateelementdependencyID'];
    }

    /**
     * Sets pkiEzsigntemplateelementdependencyID
     *
     * @param int|null $pkiEzsigntemplateelementdependencyID The unique ID of the Ezsigntemplateelementdependency
     *
     * @return self
     */
    public function setPkiEzsigntemplateelementdependencyID($pkiEzsigntemplateelementdependencyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplateelementdependencyID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplateelementdependencyID cannot be null');
        //}

//        if (($pkiEzsigntemplateelementdependencyID > 65535)) {
        if (!is_null($pkiEzsigntemplateelementdependencyID) && ($pkiEzsigntemplateelementdependencyID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplateelementdependencyID when calling EzsigntemplateelementdependencyRequestCompound., must be smaller than or equal to 65535.');
        }
//        if (($pkiEzsigntemplateelementdependencyID < 0)) {
        if (!is_null($pkiEzsigntemplateelementdependencyID) && ($pkiEzsigntemplateelementdependencyID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplateelementdependencyID when calling EzsigntemplateelementdependencyRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplateelementdependencyID'] = $pkiEzsigntemplateelementdependencyID;
        $this->container['pkiEzsigntemplateelementdependencyID'] = (is_null($pkiEzsigntemplateelementdependencyID) ? null : (int) $pkiEzsigntemplateelementdependencyID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateformfieldIDValidation
     *
     * @return int|null
     */
    public function getFkiEzsigntemplateformfieldIDValidation()
    {
        return $this->container['fkiEzsigntemplateformfieldIDValidation'];
    }

    /**
     * Sets fkiEzsigntemplateformfieldIDValidation
     *
     * @param int|null $fkiEzsigntemplateformfieldIDValidation The unique ID of the Ezsigntemplateformfield
     *
     * @return self
     */
    public function setFkiEzsigntemplateformfieldIDValidation($fkiEzsigntemplateformfieldIDValidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplateformfieldIDValidation)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateformfieldIDValidation cannot be null');
        //}

//        if (($fkiEzsigntemplateformfieldIDValidation < 0)) {
        if (!is_null($fkiEzsigntemplateformfieldIDValidation) && ($fkiEzsigntemplateformfieldIDValidation < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateformfieldIDValidation when calling EzsigntemplateelementdependencyRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplateformfieldIDValidation'] = $fkiEzsigntemplateformfieldIDValidation;
        $this->container['fkiEzsigntemplateformfieldIDValidation'] = (is_null($fkiEzsigntemplateformfieldIDValidation) ? null : (int) $fkiEzsigntemplateformfieldIDValidation);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateformfieldgroupIDValidation
     *
     * @return int|null
     */
    public function getFkiEzsigntemplateformfieldgroupIDValidation()
    {
        return $this->container['fkiEzsigntemplateformfieldgroupIDValidation'];
    }

    /**
     * Sets fkiEzsigntemplateformfieldgroupIDValidation
     *
     * @param int|null $fkiEzsigntemplateformfieldgroupIDValidation The unique ID of the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setFkiEzsigntemplateformfieldgroupIDValidation($fkiEzsigntemplateformfieldgroupIDValidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplateformfieldgroupIDValidation)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateformfieldgroupIDValidation cannot be null');
        //}

//        if (($fkiEzsigntemplateformfieldgroupIDValidation < 0)) {
        if (!is_null($fkiEzsigntemplateformfieldgroupIDValidation) && ($fkiEzsigntemplateformfieldgroupIDValidation < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateformfieldgroupIDValidation when calling EzsigntemplateelementdependencyRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplateformfieldgroupIDValidation'] = $fkiEzsigntemplateformfieldgroupIDValidation;
        $this->container['fkiEzsigntemplateformfieldgroupIDValidation'] = (is_null($fkiEzsigntemplateformfieldgroupIDValidation) ? null : (int) $fkiEzsigntemplateformfieldgroupIDValidation);

        return $this;
    }

    /**
     * Gets sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel
     *
     * @return string|null
     */
    public function getSEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel()
    {
        return is_null($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel']) ? null : trim($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel']);
    }

    /**
     * Sets sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel
     *
     * @param string|null $sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel The Label for the Ezsigntemplateformfieldgroup
     *
     * @return self
     */
    public function setSEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel cannot be null');
        //}
//        if ((mb_strlen($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel) > 50)) {
        if (!is_null($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel) && (mb_strlen($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel when calling EzsigntemplateelementdependencyRequestCompound., must be smaller than or equal to 50.');
        }
//        if ((mb_strlen($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel) < 1)) {
        if (!is_null($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel) && (mb_strlen($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel when calling EzsigntemplateelementdependencyRequestCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel'] = $sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel;
        $this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel'] = (is_null($sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel) ? null : trim((string) $sEzsigntemplateelementdependencyEzsigntemplateformfieldgrouplabel));

        return $this;
    }

    /**
     * Gets sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel
     *
     * @return string|null
     */
    public function getSEzsigntemplateelementdependencyEzsigntemplateformfieldlabel()
    {
        return is_null($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel']) ? null : trim($this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel']);
    }

    /**
     * Sets sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel
     *
     * @param string|null $sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel The Label for the Ezsigntemplateformfield
     *
     * @return self
     */
    public function setSEzsigntemplateelementdependencyEzsigntemplateformfieldlabel($sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel'] = $sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel;
        $this->container['sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel'] = (is_null($sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel) ? null : trim((string) $sEzsigntemplateelementdependencyEzsigntemplateformfieldlabel));

        return $this;
    }

    /**
     * Gets eEzsigntemplateelementdependencyValidation
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateelementdependencyValidation
     */
    public function getEEzsigntemplateelementdependencyValidation()
    {
        return $this->container['eEzsigntemplateelementdependencyValidation'];
    }

    /**
     * Sets eEzsigntemplateelementdependencyValidation
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateelementdependencyValidation $eEzsigntemplateelementdependencyValidation eEzsigntemplateelementdependencyValidation
     *
     * @return self
     */
    public function setEEzsigntemplateelementdependencyValidation($eEzsigntemplateelementdependencyValidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsigntemplateelementdependencyValidation)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateelementdependencyValidation cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsigntemplateelementdependencyValidation'] = $eEzsigntemplateelementdependencyValidation;
        $this->container['eEzsigntemplateelementdependencyValidation'] = $eEzsigntemplateelementdependencyValidation;

        return $this;
    }

    /**
     * Gets bEzsigntemplateelementdependencySelected
     *
     * @return bool|null
     */
    public function getBEzsigntemplateelementdependencySelected()
    {
        return $this->container['bEzsigntemplateelementdependencySelected'];
    }

    /**
     * Sets bEzsigntemplateelementdependencySelected
     *
     * @param bool|null $bEzsigntemplateelementdependencySelected Whether if it's selected or not when using eEzsigntemplateelementdependencyValidation = Selected
     *
     * @return self
     */
    public function setBEzsigntemplateelementdependencySelected($bEzsigntemplateelementdependencySelected)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsigntemplateelementdependencySelected)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplateelementdependencySelected cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsigntemplateelementdependencySelected'] = $bEzsigntemplateelementdependencySelected;
        $this->container['bEzsigntemplateelementdependencySelected'] = (is_null($bEzsigntemplateelementdependencySelected) ? null : (bool) $bEzsigntemplateelementdependencySelected);

        return $this;
    }

    /**
     * Gets eEzsigntemplateelementdependencyOperator
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateelementdependencyOperator|null
     */
    public function getEEzsigntemplateelementdependencyOperator()
    {
        return $this->container['eEzsigntemplateelementdependencyOperator'];
    }

    /**
     * Sets eEzsigntemplateelementdependencyOperator
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateelementdependencyOperator|null $eEzsigntemplateelementdependencyOperator eEzsigntemplateelementdependencyOperator
     *
     * @return self
     */
    public function setEEzsigntemplateelementdependencyOperator($eEzsigntemplateelementdependencyOperator)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsigntemplateelementdependencyOperator)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateelementdependencyOperator cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsigntemplateelementdependencyOperator'] = $eEzsigntemplateelementdependencyOperator;
        $this->container['eEzsigntemplateelementdependencyOperator'] = $eEzsigntemplateelementdependencyOperator;

        return $this;
    }

    /**
     * Gets sEzsigntemplateelementdependencyValue
     *
     * @return string|null
     */
    public function getSEzsigntemplateelementdependencyValue()
    {
        return is_null($this->container['sEzsigntemplateelementdependencyValue']) ? null : trim($this->container['sEzsigntemplateelementdependencyValue']);
    }

    /**
     * Sets sEzsigntemplateelementdependencyValue
     *
     * @param string|null $sEzsigntemplateelementdependencyValue The value of the Ezsignelementdependency
     *
     * @return self
     */
    public function setSEzsigntemplateelementdependencyValue($sEzsigntemplateelementdependencyValue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateelementdependencyValue)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateelementdependencyValue cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sEzsigntemplateelementdependencyValue)))) {
        if (!is_null($sEzsigntemplateelementdependencyValue) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sEzsigntemplateelementdependencyValue)))) {
            throw new \InvalidArgumentException("invalid value for \$sEzsigntemplateelementdependencyValue when calling EzsigntemplateelementdependencyRequestCompound., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateelementdependencyValue'] = $sEzsigntemplateelementdependencyValue;
        $this->container['sEzsigntemplateelementdependencyValue'] = (is_null($sEzsigntemplateelementdependencyValue) ? null : trim((string) $sEzsigntemplateelementdependencyValue));

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

