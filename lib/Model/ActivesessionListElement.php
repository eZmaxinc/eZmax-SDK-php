<?php
/**
 * ActivesessionListElement
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
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
 * ActivesessionListElement Class Doc Comment
 *
 * @category Class
 * @description A Activesession List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ActivesessionListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'activesession-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiActivesessionID' => 'int',
        'fkiUserID' => 'int',
        'fkiComputerID' => 'int',
        'fkiCompanyID' => 'int',
        'fkiDepartmentID' => 'int',
        'sCompanyNameX' => 'string',
        'sDepartmentNameX' => 'string',
        'sActivesessionLoginname' => 'string',
        'sComputerDescription' => 'string',
        'dtActivesessionFirsthit' => 'string',
        'dtActivesessionLasthit' => 'string',
        'sActivesessionIP' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiActivesessionID' => null,
        'fkiUserID' => null,
        'fkiComputerID' => null,
        'fkiCompanyID' => null,
        'fkiDepartmentID' => null,
        'sCompanyNameX' => null,
        'sDepartmentNameX' => null,
        'sActivesessionLoginname' => null,
        'sComputerDescription' => null,
        'dtActivesessionFirsthit' => null,
        'dtActivesessionLasthit' => null,
        'sActivesessionIP' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiActivesessionID' => false,
		'fkiUserID' => false,
		'fkiComputerID' => false,
		'fkiCompanyID' => false,
		'fkiDepartmentID' => false,
		'sCompanyNameX' => false,
		'sDepartmentNameX' => false,
		'sActivesessionLoginname' => false,
		'sComputerDescription' => false,
		'dtActivesessionFirsthit' => false,
		'dtActivesessionLasthit' => false,
		'sActivesessionIP' => false
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
        'pkiActivesessionID' => 'pkiActivesessionID',
        'fkiUserID' => 'fkiUserID',
        'fkiComputerID' => 'fkiComputerID',
        'fkiCompanyID' => 'fkiCompanyID',
        'fkiDepartmentID' => 'fkiDepartmentID',
        'sCompanyNameX' => 'sCompanyNameX',
        'sDepartmentNameX' => 'sDepartmentNameX',
        'sActivesessionLoginname' => 'sActivesessionLoginname',
        'sComputerDescription' => 'sComputerDescription',
        'dtActivesessionFirsthit' => 'dtActivesessionFirsthit',
        'dtActivesessionLasthit' => 'dtActivesessionLasthit',
        'sActivesessionIP' => 'sActivesessionIP'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiActivesessionID' => 'setPkiActivesessionID',
        'fkiUserID' => 'setFkiUserID',
        'fkiComputerID' => 'setFkiComputerID',
        'fkiCompanyID' => 'setFkiCompanyID',
        'fkiDepartmentID' => 'setFkiDepartmentID',
        'sCompanyNameX' => 'setSCompanyNameX',
        'sDepartmentNameX' => 'setSDepartmentNameX',
        'sActivesessionLoginname' => 'setSActivesessionLoginname',
        'sComputerDescription' => 'setSComputerDescription',
        'dtActivesessionFirsthit' => 'setDtActivesessionFirsthit',
        'dtActivesessionLasthit' => 'setDtActivesessionLasthit',
        'sActivesessionIP' => 'setSActivesessionIP'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiActivesessionID' => 'getPkiActivesessionID',
        'fkiUserID' => 'getFkiUserID',
        'fkiComputerID' => 'getFkiComputerID',
        'fkiCompanyID' => 'getFkiCompanyID',
        'fkiDepartmentID' => 'getFkiDepartmentID',
        'sCompanyNameX' => 'getSCompanyNameX',
        'sDepartmentNameX' => 'getSDepartmentNameX',
        'sActivesessionLoginname' => 'getSActivesessionLoginname',
        'sComputerDescription' => 'getSComputerDescription',
        'dtActivesessionFirsthit' => 'getDtActivesessionFirsthit',
        'dtActivesessionLasthit' => 'getDtActivesessionLasthit',
        'sActivesessionIP' => 'getSActivesessionIP'
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
        $this->setIfExists('pkiActivesessionID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('fkiComputerID', $data ?? [], null);
        $this->setIfExists('fkiCompanyID', $data ?? [], null);
        $this->setIfExists('fkiDepartmentID', $data ?? [], null);
        $this->setIfExists('sCompanyNameX', $data ?? [], null);
        $this->setIfExists('sDepartmentNameX', $data ?? [], null);
        $this->setIfExists('sActivesessionLoginname', $data ?? [], null);
        $this->setIfExists('sComputerDescription', $data ?? [], null);
        $this->setIfExists('dtActivesessionFirsthit', $data ?? [], null);
        $this->setIfExists('dtActivesessionLasthit', $data ?? [], null);
        $this->setIfExists('sActivesessionIP', $data ?? [], null);
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

        if ($this->container['pkiActivesessionID'] === null) {
            $invalidProperties[] = "'pkiActivesessionID' can't be null";
        }
        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if (($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiComputerID'] === null) {
            $invalidProperties[] = "'fkiComputerID' can't be null";
        }
        if (($this->container['fkiComputerID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiComputerID', must be smaller than or equal to 65535.";
        }

        if (($this->container['fkiComputerID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiComputerID', must be bigger than or equal to 1.";
        }

        if ($this->container['fkiCompanyID'] === null) {
            $invalidProperties[] = "'fkiCompanyID' can't be null";
        }
        if (($this->container['fkiCompanyID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiCompanyID', must be smaller than or equal to 255.";
        }

        if (($this->container['fkiCompanyID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiCompanyID', must be bigger than or equal to 1.";
        }

        if ($this->container['fkiDepartmentID'] === null) {
            $invalidProperties[] = "'fkiDepartmentID' can't be null";
        }
        if (($this->container['fkiDepartmentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiDepartmentID', must be bigger than or equal to 0.";
        }

        if ($this->container['sCompanyNameX'] === null) {
            $invalidProperties[] = "'sCompanyNameX' can't be null";
        }
        if ($this->container['sDepartmentNameX'] === null) {
            $invalidProperties[] = "'sDepartmentNameX' can't be null";
        }
        if ($this->container['sActivesessionLoginname'] === null) {
            $invalidProperties[] = "'sActivesessionLoginname' can't be null";
        }
//        if (!preg_match("/^.{0,32}$/", $this->container['sActivesessionLoginname'])) {
        if (!is_null($this->container['sActivesessionLoginname']) && !preg_match("/(*UTF8)^.{0,32}$/", $this->container['sActivesessionLoginname'])) {
            $invalidProperties[] = "invalid value for 'sActivesessionLoginname', must be conform to the pattern /^.{0,32}$/.";
        }

        if ($this->container['sComputerDescription'] === null) {
            $invalidProperties[] = "'sComputerDescription' can't be null";
        }
//        if (!preg_match("/^.{0,50}$/", $this->container['sComputerDescription'])) {
        if (!is_null($this->container['sComputerDescription']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sComputerDescription'])) {
            $invalidProperties[] = "invalid value for 'sComputerDescription', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['dtActivesessionFirsthit'] === null) {
            $invalidProperties[] = "'dtActivesessionFirsthit' can't be null";
        }
//        if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtActivesessionFirsthit'])) {
        if (!is_null($this->container['dtActivesessionFirsthit']) && !preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtActivesessionFirsthit'])) {
            $invalidProperties[] = "invalid value for 'dtActivesessionFirsthit', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.";
        }

        if ($this->container['dtActivesessionLasthit'] === null) {
            $invalidProperties[] = "'dtActivesessionLasthit' can't be null";
        }
//        if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtActivesessionLasthit'])) {
        if (!is_null($this->container['dtActivesessionLasthit']) && !preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtActivesessionLasthit'])) {
            $invalidProperties[] = "invalid value for 'dtActivesessionLasthit', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.";
        }

        if ($this->container['sActivesessionIP'] === null) {
            $invalidProperties[] = "'sActivesessionIP' can't be null";
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
     * Gets pkiActivesessionID
     *
     * @return int
     */
    public function getPkiActivesessionID()
    {
        return $this->container['pkiActivesessionID'];
    }

    /**
     * Sets pkiActivesessionID
     *
     * @param int $pkiActivesessionID The unique ID of the Activesession
     *
     * @return self
     */
    public function setPkiActivesessionID($pkiActivesessionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiActivesessionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiActivesessionID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiActivesessionID'] = $pkiActivesessionID;
        $this->container['pkiActivesessionID'] = (is_null($pkiActivesessionID) ? null : (int) $pkiActivesessionID);

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserID cannot be null');
        //}

//        if (($fkiUserID < 0)) {
        if (($fkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserID when calling ActivesessionListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets fkiComputerID
     *
     * @return int
     */
    public function getFkiComputerID()
    {
        return $this->container['fkiComputerID'];
    }

    /**
     * Sets fkiComputerID
     *
     * @param int $fkiComputerID The unique ID of the Computer
     *
     * @return self
     */
    public function setFkiComputerID($fkiComputerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiComputerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiComputerID cannot be null');
        //}

//        if (($fkiComputerID > 65535)) {
        if (($fkiComputerID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiComputerID when calling ActivesessionListElement., must be smaller than or equal to 65535.');
        }
//        if (($fkiComputerID < 1)) {
        if (($fkiComputerID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiComputerID when calling ActivesessionListElement., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiComputerID'] = $fkiComputerID;
        $this->container['fkiComputerID'] = (is_null($fkiComputerID) ? null : (int) $fkiComputerID);

        return $this;
    }

    /**
     * Gets fkiCompanyID
     *
     * @return int
     */
    public function getFkiCompanyID()
    {
        return $this->container['fkiCompanyID'];
    }

    /**
     * Sets fkiCompanyID
     *
     * @param int $fkiCompanyID The unique ID of the Company
     *
     * @return self
     */
    public function setFkiCompanyID($fkiCompanyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiCompanyID)) {
            //throw new \InvalidArgumentException('non-nullable fkiCompanyID cannot be null');
        //}

//        if (($fkiCompanyID > 255)) {
        if (($fkiCompanyID > 255)) {
            throw new \InvalidArgumentException('invalid value for $fkiCompanyID when calling ActivesessionListElement., must be smaller than or equal to 255.');
        }
//        if (($fkiCompanyID < 1)) {
        if (($fkiCompanyID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiCompanyID when calling ActivesessionListElement., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiCompanyID'] = $fkiCompanyID;
        $this->container['fkiCompanyID'] = (is_null($fkiCompanyID) ? null : (int) $fkiCompanyID);

        return $this;
    }

    /**
     * Gets fkiDepartmentID
     *
     * @return int
     */
    public function getFkiDepartmentID()
    {
        return $this->container['fkiDepartmentID'];
    }

    /**
     * Sets fkiDepartmentID
     *
     * @param int $fkiDepartmentID The unique ID of the Department
     *
     * @return self
     */
    public function setFkiDepartmentID($fkiDepartmentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiDepartmentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiDepartmentID cannot be null');
        //}

//        if (($fkiDepartmentID < 0)) {
        if (($fkiDepartmentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiDepartmentID when calling ActivesessionListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiDepartmentID'] = $fkiDepartmentID;
        $this->container['fkiDepartmentID'] = (is_null($fkiDepartmentID) ? null : (int) $fkiDepartmentID);

        return $this;
    }

    /**
     * Gets sCompanyNameX
     *
     * @return string
     */
    public function getSCompanyNameX()
    {
        return is_null($this->container['sCompanyNameX']) ? null : trim($this->container['sCompanyNameX']);
    }

    /**
     * Sets sCompanyNameX
     *
     * @param string $sCompanyNameX The Name of the Company in the language of the requester
     *
     * @return self
     */
    public function setSCompanyNameX($sCompanyNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCompanyNameX)) {
            //throw new \InvalidArgumentException('non-nullable sCompanyNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCompanyNameX'] = $sCompanyNameX;
        $this->container['sCompanyNameX'] = (is_null($sCompanyNameX) ? null : trim((string) $sCompanyNameX));

        return $this;
    }

    /**
     * Gets sDepartmentNameX
     *
     * @return string
     */
    public function getSDepartmentNameX()
    {
        return is_null($this->container['sDepartmentNameX']) ? null : trim($this->container['sDepartmentNameX']);
    }

    /**
     * Sets sDepartmentNameX
     *
     * @param string $sDepartmentNameX The Name of the Department in the language of the requester
     *
     * @return self
     */
    public function setSDepartmentNameX($sDepartmentNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDepartmentNameX)) {
            //throw new \InvalidArgumentException('non-nullable sDepartmentNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDepartmentNameX'] = $sDepartmentNameX;
        $this->container['sDepartmentNameX'] = (is_null($sDepartmentNameX) ? null : trim((string) $sDepartmentNameX));

        return $this;
    }

    /**
     * Gets sActivesessionLoginname
     *
     * @return string
     */
    public function getSActivesessionLoginname()
    {
        return is_null($this->container['sActivesessionLoginname']) ? null : trim($this->container['sActivesessionLoginname']);
    }

    /**
     * Sets sActivesessionLoginname
     *
     * @param string $sActivesessionLoginname The loginname of the Activesession
     *
     * @return self
     */
    public function setSActivesessionLoginname($sActivesessionLoginname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sActivesessionLoginname)) {
            //throw new \InvalidArgumentException('non-nullable sActivesessionLoginname cannot be null');
        //}

//        if ((!preg_match("/^.{0,32}$/", ObjectSerializer::toString($sActivesessionLoginname)))) {
        if (!is_null($sActivesessionLoginname) && (!preg_match("/(*UTF8)^.{0,32}$/", ObjectSerializer::toString($sActivesessionLoginname)))) {
            throw new \InvalidArgumentException("invalid value for \$sActivesessionLoginname when calling ActivesessionListElement., must conform to the pattern /^.{0,32}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sActivesessionLoginname'] = $sActivesessionLoginname;
        $this->container['sActivesessionLoginname'] = (is_null($sActivesessionLoginname) ? null : trim((string) $sActivesessionLoginname));

        return $this;
    }

    /**
     * Gets sComputerDescription
     *
     * @return string
     */
    public function getSComputerDescription()
    {
        return is_null($this->container['sComputerDescription']) ? null : trim($this->container['sComputerDescription']);
    }

    /**
     * Sets sComputerDescription
     *
     * @param string $sComputerDescription The description of the Computer
     *
     * @return self
     */
    public function setSComputerDescription($sComputerDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sComputerDescription)) {
            //throw new \InvalidArgumentException('non-nullable sComputerDescription cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sComputerDescription)))) {
        if (!is_null($sComputerDescription) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sComputerDescription)))) {
            throw new \InvalidArgumentException("invalid value for \$sComputerDescription when calling ActivesessionListElement., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sComputerDescription'] = $sComputerDescription;
        $this->container['sComputerDescription'] = (is_null($sComputerDescription) ? null : trim((string) $sComputerDescription));

        return $this;
    }

    /**
     * Gets dtActivesessionFirsthit
     *
     * @return string
     */
    public function getDtActivesessionFirsthit()
    {
        return is_null($this->container['dtActivesessionFirsthit']) ? null : trim($this->container['dtActivesessionFirsthit']);
    }

    /**
     * Sets dtActivesessionFirsthit
     *
     * @param string $dtActivesessionFirsthit The first hit of the Activesession
     *
     * @return self
     */
    public function setDtActivesessionFirsthit($dtActivesessionFirsthit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtActivesessionFirsthit)) {
            //throw new \InvalidArgumentException('non-nullable dtActivesessionFirsthit cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtActivesessionFirsthit)))) {
        if (!is_null($dtActivesessionFirsthit) && (!preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtActivesessionFirsthit)))) {
            throw new \InvalidArgumentException("invalid value for \$dtActivesessionFirsthit when calling ActivesessionListElement., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtActivesessionFirsthit'] = $dtActivesessionFirsthit;
        $this->container['dtActivesessionFirsthit'] = (is_null($dtActivesessionFirsthit) ? null : trim((string) $dtActivesessionFirsthit));

        return $this;
    }

    /**
     * Gets dtActivesessionLasthit
     *
     * @return string
     */
    public function getDtActivesessionLasthit()
    {
        return is_null($this->container['dtActivesessionLasthit']) ? null : trim($this->container['dtActivesessionLasthit']);
    }

    /**
     * Sets dtActivesessionLasthit
     *
     * @param string $dtActivesessionLasthit The last hit of the Activesession
     *
     * @return self
     */
    public function setDtActivesessionLasthit($dtActivesessionLasthit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtActivesessionLasthit)) {
            //throw new \InvalidArgumentException('non-nullable dtActivesessionLasthit cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtActivesessionLasthit)))) {
        if (!is_null($dtActivesessionLasthit) && (!preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtActivesessionLasthit)))) {
            throw new \InvalidArgumentException("invalid value for \$dtActivesessionLasthit when calling ActivesessionListElement., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtActivesessionLasthit'] = $dtActivesessionLasthit;
        $this->container['dtActivesessionLasthit'] = (is_null($dtActivesessionLasthit) ? null : trim((string) $dtActivesessionLasthit));

        return $this;
    }

    /**
     * Gets sActivesessionIP
     *
     * @return string
     */
    public function getSActivesessionIP()
    {
        return is_null($this->container['sActivesessionIP']) ? null : trim($this->container['sActivesessionIP']);
    }

    /**
     * Sets sActivesessionIP
     *
     * @param string $sActivesessionIP Represent an IP address.
     *
     * @return self
     */
    public function setSActivesessionIP($sActivesessionIP)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sActivesessionIP)) {
            //throw new \InvalidArgumentException('non-nullable sActivesessionIP cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sActivesessionIP'] = $sActivesessionIP;
        $this->container['sActivesessionIP'] = (is_null($sActivesessionIP) ? null : trim((string) $sActivesessionIP));

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


