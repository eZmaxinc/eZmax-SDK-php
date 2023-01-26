<?php
/**
 * EzsigntemplatedocumentGetObjectV1ResponseMPayload
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
 * OpenAPI Generator version: 6.2.1
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
 * EzsigntemplatedocumentGetObjectV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for GET /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplatedocumentGetObjectV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatedocument-getObject-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatedocumentID' => 'int',
        'fkiEzsigntemplateID' => 'int',
        'sEzsigntemplatedocumentName' => 'string',
        'iEzsigntemplatedocumentPagetotal' => 'int',
        'iEzsigntemplatedocumentSignaturetotal' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatedocumentID' => null,
        'fkiEzsigntemplateID' => null,
        'sEzsigntemplatedocumentName' => null,
        'iEzsigntemplatedocumentPagetotal' => null,
        'iEzsigntemplatedocumentSignaturetotal' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplatedocumentID' => false,
		'fkiEzsigntemplateID' => false,
		'sEzsigntemplatedocumentName' => false,
		'iEzsigntemplatedocumentPagetotal' => false,
		'iEzsigntemplatedocumentSignaturetotal' => false
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
        'pkiEzsigntemplatedocumentID' => 'pkiEzsigntemplatedocumentID',
        'fkiEzsigntemplateID' => 'fkiEzsigntemplateID',
        'sEzsigntemplatedocumentName' => 'sEzsigntemplatedocumentName',
        'iEzsigntemplatedocumentPagetotal' => 'iEzsigntemplatedocumentPagetotal',
        'iEzsigntemplatedocumentSignaturetotal' => 'iEzsigntemplatedocumentSignaturetotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatedocumentID' => 'setPkiEzsigntemplatedocumentID',
        'fkiEzsigntemplateID' => 'setFkiEzsigntemplateID',
        'sEzsigntemplatedocumentName' => 'setSEzsigntemplatedocumentName',
        'iEzsigntemplatedocumentPagetotal' => 'setIEzsigntemplatedocumentPagetotal',
        'iEzsigntemplatedocumentSignaturetotal' => 'setIEzsigntemplatedocumentSignaturetotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatedocumentID' => 'getPkiEzsigntemplatedocumentID',
        'fkiEzsigntemplateID' => 'getFkiEzsigntemplateID',
        'sEzsigntemplatedocumentName' => 'getSEzsigntemplatedocumentName',
        'iEzsigntemplatedocumentPagetotal' => 'getIEzsigntemplatedocumentPagetotal',
        'iEzsigntemplatedocumentSignaturetotal' => 'getIEzsigntemplatedocumentSignaturetotal'
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
        $this->setIfExists('pkiEzsigntemplatedocumentID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntemplateID', $data ?? [], null);
        $this->setIfExists('sEzsigntemplatedocumentName', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentPagetotal', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentSignaturetotal', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplatedocumentID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplatedocumentID' can't be null";
        }
        if (($this->container['pkiEzsigntemplatedocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplatedocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigntemplateID'] === null) {
            $invalidProperties[] = "'fkiEzsigntemplateID' can't be null";
        }
        if (($this->container['fkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsigntemplatedocumentName'] === null) {
            $invalidProperties[] = "'sEzsigntemplatedocumentName' can't be null";
        }
        if ($this->container['iEzsigntemplatedocumentPagetotal'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentPagetotal' can't be null";
        }
        if (($this->container['iEzsigntemplatedocumentPagetotal'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentPagetotal', must be bigger than or equal to 1.";
        }

        if ($this->container['iEzsigntemplatedocumentSignaturetotal'] === null) {
            $invalidProperties[] = "'iEzsigntemplatedocumentSignaturetotal' can't be null";
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
     * Gets pkiEzsigntemplatedocumentID
     *
     * @return int
     */
    public function getPkiEzsigntemplatedocumentID()
    {
        return $this->container['pkiEzsigntemplatedocumentID'];
    }

    /**
     * Sets pkiEzsigntemplatedocumentID
     *
     * @param int $pkiEzsigntemplatedocumentID The unique ID of the Ezsigntemplatedocument
     *
     * @return self
     */
    public function setPkiEzsigntemplatedocumentID($pkiEzsigntemplatedocumentID)
    {

        if (($pkiEzsigntemplatedocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplatedocumentID when calling EzsigntemplatedocumentGetObjectV1ResponseMPayload., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplatedocumentID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplatedocumentID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplatedocumentID'] = $pkiEzsigntemplatedocumentID;
        $this->container['pkiEzsigntemplatedocumentID'] = (is_null($pkiEzsigntemplatedocumentID) ? null : (int) $pkiEzsigntemplatedocumentID);

        return $this;
    }

    /**
     * Gets fkiEzsigntemplateID
     *
     * @return int
     */
    public function getFkiEzsigntemplateID()
    {
        return $this->container['fkiEzsigntemplateID'];
    }

    /**
     * Sets fkiEzsigntemplateID
     *
     * @param int $fkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setFkiEzsigntemplateID($fkiEzsigntemplateID)
    {

        if (($fkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntemplateID when calling EzsigntemplatedocumentGetObjectV1ResponseMPayload., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntemplateID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntemplateID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntemplateID'] = $fkiEzsigntemplateID;
        $this->container['fkiEzsigntemplateID'] = (is_null($fkiEzsigntemplateID) ? null : (int) $fkiEzsigntemplateID);

        return $this;
    }

    /**
     * Gets sEzsigntemplatedocumentName
     *
     * @return string
     */
    public function getSEzsigntemplatedocumentName()
    {
        return $this->container['sEzsigntemplatedocumentName'];
    }

    /**
     * Sets sEzsigntemplatedocumentName
     *
     * @param string $sEzsigntemplatedocumentName The name of the Ezsigntemplatedocument.
     *
     * @return self
     */
    public function setSEzsigntemplatedocumentName($sEzsigntemplatedocumentName)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplatedocumentName)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplatedocumentName cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplatedocumentName'] = $sEzsigntemplatedocumentName;
        $this->container['sEzsigntemplatedocumentName'] = (is_null($sEzsigntemplatedocumentName) ? null : (string) $sEzsigntemplatedocumentName);

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentPagetotal
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentPagetotal()
    {
        return $this->container['iEzsigntemplatedocumentPagetotal'];
    }

    /**
     * Sets iEzsigntemplatedocumentPagetotal
     *
     * @param int $iEzsigntemplatedocumentPagetotal The number of pages in the Ezsigntemplatedocument.
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentPagetotal($iEzsigntemplatedocumentPagetotal)
    {

        if (($iEzsigntemplatedocumentPagetotal < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentPagetotal when calling EzsigntemplatedocumentGetObjectV1ResponseMPayload., must be bigger than or equal to 1.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentPagetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentPagetotal cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentPagetotal'] = $iEzsigntemplatedocumentPagetotal;
        $this->container['iEzsigntemplatedocumentPagetotal'] = (is_null($iEzsigntemplatedocumentPagetotal) ? null : (int) $iEzsigntemplatedocumentPagetotal);

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentSignaturetotal
     *
     * @return int
     */
    public function getIEzsigntemplatedocumentSignaturetotal()
    {
        return $this->container['iEzsigntemplatedocumentSignaturetotal'];
    }

    /**
     * Sets iEzsigntemplatedocumentSignaturetotal
     *
     * @param int $iEzsigntemplatedocumentSignaturetotal The number of total signatures in the Ezsigntemplate.
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentSignaturetotal($iEzsigntemplatedocumentSignaturetotal)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentSignaturetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentSignaturetotal cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentSignaturetotal'] = $iEzsigntemplatedocumentSignaturetotal;
        $this->container['iEzsigntemplatedocumentSignaturetotal'] = (is_null($iEzsigntemplatedocumentSignaturetotal) ? null : (int) $iEzsigntemplatedocumentSignaturetotal);

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


