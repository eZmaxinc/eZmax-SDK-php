<?php
/**
 * EzsignfolderRequestCompoundV3
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
 * EzsignfolderRequestCompoundV3 Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignfolderRequestCompoundV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-RequestCompoundV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfolderID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiTimezoneID' => 'int',
        'fkiEzsigntsarequirementID' => 'int',
        'eEzsignfolderDocumentdependency' => '\eZmaxAPI\Model\FieldEEzsignfolderDocumentdependency',
        'sEzsignfolderDescription' => 'string',
        'tEzsignfolderNote' => 'string',
        'tEzsignfolderMessage' => 'string',
        'iEzsignfolderSendreminderfirstdays' => 'int',
        'iEzsignfolderSendreminderotherdays' => 'int',
        'sEzsignfolderExternalid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignfolderID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiTimezoneID' => null,
        'fkiEzsigntsarequirementID' => null,
        'eEzsignfolderDocumentdependency' => null,
        'sEzsignfolderDescription' => null,
        'tEzsignfolderNote' => null,
        'tEzsignfolderMessage' => null,
        'iEzsignfolderSendreminderfirstdays' => null,
        'iEzsignfolderSendreminderotherdays' => null,
        'sEzsignfolderExternalid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignfolderID' => false,
		'fkiEzsignfoldertypeID' => false,
		'fkiTimezoneID' => false,
		'fkiEzsigntsarequirementID' => false,
		'eEzsignfolderDocumentdependency' => false,
		'sEzsignfolderDescription' => false,
		'tEzsignfolderNote' => false,
		'tEzsignfolderMessage' => false,
		'iEzsignfolderSendreminderfirstdays' => false,
		'iEzsignfolderSendreminderotherdays' => false,
		'sEzsignfolderExternalid' => false
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
        'pkiEzsignfolderID' => 'pkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiTimezoneID' => 'fkiTimezoneID',
        'fkiEzsigntsarequirementID' => 'fkiEzsigntsarequirementID',
        'eEzsignfolderDocumentdependency' => 'eEzsignfolderDocumentdependency',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'tEzsignfolderNote' => 'tEzsignfolderNote',
        'tEzsignfolderMessage' => 'tEzsignfolderMessage',
        'iEzsignfolderSendreminderfirstdays' => 'iEzsignfolderSendreminderfirstdays',
        'iEzsignfolderSendreminderotherdays' => 'iEzsignfolderSendreminderotherdays',
        'sEzsignfolderExternalid' => 'sEzsignfolderExternalid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiTimezoneID' => 'setFkiTimezoneID',
        'fkiEzsigntsarequirementID' => 'setFkiEzsigntsarequirementID',
        'eEzsignfolderDocumentdependency' => 'setEEzsignfolderDocumentdependency',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'tEzsignfolderNote' => 'setTEzsignfolderNote',
        'tEzsignfolderMessage' => 'setTEzsignfolderMessage',
        'iEzsignfolderSendreminderfirstdays' => 'setIEzsignfolderSendreminderfirstdays',
        'iEzsignfolderSendreminderotherdays' => 'setIEzsignfolderSendreminderotherdays',
        'sEzsignfolderExternalid' => 'setSEzsignfolderExternalid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiTimezoneID' => 'getFkiTimezoneID',
        'fkiEzsigntsarequirementID' => 'getFkiEzsigntsarequirementID',
        'eEzsignfolderDocumentdependency' => 'getEEzsignfolderDocumentdependency',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'tEzsignfolderNote' => 'getTEzsignfolderNote',
        'tEzsignfolderMessage' => 'getTEzsignfolderMessage',
        'iEzsignfolderSendreminderfirstdays' => 'getIEzsignfolderSendreminderfirstdays',
        'iEzsignfolderSendreminderotherdays' => 'getIEzsignfolderSendreminderotherdays',
        'sEzsignfolderExternalid' => 'getSEzsignfolderExternalid'
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
        $this->setIfExists('pkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('fkiTimezoneID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntsarequirementID', $data ?? [], null);
        $this->setIfExists('eEzsignfolderDocumentdependency', $data ?? [], null);
        $this->setIfExists('sEzsignfolderDescription', $data ?? [], null);
        $this->setIfExists('tEzsignfolderNote', $data ?? [], null);
        $this->setIfExists('tEzsignfolderMessage', $data ?? [], null);
        $this->setIfExists('iEzsignfolderSendreminderfirstdays', $data ?? [], null);
        $this->setIfExists('iEzsignfolderSendreminderotherdays', $data ?? [], null);
        $this->setIfExists('sEzsignfolderExternalid', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignfolderID']) && ($this->container['pkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['fkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiTimezoneID']) && ($this->container['fkiTimezoneID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiTimezoneID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntsarequirementID']) && ($this->container['fkiEzsigntsarequirementID'] > 3)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['fkiEzsigntsarequirementID']) && ($this->container['fkiEzsigntsarequirementID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
	//if (!preg_match("/^.{0,75}$/", $this->container['sEzsignfolderDescription'])) {
        if (!is_null($this->container['sEzsignfolderDescription']) && !preg_match("/(*UTF8)^.{0,75}$/", $this->container['sEzsignfolderDescription'])) {
            $invalidProperties[] = "invalid value for 'sEzsignfolderDescription', must be conform to the pattern /^.{0,75}$/.";
        }

        if ($this->container['iEzsignfolderSendreminderfirstdays'] === null) {
            $invalidProperties[] = "'iEzsignfolderSendreminderfirstdays' can't be null";
        }
        if (($this->container['iEzsignfolderSendreminderfirstdays'] > 255)) {
            $invalidProperties[] = "invalid value for 'iEzsignfolderSendreminderfirstdays', must be smaller than or equal to 255.";
        }

        if (($this->container['iEzsignfolderSendreminderfirstdays'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignfolderSendreminderfirstdays', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignfolderSendreminderotherdays'] === null) {
            $invalidProperties[] = "'iEzsignfolderSendreminderotherdays' can't be null";
        }
        if (($this->container['iEzsignfolderSendreminderotherdays'] > 255)) {
            $invalidProperties[] = "invalid value for 'iEzsignfolderSendreminderotherdays', must be smaller than or equal to 255.";
        }

        if (($this->container['iEzsignfolderSendreminderotherdays'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignfolderSendreminderotherdays', must be bigger than or equal to 0.";
        }

	//if (!is_null($this->container['sEzsignfolderExternalid']) && !preg_match("/^.{0,128}$/", $this->container['sEzsignfolderExternalid'])) {
        if (!is_null($this->container['sEzsignfolderExternalid']) && !preg_match("/(*UTF8)^.{0,128}$/", $this->container['sEzsignfolderExternalid'])) {
            $invalidProperties[] = "invalid value for 'sEzsignfolderExternalid', must be conform to the pattern /^.{0,128}$/.";
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
     * Gets pkiEzsignfolderID
     *
     * @return int|null
     */
    public function getPkiEzsignfolderID()
    {
	//return $this->container['pkiEzsignfolderID'];
        return $this->container['pkiEzsignfolderID'];
    }

    /**
     * Sets pkiEzsignfolderID
     *
     * @param int|null $pkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setPkiEzsignfolderID($pkiEzsignfolderID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignfolderID cannot be null');
        //}

	//if (($pkiEzsignfolderID < 0)) {
        if (!is_null($pkiEzsignfolderID) && ($pkiEzsignfolderID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignfolderID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignfolderID)?'null':'"'.$pkiEzsignfolderID.'"').' for pkiEzsignfolderID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignfolderID'] = $pkiEzsignfolderID;
        $this->container['pkiEzsignfolderID'] = (is_null($pkiEzsignfolderID) ? null : (int) $pkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
	//return $this->container['fkiEzsignfoldertypeID'];
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}

	//if (($fkiEzsignfoldertypeID > 65535)) {
        if (($fkiEzsignfoldertypeID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignfoldertypeID)?'null':'"'.$fkiEzsignfoldertypeID.'"').' for fkiEzsignfoldertypeID when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 65535.');
        }
	//if (($fkiEzsignfoldertypeID < 0)) {
        if (($fkiEzsignfoldertypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignfoldertypeID)?'null':'"'.$fkiEzsignfoldertypeID.'"').' for fkiEzsignfoldertypeID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets fkiTimezoneID
     *
     * @return int|null
     */
    public function getFkiTimezoneID()
    {
	//return $this->container['fkiTimezoneID'];
        return $this->container['fkiTimezoneID'];
    }

    /**
     * Sets fkiTimezoneID
     *
     * @param int|null $fkiTimezoneID The unique ID of the Timezone
     *
     * @return self
     */
    public function setFkiTimezoneID($fkiTimezoneID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiTimezoneID)) {
            //throw new \InvalidArgumentException('non-nullable fkiTimezoneID cannot be null');
        //}

	//if (($fkiTimezoneID < 0)) {
        if (!is_null($fkiTimezoneID) && ($fkiTimezoneID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiTimezoneID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiTimezoneID)?'null':'"'.$fkiTimezoneID.'"').' for fkiTimezoneID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiTimezoneID'] = $fkiTimezoneID;
        $this->container['fkiTimezoneID'] = (is_null($fkiTimezoneID) ? null : (int) $fkiTimezoneID);

        return $this;
    }

    /**
     * Gets fkiEzsigntsarequirementID
     *
     * @return int|null
     */
    public function getFkiEzsigntsarequirementID()
    {
	//return $this->container['fkiEzsigntsarequirementID'];
        return $this->container['fkiEzsigntsarequirementID'];
    }

    /**
     * Sets fkiEzsigntsarequirementID
     *
     * @param int|null $fkiEzsigntsarequirementID The unique ID of the Ezsigntsarequirement.  Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values:  |Value|Description| |-|-| |1|No. TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server's time.| |2|Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server's time. **Additional fee applies**| |3|Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**|
     *
     * @return self
     */
    public function setFkiEzsigntsarequirementID($fkiEzsigntsarequirementID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntsarequirementID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntsarequirementID cannot be null');
        //}

	//if (($fkiEzsigntsarequirementID > 3)) {
        if (!is_null($fkiEzsigntsarequirementID) && ($fkiEzsigntsarequirementID > 3)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 3.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsigntsarequirementID)?'null':'"'.$fkiEzsigntsarequirementID.'"').' for fkiEzsigntsarequirementID when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 3.');
        }
	//if (($fkiEzsigntsarequirementID < 1)) {
        if (!is_null($fkiEzsigntsarequirementID) && ($fkiEzsigntsarequirementID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsigntsarequirementID)?'null':'"'.$fkiEzsigntsarequirementID.'"').' for fkiEzsigntsarequirementID when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntsarequirementID'] = $fkiEzsigntsarequirementID;
        $this->container['fkiEzsigntsarequirementID'] = (is_null($fkiEzsigntsarequirementID) ? null : (int) $fkiEzsigntsarequirementID);

        return $this;
    }

    /**
     * Gets eEzsignfolderDocumentdependency
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderDocumentdependency|null
     */
    public function getEEzsignfolderDocumentdependency()
    {
	//return $this->container['eEzsignfolderDocumentdependency'];
        return $this->container['eEzsignfolderDocumentdependency'];
    }

    /**
     * Sets eEzsignfolderDocumentdependency
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderDocumentdependency|null $eEzsignfolderDocumentdependency eEzsignfolderDocumentdependency
     *
     * @return self
     */
    public function setEEzsignfolderDocumentdependency($eEzsignfolderDocumentdependency)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignfolderDocumentdependency)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfolderDocumentdependency cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignfolderDocumentdependency'] = $eEzsignfolderDocumentdependency;
        $this->container['eEzsignfolderDocumentdependency'] = $eEzsignfolderDocumentdependency;

        return $this;
    }

    /**
     * Gets sEzsignfolderDescription
     *
     * @return string
     */
    public function getSEzsignfolderDescription()
    {
	//return $this->container['sEzsignfolderDescription'];
        return is_null($this->container['sEzsignfolderDescription']) ? null : trim($this->container['sEzsignfolderDescription']);
    }

    /**
     * Sets sEzsignfolderDescription
     *
     * @param string $sEzsignfolderDescription The description of the Ezsignfolder
     *
     * @return self
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfolderDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfolderDescription cannot be null');
        //}

	//if ((!preg_match("/^.{0,75}$/", ObjectSerializer::toString($sEzsignfolderDescription)))) {
        if (!is_null($sEzsignfolderDescription) && (!preg_match("/(*UTF8)^.{0,75}$/", ObjectSerializer::toString($sEzsignfolderDescription)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sEzsignfolderDescription when calling EzsignfolderRequestCompoundV3., must conform to the pattern /^.{0,75}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEzsignfolderDescription)?'null':'"'.$sEzsignfolderDescription.'"')." for sEzsignfolderDescription when calling EzsignfolderRequestCompoundV3., must conform to the pattern /^.{0,75}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfolderDescription'] = $sEzsignfolderDescription;
        $this->container['sEzsignfolderDescription'] = (is_null($sEzsignfolderDescription) ? null : trim((string) $sEzsignfolderDescription));

        return $this;
    }

    /**
     * Gets tEzsignfolderNote
     *
     * @return string|null
     */
    public function getTEzsignfolderNote()
    {
	//return $this->container['tEzsignfolderNote'];
        return is_null($this->container['tEzsignfolderNote']) ? null : trim($this->container['tEzsignfolderNote']);
    }

    /**
     * Sets tEzsignfolderNote
     *
     * @param string|null $tEzsignfolderNote Note about the Ezsignfolder
     *
     * @return self
     */
    public function setTEzsignfolderNote($tEzsignfolderNote)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tEzsignfolderNote)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignfolderNote cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tEzsignfolderNote'] = $tEzsignfolderNote;
        $this->container['tEzsignfolderNote'] = (is_null($tEzsignfolderNote) ? null : trim((string) $tEzsignfolderNote));

        return $this;
    }

    /**
     * Gets tEzsignfolderMessage
     *
     * @return string|null
     */
    public function getTEzsignfolderMessage()
    {
	//return $this->container['tEzsignfolderMessage'];
        return is_null($this->container['tEzsignfolderMessage']) ? null : trim($this->container['tEzsignfolderMessage']);
    }

    /**
     * Sets tEzsignfolderMessage
     *
     * @param string|null $tEzsignfolderMessage A custom text message that will be added to the email sent.
     *
     * @return self
     */
    public function setTEzsignfolderMessage($tEzsignfolderMessage)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tEzsignfolderMessage)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignfolderMessage cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tEzsignfolderMessage'] = $tEzsignfolderMessage;
        $this->container['tEzsignfolderMessage'] = (is_null($tEzsignfolderMessage) ? null : trim((string) $tEzsignfolderMessage));

        return $this;
    }

    /**
     * Gets iEzsignfolderSendreminderfirstdays
     *
     * @return int
     */
    public function getIEzsignfolderSendreminderfirstdays()
    {
	//return $this->container['iEzsignfolderSendreminderfirstdays'];
        return $this->container['iEzsignfolderSendreminderfirstdays'];
    }

    /**
     * Sets iEzsignfolderSendreminderfirstdays
     *
     * @param int $iEzsignfolderSendreminderfirstdays The number of days before the the first reminder sending
     *
     * @return self
     */
    public function setIEzsignfolderSendreminderfirstdays($iEzsignfolderSendreminderfirstdays)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignfolderSendreminderfirstdays)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignfolderSendreminderfirstdays cannot be null');
        //}

	//if (($iEzsignfolderSendreminderfirstdays > 255)) {
        if (($iEzsignfolderSendreminderfirstdays > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsignfolderSendreminderfirstdays when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsignfolderSendreminderfirstdays)?'null':'"'.$iEzsignfolderSendreminderfirstdays.'"').' for iEzsignfolderSendreminderfirstdays when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 255.');
        }
	//if (($iEzsignfolderSendreminderfirstdays < 0)) {
        if (($iEzsignfolderSendreminderfirstdays < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsignfolderSendreminderfirstdays when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsignfolderSendreminderfirstdays)?'null':'"'.$iEzsignfolderSendreminderfirstdays.'"').' for iEzsignfolderSendreminderfirstdays when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignfolderSendreminderfirstdays'] = $iEzsignfolderSendreminderfirstdays;
        $this->container['iEzsignfolderSendreminderfirstdays'] = (is_null($iEzsignfolderSendreminderfirstdays) ? null : (int) $iEzsignfolderSendreminderfirstdays);

        return $this;
    }

    /**
     * Gets iEzsignfolderSendreminderotherdays
     *
     * @return int
     */
    public function getIEzsignfolderSendreminderotherdays()
    {
	//return $this->container['iEzsignfolderSendreminderotherdays'];
        return $this->container['iEzsignfolderSendreminderotherdays'];
    }

    /**
     * Sets iEzsignfolderSendreminderotherdays
     *
     * @param int $iEzsignfolderSendreminderotherdays The number of days after the first reminder sending
     *
     * @return self
     */
    public function setIEzsignfolderSendreminderotherdays($iEzsignfolderSendreminderotherdays)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignfolderSendreminderotherdays)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignfolderSendreminderotherdays cannot be null');
        //}

	//if (($iEzsignfolderSendreminderotherdays > 255)) {
        if (($iEzsignfolderSendreminderotherdays > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsignfolderSendreminderotherdays when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsignfolderSendreminderotherdays)?'null':'"'.$iEzsignfolderSendreminderotherdays.'"').' for iEzsignfolderSendreminderotherdays when calling EzsignfolderRequestCompoundV3., must be smaller than or equal to 255.');
        }
	//if (($iEzsignfolderSendreminderotherdays < 0)) {
        if (($iEzsignfolderSendreminderotherdays < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzsignfolderSendreminderotherdays when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzsignfolderSendreminderotherdays)?'null':'"'.$iEzsignfolderSendreminderotherdays.'"').' for iEzsignfolderSendreminderotherdays when calling EzsignfolderRequestCompoundV3., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignfolderSendreminderotherdays'] = $iEzsignfolderSendreminderotherdays;
        $this->container['iEzsignfolderSendreminderotherdays'] = (is_null($iEzsignfolderSendreminderotherdays) ? null : (int) $iEzsignfolderSendreminderotherdays);

        return $this;
    }

    /**
     * Gets sEzsignfolderExternalid
     *
     * @return string|null
     */
    public function getSEzsignfolderExternalid()
    {
	//return $this->container['sEzsignfolderExternalid'];
        return is_null($this->container['sEzsignfolderExternalid']) ? null : trim($this->container['sEzsignfolderExternalid']);
    }

    /**
     * Sets sEzsignfolderExternalid
     *
     * @param string|null $sEzsignfolderExternalid This field can be used to store an External ID from the client's system.  Anything can be stored in this field, it will never be evaluated by the eZmax system and will be returned AS-IS.  To store multiple values, consider using a JSON formatted structure, a URL encoded string, a CSV or any other custom format.
     *
     * @return self
     */
    public function setSEzsignfolderExternalid($sEzsignfolderExternalid)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfolderExternalid)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfolderExternalid cannot be null');
        //}

	//if ((!preg_match("/^.{0,128}$/", ObjectSerializer::toString($sEzsignfolderExternalid)))) {
        if (!is_null($sEzsignfolderExternalid) && (!preg_match("/(*UTF8)^.{0,128}$/", ObjectSerializer::toString($sEzsignfolderExternalid)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sEzsignfolderExternalid when calling EzsignfolderRequestCompoundV3., must conform to the pattern /^.{0,128}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEzsignfolderExternalid)?'null':'"'.$sEzsignfolderExternalid.'"')." for sEzsignfolderExternalid when calling EzsignfolderRequestCompoundV3., must conform to the pattern /^.{0,128}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfolderExternalid'] = $sEzsignfolderExternalid;
        $this->container['sEzsignfolderExternalid'] = (is_null($sEzsignfolderExternalid) ? null : trim((string) $sEzsignfolderExternalid));

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


