<?php
/**
 * EzmaxinvoicingcontractResponse
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
 * Generator version: 7.10.0
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
 * EzmaxinvoicingcontractResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicingcontract Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicingcontractResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicingcontract-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicingcontractID' => 'int',
        'eEzmaxinvoicingcontractPaymenttype' => '\eZmaxAPI\Model\FieldEEzmaxinvoicingcontractPaymenttype',
        'iEzmaxinvoicingcontractLength' => 'int',
        'dtEzmaxinvoicingcontractStart' => 'string',
        'dtEzmaxinvoicingcontractEnd' => 'string',
        'dEzmaxinvoicingcontractLicense' => 'string',
        'dEzmaxinvoicingcontract121qa' => 'string',
        'bEzmaxinvoicingcontractEzsignallagents' => 'bool',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxinvoicingcontractID' => null,
        'eEzmaxinvoicingcontractPaymenttype' => null,
        'iEzmaxinvoicingcontractLength' => null,
        'dtEzmaxinvoicingcontractStart' => null,
        'dtEzmaxinvoicingcontractEnd' => null,
        'dEzmaxinvoicingcontractLicense' => null,
        'dEzmaxinvoicingcontract121qa' => null,
        'bEzmaxinvoicingcontractEzsignallagents' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicingcontractID' => false,
		'eEzmaxinvoicingcontractPaymenttype' => false,
		'iEzmaxinvoicingcontractLength' => false,
		'dtEzmaxinvoicingcontractStart' => false,
		'dtEzmaxinvoicingcontractEnd' => false,
		'dEzmaxinvoicingcontractLicense' => false,
		'dEzmaxinvoicingcontract121qa' => false,
		'bEzmaxinvoicingcontractEzsignallagents' => false,
		'objAudit' => false
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
        'pkiEzmaxinvoicingcontractID' => 'pkiEzmaxinvoicingcontractID',
        'eEzmaxinvoicingcontractPaymenttype' => 'eEzmaxinvoicingcontractPaymenttype',
        'iEzmaxinvoicingcontractLength' => 'iEzmaxinvoicingcontractLength',
        'dtEzmaxinvoicingcontractStart' => 'dtEzmaxinvoicingcontractStart',
        'dtEzmaxinvoicingcontractEnd' => 'dtEzmaxinvoicingcontractEnd',
        'dEzmaxinvoicingcontractLicense' => 'dEzmaxinvoicingcontractLicense',
        'dEzmaxinvoicingcontract121qa' => 'dEzmaxinvoicingcontract121qa',
        'bEzmaxinvoicingcontractEzsignallagents' => 'bEzmaxinvoicingcontractEzsignallagents',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicingcontractID' => 'setPkiEzmaxinvoicingcontractID',
        'eEzmaxinvoicingcontractPaymenttype' => 'setEEzmaxinvoicingcontractPaymenttype',
        'iEzmaxinvoicingcontractLength' => 'setIEzmaxinvoicingcontractLength',
        'dtEzmaxinvoicingcontractStart' => 'setDtEzmaxinvoicingcontractStart',
        'dtEzmaxinvoicingcontractEnd' => 'setDtEzmaxinvoicingcontractEnd',
        'dEzmaxinvoicingcontractLicense' => 'setDEzmaxinvoicingcontractLicense',
        'dEzmaxinvoicingcontract121qa' => 'setDEzmaxinvoicingcontract121qa',
        'bEzmaxinvoicingcontractEzsignallagents' => 'setBEzmaxinvoicingcontractEzsignallagents',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicingcontractID' => 'getPkiEzmaxinvoicingcontractID',
        'eEzmaxinvoicingcontractPaymenttype' => 'getEEzmaxinvoicingcontractPaymenttype',
        'iEzmaxinvoicingcontractLength' => 'getIEzmaxinvoicingcontractLength',
        'dtEzmaxinvoicingcontractStart' => 'getDtEzmaxinvoicingcontractStart',
        'dtEzmaxinvoicingcontractEnd' => 'getDtEzmaxinvoicingcontractEnd',
        'dEzmaxinvoicingcontractLicense' => 'getDEzmaxinvoicingcontractLicense',
        'dEzmaxinvoicingcontract121qa' => 'getDEzmaxinvoicingcontract121qa',
        'bEzmaxinvoicingcontractEzsignallagents' => 'getBEzmaxinvoicingcontractEzsignallagents',
        'objAudit' => 'getObjAudit'
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
        $this->setIfExists('pkiEzmaxinvoicingcontractID', $data ?? [], null);
        $this->setIfExists('eEzmaxinvoicingcontractPaymenttype', $data ?? [], null);
        $this->setIfExists('iEzmaxinvoicingcontractLength', $data ?? [], null);
        $this->setIfExists('dtEzmaxinvoicingcontractStart', $data ?? [], null);
        $this->setIfExists('dtEzmaxinvoicingcontractEnd', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingcontractLicense', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingcontract121qa', $data ?? [], null);
        $this->setIfExists('bEzmaxinvoicingcontractEzsignallagents', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
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

        if ($this->container['pkiEzmaxinvoicingcontractID'] === null) {
            $invalidProperties[] = "'pkiEzmaxinvoicingcontractID' can't be null";
        }
        if (($this->container['pkiEzmaxinvoicingcontractID'] < 1)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxinvoicingcontractID', must be bigger than or equal to 1.";
        }

        if ($this->container['eEzmaxinvoicingcontractPaymenttype'] === null) {
            $invalidProperties[] = "'eEzmaxinvoicingcontractPaymenttype' can't be null";
        }
        if ($this->container['iEzmaxinvoicingcontractLength'] === null) {
            $invalidProperties[] = "'iEzmaxinvoicingcontractLength' can't be null";
        }
        if (($this->container['iEzmaxinvoicingcontractLength'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzmaxinvoicingcontractLength', must be bigger than or equal to 1.";
        }

        if ($this->container['dtEzmaxinvoicingcontractStart'] === null) {
            $invalidProperties[] = "'dtEzmaxinvoicingcontractStart' can't be null";
        }
        if ($this->container['dtEzmaxinvoicingcontractEnd'] === null) {
            $invalidProperties[] = "'dtEzmaxinvoicingcontractEnd' can't be null";
        }
        if ($this->container['dEzmaxinvoicingcontractLicense'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingcontractLicense' can't be null";
        }
	//if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingcontractLicense'])) {
        if (!is_null($this->container['dEzmaxinvoicingcontractLicense']) && !preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingcontractLicense'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingcontractLicense', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dEzmaxinvoicingcontract121qa'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingcontract121qa' can't be null";
        }
	//if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingcontract121qa'])) {
        if (!is_null($this->container['dEzmaxinvoicingcontract121qa']) && !preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingcontract121qa'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingcontract121qa', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['bEzmaxinvoicingcontractEzsignallagents'] === null) {
            $invalidProperties[] = "'bEzmaxinvoicingcontractEzsignallagents' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
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
     * Gets pkiEzmaxinvoicingcontractID
     *
     * @return int
     */
    public function getPkiEzmaxinvoicingcontractID()
    {
	//return $this->container['pkiEzmaxinvoicingcontractID'];
        return $this->container['pkiEzmaxinvoicingcontractID'];
    }

    /**
     * Sets pkiEzmaxinvoicingcontractID
     *
     * @param int $pkiEzmaxinvoicingcontractID The unique ID of the Ezmaxinvoicingcontract
     *
     * @return self
     */
    public function setPkiEzmaxinvoicingcontractID($pkiEzmaxinvoicingcontractID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzmaxinvoicingcontractID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicingcontractID cannot be null');
        //}

	//if (($pkiEzmaxinvoicingcontractID < 1)) {
        if (($pkiEzmaxinvoicingcontractID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzmaxinvoicingcontractID when calling EzmaxinvoicingcontractResponse., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzmaxinvoicingcontractID)?'null':'"'.$pkiEzmaxinvoicingcontractID.'"').' for pkiEzmaxinvoicingcontractID when calling EzmaxinvoicingcontractResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzmaxinvoicingcontractID'] = $pkiEzmaxinvoicingcontractID;
        $this->container['pkiEzmaxinvoicingcontractID'] = (is_null($pkiEzmaxinvoicingcontractID) ? null : (int) $pkiEzmaxinvoicingcontractID);

        return $this;
    }

    /**
     * Gets eEzmaxinvoicingcontractPaymenttype
     *
     * @return \eZmaxAPI\Model\FieldEEzmaxinvoicingcontractPaymenttype
     */
    public function getEEzmaxinvoicingcontractPaymenttype()
    {
	//return $this->container['eEzmaxinvoicingcontractPaymenttype'];
        return $this->container['eEzmaxinvoicingcontractPaymenttype'];
    }

    /**
     * Sets eEzmaxinvoicingcontractPaymenttype
     *
     * @param \eZmaxAPI\Model\FieldEEzmaxinvoicingcontractPaymenttype $eEzmaxinvoicingcontractPaymenttype eEzmaxinvoicingcontractPaymenttype
     *
     * @return self
     */
    public function setEEzmaxinvoicingcontractPaymenttype($eEzmaxinvoicingcontractPaymenttype)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzmaxinvoicingcontractPaymenttype)) {
            //throw new \InvalidArgumentException('non-nullable eEzmaxinvoicingcontractPaymenttype cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzmaxinvoicingcontractPaymenttype'] = $eEzmaxinvoicingcontractPaymenttype;
        $this->container['eEzmaxinvoicingcontractPaymenttype'] = $eEzmaxinvoicingcontractPaymenttype;

        return $this;
    }

    /**
     * Gets iEzmaxinvoicingcontractLength
     *
     * @return int
     */
    public function getIEzmaxinvoicingcontractLength()
    {
	//return $this->container['iEzmaxinvoicingcontractLength'];
        return $this->container['iEzmaxinvoicingcontractLength'];
    }

    /**
     * Sets iEzmaxinvoicingcontractLength
     *
     * @param int $iEzmaxinvoicingcontractLength The length in years of the Ezmaxinvoicingcontract
     *
     * @return self
     */
    public function setIEzmaxinvoicingcontractLength($iEzmaxinvoicingcontractLength)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzmaxinvoicingcontractLength)) {
            //throw new \InvalidArgumentException('non-nullable iEzmaxinvoicingcontractLength cannot be null');
        //}

	//if (($iEzmaxinvoicingcontractLength < 1)) {
        if (($iEzmaxinvoicingcontractLength < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzmaxinvoicingcontractLength when calling EzmaxinvoicingcontractResponse., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzmaxinvoicingcontractLength)?'null':'"'.$iEzmaxinvoicingcontractLength.'"').' for iEzmaxinvoicingcontractLength when calling EzmaxinvoicingcontractResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzmaxinvoicingcontractLength'] = $iEzmaxinvoicingcontractLength;
        $this->container['iEzmaxinvoicingcontractLength'] = (is_null($iEzmaxinvoicingcontractLength) ? null : (int) $iEzmaxinvoicingcontractLength);

        return $this;
    }

    /**
     * Gets dtEzmaxinvoicingcontractStart
     *
     * @return string
     */
    public function getDtEzmaxinvoicingcontractStart()
    {
	//return $this->container['dtEzmaxinvoicingcontractStart'];
        return is_null($this->container['dtEzmaxinvoicingcontractStart']) ? null : trim($this->container['dtEzmaxinvoicingcontractStart']);
    }

    /**
     * Sets dtEzmaxinvoicingcontractStart
     *
     * @param string $dtEzmaxinvoicingcontractStart The start date of the Ezmaxinvoicingcontract
     *
     * @return self
     */
    public function setDtEzmaxinvoicingcontractStart($dtEzmaxinvoicingcontractStart)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzmaxinvoicingcontractStart)) {
            //throw new \InvalidArgumentException('non-nullable dtEzmaxinvoicingcontractStart cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzmaxinvoicingcontractStart'] = $dtEzmaxinvoicingcontractStart;
        $this->container['dtEzmaxinvoicingcontractStart'] = (is_null($dtEzmaxinvoicingcontractStart) ? null : trim((string) $dtEzmaxinvoicingcontractStart));

        return $this;
    }

    /**
     * Gets dtEzmaxinvoicingcontractEnd
     *
     * @return string
     */
    public function getDtEzmaxinvoicingcontractEnd()
    {
	//return $this->container['dtEzmaxinvoicingcontractEnd'];
        return is_null($this->container['dtEzmaxinvoicingcontractEnd']) ? null : trim($this->container['dtEzmaxinvoicingcontractEnd']);
    }

    /**
     * Sets dtEzmaxinvoicingcontractEnd
     *
     * @param string $dtEzmaxinvoicingcontractEnd The end date of the Ezmaxinvoicingcontract
     *
     * @return self
     */
    public function setDtEzmaxinvoicingcontractEnd($dtEzmaxinvoicingcontractEnd)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzmaxinvoicingcontractEnd)) {
            //throw new \InvalidArgumentException('non-nullable dtEzmaxinvoicingcontractEnd cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzmaxinvoicingcontractEnd'] = $dtEzmaxinvoicingcontractEnd;
        $this->container['dtEzmaxinvoicingcontractEnd'] = (is_null($dtEzmaxinvoicingcontractEnd) ? null : trim((string) $dtEzmaxinvoicingcontractEnd));

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingcontractLicense
     *
     * @return string
     */
    public function getDEzmaxinvoicingcontractLicense()
    {
	//return $this->container['dEzmaxinvoicingcontractLicense'];
        return is_null($this->container['dEzmaxinvoicingcontractLicense']) ? null : trim($this->container['dEzmaxinvoicingcontractLicense']);
    }

    /**
     * Sets dEzmaxinvoicingcontractLicense
     *
     * @param string $dEzmaxinvoicingcontractLicense The price of the license
     *
     * @return self
     */
    public function setDEzmaxinvoicingcontractLicense($dEzmaxinvoicingcontractLicense)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingcontractLicense)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingcontractLicense cannot be null');
        //}

	//if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dEzmaxinvoicingcontractLicense)))) {
        if (!is_null($dEzmaxinvoicingcontractLicense) && (!preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dEzmaxinvoicingcontractLicense)))) {
	    //throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingcontractLicense when calling EzmaxinvoicingcontractResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($dEzmaxinvoicingcontractLicense)?'null':'"'.$dEzmaxinvoicingcontractLicense.'"')." for dEzmaxinvoicingcontractLicense when calling EzmaxinvoicingcontractResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingcontractLicense'] = $dEzmaxinvoicingcontractLicense;
        $this->container['dEzmaxinvoicingcontractLicense'] = (is_null($dEzmaxinvoicingcontractLicense) ? null : trim((string) $dEzmaxinvoicingcontractLicense));

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingcontract121qa
     *
     * @return string
     */
    public function getDEzmaxinvoicingcontract121qa()
    {
	//return $this->container['dEzmaxinvoicingcontract121qa'];
        return is_null($this->container['dEzmaxinvoicingcontract121qa']) ? null : trim($this->container['dEzmaxinvoicingcontract121qa']);
    }

    /**
     * Sets dEzmaxinvoicingcontract121qa
     *
     * @param string $dEzmaxinvoicingcontract121qa The price for 121QA
     *
     * @return self
     */
    public function setDEzmaxinvoicingcontract121qa($dEzmaxinvoicingcontract121qa)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingcontract121qa)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingcontract121qa cannot be null');
        //}

	//if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dEzmaxinvoicingcontract121qa)))) {
        if (!is_null($dEzmaxinvoicingcontract121qa) && (!preg_match("/(*UTF8)^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", ObjectSerializer::toString($dEzmaxinvoicingcontract121qa)))) {
	    //throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingcontract121qa when calling EzmaxinvoicingcontractResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($dEzmaxinvoicingcontract121qa)?'null':'"'.$dEzmaxinvoicingcontract121qa.'"')." for dEzmaxinvoicingcontract121qa when calling EzmaxinvoicingcontractResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingcontract121qa'] = $dEzmaxinvoicingcontract121qa;
        $this->container['dEzmaxinvoicingcontract121qa'] = (is_null($dEzmaxinvoicingcontract121qa) ? null : trim((string) $dEzmaxinvoicingcontract121qa));

        return $this;
    }

    /**
     * Gets bEzmaxinvoicingcontractEzsignallagents
     *
     * @return bool
     */
    public function getBEzmaxinvoicingcontractEzsignallagents()
    {
	//return $this->container['bEzmaxinvoicingcontractEzsignallagents'];
        return $this->container['bEzmaxinvoicingcontractEzsignallagents'];
    }

    /**
     * Sets bEzmaxinvoicingcontractEzsignallagents
     *
     * @param bool $bEzmaxinvoicingcontractEzsignallagents Whether eZsign is for all agents
     *
     * @return self
     */
    public function setBEzmaxinvoicingcontractEzsignallagents($bEzmaxinvoicingcontractEzsignallagents)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzmaxinvoicingcontractEzsignallagents)) {
            //throw new \InvalidArgumentException('non-nullable bEzmaxinvoicingcontractEzsignallagents cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzmaxinvoicingcontractEzsignallagents'] = $bEzmaxinvoicingcontractEzsignallagents;
        $this->container['bEzmaxinvoicingcontractEzsignallagents'] = (is_null($bEzmaxinvoicingcontractEzsignallagents) ? null : (bool) $bEzmaxinvoicingcontractEzsignallagents);

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
	//return $this->container['objAudit'];
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objAudit)) {
            //throw new \InvalidArgumentException('non-nullable objAudit cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objAudit'] = $objAudit;
        $this->container['objAudit'] = $objAudit;

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


