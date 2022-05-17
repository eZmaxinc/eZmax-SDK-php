<?php
/**
 * WebhookEzsignDocumentCompleted
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
 * WebhookEzsignDocumentCompleted Class Doc Comment
 *
 * @category Class
 * @description This is the base Webhook object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookEzsignDocumentCompleted implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Webhook-Ezsign-DocumentCompleted';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objEzsigndocument' => '\eZmaxAPI\Model\EzsigndocumentResponse',
        'objWebhook' => '\eZmaxAPI\Model\WebhookResponse',
        'aObjAttempt' => '\eZmaxAPI\Model\AttemptResponseCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'objEzsigndocument' => null,
        'objWebhook' => null,
        'aObjAttempt' => null
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
        'objEzsigndocument' => 'objEzsigndocument',
        'objWebhook' => 'objWebhook',
        'aObjAttempt' => 'a_objAttempt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objEzsigndocument' => 'setObjEzsigndocument',
        'objWebhook' => 'setObjWebhook',
        'aObjAttempt' => 'setAObjAttempt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objEzsigndocument' => 'getObjEzsigndocument',
        'objWebhook' => 'getObjWebhook',
        'aObjAttempt' => 'getAObjAttempt'
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
        $this->container['objEzsigndocument'] = $data['objEzsigndocument'] ?? null;
        $this->container['objWebhook'] = $data['objWebhook'] ?? null;
        $this->container['aObjAttempt'] = $data['aObjAttempt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['objEzsigndocument'] === null) {
            $invalidProperties[] = "'objEzsigndocument' can't be null";
        }
        if ($this->container['objWebhook'] === null) {
            $invalidProperties[] = "'objWebhook' can't be null";
        }
        if ($this->container['aObjAttempt'] === null) {
            $invalidProperties[] = "'aObjAttempt' can't be null";
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
     * Gets objEzsigndocument
     *
     * @return \eZmaxAPI\Model\EzsigndocumentResponse
     */
    public function getObjEzsigndocument()
    {
        return $this->container['objEzsigndocument'];
    }

    /**
     * Sets objEzsigndocument
     *
     * @param \eZmaxAPI\Model\EzsigndocumentResponse $objEzsigndocument objEzsigndocument
     *
     * @return self
     */
    public function setObjEzsigndocument($objEzsigndocument)
    {
        $this->container['objEzsigndocument'] = $objEzsigndocument;

        return $this;
    }

    /**
     * Gets objWebhook
     *
     * @return \eZmaxAPI\Model\WebhookResponse
     */
    public function getObjWebhook()
    {
        return $this->container['objWebhook'];
    }

    /**
     * Sets objWebhook
     *
     * @param \eZmaxAPI\Model\WebhookResponse $objWebhook objWebhook
     *
     * @return self
     */
    public function setObjWebhook($objWebhook)
    {
        $this->container['objWebhook'] = $objWebhook;

        return $this;
    }

    /**
     * Gets aObjAttempt
     *
     * @return \eZmaxAPI\Model\AttemptResponseCompound[]
     */
    public function getAObjAttempt()
    {
        return $this->container['aObjAttempt'];
    }

    /**
     * Sets aObjAttempt
     *
     * @param \eZmaxAPI\Model\AttemptResponseCompound[] $aObjAttempt An array containing details of previous attempts that were made to deliver the message. The array is empty if it's the first attempt.
     *
     * @return self
     */
    public function setAObjAttempt($aObjAttempt)
    {
        $this->container['aObjAttempt'] = $aObjAttempt;

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


