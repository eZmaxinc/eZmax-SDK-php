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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
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
        'eActivesessionOrigin' => '\eZmaxAPI\Model\FieldEActivesessionOrigin',
        'eActivesessionWeekdaystart' => '\eZmaxAPI\Model\FieldEActivesessionWeekdaystart',
        'fkiLanguageID' => 'int',
        'sCompanyNameX' => 'string',
        'sDepartmentNameX' => 'string',
        'bActivesessionDebug' => 'bool',
        'bActivesessionIssuperadmin' => 'bool',
        'pksCustomerCode' => 'string',
        'fkiSystemconfigurationtypeID' => 'int',
        'fkiSignatureID' => 'int',
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
        'eActivesessionOrigin' => null,
        'eActivesessionWeekdaystart' => null,
        'fkiLanguageID' => null,
        'sCompanyNameX' => null,
        'sDepartmentNameX' => null,
        'bActivesessionDebug' => null,
        'bActivesessionIssuperadmin' => null,
        'pksCustomerCode' => null,
        'fkiSystemconfigurationtypeID' => null,
        'fkiSignatureID' => null,
        'aPkiPermissionID' => null,
        'objUserReal' => null,
        'objUserCloned' => null,
        'objApikey' => null,
        'aEModuleInternalname' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eActivesessionUsertype' => false,
		'eActivesessionOrigin' => false,
		'eActivesessionWeekdaystart' => false,
		'fkiLanguageID' => false,
		'sCompanyNameX' => false,
		'sDepartmentNameX' => false,
		'bActivesessionDebug' => false,
		'bActivesessionIssuperadmin' => false,
		'pksCustomerCode' => false,
		'fkiSystemconfigurationtypeID' => false,
		'fkiSignatureID' => false,
		'aPkiPermissionID' => false,
		'objUserReal' => false,
		'objUserCloned' => false,
		'objApikey' => false,
		'aEModuleInternalname' => false
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
        'eActivesessionUsertype' => 'eActivesessionUsertype',
        'eActivesessionOrigin' => 'eActivesessionOrigin',
        'eActivesessionWeekdaystart' => 'eActivesessionWeekdaystart',
        'fkiLanguageID' => 'fkiLanguageID',
        'sCompanyNameX' => 'sCompanyNameX',
        'sDepartmentNameX' => 'sDepartmentNameX',
        'bActivesessionDebug' => 'bActivesessionDebug',
        'bActivesessionIssuperadmin' => 'bActivesessionIssuperadmin',
        'pksCustomerCode' => 'pksCustomerCode',
        'fkiSystemconfigurationtypeID' => 'fkiSystemconfigurationtypeID',
        'fkiSignatureID' => 'fkiSignatureID',
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
        'eActivesessionOrigin' => 'setEActivesessionOrigin',
        'eActivesessionWeekdaystart' => 'setEActivesessionWeekdaystart',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sCompanyNameX' => 'setSCompanyNameX',
        'sDepartmentNameX' => 'setSDepartmentNameX',
        'bActivesessionDebug' => 'setBActivesessionDebug',
        'bActivesessionIssuperadmin' => 'setBActivesessionIssuperadmin',
        'pksCustomerCode' => 'setPksCustomerCode',
        'fkiSystemconfigurationtypeID' => 'setFkiSystemconfigurationtypeID',
        'fkiSignatureID' => 'setFkiSignatureID',
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
        'eActivesessionOrigin' => 'getEActivesessionOrigin',
        'eActivesessionWeekdaystart' => 'getEActivesessionWeekdaystart',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sCompanyNameX' => 'getSCompanyNameX',
        'sDepartmentNameX' => 'getSDepartmentNameX',
        'bActivesessionDebug' => 'getBActivesessionDebug',
        'bActivesessionIssuperadmin' => 'getBActivesessionIssuperadmin',
        'pksCustomerCode' => 'getPksCustomerCode',
        'fkiSystemconfigurationtypeID' => 'getFkiSystemconfigurationtypeID',
        'fkiSignatureID' => 'getFkiSignatureID',
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
        $this->setIfExists('eActivesessionUsertype', $data ?? [], null);
        $this->setIfExists('eActivesessionOrigin', $data ?? [], null);
        $this->setIfExists('eActivesessionWeekdaystart', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sCompanyNameX', $data ?? [], null);
        $this->setIfExists('sDepartmentNameX', $data ?? [], null);
        $this->setIfExists('bActivesessionDebug', $data ?? [], null);
        $this->setIfExists('bActivesessionIssuperadmin', $data ?? [], null);
        $this->setIfExists('pksCustomerCode', $data ?? [], null);
        $this->setIfExists('fkiSystemconfigurationtypeID', $data ?? [], null);
        $this->setIfExists('fkiSignatureID', $data ?? [], null);
        $this->setIfExists('aPkiPermissionID', $data ?? [], null);
        $this->setIfExists('objUserReal', $data ?? [], null);
        $this->setIfExists('objUserCloned', $data ?? [], null);
        $this->setIfExists('objApikey', $data ?? [], null);
        $this->setIfExists('aEModuleInternalname', $data ?? [], null);
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
        if ($this->container['eActivesessionOrigin'] === null) {
            $invalidProperties[] = "'eActivesessionOrigin' can't be null";
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
        if ($this->container['bActivesessionIssuperadmin'] === null) {
            $invalidProperties[] = "'bActivesessionIssuperadmin' can't be null";
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

        if (!is_null($this->container['fkiSignatureID']) && ($this->container['fkiSignatureID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiSignatureID', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiSignatureID']) && ($this->container['fkiSignatureID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiSignatureID', must be bigger than or equal to 0.";
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eActivesessionUsertype)) {
            //throw new \InvalidArgumentException('non-nullable eActivesessionUsertype cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eActivesessionUsertype'] = $eActivesessionUsertype;
        $this->container['eActivesessionUsertype'] = $eActivesessionUsertype;

        return $this;
    }

    /**
     * Gets eActivesessionOrigin
     *
     * @return \eZmaxAPI\Model\FieldEActivesessionOrigin
     */
    public function getEActivesessionOrigin()
    {
        return $this->container['eActivesessionOrigin'];
    }

    /**
     * Sets eActivesessionOrigin
     *
     * @param \eZmaxAPI\Model\FieldEActivesessionOrigin $eActivesessionOrigin eActivesessionOrigin
     *
     * @return self
     */
    public function setEActivesessionOrigin($eActivesessionOrigin)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eActivesessionOrigin)) {
            //throw new \InvalidArgumentException('non-nullable eActivesessionOrigin cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eActivesessionOrigin'] = $eActivesessionOrigin;
        $this->container['eActivesessionOrigin'] = $eActivesessionOrigin;

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eActivesessionWeekdaystart)) {
            //throw new \InvalidArgumentException('non-nullable eActivesessionWeekdaystart cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eActivesessionWeekdaystart'] = $eActivesessionWeekdaystart;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}

//        if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ActivesessionGetCurrentV1ResponseMPayload., must be smaller than or equal to 2.');
        }
//        if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling ActivesessionGetCurrentV1ResponseMPayload., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCompanyNameX)) {
            //throw new \InvalidArgumentException('non-nullable sCompanyNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCompanyNameX'] = $sCompanyNameX;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDepartmentNameX)) {
            //throw new \InvalidArgumentException('non-nullable sDepartmentNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDepartmentNameX'] = $sDepartmentNameX;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bActivesessionDebug)) {
            //throw new \InvalidArgumentException('non-nullable bActivesessionDebug cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bActivesessionDebug'] = $bActivesessionDebug;
        $this->container['bActivesessionDebug'] = (is_null($bActivesessionDebug) ? null : (bool) $bActivesessionDebug);

        return $this;
    }

    /**
     * Gets bActivesessionIssuperadmin
     *
     * @return bool
     */
    public function getBActivesessionIssuperadmin()
    {
        return $this->container['bActivesessionIssuperadmin'];
    }

    /**
     * Sets bActivesessionIssuperadmin
     *
     * @param bool $bActivesessionIssuperadmin Whether the active session is superadmin or not
     *
     * @return self
     */
    public function setBActivesessionIssuperadmin($bActivesessionIssuperadmin)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bActivesessionIssuperadmin)) {
            //throw new \InvalidArgumentException('non-nullable bActivesessionIssuperadmin cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bActivesessionIssuperadmin'] = $bActivesessionIssuperadmin;
        $this->container['bActivesessionIssuperadmin'] = (is_null($bActivesessionIssuperadmin) ? null : (bool) $bActivesessionIssuperadmin);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pksCustomerCode)) {
            //throw new \InvalidArgumentException('non-nullable pksCustomerCode cannot be null');
        //}
//        if ((mb_strlen($pksCustomerCode) > 6)) {
        if ((mb_strlen($pksCustomerCode) > 6)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling ActivesessionGetCurrentV1ResponseMPayload., must be smaller than or equal to 6.');
        }
//        if ((mb_strlen($pksCustomerCode) < 2)) {
        if ((mb_strlen($pksCustomerCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling ActivesessionGetCurrentV1ResponseMPayload., must be bigger than or equal to 2.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pksCustomerCode'] = $pksCustomerCode;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiSystemconfigurationtypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiSystemconfigurationtypeID cannot be null');
        //}

//        if (($fkiSystemconfigurationtypeID < 1)) {
        if (!is_null($fkiSystemconfigurationtypeID) && ($fkiSystemconfigurationtypeID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiSystemconfigurationtypeID when calling ActivesessionGetCurrentV1ResponseMPayload., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiSystemconfigurationtypeID'] = $fkiSystemconfigurationtypeID;
        $this->container['fkiSystemconfigurationtypeID'] = (is_null($fkiSystemconfigurationtypeID) ? null : (int) $fkiSystemconfigurationtypeID);

        return $this;
    }

    /**
     * Gets fkiSignatureID
     *
     * @return int|null
     */
    public function getFkiSignatureID()
    {
        return $this->container['fkiSignatureID'];
    }

    /**
     * Sets fkiSignatureID
     *
     * @param int|null $fkiSignatureID The unique ID of the Signature
     *
     * @return self
     */
    public function setFkiSignatureID($fkiSignatureID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiSignatureID)) {
            //throw new \InvalidArgumentException('non-nullable fkiSignatureID cannot be null');
        //}

//        if (($fkiSignatureID > 16777215)) {
        if (!is_null($fkiSignatureID) && ($fkiSignatureID > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $fkiSignatureID when calling ActivesessionGetCurrentV1ResponseMPayload., must be smaller than or equal to 16777215.');
        }
//        if (($fkiSignatureID < 0)) {
        if (!is_null($fkiSignatureID) && ($fkiSignatureID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiSignatureID when calling ActivesessionGetCurrentV1ResponseMPayload., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiSignatureID'] = $fkiSignatureID;
        $this->container['fkiSignatureID'] = (is_null($fkiSignatureID) ? null : (int) $fkiSignatureID);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aPkiPermissionID)) {
            //throw new \InvalidArgumentException('non-nullable aPkiPermissionID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aPkiPermissionID'] = $aPkiPermissionID;
        $this->container['aPkiPermissionID'] = (is_null($aPkiPermissionID) ? null : $aPkiPermissionID);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objUserReal)) {
            //throw new \InvalidArgumentException('non-nullable objUserReal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objUserReal'] = $objUserReal;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objUserCloned)) {
            //throw new \InvalidArgumentException('non-nullable objUserCloned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objUserCloned'] = $objUserCloned;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objApikey)) {
            //throw new \InvalidArgumentException('non-nullable objApikey cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objApikey'] = $objApikey;
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aEModuleInternalname)) {
            //throw new \InvalidArgumentException('non-nullable aEModuleInternalname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aEModuleInternalname'] = $aEModuleInternalname;
        $this->container['aEModuleInternalname'] = (is_null($aEModuleInternalname) ? null : $aEModuleInternalname);

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


