<?php
/**
 * PaymenttermRequestCompound
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
 * PaymenttermRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Paymentterm Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymenttermRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'paymentterm-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiPaymenttermID' => 'int',
        'sPaymenttermCode' => 'string',
        'ePaymenttermType' => '\eZmaxAPI\Model\FieldEPaymenttermType',
        'iPaymenttermDay' => 'int',
        'objPaymenttermDescription' => '\eZmaxAPI\Model\MultilingualPaymenttermDescription',
        'bPaymenttermIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiPaymenttermID' => null,
        'sPaymenttermCode' => null,
        'ePaymenttermType' => null,
        'iPaymenttermDay' => null,
        'objPaymenttermDescription' => null,
        'bPaymenttermIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiPaymenttermID' => false,
		'sPaymenttermCode' => false,
		'ePaymenttermType' => false,
		'iPaymenttermDay' => false,
		'objPaymenttermDescription' => false,
		'bPaymenttermIsactive' => false
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
        'pkiPaymenttermID' => 'pkiPaymenttermID',
        'sPaymenttermCode' => 'sPaymenttermCode',
        'ePaymenttermType' => 'ePaymenttermType',
        'iPaymenttermDay' => 'iPaymenttermDay',
        'objPaymenttermDescription' => 'objPaymenttermDescription',
        'bPaymenttermIsactive' => 'bPaymenttermIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiPaymenttermID' => 'setPkiPaymenttermID',
        'sPaymenttermCode' => 'setSPaymenttermCode',
        'ePaymenttermType' => 'setEPaymenttermType',
        'iPaymenttermDay' => 'setIPaymenttermDay',
        'objPaymenttermDescription' => 'setObjPaymenttermDescription',
        'bPaymenttermIsactive' => 'setBPaymenttermIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiPaymenttermID' => 'getPkiPaymenttermID',
        'sPaymenttermCode' => 'getSPaymenttermCode',
        'ePaymenttermType' => 'getEPaymenttermType',
        'iPaymenttermDay' => 'getIPaymenttermDay',
        'objPaymenttermDescription' => 'getObjPaymenttermDescription',
        'bPaymenttermIsactive' => 'getBPaymenttermIsactive'
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
        $this->setIfExists('pkiPaymenttermID', $data ?? [], null);
        $this->setIfExists('sPaymenttermCode', $data ?? [], null);
        $this->setIfExists('ePaymenttermType', $data ?? [], null);
        $this->setIfExists('iPaymenttermDay', $data ?? [], null);
        $this->setIfExists('objPaymenttermDescription', $data ?? [], null);
        $this->setIfExists('bPaymenttermIsactive', $data ?? [], null);
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

        if ($this->container['sPaymenttermCode'] === null) {
            $invalidProperties[] = "'sPaymenttermCode' can't be null";
        }
	//if (!preg_match("/^[A-Z0-9]{1,4}$/", $this->container['sPaymenttermCode'])) {
        if (!is_null($this->container['sPaymenttermCode']) && !preg_match("/(*UTF8)^[A-Z0-9]{1,4}$/", $this->container['sPaymenttermCode'])) {
            $invalidProperties[] = "invalid value for 'sPaymenttermCode', must be conform to the pattern /^[A-Z0-9]{1,4}$/.";
        }

        if ($this->container['ePaymenttermType'] === null) {
            $invalidProperties[] = "'ePaymenttermType' can't be null";
        }
        if ($this->container['iPaymenttermDay'] === null) {
            $invalidProperties[] = "'iPaymenttermDay' can't be null";
        }
        if (($this->container['iPaymenttermDay'] > 255)) {
            $invalidProperties[] = "invalid value for 'iPaymenttermDay', must be smaller than or equal to 255.";
        }

        if (($this->container['iPaymenttermDay'] < 0)) {
            $invalidProperties[] = "invalid value for 'iPaymenttermDay', must be bigger than or equal to 0.";
        }

        if ($this->container['objPaymenttermDescription'] === null) {
            $invalidProperties[] = "'objPaymenttermDescription' can't be null";
        }
        if ($this->container['bPaymenttermIsactive'] === null) {
            $invalidProperties[] = "'bPaymenttermIsactive' can't be null";
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
     * Gets pkiPaymenttermID
     *
     * @return int|null
     */
    public function getPkiPaymenttermID()
    {
	//return $this->container['pkiPaymenttermID'];
        return $this->container['pkiPaymenttermID'];
    }

    /**
     * Sets pkiPaymenttermID
     *
     * @param int|null $pkiPaymenttermID The unique ID of the Paymentterm
     *
     * @return self
     */
    public function setPkiPaymenttermID($pkiPaymenttermID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiPaymenttermID)) {
            //throw new \InvalidArgumentException('non-nullable pkiPaymenttermID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiPaymenttermID'] = $pkiPaymenttermID;
        $this->container['pkiPaymenttermID'] = (is_null($pkiPaymenttermID) ? null : (int) $pkiPaymenttermID);

        return $this;
    }

    /**
     * Gets sPaymenttermCode
     *
     * @return string
     */
    public function getSPaymenttermCode()
    {
	//return $this->container['sPaymenttermCode'];
        return is_null($this->container['sPaymenttermCode']) ? null : trim($this->container['sPaymenttermCode']);
    }

    /**
     * Sets sPaymenttermCode
     *
     * @param string $sPaymenttermCode The code of the Paymentterm
     *
     * @return self
     */
    public function setSPaymenttermCode($sPaymenttermCode)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPaymenttermCode)) {
            //throw new \InvalidArgumentException('non-nullable sPaymenttermCode cannot be null');
        //}

	//if ((!preg_match("/^[A-Z0-9]{1,4}$/", ObjectSerializer::toString($sPaymenttermCode)))) {
        if (!is_null($sPaymenttermCode) && (!preg_match("/(*UTF8)^[A-Z0-9]{1,4}$/", ObjectSerializer::toString($sPaymenttermCode)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sPaymenttermCode when calling PaymenttermRequestCompound., must conform to the pattern /^[A-Z0-9]{1,4}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sPaymenttermCode)?'null':'"'.$sPaymenttermCode.'"')." for sPaymenttermCode when calling PaymenttermRequestCompound., must conform to the pattern /^[A-Z0-9]{1,4}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPaymenttermCode'] = $sPaymenttermCode;
        $this->container['sPaymenttermCode'] = (is_null($sPaymenttermCode) ? null : trim((string) $sPaymenttermCode));

        return $this;
    }

    /**
     * Gets ePaymenttermType
     *
     * @return \eZmaxAPI\Model\FieldEPaymenttermType
     */
    public function getEPaymenttermType()
    {
	//return $this->container['ePaymenttermType'];
        return $this->container['ePaymenttermType'];
    }

    /**
     * Sets ePaymenttermType
     *
     * @param \eZmaxAPI\Model\FieldEPaymenttermType $ePaymenttermType ePaymenttermType
     *
     * @return self
     */
    public function setEPaymenttermType($ePaymenttermType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($ePaymenttermType)) {
            //throw new \InvalidArgumentException('non-nullable ePaymenttermType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['ePaymenttermType'] = $ePaymenttermType;
        $this->container['ePaymenttermType'] = $ePaymenttermType;

        return $this;
    }

    /**
     * Gets iPaymenttermDay
     *
     * @return int
     */
    public function getIPaymenttermDay()
    {
	//return $this->container['iPaymenttermDay'];
        return $this->container['iPaymenttermDay'];
    }

    /**
     * Sets iPaymenttermDay
     *
     * @param int $iPaymenttermDay The day of the Paymentterm
     *
     * @return self
     */
    public function setIPaymenttermDay($iPaymenttermDay)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iPaymenttermDay)) {
            //throw new \InvalidArgumentException('non-nullable iPaymenttermDay cannot be null');
        //}

	//if (($iPaymenttermDay > 255)) {
        if (($iPaymenttermDay > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $iPaymenttermDay when calling PaymenttermRequestCompound., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iPaymenttermDay)?'null':'"'.$iPaymenttermDay.'"').' for iPaymenttermDay when calling PaymenttermRequestCompound., must be smaller than or equal to 255.');
        }
	//if (($iPaymenttermDay < 0)) {
        if (($iPaymenttermDay < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iPaymenttermDay when calling PaymenttermRequestCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iPaymenttermDay)?'null':'"'.$iPaymenttermDay.'"').' for iPaymenttermDay when calling PaymenttermRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iPaymenttermDay'] = $iPaymenttermDay;
        $this->container['iPaymenttermDay'] = (is_null($iPaymenttermDay) ? null : (int) $iPaymenttermDay);

        return $this;
    }

    /**
     * Gets objPaymenttermDescription
     *
     * @return \eZmaxAPI\Model\MultilingualPaymenttermDescription
     */
    public function getObjPaymenttermDescription()
    {
	//return $this->container['objPaymenttermDescription'];
        return $this->container['objPaymenttermDescription'];
    }

    /**
     * Sets objPaymenttermDescription
     *
     * @param \eZmaxAPI\Model\MultilingualPaymenttermDescription $objPaymenttermDescription objPaymenttermDescription
     *
     * @return self
     */
    public function setObjPaymenttermDescription($objPaymenttermDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objPaymenttermDescription)) {
            //throw new \InvalidArgumentException('non-nullable objPaymenttermDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objPaymenttermDescription'] = $objPaymenttermDescription;
        $this->container['objPaymenttermDescription'] = $objPaymenttermDescription;

        return $this;
    }

    /**
     * Gets bPaymenttermIsactive
     *
     * @return bool
     */
    public function getBPaymenttermIsactive()
    {
	//return $this->container['bPaymenttermIsactive'];
        return $this->container['bPaymenttermIsactive'];
    }

    /**
     * Sets bPaymenttermIsactive
     *
     * @param bool $bPaymenttermIsactive Whether the Paymentterm is active or not
     *
     * @return self
     */
    public function setBPaymenttermIsactive($bPaymenttermIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bPaymenttermIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bPaymenttermIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bPaymenttermIsactive'] = $bPaymenttermIsactive;
        $this->container['bPaymenttermIsactive'] = (is_null($bPaymenttermIsactive) ? null : (bool) $bPaymenttermIsactive);

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


