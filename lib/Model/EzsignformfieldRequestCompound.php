<?php
/**
 * EzsignformfieldRequestCompound
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
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
 * EzsignformfieldRequestCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignformfield Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignformfieldRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignformfield-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignformfieldID' => 'int',
        'iEzsignpagePagenumber' => 'int',
        'sEzsignformfieldLabel' => 'string',
        'sEzsignformfieldValue' => 'string',
        'iEzsignformfieldX' => 'int',
        'iEzsignformfieldY' => 'int',
        'iEzsignformfieldWidth' => 'int',
        'iEzsignformfieldHeight' => 'int',
        'bEzsignformfieldSelected' => 'bool',
        'sEzsignformfieldEnteredvalue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignformfieldID' => null,
        'iEzsignpagePagenumber' => null,
        'sEzsignformfieldLabel' => null,
        'sEzsignformfieldValue' => null,
        'iEzsignformfieldX' => null,
        'iEzsignformfieldY' => null,
        'iEzsignformfieldWidth' => null,
        'iEzsignformfieldHeight' => null,
        'bEzsignformfieldSelected' => null,
        'sEzsignformfieldEnteredvalue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignformfieldID' => false,
		'iEzsignpagePagenumber' => false,
		'sEzsignformfieldLabel' => false,
		'sEzsignformfieldValue' => false,
		'iEzsignformfieldX' => false,
		'iEzsignformfieldY' => false,
		'iEzsignformfieldWidth' => false,
		'iEzsignformfieldHeight' => false,
		'bEzsignformfieldSelected' => false,
		'sEzsignformfieldEnteredvalue' => false
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
        'pkiEzsignformfieldID' => 'pkiEzsignformfieldID',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber',
        'sEzsignformfieldLabel' => 'sEzsignformfieldLabel',
        'sEzsignformfieldValue' => 'sEzsignformfieldValue',
        'iEzsignformfieldX' => 'iEzsignformfieldX',
        'iEzsignformfieldY' => 'iEzsignformfieldY',
        'iEzsignformfieldWidth' => 'iEzsignformfieldWidth',
        'iEzsignformfieldHeight' => 'iEzsignformfieldHeight',
        'bEzsignformfieldSelected' => 'bEzsignformfieldSelected',
        'sEzsignformfieldEnteredvalue' => 'sEzsignformfieldEnteredvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignformfieldID' => 'setPkiEzsignformfieldID',
        'iEzsignpagePagenumber' => 'setIEzsignpagePagenumber',
        'sEzsignformfieldLabel' => 'setSEzsignformfieldLabel',
        'sEzsignformfieldValue' => 'setSEzsignformfieldValue',
        'iEzsignformfieldX' => 'setIEzsignformfieldX',
        'iEzsignformfieldY' => 'setIEzsignformfieldY',
        'iEzsignformfieldWidth' => 'setIEzsignformfieldWidth',
        'iEzsignformfieldHeight' => 'setIEzsignformfieldHeight',
        'bEzsignformfieldSelected' => 'setBEzsignformfieldSelected',
        'sEzsignformfieldEnteredvalue' => 'setSEzsignformfieldEnteredvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignformfieldID' => 'getPkiEzsignformfieldID',
        'iEzsignpagePagenumber' => 'getIEzsignpagePagenumber',
        'sEzsignformfieldLabel' => 'getSEzsignformfieldLabel',
        'sEzsignformfieldValue' => 'getSEzsignformfieldValue',
        'iEzsignformfieldX' => 'getIEzsignformfieldX',
        'iEzsignformfieldY' => 'getIEzsignformfieldY',
        'iEzsignformfieldWidth' => 'getIEzsignformfieldWidth',
        'iEzsignformfieldHeight' => 'getIEzsignformfieldHeight',
        'bEzsignformfieldSelected' => 'getBEzsignformfieldSelected',
        'sEzsignformfieldEnteredvalue' => 'getSEzsignformfieldEnteredvalue'
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
        $this->setIfExists('pkiEzsignformfieldID', $data ?? [], null);
        $this->setIfExists('iEzsignpagePagenumber', $data ?? [], null);
        $this->setIfExists('sEzsignformfieldLabel', $data ?? [], null);
        $this->setIfExists('sEzsignformfieldValue', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldX', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldY', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldWidth', $data ?? [], null);
        $this->setIfExists('iEzsignformfieldHeight', $data ?? [], null);
        $this->setIfExists('bEzsignformfieldSelected', $data ?? [], null);
        $this->setIfExists('sEzsignformfieldEnteredvalue', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignformfieldID']) && ($this->container['pkiEzsignformfieldID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignformfieldID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsignpagePagenumber' can't be null";
        }
        if (($this->container['iEzsignpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsignpagePagenumber', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsignformfieldLabel'] === null) {
            $invalidProperties[] = "'sEzsignformfieldLabel' can't be null";
        }
        if ($this->container['iEzsignformfieldX'] === null) {
            $invalidProperties[] = "'iEzsignformfieldX' can't be null";
        }
        if (($this->container['iEzsignformfieldX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldX', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignformfieldY'] === null) {
            $invalidProperties[] = "'iEzsignformfieldY' can't be null";
        }
        if (($this->container['iEzsignformfieldY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldY', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignformfieldWidth'] === null) {
            $invalidProperties[] = "'iEzsignformfieldWidth' can't be null";
        }
        if (($this->container['iEzsignformfieldWidth'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldWidth', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignformfieldHeight'] === null) {
            $invalidProperties[] = "'iEzsignformfieldHeight' can't be null";
        }
        if (($this->container['iEzsignformfieldHeight'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignformfieldHeight', must be bigger than or equal to 0.";
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
     * Gets pkiEzsignformfieldID
     *
     * @return int|null
     */
    public function getPkiEzsignformfieldID()
    {
        return $this->container['pkiEzsignformfieldID'];
    }

    /**
     * Sets pkiEzsignformfieldID
     *
     * @param int|null $pkiEzsignformfieldID The unique ID of the Ezsignformfield
     *
     * @return self
     */
    public function setPkiEzsignformfieldID($pkiEzsignformfieldID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignformfieldID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignformfieldID cannot be null');
        //}

//        if (($pkiEzsignformfieldID < 0)) {
        if (!is_null($pkiEzsignformfieldID) && ($pkiEzsignformfieldID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignformfieldID when calling EzsignformfieldRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignformfieldID'] = $pkiEzsignformfieldID;
        $this->container['pkiEzsignformfieldID'] = (is_null($pkiEzsignformfieldID) ? null : (int) $pkiEzsignformfieldID);

        return $this;
    }

    /**
     * Gets iEzsignpagePagenumber
     *
     * @return int
     */
    public function getIEzsignpagePagenumber()
    {
        return $this->container['iEzsignpagePagenumber'];
    }

    /**
     * Sets iEzsignpagePagenumber
     *
     * @param int $iEzsignpagePagenumber The page number in the Ezsigndocument
     *
     * @return self
     */
    public function setIEzsignpagePagenumber($iEzsignpagePagenumber)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignpagePagenumber)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignpagePagenumber cannot be null');
        //}

//        if (($iEzsignpagePagenumber < 1)) {
        if (($iEzsignpagePagenumber < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignpagePagenumber when calling EzsignformfieldRequestCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignpagePagenumber'] = $iEzsignpagePagenumber;
        $this->container['iEzsignpagePagenumber'] = (is_null($iEzsignpagePagenumber) ? null : (int) $iEzsignpagePagenumber);

        return $this;
    }

    /**
     * Gets sEzsignformfieldLabel
     *
     * @return string
     */
    public function getSEzsignformfieldLabel()
    {
        return $this->container['sEzsignformfieldLabel'];
    }

    /**
     * Sets sEzsignformfieldLabel
     *
     * @param string $sEzsignformfieldLabel The Label for the Ezsignformfield
     *
     * @return self
     */
    public function setSEzsignformfieldLabel($sEzsignformfieldLabel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignformfieldLabel)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignformfieldLabel cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignformfieldLabel'] = $sEzsignformfieldLabel;
        $this->container['sEzsignformfieldLabel'] = (is_null($sEzsignformfieldLabel) ? null : (string) $sEzsignformfieldLabel);

        return $this;
    }

    /**
     * Gets sEzsignformfieldValue
     *
     * @return string|null
     */
    public function getSEzsignformfieldValue()
    {
        return $this->container['sEzsignformfieldValue'];
    }

    /**
     * Sets sEzsignformfieldValue
     *
     * @param string|null $sEzsignformfieldValue The value for the Ezsignformfield  This can only be set if eEzsignformfieldgroupType is Checkbox or Radio
     *
     * @return self
     */
    public function setSEzsignformfieldValue($sEzsignformfieldValue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignformfieldValue)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignformfieldValue cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignformfieldValue'] = $sEzsignformfieldValue;
        $this->container['sEzsignformfieldValue'] = (is_null($sEzsignformfieldValue) ? null : (string) $sEzsignformfieldValue);

        return $this;
    }

    /**
     * Gets iEzsignformfieldX
     *
     * @return int
     */
    public function getIEzsignformfieldX()
    {
        return $this->container['iEzsignformfieldX'];
    }

    /**
     * Sets iEzsignformfieldX
     *
     * @param int $iEzsignformfieldX The X coordinate (Horizontal) where to put the Ezsignformfield on the Ezsignpage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignformfield 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignformfieldX($iEzsignformfieldX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignformfieldX)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldX cannot be null');
        //}

//        if (($iEzsignformfieldX < 0)) {
        if (($iEzsignformfieldX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldX when calling EzsignformfieldRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignformfieldX'] = $iEzsignformfieldX;
        $this->container['iEzsignformfieldX'] = (is_null($iEzsignformfieldX) ? null : (int) $iEzsignformfieldX);

        return $this;
    }

    /**
     * Gets iEzsignformfieldY
     *
     * @return int
     */
    public function getIEzsignformfieldY()
    {
        return $this->container['iEzsignformfieldY'];
    }

    /**
     * Sets iEzsignformfieldY
     *
     * @param int $iEzsignformfieldY The Y coordinate (Vertical) where to put the Ezsignformfield on the Ezsignpage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignformfield 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignformfieldY($iEzsignformfieldY)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignformfieldY)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldY cannot be null');
        //}

//        if (($iEzsignformfieldY < 0)) {
        if (($iEzsignformfieldY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldY when calling EzsignformfieldRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignformfieldY'] = $iEzsignformfieldY;
        $this->container['iEzsignformfieldY'] = (is_null($iEzsignformfieldY) ? null : (int) $iEzsignformfieldY);

        return $this;
    }

    /**
     * Gets iEzsignformfieldWidth
     *
     * @return int
     */
    public function getIEzsignformfieldWidth()
    {
        return $this->container['iEzsignformfieldWidth'];
    }

    /**
     * Sets iEzsignformfieldWidth
     *
     * @param int $iEzsignformfieldWidth The Width of the Ezsignformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsignformfieldgroupType.  | eEzsignformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22-65535     | | Radio                     | 22           | | Text                      | 22-65535     | | Textarea                  | 22-65535     |
     *
     * @return self
     */
    public function setIEzsignformfieldWidth($iEzsignformfieldWidth)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignformfieldWidth)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldWidth cannot be null');
        //}

//        if (($iEzsignformfieldWidth < 0)) {
        if (($iEzsignformfieldWidth < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldWidth when calling EzsignformfieldRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignformfieldWidth'] = $iEzsignformfieldWidth;
        $this->container['iEzsignformfieldWidth'] = (is_null($iEzsignformfieldWidth) ? null : (int) $iEzsignformfieldWidth);

        return $this;
    }

    /**
     * Gets iEzsignformfieldHeight
     *
     * @return int
     */
    public function getIEzsignformfieldHeight()
    {
        return $this->container['iEzsignformfieldHeight'];
    }

    /**
     * Sets iEzsignformfieldHeight
     *
     * @param int $iEzsignformfieldHeight The Height of the Ezsignformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsignformfieldgroupType.  | eEzsignformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22           | | Radio                     | 22           | | Text                      | 22           | | Textarea                  | 22-65535     |
     *
     * @return self
     */
    public function setIEzsignformfieldHeight($iEzsignformfieldHeight)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignformfieldHeight)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignformfieldHeight cannot be null');
        //}

//        if (($iEzsignformfieldHeight < 0)) {
        if (($iEzsignformfieldHeight < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignformfieldHeight when calling EzsignformfieldRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignformfieldHeight'] = $iEzsignformfieldHeight;
        $this->container['iEzsignformfieldHeight'] = (is_null($iEzsignformfieldHeight) ? null : (int) $iEzsignformfieldHeight);

        return $this;
    }

    /**
     * Gets bEzsignformfieldSelected
     *
     * @return bool|null
     */
    public function getBEzsignformfieldSelected()
    {
        return $this->container['bEzsignformfieldSelected'];
    }

    /**
     * Sets bEzsignformfieldSelected
     *
     * @param bool|null $bEzsignformfieldSelected Whether the Ezsignformfield is selected or not by default.  This can only be set if eEzsignformfieldgroupType is **Checkbox** or **Radio**
     *
     * @return self
     */
    public function setBEzsignformfieldSelected($bEzsignformfieldSelected)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignformfieldSelected)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignformfieldSelected cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignformfieldSelected'] = $bEzsignformfieldSelected;
        $this->container['bEzsignformfieldSelected'] = (is_null($bEzsignformfieldSelected) ? null : (bool) $bEzsignformfieldSelected);

        return $this;
    }

    /**
     * Gets sEzsignformfieldEnteredvalue
     *
     * @return string|null
     */
    public function getSEzsignformfieldEnteredvalue()
    {
        return $this->container['sEzsignformfieldEnteredvalue'];
    }

    /**
     * Sets sEzsignformfieldEnteredvalue
     *
     * @param string|null $sEzsignformfieldEnteredvalue This is the value enterred for the Ezsignformfield  This can only be set if eEzsignformfieldgroupType is **Dropdown**, **Text** or **Textarea**
     *
     * @return self
     */
    public function setSEzsignformfieldEnteredvalue($sEzsignformfieldEnteredvalue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignformfieldEnteredvalue)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignformfieldEnteredvalue cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignformfieldEnteredvalue'] = $sEzsignformfieldEnteredvalue;
        $this->container['sEzsignformfieldEnteredvalue'] = (is_null($sEzsignformfieldEnteredvalue) ? null : (string) $sEzsignformfieldEnteredvalue);

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


