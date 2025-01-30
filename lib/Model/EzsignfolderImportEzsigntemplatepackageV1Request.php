<?php
/**
 * EzsignfolderImportEzsigntemplatepackageV1Request
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
 * EzsignfolderImportEzsigntemplatepackageV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsigntemplatepackage
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignfolderImportEzsigntemplatepackageV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-importEzsigntemplatepackage-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsigntemplatepackageID' => 'int',
        'dtEzsigndocumentDuedate' => 'string',
        'aObjImportEzsigntemplatepackageRelation' => '\eZmaxAPI\Model\CustomImportEzsigntemplatepackageRelationRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiEzsigntemplatepackageID' => null,
        'dtEzsigndocumentDuedate' => null,
        'aObjImportEzsigntemplatepackageRelation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiEzsigntemplatepackageID' => false,
		'dtEzsigndocumentDuedate' => false,
		'aObjImportEzsigntemplatepackageRelation' => false
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
        'fkiEzsigntemplatepackageID' => 'fkiEzsigntemplatepackageID',
        'dtEzsigndocumentDuedate' => 'dtEzsigndocumentDuedate',
        'aObjImportEzsigntemplatepackageRelation' => 'a_objImportEzsigntemplatepackageRelation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsigntemplatepackageID' => 'setFkiEzsigntemplatepackageID',
        'dtEzsigndocumentDuedate' => 'setDtEzsigndocumentDuedate',
        'aObjImportEzsigntemplatepackageRelation' => 'setAObjImportEzsigntemplatepackageRelation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsigntemplatepackageID' => 'getFkiEzsigntemplatepackageID',
        'dtEzsigndocumentDuedate' => 'getDtEzsigndocumentDuedate',
        'aObjImportEzsigntemplatepackageRelation' => 'getAObjImportEzsigntemplatepackageRelation'
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
        $this->setIfExists('fkiEzsigntemplatepackageID', $data ?? [], null);
        $this->setIfExists('dtEzsigndocumentDuedate', $data ?? [], null);
        $this->setIfExists('aObjImportEzsigntemplatepackageRelation', $data ?? [], null);
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

        if ($this->container['fkiEzsigntemplatepackageID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplatepackageID' can't be null";
        }
        if (($this->container['fkiEzsigntemplatepackageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatepackageID', must be bigger than or equal to 0.";
        }

        if ($this->container['dtEzsigndocumentDuedate'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentDuedate' can't be null";
        }
        if ($this->container['aObjImportEzsigntemplatepackageRelation'] === null) {
            $invalidProperties[] = "'aObjImportEzsigntemplatepackageRelation' can't be null";
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
     * Gets fkiEzsigntemplatepackageID
     *
     * @return int
     */
    public function getFkiEzsigntemplatepackageID()
    {
	//return $this->container['fkiEzsigntemplatepackageID'];
        return $this->container['fkiEzsigntemplatepackageID'];
    }

    /**
     * Sets fkiEzsigntemplatepackageID
     *
     * @param int $fkiEzsigntemplatepackageID The unique ID of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setFkiEzsigntemplatepackageID($fkiEzsigntemplatepackageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplatepackageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplatepackageID cannot be null');
        //}

	//if (($fkiEzsigntemplatepackageID < 0)) {
        if (($fkiEzsigntemplatepackageID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatepackageID when calling EzsignfolderImportEzsigntemplatepackageV1Request., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsigntemplatepackageID)?'null':'"'.$fkiEzsigntemplatepackageID.'"').' for fkiEzsigntemplatepackageID when calling EzsignfolderImportEzsigntemplatepackageV1Request., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplatepackageID'] = $fkiEzsigntemplatepackageID;
        $this->container['fkiEzsigntemplatepackageID'] = (is_null($fkiEzsigntemplatepackageID) ? null : (int) $fkiEzsigntemplatepackageID);

        return $this;
    }

    /**
     * Gets dtEzsigndocumentDuedate
     *
     * @return string
     */
    public function getDtEzsigndocumentDuedate()
    {
	//return $this->container['dtEzsigndocumentDuedate'];
        return is_null($this->container['dtEzsigndocumentDuedate']) ? null : trim($this->container['dtEzsigndocumentDuedate']);
    }

    /**
     * Sets dtEzsigndocumentDuedate
     *
     * @param string $dtEzsigndocumentDuedate The maximum date and time at which the Ezsigndocument can be signed.
     *
     * @return self
     */
    public function setDtEzsigndocumentDuedate($dtEzsigndocumentDuedate)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzsigndocumentDuedate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsigndocumentDuedate cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzsigndocumentDuedate'] = $dtEzsigndocumentDuedate;
        $this->container['dtEzsigndocumentDuedate'] = (is_null($dtEzsigndocumentDuedate) ? null : trim((string) $dtEzsigndocumentDuedate));

        return $this;
    }

    /**
     * Gets aObjImportEzsigntemplatepackageRelation
     *
     * @return \eZmaxAPI\Model\CustomImportEzsigntemplatepackageRelationRequest[]
     */
    public function getAObjImportEzsigntemplatepackageRelation()
    {
	//return $this->container['aObjImportEzsigntemplatepackageRelation'];
        return $this->container['aObjImportEzsigntemplatepackageRelation'];
    }

    /**
     * Sets aObjImportEzsigntemplatepackageRelation
     *
     * @param \eZmaxAPI\Model\CustomImportEzsigntemplatepackageRelationRequest[] $aObjImportEzsigntemplatepackageRelation aObjImportEzsigntemplatepackageRelation
     *
     * @return self
     */
    public function setAObjImportEzsigntemplatepackageRelation($aObjImportEzsigntemplatepackageRelation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjImportEzsigntemplatepackageRelation)) {
            //throw new \InvalidArgumentException('non-nullable aObjImportEzsigntemplatepackageRelation cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjImportEzsigntemplatepackageRelation'] = $aObjImportEzsigntemplatepackageRelation;
        $this->container['aObjImportEzsigntemplatepackageRelation'] = $aObjImportEzsigntemplatepackageRelation;

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


