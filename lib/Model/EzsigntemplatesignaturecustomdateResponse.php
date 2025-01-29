<?php
/**
 * EzsigntemplatesignaturecustomdateResponse
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
 * EzsigntemplatesignaturecustomdateResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplatesignaturecustomdate Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatesignaturecustomdateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatesignaturecustomdate-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatesignaturecustomdateID' => 'int',
        'iEzsigntemplatesignaturecustomdateX' => 'int',
        'iEzsigntemplatesignaturecustomdateY' => 'int',
        'iEzsigntemplatesignaturecustomdateOffsetx' => 'int',
        'iEzsigntemplatesignaturecustomdateOffsety' => 'int',
        'sEzsigntemplatesignaturecustomdateFormat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatesignaturecustomdateID' => null,
        'iEzsigntemplatesignaturecustomdateX' => null,
        'iEzsigntemplatesignaturecustomdateY' => null,
        'iEzsigntemplatesignaturecustomdateOffsetx' => null,
        'iEzsigntemplatesignaturecustomdateOffsety' => null,
        'sEzsigntemplatesignaturecustomdateFormat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplatesignaturecustomdateID' => false,
		'iEzsigntemplatesignaturecustomdateX' => false,
		'iEzsigntemplatesignaturecustomdateY' => false,
		'iEzsigntemplatesignaturecustomdateOffsetx' => false,
		'iEzsigntemplatesignaturecustomdateOffsety' => false,
		'sEzsigntemplatesignaturecustomdateFormat' => false
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
        'pkiEzsigntemplatesignaturecustomdateID' => 'pkiEzsigntemplatesignaturecustomdateID',
        'iEzsigntemplatesignaturecustomdateX' => 'iEzsigntemplatesignaturecustomdateX',
        'iEzsigntemplatesignaturecustomdateY' => 'iEzsigntemplatesignaturecustomdateY',
        'iEzsigntemplatesignaturecustomdateOffsetx' => 'iEzsigntemplatesignaturecustomdateOffsetx',
        'iEzsigntemplatesignaturecustomdateOffsety' => 'iEzsigntemplatesignaturecustomdateOffsety',
        'sEzsigntemplatesignaturecustomdateFormat' => 'sEzsigntemplatesignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatesignaturecustomdateID' => 'setPkiEzsigntemplatesignaturecustomdateID',
        'iEzsigntemplatesignaturecustomdateX' => 'setIEzsigntemplatesignaturecustomdateX',
        'iEzsigntemplatesignaturecustomdateY' => 'setIEzsigntemplatesignaturecustomdateY',
        'iEzsigntemplatesignaturecustomdateOffsetx' => 'setIEzsigntemplatesignaturecustomdateOffsetx',
        'iEzsigntemplatesignaturecustomdateOffsety' => 'setIEzsigntemplatesignaturecustomdateOffsety',
        'sEzsigntemplatesignaturecustomdateFormat' => 'setSEzsigntemplatesignaturecustomdateFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatesignaturecustomdateID' => 'getPkiEzsigntemplatesignaturecustomdateID',
        'iEzsigntemplatesignaturecustomdateX' => 'getIEzsigntemplatesignaturecustomdateX',
        'iEzsigntemplatesignaturecustomdateY' => 'getIEzsigntemplatesignaturecustomdateY',
        'iEzsigntemplatesignaturecustomdateOffsetx' => 'getIEzsigntemplatesignaturecustomdateOffsetx',
        'iEzsigntemplatesignaturecustomdateOffsety' => 'getIEzsigntemplatesignaturecustomdateOffsety',
        'sEzsigntemplatesignaturecustomdateFormat' => 'getSEzsigntemplatesignaturecustomdateFormat'
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
        $this->setIfExists('pkiEzsigntemplatesignaturecustomdateID', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatesignaturecustomdateX', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatesignaturecustomdateY', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatesignaturecustomdateOffsetx', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatesignaturecustomdateOffsety', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatesignaturecustomdateFormat', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplatesignaturecustomdateID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplatesignaturecustomdateID' can't be null";
        }
        if (($this->container['pkiEzsigntemplatesignaturecustomdateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatesignaturecustomdateID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iEzsigntemplatesignaturecustomdateX']) && ($this->container['iEzsigntemplatesignaturecustomdateX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatesignaturecustomdateX', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iEzsigntemplatesignaturecustomdateY']) && ($this->container['iEzsigntemplatesignaturecustomdateY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatesignaturecustomdateY', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsigntemplatesignaturecustomdateFormat'] === null) {
            $invalidProperties[] = "'sEzsigntemplatesignaturecustomdateFormat' can't be null";
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
     * Gets pkiEzsigntemplatesignaturecustomdateID
     *
     * @return int
     */
    public function getPkiEzsigntemplatesignaturecustomdateID()
    {
	//return $this->container['pkiEzsigntemplatesignaturecustomdateID'];
        return $this->container['pkiEzsigntemplatesignaturecustomdateID'];
    }

    /**
     * Sets pkiEzsigntemplatesignaturecustomdateID
     *
     * @param int $pkiEzsigntemplatesignaturecustomdateID The unique ID of the Ezsigntemplatesignaturecustomdate
     *
     * @return self
     */
    public function setPkiEzsigntemplatesignaturecustomdateID($pkiEzsigntemplatesignaturecustomdateID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplatesignaturecustomdateID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplatesignaturecustomdateID cannot be null');
        //}

	//if (($pkiEzsigntemplatesignaturecustomdateID < 0)) {
        if (($pkiEzsigntemplatesignaturecustomdateID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatesignaturecustomdateID when calling EzsigntemplatesignaturecustomdateResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsigntemplatesignaturecustomdateID)?'null':'"'.$pkiEzsigntemplatesignaturecustomdateID.'"').' for pkiEzsigntemplatesignaturecustomdateID when calling EzsigntemplatesignaturecustomdateResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplatesignaturecustomdateID'] = $pkiEzsigntemplatesignaturecustomdateID;
        $this->container['pkiEzsigntemplatesignaturecustomdateID'] = (is_null($pkiEzsigntemplatesignaturecustomdateID) ? null : (int) $pkiEzsigntemplatesignaturecustomdateID);

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignaturecustomdateX
     *
     * @return int|null
     * @deprecated
     */
    public function getIEzsigntemplatesignaturecustomdateX()
    {
	//return $this->container['iEzsigntemplatesignaturecustomdateX'];
        return $this->container['iEzsigntemplatesignaturecustomdateX'];
    }

    /**
     * Sets iEzsigntemplatesignaturecustomdateX
     *
     * @param int|null $iEzsigntemplatesignaturecustomdateX The X coordinate (Horizontal) where to put the Ezsigntemplatesignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignaturecustomdate 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     * @deprecated
     */
    public function setIEzsigntemplatesignaturecustomdateX($iEzsigntemplatesignaturecustomdateX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatesignaturecustomdateX)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatesignaturecustomdateX cannot be null');
        //}

	//if (($iEzsigntemplatesignaturecustomdateX < 0)) {
        if (!is_null($iEzsigntemplatesignaturecustomdateX) && ($iEzsigntemplatesignaturecustomdateX < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsigntemplatesignaturecustomdateX when calling EzsigntemplatesignaturecustomdateResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsigntemplatesignaturecustomdateX)?'null':'"'.$iEzsigntemplatesignaturecustomdateX.'"').' for iEzsigntemplatesignaturecustomdateX when calling EzsigntemplatesignaturecustomdateResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatesignaturecustomdateX'] = $iEzsigntemplatesignaturecustomdateX;
        $this->container['iEzsigntemplatesignaturecustomdateX'] = (is_null($iEzsigntemplatesignaturecustomdateX) ? null : (int) $iEzsigntemplatesignaturecustomdateX);

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignaturecustomdateY
     *
     * @return int|null
     * @deprecated
     */
    public function getIEzsigntemplatesignaturecustomdateY()
    {
	//return $this->container['iEzsigntemplatesignaturecustomdateY'];
        return $this->container['iEzsigntemplatesignaturecustomdateY'];
    }

    /**
     * Sets iEzsigntemplatesignaturecustomdateY
     *
     * @param int|null $iEzsigntemplatesignaturecustomdateY The Y coordinate (Vertical) where to put the Ezsigntemplatesignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignaturecustomdate 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     * @deprecated
     */
    public function setIEzsigntemplatesignaturecustomdateY($iEzsigntemplatesignaturecustomdateY)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatesignaturecustomdateY)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatesignaturecustomdateY cannot be null');
        //}

	//if (($iEzsigntemplatesignaturecustomdateY < 0)) {
        if (!is_null($iEzsigntemplatesignaturecustomdateY) && ($iEzsigntemplatesignaturecustomdateY < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsigntemplatesignaturecustomdateY when calling EzsigntemplatesignaturecustomdateResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsigntemplatesignaturecustomdateY)?'null':'"'.$iEzsigntemplatesignaturecustomdateY.'"').' for iEzsigntemplatesignaturecustomdateY when calling EzsigntemplatesignaturecustomdateResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatesignaturecustomdateY'] = $iEzsigntemplatesignaturecustomdateY;
        $this->container['iEzsigntemplatesignaturecustomdateY'] = (is_null($iEzsigntemplatesignaturecustomdateY) ? null : (int) $iEzsigntemplatesignaturecustomdateY);

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignaturecustomdateOffsetx
     *
     * @return int|null
     */
    public function getIEzsigntemplatesignaturecustomdateOffsetx()
    {
	//return $this->container['iEzsigntemplatesignaturecustomdateOffsetx'];
        return $this->container['iEzsigntemplatesignaturecustomdateOffsetx'];
    }

    /**
     * Sets iEzsigntemplatesignaturecustomdateOffsetx
     *
     * @param int|null $iEzsigntemplatesignaturecustomdateOffsetx The X coordinate (Horizontal) where to put the Ezsigntemplatesignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignaturecustomdate 2 inches from the left of the signature, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplatesignaturecustomdateOffsetx($iEzsigntemplatesignaturecustomdateOffsetx)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatesignaturecustomdateOffsetx)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatesignaturecustomdateOffsetx cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatesignaturecustomdateOffsetx'] = $iEzsigntemplatesignaturecustomdateOffsetx;
        $this->container['iEzsigntemplatesignaturecustomdateOffsetx'] = (is_null($iEzsigntemplatesignaturecustomdateOffsetx) ? null : (int) $iEzsigntemplatesignaturecustomdateOffsetx);

        return $this;
    }

    /**
     * Gets iEzsigntemplatesignaturecustomdateOffsety
     *
     * @return int|null
     */
    public function getIEzsigntemplatesignaturecustomdateOffsety()
    {
	//return $this->container['iEzsigntemplatesignaturecustomdateOffsety'];
        return $this->container['iEzsigntemplatesignaturecustomdateOffsety'];
    }

    /**
     * Sets iEzsigntemplatesignaturecustomdateOffsety
     *
     * @param int|null $iEzsigntemplatesignaturecustomdateOffsety The X coordinate (Horizontal) where to put the Ezsigntemplatesignaturecustomdate on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignaturecustomdate 2 inches from the top of the signature, you would use \"200\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsigntemplatesignaturecustomdateOffsety($iEzsigntemplatesignaturecustomdateOffsety)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatesignaturecustomdateOffsety)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatesignaturecustomdateOffsety cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatesignaturecustomdateOffsety'] = $iEzsigntemplatesignaturecustomdateOffsety;
        $this->container['iEzsigntemplatesignaturecustomdateOffsety'] = (is_null($iEzsigntemplatesignaturecustomdateOffsety) ? null : (int) $iEzsigntemplatesignaturecustomdateOffsety);

        return $this;
    }

    /**
     * Gets sEzsigntemplatesignaturecustomdateFormat
     *
     * @return string
     */
    public function getSEzsigntemplatesignaturecustomdateFormat()
    {
	//return $this->container['sEzsigntemplatesignaturecustomdateFormat'];
        return is_null($this->container['sEzsigntemplatesignaturecustomdateFormat']) ? null : trim($this->container['sEzsigntemplatesignaturecustomdateFormat']);
    }

    /**
     * Sets sEzsigntemplatesignaturecustomdateFormat
     *
     * @param string $sEzsigntemplatesignaturecustomdateFormat The custom date format to use  You can use the codes below and they will be replaced at signature time. Text values like month and day names will be rendered in the proper language. Other text will be left as-is.  The codes examples below are based on the following datetime: Thursday, January 6, 2022 at 08:07:09 EST  For example, the format \"Signature date: {MM}/{DD}/{YYYY} {hh}:{mm}\" would become \"Signature date: 01/06/2022 08:07\"  **Year**  | Code | Example | | - | - | | {YYYY} | 2022 | | {YY} | 22 |  **Month**  | Code | Example | | - | - | | {MonthCapitalize} | Janvier | | {Month} | janvier | | {MM} | 01 | | {M} | 1 |  **Day**  | Code | Example | | - | - | | {DayCapitalize} | Jeudi | | {Day} | jeudi | | {DD} | 06 | | {D} | 6 |  **Hour**  | Code | Example | | - | - | | {hh} | 08 |  **Minute**  | Code | Example | | - | - | | {mm} | 07 |  **Second**  | Code | Example | | - | - | | {ss} | 09 |        **Timezone**  | Code | Example | | - | - | | {Z} | EST |       **Time**  | Code | Example | | - | - | | {Time} | 08:07:09 |   | {TimeZ} | 08:07:09 EST |     **Date**  | Code | Example | | - | - | | {Date} | 2022-01-06 |   | {DateText} | 1er Janvier 2022 |  **Full**  | Code | Example | | - | - | | {DateTime} | 2022-01-06 08:07:09 |   | {DateTimeZ} | 2022-01-06 08:07:09 EST |
     *
     * @return self
     */
    public function setSEzsigntemplatesignaturecustomdateFormat($sEzsigntemplatesignaturecustomdateFormat)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplatesignaturecustomdateFormat)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatesignaturecustomdateFormat cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplatesignaturecustomdateFormat'] = $sEzsigntemplatesignaturecustomdateFormat;
        $this->container['sEzsigntemplatesignaturecustomdateFormat'] = (is_null($sEzsigntemplatesignaturecustomdateFormat) ? null : trim((string) $sEzsigntemplatesignaturecustomdateFormat));

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


