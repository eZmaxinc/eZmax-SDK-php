<?php
/**
 * DiscussionResponse
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
 * DiscussionResponse Class Doc Comment
 *
 * @category Class
 * @description A Discussion Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DiscussionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'discussion-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiDiscussionID' => 'int',
        'sDiscussionDescription' => 'string',
        'bDiscussionClosed' => 'bool',
        'dtDiscussionLastread' => 'string',
        'iDiscussionmessageCount' => 'int',
        'iDiscussionmessageCountunread' => 'int',
        'objDiscussionconfiguration' => '\eZmaxAPI\Model\CustomDiscussionconfigurationResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiDiscussionID' => null,
        'sDiscussionDescription' => null,
        'bDiscussionClosed' => null,
        'dtDiscussionLastread' => null,
        'iDiscussionmessageCount' => null,
        'iDiscussionmessageCountunread' => null,
        'objDiscussionconfiguration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiDiscussionID' => false,
		'sDiscussionDescription' => false,
		'bDiscussionClosed' => false,
		'dtDiscussionLastread' => false,
		'iDiscussionmessageCount' => false,
		'iDiscussionmessageCountunread' => false,
		'objDiscussionconfiguration' => false
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
        'pkiDiscussionID' => 'pkiDiscussionID',
        'sDiscussionDescription' => 'sDiscussionDescription',
        'bDiscussionClosed' => 'bDiscussionClosed',
        'dtDiscussionLastread' => 'dtDiscussionLastread',
        'iDiscussionmessageCount' => 'iDiscussionmessageCount',
        'iDiscussionmessageCountunread' => 'iDiscussionmessageCountunread',
        'objDiscussionconfiguration' => 'objDiscussionconfiguration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiDiscussionID' => 'setPkiDiscussionID',
        'sDiscussionDescription' => 'setSDiscussionDescription',
        'bDiscussionClosed' => 'setBDiscussionClosed',
        'dtDiscussionLastread' => 'setDtDiscussionLastread',
        'iDiscussionmessageCount' => 'setIDiscussionmessageCount',
        'iDiscussionmessageCountunread' => 'setIDiscussionmessageCountunread',
        'objDiscussionconfiguration' => 'setObjDiscussionconfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiDiscussionID' => 'getPkiDiscussionID',
        'sDiscussionDescription' => 'getSDiscussionDescription',
        'bDiscussionClosed' => 'getBDiscussionClosed',
        'dtDiscussionLastread' => 'getDtDiscussionLastread',
        'iDiscussionmessageCount' => 'getIDiscussionmessageCount',
        'iDiscussionmessageCountunread' => 'getIDiscussionmessageCountunread',
        'objDiscussionconfiguration' => 'getObjDiscussionconfiguration'
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
        $this->setIfExists('pkiDiscussionID', $data ?? [], null);
        $this->setIfExists('sDiscussionDescription', $data ?? [], null);
        $this->setIfExists('bDiscussionClosed', $data ?? [], null);
        $this->setIfExists('dtDiscussionLastread', $data ?? [], null);
        $this->setIfExists('iDiscussionmessageCount', $data ?? [], null);
        $this->setIfExists('iDiscussionmessageCountunread', $data ?? [], null);
        $this->setIfExists('objDiscussionconfiguration', $data ?? [], null);
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

        if ($this->container['pkiDiscussionID'] === null) {
            $invalidProperties[] = "'pkiDiscussionID' can't be null";
        }
        if (($this->container['pkiDiscussionID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiDiscussionID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['pkiDiscussionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiDiscussionID', must be bigger than or equal to 0.";
        }

        if ($this->container['sDiscussionDescription'] === null) {
            $invalidProperties[] = "'sDiscussionDescription' can't be null";
        }
//        if (!preg_match("/^.{0,75}$/", $this->container['sDiscussionDescription'])) {
        if (!is_null($this->container['sDiscussionDescription']) && !preg_match("/(*UTF8)^.{0,75}$/", $this->container['sDiscussionDescription'])) {
            $invalidProperties[] = "invalid value for 'sDiscussionDescription', must be conform to the pattern /^.{0,75}$/.";
        }

        if ($this->container['bDiscussionClosed'] === null) {
            $invalidProperties[] = "'bDiscussionClosed' can't be null";
        }
        if ($this->container['iDiscussionmessageCount'] === null) {
            $invalidProperties[] = "'iDiscussionmessageCount' can't be null";
        }
        if ($this->container['iDiscussionmessageCountunread'] === null) {
            $invalidProperties[] = "'iDiscussionmessageCountunread' can't be null";
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
     * Gets pkiDiscussionID
     *
     * @return int
     */
    public function getPkiDiscussionID()
    {
        return $this->container['pkiDiscussionID'];
    }

    /**
     * Sets pkiDiscussionID
     *
     * @param int $pkiDiscussionID The unique ID of the Discussion
     *
     * @return self
     */
    public function setPkiDiscussionID($pkiDiscussionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiDiscussionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiDiscussionID cannot be null');
        //}

//        if (($pkiDiscussionID > 16777215)) {
        if (($pkiDiscussionID > 16777215)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiDiscussionID)?'null':'"'.$pkiDiscussionID.'"').' for pkiDiscussionID when calling DiscussionResponse., must be smaller than or equal to 16777215.');
        }
//        if (($pkiDiscussionID < 0)) {
        if (($pkiDiscussionID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiDiscussionID)?'null':'"'.$pkiDiscussionID.'"').' for pkiDiscussionID when calling DiscussionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiDiscussionID'] = $pkiDiscussionID;
        $this->container['pkiDiscussionID'] = (is_null($pkiDiscussionID) ? null : (int) $pkiDiscussionID);

        return $this;
    }

    /**
     * Gets sDiscussionDescription
     *
     * @return string
     */
    public function getSDiscussionDescription()
    {
        return is_null($this->container['sDiscussionDescription']) ? null : trim($this->container['sDiscussionDescription']);
    }

    /**
     * Sets sDiscussionDescription
     *
     * @param string $sDiscussionDescription The description of the Discussion
     *
     * @return self
     */
    public function setSDiscussionDescription($sDiscussionDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDiscussionDescription)) {
            //throw new \InvalidArgumentException('non-nullable sDiscussionDescription cannot be null');
        //}

//        if ((!preg_match("/^.{0,75}$/", ObjectSerializer::toString($sDiscussionDescription)))) {
        if (!is_null($sDiscussionDescription) && (!preg_match("/(*UTF8)^.{0,75}$/", ObjectSerializer::toString($sDiscussionDescription)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($sDiscussionDescription)?'null':'"'.$sDiscussionDescription.'"')." for sDiscussionDescription when calling DiscussionResponse., must conform to the pattern /^.{0,75}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDiscussionDescription'] = $sDiscussionDescription;
        $this->container['sDiscussionDescription'] = (is_null($sDiscussionDescription) ? null : trim((string) $sDiscussionDescription));

        return $this;
    }

    /**
     * Gets bDiscussionClosed
     *
     * @return bool
     */
    public function getBDiscussionClosed()
    {
        return $this->container['bDiscussionClosed'];
    }

    /**
     * Sets bDiscussionClosed
     *
     * @param bool $bDiscussionClosed Whether if it's an closed
     *
     * @return self
     */
    public function setBDiscussionClosed($bDiscussionClosed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bDiscussionClosed)) {
            //throw new \InvalidArgumentException('non-nullable bDiscussionClosed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bDiscussionClosed'] = $bDiscussionClosed;
        $this->container['bDiscussionClosed'] = (is_null($bDiscussionClosed) ? null : (bool) $bDiscussionClosed);

        return $this;
    }

    /**
     * Gets dtDiscussionLastread
     *
     * @return string|null
     */
    public function getDtDiscussionLastread()
    {
        return is_null($this->container['dtDiscussionLastread']) ? null : trim($this->container['dtDiscussionLastread']);
    }

    /**
     * Sets dtDiscussionLastread
     *
     * @param string|null $dtDiscussionLastread The date the Discussion was last read
     *
     * @return self
     */
    public function setDtDiscussionLastread($dtDiscussionLastread)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtDiscussionLastread)) {
            //throw new \InvalidArgumentException('non-nullable dtDiscussionLastread cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtDiscussionLastread'] = $dtDiscussionLastread;
        $this->container['dtDiscussionLastread'] = (is_null($dtDiscussionLastread) ? null : trim((string) $dtDiscussionLastread));

        return $this;
    }

    /**
     * Gets iDiscussionmessageCount
     *
     * @return int
     */
    public function getIDiscussionmessageCount()
    {
        return $this->container['iDiscussionmessageCount'];
    }

    /**
     * Sets iDiscussionmessageCount
     *
     * @param int $iDiscussionmessageCount The count of Attachment.
     *
     * @return self
     */
    public function setIDiscussionmessageCount($iDiscussionmessageCount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iDiscussionmessageCount)) {
            //throw new \InvalidArgumentException('non-nullable iDiscussionmessageCount cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iDiscussionmessageCount'] = $iDiscussionmessageCount;
        $this->container['iDiscussionmessageCount'] = (is_null($iDiscussionmessageCount) ? null : (int) $iDiscussionmessageCount);

        return $this;
    }

    /**
     * Gets iDiscussionmessageCountunread
     *
     * @return int
     */
    public function getIDiscussionmessageCountunread()
    {
        return $this->container['iDiscussionmessageCountunread'];
    }

    /**
     * Sets iDiscussionmessageCountunread
     *
     * @param int $iDiscussionmessageCountunread The count of Attachment.
     *
     * @return self
     */
    public function setIDiscussionmessageCountunread($iDiscussionmessageCountunread)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iDiscussionmessageCountunread)) {
            //throw new \InvalidArgumentException('non-nullable iDiscussionmessageCountunread cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iDiscussionmessageCountunread'] = $iDiscussionmessageCountunread;
        $this->container['iDiscussionmessageCountunread'] = (is_null($iDiscussionmessageCountunread) ? null : (int) $iDiscussionmessageCountunread);

        return $this;
    }

    /**
     * Gets objDiscussionconfiguration
     *
     * @return \eZmaxAPI\Model\CustomDiscussionconfigurationResponse|null
     */
    public function getObjDiscussionconfiguration()
    {
        return $this->container['objDiscussionconfiguration'];
    }

    /**
     * Sets objDiscussionconfiguration
     *
     * @param \eZmaxAPI\Model\CustomDiscussionconfigurationResponse|null $objDiscussionconfiguration objDiscussionconfiguration
     *
     * @return self
     */
    public function setObjDiscussionconfiguration($objDiscussionconfiguration)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objDiscussionconfiguration)) {
            //throw new \InvalidArgumentException('non-nullable objDiscussionconfiguration cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objDiscussionconfiguration'] = $objDiscussionconfiguration;
        $this->container['objDiscussionconfiguration'] = $objDiscussionconfiguration;

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


