<?php
/**
 * EzsignfolderResponseCompound
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
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * @implements \ArrayAccess<string, mixed>
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
        'pkiEzsignfolderID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'sEzsignfoldertypeNameX' => 'string',
        'fkiBillingentityinternalID' => 'int',
        'sBillingentityinternalDescriptionX' => 'string',
        'fkiEzsigntsarequirementID' => 'int',
        'sEzsigntsarequirementDescriptionX' => 'string',
        'sEzsignfolderDescription' => 'string',
        'tEzsignfolderNote' => 'string',
        'bEzsignfolderIsdisposable' => 'bool',
        'eEzsignfolderSendreminderfrequency' => '\eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency',
        'dtEzsignfolderDelayedsenddate' => 'string',
        'dtEzsignfolderDuedate' => 'string',
        'dtEzsignfolderSentdate' => 'string',
        'dtEzsignfolderScheduledarchive' => 'string',
        'dtEzsignfolderScheduleddispose' => 'string',
        'eEzsignfolderStep' => '\eZmaxAPI\Model\FieldEEzsignfolderStep',
        'dtEzsignfolderClose' => 'string',
        'tEzsignfolderMessage' => 'string',
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
        'pkiEzsignfolderID' => null,
        'fkiEzsignfoldertypeID' => null,
        'sEzsignfoldertypeNameX' => null,
        'fkiBillingentityinternalID' => null,
        'sBillingentityinternalDescriptionX' => null,
        'fkiEzsigntsarequirementID' => null,
        'sEzsigntsarequirementDescriptionX' => null,
        'sEzsignfolderDescription' => null,
        'tEzsignfolderNote' => null,
        'bEzsignfolderIsdisposable' => null,
        'eEzsignfolderSendreminderfrequency' => null,
        'dtEzsignfolderDelayedsenddate' => null,
        'dtEzsignfolderDuedate' => null,
        'dtEzsignfolderSentdate' => null,
        'dtEzsignfolderScheduledarchive' => null,
        'dtEzsignfolderScheduleddispose' => null,
        'eEzsignfolderStep' => null,
        'dtEzsignfolderClose' => null,
        'tEzsignfolderMessage' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignfolderID' => false,
		'fkiEzsignfoldertypeID' => false,
		'sEzsignfoldertypeNameX' => false,
		'fkiBillingentityinternalID' => false,
		'sBillingentityinternalDescriptionX' => false,
		'fkiEzsigntsarequirementID' => false,
		'sEzsigntsarequirementDescriptionX' => false,
		'sEzsignfolderDescription' => false,
		'tEzsignfolderNote' => false,
		'bEzsignfolderIsdisposable' => false,
		'eEzsignfolderSendreminderfrequency' => false,
		'dtEzsignfolderDelayedsenddate' => false,
		'dtEzsignfolderDuedate' => false,
		'dtEzsignfolderSentdate' => false,
		'dtEzsignfolderScheduledarchive' => false,
		'dtEzsignfolderScheduleddispose' => false,
		'eEzsignfolderStep' => false,
		'dtEzsignfolderClose' => false,
		'tEzsignfolderMessage' => false,
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
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'fkiBillingentityinternalID' => 'fkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'sBillingentityinternalDescriptionX',
        'fkiEzsigntsarequirementID' => 'fkiEzsigntsarequirementID',
        'sEzsigntsarequirementDescriptionX' => 'sEzsigntsarequirementDescriptionX',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'tEzsignfolderNote' => 'tEzsignfolderNote',
        'bEzsignfolderIsdisposable' => 'bEzsignfolderIsdisposable',
        'eEzsignfolderSendreminderfrequency' => 'eEzsignfolderSendreminderfrequency',
        'dtEzsignfolderDelayedsenddate' => 'dtEzsignfolderDelayedsenddate',
        'dtEzsignfolderDuedate' => 'dtEzsignfolderDuedate',
        'dtEzsignfolderSentdate' => 'dtEzsignfolderSentdate',
        'dtEzsignfolderScheduledarchive' => 'dtEzsignfolderScheduledarchive',
        'dtEzsignfolderScheduleddispose' => 'dtEzsignfolderScheduleddispose',
        'eEzsignfolderStep' => 'eEzsignfolderStep',
        'dtEzsignfolderClose' => 'dtEzsignfolderClose',
        'tEzsignfolderMessage' => 'tEzsignfolderMessage',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'fkiBillingentityinternalID' => 'setFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'setSBillingentityinternalDescriptionX',
        'fkiEzsigntsarequirementID' => 'setFkiEzsigntsarequirementID',
        'sEzsigntsarequirementDescriptionX' => 'setSEzsigntsarequirementDescriptionX',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'tEzsignfolderNote' => 'setTEzsignfolderNote',
        'bEzsignfolderIsdisposable' => 'setBEzsignfolderIsdisposable',
        'eEzsignfolderSendreminderfrequency' => 'setEEzsignfolderSendreminderfrequency',
        'dtEzsignfolderDelayedsenddate' => 'setDtEzsignfolderDelayedsenddate',
        'dtEzsignfolderDuedate' => 'setDtEzsignfolderDuedate',
        'dtEzsignfolderSentdate' => 'setDtEzsignfolderSentdate',
        'dtEzsignfolderScheduledarchive' => 'setDtEzsignfolderScheduledarchive',
        'dtEzsignfolderScheduleddispose' => 'setDtEzsignfolderScheduleddispose',
        'eEzsignfolderStep' => 'setEEzsignfolderStep',
        'dtEzsignfolderClose' => 'setDtEzsignfolderClose',
        'tEzsignfolderMessage' => 'setTEzsignfolderMessage',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'fkiBillingentityinternalID' => 'getFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'getSBillingentityinternalDescriptionX',
        'fkiEzsigntsarequirementID' => 'getFkiEzsigntsarequirementID',
        'sEzsigntsarequirementDescriptionX' => 'getSEzsigntsarequirementDescriptionX',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'tEzsignfolderNote' => 'getTEzsignfolderNote',
        'bEzsignfolderIsdisposable' => 'getBEzsignfolderIsdisposable',
        'eEzsignfolderSendreminderfrequency' => 'getEEzsignfolderSendreminderfrequency',
        'dtEzsignfolderDelayedsenddate' => 'getDtEzsignfolderDelayedsenddate',
        'dtEzsignfolderDuedate' => 'getDtEzsignfolderDuedate',
        'dtEzsignfolderSentdate' => 'getDtEzsignfolderSentdate',
        'dtEzsignfolderScheduledarchive' => 'getDtEzsignfolderScheduledarchive',
        'dtEzsignfolderScheduleddispose' => 'getDtEzsignfolderScheduleddispose',
        'eEzsignfolderStep' => 'getEEzsignfolderStep',
        'dtEzsignfolderClose' => 'getDtEzsignfolderClose',
        'tEzsignfolderMessage' => 'getTEzsignfolderMessage',
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
        $this->setIfExists('pkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('fkiBillingentityinternalID', $data ?? [], null);
        $this->setIfExists('sBillingentityinternalDescriptionX', $data ?? [], null);
        $this->setIfExists('fkiEzsigntsarequirementID', $data ?? [], null);
        $this->setIfExists('sEzsigntsarequirementDescriptionX', $data ?? [], null);
        $this->setIfExists('sEzsignfolderDescription', $data ?? [], null);
        $this->setIfExists('tEzsignfolderNote', $data ?? [], null);
        $this->setIfExists('bEzsignfolderIsdisposable', $data ?? [], null);
        $this->setIfExists('eEzsignfolderSendreminderfrequency', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderDelayedsenddate', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderDuedate', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderSentdate', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderScheduledarchive', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderScheduleddispose', $data ?? [], null);
        $this->setIfExists('eEzsignfolderStep', $data ?? [], null);
        $this->setIfExists('dtEzsignfolderClose', $data ?? [], null);
        $this->setIfExists('tEzsignfolderMessage', $data ?? [], null);
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

        if ($this->container['pkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'pkiEzsignfolderID' can't be null";
        }
        if (($this->container['pkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['fkiBillingentityinternalID'] === null) {
            $invalidProperties[] = "'fkiBillingentityinternalID' can't be null";
        }
        if (($this->container['fkiBillingentityinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiBillingentityinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['sBillingentityinternalDescriptionX'] === null) {
            $invalidProperties[] = "'sBillingentityinternalDescriptionX' can't be null";
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

        if ($this->container['sEzsigntsarequirementDescriptionX'] === null) {
            $invalidProperties[] = "'sEzsigntsarequirementDescriptionX' can't be null";
        }
        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
        if ($this->container['tEzsignfolderNote'] === null) {
            $invalidProperties[] = "'tEzsignfolderNote' can't be null";
        }
        if ($this->container['bEzsignfolderIsdisposable'] === null) {
            $invalidProperties[] = "'bEzsignfolderIsdisposable' can't be null";
        }
        if ($this->container['eEzsignfolderSendreminderfrequency'] === null) {
            $invalidProperties[] = "'eEzsignfolderSendreminderfrequency' can't be null";
        }
        if ($this->container['eEzsignfolderStep'] === null) {
            $invalidProperties[] = "'eEzsignfolderStep' can't be null";
        }
        if ($this->container['tEzsignfolderMessage'] === null) {
            $invalidProperties[] = "'tEzsignfolderMessage' can't be null";
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

        if (($pkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignfolderID when calling EzsignfolderResponseCompound., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignfolderResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string
     */
    public function getSEzsignfoldertypeNameX()
    {
        return $this->container['sEzsignfoldertypeNameX'];
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {

        //if (is_null($sEzsignfoldertypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfoldertypeNameX cannot be null');
        //}
        $this->container['sEzsignfoldertypeNameX'] = (is_null($sEzsignfoldertypeNameX) ? null : (string) $sEzsignfoldertypeNameX);

        return $this;
    }

    /**
     * Gets fkiBillingentityinternalID
     *
     * @return int
     */
    public function getFkiBillingentityinternalID()
    {
        return $this->container['fkiBillingentityinternalID'];
    }

    /**
     * Sets fkiBillingentityinternalID
     *
     * @param int $fkiBillingentityinternalID The unique ID of the Billingentityinternal.
     *
     * @return self
     */
    public function setFkiBillingentityinternalID($fkiBillingentityinternalID)
    {

        if (($fkiBillingentityinternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiBillingentityinternalID when calling EzsignfolderResponseCompound., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiBillingentityinternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBillingentityinternalID cannot be null');
        //}
        $this->container['fkiBillingentityinternalID'] = (is_null($fkiBillingentityinternalID) ? null : (int) $fkiBillingentityinternalID);

        return $this;
    }

    /**
     * Gets sBillingentityinternalDescriptionX
     *
     * @return string
     */
    public function getSBillingentityinternalDescriptionX()
    {
        return $this->container['sBillingentityinternalDescriptionX'];
    }

    /**
     * Sets sBillingentityinternalDescriptionX
     *
     * @param string $sBillingentityinternalDescriptionX The description of the Billingentityinternal in the language of the requester
     *
     * @return self
     */
    public function setSBillingentityinternalDescriptionX($sBillingentityinternalDescriptionX)
    {

        //if (is_null($sBillingentityinternalDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sBillingentityinternalDescriptionX cannot be null');
        //}
        $this->container['sBillingentityinternalDescriptionX'] = (is_null($sBillingentityinternalDescriptionX) ? null : (string) $sBillingentityinternalDescriptionX);

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


        //if (is_null($fkiEzsigntsarequirementID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigntsarequirementID cannot be null');
        //}
        $this->container['fkiEzsigntsarequirementID'] = (is_null($fkiEzsigntsarequirementID) ? null : (int) $fkiEzsigntsarequirementID);

        return $this;
    }

    /**
     * Gets sEzsigntsarequirementDescriptionX
     *
     * @return string
     */
    public function getSEzsigntsarequirementDescriptionX()
    {
        return $this->container['sEzsigntsarequirementDescriptionX'];
    }

    /**
     * Sets sEzsigntsarequirementDescriptionX
     *
     * @param string $sEzsigntsarequirementDescriptionX The description of the Ezsigntsarequirement in the language of the requester
     *
     * @return self
     */
    public function setSEzsigntsarequirementDescriptionX($sEzsigntsarequirementDescriptionX)
    {

        //if (is_null($sEzsigntsarequirementDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntsarequirementDescriptionX cannot be null');
        //}
        $this->container['sEzsigntsarequirementDescriptionX'] = (is_null($sEzsigntsarequirementDescriptionX) ? null : (string) $sEzsigntsarequirementDescriptionX);

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
     * Gets bEzsignfolderIsdisposable
     *
     * @return bool
     */
    public function getBEzsignfolderIsdisposable()
    {
        return $this->container['bEzsignfolderIsdisposable'];
    }

    /**
     * Sets bEzsignfolderIsdisposable
     *
     * @param bool $bEzsignfolderIsdisposable If the Ezsigndocument can be disposed
     *
     * @return self
     */
    public function setBEzsignfolderIsdisposable($bEzsignfolderIsdisposable)
    {

        //if (is_null($bEzsignfolderIsdisposable)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfolderIsdisposable cannot be null');
        //}
        $this->container['bEzsignfolderIsdisposable'] = (is_null($bEzsignfolderIsdisposable) ? null : (bool) $bEzsignfolderIsdisposable);

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
     * Gets dtEzsignfolderDelayedsenddate
     *
     * @return string|null
     */
    public function getDtEzsignfolderDelayedsenddate()
    {
        return $this->container['dtEzsignfolderDelayedsenddate'];
    }

    /**
     * Sets dtEzsignfolderDelayedsenddate
     *
     * @param string|null $dtEzsignfolderDelayedsenddate The date and time at which the Ezsignfolder will be sent in the future.
     *
     * @return self
     */
    public function setDtEzsignfolderDelayedsenddate($dtEzsignfolderDelayedsenddate)
    {

        //if (is_null($dtEzsignfolderDelayedsenddate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderDelayedsenddate cannot be null');
        //}
        $this->container['dtEzsignfolderDelayedsenddate'] = (is_null($dtEzsignfolderDelayedsenddate) ? null : (string) $dtEzsignfolderDelayedsenddate);

        return $this;
    }

    /**
     * Gets dtEzsignfolderDuedate
     *
     * @return string|null
     */
    public function getDtEzsignfolderDuedate()
    {
        return $this->container['dtEzsignfolderDuedate'];
    }

    /**
     * Sets dtEzsignfolderDuedate
     *
     * @param string|null $dtEzsignfolderDuedate The maximum date and time at which the Ezsignfolder can be signed.
     *
     * @return self
     */
    public function setDtEzsignfolderDuedate($dtEzsignfolderDuedate)
    {

        //if (is_null($dtEzsignfolderDuedate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderDuedate cannot be null');
        //}
        $this->container['dtEzsignfolderDuedate'] = (is_null($dtEzsignfolderDuedate) ? null : (string) $dtEzsignfolderDuedate);

        return $this;
    }

    /**
     * Gets dtEzsignfolderSentdate
     *
     * @return string|null
     */
    public function getDtEzsignfolderSentdate()
    {
        return $this->container['dtEzsignfolderSentdate'];
    }

    /**
     * Sets dtEzsignfolderSentdate
     *
     * @param string|null $dtEzsignfolderSentdate The date and time at which the Ezsignfolder was sent the last time.
     *
     * @return self
     */
    public function setDtEzsignfolderSentdate($dtEzsignfolderSentdate)
    {

        //if (is_null($dtEzsignfolderSentdate)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderSentdate cannot be null');
        //}
        $this->container['dtEzsignfolderSentdate'] = (is_null($dtEzsignfolderSentdate) ? null : (string) $dtEzsignfolderSentdate);

        return $this;
    }

    /**
     * Gets dtEzsignfolderScheduledarchive
     *
     * @return string|null
     */
    public function getDtEzsignfolderScheduledarchive()
    {
        return $this->container['dtEzsignfolderScheduledarchive'];
    }

    /**
     * Sets dtEzsignfolderScheduledarchive
     *
     * @param string|null $dtEzsignfolderScheduledarchive The scheduled date and time at which the Ezsignfolder should be archived.
     *
     * @return self
     */
    public function setDtEzsignfolderScheduledarchive($dtEzsignfolderScheduledarchive)
    {

        //if (is_null($dtEzsignfolderScheduledarchive)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderScheduledarchive cannot be null');
        //}
        $this->container['dtEzsignfolderScheduledarchive'] = (is_null($dtEzsignfolderScheduledarchive) ? null : (string) $dtEzsignfolderScheduledarchive);

        return $this;
    }

    /**
     * Gets dtEzsignfolderScheduleddispose
     *
     * @return string|null
     */
    public function getDtEzsignfolderScheduleddispose()
    {
        return $this->container['dtEzsignfolderScheduleddispose'];
    }

    /**
     * Sets dtEzsignfolderScheduleddispose
     *
     * @param string|null $dtEzsignfolderScheduleddispose The scheduled date at which the Ezsignfolder should be Disposed.
     *
     * @return self
     */
    public function setDtEzsignfolderScheduleddispose($dtEzsignfolderScheduleddispose)
    {

        //if (is_null($dtEzsignfolderScheduleddispose)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderScheduleddispose cannot be null');
        //}
        $this->container['dtEzsignfolderScheduleddispose'] = (is_null($dtEzsignfolderScheduleddispose) ? null : (string) $dtEzsignfolderScheduleddispose);

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

        //if (is_null($eEzsignfolderStep)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfolderStep cannot be null');
        //}
        $this->container['eEzsignfolderStep'] = $eEzsignfolderStep;

        return $this;
    }

    /**
     * Gets dtEzsignfolderClose
     *
     * @return string|null
     */
    public function getDtEzsignfolderClose()
    {
        return $this->container['dtEzsignfolderClose'];
    }

    /**
     * Sets dtEzsignfolderClose
     *
     * @param string|null $dtEzsignfolderClose The date and time at which the Ezsignfolder was closed. Either by applying the last signature or by completing it prematurely.
     *
     * @return self
     */
    public function setDtEzsignfolderClose($dtEzsignfolderClose)
    {

        //if (is_null($dtEzsignfolderClose)) {
            //throw new \InvalidArgumentException('non-nullable dtEzsignfolderClose cannot be null');
        //}
        $this->container['dtEzsignfolderClose'] = (is_null($dtEzsignfolderClose) ? null : (string) $dtEzsignfolderClose);

        return $this;
    }

    /**
     * Gets tEzsignfolderMessage
     *
     * @return string
     */
    public function getTEzsignfolderMessage()
    {
        return $this->container['tEzsignfolderMessage'];
    }

    /**
     * Sets tEzsignfolderMessage
     *
     * @param string $tEzsignfolderMessage A custom text message that will be added to the email sent.
     *
     * @return self
     */
    public function setTEzsignfolderMessage($tEzsignfolderMessage)
    {

        //if (is_null($tEzsignfolderMessage)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignfolderMessage cannot be null');
        //}
        $this->container['tEzsignfolderMessage'] = (is_null($tEzsignfolderMessage) ? null : (string) $tEzsignfolderMessage);

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

        //if (is_null($objAudit)) {
            //throw new \InvalidArgumentException('non-nullable objAudit cannot be null');
        //}
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


