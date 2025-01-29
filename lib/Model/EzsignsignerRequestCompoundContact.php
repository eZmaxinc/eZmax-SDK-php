<?php
/**
 * EzsignsignerRequestCompoundContact
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
 * Generator version: 7.11.0
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
 * EzsignsignerRequestCompoundContact Class Doc Comment
 *
 * @category Class
 * @description A Ezsignsigner-&gt;Contact Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsignerRequestCompoundContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsigner-RequestCompound-Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sContactFirstname' => 'string',
        'sContactLastname' => 'string',
        'fkiLanguageID' => 'int',
        'sEmailAddress' => 'string',
        'sPhoneE164' => 'string',
        'sPhoneExtension' => 'string',
        'sPhoneE164Cell' => 'string',
        'sPhoneNumber' => 'string',
        'sPhoneNumberCell' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sContactFirstname' => null,
        'sContactLastname' => null,
        'fkiLanguageID' => null,
        'sEmailAddress' => null,
        'sPhoneE164' => null,
        'sPhoneExtension' => null,
        'sPhoneE164Cell' => null,
        'sPhoneNumber' => null,
        'sPhoneNumberCell' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sContactFirstname' => false,
		'sContactLastname' => false,
		'fkiLanguageID' => false,
		'sEmailAddress' => false,
		'sPhoneE164' => false,
		'sPhoneExtension' => false,
		'sPhoneE164Cell' => false,
		'sPhoneNumber' => false,
		'sPhoneNumberCell' => false
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
        'sContactFirstname' => 'sContactFirstname',
        'sContactLastname' => 'sContactLastname',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEmailAddress' => 'sEmailAddress',
        'sPhoneE164' => 'sPhoneE164',
        'sPhoneExtension' => 'sPhoneExtension',
        'sPhoneE164Cell' => 'sPhoneE164Cell',
        'sPhoneNumber' => 'sPhoneNumber',
        'sPhoneNumberCell' => 'sPhoneNumberCell'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sContactFirstname' => 'setSContactFirstname',
        'sContactLastname' => 'setSContactLastname',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEmailAddress' => 'setSEmailAddress',
        'sPhoneE164' => 'setSPhoneE164',
        'sPhoneExtension' => 'setSPhoneExtension',
        'sPhoneE164Cell' => 'setSPhoneE164Cell',
        'sPhoneNumber' => 'setSPhoneNumber',
        'sPhoneNumberCell' => 'setSPhoneNumberCell'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sContactFirstname' => 'getSContactFirstname',
        'sContactLastname' => 'getSContactLastname',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEmailAddress' => 'getSEmailAddress',
        'sPhoneE164' => 'getSPhoneE164',
        'sPhoneExtension' => 'getSPhoneExtension',
        'sPhoneE164Cell' => 'getSPhoneE164Cell',
        'sPhoneNumber' => 'getSPhoneNumber',
        'sPhoneNumberCell' => 'getSPhoneNumberCell'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('sContactFirstname', $data ?? [], null);
        $this->setIfExists('sContactLastname', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sEmailAddress', $data ?? [], null);
        $this->setIfExists('sPhoneE164', $data ?? [], null);
        $this->setIfExists('sPhoneExtension', $data ?? [], null);
        $this->setIfExists('sPhoneE164Cell', $data ?? [], null);
        $this->setIfExists('sPhoneNumber', $data ?? [], null);
        $this->setIfExists('sPhoneNumberCell', $data ?? [], null);
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

        if ($this->container['sContactFirstname'] === null) {
            $invalidProperties[] = "'sContactFirstname' can't be null";
        }
	//if (!preg_match("/^.{1,20}$/", $this->container['sContactFirstname'])) {
        if (!is_null($this->container['sContactFirstname']) && !preg_match("/(*UTF8)^.{1,20}$/", $this->container['sContactFirstname'])) {
            $invalidProperties[] = "invalid value for 'sContactFirstname', must be conform to the pattern /^.{1,20}$/.";
        }

        if ($this->container['sContactLastname'] === null) {
            $invalidProperties[] = "'sContactLastname' can't be null";
        }
	//if (!preg_match("/^.{1,25}$/", $this->container['sContactLastname'])) {
        if (!is_null($this->container['sContactLastname']) && !preg_match("/(*UTF8)^.{1,25}$/", $this->container['sContactLastname'])) {
            $invalidProperties[] = "invalid value for 'sContactLastname', must be conform to the pattern /^.{1,25}$/.";
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

	//if (!is_null($this->container['sEmailAddress']) && !preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
        if (!is_null($this->container['sEmailAddress']) && !preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", $this->container['sEmailAddress'])) {
            $invalidProperties[] = "invalid value for 'sEmailAddress', must be conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.";
        }

	//if (!is_null($this->container['sPhoneE164']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164'])) {
        if (!is_null($this->container['sPhoneE164']) && !preg_match("/(*UTF8)^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164'])) {
            $invalidProperties[] = "invalid value for 'sPhoneE164', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
        }

	//if (!is_null($this->container['sPhoneE164Cell']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164Cell'])) {
        if (!is_null($this->container['sPhoneE164Cell']) && !preg_match("/(*UTF8)^\\+[1-9]\\d{1,14}$/", $this->container['sPhoneE164Cell'])) {
            $invalidProperties[] = "invalid value for 'sPhoneE164Cell', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
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
     * Gets sContactFirstname
     *
     * @return string
     */
    public function getSContactFirstname()
    {
	//return $this->container['sContactFirstname'];
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

	//if ((!preg_match("/^.{1,20}$/", ObjectSerializer::toString($sContactFirstname)))) {
        if (!is_null($sContactFirstname) && (!preg_match("/(*UTF8)^.{1,20}$/", ObjectSerializer::toString($sContactFirstname)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sContactFirstname when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^.{1,20}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sContactFirstname)?'null':'"'.$sContactFirstname.'"')." for sContactFirstname when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^.{1,20}$/.");
        }

        
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
	//return $this->container['sContactLastname'];
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

	//if ((!preg_match("/^.{1,25}$/", ObjectSerializer::toString($sContactLastname)))) {
        if (!is_null($sContactLastname) && (!preg_match("/(*UTF8)^.{1,25}$/", ObjectSerializer::toString($sContactLastname)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sContactLastname when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^.{1,25}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sContactLastname)?'null':'"'.$sContactLastname.'"')." for sContactLastname when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^.{1,25}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactLastname'] = $sContactLastname;
        $this->container['sContactLastname'] = (is_null($sContactLastname) ? null : trim((string) $sContactLastname));

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
	//return $this->container['fkiLanguageID'];
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

	//if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignsignerRequestCompoundContact., must be smaller than or equal to 2.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzsignsignerRequestCompoundContact., must be smaller than or equal to 2.');
        }
	//if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignsignerRequestCompoundContact., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzsignsignerRequestCompoundContact., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets sEmailAddress
     *
     * @return string|null
     */
    public function getSEmailAddress()
    {
	//return $this->container['sEmailAddress'];
        return is_null($this->container['sEmailAddress']) ? null : trim($this->container['sEmailAddress']);
    }

    /**
     * Sets sEmailAddress
     *
     * @param string|null $sEmailAddress The email address.
     *
     * @return self
     */
    public function setSEmailAddress($sEmailAddress)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEmailAddress)) {
            //throw new \InvalidArgumentException('non-nullable sEmailAddress cannot be null');
        //}

	//if ((!preg_match("/^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
        if (!is_null($sEmailAddress) && (!preg_match("/(*UTF8)^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/", ObjectSerializer::toString($sEmailAddress)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sEmailAddress when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEmailAddress)?'null':'"'.$sEmailAddress.'"')." for sEmailAddress when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^[\\w.%+\\-!#$%&'*+\/=?^`{|}~]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,20}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEmailAddress'] = $sEmailAddress;
        $this->container['sEmailAddress'] = (is_null($sEmailAddress) ? null : trim((string) $sEmailAddress));

        return $this;
    }

    /**
     * Gets sPhoneE164
     *
     * @return string|null
     */
    public function getSPhoneE164()
    {
	//return $this->container['sPhoneE164'];
        return is_null($this->container['sPhoneE164']) ? null : trim($this->container['sPhoneE164']);
    }

    /**
     * Sets sPhoneE164
     *
     * @param string|null $sPhoneE164 A phone number in E.164 Format
     *
     * @return self
     */
    public function setSPhoneE164($sPhoneE164)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneE164)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneE164 cannot be null');
        //}

	//if ((!preg_match("/^\\+[1-9]\\d{1,14}$/", ObjectSerializer::toString($sPhoneE164)))) {
        if (!is_null($sPhoneE164) && (!preg_match("/(*UTF8)^\\+[1-9]\\d{1,14}$/", ObjectSerializer::toString($sPhoneE164)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sPhoneE164 when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sPhoneE164)?'null':'"'.$sPhoneE164.'"')." for sPhoneE164 when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneE164'] = $sPhoneE164;
        $this->container['sPhoneE164'] = (is_null($sPhoneE164) ? null : trim((string) $sPhoneE164));

        return $this;
    }

    /**
     * Gets sPhoneExtension
     *
     * @return string|null
     */
    public function getSPhoneExtension()
    {
	//return $this->container['sPhoneExtension'];
        return is_null($this->container['sPhoneExtension']) ? null : trim($this->container['sPhoneExtension']);
    }

    /**
     * Sets sPhoneExtension
     *
     * @param string|null $sPhoneExtension The extension of the phone number.  The extension is the \"123\" section in this sample phone number: (514) 990-1516 x123.  It can also be used with international phone numbers
     *
     * @return self
     */
    public function setSPhoneExtension($sPhoneExtension)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneExtension)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneExtension cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneExtension'] = $sPhoneExtension;
        $this->container['sPhoneExtension'] = (is_null($sPhoneExtension) ? null : trim((string) $sPhoneExtension));

        return $this;
    }

    /**
     * Gets sPhoneE164Cell
     *
     * @return string|null
     */
    public function getSPhoneE164Cell()
    {
	//return $this->container['sPhoneE164Cell'];
        return is_null($this->container['sPhoneE164Cell']) ? null : trim($this->container['sPhoneE164Cell']);
    }

    /**
     * Sets sPhoneE164Cell
     *
     * @param string|null $sPhoneE164Cell A phone number in E.164 Format
     *
     * @return self
     */
    public function setSPhoneE164Cell($sPhoneE164Cell)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneE164Cell)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneE164Cell cannot be null');
        //}

	//if ((!preg_match("/^\\+[1-9]\\d{1,14}$/", ObjectSerializer::toString($sPhoneE164Cell)))) {
        if (!is_null($sPhoneE164Cell) && (!preg_match("/(*UTF8)^\\+[1-9]\\d{1,14}$/", ObjectSerializer::toString($sPhoneE164Cell)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sPhoneE164Cell when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sPhoneE164Cell)?'null':'"'.$sPhoneE164Cell.'"')." for sPhoneE164Cell when calling EzsignsignerRequestCompoundContact., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneE164Cell'] = $sPhoneE164Cell;
        $this->container['sPhoneE164Cell'] = (is_null($sPhoneE164Cell) ? null : trim((string) $sPhoneE164Cell));

        return $this;
    }

    /**
     * Gets sPhoneNumber
     *
     * @return string|null
     * @deprecated
     */
    public function getSPhoneNumber()
    {
	//return $this->container['sPhoneNumber'];
        return is_null($this->container['sPhoneNumber']) ? null : trim($this->container['sPhoneNumber']);
    }

    /**
     * Sets sPhoneNumber
     *
     * @param string|null $sPhoneNumber sPhoneNumber
     *
     * @return self
     * @deprecated
     */
    public function setSPhoneNumber($sPhoneNumber)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneNumber)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneNumber cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneNumber'] = $sPhoneNumber;
        $this->container['sPhoneNumber'] = (is_null($sPhoneNumber) ? null : trim((string) $sPhoneNumber));

        return $this;
    }

    /**
     * Gets sPhoneNumberCell
     *
     * @return string|null
     * @deprecated
     */
    public function getSPhoneNumberCell()
    {
	//return $this->container['sPhoneNumberCell'];
        return is_null($this->container['sPhoneNumberCell']) ? null : trim($this->container['sPhoneNumberCell']);
    }

    /**
     * Sets sPhoneNumberCell
     *
     * @param string|null $sPhoneNumberCell sPhoneNumberCell
     *
     * @return self
     * @deprecated
     */
    public function setSPhoneNumberCell($sPhoneNumberCell)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sPhoneNumberCell)) {
            //throw new \InvalidArgumentException('non-nullable sPhoneNumberCell cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sPhoneNumberCell'] = $sPhoneNumberCell;
        $this->container['sPhoneNumberCell'] = (is_null($sPhoneNumberCell) ? null : trim((string) $sPhoneNumberCell));

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


