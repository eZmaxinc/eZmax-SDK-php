<?php
/**
 * CreditcarddetailResponseCompound
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
 * CreditcarddetailResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Creditcarddetail Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreditcarddetailResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'creditcarddetail-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCreditcarddetailID' => 'int',
        'fkiCreditcardtypeID' => 'int',
        'sCreditcarddetailNumbermasked' => 'string',
        'iCreditcarddetailExpirationmonth' => 'int',
        'iCreditcarddetailExpirationyear' => 'int',
        'sCreditcarddetailCivic' => 'string',
        'sCreditcarddetailStreet' => 'string',
        'sCreditcarddetailZip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCreditcarddetailID' => null,
        'fkiCreditcardtypeID' => null,
        'sCreditcarddetailNumbermasked' => null,
        'iCreditcarddetailExpirationmonth' => null,
        'iCreditcarddetailExpirationyear' => null,
        'sCreditcarddetailCivic' => null,
        'sCreditcarddetailStreet' => null,
        'sCreditcarddetailZip' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCreditcarddetailID' => false,
		'fkiCreditcardtypeID' => false,
		'sCreditcarddetailNumbermasked' => false,
		'iCreditcarddetailExpirationmonth' => false,
		'iCreditcarddetailExpirationyear' => false,
		'sCreditcarddetailCivic' => false,
		'sCreditcarddetailStreet' => false,
		'sCreditcarddetailZip' => false
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
        'pkiCreditcarddetailID' => 'pkiCreditcarddetailID',
        'fkiCreditcardtypeID' => 'fkiCreditcardtypeID',
        'sCreditcarddetailNumbermasked' => 'sCreditcarddetailNumbermasked',
        'iCreditcarddetailExpirationmonth' => 'iCreditcarddetailExpirationmonth',
        'iCreditcarddetailExpirationyear' => 'iCreditcarddetailExpirationyear',
        'sCreditcarddetailCivic' => 'sCreditcarddetailCivic',
        'sCreditcarddetailStreet' => 'sCreditcarddetailStreet',
        'sCreditcarddetailZip' => 'sCreditcarddetailZip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCreditcarddetailID' => 'setPkiCreditcarddetailID',
        'fkiCreditcardtypeID' => 'setFkiCreditcardtypeID',
        'sCreditcarddetailNumbermasked' => 'setSCreditcarddetailNumbermasked',
        'iCreditcarddetailExpirationmonth' => 'setICreditcarddetailExpirationmonth',
        'iCreditcarddetailExpirationyear' => 'setICreditcarddetailExpirationyear',
        'sCreditcarddetailCivic' => 'setSCreditcarddetailCivic',
        'sCreditcarddetailStreet' => 'setSCreditcarddetailStreet',
        'sCreditcarddetailZip' => 'setSCreditcarddetailZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCreditcarddetailID' => 'getPkiCreditcarddetailID',
        'fkiCreditcardtypeID' => 'getFkiCreditcardtypeID',
        'sCreditcarddetailNumbermasked' => 'getSCreditcarddetailNumbermasked',
        'iCreditcarddetailExpirationmonth' => 'getICreditcarddetailExpirationmonth',
        'iCreditcarddetailExpirationyear' => 'getICreditcarddetailExpirationyear',
        'sCreditcarddetailCivic' => 'getSCreditcarddetailCivic',
        'sCreditcarddetailStreet' => 'getSCreditcarddetailStreet',
        'sCreditcarddetailZip' => 'getSCreditcarddetailZip'
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
        $this->setIfExists('pkiCreditcarddetailID', $data ?? [], null);
        $this->setIfExists('fkiCreditcardtypeID', $data ?? [], null);
        $this->setIfExists('sCreditcarddetailNumbermasked', $data ?? [], null);
        $this->setIfExists('iCreditcarddetailExpirationmonth', $data ?? [], null);
        $this->setIfExists('iCreditcarddetailExpirationyear', $data ?? [], null);
        $this->setIfExists('sCreditcarddetailCivic', $data ?? [], null);
        $this->setIfExists('sCreditcarddetailStreet', $data ?? [], null);
        $this->setIfExists('sCreditcarddetailZip', $data ?? [], null);
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

        if ($this->container['pkiCreditcarddetailID'] === null) {
            $invalidProperties[] = "'pkiCreditcarddetailID' can't be null";
        }
        if (($this->container['pkiCreditcarddetailID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiCreditcarddetailID', must be smaller than or equal to 65535.";
        }

        if (($this->container['pkiCreditcarddetailID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiCreditcarddetailID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiCreditcardtypeID'] === null) {
            $invalidProperties[] = "'fkiCreditcardtypeID' can't be null";
        }
        if (($this->container['fkiCreditcardtypeID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiCreditcardtypeID', must be smaller than or equal to 255.";
        }

        if (($this->container['fkiCreditcardtypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiCreditcardtypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sCreditcarddetailNumbermasked'] === null) {
            $invalidProperties[] = "'sCreditcarddetailNumbermasked' can't be null";
        }
//        if (!preg_match("/^.{0,50}$/", $this->container['sCreditcarddetailNumbermasked'])) {
        if (!is_null($this->container['sCreditcarddetailNumbermasked']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sCreditcarddetailNumbermasked'])) {
            $invalidProperties[] = "invalid value for 'sCreditcarddetailNumbermasked', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['iCreditcarddetailExpirationmonth'] === null) {
            $invalidProperties[] = "'iCreditcarddetailExpirationmonth' can't be null";
        }
        if (($this->container['iCreditcarddetailExpirationmonth'] > 12)) {
            $invalidProperties[] = "invalid value for 'iCreditcarddetailExpirationmonth', must be smaller than or equal to 12.";
        }

        if (($this->container['iCreditcarddetailExpirationmonth'] < 0)) {
            $invalidProperties[] = "invalid value for 'iCreditcarddetailExpirationmonth', must be bigger than or equal to 0.";
        }

        if ($this->container['iCreditcarddetailExpirationyear'] === null) {
            $invalidProperties[] = "'iCreditcarddetailExpirationyear' can't be null";
        }
        if (($this->container['iCreditcarddetailExpirationyear'] > 2200)) {
            $invalidProperties[] = "invalid value for 'iCreditcarddetailExpirationyear', must be smaller than or equal to 2200.";
        }

        if (($this->container['iCreditcarddetailExpirationyear'] < 0)) {
            $invalidProperties[] = "invalid value for 'iCreditcarddetailExpirationyear', must be bigger than or equal to 0.";
        }

        if ($this->container['sCreditcarddetailCivic'] === null) {
            $invalidProperties[] = "'sCreditcarddetailCivic' can't be null";
        }
//        if (!preg_match("/^.{0,8}$/", $this->container['sCreditcarddetailCivic'])) {
        if (!is_null($this->container['sCreditcarddetailCivic']) && !preg_match("/(*UTF8)^.{0,8}$/", $this->container['sCreditcarddetailCivic'])) {
            $invalidProperties[] = "invalid value for 'sCreditcarddetailCivic', must be conform to the pattern /^.{0,8}$/.";
        }

        if ($this->container['sCreditcarddetailStreet'] === null) {
            $invalidProperties[] = "'sCreditcarddetailStreet' can't be null";
        }
//        if (!preg_match("/^.{0,40}$/", $this->container['sCreditcarddetailStreet'])) {
        if (!is_null($this->container['sCreditcarddetailStreet']) && !preg_match("/(*UTF8)^.{0,40}$/", $this->container['sCreditcarddetailStreet'])) {
            $invalidProperties[] = "invalid value for 'sCreditcarddetailStreet', must be conform to the pattern /^.{0,40}$/.";
        }

        if ($this->container['sCreditcarddetailZip'] === null) {
            $invalidProperties[] = "'sCreditcarddetailZip' can't be null";
        }
//        if (!preg_match("/^.{0,10}$/", $this->container['sCreditcarddetailZip'])) {
        if (!is_null($this->container['sCreditcarddetailZip']) && !preg_match("/(*UTF8)^.{0,10}$/", $this->container['sCreditcarddetailZip'])) {
            $invalidProperties[] = "invalid value for 'sCreditcarddetailZip', must be conform to the pattern /^.{0,10}$/.";
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
     * Gets pkiCreditcarddetailID
     *
     * @return int
     */
    public function getPkiCreditcarddetailID()
    {
        return $this->container['pkiCreditcarddetailID'];
    }

    /**
     * Sets pkiCreditcarddetailID
     *
     * @param int $pkiCreditcarddetailID The unique ID of the Creditcarddetail
     *
     * @return self
     */
    public function setPkiCreditcarddetailID($pkiCreditcarddetailID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCreditcarddetailID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCreditcarddetailID cannot be null');
        //}

//        if (($pkiCreditcarddetailID > 65535)) {
        if (($pkiCreditcarddetailID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $pkiCreditcarddetailID when calling CreditcarddetailResponseCompound., must be smaller than or equal to 65535.');
        }
//        if (($pkiCreditcarddetailID < 0)) {
        if (($pkiCreditcarddetailID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiCreditcarddetailID when calling CreditcarddetailResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCreditcarddetailID'] = $pkiCreditcarddetailID;
        $this->container['pkiCreditcarddetailID'] = (is_null($pkiCreditcarddetailID) ? null : (int) $pkiCreditcarddetailID);

        return $this;
    }

    /**
     * Gets fkiCreditcardtypeID
     *
     * @return int
     */
    public function getFkiCreditcardtypeID()
    {
        return $this->container['fkiCreditcardtypeID'];
    }

    /**
     * Sets fkiCreditcardtypeID
     *
     * @param int $fkiCreditcardtypeID The unique ID of the Creditcardtype
     *
     * @return self
     */
    public function setFkiCreditcardtypeID($fkiCreditcardtypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiCreditcardtypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiCreditcardtypeID cannot be null');
        //}

//        if (($fkiCreditcardtypeID > 255)) {
        if (($fkiCreditcardtypeID > 255)) {
            throw new \InvalidArgumentException('invalid value for $fkiCreditcardtypeID when calling CreditcarddetailResponseCompound., must be smaller than or equal to 255.');
        }
//        if (($fkiCreditcardtypeID < 0)) {
        if (($fkiCreditcardtypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiCreditcardtypeID when calling CreditcarddetailResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiCreditcardtypeID'] = $fkiCreditcardtypeID;
        $this->container['fkiCreditcardtypeID'] = (is_null($fkiCreditcardtypeID) ? null : (int) $fkiCreditcardtypeID);

        return $this;
    }

    /**
     * Gets sCreditcarddetailNumbermasked
     *
     * @return string
     */
    public function getSCreditcarddetailNumbermasked()
    {
        return is_null($this->container['sCreditcarddetailNumbermasked']) ? null : trim($this->container['sCreditcarddetailNumbermasked']);
    }

    /**
     * Sets sCreditcarddetailNumbermasked
     *
     * @param string $sCreditcarddetailNumbermasked The numbermasked of the Creditcarddetail
     *
     * @return self
     */
    public function setSCreditcarddetailNumbermasked($sCreditcarddetailNumbermasked)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcarddetailNumbermasked)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcarddetailNumbermasked cannot be null');
        //}

//        if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sCreditcarddetailNumbermasked)))) {
        if (!is_null($sCreditcarddetailNumbermasked) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sCreditcarddetailNumbermasked)))) {
            throw new \InvalidArgumentException("invalid value for \$sCreditcarddetailNumbermasked when calling CreditcarddetailResponseCompound., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcarddetailNumbermasked'] = $sCreditcarddetailNumbermasked;
        $this->container['sCreditcarddetailNumbermasked'] = (is_null($sCreditcarddetailNumbermasked) ? null : trim((string) $sCreditcarddetailNumbermasked));

        return $this;
    }

    /**
     * Gets iCreditcarddetailExpirationmonth
     *
     * @return int
     */
    public function getICreditcarddetailExpirationmonth()
    {
        return $this->container['iCreditcarddetailExpirationmonth'];
    }

    /**
     * Sets iCreditcarddetailExpirationmonth
     *
     * @param int $iCreditcarddetailExpirationmonth The expirationmonth of the Creditcarddetail
     *
     * @return self
     */
    public function setICreditcarddetailExpirationmonth($iCreditcarddetailExpirationmonth)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iCreditcarddetailExpirationmonth)) {
            //throw new \InvalidArgumentException('non-nullable iCreditcarddetailExpirationmonth cannot be null');
        //}

//        if (($iCreditcarddetailExpirationmonth > 12)) {
        if (($iCreditcarddetailExpirationmonth > 12)) {
            throw new \InvalidArgumentException('invalid value for $iCreditcarddetailExpirationmonth when calling CreditcarddetailResponseCompound., must be smaller than or equal to 12.');
        }
//        if (($iCreditcarddetailExpirationmonth < 0)) {
        if (($iCreditcarddetailExpirationmonth < 0)) {
            throw new \InvalidArgumentException('invalid value for $iCreditcarddetailExpirationmonth when calling CreditcarddetailResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iCreditcarddetailExpirationmonth'] = $iCreditcarddetailExpirationmonth;
        $this->container['iCreditcarddetailExpirationmonth'] = (is_null($iCreditcarddetailExpirationmonth) ? null : (int) $iCreditcarddetailExpirationmonth);

        return $this;
    }

    /**
     * Gets iCreditcarddetailExpirationyear
     *
     * @return int
     */
    public function getICreditcarddetailExpirationyear()
    {
        return $this->container['iCreditcarddetailExpirationyear'];
    }

    /**
     * Sets iCreditcarddetailExpirationyear
     *
     * @param int $iCreditcarddetailExpirationyear The expirationyear of the Creditcarddetail
     *
     * @return self
     */
    public function setICreditcarddetailExpirationyear($iCreditcarddetailExpirationyear)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iCreditcarddetailExpirationyear)) {
            //throw new \InvalidArgumentException('non-nullable iCreditcarddetailExpirationyear cannot be null');
        //}

//        if (($iCreditcarddetailExpirationyear > 2200)) {
        if (($iCreditcarddetailExpirationyear > 2200)) {
            throw new \InvalidArgumentException('invalid value for $iCreditcarddetailExpirationyear when calling CreditcarddetailResponseCompound., must be smaller than or equal to 2200.');
        }
//        if (($iCreditcarddetailExpirationyear < 0)) {
        if (($iCreditcarddetailExpirationyear < 0)) {
            throw new \InvalidArgumentException('invalid value for $iCreditcarddetailExpirationyear when calling CreditcarddetailResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iCreditcarddetailExpirationyear'] = $iCreditcarddetailExpirationyear;
        $this->container['iCreditcarddetailExpirationyear'] = (is_null($iCreditcarddetailExpirationyear) ? null : (int) $iCreditcarddetailExpirationyear);

        return $this;
    }

    /**
     * Gets sCreditcarddetailCivic
     *
     * @return string
     */
    public function getSCreditcarddetailCivic()
    {
        return is_null($this->container['sCreditcarddetailCivic']) ? null : trim($this->container['sCreditcarddetailCivic']);
    }

    /**
     * Sets sCreditcarddetailCivic
     *
     * @param string $sCreditcarddetailCivic The civic of the Creditcarddetail
     *
     * @return self
     */
    public function setSCreditcarddetailCivic($sCreditcarddetailCivic)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcarddetailCivic)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcarddetailCivic cannot be null');
        //}

//        if ((!preg_match("/^.{0,8}$/", ObjectSerializer::toString($sCreditcarddetailCivic)))) {
        if (!is_null($sCreditcarddetailCivic) && (!preg_match("/(*UTF8)^.{0,8}$/", ObjectSerializer::toString($sCreditcarddetailCivic)))) {
            throw new \InvalidArgumentException("invalid value for \$sCreditcarddetailCivic when calling CreditcarddetailResponseCompound., must conform to the pattern /^.{0,8}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcarddetailCivic'] = $sCreditcarddetailCivic;
        $this->container['sCreditcarddetailCivic'] = (is_null($sCreditcarddetailCivic) ? null : trim((string) $sCreditcarddetailCivic));

        return $this;
    }

    /**
     * Gets sCreditcarddetailStreet
     *
     * @return string
     */
    public function getSCreditcarddetailStreet()
    {
        return is_null($this->container['sCreditcarddetailStreet']) ? null : trim($this->container['sCreditcarddetailStreet']);
    }

    /**
     * Sets sCreditcarddetailStreet
     *
     * @param string $sCreditcarddetailStreet The street of the Creditcarddetail
     *
     * @return self
     */
    public function setSCreditcarddetailStreet($sCreditcarddetailStreet)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcarddetailStreet)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcarddetailStreet cannot be null');
        //}

//        if ((!preg_match("/^.{0,40}$/", ObjectSerializer::toString($sCreditcarddetailStreet)))) {
        if (!is_null($sCreditcarddetailStreet) && (!preg_match("/(*UTF8)^.{0,40}$/", ObjectSerializer::toString($sCreditcarddetailStreet)))) {
            throw new \InvalidArgumentException("invalid value for \$sCreditcarddetailStreet when calling CreditcarddetailResponseCompound., must conform to the pattern /^.{0,40}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcarddetailStreet'] = $sCreditcarddetailStreet;
        $this->container['sCreditcarddetailStreet'] = (is_null($sCreditcarddetailStreet) ? null : trim((string) $sCreditcarddetailStreet));

        return $this;
    }

    /**
     * Gets sCreditcarddetailZip
     *
     * @return string
     */
    public function getSCreditcarddetailZip()
    {
        return is_null($this->container['sCreditcarddetailZip']) ? null : trim($this->container['sCreditcarddetailZip']);
    }

    /**
     * Sets sCreditcarddetailZip
     *
     * @param string $sCreditcarddetailZip The zip of the Creditcarddetail
     *
     * @return self
     */
    public function setSCreditcarddetailZip($sCreditcarddetailZip)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCreditcarddetailZip)) {
            //throw new \InvalidArgumentException('non-nullable sCreditcarddetailZip cannot be null');
        //}

//        if ((!preg_match("/^.{0,10}$/", ObjectSerializer::toString($sCreditcarddetailZip)))) {
        if (!is_null($sCreditcarddetailZip) && (!preg_match("/(*UTF8)^.{0,10}$/", ObjectSerializer::toString($sCreditcarddetailZip)))) {
            throw new \InvalidArgumentException("invalid value for \$sCreditcarddetailZip when calling CreditcarddetailResponseCompound., must conform to the pattern /^.{0,10}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCreditcarddetailZip'] = $sCreditcarddetailZip;
        $this->container['sCreditcarddetailZip'] = (is_null($sCreditcarddetailZip) ? null : trim((string) $sCreditcarddetailZip));

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


