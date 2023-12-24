<?php
/**
 * CommunicationRequestCompound
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
 * OpenAPI Generator version: 7.2.0
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
 * CommunicationRequestCompound Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/communication
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'communication-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCommunicationID' => 'int',
        'eCommunicationImportance' => '\eZmaxAPI\Model\FieldECommunicationImportance',
        'eCommunicationType' => '\eZmaxAPI\Model\FieldECommunicationType',
        'objCommunicationsender' => '\eZmaxAPI\Model\CustomCommunicationsenderRequest',
        'sCommunicationSubject' => 'string',
        'tCommunicationBody' => 'string',
        'bCommunicationPrivate' => 'bool',
        'eCommunicationAttachmenttype' => 'string',
        'iCommunicationAttachmentlinkexpiration' => 'int',
        'bCommunicationReadreceipt' => 'bool',
        'aObjCommunicationattachment' => '\eZmaxAPI\Model\CustomCommunicationattachmentRequest[]',
        'aObjCommunicationrecipient' => '\eZmaxAPI\Model\CommunicationrecipientRequestCompound[]',
        'aObjCommunicationreference' => '\eZmaxAPI\Model\CommunicationreferenceRequestCompound[]',
        'aObjCommunicationexternalrecipient' => '\eZmaxAPI\Model\CommunicationexternalrecipientRequestCompound[]'
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
        'objCommunicationsender' => null,
        'sCommunicationSubject' => null,
        'tCommunicationBody' => null,
        'bCommunicationPrivate' => null,
        'eCommunicationAttachmenttype' => null,
        'iCommunicationAttachmentlinkexpiration' => null,
        'bCommunicationReadreceipt' => null,
        'aObjCommunicationattachment' => null,
        'aObjCommunicationrecipient' => null,
        'aObjCommunicationreference' => null,
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
		'objCommunicationsender' => false,
		'sCommunicationSubject' => false,
		'tCommunicationBody' => false,
		'bCommunicationPrivate' => false,
		'eCommunicationAttachmenttype' => false,
		'iCommunicationAttachmentlinkexpiration' => false,
		'bCommunicationReadreceipt' => false,
		'aObjCommunicationattachment' => false,
		'aObjCommunicationrecipient' => false,
		'aObjCommunicationreference' => false,
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
        'objCommunicationsender' => 'objCommunicationsender',
        'sCommunicationSubject' => 'sCommunicationSubject',
        'tCommunicationBody' => 'tCommunicationBody',
        'bCommunicationPrivate' => 'bCommunicationPrivate',
        'eCommunicationAttachmenttype' => 'eCommunicationAttachmenttype',
        'iCommunicationAttachmentlinkexpiration' => 'iCommunicationAttachmentlinkexpiration',
        'bCommunicationReadreceipt' => 'bCommunicationReadreceipt',
        'aObjCommunicationattachment' => 'a_objCommunicationattachment',
        'aObjCommunicationrecipient' => 'a_objCommunicationrecipient',
        'aObjCommunicationreference' => 'a_objCommunicationreference',
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
        'objCommunicationsender' => 'setObjCommunicationsender',
        'sCommunicationSubject' => 'setSCommunicationSubject',
        'tCommunicationBody' => 'setTCommunicationBody',
        'bCommunicationPrivate' => 'setBCommunicationPrivate',
        'eCommunicationAttachmenttype' => 'setECommunicationAttachmenttype',
        'iCommunicationAttachmentlinkexpiration' => 'setICommunicationAttachmentlinkexpiration',
        'bCommunicationReadreceipt' => 'setBCommunicationReadreceipt',
        'aObjCommunicationattachment' => 'setAObjCommunicationattachment',
        'aObjCommunicationrecipient' => 'setAObjCommunicationrecipient',
        'aObjCommunicationreference' => 'setAObjCommunicationreference',
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
        'objCommunicationsender' => 'getObjCommunicationsender',
        'sCommunicationSubject' => 'getSCommunicationSubject',
        'tCommunicationBody' => 'getTCommunicationBody',
        'bCommunicationPrivate' => 'getBCommunicationPrivate',
        'eCommunicationAttachmenttype' => 'getECommunicationAttachmenttype',
        'iCommunicationAttachmentlinkexpiration' => 'getICommunicationAttachmentlinkexpiration',
        'bCommunicationReadreceipt' => 'getBCommunicationReadreceipt',
        'aObjCommunicationattachment' => 'getAObjCommunicationattachment',
        'aObjCommunicationrecipient' => 'getAObjCommunicationrecipient',
        'aObjCommunicationreference' => 'getAObjCommunicationreference',
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

    public const E_COMMUNICATION_ATTACHMENTTYPE_ATTACHMENT = 'Attachment';
    public const E_COMMUNICATION_ATTACHMENTTYPE_URL = 'Url';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getECommunicationAttachmenttypeAllowableValues()
    {
        return [
            self::E_COMMUNICATION_ATTACHMENTTYPE_ATTACHMENT,
            self::E_COMMUNICATION_ATTACHMENTTYPE_URL,
        ];
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
        $this->setIfExists('objCommunicationsender', $data ?? [], null);
        $this->setIfExists('sCommunicationSubject', $data ?? [], null);
        $this->setIfExists('tCommunicationBody', $data ?? [], null);
        $this->setIfExists('bCommunicationPrivate', $data ?? [], null);
        $this->setIfExists('eCommunicationAttachmenttype', $data ?? [], null);
        $this->setIfExists('iCommunicationAttachmentlinkexpiration', $data ?? [], null);
        $this->setIfExists('bCommunicationReadreceipt', $data ?? [], null);
        $this->setIfExists('aObjCommunicationattachment', $data ?? [], null);
        $this->setIfExists('aObjCommunicationrecipient', $data ?? [], null);
        $this->setIfExists('aObjCommunicationreference', $data ?? [], null);
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

        if (!is_null($this->container['pkiCommunicationID']) && ($this->container['pkiCommunicationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiCommunicationID', must be bigger than or equal to 0.";
        }

        if ($this->container['eCommunicationType'] === null) {
            $invalidProperties[] = "'eCommunicationType' can't be null";
        }
//        if (!is_null($this->container['sCommunicationSubject']) && !preg_match("/^.{0,200}$/", $this->container['sCommunicationSubject'])) {
        if (!is_null($this->container['sCommunicationSubject']) && !preg_match("/(*UTF8)^.{0,200}$/", $this->container['sCommunicationSubject'])) {
            $invalidProperties[] = "invalid value for 'sCommunicationSubject', must be conform to the pattern /^.{0,200}$/.";
        }

        if ($this->container['tCommunicationBody'] === null) {
            $invalidProperties[] = "'tCommunicationBody' can't be null";
        }
        if ($this->container['bCommunicationPrivate'] === null) {
            $invalidProperties[] = "'bCommunicationPrivate' can't be null";
        }
        $allowedValues = $this->getECommunicationAttachmenttypeAllowableValues();
        if (!is_null($this->container['eCommunicationAttachmenttype']) && !in_array($this->container['eCommunicationAttachmenttype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eCommunicationAttachmenttype', must be one of '%s'",
                $this->container['eCommunicationAttachmenttype'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['iCommunicationAttachmentlinkexpiration']) && ($this->container['iCommunicationAttachmentlinkexpiration'] > 30)) {
            $invalidProperties[] = "invalid value for 'iCommunicationAttachmentlinkexpiration', must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['iCommunicationAttachmentlinkexpiration']) && ($this->container['iCommunicationAttachmentlinkexpiration'] < 1)) {
            $invalidProperties[] = "invalid value for 'iCommunicationAttachmentlinkexpiration', must be bigger than or equal to 1.";
        }

        if ($this->container['aObjCommunicationattachment'] === null) {
            $invalidProperties[] = "'aObjCommunicationattachment' can't be null";
        }
//        if ((count($this->container['aObjCommunicationattachment']) < 0)) {
        if (!is_null($this->container['aObjCommunicationattachment']) && (count($this->container['aObjCommunicationattachment']) < 0)) {
            $invalidProperties[] = "invalid value for 'aObjCommunicationattachment', number of items must be greater than or equal to 0.";
        }

        if ($this->container['aObjCommunicationrecipient'] === null) {
            $invalidProperties[] = "'aObjCommunicationrecipient' can't be null";
        }
//        if ((count($this->container['aObjCommunicationrecipient']) < 0)) {
        if (!is_null($this->container['aObjCommunicationrecipient']) && (count($this->container['aObjCommunicationrecipient']) < 0)) {
            $invalidProperties[] = "invalid value for 'aObjCommunicationrecipient', number of items must be greater than or equal to 0.";
        }

        if ($this->container['aObjCommunicationreference'] === null) {
            $invalidProperties[] = "'aObjCommunicationreference' can't be null";
        }
//        if ((count($this->container['aObjCommunicationreference']) < 0)) {
        if (!is_null($this->container['aObjCommunicationreference']) && (count($this->container['aObjCommunicationreference']) < 0)) {
            $invalidProperties[] = "invalid value for 'aObjCommunicationreference', number of items must be greater than or equal to 0.";
        }

        if ($this->container['aObjCommunicationexternalrecipient'] === null) {
            $invalidProperties[] = "'aObjCommunicationexternalrecipient' can't be null";
        }
//        if ((count($this->container['aObjCommunicationexternalrecipient']) < 0)) {
        if (!is_null($this->container['aObjCommunicationexternalrecipient']) && (count($this->container['aObjCommunicationexternalrecipient']) < 0)) {
            $invalidProperties[] = "invalid value for 'aObjCommunicationexternalrecipient', number of items must be greater than or equal to 0.";
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
     * @return int|null
     */
    public function getPkiCommunicationID()
    {
        return $this->container['pkiCommunicationID'];
    }

    /**
     * Sets pkiCommunicationID
     *
     * @param int|null $pkiCommunicationID The unique ID of the Communication.
     *
     * @return self
     */
    public function setPkiCommunicationID($pkiCommunicationID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCommunicationID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCommunicationID cannot be null');
        //}

//        if (($pkiCommunicationID < 0)) {
        if (!is_null($pkiCommunicationID) && ($pkiCommunicationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiCommunicationID when calling CommunicationRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCommunicationID'] = $pkiCommunicationID;
        $this->container['pkiCommunicationID'] = (is_null($pkiCommunicationID) ? null : (int) $pkiCommunicationID);

        return $this;
    }

    /**
     * Gets eCommunicationImportance
     *
     * @return \eZmaxAPI\Model\FieldECommunicationImportance|null
     */
    public function getECommunicationImportance()
    {
        return $this->container['eCommunicationImportance'];
    }

    /**
     * Sets eCommunicationImportance
     *
     * @param \eZmaxAPI\Model\FieldECommunicationImportance|null $eCommunicationImportance eCommunicationImportance
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
     * Gets objCommunicationsender
     *
     * @return \eZmaxAPI\Model\CustomCommunicationsenderRequest|null
     */
    public function getObjCommunicationsender()
    {
        return $this->container['objCommunicationsender'];
    }

    /**
     * Sets objCommunicationsender
     *
     * @param \eZmaxAPI\Model\CustomCommunicationsenderRequest|null $objCommunicationsender objCommunicationsender
     *
     * @return self
     */
    public function setObjCommunicationsender($objCommunicationsender)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objCommunicationsender)) {
            //throw new \InvalidArgumentException('non-nullable objCommunicationsender cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objCommunicationsender'] = $objCommunicationsender;
        $this->container['objCommunicationsender'] = $objCommunicationsender;

        return $this;
    }

    /**
     * Gets sCommunicationSubject
     *
     * @return string|null
     */
    public function getSCommunicationSubject()
    {
        return is_null($this->container['sCommunicationSubject']) ? null : trim($this->container['sCommunicationSubject']);
    }

    /**
     * Sets sCommunicationSubject
     *
     * @param string|null $sCommunicationSubject The subject of the Communication
     *
     * @return self
     */
    public function setSCommunicationSubject($sCommunicationSubject)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCommunicationSubject)) {
            //throw new \InvalidArgumentException('non-nullable sCommunicationSubject cannot be null');
        //}

//        if ((!preg_match("/^.{0,200}$/", ObjectSerializer::toString($sCommunicationSubject)))) {
        if (!is_null($sCommunicationSubject) && (!preg_match("/(*UTF8)^.{0,200}$/", ObjectSerializer::toString($sCommunicationSubject)))) {
            throw new \InvalidArgumentException("invalid value for \$sCommunicationSubject when calling CommunicationRequestCompound., must conform to the pattern /^.{0,200}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCommunicationSubject'] = $sCommunicationSubject;
        $this->container['sCommunicationSubject'] = (is_null($sCommunicationSubject) ? null : trim((string) $sCommunicationSubject));

        return $this;
    }

    /**
     * Gets tCommunicationBody
     *
     * @return string
     */
    public function getTCommunicationBody()
    {
        return is_null($this->container['tCommunicationBody']) ? null : trim($this->container['tCommunicationBody']);
    }

    /**
     * Sets tCommunicationBody
     *
     * @param string $tCommunicationBody The Body of the Communication
     *
     * @return self
     */
    public function setTCommunicationBody($tCommunicationBody)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tCommunicationBody)) {
            //throw new \InvalidArgumentException('non-nullable tCommunicationBody cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tCommunicationBody'] = $tCommunicationBody;
        $this->container['tCommunicationBody'] = (is_null($tCommunicationBody) ? null : trim((string) $tCommunicationBody));

        return $this;
    }

    /**
     * Gets bCommunicationPrivate
     *
     * @return bool
     */
    public function getBCommunicationPrivate()
    {
        return $this->container['bCommunicationPrivate'];
    }

    /**
     * Sets bCommunicationPrivate
     *
     * @param bool $bCommunicationPrivate Whether the Communication is private or not
     *
     * @return self
     */
    public function setBCommunicationPrivate($bCommunicationPrivate)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCommunicationPrivate)) {
            //throw new \InvalidArgumentException('non-nullable bCommunicationPrivate cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCommunicationPrivate'] = $bCommunicationPrivate;
        $this->container['bCommunicationPrivate'] = (is_null($bCommunicationPrivate) ? null : (bool) $bCommunicationPrivate);

        return $this;
    }

    /**
     * Gets eCommunicationAttachmenttype
     *
     * @return string|null
     */
    public function getECommunicationAttachmenttype()
    {
        return is_null($this->container['eCommunicationAttachmenttype']) ? null : trim($this->container['eCommunicationAttachmenttype']);
    }

    /**
     * Sets eCommunicationAttachmenttype
     *
     * @param string|null $eCommunicationAttachmenttype How the attachment should be included in the email.   Only used if eCommunicationType is **Email**
     *
     * @return self
     */
    public function setECommunicationAttachmenttype($eCommunicationAttachmenttype)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eCommunicationAttachmenttype)) {
            //throw new \InvalidArgumentException('non-nullable eCommunicationAttachmenttype cannot be null');
        //}
        $allowedValues = $this->getECommunicationAttachmenttypeAllowableValues();
        if (!in_array($eCommunicationAttachmenttype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eCommunicationAttachmenttype', must be one of '%s'",
                    $eCommunicationAttachmenttype,
                    implode("', '", $allowedValues)
                )
            );
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eCommunicationAttachmenttype'] = $eCommunicationAttachmenttype;
        $this->container['eCommunicationAttachmenttype'] = (is_null($eCommunicationAttachmenttype) ? null : trim((string) $eCommunicationAttachmenttype));

        return $this;
    }

    /**
     * Gets iCommunicationAttachmentlinkexpiration
     *
     * @return int|null
     */
    public function getICommunicationAttachmentlinkexpiration()
    {
        return $this->container['iCommunicationAttachmentlinkexpiration'];
    }

    /**
     * Sets iCommunicationAttachmentlinkexpiration
     *
     * @param int|null $iCommunicationAttachmentlinkexpiration The number of days before the attachment link expired.   Only used if eCommunicationType is **Email** and eCommunicationattachmentType is **Link**
     *
     * @return self
     */
    public function setICommunicationAttachmentlinkexpiration($iCommunicationAttachmentlinkexpiration)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iCommunicationAttachmentlinkexpiration)) {
            //throw new \InvalidArgumentException('non-nullable iCommunicationAttachmentlinkexpiration cannot be null');
        //}

//        if (($iCommunicationAttachmentlinkexpiration > 30)) {
        if (!is_null($iCommunicationAttachmentlinkexpiration) && ($iCommunicationAttachmentlinkexpiration > 30)) {
            throw new \InvalidArgumentException('invalid value for $iCommunicationAttachmentlinkexpiration when calling CommunicationRequestCompound., must be smaller than or equal to 30.');
        }
//        if (($iCommunicationAttachmentlinkexpiration < 1)) {
        if (!is_null($iCommunicationAttachmentlinkexpiration) && ($iCommunicationAttachmentlinkexpiration < 1)) {
            throw new \InvalidArgumentException('invalid value for $iCommunicationAttachmentlinkexpiration when calling CommunicationRequestCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iCommunicationAttachmentlinkexpiration'] = $iCommunicationAttachmentlinkexpiration;
        $this->container['iCommunicationAttachmentlinkexpiration'] = (is_null($iCommunicationAttachmentlinkexpiration) ? null : (int) $iCommunicationAttachmentlinkexpiration);

        return $this;
    }

    /**
     * Gets bCommunicationReadreceipt
     *
     * @return bool|null
     */
    public function getBCommunicationReadreceipt()
    {
        return $this->container['bCommunicationReadreceipt'];
    }

    /**
     * Sets bCommunicationReadreceipt
     *
     * @param bool|null $bCommunicationReadreceipt Whether we ask for a read receipt or not.
     *
     * @return self
     */
    public function setBCommunicationReadreceipt($bCommunicationReadreceipt)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCommunicationReadreceipt)) {
            //throw new \InvalidArgumentException('non-nullable bCommunicationReadreceipt cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCommunicationReadreceipt'] = $bCommunicationReadreceipt;
        $this->container['bCommunicationReadreceipt'] = (is_null($bCommunicationReadreceipt) ? null : (bool) $bCommunicationReadreceipt);

        return $this;
    }

    /**
     * Gets aObjCommunicationattachment
     *
     * @return \eZmaxAPI\Model\CustomCommunicationattachmentRequest[]
     */
    public function getAObjCommunicationattachment()
    {
        return $this->container['aObjCommunicationattachment'];
    }

    /**
     * Sets aObjCommunicationattachment
     *
     * @param \eZmaxAPI\Model\CustomCommunicationattachmentRequest[] $aObjCommunicationattachment aObjCommunicationattachment
     *
     * @return self
     */
    public function setAObjCommunicationattachment($aObjCommunicationattachment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjCommunicationattachment)) {
            //throw new \InvalidArgumentException('non-nullable aObjCommunicationattachment cannot be null');
        //}


//        if ((count($aObjCommunicationattachment) < 0)) {
        if ((count($aObjCommunicationattachment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $aObjCommunicationattachment when calling CommunicationRequestCompound., number of items must be greater than or equal to 0.');
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjCommunicationattachment'] = $aObjCommunicationattachment;
        $this->container['aObjCommunicationattachment'] = $aObjCommunicationattachment;

        return $this;
    }

    /**
     * Gets aObjCommunicationrecipient
     *
     * @return \eZmaxAPI\Model\CommunicationrecipientRequestCompound[]
     */
    public function getAObjCommunicationrecipient()
    {
        return $this->container['aObjCommunicationrecipient'];
    }

    /**
     * Sets aObjCommunicationrecipient
     *
     * @param \eZmaxAPI\Model\CommunicationrecipientRequestCompound[] $aObjCommunicationrecipient aObjCommunicationrecipient
     *
     * @return self
     */
    public function setAObjCommunicationrecipient($aObjCommunicationrecipient)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjCommunicationrecipient)) {
            //throw new \InvalidArgumentException('non-nullable aObjCommunicationrecipient cannot be null');
        //}


//        if ((count($aObjCommunicationrecipient) < 0)) {
        if ((count($aObjCommunicationrecipient) < 0)) {
            throw new \InvalidArgumentException('invalid length for $aObjCommunicationrecipient when calling CommunicationRequestCompound., number of items must be greater than or equal to 0.');
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjCommunicationrecipient'] = $aObjCommunicationrecipient;
        $this->container['aObjCommunicationrecipient'] = $aObjCommunicationrecipient;

        return $this;
    }

    /**
     * Gets aObjCommunicationreference
     *
     * @return \eZmaxAPI\Model\CommunicationreferenceRequestCompound[]
     */
    public function getAObjCommunicationreference()
    {
        return $this->container['aObjCommunicationreference'];
    }

    /**
     * Sets aObjCommunicationreference
     *
     * @param \eZmaxAPI\Model\CommunicationreferenceRequestCompound[] $aObjCommunicationreference aObjCommunicationreference
     *
     * @return self
     */
    public function setAObjCommunicationreference($aObjCommunicationreference)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjCommunicationreference)) {
            //throw new \InvalidArgumentException('non-nullable aObjCommunicationreference cannot be null');
        //}


//        if ((count($aObjCommunicationreference) < 0)) {
        if ((count($aObjCommunicationreference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $aObjCommunicationreference when calling CommunicationRequestCompound., number of items must be greater than or equal to 0.');
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjCommunicationreference'] = $aObjCommunicationreference;
        $this->container['aObjCommunicationreference'] = $aObjCommunicationreference;

        return $this;
    }

    /**
     * Gets aObjCommunicationexternalrecipient
     *
     * @return \eZmaxAPI\Model\CommunicationexternalrecipientRequestCompound[]
     */
    public function getAObjCommunicationexternalrecipient()
    {
        return $this->container['aObjCommunicationexternalrecipient'];
    }

    /**
     * Sets aObjCommunicationexternalrecipient
     *
     * @param \eZmaxAPI\Model\CommunicationexternalrecipientRequestCompound[] $aObjCommunicationexternalrecipient aObjCommunicationexternalrecipient
     *
     * @return self
     */
    public function setAObjCommunicationexternalrecipient($aObjCommunicationexternalrecipient)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjCommunicationexternalrecipient)) {
            //throw new \InvalidArgumentException('non-nullable aObjCommunicationexternalrecipient cannot be null');
        //}


//        if ((count($aObjCommunicationexternalrecipient) < 0)) {
        if ((count($aObjCommunicationexternalrecipient) < 0)) {
            throw new \InvalidArgumentException('invalid length for $aObjCommunicationexternalrecipient when calling CommunicationRequestCompound., number of items must be greater than or equal to 0.');
        }
        
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


