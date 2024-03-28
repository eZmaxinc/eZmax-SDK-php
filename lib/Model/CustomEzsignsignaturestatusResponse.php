<?php
/**
 * CustomEzsignsignaturestatusResponse
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
 * The version of the OpenAPI document: 1.2.0
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
 * CustomEzsignsignaturestatusResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsignsignaturestatus Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomEzsignsignaturestatusResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Ezsignsignaturestatus-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eEzsignsignaturestatusSteptype' => 'string',
        'iEzsignsignaturestatusStep' => 'int',
        'iEzsignsignaturestatusTotal' => 'int',
        'iEzsignsignaturestatusSigned' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eEzsignsignaturestatusSteptype' => null,
        'iEzsignsignaturestatusStep' => null,
        'iEzsignsignaturestatusTotal' => null,
        'iEzsignsignaturestatusSigned' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eEzsignsignaturestatusSteptype' => false,
		'iEzsignsignaturestatusStep' => false,
		'iEzsignsignaturestatusTotal' => false,
		'iEzsignsignaturestatusSigned' => false
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
        'eEzsignsignaturestatusSteptype' => 'eEzsignsignaturestatusSteptype',
        'iEzsignsignaturestatusStep' => 'iEzsignsignaturestatusStep',
        'iEzsignsignaturestatusTotal' => 'iEzsignsignaturestatusTotal',
        'iEzsignsignaturestatusSigned' => 'iEzsignsignaturestatusSigned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eEzsignsignaturestatusSteptype' => 'setEEzsignsignaturestatusSteptype',
        'iEzsignsignaturestatusStep' => 'setIEzsignsignaturestatusStep',
        'iEzsignsignaturestatusTotal' => 'setIEzsignsignaturestatusTotal',
        'iEzsignsignaturestatusSigned' => 'setIEzsignsignaturestatusSigned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eEzsignsignaturestatusSteptype' => 'getEEzsignsignaturestatusSteptype',
        'iEzsignsignaturestatusStep' => 'getIEzsignsignaturestatusStep',
        'iEzsignsignaturestatusTotal' => 'getIEzsignsignaturestatusTotal',
        'iEzsignsignaturestatusSigned' => 'getIEzsignsignaturestatusSigned'
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

    public const E_EZSIGNSIGNATURESTATUS_STEPTYPE_FORM = 'Form';
    public const E_EZSIGNSIGNATURESTATUS_STEPTYPE_SIGNATURE = 'Signature';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsignsignaturestatusSteptypeAllowableValues()
    {
        return [
            self::E_EZSIGNSIGNATURESTATUS_STEPTYPE_FORM,
            self::E_EZSIGNSIGNATURESTATUS_STEPTYPE_SIGNATURE,
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
        $this->setIfExists('eEzsignsignaturestatusSteptype', $data ?? [], null);
        $this->setIfExists('iEzsignsignaturestatusStep', $data ?? [], null);
        $this->setIfExists('iEzsignsignaturestatusTotal', $data ?? [], null);
        $this->setIfExists('iEzsignsignaturestatusSigned', $data ?? [], null);
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

        if ($this->container['eEzsignsignaturestatusSteptype'] === null) {
            $invalidProperties[] = "'eEzsignsignaturestatusSteptype' can't be null";
        }
        $allowedValues = $this->getEEzsignsignaturestatusSteptypeAllowableValues();
        if (!is_null($this->container['eEzsignsignaturestatusSteptype']) && !in_array($this->container['eEzsignsignaturestatusSteptype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsignsignaturestatusSteptype', must be one of '%s'",
                $this->container['eEzsignsignaturestatusSteptype'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['iEzsignsignaturestatusStep'] === null) {
            $invalidProperties[] = "'iEzsignsignaturestatusStep' can't be null";
        }
        if ($this->container['iEzsignsignaturestatusTotal'] === null) {
            $invalidProperties[] = "'iEzsignsignaturestatusTotal' can't be null";
        }
        if ($this->container['iEzsignsignaturestatusSigned'] === null) {
            $invalidProperties[] = "'iEzsignsignaturestatusSigned' can't be null";
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
     * Gets eEzsignsignaturestatusSteptype
     *
     * @return string
     */
    public function getEEzsignsignaturestatusSteptype()
    {
        return is_null($this->container['eEzsignsignaturestatusSteptype']) ? null : trim($this->container['eEzsignsignaturestatusSteptype']);
    }

    /**
     * Sets eEzsignsignaturestatusSteptype
     *
     * @param string $eEzsignsignaturestatusSteptype Type of step
     *
     * @return self
     */
    public function setEEzsignsignaturestatusSteptype($eEzsignsignaturestatusSteptype)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignsignaturestatusSteptype)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignsignaturestatusSteptype cannot be null');
        //}
        $allowedValues = $this->getEEzsignsignaturestatusSteptypeAllowableValues();
        if (!in_array($eEzsignsignaturestatusSteptype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsignsignaturestatusSteptype', must be one of '%s'",
                    $eEzsignsignaturestatusSteptype,
                    implode("', '", $allowedValues)
                )
            );
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignsignaturestatusSteptype'] = $eEzsignsignaturestatusSteptype;
        $this->container['eEzsignsignaturestatusSteptype'] = (is_null($eEzsignsignaturestatusSteptype) ? null : trim((string) $eEzsignsignaturestatusSteptype));

        return $this;
    }

    /**
     * Gets iEzsignsignaturestatusStep
     *
     * @return int
     */
    public function getIEzsignsignaturestatusStep()
    {
        return $this->container['iEzsignsignaturestatusStep'];
    }

    /**
     * Sets iEzsignsignaturestatusStep
     *
     * @param int $iEzsignsignaturestatusStep The step at which the Ezsignsigner will be invited to sign or fill the form fields
     *
     * @return self
     */
    public function setIEzsignsignaturestatusStep($iEzsignsignaturestatusStep)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignaturestatusStep)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignaturestatusStep cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignaturestatusStep'] = $iEzsignsignaturestatusStep;
        $this->container['iEzsignsignaturestatusStep'] = (is_null($iEzsignsignaturestatusStep) ? null : (int) $iEzsignsignaturestatusStep);

        return $this;
    }

    /**
     * Gets iEzsignsignaturestatusTotal
     *
     * @return int
     */
    public function getIEzsignsignaturestatusTotal()
    {
        return $this->container['iEzsignsignaturestatusTotal'];
    }

    /**
     * Sets iEzsignsignaturestatusTotal
     *
     * @param int $iEzsignsignaturestatusTotal The total number of signature or form fields the Ezsignsigner must process at the current step
     *
     * @return self
     */
    public function setIEzsignsignaturestatusTotal($iEzsignsignaturestatusTotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignaturestatusTotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignaturestatusTotal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignaturestatusTotal'] = $iEzsignsignaturestatusTotal;
        $this->container['iEzsignsignaturestatusTotal'] = (is_null($iEzsignsignaturestatusTotal) ? null : (int) $iEzsignsignaturestatusTotal);

        return $this;
    }

    /**
     * Gets iEzsignsignaturestatusSigned
     *
     * @return int
     */
    public function getIEzsignsignaturestatusSigned()
    {
        return $this->container['iEzsignsignaturestatusSigned'];
    }

    /**
     * Sets iEzsignsignaturestatusSigned
     *
     * @param int $iEzsignsignaturestatusSigned The number of signature or form fields the Ezsignsigner has already processed at the current step
     *
     * @return self
     */
    public function setIEzsignsignaturestatusSigned($iEzsignsignaturestatusSigned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignaturestatusSigned)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignaturestatusSigned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignaturestatusSigned'] = $iEzsignsignaturestatusSigned;
        $this->container['iEzsignsignaturestatusSigned'] = (is_null($iEzsignsignaturestatusSigned) ? null : (int) $iEzsignsignaturestatusSigned);

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


