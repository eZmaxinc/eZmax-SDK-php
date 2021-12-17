<?php
/**
 * EzsignfoldersignerassociationRequestCompound
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
 * The version of the OpenAPI document: 1.1.3
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
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
 * EzsignfoldersignerassociationRequestCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfoldersignerassociation Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignfoldersignerassociationRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfoldersignerassociation-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objEzsignsigner' => '\eZmaxAPI\Model\EzsignsignerRequestCompound',
        'fkiUserID' => 'int',
        'fkiEzsignfolderID' => 'int',
        'bEzsignfoldersignerassociationReceivecopy' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'objEzsignsigner' => null,
        'fkiUserID' => null,
        'fkiEzsignfolderID' => null,
        'bEzsignfoldersignerassociationReceivecopy' => null
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
        'objEzsignsigner' => 'objEzsignsigner',
        'fkiUserID' => 'fkiUserID',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'bEzsignfoldersignerassociationReceivecopy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objEzsignsigner' => 'setObjEzsignsigner',
        'fkiUserID' => 'setFkiUserID',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'setBEzsignfoldersignerassociationReceivecopy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objEzsignsigner' => 'getObjEzsignsigner',
        'fkiUserID' => 'getFkiUserID',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'getBEzsignfoldersignerassociationReceivecopy'
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
        $this->container['objEzsignsigner'] = $data['objEzsignsigner'] ?? null;
        $this->container['fkiUserID'] = $data['fkiUserID'] ?? null;
        $this->container['fkiEzsignfolderID'] = $data['fkiEzsignfolderID'] ?? null;
        $this->container['bEzsignfoldersignerassociationReceivecopy'] = $data['bEzsignfoldersignerassociationReceivecopy'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
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
     * Gets objEzsignsigner
     *
     * @return \eZmaxAPI\Model\EzsignsignerRequestCompound|null
     */
    public function getObjEzsignsigner()
    {
        return $this->container['objEzsignsigner'];
    }

    /**
     * Sets objEzsignsigner
     *
     * @param \eZmaxAPI\Model\EzsignsignerRequestCompound|null $objEzsignsigner objEzsignsigner
     *
     * @return self
     */
    public function setObjEzsignsigner($objEzsignsigner)
    {
        $this->container['objEzsignsigner'] = $objEzsignsigner;

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int|null
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int|null $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
        $this->container['fkiUserID'] = $fkiUserID;

        return $this;
    }

    /**
     * Gets fkiEzsignfolderID
     *
     * @return int
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int $fkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {
        $this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;

        return $this;
    }

    /**
     * Gets bEzsignfoldersignerassociationReceivecopy
     *
     * @return bool|null
     */
    public function getBEzsignfoldersignerassociationReceivecopy()
    {
        return $this->container['bEzsignfoldersignerassociationReceivecopy'];
    }

    /**
     * Sets bEzsignfoldersignerassociationReceivecopy
     *
     * @param bool|null $bEzsignfoldersignerassociationReceivecopy If this flag is true. The signatory will receive a copy of every signed Ezsigndocument even if it ain't required to sign the document.
     *
     * @return self
     */
    public function setBEzsignfoldersignerassociationReceivecopy($bEzsignfoldersignerassociationReceivecopy)
    {
        $this->container['bEzsignfoldersignerassociationReceivecopy'] = $bEzsignfoldersignerassociationReceivecopy;

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


