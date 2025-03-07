<?php
/**
 * EzsignsignaturepaymentdetailResponse
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
 * EzsignsignaturepaymentdetailResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsignaturepaymentdetail Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsignaturepaymentdetailResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsignaturepaymentdetail-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignsignaturepaymentdetailID' => 'int',
        'fkiGlaccountcontainerID' => 'int',
        'tEzsignsignaturepaymentdetailDescription' => 'string',
        'dEzsignsignaturepaymentdetailAmount' => 'string',
        'eEzsignsignaturepaymentdetailTaxable' => '\eZmaxAPI\Model\FieldEEzsignsignaturepaymentdetailTaxable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignsignaturepaymentdetailID' => null,
        'fkiGlaccountcontainerID' => null,
        'tEzsignsignaturepaymentdetailDescription' => null,
        'dEzsignsignaturepaymentdetailAmount' => null,
        'eEzsignsignaturepaymentdetailTaxable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignsignaturepaymentdetailID' => false,
		'fkiGlaccountcontainerID' => false,
		'tEzsignsignaturepaymentdetailDescription' => false,
		'dEzsignsignaturepaymentdetailAmount' => false,
		'eEzsignsignaturepaymentdetailTaxable' => false
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
        'pkiEzsignsignaturepaymentdetailID' => 'pkiEzsignsignaturepaymentdetailID',
        'fkiGlaccountcontainerID' => 'fkiGlaccountcontainerID',
        'tEzsignsignaturepaymentdetailDescription' => 'tEzsignsignaturepaymentdetailDescription',
        'dEzsignsignaturepaymentdetailAmount' => 'dEzsignsignaturepaymentdetailAmount',
        'eEzsignsignaturepaymentdetailTaxable' => 'eEzsignsignaturepaymentdetailTaxable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignsignaturepaymentdetailID' => 'setPkiEzsignsignaturepaymentdetailID',
        'fkiGlaccountcontainerID' => 'setFkiGlaccountcontainerID',
        'tEzsignsignaturepaymentdetailDescription' => 'setTEzsignsignaturepaymentdetailDescription',
        'dEzsignsignaturepaymentdetailAmount' => 'setDEzsignsignaturepaymentdetailAmount',
        'eEzsignsignaturepaymentdetailTaxable' => 'setEEzsignsignaturepaymentdetailTaxable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignsignaturepaymentdetailID' => 'getPkiEzsignsignaturepaymentdetailID',
        'fkiGlaccountcontainerID' => 'getFkiGlaccountcontainerID',
        'tEzsignsignaturepaymentdetailDescription' => 'getTEzsignsignaturepaymentdetailDescription',
        'dEzsignsignaturepaymentdetailAmount' => 'getDEzsignsignaturepaymentdetailAmount',
        'eEzsignsignaturepaymentdetailTaxable' => 'getEEzsignsignaturepaymentdetailTaxable'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pkiEzsignsignaturepaymentdetailID', $data ?? [], null);
        $this->setIfExists('fkiGlaccountcontainerID', $data ?? [], null);
        $this->setIfExists('tEzsignsignaturepaymentdetailDescription', $data ?? [], null);
        $this->setIfExists('dEzsignsignaturepaymentdetailAmount', $data ?? [], null);
        $this->setIfExists('eEzsignsignaturepaymentdetailTaxable', $data ?? [], null);
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

        if ($this->container['pkiEzsignsignaturepaymentdetailID'] === null) {
            $invalidProperties[] = "'pkiEzsignsignaturepaymentdetailID' can't be null";
        }
        if (($this->container['pkiEzsignsignaturepaymentdetailID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsignaturepaymentdetailID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiEzsignsignaturepaymentdetailID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsignaturepaymentdetailID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiGlaccountcontainerID']) && ($this->container['fkiGlaccountcontainerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiGlaccountcontainerID', must be bigger than or equal to 0.";
        }

        if ($this->container['tEzsignsignaturepaymentdetailDescription'] === null) {
            $invalidProperties[] = "'tEzsignsignaturepaymentdetailDescription' can't be null";
        }
        if ($this->container['dEzsignsignaturepaymentdetailAmount'] === null) {
            $invalidProperties[] = "'dEzsignsignaturepaymentdetailAmount' can't be null";
        }
	//if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzsignsignaturepaymentdetailAmount'])) {
        if (!is_null($this->container['dEzsignsignaturepaymentdetailAmount']) && !preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzsignsignaturepaymentdetailAmount'])) {
            $invalidProperties[] = "invalid value for 'dEzsignsignaturepaymentdetailAmount', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['eEzsignsignaturepaymentdetailTaxable'] === null) {
            $invalidProperties[] = "'eEzsignsignaturepaymentdetailTaxable' can't be null";
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
     * Gets pkiEzsignsignaturepaymentdetailID
     *
     * @return int
     */
    public function getPkiEzsignsignaturepaymentdetailID()
    {
	//return $this->container['pkiEzsignsignaturepaymentdetailID'];
        return $this->container['pkiEzsignsignaturepaymentdetailID'];
    }

    /**
     * Sets pkiEzsignsignaturepaymentdetailID
     *
     * @param int $pkiEzsignsignaturepaymentdetailID The unique ID of the Ezsignsignaturepaymentdetail
     *
     * @return self
     */
    public function setPkiEzsignsignaturepaymentdetailID($pkiEzsignsignaturepaymentdetailID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignsignaturepaymentdetailID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignsignaturepaymentdetailID cannot be null');
        //}

	//if (($pkiEzsignsignaturepaymentdetailID > 65535)) {
        if (($pkiEzsignsignaturepaymentdetailID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignsignaturepaymentdetailID when calling EzsignsignaturepaymentdetailResponse., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignsignaturepaymentdetailID)?'null':'"'.$pkiEzsignsignaturepaymentdetailID.'"').' for pkiEzsignsignaturepaymentdetailID when calling EzsignsignaturepaymentdetailResponse., must be smaller than or equal to 65535.');
        }
	//if (($pkiEzsignsignaturepaymentdetailID < 0)) {
        if (($pkiEzsignsignaturepaymentdetailID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignsignaturepaymentdetailID when calling EzsignsignaturepaymentdetailResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignsignaturepaymentdetailID)?'null':'"'.$pkiEzsignsignaturepaymentdetailID.'"').' for pkiEzsignsignaturepaymentdetailID when calling EzsignsignaturepaymentdetailResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignsignaturepaymentdetailID'] = $pkiEzsignsignaturepaymentdetailID;
        $this->container['pkiEzsignsignaturepaymentdetailID'] = (is_null($pkiEzsignsignaturepaymentdetailID) ? null : (int) $pkiEzsignsignaturepaymentdetailID);

        return $this;
    }

    /**
     * Gets fkiGlaccountcontainerID
     *
     * @return int|null
     */
    public function getFkiGlaccountcontainerID()
    {
	//return $this->container['fkiGlaccountcontainerID'];
        return $this->container['fkiGlaccountcontainerID'];
    }

    /**
     * Sets fkiGlaccountcontainerID
     *
     * @param int|null $fkiGlaccountcontainerID The unique ID of the Glaccountcontainer
     *
     * @return self
     */
    public function setFkiGlaccountcontainerID($fkiGlaccountcontainerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiGlaccountcontainerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiGlaccountcontainerID cannot be null');
        //}

	//if (($fkiGlaccountcontainerID < 0)) {
        if (!is_null($fkiGlaccountcontainerID) && ($fkiGlaccountcontainerID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiGlaccountcontainerID when calling EzsignsignaturepaymentdetailResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiGlaccountcontainerID)?'null':'"'.$fkiGlaccountcontainerID.'"').' for fkiGlaccountcontainerID when calling EzsignsignaturepaymentdetailResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiGlaccountcontainerID'] = $fkiGlaccountcontainerID;
        $this->container['fkiGlaccountcontainerID'] = (is_null($fkiGlaccountcontainerID) ? null : (int) $fkiGlaccountcontainerID);

        return $this;
    }

    /**
     * Gets tEzsignsignaturepaymentdetailDescription
     *
     * @return string
     */
    public function getTEzsignsignaturepaymentdetailDescription()
    {
	//return $this->container['tEzsignsignaturepaymentdetailDescription'];
        return is_null($this->container['tEzsignsignaturepaymentdetailDescription']) ? null : trim($this->container['tEzsignsignaturepaymentdetailDescription']);
    }

    /**
     * Sets tEzsignsignaturepaymentdetailDescription
     *
     * @param string $tEzsignsignaturepaymentdetailDescription A description for the Ezsignsignaturepaymentdetail.
     *
     * @return self
     */
    public function setTEzsignsignaturepaymentdetailDescription($tEzsignsignaturepaymentdetailDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tEzsignsignaturepaymentdetailDescription)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignsignaturepaymentdetailDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tEzsignsignaturepaymentdetailDescription'] = $tEzsignsignaturepaymentdetailDescription;
        $this->container['tEzsignsignaturepaymentdetailDescription'] = (is_null($tEzsignsignaturepaymentdetailDescription) ? null : trim((string) $tEzsignsignaturepaymentdetailDescription));

        return $this;
    }

    /**
     * Gets dEzsignsignaturepaymentdetailAmount
     *
     * @return string
     */
    public function getDEzsignsignaturepaymentdetailAmount()
    {
	//return $this->container['dEzsignsignaturepaymentdetailAmount'];
        return is_null($this->container['dEzsignsignaturepaymentdetailAmount']) ? null : trim($this->container['dEzsignsignaturepaymentdetailAmount']);
    }

    /**
     * Sets dEzsignsignaturepaymentdetailAmount
     *
     * @param string $dEzsignsignaturepaymentdetailAmount The amount of the for the Ezsignsignaturepaymentdetail
     *
     * @return self
     */
    public function setDEzsignsignaturepaymentdetailAmount($dEzsignsignaturepaymentdetailAmount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzsignsignaturepaymentdetailAmount)) {
            //throw new \InvalidArgumentException('non-nullable dEzsignsignaturepaymentdetailAmount cannot be null');
        //}

	//if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dEzsignsignaturepaymentdetailAmount)))) {
        if (!is_null($dEzsignsignaturepaymentdetailAmount) && (!preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dEzsignsignaturepaymentdetailAmount)))) {
	    //throw new \InvalidArgumentException("invalid value for \$dEzsignsignaturepaymentdetailAmount when calling EzsignsignaturepaymentdetailResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($dEzsignsignaturepaymentdetailAmount)?'null':'"'.$dEzsignsignaturepaymentdetailAmount.'"')." for dEzsignsignaturepaymentdetailAmount when calling EzsignsignaturepaymentdetailResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzsignsignaturepaymentdetailAmount'] = $dEzsignsignaturepaymentdetailAmount;
        $this->container['dEzsignsignaturepaymentdetailAmount'] = (is_null($dEzsignsignaturepaymentdetailAmount) ? null : trim((string) $dEzsignsignaturepaymentdetailAmount));

        return $this;
    }

    /**
     * Gets eEzsignsignaturepaymentdetailTaxable
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignaturepaymentdetailTaxable
     */
    public function getEEzsignsignaturepaymentdetailTaxable()
    {
	//return $this->container['eEzsignsignaturepaymentdetailTaxable'];
        return $this->container['eEzsignsignaturepaymentdetailTaxable'];
    }

    /**
     * Sets eEzsignsignaturepaymentdetailTaxable
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignaturepaymentdetailTaxable $eEzsignsignaturepaymentdetailTaxable eEzsignsignaturepaymentdetailTaxable
     *
     * @return self
     */
    public function setEEzsignsignaturepaymentdetailTaxable($eEzsignsignaturepaymentdetailTaxable)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignsignaturepaymentdetailTaxable)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignsignaturepaymentdetailTaxable cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignsignaturepaymentdetailTaxable'] = $eEzsignsignaturepaymentdetailTaxable;
        $this->container['eEzsignsignaturepaymentdetailTaxable'] = $eEzsignsignaturepaymentdetailTaxable;

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


