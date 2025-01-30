<?php
/**
 * EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1ResponseMPayload
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
 * Generator version: 7.11.0
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
 * EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for POST /1/object/ezsigntemplatepublic/getEzsigntemplatepublicDetails
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatepublic-getEzsigntemplatepublicDetails-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objBranding' => '\eZmaxAPI\Model\CustomBrandingResponse',
        'fkiUserlogintypeID' => 'int',
        'aSEzsigntemplatesignerDescription' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'objBranding' => null,
        'fkiUserlogintypeID' => null,
        'aSEzsigntemplatesignerDescription' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'objBranding' => false,
		'fkiUserlogintypeID' => false,
		'aSEzsigntemplatesignerDescription' => false
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
        'objBranding' => 'objBranding',
        'fkiUserlogintypeID' => 'fkiUserlogintypeID',
        'aSEzsigntemplatesignerDescription' => 'a_sEzsigntemplatesignerDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objBranding' => 'setObjBranding',
        'fkiUserlogintypeID' => 'setFkiUserlogintypeID',
        'aSEzsigntemplatesignerDescription' => 'setASEzsigntemplatesignerDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objBranding' => 'getObjBranding',
        'fkiUserlogintypeID' => 'getFkiUserlogintypeID',
        'aSEzsigntemplatesignerDescription' => 'getASEzsigntemplatesignerDescription'
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
        $this->setIfExists('objBranding', $data ?? [], null);
        $this->setIfExists('fkiUserlogintypeID', $data ?? [], null);
        $this->setIfExists('aSEzsigntemplatesignerDescription', $data ?? [], null);
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

        if ($this->container['fkiUserlogintypeID'] === null) {
            $invalidProperties[] = "'fkiUserlogintypeID' can't be null";
        }
        if (($this->container['fkiUserlogintypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserlogintypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['aSEzsigntemplatesignerDescription'] === null) {
            $invalidProperties[] = "'aSEzsigntemplatesignerDescription' can't be null";
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
     * Gets objBranding
     *
     * @return \eZmaxAPI\Model\CustomBrandingResponse|null
     */
    public function getObjBranding()
    {
	//return $this->container['objBranding'];
        return $this->container['objBranding'];
    }

    /**
     * Sets objBranding
     *
     * @param \eZmaxAPI\Model\CustomBrandingResponse|null $objBranding objBranding
     *
     * @return self
     */
    public function setObjBranding($objBranding)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objBranding)) {
            //throw new \InvalidArgumentException('non-nullable objBranding cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objBranding'] = $objBranding;
        $this->container['objBranding'] = $objBranding;

        return $this;
    }

    /**
     * Gets fkiUserlogintypeID
     *
     * @return int
     */
    public function getFkiUserlogintypeID()
    {
	//return $this->container['fkiUserlogintypeID'];
        return $this->container['fkiUserlogintypeID'];
    }

    /**
     * Sets fkiUserlogintypeID
     *
     * @param int $fkiUserlogintypeID The unique ID of the Userlogintype  Valid values:  |Value|Description|Detail| |-|-|-| |1|**Email Only**|The Ezsignsigner will receive a secure link by email| |2|**Email and phone or SMS**|The Ezsignsigner will receive a secure link by email and will need to authenticate using SMS or Phone call. **Additional fee applies**| |3|**Email and secret question**|The Ezsignsigner will receive a secure link by email and will need to authenticate using a predefined question and answer| |4|**In person only**|The Ezsignsigner will only be able to sign \"In-Person\" and there won't be any authentication. No email will be sent for invitation to sign. Make sure you evaluate the risk of signature denial and at minimum, we recommend you use a handwritten signature type| |5|**In person with phone or SMS**|The Ezsignsigner will only be able to sign \"In-Person\" and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**| |6|**Embedded**|The Ezsignsigner will only be able to sign in the embedded solution. No email will be sent for invitation to sign. **Additional fee applies**|   |7|**Embedded with phone or SMS**|The Ezsignsigner will only be able to sign in the embedded solution and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**|   |8|**No validation**|The Ezsignsigner will not receive an email and won't have to validate his connection using 2 factor. **Additional fee applies**|      |9|**Sms only**|The Ezsignsigner will not receive an email but will will need to authenticate using SMS. **Additional fee applies**|
     *
     * @return self
     */
    public function setFkiUserlogintypeID($fkiUserlogintypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserlogintypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserlogintypeID cannot be null');
        //}

	//if (($fkiUserlogintypeID < 0)) {
        if (($fkiUserlogintypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiUserlogintypeID when calling EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1ResponseMPayload., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserlogintypeID)?'null':'"'.$fkiUserlogintypeID.'"').' for fkiUserlogintypeID when calling EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1ResponseMPayload., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserlogintypeID'] = $fkiUserlogintypeID;
        $this->container['fkiUserlogintypeID'] = (is_null($fkiUserlogintypeID) ? null : (int) $fkiUserlogintypeID);

        return $this;
    }

    /**
     * Gets aSEzsigntemplatesignerDescription
     *
     * @return string[]
     */
    public function getASEzsigntemplatesignerDescription()
    {
	//return $this->container['aSEzsigntemplatesignerDescription'];
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


