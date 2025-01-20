<?php
/**
 * CreditcardclientRequestCompound
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
 * CreditcardclientRequestCompound Class Doc Comment
 *
 * @category Class
 * @description A Creditcardclient Object and children
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreditcardclientRequestCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'creditcardclient-RequestCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCreditcardclientID' => 'int',
        'fksCreditcardtokenID' => 'string',
        'bCreditcardclientrelationIsdefault' => 'bool',
        'sCreditcardclientDescription' => 'string',
        'bCreditcardclientAllowedcompanypayment' => 'bool',
        'bCreditcardclientAllowedezsign' => 'bool',
        'bCreditcardclientAllowedtranquillit' => 'bool',
        'objCreditcarddetail' => '\eZmaxAPI\Model\CreditcarddetailRequest',
        'sCreditcardclientCVV' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCreditcardclientID' => null,
        'fksCreditcardtokenID' => null,
        'bCreditcardclientrelationIsdefault' => null,
        'sCreditcardclientDescription' => null,
        'bCreditcardclientAllowedcompanypayment' => null,
        'bCreditcardclientAllowedezsign' => null,
        'bCreditcardclientAllowedtranquillit' => null,
        'objCreditcarddetail' => null,
        'sCreditcardclientCVV' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCreditcardclientID' => false,
		'fksCreditcardtokenID' => false,
		'bCreditcardclientrelationIsdefault' => false,
		'sCreditcardclientDescription' => false,
		'bCreditcardclientAllowedcompanypayment' => false,
		'bCreditcardclientAllowedezsign' => false,
		'bCreditcardclientAllowedtranquillit' => false,
		'objCreditcarddetail' => false,
		'sCreditcardclientCVV' => false
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
        'pkiCreditcardclientID' => 'pkiCreditcardclientID',
        'fksCreditcardtokenID' => 'fksCreditcardtokenID',
        'bCreditcardclientrelationIsdefault' => 'bCreditcardclientrelationIsdefault',
        'sCreditcardclientDescription' => 'sCreditcardclientDescription',
        'bCreditcardclientAllowedcompanypayment' => 'bCreditcardclientAllowedcompanypayment',
        'bCreditcardclientAllowedezsign' => 'bCreditcardclientAllowedezsign',
        'bCreditcardclientAllowedtranquillit' => 'bCreditcardclientAllowedtranquillit',
        'objCreditcarddetail' => 'objCreditcarddetail',
        'sCreditcardclientCVV' => 'sCreditcardclientCVV'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCreditcardclientID' => 'setPkiCreditcardclientID',
        'fksCreditcardtokenID' => 'setFksCreditcardtokenID',
        'bCreditcardclientrelationIsdefault' => 'setBCreditcardclientrelationIsdefault',
        'sCreditcardclientDescription' => 'setSCreditcardclientDescription',
        'bCreditcardclientAllowedcompanypayment' => 'setBCreditcardclientAllowedcompanypayment',
        'bCreditcardclientAllowedezsign' => 'setBCreditcardclientAllowedezsign',
        'bCreditcardclientAllowedtranquillit' => 'setBCreditcardclientAllowedtranquillit',
        'objCreditcarddetail' => 'setObjCreditcarddetail',
        'sCreditcardclientCVV' => 'setSCreditcardclientCVV'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCreditcardclientID' => 'getPkiCreditcardclientID',
        'fksCreditcardtokenID' => 'getFksCreditcardtokenID',
        'bCreditcardclientrelationIsdefault' => 'getBCreditcardclientrelationIsdefault',
        'sCreditcardclientDescription' => 'getSCreditcardclientDescription',
        'bCreditcardclientAllowedcompanypayment' => 'getBCreditcardclientAllowedcompanypayment',
        'bCreditcardclientAllowedezsign' => 'getBCreditcardclientAllowedezsign',
        'bCreditcardclientAllowedtranquillit' => 'getBCreditcardclientAllowedtranquillit',
        'objCreditcarddetail' => 'getObjCreditcarddetail',
        'sCreditcardclientCVV' => 'getSCreditcardclientCVV'
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
        $this->setIfExists('pkiCreditcardclientID', $data ?? [], null);
        $this->setIfExists('fksCreditcardtokenID', $data ?? [], null);
        $this->setIfExists('bCreditcardclientrelationIsdefault', $data ?? [], null);
        $this->setIfExists('sCreditcardclientDescription', $data ?? [], null);
        $this->setIfExists('bCreditcardclientAllowedcompanypayment', $data ?? [], null);
        $this->setIfExists('bCreditcardclientAllowedezsign', $data ?? [], null);
        $this->setIfExists('bCreditcardclientAllowedtranquillit', $data ?? [], null);
        $this->setIfExists('objCreditcarddetail', $data ?? [], null);
        $this->setIfExists('sCreditcardclientCVV', $data ?? [], null);
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

        if (!is_null($this->container['pkiCreditcardclientID']) && ($this->container['pkiCreditcardclientID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiCreditcardclientID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['pkiCreditcardclientID']) && ($this->container['pkiCreditcardclientID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiCreditcardclientID', must be bigger than or equal to 0.";
        }

	//if (!is_null($this->container['fksCreditcardtokenID']) && !preg_match("/^\\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\}?$/", $this->container['fksCreditcardtokenID'])) {
        if (!is_null($this->container['fksCreditcardtokenID']) && !preg_match("/(*UTF8)^\\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\}?$/", $this->container['fksCreditcardtokenID'])) {
            $invalidProperties[] = "invalid value for 'fksCreditcardtokenID', must be conform to the pattern /^\\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\}?$/.";
        }

        if ($this->container['bCreditcardclientrelationIsdefault'] === null) {
            $invalidProperties[] = "'bCreditcardclientrelationIsdefault' can't be null";
        }
        if ($this->container['sCreditcardclientDescription'] === null) {
            $invalidProperties[] = "'sCreditcardclientDescription' can't be null";
        }
	//if (!preg_match("/^.{0,50}$/", $this->container['sCreditcardclientDescription'])) {
        if (!is_null($this->container['sCreditcardclientDescription']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sCreditcardclientDescription'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardclientDescription', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['bCreditcardclientAllowedcompanypayment'] === null) {
            $invalidProperties[] = "'bCreditcardclientAllowedcompanypayment' can't be null";
        }
        if ($this->container['bCreditcardclientAllowedezsign'] === null) {
            $invalidProperties[] = "'bCreditcardclientAllowedezsign' can't be null";
        }
        if ($this->container['bCreditcardclientAllowedtranquillit'] === null) {
            $invalidProperties[] = "'bCreditcardclientAllowedtranquillit' can't be null";
        }
        if ($this->container['objCreditcarddetail'] === null) {
            $invalidProperties[] = "'objCreditcarddetail' can't be null";
        }
        if ($this->container['sCreditcardclientCVV'] === null) {
            $invalidProperties[] = "'sCreditcardclientCVV' can't be null";
        }
	//if (!preg_match("/^[0-9]{3,4}$/", $this->container['sCreditcardclientCVV'])) {
        if (!is_null($this->container['sCreditcardclientCVV']) && !preg_match("/(*UTF8)^[0-9]{3,4}$/", $this->container['sCreditcardclientCVV'])) {
            $invalidProperties[] = "invalid value for 'sCreditcardclientCVV', must be conform to the pattern /^[0-9]{3,4}$/.";
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
     * Gets pkiCreditcardclientID
     *
     * @return int|null
     */
    public function getPkiCreditcardclientID()
    {
	//return $this->container['pkiCreditcardclientID'];
        return $this->container['pkiCreditcardclientID'];
    }

    /**
     * Sets pkiCreditcardclientID
     *
     * @param int|null $pkiCreditcardclientID The unique ID of the Creditcardclient
     *
     * @return self
     */
    public function setPkiCreditcardclientID($pkiCreditcardclientID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCreditcardclientID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCreditcardclientID cannot be null');
        //}

	//if (($pkiCreditcardclientID > 65535)) {
        if (!is_null($pkiCreditcardclientID) && ($pkiCreditcardclientID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiCreditcardclientID when calling CreditcardclientRequestCompound., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiCreditcardclientID)?'null':'"'.$pkiCreditcardclientID.'"').' for pkiCreditcardclientID when calling CreditcardclientRequestCompound., must be smaller than or equal to 65535.');
        }
	//if (($pkiCreditcardclientID < 0)) {
        if (!is_null($pkiCreditcardclientID) && ($pkiCreditcardclientID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiCreditcardclientID when calling CreditcardclientRequestCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiCreditcardclientID)?'null':'"'.$pkiCreditcardclientID.'"').' for pkiCreditcardclientID when calling CreditcardclientRequestCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCreditcardclientID'] = $pkiCreditcardclientID;
        $this->container['pkiCreditcardclientID'] = (is_null($pkiCreditcardclientID) ? null : (int) $pkiCreditcardclientID);

        return $this;
    }

    /**
     * Gets fksCreditcardtokenID
     *
     * @return string|null
     */
    public function getFksCreditcardtokenID()
    {
	//return $this->container['fksCreditcardtokenID'];
        return is_null($this->container['fksCreditcardtokenID']) ? null : trim($this->container['fksCreditcardtokenID']);
    }

    /**
     * Sets fksCreditcardtokenID
     *
     * @param string|null $fksCreditcardtokenID The creditcard token identifier
     *
     * @return self
     */
    public function setFksCreditcardtokenID($fksCreditcardtokenID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fksCreditcardtokenID)) {
            //throw new \InvalidArgumentException('non-nullable fksCreditcardtokenID cannot be null');
        //}

	//if ((!preg_match("/^\\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\}?$/", ObjectSerializer::toString($fksCreditcardtokenID)))) {
        if (!is_null($fksCreditcardtokenID) && (!preg_match("/(*UTF8)^\\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\}?$/", ObjectSerializer::toString($fksCreditcardtokenID)))) {
	    //throw new \InvalidArgumentException("invalid value for \$fksCreditcardtokenID when calling CreditcardclientRequestCompound., must conform to the pattern /^\\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\}?$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($fksCreditcardtokenID)?'null':'"'.$fksCreditcardtokenID.'"')." for fksCreditcardtokenID when calling CreditcardclientRequestCompound., must conform to the pattern /^\\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\}?$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fksCreditcardtokenID'] = $fksCreditcardtokenID;
        $this->container['fksCreditcardtokenID'] = (is_null($fksCreditcardtokenID) ? null : trim((string) $fksCreditcardtokenID));

        return $this;
    }

    /**
     * Gets bCreditcardclientrelationIsdefault
     *
     * @return bool
     */
    public function getBCreditcardclientrelationIsdefault()
    {
	//return $this->container['bCreditcardclientrelationIsdefault'];
        return $this->container['bCreditcardclientrelationIsdefault'];
    }

    /**
     * Sets bCreditcardclientrelationIsdefault
     *
     * @param bool $bCreditcardclientrelationIsdefault Whether if it's the creditcardclient is the default one
     *
     * @return self
     */
    public function setBCreditcardclientrelationIsdefault($bCreditcardclientrelationIsdefault)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCreditcardclientrelationIsdefault)) {
            //throw new \InvalidArgumentException('non-nullable bCreditcardclientrelationIsdefault cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCreditcardclientrelationIsdefault'] = $bCreditcardclientrelationIsdefault;
        $this->container['bCreditcardclientrelationIsdefault'] = (is_null($bCreditcardclientrelationIsdefault) ? null : (bool) $bCreditcardclientrelationIsdefault);

        return $this;
    }

    /**
     * Gets sCreditcardclientDescription
     *
     * @return string
     */
    public function getSCreditcardclientDescription()
    {
	//return $this->container['sCreditcardclientDescription'];
        return is_null($this->container['sCreditcardclientDescription']) ? null : trim($this->container['sCreditcardclientDescription']);
    }

    /**
     * Sets sCreditcardclientDescription
     *
     * @param string $sCreditcardclientDescription The description of the Creditcardclient
     *
     * @return self
     */
    public function setSCreditcardclientDescription($sCreditcardclientDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardclientDescription)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardclientDescription cannot be null');
        //}

	//if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sCreditcardclientDescription)))) {
        if (!is_null($sCreditcardclientDescription) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sCreditcardclientDescription)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sCreditcardclientDescription when calling CreditcardclientRequestCompound., must conform to the pattern /^.{0,50}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sCreditcardclientDescription)?'null':'"'.$sCreditcardclientDescription.'"')." for sCreditcardclientDescription when calling CreditcardclientRequestCompound., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardclientDescription'] = $sCreditcardclientDescription;
        $this->container['sCreditcardclientDescription'] = (is_null($sCreditcardclientDescription) ? null : trim((string) $sCreditcardclientDescription));

        return $this;
    }

    /**
     * Gets bCreditcardclientAllowedcompanypayment
     *
     * @return bool
     */
    public function getBCreditcardclientAllowedcompanypayment()
    {
	//return $this->container['bCreditcardclientAllowedcompanypayment'];
        return $this->container['bCreditcardclientAllowedcompanypayment'];
    }

    /**
     * Sets bCreditcardclientAllowedcompanypayment
     *
     * @param bool $bCreditcardclientAllowedcompanypayment Whether if it's an allowedagencypayment
     *
     * @return self
     */
    public function setBCreditcardclientAllowedcompanypayment($bCreditcardclientAllowedcompanypayment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCreditcardclientAllowedcompanypayment)) {
            //throw new \InvalidArgumentException('non-nullable bCreditcardclientAllowedcompanypayment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCreditcardclientAllowedcompanypayment'] = $bCreditcardclientAllowedcompanypayment;
        $this->container['bCreditcardclientAllowedcompanypayment'] = (is_null($bCreditcardclientAllowedcompanypayment) ? null : (bool) $bCreditcardclientAllowedcompanypayment);

        return $this;
    }

    /**
     * Gets bCreditcardclientAllowedezsign
     *
     * @return bool
     */
    public function getBCreditcardclientAllowedezsign()
    {
	//return $this->container['bCreditcardclientAllowedezsign'];
        return $this->container['bCreditcardclientAllowedezsign'];
    }

    /**
     * Sets bCreditcardclientAllowedezsign
     *
     * @param bool $bCreditcardclientAllowedezsign Whether if it's an allowedroyallepageprotection
     *
     * @return self
     */
    public function setBCreditcardclientAllowedezsign($bCreditcardclientAllowedezsign)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCreditcardclientAllowedezsign)) {
            //throw new \InvalidArgumentException('non-nullable bCreditcardclientAllowedezsign cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCreditcardclientAllowedezsign'] = $bCreditcardclientAllowedezsign;
        $this->container['bCreditcardclientAllowedezsign'] = (is_null($bCreditcardclientAllowedezsign) ? null : (bool) $bCreditcardclientAllowedezsign);

        return $this;
    }

    /**
     * Gets bCreditcardclientAllowedtranquillit
     *
     * @return bool
     */
    public function getBCreditcardclientAllowedtranquillit()
    {
	//return $this->container['bCreditcardclientAllowedtranquillit'];
        return $this->container['bCreditcardclientAllowedtranquillit'];
    }

    /**
     * Sets bCreditcardclientAllowedtranquillit
     *
     * @param bool $bCreditcardclientAllowedtranquillit Whether if it's an allowedtranquillit
     *
     * @return self
     */
    public function setBCreditcardclientAllowedtranquillit($bCreditcardclientAllowedtranquillit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bCreditcardclientAllowedtranquillit)) {
            //throw new \InvalidArgumentException('non-nullable bCreditcardclientAllowedtranquillit cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bCreditcardclientAllowedtranquillit'] = $bCreditcardclientAllowedtranquillit;
        $this->container['bCreditcardclientAllowedtranquillit'] = (is_null($bCreditcardclientAllowedtranquillit) ? null : (bool) $bCreditcardclientAllowedtranquillit);

        return $this;
    }

    /**
     * Gets objCreditcarddetail
     *
     * @return \eZmaxAPI\Model\CreditcarddetailRequest
     */
    public function getObjCreditcarddetail()
    {
	//return $this->container['objCreditcarddetail'];
        return $this->container['objCreditcarddetail'];
    }

    /**
     * Sets objCreditcarddetail
     *
     * @param \eZmaxAPI\Model\CreditcarddetailRequest $objCreditcarddetail objCreditcarddetail
     *
     * @return self
     */
    public function setObjCreditcarddetail($objCreditcarddetail)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objCreditcarddetail)) {
            //throw new \InvalidArgumentException('non-nullable objCreditcarddetail cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objCreditcarddetail'] = $objCreditcarddetail;
        $this->container['objCreditcarddetail'] = $objCreditcarddetail;

        return $this;
    }

    /**
     * Gets sCreditcardclientCVV
     *
     * @return string
     */
    public function getSCreditcardclientCVV()
    {
	//return $this->container['sCreditcardclientCVV'];
        return is_null($this->container['sCreditcardclientCVV']) ? null : trim($this->container['sCreditcardclientCVV']);
    }

    /**
     * Sets sCreditcardclientCVV
     *
     * @param string $sCreditcardclientCVV The creditcard card CVV
     *
     * @return self
     */
    public function setSCreditcardclientCVV($sCreditcardclientCVV)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcardclientCVV)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcardclientCVV cannot be null');
        //}

	//if ((!preg_match("/^[0-9]{3,4}$/", ObjectSerializer::toString($sCreditcardclientCVV)))) {
        if (!is_null($sCreditcardclientCVV) && (!preg_match("/(*UTF8)^[0-9]{3,4}$/", ObjectSerializer::toString($sCreditcardclientCVV)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sCreditcardclientCVV when calling CreditcardclientRequestCompound., must conform to the pattern /^[0-9]{3,4}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sCreditcardclientCVV)?'null':'"'.$sCreditcardclientCVV.'"')." for sCreditcardclientCVV when calling CreditcardclientRequestCompound., must conform to the pattern /^[0-9]{3,4}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcardclientCVV'] = $sCreditcardclientCVV;
        $this->container['sCreditcardclientCVV'] = (is_null($sCreditcardclientCVV) ? null : trim((string) $sCreditcardclientCVV));

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


