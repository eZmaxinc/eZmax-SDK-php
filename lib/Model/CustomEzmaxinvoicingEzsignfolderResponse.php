<?php
/**
 * CustomEzmaxinvoicingEzsignfolderResponse
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
 * CustomEzmaxinvoicingEzsignfolderResponse Class Doc Comment
 *
 * @category Class
 * @description An EzmaxinvoicingEzsignfolder object containing information about the Ezmaxinvoicing for an Ezsignfolder
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomEzmaxinvoicingEzsignfolderResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-EzmaxinvoicingEzsignfolder-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignfolderID' => 'int',
        'fkiBillingentityinternalID' => 'int',
        'sEzsignfolderDescription' => 'string',
        'bEzsigntsarequirementBillable' => 'bool',
        'bEzsignfolderMfaused' => 'bool',
        'bEzsignfolderPaymentused' => 'bool',
        'bEzsignfolderAllowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiEzsignfolderID' => null,
        'fkiBillingentityinternalID' => null,
        'sEzsignfolderDescription' => null,
        'bEzsigntsarequirementBillable' => null,
        'bEzsignfolderMfaused' => null,
        'bEzsignfolderPaymentused' => null,
        'bEzsignfolderAllowed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiEzsignfolderID' => false,
		'fkiBillingentityinternalID' => false,
		'sEzsignfolderDescription' => false,
		'bEzsigntsarequirementBillable' => false,
		'bEzsignfolderMfaused' => false,
		'bEzsignfolderPaymentused' => false,
		'bEzsignfolderAllowed' => false
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
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'fkiBillingentityinternalID' => 'fkiBillingentityinternalID',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'bEzsigntsarequirementBillable' => 'bEzsigntsarequirementBillable',
        'bEzsignfolderMfaused' => 'bEzsignfolderMfaused',
        'bEzsignfolderPaymentused' => 'bEzsignfolderPaymentused',
        'bEzsignfolderAllowed' => 'bEzsignfolderAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'fkiBillingentityinternalID' => 'setFkiBillingentityinternalID',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'bEzsigntsarequirementBillable' => 'setBEzsigntsarequirementBillable',
        'bEzsignfolderMfaused' => 'setBEzsignfolderMfaused',
        'bEzsignfolderPaymentused' => 'setBEzsignfolderPaymentused',
        'bEzsignfolderAllowed' => 'setBEzsignfolderAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'fkiBillingentityinternalID' => 'getFkiBillingentityinternalID',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'bEzsigntsarequirementBillable' => 'getBEzsigntsarequirementBillable',
        'bEzsignfolderMfaused' => 'getBEzsignfolderMfaused',
        'bEzsignfolderPaymentused' => 'getBEzsignfolderPaymentused',
        'bEzsignfolderAllowed' => 'getBEzsignfolderAllowed'
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
        $this->setIfExists('fkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('fkiBillingentityinternalID', $data ?? [], null);
        $this->setIfExists('sEzsignfolderDescription', $data ?? [], null);
        $this->setIfExists('bEzsigntsarequirementBillable', $data ?? [], null);
        $this->setIfExists('bEzsignfolderMfaused', $data ?? [], null);
        $this->setIfExists('bEzsignfolderPaymentused', $data ?? [], null);
        $this->setIfExists('bEzsignfolderAllowed', $data ?? [], null);
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

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if (($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiBillingentityinternalID']) && ($this->container['fkiBillingentityinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiBillingentityinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
        if ($this->container['bEzsigntsarequirementBillable'] === null) {
            $invalidProperties[] = "'bEzsigntsarequirementBillable' can't be null";
        }
        if ($this->container['bEzsignfolderMfaused'] === null) {
            $invalidProperties[] = "'bEzsignfolderMfaused' can't be null";
        }
        if ($this->container['bEzsignfolderPaymentused'] === null) {
            $invalidProperties[] = "'bEzsignfolderPaymentused' can't be null";
        }
        if ($this->container['bEzsignfolderAllowed'] === null) {
            $invalidProperties[] = "'bEzsignfolderAllowed' can't be null";
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
     * Gets fkiEzsignfolderID
     *
     * @return int
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int $fkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfolderID cannot be null');
        //}

//        if (($fkiEzsignfolderID < 0)) {
        if (($fkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling CustomEzmaxinvoicingEzsignfolderResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;
        $this->container['fkiEzsignfolderID'] = (is_null($fkiEzsignfolderID) ? null : (int) $fkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets fkiBillingentityinternalID
     *
     * @return int|null
     */
    public function getFkiBillingentityinternalID()
    {
        return $this->container['fkiBillingentityinternalID'];
    }

    /**
     * Sets fkiBillingentityinternalID
     *
     * @param int|null $fkiBillingentityinternalID The unique ID of the Billingentityinternal.
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
        if (!is_null($fkiBillingentityinternalID) && ($fkiBillingentityinternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiBillingentityinternalID when calling CustomEzmaxinvoicingEzsignfolderResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiBillingentityinternalID'] = $fkiBillingentityinternalID;
        $this->container['fkiBillingentityinternalID'] = (is_null($fkiBillingentityinternalID) ? null : (int) $fkiBillingentityinternalID);

        return $this;
    }

    /**
     * Gets sEzsignfolderDescription
     *
     * @return string
     */
    public function getSEzsignfolderDescription()
    {
        return is_null($this->container['sEzsignfolderDescription']) ? null : trim($this->container['sEzsignfolderDescription']);
    }

    /**
     * Sets sEzsignfolderDescription
     *
     * @param string $sEzsignfolderDescription The description of the Ezsignfolder
     *
     * @return self
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfolderDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfolderDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfolderDescription'] = $sEzsignfolderDescription;
        $this->container['sEzsignfolderDescription'] = (is_null($sEzsignfolderDescription) ? null : trim((string) $sEzsignfolderDescription));

        return $this;
    }

    /**
     * Gets bEzsigntsarequirementBillable
     *
     * @return bool
     */
    public function getBEzsigntsarequirementBillable()
    {
        return $this->container['bEzsigntsarequirementBillable'];
    }

    /**
     * Sets bEzsigntsarequirementBillable
     *
     * @param bool $bEzsigntsarequirementBillable Whether the TSA requirement is billable or not
     *
     * @return self
     */
    public function setBEzsigntsarequirementBillable($bEzsigntsarequirementBillable)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsigntsarequirementBillable)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntsarequirementBillable cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsigntsarequirementBillable'] = $bEzsigntsarequirementBillable;
        $this->container['bEzsigntsarequirementBillable'] = (is_null($bEzsigntsarequirementBillable) ? null : (bool) $bEzsigntsarequirementBillable);

        return $this;
    }

    /**
     * Gets bEzsignfolderMfaused
     *
     * @return bool
     */
    public function getBEzsignfolderMfaused()
    {
        return $this->container['bEzsignfolderMfaused'];
    }

    /**
     * Sets bEzsignfolderMfaused
     *
     * @param bool $bEzsignfolderMfaused Whether the MFA was used or not for the Ezsignfolder
     *
     * @return self
     */
    public function setBEzsignfolderMfaused($bEzsignfolderMfaused)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignfolderMfaused)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfolderMfaused cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignfolderMfaused'] = $bEzsignfolderMfaused;
        $this->container['bEzsignfolderMfaused'] = (is_null($bEzsignfolderMfaused) ? null : (bool) $bEzsignfolderMfaused);

        return $this;
    }

    /**
     * Gets bEzsignfolderPaymentused
     *
     * @return bool
     */
    public function getBEzsignfolderPaymentused()
    {
        return $this->container['bEzsignfolderPaymentused'];
    }

    /**
     * Sets bEzsignfolderPaymentused
     *
     * @param bool $bEzsignfolderPaymentused Whether there was a signature is of type payment
     *
     * @return self
     */
    public function setBEzsignfolderPaymentused($bEzsignfolderPaymentused)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignfolderPaymentused)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfolderPaymentused cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignfolderPaymentused'] = $bEzsignfolderPaymentused;
        $this->container['bEzsignfolderPaymentused'] = (is_null($bEzsignfolderPaymentused) ? null : (bool) $bEzsignfolderPaymentused);

        return $this;
    }

    /**
     * Gets bEzsignfolderAllowed
     *
     * @return bool
     */
    public function getBEzsignfolderAllowed()
    {
        return $this->container['bEzsignfolderAllowed'];
    }

    /**
     * Sets bEzsignfolderAllowed
     *
     * @param bool $bEzsignfolderAllowed Whether you have access to the Ezsignfolder or not
     *
     * @return self
     */
    public function setBEzsignfolderAllowed($bEzsignfolderAllowed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignfolderAllowed)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfolderAllowed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignfolderAllowed'] = $bEzsignfolderAllowed;
        $this->container['bEzsignfolderAllowed'] = (is_null($bEzsignfolderAllowed) ? null : (bool) $bEzsignfolderAllowed);

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


