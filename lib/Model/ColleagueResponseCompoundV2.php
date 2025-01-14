<?php
/**
 * ColleagueResponseCompoundV2
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
 * Generator version: 7.9.0
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
 * ColleagueResponseCompoundV2 Class Doc Comment
 *
 * @category Class
 * @description A Colleague Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ColleagueResponseCompoundV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'colleague-ResponseCompoundV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiColleagueID' => 'int',
        'fkiUserID' => 'int',
        'fkiUserIDColleague' => 'int',
        'bColleagueEzsignemail' => 'bool',
        'bColleagueFinancial' => 'bool',
        'bColleagueUsecloneemail' => 'bool',
        'bColleagueAttachment' => 'bool',
        'bColleagueCanafe' => 'bool',
        'bColleaguePermission' => 'bool',
        'bColleagueRealestatecompleted' => 'bool',
        'dtColleagueFrom' => 'string',
        'dtColleagueTo' => 'string',
        'eColleagueEzsign' => '\eZmaxAPI\Model\FieldEColleagueEzsign',
        'eColleagueRealestateinprogress' => '\eZmaxAPI\Model\FieldEColleagueRealestateinprogess',
        'objUserName' => '\eZmaxAPI\Model\CustomUserNameResponse',
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
        'pkiColleagueID' => null,
        'fkiUserID' => null,
        'fkiUserIDColleague' => null,
        'bColleagueEzsignemail' => null,
        'bColleagueFinancial' => null,
        'bColleagueUsecloneemail' => null,
        'bColleagueAttachment' => null,
        'bColleagueCanafe' => null,
        'bColleaguePermission' => null,
        'bColleagueRealestatecompleted' => null,
        'dtColleagueFrom' => null,
        'dtColleagueTo' => null,
        'eColleagueEzsign' => null,
        'eColleagueRealestateinprogress' => null,
        'objUserName' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiColleagueID' => false,
		'fkiUserID' => false,
		'fkiUserIDColleague' => false,
		'bColleagueEzsignemail' => false,
		'bColleagueFinancial' => false,
		'bColleagueUsecloneemail' => false,
		'bColleagueAttachment' => false,
		'bColleagueCanafe' => false,
		'bColleaguePermission' => false,
		'bColleagueRealestatecompleted' => false,
		'dtColleagueFrom' => false,
		'dtColleagueTo' => false,
		'eColleagueEzsign' => false,
		'eColleagueRealestateinprogress' => false,
		'objUserName' => false,
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
        'pkiColleagueID' => 'pkiColleagueID',
        'fkiUserID' => 'fkiUserID',
        'fkiUserIDColleague' => 'fkiUserIDColleague',
        'bColleagueEzsignemail' => 'bColleagueEzsignemail',
        'bColleagueFinancial' => 'bColleagueFinancial',
        'bColleagueUsecloneemail' => 'bColleagueUsecloneemail',
        'bColleagueAttachment' => 'bColleagueAttachment',
        'bColleagueCanafe' => 'bColleagueCanafe',
        'bColleaguePermission' => 'bColleaguePermission',
        'bColleagueRealestatecompleted' => 'bColleagueRealestatecompleted',
        'dtColleagueFrom' => 'dtColleagueFrom',
        'dtColleagueTo' => 'dtColleagueTo',
        'eColleagueEzsign' => 'eColleagueEzsign',
        'eColleagueRealestateinprogress' => 'eColleagueRealestateinprogress',
        'objUserName' => 'objUserName',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiColleagueID' => 'setPkiColleagueID',
        'fkiUserID' => 'setFkiUserID',
        'fkiUserIDColleague' => 'setFkiUserIDColleague',
        'bColleagueEzsignemail' => 'setBColleagueEzsignemail',
        'bColleagueFinancial' => 'setBColleagueFinancial',
        'bColleagueUsecloneemail' => 'setBColleagueUsecloneemail',
        'bColleagueAttachment' => 'setBColleagueAttachment',
        'bColleagueCanafe' => 'setBColleagueCanafe',
        'bColleaguePermission' => 'setBColleaguePermission',
        'bColleagueRealestatecompleted' => 'setBColleagueRealestatecompleted',
        'dtColleagueFrom' => 'setDtColleagueFrom',
        'dtColleagueTo' => 'setDtColleagueTo',
        'eColleagueEzsign' => 'setEColleagueEzsign',
        'eColleagueRealestateinprogress' => 'setEColleagueRealestateinprogress',
        'objUserName' => 'setObjUserName',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiColleagueID' => 'getPkiColleagueID',
        'fkiUserID' => 'getFkiUserID',
        'fkiUserIDColleague' => 'getFkiUserIDColleague',
        'bColleagueEzsignemail' => 'getBColleagueEzsignemail',
        'bColleagueFinancial' => 'getBColleagueFinancial',
        'bColleagueUsecloneemail' => 'getBColleagueUsecloneemail',
        'bColleagueAttachment' => 'getBColleagueAttachment',
        'bColleagueCanafe' => 'getBColleagueCanafe',
        'bColleaguePermission' => 'getBColleaguePermission',
        'bColleagueRealestatecompleted' => 'getBColleagueRealestatecompleted',
        'dtColleagueFrom' => 'getDtColleagueFrom',
        'dtColleagueTo' => 'getDtColleagueTo',
        'eColleagueEzsign' => 'getEColleagueEzsign',
        'eColleagueRealestateinprogress' => 'getEColleagueRealestateinprogress',
        'objUserName' => 'getObjUserName',
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
        $this->setIfExists('pkiColleagueID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('fkiUserIDColleague', $data ?? [], null);
        $this->setIfExists('bColleagueEzsignemail', $data ?? [], null);
        $this->setIfExists('bColleagueFinancial', $data ?? [], null);
        $this->setIfExists('bColleagueUsecloneemail', $data ?? [], null);
        $this->setIfExists('bColleagueAttachment', $data ?? [], null);
        $this->setIfExists('bColleagueCanafe', $data ?? [], null);
        $this->setIfExists('bColleaguePermission', $data ?? [], null);
        $this->setIfExists('bColleagueRealestatecompleted', $data ?? [], null);
        $this->setIfExists('dtColleagueFrom', $data ?? [], null);
        $this->setIfExists('dtColleagueTo', $data ?? [], null);
        $this->setIfExists('eColleagueEzsign', $data ?? [], null);
        $this->setIfExists('eColleagueRealestateinprogress', $data ?? [], null);
        $this->setIfExists('objUserName', $data ?? [], null);
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

        if ($this->container['pkiColleagueID'] === null) {
            $invalidProperties[] = "'pkiColleagueID' can't be null";
        }
        if (($this->container['pkiColleagueID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiColleagueID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiColleagueID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiColleagueID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if (($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiUserIDColleague'] === null) {
            $invalidProperties[] = "'fkiUserIDColleague' can't be null";
        }
        if (($this->container['fkiUserIDColleague'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserIDColleague', must be bigger than or equal to 0.";
        }

        if ($this->container['bColleagueEzsignemail'] === null) {
            $invalidProperties[] = "'bColleagueEzsignemail' can't be null";
        }
        if ($this->container['bColleagueFinancial'] === null) {
            $invalidProperties[] = "'bColleagueFinancial' can't be null";
        }
        if ($this->container['bColleagueUsecloneemail'] === null) {
            $invalidProperties[] = "'bColleagueUsecloneemail' can't be null";
        }
        if ($this->container['bColleagueAttachment'] === null) {
            $invalidProperties[] = "'bColleagueAttachment' can't be null";
        }
        if ($this->container['bColleagueCanafe'] === null) {
            $invalidProperties[] = "'bColleagueCanafe' can't be null";
        }
        if ($this->container['bColleaguePermission'] === null) {
            $invalidProperties[] = "'bColleaguePermission' can't be null";
        }
        if ($this->container['bColleagueRealestatecompleted'] === null) {
            $invalidProperties[] = "'bColleagueRealestatecompleted' can't be null";
        }
//        if (!is_null($this->container['dtColleagueFrom']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtColleagueFrom'])) {
        if (!is_null($this->container['dtColleagueFrom']) && !preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtColleagueFrom'])) {
            $invalidProperties[] = "invalid value for 'dtColleagueFrom', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.";
        }

//        if (!is_null($this->container['dtColleagueTo']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtColleagueTo'])) {
        if (!is_null($this->container['dtColleagueTo']) && !preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['dtColleagueTo'])) {
            $invalidProperties[] = "invalid value for 'dtColleagueTo', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.";
        }

        if ($this->container['eColleagueEzsign'] === null) {
            $invalidProperties[] = "'eColleagueEzsign' can't be null";
        }
        if ($this->container['eColleagueRealestateinprogress'] === null) {
            $invalidProperties[] = "'eColleagueRealestateinprogress' can't be null";
        }
        if ($this->container['objUserName'] === null) {
            $invalidProperties[] = "'objUserName' can't be null";
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
     * Gets pkiColleagueID
     *
     * @return int
     */
    public function getPkiColleagueID()
    {
        return $this->container['pkiColleagueID'];
    }

    /**
     * Sets pkiColleagueID
     *
     * @param int $pkiColleagueID The unique ID of the Colleague
     *
     * @return self
     */
    public function setPkiColleagueID($pkiColleagueID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiColleagueID)) {
            //throw new \InvalidArgumentException('non-nullable pkiColleagueID cannot be null');
        //}

//        if (($pkiColleagueID > 65535)) {
        if (($pkiColleagueID > 65535)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiColleagueID)?'null':'"'.$pkiColleagueID.'"').' for pkiColleagueID when calling ColleagueResponseCompoundV2., must be smaller than or equal to 65535.');
        }
//        if (($pkiColleagueID < 0)) {
        if (($pkiColleagueID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiColleagueID)?'null':'"'.$pkiColleagueID.'"').' for pkiColleagueID when calling ColleagueResponseCompoundV2., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiColleagueID'] = $pkiColleagueID;
        $this->container['pkiColleagueID'] = (is_null($pkiColleagueID) ? null : (int) $pkiColleagueID);

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
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserID)?'null':'"'.$fkiUserID.'"').' for fkiUserID when calling ColleagueResponseCompoundV2., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets fkiUserIDColleague
     *
     * @return int
     */
    public function getFkiUserIDColleague()
    {
        return $this->container['fkiUserIDColleague'];
    }

    /**
     * Sets fkiUserIDColleague
     *
     * @param int $fkiUserIDColleague The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserIDColleague($fkiUserIDColleague)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserIDColleague)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserIDColleague cannot be null');
        //}

//        if (($fkiUserIDColleague < 0)) {
        if (($fkiUserIDColleague < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserIDColleague)?'null':'"'.$fkiUserIDColleague.'"').' for fkiUserIDColleague when calling ColleagueResponseCompoundV2., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserIDColleague'] = $fkiUserIDColleague;
        $this->container['fkiUserIDColleague'] = (is_null($fkiUserIDColleague) ? null : (int) $fkiUserIDColleague);

        return $this;
    }

    /**
     * Gets bColleagueEzsignemail
     *
     * @return bool
     */
    public function getBColleagueEzsignemail()
    {
        return $this->container['bColleagueEzsignemail'];
    }

    /**
     * Sets bColleagueEzsignemail
     *
     * @param bool $bColleagueEzsignemail Whether the email can be used by the cloning user in Ezsign
     *
     * @return self
     */
    public function setBColleagueEzsignemail($bColleagueEzsignemail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bColleagueEzsignemail)) {
            //throw new \InvalidArgumentException('non-nullable bColleagueEzsignemail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bColleagueEzsignemail'] = $bColleagueEzsignemail;
        $this->container['bColleagueEzsignemail'] = (is_null($bColleagueEzsignemail) ? null : (bool) $bColleagueEzsignemail);

        return $this;
    }

    /**
     * Gets bColleagueFinancial
     *
     * @return bool
     */
    public function getBColleagueFinancial()
    {
        return $this->container['bColleagueFinancial'];
    }

    /**
     * Sets bColleagueFinancial
     *
     * @param bool $bColleagueFinancial Whether the cloning user has access to the financial
     *
     * @return self
     */
    public function setBColleagueFinancial($bColleagueFinancial)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bColleagueFinancial)) {
            //throw new \InvalidArgumentException('non-nullable bColleagueFinancial cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bColleagueFinancial'] = $bColleagueFinancial;
        $this->container['bColleagueFinancial'] = (is_null($bColleagueFinancial) ? null : (bool) $bColleagueFinancial);

        return $this;
    }

    /**
     * Gets bColleagueUsecloneemail
     *
     * @return bool
     */
    public function getBColleagueUsecloneemail()
    {
        return $this->container['bColleagueUsecloneemail'];
    }

    /**
     * Sets bColleagueUsecloneemail
     *
     * @param bool $bColleagueUsecloneemail Whether the cloning user has access to the cloned user email to send communications
     *
     * @return self
     */
    public function setBColleagueUsecloneemail($bColleagueUsecloneemail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bColleagueUsecloneemail)) {
            //throw new \InvalidArgumentException('non-nullable bColleagueUsecloneemail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bColleagueUsecloneemail'] = $bColleagueUsecloneemail;
        $this->container['bColleagueUsecloneemail'] = (is_null($bColleagueUsecloneemail) ? null : (bool) $bColleagueUsecloneemail);

        return $this;
    }

    /**
     * Gets bColleagueAttachment
     *
     * @return bool
     */
    public function getBColleagueAttachment()
    {
        return $this->container['bColleagueAttachment'];
    }

    /**
     * Sets bColleagueAttachment
     *
     * @param bool $bColleagueAttachment Whether the cloning user has access to the attachment
     *
     * @return self
     */
    public function setBColleagueAttachment($bColleagueAttachment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bColleagueAttachment)) {
            //throw new \InvalidArgumentException('non-nullable bColleagueAttachment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bColleagueAttachment'] = $bColleagueAttachment;
        $this->container['bColleagueAttachment'] = (is_null($bColleagueAttachment) ? null : (bool) $bColleagueAttachment);

        return $this;
    }

    /**
     * Gets bColleagueCanafe
     *
     * @return bool
     */
    public function getBColleagueCanafe()
    {
        return $this->container['bColleagueCanafe'];
    }

    /**
     * Sets bColleagueCanafe
     *
     * @param bool $bColleagueCanafe Whether the cloning user has access to canafe
     *
     * @return self
     */
    public function setBColleagueCanafe($bColleagueCanafe)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bColleagueCanafe)) {
            //throw new \InvalidArgumentException('non-nullable bColleagueCanafe cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bColleagueCanafe'] = $bColleagueCanafe;
        $this->container['bColleagueCanafe'] = (is_null($bColleagueCanafe) ? null : (bool) $bColleagueCanafe);

        return $this;
    }

    /**
     * Gets bColleaguePermission
     *
     * @return bool
     */
    public function getBColleaguePermission()
    {
        return $this->container['bColleaguePermission'];
    }

    /**
     * Sets bColleaguePermission
     *
     * @param bool $bColleaguePermission Whether the cloning user copies the permission of the cloned user
     *
     * @return self
     */
    public function setBColleaguePermission($bColleaguePermission)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bColleaguePermission)) {
            //throw new \InvalidArgumentException('non-nullable bColleaguePermission cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bColleaguePermission'] = $bColleaguePermission;
        $this->container['bColleaguePermission'] = (is_null($bColleaguePermission) ? null : (bool) $bColleaguePermission);

        return $this;
    }

    /**
     * Gets bColleagueRealestatecompleted
     *
     * @return bool
     */
    public function getBColleagueRealestatecompleted()
    {
        return $this->container['bColleagueRealestatecompleted'];
    }

    /**
     * Sets bColleagueRealestatecompleted
     *
     * @param bool $bColleagueRealestatecompleted Whether if the cloning user has access to the completed folders in real estate
     *
     * @return self
     */
    public function setBColleagueRealestatecompleted($bColleagueRealestatecompleted)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bColleagueRealestatecompleted)) {
            //throw new \InvalidArgumentException('non-nullable bColleagueRealestatecompleted cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bColleagueRealestatecompleted'] = $bColleagueRealestatecompleted;
        $this->container['bColleagueRealestatecompleted'] = (is_null($bColleagueRealestatecompleted) ? null : (bool) $bColleagueRealestatecompleted);

        return $this;
    }

    /**
     * Gets dtColleagueFrom
     *
     * @return string|null
     */
    public function getDtColleagueFrom()
    {
        return is_null($this->container['dtColleagueFrom']) ? null : trim($this->container['dtColleagueFrom']);
    }

    /**
     * Sets dtColleagueFrom
     *
     * @param string|null $dtColleagueFrom The from of the Colleague
     *
     * @return self
     */
    public function setDtColleagueFrom($dtColleagueFrom)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtColleagueFrom)) {
            //throw new \InvalidArgumentException('non-nullable dtColleagueFrom cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", ObjectSerializer::toString($dtColleagueFrom)))) {
        if (!is_null($dtColleagueFrom) && (!preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", ObjectSerializer::toString($dtColleagueFrom)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($dtColleagueFrom)?'null':'"'.$dtColleagueFrom.'"')." for dtColleagueFrom when calling ColleagueResponseCompoundV2., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtColleagueFrom'] = $dtColleagueFrom;
        $this->container['dtColleagueFrom'] = (is_null($dtColleagueFrom) ? null : trim((string) $dtColleagueFrom));

        return $this;
    }

    /**
     * Gets dtColleagueTo
     *
     * @return string|null
     */
    public function getDtColleagueTo()
    {
        return is_null($this->container['dtColleagueTo']) ? null : trim($this->container['dtColleagueTo']);
    }

    /**
     * Sets dtColleagueTo
     *
     * @param string|null $dtColleagueTo The to of the Colleague
     *
     * @return self
     */
    public function setDtColleagueTo($dtColleagueTo)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtColleagueTo)) {
            //throw new \InvalidArgumentException('non-nullable dtColleagueTo cannot be null');
        //}

//        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", ObjectSerializer::toString($dtColleagueTo)))) {
        if (!is_null($dtColleagueTo) && (!preg_match("/(*UTF8)^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", ObjectSerializer::toString($dtColleagueTo)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($dtColleagueTo)?'null':'"'.$dtColleagueTo.'"')." for dtColleagueTo when calling ColleagueResponseCompoundV2., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtColleagueTo'] = $dtColleagueTo;
        $this->container['dtColleagueTo'] = (is_null($dtColleagueTo) ? null : trim((string) $dtColleagueTo));

        return $this;
    }

    /**
     * Gets eColleagueEzsign
     *
     * @return \eZmaxAPI\Model\FieldEColleagueEzsign
     */
    public function getEColleagueEzsign()
    {
        return $this->container['eColleagueEzsign'];
    }

    /**
     * Sets eColleagueEzsign
     *
     * @param \eZmaxAPI\Model\FieldEColleagueEzsign $eColleagueEzsign eColleagueEzsign
     *
     * @return self
     */
    public function setEColleagueEzsign($eColleagueEzsign)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eColleagueEzsign)) {
            //throw new \InvalidArgumentException('non-nullable eColleagueEzsign cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eColleagueEzsign'] = $eColleagueEzsign;
        $this->container['eColleagueEzsign'] = $eColleagueEzsign;

        return $this;
    }

    /**
     * Gets eColleagueRealestateinprogress
     *
     * @return \eZmaxAPI\Model\FieldEColleagueRealestateinprogess
     */
    public function getEColleagueRealestateinprogress()
    {
        return $this->container['eColleagueRealestateinprogress'];
    }

    /**
     * Sets eColleagueRealestateinprogress
     *
     * @param \eZmaxAPI\Model\FieldEColleagueRealestateinprogess $eColleagueRealestateinprogress eColleagueRealestateinprogress
     *
     * @return self
     */
    public function setEColleagueRealestateinprogress($eColleagueRealestateinprogress)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eColleagueRealestateinprogress)) {
            //throw new \InvalidArgumentException('non-nullable eColleagueRealestateinprogress cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eColleagueRealestateinprogress'] = $eColleagueRealestateinprogress;
        $this->container['eColleagueRealestateinprogress'] = $eColleagueRealestateinprogress;

        return $this;
    }

    /**
     * Gets objUserName
     *
     * @return \eZmaxAPI\Model\CustomUserNameResponse
     */
    public function getObjUserName()
    {
        return $this->container['objUserName'];
    }

    /**
     * Sets objUserName
     *
     * @param \eZmaxAPI\Model\CustomUserNameResponse $objUserName objUserName
     *
     * @return self
     */
    public function setObjUserName($objUserName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objUserName)) {
            //throw new \InvalidArgumentException('non-nullable objUserName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objUserName'] = $objUserName;
        $this->container['objUserName'] = $objUserName;

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
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


