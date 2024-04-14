<?php
/**
 * UsergroupexternalmembershipResponseCompound
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
 * Generator version: 7.4.0
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
 * UsergroupexternalmembershipResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Usergroupexternalmembership Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsergroupexternalmembershipResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'usergroupexternalmembership-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiUsergroupexternalmembershipID' => 'int',
        'fkiUsergroupexternalID' => 'int',
        'fkiUserID' => 'int',
        'sUserFirstname' => 'string',
        'sUserLastname' => 'string',
        'sUserLoginname' => 'string',
        'sEmailAddress' => 'string',
        'sUsergroupexternalName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiUsergroupexternalmembershipID' => null,
        'fkiUsergroupexternalID' => null,
        'fkiUserID' => null,
        'sUserFirstname' => null,
        'sUserLastname' => null,
        'sUserLoginname' => null,
        'sEmailAddress' => null,
        'sUsergroupexternalName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiUsergroupexternalmembershipID' => false,
		'fkiUsergroupexternalID' => false,
		'fkiUserID' => false,
		'sUserFirstname' => false,
		'sUserLastname' => false,
		'sUserLoginname' => false,
		'sEmailAddress' => false,
		'sUsergroupexternalName' => false
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
        'pkiUsergroupexternalmembershipID' => 'pkiUsergroupexternalmembershipID',
        'fkiUsergroupexternalID' => 'fkiUsergroupexternalID',
        'fkiUserID' => 'fkiUserID',
        'sUserFirstname' => 'sUserFirstname',
        'sUserLastname' => 'sUserLastname',
        'sUserLoginname' => 'sUserLoginname',
        'sEmailAddress' => 'sEmailAddress',
        'sUsergroupexternalName' => 'sUsergroupexternalName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiUsergroupexternalmembershipID' => 'setPkiUsergroupexternalmembershipID',
        'fkiUsergroupexternalID' => 'setFkiUsergroupexternalID',
        'fkiUserID' => 'setFkiUserID',
        'sUserFirstname' => 'setSUserFirstname',
        'sUserLastname' => 'setSUserLastname',
        'sUserLoginname' => 'setSUserLoginname',
        'sEmailAddress' => 'setSEmailAddress',
        'sUsergroupexternalName' => 'setSUsergroupexternalName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiUsergroupexternalmembershipID' => 'getPkiUsergroupexternalmembershipID',
        'fkiUsergroupexternalID' => 'getFkiUsergroupexternalID',
        'fkiUserID' => 'getFkiUserID',
        'sUserFirstname' => 'getSUserFirstname',
        'sUserLastname' => 'getSUserLastname',
        'sUserLoginname' => 'getSUserLoginname',
        'sEmailAddress' => 'getSEmailAddress',
        'sUsergroupexternalName' => 'getSUsergroupexternalName'
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
        $this->setIfExists('pkiUsergroupexternalmembershipID', $data ?? [], null);
        $this->setIfExists('fkiUsergroupexternalID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('sUserFirstname', $data ?? [], null);
        $this->setIfExists('sUserLastname', $data ?? [], null);
        $this->setIfExists('sUserLoginname', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('sUsergroupexternalName', $data ?? [], null);
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

        if ($this->container['pkiUsergroupexternalmembershipID'] === null) {
            $invalidProperties[] = "'pkiUsergroupexternalmembershipID' can't be null";
        }
        if (($this->container['pkiUsergroupexternalmembershipID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiUsergroupexternalmembershipID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiUsergroupexternalmembershipID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiUsergroupexternalmembershipID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiUsergroupexternalID'] === null) {
            $invalidProperties[] = "'fkiUsergroupexternalID' can't be null";
        }
        if (($this->container['fkiUsergroupexternalID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiUsergroupexternalID', must be smaller than or equal to 255.";
        }

        if (($this->container['fkiUsergroupexternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUsergroupexternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if (($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['sUserFirstname'] === null) {
            $invalidProperties[] = "'sUserFirstname' can't be null";
        }
        if ($this->container['sUserLastname'] === null) {
            $invalidProperties[] = "'sUserLastname' can't be null";
        }
        if ($this->container['sUserLoginname'] === null) {
            $invalidProperties[] = "'sUserLoginname' can't be null";
        }
//        if (!preg_match("/^(?:([\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20})|([a-zA-Z0-9]){1,32})$/", $this->container['sUserLoginname'])) {
        if (!is_null($this->container['sUserLoginname']) && !preg_match("/(*UTF8)^(?:([\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20})|([a-zA-Z0-9]){1,32})$/", $this->container['sUserLoginname'])) {
            $invalidProperties[] = "invalid value for 'sUserLoginname', must be conform to the pattern /^(?:([\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20})|([a-zA-Z0-9]){1,32})$/.";
        }

        if ($this->container['sEmailAddress'] === null) {
            $invalidProperties[] = "'sEmailAddress' can't be null";
        }
//        if (!preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
        if (!is_null($this->container['sEmailAddress']) && !preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
            $invalidProperties[] = "invalid value for 'sEmailAddress', must be conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.";
        }

        if ($this->container['sUsergroupexternalName'] === null) {
            $invalidProperties[] = "'sUsergroupexternalName' can't be null";
        }
//        if (!preg_match("/^.{0,64}$/", $this->container['sUsergroupexternalName'])) {
        if (!is_null($this->container['sUsergroupexternalName']) && !preg_match("/(*UTF8)^.{0,64}$/", $this->container['sUsergroupexternalName'])) {
            $invalidProperties[] = "invalid value for 'sUsergroupexternalName', must be conform to the pattern /^.{0,64}$/.";
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
     * Gets pkiUsergroupexternalmembershipID
     *
     * @return int
     */
    public function getPkiUsergroupexternalmembershipID()
    {
        return $this->container['pkiUsergroupexternalmembershipID'];
    }

    /**
     * Sets pkiUsergroupexternalmembershipID
     *
     * @param int $pkiUsergroupexternalmembershipID The unique ID of the Usergroupexternalmembership
     *
     * @return self
     */
    public function setPkiUsergroupexternalmembershipID($pkiUsergroupexternalmembershipID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiUsergroupexternalmembershipID)) {
            //throw new \InvalidArgumentException('non-nullable pkiUsergroupexternalmembershipID cannot be null');
        //}

//        if (($pkiUsergroupexternalmembershipID > 65535)) {
        if (($pkiUsergroupexternalmembershipID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $pkiUsergroupexternalmembershipID when calling UsergroupexternalmembershipResponseCompound., must be smaller than or equal to 65535.');
        }
//        if (($pkiUsergroupexternalmembershipID < 0)) {
        if (($pkiUsergroupexternalmembershipID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiUsergroupexternalmembershipID when calling UsergroupexternalmembershipResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiUsergroupexternalmembershipID'] = $pkiUsergroupexternalmembershipID;
        $this->container['pkiUsergroupexternalmembershipID'] = (is_null($pkiUsergroupexternalmembershipID) ? null : (int) $pkiUsergroupexternalmembershipID);

        return $this;
    }

    /**
     * Gets fkiUsergroupexternalID
     *
     * @return int
     */
    public function getFkiUsergroupexternalID()
    {
        return $this->container['fkiUsergroupexternalID'];
    }

    /**
     * Sets fkiUsergroupexternalID
     *
     * @param int $fkiUsergroupexternalID The unique ID of the Usergroupexternal
     *
     * @return self
     */
    public function setFkiUsergroupexternalID($fkiUsergroupexternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUsergroupexternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUsergroupexternalID cannot be null');
        //}

//        if (($fkiUsergroupexternalID > 255)) {
        if (($fkiUsergroupexternalID > 255)) {
            throw new \InvalidArgumentException('invalid value for $fkiUsergroupexternalID when calling UsergroupexternalmembershipResponseCompound., must be smaller than or equal to 255.');
        }
//        if (($fkiUsergroupexternalID < 0)) {
        if (($fkiUsergroupexternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUsergroupexternalID when calling UsergroupexternalmembershipResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUsergroupexternalID'] = $fkiUsergroupexternalID;
        $this->container['fkiUsergroupexternalID'] = (is_null($fkiUsergroupexternalID) ? null : (int) $fkiUsergroupexternalID);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserID cannot be null');
        //}

//        if (($fkiUserID < 0)) {
        if (($fkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserID when calling UsergroupexternalmembershipResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets sUserFirstname
     *
     * @return string
     */
    public function getSUserFirstname()
    {
        return is_null($this->container['sUserFirstname']) ? null : trim($this->container['sUserFirstname']);
    }

    /**
     * Sets sUserFirstname
     *
     * @param string $sUserFirstname The first name of the user
     *
     * @return self
     */
    public function setSUserFirstname($sUserFirstname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sUserFirstname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserFirstname'] = $sUserFirstname;
        $this->container['sUserFirstname'] = (is_null($sUserFirstname) ? null : trim((string) $sUserFirstname));

        return $this;
    }

    /**
     * Gets sUserLastname
     *
     * @return string
     */
    public function getSUserLastname()
    {
        return is_null($this->container['sUserLastname']) ? null : trim($this->container['sUserLastname']);
    }

    /**
     * Sets sUserLastname
     *
     * @param string $sUserLastname The last name of the user
     *
     * @return self
     */
    public function setSUserLastname($sUserLastname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLastname)) {
            //throw new \InvalidArgumentException('non-nullable sUserLastname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLastname'] = $sUserLastname;
        $this->container['sUserLastname'] = (is_null($sUserLastname) ? null : trim((string) $sUserLastname));

        return $this;
    }

    /**
     * Gets sUserLoginname
     *
     * @return string
     */
    public function getSUserLoginname()
    {
        return is_null($this->container['sUserLoginname']) ? null : trim($this->container['sUserLoginname']);
    }

    /**
     * Sets sUserLoginname
     *
     * @param string $sUserLoginname The login name of the User.
     *
     * @return self
     */
    public function setSUserLoginname($sUserLoginname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserLoginname)) {
            //throw new \InvalidArgumentException('non-nullable sUserLoginname cannot be null');
        //}

//        if ((!preg_match("/^(?:([\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20})|([a-zA-Z0-9]){1,32})$/", ObjectSerializer::toString($sUserLoginname)))) {
        if (!is_null($sUserLoginname) && (!preg_match("/(*UTF8)^(?:([\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20})|([a-zA-Z0-9]){1,32})$/", ObjectSerializer::toString($sUserLoginname)))) {
            throw new \InvalidArgumentException("invalid value for \$sUserLoginname when calling UsergroupexternalmembershipResponseCompound., must conform to the pattern /^(?:([\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20})|([a-zA-Z0-9]){1,32})$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserLoginname'] = $sUserLoginname;
        $this->container['sUserLoginname'] = (is_null($sUserLoginname) ? null : trim((string) $sUserLoginname));

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string
     */
    public function getSEmailAddress()
    {
        return is_null($this->container['sEmailAddress']) ? null : trim($this->container['sEmailAddress']);
    }

    /**
     * Sets sEmailAddress
     *
     * @param string $sEmailAddress The email address.
     *
     * @return self
     */
    public function setSEmailAddress($sEmailAddress)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}

//        if ((!preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
        if (!is_null($sEmailAddress) && (!preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
            throw new \InvalidArgumentException("invalid value for \$sEmailAddress when calling UsergroupexternalmembershipResponseCompound., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : trim((string) $sEmailAddress));

        return $this;
    }

    /**
     * Gets sUsergroupexternalName
     *
     * @return string
     */
    public function getSUsergroupexternalName()
    {
        return is_null($this->container['sUsergroupexternalName']) ? null : trim($this->container['sUsergroupexternalName']);
    }

    /**
     * Sets sUsergroupexternalName
     *
     * @param string $sUsergroupexternalName The name of the Usergroupexternal
     *
     * @return self
     */
    public function setSUsergroupexternalName($sUsergroupexternalName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUsergroupexternalName)) {
            //throw new \InvalidArgumentException('non-nullable sUsergroupexternalName cannot be null');
        //}

//        if ((!preg_match("/^.{0,64}$/", ObjectSerializer::toString($sUsergroupexternalName)))) {
        if (!is_null($sUsergroupexternalName) && (!preg_match("/(*UTF8)^.{0,64}$/", ObjectSerializer::toString($sUsergroupexternalName)))) {
            throw new \InvalidArgumentException("invalid value for \$sUsergroupexternalName when calling UsergroupexternalmembershipResponseCompound., must conform to the pattern /^.{0,64}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUsergroupexternalName'] = $sUsergroupexternalName;
        $this->container['sUsergroupexternalName'] = (is_null($sUsergroupexternalName) ? null : trim((string) $sUsergroupexternalName));

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


