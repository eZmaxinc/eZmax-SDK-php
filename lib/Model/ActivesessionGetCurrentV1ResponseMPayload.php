<?php
/**
 * ActivesessionGetCurrentV1ResponseMPayload
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
 * The version of the OpenAPI document: 1.0.43
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
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
 * ActivesessionGetCurrentV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for the /1/object/activesession/getCurrent API Request
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivesessionGetCurrentV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'activesession-getCurrent-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sCustomerCode' => 'string',
        'eActivesessionSessiontype' => 'string',
        'fkiLanguageID' => 'int',
        'sCompanyNameX' => 'string',
        'sDepartmentNameX' => 'string',
        'aRegisteredModules' => 'string[]',
        'aPermissions' => 'int[]',
        'fkiUserID' => 'int',
        'fkiApikeyID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sCustomerCode' => null,
        'eActivesessionSessiontype' => null,
        'fkiLanguageID' => null,
        'sCompanyNameX' => null,
        'sDepartmentNameX' => null,
        'aRegisteredModules' => null,
        'aPermissions' => null,
        'fkiUserID' => null,
        'fkiApikeyID' => null
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
        'sCustomerCode' => 'sCustomerCode',
        'eActivesessionSessiontype' => 'eActivesessionSessiontype',
        'fkiLanguageID' => 'fkiLanguageID',
        'sCompanyNameX' => 'sCompanyNameX',
        'sDepartmentNameX' => 'sDepartmentNameX',
        'aRegisteredModules' => 'a_RegisteredModules',
        'aPermissions' => 'a_Permissions',
        'fkiUserID' => 'fkiUserID',
        'fkiApikeyID' => 'fkiApikeyID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sCustomerCode' => 'setSCustomerCode',
        'eActivesessionSessiontype' => 'setEActivesessionSessiontype',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sCompanyNameX' => 'setSCompanyNameX',
        'sDepartmentNameX' => 'setSDepartmentNameX',
        'aRegisteredModules' => 'setARegisteredModules',
        'aPermissions' => 'setAPermissions',
        'fkiUserID' => 'setFkiUserID',
        'fkiApikeyID' => 'setFkiApikeyID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sCustomerCode' => 'getSCustomerCode',
        'eActivesessionSessiontype' => 'getEActivesessionSessiontype',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sCompanyNameX' => 'getSCompanyNameX',
        'sDepartmentNameX' => 'getSDepartmentNameX',
        'aRegisteredModules' => 'getARegisteredModules',
        'aPermissions' => 'getAPermissions',
        'fkiUserID' => 'getFkiUserID',
        'fkiApikeyID' => 'getFkiApikeyID'
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

    const E_ACTIVESESSION_SESSIONTYPE_NORMAL = 'Normal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEActivesessionSessiontypeAllowableValues()
    {
        return [
            self::E_ACTIVESESSION_SESSIONTYPE_NORMAL,
        ];
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
        $this->container['sCustomerCode'] = $data['sCustomerCode'] ?? null;
        $this->container['eActivesessionSessiontype'] = $data['eActivesessionSessiontype'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sCompanyNameX'] = $data['sCompanyNameX'] ?? null;
        $this->container['sDepartmentNameX'] = $data['sDepartmentNameX'] ?? null;
        $this->container['aRegisteredModules'] = $data['aRegisteredModules'] ?? null;
        $this->container['aPermissions'] = $data['aPermissions'] ?? null;
        $this->container['fkiUserID'] = $data['fkiUserID'] ?? null;
        $this->container['fkiApikeyID'] = $data['fkiApikeyID'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sCustomerCode'] === null) {
            $invalidProperties[] = "'sCustomerCode' can't be null";
        }
        if ($this->container['eActivesessionSessiontype'] === null) {
            $invalidProperties[] = "'eActivesessionSessiontype' can't be null";
        }
        $allowedValues = $this->getEActivesessionSessiontypeAllowableValues();
        if (!is_null($this->container['eActivesessionSessiontype']) && !in_array($this->container['eActivesessionSessiontype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eActivesessionSessiontype', must be one of '%s'",
                $this->container['eActivesessionSessiontype'],
                implode("', '", $allowedValues)
            );
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

        if ($this->container['sCompanyNameX'] === null) {
            $invalidProperties[] = "'sCompanyNameX' can't be null";
        }
        if ($this->container['sDepartmentNameX'] === null) {
            $invalidProperties[] = "'sDepartmentNameX' can't be null";
        }
        if ($this->container['aRegisteredModules'] === null) {
            $invalidProperties[] = "'aRegisteredModules' can't be null";
        }
        if ($this->container['aPermissions'] === null) {
            $invalidProperties[] = "'aPermissions' can't be null";
        }
        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if ($this->container['fkiApikeyID'] === null) {
            $invalidProperties[] = "'fkiApikeyID' can't be null";
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
     * Gets sCustomerCode
     *
     * @return string
     */
    public function getSCustomerCode()
    {
        return $this->container['sCustomerCode'];
    }

    /**
     * Sets sCustomerCode
     *
     * @param string $sCustomerCode The customer code specific to the client in which the API request is being made
     *
     * @return self
     */
    public function setSCustomerCode($sCustomerCode)
    {
        $this->container['sCustomerCode'] = $sCustomerCode;

        return $this;
    }

    /**
     * Gets eActivesessionSessiontype
     *
     * @return string
     */
    public function getEActivesessionSessiontype()
    {
        return $this->container['eActivesessionSessiontype'];
    }

    /**
     * Sets eActivesessionSessiontype
     *
     * @param string $eActivesessionSessiontype The type of session used for the API request call
     *
     * @return self
     */
    public function setEActivesessionSessiontype($eActivesessionSessiontype)
    {
        $allowedValues = $this->getEActivesessionSessiontypeAllowableValues();
        if (!in_array($eActivesessionSessiontype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eActivesessionSessiontype', must be one of '%s'",
                    $eActivesessionSessiontype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eActivesessionSessiontype'] = $eActivesessionSessiontype;

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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ActivesessionGetCurrentV1ResponseMPayload., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ActivesessionGetCurrentV1ResponseMPayload., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets sCompanyNameX
     *
     * @return string
     */
    public function getSCompanyNameX()
    {
        return $this->container['sCompanyNameX'];
    }

    /**
     * Sets sCompanyNameX
     *
     * @param string $sCompanyNameX The name of the active Company in the current language
     *
     * @return self
     */
    public function setSCompanyNameX($sCompanyNameX)
    {
        $this->container['sCompanyNameX'] = $sCompanyNameX;

        return $this;
    }

    /**
     * Gets sDepartmentNameX
     *
     * @return string
     */
    public function getSDepartmentNameX()
    {
        return $this->container['sDepartmentNameX'];
    }

    /**
     * Sets sDepartmentNameX
     *
     * @param string $sDepartmentNameX The name of the active Department in the current language
     *
     * @return self
     */
    public function setSDepartmentNameX($sDepartmentNameX)
    {
        $this->container['sDepartmentNameX'] = $sDepartmentNameX;

        return $this;
    }

    /**
     * Gets aRegisteredModules
     *
     * @return string[]
     */
    public function getARegisteredModules()
    {
        return $this->container['aRegisteredModules'];
    }

    /**
     * Sets aRegisteredModules
     *
     * @param string[] $aRegisteredModules An Array of Registered modules.  These are the modules that are Licensed to be used by the User or the API Key.
     *
     * @return self
     */
    public function setARegisteredModules($aRegisteredModules)
    {
        $this->container['aRegisteredModules'] = $aRegisteredModules;

        return $this;
    }

    /**
     * Gets aPermissions
     *
     * @return int[]
     */
    public function getAPermissions()
    {
        return $this->container['aPermissions'];
    }

    /**
     * Sets aPermissions
     *
     * @param int[] $aPermissions An array of permissions granted to the user or api key
     *
     * @return self
     */
    public function setAPermissions($aPermissions)
    {
        $this->container['aPermissions'] = $aPermissions;

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
        $this->container['fkiUserID'] = $fkiUserID;

        return $this;
    }

    /**
     * Gets fkiApikeyID
     *
     * @return int
     */
    public function getFkiApikeyID()
    {
        return $this->container['fkiApikeyID'];
    }

    /**
     * Sets fkiApikeyID
     *
     * @param int $fkiApikeyID The unique ID of the Apikey
     *
     * @return self
     */
    public function setFkiApikeyID($fkiApikeyID)
    {
        $this->container['fkiApikeyID'] = $fkiApikeyID;

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


?>