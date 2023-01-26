<?php
/**
 * CommunicationResponseCompound
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
 * CommunicationResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Communication Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'communication-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCommunicationID' => 'int',
        'eCommunicationImportance' => '\eZmaxAPI\Model\FieldECommunicationImportance',
        'eCommunicationType' => '\eZmaxAPI\Model\FieldECommunicationType',
        'sCommunicationSubject' => 'string',
        'eCommunicationDirection' => '\eZmaxAPI\Model\ComputedECommunicationDirection',
        'iCommunicationrecipientCount' => 'int',
        'objContactFrom' => '\eZmaxAPI\Model\CustomContactNameResponse',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit',
        'aObjCommunicationattachment' => '\eZmaxAPI\Model\CommunicationattachmentResponseCompound[]',
        'aObjCommunicationrecipient' => '\eZmaxAPI\Model\CommunicationrecipientResponseCompound[]',
        'aObjCommunicationexternalrecipient' => '\eZmaxAPI\Model\CommunicationexternalrecipientResponseCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCommunicationID' => null,
        'eCommunicationImportance' => null,
        'eCommunicationType' => null,
        'sCommunicationSubject' => null,
        'eCommunicationDirection' => null,
        'iCommunicationrecipientCount' => null,
        'objContactFrom' => null,
        'objAudit' => null,
        'aObjCommunicationattachment' => null,
        'aObjCommunicationrecipient' => null,
        'aObjCommunicationexternalrecipient' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCommunicationID' => false,
		'eCommunicationImportance' => false,
		'eCommunicationType' => false,
		'sCommunicationSubject' => false,
		'eCommunicationDirection' => false,
		'iCommunicationrecipientCount' => false,
		'objContactFrom' => false,
		'objAudit' => false,
		'aObjCommunicationattachment' => false,
		'aObjCommunicationrecipient' => false,
		'aObjCommunicationexternalrecipient' => false
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
        'pkiCommunicationID' => 'pkiCommunicationID',
        'eCommunicationImportance' => 'eCommunicationImportance',
        'eCommunicationType' => 'eCommunicationType',
        'sCommunicationSubject' => 'sCommunicationSubject',
        'eCommunicationDirection' => 'eCommunicationDirection',
        'iCommunicationrecipientCount' => 'iCommunicationrecipientCount',
        'objContactFrom' => 'objContactFrom',
        'objAudit' => 'objAudit',
        'aObjCommunicationattachment' => 'a_objCommunicationattachment',
        'aObjCommunicationrecipient' => 'a_objCommunicationrecipient',
        'aObjCommunicationexternalrecipient' => 'a_objCommunicationexternalrecipient'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCommunicationID' => 'setPkiCommunicationID',
        'eCommunicationImportance' => 'setECommunicationImportance',
        'eCommunicationType' => 'setECommunicationType',
        'sCommunicationSubject' => 'setSCommunicationSubject',
        'eCommunicationDirection' => 'setECommunicationDirection',
        'iCommunicationrecipientCount' => 'setICommunicationrecipientCount',
        'objContactFrom' => 'setObjContactFrom',
        'objAudit' => 'setObjAudit',
        'aObjCommunicationattachment' => 'setAObjCommunicationattachment',
        'aObjCommunicationrecipient' => 'setAObjCommunicationrecipient',
        'aObjCommunicationexternalrecipient' => 'setAObjCommunicationexternalrecipient'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCommunicationID' => 'getPkiCommunicationID',
        'eCommunicationImportance' => 'getECommunicationImportance',
        'eCommunicationType' => 'getECommunicationType',
        'sCommunicationSubject' => 'getSCommunicationSubject',
        'eCommunicationDirection' => 'getECommunicationDirection',
        'iCommunicationrecipientCount' => 'getICommunicationrecipientCount',
        'objContactFrom' => 'getObjContactFrom',
        'objAudit' => 'getObjAudit',
        'aObjCommunicationattachment' => 'getAObjCommunicationattachment',
        'aObjCommunicationrecipient' => 'getAObjCommunicationrecipient',
        'aObjCommunicationexternalrecipient' => 'getAObjCommunicationexternalrecipient'
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
        $this->setIfExists('pkiCommunicationID', $data ?? [], null);
        $this->setIfExists('eCommunicationImportance', $data ?? [], null);
        $this->setIfExists('eCommunicationType', $data ?? [], null);
        $this->setIfExists('sCommunicationSubject', $data ?? [], null);
        $this->setIfExists('eCommunicationDirection', $data ?? [], null);
        $this->setIfExists('iCommunicationrecipientCount', $data ?? [], null);
        $this->setIfExists('objContactFrom', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
        $this->setIfExists('aObjCommunicationattachment', $data ?? [], null);
        $this->setIfExists('aObjCommunicationrecipient', $data ?? [], null);
        $this->setIfExists('aObjCommunicationexternalrecipient', $data ?? [], null);
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

        if ($this->container['pkiCommunicationID'] === null) {
            $invalidProperties[] = "'pkiCommunicationID' can't be null";
        }
        if (($this->container['pkiCommunicationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiCommunicationID', must be bigger than or equal to 0.";
        }

        if ($this->container['eCommunicationImportance'] === null) {
            $invalidProperties[] = "'eCommunicationImportance' can't be null";
        }
        if ($this->container['eCommunicationType'] === null) {
            $invalidProperties[] = "'eCommunicationType' can't be null";
        }
        if ($this->container['sCommunicationSubject'] === null) {
            $invalidProperties[] = "'sCommunicationSubject' can't be null";
        }
        if ($this->container['eCommunicationDirection'] === null) {
            $invalidProperties[] = "'eCommunicationDirection' can't be null";
        }
        if ($this->container['iCommunicationrecipientCount'] === null) {
            $invalidProperties[] = "'iCommunicationrecipientCount' can't be null";
        }
        if ($this->container['objContactFrom'] === null) {
            $invalidProperties[] = "'objContactFrom' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
        }
        if ($this->container['aObjCommunicationattachment'] === null) {
            $invalidProperties[] = "'aObjCommunicationattachment' can't be null";
        }
        if ($this->container['aObjCommunicationrecipient'] === null) {
            $invalidProperties[] = "'aObjCommunicationrecipient' can't be null";
        }
        if ($this->container['aObjCommunicationexternalrecipient'] === null) {
            $invalidProperties[] = "'aObjCommunicationexternalrecipient' can't be null";
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
     * Gets pkiCommunicationID
     *
     * @return int
     */
    public function getPkiCommunicationID()
    {
        return $this->container['pkiCommunicationID'];
    }

    /**
     * Sets pkiCommunicationID
     *
     * @param int $pkiCommunicationID The unique ID of the Communication.
     *
     * @return self
     */
    public function setPkiCommunicationID($pkiCommunicationID)
    {

        if (($pkiCommunicationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiCommunicationID when calling CommunicationResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCommunicationID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCommunicationID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCommunicationID'] = $pkiCommunicationID;
        $this->container['pkiCommunicationID'] = (is_null($pkiCommunicationID) ? null : (int) $pkiCommunicationID);

        return $this;
    }

    /**
     * Gets eCommunicationImportance
     *
     * @return \eZmaxAPI\Model\FieldECommunicationImportance
     */
    public function getECommunicationImportance()
    {
        return $this->container['eCommunicationImportance'];
    }

    /**
     * Sets eCommunicationImportance
     *
     * @param \eZmaxAPI\Model\FieldECommunicationImportance $eCommunicationImportance eCommunicationImportance
     *
     * @return self
     */
    public function setECommunicationImportance($eCommunicationImportance)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCommunicationImportance)) {
            //throw new \InvalidArgumentException('non-nullable eCommunicationImportance cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCommunicationImportance'] = $eCommunicationImportance;
        $this->container['eCommunicationImportance'] = $eCommunicationImportance;

        return $this;
    }

    /**
     * Gets eCommunicationType
     *
     * @return \eZmaxAPI\Model\FieldECommunicationType
     */
    public function getECommunicationType()
    {
        return $this->container['eCommunicationType'];
    }

    /**
     * Sets eCommunicationType
     *
     * @param \eZmaxAPI\Model\FieldECommunicationType $eCommunicationType eCommunicationType
     *
     * @return self
     */
    public function setECommunicationType($eCommunicationType)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCommunicationType)) {
            //throw new \InvalidArgumentException('non-nullable eCommunicationType cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCommunicationType'] = $eCommunicationType;
        $this->container['eCommunicationType'] = $eCommunicationType;

        return $this;
    }

    /**
     * Gets sCommunicationSubject
     *
     * @return string
     */
    public function getSCommunicationSubject()
    {
        return $this->container['sCommunicationSubject'];
    }

    /**
     * Sets sCommunicationSubject
     *
     * @param string $sCommunicationSubject The subject of the Communication
     *
     * @return self
     */
    public function setSCommunicationSubject($sCommunicationSubject)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCommunicationSubject)) {
            //throw new \InvalidArgumentException('non-nullable sCommunicationSubject cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCommunicationSubject'] = $sCommunicationSubject;
        $this->container['sCommunicationSubject'] = (is_null($sCommunicationSubject) ? null : (string) $sCommunicationSubject);

        return $this;
    }

    /**
     * Gets eCommunicationDirection
     *
     * @return \eZmaxAPI\Model\ComputedECommunicationDirection
     */
    public function getECommunicationDirection()
    {
        return $this->container['eCommunicationDirection'];
    }

    /**
     * Sets eCommunicationDirection
     *
     * @param \eZmaxAPI\Model\ComputedECommunicationDirection $eCommunicationDirection eCommunicationDirection
     *
     * @return self
     */
    public function setECommunicationDirection($eCommunicationDirection)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCommunicationDirection)) {
            //throw new \InvalidArgumentException('non-nullable eCommunicationDirection cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCommunicationDirection'] = $eCommunicationDirection;
        $this->container['eCommunicationDirection'] = $eCommunicationDirection;

        return $this;
    }

    /**
     * Gets iCommunicationrecipientCount
     *
     * @return int
     */
    public function getICommunicationrecipientCount()
    {
        return $this->container['iCommunicationrecipientCount'];
    }

    /**
     * Sets iCommunicationrecipientCount
     *
     * @param int $iCommunicationrecipientCount The count of Communicationrecipient
     *
     * @return self
     */
    public function setICommunicationrecipientCount($iCommunicationrecipientCount)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iCommunicationrecipientCount)) {
            //throw new \InvalidArgumentException('non-nullable iCommunicationrecipientCount cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iCommunicationrecipientCount'] = $iCommunicationrecipientCount;
        $this->container['iCommunicationrecipientCount'] = (is_null($iCommunicationrecipientCount) ? null : (int) $iCommunicationrecipientCount);

        return $this;
    }

    /**
     * Gets objContactFrom
     *
     * @return \eZmaxAPI\Model\CustomContactNameResponse
     */
    public function getObjContactFrom()
    {
        return $this->container['objContactFrom'];
    }

    /**
     * Sets objContactFrom
     *
     * @param \eZmaxAPI\Model\CustomContactNameResponse $objContactFrom objContactFrom
     *
     * @return self
     */
    public function setObjContactFrom($objContactFrom)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objContactFrom)) {
            //throw new \InvalidArgumentException('non-nullable objContactFrom cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objContactFrom'] = $objContactFrom;
        $this->container['objContactFrom'] = $objContactFrom;

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
     * Gets aObjCommunicationattachment
     *
     * @return \eZmaxAPI\Model\CommunicationattachmentResponseCompound[]
     */
    public function getAObjCommunicationattachment()
    {
        return $this->container['aObjCommunicationattachment'];
    }

    /**
     * Sets aObjCommunicationattachment
     *
     * @param \eZmaxAPI\Model\CommunicationattachmentResponseCompound[] $aObjCommunicationattachment aObjCommunicationattachment
     *
     * @return self
     */
    public function setAObjCommunicationattachment($aObjCommunicationattachment)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjCommunicationattachment)) {
            //throw new \InvalidArgumentException('non-nullable aObjCommunicationattachment cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjCommunicationattachment'] = $aObjCommunicationattachment;
        $this->container['aObjCommunicationattachment'] = $aObjCommunicationattachment;

        return $this;
    }

    /**
     * Gets aObjCommunicationrecipient
     *
     * @return \eZmaxAPI\Model\CommunicationrecipientResponseCompound[]
     */
    public function getAObjCommunicationrecipient()
    {
        return $this->container['aObjCommunicationrecipient'];
    }

    /**
     * Sets aObjCommunicationrecipient
     *
     * @param \eZmaxAPI\Model\CommunicationrecipientResponseCompound[] $aObjCommunicationrecipient aObjCommunicationrecipient
     *
     * @return self
     */
    public function setAObjCommunicationrecipient($aObjCommunicationrecipient)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjCommunicationrecipient)) {
            //throw new \InvalidArgumentException('non-nullable aObjCommunicationrecipient cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjCommunicationrecipient'] = $aObjCommunicationrecipient;
        $this->container['aObjCommunicationrecipient'] = $aObjCommunicationrecipient;

        return $this;
    }

    /**
     * Gets aObjCommunicationexternalrecipient
     *
     * @return \eZmaxAPI\Model\CommunicationexternalrecipientResponseCompound[]
     */
    public function getAObjCommunicationexternalrecipient()
    {
        return $this->container['aObjCommunicationexternalrecipient'];
    }

    /**
     * Sets aObjCommunicationexternalrecipient
     *
     * @param \eZmaxAPI\Model\CommunicationexternalrecipientResponseCompound[] $aObjCommunicationexternalrecipient aObjCommunicationexternalrecipient
     *
     * @return self
     */
    public function setAObjCommunicationexternalrecipient($aObjCommunicationexternalrecipient)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjCommunicationexternalrecipient)) {
            //throw new \InvalidArgumentException('non-nullable aObjCommunicationexternalrecipient cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjCommunicationexternalrecipient'] = $aObjCommunicationexternalrecipient;
        $this->container['aObjCommunicationexternalrecipient'] = $aObjCommunicationexternalrecipient;

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


