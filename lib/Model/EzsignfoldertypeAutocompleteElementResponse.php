<?php
/**
 * EzsignfoldertypeAutocompleteElementResponse
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
 * EzsignfoldertypeAutocompleteElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsignfoldertype AutocompleteElement Response
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignfoldertypeAutocompleteElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfoldertype-AutocompleteElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eEzsignfoldertypePrivacylevel' => '\eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'string',
        'pkiEzsignfoldertypeID' => 'int',
        'bEzsignfoldertypeIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eEzsignfoldertypePrivacylevel' => null,
        'sEzsignfoldertypeNameX' => null,
        'pkiEzsignfoldertypeID' => null,
        'bEzsignfoldertypeIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eEzsignfoldertypePrivacylevel' => false,
		'sEzsignfoldertypeNameX' => false,
		'pkiEzsignfoldertypeID' => false,
		'bEzsignfoldertypeIsactive' => false
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
        'eEzsignfoldertypePrivacylevel' => 'eEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'pkiEzsignfoldertypeID' => 'pkiEzsignfoldertypeID',
        'bEzsignfoldertypeIsactive' => 'bEzsignfoldertypeIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eEzsignfoldertypePrivacylevel' => 'setEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'pkiEzsignfoldertypeID' => 'setPkiEzsignfoldertypeID',
        'bEzsignfoldertypeIsactive' => 'setBEzsignfoldertypeIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eEzsignfoldertypePrivacylevel' => 'getEEzsignfoldertypePrivacylevel',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'pkiEzsignfoldertypeID' => 'getPkiEzsignfoldertypeID',
        'bEzsignfoldertypeIsactive' => 'getBEzsignfoldertypeIsactive'
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
        $this->setIfExists('eEzsignfoldertypePrivacylevel', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('pkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('bEzsignfoldertypeIsactive', $data ?? [], null);
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

        if ($this->container['eEzsignfoldertypePrivacylevel'] === null) {
            $invalidProperties[] = "'eEzsignfoldertypePrivacylevel' can't be null";
        }
        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['pkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'pkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['pkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['bEzsignfoldertypeIsactive'] === null) {
            $invalidProperties[] = "'bEzsignfoldertypeIsactive' can't be null";
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
     * Gets eEzsignfoldertypePrivacylevel
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel
     */
    public function getEEzsignfoldertypePrivacylevel()
    {
	//return $this->container['eEzsignfoldertypePrivacylevel'];
        return $this->container['eEzsignfoldertypePrivacylevel'];
    }

    /**
     * Sets eEzsignfoldertypePrivacylevel
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel $eEzsignfoldertypePrivacylevel eEzsignfoldertypePrivacylevel
     *
     * @return self
     */
    public function setEEzsignfoldertypePrivacylevel($eEzsignfoldertypePrivacylevel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignfoldertypePrivacylevel)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfoldertypePrivacylevel cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignfoldertypePrivacylevel'] = $eEzsignfoldertypePrivacylevel;
        $this->container['eEzsignfoldertypePrivacylevel'] = $eEzsignfoldertypePrivacylevel;

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string
     */
    public function getSEzsignfoldertypeNameX()
    {
	//return $this->container['sEzsignfoldertypeNameX'];
        return is_null($this->container['sEzsignfoldertypeNameX']) ? null : trim($this->container['sEzsignfoldertypeNameX']);
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfoldertypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfoldertypeNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfoldertypeNameX'] = $sEzsignfoldertypeNameX;
        $this->container['sEzsignfoldertypeNameX'] = (is_null($sEzsignfoldertypeNameX) ? null : trim((string) $sEzsignfoldertypeNameX));

        return $this;
    }

    /**
     * Gets pkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getPkiEzsignfoldertypeID()
    {
	//return $this->container['pkiEzsignfoldertypeID'];
        return $this->container['pkiEzsignfoldertypeID'];
    }

    /**
     * Sets pkiEzsignfoldertypeID
     *
     * @param int $pkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setPkiEzsignfoldertypeID($pkiEzsignfoldertypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignfoldertypeID cannot be null');
        //}

	//if (($pkiEzsignfoldertypeID > 65535)) {
        if (($pkiEzsignfoldertypeID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignfoldertypeID when calling EzsignfoldertypeAutocompleteElementResponse., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignfoldertypeID)?'null':'"'.$pkiEzsignfoldertypeID.'"').' for pkiEzsignfoldertypeID when calling EzsignfoldertypeAutocompleteElementResponse., must be smaller than or equal to 65535.');
        }
	//if (($pkiEzsignfoldertypeID < 0)) {
        if (($pkiEzsignfoldertypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignfoldertypeID when calling EzsignfoldertypeAutocompleteElementResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignfoldertypeID)?'null':'"'.$pkiEzsignfoldertypeID.'"').' for pkiEzsignfoldertypeID when calling EzsignfoldertypeAutocompleteElementResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignfoldertypeID'] = $pkiEzsignfoldertypeID;
        $this->container['pkiEzsignfoldertypeID'] = (is_null($pkiEzsignfoldertypeID) ? null : (int) $pkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets bEzsignfoldertypeIsactive
     *
     * @return bool
     */
    public function getBEzsignfoldertypeIsactive()
    {
	//return $this->container['bEzsignfoldertypeIsactive'];
        return $this->container['bEzsignfoldertypeIsactive'];
    }

    /**
     * Sets bEzsignfoldertypeIsactive
     *
     * @param bool $bEzsignfoldertypeIsactive Whether the Ezsignfoldertype is active or not
     *
     * @return self
     */
    public function setBEzsignfoldertypeIsactive($bEzsignfoldertypeIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignfoldertypeIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfoldertypeIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignfoldertypeIsactive'] = $bEzsignfoldertypeIsactive;
        $this->container['bEzsignfoldertypeIsactive'] = (is_null($bEzsignfoldertypeIsactive) ? null : (bool) $bEzsignfoldertypeIsactive);

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


