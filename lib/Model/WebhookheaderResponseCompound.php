<?php
/**
 * WebhookheaderResponseCompound
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * WebhookheaderResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Webhookheader Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookheaderResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'webhookheader-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiWebhookheaderID' => 'int',
        'fkiWebhookID' => 'int',
        'sWebhookheaderName' => 'string',
        'sWebhookheaderValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiWebhookheaderID' => null,
        'fkiWebhookID' => null,
        'sWebhookheaderName' => null,
        'sWebhookheaderValue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiWebhookheaderID' => false,
		'fkiWebhookID' => false,
		'sWebhookheaderName' => false,
		'sWebhookheaderValue' => false
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'pkiWebhookheaderID' => 'pkiWebhookheaderID',
        'fkiWebhookID' => 'fkiWebhookID',
        'sWebhookheaderName' => 'sWebhookheaderName',
        'sWebhookheaderValue' => 'sWebhookheaderValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiWebhookheaderID' => 'setPkiWebhookheaderID',
        'fkiWebhookID' => 'setFkiWebhookID',
        'sWebhookheaderName' => 'setSWebhookheaderName',
        'sWebhookheaderValue' => 'setSWebhookheaderValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiWebhookheaderID' => 'getPkiWebhookheaderID',
        'fkiWebhookID' => 'getFkiWebhookID',
        'sWebhookheaderName' => 'getSWebhookheaderName',
        'sWebhookheaderValue' => 'getSWebhookheaderValue'
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
        $this->setIfExists('pkiWebhookheaderID', $data ?? [], null);
        $this->setIfExists('fkiWebhookID', $data ?? [], null);
        $this->setIfExists('sWebhookheaderName', $data ?? [], null);
        $this->setIfExists('sWebhookheaderValue', $data ?? [], null);
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

        if ($this->container['pkiWebhookheaderID'] === null) {
            $invalidProperties[] = "'pkiWebhookheaderID' can't be null";
        }
        if ($this->container['fkiWebhookID'] === null) {
            $invalidProperties[] = "'fkiWebhookID' can't be null";
        }
        if ($this->container['sWebhookheaderName'] === null) {
            $invalidProperties[] = "'sWebhookheaderName' can't be null";
        }
//        if (!preg_match("/^(?!(?:e|E)(?:z|Z)(?:m|M)(?:a|A)(?:x|X))(?!(?:h|H)(?:o|O)(?:s|S)(?:t|T)$|(?:u|U)(?:s|S)(?:e|E)(?:r|R)-(?:a|A)(?:g|G)(?:e|E)(?:n|N)(?:t|T)$)(?!\\s)[^\\s].*$/", $this->container['sWebhookheaderName'])) {
        if (!is_null($this->container['sWebhookheaderName']) && !preg_match("/(*UTF8)^(?!(?:e|E)(?:z|Z)(?:m|M)(?:a|A)(?:x|X))(?!(?:h|H)(?:o|O)(?:s|S)(?:t|T)$|(?:u|U)(?:s|S)(?:e|E)(?:r|R)-(?:a|A)(?:g|G)(?:e|E)(?:n|N)(?:t|T)$)(?!\\s)[^\\s].*$/", $this->container['sWebhookheaderName'])) {
            $invalidProperties[] = "invalid value for 'sWebhookheaderName', must be conform to the pattern /^(?!(?:e|E)(?:z|Z)(?:m|M)(?:a|A)(?:x|X))(?!(?:h|H)(?:o|O)(?:s|S)(?:t|T)$|(?:u|U)(?:s|S)(?:e|E)(?:r|R)-(?:a|A)(?:g|G)(?:e|E)(?:n|N)(?:t|T)$)(?!\\s)[^\\s].*$/.";
        }

        if ($this->container['sWebhookheaderValue'] === null) {
            $invalidProperties[] = "'sWebhookheaderValue' can't be null";
        }
//        if (!preg_match("/^.{1,255}$/", $this->container['sWebhookheaderValue'])) {
        if (!is_null($this->container['sWebhookheaderValue']) && !preg_match("/(*UTF8)^.{1,255}$/", $this->container['sWebhookheaderValue'])) {
            $invalidProperties[] = "invalid value for 'sWebhookheaderValue', must be conform to the pattern /^.{1,255}$/.";
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
     * Gets pkiWebhookheaderID
     *
     * @return int
     */
    public function getPkiWebhookheaderID()
    {
        return $this->container['pkiWebhookheaderID'];
    }

    /**
     * Sets pkiWebhookheaderID
     *
     * @param int $pkiWebhookheaderID The unique ID of the Webhookheader
     *
     * @return self
     */
    public function setPkiWebhookheaderID($pkiWebhookheaderID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiWebhookheaderID)) {
            //throw new \InvalidArgumentException('non-nullable pkiWebhookheaderID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiWebhookheaderID'] = $pkiWebhookheaderID;
        $this->container['pkiWebhookheaderID'] = (is_null($pkiWebhookheaderID) ? null : (int) $pkiWebhookheaderID);

        return $this;
    }

    /**
     * Gets fkiWebhookID
     *
     * @return int
     */
    public function getFkiWebhookID()
    {
        return $this->container['fkiWebhookID'];
    }

    /**
     * Sets fkiWebhookID
     *
     * @param int $fkiWebhookID The unique ID of the Webhook
     *
     * @return self
     */
    public function setFkiWebhookID($fkiWebhookID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiWebhookID)) {
            //throw new \InvalidArgumentException('non-nullable fkiWebhookID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiWebhookID'] = $fkiWebhookID;
        $this->container['fkiWebhookID'] = (is_null($fkiWebhookID) ? null : (int) $fkiWebhookID);

        return $this;
    }

    /**
     * Gets sWebhookheaderName
     *
     * @return string
     */
    public function getSWebhookheaderName()
    {
        return is_null($this->container['sWebhookheaderName']) ? null : trim($this->container['sWebhookheaderName']);
    }

    /**
     * Sets sWebhookheaderName
     *
     * @param string $sWebhookheaderName The Name of the Webhookheader
     *
     * @return self
     */
    public function setSWebhookheaderName($sWebhookheaderName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookheaderName)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookheaderName cannot be null');
        //}

//        if ((!preg_match("/^(?!(?:e|E)(?:z|Z)(?:m|M)(?:a|A)(?:x|X))(?!(?:h|H)(?:o|O)(?:s|S)(?:t|T)$|(?:u|U)(?:s|S)(?:e|E)(?:r|R)-(?:a|A)(?:g|G)(?:e|E)(?:n|N)(?:t|T)$)(?!\\s)[^\\s].*$/", ObjectSerializer::toString($sWebhookheaderName)))) {
        if (!is_null($sWebhookheaderName) && (!preg_match("/(*UTF8)^(?!(?:e|E)(?:z|Z)(?:m|M)(?:a|A)(?:x|X))(?!(?:h|H)(?:o|O)(?:s|S)(?:t|T)$|(?:u|U)(?:s|S)(?:e|E)(?:r|R)-(?:a|A)(?:g|G)(?:e|E)(?:n|N)(?:t|T)$)(?!\\s)[^\\s].*$/", ObjectSerializer::toString($sWebhookheaderName)))) {
            throw new \InvalidArgumentException("invalid value for \$sWebhookheaderName when calling WebhookheaderResponseCompound., must conform to the pattern /^(?!(?:e|E)(?:z|Z)(?:m|M)(?:a|A)(?:x|X))(?!(?:h|H)(?:o|O)(?:s|S)(?:t|T)$|(?:u|U)(?:s|S)(?:e|E)(?:r|R)-(?:a|A)(?:g|G)(?:e|E)(?:n|N)(?:t|T)$)(?!\\s)[^\\s].*$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookheaderName'] = $sWebhookheaderName;
        $this->container['sWebhookheaderName'] = (is_null($sWebhookheaderName) ? null : trim((string) $sWebhookheaderName));

        return $this;
    }

    /**
     * Gets sWebhookheaderValue
     *
     * @return string
     */
    public function getSWebhookheaderValue()
    {
        return is_null($this->container['sWebhookheaderValue']) ? null : trim($this->container['sWebhookheaderValue']);
    }

    /**
     * Sets sWebhookheaderValue
     *
     * @param string $sWebhookheaderValue The Value of the Webhookheader
     *
     * @return self
     */
    public function setSWebhookheaderValue($sWebhookheaderValue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookheaderValue)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookheaderValue cannot be null');
        //}

//        if ((!preg_match("/^.{1,255}$/", ObjectSerializer::toString($sWebhookheaderValue)))) {
        if (!is_null($sWebhookheaderValue) && (!preg_match("/(*UTF8)^.{1,255}$/", ObjectSerializer::toString($sWebhookheaderValue)))) {
            throw new \InvalidArgumentException("invalid value for \$sWebhookheaderValue when calling WebhookheaderResponseCompound., must conform to the pattern /^.{1,255}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookheaderValue'] = $sWebhookheaderValue;
        $this->container['sWebhookheaderValue'] = (is_null($sWebhookheaderValue) ? null : trim((string) $sWebhookheaderValue));

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

