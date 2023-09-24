<?php
/**
 * BillingentityinternalproductResponse
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
 * OpenAPI Generator version: 7.0.1
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
 * BillingentityinternalproductResponse Class Doc Comment
 *
 * @category Class
 * @description A Billingentityinternalproduct Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BillingentityinternalproductResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'billingentityinternalproduct-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiBillingentityinternalproductID' => 'int',
        'fkiBillingentityinternalID' => 'int',
        'sBillingentityinternalDescriptionX' => 'string',
        'fkiEzmaxproductID' => 'int',
        'sEzmaxproductDescriptionX' => 'string',
        'fkiBillingentityexternalID' => 'int',
        'sBillingentityexternalDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiBillingentityinternalproductID' => null,
        'fkiBillingentityinternalID' => null,
        'sBillingentityinternalDescriptionX' => null,
        'fkiEzmaxproductID' => null,
        'sEzmaxproductDescriptionX' => null,
        'fkiBillingentityexternalID' => null,
        'sBillingentityexternalDescription' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiBillingentityinternalproductID' => false,
		'fkiBillingentityinternalID' => false,
		'sBillingentityinternalDescriptionX' => false,
		'fkiEzmaxproductID' => false,
		'sEzmaxproductDescriptionX' => false,
		'fkiBillingentityexternalID' => false,
		'sBillingentityexternalDescription' => false
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
        'pkiBillingentityinternalproductID' => 'pkiBillingentityinternalproductID',
        'fkiBillingentityinternalID' => 'fkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'sBillingentityinternalDescriptionX',
        'fkiEzmaxproductID' => 'fkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'sEzmaxproductDescriptionX',
        'fkiBillingentityexternalID' => 'fkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'sBillingentityexternalDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiBillingentityinternalproductID' => 'setPkiBillingentityinternalproductID',
        'fkiBillingentityinternalID' => 'setFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'setSBillingentityinternalDescriptionX',
        'fkiEzmaxproductID' => 'setFkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'setSEzmaxproductDescriptionX',
        'fkiBillingentityexternalID' => 'setFkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'setSBillingentityexternalDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiBillingentityinternalproductID' => 'getPkiBillingentityinternalproductID',
        'fkiBillingentityinternalID' => 'getFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'getSBillingentityinternalDescriptionX',
        'fkiEzmaxproductID' => 'getFkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'getSEzmaxproductDescriptionX',
        'fkiBillingentityexternalID' => 'getFkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'getSBillingentityexternalDescription'
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
        $this->setIfExists('pkiBillingentityinternalproductID', $data ?? [], null);
        $this->setIfExists('fkiBillingentityinternalID', $data ?? [], null);
        $this->setIfExists('sBillingentityinternalDescriptionX', $data ?? [], null);
        $this->setIfExists('fkiEzmaxproductID', $data ?? [], null);
        $this->setIfExists('sEzmaxproductDescriptionX', $data ?? [], null);
        $this->setIfExists('fkiBillingentityexternalID', $data ?? [], null);
        $this->setIfExists('sBillingentityexternalDescription', $data ?? [], null);
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

        if ($this->container['pkiBillingentityinternalproductID'] === null) {
            $invalidProperties[] = "'pkiBillingentityinternalproductID' can't be null";
        }
        if (($this->container['pkiBillingentityinternalproductID'] > 255)) {
            $invalidProperties[] = "invalid value for 'pkiBillingentityinternalproductID', must be smaller than or equal to 255.";
        }

        if (($this->container['pkiBillingentityinternalproductID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiBillingentityinternalproductID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiBillingentityinternalID'] === null) {
            $invalidProperties[] = "'fkiBillingentityinternalID' can't be null";
        }
        if (($this->container['fkiBillingentityinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiBillingentityinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['sBillingentityinternalDescriptionX'] === null) {
            $invalidProperties[] = "'sBillingentityinternalDescriptionX' can't be null";
        }
        if ($this->container['fkiEzmaxproductID'] === null) {
            $invalidProperties[] = "'fkiEzmaxproductID' can't be null";
        }
        if (($this->container['fkiEzmaxproductID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxproductID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzmaxproductDescriptionX'] === null) {
            $invalidProperties[] = "'sEzmaxproductDescriptionX' can't be null";
        }
        if ($this->container['fkiBillingentityexternalID'] === null) {
            $invalidProperties[] = "'fkiBillingentityexternalID' can't be null";
        }
        if (($this->container['fkiBillingentityexternalID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiBillingentityexternalID', must be bigger than or equal to 1.";
        }

        if ($this->container['sBillingentityexternalDescription'] === null) {
            $invalidProperties[] = "'sBillingentityexternalDescription' can't be null";
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
     * Gets pkiBillingentityinternalproductID
     *
     * @return int
     */
    public function getPkiBillingentityinternalproductID()
    {
        return $this->container['pkiBillingentityinternalproductID'];
    }

    /**
     * Sets pkiBillingentityinternalproductID
     *
     * @param int $pkiBillingentityinternalproductID The unique ID of the Billingentityinternalproduct
     *
     * @return self
     */
    public function setPkiBillingentityinternalproductID($pkiBillingentityinternalproductID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiBillingentityinternalproductID)) {
            //throw new \InvalidArgumentException('non-nullable pkiBillingentityinternalproductID cannot be null');
        //}

//        if (($pkiBillingentityinternalproductID > 255)) {
        if (($pkiBillingentityinternalproductID > 255)) {
            throw new \InvalidArgumentException('invalid value for $pkiBillingentityinternalproductID when calling BillingentityinternalproductResponse., must be smaller than or equal to 255.');
        }
//        if (($pkiBillingentityinternalproductID < 0)) {
        if (($pkiBillingentityinternalproductID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiBillingentityinternalproductID when calling BillingentityinternalproductResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiBillingentityinternalproductID'] = $pkiBillingentityinternalproductID;
        $this->container['pkiBillingentityinternalproductID'] = (is_null($pkiBillingentityinternalproductID) ? null : (int) $pkiBillingentityinternalproductID);

        return $this;
    }

    /**
     * Gets fkiBillingentityinternalID
     *
     * @return int
     */
    public function getFkiBillingentityinternalID()
    {
        return $this->container['fkiBillingentityinternalID'];
    }

    /**
     * Sets fkiBillingentityinternalID
     *
     * @param int $fkiBillingentityinternalID The unique ID of the Billingentityinternal.
     *
     * @return self
     */
    public function setFkiBillingentityinternalID($fkiBillingentityinternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiBillingentityinternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBillingentityinternalID cannot be null');
        //}

//        if (($fkiBillingentityinternalID < 0)) {
        if (($fkiBillingentityinternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiBillingentityinternalID when calling BillingentityinternalproductResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiBillingentityinternalID'] = $fkiBillingentityinternalID;
        $this->container['fkiBillingentityinternalID'] = (is_null($fkiBillingentityinternalID) ? null : (int) $fkiBillingentityinternalID);

        return $this;
    }

    /**
     * Gets sBillingentityinternalDescriptionX
     *
     * @return string
     */
    public function getSBillingentityinternalDescriptionX()
    {
        return $this->container['sBillingentityinternalDescriptionX'];
    }

    /**
     * Sets sBillingentityinternalDescriptionX
     *
     * @param string $sBillingentityinternalDescriptionX The description of the Billingentityinternal in the language of the requester
     *
     * @return self
     */
    public function setSBillingentityinternalDescriptionX($sBillingentityinternalDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBillingentityinternalDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sBillingentityinternalDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBillingentityinternalDescriptionX'] = $sBillingentityinternalDescriptionX;
        $this->container['sBillingentityinternalDescriptionX'] = (is_null($sBillingentityinternalDescriptionX) ? null : (string) $sBillingentityinternalDescriptionX);

        return $this;
    }

    /**
     * Gets fkiEzmaxproductID
     *
     * @return int
     */
    public function getFkiEzmaxproductID()
    {
        return $this->container['fkiEzmaxproductID'];
    }

    /**
     * Sets fkiEzmaxproductID
     *
     * @param int $fkiEzmaxproductID The unique ID of the Ezmaxproduct
     *
     * @return self
     */
    public function setFkiEzmaxproductID($fkiEzmaxproductID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxproductID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxproductID cannot be null');
        //}

//        if (($fkiEzmaxproductID < 1)) {
        if (($fkiEzmaxproductID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxproductID when calling BillingentityinternalproductResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxproductID'] = $fkiEzmaxproductID;
        $this->container['fkiEzmaxproductID'] = (is_null($fkiEzmaxproductID) ? null : (int) $fkiEzmaxproductID);

        return $this;
    }

    /**
     * Gets sEzmaxproductDescriptionX
     *
     * @return string
     */
    public function getSEzmaxproductDescriptionX()
    {
        return $this->container['sEzmaxproductDescriptionX'];
    }

    /**
     * Sets sEzmaxproductDescriptionX
     *
     * @param string $sEzmaxproductDescriptionX The description of the Ezmaxproduct in the language of the requester
     *
     * @return self
     */
    public function setSEzmaxproductDescriptionX($sEzmaxproductDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzmaxproductDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sEzmaxproductDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzmaxproductDescriptionX'] = $sEzmaxproductDescriptionX;
        $this->container['sEzmaxproductDescriptionX'] = (is_null($sEzmaxproductDescriptionX) ? null : (string) $sEzmaxproductDescriptionX);

        return $this;
    }

    /**
     * Gets fkiBillingentityexternalID
     *
     * @return int
     */
    public function getFkiBillingentityexternalID()
    {
        return $this->container['fkiBillingentityexternalID'];
    }

    /**
     * Sets fkiBillingentityexternalID
     *
     * @param int $fkiBillingentityexternalID The unique ID of the Billingentityexternal
     *
     * @return self
     */
    public function setFkiBillingentityexternalID($fkiBillingentityexternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiBillingentityexternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBillingentityexternalID cannot be null');
        //}

//        if (($fkiBillingentityexternalID < 1)) {
        if (($fkiBillingentityexternalID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiBillingentityexternalID when calling BillingentityinternalproductResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiBillingentityexternalID'] = $fkiBillingentityexternalID;
        $this->container['fkiBillingentityexternalID'] = (is_null($fkiBillingentityexternalID) ? null : (int) $fkiBillingentityexternalID);

        return $this;
    }

    /**
     * Gets sBillingentityexternalDescription
     *
     * @return string
     */
    public function getSBillingentityexternalDescription()
    {
        return $this->container['sBillingentityexternalDescription'];
    }

    /**
     * Sets sBillingentityexternalDescription
     *
     * @param string $sBillingentityexternalDescription The description of the Billingentityexternal
     *
     * @return self
     */
    public function setSBillingentityexternalDescription($sBillingentityexternalDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBillingentityexternalDescription)) {
            //throw new \InvalidArgumentException('non-nullable sBillingentityexternalDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBillingentityexternalDescription'] = $sBillingentityexternalDescription;
        $this->container['sBillingentityexternalDescription'] = (is_null($sBillingentityexternalDescription) ? null : (string) $sBillingentityexternalDescription);

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


