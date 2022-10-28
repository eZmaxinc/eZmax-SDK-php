<?php
/**
 * WebhookGetObjectV1ResponseMPayload
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
 * The version of the OpenAPI document: 1.1.13
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
 * WebhookGetObjectV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for GET /1/object/webhook/{pkiWebhookID}
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookGetObjectV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'webhook-getObject-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiWebhookID' => 'int',
        'sWebhookDescription' => 'string',
        'fkiEzsignfoldertypeID' => 'int',
        'sEzsignfoldertypeNameX' => 'string',
        'eWebhookModule' => '\eZmaxAPI\Model\FieldEWebhookModule',
        'eWebhookEzsignevent' => '\eZmaxAPI\Model\FieldEWebhookEzsignevent',
        'eWebhookManagementevent' => '\eZmaxAPI\Model\FieldEWebhookManagementevent',
        'sWebhookUrl' => 'string',
        'sWebhookEmailfailed' => 'string',
        'bWebhookIsactive' => 'bool',
        'bWebhookSkipsslvalidation' => 'bool',
        'sWebhookEvent' => 'string'
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
        'sWebhookDescription' => null,
        'fkiEzsignfoldertypeID' => null,
        'sEzsignfoldertypeNameX' => null,
        'eWebhookModule' => null,
        'eWebhookEzsignevent' => null,
        'eWebhookManagementevent' => null,
        'sWebhookUrl' => null,
        'sWebhookEmailfailed' => null,
        'bWebhookIsactive' => null,
        'bWebhookSkipsslvalidation' => null,
        'sWebhookEvent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiWebhookID' => false,
		'sWebhookDescription' => false,
		'fkiEzsignfoldertypeID' => false,
		'sEzsignfoldertypeNameX' => false,
		'eWebhookModule' => false,
		'eWebhookEzsignevent' => false,
		'eWebhookManagementevent' => false,
		'sWebhookUrl' => false,
		'sWebhookEmailfailed' => false,
		'bWebhookIsactive' => false,
		'bWebhookSkipsslvalidation' => false,
		'sWebhookEvent' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pkiWebhookID' => 'pkiWebhookID',
        'sWebhookDescription' => 'sWebhookDescription',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'eWebhookModule' => 'eWebhookModule',
        'eWebhookEzsignevent' => 'eWebhookEzsignevent',
        'eWebhookManagementevent' => 'eWebhookManagementevent',
        'sWebhookUrl' => 'sWebhookUrl',
        'sWebhookEmailfailed' => 'sWebhookEmailfailed',
        'bWebhookIsactive' => 'bWebhookIsactive',
        'bWebhookSkipsslvalidation' => 'bWebhookSkipsslvalidation',
        'sWebhookEvent' => 'sWebhookEvent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiWebhookID' => 'setPkiWebhookID',
        'sWebhookDescription' => 'setSWebhookDescription',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'eWebhookModule' => 'setEWebhookModule',
        'eWebhookEzsignevent' => 'setEWebhookEzsignevent',
        'eWebhookManagementevent' => 'setEWebhookManagementevent',
        'sWebhookUrl' => 'setSWebhookUrl',
        'sWebhookEmailfailed' => 'setSWebhookEmailfailed',
        'bWebhookIsactive' => 'setBWebhookIsactive',
        'bWebhookSkipsslvalidation' => 'setBWebhookSkipsslvalidation',
        'sWebhookEvent' => 'setSWebhookEvent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiWebhookID' => 'getPkiWebhookID',
        'sWebhookDescription' => 'getSWebhookDescription',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'eWebhookModule' => 'getEWebhookModule',
        'eWebhookEzsignevent' => 'getEWebhookEzsignevent',
        'eWebhookManagementevent' => 'getEWebhookManagementevent',
        'sWebhookUrl' => 'getSWebhookUrl',
        'sWebhookEmailfailed' => 'getSWebhookEmailfailed',
        'bWebhookIsactive' => 'getBWebhookIsactive',
        'bWebhookSkipsslvalidation' => 'getBWebhookSkipsslvalidation',
        'sWebhookEvent' => 'getSWebhookEvent'
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
        $this->setIfExists('pkiWebhookID', $data ?? [], null);
        $this->setIfExists('sWebhookDescription', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('eWebhookModule', $data ?? [], null);
        $this->setIfExists('eWebhookEzsignevent', $data ?? [], null);
        $this->setIfExists('eWebhookManagementevent', $data ?? [], null);
        $this->setIfExists('sWebhookUrl', $data ?? [], null);
        $this->setIfExists('sWebhookEmailfailed', $data ?? [], null);
        $this->setIfExists('bWebhookIsactive', $data ?? [], null);
        $this->setIfExists('bWebhookSkipsslvalidation', $data ?? [], null);
        $this->setIfExists('sWebhookEvent', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiWebhookID'] === null) {
            $invalidProperties[] = "'pkiWebhookID' can't be null";
        }
        if ($this->container['sWebhookDescription'] === null) {
            $invalidProperties[] = "'sWebhookDescription' can't be null";
        }
        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
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
        if ($this->container['bWebhookSkipsslvalidation'] === null) {
            $invalidProperties[] = "'bWebhookSkipsslvalidation' can't be null";
        }
        if ($this->container['sWebhookEvent'] === null) {
            $invalidProperties[] = "'sWebhookEvent' can't be null";
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
     * @return int
     */
    public function getPkiWebhookID()
    {
        return $this->container['pkiWebhookID'];
    }

    /**
     * Sets pkiWebhookID
     *
     * @param int $pkiWebhookID The unique ID of the Webhook
     *
     * @return self
     */
    public function setPkiWebhookID($pkiWebhookID)
    {

        //if (is_null($pkiWebhookID)) {
            //throw new \InvalidArgumentException('non-nullable pkiWebhookID cannot be null');
        //}
        $this->container['pkiWebhookID'] = (is_null($pkiWebhookID) ? null : (int) $pkiWebhookID);

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

        //if (is_null($sWebhookDescription)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookDescription cannot be null');
        //}
        $this->container['sWebhookDescription'] = (is_null($sWebhookDescription) ? null : (string) $sWebhookDescription);

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
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling WebhookGetObjectV1ResponseMPayload., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string|null
     */
    public function getSEzsignfoldertypeNameX()
    {
        return $this->container['sEzsignfoldertypeNameX'];
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string|null $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {

        //if (is_null($sEzsignfoldertypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfoldertypeNameX cannot be null');
        //}
        $this->container['sEzsignfoldertypeNameX'] = (is_null($sEzsignfoldertypeNameX) ? null : (string) $sEzsignfoldertypeNameX);

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

        //if (is_null($eWebhookModule)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookModule cannot be null');
        //}
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

        //if (is_null($eWebhookEzsignevent)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookEzsignevent cannot be null');
        //}
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

        //if (is_null($eWebhookManagementevent)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookManagementevent cannot be null');
        //}
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

        //if (is_null($sWebhookUrl)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookUrl cannot be null');
        //}
        $this->container['sWebhookUrl'] = (is_null($sWebhookUrl) ? null : (string) $sWebhookUrl);

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

        //if (is_null($sWebhookEmailfailed)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookEmailfailed cannot be null');
        //}
        $this->container['sWebhookEmailfailed'] = (is_null($sWebhookEmailfailed) ? null : (string) $sWebhookEmailfailed);

        return $this;
    }

    /**
     * Gets bWebhookIsactive
     *
     * @return bool|null
     */
    public function getBWebhookIsactive()
    {
        return $this->container['bWebhookIsactive'];
    }

    /**
     * Sets bWebhookIsactive
     *
     * @param bool|null $bWebhookIsactive Whether the Webhook is active or not
     *
     * @return self
     */
    public function setBWebhookIsactive($bWebhookIsactive)
    {

        //if (is_null($bWebhookIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bWebhookIsactive cannot be null');
        //}
        $this->container['bWebhookIsactive'] = (is_null($bWebhookIsactive) ? null : (bool) $bWebhookIsactive);

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

        //if (is_null($bWebhookSkipsslvalidation)) {
            //throw new \InvalidArgumentException('non-nullable bWebhookSkipsslvalidation cannot be null');
        //}
        $this->container['bWebhookSkipsslvalidation'] = (is_null($bWebhookSkipsslvalidation) ? null : (bool) $bWebhookSkipsslvalidation);

        return $this;
    }

    /**
     * Gets sWebhookEvent
     *
     * @return string
     */
    public function getSWebhookEvent()
    {
        return $this->container['sWebhookEvent'];
    }

    /**
     * Sets sWebhookEvent
     *
     * @param string $sWebhookEvent The concatenated string to describe the Webhook event
     *
     * @return self
     */
    public function setSWebhookEvent($sWebhookEvent)
    {

        //if (is_null($sWebhookEvent)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookEvent cannot be null');
        //}
        $this->container['sWebhookEvent'] = (is_null($sWebhookEvent) ? null : (string) $sWebhookEvent);

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


