<?php
/**
 * UserlogintypeResponse
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
 * UserlogintypeResponse Class Doc Comment
 *
 * @category Class
 * @description An Userlogintype Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserlogintypeResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'userlogintype-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiUserlogintypeID' => 'int',
        'objUserlogintypeDescription' => '\eZmaxAPI\Model\MultilingualUserlogintypeDescription',
        'sUserlogintypeDescriptionX' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiUserlogintypeID' => null,
        'objUserlogintypeDescription' => null,
        'sUserlogintypeDescriptionX' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiUserlogintypeID' => false,
		'objUserlogintypeDescription' => false,
		'sUserlogintypeDescriptionX' => false
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
        'pkiUserlogintypeID' => 'pkiUserlogintypeID',
        'objUserlogintypeDescription' => 'objUserlogintypeDescription',
        'sUserlogintypeDescriptionX' => 'sUserlogintypeDescriptionX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiUserlogintypeID' => 'setPkiUserlogintypeID',
        'objUserlogintypeDescription' => 'setObjUserlogintypeDescription',
        'sUserlogintypeDescriptionX' => 'setSUserlogintypeDescriptionX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiUserlogintypeID' => 'getPkiUserlogintypeID',
        'objUserlogintypeDescription' => 'getObjUserlogintypeDescription',
        'sUserlogintypeDescriptionX' => 'getSUserlogintypeDescriptionX'
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
        $this->setIfExists('pkiUserlogintypeID', $data ?? [], null);
        $this->setIfExists('objUserlogintypeDescription', $data ?? [], null);
        $this->setIfExists('sUserlogintypeDescriptionX', $data ?? [], null);
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

        if ($this->container['pkiUserlogintypeID'] === null) {
            $invalidProperties[] = "'pkiUserlogintypeID' can't be null";
        }
        if (($this->container['pkiUserlogintypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiUserlogintypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['objUserlogintypeDescription'] === null) {
            $invalidProperties[] = "'objUserlogintypeDescription' can't be null";
        }
        if ($this->container['sUserlogintypeDescriptionX'] === null) {
            $invalidProperties[] = "'sUserlogintypeDescriptionX' can't be null";
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
     * Gets pkiUserlogintypeID
     *
     * @return int
     */
    public function getPkiUserlogintypeID()
    {
	//return $this->container['pkiUserlogintypeID'];
        return $this->container['pkiUserlogintypeID'];
    }

    /**
     * Sets pkiUserlogintypeID
     *
     * @param int $pkiUserlogintypeID The unique ID of the Userlogintype  Valid values:  |Value|Description|Detail| |-|-|-| |1|**Email Only**|The Ezsignsigner will receive a secure link by email| |2|**Email and phone or SMS**|The Ezsignsigner will receive a secure link by email and will need to authenticate using SMS or Phone call. **Additional fee applies**| |3|**Email and secret question**|The Ezsignsigner will receive a secure link by email and will need to authenticate using a predefined question and answer| |4|**In person only**|The Ezsignsigner will only be able to sign \"In-Person\" and there won't be any authentication. No email will be sent for invitation to sign. Make sure you evaluate the risk of signature denial and at minimum, we recommend you use a handwritten signature type| |5|**In person with phone or SMS**|The Ezsignsigner will only be able to sign \"In-Person\" and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**| |6|**Embedded**|The Ezsignsigner will only be able to sign in the embedded solution. No email will be sent for invitation to sign. **Additional fee applies**|   |7|**Embedded with phone or SMS**|The Ezsignsigner will only be able to sign in the embedded solution and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**|   |8|**No validation**|The Ezsignsigner will not receive an email and won't have to validate his connection using 2 factor. **Additional fee applies**|      |9|**Sms only**|The Ezsignsigner will not receive an email but will will need to authenticate using SMS. **Additional fee applies**|
     *
     * @return self
     */
    public function setPkiUserlogintypeID($pkiUserlogintypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiUserlogintypeID)) {
            //throw new \InvalidArgumentException('non-nullable pkiUserlogintypeID cannot be null');
        //}

	//if (($pkiUserlogintypeID < 0)) {
        if (($pkiUserlogintypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiUserlogintypeID when calling UserlogintypeResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiUserlogintypeID)?'null':'"'.$pkiUserlogintypeID.'"').' for pkiUserlogintypeID when calling UserlogintypeResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiUserlogintypeID'] = $pkiUserlogintypeID;
        $this->container['pkiUserlogintypeID'] = (is_null($pkiUserlogintypeID) ? null : (int) $pkiUserlogintypeID);

        return $this;
    }

    /**
     * Gets objUserlogintypeDescription
     *
     * @return \eZmaxAPI\Model\MultilingualUserlogintypeDescription
     */
    public function getObjUserlogintypeDescription()
    {
	//return $this->container['objUserlogintypeDescription'];
        return $this->container['objUserlogintypeDescription'];
    }

    /**
     * Sets objUserlogintypeDescription
     *
     * @param \eZmaxAPI\Model\MultilingualUserlogintypeDescription $objUserlogintypeDescription objUserlogintypeDescription
     *
     * @return self
     */
    public function setObjUserlogintypeDescription($objUserlogintypeDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objUserlogintypeDescription)) {
            //throw new \InvalidArgumentException('non-nullable objUserlogintypeDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objUserlogintypeDescription'] = $objUserlogintypeDescription;
        $this->container['objUserlogintypeDescription'] = $objUserlogintypeDescription;

        return $this;
    }

    /**
     * Gets sUserlogintypeDescriptionX
     *
     * @return string
     */
    public function getSUserlogintypeDescriptionX()
    {
	//return $this->container['sUserlogintypeDescriptionX'];
        return is_null($this->container['sUserlogintypeDescriptionX']) ? null : trim($this->container['sUserlogintypeDescriptionX']);
    }

    /**
     * Sets sUserlogintypeDescriptionX
     *
     * @param string $sUserlogintypeDescriptionX The description of the Userlogintype in the language of the requester
     *
     * @return self
     */
    public function setSUserlogintypeDescriptionX($sUserlogintypeDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserlogintypeDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sUserlogintypeDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserlogintypeDescriptionX'] = $sUserlogintypeDescriptionX;
        $this->container['sUserlogintypeDescriptionX'] = (is_null($sUserlogintypeDescriptionX) ? null : trim((string) $sUserlogintypeDescriptionX));

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


