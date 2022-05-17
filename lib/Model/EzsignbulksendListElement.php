<?php
/**
 * EzsignbulksendListElement
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
 * EzsignbulksendListElement Class Doc Comment
 *
 * @category Class
 * @description An Ezsignbulksend List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignbulksendListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksend-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksendID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'sEzsignbulksendDescription' => 'string',
        'sEzsignfoldertypeNameX' => 'string',
        'bEzsignbulksendNeedvalidation' => 'bool',
        'bEzsignbulksendIsactive' => 'bool',
        'iEzsignbulksendtransmission' => 'int',
        'iEzsignfolder' => 'int',
        'iEzsigndocument' => 'int',
        'iEzsignsignature' => 'int',
        'iEzsignsignatureSigned' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksendID' => null,
        'fkiEzsignfoldertypeID' => null,
        'sEzsignbulksendDescription' => null,
        'sEzsignfoldertypeNameX' => null,
        'bEzsignbulksendNeedvalidation' => null,
        'bEzsignbulksendIsactive' => null,
        'iEzsignbulksendtransmission' => null,
        'iEzsignfolder' => null,
        'iEzsigndocument' => null,
        'iEzsignsignature' => null,
        'iEzsignsignatureSigned' => null
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
        'pkiEzsignbulksendID' => 'pkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'sEzsignbulksendDescription' => 'sEzsignbulksendDescription',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'bEzsignbulksendNeedvalidation' => 'bEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'bEzsignbulksendIsactive',
        'iEzsignbulksendtransmission' => 'iEzsignbulksendtransmission',
        'iEzsignfolder' => 'iEzsignfolder',
        'iEzsigndocument' => 'iEzsigndocument',
        'iEzsignsignature' => 'iEzsignsignature',
        'iEzsignsignatureSigned' => 'iEzsignsignatureSigned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksendID' => 'setPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'sEzsignbulksendDescription' => 'setSEzsignbulksendDescription',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'bEzsignbulksendNeedvalidation' => 'setBEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'setBEzsignbulksendIsactive',
        'iEzsignbulksendtransmission' => 'setIEzsignbulksendtransmission',
        'iEzsignfolder' => 'setIEzsignfolder',
        'iEzsigndocument' => 'setIEzsigndocument',
        'iEzsignsignature' => 'setIEzsignsignature',
        'iEzsignsignatureSigned' => 'setIEzsignsignatureSigned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksendID' => 'getPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'sEzsignbulksendDescription' => 'getSEzsignbulksendDescription',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'bEzsignbulksendNeedvalidation' => 'getBEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'getBEzsignbulksendIsactive',
        'iEzsignbulksendtransmission' => 'getIEzsignbulksendtransmission',
        'iEzsignfolder' => 'getIEzsignfolder',
        'iEzsigndocument' => 'getIEzsigndocument',
        'iEzsignsignature' => 'getIEzsignsignature',
        'iEzsignsignatureSigned' => 'getIEzsignsignatureSigned'
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
        $this->container['pkiEzsignbulksendID'] = $data['pkiEzsignbulksendID'] ?? null;
        $this->container['fkiEzsignfoldertypeID'] = $data['fkiEzsignfoldertypeID'] ?? null;
        $this->container['sEzsignbulksendDescription'] = $data['sEzsignbulksendDescription'] ?? null;
        $this->container['sEzsignfoldertypeNameX'] = $data['sEzsignfoldertypeNameX'] ?? null;
        $this->container['bEzsignbulksendNeedvalidation'] = $data['bEzsignbulksendNeedvalidation'] ?? null;
        $this->container['bEzsignbulksendIsactive'] = $data['bEzsignbulksendIsactive'] ?? null;
        $this->container['iEzsignbulksendtransmission'] = $data['iEzsignbulksendtransmission'] ?? null;
        $this->container['iEzsignfolder'] = $data['iEzsignfolder'] ?? null;
        $this->container['iEzsigndocument'] = $data['iEzsigndocument'] ?? null;
        $this->container['iEzsignsignature'] = $data['iEzsignsignature'] ?? null;
        $this->container['iEzsignsignatureSigned'] = $data['iEzsignsignatureSigned'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'pkiEzsignbulksendID' can't be null";
        }
        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if ($this->container['sEzsignbulksendDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendDescription' can't be null";
        }
        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['bEzsignbulksendNeedvalidation'] === null) {
            $invalidProperties[] = "'bEzsignbulksendNeedvalidation' can't be null";
        }
        if ($this->container['bEzsignbulksendIsactive'] === null) {
            $invalidProperties[] = "'bEzsignbulksendIsactive' can't be null";
        }
        if ($this->container['iEzsignbulksendtransmission'] === null) {
            $invalidProperties[] = "'iEzsignbulksendtransmission' can't be null";
        }
        if ($this->container['iEzsignfolder'] === null) {
            $invalidProperties[] = "'iEzsignfolder' can't be null";
        }
        if ($this->container['iEzsigndocument'] === null) {
            $invalidProperties[] = "'iEzsigndocument' can't be null";
        }
        if ($this->container['iEzsignsignature'] === null) {
            $invalidProperties[] = "'iEzsignsignature' can't be null";
        }
        if ($this->container['iEzsignsignatureSigned'] === null) {
            $invalidProperties[] = "'iEzsignsignatureSigned' can't be null";
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
     * Gets pkiEzsignbulksendID
     *
     * @return int
     */
    public function getPkiEzsignbulksendID()
    {
        return $this->container['pkiEzsignbulksendID'];
    }

    /**
     * Sets pkiEzsignbulksendID
     *
     * @param int $pkiEzsignbulksendID The unique ID of the Ezsignbulksend
     *
     * @return self
     */
    public function setPkiEzsignbulksendID($pkiEzsignbulksendID)
    {
        $this->container['pkiEzsignbulksendID'] = $pkiEzsignbulksendID;

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
        $this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;

        return $this;
    }

    /**
     * Gets sEzsignbulksendDescription
     *
     * @return string
     */
    public function getSEzsignbulksendDescription()
    {
        return $this->container['sEzsignbulksendDescription'];
    }

    /**
     * Sets sEzsignbulksendDescription
     *
     * @param string $sEzsignbulksendDescription The description of the Ezsignbulksend
     *
     * @return self
     */
    public function setSEzsignbulksendDescription($sEzsignbulksendDescription)
    {
        $this->container['sEzsignbulksendDescription'] = $sEzsignbulksendDescription;

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string
     */
    public function getSEzsignfoldertypeNameX()
    {
        return $this->container['sEzsignfoldertypeNameX'];
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {
        $this->container['sEzsignfoldertypeNameX'] = $sEzsignfoldertypeNameX;

        return $this;
    }

    /**
     * Gets bEzsignbulksendNeedvalidation
     *
     * @return bool
     */
    public function getBEzsignbulksendNeedvalidation()
    {
        return $this->container['bEzsignbulksendNeedvalidation'];
    }

    /**
     * Sets bEzsignbulksendNeedvalidation
     *
     * @param bool $bEzsignbulksendNeedvalidation Whether the Ezsigntemplatepackage was automatically modified and needs a manual validation
     *
     * @return self
     */
    public function setBEzsignbulksendNeedvalidation($bEzsignbulksendNeedvalidation)
    {
        $this->container['bEzsignbulksendNeedvalidation'] = $bEzsignbulksendNeedvalidation;

        return $this;
    }

    /**
     * Gets bEzsignbulksendIsactive
     *
     * @return bool
     */
    public function getBEzsignbulksendIsactive()
    {
        return $this->container['bEzsignbulksendIsactive'];
    }

    /**
     * Sets bEzsignbulksendIsactive
     *
     * @param bool $bEzsignbulksendIsactive Whether the Ezsignbulksend is active or not
     *
     * @return self
     */
    public function setBEzsignbulksendIsactive($bEzsignbulksendIsactive)
    {
        $this->container['bEzsignbulksendIsactive'] = $bEzsignbulksendIsactive;

        return $this;
    }

    /**
     * Gets iEzsignbulksendtransmission
     *
     * @return int
     */
    public function getIEzsignbulksendtransmission()
    {
        return $this->container['iEzsignbulksendtransmission'];
    }

    /**
     * Sets iEzsignbulksendtransmission
     *
     * @param int $iEzsignbulksendtransmission The total number of Ezsignbulksendtransmissions in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignbulksendtransmission($iEzsignbulksendtransmission)
    {
        $this->container['iEzsignbulksendtransmission'] = $iEzsignbulksendtransmission;

        return $this;
    }

    /**
     * Gets iEzsignfolder
     *
     * @return int
     */
    public function getIEzsignfolder()
    {
        return $this->container['iEzsignfolder'];
    }

    /**
     * Sets iEzsignfolder
     *
     * @param int $iEzsignfolder The total number of Ezsignfolders in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignfolder($iEzsignfolder)
    {
        $this->container['iEzsignfolder'] = $iEzsignfolder;

        return $this;
    }

    /**
     * Gets iEzsigndocument
     *
     * @return int
     */
    public function getIEzsigndocument()
    {
        return $this->container['iEzsigndocument'];
    }

    /**
     * Sets iEzsigndocument
     *
     * @param int $iEzsigndocument The total number of Ezsigndocuments in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsigndocument($iEzsigndocument)
    {
        $this->container['iEzsigndocument'] = $iEzsigndocument;

        return $this;
    }

    /**
     * Gets iEzsignsignature
     *
     * @return int
     */
    public function getIEzsignsignature()
    {
        return $this->container['iEzsignsignature'];
    }

    /**
     * Sets iEzsignsignature
     *
     * @param int $iEzsignsignature The total number of Ezsignsignature in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignsignature($iEzsignsignature)
    {
        $this->container['iEzsignsignature'] = $iEzsignsignature;

        return $this;
    }

    /**
     * Gets iEzsignsignatureSigned
     *
     * @return int
     */
    public function getIEzsignsignatureSigned()
    {
        return $this->container['iEzsignsignatureSigned'];
    }

    /**
     * Sets iEzsignsignatureSigned
     *
     * @param int $iEzsignsignatureSigned The total number of already signed Ezsignsignature blocks in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignsignatureSigned($iEzsignsignatureSigned)
    {
        $this->container['iEzsignsignatureSigned'] = $iEzsignsignatureSigned;

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


