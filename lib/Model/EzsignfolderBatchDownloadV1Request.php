<?php
/**
 * EzsignfolderBatchDownloadV1Request
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
 * EzsignfolderBatchDownloadV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/ezsignfolder/{pkiEzsignfolderID}/batchDownload
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignfolderBatchDownloadV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-batchDownload-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aPkiEzsigndocumentID' => 'int[]',
        'aEDocumentType' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aPkiEzsigndocumentID' => null,
        'aEDocumentType' => null
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
        'aPkiEzsigndocumentID' => 'a_pkiEzsigndocumentID',
        'aEDocumentType' => 'a_eDocumentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aPkiEzsigndocumentID' => 'setAPkiEzsigndocumentID',
        'aEDocumentType' => 'setAEDocumentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aPkiEzsigndocumentID' => 'getAPkiEzsigndocumentID',
        'aEDocumentType' => 'getAEDocumentType'
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

    public const A_E_DOCUMENT_TYPE_SIGNED = 'Signed';
    public const A_E_DOCUMENT_TYPE_PROOF = 'Proof';
    public const A_E_DOCUMENT_TYPE_PROOFDOCUMENT = 'Proofdocument';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAEDocumentTypeAllowableValues()
    {
        return [
            self::A_E_DOCUMENT_TYPE_SIGNED,
            self::A_E_DOCUMENT_TYPE_PROOF,
            self::A_E_DOCUMENT_TYPE_PROOFDOCUMENT,
        ];
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
        $this->container['aPkiEzsigndocumentID'] = $data['aPkiEzsigndocumentID'] ?? null;
        $this->container['aEDocumentType'] = $data['aEDocumentType'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aPkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'aPkiEzsigndocumentID' can't be null";
        }
        if ($this->container['aEDocumentType'] === null) {
            $invalidProperties[] = "'aEDocumentType' can't be null";
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
     * Gets aPkiEzsigndocumentID
     *
     * @return int[]
     */
    public function getAPkiEzsigndocumentID()
    {
        return $this->container['aPkiEzsigndocumentID'];
    }

    /**
     * Sets aPkiEzsigndocumentID
     *
     * @param int[] $aPkiEzsigndocumentID aPkiEzsigndocumentID
     *
     * @return self
     */
    public function setAPkiEzsigndocumentID($aPkiEzsigndocumentID)
    {
        $this->container['aPkiEzsigndocumentID'] = $aPkiEzsigndocumentID;

        return $this;
    }

    /**
     * Gets aEDocumentType
     *
     * @return string[]
     */
    public function getAEDocumentType()
    {
        return $this->container['aEDocumentType'];
    }

    /**
     * Sets aEDocumentType
     *
     * @param string[] $aEDocumentType The type of document to retrieve.  1. **Signed** Is the final document once all signatures were applied. 2. **Proofdocument** Is the evidence report. 3. **Proof** Is the complete evidence archive including all of the above and more.
     *
     * @return self
     */
    public function setAEDocumentType($aEDocumentType)
    {
        $allowedValues = $this->getAEDocumentTypeAllowableValues();
        if (array_diff($aEDocumentType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'aEDocumentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aEDocumentType'] = $aEDocumentType;

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

