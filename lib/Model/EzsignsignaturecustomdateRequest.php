<?php
/**
 * EzsignsignaturecustomdateRequest
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
 * EzsignsignaturecustomdateRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsignaturecustomdate Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsignaturecustomdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsignaturecustomdate-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignsignaturecustomdateID' => 'int',
        'iEzsignsignaturecustomdateX' => 'int',
        'iEzsignsignaturecustomdateY' => 'int',
        'iEzsignsignaturecustomdateOffsetx' => 'int',
        'iEzsignsignaturecustomdateOffsety' => 'int',
        'sEzsignsignaturecustomdateFormat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignsignaturecustomdateID' => null,
        'iEzsignsignaturecustomdateX' => null,
        'iEzsignsignaturecustomdateY' => null,
        'iEzsignsignaturecustomdateOffsetx' => null,
        'iEzsignsignaturecustomdateOffsety' => null,
        'sEzsignsignaturecustomdateFormat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignsignaturecustomdateID' => false,
		'iEzsignsignaturecustomdateX' => false,
		'iEzsignsignaturecustomdateY' => false,
		'iEzsignsignaturecustomdateOffsetx' => false,
		'iEzsignsignaturecustomdateOffsety' => false,
		'sEzsignsignaturecustomdateFormat' => false
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
        'pkiEzsignsignaturecustomdateID' => 'pkiEzsignsignaturecustomdateID',
        'iEzsignsignaturecustomdateX' => 'iEzsignsignaturecustomdateX',
        'iEzsignsignaturecustomdateY' => 'iEzsignsignaturecustomdateY',
        'iEzsignsignaturecustomdateOffsetx' => 'iEzsignsignaturecustomdateOffsetx',
        'iEzsignsignaturecustomdateOffsety' => 'iEzsignsignaturecustomdateOffsety',
        'sEzsignsignaturecustomdateFormat' => 'sEzsignsignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignsignaturecustomdateID' => 'setPkiEzsignsignaturecustomdateID',
        'iEzsignsignaturecustomdateX' => 'setIEzsignsignaturecustomdateX',
        'iEzsignsignaturecustomdateY' => 'setIEzsignsignaturecustomdateY',
        'iEzsignsignaturecustomdateOffsetx' => 'setIEzsignsignaturecustomdateOffsetx',
        'iEzsignsignaturecustomdateOffsety' => 'setIEzsignsignaturecustomdateOffsety',
        'sEzsignsignaturecustomdateFormat' => 'setSEzsignsignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignsignaturecustomdateID' => 'getPkiEzsignsignaturecustomdateID',
        'iEzsignsignaturecustomdateX' => 'getIEzsignsignaturecustomdateX',
        'iEzsignsignaturecustomdateY' => 'getIEzsignsignaturecustomdateY',
        'iEzsignsignaturecustomdateOffsetx' => 'getIEzsignsignaturecustomdateOffsetx',
        'iEzsignsignaturecustomdateOffsety' => 'getIEzsignsignaturecustomdateOffsety',
        'sEzsignsignaturecustomdateFormat' => 'getSEzsignsignaturecustomdateFormat'
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
        $this->setIfExists('pkiEzsignsignaturecustomdateID', $data ?? [], null);
        $this->setIfExists('iEzsignsignaturecustomdateX', $data ?? [], null);
        $this->setIfExists('iEzsignsignaturecustomdateY', $data ?? [], null);
        $this->setIfExists('iEzsignsignaturecustomdateOffsetx', $data ?? [], null);
        $this->setIfExists('iEzsignsignaturecustomdateOffsety', $data ?? [], null);
        $this->setIfExists('sEzsignsignaturecustomdateFormat', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignsignaturecustomdateID']) && ($this->container['pkiEzsignsignaturecustomdateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsignaturecustomdateID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iEzsignsignaturecustomdateX']) && ($this->container['iEzsignsignaturecustomdateX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignsignaturecustomdateX', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iEzsignsignaturecustomdateY']) && ($this->container['iEzsignsignaturecustomdateY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignsignaturecustomdateY', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsignsignaturecustomdateFormat'] === null) {
            $invalidProperties[] = "'sEzsignsignaturecustomdateFormat' can't be null";
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
     * Gets pkiEzsignsignaturecustomdateID
     *
     * @return int|null
     */
    public function getPkiEzsignsignaturecustomdateID()
    {
	//return $this->container['pkiEzsignsignaturecustomdateID'];
        return $this->container['pkiEzsignsignaturecustomdateID'];
    }

    /**
     * Sets pkiEzsignsignaturecustomdateID
     *
     * @param int|null $pkiEzsignsignaturecustomdateID The unique ID of the Ezsignsignaturecustomdate
     *
     * @return self
     */
    public function setPkiEzsignsignaturecustomdateID($pkiEzsignsignaturecustomdateID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignsignaturecustomdateID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignsignaturecustomdateID cannot be null');
        //}

	//if (($pkiEzsignsignaturecustomdateID < 0)) {
        if (!is_null($pkiEzsignsignaturecustomdateID) && ($pkiEzsignsignaturecustomdateID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignsignaturecustomdateID when calling EzsignsignaturecustomdateRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignsignaturecustomdateID)?'null':'"'.$pkiEzsignsignaturecustomdateID.'"').' for pkiEzsignsignaturecustomdateID when calling EzsignsignaturecustomdateRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignsignaturecustomdateID'] = $pkiEzsignsignaturecustomdateID;
        $this->container['pkiEzsignsignaturecustomdateID'] = (is_null($pkiEzsignsignaturecustomdateID) ? null : (int) $pkiEzsignsignaturecustomdateID);

        return $this;
    }

    /**
     * Gets iEzsignsignaturecustomdateX
     *
     * @return int|null
     */
    public function getIEzsignsignaturecustomdateX()
    {
	//return $this->container['iEzsignsignaturecustomdateX'];
        return $this->container['iEzsignsignaturecustomdateX'];
    }

    /**
     * Sets iEzsignsignaturecustomdateX
     *
     * @param int|null $iEzsignsignaturecustomdateX The X coordinate (Horizontal) where to put the Ezsignsignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignaturecustomdate block 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignsignaturecustomdateX($iEzsignsignaturecustomdateX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignaturecustomdateX)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignaturecustomdateX cannot be null');
        //}

	//if (($iEzsignsignaturecustomdateX < 0)) {
        if (!is_null($iEzsignsignaturecustomdateX) && ($iEzsignsignaturecustomdateX < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsignsignaturecustomdateX when calling EzsignsignaturecustomdateRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsignsignaturecustomdateX)?'null':'"'.$iEzsignsignaturecustomdateX.'"').' for iEzsignsignaturecustomdateX when calling EzsignsignaturecustomdateRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignaturecustomdateX'] = $iEzsignsignaturecustomdateX;
        $this->container['iEzsignsignaturecustomdateX'] = (is_null($iEzsignsignaturecustomdateX) ? null : (int) $iEzsignsignaturecustomdateX);

        return $this;
    }

    /**
     * Gets iEzsignsignaturecustomdateY
     *
     * @return int|null
     */
    public function getIEzsignsignaturecustomdateY()
    {
	//return $this->container['iEzsignsignaturecustomdateY'];
        return $this->container['iEzsignsignaturecustomdateY'];
    }

    /**
     * Sets iEzsignsignaturecustomdateY
     *
     * @param int|null $iEzsignsignaturecustomdateY The Y coordinate (Vertical) where to put the Ezsignsignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignaturecustomdate block 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignsignaturecustomdateY($iEzsignsignaturecustomdateY)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignaturecustomdateY)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignaturecustomdateY cannot be null');
        //}

	//if (($iEzsignsignaturecustomdateY < 0)) {
        if (!is_null($iEzsignsignaturecustomdateY) && ($iEzsignsignaturecustomdateY < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsignsignaturecustomdateY when calling EzsignsignaturecustomdateRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsignsignaturecustomdateY)?'null':'"'.$iEzsignsignaturecustomdateY.'"').' for iEzsignsignaturecustomdateY when calling EzsignsignaturecustomdateRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignaturecustomdateY'] = $iEzsignsignaturecustomdateY;
        $this->container['iEzsignsignaturecustomdateY'] = (is_null($iEzsignsignaturecustomdateY) ? null : (int) $iEzsignsignaturecustomdateY);

        return $this;
    }

    /**
     * Gets iEzsignsignaturecustomdateOffsetx
     *
     * @return int|null
     */
    public function getIEzsignsignaturecustomdateOffsetx()
    {
	//return $this->container['iEzsignsignaturecustomdateOffsetx'];
        return $this->container['iEzsignsignaturecustomdateOffsetx'];
    }

    /**
     * Sets iEzsignsignaturecustomdateOffsetx
     *
     * @param int|null $iEzsignsignaturecustomdateOffsetx The X coordinate (Horizontal) where to put the Ezsignsignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignaturecustomdate block 2 inches from the left of the signature, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignsignaturecustomdateOffsetx($iEzsignsignaturecustomdateOffsetx)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignaturecustomdateOffsetx)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignaturecustomdateOffsetx cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignaturecustomdateOffsetx'] = $iEzsignsignaturecustomdateOffsetx;
        $this->container['iEzsignsignaturecustomdateOffsetx'] = (is_null($iEzsignsignaturecustomdateOffsetx) ? null : (int) $iEzsignsignaturecustomdateOffsetx);

        return $this;
    }

    /**
     * Gets iEzsignsignaturecustomdateOffsety
     *
     * @return int|null
     */
    public function getIEzsignsignaturecustomdateOffsety()
    {
	//return $this->container['iEzsignsignaturecustomdateOffsety'];
        return $this->container['iEzsignsignaturecustomdateOffsety'];
    }

    /**
     * Sets iEzsignsignaturecustomdateOffsety
     *
     * @param int|null $iEzsignsignaturecustomdateOffsety The Y coordinate (Vertical) where to put the Ezsignsignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignaturecustomdate block 3 inches from the top of the signature, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignsignaturecustomdateOffsety($iEzsignsignaturecustomdateOffsety)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignaturecustomdateOffsety)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignaturecustomdateOffsety cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignaturecustomdateOffsety'] = $iEzsignsignaturecustomdateOffsety;
        $this->container['iEzsignsignaturecustomdateOffsety'] = (is_null($iEzsignsignaturecustomdateOffsety) ? null : (int) $iEzsignsignaturecustomdateOffsety);

        return $this;
    }

    /**
     * Gets sEzsignsignaturecustomdateFormat
     *
     * @return string
     */
    public function getSEzsignsignaturecustomdateFormat()
    {
	//return $this->container['sEzsignsignaturecustomdateFormat'];
        return is_null($this->container['sEzsignsignaturecustomdateFormat']) ? null : trim($this->container['sEzsignsignaturecustomdateFormat']);
    }

    /**
     * Sets sEzsignsignaturecustomdateFormat
     *
     * @param string $sEzsignsignaturecustomdateFormat The custom date format to use  You can use the codes below and they will be replaced at signature time. Text values like month and day names will be rendered in the proper language. Other text will be left as-is.  The codes examples below are based on the following datetime: Thursday, January 6, 2022 at 08:07:09 EST  For example, the format \"Signature date: {MM}/{DD}/{YYYY} {hh}:{mm}\" would become \"Signature date: 01/06/2022 08:07\"  **Year**  | Code | Example | | - | - | | {YYYY} | 2022 | | {YY} | 22 |  **Month**  | Code | Example | | - | - | | {MonthCapitalize} | Janvier | | {Month} | janvier | | {MM} | 01 | | {M} | 1 |  **Day**  | Code | Example | | - | - | | {DayCapitalize} | Jeudi | | {Day} | jeudi | | {DD} | 06 | | {D} | 6 |  **Hour**  | Code | Example | | - | - | | {hh} | 08 |  **Minute**  | Code | Example | | - | - | | {mm} | 07 |  **Second**  | Code | Example | | - | - | | {ss} | 09 |        **Timezone**  | Code | Example | | - | - | | {Z} | EST |       **Time**  | Code | Example | | - | - | | {Time} | 08:07:09 |   | {TimeZ} | 08:07:09 EST |     **Date**  | Code | Example | | - | - | | {Date} | 2022-01-06 |   | {DateText} | 1er Janvier 2022 |  **Full**  | Code | Example | | - | - | | {DateTime} | 2022-01-06 08:07:09 |   | {DateTimeZ} | 2022-01-06 08:07:09 EST |
     *
     * @return self
     */
    public function setSEzsignsignaturecustomdateFormat($sEzsignsignaturecustomdateFormat)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignsignaturecustomdateFormat)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignsignaturecustomdateFormat cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignsignaturecustomdateFormat'] = $sEzsignsignaturecustomdateFormat;
        $this->container['sEzsignsignaturecustomdateFormat'] = (is_null($sEzsignsignaturecustomdateFormat) ? null : trim((string) $sEzsignsignaturecustomdateFormat));

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


