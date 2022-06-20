<?php
/**
 * EzsignbulksenddocumentmappingResponseCompound
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
 * The version of the OpenAPI document: 1.1.8
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
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
 * EzsignbulksenddocumentmappingResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezsignbulksenddocumentmapping Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignbulksenddocumentmappingResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksenddocumentmapping-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksenddocumentmappingID' => 'int',
        'fkiEzsignbulksendID' => 'int',
        'fkiEzsigntemplatepackageID' => 'int',
        'fkiEzsigntemplateID' => 'int',
        'iEzsignbulksenddocumentmappingOrder' => 'int',
        'objEzsigntemplate' => '\eZmaxAPI\Model\EzsigntemplateResponseCompound',
        'objEzsigntemplatepackage' => '\eZmaxAPI\Model\EzsigntemplatepackageResponseCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksenddocumentmappingID' => null,
        'fkiEzsignbulksendID' => null,
        'fkiEzsigntemplatepackageID' => null,
        'fkiEzsigntemplateID' => null,
        'iEzsignbulksenddocumentmappingOrder' => null,
        'objEzsigntemplate' => null,
        'objEzsigntemplatepackage' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pkiEzsignbulksenddocumentmappingID' => 'pkiEzsignbulksenddocumentmappingID',
        'fkiEzsignbulksendID' => 'fkiEzsignbulksendID',
        'fkiEzsigntemplatepackageID' => 'fkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'fkiEzsigntemplateID',
        'iEzsignbulksenddocumentmappingOrder' => 'iEzsignbulksenddocumentmappingOrder',
        'objEzsigntemplate' => 'objEzsigntemplate',
        'objEzsigntemplatepackage' => 'objEzsigntemplatepackage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksenddocumentmappingID' => 'setPkiEzsignbulksenddocumentmappingID',
        'fkiEzsignbulksendID' => 'setFkiEzsignbulksendID',
        'fkiEzsigntemplatepackageID' => 'setFkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'setFkiEzsigntemplateID',
        'iEzsignbulksenddocumentmappingOrder' => 'setIEzsignbulksenddocumentmappingOrder',
        'objEzsigntemplate' => 'setObjEzsigntemplate',
        'objEzsigntemplatepackage' => 'setObjEzsigntemplatepackage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksenddocumentmappingID' => 'getPkiEzsignbulksenddocumentmappingID',
        'fkiEzsignbulksendID' => 'getFkiEzsignbulksendID',
        'fkiEzsigntemplatepackageID' => 'getFkiEzsigntemplatepackageID',
        'fkiEzsigntemplateID' => 'getFkiEzsigntemplateID',
        'iEzsignbulksenddocumentmappingOrder' => 'getIEzsignbulksenddocumentmappingOrder',
        'objEzsigntemplate' => 'getObjEzsigntemplate',
        'objEzsigntemplatepackage' => 'getObjEzsigntemplatepackage'
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
        $this->container['pkiEzsignbulksenddocumentmappingID'] = $data['pkiEzsignbulksenddocumentmappingID'] ?? null;
        $this->container['fkiEzsignbulksendID'] = $data['fkiEzsignbulksendID'] ?? null;
        $this->container['fkiEzsigntemplatepackageID'] = $data['fkiEzsigntemplatepackageID'] ?? null;
        $this->container['fkiEzsigntemplateID'] = $data['fkiEzsigntemplateID'] ?? null;
        $this->container['iEzsignbulksenddocumentmappingOrder'] = $data['iEzsignbulksenddocumentmappingOrder'] ?? null;
        $this->container['objEzsigntemplate'] = $data['objEzsigntemplate'] ?? null;
        $this->container['objEzsigntemplatepackage'] = $data['objEzsigntemplatepackage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignbulksenddocumentmappingID'] === null) {
            $invalidProperties[] = "'pkiEzsignbulksenddocumentmappingID' can't be null";
        }
        if (($this->container['pkiEzsignbulksenddocumentmappingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignbulksenddocumentmappingID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'fkiEzsignbulksendID' can't be null";
        }
        if (($this->container['fkiEzsignbulksendID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignbulksendID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplatepackageID']) && ($this->container['fkiEzsigntemplatepackageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplatepackageID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntemplateID']) && ($this->container['fkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignbulksenddocumentmappingOrder'] === null) {
            $invalidProperties[] = "'iEzsignbulksenddocumentmappingOrder' can't be null";
        }
        if (($this->container['iEzsignbulksenddocumentmappingOrder'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignbulksenddocumentmappingOrder', must be bigger than or equal to 0.";
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
     * Gets pkiEzsignbulksenddocumentmappingID
     *
     * @return int
     */
    public function getPkiEzsignbulksenddocumentmappingID()
    {
        return $this->container['pkiEzsignbulksenddocumentmappingID'];
    }

    /**
     * Sets pkiEzsignbulksenddocumentmappingID
     *
     * @param int $pkiEzsignbulksenddocumentmappingID The unique ID of the Ezsignbulksenddocumentmapping.
     *
     * @return self
     */
    public function setPkiEzsignbulksenddocumentmappingID($pkiEzsignbulksenddocumentmappingID)
    {

        if (($pkiEzsignbulksenddocumentmappingID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksenddocumentmappingID when calling EzsignbulksenddocumentmappingResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsignbulksenddocumentmappingID'] = $pkiEzsignbulksenddocumentmappingID;

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

        if (($fkiEzsignbulksendID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignbulksendID when calling EzsignbulksenddocumentmappingResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsignbulksendID'] = $fkiEzsignbulksendID;

        return $this;
    }

    /**
     * Gets fkiEzsigntemplatepackageID
     *
     * @return int|null
     */
    public function getFkiEzsigntemplatepackageID()
    {
        return $this->container['fkiEzsigntemplatepackageID'];
    }

    /**
     * Sets fkiEzsigntemplatepackageID
     *
     * @param int|null $fkiEzsigntemplatepackageID The unique ID of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setFkiEzsigntemplatepackageID($fkiEzsigntemplatepackageID)
    {

        if (!is_null($fkiEzsigntemplatepackageID) && ($fkiEzsigntemplatepackageID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplatepackageID when calling EzsignbulksenddocumentmappingResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsigntemplatepackageID'] = $fkiEzsigntemplatepackageID;

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateID
     *
     * @return int|null
     */
    public function getFkiEzsigntemplateID()
    {
        return $this->container['fkiEzsigntemplateID'];
    }

    /**
     * Sets fkiEzsigntemplateID
     *
     * @param int|null $fkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setFkiEzsigntemplateID($fkiEzsigntemplateID)
    {

        if (!is_null($fkiEzsigntemplateID) && ($fkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateID when calling EzsignbulksenddocumentmappingResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsigntemplateID'] = $fkiEzsigntemplateID;

        return $this;
    }

    /**
     * Gets iEzsignbulksenddocumentmappingOrder
     *
     * @return int
     */
    public function getIEzsignbulksenddocumentmappingOrder()
    {
        return $this->container['iEzsignbulksenddocumentmappingOrder'];
    }

    /**
     * Sets iEzsignbulksenddocumentmappingOrder
     *
     * @param int $iEzsignbulksenddocumentmappingOrder The order in which the Ezsigntemplate or Ezsigntemplatepackage will be presented to the signatory in the Ezsignfolder.
     *
     * @return self
     */
    public function setIEzsignbulksenddocumentmappingOrder($iEzsignbulksenddocumentmappingOrder)
    {

        if (($iEzsignbulksenddocumentmappingOrder < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignbulksenddocumentmappingOrder when calling EzsignbulksenddocumentmappingResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignbulksenddocumentmappingOrder'] = $iEzsignbulksenddocumentmappingOrder;

        return $this;
    }

    /**
     * Gets objEzsigntemplate
     *
     * @return \eZmaxAPI\Model\EzsigntemplateResponseCompound|null
     */
    public function getObjEzsigntemplate()
    {
        return $this->container['objEzsigntemplate'];
    }

    /**
     * Sets objEzsigntemplate
     *
     * @param \eZmaxAPI\Model\EzsigntemplateResponseCompound|null $objEzsigntemplate objEzsigntemplate
     *
     * @return self
     */
    public function setObjEzsigntemplate($objEzsigntemplate)
    {
        $this->container['objEzsigntemplate'] = $objEzsigntemplate;

        return $this;
    }

    /**
     * Gets objEzsigntemplatepackage
     *
     * @return \eZmaxAPI\Model\EzsigntemplatepackageResponseCompound|null
     */
    public function getObjEzsigntemplatepackage()
    {
        return $this->container['objEzsigntemplatepackage'];
    }

    /**
     * Sets objEzsigntemplatepackage
     *
     * @param \eZmaxAPI\Model\EzsigntemplatepackageResponseCompound|null $objEzsigntemplatepackage objEzsigntemplatepackage
     *
     * @return self
     */
    public function setObjEzsigntemplatepackage($objEzsigntemplatepackage)
    {
        $this->container['objEzsigntemplatepackage'] = $objEzsigntemplatepackage;

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


