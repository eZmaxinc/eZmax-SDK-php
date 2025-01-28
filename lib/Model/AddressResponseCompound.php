<?php
/**
 * AddressResponseCompound
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
 * Generator version: 7.11.0
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
 * AddressResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Address Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiAddressID' => 'int',
        'fkiAddresstypeID' => 'int',
        'sAddressCivic' => 'string',
        'sAddressStreet' => 'string',
        'sAddressSuite' => 'string',
        'sAddressCity' => 'string',
        'fkiProvinceID' => 'int',
        'sProvinceNameX' => 'string',
        'fkiCountryID' => 'int',
        'sCountryNameX' => 'string',
        'sAddressZip' => 'string',
        'fAddressLongitude' => 'string',
        'fAddressLatitude' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiAddressID' => null,
        'fkiAddresstypeID' => null,
        'sAddressCivic' => null,
        'sAddressStreet' => null,
        'sAddressSuite' => null,
        'sAddressCity' => null,
        'fkiProvinceID' => null,
        'sProvinceNameX' => null,
        'fkiCountryID' => null,
        'sCountryNameX' => null,
        'sAddressZip' => null,
        'fAddressLongitude' => null,
        'fAddressLatitude' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiAddressID' => false,
		'fkiAddresstypeID' => false,
		'sAddressCivic' => false,
		'sAddressStreet' => false,
		'sAddressSuite' => false,
		'sAddressCity' => false,
		'fkiProvinceID' => false,
		'sProvinceNameX' => false,
		'fkiCountryID' => false,
		'sCountryNameX' => false,
		'sAddressZip' => false,
		'fAddressLongitude' => false,
		'fAddressLatitude' => false
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
        'pkiAddressID' => 'pkiAddressID',
        'fkiAddresstypeID' => 'fkiAddresstypeID',
        'sAddressCivic' => 'sAddressCivic',
        'sAddressStreet' => 'sAddressStreet',
        'sAddressSuite' => 'sAddressSuite',
        'sAddressCity' => 'sAddressCity',
        'fkiProvinceID' => 'fkiProvinceID',
        'sProvinceNameX' => 'sProvinceNameX',
        'fkiCountryID' => 'fkiCountryID',
        'sCountryNameX' => 'sCountryNameX',
        'sAddressZip' => 'sAddressZip',
        'fAddressLongitude' => 'fAddressLongitude',
        'fAddressLatitude' => 'fAddressLatitude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiAddressID' => 'setPkiAddressID',
        'fkiAddresstypeID' => 'setFkiAddresstypeID',
        'sAddressCivic' => 'setSAddressCivic',
        'sAddressStreet' => 'setSAddressStreet',
        'sAddressSuite' => 'setSAddressSuite',
        'sAddressCity' => 'setSAddressCity',
        'fkiProvinceID' => 'setFkiProvinceID',
        'sProvinceNameX' => 'setSProvinceNameX',
        'fkiCountryID' => 'setFkiCountryID',
        'sCountryNameX' => 'setSCountryNameX',
        'sAddressZip' => 'setSAddressZip',
        'fAddressLongitude' => 'setFAddressLongitude',
        'fAddressLatitude' => 'setFAddressLatitude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiAddressID' => 'getPkiAddressID',
        'fkiAddresstypeID' => 'getFkiAddresstypeID',
        'sAddressCivic' => 'getSAddressCivic',
        'sAddressStreet' => 'getSAddressStreet',
        'sAddressSuite' => 'getSAddressSuite',
        'sAddressCity' => 'getSAddressCity',
        'fkiProvinceID' => 'getFkiProvinceID',
        'sProvinceNameX' => 'getSProvinceNameX',
        'fkiCountryID' => 'getFkiCountryID',
        'sCountryNameX' => 'getSCountryNameX',
        'sAddressZip' => 'getSAddressZip',
        'fAddressLongitude' => 'getFAddressLongitude',
        'fAddressLatitude' => 'getFAddressLatitude'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pkiAddressID', $data ?? [], null);
        $this->setIfExists('fkiAddresstypeID', $data ?? [], null);
        $this->setIfExists('sAddressCivic', $data ?? [], null);
        $this->setIfExists('sAddressStreet', $data ?? [], null);
        $this->setIfExists('sAddressSuite', $data ?? [], null);
        $this->setIfExists('sAddressCity', $data ?? [], null);
        $this->setIfExists('fkiProvinceID', $data ?? [], null);
        $this->setIfExists('sProvinceNameX', $data ?? [], null);
        $this->setIfExists('fkiCountryID', $data ?? [], null);
        $this->setIfExists('sCountryNameX', $data ?? [], null);
        $this->setIfExists('sAddressZip', $data ?? [], null);
        $this->setIfExists('fAddressLongitude', $data ?? [], null);
        $this->setIfExists('fAddressLatitude', $data ?? [], null);
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

        if ($this->container['pkiAddressID'] === null) {
            $invalidProperties[] = "'pkiAddressID' can't be null";
        }
        if (($this->container['pkiAddressID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiAddressID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiAddresstypeID'] === null) {
            $invalidProperties[] = "'fkiAddresstypeID' can't be null";
        }
        if (($this->container['fkiAddresstypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiAddresstypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sAddressCivic'] === null) {
            $invalidProperties[] = "'sAddressCivic' can't be null";
        }
        if ($this->container['sAddressStreet'] === null) {
            $invalidProperties[] = "'sAddressStreet' can't be null";
        }
        if ($this->container['sAddressCity'] === null) {
            $invalidProperties[] = "'sAddressCity' can't be null";
        }
        if ($this->container['fkiProvinceID'] === null) {
            $invalidProperties[] = "'fkiProvinceID' can't be null";
        }
        if (($this->container['fkiProvinceID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiProvinceID', must be bigger than or equal to 0.";
        }

        if ($this->container['sProvinceNameX'] === null) {
            $invalidProperties[] = "'sProvinceNameX' can't be null";
        }
	//if (!preg_match("/^.{0,50}$/", $this->container['sProvinceNameX'])) {
        if (!is_null($this->container['sProvinceNameX']) && !preg_match("/(*UTF8)^.{0,50}$/", $this->container['sProvinceNameX'])) {
            $invalidProperties[] = "invalid value for 'sProvinceNameX', must be conform to the pattern /^.{0,50}$/.";
        }

        if ($this->container['fkiCountryID'] === null) {
            $invalidProperties[] = "'fkiCountryID' can't be null";
        }
        if (($this->container['fkiCountryID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiCountryID', must be bigger than or equal to 0.";
        }

        if ($this->container['sCountryNameX'] === null) {
            $invalidProperties[] = "'sCountryNameX' can't be null";
        }
	//if (!preg_match("/^.{0,40}$/", $this->container['sCountryNameX'])) {
        if (!is_null($this->container['sCountryNameX']) && !preg_match("/(*UTF8)^.{0,40}$/", $this->container['sCountryNameX'])) {
            $invalidProperties[] = "invalid value for 'sCountryNameX', must be conform to the pattern /^.{0,40}$/.";
        }

        if ($this->container['sAddressZip'] === null) {
            $invalidProperties[] = "'sAddressZip' can't be null";
        }
	//if (!is_null($this->container['fAddressLongitude']) && !preg_match("/^(-?)(180(\\.0{1,15})?|((1[0-7]\\d)|(\\d{1,2}))(\\.\\d{1,15})?)$/", $this->container['fAddressLongitude'])) {
        if (!is_null($this->container['fAddressLongitude']) && !preg_match("/(*UTF8)^(-?)(180(\\.0{1,15})?|((1[0-7]\\d)|(\\d{1,2}))(\\.\\d{1,15})?)$/", $this->container['fAddressLongitude'])) {
            $invalidProperties[] = "invalid value for 'fAddressLongitude', must be conform to the pattern /^(-?)(180(\\.0{1,15})?|((1[0-7]\\d)|(\\d{1,2}))(\\.\\d{1,15})?)$/.";
        }

	//if (!is_null($this->container['fAddressLatitude']) && !preg_match("/^(-?)(90(\\.0{1,15})?|([1-8]?\\d(\\.\\d{1,15})?))$/", $this->container['fAddressLatitude'])) {
        if (!is_null($this->container['fAddressLatitude']) && !preg_match("/(*UTF8)^(-?)(90(\\.0{1,15})?|([1-8]?\\d(\\.\\d{1,15})?))$/", $this->container['fAddressLatitude'])) {
            $invalidProperties[] = "invalid value for 'fAddressLatitude', must be conform to the pattern /^(-?)(90(\\.0{1,15})?|([1-8]?\\d(\\.\\d{1,15})?))$/.";
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
     * Gets pkiAddressID
     *
     * @return int
     */
    public function getPkiAddressID()
    {
	//return $this->container['pkiAddressID'];
        return $this->container['pkiAddressID'];
    }

    /**
     * Sets pkiAddressID
     *
     * @param int $pkiAddressID The unique ID of the Address
     *
     * @return self
     */
    public function setPkiAddressID($pkiAddressID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiAddressID)) {
            //throw new \InvalidArgumentException('non-nullable pkiAddressID cannot be null');
        //}

	//if (($pkiAddressID < 0)) {
        if (($pkiAddressID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiAddressID when calling AddressResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiAddressID)?'null':'"'.$pkiAddressID.'"').' for pkiAddressID when calling AddressResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiAddressID'] = $pkiAddressID;
        $this->container['pkiAddressID'] = (is_null($pkiAddressID) ? null : (int) $pkiAddressID);

        return $this;
    }

    /**
     * Gets fkiAddresstypeID
     *
     * @return int
     */
    public function getFkiAddresstypeID()
    {
	//return $this->container['fkiAddresstypeID'];
        return $this->container['fkiAddresstypeID'];
    }

    /**
     * Sets fkiAddresstypeID
     *
     * @param int $fkiAddresstypeID The unique ID of the Addresstype.  Valid values:  |Value|Description| |-|-| |1|Office| |2|Home| |3|Real Estate Invoice| |4|Invoicing| |5|Shipping|
     *
     * @return self
     */
    public function setFkiAddresstypeID($fkiAddresstypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiAddresstypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiAddresstypeID cannot be null');
        //}

	//if (($fkiAddresstypeID < 0)) {
        if (($fkiAddresstypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiAddresstypeID when calling AddressResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiAddresstypeID)?'null':'"'.$fkiAddresstypeID.'"').' for fkiAddresstypeID when calling AddressResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiAddresstypeID'] = $fkiAddresstypeID;
        $this->container['fkiAddresstypeID'] = (is_null($fkiAddresstypeID) ? null : (int) $fkiAddresstypeID);

        return $this;
    }

    /**
     * Gets sAddressCivic
     *
     * @return string
     */
    public function getSAddressCivic()
    {
	//return $this->container['sAddressCivic'];
        return is_null($this->container['sAddressCivic']) ? null : trim($this->container['sAddressCivic']);
    }

    /**
     * Sets sAddressCivic
     *
     * @param string $sAddressCivic The Civic number.
     *
     * @return self
     */
    public function setSAddressCivic($sAddressCivic)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAddressCivic)) {
            //throw new \InvalidArgumentException('non-nullable sAddressCivic cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAddressCivic'] = $sAddressCivic;
        $this->container['sAddressCivic'] = (is_null($sAddressCivic) ? null : trim((string) $sAddressCivic));

        return $this;
    }

    /**
     * Gets sAddressStreet
     *
     * @return string
     */
    public function getSAddressStreet()
    {
	//return $this->container['sAddressStreet'];
        return is_null($this->container['sAddressStreet']) ? null : trim($this->container['sAddressStreet']);
    }

    /**
     * Sets sAddressStreet
     *
     * @param string $sAddressStreet The Street Name
     *
     * @return self
     */
    public function setSAddressStreet($sAddressStreet)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAddressStreet)) {
            //throw new \InvalidArgumentException('non-nullable sAddressStreet cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAddressStreet'] = $sAddressStreet;
        $this->container['sAddressStreet'] = (is_null($sAddressStreet) ? null : trim((string) $sAddressStreet));

        return $this;
    }

    /**
     * Gets sAddressSuite
     *
     * @return string|null
     */
    public function getSAddressSuite()
    {
	//return $this->container['sAddressSuite'];
        return is_null($this->container['sAddressSuite']) ? null : trim($this->container['sAddressSuite']);
    }

    /**
     * Sets sAddressSuite
     *
     * @param string|null $sAddressSuite The Suite or appartment number
     *
     * @return self
     */
    public function setSAddressSuite($sAddressSuite)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAddressSuite)) {
            //throw new \InvalidArgumentException('non-nullable sAddressSuite cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAddressSuite'] = $sAddressSuite;
        $this->container['sAddressSuite'] = (is_null($sAddressSuite) ? null : trim((string) $sAddressSuite));

        return $this;
    }

    /**
     * Gets sAddressCity
     *
     * @return string
     */
    public function getSAddressCity()
    {
	//return $this->container['sAddressCity'];
        return is_null($this->container['sAddressCity']) ? null : trim($this->container['sAddressCity']);
    }

    /**
     * Sets sAddressCity
     *
     * @param string $sAddressCity The City name
     *
     * @return self
     */
    public function setSAddressCity($sAddressCity)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAddressCity)) {
            //throw new \InvalidArgumentException('non-nullable sAddressCity cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAddressCity'] = $sAddressCity;
        $this->container['sAddressCity'] = (is_null($sAddressCity) ? null : trim((string) $sAddressCity));

        return $this;
    }

    /**
     * Gets fkiProvinceID
     *
     * @return int
     */
    public function getFkiProvinceID()
    {
	//return $this->container['fkiProvinceID'];
        return $this->container['fkiProvinceID'];
    }

    /**
     * Sets fkiProvinceID
     *
     * @param int $fkiProvinceID The unique ID of the Province.  Here are some common values (Complete list must be retrieved from API):  |Value|Description| |-|-| |1|(Canada) Alberta |2|(Canada) British Columbia| |3|(Canada) Manitoba| |3|(Canada) Manitoba| |4|(Canada) New Brunswick| |5|(Canada) Newfoundland| |6|(Canada) Northwest Territories| |7|(Canada) Nova Scotia| |8|(Canada) Nunavut| |9|(Canada) Ontario| |10|(Canada) Prince Edward Island| |11|(Canada) Quebec| |12|(Canada) Saskatchewan| |13|(Canada) Yukon| |14|(United-States) Alabama| |15|(United-States) Alaska| |16|(United-States) Arizona| |17|(United-States) Arkansas| |18|(United-States) California| |19|(United-States) Colorado| |20|(United-States) Connecticut| |21|(United-States) Delaware| |22|(United-States) District of Columbia| |23|(United-States) Florida| |24|(United-States) Georgia| |25|(United-States) Hawaii| |26|(United-States) Idaho| |27|(United-States) Illinois| |28|(United-States) Indiana| |29|(United-States) Iowa| |30|(United-States) Kansas| |31|(United-States) Kentucky| |32|(United-States) Louisiane| |33|(United-States) Maine| |34|(United-States) Maryland| |35|(United-States) Massachusetts| |36|(United-States) Michigan| |37|(United-States) Minnesota| |38|(United-States) Mississippi| |39|(United-States) Missouri| |40|(United-States) Montana| |41|(United-States) Nebraska| |42|(United-States) Nevada| |43|(United-States) New Hampshire| |44|(United-States) New Jersey| |45|(United-States) New Mexico| |46|(United-States) New York| |47|(United-States) North Carolina| |48|(United-States) North Dakota| |49|(United-States) Ohio| |50|(United-States) Oklahoma| |51|(United-States) Oregon| |52|(United-States) Pennsylvania| |53|(United-States) Rhode Island| |54|(United-States) South Carolina| |55|(United-States) South Dakota| |56|(United-States) Tennessee| |57|(United-States) Texas| |58|(United-States) Utah| |60|(United-States) Vermont| |59|(United-States) Virginia| |61|(United-States) Washington| |62|(United-States) West Virginia| |63|(United-States) Wisconsin| |64|(United-States) Wyoming|
     *
     * @return self
     */
    public function setFkiProvinceID($fkiProvinceID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiProvinceID)) {
            //throw new \InvalidArgumentException('non-nullable fkiProvinceID cannot be null');
        //}

	//if (($fkiProvinceID < 0)) {
        if (($fkiProvinceID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiProvinceID when calling AddressResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiProvinceID)?'null':'"'.$fkiProvinceID.'"').' for fkiProvinceID when calling AddressResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiProvinceID'] = $fkiProvinceID;
        $this->container['fkiProvinceID'] = (is_null($fkiProvinceID) ? null : (int) $fkiProvinceID);

        return $this;
    }

    /**
     * Gets sProvinceNameX
     *
     * @return string
     */
    public function getSProvinceNameX()
    {
	//return $this->container['sProvinceNameX'];
        return is_null($this->container['sProvinceNameX']) ? null : trim($this->container['sProvinceNameX']);
    }

    /**
     * Sets sProvinceNameX
     *
     * @param string $sProvinceNameX The name of the Province in the language of the requester
     *
     * @return self
     */
    public function setSProvinceNameX($sProvinceNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sProvinceNameX)) {
            //throw new \InvalidArgumentException('non-nullable sProvinceNameX cannot be null');
        //}

	//if ((!preg_match("/^.{0,50}$/", ObjectSerializer::toString($sProvinceNameX)))) {
        if (!is_null($sProvinceNameX) && (!preg_match("/(*UTF8)^.{0,50}$/", ObjectSerializer::toString($sProvinceNameX)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sProvinceNameX when calling AddressResponseCompound., must conform to the pattern /^.{0,50}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sProvinceNameX)?'null':'"'.$sProvinceNameX.'"')." for sProvinceNameX when calling AddressResponseCompound., must conform to the pattern /^.{0,50}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sProvinceNameX'] = $sProvinceNameX;
        $this->container['sProvinceNameX'] = (is_null($sProvinceNameX) ? null : trim((string) $sProvinceNameX));

        return $this;
    }

    /**
     * Gets fkiCountryID
     *
     * @return int
     */
    public function getFkiCountryID()
    {
	//return $this->container['fkiCountryID'];
        return $this->container['fkiCountryID'];
    }

    /**
     * Sets fkiCountryID
     *
     * @param int $fkiCountryID The unique ID of the Country.  Here are some common values (Complete list must be retrieved from API):  |Value|Description| |-|-| |1|Canada| |2|United-States|
     *
     * @return self
     */
    public function setFkiCountryID($fkiCountryID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiCountryID)) {
            //throw new \InvalidArgumentException('non-nullable fkiCountryID cannot be null');
        //}

	//if (($fkiCountryID < 0)) {
        if (($fkiCountryID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiCountryID when calling AddressResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiCountryID)?'null':'"'.$fkiCountryID.'"').' for fkiCountryID when calling AddressResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiCountryID'] = $fkiCountryID;
        $this->container['fkiCountryID'] = (is_null($fkiCountryID) ? null : (int) $fkiCountryID);

        return $this;
    }

    /**
     * Gets sCountryNameX
     *
     * @return string
     */
    public function getSCountryNameX()
    {
	//return $this->container['sCountryNameX'];
        return is_null($this->container['sCountryNameX']) ? null : trim($this->container['sCountryNameX']);
    }

    /**
     * Sets sCountryNameX
     *
     * @param string $sCountryNameX The name of the Country in the language of the requester
     *
     * @return self
     */
    public function setSCountryNameX($sCountryNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sCountryNameX)) {
            //throw new \InvalidArgumentException('non-nullable sCountryNameX cannot be null');
        //}

	//if ((!preg_match("/^.{0,40}$/", ObjectSerializer::toString($sCountryNameX)))) {
        if (!is_null($sCountryNameX) && (!preg_match("/(*UTF8)^.{0,40}$/", ObjectSerializer::toString($sCountryNameX)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sCountryNameX when calling AddressResponseCompound., must conform to the pattern /^.{0,40}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sCountryNameX)?'null':'"'.$sCountryNameX.'"')." for sCountryNameX when calling AddressResponseCompound., must conform to the pattern /^.{0,40}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sCountryNameX'] = $sCountryNameX;
        $this->container['sCountryNameX'] = (is_null($sCountryNameX) ? null : trim((string) $sCountryNameX));

        return $this;
    }

    /**
     * Gets sAddressZip
     *
     * @return string
     */
    public function getSAddressZip()
    {
	//return $this->container['sAddressZip'];
        return is_null($this->container['sAddressZip']) ? null : trim($this->container['sAddressZip']);
    }

    /**
     * Sets sAddressZip
     *
     * @param string $sAddressZip The Postal/Zip Code  The value must be entered without spaces
     *
     * @return self
     */
    public function setSAddressZip($sAddressZip)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAddressZip)) {
            //throw new \InvalidArgumentException('non-nullable sAddressZip cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAddressZip'] = $sAddressZip;
        $this->container['sAddressZip'] = (is_null($sAddressZip) ? null : trim((string) $sAddressZip));

        return $this;
    }

    /**
     * Gets fAddressLongitude
     *
     * @return string|null
     */
    public function getFAddressLongitude()
    {
	//return $this->container['fAddressLongitude'];
        return is_null($this->container['fAddressLongitude']) ? null : trim($this->container['fAddressLongitude']);
    }

    /**
     * Sets fAddressLongitude
     *
     * @param string|null $fAddressLongitude The Longitude of the Address
     *
     * @return self
     */
    public function setFAddressLongitude($fAddressLongitude)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fAddressLongitude)) {
            //throw new \InvalidArgumentException('non-nullable fAddressLongitude cannot be null');
        //}

	//if ((!preg_match("/^(-?)(180(\\.0{1,15})?|((1[0-7]\\d)|(\\d{1,2}))(\\.\\d{1,15})?)$/", ObjectSerializer::toString($fAddressLongitude)))) {
        if (!is_null($fAddressLongitude) && (!preg_match("/(*UTF8)^(-?)(180(\\.0{1,15})?|((1[0-7]\\d)|(\\d{1,2}))(\\.\\d{1,15})?)$/", ObjectSerializer::toString($fAddressLongitude)))) {
	    //throw new \InvalidArgumentException("invalid value for \$fAddressLongitude when calling AddressResponseCompound., must conform to the pattern /^(-?)(180(\\.0{1,15})?|((1[0-7]\\d)|(\\d{1,2}))(\\.\\d{1,15})?)$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($fAddressLongitude)?'null':'"'.$fAddressLongitude.'"')." for fAddressLongitude when calling AddressResponseCompound., must conform to the pattern /^(-?)(180(\\.0{1,15})?|((1[0-7]\\d)|(\\d{1,2}))(\\.\\d{1,15})?)$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fAddressLongitude'] = $fAddressLongitude;
        $this->container['fAddressLongitude'] = (is_null($fAddressLongitude) ? null : trim((string) $fAddressLongitude));

        return $this;
    }

    /**
     * Gets fAddressLatitude
     *
     * @return string|null
     */
    public function getFAddressLatitude()
    {
	//return $this->container['fAddressLatitude'];
        return is_null($this->container['fAddressLatitude']) ? null : trim($this->container['fAddressLatitude']);
    }

    /**
     * Sets fAddressLatitude
     *
     * @param string|null $fAddressLatitude The Latitude of the Address
     *
     * @return self
     */
    public function setFAddressLatitude($fAddressLatitude)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fAddressLatitude)) {
            //throw new \InvalidArgumentException('non-nullable fAddressLatitude cannot be null');
        //}

	//if ((!preg_match("/^(-?)(90(\\.0{1,15})?|([1-8]?\\d(\\.\\d{1,15})?))$/", ObjectSerializer::toString($fAddressLatitude)))) {
        if (!is_null($fAddressLatitude) && (!preg_match("/(*UTF8)^(-?)(90(\\.0{1,15})?|([1-8]?\\d(\\.\\d{1,15})?))$/", ObjectSerializer::toString($fAddressLatitude)))) {
	    //throw new \InvalidArgumentException("invalid value for \$fAddressLatitude when calling AddressResponseCompound., must conform to the pattern /^(-?)(90(\\.0{1,15})?|([1-8]?\\d(\\.\\d{1,15})?))$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($fAddressLatitude)?'null':'"'.$fAddressLatitude.'"')." for fAddressLatitude when calling AddressResponseCompound., must conform to the pattern /^(-?)(90(\\.0{1,15})?|([1-8]?\\d(\\.\\d{1,15})?))$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fAddressLatitude'] = $fAddressLatitude;
        $this->container['fAddressLatitude'] = (is_null($fAddressLatitude) ? null : trim((string) $fAddressLatitude));

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


