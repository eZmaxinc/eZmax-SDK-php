<?php
/**
 * ProvinceAutocompleteElementResponse
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
 * Generator version: 7.4.0
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
 * ProvinceAutocompleteElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Province AutocompleteElement Response
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProvinceAutocompleteElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'province-AutocompleteElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiProvinceID' => 'int',
        'fkiCountryID' => 'int',
        'sProvinceNameX' => 'string',
        'sProvinceShortname' => 'string',
        'bProvinceIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiProvinceID' => null,
        'fkiCountryID' => null,
        'sProvinceNameX' => null,
        'sProvinceShortname' => null,
        'bProvinceIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiProvinceID' => false,
		'fkiCountryID' => false,
		'sProvinceNameX' => false,
		'sProvinceShortname' => false,
		'bProvinceIsactive' => false
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
        'pkiProvinceID' => 'pkiProvinceID',
        'fkiCountryID' => 'fkiCountryID',
        'sProvinceNameX' => 'sProvinceNameX',
        'sProvinceShortname' => 'sProvinceShortname',
        'bProvinceIsactive' => 'bProvinceIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiProvinceID' => 'setPkiProvinceID',
        'fkiCountryID' => 'setFkiCountryID',
        'sProvinceNameX' => 'setSProvinceNameX',
        'sProvinceShortname' => 'setSProvinceShortname',
        'bProvinceIsactive' => 'setBProvinceIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiProvinceID' => 'getPkiProvinceID',
        'fkiCountryID' => 'getFkiCountryID',
        'sProvinceNameX' => 'getSProvinceNameX',
        'sProvinceShortname' => 'getSProvinceShortname',
        'bProvinceIsactive' => 'getBProvinceIsactive'
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
        $this->setIfExists('pkiProvinceID', $data ?? [], null);
        $this->setIfExists('fkiCountryID', $data ?? [], null);
        $this->setIfExists('sProvinceNameX', $data ?? [], null);
        $this->setIfExists('sProvinceShortname', $data ?? [], null);
        $this->setIfExists('bProvinceIsactive', $data ?? [], null);
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

        if ($this->container['pkiProvinceID'] === null) {
            $invalidProperties[] = "'pkiProvinceID' can't be null";
        }
        if (($this->container['pkiProvinceID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiProvinceID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiCountryID'] === null) {
            $invalidProperties[] = "'fkiCountryID' can't be null";
        }
        if (($this->container['fkiCountryID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiCountryID', must be bigger than or equal to 0.";
        }

        if ($this->container['sProvinceNameX'] === null) {
            $invalidProperties[] = "'sProvinceNameX' can't be null";
        }
//        if (!preg_match("/^.{0,50}$/", $this->container['sProvinceNameX'])) {
        if (!is_null($this->container['sProvinceNameX']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sProvinceNameX'])) {
            $invalidProperties[] = "invalid value for 'sProvinceNameX', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['sProvinceShortname'] === null) {
            $invalidProperties[] = "'sProvinceShortname' can't be null";
        }
//        if (!preg_match("/^.{1,3}$/", $this->container['sProvinceShortname'])) {
        if (!is_null($this->container['sProvinceShortname']) && !preg_match("/(*UTF8)^.{1,3}$/", $this->container['sProvinceShortname'])) {
            $invalidProperties[] = "invalid value for 'sProvinceShortname', must be conform to the pattern /^.{1,3}$/.";
        }

        if ($this->container['bProvinceIsactive'] === null) {
            $invalidProperties[] = "'bProvinceIsactive' can't be null";
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
     * Gets pkiProvinceID
     *
     * @return int
     */
    public function getPkiProvinceID()
    {
        return $this->container['pkiProvinceID'];
    }

    /**
     * Sets pkiProvinceID
     *
     * @param int $pkiProvinceID The unique ID of the Province.  Here are some common values (Complete list must be retrieved from API):  |Value|Description| |-|-| |1|(Canada) Alberta |2|(Canada) British Columbia| |3|(Canada) Manitoba| |3|(Canada) Manitoba| |4|(Canada) New Brunswick| |5|(Canada) Newfoundland| |6|(Canada) Northwest Territories| |7|(Canada) Nova Scotia| |8|(Canada) Nunavut| |9|(Canada) Ontario| |10|(Canada) Prince Edward Island| |11|(Canada) Quebec| |12|(Canada) Saskatchewan| |13|(Canada) Yukon| |14|(United-States) Alabama| |15|(United-States) Alaska| |16|(United-States) Arizona| |17|(United-States) Arkansas| |18|(United-States) California| |19|(United-States) Colorado| |20|(United-States) Connecticut| |21|(United-States) Delaware| |22|(United-States) District of Columbia| |23|(United-States) Florida| |24|(United-States) Georgia| |25|(United-States) Hawaii| |26|(United-States) Idaho| |27|(United-States) Illinois| |28|(United-States) Indiana| |29|(United-States) Iowa| |30|(United-States) Kansas| |31|(United-States) Kentucky| |32|(United-States) Louisiane| |33|(United-States) Maine| |34|(United-States) Maryland| |35|(United-States) Massachusetts| |36|(United-States) Michigan| |37|(United-States) Minnesota| |38|(United-States) Mississippi| |39|(United-States) Missouri| |40|(United-States) Montana| |41|(United-States) Nebraska| |42|(United-States) Nevada| |43|(United-States) New Hampshire| |44|(United-States) New Jersey| |45|(United-States) New Mexico| |46|(United-States) New York| |47|(United-States) North Carolina| |48|(United-States) North Dakota| |49|(United-States) Ohio| |50|(United-States) Oklahoma| |51|(United-States) Oregon| |52|(United-States) Pennsylvania| |53|(United-States) Rhode Island| |54|(United-States) South Carolina| |55|(United-States) South Dakota| |56|(United-States) Tennessee| |57|(United-States) Texas| |58|(United-States) Utah| |60|(United-States) Vermont| |59|(United-States) Virginia| |61|(United-States) Washington| |62|(United-States) West Virginia| |63|(United-States) Wisconsin| |64|(United-States) Wyoming|
     *
     * @return self
     */
    public function setPkiProvinceID($pkiProvinceID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiProvinceID)) {
            //throw new \InvalidArgumentException('non-nullable pkiProvinceID cannot be null');
        //}

//        if (($pkiProvinceID < 0)) {
        if (($pkiProvinceID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiProvinceID when calling ProvinceAutocompleteElementResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiProvinceID'] = $pkiProvinceID;
        $this->container['pkiProvinceID'] = (is_null($pkiProvinceID) ? null : (int) $pkiProvinceID);

        return $this;
    }

    /**
     * Gets fkiCountryID
     *
     * @return int
     */
    public function getFkiCountryID()
    {
        return $this->container['fkiCountryID'];
    }

    /**
     * Sets fkiCountryID
     *
     * @param int $fkiCountryID The unique ID of the Country.  Here are some common values (Complete list must be retrieved from API):  |Value|Description| |-|-| |1|Canada| |2|United-States|
     *
     * @return self
     */
    public function setFkiCountryID($fkiCountryID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiCountryID)) {
            //throw new \InvalidArgumentException('non-nullable fkiCountryID cannot be null');
        //}

//        if (($fkiCountryID < 0)) {
        if (($fkiCountryID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiCountryID when calling ProvinceAutocompleteElementResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiCountryID'] = $fkiCountryID;
        $this->container['fkiCountryID'] = (is_null($fkiCountryID) ? null : (int) $fkiCountryID);

        return $this;
    }

    /**
     * Gets sProvinceNameX
     *
     * @return string
     */
    public function getSProvinceNameX()
    {
        return is_null($this->container['sProvinceNameX']) ? null : trim($this->container['sProvinceNameX']);
    }

    /**
     * Sets sProvinceNameX
     *
     * @param string $sProvinceNameX The name of the Province in the language of the requester
     *
     * @return self
     */
    public function setSProvinceNameX($sProvinceNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sProvinceNameX)) {
            //throw new \InvalidArgumentException('non-nullable sProvinceNameX cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sProvinceNameX)))) {
        if (!is_null($sProvinceNameX) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sProvinceNameX)))) {
            throw new \InvalidArgumentException("invalid value for \$sProvinceNameX when calling ProvinceAutocompleteElementResponse., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sProvinceNameX'] = $sProvinceNameX;
        $this->container['sProvinceNameX'] = (is_null($sProvinceNameX) ? null : trim((string) $sProvinceNameX));

        return $this;
    }

    /**
     * Gets sProvinceShortname
     *
     * @return string
     */
    public function getSProvinceShortname()
    {
        return is_null($this->container['sProvinceShortname']) ? null : trim($this->container['sProvinceShortname']);
    }

    /**
     * Sets sProvinceShortname
     *
     * @param string $sProvinceShortname The shortname of the Province
     *
     * @return self
     */
    public function setSProvinceShortname($sProvinceShortname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sProvinceShortname)) {
            //throw new \InvalidArgumentException('non-nullable sProvinceShortname cannot be null');
        //}

//        if ((!preg_match("/^.{1,3}$/", ObjectSerializer::toString($sProvinceShortname)))) {
        if (!is_null($sProvinceShortname) && (!preg_match("/(*UTF8)^.{1,3}$/", ObjectSerializer::toString($sProvinceShortname)))) {
            throw new \InvalidArgumentException("invalid value for \$sProvinceShortname when calling ProvinceAutocompleteElementResponse., must conform to the pattern /^.{1,3}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sProvinceShortname'] = $sProvinceShortname;
        $this->container['sProvinceShortname'] = (is_null($sProvinceShortname) ? null : trim((string) $sProvinceShortname));

        return $this;
    }

    /**
     * Gets bProvinceIsactive
     *
     * @return bool
     */
    public function getBProvinceIsactive()
    {
        return $this->container['bProvinceIsactive'];
    }

    /**
     * Sets bProvinceIsactive
     *
     * @param bool $bProvinceIsactive Whether the Province is active or not
     *
     * @return self
     */
    public function setBProvinceIsactive($bProvinceIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bProvinceIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bProvinceIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bProvinceIsactive'] = $bProvinceIsactive;
        $this->container['bProvinceIsactive'] = (is_null($bProvinceIsactive) ? null : (bool) $bProvinceIsactive);

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

