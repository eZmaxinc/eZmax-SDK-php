<?php
/**
 * CustomCreditcardtransactionResponse
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
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
 * CustomCreditcardtransactionResponse Class Doc Comment
 *
 * @category Class
 * @description A custom Creditcardtransaction Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomCreditcardtransactionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Creditcardtransaction-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eCreditcardtypeCodename' => '\eZmaxAPI\Model\FieldECreditcardtypeCodename',
        'dCreditcardtransactionAmount' => 'string',
        'sCreditcardtransactionPartiallydecryptednumber' => 'string',
        'sCreditcardtransactionReferencenumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eCreditcardtypeCodename' => null,
        'dCreditcardtransactionAmount' => null,
        'sCreditcardtransactionPartiallydecryptednumber' => null,
        'sCreditcardtransactionReferencenumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eCreditcardtypeCodename' => false,
		'dCreditcardtransactionAmount' => false,
		'sCreditcardtransactionPartiallydecryptednumber' => false,
		'sCreditcardtransactionReferencenumber' => false
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
        'eCreditcardtypeCodename' => 'eCreditcardtypeCodename',
        'dCreditcardtransactionAmount' => 'dCreditcardtransactionAmount',
        'sCreditcardtransactionPartiallydecryptednumber' => 'sCreditcardtransactionPartiallydecryptednumber',
        'sCreditcardtransactionReferencenumber' => 'sCreditcardtransactionReferencenumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eCreditcardtypeCodename' => 'setECreditcardtypeCodename',
        'dCreditcardtransactionAmount' => 'setDCreditcardtransactionAmount',
        'sCreditcardtransactionPartiallydecryptednumber' => 'setSCreditcardtransactionPartiallydecryptednumber',
        'sCreditcardtransactionReferencenumber' => 'setSCreditcardtransactionReferencenumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eCreditcardtypeCodename' => 'getECreditcardtypeCodename',
        'dCreditcardtransactionAmount' => 'getDCreditcardtransactionAmount',
        'sCreditcardtransactionPartiallydecryptednumber' => 'getSCreditcardtransactionPartiallydecryptednumber',
        'sCreditcardtransactionReferencenumber' => 'getSCreditcardtransactionReferencenumber'
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
        $this->setIfExists('eCreditcardtypeCodename', $data ?? [], null);
        $this->setIfExists('dCreditcardtransactionAmount', $data ?? [], null);
        $this->setIfExists('sCreditcardtransactionPartiallydecryptednumber', $data ?? [], null);
        $this->setIfExists('sCreditcardtransactionReferencenumber', $data ?? [], null);
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

        if ($this->container['dCreditcardtransactionAmount'] === null) {
            $invalidProperties[] = "'dCreditcardtransactionAmount' can't be null";
        }
//        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dCreditcardtransactionAmount'])) {
        if (!is_null($this->container['dCreditcardtransactionAmount']) && !preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dCreditcardtransactionAmount'])) {
            $invalidProperties[] = "invalid value for 'dCreditcardtransactionAmount', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['sCreditcardtransactionPartiallydecryptednumber'] === null) {
            $invalidProperties[] = "'sCreditcardtransactionPartiallydecryptednumber' can't be null";
        }
//        if (!preg_match("/^([X]{4}[ ]){3}(\\d){4}$/", $this->container['sCreditcardtransactionPartiallydecryptednumber'])) {
        if (!is_null($this->container['sCreditcardtransactionPartiallydecryptednumber']) && !preg_match("/^([X]{4}[ ]){3}(\\d){4}$/", $this->container['sCreditcardtransactionPartiallydecryptednumber'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardtransactionPartiallydecryptednumber', must be conform to the pattern /^([X]{4}[ ]){3}(\\d){4}$/.";
        }

        if ($this->container['sCreditcardtransactionReferencenumber'] === null) {
            $invalidProperties[] = "'sCreditcardtransactionReferencenumber' can't be null";
        }
//        if (!preg_match("/^[\\d]{18}$/", $this->container['sCreditcardtransactionReferencenumber'])) {
        if (!is_null($this->container['sCreditcardtransactionReferencenumber']) && !preg_match("/^[\\d]{18}$/", $this->container['sCreditcardtransactionReferencenumber'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardtransactionReferencenumber', must be conform to the pattern /^[\\d]{18}$/.";
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
     * Gets eCreditcardtypeCodename
     *
     * @return \eZmaxAPI\Model\FieldECreditcardtypeCodename|null
     */
    public function getECreditcardtypeCodename()
    {
        return $this->container['eCreditcardtypeCodename'];
    }

    /**
     * Sets eCreditcardtypeCodename
     *
     * @param \eZmaxAPI\Model\FieldECreditcardtypeCodename|null $eCreditcardtypeCodename eCreditcardtypeCodename
     *
     * @return self
     */
    public function setECreditcardtypeCodename($eCreditcardtypeCodename)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCreditcardtypeCodename)) {
            //throw new \InvalidArgumentException('non-nullable eCreditcardtypeCodename cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCreditcardtypeCodename'] = $eCreditcardtypeCodename;
        $this->container['eCreditcardtypeCodename'] = $eCreditcardtypeCodename;

        return $this;
    }

    /**
     * Gets dCreditcardtransactionAmount
     *
     * @return string
     */
    public function getDCreditcardtransactionAmount()
    {
        return $this->container['dCreditcardtransactionAmount'];
    }

    /**
     * Sets dCreditcardtransactionAmount
     *
     * @param string $dCreditcardtransactionAmount The amount of the Creditcardtransaction
     *
     * @return self
     */
    public function setDCreditcardtransactionAmount($dCreditcardtransactionAmount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dCreditcardtransactionAmount)) {
            //throw new \InvalidArgumentException('non-nullable dCreditcardtransactionAmount cannot be null');
        //}

//        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dCreditcardtransactionAmount))) {
        if (!is_null($dCreditcardtransactionAmount) && (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dCreditcardtransactionAmount))) {
            throw new \InvalidArgumentException("invalid value for \$dCreditcardtransactionAmount when calling CustomCreditcardtransactionResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dCreditcardtransactionAmount'] = $dCreditcardtransactionAmount;
        $this->container['dCreditcardtransactionAmount'] = (is_null($dCreditcardtransactionAmount) ? null : (string) $dCreditcardtransactionAmount);

        return $this;
    }

    /**
     * Gets sCreditcardtransactionPartiallydecryptednumber
     *
     * @return string
     */
    public function getSCreditcardtransactionPartiallydecryptednumber()
    {
        return $this->container['sCreditcardtransactionPartiallydecryptednumber'];
    }

    /**
     * Sets sCreditcardtransactionPartiallydecryptednumber
     *
     * @param string $sCreditcardtransactionPartiallydecryptednumber The partially decrypted credit card number used in the Creditcardtransaction
     *
     * @return self
     */
    public function setSCreditcardtransactionPartiallydecryptednumber($sCreditcardtransactionPartiallydecryptednumber)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardtransactionPartiallydecryptednumber)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardtransactionPartiallydecryptednumber cannot be null');
        //}

//        if ((!preg_match("/^([X]{4}[ ]){3}(\\d){4}$/", $sCreditcardtransactionPartiallydecryptednumber))) {
        if (!is_null($sCreditcardtransactionPartiallydecryptednumber) && (!preg_match("/^([X]{4}[ ]){3}(\\d){4}$/", $sCreditcardtransactionPartiallydecryptednumber))) {
            throw new \InvalidArgumentException("invalid value for \$sCreditcardtransactionPartiallydecryptednumber when calling CustomCreditcardtransactionResponse., must conform to the pattern /^([X]{4}[ ]){3}(\\d){4}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardtransactionPartiallydecryptednumber'] = $sCreditcardtransactionPartiallydecryptednumber;
        $this->container['sCreditcardtransactionPartiallydecryptednumber'] = (is_null($sCreditcardtransactionPartiallydecryptednumber) ? null : (string) $sCreditcardtransactionPartiallydecryptednumber);

        return $this;
    }

    /**
     * Gets sCreditcardtransactionReferencenumber
     *
     * @return string
     */
    public function getSCreditcardtransactionReferencenumber()
    {
        return $this->container['sCreditcardtransactionReferencenumber'];
    }

    /**
     * Sets sCreditcardtransactionReferencenumber
     *
     * @param string $sCreditcardtransactionReferencenumber The reference number on the creditcard service for the Creditcardtransaction
     *
     * @return self
     */
    public function setSCreditcardtransactionReferencenumber($sCreditcardtransactionReferencenumber)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardtransactionReferencenumber)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardtransactionReferencenumber cannot be null');
        //}

//        if ((!preg_match("/^[\\d]{18}$/", $sCreditcardtransactionReferencenumber))) {
        if (!is_null($sCreditcardtransactionReferencenumber) && (!preg_match("/^[\\d]{18}$/", $sCreditcardtransactionReferencenumber))) {
            throw new \InvalidArgumentException("invalid value for \$sCreditcardtransactionReferencenumber when calling CustomCreditcardtransactionResponse., must conform to the pattern /^[\\d]{18}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardtransactionReferencenumber'] = $sCreditcardtransactionReferencenumber;
        $this->container['sCreditcardtransactionReferencenumber'] = (is_null($sCreditcardtransactionReferencenumber) ? null : (string) $sCreditcardtransactionReferencenumber);

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


