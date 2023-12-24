<?php
/**
 * EzsignbulksendtransmissionResponseCompound
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
 * EzsignbulksendtransmissionResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignbulksendtransmission Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignbulksendtransmissionResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksendtransmission-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksendtransmissionID' => 'int',
        'fkiEzsignbulksendID' => 'int',
        'sEzsignbulksendtransmissionDescription' => 'string',
        'iEzsignbulksendtransmissionErrors' => 'int',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit',
        'aObjEzsignfoldertransmission' => '\eZmaxAPI\Model\CustomEzsignfoldertransmissionResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksendtransmissionID' => null,
        'fkiEzsignbulksendID' => null,
        'sEzsignbulksendtransmissionDescription' => null,
        'iEzsignbulksendtransmissionErrors' => null,
        'objAudit' => null,
        'aObjEzsignfoldertransmission' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignbulksendtransmissionID' => false,
		'fkiEzsignbulksendID' => false,
		'sEzsignbulksendtransmissionDescription' => false,
		'iEzsignbulksendtransmissionErrors' => false,
		'objAudit' => false,
		'aObjEzsignfoldertransmission' => false
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
        'pkiEzsignbulksendtransmissionID' => 'pkiEzsignbulksendtransmissionID',
        'fkiEzsignbulksendID' => 'fkiEzsignbulksendID',
        'sEzsignbulksendtransmissionDescription' => 'sEzsignbulksendtransmissionDescription',
        'iEzsignbulksendtransmissionErrors' => 'iEzsignbulksendtransmissionErrors',
        'objAudit' => 'objAudit',
        'aObjEzsignfoldertransmission' => 'a_objEzsignfoldertransmission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksendtransmissionID' => 'setPkiEzsignbulksendtransmissionID',
        'fkiEzsignbulksendID' => 'setFkiEzsignbulksendID',
        'sEzsignbulksendtransmissionDescription' => 'setSEzsignbulksendtransmissionDescription',
        'iEzsignbulksendtransmissionErrors' => 'setIEzsignbulksendtransmissionErrors',
        'objAudit' => 'setObjAudit',
        'aObjEzsignfoldertransmission' => 'setAObjEzsignfoldertransmission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksendtransmissionID' => 'getPkiEzsignbulksendtransmissionID',
        'fkiEzsignbulksendID' => 'getFkiEzsignbulksendID',
        'sEzsignbulksendtransmissionDescription' => 'getSEzsignbulksendtransmissionDescription',
        'iEzsignbulksendtransmissionErrors' => 'getIEzsignbulksendtransmissionErrors',
        'objAudit' => 'getObjAudit',
        'aObjEzsignfoldertransmission' => 'getAObjEzsignfoldertransmission'
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
        $this->setIfExists('pkiEzsignbulksendtransmissionID', $data ?? [], null);
        $this->setIfExists('fkiEzsignbulksendID', $data ?? [], null);
        $this->setIfExists('sEzsignbulksendtransmissionDescription', $data ?? [], null);
        $this->setIfExists('iEzsignbulksendtransmissionErrors', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
        $this->setIfExists('aObjEzsignfoldertransmission', $data ?? [], null);
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

        if ($this->container['pkiEzsignbulksendtransmissionID'] === null) {
            $invalidProperties[] = "'pkiEzsignbulksendtransmissionID' can't be null";
        }
        if (($this->container['pkiEzsignbulksendtransmissionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignbulksendtransmissionID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'fkiEzsignbulksendID' can't be null";
        }
        if (($this->container['fkiEzsignbulksendID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignbulksendID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsignbulksendtransmissionDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendtransmissionDescription' can't be null";
        }
        if ($this->container['iEzsignbulksendtransmissionErrors'] === null) {
            $invalidProperties[] = "'iEzsignbulksendtransmissionErrors' can't be null";
        }
        if (($this->container['iEzsignbulksendtransmissionErrors'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignbulksendtransmissionErrors', must be bigger than or equal to 0.";
        }

        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
        }
        if ($this->container['aObjEzsignfoldertransmission'] === null) {
            $invalidProperties[] = "'aObjEzsignfoldertransmission' can't be null";
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
     * Gets pkiEzsignbulksendtransmissionID
     *
     * @return int
     */
    public function getPkiEzsignbulksendtransmissionID()
    {
        return $this->container['pkiEzsignbulksendtransmissionID'];
    }

    /**
     * Sets pkiEzsignbulksendtransmissionID
     *
     * @param int $pkiEzsignbulksendtransmissionID The unique ID of the Ezsignbulksendtransmission
     *
     * @return self
     */
    public function setPkiEzsignbulksendtransmissionID($pkiEzsignbulksendtransmissionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignbulksendtransmissionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignbulksendtransmissionID cannot be null');
        //}

//        if (($pkiEzsignbulksendtransmissionID < 0)) {
        if (($pkiEzsignbulksendtransmissionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksendtransmissionID when calling EzsignbulksendtransmissionResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignbulksendtransmissionID'] = $pkiEzsignbulksendtransmissionID;
        $this->container['pkiEzsignbulksendtransmissionID'] = (is_null($pkiEzsignbulksendtransmissionID) ? null : (int) $pkiEzsignbulksendtransmissionID);

        return $this;
    }

    /**
     * Gets fkiEzsignbulksendID
     *
     * @return int
     */
    public function getFkiEzsignbulksendID()
    {
        return $this->container['fkiEzsignbulksendID'];
    }

    /**
     * Sets fkiEzsignbulksendID
     *
     * @param int $fkiEzsignbulksendID The unique ID of the Ezsignbulksend
     *
     * @return self
     */
    public function setFkiEzsignbulksendID($fkiEzsignbulksendID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignbulksendID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignbulksendID cannot be null');
        //}

//        if (($fkiEzsignbulksendID < 0)) {
        if (($fkiEzsignbulksendID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignbulksendID when calling EzsignbulksendtransmissionResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignbulksendID'] = $fkiEzsignbulksendID;
        $this->container['fkiEzsignbulksendID'] = (is_null($fkiEzsignbulksendID) ? null : (int) $fkiEzsignbulksendID);

        return $this;
    }

    /**
     * Gets sEzsignbulksendtransmissionDescription
     *
     * @return string
     */
    public function getSEzsignbulksendtransmissionDescription()
    {
        return is_null($this->container['sEzsignbulksendtransmissionDescription']) ? null : trim($this->container['sEzsignbulksendtransmissionDescription']);
    }

    /**
     * Sets sEzsignbulksendtransmissionDescription
     *
     * @param string $sEzsignbulksendtransmissionDescription The description of the Ezsignbulksendtransmission
     *
     * @return self
     */
    public function setSEzsignbulksendtransmissionDescription($sEzsignbulksendtransmissionDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignbulksendtransmissionDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignbulksendtransmissionDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignbulksendtransmissionDescription'] = $sEzsignbulksendtransmissionDescription;
        $this->container['sEzsignbulksendtransmissionDescription'] = (is_null($sEzsignbulksendtransmissionDescription) ? null : trim((string) $sEzsignbulksendtransmissionDescription));

        return $this;
    }

    /**
     * Gets iEzsignbulksendtransmissionErrors
     *
     * @return int
     */
    public function getIEzsignbulksendtransmissionErrors()
    {
        return $this->container['iEzsignbulksendtransmissionErrors'];
    }

    /**
     * Sets iEzsignbulksendtransmissionErrors
     *
     * @param int $iEzsignbulksendtransmissionErrors The number of errors during the Ezsignbulksendtransmission
     *
     * @return self
     */
    public function setIEzsignbulksendtransmissionErrors($iEzsignbulksendtransmissionErrors)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignbulksendtransmissionErrors)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignbulksendtransmissionErrors cannot be null');
        //}

//        if (($iEzsignbulksendtransmissionErrors < 0)) {
        if (($iEzsignbulksendtransmissionErrors < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignbulksendtransmissionErrors when calling EzsignbulksendtransmissionResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignbulksendtransmissionErrors'] = $iEzsignbulksendtransmissionErrors;
        $this->container['iEzsignbulksendtransmissionErrors'] = (is_null($iEzsignbulksendtransmissionErrors) ? null : (int) $iEzsignbulksendtransmissionErrors);

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
     * Gets aObjEzsignfoldertransmission
     *
     * @return \eZmaxAPI\Model\CustomEzsignfoldertransmissionResponse[]
     */
    public function getAObjEzsignfoldertransmission()
    {
        return $this->container['aObjEzsignfoldertransmission'];
    }

    /**
     * Sets aObjEzsignfoldertransmission
     *
     * @param \eZmaxAPI\Model\CustomEzsignfoldertransmissionResponse[] $aObjEzsignfoldertransmission aObjEzsignfoldertransmission
     *
     * @return self
     */
    public function setAObjEzsignfoldertransmission($aObjEzsignfoldertransmission)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEzsignfoldertransmission)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignfoldertransmission cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEzsignfoldertransmission'] = $aObjEzsignfoldertransmission;
        $this->container['aObjEzsignfoldertransmission'] = $aObjEzsignfoldertransmission;

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


