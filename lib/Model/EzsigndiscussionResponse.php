<?php
/**
 * EzsigndiscussionResponse
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
 * EzsigndiscussionResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsigndiscussion Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigndiscussionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndiscussion-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigndiscussionID' => 'int',
        'fkiEzsignpageID' => 'int',
        'fkiDiscussionID' => 'int',
        'iEzsigndiscussionX' => 'int',
        'iEzsigndiscussionY' => 'int',
        'iEzsigndiscussionPagenumber' => 'int',
        'objDiscussion' => '\eZmaxAPI\Model\DiscussionResponseCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigndiscussionID' => null,
        'fkiEzsignpageID' => null,
        'fkiDiscussionID' => null,
        'iEzsigndiscussionX' => null,
        'iEzsigndiscussionY' => null,
        'iEzsigndiscussionPagenumber' => null,
        'objDiscussion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigndiscussionID' => false,
		'fkiEzsignpageID' => false,
		'fkiDiscussionID' => false,
		'iEzsigndiscussionX' => false,
		'iEzsigndiscussionY' => false,
		'iEzsigndiscussionPagenumber' => false,
		'objDiscussion' => false
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
        'pkiEzsigndiscussionID' => 'pkiEzsigndiscussionID',
        'fkiEzsignpageID' => 'fkiEzsignpageID',
        'fkiDiscussionID' => 'fkiDiscussionID',
        'iEzsigndiscussionX' => 'iEzsigndiscussionX',
        'iEzsigndiscussionY' => 'iEzsigndiscussionY',
        'iEzsigndiscussionPagenumber' => 'iEzsigndiscussionPagenumber',
        'objDiscussion' => 'objDiscussion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigndiscussionID' => 'setPkiEzsigndiscussionID',
        'fkiEzsignpageID' => 'setFkiEzsignpageID',
        'fkiDiscussionID' => 'setFkiDiscussionID',
        'iEzsigndiscussionX' => 'setIEzsigndiscussionX',
        'iEzsigndiscussionY' => 'setIEzsigndiscussionY',
        'iEzsigndiscussionPagenumber' => 'setIEzsigndiscussionPagenumber',
        'objDiscussion' => 'setObjDiscussion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigndiscussionID' => 'getPkiEzsigndiscussionID',
        'fkiEzsignpageID' => 'getFkiEzsignpageID',
        'fkiDiscussionID' => 'getFkiDiscussionID',
        'iEzsigndiscussionX' => 'getIEzsigndiscussionX',
        'iEzsigndiscussionY' => 'getIEzsigndiscussionY',
        'iEzsigndiscussionPagenumber' => 'getIEzsigndiscussionPagenumber',
        'objDiscussion' => 'getObjDiscussion'
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
        $this->setIfExists('pkiEzsigndiscussionID', $data ?? [], null);
        $this->setIfExists('fkiEzsignpageID', $data ?? [], null);
        $this->setIfExists('fkiDiscussionID', $data ?? [], null);
        $this->setIfExists('iEzsigndiscussionX', $data ?? [], null);
        $this->setIfExists('iEzsigndiscussionY', $data ?? [], null);
        $this->setIfExists('iEzsigndiscussionPagenumber', $data ?? [], null);
        $this->setIfExists('objDiscussion', $data ?? [], null);
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

        if ($this->container['pkiEzsigndiscussionID'] === null) {
            $invalidProperties[] = "'pkiEzsigndiscussionID' can't be null";
        }
        if (($this->container['pkiEzsigndiscussionID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigndiscussionID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['pkiEzsigndiscussionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigndiscussionID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignpageID'] === null) {
            $invalidProperties[] = "'fkiEzsignpageID' can't be null";
        }
        if (($this->container['fkiEzsignpageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignpageID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiDiscussionID'] === null) {
            $invalidProperties[] = "'fkiDiscussionID' can't be null";
        }
        if (($this->container['fkiDiscussionID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['fkiDiscussionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigndiscussionX'] === null) {
            $invalidProperties[] = "'iEzsigndiscussionX' can't be null";
        }
        if (($this->container['iEzsigndiscussionX'] > 65535)) {
            $invalidProperties[] = "invalid value for 'iEzsigndiscussionX', must be smaller than or equal to 65535.";
        }

        if (($this->container['iEzsigndiscussionX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigndiscussionX', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigndiscussionY'] === null) {
            $invalidProperties[] = "'iEzsigndiscussionY' can't be null";
        }
        if (($this->container['iEzsigndiscussionY'] > 65535)) {
            $invalidProperties[] = "invalid value for 'iEzsigndiscussionY', must be smaller than or equal to 65535.";
        }

        if (($this->container['iEzsigndiscussionY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigndiscussionY', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigndiscussionPagenumber'] === null) {
            $invalidProperties[] = "'iEzsigndiscussionPagenumber' can't be null";
        }
        if ($this->container['objDiscussion'] === null) {
            $invalidProperties[] = "'objDiscussion' can't be null";
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
     * Gets pkiEzsigndiscussionID
     *
     * @return int
     */
    public function getPkiEzsigndiscussionID()
    {
        return $this->container['pkiEzsigndiscussionID'];
    }

    /**
     * Sets pkiEzsigndiscussionID
     *
     * @param int $pkiEzsigndiscussionID The unique ID of the Ezsigndiscussion
     *
     * @return self
     */
    public function setPkiEzsigndiscussionID($pkiEzsigndiscussionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigndiscussionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigndiscussionID cannot be null');
        //}

//        if (($pkiEzsigndiscussionID > 16777215)) {
        if (($pkiEzsigndiscussionID > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigndiscussionID when calling EzsigndiscussionResponse., must be smaller than or equal to 16777215.');
        }
//        if (($pkiEzsigndiscussionID < 0)) {
        if (($pkiEzsigndiscussionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigndiscussionID when calling EzsigndiscussionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigndiscussionID'] = $pkiEzsigndiscussionID;
        $this->container['pkiEzsigndiscussionID'] = (is_null($pkiEzsigndiscussionID) ? null : (int) $pkiEzsigndiscussionID);

        return $this;
    }

    /**
     * Gets fkiEzsignpageID
     *
     * @return int
     */
    public function getFkiEzsignpageID()
    {
        return $this->container['fkiEzsignpageID'];
    }

    /**
     * Sets fkiEzsignpageID
     *
     * @param int $fkiEzsignpageID The unique ID of the Ezsignpage
     *
     * @return self
     */
    public function setFkiEzsignpageID($fkiEzsignpageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignpageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignpageID cannot be null');
        //}

//        if (($fkiEzsignpageID < 0)) {
        if (($fkiEzsignpageID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignpageID when calling EzsigndiscussionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignpageID'] = $fkiEzsignpageID;
        $this->container['fkiEzsignpageID'] = (is_null($fkiEzsignpageID) ? null : (int) $fkiEzsignpageID);

        return $this;
    }

    /**
     * Gets fkiDiscussionID
     *
     * @return int
     */
    public function getFkiDiscussionID()
    {
        return $this->container['fkiDiscussionID'];
    }

    /**
     * Sets fkiDiscussionID
     *
     * @param int $fkiDiscussionID The unique ID of the Discussion
     *
     * @return self
     */
    public function setFkiDiscussionID($fkiDiscussionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiDiscussionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiDiscussionID cannot be null');
        //}

//        if (($fkiDiscussionID > 16777215)) {
        if (($fkiDiscussionID > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $fkiDiscussionID when calling EzsigndiscussionResponse., must be smaller than or equal to 16777215.');
        }
//        if (($fkiDiscussionID < 0)) {
        if (($fkiDiscussionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiDiscussionID when calling EzsigndiscussionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiDiscussionID'] = $fkiDiscussionID;
        $this->container['fkiDiscussionID'] = (is_null($fkiDiscussionID) ? null : (int) $fkiDiscussionID);

        return $this;
    }

    /**
     * Gets iEzsigndiscussionX
     *
     * @return int
     */
    public function getIEzsigndiscussionX()
    {
        return $this->container['iEzsigndiscussionX'];
    }

    /**
     * Sets iEzsigndiscussionX
     *
     * @param int $iEzsigndiscussionX The x of the Ezsigndiscussion
     *
     * @return self
     */
    public function setIEzsigndiscussionX($iEzsigndiscussionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndiscussionX)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndiscussionX cannot be null');
        //}

//        if (($iEzsigndiscussionX > 65535)) {
        if (($iEzsigndiscussionX > 65535)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndiscussionX when calling EzsigndiscussionResponse., must be smaller than or equal to 65535.');
        }
//        if (($iEzsigndiscussionX < 0)) {
        if (($iEzsigndiscussionX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndiscussionX when calling EzsigndiscussionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndiscussionX'] = $iEzsigndiscussionX;
        $this->container['iEzsigndiscussionX'] = (is_null($iEzsigndiscussionX) ? null : (int) $iEzsigndiscussionX);

        return $this;
    }

    /**
     * Gets iEzsigndiscussionY
     *
     * @return int
     */
    public function getIEzsigndiscussionY()
    {
        return $this->container['iEzsigndiscussionY'];
    }

    /**
     * Sets iEzsigndiscussionY
     *
     * @param int $iEzsigndiscussionY The y of the Ezsigndiscussion
     *
     * @return self
     */
    public function setIEzsigndiscussionY($iEzsigndiscussionY)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndiscussionY)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndiscussionY cannot be null');
        //}

//        if (($iEzsigndiscussionY > 65535)) {
        if (($iEzsigndiscussionY > 65535)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndiscussionY when calling EzsigndiscussionResponse., must be smaller than or equal to 65535.');
        }
//        if (($iEzsigndiscussionY < 0)) {
        if (($iEzsigndiscussionY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigndiscussionY when calling EzsigndiscussionResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndiscussionY'] = $iEzsigndiscussionY;
        $this->container['iEzsigndiscussionY'] = (is_null($iEzsigndiscussionY) ? null : (int) $iEzsigndiscussionY);

        return $this;
    }

    /**
     * Gets iEzsigndiscussionPagenumber
     *
     * @return int
     */
    public function getIEzsigndiscussionPagenumber()
    {
        return $this->container['iEzsigndiscussionPagenumber'];
    }

    /**
     * Sets iEzsigndiscussionPagenumber
     *
     * @param int $iEzsigndiscussionPagenumber The page number in the Ezsigndocument for the Ezsigndiscussion
     *
     * @return self
     */
    public function setIEzsigndiscussionPagenumber($iEzsigndiscussionPagenumber)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndiscussionPagenumber)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndiscussionPagenumber cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndiscussionPagenumber'] = $iEzsigndiscussionPagenumber;
        $this->container['iEzsigndiscussionPagenumber'] = (is_null($iEzsigndiscussionPagenumber) ? null : (int) $iEzsigndiscussionPagenumber);

        return $this;
    }

    /**
     * Gets objDiscussion
     *
     * @return \eZmaxAPI\Model\DiscussionResponseCompound
     */
    public function getObjDiscussion()
    {
        return $this->container['objDiscussion'];
    }

    /**
     * Sets objDiscussion
     *
     * @param \eZmaxAPI\Model\DiscussionResponseCompound $objDiscussion objDiscussion
     *
     * @return self
     */
    public function setObjDiscussion($objDiscussion)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objDiscussion)) {
            //throw new \InvalidArgumentException('non-nullable objDiscussion cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objDiscussion'] = $objDiscussion;
        $this->container['objDiscussion'] = $objDiscussion;

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


