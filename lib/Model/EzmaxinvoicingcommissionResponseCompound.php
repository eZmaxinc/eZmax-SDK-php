<?php
/**
 * EzmaxinvoicingcommissionResponseCompound
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
 * OpenAPI Generator version: 6.5.0
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
 * EzmaxinvoicingcommissionResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicingcommission Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicingcommissionResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicingcommission-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicingcommissionID' => 'int',
        'fkiEzmaxinvoicingsummaryglobalID' => 'int',
        'fkiEzmaxpartnerID' => 'int',
        'fkiEzmaxrepresentativeID' => 'int',
        'dtEzmaxinvoicingcommissionStart' => 'string',
        'dtEzmaxinvoicingcommissionEnd' => 'string',
        'iEzmaxinvoicingcommissionDays' => 'int',
        'dEzmaxinvoicingcommissionAmount' => 'string',
        'objContactName' => '\eZmaxAPI\Model\CustomContactNameResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxinvoicingcommissionID' => null,
        'fkiEzmaxinvoicingsummaryglobalID' => null,
        'fkiEzmaxpartnerID' => null,
        'fkiEzmaxrepresentativeID' => null,
        'dtEzmaxinvoicingcommissionStart' => null,
        'dtEzmaxinvoicingcommissionEnd' => null,
        'iEzmaxinvoicingcommissionDays' => null,
        'dEzmaxinvoicingcommissionAmount' => null,
        'objContactName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicingcommissionID' => false,
		'fkiEzmaxinvoicingsummaryglobalID' => false,
		'fkiEzmaxpartnerID' => false,
		'fkiEzmaxrepresentativeID' => false,
		'dtEzmaxinvoicingcommissionStart' => false,
		'dtEzmaxinvoicingcommissionEnd' => false,
		'iEzmaxinvoicingcommissionDays' => false,
		'dEzmaxinvoicingcommissionAmount' => false,
		'objContactName' => false
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
        'pkiEzmaxinvoicingcommissionID' => 'pkiEzmaxinvoicingcommissionID',
        'fkiEzmaxinvoicingsummaryglobalID' => 'fkiEzmaxinvoicingsummaryglobalID',
        'fkiEzmaxpartnerID' => 'fkiEzmaxpartnerID',
        'fkiEzmaxrepresentativeID' => 'fkiEzmaxrepresentativeID',
        'dtEzmaxinvoicingcommissionStart' => 'dtEzmaxinvoicingcommissionStart',
        'dtEzmaxinvoicingcommissionEnd' => 'dtEzmaxinvoicingcommissionEnd',
        'iEzmaxinvoicingcommissionDays' => 'iEzmaxinvoicingcommissionDays',
        'dEzmaxinvoicingcommissionAmount' => 'dEzmaxinvoicingcommissionAmount',
        'objContactName' => 'objContactName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicingcommissionID' => 'setPkiEzmaxinvoicingcommissionID',
        'fkiEzmaxinvoicingsummaryglobalID' => 'setFkiEzmaxinvoicingsummaryglobalID',
        'fkiEzmaxpartnerID' => 'setFkiEzmaxpartnerID',
        'fkiEzmaxrepresentativeID' => 'setFkiEzmaxrepresentativeID',
        'dtEzmaxinvoicingcommissionStart' => 'setDtEzmaxinvoicingcommissionStart',
        'dtEzmaxinvoicingcommissionEnd' => 'setDtEzmaxinvoicingcommissionEnd',
        'iEzmaxinvoicingcommissionDays' => 'setIEzmaxinvoicingcommissionDays',
        'dEzmaxinvoicingcommissionAmount' => 'setDEzmaxinvoicingcommissionAmount',
        'objContactName' => 'setObjContactName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicingcommissionID' => 'getPkiEzmaxinvoicingcommissionID',
        'fkiEzmaxinvoicingsummaryglobalID' => 'getFkiEzmaxinvoicingsummaryglobalID',
        'fkiEzmaxpartnerID' => 'getFkiEzmaxpartnerID',
        'fkiEzmaxrepresentativeID' => 'getFkiEzmaxrepresentativeID',
        'dtEzmaxinvoicingcommissionStart' => 'getDtEzmaxinvoicingcommissionStart',
        'dtEzmaxinvoicingcommissionEnd' => 'getDtEzmaxinvoicingcommissionEnd',
        'iEzmaxinvoicingcommissionDays' => 'getIEzmaxinvoicingcommissionDays',
        'dEzmaxinvoicingcommissionAmount' => 'getDEzmaxinvoicingcommissionAmount',
        'objContactName' => 'getObjContactName'
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
        $this->setIfExists('pkiEzmaxinvoicingcommissionID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxinvoicingsummaryglobalID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxpartnerID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxrepresentativeID', $data ?? [], null);
        $this->setIfExists('dtEzmaxinvoicingcommissionStart', $data ?? [], null);
        $this->setIfExists('dtEzmaxinvoicingcommissionEnd', $data ?? [], null);
        $this->setIfExists('iEzmaxinvoicingcommissionDays', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingcommissionAmount', $data ?? [], null);
        $this->setIfExists('objContactName', $data ?? [], null);
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

        if (!is_null($this->container['fkiEzmaxinvoicingsummaryglobalID']) && ($this->container['fkiEzmaxinvoicingsummaryglobalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxinvoicingsummaryglobalID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzmaxpartnerID']) && ($this->container['fkiEzmaxpartnerID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxpartnerID', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fkiEzmaxrepresentativeID']) && ($this->container['fkiEzmaxrepresentativeID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxrepresentativeID', must be bigger than or equal to 1.";
        }

        if ($this->container['dtEzmaxinvoicingcommissionStart'] === null) {
            $invalidProperties[] = "'dtEzmaxinvoicingcommissionStart' can't be null";
        }
        if ($this->container['dtEzmaxinvoicingcommissionEnd'] === null) {
            $invalidProperties[] = "'dtEzmaxinvoicingcommissionEnd' can't be null";
        }
        if ($this->container['iEzmaxinvoicingcommissionDays'] === null) {
            $invalidProperties[] = "'iEzmaxinvoicingcommissionDays' can't be null";
        }
        if (($this->container['iEzmaxinvoicingcommissionDays'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzmaxinvoicingcommissionDays', must be bigger than or equal to 0.";
        }

        if ($this->container['dEzmaxinvoicingcommissionAmount'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingcommissionAmount' can't be null";
        }
        if (!is_null($this->container['dEzmaxinvoicingcommissionAmount']) && !preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingcommissionAmount'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingcommissionAmount', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['objContactName'] === null) {
            $invalidProperties[] = "'objContactName' can't be null";
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
     * Gets pkiEzmaxinvoicingcommissionID
     *
     * @return int|null
     */
    public function getPkiEzmaxinvoicingcommissionID()
    {
        return $this->container['pkiEzmaxinvoicingcommissionID'];
    }

    /**
     * Sets pkiEzmaxinvoicingcommissionID
     *
     * @param int|null $pkiEzmaxinvoicingcommissionID The unique ID of the Ezmaxinvoicingcommission
     *
     * @return self
     */
    public function setPkiEzmaxinvoicingcommissionID($pkiEzmaxinvoicingcommissionID)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzmaxinvoicingcommissionID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicingcommissionID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzmaxinvoicingcommissionID'] = $pkiEzmaxinvoicingcommissionID;
        $this->container['pkiEzmaxinvoicingcommissionID'] = (is_null($pkiEzmaxinvoicingcommissionID) ? null : (int) $pkiEzmaxinvoicingcommissionID);

        return $this;
    }

    /**
     * Gets fkiEzmaxinvoicingsummaryglobalID
     *
     * @return int|null
     */
    public function getFkiEzmaxinvoicingsummaryglobalID()
    {
        return $this->container['fkiEzmaxinvoicingsummaryglobalID'];
    }

    /**
     * Sets fkiEzmaxinvoicingsummaryglobalID
     *
     * @param int|null $fkiEzmaxinvoicingsummaryglobalID The unique ID of the Ezmaxinvoicingsummaryglobal
     *
     * @return self
     */
    public function setFkiEzmaxinvoicingsummaryglobalID($fkiEzmaxinvoicingsummaryglobalID)
    {

        if (!is_null($fkiEzmaxinvoicingsummaryglobalID) && ($fkiEzmaxinvoicingsummaryglobalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxinvoicingsummaryglobalID when calling EzmaxinvoicingcommissionResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxinvoicingsummaryglobalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxinvoicingsummaryglobalID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxinvoicingsummaryglobalID'] = $fkiEzmaxinvoicingsummaryglobalID;
        $this->container['fkiEzmaxinvoicingsummaryglobalID'] = (is_null($fkiEzmaxinvoicingsummaryglobalID) ? null : (int) $fkiEzmaxinvoicingsummaryglobalID);

        return $this;
    }

    /**
     * Gets fkiEzmaxpartnerID
     *
     * @return int|null
     */
    public function getFkiEzmaxpartnerID()
    {
        return $this->container['fkiEzmaxpartnerID'];
    }

    /**
     * Sets fkiEzmaxpartnerID
     *
     * @param int|null $fkiEzmaxpartnerID The unique ID of the Ezmaxpartner
     *
     * @return self
     */
    public function setFkiEzmaxpartnerID($fkiEzmaxpartnerID)
    {

        if (!is_null($fkiEzmaxpartnerID) && ($fkiEzmaxpartnerID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxpartnerID when calling EzmaxinvoicingcommissionResponseCompound., must be bigger than or equal to 1.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxpartnerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxpartnerID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxpartnerID'] = $fkiEzmaxpartnerID;
        $this->container['fkiEzmaxpartnerID'] = (is_null($fkiEzmaxpartnerID) ? null : (int) $fkiEzmaxpartnerID);

        return $this;
    }

    /**
     * Gets fkiEzmaxrepresentativeID
     *
     * @return int|null
     */
    public function getFkiEzmaxrepresentativeID()
    {
        return $this->container['fkiEzmaxrepresentativeID'];
    }

    /**
     * Sets fkiEzmaxrepresentativeID
     *
     * @param int|null $fkiEzmaxrepresentativeID The unique ID of the Ezmaxrepresentative
     *
     * @return self
     */
    public function setFkiEzmaxrepresentativeID($fkiEzmaxrepresentativeID)
    {

        if (!is_null($fkiEzmaxrepresentativeID) && ($fkiEzmaxrepresentativeID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxrepresentativeID when calling EzmaxinvoicingcommissionResponseCompound., must be bigger than or equal to 1.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxrepresentativeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxrepresentativeID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxrepresentativeID'] = $fkiEzmaxrepresentativeID;
        $this->container['fkiEzmaxrepresentativeID'] = (is_null($fkiEzmaxrepresentativeID) ? null : (int) $fkiEzmaxrepresentativeID);

        return $this;
    }

    /**
     * Gets dtEzmaxinvoicingcommissionStart
     *
     * @return string
     */
    public function getDtEzmaxinvoicingcommissionStart()
    {
        return $this->container['dtEzmaxinvoicingcommissionStart'];
    }

    /**
     * Sets dtEzmaxinvoicingcommissionStart
     *
     * @param string $dtEzmaxinvoicingcommissionStart The start date for the Ezmaxinvoicingcommission
     *
     * @return self
     */
    public function setDtEzmaxinvoicingcommissionStart($dtEzmaxinvoicingcommissionStart)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzmaxinvoicingcommissionStart)) {
            //throw new \InvalidArgumentException('non-nullable dtEzmaxinvoicingcommissionStart cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzmaxinvoicingcommissionStart'] = $dtEzmaxinvoicingcommissionStart;
        $this->container['dtEzmaxinvoicingcommissionStart'] = (is_null($dtEzmaxinvoicingcommissionStart) ? null : (string) $dtEzmaxinvoicingcommissionStart);

        return $this;
    }

    /**
     * Gets dtEzmaxinvoicingcommissionEnd
     *
     * @return string
     */
    public function getDtEzmaxinvoicingcommissionEnd()
    {
        return $this->container['dtEzmaxinvoicingcommissionEnd'];
    }

    /**
     * Sets dtEzmaxinvoicingcommissionEnd
     *
     * @param string $dtEzmaxinvoicingcommissionEnd The end date for the Ezmaxinvoicingcommission
     *
     * @return self
     */
    public function setDtEzmaxinvoicingcommissionEnd($dtEzmaxinvoicingcommissionEnd)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dtEzmaxinvoicingcommissionEnd)) {
            //throw new \InvalidArgumentException('non-nullable dtEzmaxinvoicingcommissionEnd cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dtEzmaxinvoicingcommissionEnd'] = $dtEzmaxinvoicingcommissionEnd;
        $this->container['dtEzmaxinvoicingcommissionEnd'] = (is_null($dtEzmaxinvoicingcommissionEnd) ? null : (string) $dtEzmaxinvoicingcommissionEnd);

        return $this;
    }

    /**
     * Gets iEzmaxinvoicingcommissionDays
     *
     * @return int
     */
    public function getIEzmaxinvoicingcommissionDays()
    {
        return $this->container['iEzmaxinvoicingcommissionDays'];
    }

    /**
     * Sets iEzmaxinvoicingcommissionDays
     *
     * @param int $iEzmaxinvoicingcommissionDays This is the number of days during the month on which the Ezmaxinvoigcommission applies
     *
     * @return self
     */
    public function setIEzmaxinvoicingcommissionDays($iEzmaxinvoicingcommissionDays)
    {

        if (($iEzmaxinvoicingcommissionDays < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzmaxinvoicingcommissionDays when calling EzmaxinvoicingcommissionResponseCompound., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzmaxinvoicingcommissionDays)) {
            //throw new \InvalidArgumentException('non-nullable iEzmaxinvoicingcommissionDays cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzmaxinvoicingcommissionDays'] = $iEzmaxinvoicingcommissionDays;
        $this->container['iEzmaxinvoicingcommissionDays'] = (is_null($iEzmaxinvoicingcommissionDays) ? null : (int) $iEzmaxinvoicingcommissionDays);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingcommissionAmount
     *
     * @return string
     */
    public function getDEzmaxinvoicingcommissionAmount()
    {
        return $this->container['dEzmaxinvoicingcommissionAmount'];
    }

    /**
     * Sets dEzmaxinvoicingcommissionAmount
     *
     * @param string $dEzmaxinvoicingcommissionAmount The amount of Ezmaxinvoicingcommission
     *
     * @return self
     */
    public function setDEzmaxinvoicingcommissionAmount($dEzmaxinvoicingcommissionAmount)
    {

        if (!is_null($dEzmaxinvoicingcommissionAmount) && (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingcommissionAmount))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingcommissionAmount when calling EzmaxinvoicingcommissionResponseCompound., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingcommissionAmount)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingcommissionAmount cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingcommissionAmount'] = $dEzmaxinvoicingcommissionAmount;
        $this->container['dEzmaxinvoicingcommissionAmount'] = (is_null($dEzmaxinvoicingcommissionAmount) ? null : (string) $dEzmaxinvoicingcommissionAmount);

        return $this;
    }

    /**
     * Gets objContactName
     *
     * @return \eZmaxAPI\Model\CustomContactNameResponse
     */
    public function getObjContactName()
    {
        return $this->container['objContactName'];
    }

    /**
     * Sets objContactName
     *
     * @param \eZmaxAPI\Model\CustomContactNameResponse $objContactName objContactName
     *
     * @return self
     */
    public function setObjContactName($objContactName)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objContactName)) {
            //throw new \InvalidArgumentException('non-nullable objContactName cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objContactName'] = $objContactName;
        $this->container['objContactName'] = $objContactName;

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


