<?php
/**
 * GlobalEzmaxcustomerGetConfigurationV1Response
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
 * Generator version: 7.10.0
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
 * GlobalEzmaxcustomerGetConfigurationV1Response Class Doc Comment
 *
 * @category Class
 * @description Response for GET /1/ezmaxcustomer/{pksEzmaxcustomerCode}/getConfiguration
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GlobalEzmaxcustomerGetConfigurationV1Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'global-ezmaxcustomer-getConfiguration-v1-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sInfrastructureregionCode' => 'string',
        'sInfrastructureregionCodeWeb' => 'string',
        'sInfrastructureenvironmenttypeDescription' => 'string',
        'sCognitoClientIDExternal' => 'string',
        'sCognitoClientIDEzmaxpublic' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sInfrastructureregionCode' => null,
        'sInfrastructureregionCodeWeb' => null,
        'sInfrastructureenvironmenttypeDescription' => null,
        'sCognitoClientIDExternal' => null,
        'sCognitoClientIDEzmaxpublic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sInfrastructureregionCode' => false,
		'sInfrastructureregionCodeWeb' => false,
		'sInfrastructureenvironmenttypeDescription' => false,
		'sCognitoClientIDExternal' => false,
		'sCognitoClientIDEzmaxpublic' => false
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
        'sInfrastructureregionCode' => 'sInfrastructureregionCode',
        'sInfrastructureregionCodeWeb' => 'sInfrastructureregionCodeWeb',
        'sInfrastructureenvironmenttypeDescription' => 'sInfrastructureenvironmenttypeDescription',
        'sCognitoClientIDExternal' => 'sCognitoClientIDExternal',
        'sCognitoClientIDEzmaxpublic' => 'sCognitoClientIDEzmaxpublic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sInfrastructureregionCode' => 'setSInfrastructureregionCode',
        'sInfrastructureregionCodeWeb' => 'setSInfrastructureregionCodeWeb',
        'sInfrastructureenvironmenttypeDescription' => 'setSInfrastructureenvironmenttypeDescription',
        'sCognitoClientIDExternal' => 'setSCognitoClientIDExternal',
        'sCognitoClientIDEzmaxpublic' => 'setSCognitoClientIDEzmaxpublic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sInfrastructureregionCode' => 'getSInfrastructureregionCode',
        'sInfrastructureregionCodeWeb' => 'getSInfrastructureregionCodeWeb',
        'sInfrastructureenvironmenttypeDescription' => 'getSInfrastructureenvironmenttypeDescription',
        'sCognitoClientIDExternal' => 'getSCognitoClientIDExternal',
        'sCognitoClientIDEzmaxpublic' => 'getSCognitoClientIDEzmaxpublic'
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
        $this->setIfExists('sInfrastructureregionCode', $data ?? [], null);
        $this->setIfExists('sInfrastructureregionCodeWeb', $data ?? [], null);
        $this->setIfExists('sInfrastructureenvironmenttypeDescription', $data ?? [], null);
        $this->setIfExists('sCognitoClientIDExternal', $data ?? [], null);
        $this->setIfExists('sCognitoClientIDEzmaxpublic', $data ?? [], null);
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

        if ($this->container['sInfrastructureregionCode'] === null) {
            $invalidProperties[] = "'sInfrastructureregionCode' can't be null";
        }
        if ($this->container['sInfrastructureregionCodeWeb'] === null) {
            $invalidProperties[] = "'sInfrastructureregionCodeWeb' can't be null";
        }
        if ($this->container['sInfrastructureenvironmenttypeDescription'] === null) {
            $invalidProperties[] = "'sInfrastructureenvironmenttypeDescription' can't be null";
        }
        if ($this->container['sCognitoClientIDEzmaxpublic'] === null) {
            $invalidProperties[] = "'sCognitoClientIDEzmaxpublic' can't be null";
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
     * Gets sInfrastructureregionCode
     *
     * @return string
     */
    public function getSInfrastructureregionCode()
    {
	//return $this->container['sInfrastructureregionCode'];
        return is_null($this->container['sInfrastructureregionCode']) ? null : trim($this->container['sInfrastructureregionCode']);
    }

    /**
     * Sets sInfrastructureregionCode
     *
     * @param string $sInfrastructureregionCode The region code
     *
     * @return self
     */
    public function setSInfrastructureregionCode($sInfrastructureregionCode)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sInfrastructureregionCode)) {
            //throw new \InvalidArgumentException('non-nullable sInfrastructureregionCode cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sInfrastructureregionCode'] = $sInfrastructureregionCode;
        $this->container['sInfrastructureregionCode'] = (is_null($sInfrastructureregionCode) ? null : trim((string) $sInfrastructureregionCode));

        return $this;
    }

    /**
     * Gets sInfrastructureregionCodeWeb
     *
     * @return string
     */
    public function getSInfrastructureregionCodeWeb()
    {
	//return $this->container['sInfrastructureregionCodeWeb'];
        return is_null($this->container['sInfrastructureregionCodeWeb']) ? null : trim($this->container['sInfrastructureregionCodeWeb']);
    }

    /**
     * Sets sInfrastructureregionCodeWeb
     *
     * @param string $sInfrastructureregionCodeWeb The region code
     *
     * @return self
     */
    public function setSInfrastructureregionCodeWeb($sInfrastructureregionCodeWeb)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sInfrastructureregionCodeWeb)) {
            //throw new \InvalidArgumentException('non-nullable sInfrastructureregionCodeWeb cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sInfrastructureregionCodeWeb'] = $sInfrastructureregionCodeWeb;
        $this->container['sInfrastructureregionCodeWeb'] = (is_null($sInfrastructureregionCodeWeb) ? null : trim((string) $sInfrastructureregionCodeWeb));

        return $this;
    }

    /**
     * Gets sInfrastructureenvironmenttypeDescription
     *
     * @return string
     */
    public function getSInfrastructureenvironmenttypeDescription()
    {
	//return $this->container['sInfrastructureenvironmenttypeDescription'];
        return is_null($this->container['sInfrastructureenvironmenttypeDescription']) ? null : trim($this->container['sInfrastructureenvironmenttypeDescription']);
    }

    /**
     * Sets sInfrastructureenvironmenttypeDescription
     *
     * @param string $sInfrastructureenvironmenttypeDescription The environment type Description
     *
     * @return self
     */
    public function setSInfrastructureenvironmenttypeDescription($sInfrastructureenvironmenttypeDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sInfrastructureenvironmenttypeDescription)) {
            //throw new \InvalidArgumentException('non-nullable sInfrastructureenvironmenttypeDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sInfrastructureenvironmenttypeDescription'] = $sInfrastructureenvironmenttypeDescription;
        $this->container['sInfrastructureenvironmenttypeDescription'] = (is_null($sInfrastructureenvironmenttypeDescription) ? null : trim((string) $sInfrastructureenvironmenttypeDescription));

        return $this;
    }

    /**
     * Gets sCognitoClientIDExternal
     *
     * @return string|null
     */
    public function getSCognitoClientIDExternal()
    {
	//return $this->container['sCognitoClientIDExternal'];
        return is_null($this->container['sCognitoClientIDExternal']) ? null : trim($this->container['sCognitoClientIDExternal']);
    }

    /**
     * Sets sCognitoClientIDExternal
     *
     * @param string|null $sCognitoClientIDExternal The ID of the client in Cognito
     *
     * @return self
     */
    public function setSCognitoClientIDExternal($sCognitoClientIDExternal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCognitoClientIDExternal)) {
            //throw new \InvalidArgumentException('non-nullable sCognitoClientIDExternal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCognitoClientIDExternal'] = $sCognitoClientIDExternal;
        $this->container['sCognitoClientIDExternal'] = (is_null($sCognitoClientIDExternal) ? null : trim((string) $sCognitoClientIDExternal));

        return $this;
    }

    /**
     * Gets sCognitoClientIDEzmaxpublic
     *
     * @return string
     */
    public function getSCognitoClientIDEzmaxpublic()
    {
	//return $this->container['sCognitoClientIDEzmaxpublic'];
        return is_null($this->container['sCognitoClientIDEzmaxpublic']) ? null : trim($this->container['sCognitoClientIDEzmaxpublic']);
    }

    /**
     * Sets sCognitoClientIDEzmaxpublic
     *
     * @param string $sCognitoClientIDEzmaxpublic The ID of the client in Cognito
     *
     * @return self
     */
    public function setSCognitoClientIDEzmaxpublic($sCognitoClientIDEzmaxpublic)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCognitoClientIDEzmaxpublic)) {
            //throw new \InvalidArgumentException('non-nullable sCognitoClientIDEzmaxpublic cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCognitoClientIDEzmaxpublic'] = $sCognitoClientIDEzmaxpublic;
        $this->container['sCognitoClientIDEzmaxpublic'] = (is_null($sCognitoClientIDEzmaxpublic) ? null : trim((string) $sCognitoClientIDEzmaxpublic));

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


