<?php
/**
 * SignatureResponseCompound
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
 * SignatureResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Signature Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SignatureResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'signature-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiSignatureID' => 'int',
        'fkiFontID' => 'int',
        'sSignatureUrl' => 'string',
        'sSignatureUrlinitials' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiSignatureID' => null,
        'fkiFontID' => null,
        'sSignatureUrl' => null,
        'sSignatureUrlinitials' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiSignatureID' => false,
		'fkiFontID' => false,
		'sSignatureUrl' => false,
		'sSignatureUrlinitials' => false
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
        'pkiSignatureID' => 'pkiSignatureID',
        'fkiFontID' => 'fkiFontID',
        'sSignatureUrl' => 'sSignatureUrl',
        'sSignatureUrlinitials' => 'sSignatureUrlinitials'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiSignatureID' => 'setPkiSignatureID',
        'fkiFontID' => 'setFkiFontID',
        'sSignatureUrl' => 'setSSignatureUrl',
        'sSignatureUrlinitials' => 'setSSignatureUrlinitials'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiSignatureID' => 'getPkiSignatureID',
        'fkiFontID' => 'getFkiFontID',
        'sSignatureUrl' => 'getSSignatureUrl',
        'sSignatureUrlinitials' => 'getSSignatureUrlinitials'
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
        $this->setIfExists('pkiSignatureID', $data ?? [], null);
        $this->setIfExists('fkiFontID', $data ?? [], null);
        $this->setIfExists('sSignatureUrl', $data ?? [], null);
        $this->setIfExists('sSignatureUrlinitials', $data ?? [], null);
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

        if ($this->container['pkiSignatureID'] === null) {
            $invalidProperties[] = "'pkiSignatureID' can't be null";
        }
        if (($this->container['pkiSignatureID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiSignatureID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['pkiSignatureID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiSignatureID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiFontID']) && ($this->container['fkiFontID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiFontID', must be bigger than or equal to 0.";
        }

	//if (!is_null($this->container['sSignatureUrl']) && !preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sSignatureUrl'])) {
        if (!is_null($this->container['sSignatureUrl']) && !preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sSignatureUrl'])) {
            $invalidProperties[] = "invalid value for 'sSignatureUrl', must be conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.";
        }

	//if (!is_null($this->container['sSignatureUrlinitials']) && !preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sSignatureUrlinitials'])) {
        if (!is_null($this->container['sSignatureUrlinitials']) && !preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", $this->container['sSignatureUrlinitials'])) {
            $invalidProperties[] = "invalid value for 'sSignatureUrlinitials', must be conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.";
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
     * Gets pkiSignatureID
     *
     * @return int
     */
    public function getPkiSignatureID()
    {
	//return $this->container['pkiSignatureID'];
        return $this->container['pkiSignatureID'];
    }

    /**
     * Sets pkiSignatureID
     *
     * @param int $pkiSignatureID The unique ID of the Signature
     *
     * @return self
     */
    public function setPkiSignatureID($pkiSignatureID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiSignatureID)) {
            //throw new \InvalidArgumentException('non-nullable pkiSignatureID cannot be null');
        //}

	//if (($pkiSignatureID > 16777215)) {
        if (($pkiSignatureID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiSignatureID when calling SignatureResponseCompound., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiSignatureID)?'null':'"'.$pkiSignatureID.'"').' for pkiSignatureID when calling SignatureResponseCompound., must be smaller than or equal to 16777215.');
        }
	//if (($pkiSignatureID < 0)) {
        if (($pkiSignatureID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiSignatureID when calling SignatureResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiSignatureID)?'null':'"'.$pkiSignatureID.'"').' for pkiSignatureID when calling SignatureResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiSignatureID'] = $pkiSignatureID;
        $this->container['pkiSignatureID'] = (is_null($pkiSignatureID) ? null : (int) $pkiSignatureID);

        return $this;
    }

    /**
     * Gets fkiFontID
     *
     * @return int|null
     */
    public function getFkiFontID()
    {
	//return $this->container['fkiFontID'];
        return $this->container['fkiFontID'];
    }

    /**
     * Sets fkiFontID
     *
     * @param int|null $fkiFontID The unique ID of the Font
     *
     * @return self
     */
    public function setFkiFontID($fkiFontID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiFontID)) {
            //throw new \InvalidArgumentException('non-nullable fkiFontID cannot be null');
        //}

	//if (($fkiFontID < 0)) {
        if (!is_null($fkiFontID) && ($fkiFontID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiFontID when calling SignatureResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiFontID)?'null':'"'.$fkiFontID.'"').' for fkiFontID when calling SignatureResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiFontID'] = $fkiFontID;
        $this->container['fkiFontID'] = (is_null($fkiFontID) ? null : (int) $fkiFontID);

        return $this;
    }

    /**
     * Gets sSignatureUrl
     *
     * @return string|null
     */
    public function getSSignatureUrl()
    {
	//return $this->container['sSignatureUrl'];
        return is_null($this->container['sSignatureUrl']) ? null : trim($this->container['sSignatureUrl']);
    }

    /**
     * Sets sSignatureUrl
     *
     * @param string|null $sSignatureUrl The URL of the SVG file for the Signature
     *
     * @return self
     */
    public function setSSignatureUrl($sSignatureUrl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sSignatureUrl)) {
            //throw new \InvalidArgumentException('non-nullable sSignatureUrl cannot be null');
        //}

	//if ((!preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sSignatureUrl)))) {
        if (!is_null($sSignatureUrl) && (!preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sSignatureUrl)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sSignatureUrl when calling SignatureResponseCompound., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sSignatureUrl)?'null':'"'.$sSignatureUrl.'"')." for sSignatureUrl when calling SignatureResponseCompound., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sSignatureUrl'] = $sSignatureUrl;
        $this->container['sSignatureUrl'] = (is_null($sSignatureUrl) ? null : trim((string) $sSignatureUrl));

        return $this;
    }

    /**
     * Gets sSignatureUrlinitials
     *
     * @return string|null
     */
    public function getSSignatureUrlinitials()
    {
	//return $this->container['sSignatureUrlinitials'];
        return is_null($this->container['sSignatureUrlinitials']) ? null : trim($this->container['sSignatureUrlinitials']);
    }

    /**
     * Sets sSignatureUrlinitials
     *
     * @param string|null $sSignatureUrlinitials The URL of the SVG file for the Initials
     *
     * @return self
     */
    public function setSSignatureUrlinitials($sSignatureUrlinitials)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sSignatureUrlinitials)) {
            //throw new \InvalidArgumentException('non-nullable sSignatureUrlinitials cannot be null');
        //}

	//if ((!preg_match("/^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sSignatureUrlinitials)))) {
        if (!is_null($sSignatureUrlinitials) && (!preg_match("/(*UTF8)^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/", ObjectSerializer::toString($sSignatureUrlinitials)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sSignatureUrlinitials when calling SignatureResponseCompound., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sSignatureUrlinitials)?'null':'"'.$sSignatureUrlinitials.'"')." for sSignatureUrlinitials when calling SignatureResponseCompound., must conform to the pattern /^(https|http):\/\/[^\\s\/$.?#].[^\\s]*$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sSignatureUrlinitials'] = $sSignatureUrlinitials;
        $this->container['sSignatureUrlinitials'] = (is_null($sSignatureUrlinitials) ? null : trim((string) $sSignatureUrlinitials));

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


