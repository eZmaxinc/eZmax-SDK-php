<?php
/**
 * EzmaxinvoicingsummaryinternalResponseCompound
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
 * The version of the OpenAPI document: 1.1.16
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
 * EzmaxinvoicingsummaryinternalResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicingsummaryinternal Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicingsummaryinternalResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicingsummaryinternal-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicingsummaryinternalID' => 'int',
        'objEzmaxinvoicingsummaryinternalDescription' => '\eZmaxAPI\Model\MultilingualEzmaxinvoicingsummaryinternalDescription',
        'sEzmaxinvoicingsummaryinternalDescriptionX' => 'string',
        'fkiEzmaxinvoicingID' => 'int',
        'fkiBillingentityinternalID' => 'int',
        'sBillingentityinternalDescriptionX' => 'string',
        'aObjEzmaxinvoicingsummaryinternaldetail' => '\eZmaxAPI\Model\EzmaxinvoicingsummaryinternaldetailResponseCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxinvoicingsummaryinternalID' => null,
        'objEzmaxinvoicingsummaryinternalDescription' => null,
        'sEzmaxinvoicingsummaryinternalDescriptionX' => null,
        'fkiEzmaxinvoicingID' => null,
        'fkiBillingentityinternalID' => null,
        'sBillingentityinternalDescriptionX' => null,
        'aObjEzmaxinvoicingsummaryinternaldetail' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicingsummaryinternalID' => false,
		'objEzmaxinvoicingsummaryinternalDescription' => false,
		'sEzmaxinvoicingsummaryinternalDescriptionX' => false,
		'fkiEzmaxinvoicingID' => false,
		'fkiBillingentityinternalID' => false,
		'sBillingentityinternalDescriptionX' => false,
		'aObjEzmaxinvoicingsummaryinternaldetail' => false
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
        'pkiEzmaxinvoicingsummaryinternalID' => 'pkiEzmaxinvoicingsummaryinternalID',
        'objEzmaxinvoicingsummaryinternalDescription' => 'objEzmaxinvoicingsummaryinternalDescription',
        'sEzmaxinvoicingsummaryinternalDescriptionX' => 'sEzmaxinvoicingsummaryinternalDescriptionX',
        'fkiEzmaxinvoicingID' => 'fkiEzmaxinvoicingID',
        'fkiBillingentityinternalID' => 'fkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'sBillingentityinternalDescriptionX',
        'aObjEzmaxinvoicingsummaryinternaldetail' => 'a_objEzmaxinvoicingsummaryinternaldetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicingsummaryinternalID' => 'setPkiEzmaxinvoicingsummaryinternalID',
        'objEzmaxinvoicingsummaryinternalDescription' => 'setObjEzmaxinvoicingsummaryinternalDescription',
        'sEzmaxinvoicingsummaryinternalDescriptionX' => 'setSEzmaxinvoicingsummaryinternalDescriptionX',
        'fkiEzmaxinvoicingID' => 'setFkiEzmaxinvoicingID',
        'fkiBillingentityinternalID' => 'setFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'setSBillingentityinternalDescriptionX',
        'aObjEzmaxinvoicingsummaryinternaldetail' => 'setAObjEzmaxinvoicingsummaryinternaldetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicingsummaryinternalID' => 'getPkiEzmaxinvoicingsummaryinternalID',
        'objEzmaxinvoicingsummaryinternalDescription' => 'getObjEzmaxinvoicingsummaryinternalDescription',
        'sEzmaxinvoicingsummaryinternalDescriptionX' => 'getSEzmaxinvoicingsummaryinternalDescriptionX',
        'fkiEzmaxinvoicingID' => 'getFkiEzmaxinvoicingID',
        'fkiBillingentityinternalID' => 'getFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'getSBillingentityinternalDescriptionX',
        'aObjEzmaxinvoicingsummaryinternaldetail' => 'getAObjEzmaxinvoicingsummaryinternaldetail'
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
        $this->setIfExists('pkiEzmaxinvoicingsummaryinternalID', $data ?? [], null);
        $this->setIfExists('objEzmaxinvoicingsummaryinternalDescription', $data ?? [], null);
        $this->setIfExists('sEzmaxinvoicingsummaryinternalDescriptionX', $data ?? [], null);
        $this->setIfExists('fkiEzmaxinvoicingID', $data ?? [], null);
        $this->setIfExists('fkiBillingentityinternalID', $data ?? [], null);
        $this->setIfExists('sBillingentityinternalDescriptionX', $data ?? [], null);
        $this->setIfExists('aObjEzmaxinvoicingsummaryinternaldetail', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzmaxinvoicingsummaryinternalID']) && ($this->container['pkiEzmaxinvoicingsummaryinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxinvoicingsummaryinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['objEzmaxinvoicingsummaryinternalDescription'] === null) {
            $invalidProperties[] = "'objEzmaxinvoicingsummaryinternalDescription' can't be null";
        }
        if ($this->container['sEzmaxinvoicingsummaryinternalDescriptionX'] === null) {
            $invalidProperties[] = "'sEzmaxinvoicingsummaryinternalDescriptionX' can't be null";
        }
        if ((mb_strlen($this->container['sEzmaxinvoicingsummaryinternalDescriptionX']) > 70)) {
            $invalidProperties[] = "invalid value for 'sEzmaxinvoicingsummaryinternalDescriptionX', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['fkiEzmaxinvoicingID']) && ($this->container['fkiEzmaxinvoicingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxinvoicingID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiBillingentityinternalID'] === null) {
            $invalidProperties[] = "'fkiBillingentityinternalID' can't be null";
        }
        if (($this->container['fkiBillingentityinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiBillingentityinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['sBillingentityinternalDescriptionX'] === null) {
            $invalidProperties[] = "'sBillingentityinternalDescriptionX' can't be null";
        }
        if ($this->container['aObjEzmaxinvoicingsummaryinternaldetail'] === null) {
            $invalidProperties[] = "'aObjEzmaxinvoicingsummaryinternaldetail' can't be null";
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
     * Gets pkiEzmaxinvoicingsummaryinternalID
     *
     * @return int|null
     */
    public function getPkiEzmaxinvoicingsummaryinternalID()
    {
        return $this->container['pkiEzmaxinvoicingsummaryinternalID'];
    }

    /**
     * Sets pkiEzmaxinvoicingsummaryinternalID
     *
     * @param int|null $pkiEzmaxinvoicingsummaryinternalID The unique ID of the Ezmaxinvoicingsummaryinternal
     *
     * @return self
     */
    public function setPkiEzmaxinvoicingsummaryinternalID($pkiEzmaxinvoicingsummaryinternalID)
    {

        if (!is_null($pkiEzmaxinvoicingsummaryinternalID) && ($pkiEzmaxinvoicingsummaryinternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzmaxinvoicingsummaryinternalID when calling EzmaxinvoicingsummaryinternalResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzmaxinvoicingsummaryinternalID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicingsummaryinternalID cannot be null');
        //}
        $this->container['pkiEzmaxinvoicingsummaryinternalID'] = (is_null($pkiEzmaxinvoicingsummaryinternalID) ? null : (int) $pkiEzmaxinvoicingsummaryinternalID);

        return $this;
    }

    /**
     * Gets objEzmaxinvoicingsummaryinternalDescription
     *
     * @return \eZmaxAPI\Model\MultilingualEzmaxinvoicingsummaryinternalDescription
     */
    public function getObjEzmaxinvoicingsummaryinternalDescription()
    {
        return $this->container['objEzmaxinvoicingsummaryinternalDescription'];
    }

    /**
     * Sets objEzmaxinvoicingsummaryinternalDescription
     *
     * @param \eZmaxAPI\Model\MultilingualEzmaxinvoicingsummaryinternalDescription $objEzmaxinvoicingsummaryinternalDescription objEzmaxinvoicingsummaryinternalDescription
     *
     * @return self
     */
    public function setObjEzmaxinvoicingsummaryinternalDescription($objEzmaxinvoicingsummaryinternalDescription)
    {

        //if (is_null($objEzmaxinvoicingsummaryinternalDescription)) {
            //throw new \InvalidArgumentException('non-nullable objEzmaxinvoicingsummaryinternalDescription cannot be null');
        //}
        $this->container['objEzmaxinvoicingsummaryinternalDescription'] = $objEzmaxinvoicingsummaryinternalDescription;

        return $this;
    }

    /**
     * Gets sEzmaxinvoicingsummaryinternalDescriptionX
     *
     * @return string
     */
    public function getSEzmaxinvoicingsummaryinternalDescriptionX()
    {
        return $this->container['sEzmaxinvoicingsummaryinternalDescriptionX'];
    }

    /**
     * Sets sEzmaxinvoicingsummaryinternalDescriptionX
     *
     * @param string $sEzmaxinvoicingsummaryinternalDescriptionX The Ezmaxinvoicingsummaryinternal description in the language of the requester
     *
     * @return self
     */
    public function setSEzmaxinvoicingsummaryinternalDescriptionX($sEzmaxinvoicingsummaryinternalDescriptionX)
    {
        if ((mb_strlen($sEzmaxinvoicingsummaryinternalDescriptionX) > 70)) {
            throw new \InvalidArgumentException('invalid length for $sEzmaxinvoicingsummaryinternalDescriptionX when calling EzmaxinvoicingsummaryinternalResponseCompound., must be smaller than or equal to 70.');
        }


        //if (is_null($sEzmaxinvoicingsummaryinternalDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sEzmaxinvoicingsummaryinternalDescriptionX cannot be null');
        //}
        $this->container['sEzmaxinvoicingsummaryinternalDescriptionX'] = (is_null($sEzmaxinvoicingsummaryinternalDescriptionX) ? null : (string) $sEzmaxinvoicingsummaryinternalDescriptionX);

        return $this;
    }

    /**
     * Gets fkiEzmaxinvoicingID
     *
     * @return int|null
     */
    public function getFkiEzmaxinvoicingID()
    {
        return $this->container['fkiEzmaxinvoicingID'];
    }

    /**
     * Sets fkiEzmaxinvoicingID
     *
     * @param int|null $fkiEzmaxinvoicingID The unique ID of the Ezmaxinvoicing
     *
     * @return self
     */
    public function setFkiEzmaxinvoicingID($fkiEzmaxinvoicingID)
    {

        if (!is_null($fkiEzmaxinvoicingID) && ($fkiEzmaxinvoicingID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxinvoicingID when calling EzmaxinvoicingsummaryinternalResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzmaxinvoicingID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxinvoicingID cannot be null');
        //}
        $this->container['fkiEzmaxinvoicingID'] = (is_null($fkiEzmaxinvoicingID) ? null : (int) $fkiEzmaxinvoicingID);

        return $this;
    }

    /**
     * Gets fkiBillingentityinternalID
     *
     * @return int
     */
    public function getFkiBillingentityinternalID()
    {
        return $this->container['fkiBillingentityinternalID'];
    }

    /**
     * Sets fkiBillingentityinternalID
     *
     * @param int $fkiBillingentityinternalID The unique ID of the Billingentityinternal.
     *
     * @return self
     */
    public function setFkiBillingentityinternalID($fkiBillingentityinternalID)
    {

        if (($fkiBillingentityinternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiBillingentityinternalID when calling EzmaxinvoicingsummaryinternalResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiBillingentityinternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBillingentityinternalID cannot be null');
        //}
        $this->container['fkiBillingentityinternalID'] = (is_null($fkiBillingentityinternalID) ? null : (int) $fkiBillingentityinternalID);

        return $this;
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
     * Gets aObjEzmaxinvoicingsummaryinternaldetail
     *
     * @return \eZmaxAPI\Model\EzmaxinvoicingsummaryinternaldetailResponseCompound[]
     */
    public function getAObjEzmaxinvoicingsummaryinternaldetail()
    {
        return $this->container['aObjEzmaxinvoicingsummaryinternaldetail'];
    }

    /**
     * Sets aObjEzmaxinvoicingsummaryinternaldetail
     *
     * @param \eZmaxAPI\Model\EzmaxinvoicingsummaryinternaldetailResponseCompound[] $aObjEzmaxinvoicingsummaryinternaldetail 
     *
     * @return self
     */
    public function setAObjEzmaxinvoicingsummaryinternaldetail($aObjEzmaxinvoicingsummaryinternaldetail)
    {

        //if (is_null($aObjEzmaxinvoicingsummaryinternaldetail)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzmaxinvoicingsummaryinternaldetail cannot be null');
        //}
        $this->container['aObjEzmaxinvoicingsummaryinternaldetail'] = $aObjEzmaxinvoicingsummaryinternaldetail;

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


