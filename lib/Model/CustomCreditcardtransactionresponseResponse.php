<?php
/**
 * CustomCreditcardtransactionresponseResponse
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
 * Generator version: 7.9.0
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
 * CustomCreditcardtransactionresponseResponse Class Doc Comment
 *
 * @category Class
 * @description A custom Creditcardtransactionresponse Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomCreditcardtransactionresponseResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Creditcardtransactionresponse-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sCreditcardtransactionISOcode' => 'string',
        'sCreditcardtransactionResponsecode' => 'string',
        'sCreditcardtransactionResponseterminalmessage' => 'string',
        'eCreditcardtransactionAvsresult' => '\eZmaxAPI\Model\FieldECreditcardtransactionAvsresult',
        'eCreditcardtransactionCvdresult' => '\eZmaxAPI\Model\FieldECreditcardtransactionCvdresult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sCreditcardtransactionISOcode' => null,
        'sCreditcardtransactionResponsecode' => null,
        'sCreditcardtransactionResponseterminalmessage' => null,
        'eCreditcardtransactionAvsresult' => null,
        'eCreditcardtransactionCvdresult' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sCreditcardtransactionISOcode' => false,
		'sCreditcardtransactionResponsecode' => false,
		'sCreditcardtransactionResponseterminalmessage' => false,
		'eCreditcardtransactionAvsresult' => false,
		'eCreditcardtransactionCvdresult' => false
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
        'sCreditcardtransactionISOcode' => 'sCreditcardtransactionISOcode',
        'sCreditcardtransactionResponsecode' => 'sCreditcardtransactionResponsecode',
        'sCreditcardtransactionResponseterminalmessage' => 'sCreditcardtransactionResponseterminalmessage',
        'eCreditcardtransactionAvsresult' => 'eCreditcardtransactionAvsresult',
        'eCreditcardtransactionCvdresult' => 'eCreditcardtransactionCvdresult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sCreditcardtransactionISOcode' => 'setSCreditcardtransactionISOcode',
        'sCreditcardtransactionResponsecode' => 'setSCreditcardtransactionResponsecode',
        'sCreditcardtransactionResponseterminalmessage' => 'setSCreditcardtransactionResponseterminalmessage',
        'eCreditcardtransactionAvsresult' => 'setECreditcardtransactionAvsresult',
        'eCreditcardtransactionCvdresult' => 'setECreditcardtransactionCvdresult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sCreditcardtransactionISOcode' => 'getSCreditcardtransactionISOcode',
        'sCreditcardtransactionResponsecode' => 'getSCreditcardtransactionResponsecode',
        'sCreditcardtransactionResponseterminalmessage' => 'getSCreditcardtransactionResponseterminalmessage',
        'eCreditcardtransactionAvsresult' => 'getECreditcardtransactionAvsresult',
        'eCreditcardtransactionCvdresult' => 'getECreditcardtransactionCvdresult'
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
        $this->setIfExists('sCreditcardtransactionISOcode', $data ?? [], null);
        $this->setIfExists('sCreditcardtransactionResponsecode', $data ?? [], null);
        $this->setIfExists('sCreditcardtransactionResponseterminalmessage', $data ?? [], null);
        $this->setIfExists('eCreditcardtransactionAvsresult', $data ?? [], null);
        $this->setIfExists('eCreditcardtransactionCvdresult', $data ?? [], null);
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

        if ($this->container['sCreditcardtransactionISOcode'] === null) {
            $invalidProperties[] = "'sCreditcardtransactionISOcode' can't be null";
        }
	//if (!preg_match("/^.{1,2}$/", $this->container['sCreditcardtransactionISOcode'])) {
        if (!is_null($this->container['sCreditcardtransactionISOcode']) && !preg_match("/(*UTF8)^.{1,2}$/", $this->container['sCreditcardtransactionISOcode'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardtransactionISOcode', must be conform to the pattern /^.{1,2}$/.";
        }

        if ($this->container['sCreditcardtransactionResponsecode'] === null) {
            $invalidProperties[] = "'sCreditcardtransactionResponsecode' can't be null";
        }
	//if (!preg_match("/^.{1,3}$/", $this->container['sCreditcardtransactionResponsecode'])) {
        if (!is_null($this->container['sCreditcardtransactionResponsecode']) && !preg_match("/(*UTF8)^.{1,3}$/", $this->container['sCreditcardtransactionResponsecode'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardtransactionResponsecode', must be conform to the pattern /^.{1,3}$/.";
        }

        if ($this->container['sCreditcardtransactionResponseterminalmessage'] === null) {
            $invalidProperties[] = "'sCreditcardtransactionResponseterminalmessage' can't be null";
        }
	//if (!preg_match("/^.{0,50}$/", $this->container['sCreditcardtransactionResponseterminalmessage'])) {
        if (!is_null($this->container['sCreditcardtransactionResponseterminalmessage']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sCreditcardtransactionResponseterminalmessage'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardtransactionResponseterminalmessage', must be conform to the pattern /^.{0,50}$/.";
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
     * Gets sCreditcardtransactionISOcode
     *
     * @return string
     */
    public function getSCreditcardtransactionISOcode()
    {
	//return $this->container['sCreditcardtransactionISOcode'];
        return is_null($this->container['sCreditcardtransactionISOcode']) ? null : trim($this->container['sCreditcardtransactionISOcode']);
    }

    /**
     * Sets sCreditcardtransactionISOcode
     *
     * @param string $sCreditcardtransactionISOcode The ISO code
     *
     * @return self
     */
    public function setSCreditcardtransactionISOcode($sCreditcardtransactionISOcode)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardtransactionISOcode)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardtransactionISOcode cannot be null');
        //}

	//if ((!preg_match("/^.{1,2}$/", ObjectSerializer::toString($sCreditcardtransactionISOcode)))) {
        if (!is_null($sCreditcardtransactionISOcode) && (!preg_match("/(*UTF8)^.{1,2}$/", ObjectSerializer::toString($sCreditcardtransactionISOcode)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sCreditcardtransactionISOcode when calling CustomCreditcardtransactionresponseResponse., must conform to the pattern /^.{1,2}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sCreditcardtransactionISOcode)?'null':'"'.$sCreditcardtransactionISOcode.'"')." for sCreditcardtransactionISOcode when calling CustomCreditcardtransactionresponseResponse., must conform to the pattern /^.{1,2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardtransactionISOcode'] = $sCreditcardtransactionISOcode;
        $this->container['sCreditcardtransactionISOcode'] = (is_null($sCreditcardtransactionISOcode) ? null : trim((string) $sCreditcardtransactionISOcode));

        return $this;
    }

    /**
     * Gets sCreditcardtransactionResponsecode
     *
     * @return string
     */
    public function getSCreditcardtransactionResponsecode()
    {
	//return $this->container['sCreditcardtransactionResponsecode'];
        return is_null($this->container['sCreditcardtransactionResponsecode']) ? null : trim($this->container['sCreditcardtransactionResponsecode']);
    }

    /**
     * Sets sCreditcardtransactionResponsecode
     *
     * @param string $sCreditcardtransactionResponsecode The response code
     *
     * @return self
     */
    public function setSCreditcardtransactionResponsecode($sCreditcardtransactionResponsecode)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardtransactionResponsecode)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardtransactionResponsecode cannot be null');
        //}

	//if ((!preg_match("/^.{1,3}$/", ObjectSerializer::toString($sCreditcardtransactionResponsecode)))) {
        if (!is_null($sCreditcardtransactionResponsecode) && (!preg_match("/(*UTF8)^.{1,3}$/", ObjectSerializer::toString($sCreditcardtransactionResponsecode)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sCreditcardtransactionResponsecode when calling CustomCreditcardtransactionresponseResponse., must conform to the pattern /^.{1,3}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sCreditcardtransactionResponsecode)?'null':'"'.$sCreditcardtransactionResponsecode.'"')." for sCreditcardtransactionResponsecode when calling CustomCreditcardtransactionresponseResponse., must conform to the pattern /^.{1,3}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardtransactionResponsecode'] = $sCreditcardtransactionResponsecode;
        $this->container['sCreditcardtransactionResponsecode'] = (is_null($sCreditcardtransactionResponsecode) ? null : trim((string) $sCreditcardtransactionResponsecode));

        return $this;
    }

    /**
     * Gets sCreditcardtransactionResponseterminalmessage
     *
     * @return string
     */
    public function getSCreditcardtransactionResponseterminalmessage()
    {
	//return $this->container['sCreditcardtransactionResponseterminalmessage'];
        return is_null($this->container['sCreditcardtransactionResponseterminalmessage']) ? null : trim($this->container['sCreditcardtransactionResponseterminalmessage']);
    }

    /**
     * Sets sCreditcardtransactionResponseterminalmessage
     *
     * @param string $sCreditcardtransactionResponseterminalmessage The terminal response message
     *
     * @return self
     */
    public function setSCreditcardtransactionResponseterminalmessage($sCreditcardtransactionResponseterminalmessage)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardtransactionResponseterminalmessage)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardtransactionResponseterminalmessage cannot be null');
        //}

	//if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sCreditcardtransactionResponseterminalmessage)))) {
        if (!is_null($sCreditcardtransactionResponseterminalmessage) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sCreditcardtransactionResponseterminalmessage)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sCreditcardtransactionResponseterminalmessage when calling CustomCreditcardtransactionresponseResponse., must conform to the pattern /^.{0,50}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sCreditcardtransactionResponseterminalmessage)?'null':'"'.$sCreditcardtransactionResponseterminalmessage.'"')." for sCreditcardtransactionResponseterminalmessage when calling CustomCreditcardtransactionresponseResponse., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardtransactionResponseterminalmessage'] = $sCreditcardtransactionResponseterminalmessage;
        $this->container['sCreditcardtransactionResponseterminalmessage'] = (is_null($sCreditcardtransactionResponseterminalmessage) ? null : trim((string) $sCreditcardtransactionResponseterminalmessage));

        return $this;
    }

    /**
     * Gets eCreditcardtransactionAvsresult
     *
     * @return \eZmaxAPI\Model\FieldECreditcardtransactionAvsresult|null
     */
    public function getECreditcardtransactionAvsresult()
    {
	//return $this->container['eCreditcardtransactionAvsresult'];
        return $this->container['eCreditcardtransactionAvsresult'];
    }

    /**
     * Sets eCreditcardtransactionAvsresult
     *
     * @param \eZmaxAPI\Model\FieldECreditcardtransactionAvsresult|null $eCreditcardtransactionAvsresult eCreditcardtransactionAvsresult
     *
     * @return self
     */
    public function setECreditcardtransactionAvsresult($eCreditcardtransactionAvsresult)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCreditcardtransactionAvsresult)) {
            //throw new \InvalidArgumentException('non-nullable eCreditcardtransactionAvsresult cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCreditcardtransactionAvsresult'] = $eCreditcardtransactionAvsresult;
        $this->container['eCreditcardtransactionAvsresult'] = $eCreditcardtransactionAvsresult;

        return $this;
    }

    /**
     * Gets eCreditcardtransactionCvdresult
     *
     * @return \eZmaxAPI\Model\FieldECreditcardtransactionCvdresult|null
     */
    public function getECreditcardtransactionCvdresult()
    {
	//return $this->container['eCreditcardtransactionCvdresult'];
        return $this->container['eCreditcardtransactionCvdresult'];
    }

    /**
     * Sets eCreditcardtransactionCvdresult
     *
     * @param \eZmaxAPI\Model\FieldECreditcardtransactionCvdresult|null $eCreditcardtransactionCvdresult eCreditcardtransactionCvdresult
     *
     * @return self
     */
    public function setECreditcardtransactionCvdresult($eCreditcardtransactionCvdresult)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCreditcardtransactionCvdresult)) {
            //throw new \InvalidArgumentException('non-nullable eCreditcardtransactionCvdresult cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCreditcardtransactionCvdresult'] = $eCreditcardtransactionCvdresult;
        $this->container['eCreditcardtransactionCvdresult'] = $eCreditcardtransactionCvdresult;

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


