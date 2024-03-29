<?php
/**
 * EzsigndocumentResponseCompoundAllOf
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
 * OpenAPI Generator version: 6.6.0
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
 * EzsigndocumentResponseCompoundAllOf Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigndocumentResponseCompoundAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocument_ResponseCompound_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iEzsigndocumentStepformtotal' => 'int',
        'iEzsigndocumentStepformcurrent' => 'int',
        'iEzsigndocumentStepsignaturetotal' => 'int',
        'iEzsigndocumentStepsignatureCurrent' => 'int',
        'aObjEzsignfoldersignerassociationstatus' => '\eZmaxAPI\Model\CustomEzsignfoldersignerassociationstatusResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iEzsigndocumentStepformtotal' => null,
        'iEzsigndocumentStepformcurrent' => null,
        'iEzsigndocumentStepsignaturetotal' => null,
        'iEzsigndocumentStepsignatureCurrent' => null,
        'aObjEzsignfoldersignerassociationstatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'iEzsigndocumentStepformtotal' => false,
		'iEzsigndocumentStepformcurrent' => false,
		'iEzsigndocumentStepsignaturetotal' => false,
		'iEzsigndocumentStepsignatureCurrent' => false,
		'aObjEzsignfoldersignerassociationstatus' => false
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
        'iEzsigndocumentStepformtotal' => 'iEzsigndocumentStepformtotal',
        'iEzsigndocumentStepformcurrent' => 'iEzsigndocumentStepformcurrent',
        'iEzsigndocumentStepsignaturetotal' => 'iEzsigndocumentStepsignaturetotal',
        'iEzsigndocumentStepsignatureCurrent' => 'iEzsigndocumentStepsignatureCurrent',
        'aObjEzsignfoldersignerassociationstatus' => 'a_objEzsignfoldersignerassociationstatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iEzsigndocumentStepformtotal' => 'setIEzsigndocumentStepformtotal',
        'iEzsigndocumentStepformcurrent' => 'setIEzsigndocumentStepformcurrent',
        'iEzsigndocumentStepsignaturetotal' => 'setIEzsigndocumentStepsignaturetotal',
        'iEzsigndocumentStepsignatureCurrent' => 'setIEzsigndocumentStepsignatureCurrent',
        'aObjEzsignfoldersignerassociationstatus' => 'setAObjEzsignfoldersignerassociationstatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iEzsigndocumentStepformtotal' => 'getIEzsigndocumentStepformtotal',
        'iEzsigndocumentStepformcurrent' => 'getIEzsigndocumentStepformcurrent',
        'iEzsigndocumentStepsignaturetotal' => 'getIEzsigndocumentStepsignaturetotal',
        'iEzsigndocumentStepsignatureCurrent' => 'getIEzsigndocumentStepsignatureCurrent',
        'aObjEzsignfoldersignerassociationstatus' => 'getAObjEzsignfoldersignerassociationstatus'
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
        $this->setIfExists('iEzsigndocumentStepformtotal', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentStepformcurrent', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentStepsignaturetotal', $data ?? [], null);
        $this->setIfExists('iEzsigndocumentStepsignatureCurrent', $data ?? [], null);
        $this->setIfExists('aObjEzsignfoldersignerassociationstatus', $data ?? [], null);
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

        if ($this->container['iEzsigndocumentStepformtotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentStepformtotal' can't be null";
        }
        if ($this->container['iEzsigndocumentStepformcurrent'] === null) {
            $invalidProperties[] = "'iEzsigndocumentStepformcurrent' can't be null";
        }
        if ($this->container['iEzsigndocumentStepsignaturetotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentStepsignaturetotal' can't be null";
        }
        if ($this->container['iEzsigndocumentStepsignatureCurrent'] === null) {
            $invalidProperties[] = "'iEzsigndocumentStepsignatureCurrent' can't be null";
        }
        if ($this->container['aObjEzsignfoldersignerassociationstatus'] === null) {
            $invalidProperties[] = "'aObjEzsignfoldersignerassociationstatus' can't be null";
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
     * Gets iEzsigndocumentStepformtotal
     *
     * @return int
     */
    public function getIEzsigndocumentStepformtotal()
    {
        return $this->container['iEzsigndocumentStepformtotal'];
    }

    /**
     * Sets iEzsigndocumentStepformtotal
     *
     * @param int $iEzsigndocumentStepformtotal The total number of steps in the form filling phase
     *
     * @return self
     */
    public function setIEzsigndocumentStepformtotal($iEzsigndocumentStepformtotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndocumentStepformtotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentStepformtotal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndocumentStepformtotal'] = $iEzsigndocumentStepformtotal;
        $this->container['iEzsigndocumentStepformtotal'] = (is_null($iEzsigndocumentStepformtotal) ? null : (int) $iEzsigndocumentStepformtotal);

        return $this;
    }

    /**
     * Gets iEzsigndocumentStepformcurrent
     *
     * @return int
     */
    public function getIEzsigndocumentStepformcurrent()
    {
        return $this->container['iEzsigndocumentStepformcurrent'];
    }

    /**
     * Sets iEzsigndocumentStepformcurrent
     *
     * @param int $iEzsigndocumentStepformcurrent The current step in the form filling phase
     *
     * @return self
     */
    public function setIEzsigndocumentStepformcurrent($iEzsigndocumentStepformcurrent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndocumentStepformcurrent)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentStepformcurrent cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndocumentStepformcurrent'] = $iEzsigndocumentStepformcurrent;
        $this->container['iEzsigndocumentStepformcurrent'] = (is_null($iEzsigndocumentStepformcurrent) ? null : (int) $iEzsigndocumentStepformcurrent);

        return $this;
    }

    /**
     * Gets iEzsigndocumentStepsignaturetotal
     *
     * @return int
     */
    public function getIEzsigndocumentStepsignaturetotal()
    {
        return $this->container['iEzsigndocumentStepsignaturetotal'];
    }

    /**
     * Sets iEzsigndocumentStepsignaturetotal
     *
     * @param int $iEzsigndocumentStepsignaturetotal The total number of steps in the signature filling phase
     *
     * @return self
     */
    public function setIEzsigndocumentStepsignaturetotal($iEzsigndocumentStepsignaturetotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndocumentStepsignaturetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentStepsignaturetotal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndocumentStepsignaturetotal'] = $iEzsigndocumentStepsignaturetotal;
        $this->container['iEzsigndocumentStepsignaturetotal'] = (is_null($iEzsigndocumentStepsignaturetotal) ? null : (int) $iEzsigndocumentStepsignaturetotal);

        return $this;
    }

    /**
     * Gets iEzsigndocumentStepsignatureCurrent
     *
     * @return int
     */
    public function getIEzsigndocumentStepsignatureCurrent()
    {
        return $this->container['iEzsigndocumentStepsignatureCurrent'];
    }

    /**
     * Sets iEzsigndocumentStepsignatureCurrent
     *
     * @param int $iEzsigndocumentStepsignatureCurrent The current step in the signature phase
     *
     * @return self
     */
    public function setIEzsigndocumentStepsignatureCurrent($iEzsigndocumentStepsignatureCurrent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndocumentStepsignatureCurrent)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocumentStepsignatureCurrent cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndocumentStepsignatureCurrent'] = $iEzsigndocumentStepsignatureCurrent;
        $this->container['iEzsigndocumentStepsignatureCurrent'] = (is_null($iEzsigndocumentStepsignatureCurrent) ? null : (int) $iEzsigndocumentStepsignatureCurrent);

        return $this;
    }

    /**
     * Gets aObjEzsignfoldersignerassociationstatus
     *
     * @return \eZmaxAPI\Model\CustomEzsignfoldersignerassociationstatusResponse[]
     */
    public function getAObjEzsignfoldersignerassociationstatus()
    {
        return $this->container['aObjEzsignfoldersignerassociationstatus'];
    }

    /**
     * Sets aObjEzsignfoldersignerassociationstatus
     *
     * @param \eZmaxAPI\Model\CustomEzsignfoldersignerassociationstatusResponse[] $aObjEzsignfoldersignerassociationstatus aObjEzsignfoldersignerassociationstatus
     *
     * @return self
     */
    public function setAObjEzsignfoldersignerassociationstatus($aObjEzsignfoldersignerassociationstatus)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEzsignfoldersignerassociationstatus)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignfoldersignerassociationstatus cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEzsignfoldersignerassociationstatus'] = $aObjEzsignfoldersignerassociationstatus;
        $this->container['aObjEzsignfoldersignerassociationstatus'] = $aObjEzsignfoldersignerassociationstatus;

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


