<?php
/**
 * SystemconfigurationRequest
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
 * OpenAPI Generator version: 6.6.0
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
 * SystemconfigurationRequest Class Doc Comment
 *
 * @category Class
 * @description A Systemconfiguration Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SystemconfigurationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'systemconfiguration-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiSystemconfigurationID' => 'int',
        'eSystemconfigurationNewexternaluseraction' => '\eZmaxAPI\Model\FieldESystemconfigurationNewexternaluseraction',
        'eSystemconfigurationLanguage1' => '\eZmaxAPI\Model\FieldESystemconfigurationLanguage1',
        'eSystemconfigurationLanguage2' => '\eZmaxAPI\Model\FieldESystemconfigurationLanguage2',
        'eSystemconfigurationEzsign' => '\eZmaxAPI\Model\FieldESystemconfigurationEzsign',
        'bSystemconfigurationEzsignpersonnal' => 'bool',
        'bSystemconfigurationSspr' => 'bool',
        'dtSystemconfigurationReadonlyexpirationstart' => 'string',
        'dtSystemconfigurationReadonlyexpirationend' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiSystemconfigurationID' => null,
        'eSystemconfigurationNewexternaluseraction' => null,
        'eSystemconfigurationLanguage1' => null,
        'eSystemconfigurationLanguage2' => null,
        'eSystemconfigurationEzsign' => null,
        'bSystemconfigurationEzsignpersonnal' => null,
        'bSystemconfigurationSspr' => null,
        'dtSystemconfigurationReadonlyexpirationstart' => null,
        'dtSystemconfigurationReadonlyexpirationend' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiSystemconfigurationID' => false,
		'eSystemconfigurationNewexternaluseraction' => false,
		'eSystemconfigurationLanguage1' => false,
		'eSystemconfigurationLanguage2' => false,
		'eSystemconfigurationEzsign' => false,
		'bSystemconfigurationEzsignpersonnal' => false,
		'bSystemconfigurationSspr' => false,
		'dtSystemconfigurationReadonlyexpirationstart' => false,
		'dtSystemconfigurationReadonlyexpirationend' => false
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
        'pkiSystemconfigurationID' => 'pkiSystemconfigurationID',
        'eSystemconfigurationNewexternaluseraction' => 'eSystemconfigurationNewexternaluseraction',
        'eSystemconfigurationLanguage1' => 'eSystemconfigurationLanguage1',
        'eSystemconfigurationLanguage2' => 'eSystemconfigurationLanguage2',
        'eSystemconfigurationEzsign' => 'eSystemconfigurationEzsign',
        'bSystemconfigurationEzsignpersonnal' => 'bSystemconfigurationEzsignpersonnal',
        'bSystemconfigurationSspr' => 'bSystemconfigurationSspr',
        'dtSystemconfigurationReadonlyexpirationstart' => 'dtSystemconfigurationReadonlyexpirationstart',
        'dtSystemconfigurationReadonlyexpirationend' => 'dtSystemconfigurationReadonlyexpirationend'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiSystemconfigurationID' => 'setPkiSystemconfigurationID',
        'eSystemconfigurationNewexternaluseraction' => 'setESystemconfigurationNewexternaluseraction',
        'eSystemconfigurationLanguage1' => 'setESystemconfigurationLanguage1',
        'eSystemconfigurationLanguage2' => 'setESystemconfigurationLanguage2',
        'eSystemconfigurationEzsign' => 'setESystemconfigurationEzsign',
        'bSystemconfigurationEzsignpersonnal' => 'setBSystemconfigurationEzsignpersonnal',
        'bSystemconfigurationSspr' => 'setBSystemconfigurationSspr',
        'dtSystemconfigurationReadonlyexpirationstart' => 'setDtSystemconfigurationReadonlyexpirationstart',
        'dtSystemconfigurationReadonlyexpirationend' => 'setDtSystemconfigurationReadonlyexpirationend'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiSystemconfigurationID' => 'getPkiSystemconfigurationID',
        'eSystemconfigurationNewexternaluseraction' => 'getESystemconfigurationNewexternaluseraction',
        'eSystemconfigurationLanguage1' => 'getESystemconfigurationLanguage1',
        'eSystemconfigurationLanguage2' => 'getESystemconfigurationLanguage2',
        'eSystemconfigurationEzsign' => 'getESystemconfigurationEzsign',
        'bSystemconfigurationEzsignpersonnal' => 'getBSystemconfigurationEzsignpersonnal',
        'bSystemconfigurationSspr' => 'getBSystemconfigurationSspr',
        'dtSystemconfigurationReadonlyexpirationstart' => 'getDtSystemconfigurationReadonlyexpirationstart',
        'dtSystemconfigurationReadonlyexpirationend' => 'getDtSystemconfigurationReadonlyexpirationend'
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
        $this->setIfExists('pkiSystemconfigurationID', $data ?? [], null);
        $this->setIfExists('eSystemconfigurationNewexternaluseraction', $data ?? [], null);
        $this->setIfExists('eSystemconfigurationLanguage1', $data ?? [], null);
        $this->setIfExists('eSystemconfigurationLanguage2', $data ?? [], null);
        $this->setIfExists('eSystemconfigurationEzsign', $data ?? [], null);
        $this->setIfExists('bSystemconfigurationEzsignpersonnal', $data ?? [], null);
        $this->setIfExists('bSystemconfigurationSspr', $data ?? [], null);
        $this->setIfExists('dtSystemconfigurationReadonlyexpirationstart', $data ?? [], null);
        $this->setIfExists('dtSystemconfigurationReadonlyexpirationend', $data ?? [], null);
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

        if (!is_null($this->container['pkiSystemconfigurationID']) && ($this->container['pkiSystemconfigurationID'] > 1)) {
            $invalidProperties[] = "invalid value for 'pkiSystemconfigurationID', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['pkiSystemconfigurationID']) && ($this->container['pkiSystemconfigurationID'] < 1)) {
            $invalidProperties[] = "invalid value for 'pkiSystemconfigurationID', must be bigger than or equal to 1.";
        }

        if ($this->container['eSystemconfigurationNewexternaluseraction'] === null) {
            $invalidProperties[] = "'eSystemconfigurationNewexternaluseraction' can't be null";
        }
        if ($this->container['eSystemconfigurationLanguage1'] === null) {
            $invalidProperties[] = "'eSystemconfigurationLanguage1' can't be null";
        }
        if ($this->container['eSystemconfigurationLanguage2'] === null) {
            $invalidProperties[] = "'eSystemconfigurationLanguage2' can't be null";
        }
        if ($this->container['bSystemconfigurationEzsignpersonnal'] === null) {
            $invalidProperties[] = "'bSystemconfigurationEzsignpersonnal' can't be null";
        }
        if ($this->container['bSystemconfigurationSspr'] === null) {
            $invalidProperties[] = "'bSystemconfigurationSspr' can't be null";
        }
//        if (!is_null($this->container['dtSystemconfigurationReadonlyexpirationstart']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtSystemconfigurationReadonlyexpirationstart'])) {
        if (!is_null($this->container['dtSystemconfigurationReadonlyexpirationstart']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtSystemconfigurationReadonlyexpirationstart'])) {
            $invalidProperties[] = "invalid value for 'dtSystemconfigurationReadonlyexpirationstart', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.";
        }

//        if (!is_null($this->container['dtSystemconfigurationReadonlyexpirationend']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtSystemconfigurationReadonlyexpirationend'])) {
        if (!is_null($this->container['dtSystemconfigurationReadonlyexpirationend']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtSystemconfigurationReadonlyexpirationend'])) {
            $invalidProperties[] = "invalid value for 'dtSystemconfigurationReadonlyexpirationend', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.";
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
     * Gets pkiSystemconfigurationID
     *
     * @return int|null
     */
    public function getPkiSystemconfigurationID()
    {
        return $this->container['pkiSystemconfigurationID'];
    }

    /**
     * Sets pkiSystemconfigurationID
     *
     * @param int|null $pkiSystemconfigurationID The unique ID of the Systemconfiguration
     *
     * @return self
     */
    public function setPkiSystemconfigurationID($pkiSystemconfigurationID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiSystemconfigurationID)) {
            //throw new \InvalidArgumentException('non-nullable pkiSystemconfigurationID cannot be null');
        //}

//        if (($pkiSystemconfigurationID > 1)) {
        if (!is_null($pkiSystemconfigurationID) && ($pkiSystemconfigurationID > 1)) {
            throw new \InvalidArgumentException('invalid value for $pkiSystemconfigurationID when calling SystemconfigurationRequest., must be smaller than or equal to 1.');
        }
//        if (($pkiSystemconfigurationID < 1)) {
        if (!is_null($pkiSystemconfigurationID) && ($pkiSystemconfigurationID < 1)) {
            throw new \InvalidArgumentException('invalid value for $pkiSystemconfigurationID when calling SystemconfigurationRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiSystemconfigurationID'] = $pkiSystemconfigurationID;
        $this->container['pkiSystemconfigurationID'] = (is_null($pkiSystemconfigurationID) ? null : (int) $pkiSystemconfigurationID);

        return $this;
    }

    /**
     * Gets eSystemconfigurationNewexternaluseraction
     *
     * @return \eZmaxAPI\Model\FieldESystemconfigurationNewexternaluseraction
     */
    public function getESystemconfigurationNewexternaluseraction()
    {
        return $this->container['eSystemconfigurationNewexternaluseraction'];
    }

    /**
     * Sets eSystemconfigurationNewexternaluseraction
     *
     * @param \eZmaxAPI\Model\FieldESystemconfigurationNewexternaluseraction $eSystemconfigurationNewexternaluseraction eSystemconfigurationNewexternaluseraction
     *
     * @return self
     */
    public function setESystemconfigurationNewexternaluseraction($eSystemconfigurationNewexternaluseraction)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eSystemconfigurationNewexternaluseraction)) {
            //throw new \InvalidArgumentException('non-nullable eSystemconfigurationNewexternaluseraction cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eSystemconfigurationNewexternaluseraction'] = $eSystemconfigurationNewexternaluseraction;
        $this->container['eSystemconfigurationNewexternaluseraction'] = $eSystemconfigurationNewexternaluseraction;

        return $this;
    }

    /**
     * Gets eSystemconfigurationLanguage1
     *
     * @return \eZmaxAPI\Model\FieldESystemconfigurationLanguage1
     */
    public function getESystemconfigurationLanguage1()
    {
        return $this->container['eSystemconfigurationLanguage1'];
    }

    /**
     * Sets eSystemconfigurationLanguage1
     *
     * @param \eZmaxAPI\Model\FieldESystemconfigurationLanguage1 $eSystemconfigurationLanguage1 eSystemconfigurationLanguage1
     *
     * @return self
     */
    public function setESystemconfigurationLanguage1($eSystemconfigurationLanguage1)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eSystemconfigurationLanguage1)) {
            //throw new \InvalidArgumentException('non-nullable eSystemconfigurationLanguage1 cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eSystemconfigurationLanguage1'] = $eSystemconfigurationLanguage1;
        $this->container['eSystemconfigurationLanguage1'] = $eSystemconfigurationLanguage1;

        return $this;
    }

    /**
     * Gets eSystemconfigurationLanguage2
     *
     * @return \eZmaxAPI\Model\FieldESystemconfigurationLanguage2
     */
    public function getESystemconfigurationLanguage2()
    {
        return $this->container['eSystemconfigurationLanguage2'];
    }

    /**
     * Sets eSystemconfigurationLanguage2
     *
     * @param \eZmaxAPI\Model\FieldESystemconfigurationLanguage2 $eSystemconfigurationLanguage2 eSystemconfigurationLanguage2
     *
     * @return self
     */
    public function setESystemconfigurationLanguage2($eSystemconfigurationLanguage2)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eSystemconfigurationLanguage2)) {
            //throw new \InvalidArgumentException('non-nullable eSystemconfigurationLanguage2 cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eSystemconfigurationLanguage2'] = $eSystemconfigurationLanguage2;
        $this->container['eSystemconfigurationLanguage2'] = $eSystemconfigurationLanguage2;

        return $this;
    }

    /**
     * Gets eSystemconfigurationEzsign
     *
     * @return \eZmaxAPI\Model\FieldESystemconfigurationEzsign|null
     */
    public function getESystemconfigurationEzsign()
    {
        return $this->container['eSystemconfigurationEzsign'];
    }

    /**
     * Sets eSystemconfigurationEzsign
     *
     * @param \eZmaxAPI\Model\FieldESystemconfigurationEzsign|null $eSystemconfigurationEzsign eSystemconfigurationEzsign
     *
     * @return self
     */
    public function setESystemconfigurationEzsign($eSystemconfigurationEzsign)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eSystemconfigurationEzsign)) {
            //throw new \InvalidArgumentException('non-nullable eSystemconfigurationEzsign cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eSystemconfigurationEzsign'] = $eSystemconfigurationEzsign;
        $this->container['eSystemconfigurationEzsign'] = $eSystemconfigurationEzsign;

        return $this;
    }

    /**
     * Gets bSystemconfigurationEzsignpersonnal
     *
     * @return bool
     */
    public function getBSystemconfigurationEzsignpersonnal()
    {
        return $this->container['bSystemconfigurationEzsignpersonnal'];
    }

    /**
     * Sets bSystemconfigurationEzsignpersonnal
     *
     * @param bool $bSystemconfigurationEzsignpersonnal Whether if we allow the creation of personal files in eZsign
     *
     * @return self
     */
    public function setBSystemconfigurationEzsignpersonnal($bSystemconfigurationEzsignpersonnal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bSystemconfigurationEzsignpersonnal)) {
            //throw new \InvalidArgumentException('non-nullable bSystemconfigurationEzsignpersonnal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bSystemconfigurationEzsignpersonnal'] = $bSystemconfigurationEzsignpersonnal;
        $this->container['bSystemconfigurationEzsignpersonnal'] = (is_null($bSystemconfigurationEzsignpersonnal) ? null : (bool) $bSystemconfigurationEzsignpersonnal);

        return $this;
    }

    /**
     * Gets bSystemconfigurationSspr
     *
     * @return bool
     */
    public function getBSystemconfigurationSspr()
    {
        return $this->container['bSystemconfigurationSspr'];
    }

    /**
     * Sets bSystemconfigurationSspr
     *
     * @param bool $bSystemconfigurationSspr Whether if we allow SSPR
     *
     * @return self
     */
    public function setBSystemconfigurationSspr($bSystemconfigurationSspr)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bSystemconfigurationSspr)) {
            //throw new \InvalidArgumentException('non-nullable bSystemconfigurationSspr cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bSystemconfigurationSspr'] = $bSystemconfigurationSspr;
        $this->container['bSystemconfigurationSspr'] = (is_null($bSystemconfigurationSspr) ? null : (bool) $bSystemconfigurationSspr);

        return $this;
    }

    /**
     * Gets dtSystemconfigurationReadonlyexpirationstart
     *
     * @return string|null
     */
    public function getDtSystemconfigurationReadonlyexpirationstart()
    {
        return $this->container['dtSystemconfigurationReadonlyexpirationstart'];
    }

    /**
     * Sets dtSystemconfigurationReadonlyexpirationstart
     *
     * @param string|null $dtSystemconfigurationReadonlyexpirationstart The start date where the system will be in read only
     *
     * @return self
     */
    public function setDtSystemconfigurationReadonlyexpirationstart($dtSystemconfigurationReadonlyexpirationstart)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtSystemconfigurationReadonlyexpirationstart)) {
            //throw new \InvalidArgumentException('non-nullable dtSystemconfigurationReadonlyexpirationstart cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dtSystemconfigurationReadonlyexpirationstart))) {
        if (!is_null($dtSystemconfigurationReadonlyexpirationstart) && (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dtSystemconfigurationReadonlyexpirationstart))) {
            throw new \InvalidArgumentException("invalid value for \$dtSystemconfigurationReadonlyexpirationstart when calling SystemconfigurationRequest., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtSystemconfigurationReadonlyexpirationstart'] = $dtSystemconfigurationReadonlyexpirationstart;
        $this->container['dtSystemconfigurationReadonlyexpirationstart'] = (is_null($dtSystemconfigurationReadonlyexpirationstart) ? null : (string) $dtSystemconfigurationReadonlyexpirationstart);

        return $this;
    }

    /**
     * Gets dtSystemconfigurationReadonlyexpirationend
     *
     * @return string|null
     */
    public function getDtSystemconfigurationReadonlyexpirationend()
    {
        return $this->container['dtSystemconfigurationReadonlyexpirationend'];
    }

    /**
     * Sets dtSystemconfigurationReadonlyexpirationend
     *
     * @param string|null $dtSystemconfigurationReadonlyexpirationend The end date where the system will be in read only
     *
     * @return self
     */
    public function setDtSystemconfigurationReadonlyexpirationend($dtSystemconfigurationReadonlyexpirationend)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtSystemconfigurationReadonlyexpirationend)) {
            //throw new \InvalidArgumentException('non-nullable dtSystemconfigurationReadonlyexpirationend cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dtSystemconfigurationReadonlyexpirationend))) {
        if (!is_null($dtSystemconfigurationReadonlyexpirationend) && (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dtSystemconfigurationReadonlyexpirationend))) {
            throw new \InvalidArgumentException("invalid value for \$dtSystemconfigurationReadonlyexpirationend when calling SystemconfigurationRequest., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtSystemconfigurationReadonlyexpirationend'] = $dtSystemconfigurationReadonlyexpirationend;
        $this->container['dtSystemconfigurationReadonlyexpirationend'] = (is_null($dtSystemconfigurationReadonlyexpirationend) ? null : (string) $dtSystemconfigurationReadonlyexpirationend);

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

