<?php
/**
 * SupplyRequestCompound
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
 * SupplyRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Supply Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupplyRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supply-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiSupplyID' => 'int',
        'fkiGlaccountID' => 'int',
        'fkiGlaccountcontainerID' => 'int',
        'fkiVariableexpenseID' => 'int',
        'sSupplyCode' => 'string',
        'objSupplyDescription' => '\eZmaxAPI\Model\MultilingualSupplyDescription',
        'dSupplyUnitprice' => 'string',
        'bSupplyIsactive' => 'bool',
        'bSupplyVariableprice' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiSupplyID' => null,
        'fkiGlaccountID' => null,
        'fkiGlaccountcontainerID' => null,
        'fkiVariableexpenseID' => null,
        'sSupplyCode' => null,
        'objSupplyDescription' => null,
        'dSupplyUnitprice' => null,
        'bSupplyIsactive' => null,
        'bSupplyVariableprice' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiSupplyID' => false,
		'fkiGlaccountID' => false,
		'fkiGlaccountcontainerID' => false,
		'fkiVariableexpenseID' => false,
		'sSupplyCode' => false,
		'objSupplyDescription' => false,
		'dSupplyUnitprice' => false,
		'bSupplyIsactive' => false,
		'bSupplyVariableprice' => false
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
        'pkiSupplyID' => 'pkiSupplyID',
        'fkiGlaccountID' => 'fkiGlaccountID',
        'fkiGlaccountcontainerID' => 'fkiGlaccountcontainerID',
        'fkiVariableexpenseID' => 'fkiVariableexpenseID',
        'sSupplyCode' => 'sSupplyCode',
        'objSupplyDescription' => 'objSupplyDescription',
        'dSupplyUnitprice' => 'dSupplyUnitprice',
        'bSupplyIsactive' => 'bSupplyIsactive',
        'bSupplyVariableprice' => 'bSupplyVariableprice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiSupplyID' => 'setPkiSupplyID',
        'fkiGlaccountID' => 'setFkiGlaccountID',
        'fkiGlaccountcontainerID' => 'setFkiGlaccountcontainerID',
        'fkiVariableexpenseID' => 'setFkiVariableexpenseID',
        'sSupplyCode' => 'setSSupplyCode',
        'objSupplyDescription' => 'setObjSupplyDescription',
        'dSupplyUnitprice' => 'setDSupplyUnitprice',
        'bSupplyIsactive' => 'setBSupplyIsactive',
        'bSupplyVariableprice' => 'setBSupplyVariableprice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiSupplyID' => 'getPkiSupplyID',
        'fkiGlaccountID' => 'getFkiGlaccountID',
        'fkiGlaccountcontainerID' => 'getFkiGlaccountcontainerID',
        'fkiVariableexpenseID' => 'getFkiVariableexpenseID',
        'sSupplyCode' => 'getSSupplyCode',
        'objSupplyDescription' => 'getObjSupplyDescription',
        'dSupplyUnitprice' => 'getDSupplyUnitprice',
        'bSupplyIsactive' => 'getBSupplyIsactive',
        'bSupplyVariableprice' => 'getBSupplyVariableprice'
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
        $this->setIfExists('pkiSupplyID', $data ?? [], null);
        $this->setIfExists('fkiGlaccountID', $data ?? [], null);
        $this->setIfExists('fkiGlaccountcontainerID', $data ?? [], null);
        $this->setIfExists('fkiVariableexpenseID', $data ?? [], null);
        $this->setIfExists('sSupplyCode', $data ?? [], null);
        $this->setIfExists('objSupplyDescription', $data ?? [], null);
        $this->setIfExists('dSupplyUnitprice', $data ?? [], null);
        $this->setIfExists('bSupplyIsactive', $data ?? [], null);
        $this->setIfExists('bSupplyVariableprice', $data ?? [], null);
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

        if (!is_null($this->container['pkiSupplyID']) && ($this->container['pkiSupplyID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiSupplyID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['pkiSupplyID']) && ($this->container['pkiSupplyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiSupplyID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiGlaccountID']) && ($this->container['fkiGlaccountID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiGlaccountID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiGlaccountcontainerID']) && ($this->container['fkiGlaccountcontainerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiGlaccountcontainerID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiVariableexpenseID'] === null) {
            $invalidProperties[] = "'fkiVariableexpenseID' can't be null";
        }
        if (($this->container['fkiVariableexpenseID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiVariableexpenseID', must be smaller than or equal to 255.";
        }

        if (($this->container['fkiVariableexpenseID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiVariableexpenseID', must be bigger than or equal to 1.";
        }

        if ($this->container['sSupplyCode'] === null) {
            $invalidProperties[] = "'sSupplyCode' can't be null";
        }
//        if (!preg_match("/^.{0,5}$/", $this->container['sSupplyCode'])) {
        if (!is_null($this->container['sSupplyCode']) && !preg_match("/(*UTF8)^.{0,5}$/", $this->container['sSupplyCode'])) {
            $invalidProperties[] = "invalid value for 'sSupplyCode', must be conform to the pattern /^.{0,5}$/.";
        }

        if ($this->container['objSupplyDescription'] === null) {
            $invalidProperties[] = "'objSupplyDescription' can't be null";
        }
        if ($this->container['dSupplyUnitprice'] === null) {
            $invalidProperties[] = "'dSupplyUnitprice' can't be null";
        }
        if (((is_null($this->container['dSupplyUnitprice'])?0:mb_strlen($this->container['dSupplyUnitprice'])) > 13)) {
            $invalidProperties[] = "invalid value for 'dSupplyUnitprice', the character length must be smaller than or equal to 13.";
        }

        if (((is_null($this->container['dSupplyUnitprice'])?0:mb_strlen($this->container['dSupplyUnitprice'])) < 4)) {
            $invalidProperties[] = "invalid value for 'dSupplyUnitprice', the character length must be bigger than or equal to 4.";
        }

//        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dSupplyUnitprice'])) {
        if (!is_null($this->container['dSupplyUnitprice']) && !preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dSupplyUnitprice'])) {
            $invalidProperties[] = "invalid value for 'dSupplyUnitprice', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['bSupplyIsactive'] === null) {
            $invalidProperties[] = "'bSupplyIsactive' can't be null";
        }
        if ($this->container['bSupplyVariableprice'] === null) {
            $invalidProperties[] = "'bSupplyVariableprice' can't be null";
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
     * Gets pkiSupplyID
     *
     * @return int|null
     */
    public function getPkiSupplyID()
    {
        return $this->container['pkiSupplyID'];
    }

    /**
     * Sets pkiSupplyID
     *
     * @param int|null $pkiSupplyID The unique ID of the Supply
     *
     * @return self
     */
    public function setPkiSupplyID($pkiSupplyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiSupplyID)) {
            //throw new \InvalidArgumentException('non-nullable pkiSupplyID cannot be null');
        //}

//        if (($pkiSupplyID > 65535)) {
        if (!is_null($pkiSupplyID) && ($pkiSupplyID > 65535)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiSupplyID)?'null':'"'.$pkiSupplyID.'"').' for pkiSupplyID when calling SupplyRequestCompound., must be smaller than or equal to 65535.');
        }
//        if (($pkiSupplyID < 0)) {
        if (!is_null($pkiSupplyID) && ($pkiSupplyID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiSupplyID)?'null':'"'.$pkiSupplyID.'"').' for pkiSupplyID when calling SupplyRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiSupplyID'] = $pkiSupplyID;
        $this->container['pkiSupplyID'] = (is_null($pkiSupplyID) ? null : (int) $pkiSupplyID);

        return $this;
    }

    /**
     * Gets fkiGlaccountID
     *
     * @return int|null
     */
    public function getFkiGlaccountID()
    {
        return $this->container['fkiGlaccountID'];
    }

    /**
     * Sets fkiGlaccountID
     *
     * @param int|null $fkiGlaccountID The unique ID of the Glaccount
     *
     * @return self
     */
    public function setFkiGlaccountID($fkiGlaccountID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiGlaccountID)) {
            //throw new \InvalidArgumentException('non-nullable fkiGlaccountID cannot be null');
        //}

//        if (($fkiGlaccountID < 0)) {
        if (!is_null($fkiGlaccountID) && ($fkiGlaccountID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiGlaccountID)?'null':'"'.$fkiGlaccountID.'"').' for fkiGlaccountID when calling SupplyRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiGlaccountID'] = $fkiGlaccountID;
        $this->container['fkiGlaccountID'] = (is_null($fkiGlaccountID) ? null : (int) $fkiGlaccountID);

        return $this;
    }

    /**
     * Gets fkiGlaccountcontainerID
     *
     * @return int|null
     */
    public function getFkiGlaccountcontainerID()
    {
        return $this->container['fkiGlaccountcontainerID'];
    }

    /**
     * Sets fkiGlaccountcontainerID
     *
     * @param int|null $fkiGlaccountcontainerID The unique ID of the Glaccountcontainer
     *
     * @return self
     */
    public function setFkiGlaccountcontainerID($fkiGlaccountcontainerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiGlaccountcontainerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiGlaccountcontainerID cannot be null');
        //}

//        if (($fkiGlaccountcontainerID < 0)) {
        if (!is_null($fkiGlaccountcontainerID) && ($fkiGlaccountcontainerID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiGlaccountcontainerID)?'null':'"'.$fkiGlaccountcontainerID.'"').' for fkiGlaccountcontainerID when calling SupplyRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiGlaccountcontainerID'] = $fkiGlaccountcontainerID;
        $this->container['fkiGlaccountcontainerID'] = (is_null($fkiGlaccountcontainerID) ? null : (int) $fkiGlaccountcontainerID);

        return $this;
    }

    /**
     * Gets fkiVariableexpenseID
     *
     * @return int
     */
    public function getFkiVariableexpenseID()
    {
        return $this->container['fkiVariableexpenseID'];
    }

    /**
     * Sets fkiVariableexpenseID
     *
     * @param int $fkiVariableexpenseID The unique ID of the Variableexpense
     *
     * @return self
     */
    public function setFkiVariableexpenseID($fkiVariableexpenseID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiVariableexpenseID)) {
            //throw new \InvalidArgumentException('non-nullable fkiVariableexpenseID cannot be null');
        //}

//        if (($fkiVariableexpenseID > 255)) {
        if (($fkiVariableexpenseID > 255)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiVariableexpenseID)?'null':'"'.$fkiVariableexpenseID.'"').' for fkiVariableexpenseID when calling SupplyRequestCompound., must be smaller than or equal to 255.');
        }
//        if (($fkiVariableexpenseID < 1)) {
        if (($fkiVariableexpenseID < 1)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiVariableexpenseID)?'null':'"'.$fkiVariableexpenseID.'"').' for fkiVariableexpenseID when calling SupplyRequestCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiVariableexpenseID'] = $fkiVariableexpenseID;
        $this->container['fkiVariableexpenseID'] = (is_null($fkiVariableexpenseID) ? null : (int) $fkiVariableexpenseID);

        return $this;
    }

    /**
     * Gets sSupplyCode
     *
     * @return string
     */
    public function getSSupplyCode()
    {
        return is_null($this->container['sSupplyCode']) ? null : trim($this->container['sSupplyCode']);
    }

    /**
     * Sets sSupplyCode
     *
     * @param string $sSupplyCode The code of the Supply
     *
     * @return self
     */
    public function setSSupplyCode($sSupplyCode)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sSupplyCode)) {
            //throw new \InvalidArgumentException('non-nullable sSupplyCode cannot be null');
        //}

//        if ((!preg_match("/^.{0,5}$/", ObjectSerializer::toString($sSupplyCode)))) {
        if (!is_null($sSupplyCode) && (!preg_match("/(*UTF8)^.{0,5}$/", ObjectSerializer::toString($sSupplyCode)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($sSupplyCode)?'null':'"'.$sSupplyCode.'"')." for sSupplyCode when calling SupplyRequestCompound., must conform to the pattern /^.{0,5}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sSupplyCode'] = $sSupplyCode;
        $this->container['sSupplyCode'] = (is_null($sSupplyCode) ? null : trim((string) $sSupplyCode));

        return $this;
    }

    /**
     * Gets objSupplyDescription
     *
     * @return \eZmaxAPI\Model\MultilingualSupplyDescription
     */
    public function getObjSupplyDescription()
    {
        return $this->container['objSupplyDescription'];
    }

    /**
     * Sets objSupplyDescription
     *
     * @param \eZmaxAPI\Model\MultilingualSupplyDescription $objSupplyDescription objSupplyDescription
     *
     * @return self
     */
    public function setObjSupplyDescription($objSupplyDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objSupplyDescription)) {
            //throw new \InvalidArgumentException('non-nullable objSupplyDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objSupplyDescription'] = $objSupplyDescription;
        $this->container['objSupplyDescription'] = $objSupplyDescription;

        return $this;
    }

    /**
     * Gets dSupplyUnitprice
     *
     * @return string
     */
    public function getDSupplyUnitprice()
    {
        return is_null($this->container['dSupplyUnitprice']) ? null : trim($this->container['dSupplyUnitprice']);
    }

    /**
     * Sets dSupplyUnitprice
     *
     * @param string $dSupplyUnitprice The unit price of the Supply
     *
     * @return self
     */
    public function setDSupplyUnitprice($dSupplyUnitprice)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dSupplyUnitprice)) {
            //throw new \InvalidArgumentException('non-nullable dSupplyUnitprice cannot be null');
        //}
//        if ((mb_strlen($dSupplyUnitprice) > 13)) {
        if ((mb_strlen($dSupplyUnitprice) > 13)) {
            throw new \InvalidArgumentException('value '.(is_null($dSupplyUnitprice)?'null':'"'.$dSupplyUnitprice.'"').', invalid length for dSupplyUnitprice when calling SupplyRequestCompound., must be smaller than or equal to 13.');
        }
//        if ((mb_strlen($dSupplyUnitprice) < 4)) {
        if ((mb_strlen($dSupplyUnitprice) < 4)) {
            throw new \InvalidArgumentException('value '.(is_null($dSupplyUnitprice)?'null':'"'.$dSupplyUnitprice.'"').', invalid length for dSupplyUnitprice when calling SupplyRequestCompound., must be bigger than or equal to 4.');
        }
//        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dSupplyUnitprice)))) {
        if (!is_null($dSupplyUnitprice) && (!preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dSupplyUnitprice)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($dSupplyUnitprice)?'null':'"'.$dSupplyUnitprice.'"')." for dSupplyUnitprice when calling SupplyRequestCompound., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dSupplyUnitprice'] = $dSupplyUnitprice;
        $this->container['dSupplyUnitprice'] = (is_null($dSupplyUnitprice) ? null : trim((string) $dSupplyUnitprice));

        return $this;
    }

    /**
     * Gets bSupplyIsactive
     *
     * @return bool
     */
    public function getBSupplyIsactive()
    {
        return $this->container['bSupplyIsactive'];
    }

    /**
     * Sets bSupplyIsactive
     *
     * @param bool $bSupplyIsactive Whether the supply is active or not
     *
     * @return self
     */
    public function setBSupplyIsactive($bSupplyIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bSupplyIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bSupplyIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bSupplyIsactive'] = $bSupplyIsactive;
        $this->container['bSupplyIsactive'] = (is_null($bSupplyIsactive) ? null : (bool) $bSupplyIsactive);

        return $this;
    }

    /**
     * Gets bSupplyVariableprice
     *
     * @return bool
     */
    public function getBSupplyVariableprice()
    {
        return $this->container['bSupplyVariableprice'];
    }

    /**
     * Sets bSupplyVariableprice
     *
     * @param bool $bSupplyVariableprice Whether if the price is variable
     *
     * @return self
     */
    public function setBSupplyVariableprice($bSupplyVariableprice)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bSupplyVariableprice)) {
            //throw new \InvalidArgumentException('non-nullable bSupplyVariableprice cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bSupplyVariableprice'] = $bSupplyVariableprice;
        $this->container['bSupplyVariableprice'] = (is_null($bSupplyVariableprice) ? null : (bool) $bSupplyVariableprice);

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


