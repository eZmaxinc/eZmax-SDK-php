<?php
/**
 * WebhookRequestCompound
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
 * The version of the OpenAPI document: 1.1.10
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * WebhookRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Webhook Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'webhook-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiWebhookID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'sWebhookDescription' => 'string',
        'eWebhookModule' => '\eZmaxAPI\Model\FieldEWebhookModule',
        'eWebhookEzsignevent' => '\eZmaxAPI\Model\FieldEWebhookEzsignevent',
        'eWebhookManagementevent' => '\eZmaxAPI\Model\FieldEWebhookManagementevent',
        'sWebhookUrl' => 'string',
        'sWebhookEmailfailed' => 'string',
        'bWebhookIsactive' => 'bool',
        'bWebhookSkipsslvalidation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiWebhookID' => null,
        'fkiEzsignfoldertypeID' => null,
        'sWebhookDescription' => null,
        'eWebhookModule' => null,
        'eWebhookEzsignevent' => null,
        'eWebhookManagementevent' => null,
        'sWebhookUrl' => null,
        'sWebhookEmailfailed' => null,
        'bWebhookIsactive' => null,
        'bWebhookSkipsslvalidation' => null
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
        'pkiWebhookID' => 'pkiWebhookID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'sWebhookDescription' => 'sWebhookDescription',
        'eWebhookModule' => 'eWebhookModule',
        'eWebhookEzsignevent' => 'eWebhookEzsignevent',
        'eWebhookManagementevent' => 'eWebhookManagementevent',
        'sWebhookUrl' => 'sWebhookUrl',
        'sWebhookEmailfailed' => 'sWebhookEmailfailed',
        'bWebhookIsactive' => 'bWebhookIsactive',
        'bWebhookSkipsslvalidation' => 'bWebhookSkipsslvalidation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiWebhookID' => 'setPkiWebhookID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'sWebhookDescription' => 'setSWebhookDescription',
        'eWebhookModule' => 'setEWebhookModule',
        'eWebhookEzsignevent' => 'setEWebhookEzsignevent',
        'eWebhookManagementevent' => 'setEWebhookManagementevent',
        'sWebhookUrl' => 'setSWebhookUrl',
        'sWebhookEmailfailed' => 'setSWebhookEmailfailed',
        'bWebhookIsactive' => 'setBWebhookIsactive',
        'bWebhookSkipsslvalidation' => 'setBWebhookSkipsslvalidation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiWebhookID' => 'getPkiWebhookID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'sWebhookDescription' => 'getSWebhookDescription',
        'eWebhookModule' => 'getEWebhookModule',
        'eWebhookEzsignevent' => 'getEWebhookEzsignevent',
        'eWebhookManagementevent' => 'getEWebhookManagementevent',
        'sWebhookUrl' => 'getSWebhookUrl',
        'sWebhookEmailfailed' => 'getSWebhookEmailfailed',
        'bWebhookIsactive' => 'getBWebhookIsactive',
        'bWebhookSkipsslvalidation' => 'getBWebhookSkipsslvalidation'
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
        $this->container['pkiWebhookID'] = $data['pkiWebhookID'] ?? null;
        $this->container['fkiEzsignfoldertypeID'] = $data['fkiEzsignfoldertypeID'] ?? null;
        $this->container['sWebhookDescription'] = $data['sWebhookDescription'] ?? null;
        $this->container['eWebhookModule'] = $data['eWebhookModule'] ?? null;
        $this->container['eWebhookEzsignevent'] = $data['eWebhookEzsignevent'] ?? null;
        $this->container['eWebhookManagementevent'] = $data['eWebhookManagementevent'] ?? null;
        $this->container['sWebhookUrl'] = $data['sWebhookUrl'] ?? null;
        $this->container['sWebhookEmailfailed'] = $data['sWebhookEmailfailed'] ?? null;
        $this->container['bWebhookIsactive'] = $data['bWebhookIsactive'] ?? null;
        $this->container['bWebhookSkipsslvalidation'] = $data['bWebhookSkipsslvalidation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sWebhookDescription'] === null) {
            $invalidProperties[] = "'sWebhookDescription' can't be null";
        }
        if ($this->container['eWebhookModule'] === null) {
            $invalidProperties[] = "'eWebhookModule' can't be null";
        }
        if ($this->container['sWebhookUrl'] === null) {
            $invalidProperties[] = "'sWebhookUrl' can't be null";
        }
        if ($this->container['sWebhookEmailfailed'] === null) {
            $invalidProperties[] = "'sWebhookEmailfailed' can't be null";
        }
        if ($this->container['bWebhookIsactive'] === null) {
            $invalidProperties[] = "'bWebhookIsactive' can't be null";
        }
        if ($this->container['bWebhookSkipsslvalidation'] === null) {
            $invalidProperties[] = "'bWebhookSkipsslvalidation' can't be null";
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
     * Gets pkiWebhookID
     *
     * @return int|null
     */
    public function getPkiWebhookID()
    {
        return $this->container['pkiWebhookID'];
    }

    /**
     * Sets pkiWebhookID
     *
     * @param int|null $pkiWebhookID The unique ID of the Webhook
     *
     * @return self
     */
    public function setPkiWebhookID($pkiWebhookID)
    {
        $this->container['pkiWebhookID'] = $pkiWebhookID;

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int|null
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int|null $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {

        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling WebhookRequestCompound., must be bigger than or equal to 0.');
        }

        $this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;

        return $this;
    }

    /**
     * Gets sWebhookDescription
     *
     * @return string
     */
    public function getSWebhookDescription()
    {
        return $this->container['sWebhookDescription'];
    }

    /**
     * Sets sWebhookDescription
     *
     * @param string $sWebhookDescription The description of the Webhook
     *
     * @return self
     */
    public function setSWebhookDescription($sWebhookDescription)
    {
        $this->container['sWebhookDescription'] = $sWebhookDescription;

        return $this;
    }

    /**
     * Gets eWebhookModule
     *
     * @return \eZmaxAPI\Model\FieldEWebhookModule
     */
    public function getEWebhookModule()
    {
        return $this->container['eWebhookModule'];
    }

    /**
     * Sets eWebhookModule
     *
     * @param \eZmaxAPI\Model\FieldEWebhookModule $eWebhookModule eWebhookModule
     *
     * @return self
     */
    public function setEWebhookModule($eWebhookModule)
    {
        $this->container['eWebhookModule'] = $eWebhookModule;

        return $this;
    }

    /**
     * Gets eWebhookEzsignevent
     *
     * @return \eZmaxAPI\Model\FieldEWebhookEzsignevent|null
     */
    public function getEWebhookEzsignevent()
    {
        return $this->container['eWebhookEzsignevent'];
    }

    /**
     * Sets eWebhookEzsignevent
     *
     * @param \eZmaxAPI\Model\FieldEWebhookEzsignevent|null $eWebhookEzsignevent eWebhookEzsignevent
     *
     * @return self
     */
    public function setEWebhookEzsignevent($eWebhookEzsignevent)
    {
        $this->container['eWebhookEzsignevent'] = $eWebhookEzsignevent;

        return $this;
    }

    /**
     * Gets eWebhookManagementevent
     *
     * @return \eZmaxAPI\Model\FieldEWebhookManagementevent|null
     */
    public function getEWebhookManagementevent()
    {
        return $this->container['eWebhookManagementevent'];
    }

    /**
     * Sets eWebhookManagementevent
     *
     * @param \eZmaxAPI\Model\FieldEWebhookManagementevent|null $eWebhookManagementevent eWebhookManagementevent
     *
     * @return self
     */
    public function setEWebhookManagementevent($eWebhookManagementevent)
    {
        $this->container['eWebhookManagementevent'] = $eWebhookManagementevent;

        return $this;
    }

    /**
     * Gets sWebhookUrl
     *
     * @return string
     */
    public function getSWebhookUrl()
    {
        return $this->container['sWebhookUrl'];
    }

    /**
     * Sets sWebhookUrl
     *
     * @param string $sWebhookUrl The URL of the Webhook callback
     *
     * @return self
     */
    public function setSWebhookUrl($sWebhookUrl)
    {
        $this->container['sWebhookUrl'] = $sWebhookUrl;

        return $this;
    }

    /**
     * Gets sWebhookEmailfailed
     *
     * @return string
     */
    public function getSWebhookEmailfailed()
    {
        return $this->container['sWebhookEmailfailed'];
    }

    /**
     * Sets sWebhookEmailfailed
     *
     * @param string $sWebhookEmailfailed The email that will receive the Webhook in case all attempts fail
     *
     * @return self
     */
    public function setSWebhookEmailfailed($sWebhookEmailfailed)
    {
        $this->container['sWebhookEmailfailed'] = $sWebhookEmailfailed;

        return $this;
    }

    /**
     * Gets bWebhookIsactive
     *
     * @return bool
     */
    public function getBWebhookIsactive()
    {
        return $this->container['bWebhookIsactive'];
    }

    /**
     * Sets bWebhookIsactive
     *
     * @param bool $bWebhookIsactive Whether the Webhook is active or not
     *
     * @return self
     */
    public function setBWebhookIsactive($bWebhookIsactive)
    {
        $this->container['bWebhookIsactive'] = $bWebhookIsactive;

        return $this;
    }

    /**
     * Gets bWebhookSkipsslvalidation
     *
     * @return bool
     */
    public function getBWebhookSkipsslvalidation()
    {
        return $this->container['bWebhookSkipsslvalidation'];
    }

    /**
     * Sets bWebhookSkipsslvalidation
     *
     * @param bool $bWebhookSkipsslvalidation Wheter the server's SSL certificate should be validated or not. Not recommended to skip for production use
     *
     * @return self
     */
    public function setBWebhookSkipsslvalidation($bWebhookSkipsslvalidation)
    {
        $this->container['bWebhookSkipsslvalidation'] = $bWebhookSkipsslvalidation;

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


