<?php
/**
 * EzsignSuggestSignersV1ResponseMPayload
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
 * EzsignSuggestSignersV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for GET /1/module/ezsign/suggestSigners
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignSuggestSignersV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsign-suggestSigners-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aObjEzsignfoldersignerassociation' => '\eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompound[]',
        'aObjUserTeam' => '\eZmaxAPI\Model\CustomUserResponse[]',
        'aObjUser' => '\eZmaxAPI\Model\CustomUserResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aObjEzsignfoldersignerassociation' => null,
        'aObjUserTeam' => null,
        'aObjUser' => null
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
        'aObjEzsignfoldersignerassociation' => 'a_objEzsignfoldersignerassociation',
        'aObjUserTeam' => 'a_objUserTeam',
        'aObjUser' => 'a_objUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aObjEzsignfoldersignerassociation' => 'setAObjEzsignfoldersignerassociation',
        'aObjUserTeam' => 'setAObjUserTeam',
        'aObjUser' => 'setAObjUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aObjEzsignfoldersignerassociation' => 'getAObjEzsignfoldersignerassociation',
        'aObjUserTeam' => 'getAObjUserTeam',
        'aObjUser' => 'getAObjUser'
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
        $this->container['aObjEzsignfoldersignerassociation'] = $data['aObjEzsignfoldersignerassociation'] ?? null;
        $this->container['aObjUserTeam'] = $data['aObjUserTeam'] ?? null;
        $this->container['aObjUser'] = $data['aObjUser'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aObjEzsignfoldersignerassociation'] === null) {
            $invalidProperties[] = "'aObjEzsignfoldersignerassociation' can't be null";
        }
        if ($this->container['aObjUserTeam'] === null) {
            $invalidProperties[] = "'aObjUserTeam' can't be null";
        }
        if ($this->container['aObjUser'] === null) {
            $invalidProperties[] = "'aObjUser' can't be null";
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
     * Gets aObjEzsignfoldersignerassociation
     *
     * @return \eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompound[]
     */
    public function getAObjEzsignfoldersignerassociation()
    {
        return $this->container['aObjEzsignfoldersignerassociation'];
    }

    /**
     * Sets aObjEzsignfoldersignerassociation
     *
     * @param \eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompound[] $aObjEzsignfoldersignerassociation aObjEzsignfoldersignerassociation
     *
     * @return self
     */
    public function setAObjEzsignfoldersignerassociation($aObjEzsignfoldersignerassociation)
    {
        $this->container['aObjEzsignfoldersignerassociation'] = $aObjEzsignfoldersignerassociation;

        return $this;
    }

    /**
     * Gets aObjUserTeam
     *
     * @return \eZmaxAPI\Model\CustomUserResponse[]
     */
    public function getAObjUserTeam()
    {
        return $this->container['aObjUserTeam'];
    }

    /**
     * Sets aObjUserTeam
     *
     * @param \eZmaxAPI\Model\CustomUserResponse[] $aObjUserTeam aObjUserTeam
     *
     * @return self
     */
    public function setAObjUserTeam($aObjUserTeam)
    {
        $this->container['aObjUserTeam'] = $aObjUserTeam;

        return $this;
    }

    /**
     * Gets aObjUser
     *
     * @return \eZmaxAPI\Model\CustomUserResponse[]
     */
    public function getAObjUser()
    {
        return $this->container['aObjUser'];
    }

    /**
     * Sets aObjUser
     *
     * @param \eZmaxAPI\Model\CustomUserResponse[] $aObjUser aObjUser
     *
     * @return self
     */
    public function setAObjUser($aObjUser)
    {
        $this->container['aObjUser'] = $aObjUser;

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


