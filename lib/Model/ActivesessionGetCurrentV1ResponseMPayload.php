<?php
/**
 * ActivesessionGetCurrentV1ResponseMPayload
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
 * The version of the OpenAPI document: 1.1.9
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
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
 * @description Payload for GET /1/object/activesession/getCurrent
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'eActivesessionUsertype' => '\eZmaxAPI\Model\FieldEActivesessionUsertype',
        'eActivesessionWeekdaystart' => '\eZmaxAPI\Model\FieldEActivesessionWeekdaystart',
        'fkiLanguageID' => 'int',
        'sCompanyNameX' => 'string',
        'sDepartmentNameX' => 'string',
        'bActivesessionDebug' => 'bool',
        'pksCustomerCode' => 'string',
        'aPkiPermissionID' => 'int[]',
        'objUserReal' => '\eZmaxAPI\Model\ActivesessionResponseCompoundUser',
        'objUserCloned' => '\eZmaxAPI\Model\ActivesessionResponseCompoundUser',
        'objApikey' => '\eZmaxAPI\Model\ActivesessionResponseCompoundApikey',
        'aEModuleInternalname' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eActivesessionUsertype' => null,
        'eActivesessionWeekdaystart' => null,
        'fkiLanguageID' => null,
        'sCompanyNameX' => null,
        'sDepartmentNameX' => null,
        'bActivesessionDebug' => null,
        'pksCustomerCode' => null,
        'aPkiPermissionID' => null,
        'objUserReal' => null,
        'objUserCloned' => null,
        'objApikey' => null,
        'aEModuleInternalname' => null
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
        'eActivesessionUsertype' => 'eActivesessionUsertype',
        'eActivesessionWeekdaystart' => 'eActivesessionWeekdaystart',
        'fkiLanguageID' => 'fkiLanguageID',
        'sCompanyNameX' => 'sCompanyNameX',
        'sDepartmentNameX' => 'sDepartmentNameX',
        'bActivesessionDebug' => 'bActivesessionDebug',
        'pksCustomerCode' => 'pksCustomerCode',
        'aPkiPermissionID' => 'a_pkiPermissionID',
        'objUserReal' => 'objUserReal',
        'objUserCloned' => 'objUserCloned',
        'objApikey' => 'objApikey',
        'aEModuleInternalname' => 'a_eModuleInternalname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eActivesessionUsertype' => 'setEActivesessionUsertype',
        'eActivesessionWeekdaystart' => 'setEActivesessionWeekdaystart',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sCompanyNameX' => 'setSCompanyNameX',
        'sDepartmentNameX' => 'setSDepartmentNameX',
        'bActivesessionDebug' => 'setBActivesessionDebug',
        'pksCustomerCode' => 'setPksCustomerCode',
        'aPkiPermissionID' => 'setAPkiPermissionID',
        'objUserReal' => 'setObjUserReal',
        'objUserCloned' => 'setObjUserCloned',
        'objApikey' => 'setObjApikey',
        'aEModuleInternalname' => 'setAEModuleInternalname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eActivesessionUsertype' => 'getEActivesessionUsertype',
        'eActivesessionWeekdaystart' => 'getEActivesessionWeekdaystart',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sCompanyNameX' => 'getSCompanyNameX',
        'sDepartmentNameX' => 'getSDepartmentNameX',
        'bActivesessionDebug' => 'getBActivesessionDebug',
        'pksCustomerCode' => 'getPksCustomerCode',
        'aPkiPermissionID' => 'getAPkiPermissionID',
        'objUserReal' => 'getObjUserReal',
        'objUserCloned' => 'getObjUserCloned',
        'objApikey' => 'getObjApikey',
        'aEModuleInternalname' => 'getAEModuleInternalname'
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
        $this->container['eActivesessionUsertype'] = $data['eActivesessionUsertype'] ?? null;
        $this->container['eActivesessionWeekdaystart'] = $data['eActivesessionWeekdaystart'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sCompanyNameX'] = $data['sCompanyNameX'] ?? null;
        $this->container['sDepartmentNameX'] = $data['sDepartmentNameX'] ?? null;
        $this->container['bActivesessionDebug'] = $data['bActivesessionDebug'] ?? null;
        $this->container['pksCustomerCode'] = $data['pksCustomerCode'] ?? null;
        $this->container['aPkiPermissionID'] = $data['aPkiPermissionID'] ?? null;
        $this->container['objUserReal'] = $data['objUserReal'] ?? null;
        $this->container['objUserCloned'] = $data['objUserCloned'] ?? null;
        $this->container['objApikey'] = $data['objApikey'] ?? null;
        $this->container['aEModuleInternalname'] = $data['aEModuleInternalname'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eActivesessionUsertype'] === null) {
            $invalidProperties[] = "'eActivesessionUsertype' can't be null";
        }
        if ($this->container['eActivesessionWeekdaystart'] === null) {
            $invalidProperties[] = "'eActivesessionWeekdaystart' can't be null";
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
        if ($this->container['bActivesessionDebug'] === null) {
            $invalidProperties[] = "'bActivesessionDebug' can't be null";
        }
        if ($this->container['pksCustomerCode'] === null) {
            $invalidProperties[] = "'pksCustomerCode' can't be null";
        }
        if ((mb_strlen($this->container['pksCustomerCode']) > 6)) {
            $invalidProperties[] = "invalid value for 'pksCustomerCode', the character length must be smaller than or equal to 6.";
        }

        if ((mb_strlen($this->container['pksCustomerCode']) < 2)) {
            $invalidProperties[] = "invalid value for 'pksCustomerCode', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['aPkiPermissionID'] === null) {
            $invalidProperties[] = "'aPkiPermissionID' can't be null";
        }
        if ($this->container['objUserReal'] === null) {
            $invalidProperties[] = "'objUserReal' can't be null";
        }
        if ($this->container['aEModuleInternalname'] === null) {
            $invalidProperties[] = "'aEModuleInternalname' can't be null";
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
     * Gets eActivesessionUsertype
     *
     * @return \eZmaxAPI\Model\FieldEActivesessionUsertype
     */
    public function getEActivesessionUsertype()
    {
        return $this->container['eActivesessionUsertype'];
    }

    /**
     * Sets eActivesessionUsertype
     *
     * @param \eZmaxAPI\Model\FieldEActivesessionUsertype $eActivesessionUsertype eActivesessionUsertype
     *
     * @return self
     */
    public function setEActivesessionUsertype($eActivesessionUsertype)
    {
        $this->container['eActivesessionUsertype'] = $eActivesessionUsertype;

        return $this;
    }

    /**
     * Gets eActivesessionWeekdaystart
     *
     * @return \eZmaxAPI\Model\FieldEActivesessionWeekdaystart
     */
    public function getEActivesessionWeekdaystart()
    {
        return $this->container['eActivesessionWeekdaystart'];
    }

    /**
     * Sets eActivesessionWeekdaystart
     *
     * @param \eZmaxAPI\Model\FieldEActivesessionWeekdaystart $eActivesessionWeekdaystart eActivesessionWeekdaystart
     *
     * @return self
     */
    public function setEActivesessionWeekdaystart($eActivesessionWeekdaystart)
    {
        $this->container['eActivesessionWeekdaystart'] = $eActivesessionWeekdaystart;

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
     * @param string $sCompanyNameX The Name of the Company in the language of the requester
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
     * @param string $sDepartmentNameX The Name of the Department in the language of the requester
     *
     * @return self
     */
    public function setSDepartmentNameX($sDepartmentNameX)
    {
        $this->container['sDepartmentNameX'] = $sDepartmentNameX;

        return $this;
    }

    /**
     * Gets bActivesessionDebug
     *
     * @return bool
     */
    public function getBActivesessionDebug()
    {
        return $this->container['bActivesessionDebug'];
    }

    /**
     * Sets bActivesessionDebug
     *
     * @param bool $bActivesessionDebug Whether the active session is in debug or not
     *
     * @return self
     */
    public function setBActivesessionDebug($bActivesessionDebug)
    {
        $this->container['bActivesessionDebug'] = $bActivesessionDebug;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling ActivesessionGetCurrentV1ResponseMPayload., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($pksCustomerCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling ActivesessionGetCurrentV1ResponseMPayload., must be bigger than or equal to 2.');
        }

        $this->container['pksCustomerCode'] = $pksCustomerCode;

        return $this;
    }

    /**
     * Gets aPkiPermissionID
     *
     * @return int[]
     */
    public function getAPkiPermissionID()
    {
        return $this->container['aPkiPermissionID'];
    }

    /**
     * Sets aPkiPermissionID
     *
     * @param int[] $aPkiPermissionID An array of permissions granted to the user or api key
     *
     * @return self
     */
    public function setAPkiPermissionID($aPkiPermissionID)
    {
        $this->container['aPkiPermissionID'] = $aPkiPermissionID;

        return $this;
    }

    /**
     * Gets objUserReal
     *
     * @return \eZmaxAPI\Model\ActivesessionResponseCompoundUser
     */
    public function getObjUserReal()
    {
        return $this->container['objUserReal'];
    }

    /**
     * Sets objUserReal
     *
     * @param \eZmaxAPI\Model\ActivesessionResponseCompoundUser $objUserReal objUserReal
     *
     * @return self
     */
    public function setObjUserReal($objUserReal)
    {
        $this->container['objUserReal'] = $objUserReal;

        return $this;
    }

    /**
     * Gets objUserCloned
     *
     * @return \eZmaxAPI\Model\ActivesessionResponseCompoundUser|null
     */
    public function getObjUserCloned()
    {
        return $this->container['objUserCloned'];
    }

    /**
     * Sets objUserCloned
     *
     * @param \eZmaxAPI\Model\ActivesessionResponseCompoundUser|null $objUserCloned objUserCloned
     *
     * @return self
     */
    public function setObjUserCloned($objUserCloned)
    {
        $this->container['objUserCloned'] = $objUserCloned;

        return $this;
    }

    /**
     * Gets objApikey
     *
     * @return \eZmaxAPI\Model\ActivesessionResponseCompoundApikey|null
     */
    public function getObjApikey()
    {
        return $this->container['objApikey'];
    }

    /**
     * Sets objApikey
     *
     * @param \eZmaxAPI\Model\ActivesessionResponseCompoundApikey|null $objApikey objApikey
     *
     * @return self
     */
    public function setObjApikey($objApikey)
    {
        $this->container['objApikey'] = $objApikey;

        return $this;
    }

    /**
     * Gets aEModuleInternalname
     *
     * @return string[]
     */
    public function getAEModuleInternalname()
    {
        return $this->container['aEModuleInternalname'];
    }

    /**
     * Sets aEModuleInternalname
     *
     * @param string[] $aEModuleInternalname An Array of Registered modules.  These are the modules that are Licensed to be used by the User or the API Key.
     *
     * @return self
     */
    public function setAEModuleInternalname($aEModuleInternalname)
    {
        $this->container['aEModuleInternalname'] = $aEModuleInternalname;

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


