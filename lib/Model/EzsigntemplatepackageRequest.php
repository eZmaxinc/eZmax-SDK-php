<?php
/**
 * EzsigntemplatepackageRequest
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
 * OpenAPI Generator version: 7.2.0
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
 * EzsigntemplatepackageRequest Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplatepackage Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatepackageRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatepackage-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatepackageID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'sEzsigntemplatepackageDescription' => 'string',
        'bEzsigntemplatepackageAdminonly' => 'bool',
        'bEzsigntemplatepackageIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatepackageID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'sEzsigntemplatepackageDescription' => null,
        'bEzsigntemplatepackageAdminonly' => null,
        'bEzsigntemplatepackageIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplatepackageID' => false,
		'fkiEzsignfoldertypeID' => false,
		'fkiLanguageID' => false,
		'sEzsigntemplatepackageDescription' => false,
		'bEzsigntemplatepackageAdminonly' => false,
		'bEzsigntemplatepackageIsactive' => false
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
        'pkiEzsigntemplatepackageID' => 'pkiEzsigntemplatepackageID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEzsigntemplatepackageDescription' => 'sEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageAdminonly' => 'bEzsigntemplatepackageAdminonly',
        'bEzsigntemplatepackageIsactive' => 'bEzsigntemplatepackageIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatepackageID' => 'setPkiEzsigntemplatepackageID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEzsigntemplatepackageDescription' => 'setSEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageAdminonly' => 'setBEzsigntemplatepackageAdminonly',
        'bEzsigntemplatepackageIsactive' => 'setBEzsigntemplatepackageIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatepackageID' => 'getPkiEzsigntemplatepackageID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEzsigntemplatepackageDescription' => 'getSEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageAdminonly' => 'getBEzsigntemplatepackageAdminonly',
        'bEzsigntemplatepackageIsactive' => 'getBEzsigntemplatepackageIsactive'
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
        $this->setIfExists('pkiEzsigntemplatepackageID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatepackageDescription', $data ?? [], null);
        $this->setIfExists('bEzsigntemplatepackageAdminonly', $data ?? [], null);
        $this->setIfExists('bEzsigntemplatepackageIsactive', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsigntemplatepackageID']) && ($this->container['pkiEzsigntemplatepackageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatepackageID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsigntemplatepackageDescription'] === null) {
            $invalidProperties[] = "'sEzsigntemplatepackageDescription' can't be null";
        }
        if ($this->container['bEzsigntemplatepackageAdminonly'] === null) {
            $invalidProperties[] = "'bEzsigntemplatepackageAdminonly' can't be null";
        }
        if ($this->container['bEzsigntemplatepackageIsactive'] === null) {
            $invalidProperties[] = "'bEzsigntemplatepackageIsactive' can't be null";
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
     * Gets pkiEzsigntemplatepackageID
     *
     * @return int|null
     */
    public function getPkiEzsigntemplatepackageID()
    {
        return $this->container['pkiEzsigntemplatepackageID'];
    }

    /**
     * Sets pkiEzsigntemplatepackageID
     *
     * @param int|null $pkiEzsigntemplatepackageID The unique ID of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setPkiEzsigntemplatepackageID($pkiEzsigntemplatepackageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplatepackageID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplatepackageID cannot be null');
        //}

//        if (($pkiEzsigntemplatepackageID < 0)) {
        if (!is_null($pkiEzsigntemplatepackageID) && ($pkiEzsigntemplatepackageID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatepackageID when calling EzsigntemplatepackageRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplatepackageID'] = $pkiEzsigntemplatepackageID;
        $this->container['pkiEzsigntemplatepackageID'] = (is_null($pkiEzsigntemplatepackageID) ? null : (int) $pkiEzsigntemplatepackageID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}

//        if (($fkiEzsignfoldertypeID < 0)) {
        if (($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsigntemplatepackageRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}

//        if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplatepackageRequest., must be smaller than or equal to 2.');
        }
//        if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplatepackageRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets sEzsigntemplatepackageDescription
     *
     * @return string
     */
    public function getSEzsigntemplatepackageDescription()
    {
        return is_null($this->container['sEzsigntemplatepackageDescription']) ? null : trim($this->container['sEzsigntemplatepackageDescription']);
    }

    /**
     * Sets sEzsigntemplatepackageDescription
     *
     * @param string $sEzsigntemplatepackageDescription The description of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setSEzsigntemplatepackageDescription($sEzsigntemplatepackageDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplatepackageDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatepackageDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplatepackageDescription'] = $sEzsigntemplatepackageDescription;
        $this->container['sEzsigntemplatepackageDescription'] = (is_null($sEzsigntemplatepackageDescription) ? null : trim((string) $sEzsigntemplatepackageDescription));

        return $this;
    }

    /**
     * Gets bEzsigntemplatepackageAdminonly
     *
     * @return bool
     */
    public function getBEzsigntemplatepackageAdminonly()
    {
        return $this->container['bEzsigntemplatepackageAdminonly'];
    }

    /**
     * Sets bEzsigntemplatepackageAdminonly
     *
     * @param bool $bEzsigntemplatepackageAdminonly Whether the Ezsigntemplatepackage can be accessed by admin users only (eUserType=Normal)
     *
     * @return self
     */
    public function setBEzsigntemplatepackageAdminonly($bEzsigntemplatepackageAdminonly)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsigntemplatepackageAdminonly)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplatepackageAdminonly cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsigntemplatepackageAdminonly'] = $bEzsigntemplatepackageAdminonly;
        $this->container['bEzsigntemplatepackageAdminonly'] = (is_null($bEzsigntemplatepackageAdminonly) ? null : (bool) $bEzsigntemplatepackageAdminonly);

        return $this;
    }

    /**
     * Gets bEzsigntemplatepackageIsactive
     *
     * @return bool
     */
    public function getBEzsigntemplatepackageIsactive()
    {
        return $this->container['bEzsigntemplatepackageIsactive'];
    }

    /**
     * Sets bEzsigntemplatepackageIsactive
     *
     * @param bool $bEzsigntemplatepackageIsactive Whether the Ezsigntemplatepackage is active or not
     *
     * @return self
     */
    public function setBEzsigntemplatepackageIsactive($bEzsigntemplatepackageIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsigntemplatepackageIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplatepackageIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsigntemplatepackageIsactive'] = $bEzsigntemplatepackageIsactive;
        $this->container['bEzsigntemplatepackageIsactive'] = (is_null($bEzsigntemplatepackageIsactive) ? null : (bool) $bEzsigntemplatepackageIsactive);

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


