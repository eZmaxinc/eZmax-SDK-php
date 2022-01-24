<?php
/**
 * EzsigndocumentGetWordsPositionsV1Request
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
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
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
 * EzsigndocumentGetWordsPositionsV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for the /1/object/ezsigndocument/{pkiEzsigndocumentID}/getWordsPositions API Request
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsigndocumentGetWordsPositionsV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocument-getWordsPositions-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eGet' => 'string',
        'bWordCaseSensitive' => 'bool',
        'aSWord' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eGet' => null,
        'bWordCaseSensitive' => null,
        'aSWord' => null
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
        'eGet' => 'eGet',
        'bWordCaseSensitive' => 'bWordCaseSensitive',
        'aSWord' => 'a_sWord'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eGet' => 'setEGet',
        'bWordCaseSensitive' => 'setBWordCaseSensitive',
        'aSWord' => 'setASWord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eGet' => 'getEGet',
        'bWordCaseSensitive' => 'getBWordCaseSensitive',
        'aSWord' => 'getASWord'
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

    const E_GET_ALL = 'All';
    const E_GET_WORDS = 'Words';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEGetAllowableValues()
    {
        return [
            self::E_GET_ALL,
            self::E_GET_WORDS,
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
        $this->container['eGet'] = $data['eGet'] ?? null;
        $this->container['bWordCaseSensitive'] = $data['bWordCaseSensitive'] ?? null;
        $this->container['aSWord'] = $data['aSWord'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eGet'] === null) {
            $invalidProperties[] = "'eGet' can't be null";
        }
        $allowedValues = $this->getEGetAllowableValues();
        if (!is_null($this->container['eGet']) && !in_array($this->container['eGet'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eGet', must be one of '%s'",
                $this->container['eGet'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['bWordCaseSensitive'] === null) {
            $invalidProperties[] = "'bWordCaseSensitive' can't be null";
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
     * Gets eGet
     *
     * @return string
     */
    public function getEGet()
    {
        return $this->container['eGet'];
    }

    /**
     * Sets eGet
     *
     * @param string $eGet Specify if you want to retrieve *All* words or specific *Words* from the document. If you specify *Words*, you must send the list of words to search for in *a_sWord*.
     *
     * @return self
     */
    public function setEGet($eGet)
    {
        $allowedValues = $this->getEGetAllowableValues();
        if (!in_array($eGet, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eGet', must be one of '%s'",
                    $eGet,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eGet'] = $eGet;

        return $this;
    }

    /**
     * Gets bWordCaseSensitive
     *
     * @return bool
     */
    public function getBWordCaseSensitive()
    {
        return $this->container['bWordCaseSensitive'];
    }

    /**
     * Sets bWordCaseSensitive
     *
     * @param bool $bWordCaseSensitive IF *true*, words will be searched case-sensitive and results will be returned case-sensitive. IF *false*, words will be searched case-insensitive and results will be returned case-insensitive.
     *
     * @return self
     */
    public function setBWordCaseSensitive($bWordCaseSensitive)
    {
        $this->container['bWordCaseSensitive'] = $bWordCaseSensitive;

        return $this;
    }

    /**
     * Gets aSWord
     *
     * @return string[]|null
     */
    public function getASWord()
    {
        return $this->container['aSWord'];
    }

    /**
     * Sets aSWord
     *
     * @param string[]|null $aSWord Array of words to find in the document
     *
     * @return self
     */
    public function setASWord($aSWord)
    {
        $this->container['aSWord'] = $aSWord;

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


