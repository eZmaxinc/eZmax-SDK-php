<?php
/**
 * BrandingRequestV2
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
 * BrandingRequestV2 Class Doc Comment
 *
 * @category Class
 * @description A Branding Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BrandingRequestV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'branding-RequestV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiBrandingID' => 'int',
        'objBrandingDescription' => '\eZmaxAPI\Model\MultilingualBrandingDescription',
        'eBrandingLogo' => '\eZmaxAPI\Model\FieldEBrandingLogo',
        'eBrandingAlignlogo' => '\eZmaxAPI\Model\FieldEBrandingAlignlogo',
        'sBrandingBase64' => 'string',
        'iBrandingColor' => 'int',
        'sBrandingName' => 'string',
        'sEmailAddress' => 'string',
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
        'objBrandingDescription' => null,
        'eBrandingLogo' => null,
        'eBrandingAlignlogo' => null,
        'sBrandingBase64' => 'byte',
        'iBrandingColor' => null,
        'sBrandingName' => null,
        'sEmailAddress' => null,
        'bBrandingIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiBrandingID' => false,
		'objBrandingDescription' => false,
		'eBrandingLogo' => false,
		'eBrandingAlignlogo' => false,
		'sBrandingBase64' => false,
		'iBrandingColor' => false,
		'sBrandingName' => false,
		'sEmailAddress' => false,
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
        'objBrandingDescription' => 'objBrandingDescription',
        'eBrandingLogo' => 'eBrandingLogo',
        'eBrandingAlignlogo' => 'eBrandingAlignlogo',
        'sBrandingBase64' => 'sBrandingBase64',
        'iBrandingColor' => 'iBrandingColor',
        'sBrandingName' => 'sBrandingName',
        'sEmailAddress' => 'sEmailAddress',
        'bBrandingIsactive' => 'bBrandingIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiBrandingID' => 'setPkiBrandingID',
        'objBrandingDescription' => 'setObjBrandingDescription',
        'eBrandingLogo' => 'setEBrandingLogo',
        'eBrandingAlignlogo' => 'setEBrandingAlignlogo',
        'sBrandingBase64' => 'setSBrandingBase64',
        'iBrandingColor' => 'setIBrandingColor',
        'sBrandingName' => 'setSBrandingName',
        'sEmailAddress' => 'setSEmailAddress',
        'bBrandingIsactive' => 'setBBrandingIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiBrandingID' => 'getPkiBrandingID',
        'objBrandingDescription' => 'getObjBrandingDescription',
        'eBrandingLogo' => 'getEBrandingLogo',
        'eBrandingAlignlogo' => 'getEBrandingAlignlogo',
        'sBrandingBase64' => 'getSBrandingBase64',
        'iBrandingColor' => 'getIBrandingColor',
        'sBrandingName' => 'getSBrandingName',
        'sEmailAddress' => 'getSEmailAddress',
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pkiBrandingID', $data ?? [], null);
        $this->setIfExists('objBrandingDescription', $data ?? [], null);
        $this->setIfExists('eBrandingLogo', $data ?? [], null);
        $this->setIfExists('eBrandingAlignlogo', $data ?? [], null);
        $this->setIfExists('sBrandingBase64', $data ?? [], null);
        $this->setIfExists('iBrandingColor', $data ?? [], null);
        $this->setIfExists('sBrandingName', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
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

        if (!is_null($this->container['pkiBrandingID']) && ($this->container['pkiBrandingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiBrandingID', must be bigger than or equal to 0.";
        }

        if ($this->container['objBrandingDescription'] === null) {
            $invalidProperties[] = "'objBrandingDescription' can't be null";
        }
        if ($this->container['eBrandingLogo'] === null) {
            $invalidProperties[] = "'eBrandingLogo' can't be null";
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

	//if (!is_null($this->container['sBrandingName']) && !preg_match("/^.{0,55}$/", $this->container['sBrandingName'])) {
        if (!is_null($this->container['sBrandingName']) && !preg_match("/(*UTF8)^.{0,55}$/", $this->container['sBrandingName'])) {
            $invalidProperties[] = "invalid value for 'sBrandingName', must be conform to the pattern /^.{0,55}$/.";
        }

	//if (!is_null($this->container['sEmailAddress']) && !preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
        if (!is_null($this->container['sEmailAddress']) && !preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
            $invalidProperties[] = "invalid value for 'sEmailAddress', must be conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.";
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
     * @return int|null
     */
    public function getPkiBrandingID()
    {
	//return $this->container['pkiBrandingID'];
        return $this->container['pkiBrandingID'];
    }

    /**
     * Sets pkiBrandingID
     *
     * @param int|null $pkiBrandingID The unique ID of the Branding
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
        if (!is_null($pkiBrandingID) && ($pkiBrandingID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiBrandingID when calling BrandingRequestV2., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiBrandingID)?'null':'"'.$pkiBrandingID.'"').' for pkiBrandingID when calling BrandingRequestV2., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiBrandingID'] = $pkiBrandingID;
        $this->container['pkiBrandingID'] = (is_null($pkiBrandingID) ? null : (int) $pkiBrandingID);

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
     * @return \eZmaxAPI\Model\FieldEBrandingAlignlogo|null
     */
    public function getEBrandingAlignlogo()
    {
	//return $this->container['eBrandingAlignlogo'];
        return $this->container['eBrandingAlignlogo'];
    }

    /**
     * Sets eBrandingAlignlogo
     *
     * @param \eZmaxAPI\Model\FieldEBrandingAlignlogo|null $eBrandingAlignlogo eBrandingAlignlogo
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
     * Gets sBrandingBase64
     *
     * @return string|null
     */
    public function getSBrandingBase64()
    {
	//return $this->container['sBrandingBase64'];
        return $this->container['sBrandingBase64'];
    }

    /**
     * Sets sBrandingBase64
     *
     * @param string|null $sBrandingBase64 The Base64 encoded binary content of the branding logo. This need to match image type selected in eBrandingLogo if you supply an image. If you select 'Default', the logo will be deleted and the default one will be used.
     *
     * @return self
     */
    public function setSBrandingBase64($sBrandingBase64)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBrandingBase64)) {
            //throw new \InvalidArgumentException('non-nullable sBrandingBase64 cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBrandingBase64'] = $sBrandingBase64;
        $this->container['sBrandingBase64'] = (is_null($sBrandingBase64) ? null : $sBrandingBase64);

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
	    //throw new \InvalidArgumentException('invalid value for $iBrandingColor when calling BrandingRequestV2., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iBrandingColor)?'null':'"'.$iBrandingColor.'"').' for iBrandingColor when calling BrandingRequestV2., must be smaller than or equal to 16777215.');
        }
	//if (($iBrandingColor < 0)) {
        if (($iBrandingColor < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iBrandingColor when calling BrandingRequestV2., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iBrandingColor)?'null':'"'.$iBrandingColor.'"').' for iBrandingColor when calling BrandingRequestV2., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iBrandingColor'] = $iBrandingColor;
        $this->container['iBrandingColor'] = (is_null($iBrandingColor) ? null : (int) $iBrandingColor);

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
	    //throw new \InvalidArgumentException("invalid value for \$sBrandingName when calling BrandingRequestV2., must conform to the pattern /^.{0,55}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sBrandingName)?'null':'"'.$sBrandingName.'"')." for sBrandingName when calling BrandingRequestV2., must conform to the pattern /^.{0,55}$/.");
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
	    //throw new \InvalidArgumentException("invalid value for \$sEmailAddress when calling BrandingRequestV2., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEmailAddress)?'null':'"'.$sEmailAddress.'"')." for sEmailAddress when calling BrandingRequestV2., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : trim((string) $sEmailAddress));

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


