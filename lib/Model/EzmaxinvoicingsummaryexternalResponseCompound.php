<?php
/**
 * EzmaxinvoicingsummaryexternalResponseCompound
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
 * EzmaxinvoicingsummaryexternalResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicingsummaryexternal Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicingsummaryexternalResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicingsummaryexternal-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicingsummaryexternalID' => 'int',
        'fkiEzmaxinvoicingID' => 'int',
        'fkiBillingentityexternalID' => 'int',
        'sBillingentityexternalDescription' => 'string',
        'sEzmaxinvoicingsummaryexternalDescription' => 'string',
        'aObjEzmaxinvoicingsummaryexternaldetail' => '\eZmaxAPI\Model\EzmaxinvoicingsummaryexternaldetailResponseCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxinvoicingsummaryexternalID' => null,
        'fkiEzmaxinvoicingID' => null,
        'fkiBillingentityexternalID' => null,
        'sBillingentityexternalDescription' => null,
        'sEzmaxinvoicingsummaryexternalDescription' => null,
        'aObjEzmaxinvoicingsummaryexternaldetail' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicingsummaryexternalID' => false,
		'fkiEzmaxinvoicingID' => false,
		'fkiBillingentityexternalID' => false,
		'sBillingentityexternalDescription' => false,
		'sEzmaxinvoicingsummaryexternalDescription' => false,
		'aObjEzmaxinvoicingsummaryexternaldetail' => false
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
        'pkiEzmaxinvoicingsummaryexternalID' => 'pkiEzmaxinvoicingsummaryexternalID',
        'fkiEzmaxinvoicingID' => 'fkiEzmaxinvoicingID',
        'fkiBillingentityexternalID' => 'fkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'sBillingentityexternalDescription',
        'sEzmaxinvoicingsummaryexternalDescription' => 'sEzmaxinvoicingsummaryexternalDescription',
        'aObjEzmaxinvoicingsummaryexternaldetail' => 'a_objEzmaxinvoicingsummaryexternaldetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicingsummaryexternalID' => 'setPkiEzmaxinvoicingsummaryexternalID',
        'fkiEzmaxinvoicingID' => 'setFkiEzmaxinvoicingID',
        'fkiBillingentityexternalID' => 'setFkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'setSBillingentityexternalDescription',
        'sEzmaxinvoicingsummaryexternalDescription' => 'setSEzmaxinvoicingsummaryexternalDescription',
        'aObjEzmaxinvoicingsummaryexternaldetail' => 'setAObjEzmaxinvoicingsummaryexternaldetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicingsummaryexternalID' => 'getPkiEzmaxinvoicingsummaryexternalID',
        'fkiEzmaxinvoicingID' => 'getFkiEzmaxinvoicingID',
        'fkiBillingentityexternalID' => 'getFkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'getSBillingentityexternalDescription',
        'sEzmaxinvoicingsummaryexternalDescription' => 'getSEzmaxinvoicingsummaryexternalDescription',
        'aObjEzmaxinvoicingsummaryexternaldetail' => 'getAObjEzmaxinvoicingsummaryexternaldetail'
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
        $this->setIfExists('pkiEzmaxinvoicingsummaryexternalID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxinvoicingID', $data ?? [], null);
        $this->setIfExists('fkiBillingentityexternalID', $data ?? [], null);
        $this->setIfExists('sBillingentityexternalDescription', $data ?? [], null);
        $this->setIfExists('sEzmaxinvoicingsummaryexternalDescription', $data ?? [], null);
        $this->setIfExists('aObjEzmaxinvoicingsummaryexternaldetail', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzmaxinvoicingsummaryexternalID']) && ($this->container['pkiEzmaxinvoicingsummaryexternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxinvoicingsummaryexternalID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzmaxinvoicingID']) && ($this->container['fkiEzmaxinvoicingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxinvoicingID', must be bigger than or equal to 0.";
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
        if ($this->container['sEzmaxinvoicingsummaryexternalDescription'] === null) {
            $invalidProperties[] = "'sEzmaxinvoicingsummaryexternalDescription' can't be null";
        }
	//if ((mb_strlen($this->container['sEzmaxinvoicingsummaryexternalDescription']) > 70)) {
        if (((is_null($this->container['sEzmaxinvoicingsummaryexternalDescription'])?0:mb_strlen($this->container['sEzmaxinvoicingsummaryexternalDescription'])) > 70)) {
            $invalidProperties[] = "invalid value for 'sEzmaxinvoicingsummaryexternalDescription', the character length must be smaller than or equal to 70.";
        }

        if ($this->container['aObjEzmaxinvoicingsummaryexternaldetail'] === null) {
            $invalidProperties[] = "'aObjEzmaxinvoicingsummaryexternaldetail' can't be null";
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
     * Gets pkiEzmaxinvoicingsummaryexternalID
     *
     * @return int|null
     */
    public function getPkiEzmaxinvoicingsummaryexternalID()
    {
	//return $this->container['pkiEzmaxinvoicingsummaryexternalID'];
        return $this->container['pkiEzmaxinvoicingsummaryexternalID'];
    }

    /**
     * Sets pkiEzmaxinvoicingsummaryexternalID
     *
     * @param int|null $pkiEzmaxinvoicingsummaryexternalID The unique ID of the Ezmaxinvoicingsummaryexternal
     *
     * @return self
     */
    public function setPkiEzmaxinvoicingsummaryexternalID($pkiEzmaxinvoicingsummaryexternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzmaxinvoicingsummaryexternalID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicingsummaryexternalID cannot be null');
        //}

	//if (($pkiEzmaxinvoicingsummaryexternalID < 0)) {
        if (!is_null($pkiEzmaxinvoicingsummaryexternalID) && ($pkiEzmaxinvoicingsummaryexternalID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzmaxinvoicingsummaryexternalID when calling EzmaxinvoicingsummaryexternalResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzmaxinvoicingsummaryexternalID)?'null':'"'.$pkiEzmaxinvoicingsummaryexternalID.'"').' for pkiEzmaxinvoicingsummaryexternalID when calling EzmaxinvoicingsummaryexternalResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzmaxinvoicingsummaryexternalID'] = $pkiEzmaxinvoicingsummaryexternalID;
        $this->container['pkiEzmaxinvoicingsummaryexternalID'] = (is_null($pkiEzmaxinvoicingsummaryexternalID) ? null : (int) $pkiEzmaxinvoicingsummaryexternalID);

        return $this;
    }

    /**
     * Gets fkiEzmaxinvoicingID
     *
     * @return int|null
     */
    public function getFkiEzmaxinvoicingID()
    {
	//return $this->container['fkiEzmaxinvoicingID'];
        return $this->container['fkiEzmaxinvoicingID'];
    }

    /**
     * Sets fkiEzmaxinvoicingID
     *
     * @param int|null $fkiEzmaxinvoicingID The unique ID of the Ezmaxinvoicing
     *
     * @return self
     */
    public function setFkiEzmaxinvoicingID($fkiEzmaxinvoicingID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxinvoicingID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxinvoicingID cannot be null');
        //}

	//if (($fkiEzmaxinvoicingID < 0)) {
        if (!is_null($fkiEzmaxinvoicingID) && ($fkiEzmaxinvoicingID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzmaxinvoicingID when calling EzmaxinvoicingsummaryexternalResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzmaxinvoicingID)?'null':'"'.$fkiEzmaxinvoicingID.'"').' for fkiEzmaxinvoicingID when calling EzmaxinvoicingsummaryexternalResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxinvoicingID'] = $fkiEzmaxinvoicingID;
        $this->container['fkiEzmaxinvoicingID'] = (is_null($fkiEzmaxinvoicingID) ? null : (int) $fkiEzmaxinvoicingID);

        return $this;
    }

    /**
     * Gets fkiBillingentityexternalID
     *
     * @return int
     */
    public function getFkiBillingentityexternalID()
    {
	//return $this->container['fkiBillingentityexternalID'];
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

	//if (($fkiBillingentityexternalID < 1)) {
        if (($fkiBillingentityexternalID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiBillingentityexternalID when calling EzmaxinvoicingsummaryexternalResponseCompound., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiBillingentityexternalID)?'null':'"'.$fkiBillingentityexternalID.'"').' for fkiBillingentityexternalID when calling EzmaxinvoicingsummaryexternalResponseCompound., must be bigger than or equal to 1.');
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
	//return $this->container['sBillingentityexternalDescription'];
        return is_null($this->container['sBillingentityexternalDescription']) ? null : trim($this->container['sBillingentityexternalDescription']);
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
        $this->container['sBillingentityexternalDescription'] = (is_null($sBillingentityexternalDescription) ? null : trim((string) $sBillingentityexternalDescription));

        return $this;
    }

    /**
     * Gets sEzmaxinvoicingsummaryexternalDescription
     *
     * @return string
     */
    public function getSEzmaxinvoicingsummaryexternalDescription()
    {
	//return $this->container['sEzmaxinvoicingsummaryexternalDescription'];
        return is_null($this->container['sEzmaxinvoicingsummaryexternalDescription']) ? null : trim($this->container['sEzmaxinvoicingsummaryexternalDescription']);
    }

    /**
     * Sets sEzmaxinvoicingsummaryexternalDescription
     *
     * @param string $sEzmaxinvoicingsummaryexternalDescription The description of the Ezmaxinvoicingsummaryexternal
     *
     * @return self
     */
    public function setSEzmaxinvoicingsummaryexternalDescription($sEzmaxinvoicingsummaryexternalDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzmaxinvoicingsummaryexternalDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzmaxinvoicingsummaryexternalDescription cannot be null');
        //}
	//if ((mb_strlen($sEzmaxinvoicingsummaryexternalDescription) > 70)) {
        if ((mb_strlen($sEzmaxinvoicingsummaryexternalDescription) > 70)) {
	    //throw new \InvalidArgumentException('invalid length for $sEzmaxinvoicingsummaryexternalDescription when calling EzmaxinvoicingsummaryexternalResponseCompound., must be smaller than or equal to 70.');
            throw new \InvalidArgumentException('value '.(is_null($sEzmaxinvoicingsummaryexternalDescription)?'null':'"'.$sEzmaxinvoicingsummaryexternalDescription.'"').', invalid length for sEzmaxinvoicingsummaryexternalDescription when calling EzmaxinvoicingsummaryexternalResponseCompound., must be smaller than or equal to 70.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzmaxinvoicingsummaryexternalDescription'] = $sEzmaxinvoicingsummaryexternalDescription;
        $this->container['sEzmaxinvoicingsummaryexternalDescription'] = (is_null($sEzmaxinvoicingsummaryexternalDescription) ? null : trim((string) $sEzmaxinvoicingsummaryexternalDescription));

        return $this;
    }

    /**
     * Gets aObjEzmaxinvoicingsummaryexternaldetail
     *
     * @return \eZmaxAPI\Model\EzmaxinvoicingsummaryexternaldetailResponseCompound[]
     */
    public function getAObjEzmaxinvoicingsummaryexternaldetail()
    {
	//return $this->container['aObjEzmaxinvoicingsummaryexternaldetail'];
        return $this->container['aObjEzmaxinvoicingsummaryexternaldetail'];
    }

    /**
     * Sets aObjEzmaxinvoicingsummaryexternaldetail
     *
     * @param \eZmaxAPI\Model\EzmaxinvoicingsummaryexternaldetailResponseCompound[] $aObjEzmaxinvoicingsummaryexternaldetail aObjEzmaxinvoicingsummaryexternaldetail
     *
     * @return self
     */
    public function setAObjEzmaxinvoicingsummaryexternaldetail($aObjEzmaxinvoicingsummaryexternaldetail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEzmaxinvoicingsummaryexternaldetail)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzmaxinvoicingsummaryexternaldetail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEzmaxinvoicingsummaryexternaldetail'] = $aObjEzmaxinvoicingsummaryexternaldetail;
        $this->container['aObjEzmaxinvoicingsummaryexternaldetail'] = $aObjEzmaxinvoicingsummaryexternaldetail;

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


