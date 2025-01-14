<?php
/**
 * EzsigntemplatepublicCreateEzsignfolderV1Request
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
 * EzsigntemplatepublicCreateEzsignfolderV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/ezsigntemplatepublic/createEzsignfolder
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatepublicCreateEzsignfolderV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatepublic-createEzsignfolder-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pksEzmaxcustomerCode' => 'string',
        'sEzsigntemplatepublicReferenceid' => 'string',
        'aSEzsigntemplatesignerDescription' => 'string[]',
        'aObjEzsignsigner' => '\eZmaxAPI\Model\EzsignsignerRequestCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pksEzmaxcustomerCode' => null,
        'sEzsigntemplatepublicReferenceid' => null,
        'aSEzsigntemplatesignerDescription' => null,
        'aObjEzsignsigner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pksEzmaxcustomerCode' => false,
		'sEzsigntemplatepublicReferenceid' => false,
		'aSEzsigntemplatesignerDescription' => false,
		'aObjEzsignsigner' => false
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
        'pksEzmaxcustomerCode' => 'pksEzmaxcustomerCode',
        'sEzsigntemplatepublicReferenceid' => 'sEzsigntemplatepublicReferenceid',
        'aSEzsigntemplatesignerDescription' => 'a_sEzsigntemplatesignerDescription',
        'aObjEzsignsigner' => 'a_objEzsignsigner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pksEzmaxcustomerCode' => 'setPksEzmaxcustomerCode',
        'sEzsigntemplatepublicReferenceid' => 'setSEzsigntemplatepublicReferenceid',
        'aSEzsigntemplatesignerDescription' => 'setASEzsigntemplatesignerDescription',
        'aObjEzsignsigner' => 'setAObjEzsignsigner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pksEzmaxcustomerCode' => 'getPksEzmaxcustomerCode',
        'sEzsigntemplatepublicReferenceid' => 'getSEzsigntemplatepublicReferenceid',
        'aSEzsigntemplatesignerDescription' => 'getASEzsigntemplatesignerDescription',
        'aObjEzsignsigner' => 'getAObjEzsignsigner'
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
        $this->setIfExists('pksEzmaxcustomerCode', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatepublicReferenceid', $data ?? [], null);
        $this->setIfExists('aSEzsigntemplatesignerDescription', $data ?? [], null);
        $this->setIfExists('aObjEzsignsigner', $data ?? [], null);
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

        if ($this->container['pksEzmaxcustomerCode'] === null) {
            $invalidProperties[] = "'pksEzmaxcustomerCode' can't be null";
        }
        if (((is_null($this->container['pksEzmaxcustomerCode'])?0:mb_strlen($this->container['pksEzmaxcustomerCode'])) > 6)) {
            $invalidProperties[] = "invalid value for 'pksEzmaxcustomerCode', the character length must be smaller than or equal to 6.";
        }

        if (((is_null($this->container['pksEzmaxcustomerCode'])?0:mb_strlen($this->container['pksEzmaxcustomerCode'])) < 2)) {
            $invalidProperties[] = "invalid value for 'pksEzmaxcustomerCode', the character length must be bigger than or equal to 2.";
        }

//        if (!preg_match("/^[a-z\\d]{2,6}$/", $this->container['pksEzmaxcustomerCode'])) {
        if (!is_null($this->container['pksEzmaxcustomerCode']) && !preg_match("/(*UTF8)^[a-z\\d]{2,6}$/", $this->container['pksEzmaxcustomerCode'])) {
            $invalidProperties[] = "invalid value for 'pksEzmaxcustomerCode', must be conform to the pattern /^[a-z\\d]{2,6}$/.";
        }

        if ($this->container['sEzsigntemplatepublicReferenceid'] === null) {
            $invalidProperties[] = "'sEzsigntemplatepublicReferenceid' can't be null";
        }
//        if (!preg_match("/^.{0,36}$/", $this->container['sEzsigntemplatepublicReferenceid'])) {
        if (!is_null($this->container['sEzsigntemplatepublicReferenceid']) && !preg_match("/(*UTF8)^.{0,36}$/", $this->container['sEzsigntemplatepublicReferenceid'])) {
            $invalidProperties[] = "invalid value for 'sEzsigntemplatepublicReferenceid', must be conform to the pattern /^.{0,36}$/.";
        }

        if ($this->container['aSEzsigntemplatesignerDescription'] === null) {
            $invalidProperties[] = "'aSEzsigntemplatesignerDescription' can't be null";
        }
        if ($this->container['aObjEzsignsigner'] === null) {
            $invalidProperties[] = "'aObjEzsignsigner' can't be null";
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
     * Gets pksEzmaxcustomerCode
     *
     * @return string
     */
    public function getPksEzmaxcustomerCode()
    {
        return is_null($this->container['pksEzmaxcustomerCode']) ? null : trim($this->container['pksEzmaxcustomerCode']);
    }

    /**
     * Sets pksEzmaxcustomerCode
     *
     * @param string $pksEzmaxcustomerCode The Ezmaxcustomer code
     *
     * @return self
     */
    public function setPksEzmaxcustomerCode($pksEzmaxcustomerCode)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pksEzmaxcustomerCode)) {
            //throw new \InvalidArgumentException('non-nullable pksEzmaxcustomerCode cannot be null');
        //}
//        if ((mb_strlen($pksEzmaxcustomerCode) > 6)) {
        if ((mb_strlen($pksEzmaxcustomerCode) > 6)) {
            throw new \InvalidArgumentException('value '.(is_null($pksEzmaxcustomerCode)?'null':'"'.$pksEzmaxcustomerCode.'"').', invalid length for pksEzmaxcustomerCode when calling EzsigntemplatepublicCreateEzsignfolderV1Request., must be smaller than or equal to 6.');
        }
//        if ((mb_strlen($pksEzmaxcustomerCode) < 2)) {
        if ((mb_strlen($pksEzmaxcustomerCode) < 2)) {
            throw new \InvalidArgumentException('value '.(is_null($pksEzmaxcustomerCode)?'null':'"'.$pksEzmaxcustomerCode.'"').', invalid length for pksEzmaxcustomerCode when calling EzsigntemplatepublicCreateEzsignfolderV1Request., must be bigger than or equal to 2.');
        }
//        if ((!preg_match("/^[a-z\\d]{2,6}$/", ObjectSerializer::toString($pksEzmaxcustomerCode)))) {
        if (!is_null($pksEzmaxcustomerCode) && (!preg_match("/(*UTF8)^[a-z\\d]{2,6}$/", ObjectSerializer::toString($pksEzmaxcustomerCode)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($pksEzmaxcustomerCode)?'null':'"'.$pksEzmaxcustomerCode.'"')." for pksEzmaxcustomerCode when calling EzsigntemplatepublicCreateEzsignfolderV1Request., must conform to the pattern /^[a-z\\d]{2,6}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pksEzmaxcustomerCode'] = $pksEzmaxcustomerCode;
        $this->container['pksEzmaxcustomerCode'] = (is_null($pksEzmaxcustomerCode) ? null : trim((string) $pksEzmaxcustomerCode));

        return $this;
    }

    /**
     * Gets sEzsigntemplatepublicReferenceid
     *
     * @return string
     */
    public function getSEzsigntemplatepublicReferenceid()
    {
        return is_null($this->container['sEzsigntemplatepublicReferenceid']) ? null : trim($this->container['sEzsigntemplatepublicReferenceid']);
    }

    /**
     * Sets sEzsigntemplatepublicReferenceid
     *
     * @param string $sEzsigntemplatepublicReferenceid The referenceid of the Ezsigntemplatepublic
     *
     * @return self
     */
    public function setSEzsigntemplatepublicReferenceid($sEzsigntemplatepublicReferenceid)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplatepublicReferenceid)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatepublicReferenceid cannot be null');
        //}

//        if ((!preg_match("/^.{0,36}$/", ObjectSerializer::toString($sEzsigntemplatepublicReferenceid)))) {
        if (!is_null($sEzsigntemplatepublicReferenceid) && (!preg_match("/(*UTF8)^.{0,36}$/", ObjectSerializer::toString($sEzsigntemplatepublicReferenceid)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($sEzsigntemplatepublicReferenceid)?'null':'"'.$sEzsigntemplatepublicReferenceid.'"')." for sEzsigntemplatepublicReferenceid when calling EzsigntemplatepublicCreateEzsignfolderV1Request., must conform to the pattern /^.{0,36}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplatepublicReferenceid'] = $sEzsigntemplatepublicReferenceid;
        $this->container['sEzsigntemplatepublicReferenceid'] = (is_null($sEzsigntemplatepublicReferenceid) ? null : trim((string) $sEzsigntemplatepublicReferenceid));

        return $this;
    }

    /**
     * Gets aSEzsigntemplatesignerDescription
     *
     * @return string[]
     */
    public function getASEzsigntemplatesignerDescription()
    {
        return $this->container['aSEzsigntemplatesignerDescription'];
    }

    /**
     * Sets aSEzsigntemplatesignerDescription
     *
     * @param string[] $aSEzsigntemplatesignerDescription aSEzsigntemplatesignerDescription
     *
     * @return self
     */
    public function setASEzsigntemplatesignerDescription($aSEzsigntemplatesignerDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aSEzsigntemplatesignerDescription)) {
            //throw new \InvalidArgumentException('non-nullable aSEzsigntemplatesignerDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aSEzsigntemplatesignerDescription'] = $aSEzsigntemplatesignerDescription;
        $this->container['aSEzsigntemplatesignerDescription'] = (is_null($aSEzsigntemplatesignerDescription) ? null : $aSEzsigntemplatesignerDescription);

        return $this;
    }

    /**
     * Gets aObjEzsignsigner
     *
     * @return \eZmaxAPI\Model\EzsignsignerRequestCompound[]
     */
    public function getAObjEzsignsigner()
    {
        return $this->container['aObjEzsignsigner'];
    }

    /**
     * Sets aObjEzsignsigner
     *
     * @param \eZmaxAPI\Model\EzsignsignerRequestCompound[] $aObjEzsignsigner 
     *
     * @return self
     */
    public function setAObjEzsignsigner($aObjEzsignsigner)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEzsignsigner)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignsigner cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEzsignsigner'] = $aObjEzsignsigner;
        $this->container['aObjEzsignsigner'] = $aObjEzsignsigner;

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


