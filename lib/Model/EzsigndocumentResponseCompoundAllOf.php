<?php
/**
 * EzsigndocumentResponseCompoundAllOf
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.1.4
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
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
        $this->container['iEzsigndocumentStepformtotal'] = $data['iEzsigndocumentStepformtotal'] ?? null;
        $this->container['iEzsigndocumentStepformcurrent'] = $data['iEzsigndocumentStepformcurrent'] ?? null;
        $this->container['iEzsigndocumentStepsignaturetotal'] = $data['iEzsigndocumentStepsignaturetotal'] ?? null;
        $this->container['iEzsigndocumentStepsignatureCurrent'] = $data['iEzsigndocumentStepsignatureCurrent'] ?? null;
        $this->container['aObjEzsignfoldersignerassociationstatus'] = $data['aObjEzsignfoldersignerassociationstatus'] ?? null;
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
        $this->container['iEzsigndocumentStepformtotal'] = $iEzsigndocumentStepformtotal;

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
        $this->container['iEzsigndocumentStepformcurrent'] = $iEzsigndocumentStepformcurrent;

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
        $this->container['iEzsigndocumentStepsignaturetotal'] = $iEzsigndocumentStepsignaturetotal;

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
        $this->container['iEzsigndocumentStepsignatureCurrent'] = $iEzsigndocumentStepsignatureCurrent;

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
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

