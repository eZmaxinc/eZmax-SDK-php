<?php
/**
 * CommonFile
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
 * The version of the OpenAPI document: 1.2.2
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * CommonFile Class Doc Comment
 *
 * @category Class
 * @description Object representing a file used in a request or response context
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommonFile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sFileName' => 'string',
        'sFileUrl' => 'string',
        'sFileBase64' => 'string',
        'eFileSource' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sFileName' => null,
        'sFileUrl' => 'iri',
        'sFileBase64' => 'byte',
        'eFileSource' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sFileName' => false,
		'sFileUrl' => false,
		'sFileBase64' => false,
		'eFileSource' => false
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
        'sFileName' => 'sFileName',
        'sFileUrl' => 'sFileUrl',
        'sFileBase64' => 'sFileBase64',
        'eFileSource' => 'eFileSource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sFileName' => 'setSFileName',
        'sFileUrl' => 'setSFileUrl',
        'sFileBase64' => 'setSFileBase64',
        'eFileSource' => 'setEFileSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sFileName' => 'getSFileName',
        'sFileUrl' => 'getSFileUrl',
        'sFileBase64' => 'getSFileBase64',
        'eFileSource' => 'getEFileSource'
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

    public const E_FILE_SOURCE_BASE64 = 'Base64';
    public const E_FILE_SOURCE_URL = 'Url';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEFileSourceAllowableValues()
    {
        return [
            self::E_FILE_SOURCE_BASE64,
            self::E_FILE_SOURCE_URL,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('sFileName', $data ?? [], null);
        $this->setIfExists('sFileUrl', $data ?? [], null);
        $this->setIfExists('sFileBase64', $data ?? [], null);
        $this->setIfExists('eFileSource', $data ?? [], null);
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

        if ($this->container['sFileName'] === null) {
            $invalidProperties[] = "'sFileName' can't be null";
        }
        if ($this->container['eFileSource'] === null) {
            $invalidProperties[] = "'eFileSource' can't be null";
        }
        $allowedValues = $this->getEFileSourceAllowableValues();
        if (!is_null($this->container['eFileSource']) && !in_array($this->container['eFileSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eFileSource', must be one of '%s'",
                $this->container['eFileSource'],
                implode("', '", $allowedValues)
            );
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
     * Gets sFileName
     *
     * @return string
     */
    public function getSFileName()
    {
	//return $this->container['sFileName'];
        return is_null($this->container['sFileName']) ? null : trim($this->container['sFileName']);
    }

    /**
     * Sets sFileName
     *
     * @param string $sFileName The name of the file
     *
     * @return self
     */
    public function setSFileName($sFileName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sFileName)) {
            //throw new \InvalidArgumentException('non-nullable sFileName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sFileName'] = $sFileName;
        $this->container['sFileName'] = (is_null($sFileName) ? null : trim((string) $sFileName));

        return $this;
    }

    /**
     * Gets sFileUrl
     *
     * @return string|null
     */
    public function getSFileUrl()
    {
	//return $this->container['sFileUrl'];
        return is_null($this->container['sFileUrl']) ? null : trim($this->container['sFileUrl']);
    }

    /**
     * Sets sFileUrl
     *
     * @param string|null $sFileUrl The URL used to reach the File
     *
     * @return self
     */
    public function setSFileUrl($sFileUrl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sFileUrl)) {
            //throw new \InvalidArgumentException('non-nullable sFileUrl cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sFileUrl'] = $sFileUrl;
        $this->container['sFileUrl'] = (is_null($sFileUrl) ? null : trim((string) $sFileUrl));

        return $this;
    }

    /**
     * Gets sFileBase64
     *
     * @return string|null
     */
    public function getSFileBase64()
    {
	//return $this->container['sFileBase64'];
        return $this->container['sFileBase64'];
    }

    /**
     * Sets sFileBase64
     *
     * @param string|null $sFileBase64 The Base64 encoded binary content of the File
     *
     * @return self
     */
    public function setSFileBase64($sFileBase64)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sFileBase64)) {
            //throw new \InvalidArgumentException('non-nullable sFileBase64 cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sFileBase64'] = $sFileBase64;
        $this->container['sFileBase64'] = (is_null($sFileBase64) ? null : $sFileBase64);

        return $this;
    }

    /**
     * Gets eFileSource
     *
     * @return string
     */
    public function getEFileSource()
    {
	//return $this->container['eFileSource'];
        return is_null($this->container['eFileSource']) ? null : trim($this->container['eFileSource']);
    }

    /**
     * Sets eFileSource
     *
     * @param string $eFileSource The source of the File
     *
     * @return self
     */
    public function setEFileSource($eFileSource)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eFileSource)) {
            //throw new \InvalidArgumentException('non-nullable eFileSource cannot be null');
        //}
        $allowedValues = $this->getEFileSourceAllowableValues();
        if (!in_array($eFileSource, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eFileSource', must be one of '%s'",
                    $eFileSource,
                    implode("', '", $allowedValues)
                )
            );
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eFileSource'] = $eFileSource;
        $this->container['eFileSource'] = (is_null($eFileSource) ? null : trim((string) $eFileSource));

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


