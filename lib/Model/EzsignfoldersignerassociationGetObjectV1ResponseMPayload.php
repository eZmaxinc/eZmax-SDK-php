<?php
/**
 * EzsignfoldersignerassociationGetObjectV1ResponseMPayload
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
 * EzsignfoldersignerassociationGetObjectV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for GET /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignfoldersignerassociationGetObjectV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfoldersignerassociation-getObject-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfoldersignerassociationID' => 'int',
        'fkiEzsignfolderID' => 'int',
        'bEzsignfoldersignerassociationReceivecopy' => 'bool',
        'objUser' => '\eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompoundUser',
        'objEzsignsigner' => '\eZmaxAPI\Model\EzsignsignerResponseCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignfoldersignerassociationID' => null,
        'fkiEzsignfolderID' => null,
        'bEzsignfoldersignerassociationReceivecopy' => null,
        'objUser' => null,
        'objEzsignsigner' => null
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
        'pkiEzsignfoldersignerassociationID' => 'pkiEzsignfoldersignerassociationID',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'bEzsignfoldersignerassociationReceivecopy',
        'objUser' => 'objUser',
        'objEzsignsigner' => 'objEzsignsigner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfoldersignerassociationID' => 'setPkiEzsignfoldersignerassociationID',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'setBEzsignfoldersignerassociationReceivecopy',
        'objUser' => 'setObjUser',
        'objEzsignsigner' => 'setObjEzsignsigner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfoldersignerassociationID' => 'getPkiEzsignfoldersignerassociationID',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'getBEzsignfoldersignerassociationReceivecopy',
        'objUser' => 'getObjUser',
        'objEzsignsigner' => 'getObjEzsignsigner'
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
        $this->container['pkiEzsignfoldersignerassociationID'] = $data['pkiEzsignfoldersignerassociationID'] ?? null;
        $this->container['fkiEzsignfolderID'] = $data['fkiEzsignfolderID'] ?? null;
        $this->container['bEzsignfoldersignerassociationReceivecopy'] = $data['bEzsignfoldersignerassociationReceivecopy'] ?? null;
        $this->container['objUser'] = $data['objUser'] ?? null;
        $this->container['objEzsignsigner'] = $data['objEzsignsigner'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignfoldersignerassociationID'] === null) {
            $invalidProperties[] = "'pkiEzsignfoldersignerassociationID' can't be null";
        }
        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if ($this->container['bEzsignfoldersignerassociationReceivecopy'] === null) {
            $invalidProperties[] = "'bEzsignfoldersignerassociationReceivecopy' can't be null";
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
     * Gets pkiEzsignfoldersignerassociationID
     *
     * @return int
     */
    public function getPkiEzsignfoldersignerassociationID()
    {
        return $this->container['pkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets pkiEzsignfoldersignerassociationID
     *
     * @param int $pkiEzsignfoldersignerassociationID The unique ID of the Ezsignfoldersignerassociation
     *
     * @return self
     */
    public function setPkiEzsignfoldersignerassociationID($pkiEzsignfoldersignerassociationID)
    {
        $this->container['pkiEzsignfoldersignerassociationID'] = $pkiEzsignfoldersignerassociationID;

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
     * @return bool
     */
    public function getBEzsignfoldersignerassociationReceivecopy()
    {
        return $this->container['bEzsignfoldersignerassociationReceivecopy'];
    }

    /**
     * Sets bEzsignfoldersignerassociationReceivecopy
     *
     * @param bool $bEzsignfoldersignerassociationReceivecopy If this flag is true. The signatory will receive a copy of every signed Ezsigndocument even if it ain't required to sign the document.
     *
     * @return self
     */
    public function setBEzsignfoldersignerassociationReceivecopy($bEzsignfoldersignerassociationReceivecopy)
    {
        $this->container['bEzsignfoldersignerassociationReceivecopy'] = $bEzsignfoldersignerassociationReceivecopy;

        return $this;
    }

    /**
     * Gets objUser
     *
     * @return \eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompoundUser|null
     */
    public function getObjUser()
    {
        return $this->container['objUser'];
    }

    /**
     * Sets objUser
     *
     * @param \eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompoundUser|null $objUser objUser
     *
     * @return self
     */
    public function setObjUser($objUser)
    {
        $this->container['objUser'] = $objUser;

        return $this;
    }

    /**
     * Gets objEzsignsigner
     *
     * @return \eZmaxAPI\Model\EzsignsignerResponseCompound|null
     */
    public function getObjEzsignsigner()
    {
        return $this->container['objEzsignsigner'];
    }

    /**
     * Sets objEzsignsigner
     *
     * @param \eZmaxAPI\Model\EzsignsignerResponseCompound|null $objEzsignsigner objEzsignsigner
     *
     * @return self
     */
    public function setObjEzsignsigner($objEzsignsigner)
    {
        $this->container['objEzsignsigner'] = $objEzsignsigner;

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


