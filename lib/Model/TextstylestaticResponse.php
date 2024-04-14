<?php
/**
 * TextstylestaticResponse
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
 * TextstylestaticResponse Class Doc Comment
 *
 * @category Class
 * @description A Textstylestatic Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TextstylestaticResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'textstylestatic-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiTextstylestaticID' => 'int',
        'fkiFontID' => 'int',
        'bTextstylestaticBold' => 'bool',
        'bTextstylestaticUnderline' => 'bool',
        'bTextstylestaticItalic' => 'bool',
        'bTextstylestaticStrikethrough' => 'bool',
        'iTextstylestaticFontcolor' => 'int',
        'iTextstylestaticSize' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiTextstylestaticID' => null,
        'fkiFontID' => null,
        'bTextstylestaticBold' => null,
        'bTextstylestaticUnderline' => null,
        'bTextstylestaticItalic' => null,
        'bTextstylestaticStrikethrough' => null,
        'iTextstylestaticFontcolor' => null,
        'iTextstylestaticSize' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiTextstylestaticID' => false,
		'fkiFontID' => false,
		'bTextstylestaticBold' => false,
		'bTextstylestaticUnderline' => false,
		'bTextstylestaticItalic' => false,
		'bTextstylestaticStrikethrough' => false,
		'iTextstylestaticFontcolor' => false,
		'iTextstylestaticSize' => false
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
        'pkiTextstylestaticID' => 'pkiTextstylestaticID',
        'fkiFontID' => 'fkiFontID',
        'bTextstylestaticBold' => 'bTextstylestaticBold',
        'bTextstylestaticUnderline' => 'bTextstylestaticUnderline',
        'bTextstylestaticItalic' => 'bTextstylestaticItalic',
        'bTextstylestaticStrikethrough' => 'bTextstylestaticStrikethrough',
        'iTextstylestaticFontcolor' => 'iTextstylestaticFontcolor',
        'iTextstylestaticSize' => 'iTextstylestaticSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiTextstylestaticID' => 'setPkiTextstylestaticID',
        'fkiFontID' => 'setFkiFontID',
        'bTextstylestaticBold' => 'setBTextstylestaticBold',
        'bTextstylestaticUnderline' => 'setBTextstylestaticUnderline',
        'bTextstylestaticItalic' => 'setBTextstylestaticItalic',
        'bTextstylestaticStrikethrough' => 'setBTextstylestaticStrikethrough',
        'iTextstylestaticFontcolor' => 'setITextstylestaticFontcolor',
        'iTextstylestaticSize' => 'setITextstylestaticSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiTextstylestaticID' => 'getPkiTextstylestaticID',
        'fkiFontID' => 'getFkiFontID',
        'bTextstylestaticBold' => 'getBTextstylestaticBold',
        'bTextstylestaticUnderline' => 'getBTextstylestaticUnderline',
        'bTextstylestaticItalic' => 'getBTextstylestaticItalic',
        'bTextstylestaticStrikethrough' => 'getBTextstylestaticStrikethrough',
        'iTextstylestaticFontcolor' => 'getITextstylestaticFontcolor',
        'iTextstylestaticSize' => 'getITextstylestaticSize'
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
        $this->setIfExists('pkiTextstylestaticID', $data ?? [], null);
        $this->setIfExists('fkiFontID', $data ?? [], null);
        $this->setIfExists('bTextstylestaticBold', $data ?? [], null);
        $this->setIfExists('bTextstylestaticUnderline', $data ?? [], null);
        $this->setIfExists('bTextstylestaticItalic', $data ?? [], null);
        $this->setIfExists('bTextstylestaticStrikethrough', $data ?? [], null);
        $this->setIfExists('iTextstylestaticFontcolor', $data ?? [], null);
        $this->setIfExists('iTextstylestaticSize', $data ?? [], null);
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

        if (!is_null($this->container['pkiTextstylestaticID']) && ($this->container['pkiTextstylestaticID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiTextstylestaticID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiFontID'] === null) {
            $invalidProperties[] = "'fkiFontID' can't be null";
        }
        if (($this->container['fkiFontID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiFontID', must be bigger than or equal to 0.";
        }

        if ($this->container['bTextstylestaticBold'] === null) {
            $invalidProperties[] = "'bTextstylestaticBold' can't be null";
        }
        if ($this->container['bTextstylestaticUnderline'] === null) {
            $invalidProperties[] = "'bTextstylestaticUnderline' can't be null";
        }
        if ($this->container['bTextstylestaticItalic'] === null) {
            $invalidProperties[] = "'bTextstylestaticItalic' can't be null";
        }
        if ($this->container['bTextstylestaticStrikethrough'] === null) {
            $invalidProperties[] = "'bTextstylestaticStrikethrough' can't be null";
        }
        if ($this->container['iTextstylestaticFontcolor'] === null) {
            $invalidProperties[] = "'iTextstylestaticFontcolor' can't be null";
        }
        if (($this->container['iTextstylestaticFontcolor'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iTextstylestaticFontcolor', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iTextstylestaticFontcolor'] < 0)) {
            $invalidProperties[] = "invalid value for 'iTextstylestaticFontcolor', must be bigger than or equal to 0.";
        }

        if ($this->container['iTextstylestaticSize'] === null) {
            $invalidProperties[] = "'iTextstylestaticSize' can't be null";
        }
        if (($this->container['iTextstylestaticSize'] > 255)) {
            $invalidProperties[] = "invalid value for 'iTextstylestaticSize', must be smaller than or equal to 255.";
        }

        if (($this->container['iTextstylestaticSize'] < 1)) {
            $invalidProperties[] = "invalid value for 'iTextstylestaticSize', must be bigger than or equal to 1.";
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
     * Gets pkiTextstylestaticID
     *
     * @return int|null
     */
    public function getPkiTextstylestaticID()
    {
        return $this->container['pkiTextstylestaticID'];
    }

    /**
     * Sets pkiTextstylestaticID
     *
     * @param int|null $pkiTextstylestaticID The unique ID of the Textstylestatic
     *
     * @return self
     */
    public function setPkiTextstylestaticID($pkiTextstylestaticID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiTextstylestaticID)) {
            //throw new \InvalidArgumentException('non-nullable pkiTextstylestaticID cannot be null');
        //}

//        if (($pkiTextstylestaticID < 0)) {
        if (!is_null($pkiTextstylestaticID) && ($pkiTextstylestaticID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiTextstylestaticID when calling TextstylestaticResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiTextstylestaticID'] = $pkiTextstylestaticID;
        $this->container['pkiTextstylestaticID'] = (is_null($pkiTextstylestaticID) ? null : (int) $pkiTextstylestaticID);

        return $this;
    }

    /**
     * Gets fkiFontID
     *
     * @return int
     */
    public function getFkiFontID()
    {
        return $this->container['fkiFontID'];
    }

    /**
     * Sets fkiFontID
     *
     * @param int $fkiFontID The unique ID of the Font
     *
     * @return self
     */
    public function setFkiFontID($fkiFontID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiFontID)) {
            //throw new \InvalidArgumentException('non-nullable fkiFontID cannot be null');
        //}

//        if (($fkiFontID < 0)) {
        if (($fkiFontID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiFontID when calling TextstylestaticResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiFontID'] = $fkiFontID;
        $this->container['fkiFontID'] = (is_null($fkiFontID) ? null : (int) $fkiFontID);

        return $this;
    }

    /**
     * Gets bTextstylestaticBold
     *
     * @return bool
     */
    public function getBTextstylestaticBold()
    {
        return $this->container['bTextstylestaticBold'];
    }

    /**
     * Sets bTextstylestaticBold
     *
     * @param bool $bTextstylestaticBold Whether the Textstylestatic is Bold or not
     *
     * @return self
     */
    public function setBTextstylestaticBold($bTextstylestaticBold)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bTextstylestaticBold)) {
            //throw new \InvalidArgumentException('non-nullable bTextstylestaticBold cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bTextstylestaticBold'] = $bTextstylestaticBold;
        $this->container['bTextstylestaticBold'] = (is_null($bTextstylestaticBold) ? null : (bool) $bTextstylestaticBold);

        return $this;
    }

    /**
     * Gets bTextstylestaticUnderline
     *
     * @return bool
     */
    public function getBTextstylestaticUnderline()
    {
        return $this->container['bTextstylestaticUnderline'];
    }

    /**
     * Sets bTextstylestaticUnderline
     *
     * @param bool $bTextstylestaticUnderline Whether the Textstylestatic is Underline or not
     *
     * @return self
     */
    public function setBTextstylestaticUnderline($bTextstylestaticUnderline)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bTextstylestaticUnderline)) {
            //throw new \InvalidArgumentException('non-nullable bTextstylestaticUnderline cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bTextstylestaticUnderline'] = $bTextstylestaticUnderline;
        $this->container['bTextstylestaticUnderline'] = (is_null($bTextstylestaticUnderline) ? null : (bool) $bTextstylestaticUnderline);

        return $this;
    }

    /**
     * Gets bTextstylestaticItalic
     *
     * @return bool
     */
    public function getBTextstylestaticItalic()
    {
        return $this->container['bTextstylestaticItalic'];
    }

    /**
     * Sets bTextstylestaticItalic
     *
     * @param bool $bTextstylestaticItalic Whether the Textstylestatic is Italic or not
     *
     * @return self
     */
    public function setBTextstylestaticItalic($bTextstylestaticItalic)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bTextstylestaticItalic)) {
            //throw new \InvalidArgumentException('non-nullable bTextstylestaticItalic cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bTextstylestaticItalic'] = $bTextstylestaticItalic;
        $this->container['bTextstylestaticItalic'] = (is_null($bTextstylestaticItalic) ? null : (bool) $bTextstylestaticItalic);

        return $this;
    }

    /**
     * Gets bTextstylestaticStrikethrough
     *
     * @return bool
     */
    public function getBTextstylestaticStrikethrough()
    {
        return $this->container['bTextstylestaticStrikethrough'];
    }

    /**
     * Sets bTextstylestaticStrikethrough
     *
     * @param bool $bTextstylestaticStrikethrough Whether the Textstylestatic is Strikethrough or not
     *
     * @return self
     */
    public function setBTextstylestaticStrikethrough($bTextstylestaticStrikethrough)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bTextstylestaticStrikethrough)) {
            //throw new \InvalidArgumentException('non-nullable bTextstylestaticStrikethrough cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bTextstylestaticStrikethrough'] = $bTextstylestaticStrikethrough;
        $this->container['bTextstylestaticStrikethrough'] = (is_null($bTextstylestaticStrikethrough) ? null : (bool) $bTextstylestaticStrikethrough);

        return $this;
    }

    /**
     * Gets iTextstylestaticFontcolor
     *
     * @return int
     */
    public function getITextstylestaticFontcolor()
    {
        return $this->container['iTextstylestaticFontcolor'];
    }

    /**
     * Sets iTextstylestaticFontcolor
     *
     * @param int $iTextstylestaticFontcolor The int32 representation of the Fontcolor. For example, RGB color #39435B would be 3752795
     *
     * @return self
     */
    public function setITextstylestaticFontcolor($iTextstylestaticFontcolor)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iTextstylestaticFontcolor)) {
            //throw new \InvalidArgumentException('non-nullable iTextstylestaticFontcolor cannot be null');
        //}

//        if (($iTextstylestaticFontcolor > 16777215)) {
        if (($iTextstylestaticFontcolor > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iTextstylestaticFontcolor when calling TextstylestaticResponse., must be smaller than or equal to 16777215.');
        }
//        if (($iTextstylestaticFontcolor < 0)) {
        if (($iTextstylestaticFontcolor < 0)) {
            throw new \InvalidArgumentException('invalid value for $iTextstylestaticFontcolor when calling TextstylestaticResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iTextstylestaticFontcolor'] = $iTextstylestaticFontcolor;
        $this->container['iTextstylestaticFontcolor'] = (is_null($iTextstylestaticFontcolor) ? null : (int) $iTextstylestaticFontcolor);

        return $this;
    }

    /**
     * Gets iTextstylestaticSize
     *
     * @return int
     */
    public function getITextstylestaticSize()
    {
        return $this->container['iTextstylestaticSize'];
    }

    /**
     * Sets iTextstylestaticSize
     *
     * @param int $iTextstylestaticSize The Size for the Font of the Textstylestatic
     *
     * @return self
     */
    public function setITextstylestaticSize($iTextstylestaticSize)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iTextstylestaticSize)) {
            //throw new \InvalidArgumentException('non-nullable iTextstylestaticSize cannot be null');
        //}

//        if (($iTextstylestaticSize > 255)) {
        if (($iTextstylestaticSize > 255)) {
            throw new \InvalidArgumentException('invalid value for $iTextstylestaticSize when calling TextstylestaticResponse., must be smaller than or equal to 255.');
        }
//        if (($iTextstylestaticSize < 1)) {
        if (($iTextstylestaticSize < 1)) {
            throw new \InvalidArgumentException('invalid value for $iTextstylestaticSize when calling TextstylestaticResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iTextstylestaticSize'] = $iTextstylestaticSize;
        $this->container['iTextstylestaticSize'] = (is_null($iTextstylestaticSize) ? null : (int) $iTextstylestaticSize);

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


