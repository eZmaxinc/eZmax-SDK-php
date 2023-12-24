<?php
/**
 * FranchisereferalincomeRequest
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
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
 * FranchisereferalincomeRequest Class Doc Comment
 *
 * @category Class
 * @description An Franchisereferalincome Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FranchisereferalincomeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'franchisereferalincome-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiFranchisereferalincomeID' => 'int',
        'fkiFranchisebrokerID' => 'int',
        'fkiFranchisereferalincomeprogramID' => 'int',
        'fkiPeriodID' => 'int',
        'dFranchisereferalincomeLoan' => 'string',
        'dFranchisereferalincomeFranchiseamount' => 'string',
        'dFranchisereferalincomeFranchisoramount' => 'string',
        'dFranchisereferalincomeAgentamount' => 'string',
        'dtFranchisereferalincomeDisbursed' => 'string',
        'tFranchisereferalincomeComment' => 'string',
        'fkiFranchiseofficeID' => 'int',
        'sFranchisereferalincomeRemoteid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiFranchisereferalincomeID' => null,
        'fkiFranchisebrokerID' => null,
        'fkiFranchisereferalincomeprogramID' => null,
        'fkiPeriodID' => null,
        'dFranchisereferalincomeLoan' => null,
        'dFranchisereferalincomeFranchiseamount' => null,
        'dFranchisereferalincomeFranchisoramount' => null,
        'dFranchisereferalincomeAgentamount' => null,
        'dtFranchisereferalincomeDisbursed' => null,
        'tFranchisereferalincomeComment' => null,
        'fkiFranchiseofficeID' => null,
        'sFranchisereferalincomeRemoteid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiFranchisereferalincomeID' => false,
		'fkiFranchisebrokerID' => false,
		'fkiFranchisereferalincomeprogramID' => false,
		'fkiPeriodID' => false,
		'dFranchisereferalincomeLoan' => false,
		'dFranchisereferalincomeFranchiseamount' => false,
		'dFranchisereferalincomeFranchisoramount' => false,
		'dFranchisereferalincomeAgentamount' => false,
		'dtFranchisereferalincomeDisbursed' => false,
		'tFranchisereferalincomeComment' => false,
		'fkiFranchiseofficeID' => false,
		'sFranchisereferalincomeRemoteid' => false
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
        'pkiFranchisereferalincomeID' => 'pkiFranchisereferalincomeID',
        'fkiFranchisebrokerID' => 'fkiFranchisebrokerID',
        'fkiFranchisereferalincomeprogramID' => 'fkiFranchisereferalincomeprogramID',
        'fkiPeriodID' => 'fkiPeriodID',
        'dFranchisereferalincomeLoan' => 'dFranchisereferalincomeLoan',
        'dFranchisereferalincomeFranchiseamount' => 'dFranchisereferalincomeFranchiseamount',
        'dFranchisereferalincomeFranchisoramount' => 'dFranchisereferalincomeFranchisoramount',
        'dFranchisereferalincomeAgentamount' => 'dFranchisereferalincomeAgentamount',
        'dtFranchisereferalincomeDisbursed' => 'dtFranchisereferalincomeDisbursed',
        'tFranchisereferalincomeComment' => 'tFranchisereferalincomeComment',
        'fkiFranchiseofficeID' => 'fkiFranchiseofficeID',
        'sFranchisereferalincomeRemoteid' => 'sFranchisereferalincomeRemoteid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiFranchisereferalincomeID' => 'setPkiFranchisereferalincomeID',
        'fkiFranchisebrokerID' => 'setFkiFranchisebrokerID',
        'fkiFranchisereferalincomeprogramID' => 'setFkiFranchisereferalincomeprogramID',
        'fkiPeriodID' => 'setFkiPeriodID',
        'dFranchisereferalincomeLoan' => 'setDFranchisereferalincomeLoan',
        'dFranchisereferalincomeFranchiseamount' => 'setDFranchisereferalincomeFranchiseamount',
        'dFranchisereferalincomeFranchisoramount' => 'setDFranchisereferalincomeFranchisoramount',
        'dFranchisereferalincomeAgentamount' => 'setDFranchisereferalincomeAgentamount',
        'dtFranchisereferalincomeDisbursed' => 'setDtFranchisereferalincomeDisbursed',
        'tFranchisereferalincomeComment' => 'setTFranchisereferalincomeComment',
        'fkiFranchiseofficeID' => 'setFkiFranchiseofficeID',
        'sFranchisereferalincomeRemoteid' => 'setSFranchisereferalincomeRemoteid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiFranchisereferalincomeID' => 'getPkiFranchisereferalincomeID',
        'fkiFranchisebrokerID' => 'getFkiFranchisebrokerID',
        'fkiFranchisereferalincomeprogramID' => 'getFkiFranchisereferalincomeprogramID',
        'fkiPeriodID' => 'getFkiPeriodID',
        'dFranchisereferalincomeLoan' => 'getDFranchisereferalincomeLoan',
        'dFranchisereferalincomeFranchiseamount' => 'getDFranchisereferalincomeFranchiseamount',
        'dFranchisereferalincomeFranchisoramount' => 'getDFranchisereferalincomeFranchisoramount',
        'dFranchisereferalincomeAgentamount' => 'getDFranchisereferalincomeAgentamount',
        'dtFranchisereferalincomeDisbursed' => 'getDtFranchisereferalincomeDisbursed',
        'tFranchisereferalincomeComment' => 'getTFranchisereferalincomeComment',
        'fkiFranchiseofficeID' => 'getFkiFranchiseofficeID',
        'sFranchisereferalincomeRemoteid' => 'getSFranchisereferalincomeRemoteid'
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
        $this->setIfExists('pkiFranchisereferalincomeID', $data ?? [], null);
        $this->setIfExists('fkiFranchisebrokerID', $data ?? [], null);
        $this->setIfExists('fkiFranchisereferalincomeprogramID', $data ?? [], null);
        $this->setIfExists('fkiPeriodID', $data ?? [], null);
        $this->setIfExists('dFranchisereferalincomeLoan', $data ?? [], null);
        $this->setIfExists('dFranchisereferalincomeFranchiseamount', $data ?? [], null);
        $this->setIfExists('dFranchisereferalincomeFranchisoramount', $data ?? [], null);
        $this->setIfExists('dFranchisereferalincomeAgentamount', $data ?? [], null);
        $this->setIfExists('dtFranchisereferalincomeDisbursed', $data ?? [], null);
        $this->setIfExists('tFranchisereferalincomeComment', $data ?? [], null);
        $this->setIfExists('fkiFranchiseofficeID', $data ?? [], null);
        $this->setIfExists('sFranchisereferalincomeRemoteid', $data ?? [], null);
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

        if (!is_null($this->container['pkiFranchisereferalincomeID']) && ($this->container['pkiFranchisereferalincomeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiFranchisereferalincomeID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiFranchisebrokerID'] === null) {
            $invalidProperties[] = "'fkiFranchisebrokerID' can't be null";
        }
        if (($this->container['fkiFranchisebrokerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiFranchisebrokerID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiFranchisereferalincomeprogramID'] === null) {
            $invalidProperties[] = "'fkiFranchisereferalincomeprogramID' can't be null";
        }
        if (($this->container['fkiFranchisereferalincomeprogramID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiFranchisereferalincomeprogramID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiPeriodID'] === null) {
            $invalidProperties[] = "'fkiPeriodID' can't be null";
        }
        if (($this->container['fkiPeriodID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiPeriodID', must be bigger than or equal to 0.";
        }

        if ($this->container['dFranchisereferalincomeLoan'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeLoan' can't be null";
        }
        if ($this->container['dFranchisereferalincomeFranchiseamount'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeFranchiseamount' can't be null";
        }
        if ($this->container['dFranchisereferalincomeFranchisoramount'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeFranchisoramount' can't be null";
        }
        if ($this->container['dFranchisereferalincomeAgentamount'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeAgentamount' can't be null";
        }
        if ($this->container['dtFranchisereferalincomeDisbursed'] === null) {
            $invalidProperties[] = "'dtFranchisereferalincomeDisbursed' can't be null";
        }
        if ($this->container['tFranchisereferalincomeComment'] === null) {
            $invalidProperties[] = "'tFranchisereferalincomeComment' can't be null";
        }
        if ($this->container['fkiFranchiseofficeID'] === null) {
            $invalidProperties[] = "'fkiFranchiseofficeID' can't be null";
        }
        if (($this->container['fkiFranchiseofficeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiFranchiseofficeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sFranchisereferalincomeRemoteid'] === null) {
            $invalidProperties[] = "'sFranchisereferalincomeRemoteid' can't be null";
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
     * Gets pkiFranchisereferalincomeID
     *
     * @return int|null
     */
    public function getPkiFranchisereferalincomeID()
    {
        return $this->container['pkiFranchisereferalincomeID'];
    }

    /**
     * Sets pkiFranchisereferalincomeID
     *
     * @param int|null $pkiFranchisereferalincomeID The unique ID of the Franchisereferalincome
     *
     * @return self
     */
    public function setPkiFranchisereferalincomeID($pkiFranchisereferalincomeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiFranchisereferalincomeID)) {
            //throw new \InvalidArgumentException('non-nullable pkiFranchisereferalincomeID cannot be null');
        //}

//        if (($pkiFranchisereferalincomeID < 0)) {
        if (!is_null($pkiFranchisereferalincomeID) && ($pkiFranchisereferalincomeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiFranchisereferalincomeID when calling FranchisereferalincomeRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiFranchisereferalincomeID'] = $pkiFranchisereferalincomeID;
        $this->container['pkiFranchisereferalincomeID'] = (is_null($pkiFranchisereferalincomeID) ? null : (int) $pkiFranchisereferalincomeID);

        return $this;
    }

    /**
     * Gets fkiFranchisebrokerID
     *
     * @return int
     */
    public function getFkiFranchisebrokerID()
    {
        return $this->container['fkiFranchisebrokerID'];
    }

    /**
     * Sets fkiFranchisebrokerID
     *
     * @param int $fkiFranchisebrokerID The unique ID of the Franchisebroker
     *
     * @return self
     */
    public function setFkiFranchisebrokerID($fkiFranchisebrokerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiFranchisebrokerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiFranchisebrokerID cannot be null');
        //}

//        if (($fkiFranchisebrokerID < 0)) {
        if (($fkiFranchisebrokerID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiFranchisebrokerID when calling FranchisereferalincomeRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiFranchisebrokerID'] = $fkiFranchisebrokerID;
        $this->container['fkiFranchisebrokerID'] = (is_null($fkiFranchisebrokerID) ? null : (int) $fkiFranchisebrokerID);

        return $this;
    }

    /**
     * Gets fkiFranchisereferalincomeprogramID
     *
     * @return int
     */
    public function getFkiFranchisereferalincomeprogramID()
    {
        return $this->container['fkiFranchisereferalincomeprogramID'];
    }

    /**
     * Sets fkiFranchisereferalincomeprogramID
     *
     * @param int $fkiFranchisereferalincomeprogramID The unique ID of the Franchisereferalincomeprogram
     *
     * @return self
     */
    public function setFkiFranchisereferalincomeprogramID($fkiFranchisereferalincomeprogramID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiFranchisereferalincomeprogramID)) {
            //throw new \InvalidArgumentException('non-nullable fkiFranchisereferalincomeprogramID cannot be null');
        //}

//        if (($fkiFranchisereferalincomeprogramID < 0)) {
        if (($fkiFranchisereferalincomeprogramID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiFranchisereferalincomeprogramID when calling FranchisereferalincomeRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiFranchisereferalincomeprogramID'] = $fkiFranchisereferalincomeprogramID;
        $this->container['fkiFranchisereferalincomeprogramID'] = (is_null($fkiFranchisereferalincomeprogramID) ? null : (int) $fkiFranchisereferalincomeprogramID);

        return $this;
    }

    /**
     * Gets fkiPeriodID
     *
     * @return int
     */
    public function getFkiPeriodID()
    {
        return $this->container['fkiPeriodID'];
    }

    /**
     * Sets fkiPeriodID
     *
     * @param int $fkiPeriodID The unique ID of the Period
     *
     * @return self
     */
    public function setFkiPeriodID($fkiPeriodID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiPeriodID)) {
            //throw new \InvalidArgumentException('non-nullable fkiPeriodID cannot be null');
        //}

//        if (($fkiPeriodID < 0)) {
        if (($fkiPeriodID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiPeriodID when calling FranchisereferalincomeRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiPeriodID'] = $fkiPeriodID;
        $this->container['fkiPeriodID'] = (is_null($fkiPeriodID) ? null : (int) $fkiPeriodID);

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeLoan
     *
     * @return string
     */
    public function getDFranchisereferalincomeLoan()
    {
        return is_null($this->container['dFranchisereferalincomeLoan']) ? null : trim($this->container['dFranchisereferalincomeLoan']);
    }

    /**
     * Sets dFranchisereferalincomeLoan
     *
     * @param string $dFranchisereferalincomeLoan The loan amount
     *
     * @return self
     */
    public function setDFranchisereferalincomeLoan($dFranchisereferalincomeLoan)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dFranchisereferalincomeLoan)) {
            //throw new \InvalidArgumentException('non-nullable dFranchisereferalincomeLoan cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dFranchisereferalincomeLoan'] = $dFranchisereferalincomeLoan;
        $this->container['dFranchisereferalincomeLoan'] = (is_null($dFranchisereferalincomeLoan) ? null : trim((string) $dFranchisereferalincomeLoan));

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeFranchiseamount
     *
     * @return string
     */
    public function getDFranchisereferalincomeFranchiseamount()
    {
        return is_null($this->container['dFranchisereferalincomeFranchiseamount']) ? null : trim($this->container['dFranchisereferalincomeFranchiseamount']);
    }

    /**
     * Sets dFranchisereferalincomeFranchiseamount
     *
     * @param string $dFranchisereferalincomeFranchiseamount The amount that will be given to the franchise
     *
     * @return self
     */
    public function setDFranchisereferalincomeFranchiseamount($dFranchisereferalincomeFranchiseamount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dFranchisereferalincomeFranchiseamount)) {
            //throw new \InvalidArgumentException('non-nullable dFranchisereferalincomeFranchiseamount cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dFranchisereferalincomeFranchiseamount'] = $dFranchisereferalincomeFranchiseamount;
        $this->container['dFranchisereferalincomeFranchiseamount'] = (is_null($dFranchisereferalincomeFranchiseamount) ? null : trim((string) $dFranchisereferalincomeFranchiseamount));

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeFranchisoramount
     *
     * @return string
     */
    public function getDFranchisereferalincomeFranchisoramount()
    {
        return is_null($this->container['dFranchisereferalincomeFranchisoramount']) ? null : trim($this->container['dFranchisereferalincomeFranchisoramount']);
    }

    /**
     * Sets dFranchisereferalincomeFranchisoramount
     *
     * @param string $dFranchisereferalincomeFranchisoramount The amount that will be kept by the franchisor
     *
     * @return self
     */
    public function setDFranchisereferalincomeFranchisoramount($dFranchisereferalincomeFranchisoramount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dFranchisereferalincomeFranchisoramount)) {
            //throw new \InvalidArgumentException('non-nullable dFranchisereferalincomeFranchisoramount cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dFranchisereferalincomeFranchisoramount'] = $dFranchisereferalincomeFranchisoramount;
        $this->container['dFranchisereferalincomeFranchisoramount'] = (is_null($dFranchisereferalincomeFranchisoramount) ? null : trim((string) $dFranchisereferalincomeFranchisoramount));

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeAgentamount
     *
     * @return string
     */
    public function getDFranchisereferalincomeAgentamount()
    {
        return is_null($this->container['dFranchisereferalincomeAgentamount']) ? null : trim($this->container['dFranchisereferalincomeAgentamount']);
    }

    /**
     * Sets dFranchisereferalincomeAgentamount
     *
     * @param string $dFranchisereferalincomeAgentamount The amount that will be given to the agent
     *
     * @return self
     */
    public function setDFranchisereferalincomeAgentamount($dFranchisereferalincomeAgentamount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dFranchisereferalincomeAgentamount)) {
            //throw new \InvalidArgumentException('non-nullable dFranchisereferalincomeAgentamount cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dFranchisereferalincomeAgentamount'] = $dFranchisereferalincomeAgentamount;
        $this->container['dFranchisereferalincomeAgentamount'] = (is_null($dFranchisereferalincomeAgentamount) ? null : trim((string) $dFranchisereferalincomeAgentamount));

        return $this;
    }

    /**
     * Gets dtFranchisereferalincomeDisbursed
     *
     * @return string
     */
    public function getDtFranchisereferalincomeDisbursed()
    {
        return is_null($this->container['dtFranchisereferalincomeDisbursed']) ? null : trim($this->container['dtFranchisereferalincomeDisbursed']);
    }

    /**
     * Sets dtFranchisereferalincomeDisbursed
     *
     * @param string $dtFranchisereferalincomeDisbursed The date the amounts were disbursed
     *
     * @return self
     */
    public function setDtFranchisereferalincomeDisbursed($dtFranchisereferalincomeDisbursed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtFranchisereferalincomeDisbursed)) {
            //throw new \InvalidArgumentException('non-nullable dtFranchisereferalincomeDisbursed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtFranchisereferalincomeDisbursed'] = $dtFranchisereferalincomeDisbursed;
        $this->container['dtFranchisereferalincomeDisbursed'] = (is_null($dtFranchisereferalincomeDisbursed) ? null : trim((string) $dtFranchisereferalincomeDisbursed));

        return $this;
    }

    /**
     * Gets tFranchisereferalincomeComment
     *
     * @return string
     */
    public function getTFranchisereferalincomeComment()
    {
        return is_null($this->container['tFranchisereferalincomeComment']) ? null : trim($this->container['tFranchisereferalincomeComment']);
    }

    /**
     * Sets tFranchisereferalincomeComment
     *
     * @param string $tFranchisereferalincomeComment Comment about the transaction
     *
     * @return self
     */
    public function setTFranchisereferalincomeComment($tFranchisereferalincomeComment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tFranchisereferalincomeComment)) {
            //throw new \InvalidArgumentException('non-nullable tFranchisereferalincomeComment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tFranchisereferalincomeComment'] = $tFranchisereferalincomeComment;
        $this->container['tFranchisereferalincomeComment'] = (is_null($tFranchisereferalincomeComment) ? null : trim((string) $tFranchisereferalincomeComment));

        return $this;
    }

    /**
     * Gets fkiFranchiseofficeID
     *
     * @return int
     */
    public function getFkiFranchiseofficeID()
    {
        return $this->container['fkiFranchiseofficeID'];
    }

    /**
     * Sets fkiFranchiseofficeID
     *
     * @param int $fkiFranchiseofficeID The unique ID of the Franchisereoffice
     *
     * @return self
     */
    public function setFkiFranchiseofficeID($fkiFranchiseofficeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiFranchiseofficeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiFranchiseofficeID cannot be null');
        //}

//        if (($fkiFranchiseofficeID < 0)) {
        if (($fkiFranchiseofficeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiFranchiseofficeID when calling FranchisereferalincomeRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiFranchiseofficeID'] = $fkiFranchiseofficeID;
        $this->container['fkiFranchiseofficeID'] = (is_null($fkiFranchiseofficeID) ? null : (int) $fkiFranchiseofficeID);

        return $this;
    }

    /**
     * Gets sFranchisereferalincomeRemoteid
     *
     * @return string
     */
    public function getSFranchisereferalincomeRemoteid()
    {
        return is_null($this->container['sFranchisereferalincomeRemoteid']) ? null : trim($this->container['sFranchisereferalincomeRemoteid']);
    }

    /**
     * Sets sFranchisereferalincomeRemoteid
     *
     * @param string $sFranchisereferalincomeRemoteid 
     *
     * @return self
     */
    public function setSFranchisereferalincomeRemoteid($sFranchisereferalincomeRemoteid)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sFranchisereferalincomeRemoteid)) {
            //throw new \InvalidArgumentException('non-nullable sFranchisereferalincomeRemoteid cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sFranchisereferalincomeRemoteid'] = $sFranchisereferalincomeRemoteid;
        $this->container['sFranchisereferalincomeRemoteid'] = (is_null($sFranchisereferalincomeRemoteid) ? null : trim((string) $sFranchisereferalincomeRemoteid));

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


