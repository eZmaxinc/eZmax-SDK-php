<?php
/**
 * ApikeyListElement
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
 * ApikeyListElement Class Doc Comment
 *
 * @category Class
 * @description A Branding List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApikeyListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'apikey-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiApikeyID' => 'int',
        'sApikeyDescriptionX' => 'string',
        'sUserFirstname' => 'string',
        'sUserLastname' => 'string',
        'bApikeyIsactive' => 'bool',
        'bApikeyIssigned' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiApikeyID' => null,
        'sApikeyDescriptionX' => null,
        'sUserFirstname' => null,
        'sUserLastname' => null,
        'bApikeyIsactive' => null,
        'bApikeyIssigned' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiApikeyID' => false,
		'sApikeyDescriptionX' => false,
		'sUserFirstname' => false,
		'sUserLastname' => false,
		'bApikeyIsactive' => false,
		'bApikeyIssigned' => false
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
        'pkiApikeyID' => 'pkiApikeyID',
        'sApikeyDescriptionX' => 'sApikeyDescriptionX',
        'sUserFirstname' => 'sUserFirstname',
        'sUserLastname' => 'sUserLastname',
        'bApikeyIsactive' => 'bApikeyIsactive',
        'bApikeyIssigned' => 'bApikeyIssigned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiApikeyID' => 'setPkiApikeyID',
        'sApikeyDescriptionX' => 'setSApikeyDescriptionX',
        'sUserFirstname' => 'setSUserFirstname',
        'sUserLastname' => 'setSUserLastname',
        'bApikeyIsactive' => 'setBApikeyIsactive',
        'bApikeyIssigned' => 'setBApikeyIssigned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiApikeyID' => 'getPkiApikeyID',
        'sApikeyDescriptionX' => 'getSApikeyDescriptionX',
        'sUserFirstname' => 'getSUserFirstname',
        'sUserLastname' => 'getSUserLastname',
        'bApikeyIsactive' => 'getBApikeyIsactive',
        'bApikeyIssigned' => 'getBApikeyIssigned'
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
        $this->setIfExists('pkiApikeyID', $data ?? [], null);
        $this->setIfExists('sApikeyDescriptionX', $data ?? [], null);
        $this->setIfExists('sUserFirstname', $data ?? [], null);
        $this->setIfExists('sUserLastname', $data ?? [], null);
        $this->setIfExists('bApikeyIsactive', $data ?? [], null);
        $this->setIfExists('bApikeyIssigned', $data ?? [], null);
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

        if ($this->container['pkiApikeyID'] === null) {
            $invalidProperties[] = "'pkiApikeyID' can't be null";
        }
        if (($this->container['pkiApikeyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiApikeyID', must be bigger than or equal to 0.";
        }

        if ($this->container['sApikeyDescriptionX'] === null) {
            $invalidProperties[] = "'sApikeyDescriptionX' can't be null";
        }
        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
        }
        if ($this->container['bApikeyIsactive'] === null) {
            $invalidProperties[] = "'bApikeyIsactive' can't be null";
        }
        if ($this->container['bApikeyIssigned'] === null) {
            $invalidProperties[] = "'bApikeyIssigned' can't be null";
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
     * Gets pkiApikeyID
     *
     * @return int
     */
    public function getPkiApikeyID()
    {
        return $this->container['pkiApikeyID'];
    }

    /**
     * Sets pkiApikeyID
     *
     * @param int $pkiApikeyID The unique ID of the Apikey
     *
     * @return self
     */
    public function setPkiApikeyID($pkiApikeyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiApikeyID)) {
            //throw new \InvalidArgumentException('non-nullable pkiApikeyID cannot be null');
        //}

//        if (($pkiApikeyID < 0)) {
        if (($pkiApikeyID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiApikeyID)?'null':'"'.$pkiApikeyID.'"').' for pkiApikeyID when calling ApikeyListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiApikeyID'] = $pkiApikeyID;
        $this->container['pkiApikeyID'] = (is_null($pkiApikeyID) ? null : (int) $pkiApikeyID);

        return $this;
    }

    /**
     * Gets sApikeyDescriptionX
     *
     * @return string
     */
    public function getSApikeyDescriptionX()
    {
        return is_null($this->container['sApikeyDescriptionX']) ? null : trim($this->container['sApikeyDescriptionX']);
    }

    /**
     * Sets sApikeyDescriptionX
     *
     * @param string $sApikeyDescriptionX The description of the Apikey in the language of the requester
     *
     * @return self
     */
    public function setSApikeyDescriptionX($sApikeyDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sApikeyDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sApikeyDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sApikeyDescriptionX'] = $sApikeyDescriptionX;
        $this->container['sApikeyDescriptionX'] = (is_null($sApikeyDescriptionX) ? null : trim((string) $sApikeyDescriptionX));

        return $this;
    }

    /**
     * Gets sUserFirstname
     *
     * @return string
     */
    public function getSUserFirstname()
    {
        return is_null($this->container['sUserFirstname']) ? null : trim($this->container['sUserFirstname']);
    }

    /**
     * Sets sUserFirstname
     *
     * @param string $sUserFirstname The first name of the user
     *
     * @return self
     */
    public function setSUserFirstname($sUserFirstname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sUserFirstname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserFirstname'] = $sUserFirstname;
        $this->container['sUserFirstname'] = (is_null($sUserFirstname) ? null : trim((string) $sUserFirstname));

        return $this;
    }

    /**
     * Gets sUserLastname
     *
     * @return string
     */
    public function getSUserLastname()
    {
        return is_null($this->container['sUserLastname']) ? null : trim($this->container['sUserLastname']);
    }

    /**
     * Sets sUserLastname
     *
     * @param string $sUserLastname The last name of the user
     *
     * @return self
     */
    public function setSUserLastname($sUserLastname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLastname)) {
            //throw new \InvalidArgumentException('non-nullable sUserLastname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLastname'] = $sUserLastname;
        $this->container['sUserLastname'] = (is_null($sUserLastname) ? null : trim((string) $sUserLastname));

        return $this;
    }

    /**
     * Gets bApikeyIsactive
     *
     * @return bool
     */
    public function getBApikeyIsactive()
    {
        return $this->container['bApikeyIsactive'];
    }

    /**
     * Sets bApikeyIsactive
     *
     * @param bool $bApikeyIsactive Whether the apikey is active or not
     *
     * @return self
     */
    public function setBApikeyIsactive($bApikeyIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bApikeyIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bApikeyIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bApikeyIsactive'] = $bApikeyIsactive;
        $this->container['bApikeyIsactive'] = (is_null($bApikeyIsactive) ? null : (bool) $bApikeyIsactive);

        return $this;
    }

    /**
     * Gets bApikeyIssigned
     *
     * @return bool
     */
    public function getBApikeyIssigned()
    {
        return $this->container['bApikeyIssigned'];
    }

    /**
     * Sets bApikeyIssigned
     *
     * @param bool $bApikeyIssigned Whether the apikey is signed or not
     *
     * @return self
     */
    public function setBApikeyIssigned($bApikeyIssigned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bApikeyIssigned)) {
            //throw new \InvalidArgumentException('non-nullable bApikeyIssigned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bApikeyIssigned'] = $bApikeyIssigned;
        $this->container['bApikeyIssigned'] = (is_null($bApikeyIssigned) ? null : (bool) $bApikeyIssigned);

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


