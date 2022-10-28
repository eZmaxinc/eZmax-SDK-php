<?php
/**
 * EzsignfolderRequest
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
 * The version of the OpenAPI document: 1.1.13
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * EzsignfolderRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignfolderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfolderID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiEzsigntsarequirementID' => 'int',
        'sEzsignfolderDescription' => 'string',
        'tEzsignfolderNote' => 'string',
        'eEzsignfolderSendreminderfrequency' => '\eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency'
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
        'fkiEzsigntsarequirementID' => null,
        'sEzsignfolderDescription' => null,
        'tEzsignfolderNote' => null,
        'eEzsignfolderSendreminderfrequency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignfolderID' => false,
		'fkiEzsignfoldertypeID' => false,
		'fkiEzsigntsarequirementID' => false,
		'sEzsignfolderDescription' => false,
		'tEzsignfolderNote' => false,
		'eEzsignfolderSendreminderfrequency' => false
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
        'fkiEzsigntsarequirementID' => 'fkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'tEzsignfolderNote' => 'tEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'eEzsignfolderSendreminderfrequency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiEzsigntsarequirementID' => 'setFkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'tEzsignfolderNote' => 'setTEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'setEEzsignfolderSendreminderfrequency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiEzsigntsarequirementID' => 'getFkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'tEzsignfolderNote' => 'getTEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'getEEzsignfolderSendreminderfrequency'
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
        $this->setIfExists('fkiEzsigntsarequirementID', $data ?? [], null);
        $this->setIfExists('sEzsignfolderDescription', $data ?? [], null);
        $this->setIfExists('tEzsignfolderNote', $data ?? [], null);
        $this->setIfExists('eEzsignfolderSendreminderfrequency', $data ?? [], null);
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
        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
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
        if ($this->container['tEzsignfolderNote'] === null) {
            $invalidProperties[] = "'tEzsignfolderNote' can't be null";
        }
        if ($this->container['eEzsignfolderSendreminderfrequency'] === null) {
            $invalidProperties[] = "'eEzsignfolderSendreminderfrequency' can't be null";
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

        if (!is_null($pkiEzsignfolderID) && ($pkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignfolderID when calling EzsignfolderRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignfolderID cannot be null');
        //}
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

        if (($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignfolderRequest., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets fkiEzsigntsarequirementID
     *
     * @return int|null
     */
    public function getFkiEzsigntsarequirementID()
    {
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

        if (!is_null($fkiEzsigntsarequirementID) && ($fkiEzsigntsarequirementID > 3)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderRequest., must be smaller than or equal to 3.');
        }
        if (!is_null($fkiEzsigntsarequirementID) && ($fkiEzsigntsarequirementID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderRequest., must be bigger than or equal to 1.');
        }


        //if (is_null($fkiEzsigntsarequirementID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntsarequirementID cannot be null');
        //}
        $this->container['fkiEzsigntsarequirementID'] = (is_null($fkiEzsigntsarequirementID) ? null : (int) $fkiEzsigntsarequirementID);

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
     * @param string $sEzsignfolderDescription The description of the Ezsignfolder
     *
     * @return self
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {

        //if (is_null($sEzsignfolderDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfolderDescription cannot be null');
        //}
        $this->container['sEzsignfolderDescription'] = (is_null($sEzsignfolderDescription) ? null : (string) $sEzsignfolderDescription);

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
     * @param string $tEzsignfolderNote Note about the Ezsignfolder
     *
     * @return self
     */
    public function setTEzsignfolderNote($tEzsignfolderNote)
    {

        //if (is_null($tEzsignfolderNote)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignfolderNote cannot be null');
        //}
        $this->container['tEzsignfolderNote'] = (is_null($tEzsignfolderNote) ? null : (string) $tEzsignfolderNote);

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

        //if (is_null($eEzsignfolderSendreminderfrequency)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfolderSendreminderfrequency cannot be null');
        //}
        $this->container['eEzsignfolderSendreminderfrequency'] = $eEzsignfolderSendreminderfrequency;

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


