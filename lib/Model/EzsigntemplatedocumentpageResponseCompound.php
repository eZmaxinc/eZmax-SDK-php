<?php
/**
 * EzsigntemplatedocumentpageResponseCompound
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
 * EzsigntemplatedocumentpageResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplatedocumentpage Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatedocumentpageResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatedocumentpage-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatedocumentpageID' => 'int',
        'iEzsigntemplatedocumentpageWidthimage' => 'int',
        'iEzsigntemplatedocumentpageHeightimage' => 'int',
        'iEzsigntemplatedocumentpageWidthpdf' => 'int',
        'iEzsigntemplatedocumentpageHeightpdf' => 'int',
        'iEzsigntemplatedocumentpagePagenumber' => 'int',
        'sComputedImageurl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatedocumentpageID' => null,
        'iEzsigntemplatedocumentpageWidthimage' => null,
        'iEzsigntemplatedocumentpageHeightimage' => null,
        'iEzsigntemplatedocumentpageWidthpdf' => null,
        'iEzsigntemplatedocumentpageHeightpdf' => null,
        'iEzsigntemplatedocumentpagePagenumber' => null,
        'sComputedImageurl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplatedocumentpageID' => false,
		'iEzsigntemplatedocumentpageWidthimage' => false,
		'iEzsigntemplatedocumentpageHeightimage' => false,
		'iEzsigntemplatedocumentpageWidthpdf' => false,
		'iEzsigntemplatedocumentpageHeightpdf' => false,
		'iEzsigntemplatedocumentpagePagenumber' => false,
		'sComputedImageurl' => false
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
        'pkiEzsigntemplatedocumentpageID' => 'pkiEzsigntemplatedocumentpageID',
        'iEzsigntemplatedocumentpageWidthimage' => 'iEzsigntemplatedocumentpageWidthimage',
        'iEzsigntemplatedocumentpageHeightimage' => 'iEzsigntemplatedocumentpageHeightimage',
        'iEzsigntemplatedocumentpageWidthpdf' => 'iEzsigntemplatedocumentpageWidthpdf',
        'iEzsigntemplatedocumentpageHeightpdf' => 'iEzsigntemplatedocumentpageHeightpdf',
        'iEzsigntemplatedocumentpagePagenumber' => 'iEzsigntemplatedocumentpagePagenumber',
        'sComputedImageurl' => 'sComputedImageurl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatedocumentpageID' => 'setPkiEzsigntemplatedocumentpageID',
        'iEzsigntemplatedocumentpageWidthimage' => 'setIEzsigntemplatedocumentpageWidthimage',
        'iEzsigntemplatedocumentpageHeightimage' => 'setIEzsigntemplatedocumentpageHeightimage',
        'iEzsigntemplatedocumentpageWidthpdf' => 'setIEzsigntemplatedocumentpageWidthpdf',
        'iEzsigntemplatedocumentpageHeightpdf' => 'setIEzsigntemplatedocumentpageHeightpdf',
        'iEzsigntemplatedocumentpagePagenumber' => 'setIEzsigntemplatedocumentpagePagenumber',
        'sComputedImageurl' => 'setSComputedImageurl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatedocumentpageID' => 'getPkiEzsigntemplatedocumentpageID',
        'iEzsigntemplatedocumentpageWidthimage' => 'getIEzsigntemplatedocumentpageWidthimage',
        'iEzsigntemplatedocumentpageHeightimage' => 'getIEzsigntemplatedocumentpageHeightimage',
        'iEzsigntemplatedocumentpageWidthpdf' => 'getIEzsigntemplatedocumentpageWidthpdf',
        'iEzsigntemplatedocumentpageHeightpdf' => 'getIEzsigntemplatedocumentpageHeightpdf',
        'iEzsigntemplatedocumentpagePagenumber' => 'getIEzsigntemplatedocumentpagePagenumber',
        'sComputedImageurl' => 'getSComputedImageurl'
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
        $this->setIfExists('pkiEzsigntemplatedocumentpageID', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentpageWidthimage', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentpageHeightimage', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentpageWidthpdf', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentpageHeightpdf', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentpagePagenumber', $data ?? [], null);
        $this->setIfExists('sComputedImageurl', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplatedocumentpageID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplatedocumentpageID' can't be null";
        }
        if (($this->container['pkiEzsigntemplatedocumentpageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatedocumentpageID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageWidthimage'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageWidthimage' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageWidthimage'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageWidthimage', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageHeightimage'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageHeightimage' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageHeightimage'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageHeightimage', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageWidthpdf'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageWidthpdf' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageWidthpdf'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageWidthpdf', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpageHeightpdf'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpageHeightpdf' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpageHeightpdf'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpageHeightpdf', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsigntemplatedocumentpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentpagePagenumber' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentpagePagenumber', must be bigger than or equal to 1.";
        }

        if ($this->container['sComputedImageurl'] === null) {
            $invalidProperties[] = "'sComputedImageurl' can't be null";
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
     * Gets pkiEzsigntemplatedocumentpageID
     *
     * @return int
     */
    public function getPkiEzsigntemplatedocumentpageID()
    {
	//return $this->container['pkiEzsigntemplatedocumentpageID'];
        return $this->container['pkiEzsigntemplatedocumentpageID'];
    }

    /**
     * Sets pkiEzsigntemplatedocumentpageID
     *
     * @param int $pkiEzsigntemplatedocumentpageID The unique ID of the Ezsigntemplatedocumentpage
     *
     * @return self
     */
    public function setPkiEzsigntemplatedocumentpageID($pkiEzsigntemplatedocumentpageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplatedocumentpageID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplatedocumentpageID cannot be null');
        //}

	//if (($pkiEzsigntemplatedocumentpageID < 0)) {
        if (($pkiEzsigntemplatedocumentpageID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatedocumentpageID when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsigntemplatedocumentpageID)?'null':'"'.$pkiEzsigntemplatedocumentpageID.'"').' for pkiEzsigntemplatedocumentpageID when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplatedocumentpageID'] = $pkiEzsigntemplatedocumentpageID;
        $this->container['pkiEzsigntemplatedocumentpageID'] = (is_null($pkiEzsigntemplatedocumentpageID) ? null : (int) $pkiEzsigntemplatedocumentpageID);

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageWidthimage
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageWidthimage()
    {
	//return $this->container['iEzsigntemplatedocumentpageWidthimage'];
        return $this->container['iEzsigntemplatedocumentpageWidthimage'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageWidthimage
     *
     * @param int $iEzsigntemplatedocumentpageWidthimage The Width of the page's image in pixels calculated at 100 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageWidthimage($iEzsigntemplatedocumentpageWidthimage)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentpageWidthimage)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentpageWidthimage cannot be null');
        //}

	//if (($iEzsigntemplatedocumentpageWidthimage < 0)) {
        if (($iEzsigntemplatedocumentpageWidthimage < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageWidthimage when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsigntemplatedocumentpageWidthimage)?'null':'"'.$iEzsigntemplatedocumentpageWidthimage.'"').' for iEzsigntemplatedocumentpageWidthimage when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentpageWidthimage'] = $iEzsigntemplatedocumentpageWidthimage;
        $this->container['iEzsigntemplatedocumentpageWidthimage'] = (is_null($iEzsigntemplatedocumentpageWidthimage) ? null : (int) $iEzsigntemplatedocumentpageWidthimage);

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageHeightimage
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageHeightimage()
    {
	//return $this->container['iEzsigntemplatedocumentpageHeightimage'];
        return $this->container['iEzsigntemplatedocumentpageHeightimage'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageHeightimage
     *
     * @param int $iEzsigntemplatedocumentpageHeightimage The Height of the page's image in pixels calculated at 100 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageHeightimage($iEzsigntemplatedocumentpageHeightimage)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentpageHeightimage)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentpageHeightimage cannot be null');
        //}

	//if (($iEzsigntemplatedocumentpageHeightimage < 0)) {
        if (($iEzsigntemplatedocumentpageHeightimage < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageHeightimage when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsigntemplatedocumentpageHeightimage)?'null':'"'.$iEzsigntemplatedocumentpageHeightimage.'"').' for iEzsigntemplatedocumentpageHeightimage when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentpageHeightimage'] = $iEzsigntemplatedocumentpageHeightimage;
        $this->container['iEzsigntemplatedocumentpageHeightimage'] = (is_null($iEzsigntemplatedocumentpageHeightimage) ? null : (int) $iEzsigntemplatedocumentpageHeightimage);

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageWidthpdf
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageWidthpdf()
    {
	//return $this->container['iEzsigntemplatedocumentpageWidthpdf'];
        return $this->container['iEzsigntemplatedocumentpageWidthpdf'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageWidthpdf
     *
     * @param int $iEzsigntemplatedocumentpageWidthpdf The Width of the page in points calculated at 72 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageWidthpdf($iEzsigntemplatedocumentpageWidthpdf)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentpageWidthpdf)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentpageWidthpdf cannot be null');
        //}

	//if (($iEzsigntemplatedocumentpageWidthpdf < 0)) {
        if (($iEzsigntemplatedocumentpageWidthpdf < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageWidthpdf when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsigntemplatedocumentpageWidthpdf)?'null':'"'.$iEzsigntemplatedocumentpageWidthpdf.'"').' for iEzsigntemplatedocumentpageWidthpdf when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentpageWidthpdf'] = $iEzsigntemplatedocumentpageWidthpdf;
        $this->container['iEzsigntemplatedocumentpageWidthpdf'] = (is_null($iEzsigntemplatedocumentpageWidthpdf) ? null : (int) $iEzsigntemplatedocumentpageWidthpdf);

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpageHeightpdf
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpageHeightpdf()
    {
	//return $this->container['iEzsigntemplatedocumentpageHeightpdf'];
        return $this->container['iEzsigntemplatedocumentpageHeightpdf'];
    }

    /**
     * Sets iEzsigntemplatedocumentpageHeightpdf
     *
     * @param int $iEzsigntemplatedocumentpageHeightpdf The Height of the page in points calculated at 72 DPI
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpageHeightpdf($iEzsigntemplatedocumentpageHeightpdf)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentpageHeightpdf)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentpageHeightpdf cannot be null');
        //}

	//if (($iEzsigntemplatedocumentpageHeightpdf < 0)) {
        if (($iEzsigntemplatedocumentpageHeightpdf < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpageHeightpdf when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsigntemplatedocumentpageHeightpdf)?'null':'"'.$iEzsigntemplatedocumentpageHeightpdf.'"').' for iEzsigntemplatedocumentpageHeightpdf when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentpageHeightpdf'] = $iEzsigntemplatedocumentpageHeightpdf;
        $this->container['iEzsigntemplatedocumentpageHeightpdf'] = (is_null($iEzsigntemplatedocumentpageHeightpdf) ? null : (int) $iEzsigntemplatedocumentpageHeightpdf);

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentpagePagenumber
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentpagePagenumber()
    {
	//return $this->container['iEzsigntemplatedocumentpagePagenumber'];
        return $this->container['iEzsigntemplatedocumentpagePagenumber'];
    }

    /**
     * Sets iEzsigntemplatedocumentpagePagenumber
     *
     * @param int $iEzsigntemplatedocumentpagePagenumber The page number in the Ezsigntemplatedocument
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentpagePagenumber($iEzsigntemplatedocumentpagePagenumber)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentpagePagenumber)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentpagePagenumber cannot be null');
        //}

	//if (($iEzsigntemplatedocumentpagePagenumber < 1)) {
        if (($iEzsigntemplatedocumentpagePagenumber < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentpagePagenumber when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsigntemplatedocumentpagePagenumber)?'null':'"'.$iEzsigntemplatedocumentpagePagenumber.'"').' for iEzsigntemplatedocumentpagePagenumber when calling EzsigntemplatedocumentpageResponseCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentpagePagenumber'] = $iEzsigntemplatedocumentpagePagenumber;
        $this->container['iEzsigntemplatedocumentpagePagenumber'] = (is_null($iEzsigntemplatedocumentpagePagenumber) ? null : (int) $iEzsigntemplatedocumentpagePagenumber);

        return $this;
    }

    /**
     * Gets sComputedImageurl
     *
     * @return string
     */
    public function getSComputedImageurl()
    {
	//return $this->container['sComputedImageurl'];
        return is_null($this->container['sComputedImageurl']) ? null : trim($this->container['sComputedImageurl']);
    }

    /**
     * Sets sComputedImageurl
     *
     * @param string $sComputedImageurl The Url to the Ezsigntemplatedocumentpage's rasterized image.  Url will expire after 5 minutes.
     *
     * @return self
     */
    public function setSComputedImageurl($sComputedImageurl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sComputedImageurl)) {
            //throw new \InvalidArgumentException('non-nullable sComputedImageurl cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sComputedImageurl'] = $sComputedImageurl;
        $this->container['sComputedImageurl'] = (is_null($sComputedImageurl) ? null : trim((string) $sComputedImageurl));

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


