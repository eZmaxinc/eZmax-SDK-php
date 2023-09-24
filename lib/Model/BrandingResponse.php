<?php
/**
 * BrandingResponse
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
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
 * BrandingResponse Class Doc Comment
 *
 * @category Class
 * @description A Branding Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BrandingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'branding-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiBrandingID' => 'int',
        'fkiEmailID' => 'int',
        'objBrandingDescription' => '\eZmaxAPI\Model\MultilingualBrandingDescription',
        'sBrandingDescriptionX' => 'string',
        'sBrandingName' => 'string',
        'sEmailAddress' => 'string',
        'eBrandingLogo' => '\eZmaxAPI\Model\FieldEBrandingLogo',
        'iBrandingColortext' => 'int',
        'iBrandingColortextlinkbox' => 'int',
        'iBrandingColortextbutton' => 'int',
        'iBrandingColorbackground' => 'int',
        'iBrandingColorbackgroundbutton' => 'int',
        'iBrandingColorbackgroundsmallbox' => 'int',
        'bBrandingIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiBrandingID' => null,
        'fkiEmailID' => null,
        'objBrandingDescription' => null,
        'sBrandingDescriptionX' => null,
        'sBrandingName' => null,
        'sEmailAddress' => null,
        'eBrandingLogo' => null,
        'iBrandingColortext' => null,
        'iBrandingColortextlinkbox' => null,
        'iBrandingColortextbutton' => null,
        'iBrandingColorbackground' => null,
        'iBrandingColorbackgroundbutton' => null,
        'iBrandingColorbackgroundsmallbox' => null,
        'bBrandingIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiBrandingID' => false,
		'fkiEmailID' => false,
		'objBrandingDescription' => false,
		'sBrandingDescriptionX' => false,
		'sBrandingName' => false,
		'sEmailAddress' => false,
		'eBrandingLogo' => false,
		'iBrandingColortext' => false,
		'iBrandingColortextlinkbox' => false,
		'iBrandingColortextbutton' => false,
		'iBrandingColorbackground' => false,
		'iBrandingColorbackgroundbutton' => false,
		'iBrandingColorbackgroundsmallbox' => false,
		'bBrandingIsactive' => false
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
        'pkiBrandingID' => 'pkiBrandingID',
        'fkiEmailID' => 'fkiEmailID',
        'objBrandingDescription' => 'objBrandingDescription',
        'sBrandingDescriptionX' => 'sBrandingDescriptionX',
        'sBrandingName' => 'sBrandingName',
        'sEmailAddress' => 'sEmailAddress',
        'eBrandingLogo' => 'eBrandingLogo',
        'iBrandingColortext' => 'iBrandingColortext',
        'iBrandingColortextlinkbox' => 'iBrandingColortextlinkbox',
        'iBrandingColortextbutton' => 'iBrandingColortextbutton',
        'iBrandingColorbackground' => 'iBrandingColorbackground',
        'iBrandingColorbackgroundbutton' => 'iBrandingColorbackgroundbutton',
        'iBrandingColorbackgroundsmallbox' => 'iBrandingColorbackgroundsmallbox',
        'bBrandingIsactive' => 'bBrandingIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiBrandingID' => 'setPkiBrandingID',
        'fkiEmailID' => 'setFkiEmailID',
        'objBrandingDescription' => 'setObjBrandingDescription',
        'sBrandingDescriptionX' => 'setSBrandingDescriptionX',
        'sBrandingName' => 'setSBrandingName',
        'sEmailAddress' => 'setSEmailAddress',
        'eBrandingLogo' => 'setEBrandingLogo',
        'iBrandingColortext' => 'setIBrandingColortext',
        'iBrandingColortextlinkbox' => 'setIBrandingColortextlinkbox',
        'iBrandingColortextbutton' => 'setIBrandingColortextbutton',
        'iBrandingColorbackground' => 'setIBrandingColorbackground',
        'iBrandingColorbackgroundbutton' => 'setIBrandingColorbackgroundbutton',
        'iBrandingColorbackgroundsmallbox' => 'setIBrandingColorbackgroundsmallbox',
        'bBrandingIsactive' => 'setBBrandingIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiBrandingID' => 'getPkiBrandingID',
        'fkiEmailID' => 'getFkiEmailID',
        'objBrandingDescription' => 'getObjBrandingDescription',
        'sBrandingDescriptionX' => 'getSBrandingDescriptionX',
        'sBrandingName' => 'getSBrandingName',
        'sEmailAddress' => 'getSEmailAddress',
        'eBrandingLogo' => 'getEBrandingLogo',
        'iBrandingColortext' => 'getIBrandingColortext',
        'iBrandingColortextlinkbox' => 'getIBrandingColortextlinkbox',
        'iBrandingColortextbutton' => 'getIBrandingColortextbutton',
        'iBrandingColorbackground' => 'getIBrandingColorbackground',
        'iBrandingColorbackgroundbutton' => 'getIBrandingColorbackgroundbutton',
        'iBrandingColorbackgroundsmallbox' => 'getIBrandingColorbackgroundsmallbox',
        'bBrandingIsactive' => 'getBBrandingIsactive'
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
        $this->setIfExists('pkiBrandingID', $data ?? [], null);
        $this->setIfExists('fkiEmailID', $data ?? [], null);
        $this->setIfExists('objBrandingDescription', $data ?? [], null);
        $this->setIfExists('sBrandingDescriptionX', $data ?? [], null);
        $this->setIfExists('sBrandingName', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('eBrandingLogo', $data ?? [], null);
        $this->setIfExists('iBrandingColortext', $data ?? [], null);
        $this->setIfExists('iBrandingColortextlinkbox', $data ?? [], null);
        $this->setIfExists('iBrandingColortextbutton', $data ?? [], null);
        $this->setIfExists('iBrandingColorbackground', $data ?? [], null);
        $this->setIfExists('iBrandingColorbackgroundbutton', $data ?? [], null);
        $this->setIfExists('iBrandingColorbackgroundsmallbox', $data ?? [], null);
        $this->setIfExists('bBrandingIsactive', $data ?? [], null);
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

        if ($this->container['pkiBrandingID'] === null) {
            $invalidProperties[] = "'pkiBrandingID' can't be null";
        }
        if (($this->container['pkiBrandingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiBrandingID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEmailID']) && ($this->container['fkiEmailID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiEmailID', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiEmailID']) && ($this->container['fkiEmailID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEmailID', must be bigger than or equal to 1.";
        }

        if ($this->container['objBrandingDescription'] === null) {
            $invalidProperties[] = "'objBrandingDescription' can't be null";
        }
        if ($this->container['sBrandingDescriptionX'] === null) {
            $invalidProperties[] = "'sBrandingDescriptionX' can't be null";
        }
//        if (!is_null($this->container['sBrandingName']) && !preg_match("/^.{0,55}$/", $this->container['sBrandingName'])) {
        if (!is_null($this->container['sBrandingName']) && !preg_match("/^.{0,55}$/", $this->container['sBrandingName'])) {
            $invalidProperties[] = "invalid value for 'sBrandingName', must be conform to the pattern /^.{0,55}$/.";
        }

        if ($this->container['eBrandingLogo'] === null) {
            $invalidProperties[] = "'eBrandingLogo' can't be null";
        }
        if ($this->container['iBrandingColortext'] === null) {
            $invalidProperties[] = "'iBrandingColortext' can't be null";
        }
        if (($this->container['iBrandingColortext'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortext', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColortext'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortext', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColortextlinkbox'] === null) {
            $invalidProperties[] = "'iBrandingColortextlinkbox' can't be null";
        }
        if (($this->container['iBrandingColortextlinkbox'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextlinkbox', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColortextlinkbox'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextlinkbox', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColortextbutton'] === null) {
            $invalidProperties[] = "'iBrandingColortextbutton' can't be null";
        }
        if (($this->container['iBrandingColortextbutton'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextbutton', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColortextbutton'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColortextbutton', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColorbackground'] === null) {
            $invalidProperties[] = "'iBrandingColorbackground' can't be null";
        }
        if (($this->container['iBrandingColorbackground'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackground', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColorbackground'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackground', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColorbackgroundbutton'] === null) {
            $invalidProperties[] = "'iBrandingColorbackgroundbutton' can't be null";
        }
        if (($this->container['iBrandingColorbackgroundbutton'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundbutton', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColorbackgroundbutton'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundbutton', must be bigger than or equal to 0.";
        }

        if ($this->container['iBrandingColorbackgroundsmallbox'] === null) {
            $invalidProperties[] = "'iBrandingColorbackgroundsmallbox' can't be null";
        }
        if (($this->container['iBrandingColorbackgroundsmallbox'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundsmallbox', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColorbackgroundsmallbox'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColorbackgroundsmallbox', must be bigger than or equal to 0.";
        }

        if ($this->container['bBrandingIsactive'] === null) {
            $invalidProperties[] = "'bBrandingIsactive' can't be null";
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
     * Gets pkiBrandingID
     *
     * @return int
     */
    public function getPkiBrandingID()
    {
        return $this->container['pkiBrandingID'];
    }

    /**
     * Sets pkiBrandingID
     *
     * @param int $pkiBrandingID The unique ID of the Branding
     *
     * @return self
     */
    public function setPkiBrandingID($pkiBrandingID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiBrandingID)) {
            //throw new \InvalidArgumentException('non-nullable pkiBrandingID cannot be null');
        //}

//        if (($pkiBrandingID < 0)) {
        if (($pkiBrandingID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiBrandingID when calling BrandingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiBrandingID'] = $pkiBrandingID;
        $this->container['pkiBrandingID'] = (is_null($pkiBrandingID) ? null : (int) $pkiBrandingID);

        return $this;
    }

    /**
     * Gets fkiEmailID
     *
     * @return int|null
     */
    public function getFkiEmailID()
    {
        return $this->container['fkiEmailID'];
    }

    /**
     * Sets fkiEmailID
     *
     * @param int|null $fkiEmailID The unique ID of the Email
     *
     * @return self
     */
    public function setFkiEmailID($fkiEmailID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEmailID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEmailID cannot be null');
        //}

//        if (($fkiEmailID > 16777215)) {
        if (!is_null($fkiEmailID) && ($fkiEmailID > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $fkiEmailID when calling BrandingResponse., must be smaller than or equal to 16777215.');
        }
//        if (($fkiEmailID < 1)) {
        if (!is_null($fkiEmailID) && ($fkiEmailID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEmailID when calling BrandingResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEmailID'] = $fkiEmailID;
        $this->container['fkiEmailID'] = (is_null($fkiEmailID) ? null : (int) $fkiEmailID);

        return $this;
    }

    /**
     * Gets objBrandingDescription
     *
     * @return \eZmaxAPI\Model\MultilingualBrandingDescription
     */
    public function getObjBrandingDescription()
    {
        return $this->container['objBrandingDescription'];
    }

    /**
     * Sets objBrandingDescription
     *
     * @param \eZmaxAPI\Model\MultilingualBrandingDescription $objBrandingDescription objBrandingDescription
     *
     * @return self
     */
    public function setObjBrandingDescription($objBrandingDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objBrandingDescription)) {
            //throw new \InvalidArgumentException('non-nullable objBrandingDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objBrandingDescription'] = $objBrandingDescription;
        $this->container['objBrandingDescription'] = $objBrandingDescription;

        return $this;
    }

    /**
     * Gets sBrandingDescriptionX
     *
     * @return string
     */
    public function getSBrandingDescriptionX()
    {
        return $this->container['sBrandingDescriptionX'];
    }

    /**
     * Sets sBrandingDescriptionX
     *
     * @param string $sBrandingDescriptionX The Description of the Branding in the language of the requester
     *
     * @return self
     */
    public function setSBrandingDescriptionX($sBrandingDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBrandingDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sBrandingDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBrandingDescriptionX'] = $sBrandingDescriptionX;
        $this->container['sBrandingDescriptionX'] = (is_null($sBrandingDescriptionX) ? null : (string) $sBrandingDescriptionX);

        return $this;
    }

    /**
     * Gets sBrandingName
     *
     * @return string|null
     */
    public function getSBrandingName()
    {
        return $this->container['sBrandingName'];
    }

    /**
     * Sets sBrandingName
     *
     * @param string|null $sBrandingName The name of the Branding  This value will only be set if you wish to overwrite the default name. If you want to keep the default name, leave this property empty
     *
     * @return self
     */
    public function setSBrandingName($sBrandingName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBrandingName)) {
            //throw new \InvalidArgumentException('non-nullable sBrandingName cannot be null');
        //}

//        if ((!preg_match("/^.{0,55}$/", $sBrandingName))) {
        if (!is_null($sBrandingName) && (!preg_match("/^.{0,55}$/", $sBrandingName))) {
            throw new \InvalidArgumentException("invalid value for \$sBrandingName when calling BrandingResponse., must conform to the pattern /^.{0,55}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBrandingName'] = $sBrandingName;
        $this->container['sBrandingName'] = (is_null($sBrandingName) ? null : (string) $sBrandingName);

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string|null
     */
    public function getSEmailAddress()
    {
        return $this->container['sEmailAddress'];
    }

    /**
     * Sets sEmailAddress
     *
     * @param string|null $sEmailAddress The email address.
     *
     * @return self
     */
    public function setSEmailAddress($sEmailAddress)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : (string) $sEmailAddress);

        return $this;
    }

    /**
     * Gets eBrandingLogo
     *
     * @return \eZmaxAPI\Model\FieldEBrandingLogo
     */
    public function getEBrandingLogo()
    {
        return $this->container['eBrandingLogo'];
    }

    /**
     * Sets eBrandingLogo
     *
     * @param \eZmaxAPI\Model\FieldEBrandingLogo $eBrandingLogo eBrandingLogo
     *
     * @return self
     */
    public function setEBrandingLogo($eBrandingLogo)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eBrandingLogo)) {
            //throw new \InvalidArgumentException('non-nullable eBrandingLogo cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eBrandingLogo'] = $eBrandingLogo;
        $this->container['eBrandingLogo'] = $eBrandingLogo;

        return $this;
    }

    /**
     * Gets iBrandingColortext
     *
     * @return int
     */
    public function getIBrandingColortext()
    {
        return $this->container['iBrandingColortext'];
    }

    /**
     * Sets iBrandingColortext
     *
     * @param int $iBrandingColortext The color of the text. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColortext($iBrandingColortext)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iBrandingColortext)) {
            //throw new \InvalidArgumentException('non-nullable iBrandingColortext cannot be null');
        //}

//        if (($iBrandingColortext > 16777215)) {
        if (($iBrandingColortext > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortext when calling BrandingResponse., must be smaller than or equal to 16777215.');
        }
//        if (($iBrandingColortext < 0)) {
        if (($iBrandingColortext < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortext when calling BrandingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColortext'] = $iBrandingColortext;
        $this->container['iBrandingColortext'] = (is_null($iBrandingColortext) ? null : (int) $iBrandingColortext);

        return $this;
    }

    /**
     * Gets iBrandingColortextlinkbox
     *
     * @return int
     */
    public function getIBrandingColortextlinkbox()
    {
        return $this->container['iBrandingColortextlinkbox'];
    }

    /**
     * Sets iBrandingColortextlinkbox
     *
     * @param int $iBrandingColortextlinkbox The color of the text in the link box. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColortextlinkbox($iBrandingColortextlinkbox)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iBrandingColortextlinkbox)) {
            //throw new \InvalidArgumentException('non-nullable iBrandingColortextlinkbox cannot be null');
        //}

//        if (($iBrandingColortextlinkbox > 16777215)) {
        if (($iBrandingColortextlinkbox > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextlinkbox when calling BrandingResponse., must be smaller than or equal to 16777215.');
        }
//        if (($iBrandingColortextlinkbox < 0)) {
        if (($iBrandingColortextlinkbox < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextlinkbox when calling BrandingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColortextlinkbox'] = $iBrandingColortextlinkbox;
        $this->container['iBrandingColortextlinkbox'] = (is_null($iBrandingColortextlinkbox) ? null : (int) $iBrandingColortextlinkbox);

        return $this;
    }

    /**
     * Gets iBrandingColortextbutton
     *
     * @return int
     */
    public function getIBrandingColortextbutton()
    {
        return $this->container['iBrandingColortextbutton'];
    }

    /**
     * Sets iBrandingColortextbutton
     *
     * @param int $iBrandingColortextbutton The color of the text in the button. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColortextbutton($iBrandingColortextbutton)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iBrandingColortextbutton)) {
            //throw new \InvalidArgumentException('non-nullable iBrandingColortextbutton cannot be null');
        //}

//        if (($iBrandingColortextbutton > 16777215)) {
        if (($iBrandingColortextbutton > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextbutton when calling BrandingResponse., must be smaller than or equal to 16777215.');
        }
//        if (($iBrandingColortextbutton < 0)) {
        if (($iBrandingColortextbutton < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColortextbutton when calling BrandingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColortextbutton'] = $iBrandingColortextbutton;
        $this->container['iBrandingColortextbutton'] = (is_null($iBrandingColortextbutton) ? null : (int) $iBrandingColortextbutton);

        return $this;
    }

    /**
     * Gets iBrandingColorbackground
     *
     * @return int
     */
    public function getIBrandingColorbackground()
    {
        return $this->container['iBrandingColorbackground'];
    }

    /**
     * Sets iBrandingColorbackground
     *
     * @param int $iBrandingColorbackground The color of the background. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColorbackground($iBrandingColorbackground)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iBrandingColorbackground)) {
            //throw new \InvalidArgumentException('non-nullable iBrandingColorbackground cannot be null');
        //}

//        if (($iBrandingColorbackground > 16777215)) {
        if (($iBrandingColorbackground > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackground when calling BrandingResponse., must be smaller than or equal to 16777215.');
        }
//        if (($iBrandingColorbackground < 0)) {
        if (($iBrandingColorbackground < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackground when calling BrandingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColorbackground'] = $iBrandingColorbackground;
        $this->container['iBrandingColorbackground'] = (is_null($iBrandingColorbackground) ? null : (int) $iBrandingColorbackground);

        return $this;
    }

    /**
     * Gets iBrandingColorbackgroundbutton
     *
     * @return int
     */
    public function getIBrandingColorbackgroundbutton()
    {
        return $this->container['iBrandingColorbackgroundbutton'];
    }

    /**
     * Sets iBrandingColorbackgroundbutton
     *
     * @param int $iBrandingColorbackgroundbutton The color of the background of the button. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColorbackgroundbutton($iBrandingColorbackgroundbutton)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iBrandingColorbackgroundbutton)) {
            //throw new \InvalidArgumentException('non-nullable iBrandingColorbackgroundbutton cannot be null');
        //}

//        if (($iBrandingColorbackgroundbutton > 16777215)) {
        if (($iBrandingColorbackgroundbutton > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundbutton when calling BrandingResponse., must be smaller than or equal to 16777215.');
        }
//        if (($iBrandingColorbackgroundbutton < 0)) {
        if (($iBrandingColorbackgroundbutton < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundbutton when calling BrandingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColorbackgroundbutton'] = $iBrandingColorbackgroundbutton;
        $this->container['iBrandingColorbackgroundbutton'] = (is_null($iBrandingColorbackgroundbutton) ? null : (int) $iBrandingColorbackgroundbutton);

        return $this;
    }

    /**
     * Gets iBrandingColorbackgroundsmallbox
     *
     * @return int
     */
    public function getIBrandingColorbackgroundsmallbox()
    {
        return $this->container['iBrandingColorbackgroundsmallbox'];
    }

    /**
     * Sets iBrandingColorbackgroundsmallbox
     *
     * @param int $iBrandingColorbackgroundsmallbox The color of the background of the small box. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColorbackgroundsmallbox($iBrandingColorbackgroundsmallbox)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iBrandingColorbackgroundsmallbox)) {
            //throw new \InvalidArgumentException('non-nullable iBrandingColorbackgroundsmallbox cannot be null');
        //}

//        if (($iBrandingColorbackgroundsmallbox > 16777215)) {
        if (($iBrandingColorbackgroundsmallbox > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundsmallbox when calling BrandingResponse., must be smaller than or equal to 16777215.');
        }
//        if (($iBrandingColorbackgroundsmallbox < 0)) {
        if (($iBrandingColorbackgroundsmallbox < 0)) {
            throw new \InvalidArgumentException('invalid value for $iBrandingColorbackgroundsmallbox when calling BrandingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColorbackgroundsmallbox'] = $iBrandingColorbackgroundsmallbox;
        $this->container['iBrandingColorbackgroundsmallbox'] = (is_null($iBrandingColorbackgroundsmallbox) ? null : (int) $iBrandingColorbackgroundsmallbox);

        return $this;
    }

    /**
     * Gets bBrandingIsactive
     *
     * @return bool
     */
    public function getBBrandingIsactive()
    {
        return $this->container['bBrandingIsactive'];
    }

    /**
     * Sets bBrandingIsactive
     *
     * @param bool $bBrandingIsactive Whether the Branding is active or not
     *
     * @return self
     */
    public function setBBrandingIsactive($bBrandingIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bBrandingIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bBrandingIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bBrandingIsactive'] = $bBrandingIsactive;
        $this->container['bBrandingIsactive'] = (is_null($bBrandingIsactive) ? null : (bool) $bBrandingIsactive);

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


