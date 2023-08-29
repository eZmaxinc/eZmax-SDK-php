<?php
/**
 * VersionhistoryResponse
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
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
 * VersionhistoryResponse Class Doc Comment
 *
 * @category Class
 * @description A Versionhistory Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VersionhistoryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'versionhistory-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiVersionhistoryID' => 'int',
        'fkiModuleID' => 'int',
        'fkiModulesectionID' => 'int',
        'sModuleNameX' => 'string',
        'sModulesectionNameX' => 'string',
        'eVersionhistoryUsertype' => '\eZmaxAPI\Model\FieldEVersionhistoryUsertype',
        'objVersionhistoryDetail' => '\eZmaxAPI\Model\MultilingualVersionhistoryDetail',
        'dtVersionhistoryDate' => 'string',
        'dtVersionhistoryDateend' => 'string',
        'eVersionhistoryType' => '\eZmaxAPI\Model\FieldEVersionhistoryType',
        'bVersionhistoryDraft' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiVersionhistoryID' => null,
        'fkiModuleID' => null,
        'fkiModulesectionID' => null,
        'sModuleNameX' => null,
        'sModulesectionNameX' => null,
        'eVersionhistoryUsertype' => null,
        'objVersionhistoryDetail' => null,
        'dtVersionhistoryDate' => null,
        'dtVersionhistoryDateend' => null,
        'eVersionhistoryType' => null,
        'bVersionhistoryDraft' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiVersionhistoryID' => false,
		'fkiModuleID' => false,
		'fkiModulesectionID' => false,
		'sModuleNameX' => false,
		'sModulesectionNameX' => false,
		'eVersionhistoryUsertype' => false,
		'objVersionhistoryDetail' => false,
		'dtVersionhistoryDate' => false,
		'dtVersionhistoryDateend' => false,
		'eVersionhistoryType' => false,
		'bVersionhistoryDraft' => false
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
        'pkiVersionhistoryID' => 'pkiVersionhistoryID',
        'fkiModuleID' => 'fkiModuleID',
        'fkiModulesectionID' => 'fkiModulesectionID',
        'sModuleNameX' => 'sModuleNameX',
        'sModulesectionNameX' => 'sModulesectionNameX',
        'eVersionhistoryUsertype' => 'eVersionhistoryUsertype',
        'objVersionhistoryDetail' => 'objVersionhistoryDetail',
        'dtVersionhistoryDate' => 'dtVersionhistoryDate',
        'dtVersionhistoryDateend' => 'dtVersionhistoryDateend',
        'eVersionhistoryType' => 'eVersionhistoryType',
        'bVersionhistoryDraft' => 'bVersionhistoryDraft'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiVersionhistoryID' => 'setPkiVersionhistoryID',
        'fkiModuleID' => 'setFkiModuleID',
        'fkiModulesectionID' => 'setFkiModulesectionID',
        'sModuleNameX' => 'setSModuleNameX',
        'sModulesectionNameX' => 'setSModulesectionNameX',
        'eVersionhistoryUsertype' => 'setEVersionhistoryUsertype',
        'objVersionhistoryDetail' => 'setObjVersionhistoryDetail',
        'dtVersionhistoryDate' => 'setDtVersionhistoryDate',
        'dtVersionhistoryDateend' => 'setDtVersionhistoryDateend',
        'eVersionhistoryType' => 'setEVersionhistoryType',
        'bVersionhistoryDraft' => 'setBVersionhistoryDraft'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiVersionhistoryID' => 'getPkiVersionhistoryID',
        'fkiModuleID' => 'getFkiModuleID',
        'fkiModulesectionID' => 'getFkiModulesectionID',
        'sModuleNameX' => 'getSModuleNameX',
        'sModulesectionNameX' => 'getSModulesectionNameX',
        'eVersionhistoryUsertype' => 'getEVersionhistoryUsertype',
        'objVersionhistoryDetail' => 'getObjVersionhistoryDetail',
        'dtVersionhistoryDate' => 'getDtVersionhistoryDate',
        'dtVersionhistoryDateend' => 'getDtVersionhistoryDateend',
        'eVersionhistoryType' => 'getEVersionhistoryType',
        'bVersionhistoryDraft' => 'getBVersionhistoryDraft'
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
        $this->setIfExists('pkiVersionhistoryID', $data ?? [], null);
        $this->setIfExists('fkiModuleID', $data ?? [], null);
        $this->setIfExists('fkiModulesectionID', $data ?? [], null);
        $this->setIfExists('sModuleNameX', $data ?? [], null);
        $this->setIfExists('sModulesectionNameX', $data ?? [], null);
        $this->setIfExists('eVersionhistoryUsertype', $data ?? [], null);
        $this->setIfExists('objVersionhistoryDetail', $data ?? [], null);
        $this->setIfExists('dtVersionhistoryDate', $data ?? [], null);
        $this->setIfExists('dtVersionhistoryDateend', $data ?? [], null);
        $this->setIfExists('eVersionhistoryType', $data ?? [], null);
        $this->setIfExists('bVersionhistoryDraft', $data ?? [], null);
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

        if ($this->container['pkiVersionhistoryID'] === null) {
            $invalidProperties[] = "'pkiVersionhistoryID' can't be null";
        }
        if (($this->container['pkiVersionhistoryID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiVersionhistoryID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiModuleID']) && ($this->container['fkiModuleID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiModuleID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiModulesectionID']) && ($this->container['fkiModulesectionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiModulesectionID', must be bigger than or equal to 0.";
        }

        if ($this->container['objVersionhistoryDetail'] === null) {
            $invalidProperties[] = "'objVersionhistoryDetail' can't be null";
        }
        if ($this->container['dtVersionhistoryDate'] === null) {
            $invalidProperties[] = "'dtVersionhistoryDate' can't be null";
        }
        if ($this->container['eVersionhistoryType'] === null) {
            $invalidProperties[] = "'eVersionhistoryType' can't be null";
        }
        if ($this->container['bVersionhistoryDraft'] === null) {
            $invalidProperties[] = "'bVersionhistoryDraft' can't be null";
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
     * Gets pkiVersionhistoryID
     *
     * @return int
     */
    public function getPkiVersionhistoryID()
    {
        return $this->container['pkiVersionhistoryID'];
    }

    /**
     * Sets pkiVersionhistoryID
     *
     * @param int $pkiVersionhistoryID The unique ID of the Versionhistory
     *
     * @return self
     */
    public function setPkiVersionhistoryID($pkiVersionhistoryID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiVersionhistoryID)) {
            //throw new \InvalidArgumentException('non-nullable pkiVersionhistoryID cannot be null');
        //}

//        if (($pkiVersionhistoryID < 0)) {
        if (($pkiVersionhistoryID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiVersionhistoryID when calling VersionhistoryResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiVersionhistoryID'] = $pkiVersionhistoryID;
        $this->container['pkiVersionhistoryID'] = (is_null($pkiVersionhistoryID) ? null : (int) $pkiVersionhistoryID);

        return $this;
    }

    /**
     * Gets fkiModuleID
     *
     * @return int|null
     */
    public function getFkiModuleID()
    {
        return $this->container['fkiModuleID'];
    }

    /**
     * Sets fkiModuleID
     *
     * @param int|null $fkiModuleID The unique ID of the Module
     *
     * @return self
     */
    public function setFkiModuleID($fkiModuleID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiModuleID)) {
            //throw new \InvalidArgumentException('non-nullable fkiModuleID cannot be null');
        //}

//        if (($fkiModuleID < 0)) {
        if (!is_null($fkiModuleID) && ($fkiModuleID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiModuleID when calling VersionhistoryResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiModuleID'] = $fkiModuleID;
        $this->container['fkiModuleID'] = (is_null($fkiModuleID) ? null : (int) $fkiModuleID);

        return $this;
    }

    /**
     * Gets fkiModulesectionID
     *
     * @return int|null
     */
    public function getFkiModulesectionID()
    {
        return $this->container['fkiModulesectionID'];
    }

    /**
     * Sets fkiModulesectionID
     *
     * @param int|null $fkiModulesectionID The unique ID of the Modulesection
     *
     * @return self
     */
    public function setFkiModulesectionID($fkiModulesectionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiModulesectionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiModulesectionID cannot be null');
        //}

//        if (($fkiModulesectionID < 0)) {
        if (!is_null($fkiModulesectionID) && ($fkiModulesectionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiModulesectionID when calling VersionhistoryResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiModulesectionID'] = $fkiModulesectionID;
        $this->container['fkiModulesectionID'] = (is_null($fkiModulesectionID) ? null : (int) $fkiModulesectionID);

        return $this;
    }

    /**
     * Gets sModuleNameX
     *
     * @return string|null
     */
    public function getSModuleNameX()
    {
        return $this->container['sModuleNameX'];
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
        $this->container['sModuleNameX'] = (is_null($sModuleNameX) ? null : (string) $sModuleNameX);

        return $this;
    }

    /**
     * Gets sModulesectionNameX
     *
     * @return string|null
     */
    public function getSModulesectionNameX()
    {
        return $this->container['sModulesectionNameX'];
    }

    /**
     * Sets sModulesectionNameX
     *
     * @param string|null $sModulesectionNameX The Name of the Modulesection in the language of the requester
     *
     * @return self
     */
    public function setSModulesectionNameX($sModulesectionNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sModulesectionNameX)) {
            //throw new \InvalidArgumentException('non-nullable sModulesectionNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sModulesectionNameX'] = $sModulesectionNameX;
        $this->container['sModulesectionNameX'] = (is_null($sModulesectionNameX) ? null : (string) $sModulesectionNameX);

        return $this;
    }

    /**
     * Gets eVersionhistoryUsertype
     *
     * @return \eZmaxAPI\Model\FieldEVersionhistoryUsertype|null
     */
    public function getEVersionhistoryUsertype()
    {
        return $this->container['eVersionhistoryUsertype'];
    }

    /**
     * Sets eVersionhistoryUsertype
     *
     * @param \eZmaxAPI\Model\FieldEVersionhistoryUsertype|null $eVersionhistoryUsertype eVersionhistoryUsertype
     *
     * @return self
     */
    public function setEVersionhistoryUsertype($eVersionhistoryUsertype)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eVersionhistoryUsertype)) {
            //throw new \InvalidArgumentException('non-nullable eVersionhistoryUsertype cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eVersionhistoryUsertype'] = $eVersionhistoryUsertype;
        $this->container['eVersionhistoryUsertype'] = $eVersionhistoryUsertype;

        return $this;
    }

    /**
     * Gets objVersionhistoryDetail
     *
     * @return \eZmaxAPI\Model\MultilingualVersionhistoryDetail
     */
    public function getObjVersionhistoryDetail()
    {
        return $this->container['objVersionhistoryDetail'];
    }

    /**
     * Sets objVersionhistoryDetail
     *
     * @param \eZmaxAPI\Model\MultilingualVersionhistoryDetail $objVersionhistoryDetail objVersionhistoryDetail
     *
     * @return self
     */
    public function setObjVersionhistoryDetail($objVersionhistoryDetail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objVersionhistoryDetail)) {
            //throw new \InvalidArgumentException('non-nullable objVersionhistoryDetail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objVersionhistoryDetail'] = $objVersionhistoryDetail;
        $this->container['objVersionhistoryDetail'] = $objVersionhistoryDetail;

        return $this;
    }

    /**
     * Gets dtVersionhistoryDate
     *
     * @return string
     */
    public function getDtVersionhistoryDate()
    {
        return $this->container['dtVersionhistoryDate'];
    }

    /**
     * Sets dtVersionhistoryDate
     *
     * @param string $dtVersionhistoryDate The date  at which the Versionhistory was published or should be published
     *
     * @return self
     */
    public function setDtVersionhistoryDate($dtVersionhistoryDate)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtVersionhistoryDate)) {
            //throw new \InvalidArgumentException('non-nullable dtVersionhistoryDate cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtVersionhistoryDate'] = $dtVersionhistoryDate;
        $this->container['dtVersionhistoryDate'] = (is_null($dtVersionhistoryDate) ? null : (string) $dtVersionhistoryDate);

        return $this;
    }

    /**
     * Gets dtVersionhistoryDateend
     *
     * @return string|null
     */
    public function getDtVersionhistoryDateend()
    {
        return $this->container['dtVersionhistoryDateend'];
    }

    /**
     * Sets dtVersionhistoryDateend
     *
     * @param string|null $dtVersionhistoryDateend The date  at which the Versionhistory will no longer be visible
     *
     * @return self
     */
    public function setDtVersionhistoryDateend($dtVersionhistoryDateend)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtVersionhistoryDateend)) {
            //throw new \InvalidArgumentException('non-nullable dtVersionhistoryDateend cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtVersionhistoryDateend'] = $dtVersionhistoryDateend;
        $this->container['dtVersionhistoryDateend'] = (is_null($dtVersionhistoryDateend) ? null : (string) $dtVersionhistoryDateend);

        return $this;
    }

    /**
     * Gets eVersionhistoryType
     *
     * @return \eZmaxAPI\Model\FieldEVersionhistoryType
     */
    public function getEVersionhistoryType()
    {
        return $this->container['eVersionhistoryType'];
    }

    /**
     * Sets eVersionhistoryType
     *
     * @param \eZmaxAPI\Model\FieldEVersionhistoryType $eVersionhistoryType eVersionhistoryType
     *
     * @return self
     */
    public function setEVersionhistoryType($eVersionhistoryType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eVersionhistoryType)) {
            //throw new \InvalidArgumentException('non-nullable eVersionhistoryType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eVersionhistoryType'] = $eVersionhistoryType;
        $this->container['eVersionhistoryType'] = $eVersionhistoryType;

        return $this;
    }

    /**
     * Gets bVersionhistoryDraft
     *
     * @return bool
     */
    public function getBVersionhistoryDraft()
    {
        return $this->container['bVersionhistoryDraft'];
    }

    /**
     * Sets bVersionhistoryDraft
     *
     * @param bool $bVersionhistoryDraft Whether the Versionhistory is published or still a draft
     *
     * @return self
     */
    public function setBVersionhistoryDraft($bVersionhistoryDraft)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bVersionhistoryDraft)) {
            //throw new \InvalidArgumentException('non-nullable bVersionhistoryDraft cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bVersionhistoryDraft'] = $bVersionhistoryDraft;
        $this->container['bVersionhistoryDraft'] = (is_null($bVersionhistoryDraft) ? null : (bool) $bVersionhistoryDraft);

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


