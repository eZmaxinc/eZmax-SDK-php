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
 * The version of the OpenAPI document: 1.1.9
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
        $this->container['pkiEzsignbulksendtransmissionID'] = $data['pkiEzsignbulksendtransmissionID'] ?? null;
        $this->container['fkiEzsignbulksendID'] = $data['fkiEzsignbulksendID'] ?? null;
        $this->container['sEzsignbulksendtransmissionDescription'] = $data['sEzsignbulksendtransmissionDescription'] ?? null;
        $this->container['iEzsignbulksendtransmissionErrors'] = $data['iEzsignbulksendtransmissionErrors'] ?? null;
        $this->container['objAudit'] = $data['objAudit'] ?? null;
        $this->container['aObjEzsignfoldertransmission'] = $data['aObjEzsignfoldertransmission'] ?? null;
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

        if (($pkiEzsignbulksendtransmissionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksendtransmissionID when calling EzsignbulksendtransmissionResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsignbulksendtransmissionID'] = $pkiEzsignbulksendtransmissionID;

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
            throw new \InvalidArgumentException('invalid value for $fkiEzsignbulksendID when calling EzsignbulksendtransmissionResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsignbulksendID'] = $fkiEzsignbulksendID;

        return $this;
    }

    /**
     * Gets sEzsignbulksendtransmissionDescription
     *
     * @return string
     */
    public function getSEzsignbulksendtransmissionDescription()
    {
        return $this->container['sEzsignbulksendtransmissionDescription'];
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
        $this->container['sEzsignbulksendtransmissionDescription'] = $sEzsignbulksendtransmissionDescription;

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

        if (($iEzsignbulksendtransmissionErrors < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignbulksendtransmissionErrors when calling EzsignbulksendtransmissionResponseCompound., must be bigger than or equal to 0.');
        }

        $this->container['iEzsignbulksendtransmissionErrors'] = $iEzsignbulksendtransmissionErrors;

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


