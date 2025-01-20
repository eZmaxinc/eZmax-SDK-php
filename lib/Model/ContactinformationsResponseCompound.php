<?php
/**
 * ContactinformationsResponseCompound
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
 * ContactinformationsResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Contactinformations Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactinformationsResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contactinformations-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiContactinformationsID' => 'int',
        'fkiAddressIDDefault' => 'int',
        'fkiPhoneIDDefault' => 'int',
        'fkiEmailIDDefault' => 'int',
        'fkiWebsiteIDDefault' => 'int',
        'eContactinformationsType' => '\eZmaxAPI\Model\FieldEContactinformationsType',
        'sContactinformationsUrl' => 'string',
        'objAddressDefault' => '\eZmaxAPI\Model\AddressResponseCompound',
        'objPhoneDefault' => '\eZmaxAPI\Model\PhoneResponseCompound',
        'objEmailDefault' => '\eZmaxAPI\Model\EmailResponseCompound',
        'objWebsiteDefault' => '\eZmaxAPI\Model\WebsiteResponseCompound',
        'aObjAddress' => '\eZmaxAPI\Model\AddressResponseCompound[]',
        'aObjPhone' => '\eZmaxAPI\Model\PhoneResponseCompound[]',
        'aObjEmail' => '\eZmaxAPI\Model\EmailResponseCompound[]',
        'aObjWebsite' => '\eZmaxAPI\Model\WebsiteResponseCompound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiContactinformationsID' => null,
        'fkiAddressIDDefault' => null,
        'fkiPhoneIDDefault' => null,
        'fkiEmailIDDefault' => null,
        'fkiWebsiteIDDefault' => null,
        'eContactinformationsType' => null,
        'sContactinformationsUrl' => null,
        'objAddressDefault' => null,
        'objPhoneDefault' => null,
        'objEmailDefault' => null,
        'objWebsiteDefault' => null,
        'aObjAddress' => null,
        'aObjPhone' => null,
        'aObjEmail' => null,
        'aObjWebsite' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiContactinformationsID' => false,
		'fkiAddressIDDefault' => false,
		'fkiPhoneIDDefault' => false,
		'fkiEmailIDDefault' => false,
		'fkiWebsiteIDDefault' => false,
		'eContactinformationsType' => false,
		'sContactinformationsUrl' => false,
		'objAddressDefault' => false,
		'objPhoneDefault' => false,
		'objEmailDefault' => false,
		'objWebsiteDefault' => false,
		'aObjAddress' => false,
		'aObjPhone' => false,
		'aObjEmail' => false,
		'aObjWebsite' => false
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
        'pkiContactinformationsID' => 'pkiContactinformationsID',
        'fkiAddressIDDefault' => 'fkiAddressIDDefault',
        'fkiPhoneIDDefault' => 'fkiPhoneIDDefault',
        'fkiEmailIDDefault' => 'fkiEmailIDDefault',
        'fkiWebsiteIDDefault' => 'fkiWebsiteIDDefault',
        'eContactinformationsType' => 'eContactinformationsType',
        'sContactinformationsUrl' => 'sContactinformationsUrl',
        'objAddressDefault' => 'objAddressDefault',
        'objPhoneDefault' => 'objPhoneDefault',
        'objEmailDefault' => 'objEmailDefault',
        'objWebsiteDefault' => 'objWebsiteDefault',
        'aObjAddress' => 'a_objAddress',
        'aObjPhone' => 'a_objPhone',
        'aObjEmail' => 'a_objEmail',
        'aObjWebsite' => 'a_objWebsite'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiContactinformationsID' => 'setPkiContactinformationsID',
        'fkiAddressIDDefault' => 'setFkiAddressIDDefault',
        'fkiPhoneIDDefault' => 'setFkiPhoneIDDefault',
        'fkiEmailIDDefault' => 'setFkiEmailIDDefault',
        'fkiWebsiteIDDefault' => 'setFkiWebsiteIDDefault',
        'eContactinformationsType' => 'setEContactinformationsType',
        'sContactinformationsUrl' => 'setSContactinformationsUrl',
        'objAddressDefault' => 'setObjAddressDefault',
        'objPhoneDefault' => 'setObjPhoneDefault',
        'objEmailDefault' => 'setObjEmailDefault',
        'objWebsiteDefault' => 'setObjWebsiteDefault',
        'aObjAddress' => 'setAObjAddress',
        'aObjPhone' => 'setAObjPhone',
        'aObjEmail' => 'setAObjEmail',
        'aObjWebsite' => 'setAObjWebsite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiContactinformationsID' => 'getPkiContactinformationsID',
        'fkiAddressIDDefault' => 'getFkiAddressIDDefault',
        'fkiPhoneIDDefault' => 'getFkiPhoneIDDefault',
        'fkiEmailIDDefault' => 'getFkiEmailIDDefault',
        'fkiWebsiteIDDefault' => 'getFkiWebsiteIDDefault',
        'eContactinformationsType' => 'getEContactinformationsType',
        'sContactinformationsUrl' => 'getSContactinformationsUrl',
        'objAddressDefault' => 'getObjAddressDefault',
        'objPhoneDefault' => 'getObjPhoneDefault',
        'objEmailDefault' => 'getObjEmailDefault',
        'objWebsiteDefault' => 'getObjWebsiteDefault',
        'aObjAddress' => 'getAObjAddress',
        'aObjPhone' => 'getAObjPhone',
        'aObjEmail' => 'getAObjEmail',
        'aObjWebsite' => 'getAObjWebsite'
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
        $this->setIfExists('pkiContactinformationsID', $data ?? [], null);
        $this->setIfExists('fkiAddressIDDefault', $data ?? [], null);
        $this->setIfExists('fkiPhoneIDDefault', $data ?? [], null);
        $this->setIfExists('fkiEmailIDDefault', $data ?? [], null);
        $this->setIfExists('fkiWebsiteIDDefault', $data ?? [], null);
        $this->setIfExists('eContactinformationsType', $data ?? [], null);
        $this->setIfExists('sContactinformationsUrl', $data ?? [], null);
        $this->setIfExists('objAddressDefault', $data ?? [], null);
        $this->setIfExists('objPhoneDefault', $data ?? [], null);
        $this->setIfExists('objEmailDefault', $data ?? [], null);
        $this->setIfExists('objWebsiteDefault', $data ?? [], null);
        $this->setIfExists('aObjAddress', $data ?? [], null);
        $this->setIfExists('aObjPhone', $data ?? [], null);
        $this->setIfExists('aObjEmail', $data ?? [], null);
        $this->setIfExists('aObjWebsite', $data ?? [], null);
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

        if ($this->container['pkiContactinformationsID'] === null) {
            $invalidProperties[] = "'pkiContactinformationsID' can't be null";
        }
        if (($this->container['pkiContactinformationsID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiContactinformationsID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['pkiContactinformationsID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiContactinformationsID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiAddressIDDefault']) && ($this->container['fkiAddressIDDefault'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiAddressIDDefault', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiPhoneIDDefault']) && ($this->container['fkiPhoneIDDefault'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiPhoneIDDefault', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEmailIDDefault']) && ($this->container['fkiEmailIDDefault'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiEmailIDDefault', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiEmailIDDefault']) && ($this->container['fkiEmailIDDefault'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEmailIDDefault', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fkiWebsiteIDDefault']) && ($this->container['fkiWebsiteIDDefault'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiWebsiteIDDefault', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiWebsiteIDDefault']) && ($this->container['fkiWebsiteIDDefault'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiWebsiteIDDefault', must be bigger than or equal to 0.";
        }

        if ($this->container['eContactinformationsType'] === null) {
            $invalidProperties[] = "'eContactinformationsType' can't be null";
        }
	//if (!is_null($this->container['sContactinformationsUrl']) && !preg_match("/^.{0,255}$/", $this->container['sContactinformationsUrl'])) {
        if (!is_null($this->container['sContactinformationsUrl']) && !preg_match("/(*UTF8)^.{0,255}$/", $this->container['sContactinformationsUrl'])) {
            $invalidProperties[] = "invalid value for 'sContactinformationsUrl', must be conform to the pattern /^.{0,255}$/.";
        }

        if ($this->container['aObjAddress'] === null) {
            $invalidProperties[] = "'aObjAddress' can't be null";
        }
        if ($this->container['aObjPhone'] === null) {
            $invalidProperties[] = "'aObjPhone' can't be null";
        }
        if ($this->container['aObjEmail'] === null) {
            $invalidProperties[] = "'aObjEmail' can't be null";
        }
        if ($this->container['aObjWebsite'] === null) {
            $invalidProperties[] = "'aObjWebsite' can't be null";
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
     * Gets pkiContactinformationsID
     *
     * @return int
     */
    public function getPkiContactinformationsID()
    {
	//return $this->container['pkiContactinformationsID'];
        return $this->container['pkiContactinformationsID'];
    }

    /**
     * Sets pkiContactinformationsID
     *
     * @param int $pkiContactinformationsID The unique ID of the Contactinformations
     *
     * @return self
     */
    public function setPkiContactinformationsID($pkiContactinformationsID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiContactinformationsID)) {
            //throw new \InvalidArgumentException('non-nullable pkiContactinformationsID cannot be null');
        //}

	//if (($pkiContactinformationsID > 16777215)) {
        if (($pkiContactinformationsID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiContactinformationsID when calling ContactinformationsResponseCompound., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiContactinformationsID)?'null':'"'.$pkiContactinformationsID.'"').' for pkiContactinformationsID when calling ContactinformationsResponseCompound., must be smaller than or equal to 16777215.');
        }
	//if (($pkiContactinformationsID < 0)) {
        if (($pkiContactinformationsID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiContactinformationsID when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiContactinformationsID)?'null':'"'.$pkiContactinformationsID.'"').' for pkiContactinformationsID when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiContactinformationsID'] = $pkiContactinformationsID;
        $this->container['pkiContactinformationsID'] = (is_null($pkiContactinformationsID) ? null : (int) $pkiContactinformationsID);

        return $this;
    }

    /**
     * Gets fkiAddressIDDefault
     *
     * @return int|null
     */
    public function getFkiAddressIDDefault()
    {
	//return $this->container['fkiAddressIDDefault'];
        return $this->container['fkiAddressIDDefault'];
    }

    /**
     * Sets fkiAddressIDDefault
     *
     * @param int|null $fkiAddressIDDefault The unique ID of the Address
     *
     * @return self
     */
    public function setFkiAddressIDDefault($fkiAddressIDDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiAddressIDDefault)) {
            //throw new \InvalidArgumentException('non-nullable fkiAddressIDDefault cannot be null');
        //}

	//if (($fkiAddressIDDefault < 0)) {
        if (!is_null($fkiAddressIDDefault) && ($fkiAddressIDDefault < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiAddressIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiAddressIDDefault)?'null':'"'.$fkiAddressIDDefault.'"').' for fkiAddressIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiAddressIDDefault'] = $fkiAddressIDDefault;
        $this->container['fkiAddressIDDefault'] = (is_null($fkiAddressIDDefault) ? null : (int) $fkiAddressIDDefault);

        return $this;
    }

    /**
     * Gets fkiPhoneIDDefault
     *
     * @return int|null
     */
    public function getFkiPhoneIDDefault()
    {
	//return $this->container['fkiPhoneIDDefault'];
        return $this->container['fkiPhoneIDDefault'];
    }

    /**
     * Sets fkiPhoneIDDefault
     *
     * @param int|null $fkiPhoneIDDefault The unique ID of the Phone.
     *
     * @return self
     */
    public function setFkiPhoneIDDefault($fkiPhoneIDDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiPhoneIDDefault)) {
            //throw new \InvalidArgumentException('non-nullable fkiPhoneIDDefault cannot be null');
        //}

	//if (($fkiPhoneIDDefault < 0)) {
        if (!is_null($fkiPhoneIDDefault) && ($fkiPhoneIDDefault < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiPhoneIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiPhoneIDDefault)?'null':'"'.$fkiPhoneIDDefault.'"').' for fkiPhoneIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiPhoneIDDefault'] = $fkiPhoneIDDefault;
        $this->container['fkiPhoneIDDefault'] = (is_null($fkiPhoneIDDefault) ? null : (int) $fkiPhoneIDDefault);

        return $this;
    }

    /**
     * Gets fkiEmailIDDefault
     *
     * @return int|null
     */
    public function getFkiEmailIDDefault()
    {
	//return $this->container['fkiEmailIDDefault'];
        return $this->container['fkiEmailIDDefault'];
    }

    /**
     * Sets fkiEmailIDDefault
     *
     * @param int|null $fkiEmailIDDefault The unique ID of the Email
     *
     * @return self
     */
    public function setFkiEmailIDDefault($fkiEmailIDDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEmailIDDefault)) {
            //throw new \InvalidArgumentException('non-nullable fkiEmailIDDefault cannot be null');
        //}

	//if (($fkiEmailIDDefault > 16777215)) {
        if (!is_null($fkiEmailIDDefault) && ($fkiEmailIDDefault > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEmailIDDefault when calling ContactinformationsResponseCompound., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEmailIDDefault)?'null':'"'.$fkiEmailIDDefault.'"').' for fkiEmailIDDefault when calling ContactinformationsResponseCompound., must be smaller than or equal to 16777215.');
        }
	//if (($fkiEmailIDDefault < 1)) {
        if (!is_null($fkiEmailIDDefault) && ($fkiEmailIDDefault < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEmailIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEmailIDDefault)?'null':'"'.$fkiEmailIDDefault.'"').' for fkiEmailIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEmailIDDefault'] = $fkiEmailIDDefault;
        $this->container['fkiEmailIDDefault'] = (is_null($fkiEmailIDDefault) ? null : (int) $fkiEmailIDDefault);

        return $this;
    }

    /**
     * Gets fkiWebsiteIDDefault
     *
     * @return int|null
     */
    public function getFkiWebsiteIDDefault()
    {
	//return $this->container['fkiWebsiteIDDefault'];
        return $this->container['fkiWebsiteIDDefault'];
    }

    /**
     * Sets fkiWebsiteIDDefault
     *
     * @param int|null $fkiWebsiteIDDefault The unique ID of the Website Default
     *
     * @return self
     */
    public function setFkiWebsiteIDDefault($fkiWebsiteIDDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiWebsiteIDDefault)) {
            //throw new \InvalidArgumentException('non-nullable fkiWebsiteIDDefault cannot be null');
        //}

	//if (($fkiWebsiteIDDefault > 16777215)) {
        if (!is_null($fkiWebsiteIDDefault) && ($fkiWebsiteIDDefault > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiWebsiteIDDefault when calling ContactinformationsResponseCompound., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiWebsiteIDDefault)?'null':'"'.$fkiWebsiteIDDefault.'"').' for fkiWebsiteIDDefault when calling ContactinformationsResponseCompound., must be smaller than or equal to 16777215.');
        }
	//if (($fkiWebsiteIDDefault < 0)) {
        if (!is_null($fkiWebsiteIDDefault) && ($fkiWebsiteIDDefault < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiWebsiteIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiWebsiteIDDefault)?'null':'"'.$fkiWebsiteIDDefault.'"').' for fkiWebsiteIDDefault when calling ContactinformationsResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiWebsiteIDDefault'] = $fkiWebsiteIDDefault;
        $this->container['fkiWebsiteIDDefault'] = (is_null($fkiWebsiteIDDefault) ? null : (int) $fkiWebsiteIDDefault);

        return $this;
    }

    /**
     * Gets eContactinformationsType
     *
     * @return \eZmaxAPI\Model\FieldEContactinformationsType
     */
    public function getEContactinformationsType()
    {
	//return $this->container['eContactinformationsType'];
        return $this->container['eContactinformationsType'];
    }

    /**
     * Sets eContactinformationsType
     *
     * @param \eZmaxAPI\Model\FieldEContactinformationsType $eContactinformationsType eContactinformationsType
     *
     * @return self
     */
    public function setEContactinformationsType($eContactinformationsType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eContactinformationsType)) {
            //throw new \InvalidArgumentException('non-nullable eContactinformationsType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eContactinformationsType'] = $eContactinformationsType;
        $this->container['eContactinformationsType'] = $eContactinformationsType;

        return $this;
    }

    /**
     * Gets sContactinformationsUrl
     *
     * @return string|null
     */
    public function getSContactinformationsUrl()
    {
	//return $this->container['sContactinformationsUrl'];
        return is_null($this->container['sContactinformationsUrl']) ? null : trim($this->container['sContactinformationsUrl']);
    }

    /**
     * Sets sContactinformationsUrl
     *
     * @param string|null $sContactinformationsUrl The url of the Contactinformations
     *
     * @return self
     */
    public function setSContactinformationsUrl($sContactinformationsUrl)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sContactinformationsUrl)) {
            //throw new \InvalidArgumentException('non-nullable sContactinformationsUrl cannot be null');
        //}

	//if ((!preg_match("/^.{0,255}$/", ObjectSerializer::toString($sContactinformationsUrl)))) {
        if (!is_null($sContactinformationsUrl) && (!preg_match("/(*UTF8)^.{0,255}$/", ObjectSerializer::toString($sContactinformationsUrl)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sContactinformationsUrl when calling ContactinformationsResponseCompound., must conform to the pattern /^.{0,255}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sContactinformationsUrl)?'null':'"'.$sContactinformationsUrl.'"')." for sContactinformationsUrl when calling ContactinformationsResponseCompound., must conform to the pattern /^.{0,255}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sContactinformationsUrl'] = $sContactinformationsUrl;
        $this->container['sContactinformationsUrl'] = (is_null($sContactinformationsUrl) ? null : trim((string) $sContactinformationsUrl));

        return $this;
    }

    /**
     * Gets objAddressDefault
     *
     * @return \eZmaxAPI\Model\AddressResponseCompound|null
     */
    public function getObjAddressDefault()
    {
	//return $this->container['objAddressDefault'];
        return $this->container['objAddressDefault'];
    }

    /**
     * Sets objAddressDefault
     *
     * @param \eZmaxAPI\Model\AddressResponseCompound|null $objAddressDefault objAddressDefault
     *
     * @return self
     */
    public function setObjAddressDefault($objAddressDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objAddressDefault)) {
            //throw new \InvalidArgumentException('non-nullable objAddressDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objAddressDefault'] = $objAddressDefault;
        $this->container['objAddressDefault'] = $objAddressDefault;

        return $this;
    }

    /**
     * Gets objPhoneDefault
     *
     * @return \eZmaxAPI\Model\PhoneResponseCompound|null
     */
    public function getObjPhoneDefault()
    {
	//return $this->container['objPhoneDefault'];
        return $this->container['objPhoneDefault'];
    }

    /**
     * Sets objPhoneDefault
     *
     * @param \eZmaxAPI\Model\PhoneResponseCompound|null $objPhoneDefault objPhoneDefault
     *
     * @return self
     */
    public function setObjPhoneDefault($objPhoneDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objPhoneDefault)) {
            //throw new \InvalidArgumentException('non-nullable objPhoneDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objPhoneDefault'] = $objPhoneDefault;
        $this->container['objPhoneDefault'] = $objPhoneDefault;

        return $this;
    }

    /**
     * Gets objEmailDefault
     *
     * @return \eZmaxAPI\Model\EmailResponseCompound|null
     */
    public function getObjEmailDefault()
    {
	//return $this->container['objEmailDefault'];
        return $this->container['objEmailDefault'];
    }

    /**
     * Sets objEmailDefault
     *
     * @param \eZmaxAPI\Model\EmailResponseCompound|null $objEmailDefault objEmailDefault
     *
     * @return self
     */
    public function setObjEmailDefault($objEmailDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objEmailDefault)) {
            //throw new \InvalidArgumentException('non-nullable objEmailDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objEmailDefault'] = $objEmailDefault;
        $this->container['objEmailDefault'] = $objEmailDefault;

        return $this;
    }

    /**
     * Gets objWebsiteDefault
     *
     * @return \eZmaxAPI\Model\WebsiteResponseCompound|null
     */
    public function getObjWebsiteDefault()
    {
	//return $this->container['objWebsiteDefault'];
        return $this->container['objWebsiteDefault'];
    }

    /**
     * Sets objWebsiteDefault
     *
     * @param \eZmaxAPI\Model\WebsiteResponseCompound|null $objWebsiteDefault objWebsiteDefault
     *
     * @return self
     */
    public function setObjWebsiteDefault($objWebsiteDefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objWebsiteDefault)) {
            //throw new \InvalidArgumentException('non-nullable objWebsiteDefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objWebsiteDefault'] = $objWebsiteDefault;
        $this->container['objWebsiteDefault'] = $objWebsiteDefault;

        return $this;
    }

    /**
     * Gets aObjAddress
     *
     * @return \eZmaxAPI\Model\AddressResponseCompound[]
     */
    public function getAObjAddress()
    {
	//return $this->container['aObjAddress'];
        return $this->container['aObjAddress'];
    }

    /**
     * Sets aObjAddress
     *
     * @param \eZmaxAPI\Model\AddressResponseCompound[] $aObjAddress aObjAddress
     *
     * @return self
     */
    public function setAObjAddress($aObjAddress)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjAddress)) {
            //throw new \InvalidArgumentException('non-nullable aObjAddress cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjAddress'] = $aObjAddress;
        $this->container['aObjAddress'] = $aObjAddress;

        return $this;
    }

    /**
     * Gets aObjPhone
     *
     * @return \eZmaxAPI\Model\PhoneResponseCompound[]
     */
    public function getAObjPhone()
    {
	//return $this->container['aObjPhone'];
        return $this->container['aObjPhone'];
    }

    /**
     * Sets aObjPhone
     *
     * @param \eZmaxAPI\Model\PhoneResponseCompound[] $aObjPhone aObjPhone
     *
     * @return self
     */
    public function setAObjPhone($aObjPhone)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjPhone)) {
            //throw new \InvalidArgumentException('non-nullable aObjPhone cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjPhone'] = $aObjPhone;
        $this->container['aObjPhone'] = $aObjPhone;

        return $this;
    }

    /**
     * Gets aObjEmail
     *
     * @return \eZmaxAPI\Model\EmailResponseCompound[]
     */
    public function getAObjEmail()
    {
	//return $this->container['aObjEmail'];
        return $this->container['aObjEmail'];
    }

    /**
     * Sets aObjEmail
     *
     * @param \eZmaxAPI\Model\EmailResponseCompound[] $aObjEmail aObjEmail
     *
     * @return self
     */
    public function setAObjEmail($aObjEmail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEmail)) {
            //throw new \InvalidArgumentException('non-nullable aObjEmail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEmail'] = $aObjEmail;
        $this->container['aObjEmail'] = $aObjEmail;

        return $this;
    }

    /**
     * Gets aObjWebsite
     *
     * @return \eZmaxAPI\Model\WebsiteResponseCompound[]
     */
    public function getAObjWebsite()
    {
	//return $this->container['aObjWebsite'];
        return $this->container['aObjWebsite'];
    }

    /**
     * Sets aObjWebsite
     *
     * @param \eZmaxAPI\Model\WebsiteResponseCompound[] $aObjWebsite aObjWebsite
     *
     * @return self
     */
    public function setAObjWebsite($aObjWebsite)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjWebsite)) {
            //throw new \InvalidArgumentException('non-nullable aObjWebsite cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjWebsite'] = $aObjWebsite;
        $this->container['aObjWebsite'] = $aObjWebsite;

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


