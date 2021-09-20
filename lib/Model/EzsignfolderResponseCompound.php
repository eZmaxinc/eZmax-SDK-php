<?php
/**
 * EzsignfolderResponseCompound
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.0.47
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
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
 * EzsignfolderResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignfolderResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignfoldertypeID' => 'int',
        'fkiEzsigntsarequirementID' => 'int',
        'sEzsignfolderDescription' => 'string',
        'tEzsignfolderNote' => 'string',
        'eEzsignfolderSendreminderfrequency' => '\eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'int',
        'dtEzsignfolderSentdate' => 'string',
        'eEzsignfolderStep' => '\eZmaxAPI\Model\FieldEEzsignfolderStep',
        'dtEzsignfolderClose' => 'string',
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
        'fkiEzsignfoldertypeID' => null,
        'fkiEzsigntsarequirementID' => null,
        'sEzsignfolderDescription' => null,
        'tEzsignfolderNote' => null,
        'eEzsignfolderSendreminderfrequency' => null,
        'pkiEzsignfolderID' => null,
        'dtEzsignfolderSentdate' => null,
        'eEzsignfolderStep' => null,
        'dtEzsignfolderClose' => null,
        'objAudit' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiEzsigntsarequirementID' => 'fkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'tEzsignfolderNote' => 'tEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'eEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'pkiEzsignfolderID',
        'dtEzsignfolderSentdate' => 'dtEzsignfolderSentdate',
        'eEzsignfolderStep' => 'eEzsignfolderStep',
        'dtEzsignfolderClose' => 'dtEzsignfolderClose',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiEzsigntsarequirementID' => 'setFkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'tEzsignfolderNote' => 'setTEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'setEEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'dtEzsignfolderSentdate' => 'setDtEzsignfolderSentdate',
        'eEzsignfolderStep' => 'setEEzsignfolderStep',
        'dtEzsignfolderClose' => 'setDtEzsignfolderClose',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiEzsigntsarequirementID' => 'getFkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'tEzsignfolderNote' => 'getTEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'getEEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'dtEzsignfolderSentdate' => 'getDtEzsignfolderSentdate',
        'eEzsignfolderStep' => 'getEEzsignfolderStep',
        'dtEzsignfolderClose' => 'getDtEzsignfolderClose',
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
        $this->container['fkiEzsignfoldertypeID'] = $data['fkiEzsignfoldertypeID'] ?? null;
        $this->container['fkiEzsigntsarequirementID'] = $data['fkiEzsigntsarequirementID'] ?? null;
        $this->container['sEzsignfolderDescription'] = $data['sEzsignfolderDescription'] ?? null;
        $this->container['tEzsignfolderNote'] = $data['tEzsignfolderNote'] ?? null;
        $this->container['eEzsignfolderSendreminderfrequency'] = $data['eEzsignfolderSendreminderfrequency'] ?? null;
        $this->container['pkiEzsignfolderID'] = $data['pkiEzsignfolderID'] ?? null;
        $this->container['dtEzsignfolderSentdate'] = $data['dtEzsignfolderSentdate'] ?? null;
        $this->container['eEzsignfolderStep'] = $data['eEzsignfolderStep'] ?? null;
        $this->container['dtEzsignfolderClose'] = $data['dtEzsignfolderClose'] ?? null;
        $this->container['objAudit'] = $data['objAudit'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if ($this->container['fkiEzsigntsarequirementID'] === null) {
            $invalidProperties[] = "'fkiEzsigntsarequirementID' can't be null";
        }
        if (($this->container['fkiEzsigntsarequirementID'] > 3)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be smaller than or equal to 3.";
        }

        if (($this->container['fkiEzsigntsarequirementID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
        if ($this->container['tEzsignfolderNote'] === null) {
            $invalidProperties[] = "'tEzsignfolderNote' can't be null";
        }
        if ($this->container['eEzsignfolderSendreminderfrequency'] === null) {
            $invalidProperties[] = "'eEzsignfolderSendreminderfrequency' can't be null";
        }
        if ($this->container['pkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'pkiEzsignfolderID' can't be null";
        }
        if ($this->container['dtEzsignfolderSentdate'] === null) {
            $invalidProperties[] = "'dtEzsignfolderSentdate' can't be null";
        }
        if ($this->container['eEzsignfolderStep'] === null) {
            $invalidProperties[] = "'eEzsignfolderStep' can't be null";
        }
        if ($this->container['dtEzsignfolderClose'] === null) {
            $invalidProperties[] = "'dtEzsignfolderClose' can't be null";
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
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.    This value can be queried by the API and is also visible in the admin interface.    There are two types of Ezsignfoldertype. **User** and **Shared**. **User** can only be seen by the user who created the folder or its assistants. Access to **Shared** folders are configurable for access and email delivery. You should typically choose a **Shared** type here.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
        $this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;

        return $this;
    }

    /**
     * Gets fkiEzsigntsarequirementID
     *
     * @return int
     */
    public function getFkiEzsigntsarequirementID()
    {
        return $this->container['fkiEzsigntsarequirementID'];
    }

    /**
     * Sets fkiEzsigntsarequirementID
     *
     * @param int $fkiEzsigntsarequirementID The unique ID of the Ezsigntsarequirement.  Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values:  |Value|Description| |-|-| |1|No. TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server's time.| |2|Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server's time. **Additional fee applies**| |3|Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**|
     *
     * @return self
     */
    public function setFkiEzsigntsarequirementID($fkiEzsigntsarequirementID)
    {

        if (($fkiEzsigntsarequirementID > 3)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderResponseCompound., must be smaller than or equal to 3.');
        }
        if (($fkiEzsigntsarequirementID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderResponseCompound., must be bigger than or equal to 1.');
        }

        $this->container['fkiEzsigntsarequirementID'] = $fkiEzsigntsarequirementID;

        return $this;
    }

    /**
     * Gets sEzsignfolderDescription
     *
     * @return string
     */
    public function getSEzsignfolderDescription()
    {
        return $this->container['sEzsignfolderDescription'];
    }

    /**
     * Sets sEzsignfolderDescription
     *
     * @param string $sEzsignfolderDescription The description of the Ezsign Folder
     *
     * @return self
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {
        $this->container['sEzsignfolderDescription'] = $sEzsignfolderDescription;

        return $this;
    }

    /**
     * Gets tEzsignfolderNote
     *
     * @return string
     */
    public function getTEzsignfolderNote()
    {
        return $this->container['tEzsignfolderNote'];
    }

    /**
     * Sets tEzsignfolderNote
     *
     * @param string $tEzsignfolderNote Somes extra notes about the eZsign Folder
     *
     * @return self
     */
    public function setTEzsignfolderNote($tEzsignfolderNote)
    {
        $this->container['tEzsignfolderNote'] = $tEzsignfolderNote;

        return $this;
    }

    /**
     * Gets eEzsignfolderSendreminderfrequency
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency
     */
    public function getEEzsignfolderSendreminderfrequency()
    {
        return $this->container['eEzsignfolderSendreminderfrequency'];
    }

    /**
     * Sets eEzsignfolderSendreminderfrequency
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency $eEzsignfolderSendreminderfrequency eEzsignfolderSendreminderfrequency
     *
     * @return self
     */
    public function setEEzsignfolderSendreminderfrequency($eEzsignfolderSendreminderfrequency)
    {
        $this->container['eEzsignfolderSendreminderfrequency'] = $eEzsignfolderSendreminderfrequency;

        return $this;
    }

    /**
     * Gets pkiEzsignfolderID
     *
     * @return int
     */
    public function getPkiEzsignfolderID()
    {
        return $this->container['pkiEzsignfolderID'];
    }

    /**
     * Sets pkiEzsignfolderID
     *
     * @param int $pkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setPkiEzsignfolderID($pkiEzsignfolderID)
    {
        $this->container['pkiEzsignfolderID'] = $pkiEzsignfolderID;

        return $this;
    }

    /**
     * Gets dtEzsignfolderSentdate
     *
     * @return string
     */
    public function getDtEzsignfolderSentdate()
    {
        return $this->container['dtEzsignfolderSentdate'];
    }

    /**
     * Sets dtEzsignfolderSentdate
     *
     * @param string $dtEzsignfolderSentdate The date and time at which the Ezsign folder was sent the last time.
     *
     * @return self
     */
    public function setDtEzsignfolderSentdate($dtEzsignfolderSentdate)
    {
        $this->container['dtEzsignfolderSentdate'] = $dtEzsignfolderSentdate;

        return $this;
    }

    /**
     * Gets eEzsignfolderStep
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderStep
     */
    public function getEEzsignfolderStep()
    {
        return $this->container['eEzsignfolderStep'];
    }

    /**
     * Sets eEzsignfolderStep
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderStep $eEzsignfolderStep eEzsignfolderStep
     *
     * @return self
     */
    public function setEEzsignfolderStep($eEzsignfolderStep)
    {
        $this->container['eEzsignfolderStep'] = $eEzsignfolderStep;

        return $this;
    }

    /**
     * Gets dtEzsignfolderClose
     *
     * @return string
     */
    public function getDtEzsignfolderClose()
    {
        return $this->container['dtEzsignfolderClose'];
    }

    /**
     * Sets dtEzsignfolderClose
     *
     * @param string $dtEzsignfolderClose The date and time at which the folder was closed. Either by applying the last signature or by completing it prematurely.
     *
     * @return self
     */
    public function setDtEzsignfolderClose($dtEzsignfolderClose)
    {
        $this->container['dtEzsignfolderClose'] = $dtEzsignfolderClose;

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
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


?>