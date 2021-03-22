<?php
/**
 * SsprUnlockAccountV1Request
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.0.38
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
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
 * SsprUnlockAccountV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for the /1/module/sspr/unlockAccount API Request
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SsprUnlockAccountV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'sspr-unlockAccount-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pksCustomerCode' => 'string',
        'fkiLanguageID' => 'int',
        'eUserTypeSSPR' => '\eZmaxAPI\Model\FieldEUserTypeSSPR',
        'sEmailAddress' => 'string',
        'sUserLoginname' => 'string',
        'binUserSSPRtoken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pksCustomerCode' => null,
        'fkiLanguageID' => null,
        'eUserTypeSSPR' => null,
        'sEmailAddress' => null,
        'sUserLoginname' => null,
        'binUserSSPRtoken' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pksCustomerCode' => 'pksCustomerCode',
        'fkiLanguageID' => 'fkiLanguageID',
        'eUserTypeSSPR' => 'eUserTypeSSPR',
        'sEmailAddress' => 'sEmailAddress',
        'sUserLoginname' => 'sUserLoginname',
        'binUserSSPRtoken' => 'binUserSSPRtoken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pksCustomerCode' => 'setPksCustomerCode',
        'fkiLanguageID' => 'setFkiLanguageID',
        'eUserTypeSSPR' => 'setEUserTypeSSPR',
        'sEmailAddress' => 'setSEmailAddress',
        'sUserLoginname' => 'setSUserLoginname',
        'binUserSSPRtoken' => 'setBinUserSSPRtoken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pksCustomerCode' => 'getPksCustomerCode',
        'fkiLanguageID' => 'getFkiLanguageID',
        'eUserTypeSSPR' => 'getEUserTypeSSPR',
        'sEmailAddress' => 'getSEmailAddress',
        'sUserLoginname' => 'getSUserLoginname',
        'binUserSSPRtoken' => 'getBinUserSSPRtoken'
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
        $this->container['pksCustomerCode'] = $data['pksCustomerCode'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['eUserTypeSSPR'] = $data['eUserTypeSSPR'] ?? null;
        $this->container['sEmailAddress'] = $data['sEmailAddress'] ?? null;
        $this->container['sUserLoginname'] = $data['sUserLoginname'] ?? null;
        $this->container['binUserSSPRtoken'] = $data['binUserSSPRtoken'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pksCustomerCode'] === null) {
            $invalidProperties[] = "'pksCustomerCode' can't be null";
        }
        if ((mb_strlen($this->container['pksCustomerCode']) > 6)) {
            $invalidProperties[] = "invalid value for 'pksCustomerCode', the character length must be smaller than or equal to 6.";
        }

        if ((mb_strlen($this->container['pksCustomerCode']) < 2)) {
            $invalidProperties[] = "invalid value for 'pksCustomerCode', the character length must be bigger than or equal to 2.";
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

        if ($this->container['eUserTypeSSPR'] === null) {
            $invalidProperties[] = "'eUserTypeSSPR' can't be null";
        }
        if ($this->container['binUserSSPRtoken'] === null) {
            $invalidProperties[] = "'binUserSSPRtoken' can't be null";
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
     * Gets pksCustomerCode
     *
     * @return string
     */
    public function getPksCustomerCode()
    {
        return $this->container['pksCustomerCode'];
    }

    /**
     * Sets pksCustomerCode
     *
     * @param string $pksCustomerCode The customer code assigned to your account
     *
     * @return self
     */
    public function setPksCustomerCode($pksCustomerCode)
    {
        if ((mb_strlen($pksCustomerCode) > 6)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling SsprUnlockAccountV1Request., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($pksCustomerCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling SsprUnlockAccountV1Request., must be bigger than or equal to 2.');
        }

        $this->container['pksCustomerCode'] = $pksCustomerCode;

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

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling SsprUnlockAccountV1Request., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling SsprUnlockAccountV1Request., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets eUserTypeSSPR
     *
     * @return \eZmaxAPI\Model\FieldEUserTypeSSPR
     */
    public function getEUserTypeSSPR()
    {
        return $this->container['eUserTypeSSPR'];
    }

    /**
     * Sets eUserTypeSSPR
     *
     * @param \eZmaxAPI\Model\FieldEUserTypeSSPR $eUserTypeSSPR eUserTypeSSPR
     *
     * @return self
     */
    public function setEUserTypeSSPR($eUserTypeSSPR)
    {
        $this->container['eUserTypeSSPR'] = $eUserTypeSSPR;

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string|null
     */
    public function getSEmailAddress()
    {
        return $this->container['sEmailAddress'];
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
        $this->container['sEmailAddress'] = $sEmailAddress;

        return $this;
    }

    /**
     * Gets sUserLoginname
     *
     * @return string|null
     */
    public function getSUserLoginname()
    {
        return $this->container['sUserLoginname'];
    }

    /**
     * Sets sUserLoginname
     *
     * @param string|null $sUserLoginname The Login name of the User.
     *
     * @return self
     */
    public function setSUserLoginname($sUserLoginname)
    {
        $this->container['sUserLoginname'] = $sUserLoginname;

        return $this;
    }

    /**
     * Gets binUserSSPRtoken
     *
     * @return string
     */
    public function getBinUserSSPRtoken()
    {
        return $this->container['binUserSSPRtoken'];
    }

    /**
     * Sets binUserSSPRtoken
     *
     * @param string $binUserSSPRtoken Hex Encoded Secret SSPR token
     *
     * @return self
     */
    public function setBinUserSSPRtoken($binUserSSPRtoken)
    {
        $this->container['binUserSSPRtoken'] = $binUserSSPRtoken;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


