<?php
/**
 * CustomDnsrecordResponse
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
 * CustomDnsrecordResponse Class Doc Comment
 *
 * @category Class
 * @description A Custom Dnsrecord Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomDnsrecordResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Dnsrecord-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eDnsrecordType' => 'string',
        'eDnsrecordValidation' => 'string',
        'sDnsrecordName' => 'string',
        'sDnsrecordValue' => 'string',
        'sDnsrecordExpectedvalue' => 'string',
        'bDnsrecordMustMatch' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eDnsrecordType' => null,
        'eDnsrecordValidation' => null,
        'sDnsrecordName' => null,
        'sDnsrecordValue' => null,
        'sDnsrecordExpectedvalue' => null,
        'bDnsrecordMustMatch' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eDnsrecordType' => false,
		'eDnsrecordValidation' => false,
		'sDnsrecordName' => false,
		'sDnsrecordValue' => false,
		'sDnsrecordExpectedvalue' => false,
		'bDnsrecordMustMatch' => false
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
        'eDnsrecordType' => 'eDnsrecordType',
        'eDnsrecordValidation' => 'eDnsrecordValidation',
        'sDnsrecordName' => 'sDnsrecordName',
        'sDnsrecordValue' => 'sDnsrecordValue',
        'sDnsrecordExpectedvalue' => 'sDnsrecordExpectedvalue',
        'bDnsrecordMustMatch' => 'bDnsrecordMustMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eDnsrecordType' => 'setEDnsrecordType',
        'eDnsrecordValidation' => 'setEDnsrecordValidation',
        'sDnsrecordName' => 'setSDnsrecordName',
        'sDnsrecordValue' => 'setSDnsrecordValue',
        'sDnsrecordExpectedvalue' => 'setSDnsrecordExpectedvalue',
        'bDnsrecordMustMatch' => 'setBDnsrecordMustMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eDnsrecordType' => 'getEDnsrecordType',
        'eDnsrecordValidation' => 'getEDnsrecordValidation',
        'sDnsrecordName' => 'getSDnsrecordName',
        'sDnsrecordValue' => 'getSDnsrecordValue',
        'sDnsrecordExpectedvalue' => 'getSDnsrecordExpectedvalue',
        'bDnsrecordMustMatch' => 'getBDnsrecordMustMatch'
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

    public const E_DNSRECORD_TYPE_CNAME = 'CNAME';
    public const E_DNSRECORD_TYPE_MX = 'MX';
    public const E_DNSRECORD_TYPE_TXT = 'TXT';
    public const E_DNSRECORD_VALIDATION_MATCH = 'Match';
    public const E_DNSRECORD_VALIDATION_MISMATCH = 'Mismatch';
    public const E_DNSRECORD_VALIDATION_NOT_FOUND = 'NotFound';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEDnsrecordTypeAllowableValues()
    {
        return [
            self::E_DNSRECORD_TYPE_CNAME,
            self::E_DNSRECORD_TYPE_MX,
            self::E_DNSRECORD_TYPE_TXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEDnsrecordValidationAllowableValues()
    {
        return [
            self::E_DNSRECORD_VALIDATION_MATCH,
            self::E_DNSRECORD_VALIDATION_MISMATCH,
            self::E_DNSRECORD_VALIDATION_NOT_FOUND,
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
        $this->setIfExists('eDnsrecordType', $data ?? [], null);
        $this->setIfExists('eDnsrecordValidation', $data ?? [], null);
        $this->setIfExists('sDnsrecordName', $data ?? [], null);
        $this->setIfExists('sDnsrecordValue', $data ?? [], null);
        $this->setIfExists('sDnsrecordExpectedvalue', $data ?? [], null);
        $this->setIfExists('bDnsrecordMustMatch', $data ?? [], null);
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

        if ($this->container['eDnsrecordType'] === null) {
            $invalidProperties[] = "'eDnsrecordType' can't be null";
        }
        $allowedValues = $this->getEDnsrecordTypeAllowableValues();
        if (!is_null($this->container['eDnsrecordType']) && !in_array($this->container['eDnsrecordType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eDnsrecordType', must be one of '%s'",
                $this->container['eDnsrecordType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['eDnsrecordValidation'] === null) {
            $invalidProperties[] = "'eDnsrecordValidation' can't be null";
        }
        $allowedValues = $this->getEDnsrecordValidationAllowableValues();
        if (!is_null($this->container['eDnsrecordValidation']) && !in_array($this->container['eDnsrecordValidation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eDnsrecordValidation', must be one of '%s'",
                $this->container['eDnsrecordValidation'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sDnsrecordName'] === null) {
            $invalidProperties[] = "'sDnsrecordName' can't be null";
        }
        if ($this->container['bDnsrecordMustMatch'] === null) {
            $invalidProperties[] = "'bDnsrecordMustMatch' can't be null";
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
     * Gets eDnsrecordType
     *
     * @return string
     */
    public function getEDnsrecordType()
    {
	//return $this->container['eDnsrecordType'];
        return is_null($this->container['eDnsrecordType']) ? null : trim($this->container['eDnsrecordType']);
    }

    /**
     * Sets eDnsrecordType
     *
     * @param string $eDnsrecordType The type of the Dnsrecord
     *
     * @return self
     */
    public function setEDnsrecordType($eDnsrecordType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eDnsrecordType)) {
            //throw new \InvalidArgumentException('non-nullable eDnsrecordType cannot be null');
        //}
        $allowedValues = $this->getEDnsrecordTypeAllowableValues();
        if (!in_array($eDnsrecordType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eDnsrecordType', must be one of '%s'",
                    $eDnsrecordType,
                    implode("', '", $allowedValues)
                )
            );
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eDnsrecordType'] = $eDnsrecordType;
        $this->container['eDnsrecordType'] = (is_null($eDnsrecordType) ? null : trim((string) $eDnsrecordType));

        return $this;
    }

    /**
     * Gets eDnsrecordValidation
     *
     * @return string
     */
    public function getEDnsrecordValidation()
    {
	//return $this->container['eDnsrecordValidation'];
        return is_null($this->container['eDnsrecordValidation']) ? null : trim($this->container['eDnsrecordValidation']);
    }

    /**
     * Sets eDnsrecordValidation
     *
     * @param string $eDnsrecordValidation The validation of the Dnsrecord
     *
     * @return self
     */
    public function setEDnsrecordValidation($eDnsrecordValidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eDnsrecordValidation)) {
            //throw new \InvalidArgumentException('non-nullable eDnsrecordValidation cannot be null');
        //}
        $allowedValues = $this->getEDnsrecordValidationAllowableValues();
        if (!in_array($eDnsrecordValidation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eDnsrecordValidation', must be one of '%s'",
                    $eDnsrecordValidation,
                    implode("', '", $allowedValues)
                )
            );
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eDnsrecordValidation'] = $eDnsrecordValidation;
        $this->container['eDnsrecordValidation'] = (is_null($eDnsrecordValidation) ? null : trim((string) $eDnsrecordValidation));

        return $this;
    }

    /**
     * Gets sDnsrecordName
     *
     * @return string
     */
    public function getSDnsrecordName()
    {
	//return $this->container['sDnsrecordName'];
        return is_null($this->container['sDnsrecordName']) ? null : trim($this->container['sDnsrecordName']);
    }

    /**
     * Sets sDnsrecordName
     *
     * @param string $sDnsrecordName The name of the Dnsrecord
     *
     * @return self
     */
    public function setSDnsrecordName($sDnsrecordName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDnsrecordName)) {
            //throw new \InvalidArgumentException('non-nullable sDnsrecordName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDnsrecordName'] = $sDnsrecordName;
        $this->container['sDnsrecordName'] = (is_null($sDnsrecordName) ? null : trim((string) $sDnsrecordName));

        return $this;
    }

    /**
     * Gets sDnsrecordValue
     *
     * @return string|null
     */
    public function getSDnsrecordValue()
    {
	//return $this->container['sDnsrecordValue'];
        return is_null($this->container['sDnsrecordValue']) ? null : trim($this->container['sDnsrecordValue']);
    }

    /**
     * Sets sDnsrecordValue
     *
     * @param string|null $sDnsrecordValue The value of the Dnsrecord
     *
     * @return self
     */
    public function setSDnsrecordValue($sDnsrecordValue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDnsrecordValue)) {
            //throw new \InvalidArgumentException('non-nullable sDnsrecordValue cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDnsrecordValue'] = $sDnsrecordValue;
        $this->container['sDnsrecordValue'] = (is_null($sDnsrecordValue) ? null : trim((string) $sDnsrecordValue));

        return $this;
    }

    /**
     * Gets sDnsrecordExpectedvalue
     *
     * @return string|null
     */
    public function getSDnsrecordExpectedvalue()
    {
	//return $this->container['sDnsrecordExpectedvalue'];
        return is_null($this->container['sDnsrecordExpectedvalue']) ? null : trim($this->container['sDnsrecordExpectedvalue']);
    }

    /**
     * Sets sDnsrecordExpectedvalue
     *
     * @param string|null $sDnsrecordExpectedvalue The expected value of the Dnsrecord
     *
     * @return self
     */
    public function setSDnsrecordExpectedvalue($sDnsrecordExpectedvalue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDnsrecordExpectedvalue)) {
            //throw new \InvalidArgumentException('non-nullable sDnsrecordExpectedvalue cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDnsrecordExpectedvalue'] = $sDnsrecordExpectedvalue;
        $this->container['sDnsrecordExpectedvalue'] = (is_null($sDnsrecordExpectedvalue) ? null : trim((string) $sDnsrecordExpectedvalue));

        return $this;
    }

    /**
     * Gets bDnsrecordMustMatch
     *
     * @return bool
     */
    public function getBDnsrecordMustMatch()
    {
	//return $this->container['bDnsrecordMustMatch'];
        return $this->container['bDnsrecordMustMatch'];
    }

    /**
     * Sets bDnsrecordMustMatch
     *
     * @param bool $bDnsrecordMustMatch Whether the Dnsrecord must match or not
     *
     * @return self
     */
    public function setBDnsrecordMustMatch($bDnsrecordMustMatch)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bDnsrecordMustMatch)) {
            //throw new \InvalidArgumentException('non-nullable bDnsrecordMustMatch cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bDnsrecordMustMatch'] = $bDnsrecordMustMatch;
        $this->container['bDnsrecordMustMatch'] = (is_null($bDnsrecordMustMatch) ? null : (bool) $bDnsrecordMustMatch);

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


