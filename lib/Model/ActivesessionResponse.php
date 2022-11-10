<?php
/**
 * ActivesessionResponse
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
 * ActivesessionResponse Class Doc Comment
 *
 * @category Class
 * @description An Activesession Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ActivesessionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'activesession-Response';

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
        'fkiSystemconfigurationtypeID' => 'int'
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
        'fkiSystemconfigurationtypeID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eActivesessionUsertype' => false,
		'eActivesessionWeekdaystart' => false,
		'fkiLanguageID' => false,
		'sCompanyNameX' => false,
		'sDepartmentNameX' => false,
		'bActivesessionDebug' => false,
		'pksCustomerCode' => false,
		'fkiSystemconfigurationtypeID' => false
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
        'eActivesessionUsertype' => 'eActivesessionUsertype',
        'eActivesessionWeekdaystart' => 'eActivesessionWeekdaystart',
        'fkiLanguageID' => 'fkiLanguageID',
        'sCompanyNameX' => 'sCompanyNameX',
        'sDepartmentNameX' => 'sDepartmentNameX',
        'bActivesessionDebug' => 'bActivesessionDebug',
        'pksCustomerCode' => 'pksCustomerCode',
        'fkiSystemconfigurationtypeID' => 'fkiSystemconfigurationtypeID'
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
        'fkiSystemconfigurationtypeID' => 'setFkiSystemconfigurationtypeID'
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
        'fkiSystemconfigurationtypeID' => 'getFkiSystemconfigurationtypeID'
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
        $this->setIfExists('eActivesessionUsertype', $data ?? [], null);
        $this->setIfExists('eActivesessionWeekdaystart', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sCompanyNameX', $data ?? [], null);
        $this->setIfExists('sDepartmentNameX', $data ?? [], null);
        $this->setIfExists('bActivesessionDebug', $data ?? [], null);
        $this->setIfExists('pksCustomerCode', $data ?? [], null);
        $this->setIfExists('fkiSystemconfigurationtypeID', $data ?? [], null);
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

        if (!is_null($this->container['fkiSystemconfigurationtypeID']) && ($this->container['fkiSystemconfigurationtypeID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiSystemconfigurationtypeID', must be bigger than or equal to 1.";
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

        //if (is_null($eActivesessionUsertype)) {
            //throw new \InvalidArgumentException('non-nullable eActivesessionUsertype cannot be null');
        //}
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

        //if (is_null($eActivesessionWeekdaystart)) {
            //throw new \InvalidArgumentException('non-nullable eActivesessionWeekdaystart cannot be null');
        //}
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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ActivesessionResponse., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ActivesessionResponse., must be bigger than or equal to 1.');
        }


        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

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

        //if (is_null($sCompanyNameX)) {
            //throw new \InvalidArgumentException('non-nullable sCompanyNameX cannot be null');
        //}
        $this->container['sCompanyNameX'] = (is_null($sCompanyNameX) ? null : (string) $sCompanyNameX);

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

        //if (is_null($sDepartmentNameX)) {
            //throw new \InvalidArgumentException('non-nullable sDepartmentNameX cannot be null');
        //}
        $this->container['sDepartmentNameX'] = (is_null($sDepartmentNameX) ? null : (string) $sDepartmentNameX);

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

        //if (is_null($bActivesessionDebug)) {
            //throw new \InvalidArgumentException('non-nullable bActivesessionDebug cannot be null');
        //}
        $this->container['bActivesessionDebug'] = (is_null($bActivesessionDebug) ? null : (bool) $bActivesessionDebug);

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
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling ActivesessionResponse., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($pksCustomerCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling ActivesessionResponse., must be bigger than or equal to 2.');
        }


        //if (is_null($pksCustomerCode)) {
            //throw new \InvalidArgumentException('non-nullable pksCustomerCode cannot be null');
        //}
        $this->container['pksCustomerCode'] = (is_null($pksCustomerCode) ? null : (string) $pksCustomerCode);

        return $this;
    }

    /**
     * Gets fkiSystemconfigurationtypeID
     *
     * @return int|null
     */
    public function getFkiSystemconfigurationtypeID()
    {
        return $this->container['fkiSystemconfigurationtypeID'];
    }

    /**
     * Sets fkiSystemconfigurationtypeID
     *
     * @param int|null $fkiSystemconfigurationtypeID The unique ID of the Systemconfigurationtype
     *
     * @return self
     */
    public function setFkiSystemconfigurationtypeID($fkiSystemconfigurationtypeID)
    {

        if (!is_null($fkiSystemconfigurationtypeID) && ($fkiSystemconfigurationtypeID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiSystemconfigurationtypeID when calling ActivesessionResponse., must be bigger than or equal to 1.');
        }


        //if (is_null($fkiSystemconfigurationtypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiSystemconfigurationtypeID cannot be null');
        //}
        $this->container['fkiSystemconfigurationtypeID'] = (is_null($fkiSystemconfigurationtypeID) ? null : (int) $fkiSystemconfigurationtypeID);

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


