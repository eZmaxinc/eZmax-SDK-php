<?php
/**
 * ClonehistoryListElement
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
 * ClonehistoryListElement Class Doc Comment
 *
 * @category Class
 * @description A Clonehistory List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClonehistoryListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'clonehistory-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiClonehistoryID' => 'int',
        'fkiUserIDCloning' => 'int',
        'fkiUserIDCloned' => 'int',
        'dtClonehistoryFirsthit' => 'string',
        'dtClonehistoryLasthit' => 'string',
        'sUserLoginnameCloning' => 'string',
        'sUserFirstnameCloning' => 'string',
        'sUserLastnameCloning' => 'string',
        'sUserLoginnameCloned' => 'string',
        'sUserFirstnameCloned' => 'string',
        'sUserLastnameCloned' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiClonehistoryID' => null,
        'fkiUserIDCloning' => null,
        'fkiUserIDCloned' => null,
        'dtClonehistoryFirsthit' => null,
        'dtClonehistoryLasthit' => null,
        'sUserLoginnameCloning' => null,
        'sUserFirstnameCloning' => null,
        'sUserLastnameCloning' => null,
        'sUserLoginnameCloned' => null,
        'sUserFirstnameCloned' => null,
        'sUserLastnameCloned' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiClonehistoryID' => false,
		'fkiUserIDCloning' => false,
		'fkiUserIDCloned' => false,
		'dtClonehistoryFirsthit' => false,
		'dtClonehistoryLasthit' => false,
		'sUserLoginnameCloning' => false,
		'sUserFirstnameCloning' => false,
		'sUserLastnameCloning' => false,
		'sUserLoginnameCloned' => false,
		'sUserFirstnameCloned' => false,
		'sUserLastnameCloned' => false
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
        'pkiClonehistoryID' => 'pkiClonehistoryID',
        'fkiUserIDCloning' => 'fkiUserIDCloning',
        'fkiUserIDCloned' => 'fkiUserIDCloned',
        'dtClonehistoryFirsthit' => 'dtClonehistoryFirsthit',
        'dtClonehistoryLasthit' => 'dtClonehistoryLasthit',
        'sUserLoginnameCloning' => 'sUserLoginnameCloning',
        'sUserFirstnameCloning' => 'sUserFirstnameCloning',
        'sUserLastnameCloning' => 'sUserLastnameCloning',
        'sUserLoginnameCloned' => 'sUserLoginnameCloned',
        'sUserFirstnameCloned' => 'sUserFirstnameCloned',
        'sUserLastnameCloned' => 'sUserLastnameCloned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiClonehistoryID' => 'setPkiClonehistoryID',
        'fkiUserIDCloning' => 'setFkiUserIDCloning',
        'fkiUserIDCloned' => 'setFkiUserIDCloned',
        'dtClonehistoryFirsthit' => 'setDtClonehistoryFirsthit',
        'dtClonehistoryLasthit' => 'setDtClonehistoryLasthit',
        'sUserLoginnameCloning' => 'setSUserLoginnameCloning',
        'sUserFirstnameCloning' => 'setSUserFirstnameCloning',
        'sUserLastnameCloning' => 'setSUserLastnameCloning',
        'sUserLoginnameCloned' => 'setSUserLoginnameCloned',
        'sUserFirstnameCloned' => 'setSUserFirstnameCloned',
        'sUserLastnameCloned' => 'setSUserLastnameCloned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiClonehistoryID' => 'getPkiClonehistoryID',
        'fkiUserIDCloning' => 'getFkiUserIDCloning',
        'fkiUserIDCloned' => 'getFkiUserIDCloned',
        'dtClonehistoryFirsthit' => 'getDtClonehistoryFirsthit',
        'dtClonehistoryLasthit' => 'getDtClonehistoryLasthit',
        'sUserLoginnameCloning' => 'getSUserLoginnameCloning',
        'sUserFirstnameCloning' => 'getSUserFirstnameCloning',
        'sUserLastnameCloning' => 'getSUserLastnameCloning',
        'sUserLoginnameCloned' => 'getSUserLoginnameCloned',
        'sUserFirstnameCloned' => 'getSUserFirstnameCloned',
        'sUserLastnameCloned' => 'getSUserLastnameCloned'
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
        $this->setIfExists('pkiClonehistoryID', $data ?? [], null);
        $this->setIfExists('fkiUserIDCloning', $data ?? [], null);
        $this->setIfExists('fkiUserIDCloned', $data ?? [], null);
        $this->setIfExists('dtClonehistoryFirsthit', $data ?? [], null);
        $this->setIfExists('dtClonehistoryLasthit', $data ?? [], null);
        $this->setIfExists('sUserLoginnameCloning', $data ?? [], null);
        $this->setIfExists('sUserFirstnameCloning', $data ?? [], null);
        $this->setIfExists('sUserLastnameCloning', $data ?? [], null);
        $this->setIfExists('sUserLoginnameCloned', $data ?? [], null);
        $this->setIfExists('sUserFirstnameCloned', $data ?? [], null);
        $this->setIfExists('sUserLastnameCloned', $data ?? [], null);
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

        if ($this->container['pkiClonehistoryID'] === null) {
            $invalidProperties[] = "'pkiClonehistoryID' can't be null";
        }
        if (($this->container['pkiClonehistoryID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiClonehistoryID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['pkiClonehistoryID'] < 1)) {
            $invalidProperties[] = "invalid value for 'pkiClonehistoryID', must be bigger than or equal to 1.";
        }

        if ($this->container['fkiUserIDCloning'] === null) {
            $invalidProperties[] = "'fkiUserIDCloning' can't be null";
        }
        if (($this->container['fkiUserIDCloning'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserIDCloning', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiUserIDCloned'] === null) {
            $invalidProperties[] = "'fkiUserIDCloned' can't be null";
        }
        if (($this->container['fkiUserIDCloned'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserIDCloned', must be bigger than or equal to 0.";
        }

        if ($this->container['dtClonehistoryFirsthit'] === null) {
            $invalidProperties[] = "'dtClonehistoryFirsthit' can't be null";
        }
//        if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtClonehistoryFirsthit'])) {
        if (!is_null($this->container['dtClonehistoryFirsthit']) && !preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtClonehistoryFirsthit'])) {
            $invalidProperties[] = "invalid value for 'dtClonehistoryFirsthit', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.";
        }

//        if (!is_null($this->container['dtClonehistoryLasthit']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtClonehistoryLasthit'])) {
        if (!is_null($this->container['dtClonehistoryLasthit']) && !preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $this->container['dtClonehistoryLasthit'])) {
            $invalidProperties[] = "invalid value for 'dtClonehistoryLasthit', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.";
        }

        if ($this->container['sUserLoginnameCloning'] === null) {
            $invalidProperties[] = "'sUserLoginnameCloning' can't be null";
        }
//        if (!preg_match("/^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", $this->container['sUserLoginnameCloning'])) {
        if (!is_null($this->container['sUserLoginnameCloning']) && !preg_match("/(*UTF8)^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", $this->container['sUserLoginnameCloning'])) {
            $invalidProperties[] = "invalid value for 'sUserLoginnameCloning', must be conform to the pattern /^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/.";
        }

        if ($this->container['sUserFirstnameCloning'] === null) {
            $invalidProperties[] = "'sUserFirstnameCloning' can't be null";
        }
        if ($this->container['sUserLastnameCloning'] === null) {
            $invalidProperties[] = "'sUserLastnameCloning' can't be null";
        }
        if ($this->container['sUserLoginnameCloned'] === null) {
            $invalidProperties[] = "'sUserLoginnameCloned' can't be null";
        }
//        if (!preg_match("/^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", $this->container['sUserLoginnameCloned'])) {
        if (!is_null($this->container['sUserLoginnameCloned']) && !preg_match("/(*UTF8)^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", $this->container['sUserLoginnameCloned'])) {
            $invalidProperties[] = "invalid value for 'sUserLoginnameCloned', must be conform to the pattern /^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/.";
        }

        if ($this->container['sUserFirstnameCloned'] === null) {
            $invalidProperties[] = "'sUserFirstnameCloned' can't be null";
        }
        if ($this->container['sUserLastnameCloned'] === null) {
            $invalidProperties[] = "'sUserLastnameCloned' can't be null";
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
     * Gets pkiClonehistoryID
     *
     * @return int
     */
    public function getPkiClonehistoryID()
    {
        return $this->container['pkiClonehistoryID'];
    }

    /**
     * Sets pkiClonehistoryID
     *
     * @param int $pkiClonehistoryID The unique ID of the Clonehistory
     *
     * @return self
     */
    public function setPkiClonehistoryID($pkiClonehistoryID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiClonehistoryID)) {
            //throw new \InvalidArgumentException('non-nullable pkiClonehistoryID cannot be null');
        //}

//        if (($pkiClonehistoryID > 16777215)) {
        if (($pkiClonehistoryID > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $pkiClonehistoryID when calling ClonehistoryListElement., must be smaller than or equal to 16777215.');
        }
//        if (($pkiClonehistoryID < 1)) {
        if (($pkiClonehistoryID < 1)) {
            throw new \InvalidArgumentException('invalid value for $pkiClonehistoryID when calling ClonehistoryListElement., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiClonehistoryID'] = $pkiClonehistoryID;
        $this->container['pkiClonehistoryID'] = (is_null($pkiClonehistoryID) ? null : (int) $pkiClonehistoryID);

        return $this;
    }

    /**
     * Gets fkiUserIDCloning
     *
     * @return int
     */
    public function getFkiUserIDCloning()
    {
        return $this->container['fkiUserIDCloning'];
    }

    /**
     * Sets fkiUserIDCloning
     *
     * @param int $fkiUserIDCloning The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserIDCloning($fkiUserIDCloning)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserIDCloning)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserIDCloning cannot be null');
        //}

//        if (($fkiUserIDCloning < 0)) {
        if (($fkiUserIDCloning < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserIDCloning when calling ClonehistoryListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserIDCloning'] = $fkiUserIDCloning;
        $this->container['fkiUserIDCloning'] = (is_null($fkiUserIDCloning) ? null : (int) $fkiUserIDCloning);

        return $this;
    }

    /**
     * Gets fkiUserIDCloned
     *
     * @return int
     */
    public function getFkiUserIDCloned()
    {
        return $this->container['fkiUserIDCloned'];
    }

    /**
     * Sets fkiUserIDCloned
     *
     * @param int $fkiUserIDCloned The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserIDCloned($fkiUserIDCloned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserIDCloned)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserIDCloned cannot be null');
        //}

//        if (($fkiUserIDCloned < 0)) {
        if (($fkiUserIDCloned < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserIDCloned when calling ClonehistoryListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserIDCloned'] = $fkiUserIDCloned;
        $this->container['fkiUserIDCloned'] = (is_null($fkiUserIDCloned) ? null : (int) $fkiUserIDCloned);

        return $this;
    }

    /**
     * Gets dtClonehistoryFirsthit
     *
     * @return string
     */
    public function getDtClonehistoryFirsthit()
    {
        return is_null($this->container['dtClonehistoryFirsthit']) ? null : trim($this->container['dtClonehistoryFirsthit']);
    }

    /**
     * Sets dtClonehistoryFirsthit
     *
     * @param string $dtClonehistoryFirsthit The firsthit of the Clonehistory
     *
     * @return self
     */
    public function setDtClonehistoryFirsthit($dtClonehistoryFirsthit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtClonehistoryFirsthit)) {
            //throw new \InvalidArgumentException('non-nullable dtClonehistoryFirsthit cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtClonehistoryFirsthit)))) {
        if (!is_null($dtClonehistoryFirsthit) && (!preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtClonehistoryFirsthit)))) {
            throw new \InvalidArgumentException("invalid value for \$dtClonehistoryFirsthit when calling ClonehistoryListElement., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtClonehistoryFirsthit'] = $dtClonehistoryFirsthit;
        $this->container['dtClonehistoryFirsthit'] = (is_null($dtClonehistoryFirsthit) ? null : trim((string) $dtClonehistoryFirsthit));

        return $this;
    }

    /**
     * Gets dtClonehistoryLasthit
     *
     * @return string|null
     */
    public function getDtClonehistoryLasthit()
    {
        return is_null($this->container['dtClonehistoryLasthit']) ? null : trim($this->container['dtClonehistoryLasthit']);
    }

    /**
     * Sets dtClonehistoryLasthit
     *
     * @param string|null $dtClonehistoryLasthit The lasthit of the Clonehistory
     *
     * @return self
     */
    public function setDtClonehistoryLasthit($dtClonehistoryLasthit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtClonehistoryLasthit)) {
            //throw new \InvalidArgumentException('non-nullable dtClonehistoryLasthit cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtClonehistoryLasthit)))) {
        if (!is_null($dtClonehistoryLasthit) && (!preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", ObjectSerializer::toString($dtClonehistoryLasthit)))) {
            throw new \InvalidArgumentException("invalid value for \$dtClonehistoryLasthit when calling ClonehistoryListElement., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtClonehistoryLasthit'] = $dtClonehistoryLasthit;
        $this->container['dtClonehistoryLasthit'] = (is_null($dtClonehistoryLasthit) ? null : trim((string) $dtClonehistoryLasthit));

        return $this;
    }

    /**
     * Gets sUserLoginnameCloning
     *
     * @return string
     */
    public function getSUserLoginnameCloning()
    {
        return is_null($this->container['sUserLoginnameCloning']) ? null : trim($this->container['sUserLoginnameCloning']);
    }

    /**
     * Sets sUserLoginnameCloning
     *
     * @param string $sUserLoginnameCloning The login name of the User.
     *
     * @return self
     */
    public function setSUserLoginnameCloning($sUserLoginnameCloning)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLoginnameCloning)) {
            //throw new \InvalidArgumentException('non-nullable sUserLoginnameCloning cannot be null');
        //}

//        if ((!preg_match("/^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", ObjectSerializer::toString($sUserLoginnameCloning)))) {
        if (!is_null($sUserLoginnameCloning) && (!preg_match("/(*UTF8)^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", ObjectSerializer::toString($sUserLoginnameCloning)))) {
            throw new \InvalidArgumentException("invalid value for \$sUserLoginnameCloning when calling ClonehistoryListElement., must conform to the pattern /^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLoginnameCloning'] = $sUserLoginnameCloning;
        $this->container['sUserLoginnameCloning'] = (is_null($sUserLoginnameCloning) ? null : trim((string) $sUserLoginnameCloning));

        return $this;
    }

    /**
     * Gets sUserFirstnameCloning
     *
     * @return string
     */
    public function getSUserFirstnameCloning()
    {
        return is_null($this->container['sUserFirstnameCloning']) ? null : trim($this->container['sUserFirstnameCloning']);
    }

    /**
     * Sets sUserFirstnameCloning
     *
     * @param string $sUserFirstnameCloning The first name of the user
     *
     * @return self
     */
    public function setSUserFirstnameCloning($sUserFirstnameCloning)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserFirstnameCloning)) {
            //throw new \InvalidArgumentException('non-nullable sUserFirstnameCloning cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserFirstnameCloning'] = $sUserFirstnameCloning;
        $this->container['sUserFirstnameCloning'] = (is_null($sUserFirstnameCloning) ? null : trim((string) $sUserFirstnameCloning));

        return $this;
    }

    /**
     * Gets sUserLastnameCloning
     *
     * @return string
     */
    public function getSUserLastnameCloning()
    {
        return is_null($this->container['sUserLastnameCloning']) ? null : trim($this->container['sUserLastnameCloning']);
    }

    /**
     * Sets sUserLastnameCloning
     *
     * @param string $sUserLastnameCloning The last name of the user
     *
     * @return self
     */
    public function setSUserLastnameCloning($sUserLastnameCloning)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLastnameCloning)) {
            //throw new \InvalidArgumentException('non-nullable sUserLastnameCloning cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLastnameCloning'] = $sUserLastnameCloning;
        $this->container['sUserLastnameCloning'] = (is_null($sUserLastnameCloning) ? null : trim((string) $sUserLastnameCloning));

        return $this;
    }

    /**
     * Gets sUserLoginnameCloned
     *
     * @return string
     */
    public function getSUserLoginnameCloned()
    {
        return is_null($this->container['sUserLoginnameCloned']) ? null : trim($this->container['sUserLoginnameCloned']);
    }

    /**
     * Sets sUserLoginnameCloned
     *
     * @param string $sUserLoginnameCloned The login name of the User.
     *
     * @return self
     */
    public function setSUserLoginnameCloned($sUserLoginnameCloned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLoginnameCloned)) {
            //throw new \InvalidArgumentException('non-nullable sUserLoginnameCloned cannot be null');
        //}

//        if ((!preg_match("/^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", ObjectSerializer::toString($sUserLoginnameCloned)))) {
        if (!is_null($sUserLoginnameCloned) && (!preg_match("/(*UTF8)^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/", ObjectSerializer::toString($sUserLoginnameCloned)))) {
            throw new \InvalidArgumentException("invalid value for \$sUserLoginnameCloned when calling ClonehistoryListElement., must conform to the pattern /^(?:([\\w\\.-]+@[\\w\\.-]+\\.\\w{2,20})|([a-zA-Z0-9]){1,32})$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLoginnameCloned'] = $sUserLoginnameCloned;
        $this->container['sUserLoginnameCloned'] = (is_null($sUserLoginnameCloned) ? null : trim((string) $sUserLoginnameCloned));

        return $this;
    }

    /**
     * Gets sUserFirstnameCloned
     *
     * @return string
     */
    public function getSUserFirstnameCloned()
    {
        return is_null($this->container['sUserFirstnameCloned']) ? null : trim($this->container['sUserFirstnameCloned']);
    }

    /**
     * Sets sUserFirstnameCloned
     *
     * @param string $sUserFirstnameCloned The first name of the user
     *
     * @return self
     */
    public function setSUserFirstnameCloned($sUserFirstnameCloned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserFirstnameCloned)) {
            //throw new \InvalidArgumentException('non-nullable sUserFirstnameCloned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserFirstnameCloned'] = $sUserFirstnameCloned;
        $this->container['sUserFirstnameCloned'] = (is_null($sUserFirstnameCloned) ? null : trim((string) $sUserFirstnameCloned));

        return $this;
    }

    /**
     * Gets sUserLastnameCloned
     *
     * @return string
     */
    public function getSUserLastnameCloned()
    {
        return is_null($this->container['sUserLastnameCloned']) ? null : trim($this->container['sUserLastnameCloned']);
    }

    /**
     * Sets sUserLastnameCloned
     *
     * @param string $sUserLastnameCloned The last name of the user
     *
     * @return self
     */
    public function setSUserLastnameCloned($sUserLastnameCloned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLastnameCloned)) {
            //throw new \InvalidArgumentException('non-nullable sUserLastnameCloned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLastnameCloned'] = $sUserLastnameCloned;
        $this->container['sUserLastnameCloned'] = (is_null($sUserLastnameCloned) ? null : trim((string) $sUserLastnameCloned));

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


