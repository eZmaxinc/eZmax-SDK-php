<?php
/**
 * EzsigndocumentApplyEzsigntemplateV1Request
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
 * The version of the OpenAPI document: 1.1.16
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * EzsigndocumentApplyEzsigntemplateV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigndocumentApplyEzsigntemplateV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocument-applyEzsigntemplate-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsigntemplateID' => 'int',
        'aSEzsigntemplatesigner' => 'string[]',
        'aPkiEzsignfoldersignerassociationID' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiEzsigntemplateID' => null,
        'aSEzsigntemplatesigner' => null,
        'aPkiEzsignfoldersignerassociationID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiEzsigntemplateID' => false,
		'aSEzsigntemplatesigner' => false,
		'aPkiEzsignfoldersignerassociationID' => false
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
        'fkiEzsigntemplateID' => 'fkiEzsigntemplateID',
        'aSEzsigntemplatesigner' => 'a_sEzsigntemplatesigner',
        'aPkiEzsignfoldersignerassociationID' => 'a_pkiEzsignfoldersignerassociationID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsigntemplateID' => 'setFkiEzsigntemplateID',
        'aSEzsigntemplatesigner' => 'setASEzsigntemplatesigner',
        'aPkiEzsignfoldersignerassociationID' => 'setAPkiEzsignfoldersignerassociationID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsigntemplateID' => 'getFkiEzsigntemplateID',
        'aSEzsigntemplatesigner' => 'getASEzsigntemplatesigner',
        'aPkiEzsignfoldersignerassociationID' => 'getAPkiEzsignfoldersignerassociationID'
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
        $this->setIfExists('fkiEzsigntemplateID', $data ?? [], null);
        $this->setIfExists('aSEzsigntemplatesigner', $data ?? [], null);
        $this->setIfExists('aPkiEzsignfoldersignerassociationID', $data ?? [], null);
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

        if ($this->container['fkiEzsigntemplateID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplateID' can't be null";
        }
        if (($this->container['fkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if ($this->container['aSEzsigntemplatesigner'] === null) {
            $invalidProperties[] = "'aSEzsigntemplatesigner' can't be null";
        }
        if ($this->container['aPkiEzsignfoldersignerassociationID'] === null) {
            $invalidProperties[] = "'aPkiEzsignfoldersignerassociationID' can't be null";
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
     * Gets fkiEzsigntemplateID
     *
     * @return int
     */
    public function getFkiEzsigntemplateID()
    {
        return $this->container['fkiEzsigntemplateID'];
    }

    /**
     * Sets fkiEzsigntemplateID
     *
     * @param int $fkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setFkiEzsigntemplateID($fkiEzsigntemplateID)
    {

        if (($fkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateID when calling EzsigndocumentApplyEzsigntemplateV1Request., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsigntemplateID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateID cannot be null');
        //}
        $this->container['fkiEzsigntemplateID'] = (is_null($fkiEzsigntemplateID) ? null : (int) $fkiEzsigntemplateID);

        return $this;
    }

    /**
     * Gets aSEzsigntemplatesigner
     *
     * @return string[]
     */
    public function getASEzsigntemplatesigner()
    {
        return $this->container['aSEzsigntemplatesigner'];
    }

    /**
     * Sets aSEzsigntemplatesigner
     *
     * @param string[] $aSEzsigntemplatesigner aSEzsigntemplatesigner
     *
     * @return self
     */
    public function setASEzsigntemplatesigner($aSEzsigntemplatesigner)
    {

        //if (is_null($aSEzsigntemplatesigner)) {
            //throw new \InvalidArgumentException('non-nullable aSEzsigntemplatesigner cannot be null');
        //}
        $this->container['aSEzsigntemplatesigner'] = (is_null($aSEzsigntemplatesigner) ? null : $aSEzsigntemplatesigner);

        return $this;
    }

    /**
     * Gets aPkiEzsignfoldersignerassociationID
     *
     * @return int[]
     */
    public function getAPkiEzsignfoldersignerassociationID()
    {
        return $this->container['aPkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets aPkiEzsignfoldersignerassociationID
     *
     * @param int[] $aPkiEzsignfoldersignerassociationID aPkiEzsignfoldersignerassociationID
     *
     * @return self
     */
    public function setAPkiEzsignfoldersignerassociationID($aPkiEzsignfoldersignerassociationID)
    {

        //if (is_null($aPkiEzsignfoldersignerassociationID)) {
            //throw new \InvalidArgumentException('non-nullable aPkiEzsignfoldersignerassociationID cannot be null');
        //}
        $this->container['aPkiEzsignfoldersignerassociationID'] = (is_null($aPkiEzsignfoldersignerassociationID) ? null : $aPkiEzsignfoldersignerassociationID);

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


