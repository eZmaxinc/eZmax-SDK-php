<?php
/**
 * BillingentityinternalAutocompleteElementResponse
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
 * The version of the OpenAPI document: 1.1.11
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * BillingentityinternalAutocompleteElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Billingentityinternal AutocompleteElement Response
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BillingentityinternalAutocompleteElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'billingentityinternal-AutocompleteElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sBillingentityinternalDescriptionX' => 'string',
        'pkiBillingentityinternalID' => 'int',
        'bBillingentityinternalIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sBillingentityinternalDescriptionX' => null,
        'pkiBillingentityinternalID' => null,
        'bBillingentityinternalIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sBillingentityinternalDescriptionX' => false,
		'pkiBillingentityinternalID' => false,
		'bBillingentityinternalIsactive' => false
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
        'sBillingentityinternalDescriptionX' => 'sBillingentityinternalDescriptionX',
        'pkiBillingentityinternalID' => 'pkiBillingentityinternalID',
        'bBillingentityinternalIsactive' => 'bBillingentityinternalIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sBillingentityinternalDescriptionX' => 'setSBillingentityinternalDescriptionX',
        'pkiBillingentityinternalID' => 'setPkiBillingentityinternalID',
        'bBillingentityinternalIsactive' => 'setBBillingentityinternalIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sBillingentityinternalDescriptionX' => 'getSBillingentityinternalDescriptionX',
        'pkiBillingentityinternalID' => 'getPkiBillingentityinternalID',
        'bBillingentityinternalIsactive' => 'getBBillingentityinternalIsactive'
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
        $this->setIfExists('sBillingentityinternalDescriptionX', $data ?? [], null);
        $this->setIfExists('pkiBillingentityinternalID', $data ?? [], null);
        $this->setIfExists('bBillingentityinternalIsactive', $data ?? [], null);
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

        if ($this->container['sBillingentityinternalDescriptionX'] === null) {
            $invalidProperties[] = "'sBillingentityinternalDescriptionX' can't be null";
        }
        if ($this->container['pkiBillingentityinternalID'] === null) {
            $invalidProperties[] = "'pkiBillingentityinternalID' can't be null";
        }
        if (($this->container['pkiBillingentityinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiBillingentityinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['bBillingentityinternalIsactive'] === null) {
            $invalidProperties[] = "'bBillingentityinternalIsactive' can't be null";
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
     * Gets sBillingentityinternalDescriptionX
     *
     * @return string
     */
    public function getSBillingentityinternalDescriptionX()
    {
        return $this->container['sBillingentityinternalDescriptionX'];
    }

    /**
     * Sets sBillingentityinternalDescriptionX
     *
     * @param string $sBillingentityinternalDescriptionX The description of the Billingentityinternal in the language of the requester
     *
     * @return self
     */
    public function setSBillingentityinternalDescriptionX($sBillingentityinternalDescriptionX)
    {

        //if (is_null($sBillingentityinternalDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sBillingentityinternalDescriptionX cannot be null');
        //}
        $this->container['sBillingentityinternalDescriptionX'] = (is_null($sBillingentityinternalDescriptionX) ? null : (string) $sBillingentityinternalDescriptionX);

        return $this;
    }

    /**
     * Gets pkiBillingentityinternalID
     *
     * @return int
     */
    public function getPkiBillingentityinternalID()
    {
        return $this->container['pkiBillingentityinternalID'];
    }

    /**
     * Sets pkiBillingentityinternalID
     *
     * @param int $pkiBillingentityinternalID The unique ID of the Billingentityinternal.
     *
     * @return self
     */
    public function setPkiBillingentityinternalID($pkiBillingentityinternalID)
    {

        if (($pkiBillingentityinternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiBillingentityinternalID when calling BillingentityinternalAutocompleteElementResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiBillingentityinternalID)) {
            //throw new \InvalidArgumentException('non-nullable pkiBillingentityinternalID cannot be null');
        //}
        $this->container['pkiBillingentityinternalID'] = (is_null($pkiBillingentityinternalID) ? null : (int) $pkiBillingentityinternalID);

        return $this;
    }

    /**
     * Gets bBillingentityinternalIsactive
     *
     * @return bool
     */
    public function getBBillingentityinternalIsactive()
    {
        return $this->container['bBillingentityinternalIsactive'];
    }

    /**
     * Sets bBillingentityinternalIsactive
     *
     * @param bool $bBillingentityinternalIsactive Whether the Billingentityinternal is active or not
     *
     * @return self
     */
    public function setBBillingentityinternalIsactive($bBillingentityinternalIsactive)
    {

        //if (is_null($bBillingentityinternalIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bBillingentityinternalIsactive cannot be null');
        //}
        $this->container['bBillingentityinternalIsactive'] = (is_null($bBillingentityinternalIsactive) ? null : (bool) $bBillingentityinternalIsactive);

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


