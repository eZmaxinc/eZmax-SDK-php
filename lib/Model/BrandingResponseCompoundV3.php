<?php
/**
 * BrandingResponseCompoundV3
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
 * BrandingResponseCompoundV3 Class Doc Comment
 *
 * @category Class
 * @description A Branding Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BrandingResponseCompoundV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'branding-ResponseCompoundV3';

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
        'eBrandingAlignlogo' => '\eZmaxAPI\Model\FieldEBrandingAlignlogo',
        'iBrandingColor' => 'int',
        'bBrandingIsactive' => 'bool',
        'sBrandingLogourl' => 'string',
        'sBrandingLogoemailurl' => 'string',
        'sBrandingLogointerfaceurl' => 'string'
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
        'eBrandingAlignlogo' => null,
        'iBrandingColor' => null,
        'bBrandingIsactive' => null,
        'sBrandingLogourl' => null,
        'sBrandingLogoemailurl' => null,
        'sBrandingLogointerfaceurl' => null
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
		'eBrandingAlignlogo' => false,
		'iBrandingColor' => false,
		'bBrandingIsactive' => false,
		'sBrandingLogourl' => false,
		'sBrandingLogoemailurl' => false,
		'sBrandingLogointerfaceurl' => false
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
        'eBrandingAlignlogo' => 'eBrandingAlignlogo',
        'iBrandingColor' => 'iBrandingColor',
        'bBrandingIsactive' => 'bBrandingIsactive',
        'sBrandingLogourl' => 'sBrandingLogourl',
        'sBrandingLogoemailurl' => 'sBrandingLogoemailurl',
        'sBrandingLogointerfaceurl' => 'sBrandingLogointerfaceurl'
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
        'eBrandingAlignlogo' => 'setEBrandingAlignlogo',
        'iBrandingColor' => 'setIBrandingColor',
        'bBrandingIsactive' => 'setBBrandingIsactive',
        'sBrandingLogourl' => 'setSBrandingLogourl',
        'sBrandingLogoemailurl' => 'setSBrandingLogoemailurl',
        'sBrandingLogointerfaceurl' => 'setSBrandingLogointerfaceurl'
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
        'eBrandingAlignlogo' => 'getEBrandingAlignlogo',
        'iBrandingColor' => 'getIBrandingColor',
        'bBrandingIsactive' => 'getBBrandingIsactive',
        'sBrandingLogourl' => 'getSBrandingLogourl',
        'sBrandingLogoemailurl' => 'getSBrandingLogoemailurl',
        'sBrandingLogointerfaceurl' => 'getSBrandingLogointerfaceurl'
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
        $this->setIfExists('eBrandingAlignlogo', $data ?? [], null);
        $this->setIfExists('iBrandingColor', $data ?? [], null);
        $this->setIfExists('bBrandingIsactive', $data ?? [], null);
        $this->setIfExists('sBrandingLogourl', $data ?? [], null);
        $this->setIfExists('sBrandingLogoemailurl', $data ?? [], null);
        $this->setIfExists('sBrandingLogointerfaceurl', $data ?? [], null);
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
	//if (!is_null($this->container['sBrandingName']) && !preg_match("/^.{0,55}$/", $this->container['sBrandingName'])) {
        if (!is_null($this->container['sBrandingName']) && !preg_match("/(*UTF8)^.{0,55}$/", $this->container['sBrandingName'])) {
            $invalidProperties[] = "invalid value for 'sBrandingName', must be conform to the pattern /^.{0,55}$/.";
        }

	//if (!is_null($this->container['sEmailAddress']) && !preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
        if (!is_null($this->container['sEmailAddress']) && !preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
            $invalidProperties[] = "invalid value for 'sEmailAddress', must be conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.";
        }

        if ($this->container['eBrandingLogo'] === null) {
            $invalidProperties[] = "'eBrandingLogo' can't be null";
        }
        if ($this->container['eBrandingAlignlogo'] === null) {
            $invalidProperties[] = "'eBrandingAlignlogo' can't be null";
        }
        if ($this->container['iBrandingColor'] === null) {
            $invalidProperties[] = "'iBrandingColor' can't be null";
        }
        if (($this->container['iBrandingColor'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'iBrandingColor', must be smaller than or equal to 16777215.";
        }

        if (($this->container['iBrandingColor'] < 0)) {
            $invalidProperties[] = "invalid value for 'iBrandingColor', must be bigger than or equal to 0.";
        }

        if ($this->container['bBrandingIsactive'] === null) {
            $invalidProperties[] = "'bBrandingIsactive' can't be null";
        }
	//if (!is_null($this->container['sBrandingLogourl']) && !preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sBrandingLogourl'])) {
        if (!is_null($this->container['sBrandingLogourl']) && !preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sBrandingLogourl'])) {
            $invalidProperties[] = "invalid value for 'sBrandingLogourl', must be conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.";
        }

	//if (!is_null($this->container['sBrandingLogoemailurl']) && !preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sBrandingLogoemailurl'])) {
        if (!is_null($this->container['sBrandingLogoemailurl']) && !preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sBrandingLogoemailurl'])) {
            $invalidProperties[] = "invalid value for 'sBrandingLogoemailurl', must be conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.";
        }

	//if (!is_null($this->container['sBrandingLogointerfaceurl']) && !preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sBrandingLogointerfaceurl'])) {
        if (!is_null($this->container['sBrandingLogointerfaceurl']) && !preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sBrandingLogointerfaceurl'])) {
            $invalidProperties[] = "invalid value for 'sBrandingLogointerfaceurl', must be conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.";
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
	//return $this->container['pkiBrandingID'];
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

	//if (($pkiBrandingID < 0)) {
        if (($pkiBrandingID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiBrandingID when calling BrandingResponseCompoundV3., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiBrandingID)?'null':'"'.$pkiBrandingID.'"').' for pkiBrandingID when calling BrandingResponseCompoundV3., must be bigger than or equal to 0.');
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
	//return $this->container['fkiEmailID'];
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

	//if (($fkiEmailID > 16777215)) {
        if (!is_null($fkiEmailID) && ($fkiEmailID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEmailID when calling BrandingResponseCompoundV3., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEmailID)?'null':'"'.$fkiEmailID.'"').' for fkiEmailID when calling BrandingResponseCompoundV3., must be smaller than or equal to 16777215.');
        }
	//if (($fkiEmailID < 1)) {
        if (!is_null($fkiEmailID) && ($fkiEmailID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEmailID when calling BrandingResponseCompoundV3., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEmailID)?'null':'"'.$fkiEmailID.'"').' for fkiEmailID when calling BrandingResponseCompoundV3., must be bigger than or equal to 1.');
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
	//return $this->container['objBrandingDescription'];
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
	//return $this->container['sBrandingDescriptionX'];
        return is_null($this->container['sBrandingDescriptionX']) ? null : trim($this->container['sBrandingDescriptionX']);
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
        $this->container['sBrandingDescriptionX'] = (is_null($sBrandingDescriptionX) ? null : trim((string) $sBrandingDescriptionX));

        return $this;
    }

    /**
     * Gets sBrandingName
     *
     * @return string|null
     */
    public function getSBrandingName()
    {
	//return $this->container['sBrandingName'];
        return is_null($this->container['sBrandingName']) ? null : trim($this->container['sBrandingName']);
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

	//if ((!preg_match("/^.{0,55}$/", ObjectSerializer::toString($sBrandingName)))) {
        if (!is_null($sBrandingName) && (!preg_match("/(*UTF8)^.{0,55}$/", ObjectSerializer::toString($sBrandingName)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sBrandingName when calling BrandingResponseCompoundV3., must conform to the pattern /^.{0,55}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sBrandingName)?'null':'"'.$sBrandingName.'"')." for sBrandingName when calling BrandingResponseCompoundV3., must conform to the pattern /^.{0,55}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBrandingName'] = $sBrandingName;
        $this->container['sBrandingName'] = (is_null($sBrandingName) ? null : trim((string) $sBrandingName));

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string|null
     */
    public function getSEmailAddress()
    {
	//return $this->container['sEmailAddress'];
        return is_null($this->container['sEmailAddress']) ? null : trim($this->container['sEmailAddress']);
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

	//if ((!preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
        if (!is_null($sEmailAddress) && (!preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sEmailAddress when calling BrandingResponseCompoundV3., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEmailAddress)?'null':'"'.$sEmailAddress.'"')." for sEmailAddress when calling BrandingResponseCompoundV3., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : trim((string) $sEmailAddress));

        return $this;
    }

    /**
     * Gets eBrandingLogo
     *
     * @return \eZmaxAPI\Model\FieldEBrandingLogo
     */
    public function getEBrandingLogo()
    {
	//return $this->container['eBrandingLogo'];
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
     * Gets eBrandingAlignlogo
     *
     * @return \eZmaxAPI\Model\FieldEBrandingAlignlogo
     */
    public function getEBrandingAlignlogo()
    {
	//return $this->container['eBrandingAlignlogo'];
        return $this->container['eBrandingAlignlogo'];
    }

    /**
     * Sets eBrandingAlignlogo
     *
     * @param \eZmaxAPI\Model\FieldEBrandingAlignlogo $eBrandingAlignlogo eBrandingAlignlogo
     *
     * @return self
     */
    public function setEBrandingAlignlogo($eBrandingAlignlogo)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eBrandingAlignlogo)) {
            //throw new \InvalidArgumentException('non-nullable eBrandingAlignlogo cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eBrandingAlignlogo'] = $eBrandingAlignlogo;
        $this->container['eBrandingAlignlogo'] = $eBrandingAlignlogo;

        return $this;
    }

    /**
     * Gets iBrandingColor
     *
     * @return int
     */
    public function getIBrandingColor()
    {
	//return $this->container['iBrandingColor'];
        return $this->container['iBrandingColor'];
    }

    /**
     * Sets iBrandingColor
     *
     * @param int $iBrandingColor The primary color. This is a RGB color converted into integer
     *
     * @return self
     */
    public function setIBrandingColor($iBrandingColor)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iBrandingColor)) {
            //throw new \InvalidArgumentException('non-nullable iBrandingColor cannot be null');
        //}

	//if (($iBrandingColor > 16777215)) {
        if (($iBrandingColor > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $iBrandingColor when calling BrandingResponseCompoundV3., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iBrandingColor)?'null':'"'.$iBrandingColor.'"').' for iBrandingColor when calling BrandingResponseCompoundV3., must be smaller than or equal to 16777215.');
        }
	//if (($iBrandingColor < 0)) {
        if (($iBrandingColor < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iBrandingColor when calling BrandingResponseCompoundV3., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iBrandingColor)?'null':'"'.$iBrandingColor.'"').' for iBrandingColor when calling BrandingResponseCompoundV3., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColor'] = $iBrandingColor;
        $this->container['iBrandingColor'] = (is_null($iBrandingColor) ? null : (int) $iBrandingColor);

        return $this;
    }

    /**
     * Gets bBrandingIsactive
     *
     * @return bool
     */
    public function getBBrandingIsactive()
    {
	//return $this->container['bBrandingIsactive'];
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
     * Gets sBrandingLogourl
     *
     * @return string|null
     */
    public function getSBrandingLogourl()
    {
	//return $this->container['sBrandingLogourl'];
        return is_null($this->container['sBrandingLogourl']) ? null : trim($this->container['sBrandingLogourl']);
    }

    /**
     * Sets sBrandingLogourl
     *
     * @param string|null $sBrandingLogourl The url of the picture used as logo in the Branding
     *
     * @return self
     */
    public function setSBrandingLogourl($sBrandingLogourl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBrandingLogourl)) {
            //throw new \InvalidArgumentException('non-nullable sBrandingLogourl cannot be null');
        //}

	//if ((!preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sBrandingLogourl)))) {
        if (!is_null($sBrandingLogourl) && (!preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sBrandingLogourl)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sBrandingLogourl when calling BrandingResponseCompoundV3., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sBrandingLogourl)?'null':'"'.$sBrandingLogourl.'"')." for sBrandingLogourl when calling BrandingResponseCompoundV3., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBrandingLogourl'] = $sBrandingLogourl;
        $this->container['sBrandingLogourl'] = (is_null($sBrandingLogourl) ? null : trim((string) $sBrandingLogourl));

        return $this;
    }

    /**
     * Gets sBrandingLogoemailurl
     *
     * @return string|null
     */
    public function getSBrandingLogoemailurl()
    {
	//return $this->container['sBrandingLogoemailurl'];
        return is_null($this->container['sBrandingLogoemailurl']) ? null : trim($this->container['sBrandingLogoemailurl']);
    }

    /**
     * Sets sBrandingLogoemailurl
     *
     * @param string|null $sBrandingLogoemailurl The url of the picture used in email as logo in the Branding
     *
     * @return self
     */
    public function setSBrandingLogoemailurl($sBrandingLogoemailurl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBrandingLogoemailurl)) {
            //throw new \InvalidArgumentException('non-nullable sBrandingLogoemailurl cannot be null');
        //}

	//if ((!preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sBrandingLogoemailurl)))) {
        if (!is_null($sBrandingLogoemailurl) && (!preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sBrandingLogoemailurl)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sBrandingLogoemailurl when calling BrandingResponseCompoundV3., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sBrandingLogoemailurl)?'null':'"'.$sBrandingLogoemailurl.'"')." for sBrandingLogoemailurl when calling BrandingResponseCompoundV3., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBrandingLogoemailurl'] = $sBrandingLogoemailurl;
        $this->container['sBrandingLogoemailurl'] = (is_null($sBrandingLogoemailurl) ? null : trim((string) $sBrandingLogoemailurl));

        return $this;
    }

    /**
     * Gets sBrandingLogointerfaceurl
     *
     * @return string|null
     */
    public function getSBrandingLogointerfaceurl()
    {
	//return $this->container['sBrandingLogointerfaceurl'];
        return is_null($this->container['sBrandingLogointerfaceurl']) ? null : trim($this->container['sBrandingLogointerfaceurl']);
    }

    /**
     * Sets sBrandingLogointerfaceurl
     *
     * @param string|null $sBrandingLogointerfaceurl The url of the picture used as logo in the Branding
     *
     * @return self
     */
    public function setSBrandingLogointerfaceurl($sBrandingLogointerfaceurl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBrandingLogointerfaceurl)) {
            //throw new \InvalidArgumentException('non-nullable sBrandingLogointerfaceurl cannot be null');
        //}

	//if ((!preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sBrandingLogointerfaceurl)))) {
        if (!is_null($sBrandingLogointerfaceurl) && (!preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sBrandingLogointerfaceurl)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sBrandingLogointerfaceurl when calling BrandingResponseCompoundV3., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sBrandingLogointerfaceurl)?'null':'"'.$sBrandingLogointerfaceurl.'"')." for sBrandingLogointerfaceurl when calling BrandingResponseCompoundV3., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBrandingLogointerfaceurl'] = $sBrandingLogointerfaceurl;
        $this->container['sBrandingLogointerfaceurl'] = (is_null($sBrandingLogointerfaceurl) ? null : trim((string) $sBrandingLogointerfaceurl));

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


