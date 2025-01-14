<?php
/**
 * ContactRequestCompoundV2
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
 * ContactRequestCompoundV2 Class Doc Comment
 *
 * @category Class
 * @description A Contact Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactRequestCompoundV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contact-RequestCompoundV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiContacttitleID' => 'int',
        'fkiLanguageID' => 'int',
        'eContactType' => '\eZmaxAPI\Model\FieldEContactType',
        'sContactFirstname' => 'string',
        'sContactLastname' => 'string',
        'sContactCompany' => 'string',
        'dtContactBirthdate' => 'string',
        'sContactOccupation' => 'string',
        'tContactNote' => 'string',
        'bContactIsactive' => 'bool',
        'objContactinformations' => '\eZmaxAPI\Model\ContactinformationsRequestCompoundV2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiContacttitleID' => null,
        'fkiLanguageID' => null,
        'eContactType' => null,
        'sContactFirstname' => null,
        'sContactLastname' => null,
        'sContactCompany' => null,
        'dtContactBirthdate' => null,
        'sContactOccupation' => null,
        'tContactNote' => null,
        'bContactIsactive' => null,
        'objContactinformations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiContacttitleID' => false,
		'fkiLanguageID' => false,
		'eContactType' => false,
		'sContactFirstname' => false,
		'sContactLastname' => false,
		'sContactCompany' => false,
		'dtContactBirthdate' => false,
		'sContactOccupation' => false,
		'tContactNote' => false,
		'bContactIsactive' => false,
		'objContactinformations' => false
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
        'fkiContacttitleID' => 'fkiContacttitleID',
        'fkiLanguageID' => 'fkiLanguageID',
        'eContactType' => 'eContactType',
        'sContactFirstname' => 'sContactFirstname',
        'sContactLastname' => 'sContactLastname',
        'sContactCompany' => 'sContactCompany',
        'dtContactBirthdate' => 'dtContactBirthdate',
        'sContactOccupation' => 'sContactOccupation',
        'tContactNote' => 'tContactNote',
        'bContactIsactive' => 'bContactIsactive',
        'objContactinformations' => 'objContactinformations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiContacttitleID' => 'setFkiContacttitleID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'eContactType' => 'setEContactType',
        'sContactFirstname' => 'setSContactFirstname',
        'sContactLastname' => 'setSContactLastname',
        'sContactCompany' => 'setSContactCompany',
        'dtContactBirthdate' => 'setDtContactBirthdate',
        'sContactOccupation' => 'setSContactOccupation',
        'tContactNote' => 'setTContactNote',
        'bContactIsactive' => 'setBContactIsactive',
        'objContactinformations' => 'setObjContactinformations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiContacttitleID' => 'getFkiContacttitleID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'eContactType' => 'getEContactType',
        'sContactFirstname' => 'getSContactFirstname',
        'sContactLastname' => 'getSContactLastname',
        'sContactCompany' => 'getSContactCompany',
        'dtContactBirthdate' => 'getDtContactBirthdate',
        'sContactOccupation' => 'getSContactOccupation',
        'tContactNote' => 'getTContactNote',
        'bContactIsactive' => 'getBContactIsactive',
        'objContactinformations' => 'getObjContactinformations'
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
        $this->setIfExists('fkiContacttitleID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('eContactType', $data ?? [], null);
        $this->setIfExists('sContactFirstname', $data ?? [], null);
        $this->setIfExists('sContactLastname', $data ?? [], null);
        $this->setIfExists('sContactCompany', $data ?? [], null);
        $this->setIfExists('dtContactBirthdate', $data ?? [], null);
        $this->setIfExists('sContactOccupation', $data ?? [], null);
        $this->setIfExists('tContactNote', $data ?? [], null);
        $this->setIfExists('bContactIsactive', $data ?? [], null);
        $this->setIfExists('objContactinformations', $data ?? [], null);
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

        if ($this->container['fkiContacttitleID'] === null) {
            $invalidProperties[] = "'fkiContacttitleID' can't be null";
        }
        if (($this->container['fkiContacttitleID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiContacttitleID', must be bigger than or equal to 0.";
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

        if ($this->container['eContactType'] === null) {
            $invalidProperties[] = "'eContactType' can't be null";
        }
        if ($this->container['sContactFirstname'] === null) {
            $invalidProperties[] = "'sContactFirstname' can't be null";
        }
        if ($this->container['sContactLastname'] === null) {
            $invalidProperties[] = "'sContactLastname' can't be null";
        }
//        if (!is_null($this->container['sContactOccupation']) && !preg_match("/^.{0,50}$/", $this->container['sContactOccupation'])) {
        if (!is_null($this->container['sContactOccupation']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sContactOccupation'])) {
            $invalidProperties[] = "invalid value for 'sContactOccupation', must be conform to the pattern /^.{0,50}$/.";
        }

//        if (!is_null($this->container['tContactNote']) && !preg_match("/^.{0,32000}$/", $this->container['tContactNote'])) {
        if (!is_null($this->container['tContactNote']) && !preg_match("/(*UTF8)^.{0,32000}$/", $this->container['tContactNote'])) {
            $invalidProperties[] = "invalid value for 'tContactNote', must be conform to the pattern /^.{0,32000}$/.";
        }

        if ($this->container['objContactinformations'] === null) {
            $invalidProperties[] = "'objContactinformations' can't be null";
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
     * Gets fkiContacttitleID
     *
     * @return int
     */
    public function getFkiContacttitleID()
    {
        return $this->container['fkiContacttitleID'];
    }

    /**
     * Sets fkiContacttitleID
     *
     * @param int $fkiContacttitleID The unique ID of the Contacttitle.  Valid values:  |Value|Description| |-|-| |1|Ms.| |2|Mr.| |4|(Blank)| |5|Me (For Notaries)|
     *
     * @return self
     */
    public function setFkiContacttitleID($fkiContacttitleID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiContacttitleID)) {
            //throw new \InvalidArgumentException('non-nullable fkiContacttitleID cannot be null');
        //}

//        if (($fkiContacttitleID < 0)) {
        if (($fkiContacttitleID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiContacttitleID)?'null':'"'.$fkiContacttitleID.'"').' for fkiContacttitleID when calling ContactRequestCompoundV2., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiContacttitleID'] = $fkiContacttitleID;
        $this->container['fkiContacttitleID'] = (is_null($fkiContacttitleID) ? null : (int) $fkiContacttitleID);

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
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling ContactRequestCompoundV2., must be smaller than or equal to 2.');
        }
//        if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling ContactRequestCompoundV2., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets eContactType
     *
     * @return \eZmaxAPI\Model\FieldEContactType
     */
    public function getEContactType()
    {
        return $this->container['eContactType'];
    }

    /**
     * Sets eContactType
     *
     * @param \eZmaxAPI\Model\FieldEContactType $eContactType eContactType
     *
     * @return self
     */
    public function setEContactType($eContactType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eContactType)) {
            //throw new \InvalidArgumentException('non-nullable eContactType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eContactType'] = $eContactType;
        $this->container['eContactType'] = $eContactType;

        return $this;
    }

    /**
     * Gets sContactFirstname
     *
     * @return string
     */
    public function getSContactFirstname()
    {
        return is_null($this->container['sContactFirstname']) ? null : trim($this->container['sContactFirstname']);
    }

    /**
     * Sets sContactFirstname
     *
     * @param string $sContactFirstname The First name of the contact
     *
     * @return self
     */
    public function setSContactFirstname($sContactFirstname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sContactFirstname)) {
            //throw new \InvalidArgumentException('non-nullable sContactFirstname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactFirstname'] = $sContactFirstname;
        $this->container['sContactFirstname'] = (is_null($sContactFirstname) ? null : trim((string) $sContactFirstname));

        return $this;
    }

    /**
     * Gets sContactLastname
     *
     * @return string
     */
    public function getSContactLastname()
    {
        return is_null($this->container['sContactLastname']) ? null : trim($this->container['sContactLastname']);
    }

    /**
     * Sets sContactLastname
     *
     * @param string $sContactLastname The Last name of the contact
     *
     * @return self
     */
    public function setSContactLastname($sContactLastname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sContactLastname)) {
            //throw new \InvalidArgumentException('non-nullable sContactLastname cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactLastname'] = $sContactLastname;
        $this->container['sContactLastname'] = (is_null($sContactLastname) ? null : trim((string) $sContactLastname));

        return $this;
    }

    /**
     * Gets sContactCompany
     *
     * @return string|null
     */
    public function getSContactCompany()
    {
        return is_null($this->container['sContactCompany']) ? null : trim($this->container['sContactCompany']);
    }

    /**
     * Sets sContactCompany
     *
     * @param string|null $sContactCompany The Company name of the contact
     *
     * @return self
     */
    public function setSContactCompany($sContactCompany)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sContactCompany)) {
            //throw new \InvalidArgumentException('non-nullable sContactCompany cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactCompany'] = $sContactCompany;
        $this->container['sContactCompany'] = (is_null($sContactCompany) ? null : trim((string) $sContactCompany));

        return $this;
    }

    /**
     * Gets dtContactBirthdate
     *
     * @return string|null
     */
    public function getDtContactBirthdate()
    {
        return is_null($this->container['dtContactBirthdate']) ? null : trim($this->container['dtContactBirthdate']);
    }

    /**
     * Sets dtContactBirthdate
     *
     * @param string|null $dtContactBirthdate The Birth Date of the contact
     *
     * @return self
     */
    public function setDtContactBirthdate($dtContactBirthdate)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtContactBirthdate)) {
            //throw new \InvalidArgumentException('non-nullable dtContactBirthdate cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtContactBirthdate'] = $dtContactBirthdate;
        $this->container['dtContactBirthdate'] = (is_null($dtContactBirthdate) ? null : trim((string) $dtContactBirthdate));

        return $this;
    }

    /**
     * Gets sContactOccupation
     *
     * @return string|null
     */
    public function getSContactOccupation()
    {
        return is_null($this->container['sContactOccupation']) ? null : trim($this->container['sContactOccupation']);
    }

    /**
     * Sets sContactOccupation
     *
     * @param string|null $sContactOccupation The occupation of the Contact
     *
     * @return self
     */
    public function setSContactOccupation($sContactOccupation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sContactOccupation)) {
            //throw new \InvalidArgumentException('non-nullable sContactOccupation cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sContactOccupation)))) {
        if (!is_null($sContactOccupation) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sContactOccupation)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($sContactOccupation)?'null':'"'.$sContactOccupation.'"')." for sContactOccupation when calling ContactRequestCompoundV2., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactOccupation'] = $sContactOccupation;
        $this->container['sContactOccupation'] = (is_null($sContactOccupation) ? null : trim((string) $sContactOccupation));

        return $this;
    }

    /**
     * Gets tContactNote
     *
     * @return string|null
     */
    public function getTContactNote()
    {
        return is_null($this->container['tContactNote']) ? null : trim($this->container['tContactNote']);
    }

    /**
     * Sets tContactNote
     *
     * @param string|null $tContactNote The note of the Contact
     *
     * @return self
     */
    public function setTContactNote($tContactNote)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tContactNote)) {
            //throw new \InvalidArgumentException('non-nullable tContactNote cannot be null');
        //}

//        if ((!preg_match("/^.{0,32000}$/", ObjectSerializer::toString($tContactNote)))) {
        if (!is_null($tContactNote) && (!preg_match("/(*UTF8)^.{0,32000}$/", ObjectSerializer::toString($tContactNote)))) {
            throw new \InvalidArgumentException("invalid value ".(is_null($tContactNote)?'null':'"'.$tContactNote.'"')." for tContactNote when calling ContactRequestCompoundV2., must conform to the pattern /^.{0,32000}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tContactNote'] = $tContactNote;
        $this->container['tContactNote'] = (is_null($tContactNote) ? null : trim((string) $tContactNote));

        return $this;
    }

    /**
     * Gets bContactIsactive
     *
     * @return bool|null
     */
    public function getBContactIsactive()
    {
        return $this->container['bContactIsactive'];
    }

    /**
     * Sets bContactIsactive
     *
     * @param bool|null $bContactIsactive Whether the contact is active or not
     *
     * @return self
     */
    public function setBContactIsactive($bContactIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bContactIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bContactIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bContactIsactive'] = $bContactIsactive;
        $this->container['bContactIsactive'] = (is_null($bContactIsactive) ? null : (bool) $bContactIsactive);

        return $this;
    }

    /**
     * Gets objContactinformations
     *
     * @return \eZmaxAPI\Model\ContactinformationsRequestCompoundV2
     */
    public function getObjContactinformations()
    {
        return $this->container['objContactinformations'];
    }

    /**
     * Sets objContactinformations
     *
     * @param \eZmaxAPI\Model\ContactinformationsRequestCompoundV2 $objContactinformations objContactinformations
     *
     * @return self
     */
    public function setObjContactinformations($objContactinformations)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objContactinformations)) {
            //throw new \InvalidArgumentException('non-nullable objContactinformations cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objContactinformations'] = $objContactinformations;
        $this->container['objContactinformations'] = $objContactinformations;

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


