<?php
/**
 * EzsignfolderListElement
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
 * The version of the OpenAPI document: 1.1.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
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
 * EzsignfolderListElement Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignfolderListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfolderID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'sEzsignfoldertypeNameX' => 'string',
        'sEzsignfolderDescription' => 'string',
        'eEzsignfolderStep' => '\eZmaxAPI\Model\FieldEEzsignfolderStep',
        'dtCreatedDate' => 'string',
        'dtEzsignfolderSentdate' => 'OneOfStringObject',
        'dtDueDate' => 'OneOfStringObject',
        'iTotalDocument' => 'int',
        'iTotalDocumentEdm' => 'int',
        'iTotalSignature' => 'int',
        'iTotalSignatureSigned' => 'int'
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
        'fkiEzsignfoldertypeID' => null,
        'sEzsignfoldertypeNameX' => null,
        'sEzsignfolderDescription' => null,
        'eEzsignfolderStep' => null,
        'dtCreatedDate' => null,
        'dtEzsignfolderSentdate' => null,
        'dtDueDate' => null,
        'iTotalDocument' => null,
        'iTotalDocumentEdm' => null,
        'iTotalSignature' => null,
        'iTotalSignatureSigned' => null
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
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'eEzsignfolderStep' => 'eEzsignfolderStep',
        'dtCreatedDate' => 'dtCreatedDate',
        'dtEzsignfolderSentdate' => 'dtEzsignfolderSentdate',
        'dtDueDate' => 'dtDueDate',
        'iTotalDocument' => 'iTotalDocument',
        'iTotalDocumentEdm' => 'iTotalDocumentEdm',
        'iTotalSignature' => 'iTotalSignature',
        'iTotalSignatureSigned' => 'iTotalSignatureSigned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'eEzsignfolderStep' => 'setEEzsignfolderStep',
        'dtCreatedDate' => 'setDtCreatedDate',
        'dtEzsignfolderSentdate' => 'setDtEzsignfolderSentdate',
        'dtDueDate' => 'setDtDueDate',
        'iTotalDocument' => 'setITotalDocument',
        'iTotalDocumentEdm' => 'setITotalDocumentEdm',
        'iTotalSignature' => 'setITotalSignature',
        'iTotalSignatureSigned' => 'setITotalSignatureSigned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'eEzsignfolderStep' => 'getEEzsignfolderStep',
        'dtCreatedDate' => 'getDtCreatedDate',
        'dtEzsignfolderSentdate' => 'getDtEzsignfolderSentdate',
        'dtDueDate' => 'getDtDueDate',
        'iTotalDocument' => 'getITotalDocument',
        'iTotalDocumentEdm' => 'getITotalDocumentEdm',
        'iTotalSignature' => 'getITotalSignature',
        'iTotalSignatureSigned' => 'getITotalSignatureSigned'
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
        $this->container['fkiEzsignfoldertypeID'] = $data['fkiEzsignfoldertypeID'] ?? null;
        $this->container['sEzsignfoldertypeNameX'] = $data['sEzsignfoldertypeNameX'] ?? null;
        $this->container['sEzsignfolderDescription'] = $data['sEzsignfolderDescription'] ?? null;
        $this->container['eEzsignfolderStep'] = $data['eEzsignfolderStep'] ?? null;
        $this->container['dtCreatedDate'] = $data['dtCreatedDate'] ?? null;
        $this->container['dtEzsignfolderSentdate'] = $data['dtEzsignfolderSentdate'] ?? null;
        $this->container['dtDueDate'] = $data['dtDueDate'] ?? null;
        $this->container['iTotalDocument'] = $data['iTotalDocument'] ?? null;
        $this->container['iTotalDocumentEdm'] = $data['iTotalDocumentEdm'] ?? null;
        $this->container['iTotalSignature'] = $data['iTotalSignature'] ?? null;
        $this->container['iTotalSignatureSigned'] = $data['iTotalSignatureSigned'] ?? null;
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
        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
        if ($this->container['eEzsignfolderStep'] === null) {
            $invalidProperties[] = "'eEzsignfolderStep' can't be null";
        }
        if ($this->container['dtCreatedDate'] === null) {
            $invalidProperties[] = "'dtCreatedDate' can't be null";
        }
        if ($this->container['dtEzsignfolderSentdate'] === null) {
            $invalidProperties[] = "'dtEzsignfolderSentdate' can't be null";
        }
        if ($this->container['dtDueDate'] === null) {
            $invalidProperties[] = "'dtDueDate' can't be null";
        }
        if ($this->container['iTotalDocument'] === null) {
            $invalidProperties[] = "'iTotalDocument' can't be null";
        }
        if ($this->container['iTotalDocumentEdm'] === null) {
            $invalidProperties[] = "'iTotalDocumentEdm' can't be null";
        }
        if ($this->container['iTotalSignature'] === null) {
            $invalidProperties[] = "'iTotalSignature' can't be null";
        }
        if ($this->container['iTotalSignatureSigned'] === null) {
            $invalidProperties[] = "'iTotalSignatureSigned' can't be null";
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
     * Gets sEzsignfolderDescription
     *
     * @return string
     */
    public function getSEzsignfolderDescription()
    {
        return $this->container['sEzsignfolderDescription'];
    }

    /**
     * Sets sEzsignfolderDescription
     *
     * @param string $sEzsignfolderDescription The description of the Ezsign Folder
     *
     * @return self
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {
        $this->container['sEzsignfolderDescription'] = $sEzsignfolderDescription;

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
     * Gets dtCreatedDate
     *
     * @return string
     */
    public function getDtCreatedDate()
    {
        return $this->container['dtCreatedDate'];
    }

    /**
     * Sets dtCreatedDate
     *
     * @param string $dtCreatedDate The date and time at which the object was created
     *
     * @return self
     */
    public function setDtCreatedDate($dtCreatedDate)
    {
        $this->container['dtCreatedDate'] = $dtCreatedDate;

        return $this;
    }

    /**
     * Gets dtEzsignfolderSentdate
     *
     * @return OneOfStringObject
     */
    public function getDtEzsignfolderSentdate()
    {
        return $this->container['dtEzsignfolderSentdate'];
    }

    /**
     * Sets dtEzsignfolderSentdate
     *
     * @param OneOfStringObject $dtEzsignfolderSentdate dtEzsignfolderSentdate
     *
     * @return self
     */
    public function setDtEzsignfolderSentdate($dtEzsignfolderSentdate)
    {
        $this->container['dtEzsignfolderSentdate'] = $dtEzsignfolderSentdate;

        return $this;
    }

    /**
     * Gets dtDueDate
     *
     * @return OneOfStringObject
     */
    public function getDtDueDate()
    {
        return $this->container['dtDueDate'];
    }

    /**
     * Sets dtDueDate
     *
     * @param OneOfStringObject $dtDueDate The date at which no more signature will be accepted on the folder
     *
     * @return self
     */
    public function setDtDueDate($dtDueDate)
    {
        $this->container['dtDueDate'] = $dtDueDate;

        return $this;
    }

    /**
     * Gets iTotalDocument
     *
     * @return int
     */
    public function getITotalDocument()
    {
        return $this->container['iTotalDocument'];
    }

    /**
     * Sets iTotalDocument
     *
     * @param int $iTotalDocument The total number of Ezsigndocument in the folder
     *
     * @return self
     */
    public function setITotalDocument($iTotalDocument)
    {
        $this->container['iTotalDocument'] = $iTotalDocument;

        return $this;
    }

    /**
     * Gets iTotalDocumentEdm
     *
     * @return int
     */
    public function getITotalDocumentEdm()
    {
        return $this->container['iTotalDocumentEdm'];
    }

    /**
     * Sets iTotalDocumentEdm
     *
     * @param int $iTotalDocumentEdm The total number of Ezsigndocument in the folder that were saved in the edm system
     *
     * @return self
     */
    public function setITotalDocumentEdm($iTotalDocumentEdm)
    {
        $this->container['iTotalDocumentEdm'] = $iTotalDocumentEdm;

        return $this;
    }

    /**
     * Gets iTotalSignature
     *
     * @return int
     */
    public function getITotalSignature()
    {
        return $this->container['iTotalSignature'];
    }

    /**
     * Sets iTotalSignature
     *
     * @param int $iTotalSignature The total number of signature blocks in all Ezsigndocuments in the folder
     *
     * @return self
     */
    public function setITotalSignature($iTotalSignature)
    {
        $this->container['iTotalSignature'] = $iTotalSignature;

        return $this;
    }

    /**
     * Gets iTotalSignatureSigned
     *
     * @return int
     */
    public function getITotalSignatureSigned()
    {
        return $this->container['iTotalSignatureSigned'];
    }

    /**
     * Sets iTotalSignatureSigned
     *
     * @param int $iTotalSignatureSigned The total number of already signed signature blocks in all Ezsigndocuments in the folder
     *
     * @return self
     */
    public function setITotalSignatureSigned($iTotalSignatureSigned)
    {
        $this->container['iTotalSignatureSigned'] = $iTotalSignatureSigned;

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


