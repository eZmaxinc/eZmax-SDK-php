<?php
/**
 * WebhookResponseCompound
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
 * WebhookResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Webhook Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'webhook-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiWebhookID' => 'int',
        'sWebhookDescription' => 'string',
        'fkiEzsignfoldertypeID' => 'int',
        'sEzsignfoldertypeNameX' => 'string',
        'eWebhookModule' => '\eZmaxAPI\Model\FieldEWebhookModule',
        'eWebhookEzsignevent' => '\eZmaxAPI\Model\FieldEWebhookEzsignevent',
        'eWebhookManagementevent' => '\eZmaxAPI\Model\FieldEWebhookManagementevent',
        'sWebhookUrl' => 'string',
        'sWebhookEmailfailed' => 'string',
        'sWebhookApikey' => 'string',
        'sWebhookSecret' => 'string',
        'bWebhookIsactive' => 'bool',
        'bWebhookIssigned' => 'bool',
        'bWebhookSkipsslvalidation' => 'bool',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit',
        'sWebhookEvent' => 'string',
        'aObjWebhookheader' => '\eZmaxAPI\Model\WebhookheaderResponseCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiWebhookID' => null,
        'sWebhookDescription' => null,
        'fkiEzsignfoldertypeID' => null,
        'sEzsignfoldertypeNameX' => null,
        'eWebhookModule' => null,
        'eWebhookEzsignevent' => null,
        'eWebhookManagementevent' => null,
        'sWebhookUrl' => null,
        'sWebhookEmailfailed' => null,
        'sWebhookApikey' => null,
        'sWebhookSecret' => null,
        'bWebhookIsactive' => null,
        'bWebhookIssigned' => null,
        'bWebhookSkipsslvalidation' => null,
        'objAudit' => null,
        'sWebhookEvent' => null,
        'aObjWebhookheader' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiWebhookID' => false,
		'sWebhookDescription' => false,
		'fkiEzsignfoldertypeID' => false,
		'sEzsignfoldertypeNameX' => false,
		'eWebhookModule' => false,
		'eWebhookEzsignevent' => false,
		'eWebhookManagementevent' => false,
		'sWebhookUrl' => false,
		'sWebhookEmailfailed' => false,
		'sWebhookApikey' => false,
		'sWebhookSecret' => false,
		'bWebhookIsactive' => false,
		'bWebhookIssigned' => false,
		'bWebhookSkipsslvalidation' => false,
		'objAudit' => false,
		'sWebhookEvent' => false,
		'aObjWebhookheader' => false
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
        'pkiWebhookID' => 'pkiWebhookID',
        'sWebhookDescription' => 'sWebhookDescription',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'eWebhookModule' => 'eWebhookModule',
        'eWebhookEzsignevent' => 'eWebhookEzsignevent',
        'eWebhookManagementevent' => 'eWebhookManagementevent',
        'sWebhookUrl' => 'sWebhookUrl',
        'sWebhookEmailfailed' => 'sWebhookEmailfailed',
        'sWebhookApikey' => 'sWebhookApikey',
        'sWebhookSecret' => 'sWebhookSecret',
        'bWebhookIsactive' => 'bWebhookIsactive',
        'bWebhookIssigned' => 'bWebhookIssigned',
        'bWebhookSkipsslvalidation' => 'bWebhookSkipsslvalidation',
        'objAudit' => 'objAudit',
        'sWebhookEvent' => 'sWebhookEvent',
        'aObjWebhookheader' => 'a_objWebhookheader'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiWebhookID' => 'setPkiWebhookID',
        'sWebhookDescription' => 'setSWebhookDescription',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'eWebhookModule' => 'setEWebhookModule',
        'eWebhookEzsignevent' => 'setEWebhookEzsignevent',
        'eWebhookManagementevent' => 'setEWebhookManagementevent',
        'sWebhookUrl' => 'setSWebhookUrl',
        'sWebhookEmailfailed' => 'setSWebhookEmailfailed',
        'sWebhookApikey' => 'setSWebhookApikey',
        'sWebhookSecret' => 'setSWebhookSecret',
        'bWebhookIsactive' => 'setBWebhookIsactive',
        'bWebhookIssigned' => 'setBWebhookIssigned',
        'bWebhookSkipsslvalidation' => 'setBWebhookSkipsslvalidation',
        'objAudit' => 'setObjAudit',
        'sWebhookEvent' => 'setSWebhookEvent',
        'aObjWebhookheader' => 'setAObjWebhookheader'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiWebhookID' => 'getPkiWebhookID',
        'sWebhookDescription' => 'getSWebhookDescription',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'eWebhookModule' => 'getEWebhookModule',
        'eWebhookEzsignevent' => 'getEWebhookEzsignevent',
        'eWebhookManagementevent' => 'getEWebhookManagementevent',
        'sWebhookUrl' => 'getSWebhookUrl',
        'sWebhookEmailfailed' => 'getSWebhookEmailfailed',
        'sWebhookApikey' => 'getSWebhookApikey',
        'sWebhookSecret' => 'getSWebhookSecret',
        'bWebhookIsactive' => 'getBWebhookIsactive',
        'bWebhookIssigned' => 'getBWebhookIssigned',
        'bWebhookSkipsslvalidation' => 'getBWebhookSkipsslvalidation',
        'objAudit' => 'getObjAudit',
        'sWebhookEvent' => 'getSWebhookEvent',
        'aObjWebhookheader' => 'getAObjWebhookheader'
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
        $this->setIfExists('pkiWebhookID', $data ?? [], null);
        $this->setIfExists('sWebhookDescription', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('eWebhookModule', $data ?? [], null);
        $this->setIfExists('eWebhookEzsignevent', $data ?? [], null);
        $this->setIfExists('eWebhookManagementevent', $data ?? [], null);
        $this->setIfExists('sWebhookUrl', $data ?? [], null);
        $this->setIfExists('sWebhookEmailfailed', $data ?? [], null);
        $this->setIfExists('sWebhookApikey', $data ?? [], null);
        $this->setIfExists('sWebhookSecret', $data ?? [], null);
        $this->setIfExists('bWebhookIsactive', $data ?? [], null);
        $this->setIfExists('bWebhookIssigned', $data ?? [], null);
        $this->setIfExists('bWebhookSkipsslvalidation', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
        $this->setIfExists('sWebhookEvent', $data ?? [], null);
        $this->setIfExists('aObjWebhookheader', $data ?? [], null);
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

        if ($this->container['pkiWebhookID'] === null) {
            $invalidProperties[] = "'pkiWebhookID' can't be null";
        }
        if ($this->container['sWebhookDescription'] === null) {
            $invalidProperties[] = "'sWebhookDescription' can't be null";
        }
        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['eWebhookModule'] === null) {
            $invalidProperties[] = "'eWebhookModule' can't be null";
        }
        if ($this->container['sWebhookUrl'] === null) {
            $invalidProperties[] = "'sWebhookUrl' can't be null";
        }
        if ($this->container['sWebhookEmailfailed'] === null) {
            $invalidProperties[] = "'sWebhookEmailfailed' can't be null";
        }
        if ($this->container['bWebhookIsactive'] === null) {
            $invalidProperties[] = "'bWebhookIsactive' can't be null";
        }
        if ($this->container['bWebhookIssigned'] === null) {
            $invalidProperties[] = "'bWebhookIssigned' can't be null";
        }
        if ($this->container['bWebhookSkipsslvalidation'] === null) {
            $invalidProperties[] = "'bWebhookSkipsslvalidation' can't be null";
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
     * Gets pkiWebhookID
     *
     * @return int
     */
    public function getPkiWebhookID()
    {
        return $this->container['pkiWebhookID'];
    }

    /**
     * Sets pkiWebhookID
     *
     * @param int $pkiWebhookID The unique ID of the Webhook
     *
     * @return self
     */
    public function setPkiWebhookID($pkiWebhookID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiWebhookID)) {
            //throw new \InvalidArgumentException('non-nullable pkiWebhookID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiWebhookID'] = $pkiWebhookID;
        $this->container['pkiWebhookID'] = (is_null($pkiWebhookID) ? null : (int) $pkiWebhookID);

        return $this;
    }

    /**
     * Gets sWebhookDescription
     *
     * @return string
     */
    public function getSWebhookDescription()
    {
        return is_null($this->container['sWebhookDescription']) ? null : trim($this->container['sWebhookDescription']);
    }

    /**
     * Sets sWebhookDescription
     *
     * @param string $sWebhookDescription The description of the Webhook
     *
     * @return self
     */
    public function setSWebhookDescription($sWebhookDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookDescription)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookDescription'] = $sWebhookDescription;
        $this->container['sWebhookDescription'] = (is_null($sWebhookDescription) ? null : trim((string) $sWebhookDescription));

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int|null
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int|null $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}

//        if (($fkiEzsignfoldertypeID > 65535)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling WebhookResponseCompound., must be smaller than or equal to 65535.');
        }
//        if (($fkiEzsignfoldertypeID < 0)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling WebhookResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string|null
     */
    public function getSEzsignfoldertypeNameX()
    {
        return is_null($this->container['sEzsignfoldertypeNameX']) ? null : trim($this->container['sEzsignfoldertypeNameX']);
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string|null $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfoldertypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfoldertypeNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfoldertypeNameX'] = $sEzsignfoldertypeNameX;
        $this->container['sEzsignfoldertypeNameX'] = (is_null($sEzsignfoldertypeNameX) ? null : trim((string) $sEzsignfoldertypeNameX));

        return $this;
    }

    /**
     * Gets eWebhookModule
     *
     * @return \eZmaxAPI\Model\FieldEWebhookModule
     */
    public function getEWebhookModule()
    {
        return $this->container['eWebhookModule'];
    }

    /**
     * Sets eWebhookModule
     *
     * @param \eZmaxAPI\Model\FieldEWebhookModule $eWebhookModule eWebhookModule
     *
     * @return self
     */
    public function setEWebhookModule($eWebhookModule)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eWebhookModule)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookModule cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eWebhookModule'] = $eWebhookModule;
        $this->container['eWebhookModule'] = $eWebhookModule;

        return $this;
    }

    /**
     * Gets eWebhookEzsignevent
     *
     * @return \eZmaxAPI\Model\FieldEWebhookEzsignevent|null
     */
    public function getEWebhookEzsignevent()
    {
        return $this->container['eWebhookEzsignevent'];
    }

    /**
     * Sets eWebhookEzsignevent
     *
     * @param \eZmaxAPI\Model\FieldEWebhookEzsignevent|null $eWebhookEzsignevent eWebhookEzsignevent
     *
     * @return self
     */
    public function setEWebhookEzsignevent($eWebhookEzsignevent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eWebhookEzsignevent)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookEzsignevent cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eWebhookEzsignevent'] = $eWebhookEzsignevent;
        $this->container['eWebhookEzsignevent'] = $eWebhookEzsignevent;

        return $this;
    }

    /**
     * Gets eWebhookManagementevent
     *
     * @return \eZmaxAPI\Model\FieldEWebhookManagementevent|null
     */
    public function getEWebhookManagementevent()
    {
        return $this->container['eWebhookManagementevent'];
    }

    /**
     * Sets eWebhookManagementevent
     *
     * @param \eZmaxAPI\Model\FieldEWebhookManagementevent|null $eWebhookManagementevent eWebhookManagementevent
     *
     * @return self
     */
    public function setEWebhookManagementevent($eWebhookManagementevent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eWebhookManagementevent)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookManagementevent cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eWebhookManagementevent'] = $eWebhookManagementevent;
        $this->container['eWebhookManagementevent'] = $eWebhookManagementevent;

        return $this;
    }

    /**
     * Gets sWebhookUrl
     *
     * @return string
     */
    public function getSWebhookUrl()
    {
        return is_null($this->container['sWebhookUrl']) ? null : trim($this->container['sWebhookUrl']);
    }

    /**
     * Sets sWebhookUrl
     *
     * @param string $sWebhookUrl The URL of the Webhook callback
     *
     * @return self
     */
    public function setSWebhookUrl($sWebhookUrl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookUrl)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookUrl cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookUrl'] = $sWebhookUrl;
        $this->container['sWebhookUrl'] = (is_null($sWebhookUrl) ? null : trim((string) $sWebhookUrl));

        return $this;
    }

    /**
     * Gets sWebhookEmailfailed
     *
     * @return string
     */
    public function getSWebhookEmailfailed()
    {
        return is_null($this->container['sWebhookEmailfailed']) ? null : trim($this->container['sWebhookEmailfailed']);
    }

    /**
     * Sets sWebhookEmailfailed
     *
     * @param string $sWebhookEmailfailed The email that will receive the Webhook in case all attempts fail
     *
     * @return self
     */
    public function setSWebhookEmailfailed($sWebhookEmailfailed)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookEmailfailed)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookEmailfailed cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookEmailfailed'] = $sWebhookEmailfailed;
        $this->container['sWebhookEmailfailed'] = (is_null($sWebhookEmailfailed) ? null : trim((string) $sWebhookEmailfailed));

        return $this;
    }

    /**
     * Gets sWebhookApikey
     *
     * @return string|null
     */
    public function getSWebhookApikey()
    {
        return is_null($this->container['sWebhookApikey']) ? null : trim($this->container['sWebhookApikey']);
    }

    /**
     * Sets sWebhookApikey
     *
     * @param string|null $sWebhookApikey The Apikey for the Webhook.  This will be hidden if we are not creating or regenerating the Apikey.
     *
     * @return self
     */
    public function setSWebhookApikey($sWebhookApikey)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookApikey)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookApikey cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookApikey'] = $sWebhookApikey;
        $this->container['sWebhookApikey'] = (is_null($sWebhookApikey) ? null : trim((string) $sWebhookApikey));

        return $this;
    }

    /**
     * Gets sWebhookSecret
     *
     * @return string|null
     */
    public function getSWebhookSecret()
    {
        return is_null($this->container['sWebhookSecret']) ? null : trim($this->container['sWebhookSecret']);
    }

    /**
     * Sets sWebhookSecret
     *
     * @param string|null $sWebhookSecret The Secret for the Webhook.  This will be hidden if we are not creating or regenerating the Apikey.
     *
     * @return self
     */
    public function setSWebhookSecret($sWebhookSecret)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookSecret)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookSecret cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookSecret'] = $sWebhookSecret;
        $this->container['sWebhookSecret'] = (is_null($sWebhookSecret) ? null : trim((string) $sWebhookSecret));

        return $this;
    }

    /**
     * Gets bWebhookIsactive
     *
     * @return bool
     */
    public function getBWebhookIsactive()
    {
        return $this->container['bWebhookIsactive'];
    }

    /**
     * Sets bWebhookIsactive
     *
     * @param bool $bWebhookIsactive Whether the Webhook is active or not
     *
     * @return self
     */
    public function setBWebhookIsactive($bWebhookIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bWebhookIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bWebhookIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bWebhookIsactive'] = $bWebhookIsactive;
        $this->container['bWebhookIsactive'] = (is_null($bWebhookIsactive) ? null : (bool) $bWebhookIsactive);

        return $this;
    }

    /**
     * Gets bWebhookIssigned
     *
     * @return bool
     */
    public function getBWebhookIssigned()
    {
        return $this->container['bWebhookIssigned'];
    }

    /**
     * Sets bWebhookIssigned
     *
     * @param bool $bWebhookIssigned Whether the requests will be signed or not
     *
     * @return self
     */
    public function setBWebhookIssigned($bWebhookIssigned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bWebhookIssigned)) {
            //throw new \InvalidArgumentException('non-nullable bWebhookIssigned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bWebhookIssigned'] = $bWebhookIssigned;
        $this->container['bWebhookIssigned'] = (is_null($bWebhookIssigned) ? null : (bool) $bWebhookIssigned);

        return $this;
    }

    /**
     * Gets bWebhookSkipsslvalidation
     *
     * @return bool
     */
    public function getBWebhookSkipsslvalidation()
    {
        return $this->container['bWebhookSkipsslvalidation'];
    }

    /**
     * Sets bWebhookSkipsslvalidation
     *
     * @param bool $bWebhookSkipsslvalidation Wheter the server's SSL certificate should be validated or not. Not recommended to skip for production use
     *
     * @return self
     */
    public function setBWebhookSkipsslvalidation($bWebhookSkipsslvalidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bWebhookSkipsslvalidation)) {
            //throw new \InvalidArgumentException('non-nullable bWebhookSkipsslvalidation cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bWebhookSkipsslvalidation'] = $bWebhookSkipsslvalidation;
        $this->container['bWebhookSkipsslvalidation'] = (is_null($bWebhookSkipsslvalidation) ? null : (bool) $bWebhookSkipsslvalidation);

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
     * Gets sWebhookEvent
     *
     * @return string|null
     */
    public function getSWebhookEvent()
    {
        return is_null($this->container['sWebhookEvent']) ? null : trim($this->container['sWebhookEvent']);
    }

    /**
     * Sets sWebhookEvent
     *
     * @param string|null $sWebhookEvent The concatenated string to describe the Webhook event
     *
     * @return self
     */
    public function setSWebhookEvent($sWebhookEvent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sWebhookEvent)) {
            //throw new \InvalidArgumentException('non-nullable sWebhookEvent cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sWebhookEvent'] = $sWebhookEvent;
        $this->container['sWebhookEvent'] = (is_null($sWebhookEvent) ? null : trim((string) $sWebhookEvent));

        return $this;
    }

    /**
     * Gets aObjWebhookheader
     *
     * @return \eZmaxAPI\Model\WebhookheaderResponseCompound[]|null
     */
    public function getAObjWebhookheader()
    {
        return $this->container['aObjWebhookheader'];
    }

    /**
     * Sets aObjWebhookheader
     *
     * @param \eZmaxAPI\Model\WebhookheaderResponseCompound[]|null $aObjWebhookheader aObjWebhookheader
     *
     * @return self
     */
    public function setAObjWebhookheader($aObjWebhookheader)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjWebhookheader)) {
            //throw new \InvalidArgumentException('non-nullable aObjWebhookheader cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjWebhookheader'] = $aObjWebhookheader;
        $this->container['aObjWebhookheader'] = $aObjWebhookheader;

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


