<?php
/**
 * CreditcardclientResponse
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
 * CreditcardclientResponse Class Doc Comment
 *
 * @category Class
 * @description A Creditcardclient Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreditcardclientResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'creditcardclient-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCreditcardclientID' => 'int',
        'fkiCreditcarddetailID' => 'int',
        'bCreditcardclientrelationIsdefault' => 'bool',
        'sCreditcardclientDescription' => 'string',
        'bCreditcardclientAllowedcompanypayment' => 'bool',
        'bCreditcardclientAllowedtranquillit' => 'bool',
        'objCreditcarddetail' => '\eZmaxAPI\Model\CreditcarddetailResponseCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCreditcardclientID' => null,
        'fkiCreditcarddetailID' => null,
        'bCreditcardclientrelationIsdefault' => null,
        'sCreditcardclientDescription' => null,
        'bCreditcardclientAllowedcompanypayment' => null,
        'bCreditcardclientAllowedtranquillit' => null,
        'objCreditcarddetail' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCreditcardclientID' => false,
		'fkiCreditcarddetailID' => false,
		'bCreditcardclientrelationIsdefault' => false,
		'sCreditcardclientDescription' => false,
		'bCreditcardclientAllowedcompanypayment' => false,
		'bCreditcardclientAllowedtranquillit' => false,
		'objCreditcarddetail' => false
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
        'pkiCreditcardclientID' => 'pkiCreditcardclientID',
        'fkiCreditcarddetailID' => 'fkiCreditcarddetailID',
        'bCreditcardclientrelationIsdefault' => 'bCreditcardclientrelationIsdefault',
        'sCreditcardclientDescription' => 'sCreditcardclientDescription',
        'bCreditcardclientAllowedcompanypayment' => 'bCreditcardclientAllowedcompanypayment',
        'bCreditcardclientAllowedtranquillit' => 'bCreditcardclientAllowedtranquillit',
        'objCreditcarddetail' => 'objCreditcarddetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCreditcardclientID' => 'setPkiCreditcardclientID',
        'fkiCreditcarddetailID' => 'setFkiCreditcarddetailID',
        'bCreditcardclientrelationIsdefault' => 'setBCreditcardclientrelationIsdefault',
        'sCreditcardclientDescription' => 'setSCreditcardclientDescription',
        'bCreditcardclientAllowedcompanypayment' => 'setBCreditcardclientAllowedcompanypayment',
        'bCreditcardclientAllowedtranquillit' => 'setBCreditcardclientAllowedtranquillit',
        'objCreditcarddetail' => 'setObjCreditcarddetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCreditcardclientID' => 'getPkiCreditcardclientID',
        'fkiCreditcarddetailID' => 'getFkiCreditcarddetailID',
        'bCreditcardclientrelationIsdefault' => 'getBCreditcardclientrelationIsdefault',
        'sCreditcardclientDescription' => 'getSCreditcardclientDescription',
        'bCreditcardclientAllowedcompanypayment' => 'getBCreditcardclientAllowedcompanypayment',
        'bCreditcardclientAllowedtranquillit' => 'getBCreditcardclientAllowedtranquillit',
        'objCreditcarddetail' => 'getObjCreditcarddetail'
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
        $this->setIfExists('pkiCreditcardclientID', $data ?? [], null);
        $this->setIfExists('fkiCreditcarddetailID', $data ?? [], null);
        $this->setIfExists('bCreditcardclientrelationIsdefault', $data ?? [], null);
        $this->setIfExists('sCreditcardclientDescription', $data ?? [], null);
        $this->setIfExists('bCreditcardclientAllowedcompanypayment', $data ?? [], null);
        $this->setIfExists('bCreditcardclientAllowedtranquillit', $data ?? [], null);
        $this->setIfExists('objCreditcarddetail', $data ?? [], null);
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

        if ($this->container['pkiCreditcardclientID'] === null) {
            $invalidProperties[] = "'pkiCreditcardclientID' can't be null";
        }
        if (($this->container['pkiCreditcardclientID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiCreditcardclientID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiCreditcardclientID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiCreditcardclientID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiCreditcarddetailID'] === null) {
            $invalidProperties[] = "'fkiCreditcarddetailID' can't be null";
        }
        if (($this->container['fkiCreditcarddetailID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiCreditcarddetailID', must be smaller than or equal to 65535.";
        }

        if (($this->container['fkiCreditcarddetailID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiCreditcarddetailID', must be bigger than or equal to 0.";
        }

        if ($this->container['bCreditcardclientrelationIsdefault'] === null) {
            $invalidProperties[] = "'bCreditcardclientrelationIsdefault' can't be null";
        }
        if ($this->container['sCreditcardclientDescription'] === null) {
            $invalidProperties[] = "'sCreditcardclientDescription' can't be null";
        }
//        if (!preg_match("/^.{0,50}$/", $this->container['sCreditcardclientDescription'])) {
        if (!is_null($this->container['sCreditcardclientDescription']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sCreditcardclientDescription'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardclientDescription', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['bCreditcardclientAllowedcompanypayment'] === null) {
            $invalidProperties[] = "'bCreditcardclientAllowedcompanypayment' can't be null";
        }
        if ($this->container['bCreditcardclientAllowedtranquillit'] === null) {
            $invalidProperties[] = "'bCreditcardclientAllowedtranquillit' can't be null";
        }
        if ($this->container['objCreditcarddetail'] === null) {
            $invalidProperties[] = "'objCreditcarddetail' can't be null";
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
     * Gets pkiCreditcardclientID
     *
     * @return int
     */
    public function getPkiCreditcardclientID()
    {
        return $this->container['pkiCreditcardclientID'];
    }

    /**
     * Sets pkiCreditcardclientID
     *
     * @param int $pkiCreditcardclientID The unique ID of the Creditcardclient
     *
     * @return self
     */
    public function setPkiCreditcardclientID($pkiCreditcardclientID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCreditcardclientID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCreditcardclientID cannot be null');
        //}

//        if (($pkiCreditcardclientID > 65535)) {
        if (($pkiCreditcardclientID > 65535)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiCreditcardclientID)?'null':'"'.$pkiCreditcardclientID.'"').' for pkiCreditcardclientID when calling CreditcardclientResponse., must be smaller than or equal to 65535.');
        }
//        if (($pkiCreditcardclientID < 0)) {
        if (($pkiCreditcardclientID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiCreditcardclientID)?'null':'"'.$pkiCreditcardclientID.'"').' for pkiCreditcardclientID when calling CreditcardclientResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCreditcardclientID'] = $pkiCreditcardclientID;
        $this->container['pkiCreditcardclientID'] = (is_null($pkiCreditcardclientID) ? null : (int) $pkiCreditcardclientID);

        return $this;
    }

    /**
     * Gets fkiCreditcarddetailID
     *
     * @return int
     */
    public function getFkiCreditcarddetailID()
    {
        return $this->container['fkiCreditcarddetailID'];
    }

    /**
     * Sets fkiCreditcarddetailID
     *
     * @param int $fkiCreditcarddetailID The unique ID of the Creditcarddetail
     *
     * @return self
     */
    public function setFkiCreditcarddetailID($fkiCreditcarddetailID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiCreditcarddetailID)) {
            //throw new \InvalidArgumentException('non-nullable fkiCreditcarddetailID cannot be null');
        //}

//        if (($fkiCreditcarddetailID > 65535)) {
        if (($fkiCreditcarddetailID > 65535)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiCreditcarddetailID)?'null':'"'.$fkiCreditcarddetailID.'"').' for fkiCreditcarddetailID when calling CreditcardclientResponse., must be smaller than or equal to 65535.');
        }
//        if (($fkiCreditcarddetailID < 0)) {
        if (($fkiCreditcarddetailID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiCreditcarddetailID)?'null':'"'.$fkiCreditcarddetailID.'"').' for fkiCreditcarddetailID when calling CreditcardclientResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiCreditcarddetailID'] = $fkiCreditcarddetailID;
        $this->container['fkiCreditcarddetailID'] = (is_null($fkiCreditcarddetailID) ? null : (int) $fkiCreditcarddetailID);

        return $this;
    }

    /**
     * Gets bCreditcardclientrelationIsdefault
     *
     * @return bool
     */
    public function getBCreditcardclientrelationIsdefault()
    {
        return $this->container['bCreditcardclientrelationIsdefault'];
    }

    /**
     * Sets bCreditcardclientrelationIsdefault
     *
     * @param bool $bCreditcardclientrelationIsdefault Whether if it's the creditcardclient is the default one
     *
     * @return self
     */
    public function setBCreditcardclientrelationIsdefault($bCreditcardclientrelationIsdefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCreditcardclientrelationIsdefault)) {
            //throw new \InvalidArgumentException('non-nullable bCreditcardclientrelationIsdefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCreditcardclientrelationIsdefault'] = $bCreditcardclientrelationIsdefault;
        $this->container['bCreditcardclientrelationIsdefault'] = (is_null($bCreditcardclientrelationIsdefault) ? null : (bool) $bCreditcardclientrelationIsdefault);

        return $this;
    }

    /**
     * Gets sCreditcardclientDescription
     *
     * @return string
     */
    public function getSCreditcardclientDescription()
    {
        return is_null($this->container['sCreditcardclientDescription']) ? null : trim($this->container['sCreditcardclientDescription']);
    }

    /**
     * Sets sCreditcardclientDescription
     *
     * @param string $sCreditcardclientDescription The description of the Creditcardclient
     *
     * @return self
     */
    public function setSCreditcardclientDescription($sCreditcardclientDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardclientDescription)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardclientDescription cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sCreditcardclientDescription)))) {
        if (!is_null($sCreditcardclientDescription) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sCreditcardclientDescription)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($sCreditcardclientDescription)?'null':'"'.$sCreditcardclientDescription.'"')." for sCreditcardclientDescription when calling CreditcardclientResponse., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardclientDescription'] = $sCreditcardclientDescription;
        $this->container['sCreditcardclientDescription'] = (is_null($sCreditcardclientDescription) ? null : trim((string) $sCreditcardclientDescription));

        return $this;
    }

    /**
     * Gets bCreditcardclientAllowedcompanypayment
     *
     * @return bool
     */
    public function getBCreditcardclientAllowedcompanypayment()
    {
        return $this->container['bCreditcardclientAllowedcompanypayment'];
    }

    /**
     * Sets bCreditcardclientAllowedcompanypayment
     *
     * @param bool $bCreditcardclientAllowedcompanypayment Whether if it's an allowedagencypayment
     *
     * @return self
     */
    public function setBCreditcardclientAllowedcompanypayment($bCreditcardclientAllowedcompanypayment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCreditcardclientAllowedcompanypayment)) {
            //throw new \InvalidArgumentException('non-nullable bCreditcardclientAllowedcompanypayment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCreditcardclientAllowedcompanypayment'] = $bCreditcardclientAllowedcompanypayment;
        $this->container['bCreditcardclientAllowedcompanypayment'] = (is_null($bCreditcardclientAllowedcompanypayment) ? null : (bool) $bCreditcardclientAllowedcompanypayment);

        return $this;
    }

    /**
     * Gets bCreditcardclientAllowedtranquillit
     *
     * @return bool
     */
    public function getBCreditcardclientAllowedtranquillit()
    {
        return $this->container['bCreditcardclientAllowedtranquillit'];
    }

    /**
     * Sets bCreditcardclientAllowedtranquillit
     *
     * @param bool $bCreditcardclientAllowedtranquillit Whether if it's an allowedtranquillit
     *
     * @return self
     */
    public function setBCreditcardclientAllowedtranquillit($bCreditcardclientAllowedtranquillit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCreditcardclientAllowedtranquillit)) {
            //throw new \InvalidArgumentException('non-nullable bCreditcardclientAllowedtranquillit cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCreditcardclientAllowedtranquillit'] = $bCreditcardclientAllowedtranquillit;
        $this->container['bCreditcardclientAllowedtranquillit'] = (is_null($bCreditcardclientAllowedtranquillit) ? null : (bool) $bCreditcardclientAllowedtranquillit);

        return $this;
    }

    /**
     * Gets objCreditcarddetail
     *
     * @return \eZmaxAPI\Model\CreditcarddetailResponseCompound
     */
    public function getObjCreditcarddetail()
    {
        return $this->container['objCreditcarddetail'];
    }

    /**
     * Sets objCreditcarddetail
     *
     * @param \eZmaxAPI\Model\CreditcarddetailResponseCompound $objCreditcarddetail objCreditcarddetail
     *
     * @return self
     */
    public function setObjCreditcarddetail($objCreditcarddetail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objCreditcarddetail)) {
            //throw new \InvalidArgumentException('non-nullable objCreditcarddetail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objCreditcarddetail'] = $objCreditcarddetail;
        $this->container['objCreditcarddetail'] = $objCreditcarddetail;

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


