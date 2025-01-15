<?php
/**
 * ModuleResponseCompound
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
 * Generator version: 7.10.0
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
 * ModuleResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Module Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModuleResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'module-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiModuleID' => 'int',
        'fkiModulegroupID' => 'int',
        'eModuleInternalname' => 'string',
        'sModuleNameX' => 'string',
        'bModuleRegistered' => 'bool',
        'bModuleRegisteredapi' => 'bool',
        'aObjModulesection' => '\eZmaxAPI\Model\ModulesectionResponseCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiModuleID' => null,
        'fkiModulegroupID' => null,
        'eModuleInternalname' => null,
        'sModuleNameX' => null,
        'bModuleRegistered' => null,
        'bModuleRegisteredapi' => null,
        'aObjModulesection' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiModuleID' => false,
		'fkiModulegroupID' => false,
		'eModuleInternalname' => false,
		'sModuleNameX' => false,
		'bModuleRegistered' => false,
		'bModuleRegisteredapi' => false,
		'aObjModulesection' => false
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
        'pkiModuleID' => 'pkiModuleID',
        'fkiModulegroupID' => 'fkiModulegroupID',
        'eModuleInternalname' => 'eModuleInternalname',
        'sModuleNameX' => 'sModuleNameX',
        'bModuleRegistered' => 'bModuleRegistered',
        'bModuleRegisteredapi' => 'bModuleRegisteredapi',
        'aObjModulesection' => 'a_objModulesection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiModuleID' => 'setPkiModuleID',
        'fkiModulegroupID' => 'setFkiModulegroupID',
        'eModuleInternalname' => 'setEModuleInternalname',
        'sModuleNameX' => 'setSModuleNameX',
        'bModuleRegistered' => 'setBModuleRegistered',
        'bModuleRegisteredapi' => 'setBModuleRegisteredapi',
        'aObjModulesection' => 'setAObjModulesection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiModuleID' => 'getPkiModuleID',
        'fkiModulegroupID' => 'getFkiModulegroupID',
        'eModuleInternalname' => 'getEModuleInternalname',
        'sModuleNameX' => 'getSModuleNameX',
        'bModuleRegistered' => 'getBModuleRegistered',
        'bModuleRegisteredapi' => 'getBModuleRegisteredapi',
        'aObjModulesection' => 'getAObjModulesection'
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
        $this->setIfExists('pkiModuleID', $data ?? [], null);
        $this->setIfExists('fkiModulegroupID', $data ?? [], null);
        $this->setIfExists('eModuleInternalname', $data ?? [], null);
        $this->setIfExists('sModuleNameX', $data ?? [], null);
        $this->setIfExists('bModuleRegistered', $data ?? [], null);
        $this->setIfExists('bModuleRegisteredapi', $data ?? [], null);
        $this->setIfExists('aObjModulesection', $data ?? [], null);
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

        if ($this->container['pkiModuleID'] === null) {
            $invalidProperties[] = "'pkiModuleID' can't be null";
        }
        if (($this->container['pkiModuleID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiModuleID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiModulegroupID'] === null) {
            $invalidProperties[] = "'fkiModulegroupID' can't be null";
        }
        if (($this->container['fkiModulegroupID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiModulegroupID', must be smaller than or equal to 255.";
        }

        if (($this->container['fkiModulegroupID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiModulegroupID', must be bigger than or equal to 1.";
        }

        if ($this->container['eModuleInternalname'] === null) {
            $invalidProperties[] = "'eModuleInternalname' can't be null";
        }
        if ($this->container['sModuleNameX'] === null) {
            $invalidProperties[] = "'sModuleNameX' can't be null";
        }
        if ($this->container['bModuleRegistered'] === null) {
            $invalidProperties[] = "'bModuleRegistered' can't be null";
        }
        if ($this->container['bModuleRegisteredapi'] === null) {
            $invalidProperties[] = "'bModuleRegisteredapi' can't be null";
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
     * Gets pkiModuleID
     *
     * @return int
     */
    public function getPkiModuleID()
    {
	//return $this->container['pkiModuleID'];
        return $this->container['pkiModuleID'];
    }

    /**
     * Sets pkiModuleID
     *
     * @param int $pkiModuleID The unique ID of the Module
     *
     * @return self
     */
    public function setPkiModuleID($pkiModuleID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiModuleID)) {
            //throw new \InvalidArgumentException('non-nullable pkiModuleID cannot be null');
        //}

	//if (($pkiModuleID < 0)) {
        if (($pkiModuleID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiModuleID when calling ModuleResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiModuleID)?'null':'"'.$pkiModuleID.'"').' for pkiModuleID when calling ModuleResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiModuleID'] = $pkiModuleID;
        $this->container['pkiModuleID'] = (is_null($pkiModuleID) ? null : (int) $pkiModuleID);

        return $this;
    }

    /**
     * Gets fkiModulegroupID
     *
     * @return int
     */
    public function getFkiModulegroupID()
    {
	//return $this->container['fkiModulegroupID'];
        return $this->container['fkiModulegroupID'];
    }

    /**
     * Sets fkiModulegroupID
     *
     * @param int $fkiModulegroupID The unique ID of the Modulegroup
     *
     * @return self
     */
    public function setFkiModulegroupID($fkiModulegroupID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiModulegroupID)) {
            //throw new \InvalidArgumentException('non-nullable fkiModulegroupID cannot be null');
        //}

	//if (($fkiModulegroupID > 255)) {
        if (($fkiModulegroupID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiModulegroupID when calling ModuleResponseCompound., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiModulegroupID)?'null':'"'.$fkiModulegroupID.'"').' for fkiModulegroupID when calling ModuleResponseCompound., must be smaller than or equal to 255.');
        }
	//if (($fkiModulegroupID < 1)) {
        if (($fkiModulegroupID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiModulegroupID when calling ModuleResponseCompound., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiModulegroupID)?'null':'"'.$fkiModulegroupID.'"').' for fkiModulegroupID when calling ModuleResponseCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiModulegroupID'] = $fkiModulegroupID;
        $this->container['fkiModulegroupID'] = (is_null($fkiModulegroupID) ? null : (int) $fkiModulegroupID);

        return $this;
    }

    /**
     * Gets eModuleInternalname
     *
     * @return string
     */
    public function getEModuleInternalname()
    {
	//return $this->container['eModuleInternalname'];
        return is_null($this->container['eModuleInternalname']) ? null : trim($this->container['eModuleInternalname']);
    }

    /**
     * Sets eModuleInternalname
     *
     * @param string $eModuleInternalname The Internal name of the Module.  This is theoretically an enum field but there are so many possibles values we decided not to list them all.
     *
     * @return self
     */
    public function setEModuleInternalname($eModuleInternalname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eModuleInternalname)) {
            //throw new \InvalidArgumentException('non-nullable eModuleInternalname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eModuleInternalname'] = $eModuleInternalname;
        $this->container['eModuleInternalname'] = (is_null($eModuleInternalname) ? null : trim((string) $eModuleInternalname));

        return $this;
    }

    /**
     * Gets sModuleNameX
     *
     * @return string
     */
    public function getSModuleNameX()
    {
	//return $this->container['sModuleNameX'];
        return is_null($this->container['sModuleNameX']) ? null : trim($this->container['sModuleNameX']);
    }

    /**
     * Sets sModuleNameX
     *
     * @param string $sModuleNameX The Name of the Module in the language of the requester
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
     * Gets bModuleRegistered
     *
     * @return bool
     */
    public function getBModuleRegistered()
    {
	//return $this->container['bModuleRegistered'];
        return $this->container['bModuleRegistered'];
    }

    /**
     * Sets bModuleRegistered
     *
     * @param bool $bModuleRegistered Whether the Module is registered or not
     *
     * @return self
     */
    public function setBModuleRegistered($bModuleRegistered)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bModuleRegistered)) {
            //throw new \InvalidArgumentException('non-nullable bModuleRegistered cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bModuleRegistered'] = $bModuleRegistered;
        $this->container['bModuleRegistered'] = (is_null($bModuleRegistered) ? null : (bool) $bModuleRegistered);

        return $this;
    }

    /**
     * Gets bModuleRegisteredapi
     *
     * @return bool
     */
    public function getBModuleRegisteredapi()
    {
	//return $this->container['bModuleRegisteredapi'];
        return $this->container['bModuleRegisteredapi'];
    }

    /**
     * Sets bModuleRegisteredapi
     *
     * @param bool $bModuleRegisteredapi Whether the Module is registered or not for api use
     *
     * @return self
     */
    public function setBModuleRegisteredapi($bModuleRegisteredapi)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bModuleRegisteredapi)) {
            //throw new \InvalidArgumentException('non-nullable bModuleRegisteredapi cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bModuleRegisteredapi'] = $bModuleRegisteredapi;
        $this->container['bModuleRegisteredapi'] = (is_null($bModuleRegisteredapi) ? null : (bool) $bModuleRegisteredapi);

        return $this;
    }

    /**
     * Gets aObjModulesection
     *
     * @return \eZmaxAPI\Model\ModulesectionResponseCompound[]|null
     */
    public function getAObjModulesection()
    {
	//return $this->container['aObjModulesection'];
        return $this->container['aObjModulesection'];
    }

    /**
     * Sets aObjModulesection
     *
     * @param \eZmaxAPI\Model\ModulesectionResponseCompound[]|null $aObjModulesection aObjModulesection
     *
     * @return self
     */
    public function setAObjModulesection($aObjModulesection)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjModulesection)) {
            //throw new \InvalidArgumentException('non-nullable aObjModulesection cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjModulesection'] = $aObjModulesection;
        $this->container['aObjModulesection'] = $aObjModulesection;

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


