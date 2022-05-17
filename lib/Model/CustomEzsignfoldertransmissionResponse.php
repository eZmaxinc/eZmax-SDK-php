<?php
/**
 * CustomEzsignfoldertransmissionResponse
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
 * The version of the OpenAPI document: 1.1.7
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
 * CustomEzsignfoldertransmissionResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder Object in the context of an Ezsignbulksendtransmission
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomEzsignfoldertransmissionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Ezsignfoldertransmission-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfolderID' => 'int',
        'eEzsignfolderStep' => '\eZmaxAPI\Model\FieldEEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'int',
        'iEzsignfolderSignaturesigned' => 'int',
        'aObjEzsignfoldertransmissionSigner' => '\eZmaxAPI\Model\CustomEzsignfoldertransmissionSignerResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignfolderID' => null,
        'eEzsignfolderStep' => null,
        'iEzsignfolderSignaturetotal' => null,
        'iEzsignfolderSignaturesigned' => null,
        'aObjEzsignfoldertransmissionSigner' => null
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
        'pkiEzsignfolderID' => 'pkiEzsignfolderID',
        'eEzsignfolderStep' => 'eEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'iEzsignfolderSignaturetotal',
        'iEzsignfolderSignaturesigned' => 'iEzsignfolderSignaturesigned',
        'aObjEzsignfoldertransmissionSigner' => 'a_objEzsignfoldertransmissionSigner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'eEzsignfolderStep' => 'setEEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'setIEzsignfolderSignaturetotal',
        'iEzsignfolderSignaturesigned' => 'setIEzsignfolderSignaturesigned',
        'aObjEzsignfoldertransmissionSigner' => 'setAObjEzsignfoldertransmissionSigner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'eEzsignfolderStep' => 'getEEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'getIEzsignfolderSignaturetotal',
        'iEzsignfolderSignaturesigned' => 'getIEzsignfolderSignaturesigned',
        'aObjEzsignfoldertransmissionSigner' => 'getAObjEzsignfoldertransmissionSigner'
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
        $this->container['pkiEzsignfolderID'] = $data['pkiEzsignfolderID'] ?? null;
        $this->container['eEzsignfolderStep'] = $data['eEzsignfolderStep'] ?? null;
        $this->container['iEzsignfolderSignaturetotal'] = $data['iEzsignfolderSignaturetotal'] ?? null;
        $this->container['iEzsignfolderSignaturesigned'] = $data['iEzsignfolderSignaturesigned'] ?? null;
        $this->container['aObjEzsignfoldertransmissionSigner'] = $data['aObjEzsignfoldertransmissionSigner'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'pkiEzsignfolderID' can't be null";
        }
        if ($this->container['eEzsignfolderStep'] === null) {
            $invalidProperties[] = "'eEzsignfolderStep' can't be null";
        }
        if ($this->container['iEzsignfolderSignaturetotal'] === null) {
            $invalidProperties[] = "'iEzsignfolderSignaturetotal' can't be null";
        }
        if ($this->container['iEzsignfolderSignaturesigned'] === null) {
            $invalidProperties[] = "'iEzsignfolderSignaturesigned' can't be null";
        }
        if ($this->container['aObjEzsignfoldertransmissionSigner'] === null) {
            $invalidProperties[] = "'aObjEzsignfoldertransmissionSigner' can't be null";
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
     * Gets pkiEzsignfolderID
     *
     * @return int
     */
    public function getPkiEzsignfolderID()
    {
        return $this->container['pkiEzsignfolderID'];
    }

    /**
     * Sets pkiEzsignfolderID
     *
     * @param int $pkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setPkiEzsignfolderID($pkiEzsignfolderID)
    {
        $this->container['pkiEzsignfolderID'] = $pkiEzsignfolderID;

        return $this;
    }

    /**
     * Gets eEzsignfolderStep
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderStep
     */
    public function getEEzsignfolderStep()
    {
        return $this->container['eEzsignfolderStep'];
    }

    /**
     * Sets eEzsignfolderStep
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderStep $eEzsignfolderStep eEzsignfolderStep
     *
     * @return self
     */
    public function setEEzsignfolderStep($eEzsignfolderStep)
    {
        $this->container['eEzsignfolderStep'] = $eEzsignfolderStep;

        return $this;
    }

    /**
     * Gets iEzsignfolderSignaturetotal
     *
     * @return int
     */
    public function getIEzsignfolderSignaturetotal()
    {
        return $this->container['iEzsignfolderSignaturetotal'];
    }

    /**
     * Sets iEzsignfolderSignaturetotal
     *
     * @param int $iEzsignfolderSignaturetotal The number of total signatures that were requested in the Ezsignfolder
     *
     * @return self
     */
    public function setIEzsignfolderSignaturetotal($iEzsignfolderSignaturetotal)
    {
        $this->container['iEzsignfolderSignaturetotal'] = $iEzsignfolderSignaturetotal;

        return $this;
    }

    /**
     * Gets iEzsignfolderSignaturesigned
     *
     * @return int
     */
    public function getIEzsignfolderSignaturesigned()
    {
        return $this->container['iEzsignfolderSignaturesigned'];
    }

    /**
     * Sets iEzsignfolderSignaturesigned
     *
     * @param int $iEzsignfolderSignaturesigned The number of signatures that were signed in the Ezsignfolder.
     *
     * @return self
     */
    public function setIEzsignfolderSignaturesigned($iEzsignfolderSignaturesigned)
    {
        $this->container['iEzsignfolderSignaturesigned'] = $iEzsignfolderSignaturesigned;

        return $this;
    }

    /**
     * Gets aObjEzsignfoldertransmissionSigner
     *
     * @return \eZmaxAPI\Model\CustomEzsignfoldertransmissionSignerResponse[]
     */
    public function getAObjEzsignfoldertransmissionSigner()
    {
        return $this->container['aObjEzsignfoldertransmissionSigner'];
    }

    /**
     * Sets aObjEzsignfoldertransmissionSigner
     *
     * @param \eZmaxAPI\Model\CustomEzsignfoldertransmissionSignerResponse[] $aObjEzsignfoldertransmissionSigner aObjEzsignfoldertransmissionSigner
     *
     * @return self
     */
    public function setAObjEzsignfoldertransmissionSigner($aObjEzsignfoldertransmissionSigner)
    {
        $this->container['aObjEzsignfoldertransmissionSigner'] = $aObjEzsignfoldertransmissionSigner;

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

