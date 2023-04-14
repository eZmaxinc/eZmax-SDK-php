<?php
/**
 * EzsignannotationResponse
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
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
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
 * EzsignannotationResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsignannotation Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignannotationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignannotation-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignannotationID' => 'int',
        'fkiEzsigndocumentID' => 'int',
        'eEzsignannotationHorizontalalignment' => '\eZmaxAPI\Model\EnumHorizontalalignment',
        'eEzsignannotationVerticalalignment' => '\eZmaxAPI\Model\EnumVerticalalignment',
        'eEzsignannotationType' => '\eZmaxAPI\Model\FieldEEzsignannotationType',
        'iEzsignannotationX' => 'int',
        'iEzsignannotationY' => 'int',
        'iEzsignannotationWidth' => 'int',
        'iEzsignannotationHeight' => 'int',
        'sEzsignannotationText' => 'string',
        'iEzsignpagePagenumber' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignannotationID' => null,
        'fkiEzsigndocumentID' => null,
        'eEzsignannotationHorizontalalignment' => null,
        'eEzsignannotationVerticalalignment' => null,
        'eEzsignannotationType' => null,
        'iEzsignannotationX' => null,
        'iEzsignannotationY' => null,
        'iEzsignannotationWidth' => null,
        'iEzsignannotationHeight' => null,
        'sEzsignannotationText' => null,
        'iEzsignpagePagenumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignannotationID' => false,
		'fkiEzsigndocumentID' => false,
		'eEzsignannotationHorizontalalignment' => false,
		'eEzsignannotationVerticalalignment' => false,
		'eEzsignannotationType' => false,
		'iEzsignannotationX' => false,
		'iEzsignannotationY' => false,
		'iEzsignannotationWidth' => false,
		'iEzsignannotationHeight' => false,
		'sEzsignannotationText' => false,
		'iEzsignpagePagenumber' => false
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
        'pkiEzsignannotationID' => 'pkiEzsignannotationID',
        'fkiEzsigndocumentID' => 'fkiEzsigndocumentID',
        'eEzsignannotationHorizontalalignment' => 'eEzsignannotationHorizontalalignment',
        'eEzsignannotationVerticalalignment' => 'eEzsignannotationVerticalalignment',
        'eEzsignannotationType' => 'eEzsignannotationType',
        'iEzsignannotationX' => 'iEzsignannotationX',
        'iEzsignannotationY' => 'iEzsignannotationY',
        'iEzsignannotationWidth' => 'iEzsignannotationWidth',
        'iEzsignannotationHeight' => 'iEzsignannotationHeight',
        'sEzsignannotationText' => 'sEzsignannotationText',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignannotationID' => 'setPkiEzsignannotationID',
        'fkiEzsigndocumentID' => 'setFkiEzsigndocumentID',
        'eEzsignannotationHorizontalalignment' => 'setEEzsignannotationHorizontalalignment',
        'eEzsignannotationVerticalalignment' => 'setEEzsignannotationVerticalalignment',
        'eEzsignannotationType' => 'setEEzsignannotationType',
        'iEzsignannotationX' => 'setIEzsignannotationX',
        'iEzsignannotationY' => 'setIEzsignannotationY',
        'iEzsignannotationWidth' => 'setIEzsignannotationWidth',
        'iEzsignannotationHeight' => 'setIEzsignannotationHeight',
        'sEzsignannotationText' => 'setSEzsignannotationText',
        'iEzsignpagePagenumber' => 'setIEzsignpagePagenumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignannotationID' => 'getPkiEzsignannotationID',
        'fkiEzsigndocumentID' => 'getFkiEzsigndocumentID',
        'eEzsignannotationHorizontalalignment' => 'getEEzsignannotationHorizontalalignment',
        'eEzsignannotationVerticalalignment' => 'getEEzsignannotationVerticalalignment',
        'eEzsignannotationType' => 'getEEzsignannotationType',
        'iEzsignannotationX' => 'getIEzsignannotationX',
        'iEzsignannotationY' => 'getIEzsignannotationY',
        'iEzsignannotationWidth' => 'getIEzsignannotationWidth',
        'iEzsignannotationHeight' => 'getIEzsignannotationHeight',
        'sEzsignannotationText' => 'getSEzsignannotationText',
        'iEzsignpagePagenumber' => 'getIEzsignpagePagenumber'
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
        $this->setIfExists('pkiEzsignannotationID', $data ?? [], null);
        $this->setIfExists('fkiEzsigndocumentID', $data ?? [], null);
        $this->setIfExists('eEzsignannotationHorizontalalignment', $data ?? [], null);
        $this->setIfExists('eEzsignannotationVerticalalignment', $data ?? [], null);
        $this->setIfExists('eEzsignannotationType', $data ?? [], null);
        $this->setIfExists('iEzsignannotationX', $data ?? [], null);
        $this->setIfExists('iEzsignannotationY', $data ?? [], null);
        $this->setIfExists('iEzsignannotationWidth', $data ?? [], null);
        $this->setIfExists('iEzsignannotationHeight', $data ?? [], null);
        $this->setIfExists('sEzsignannotationText', $data ?? [], null);
        $this->setIfExists('iEzsignpagePagenumber', $data ?? [], null);
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

        if ($this->container['pkiEzsignannotationID'] === null) {
            $invalidProperties[] = "'pkiEzsignannotationID' can't be null";
        }
        if ($this->container['fkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigndocumentID' can't be null";
        }
        if (($this->container['fkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['eEzsignannotationType'] === null) {
            $invalidProperties[] = "'eEzsignannotationType' can't be null";
        }
        if ($this->container['iEzsignannotationX'] === null) {
            $invalidProperties[] = "'iEzsignannotationX' can't be null";
        }
        if (($this->container['iEzsignannotationX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignannotationX', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignannotationY'] === null) {
            $invalidProperties[] = "'iEzsignannotationY' can't be null";
        }
        if (($this->container['iEzsignannotationY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignannotationY', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iEzsignannotationWidth']) && ($this->container['iEzsignannotationWidth'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignannotationWidth', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iEzsignannotationHeight']) && ($this->container['iEzsignannotationHeight'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignannotationHeight', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsignpagePagenumber' can't be null";
        }
        if (($this->container['iEzsignpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsignpagePagenumber', must be bigger than or equal to 1.";
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
     * Gets pkiEzsignannotationID
     *
     * @return int
     */
    public function getPkiEzsignannotationID()
    {
        return $this->container['pkiEzsignannotationID'];
    }

    /**
     * Sets pkiEzsignannotationID
     *
     * @param int $pkiEzsignannotationID The unique ID of the Ezsignannotation
     *
     * @return self
     */
    public function setPkiEzsignannotationID($pkiEzsignannotationID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignannotationID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignannotationID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignannotationID'] = $pkiEzsignannotationID;
        $this->container['pkiEzsignannotationID'] = (is_null($pkiEzsignannotationID) ? null : (int) $pkiEzsignannotationID);

        return $this;
    }

    /**
     * Gets fkiEzsigndocumentID
     *
     * @return int
     */
    public function getFkiEzsigndocumentID()
    {
        return $this->container['fkiEzsigndocumentID'];
    }

    /**
     * Sets fkiEzsigndocumentID
     *
     * @param int $fkiEzsigndocumentID The unique ID of the Ezsigndocument
     *
     * @return self
     */
    public function setFkiEzsigndocumentID($fkiEzsigndocumentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigndocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigndocumentID cannot be null');
        //}

//        if (($fkiEzsigndocumentID < 0)) {
        if (($fkiEzsigndocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigndocumentID when calling EzsignannotationResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigndocumentID'] = $fkiEzsigndocumentID;
        $this->container['fkiEzsigndocumentID'] = (is_null($fkiEzsigndocumentID) ? null : (int) $fkiEzsigndocumentID);

        return $this;
    }

    /**
     * Gets eEzsignannotationHorizontalalignment
     *
     * @return \eZmaxAPI\Model\EnumHorizontalalignment|null
     */
    public function getEEzsignannotationHorizontalalignment()
    {
        return $this->container['eEzsignannotationHorizontalalignment'];
    }

    /**
     * Sets eEzsignannotationHorizontalalignment
     *
     * @param \eZmaxAPI\Model\EnumHorizontalalignment|null $eEzsignannotationHorizontalalignment eEzsignannotationHorizontalalignment
     *
     * @return self
     */
    public function setEEzsignannotationHorizontalalignment($eEzsignannotationHorizontalalignment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignannotationHorizontalalignment)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignannotationHorizontalalignment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignannotationHorizontalalignment'] = $eEzsignannotationHorizontalalignment;
        $this->container['eEzsignannotationHorizontalalignment'] = $eEzsignannotationHorizontalalignment;

        return $this;
    }

    /**
     * Gets eEzsignannotationVerticalalignment
     *
     * @return \eZmaxAPI\Model\EnumVerticalalignment|null
     */
    public function getEEzsignannotationVerticalalignment()
    {
        return $this->container['eEzsignannotationVerticalalignment'];
    }

    /**
     * Sets eEzsignannotationVerticalalignment
     *
     * @param \eZmaxAPI\Model\EnumVerticalalignment|null $eEzsignannotationVerticalalignment eEzsignannotationVerticalalignment
     *
     * @return self
     */
    public function setEEzsignannotationVerticalalignment($eEzsignannotationVerticalalignment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignannotationVerticalalignment)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignannotationVerticalalignment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignannotationVerticalalignment'] = $eEzsignannotationVerticalalignment;
        $this->container['eEzsignannotationVerticalalignment'] = $eEzsignannotationVerticalalignment;

        return $this;
    }

    /**
     * Gets eEzsignannotationType
     *
     * @return \eZmaxAPI\Model\FieldEEzsignannotationType
     */
    public function getEEzsignannotationType()
    {
        return $this->container['eEzsignannotationType'];
    }

    /**
     * Sets eEzsignannotationType
     *
     * @param \eZmaxAPI\Model\FieldEEzsignannotationType $eEzsignannotationType eEzsignannotationType
     *
     * @return self
     */
    public function setEEzsignannotationType($eEzsignannotationType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignannotationType)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignannotationType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignannotationType'] = $eEzsignannotationType;
        $this->container['eEzsignannotationType'] = $eEzsignannotationType;

        return $this;
    }

    /**
     * Gets iEzsignannotationX
     *
     * @return int
     */
    public function getIEzsignannotationX()
    {
        return $this->container['iEzsignannotationX'];
    }

    /**
     * Sets iEzsignannotationX
     *
     * @param int $iEzsignannotationX The X coordinate (Horizontal) where to put the Ezsignannotation on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignannotation 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignannotationX($iEzsignannotationX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignannotationX)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignannotationX cannot be null');
        //}

//        if (($iEzsignannotationX < 0)) {
        if (($iEzsignannotationX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignannotationX when calling EzsignannotationResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignannotationX'] = $iEzsignannotationX;
        $this->container['iEzsignannotationX'] = (is_null($iEzsignannotationX) ? null : (int) $iEzsignannotationX);

        return $this;
    }

    /**
     * Gets iEzsignannotationY
     *
     * @return int
     */
    public function getIEzsignannotationY()
    {
        return $this->container['iEzsignannotationY'];
    }

    /**
     * Sets iEzsignannotationY
     *
     * @param int $iEzsignannotationY The Y coordinate (Vertical) where to put the Ezsignannotation on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignannotation 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignannotationY($iEzsignannotationY)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignannotationY)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignannotationY cannot be null');
        //}

//        if (($iEzsignannotationY < 0)) {
        if (($iEzsignannotationY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignannotationY when calling EzsignannotationResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignannotationY'] = $iEzsignannotationY;
        $this->container['iEzsignannotationY'] = (is_null($iEzsignannotationY) ? null : (int) $iEzsignannotationY);

        return $this;
    }

    /**
     * Gets iEzsignannotationWidth
     *
     * @return int|null
     */
    public function getIEzsignannotationWidth()
    {
        return $this->container['iEzsignannotationWidth'];
    }

    /**
     * Sets iEzsignannotationWidth
     *
     * @param int|null $iEzsignannotationWidth The Width of the Ezsignannotation.  Width is calculated at 100dpi (dot per inch). So for example, if you want to have the width of the Ezsignannotation to be 3 inches, you would use \"300\" for the Width.
     *
     * @return self
     */
    public function setIEzsignannotationWidth($iEzsignannotationWidth)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignannotationWidth)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignannotationWidth cannot be null');
        //}

//        if (($iEzsignannotationWidth < 0)) {
        if (!is_null($iEzsignannotationWidth) && ($iEzsignannotationWidth < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignannotationWidth when calling EzsignannotationResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignannotationWidth'] = $iEzsignannotationWidth;
        $this->container['iEzsignannotationWidth'] = (is_null($iEzsignannotationWidth) ? null : (int) $iEzsignannotationWidth);

        return $this;
    }

    /**
     * Gets iEzsignannotationHeight
     *
     * @return int|null
     */
    public function getIEzsignannotationHeight()
    {
        return $this->container['iEzsignannotationHeight'];
    }

    /**
     * Sets iEzsignannotationHeight
     *
     * @param int|null $iEzsignannotationHeight The Height of the Ezsignannotation.  Height is calculated at 100dpi (dot per inch). So for example, if you want to have the height of the Ezsignannotation to be 2 inches, you would use \"200\" for the Height.  This can only be set if eEzsignannotationType is **StrikethroughBlock** or **Text**
     *
     * @return self
     */
    public function setIEzsignannotationHeight($iEzsignannotationHeight)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignannotationHeight)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignannotationHeight cannot be null');
        //}

//        if (($iEzsignannotationHeight < 0)) {
        if (!is_null($iEzsignannotationHeight) && ($iEzsignannotationHeight < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignannotationHeight when calling EzsignannotationResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignannotationHeight'] = $iEzsignannotationHeight;
        $this->container['iEzsignannotationHeight'] = (is_null($iEzsignannotationHeight) ? null : (int) $iEzsignannotationHeight);

        return $this;
    }

    /**
     * Gets sEzsignannotationText
     *
     * @return string|null
     */
    public function getSEzsignannotationText()
    {
        return $this->container['sEzsignannotationText'];
    }

    /**
     * Sets sEzsignannotationText
     *
     * @param string|null $sEzsignannotationText The Text of the Ezsignannotation
     *
     * @return self
     */
    public function setSEzsignannotationText($sEzsignannotationText)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignannotationText)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignannotationText cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignannotationText'] = $sEzsignannotationText;
        $this->container['sEzsignannotationText'] = (is_null($sEzsignannotationText) ? null : (string) $sEzsignannotationText);

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
            throw new \InvalidArgumentException('invalid value for $iEzsignpagePagenumber when calling EzsignannotationResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignpagePagenumber'] = $iEzsignpagePagenumber;
        $this->container['iEzsignpagePagenumber'] = (is_null($iEzsignpagePagenumber) ? null : (int) $iEzsignpagePagenumber);

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

