<?php
/**
 * EzsignbulksendCreateEzsignbulksendtransmissionV1Request
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
 * EzsignbulksendCreateEzsignbulksendtransmissionV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/ezsignbulksend/{pkiEzsignbulksendID}/createEzsignbulksendtransmission
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignbulksendCreateEzsignbulksendtransmissionV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksend-createEzsignbulksendtransmission-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiUserlogintypeID' => 'int',
        'fkiEzsigntsarequirementID' => 'int',
        'sEzsignbulksendtransmissionDescription' => 'string',
        'dtEzsigndocumentDuedate' => 'string',
        'eEzsignfolderSendreminderfrequency' => '\eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency',
        'tExtraMessage' => 'string',
        'sCsvBase64' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiUserlogintypeID' => null,
        'fkiEzsigntsarequirementID' => null,
        'sEzsignbulksendtransmissionDescription' => null,
        'dtEzsigndocumentDuedate' => null,
        'eEzsignfolderSendreminderfrequency' => null,
        'tExtraMessage' => null,
        'sCsvBase64' => 'byte'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiUserlogintypeID' => false,
		'fkiEzsigntsarequirementID' => false,
		'sEzsignbulksendtransmissionDescription' => false,
		'dtEzsigndocumentDuedate' => false,
		'eEzsignfolderSendreminderfrequency' => false,
		'tExtraMessage' => false,
		'sCsvBase64' => false
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
        'fkiUserlogintypeID' => 'fkiUserlogintypeID',
        'fkiEzsigntsarequirementID' => 'fkiEzsigntsarequirementID',
        'sEzsignbulksendtransmissionDescription' => 'sEzsignbulksendtransmissionDescription',
        'dtEzsigndocumentDuedate' => 'dtEzsigndocumentDuedate',
        'eEzsignfolderSendreminderfrequency' => 'eEzsignfolderSendreminderfrequency',
        'tExtraMessage' => 'tExtraMessage',
        'sCsvBase64' => 'sCsvBase64'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiUserlogintypeID' => 'setFkiUserlogintypeID',
        'fkiEzsigntsarequirementID' => 'setFkiEzsigntsarequirementID',
        'sEzsignbulksendtransmissionDescription' => 'setSEzsignbulksendtransmissionDescription',
        'dtEzsigndocumentDuedate' => 'setDtEzsigndocumentDuedate',
        'eEzsignfolderSendreminderfrequency' => 'setEEzsignfolderSendreminderfrequency',
        'tExtraMessage' => 'setTExtraMessage',
        'sCsvBase64' => 'setSCsvBase64'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiUserlogintypeID' => 'getFkiUserlogintypeID',
        'fkiEzsigntsarequirementID' => 'getFkiEzsigntsarequirementID',
        'sEzsignbulksendtransmissionDescription' => 'getSEzsignbulksendtransmissionDescription',
        'dtEzsigndocumentDuedate' => 'getDtEzsigndocumentDuedate',
        'eEzsignfolderSendreminderfrequency' => 'getEEzsignfolderSendreminderfrequency',
        'tExtraMessage' => 'getTExtraMessage',
        'sCsvBase64' => 'getSCsvBase64'
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
        $this->setIfExists('fkiUserlogintypeID', $data ?? [], null);
        $this->setIfExists('fkiEzsigntsarequirementID', $data ?? [], null);
        $this->setIfExists('sEzsignbulksendtransmissionDescription', $data ?? [], null);
        $this->setIfExists('dtEzsigndocumentDuedate', $data ?? [], null);
        $this->setIfExists('eEzsignfolderSendreminderfrequency', $data ?? [], null);
        $this->setIfExists('tExtraMessage', $data ?? [], null);
        $this->setIfExists('sCsvBase64', $data ?? [], null);
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

        if ($this->container['fkiUserlogintypeID'] === null) {
            $invalidProperties[] = "'fkiUserlogintypeID' can't be null";
        }
        if (($this->container['fkiUserlogintypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserlogintypeID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigntsarequirementID']) && ($this->container['fkiEzsigntsarequirementID'] > 3)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['fkiEzsigntsarequirementID']) && ($this->container['fkiEzsigntsarequirementID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsignbulksendtransmissionDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendtransmissionDescription' can't be null";
        }
        if ($this->container['dtEzsigndocumentDuedate'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentDuedate' can't be null";
        }
        if ($this->container['eEzsignfolderSendreminderfrequency'] === null) {
            $invalidProperties[] = "'eEzsignfolderSendreminderfrequency' can't be null";
        }
        if ($this->container['tExtraMessage'] === null) {
            $invalidProperties[] = "'tExtraMessage' can't be null";
        }
        if ($this->container['sCsvBase64'] === null) {
            $invalidProperties[] = "'sCsvBase64' can't be null";
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
     * Gets fkiUserlogintypeID
     *
     * @return int
     */
    public function getFkiUserlogintypeID()
    {
        return $this->container['fkiUserlogintypeID'];
    }

    /**
     * Sets fkiUserlogintypeID
     *
     * @param int $fkiUserlogintypeID The unique ID of the Userlogintype  Valid values:  |Value|Description|Detail| |-|-|-| |1|**Email Only**|The Ezsignsigner will receive a secure link by email| |2|**Email and phone or SMS**|The Ezsignsigner will receive a secure link by email and will need to authenticate using SMS or Phone call. **Additional fee applies**| |3|**Email and secret question**|The Ezsignsigner will receive a secure link by email and will need to authenticate using a predefined question and answer| |4|**In person only**|The Ezsignsigner will only be able to sign \"In-Person\" and there won't be any authentication. No email will be sent for invitation to sign. Make sure you evaluate the risk of signature denial and at minimum, we recommend you use a handwritten signature type| |5|**In person with phone or SMS**|The Ezsignsigner will only be able to sign \"In-Person\" and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**|
     *
     * @return self
     */
    public function setFkiUserlogintypeID($fkiUserlogintypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserlogintypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserlogintypeID cannot be null');
        //}

//        if (($fkiUserlogintypeID < 0)) {
        if (($fkiUserlogintypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserlogintypeID when calling EzsignbulksendCreateEzsignbulksendtransmissionV1Request., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserlogintypeID'] = $fkiUserlogintypeID;
        $this->container['fkiUserlogintypeID'] = (is_null($fkiUserlogintypeID) ? null : (int) $fkiUserlogintypeID);

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigntsarequirementID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntsarequirementID cannot be null');
        //}

//        if (($fkiEzsigntsarequirementID > 3)) {
        if (!is_null($fkiEzsigntsarequirementID) && ($fkiEzsigntsarequirementID > 3)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignbulksendCreateEzsignbulksendtransmissionV1Request., must be smaller than or equal to 3.');
        }
//        if (($fkiEzsigntsarequirementID < 1)) {
        if (!is_null($fkiEzsigntsarequirementID) && ($fkiEzsigntsarequirementID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignbulksendCreateEzsignbulksendtransmissionV1Request., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigntsarequirementID'] = $fkiEzsigntsarequirementID;
        $this->container['fkiEzsigntsarequirementID'] = (is_null($fkiEzsigntsarequirementID) ? null : (int) $fkiEzsigntsarequirementID);

        return $this;
    }

    /**
     * Gets sEzsignbulksendtransmissionDescription
     *
     * @return string
     */
    public function getSEzsignbulksendtransmissionDescription()
    {
        return is_null($this->container['sEzsignbulksendtransmissionDescription']) ? null : trim($this->container['sEzsignbulksendtransmissionDescription']);
    }

    /**
     * Sets sEzsignbulksendtransmissionDescription
     *
     * @param string $sEzsignbulksendtransmissionDescription The description of the Ezsignbulksendtransmission
     *
     * @return self
     */
    public function setSEzsignbulksendtransmissionDescription($sEzsignbulksendtransmissionDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignbulksendtransmissionDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignbulksendtransmissionDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignbulksendtransmissionDescription'] = $sEzsignbulksendtransmissionDescription;
        $this->container['sEzsignbulksendtransmissionDescription'] = (is_null($sEzsignbulksendtransmissionDescription) ? null : trim((string) $sEzsignbulksendtransmissionDescription));

        return $this;
    }

    /**
     * Gets dtEzsigndocumentDuedate
     *
     * @return string
     */
    public function getDtEzsigndocumentDuedate()
    {
        return is_null($this->container['dtEzsigndocumentDuedate']) ? null : trim($this->container['dtEzsigndocumentDuedate']);
    }

    /**
     * Sets dtEzsigndocumentDuedate
     *
     * @param string $dtEzsigndocumentDuedate The maximum date and time at which the Ezsigndocument can be signed.
     *
     * @return self
     */
    public function setDtEzsigndocumentDuedate($dtEzsigndocumentDuedate)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzsigndocumentDuedate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsigndocumentDuedate cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzsigndocumentDuedate'] = $dtEzsigndocumentDuedate;
        $this->container['dtEzsigndocumentDuedate'] = (is_null($dtEzsigndocumentDuedate) ? null : trim((string) $dtEzsigndocumentDuedate));

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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignfolderSendreminderfrequency)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfolderSendreminderfrequency cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignfolderSendreminderfrequency'] = $eEzsignfolderSendreminderfrequency;
        $this->container['eEzsignfolderSendreminderfrequency'] = $eEzsignfolderSendreminderfrequency;

        return $this;
    }

    /**
     * Gets tExtraMessage
     *
     * @return string
     */
    public function getTExtraMessage()
    {
        return is_null($this->container['tExtraMessage']) ? null : trim($this->container['tExtraMessage']);
    }

    /**
     * Sets tExtraMessage
     *
     * @param string $tExtraMessage A custom text message that will be added to the email sent.
     *
     * @return self
     */
    public function setTExtraMessage($tExtraMessage)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tExtraMessage)) {
            //throw new \InvalidArgumentException('non-nullable tExtraMessage cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tExtraMessage'] = $tExtraMessage;
        $this->container['tExtraMessage'] = (is_null($tExtraMessage) ? null : trim((string) $tExtraMessage));

        return $this;
    }

    /**
     * Gets sCsvBase64
     *
     * @return string
     */
    public function getSCsvBase64()
    {
        return $this->container['sCsvBase64'];
    }

    /**
     * Sets sCsvBase64
     *
     * @param string $sCsvBase64 The Base64 encoded binary content of the CSV file.
     *
     * @return self
     */
    public function setSCsvBase64($sCsvBase64)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCsvBase64)) {
            //throw new \InvalidArgumentException('non-nullable sCsvBase64 cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCsvBase64'] = $sCsvBase64;
        $this->container['sCsvBase64'] = (is_null($sCsvBase64) ? null : $sCsvBase64);

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


