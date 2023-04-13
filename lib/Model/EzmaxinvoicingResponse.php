<?php
/**
 * EzmaxinvoicingResponse
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
 * OpenAPI Generator version: 6.5.0
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
 * EzmaxinvoicingResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicing Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicing-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicingID' => 'int',
        'fkiEzmaxinvoicingcontractID' => 'int',
        'fkiEzmaxpricingID' => 'int',
        'fkiSystemconfigurationtypeID' => 'int',
        'sSystemconfigurationtypeDescriptionX' => 'string',
        'yyyymmEzmaxinvoicing' => 'string',
        'iEzmaxinvoicingDays' => 'int',
        'eEzmaxinvoicingPaymenttype' => '\eZmaxAPI\Model\FieldEEzmaxinvoicingPaymenttype',
        'dEzmaxinvoicingRebatepaymenttype' => 'string',
        'iEzmaxinvoicingContractlength' => 'int',
        'dEzmaxinvoicingRebatecontractlength' => 'string',
        'bEzmaxinvoicingRebateEzsignallagents' => 'bool',
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
        'pkiEzmaxinvoicingID' => null,
        'fkiEzmaxinvoicingcontractID' => null,
        'fkiEzmaxpricingID' => null,
        'fkiSystemconfigurationtypeID' => null,
        'sSystemconfigurationtypeDescriptionX' => null,
        'yyyymmEzmaxinvoicing' => null,
        'iEzmaxinvoicingDays' => null,
        'eEzmaxinvoicingPaymenttype' => null,
        'dEzmaxinvoicingRebatepaymenttype' => null,
        'iEzmaxinvoicingContractlength' => null,
        'dEzmaxinvoicingRebatecontractlength' => null,
        'bEzmaxinvoicingRebateEzsignallagents' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicingID' => false,
		'fkiEzmaxinvoicingcontractID' => false,
		'fkiEzmaxpricingID' => false,
		'fkiSystemconfigurationtypeID' => false,
		'sSystemconfigurationtypeDescriptionX' => false,
		'yyyymmEzmaxinvoicing' => false,
		'iEzmaxinvoicingDays' => false,
		'eEzmaxinvoicingPaymenttype' => false,
		'dEzmaxinvoicingRebatepaymenttype' => false,
		'iEzmaxinvoicingContractlength' => false,
		'dEzmaxinvoicingRebatecontractlength' => false,
		'bEzmaxinvoicingRebateEzsignallagents' => false,
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
        'pkiEzmaxinvoicingID' => 'pkiEzmaxinvoicingID',
        'fkiEzmaxinvoicingcontractID' => 'fkiEzmaxinvoicingcontractID',
        'fkiEzmaxpricingID' => 'fkiEzmaxpricingID',
        'fkiSystemconfigurationtypeID' => 'fkiSystemconfigurationtypeID',
        'sSystemconfigurationtypeDescriptionX' => 'sSystemconfigurationtypeDescriptionX',
        'yyyymmEzmaxinvoicing' => 'yyyymmEzmaxinvoicing',
        'iEzmaxinvoicingDays' => 'iEzmaxinvoicingDays',
        'eEzmaxinvoicingPaymenttype' => 'eEzmaxinvoicingPaymenttype',
        'dEzmaxinvoicingRebatepaymenttype' => 'dEzmaxinvoicingRebatepaymenttype',
        'iEzmaxinvoicingContractlength' => 'iEzmaxinvoicingContractlength',
        'dEzmaxinvoicingRebatecontractlength' => 'dEzmaxinvoicingRebatecontractlength',
        'bEzmaxinvoicingRebateEzsignallagents' => 'bEzmaxinvoicingRebateEzsignallagents',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicingID' => 'setPkiEzmaxinvoicingID',
        'fkiEzmaxinvoicingcontractID' => 'setFkiEzmaxinvoicingcontractID',
        'fkiEzmaxpricingID' => 'setFkiEzmaxpricingID',
        'fkiSystemconfigurationtypeID' => 'setFkiSystemconfigurationtypeID',
        'sSystemconfigurationtypeDescriptionX' => 'setSSystemconfigurationtypeDescriptionX',
        'yyyymmEzmaxinvoicing' => 'setYyyymmEzmaxinvoicing',
        'iEzmaxinvoicingDays' => 'setIEzmaxinvoicingDays',
        'eEzmaxinvoicingPaymenttype' => 'setEEzmaxinvoicingPaymenttype',
        'dEzmaxinvoicingRebatepaymenttype' => 'setDEzmaxinvoicingRebatepaymenttype',
        'iEzmaxinvoicingContractlength' => 'setIEzmaxinvoicingContractlength',
        'dEzmaxinvoicingRebatecontractlength' => 'setDEzmaxinvoicingRebatecontractlength',
        'bEzmaxinvoicingRebateEzsignallagents' => 'setBEzmaxinvoicingRebateEzsignallagents',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicingID' => 'getPkiEzmaxinvoicingID',
        'fkiEzmaxinvoicingcontractID' => 'getFkiEzmaxinvoicingcontractID',
        'fkiEzmaxpricingID' => 'getFkiEzmaxpricingID',
        'fkiSystemconfigurationtypeID' => 'getFkiSystemconfigurationtypeID',
        'sSystemconfigurationtypeDescriptionX' => 'getSSystemconfigurationtypeDescriptionX',
        'yyyymmEzmaxinvoicing' => 'getYyyymmEzmaxinvoicing',
        'iEzmaxinvoicingDays' => 'getIEzmaxinvoicingDays',
        'eEzmaxinvoicingPaymenttype' => 'getEEzmaxinvoicingPaymenttype',
        'dEzmaxinvoicingRebatepaymenttype' => 'getDEzmaxinvoicingRebatepaymenttype',
        'iEzmaxinvoicingContractlength' => 'getIEzmaxinvoicingContractlength',
        'dEzmaxinvoicingRebatecontractlength' => 'getDEzmaxinvoicingRebatecontractlength',
        'bEzmaxinvoicingRebateEzsignallagents' => 'getBEzmaxinvoicingRebateEzsignallagents',
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
        $this->setIfExists('pkiEzmaxinvoicingID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxinvoicingcontractID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxpricingID', $data ?? [], null);
        $this->setIfExists('fkiSystemconfigurationtypeID', $data ?? [], null);
        $this->setIfExists('sSystemconfigurationtypeDescriptionX', $data ?? [], null);
        $this->setIfExists('yyyymmEzmaxinvoicing', $data ?? [], null);
        $this->setIfExists('iEzmaxinvoicingDays', $data ?? [], null);
        $this->setIfExists('eEzmaxinvoicingPaymenttype', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingRebatepaymenttype', $data ?? [], null);
        $this->setIfExists('iEzmaxinvoicingContractlength', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingRebatecontractlength', $data ?? [], null);
        $this->setIfExists('bEzmaxinvoicingRebateEzsignallagents', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzmaxinvoicingID']) && ($this->container['pkiEzmaxinvoicingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxinvoicingID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzmaxinvoicingcontractID'] === null) {
            $invalidProperties[] = "'fkiEzmaxinvoicingcontractID' can't be null";
        }
        if (($this->container['fkiEzmaxinvoicingcontractID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxinvoicingcontractID', must be bigger than or equal to 1.";
        }

        if ($this->container['fkiEzmaxpricingID'] === null) {
            $invalidProperties[] = "'fkiEzmaxpricingID' can't be null";
        }
        if (($this->container['fkiEzmaxpricingID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxpricingID', must be bigger than or equal to 1.";
        }

        if ($this->container['fkiSystemconfigurationtypeID'] === null) {
            $invalidProperties[] = "'fkiSystemconfigurationtypeID' can't be null";
        }
        if (($this->container['fkiSystemconfigurationtypeID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiSystemconfigurationtypeID', must be bigger than or equal to 1.";
        }

        if ($this->container['sSystemconfigurationtypeDescriptionX'] === null) {
            $invalidProperties[] = "'sSystemconfigurationtypeDescriptionX' can't be null";
        }
        if ($this->container['yyyymmEzmaxinvoicing'] === null) {
            $invalidProperties[] = "'yyyymmEzmaxinvoicing' can't be null";
        }
        if ((mb_strlen($this->container['yyyymmEzmaxinvoicing']) > 7)) {
            $invalidProperties[] = "invalid value for 'yyyymmEzmaxinvoicing', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['iEzmaxinvoicingDays'] === null) {
            $invalidProperties[] = "'iEzmaxinvoicingDays' can't be null";
        }
        if (($this->container['iEzmaxinvoicingDays'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzmaxinvoicingDays', must be bigger than or equal to 1.";
        }

        if ($this->container['eEzmaxinvoicingPaymenttype'] === null) {
            $invalidProperties[] = "'eEzmaxinvoicingPaymenttype' can't be null";
        }
        if ($this->container['dEzmaxinvoicingRebatepaymenttype'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingRebatepaymenttype' can't be null";
        }
//        if (!preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingRebatepaymenttype'])) {
        if (!is_null($this->container['dEzmaxinvoicingRebatepaymenttype']) && !preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingRebatepaymenttype'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingRebatepaymenttype', must be conform to the pattern /^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/.";
        }

        if ($this->container['iEzmaxinvoicingContractlength'] === null) {
            $invalidProperties[] = "'iEzmaxinvoicingContractlength' can't be null";
        }
        if (($this->container['iEzmaxinvoicingContractlength'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzmaxinvoicingContractlength', must be bigger than or equal to 1.";
        }

        if ($this->container['dEzmaxinvoicingRebatecontractlength'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingRebatecontractlength' can't be null";
        }
//        if (!preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingRebatecontractlength'])) {
        if (!is_null($this->container['dEzmaxinvoicingRebatecontractlength']) && !preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingRebatecontractlength'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingRebatecontractlength', must be conform to the pattern /^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/.";
        }

        if ($this->container['bEzmaxinvoicingRebateEzsignallagents'] === null) {
            $invalidProperties[] = "'bEzmaxinvoicingRebateEzsignallagents' can't be null";
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
     * Gets pkiEzmaxinvoicingID
     *
     * @return int|null
     */
    public function getPkiEzmaxinvoicingID()
    {
        return $this->container['pkiEzmaxinvoicingID'];
    }

    /**
     * Sets pkiEzmaxinvoicingID
     *
     * @param int|null $pkiEzmaxinvoicingID The unique ID of the Ezmaxinvoicing
     *
     * @return self
     */
    public function setPkiEzmaxinvoicingID($pkiEzmaxinvoicingID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzmaxinvoicingID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicingID cannot be null');
        //}

//        if (($pkiEzmaxinvoicingID < 0)) {
        if (!is_null($pkiEzmaxinvoicingID) && ($pkiEzmaxinvoicingID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzmaxinvoicingID when calling EzmaxinvoicingResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzmaxinvoicingID'] = $pkiEzmaxinvoicingID;
        $this->container['pkiEzmaxinvoicingID'] = (is_null($pkiEzmaxinvoicingID) ? null : (int) $pkiEzmaxinvoicingID);

        return $this;
    }

    /**
     * Gets fkiEzmaxinvoicingcontractID
     *
     * @return int
     */
    public function getFkiEzmaxinvoicingcontractID()
    {
        return $this->container['fkiEzmaxinvoicingcontractID'];
    }

    /**
     * Sets fkiEzmaxinvoicingcontractID
     *
     * @param int $fkiEzmaxinvoicingcontractID The unique ID of the Ezmaxinvoicingcontract
     *
     * @return self
     */
    public function setFkiEzmaxinvoicingcontractID($fkiEzmaxinvoicingcontractID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxinvoicingcontractID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxinvoicingcontractID cannot be null');
        //}

//        if (($fkiEzmaxinvoicingcontractID < 1)) {
        if (($fkiEzmaxinvoicingcontractID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxinvoicingcontractID when calling EzmaxinvoicingResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxinvoicingcontractID'] = $fkiEzmaxinvoicingcontractID;
        $this->container['fkiEzmaxinvoicingcontractID'] = (is_null($fkiEzmaxinvoicingcontractID) ? null : (int) $fkiEzmaxinvoicingcontractID);

        return $this;
    }

    /**
     * Gets fkiEzmaxpricingID
     *
     * @return int
     */
    public function getFkiEzmaxpricingID()
    {
        return $this->container['fkiEzmaxpricingID'];
    }

    /**
     * Sets fkiEzmaxpricingID
     *
     * @param int $fkiEzmaxpricingID The unique ID of the Ezmaxpricing
     *
     * @return self
     */
    public function setFkiEzmaxpricingID($fkiEzmaxpricingID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxpricingID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxpricingID cannot be null');
        //}

//        if (($fkiEzmaxpricingID < 1)) {
        if (($fkiEzmaxpricingID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxpricingID when calling EzmaxinvoicingResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxpricingID'] = $fkiEzmaxpricingID;
        $this->container['fkiEzmaxpricingID'] = (is_null($fkiEzmaxpricingID) ? null : (int) $fkiEzmaxpricingID);

        return $this;
    }

    /**
     * Gets fkiSystemconfigurationtypeID
     *
     * @return int
     */
    public function getFkiSystemconfigurationtypeID()
    {
        return $this->container['fkiSystemconfigurationtypeID'];
    }

    /**
     * Sets fkiSystemconfigurationtypeID
     *
     * @param int $fkiSystemconfigurationtypeID The unique ID of the Systemconfigurationtype
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
        if (($fkiSystemconfigurationtypeID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiSystemconfigurationtypeID when calling EzmaxinvoicingResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiSystemconfigurationtypeID'] = $fkiSystemconfigurationtypeID;
        $this->container['fkiSystemconfigurationtypeID'] = (is_null($fkiSystemconfigurationtypeID) ? null : (int) $fkiSystemconfigurationtypeID);

        return $this;
    }

    /**
     * Gets sSystemconfigurationtypeDescriptionX
     *
     * @return string
     */
    public function getSSystemconfigurationtypeDescriptionX()
    {
        return $this->container['sSystemconfigurationtypeDescriptionX'];
    }

    /**
     * Sets sSystemconfigurationtypeDescriptionX
     *
     * @param string $sSystemconfigurationtypeDescriptionX The description of the Systemconfigurationtype in the language of the requester
     *
     * @return self
     */
    public function setSSystemconfigurationtypeDescriptionX($sSystemconfigurationtypeDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sSystemconfigurationtypeDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sSystemconfigurationtypeDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sSystemconfigurationtypeDescriptionX'] = $sSystemconfigurationtypeDescriptionX;
        $this->container['sSystemconfigurationtypeDescriptionX'] = (is_null($sSystemconfigurationtypeDescriptionX) ? null : (string) $sSystemconfigurationtypeDescriptionX);

        return $this;
    }

    /**
     * Gets yyyymmEzmaxinvoicing
     *
     * @return string
     */
    public function getYyyymmEzmaxinvoicing()
    {
        return $this->container['yyyymmEzmaxinvoicing'];
    }

    /**
     * Sets yyyymmEzmaxinvoicing
     *
     * @param string $yyyymmEzmaxinvoicing The YYYYMM period of the Ezmaxinvoicing
     *
     * @return self
     */
    public function setYyyymmEzmaxinvoicing($yyyymmEzmaxinvoicing)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($yyyymmEzmaxinvoicing)) {
            //throw new \InvalidArgumentException('non-nullable yyyymmEzmaxinvoicing cannot be null');
        //}
//        if ((mb_strlen($yyyymmEzmaxinvoicing) > 7)) {
        if ((mb_strlen($yyyymmEzmaxinvoicing) > 7)) {
            throw new \InvalidArgumentException('invalid length for $yyyymmEzmaxinvoicing when calling EzmaxinvoicingResponse., must be smaller than or equal to 7.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['yyyymmEzmaxinvoicing'] = $yyyymmEzmaxinvoicing;
        $this->container['yyyymmEzmaxinvoicing'] = (is_null($yyyymmEzmaxinvoicing) ? null : (string) $yyyymmEzmaxinvoicing);

        return $this;
    }

    /**
     * Gets iEzmaxinvoicingDays
     *
     * @return int
     */
    public function getIEzmaxinvoicingDays()
    {
        return $this->container['iEzmaxinvoicingDays'];
    }

    /**
     * Sets iEzmaxinvoicingDays
     *
     * @param int $iEzmaxinvoicingDays The number of days invoiced
     *
     * @return self
     */
    public function setIEzmaxinvoicingDays($iEzmaxinvoicingDays)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzmaxinvoicingDays)) {
            //throw new \InvalidArgumentException('non-nullable iEzmaxinvoicingDays cannot be null');
        //}

//        if (($iEzmaxinvoicingDays < 1)) {
        if (($iEzmaxinvoicingDays < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzmaxinvoicingDays when calling EzmaxinvoicingResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzmaxinvoicingDays'] = $iEzmaxinvoicingDays;
        $this->container['iEzmaxinvoicingDays'] = (is_null($iEzmaxinvoicingDays) ? null : (int) $iEzmaxinvoicingDays);

        return $this;
    }

    /**
     * Gets eEzmaxinvoicingPaymenttype
     *
     * @return \eZmaxAPI\Model\FieldEEzmaxinvoicingPaymenttype
     */
    public function getEEzmaxinvoicingPaymenttype()
    {
        return $this->container['eEzmaxinvoicingPaymenttype'];
    }

    /**
     * Sets eEzmaxinvoicingPaymenttype
     *
     * @param \eZmaxAPI\Model\FieldEEzmaxinvoicingPaymenttype $eEzmaxinvoicingPaymenttype eEzmaxinvoicingPaymenttype
     *
     * @return self
     */
    public function setEEzmaxinvoicingPaymenttype($eEzmaxinvoicingPaymenttype)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzmaxinvoicingPaymenttype)) {
            //throw new \InvalidArgumentException('non-nullable eEzmaxinvoicingPaymenttype cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzmaxinvoicingPaymenttype'] = $eEzmaxinvoicingPaymenttype;
        $this->container['eEzmaxinvoicingPaymenttype'] = $eEzmaxinvoicingPaymenttype;

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingRebatepaymenttype
     *
     * @return string
     */
    public function getDEzmaxinvoicingRebatepaymenttype()
    {
        return $this->container['dEzmaxinvoicingRebatepaymenttype'];
    }

    /**
     * Sets dEzmaxinvoicingRebatepaymenttype
     *
     * @param string $dEzmaxinvoicingRebatepaymenttype The percentage of rebate depending of the payment type
     *
     * @return self
     */
    public function setDEzmaxinvoicingRebatepaymenttype($dEzmaxinvoicingRebatepaymenttype)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingRebatepaymenttype)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingRebatepaymenttype cannot be null');
        //}

//        if ((!preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $dEzmaxinvoicingRebatepaymenttype))) {
        if (!is_null($dEzmaxinvoicingRebatepaymenttype) && (!preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $dEzmaxinvoicingRebatepaymenttype))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingRebatepaymenttype when calling EzmaxinvoicingResponse., must conform to the pattern /^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingRebatepaymenttype'] = $dEzmaxinvoicingRebatepaymenttype;
        $this->container['dEzmaxinvoicingRebatepaymenttype'] = (is_null($dEzmaxinvoicingRebatepaymenttype) ? null : (string) $dEzmaxinvoicingRebatepaymenttype);

        return $this;
    }

    /**
     * Gets iEzmaxinvoicingContractlength
     *
     * @return int
     */
    public function getIEzmaxinvoicingContractlength()
    {
        return $this->container['iEzmaxinvoicingContractlength'];
    }

    /**
     * Sets iEzmaxinvoicingContractlength
     *
     * @param int $iEzmaxinvoicingContractlength The length of the contract in years
     *
     * @return self
     */
    public function setIEzmaxinvoicingContractlength($iEzmaxinvoicingContractlength)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzmaxinvoicingContractlength)) {
            //throw new \InvalidArgumentException('non-nullable iEzmaxinvoicingContractlength cannot be null');
        //}

//        if (($iEzmaxinvoicingContractlength < 1)) {
        if (($iEzmaxinvoicingContractlength < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzmaxinvoicingContractlength when calling EzmaxinvoicingResponse., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzmaxinvoicingContractlength'] = $iEzmaxinvoicingContractlength;
        $this->container['iEzmaxinvoicingContractlength'] = (is_null($iEzmaxinvoicingContractlength) ? null : (int) $iEzmaxinvoicingContractlength);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingRebatecontractlength
     *
     * @return string
     */
    public function getDEzmaxinvoicingRebatecontractlength()
    {
        return $this->container['dEzmaxinvoicingRebatecontractlength'];
    }

    /**
     * Sets dEzmaxinvoicingRebatecontractlength
     *
     * @param string $dEzmaxinvoicingRebatecontractlength The percentage of rebate depending of the contract length
     *
     * @return self
     */
    public function setDEzmaxinvoicingRebatecontractlength($dEzmaxinvoicingRebatecontractlength)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingRebatecontractlength)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingRebatecontractlength cannot be null');
        //}

//        if ((!preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $dEzmaxinvoicingRebatecontractlength))) {
        if (!is_null($dEzmaxinvoicingRebatecontractlength) && (!preg_match("/^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/", $dEzmaxinvoicingRebatecontractlength))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingRebatecontractlength when calling EzmaxinvoicingResponse., must conform to the pattern /^-{0,1}[\\d]{1,3}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingRebatecontractlength'] = $dEzmaxinvoicingRebatecontractlength;
        $this->container['dEzmaxinvoicingRebatecontractlength'] = (is_null($dEzmaxinvoicingRebatecontractlength) ? null : (string) $dEzmaxinvoicingRebatecontractlength);

        return $this;
    }

    /**
     * Gets bEzmaxinvoicingRebateEzsignallagents
     *
     * @return bool
     */
    public function getBEzmaxinvoicingRebateEzsignallagents()
    {
        return $this->container['bEzmaxinvoicingRebateEzsignallagents'];
    }

    /**
     * Sets bEzmaxinvoicingRebateEzsignallagents
     *
     * @param bool $bEzmaxinvoicingRebateEzsignallagents Whether the rebate for eZsign is for all agents
     *
     * @return self
     */
    public function setBEzmaxinvoicingRebateEzsignallagents($bEzmaxinvoicingRebateEzsignallagents)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzmaxinvoicingRebateEzsignallagents)) {
            //throw new \InvalidArgumentException('non-nullable bEzmaxinvoicingRebateEzsignallagents cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzmaxinvoicingRebateEzsignallagents'] = $bEzmaxinvoicingRebateEzsignallagents;
        $this->container['bEzmaxinvoicingRebateEzsignallagents'] = (is_null($bEzmaxinvoicingRebateEzsignallagents) ? null : (bool) $bEzmaxinvoicingRebateEzsignallagents);

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit|null
     */
    public function getObjAudit()
    {
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit|null $objAudit objAudit
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


