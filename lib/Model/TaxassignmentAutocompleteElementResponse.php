<?php
/**
 * TaxassignmentAutocompleteElementResponse
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
 * TaxassignmentAutocompleteElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Taxassignment AutocompleteElement Response
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TaxassignmentAutocompleteElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'taxassignment-AutocompleteElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sTaxassignmentDescriptionX' => 'string',
        'pkiTaxassignmentID' => 'int',
        'bTaxassignmentIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sTaxassignmentDescriptionX' => null,
        'pkiTaxassignmentID' => null,
        'bTaxassignmentIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sTaxassignmentDescriptionX' => false,
		'pkiTaxassignmentID' => false,
		'bTaxassignmentIsactive' => false
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
        'sTaxassignmentDescriptionX' => 'sTaxassignmentDescriptionX',
        'pkiTaxassignmentID' => 'pkiTaxassignmentID',
        'bTaxassignmentIsactive' => 'bTaxassignmentIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sTaxassignmentDescriptionX' => 'setSTaxassignmentDescriptionX',
        'pkiTaxassignmentID' => 'setPkiTaxassignmentID',
        'bTaxassignmentIsactive' => 'setBTaxassignmentIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sTaxassignmentDescriptionX' => 'getSTaxassignmentDescriptionX',
        'pkiTaxassignmentID' => 'getPkiTaxassignmentID',
        'bTaxassignmentIsactive' => 'getBTaxassignmentIsactive'
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
        $this->setIfExists('sTaxassignmentDescriptionX', $data ?? [], null);
        $this->setIfExists('pkiTaxassignmentID', $data ?? [], null);
        $this->setIfExists('bTaxassignmentIsactive', $data ?? [], null);
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

        if ($this->container['sTaxassignmentDescriptionX'] === null) {
            $invalidProperties[] = "'sTaxassignmentDescriptionX' can't be null";
        }
        if ($this->container['pkiTaxassignmentID'] === null) {
            $invalidProperties[] = "'pkiTaxassignmentID' can't be null";
        }
        if (($this->container['pkiTaxassignmentID'] > 15)) {
            $invalidProperties[] = "invalid value for 'pkiTaxassignmentID', must be smaller than or equal to 15.";
        }

        if (($this->container['pkiTaxassignmentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiTaxassignmentID', must be bigger than or equal to 0.";
        }

        if ($this->container['bTaxassignmentIsactive'] === null) {
            $invalidProperties[] = "'bTaxassignmentIsactive' can't be null";
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
     * Gets sTaxassignmentDescriptionX
     *
     * @return string
     */
    public function getSTaxassignmentDescriptionX()
    {
	//return $this->container['sTaxassignmentDescriptionX'];
        return is_null($this->container['sTaxassignmentDescriptionX']) ? null : trim($this->container['sTaxassignmentDescriptionX']);
    }

    /**
     * Sets sTaxassignmentDescriptionX
     *
     * @param string $sTaxassignmentDescriptionX The description of the Taxassignment  in the language of the requester
     *
     * @return self
     */
    public function setSTaxassignmentDescriptionX($sTaxassignmentDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sTaxassignmentDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sTaxassignmentDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sTaxassignmentDescriptionX'] = $sTaxassignmentDescriptionX;
        $this->container['sTaxassignmentDescriptionX'] = (is_null($sTaxassignmentDescriptionX) ? null : trim((string) $sTaxassignmentDescriptionX));

        return $this;
    }

    /**
     * Gets pkiTaxassignmentID
     *
     * @return int
     */
    public function getPkiTaxassignmentID()
    {
	//return $this->container['pkiTaxassignmentID'];
        return $this->container['pkiTaxassignmentID'];
    }

    /**
     * Sets pkiTaxassignmentID
     *
     * @param int $pkiTaxassignmentID The unique ID of the Taxassignment.  Valid values:  |Value|Description| |-|-| |1|No tax| |2|GST| |3|HST (ON)| |4|HST (NB)| |5|HST (NS)| |6|HST (NL)| |7|HST (PE)| |8|GST + QST (QC)| |9|GST + QST (QC) Non-Recoverable| |10|GST + PST (BC)| |11|GST + PST (SK)| |12|GST + RST (MB)| |13|GST + PST (BC) Non-Recoverable| |14|GST + PST (SK) Non-Recoverable| |15|GST + RST (MB) Non-Recoverable|
     *
     * @return self
     */
    public function setPkiTaxassignmentID($pkiTaxassignmentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiTaxassignmentID)) {
            //throw new \InvalidArgumentException('non-nullable pkiTaxassignmentID cannot be null');
        //}

	//if (($pkiTaxassignmentID > 15)) {
        if (($pkiTaxassignmentID > 15)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiTaxassignmentID when calling TaxassignmentAutocompleteElementResponse., must be smaller than or equal to 15.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiTaxassignmentID)?'null':'"'.$pkiTaxassignmentID.'"').' for pkiTaxassignmentID when calling TaxassignmentAutocompleteElementResponse., must be smaller than or equal to 15.');
        }
	//if (($pkiTaxassignmentID < 0)) {
        if (($pkiTaxassignmentID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiTaxassignmentID when calling TaxassignmentAutocompleteElementResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiTaxassignmentID)?'null':'"'.$pkiTaxassignmentID.'"').' for pkiTaxassignmentID when calling TaxassignmentAutocompleteElementResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiTaxassignmentID'] = $pkiTaxassignmentID;
        $this->container['pkiTaxassignmentID'] = (is_null($pkiTaxassignmentID) ? null : (int) $pkiTaxassignmentID);

        return $this;
    }

    /**
     * Gets bTaxassignmentIsactive
     *
     * @return bool
     */
    public function getBTaxassignmentIsactive()
    {
	//return $this->container['bTaxassignmentIsactive'];
        return $this->container['bTaxassignmentIsactive'];
    }

    /**
     * Sets bTaxassignmentIsactive
     *
     * @param bool $bTaxassignmentIsactive Whether the Taxassignment is active or not
     *
     * @return self
     */
    public function setBTaxassignmentIsactive($bTaxassignmentIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bTaxassignmentIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bTaxassignmentIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bTaxassignmentIsactive'] = $bTaxassignmentIsactive;
        $this->container['bTaxassignmentIsactive'] = (is_null($bTaxassignmentIsactive) ? null : (bool) $bTaxassignmentIsactive);

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


